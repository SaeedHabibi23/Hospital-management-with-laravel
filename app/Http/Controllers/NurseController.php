<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nurses;
use App\Models\Rooms;
use Illuminate\Support\Facades\Crypt;

class NurseController extends Controller
{
    public function showNurses(){
        $Nurses = Nurses::join('rooms' , 'rooms.room_id' , 'nurses.room_id')->get();
        $Rooms = Rooms::all();
        $data = [
            'Nurses' => $Nurses , 
            'Rooms' =>$Rooms
        ];
        return view('dashboards.admins.Nurses.showNurses' , compact('data'));
    }
    public function saveNurse(Request $request){
        $request->validate([
            'nurse_name' => 'required',
            'murse_salary' => 'required',
            'nurse_shift' => 'required',
            'nurse_phone' => 'required|min:10|max:10',
            'nurse_address' => 'required',
       ]);

        $Nurses = new Nurses();
        $Nurses->nurse_name = request('nurse_name');
        $Nurses->murse_salary = request('murse_salary');
        $Nurses->nurse_shift = request('nurse_shift');
        $Nurses->nurse_phone = request('nurse_phone');
        $Nurses->nurse_address = request('nurse_address');
        $Nurses->room_id = request('room_id');
        $Nurses->save();
        return redirect()->back()->with('status' , 'Nurse Saved Successfully');
    }
    public function editNurse($nurse_id){
        $decrypted = Crypt::decryptString($nurse_id);
        $Nurses = Nurses::join('rooms' , 'rooms.room_id' , 'nurses.room_id')
        ->where('nurse_id' , '=' , $decrypted)->first();
        $Rooms = Rooms::all();
        $data = [
            'Nurses' => $Nurses , 
            'Rooms' =>$Rooms
        ];
        return view('dashboards.admins.Nurses.editNurses' , compact('data'));
    }
    public function saveeditNurse(Request $request){
        $Nurses = Nurses::where('nurse_id' , '=' , $request->nurse_id)->first();
        $Nurses->nurse_name = request('nurse_name');
        $Nurses->murse_salary = request('murse_salary');
        $Nurses->nurse_shift = request('nurse_shift');
        $Nurses->nurse_phone = request('nurse_phone');
        $Nurses->nurse_address = request('nurse_address');
        $Nurses->room_id = request('room_id');
        $Nurses->save();
        return redirect(route('admin.showNurses'))->with('status' , 'Edit Worked Successfully');

    }
    public function deleteNurse($nurse_id){
        $decrypted = Crypt::decryptString($nurse_id);
        $Nurses = Nurses::where('nurse_id' , '=' , $decrypted)->first();
        $Nurses->delete();
        return redirect(route('admin.showNurses'))->with('status' , 'Delete Worked Successfully');
    
    }

}

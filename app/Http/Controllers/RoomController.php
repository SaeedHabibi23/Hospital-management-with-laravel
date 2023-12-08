<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;
use Illuminate\Support\Facades\Crypt;

class RoomController extends Controller
{
    public function showRooms(){
        $Rooms = Rooms::all();
        return view('dashboards.admins.Rooms.showRooms' , compact('Rooms'));
    }
    public function saveRooms(Request $request){
        $request->validate([
            'roomnumber' => 'required',
            'state' => 'required',
      
       ]);

        $Rooms = new Rooms();
        $Rooms->roomnumber = request('roomnumber');
        $Rooms->state = request('state');
        $Rooms->save();
        return redirect()->back()->with('status' , 'Room Saved Successfully');

    }
    public function editRooms($room_id){
        $decrypted = Crypt::decryptString($room_id);
        $Rooms = Rooms::where('room_id' , '=' , $decrypted)->first();
        return view('dashboards.admins.Rooms.editRooms' , compact('Rooms'));
    }
    public function saveeditrooms(Request $request){
        $Rooms = Rooms::where('room_id' , '=' , $request->room_id)->first();
        $Rooms->roomnumber = request('roomnumber');
        $Rooms->state = request('state');
        $Rooms->save();
        return redirect(route('admin.showRooms'))->with('status' , 'Edit Worked Successfully');

    }
    public function deleteRooms($room_id){
        $decrypted = Crypt::decryptString($room_id);
        $Rooms = Rooms::where('room_id' , '=' , $decrypted)->first();
        $Rooms->delete();
        return redirect(route('admin.showRooms'))->with('status' , 'Delete Worked Successfully');

}}

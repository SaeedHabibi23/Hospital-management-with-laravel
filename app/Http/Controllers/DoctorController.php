<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;
use Illuminate\Support\Facades\Crypt;

class DoctorController extends Controller
{
    public function showDoctors(){
        $Doctors = Doctors::all();
        return view('dashboards.admins.Doctors.showDoctors' , compact('Doctors'));
    }
    public function savedoctor(Request $request){
        $request->validate([
            'DoctorName' => 'required',
            'DoctorEmail' => 'required',
            'SpecialistType' => 'required',
            'Doctorphonenumber' => 'required|min:10|max:10',
            'Doctoraddress' => 'required',
       ]);

        $Doctors = new Doctors();
        $Doctors->DoctorName = request('DoctorName');
        $Doctors->DoctorEmail = request('DoctorEmail');
        $Doctors->SpecialistType = request('SpecialistType');
        $Doctors->Doctorphonenumber = request('Doctorphonenumber');
        $Doctors->Doctoraddress = request('Doctoraddress');
        $Doctors->save();
        return redirect()->back()->with('status' , 'مشخصات داکتر موفقانه دخیره شد');

    }
    public function editdoctor($doctor_id){
        $decrypted = Crypt::decryptString($doctor_id);
        $Doctors = Doctors::where('doctor_id' , '=' , $decrypted)->first();
        return view('dashboards.admins.Doctors.editDoctors' , compact('Doctors'));
    }
    public function deletedoctor($doctor_id){
        $decrypted = Crypt::decryptString($doctor_id);
        $Doctors = Doctors::where('doctor_id' , '=' , $decrypted)->first();
        $Doctors->delete();
        return redirect(route('admin.showDoctors'))->with('status' , 'عملیه حذف شدن بصورت موفقانه انجام شد');
    
    }   
}

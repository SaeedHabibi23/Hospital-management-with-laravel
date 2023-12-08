<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use Illuminate\Support\Facades\Crypt;

class PatientController extends Controller
{
    public function showpattients(){
        $Patients = Patients::all();
        return view('dashboards.admins.Patients.showPatients' , compact('Patients'));
    }
    public function savePatients(Request $request){
        $request->validate([
            'patientName' => 'required',
            'dises_type' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'address' => 'required',
       ]);

        $Patients = new Patients();
        $Patients->patientName = request('patientName');
        $Patients->dises_type = request('dises_type');
        $Patients->phone = request('phone');
        $Patients->gender = request('gender');
        $Patients->age = request('age');
        $Patients->address = request('address');
        $Patients->save();
        return redirect()->back()->with('status' , 'Pattient Saved Successfully');

    }
    public function editPatients($patient_id){
        $decrypted = Crypt::decryptString($patient_id);
        $Patients = Patients::where('patient_id' , '=' , $decrypted)->first();
        return view('dashboards.admins.Patients.editPatients' , compact('Patients'));
    }
    public function saveeditPatient(Request $request){
        $Patients = Patients::where('patient_id' , '=' , $request->patient_id)->first();
        $Patients->patientName = request('patientName');
        $Patients->dises_type = request('dises_type');
        $Patients->phone = request('phone');
        $Patients->gender = request('gender');
        $Patients->age = request('age');
        $Patients->address = request('address');
        $Patients->save();
        return redirect(route('admin.showpattients'))->with('status' , 'Edit Worked Successfully');

    }
    public function deletePatients($patient_id){
        $decrypted = Crypt::decryptString($patient_id);
        $Patients = Patients::where('patient_id' , '=' , $decrypted)->first();
        $Patients->delete();
        return redirect(route('admin.showpattients'))->with('status' , 'Delete Worked Successfully');
    
    }
    public function viewprofilepatint($patient_id){
        $decrypted = Crypt::decryptString($patient_id);
        $Patients = Patients::where('patient_id' , '=' , $decrypted)->first();
        return view('dashboards.admins.Patients.viewprofilepatint' , compact('Patients'));
    }
    public function addperscription($patient_id){
        $decrypted = Crypt::decryptString($patient_id);
        $Patients = Patients::where('patient_id' , '=' , $decrypted)->first();

        return view('dashboards.admins.Patients.addperscription' , compact('Patients'));
    }

}

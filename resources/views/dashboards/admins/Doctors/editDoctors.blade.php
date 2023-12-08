@extends('layout.main')

        @section('content')

            <div class="main-content">
                <div class="container-fluid">
                    <div class="section title-section">
                        <h5 class="page-title"></h5>
                    </div>
                    <div class="section specialists-table-view">
                        <form action="{{route('admin.saveeditdoctor')}}" method="post">
                        <input name="doctor_id"  type="hidden" class="form-control" value="{{$Doctors->doctor_id}}">
                        @csrf
                            <div class="row">
                              
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Doctor Name</label>
                                    <input name="DoctorName"  type="text" class="form-control" value="{{$Doctors->DoctorName}}">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Doctor Email</label>
                                    <input name="DoctorEmail"  type="text" class="form-control" value="{{$Doctors->DoctorEmail}}">
                                </div>
                               
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Doctor PhoneNumber</label>
                                    <input name="Doctorphonenumber"  type="text" class="form-control" value="{{$Doctors->Doctorphonenumber}}">
                                </div>
                               
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Doctor SpecialistType</label>
                                    <input name="SpecialistType"  type="text" class="form-control" value="{{$Doctors->SpecialistType}}">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="name">Doctor Address </label>
                                    <input name="Doctoraddress"  type="text" class="form-control" value="{{$Doctors->Doctoraddress}}">
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <input  type="submit" class ="btn btn-success" placeholder="Herat">
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
         


                @endsection
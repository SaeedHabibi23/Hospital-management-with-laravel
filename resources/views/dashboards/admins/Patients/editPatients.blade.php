@extends('layout.main')

        @section('content')

            <div class="main-content">
                <div class="container-fluid">
                    <div class="section title-section">
                        <h5 class="page-title"></h5>
                    </div>
                    <div class="section specialists-table-view">
                        <form action="{{route('admin.saveeditPatient')}}" method="post">
                        <input name="patient_id"  type="hidden" class="form-control" value="{{$Patients->patient_id}}">
                        @csrf
                            <div class="row">
                              
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Patient Name</label>
                                    <input name="patientName"  type="text" class="form-control" value="{{$Patients->patientName}}">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Patient dises_type</label>
                                    <input name="dises_type"  type="text" class="form-control" value="{{$Patients->dises_type}}">
                                </div>
                               
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Patient PhoneNumber</label>
                                    <input name="phone"  type="text" class="form-control" value="{{$Patients->phone}}">
                                </div>
                               
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Patient gender</label>
                                    <input name="gender"  type="text" class="form-control" value="{{$Patients->gender}}">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Patient age</label>
                                    <input name="age"  type="text" class="form-control" value="{{$Patients->age}}">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Patient Address </label>
                                    <input name="address"  type="text" class="form-control" value="{{$Patients->address}}">
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <input  type="submit" class ="btn btn-success" placeholder="Herat">
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
         


                @endsection
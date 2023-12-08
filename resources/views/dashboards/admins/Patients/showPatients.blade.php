
@extends('layout.main')

        @section('content')


<div class="main-content">
                <div class="container-fluid">
                <div class="row">
                    @if(session('status'))
                        <div class="alert alert-success col-12" rol="alert" id="CanceldText" style="display:flex; justify-content: space-between;">
                            {{session('status')}}
                            <button class="btn-close me-auto btn btn-danger" onclick="CancelFunction()" id="CancelAlert" type="button" data-bs-dismiss="alert"> X </button>
                        </div>
                      
                        @elseif(session('error'))
                        <div class="alert alert-danger text-center" rol="alert">
                            {{session('error')}}
                        </div>
                        @endif
                        </div>
                    </div>
                    <div class="section title-section">
                        <h5 class="page-title"></h5>
                    </div>
                    <div class="section filters-section justify-content-between">
                        <div class="buttons-wrapper">
                            <button class="btn btn-dark-red-f-gr button" class="" data-toggle="modal" data-target="#myModal">
                                <i class="las la-plus-circle"></i>add a new Patient
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Add a Patients</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="{{route('admin.savePatients')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Patients Name</label>
                                                    <input name="patientName" type="text" class="form-control" placeholder="Ahmad">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Patients dises_type</label>
                                                    <input name="dises_type" type="text" class="form-control" placeholder="GoloDard">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Patients phone</label>
                                                    <input name="phone"  type="text" class="form-control" placeholder="0789988998">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Patients  gender</label>
                                                    <input name="gender"  type="text" class="form-control" placeholder="Man">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Patients age</label>
                                                    <input name="age"  type="text" class="form-control" placeholder="23">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Patients address</label>
                                                    <input name="address"  type="text" class="form-control" placeholder="Herat">
                                                </div>
                                              
                                                <div class="col-lg-6 mb-3">
                                                    <input type="submit" class="btn btn-success" value="save">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                    <button type="button" style="border-radius: 10px;" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section specialists-table-view">
                        <table class="table table-hover table-responsive-lg">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>dises_type</th>
                                    <th>phone</th>
                                    <th>gender</th>
                                    <th>age</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                    <th>profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Patients as $Patients)
                                <tr>
                                <td class="text-muted">{{$Patients->patientName}}</td>
                                    <td class="text-muted">{{$Patients->dises_type}}</td>
                                    <td>{{$Patients->phone}}</td>
                                    <td class="text-lowercase text-muted">
                                    {{$Patients->gender}}
                                    </td>
                                    <td class="text-lowercase text-muted">
                                    {{$Patients->age}}
                                    </td>
                                    <td>{{$Patients->address}}</td>
                                    <td class="d-flex justify-content-center align-items-center" >
                                    <form action="{{ route('admin.deletePatients' , Crypt::encryptString($Patients->patient_id))}}" method="post"
                                      onsubmit="return confirm('آیا مطمین هستید میخواهید حذف کنید')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn mr-3 mt-2 btn-danger">
                                            delete

                                    </button>
                                      </form>

                                      <form action="{{ route('admin.editPatients' , Crypt::encryptString($Patients->patient_id))}}" method="post">
                                          @csrf
                                          <button class="btn mt-2  btn btn-success">
                                            edit
                                      </button>
                                      </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.viewprofilepatint' , Crypt::encryptString($Patients->patient_id))}}" class="btn btn-info mt-1"> view profile </a>
                                    </td>
                                </tr>
                               @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                 
                </div>
             @endsection
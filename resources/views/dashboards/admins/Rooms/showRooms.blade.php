
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
                                <i class="las la-plus-circle"></i>add a new Room
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Add a Rooms</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="{{route('admin.saveRooms')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Rooms Number</label>
                                                    <input name="roomnumber" type="number" class="form-control" placeholder="10">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Rooms State</label>
                                                    <input name="state" type="text" class="form-control" placeholder="full">
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
                                    <th>RoomNumber</th>
                                    <th>State</th>
                                   
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Rooms as $Rooms)
                                <tr>
                                <td class="text-muted">{{$Rooms->roomnumber}}</td>
                                    <td class="text-muted">{{$Rooms->state}}</td>
                                   
                                    <td class="d-flex justify-content-center align-items-center" >
                                    <form action="{{ route('admin.deleteRooms' , Crypt::encryptString($Rooms->room_id))}}" method="post"
                                      onsubmit="return confirm('آیا مطمین هستید میخواهید حذف کنید')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn mr-3 mt-2 btn-danger">
                                            delete

                                    </button>
                                      </form>

                                      <form action="{{ route('admin.editRooms' , Crypt::encryptString($Rooms->room_id))}}" method="post">
                                          @csrf
                                          <button class="btn mt-2  btn btn-success">
                                            edit
                                      </button>
                                      </form>
                                    </td>
                                </tr>
                               @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                 
                </div>
             @endsection
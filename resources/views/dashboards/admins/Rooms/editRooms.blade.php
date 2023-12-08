@extends('layout.main')

        @section('content')

            <div class="main-content">
                <div class="container-fluid">
                    <div class="section title-section">
                        <h5 class="page-title"></h5>
                    </div>
                    <div class="section specialists-table-view">
                        <form action="{{route('admin.saveeditrooms')}}" method="post">
                        <input name="room_id"  type="hidden" class="form-control" value="{{$Rooms->room_id}}">
                        @csrf
                            <div class="row">
                              
                                <div class="col-lg-6 mb-3">
                                    <label for="name"> RoomNumber </label>
                                    <input name="roomnumber"  type="text" class="form-control" value="{{$Rooms->roomnumber}}">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="name"> RoomState </label>
                                    <input name="state"  type="text" class="form-control" value="{{$Rooms->state}}">
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <input  type="submit" class ="btn btn-success" placeholder="Herat">
                                </div>
                                
                            </div>
                        </form>
                    </div>
                   
                </div>
         


                @endsection
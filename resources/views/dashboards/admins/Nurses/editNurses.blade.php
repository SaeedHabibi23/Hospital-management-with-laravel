@extends('layout.main')

        @section('content')

            <div class="main-content">
                <div class="container-fluid">
                    <div class="section title-section">
                        <h5 class="page-title"></h5>
                    </div>
                    <div class="section specialists-table-view">
                        <form action="{{route('admin.saveeditNurse')}}" method="post">
                        <input name="nurse_id"  type="hidden" class="form-control" value="{{$data['Nurses']->nurse_id}}">
                        @csrf
                            <div class="row">
                              
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Nurse Name</label>
                                    <input name="nurse_name"  type="text" class="form-control" value="{{$data['Nurses']->nurse_name}}">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="name"> Nurse Salary </label>
                                    <input name="murse_salary"  type="text" class="form-control" value="{{$data['Nurses']->murse_salary}}">
                                </div>
                               
                                <div class="col-lg-6 mb-3">
                                    <label for="name"> Nurse Shift </label>
                                    <input name="nurse_shift"  type="text" class="form-control" value="{{$data['Nurses']->nurse_shift}}">
                                </div>
                               
                                <div class="col-lg-6 mb-3">
                                    <label for="name"> Nurse Phone </label>
                                    <input name="nurse_phone"  type="text" class="form-control" value="{{$data['Nurses']->nurse_phone}}">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Nurse Room</label>
                                    <select class="form-control" name="room_id">
                                        @foreach($data['Rooms'] as $Rooms) 
                                        <option @if($data['Nurses']->room_id == $Rooms->room_id) selected @endif
                                        value="{{$Rooms->room_id}}"> {{$Rooms->roomnumber}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="name">Doctor Address </label>
                                    <input name="nurse_address"  type="text" class="form-control" value="{{$data['Nurses']->nurse_address}}">
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <input  type="submit" class ="btn btn-success" placeholder="Herat">
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
         


                @endsection
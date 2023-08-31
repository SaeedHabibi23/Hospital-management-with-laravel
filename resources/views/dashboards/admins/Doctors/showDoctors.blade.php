
@extends('layout.main')

        @section('content')


<div class="main-content">
                <div class="container-fluid">
                    <div class="section title-section">
                        <h5 class="page-title"></h5>
                    </div>
                    <div class="section filters-section justify-content-between">
                        <div class="buttons-wrapper">
                            <button class="btn btn-dark-red-f-gr button" class="" data-toggle="modal" data-target="#myModal">
                                <i class="las la-plus-circle"></i>add a new specialist
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Add a Doctor</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="{{route('admin.savedoctor')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Doctor Name</label>
                                                    <input name="DoctorName" type="text" class="form-control" placeholder="Ahmad">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Doctor Email</label>
                                                    <input name="DoctorEmail" type="email" class="form-control" placeholder="Ahmad@gmail.com">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Doctor SpecialistType</label>
                                                    <input name="SpecialistType"  type="text" class="form-control" placeholder="Dentist">
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="name">Doctor Phone Number</label>
                                                    <input name="Doctorphonenumber"  type="text" class="form-control" placeholder="0789988998">
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <label for="name">Doctor Address</label>
                                                    <input name="Doctoraddress"  type="text" class="form-control" placeholder="Herat">
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
                                    <th>Email</th>
                                    <th>SpecialistType</th>
                                    <th>PhoneNumber</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Doctors as $Doctor)
                                <tr>
                                <td class="text-muted">{{$Doctor->DoctorName}}</td>
                                    <td class="text-muted">{{$Doctor->DoctorEmail}}</td>
                                    <td>{{$Doctor->SpecialistType}}</td>
                                    <td class="text-lowercase text-muted">
                                    {{$Doctor->Doctorphonenumber}}
                                    </td>
                                    <td>{{$Doctor->Doctoraddress}}</td>
                                    <td class="d-flex justify-content-center align-items-center" >
                                    <form action="{{ route('admin.deletedoctor' , Crypt::encryptString($Doctor->doctor_id))}}" method="post"
                                      onsubmit="return confirm('آیا مطمین هستید میخواهید حذف کنید')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn mr-3 mt-2 btn-danger">
                                            delete

                                    </button>
                                      </form>

                                      <form action="{{ route('admin.editdoctor' , Crypt::encryptString($Doctor->doctor_id))}}" method="post">
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
                    <div class="modal onboarding-modal" tabindex="=1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Welcome</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="las la-times-circle"></i></button>
                                </div>
                                <div class="modal-body">
                                    <div class="carousel slide" id="carouselExampleCaptions" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block" src="../SiteAssets/images/undraw_dashboard_nklg.svg" alt="..."/>
                                                <div class="carousel-caption d-md-block">
                                                    <p>intuitive<a href="" data-dismiss="modal">dashboard<i class="las la-external-link-alt"></i></a></p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" src="../SiteAssets/images/undraw_medicine_b1ol.svg" alt="..."/>
                                                <div class="carousel-caption d-md-block">
                                                    <p>access to<a href="specialists.html">specialists<i class="las la-external-link-alt"></i></a></p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" src="../SiteAssets/images/undraw_receipt_ecdd.svg" alt="..."/>
                                                <div class="carousel-caption d-md-block">
                                                    <p>simple<a href="procurement.html">procurement<i class="las la-external-link-alt"></i></a>process</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" src="../SiteAssets/images/undraw_new_notifications_fhvw.svg" alt="..."/>
                                                <div class="carousel-caption d-md-block">
                                                    <p>comprehensive<a href="notifications.html">notification<i class="las la-external-link-alt"></i></a>center</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" src="../SiteAssets/images/undraw_Preferences_re_49in.svg" alt="..."/>
                                                <div class="carousel-caption d-md-block">
                                                    <p>minimalist<a href="settings.html">settings<i class="las la-external-link-alt"></i></a>center</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                            <i class="las la-chevron-circle-left"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                            <i class="las la-chevron-circle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             @endsection
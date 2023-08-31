@extends('layout.main')

        @section('content')
<div class="main-content">
                <div class="container-fluid">
                    <div class="section">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="page-title"></h5>
                            </div>
                        </div>
                    </div>
                    <div class="section welcome-section">
                        <div class="section-content">
                            <div class="card-deck">
                                <div class="card welcome-content-card" style="border-radius: 10px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 welcome-text-wrapper align-self-center">
                                                <h5>hello, dr. john doe</h5>
                                                <p>Welcome to your dashboard</p>
                                            </div>
                                            <div class="col-md-6 welcome-img-wrapper">
                                                <img src="../SiteAssets/images/hello.svg"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card app-stats-card" style="border-radius: 10px;">
                                    <div class="card-body">
                                        <div class="row text-center">
                                            <div class="col-md-3">
                                                <i class="las la-user-injured la-3x align-self-center"></i>
                                                <p>total patients</p>
                                                <h4>
                                                    <a href="">2,301</a>
                                                </h4>
                                            </div>
                                            <div class="col-md-3">
                                                <i class="las la-user-md la-3x align-self-center"></i>
                                                <p>total doctors</p>
                                                <h4>
                                                    <a href="">401</a>
                                                </h4>
                                            </div>
                                            <div class="col-md-3">
                                                <i class="las la-clinic-medical la-3x align-self-center"></i>
                                                <p>total Nurses</p>
                                                <h4>
                                                    <a href="">2</a>
                                                </h4>
                                            </div>
                                            <div class="col-md-3">
                                                <i class="las la-clinic-medical la-3x align-self-center"></i>
                                                <p>total Drags</p>
                                                <h4>
                                                    <a href="">201</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section functionality-section">
                        <div class="section-content">
                            <div class="card-deck">
                                <a class="card text-center" href="specialists.html" style="border-radius: 10px;">
                                    <div class="card-title">
                                        <div class="icon-wrapper">
                                            <i class="las la-clinic-medical"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>add a specialist</p>
                                    </div>
                                </a>
                                <a class="card text-center" href="patients.html" style="border-radius: 10px;">
                                    <div class="card-title">
                                        <div class="icon-wrapper">
                                            <i class="las la-user-md"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>add a patient</p>
                                    </div>
                                </a>
                                <a class="card text-center" href="nurses.html" style="border-radius: 10px;">
                                    <div class="card-title">
                                        <div class="icon-wrapper">
                                            <i class="las la-user-plus"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>add a Nurse</p>
                                    </div>
                                </a>
                                <a class="card text-center" href="appiontment.html" style="border-radius: 10px;">
                                    <div class="card-title">
                                        <div class="icon-wrapper">
                                            <i class="las la-user-lock"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Make Appointment</p>
                                    </div>
                                </a>
                                <a class="card text-center" href="drags.html" style="border-radius: 10px;">
                                    <div class="card-title">
                                        <div class="icon-wrapper">
                                            <i class="las la-plus-circle"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>add a Drag</p>
                                    </div>
                                </a>
                            </div>
                        </div>
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
                                                    <p>view<a href="patients.html">patients<i class="las la-external-link-alt"></i></a>process</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" src="../SiteAssets/images/undraw_new_notifications_fhvw.svg" alt="..."/>
                                                <div class="carousel-caption d-md-block">
                                                    <p>view<a href="appiontment.html">Appointments<i class="las la-external-link-alt"></i></a>Part</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" src="../SiteAssets/images/undraw_Preferences_re_49in.svg" alt="..."/>
                                                <div class="carousel-caption d-md-block">
                                                    <p>view<a href="drags.html">Drag<i class="las la-external-link-alt"></i></a>center</p>
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
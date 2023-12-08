


@extends('layout.main')

        @section('content')




<div class="main-content">
            <div class="container-fluid">
                <div class="section row title-section">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="patients.html">patients</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ahmad Ahmadi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="section patient-details-section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mini-card text-center">
                                                    <div class="card-header"><img class="rounded-circle"
                                                            src="../SiteAssets/images/photo_2023-09-26_15-58-42.jpg" loading="lazy" /></div>
                                                    <div class="card-body">
                                                        <h4>Ahmad Ahmadi</h4><small
                                                            class="text-muted">Ahmad@gmail.com</small>
                                                        <h5>age</h5>
                                                        <p>26</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 patients-details-card-wrapper">
                                                <div class="mini-card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label>gender</label><input
                                                                        class="form-control" readonly="readonly"
                                                                        value="male" /></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label>date of
                                                                        birth</label><input class="form-control"
                                                                        readonly="readonly" value="27/10/2000" /></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label>phone
                                                                        number</label><input class="form-control"
                                                                        readonly="readonly" value="(+93)788092965 " />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label>address</label><input
                                                                        class="form-control" readonly="readonly"
                                                                        value="7th Herat" /></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label>city</label><input
                                                                        class="form-control" readonly="readonly"
                                                                        value="Herat" /></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label>zip code</label><input
                                                                        class="form-control" readonly="readonly"
                                                                        value="9999" /></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label>member
                                                                        status</label><input class="form-control"
                                                                        readonly="readonly" value="active" /></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label>registered
                                                                        date</label><input class="form-control"
                                                                        readonly="readonly" value="21/02/2023" /></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist" style="display: flex;justify-content: space-between;">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="upcoming-appointments-tab" data-toggle="tab" href="#upcoming-appointments" role="tab" aria-controls="upcoming-appointments" aria-selected="true">Medical Record</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.addperscription' , Crypt::encryptString($Patients->patient_id))}}" style="text-decoration: none;background: linear-gradient(to right, #244cfd, #15e4fd);padding: .7em .5em;border-radius: 5px; color: #fff;">New Pres....</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="upcoming-appointments"
                                                    role="tabpanel" aria-labelledby="upcoming-appointments-tab">
                                                    <div class="media">
                                                        <div class="align-self-center">
                                                            <p>tue</p>
                                                            <h3>05</h3>
                                                            <p>2023</p>
                                                        </div>
                                                        <div class="media-body" style="margin: auto auto;">
                                                            <div class="row">
                                                                <label class="label-blue-bl">Ahmad</label>
                                                                <p>with Dr. Ahmadi</p>
                                                                <p><i class="las la-clock"></i>13.30 - 14.15</p>
                                                                <p><i class="las la-clock"></i>12/4/2023</p>
                                                                <label class="label-cream label-sm" style="background: linear-gradient(to right, #244cfd, #15e4fd);">
                                                                    <a href="prescription template/index.html" style="text-decoration: none;color: #fff;">prescription</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="align-self-center mr-3">
                                                            <p>wed</p>
                                                            <h3>06</h3>
                                                            <p>2020</p>
                                                        </div>
                                                        <div class="media-body" style="margin: auto auto;">
                                                            <div class="row">
                                                                <label class="label-blue-bl">Ahmad</label>
                                                                <p>with Dr. Ahmadi</p>
                                                                <p><i class="las la-clock"></i>13.30 - 14.15</p>
                                                                <p><i class="las la-clock"></i>12/4/2023</p>
                                                                <label class="label-cream label-sm" style="background: linear-gradient(to right, #244cfd, #15e4fd);">
                                                                    <a href="#" style="text-decoration: none;color: #fff;">prescription</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="align-self-center">
                                                            <p>sat</p>
                                                            <h3>12</h3>
                                                            <p>2023</p>
                                                        </div>
                                                        <div class="media-body" style="margin: auto auto;">
                                                            <div class="row">
                                                                <label class="label-blue-bl">Ahmad</label>
                                                                <p>with Dr. Ahmadi</p>
                                                                <p><i class="las la-clock"></i>13.30 - 14.15</p>
                                                                <p><i class="las la-clock"></i>12/4/2023</p>
                                                                <label class="label-cream label-sm" style="background: linear-gradient(to right, #244cfd, #15e4fd);">
                                                                    <a href="#" style="text-decoration: none;color: #fff;">prescription</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="align-self-center mr-3">
                                                            <p>thur</p>
                                                            <h3>03</h3>
                                                            <p>2023</p>
                                                        </div>
                                                        <div class="media-body" style="margin: auto auto;">
                                                            <div class="row">
                                                                <label class="label-blue-bl">Ahmad</label>
                                                                <p>with Dr. Ahmadi</p>
                                                                <p><i class="las la-clock"></i>13.30 - 14.15</p>
                                                                <p><i class="las la-clock"></i>12/4/2023</p>
                                                                <label class="label-cream label-sm" style="background: linear-gradient(to right, #244cfd, #15e4fd);">
                                                                    <a href="#" style="text-decoration: none;color: #fff;">prescription</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="past-appointments" role="tabpanel"
                                                    aria-labelledby="past-appointments-tab">...</div>
                                                <div class="tab-pane fade" id="medical-records" role="tabpanel"
                                                    aria-labelledby="medical-records-tab">...</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal onboarding-modal" tabindex="=1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Welcome</h5><button class="close" type="button"
                                    data-dismiss="modal" aria-label="Close"><i class="las la-times-circle"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="carousel slide" id="carouselExampleCaptions" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active"><img class="d-block"
                                                src="../SiteAssets/images/undraw_dashboard_nklg.svg" alt="..." />
                                            <div class="carousel-caption d-md-block">
                                                <p>intuitive<a href="" data-dismiss="modal">dashboard<i
                                                            class="las la-external-link-alt"></i></a></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"><img class="d-block"
                                                src="../SiteAssets/images/undraw_medicine_b1ol.svg" alt="..." />
                                            <div class="carousel-caption d-md-block">
                                                <p>access to<a href="specialists.html">specialists<i
                                                            class="las la-external-link-alt"></i></a></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"><img class="d-block"
                                                src="../SiteAssets/images/undraw_receipt_ecdd.svg" alt="..." />
                                            <div class="carousel-caption d-md-block">
                                                <p>simple<a href="procurement.html">procurement<i
                                                            class="las la-external-link-alt"></i></a>process</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"><img class="d-block"
                                                src="../SiteAssets/images/undraw_new_notifications_fhvw.svg"
                                                alt="..." />
                                            <div class="carousel-caption d-md-block">
                                                <p>comprehensive<a href="notifications.html">notification<i
                                                            class="las la-external-link-alt"></i></a>center</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item"><img class="d-block"
                                                src="../SiteAssets/images/undraw_Preferences_re_49in.svg" alt="..." />
                                            <div class="carousel-caption d-md-block">
                                                <p>minimalist<a href="settings.html">settings<i
                                                            class="las la-external-link-alt"></i></a>center</p>
                                            </div>
                                        </div>
                                    </div><a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                        data-slide="prev"><i class="las la-chevron-circle-left"></i><span
                                            class="sr-only">Previous</span></a><a class="carousel-control-next"
                                        href="#carouselExampleCaptions" role="button" data-slide="next"><i
                                            class="las la-chevron-circle-right"></i><span
                                            class="sr-only">Next</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @endsection
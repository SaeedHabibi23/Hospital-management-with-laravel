
<main>
            <div class="side-nav">
                <ul class="list-group list-group-flush">
                    <a class="list-group-item" href="dashboard.html" data-toggle="tooltip" data-placement="bottom" title="Dashboard">
                        <i class="las la-shapes la-lw"></i>
                        <span>Home</span>
                    </a>
                    <a class="list-group-item" href="patients.html" data-toggle="tooltip" data-placement="bottom" title="Patients">
                        <i class="las la-user-injured la-lw"></i>
                        <span>patients</span>
                    </a>
                    <a class="list-group-item" href="{{route('admin.showDoctors')}}" data-toggle="tooltip" data-placement="bottom" title="Specialists">
                        <i class="las la-clinic-medical la-lw"></i>
                        <span>Doctors</span>
                    </a>
                    <a class="list-group-item" href="nurses.html" data-toggle="tooltip" data-placement="bottom" title="Procurement">
                        <i class="las la-shopping-cart la-lw"></i>
                        <span>Nurses</span>
                    </a>
                    <a class="list-group-item" href="appiontment.html" data-toggle="tooltip" data-placement="bottom" title="Notifications">
                        <i class="las la-sms la-lw"></i>
                        <span>Appointment</span>
                    </a>
                    <a class="list-group-item" href="drags.html" data-toggle="tooltip" data-placement="bottom" title="Settings">
                        <i class="las la-cogs la-lw"></i>
                        <span>Drags</span>
                    </a>
                    <hr class="divider"/>
                    <div class="aob-items">
                        <div class="card">
                            <div class="card-header">
                                <img src="{{ asset('../SiteAssets/images/favicon.png') }}"/>
                            </div>
                            <div class="card-body">
                                <p>patients -
                                    <u>43,341,451</u>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-dark-red-f-gr btn-sm" href="patients.html" target="_blank">view all patients</a>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="stylesheet" href="{{ asset('SiteAssets/css/vendors/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('SiteAssets/css/vendors/line-awesome.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('SiteAssets/css/pages/layout.css') }}"/>
        <link rel="icon" href="{{ asset('SiteAssets/images/favicon.png') }}"/>
        <link rel="stylesheet" href="{{ asset('SiteAssets/css/pages/dashboard.css') }}"/>
        <link rel="stylesheet" href="{{ asset('SiteAssets/css/vendors/Chart.min.css') }}"/>
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg shadow-sm fixed-top">
                <a class="navbar-brand" href="">
                    <img src="{{ asset('../SiteAssets/images/favicon.png') }}"/>
                    <span>ArtaAfghan</span>
                </a>
                <div class="navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="las la-question-circle"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropleft">
                            <a class="nav-link notification-dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-pill badge-primary" style="float:right;margin-bottom:-10px;"></span>
                                <i class="las la-bell"></i>
                            </a>
                            <div class="dropdown-menu notification-dropdown-menu shadow-lg" aria-labelledby="notification-dropdown">
                                <div class="dropdown-title">
                                    <a href="">notifications
                                        <span class="ml-2 notifications-count">(3)</span>
                                    
                                    </a>
                                    <a class="float-right" href="">mark all as read</a>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <a class="notification-card" href="">
                                                <img class="mr-3" src="../SiteAssets/images/inbox.svg" alt="..."/>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">collaboration tools available</h6>
                                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                                    <small class="text-muted">21.03.2020, 13.02</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="media">
                                            <a class="notification-card" href="">
                                                <img class="mr-3" src="{{ asset('../SiteAssets/images/inbox.svg')}}" alt="..."/>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">use the new app launcher</h6>
                                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                                    <small class="text-muted">21.03.2020, 13.02</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="media">
                                            <a class="notification-card" href="">
                                                <img class="mr-3" src="../SiteAssets/images/inbox.svg" alt="..."/>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">the new dashboard abailable</h6>
                                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                                    <small class="text-muted">21.03.2020, 13.02</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-footer text-center">
                                    <a href="notifications.html">view more</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link">
                                <span class="vertical-divider"></span>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link profile-dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle" src="{{ asset('../SiteAssets/images/person.jpg') }}"/>
                                <span class="d">jane doe</span>
                            </a>
                            <div class="dropdown">
                                <div class="dropdown-menu shadow-lg profile-dropdown-menu" aria-labelledby="profile-dropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="las la-user mr-2"></i>
                                        profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="las la-cog mr-2"></i>
                                        settings
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
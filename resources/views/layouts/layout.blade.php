<!DOCTYPE html>
<html lang="fr">

<head>
    <title> KioskGestion </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords"
        content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>

    <body>
        <!--<div class="fixed-button">
            <a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank"
                class="btn btn-md btn-primary">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
            </a>
        </div>-->
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="loader-track">
                <div class="loader-bar"></div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <div class="mobile-search">
                                <div class="header-search">
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Keyword">
                                            <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/dashboard">
                                KioskGestion
                                <!--img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />-->
                            </a>
                            <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        </div>

                        <div class="navbar-container container-fluid">
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                    </div>
                                </li>
                                <li class="header-search">
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav-right">
                                <li class="header-notification">
                                    <a href="#!">
                                        <i class="ti-bell"></i>
                                        <span class="badge bg-c-pink"></span>
                                        <span
                                            class="notification-count">{{ auth()->user()->unreadNotifications->count() }}</span>
                                    </a>
                                    <ul class="show-notification">
                                        <li>
                                            <h6>Notifications</h6>

                                        </li>


                                        <li>
                                            <div class="media">
                                                @foreach (auth()->user()->unreadNotifications as $notification)
                                                    <li>{{ $notification->data['message'] }}<br>
                                                        Type Transaction: {{ $notification->data['type_transaction'] }}<br>
                                                        Nom de l'agent: {{ $notification->data['user_name'] }}<br>
                                                        Nom du kiosque: {{ $notification->data['kiosque_nom'] }}<br>
                                                        Nom de l'expediteur: {{ $notification->data['nom_expediteur'] }}<br>
                                                        Nom du destinataire: {{ $notification->data['nom_destinataire'] }}<br>
                                                        Numéro du destinataire: {{ $notification->data['numero_destinataire'] }}<br>
                                                        Type de compte: {{ $notification->data['type_compte'] }}<br>
                                                        Montant: {{ $notification->data['montant'] }}<br>
                                                        Numéro de l'expéditeur: {{ $notification->data['numero_expediteur'] }}<br>
                                                    </li>
                                                @endforeach

                                            </div>
                                        </li>


                                    </ul>
                                </li>

                                <li class="user-profile header-notification">
                                    <a href="#" id="openProfile">
                                        <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>{{ Auth::user()->name }}</span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <!--<li>
                                                    <a href="#!">
                                                        <i class="ti-settings"></i> Settings
                                                    </a>
                                                </li>-->
                                        <li>
                                            <a href="/profil">
                                                <i class="ti-user"></i> Profil
                                            </a>
                                        </li>



                                        <li>
                                            <a href="/logout">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <ul class="active">


                                <ul class="pcoded-item pcoded-left-item">

                                    <li class="{{ request()->is('accueil') ? 'active' : '' }}">
                                        <a href="/accueil">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>FC</b></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.form-components.main">Accueil</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul><br>

                                <ul class="pcoded-item pcoded-left-item">

                                    <li class="{{ request()->is('profil') ? 'active' : '' }}">
                                        <a href="/profil">
                                            <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Profil
                                                et Compte</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul><br>
                                <ul class="pcoded-item pcoded-left-item">

                                    <li class="{{ request()->is('depot') ? 'active' : '' }}">
                                        <a href="/depot">
                                            <span class="pcoded-micon"><i class="ti-money"></i><b>FC</b></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.form-components.main">Transactions</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul><br>

                                <ul class="pcoded-item pcoded-left-item">

                                    <li class="{{ request()->is('tables') ? 'active' : '' }}">
                                        <a href="/tables">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.form-components.main">Historiques</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul><br>

                                <ul class="pcoded-item pcoded-left-item">


                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">Validation des
                                                transferts</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="/valDepot">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Validation de
                                                        dépôts</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="/valRetrait">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.breadcrumbs">Validation de
                                                        retraits</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul><br>

                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                                        <a href="/dashboard">
                                            <span class="pcoded-micon"><i class="ti-stats-up"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul><br>

                                <ul class="pcoded-item pcoded-left-item">

                                    <li>
                                        <a href="/tables">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.form-components.main">Historiques des
                                                transactions</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul><br><br>

                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="{{ request()->is('dash') ? 'active' : '' }}">
                                        <a href="/dash">
                                            <span class="pcoded-micon"><i class="ti-stats-up"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul><br>
                                <ul class="pcoded-item pcoded-left-item">


                                    <li class="pcoded-hasmenu"
                                        class="{{ request()->is('javascript:void(0)') ? 'active' : '' }}">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">PARAMETRES</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="/liste">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Utilisateurs</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="/listekiosque">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.breadcrumbs">Kiosques</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="/listetype">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.breadcrumbs">Types de
                                                        Transactions</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="/listeRole">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.breadcrumbs">Rôles</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="/typecompte">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.breadcrumbs">Types de
                                                        comptes</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>



                                <style>
                                    /* Ajoutez ces styles dans votre feuille de styles CSS */
                                    .pcoded-item.active a {
                                        background-color: #f0f0f0;
                                        /* Couleur de fond pour l'option active */
                                        border-left: 3px solid #428bca;
                                        /* Barre de couleur sur le côté */
                                        color: #428bca;
                                        /* Couleur du texte pour l'option active */
                                    }
                                </style>

                            </ul>
                        </div>
                    </nav>
                    @yield('content')

                </div>
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
        <!-- Warning Section Ends -->
        <!-- Required Jquery -->
        <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
        <!-- am chart -->
        <script src="assets/pages/widget/amchart/amcharts.min.js"></script>
        <script src="assets/pages/widget/amchart/serial.min.js"></script>
        <!-- Chart js -->
        <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
        <!-- Todo js -->
        <script type="text/javascript " src="assets/pages/todo/todo.js "></script>
        <!-- Custom js -->
        <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
        <script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
        <script src="assets/js/pcoded.min.js"></script>
        <script src="assets/js/vartical-demo.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>

</html>

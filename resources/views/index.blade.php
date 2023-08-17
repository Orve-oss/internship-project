@extends('layouts.layout')

@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">
                        <div class="row">

                            <!-- order-card start -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card bg-c-blue order-card">
                                    <div class="card-block">
                                        <h6 class="m-b-20">Total montant dépôt</h6>
                                        <h2 class="text-right"><i class="ti-stats-up f-left"></i><span>200000</span>
                                        </h2>
                                        <!--<p class="m-b-0">Completed Orders<span class="f-right">351</span></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card bg-c-green order-card">
                                    <div class="card-block">
                                        <h6 class="m-b-20">Total montant retrait</h6>
                                        <h2 class="text-right"><i class="ti-stats-down f-left"></i><span>160000</span></h2>
                                        <!--<p class="m-b-0">This Month<span class="f-right">213</span></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card bg-c-yellow order-card">
                                    <div class="card-block">
                                        <h6 class="m-b-20">Solde initial</h6>
                                        <h2 class="text-right"><i class="ti-money f-left"></i><span>300000</span>
                                        </h2>
                                        <!--p class="m-b-0">This Month<span class="f-right"></span></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card bg-c-pink order-card">
                                    <div class="card-block">
                                        <h6 class="m-b-20">Solde après transferts</h6>
                                        <h2 class="text-right"><i class="ti-wallet f-left"></i><span>440000</span>
                                        </h2>
                                        <!--<p class="m-b-0">This Month<span class="f-right">$542</span></p>-->
                                    </div>
                                </div>
                            </div>
                            <!-- order-card end -->

                            <!-- statustic and process start -->
                            <div class="col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Statistiques</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa-chevron-left"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i>
                                                </li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-times close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <canvas id="Statistics-chart" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Evolution du kiosque</h5>
                                    </div>
                                    <div class="card-block">
                                        
                                        <canvas id="feedback-chart" height="100"></canvas>
                                        <div class="row justify-content-center m-t-15">
                                            <div class="col-auto b-r-default m-t-5 m-b-5">
                                                <h4>83%</h4>
                                                <p class="text-success m-b-0"><i class="ti-hand-point-up m-r-5"></i>Positive
                                                </p>
                                            </div>
                                            <div class="col-auto m-t-5 m-b-5">
                                                <h4>17%</h4>
                                                <p class="text-danger m-b-0"><i
                                                        class="ti-hand-point-down m-r-5"></i>Negative
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- statustic and process end -->
                            <!-- tabs card start -->

                            <!-- tabs card end -->

                            <!-- social statustic start -->



                            <!-- social statustic end -->

                            <!-- users visite and profile start -->

                            <!--<div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Activity Feed</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa-chevron-left"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i>
                                                </li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-times close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <ul class="feed-blog">
                                            <li class="active-feed">
                                                <div class="feed-user-img">
                                                    <img src="assets/images/avatar-3.jpg" class="img-radius "
                                                        alt="User-Profile-Image">
                                                </div>
                                                <h6><span class="label label-danger">File</span>
                                                    Eddie uploaded new files: <small class="text-muted">2 hours ago</small>
                                                </h6>
                                                <p class="m-b-15 m-t-15">hii <b> @everone</b> Lorem
                                                    Ipsum is simply dummy text of the printing and
                                                    typesetting industry.</p>
                                                <div class="row">
                                                    <div class="col-auto text-center">
                                                        <img src="assets/images/blog/blog-r-1.jpg" alt="img"
                                                            class="img-fluid img-100">
                                                        <h6 class="m-t-15 m-b-0">Old Scooter</h6>
                                                        <p class="text-muted m-b-0">
                                                            <small>PNG-100KB</small>
                                                        </p>
                                                    </div>
                                                    <div class="col-auto text-center">
                                                        <img src="assets/images/blog/blog-r-2.jpg" alt="img"
                                                            class="img-fluid img-100">
                                                        <h6 class="m-t-15 m-b-0">Wall Art</h6>
                                                        <p class="text-muted m-b-0">
                                                            <small>PNG-150KB</small>
                                                        </p>
                                                    </div>
                                                    <div class="col-auto text-center">
                                                        <img src="assets/images/blog/blog-r-3.jpg" alt="img"
                                                            class="img-fluid img-100">
                                                        <h6 class="m-t-15 m-b-0">Microphone</h6>
                                                        <p class="text-muted m-b-0">
                                                            <small>PNG-150KB</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="diactive-feed">
                                                <div class="feed-user-img">
                                                    <img src="assets/images/avatar-4.jpg" class="img-radius "
                                                        alt="User-Profile-Image">
                                                </div>
                                                <h6><span class="label label-success">Task</span>Sarah
                                                    marked the Pending Review: <span class="text-c-green"> Trash Can Icon
                                                        Design</span><small class="text-muted">2
                                                        hours ago</small></h6>
                                            </li>
                                            <li class="diactive-feed">
                                                <div class="feed-user-img">
                                                    <img src="assets/images/avatar-2.jpg" class="img-radius "
                                                        alt="User-Profile-Image">
                                                </div>
                                                <h6><span class="label label-primary">comment</span>
                                                    abc posted a task: <span class="text-c-green">Design a new
                                                        Homepage</span> <small class="text-muted">6
                                                        hours ago</small></h6>
                                                <p class="m-b-15 m-t-15"hii <b> @everone</b> Lorem
                                                    Ipsum is simply dummy text of the printing and
                                                    typesetting industry.</p>
                                            </li>
                                            <li class="active-feed">
                                                <div class="feed-user-img">
                                                    <img src="assets/images/avatar-3.jpg" class="img-radius "
                                                        alt="User-Profile-Image">
                                                </div>
                                                <h6><span class="label label-warning">Task</span>Sarah
                                                    marked : <span class="text-c-green"> do Icon
                                                        Design</span><small class="text-muted">10
                                                        hours ago</small></h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>-->
                            <!-- users visite and profile end -->

                        </div>
                    </div>

                    <div id="styleSelector">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

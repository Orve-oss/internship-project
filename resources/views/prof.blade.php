@extends('layouts.layout')

@section('content')
    <style>
        .profile-icon {
            display: inline-block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 10px;
            cursor: pointer;

        }

        .profile-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>PROFIL</h5>


                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>

                                    </div>
                                    <div class="card-block">
                                        <h4 class="sub-title">Informations du profil</h4>
                                        <form action="{{ route('update') }}" method="POST">
                                            @csrf

                                            <label for="profile_photo">
                                                <img src="{{ asset('/assets/images/avatar-4.jpg') }}"
                                                    alt="Ma Photo de Profil" class="profile-icon">

                                            </label>
                                            <input type="file" id="profile-photo" name="profile-photo">





                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom de l'utilisateur
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-round"
                                                        name="name" value="{{ $user->name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Prenom de l'utilisateur
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-round"
                                                        name="prenom" value="{{ $user->prenom }}" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Email de l'utilisateur
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-round"
                                                        name="email" value="{{ $user->email }} " readonly>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary btn-round" type="submit">Mettre à jour</button>



                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page body end -->
                    </div>
                </div>
                <!-- Main-body end -->
                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Compte de l'utilisateur</h5>


                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>

                                    </div>
                                    <div class="card-block">
                                        <h4 class="sub-title">Informations du compte</h4>
                                        <form >
                                            @csrf


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom de l'utilisateur
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-round"
                                                        name="name" value="{{ $user->name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Solde du compte
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-round"
                                                        name="solde" value="10000" readonly>
                                                </div>
                                            </div>



                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page body end -->
                    </div>
                </div>
                <!-- Main-body end -->
                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>


@endsection

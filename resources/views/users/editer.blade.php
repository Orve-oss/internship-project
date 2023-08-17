@extends('layouts.layout')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->

                <!-- Page-header end -->

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>EDITER UN UTILISATEUR</h5>


                                    <div class="card-header-right">
                                        <i class="icofont icofont-spinner-alt-5"></i>
                                    </div>

                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title">Informations de l'utilisateur</h4>
                                    <form action="{{ route('editer', $id)}}" method="POST">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">identifiant de l'utilisateur</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                    placeholder="Entrez le nom de l'utilisateur" name="user_id" value="{{ $user->id}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nom de l'utilisateur</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                    placeholder="Entrez le nom de l'utilisateur" name="name" value="{{ $user->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Prenom de l'utilisateur</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                    placeholder="Entrez le prenom" name="prenom" value="{{ $user->prenom}}">
                                            </div>
                                        </div>
                                        <div class=" form-group">
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Email de l'utilisateur</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control"
                                                        placeholder="xyz@example.com"
                                                        name="email" value="{{ $user->email}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group " id="nomdest">
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Mot de passe</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control"
                                                        placeholder="**********"
                                                        name="password" value="{{ $user->password}}">
                                                </div>
                                            </div>
                                        </div>


                                        <button class="btn btn-primary btn-round" type="submit">Soumettre</button>
                                        <a href="/liste" class="btn btn-warning">Retour</a>



                                    </form>

                                </div>
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

@endsection

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
                                        <h5>AJOUTER UN KIOSQUE</h5>


                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>

                                    </div>
                                    <div class="card-block">
                                        <h4 class="sub-title">Informations du kiosque</h4>
                                        <form action="{{ route('creerKiosque')}}" method="POST">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom du kiosque</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Entrez le nom du kiosque" name="nom">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Adresse du kiosque</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Ex: Rue des palamares, boulevard" name="adresse">
                                                </div>
                                            </div>
                                            <div class=" form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Heure d'ouverture</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control"
                                                            placeholder="Ex: 07:00"
                                                            name="heure_ouverture">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group " id="nomdest">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Heure de fermeture</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control"
                                                            placeholder="Ex: 22:00"
                                                            name="heure_fermeture">
                                                    </div>
                                                </div>
                                            </div>


                                            <button class="btn btn-primary btn-round" type="submit">Soumettre</button>


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

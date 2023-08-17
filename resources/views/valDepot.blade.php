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
                                        <h5>VALIDER UN DEPOT</h5>


                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>

                                    </div>
                                    <div class="card-block">

                                        <h4 class="sub-title">Aperçu de la transaction</h4>
                                        <form action="{{ route('validation', $transaction->id) }} " method="POST">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom de l'agent</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="user_id"
                                                        value="{{ $transaction->user->name }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom du Kiosque</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="kiosque_id"
                                                        value="{{ $transaction->kiosque->nom }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Montant à envoyer</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="montant"
                                                        value="{{ $transaction->montant }}">
                                                </div>
                                            </div><br>
                                            <div class="align-items-center">
                                                <button type="submit" name="action" value="valider"
                                                    class="btn btn-success">Valider</button>
                                                <button type="submit" name="action" value="refuser"
                                                    class="btn btn-danger">Refuser</button>
                                        </form>


                                    </div>



                                    </form>

                                </div>
                            </div>

                            <!-- Input Alignment card end -->
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
                                        <!--<h5>VALIDER UN DEPOT</h5>-->

                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>

                                    </div>
                                    <div class="card-block">
                                        <h4 class="sub-title">Information sur le client</h4>
                                        <form>
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom de l'expéditeur</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nom_expediteur"
                                                        value="{{ $transaction->nom_expediteur }}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Numéro de l'expéditeur</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="numero_expediteur"
                                                        value="{{ $transaction->numero_expediteur }}">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Type de compte
                                                </label>
                                                <input type="text" class="form-control" name="type_compte"
                                                    value="{{ $transaction->type_compte->libelle }}">

                                            </div>



                                        </form>

                                    </div>
                                </div>

                                <!-- Input Alignment card end -->
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

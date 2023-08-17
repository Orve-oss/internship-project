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
                                        <h5>VALIDER UN RETRAIT</h5>


                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>

                                    </div>
                                    <div class="card-block">
                                        <h4 class="sub-title">Informations</h4>
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Identifiant de l'agent</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Entrez l'identifiant">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom du client</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Entrez le nom">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Numéro du client</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Entrez le numéro">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Type de compte
                                                </label>
                                                <div class="col-sm-10">
                                                    <select name="select" class="form-control">
                                                        <option value="opt1">Select One Value Only
                                                        </option>
                                                        <option value="opt2">T-money</option>
                                                        <option value="opt3">Flooz</option>

                                                    </select>
                                                </div>


                                            </div>

                                            <!--<div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Upload
                                                        File</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>-->
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Montant à envoyer</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Entrez le montant">
                                                </div>
                                            </div>

                                            <button class="btn btn-primary btn-round" type="submit">Valider</button>
                                            <button class="btn btn-danger btn-round" type="submit">Refuser</button>

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

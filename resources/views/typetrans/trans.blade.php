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
                                        <h5>AJOUTER UN TYPE DE TRANSACTION</h5>


                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>

                                    </div>
                                    <div class="card-block">
                                        <h4 class="sub-title">Informations du type</h4>
                                        <form action="{{ route('creerType') }}" method="POST">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Libelle du type</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Ex: Depot" name="libelle">
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

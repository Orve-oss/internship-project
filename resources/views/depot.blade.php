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
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>FAIRE UNE TRANSACTION</h5>


                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>

                                    </div>
                                    <div class="card-block">
                                        <h4 class="sub-title">Informations pour la transaction</h4>
                                        <form action="{{ route('depot') }}" method="POST">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Type de transaction
                                                </label>
                                                <div class="col-sm-10">
                                                    <select name="type_transaction_id" id="type" class="form-control"
                                                        onchange="choix()">
                                                        <option value="opt1">Selectionnez une seule valeur
                                                        </option>
                                                        @foreach ($types as $id => $libelle)
                                                            <option value="{{ $id }}">{{ $libelle }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom de l'agent
                                                </label>
                                                <div class="col-sm-10">
                                                    <select name="user_id" class="form-control">
                                                        <option value="opt1">Selectionnez une seule valeur
                                                        </option>
                                                        @foreach ($users as $id => $libelle)
                                                            <option value="{{ $id }}">{{ $libelle }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>


                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nom du kiosque
                                                </label>
                                                <div class="col-sm-10">
                                                    <select name="kiosque_id" class="form-control">
                                                        <option value="opt1">Selectionnez une seule valeur
                                                        </option>
                                                        @foreach ($kiosques as $id => $libelle)
                                                            <option value="{{ $id }}">{{ $libelle }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>


                                            </div>

                                            <div class=" form-group" id="nomexp">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Nom de l'expéditeur</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control"
                                                            placeholder="Entrez le nom de l'expéditeur"
                                                            name="nom_expediteur">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group " id="nomdest">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Nom du destinataire</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control"
                                                            placeholder="Entrez le nom du destinataire"
                                                            name="nom_destinataire">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Numéro du destinataire</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        placeholder="Entrez le numéro" name="numero_destinataire">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Type de compte
                                                </label>
                                                <div class="col-sm-10">
                                                    <select name="type_compte_id" class="form-control">
                                                        <option value="opt1">Selectionnez une seule valeur
                                                        </option>
                                                        @foreach ($typesCompte as $id => $libelle)
                                                            <option value="{{ $id }}">{{ $libelle }}</option>
                                                        @endforeach

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
                                                        placeholder="Entrez le montant" name="montant">
                                                </div>
                                            </div>
                                            <div class="form-group" id="exp">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Numéro du client</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control"
                                                            placeholder="Entrez le numéro du client"
                                                            name="numero_expediteur">
                                                    </div>

                                                </div>

                                            </div>

                                            <button class="btn btn-primary btn-round" type="submit">Soumettre</button>

                                            <script>
                                                function choix() {
                                                    const transactionType = document.getElementById('type').value;


                                                    if (transactionType === '1') {
                                                        document.getElementById('nomexp').style.display = 'block';

                                                        document.getElementById('nomdest').style.display = 'none';
                                                        document.getElementById('exp').style.display = 'none';
                                                    } else if (transactionType === '2') {
                                                        document.getElementById('nomdest').style.display = 'block';

                                                        document.getElementById('nomexp').style.display = 'none';
                                                        document.getElementById('exp').style.display = 'block';
                                                    }
                                                }
                                            </script>

                                        </form>

                                    </div>
                                </div>
                                <!-- Basic Form Inputs card end -->
                                <!-- Input Grid card start -->
                                <!--<div class="card">
                                        <div class="card-header">
                                            <h5>Input Grid</h5>
                                            <span>Add class of <code>.form-control</code> with
                                                <code>&lt;input&gt;</code> tag</span>

                                        </div>
                                        <div class="card-block">
                                            <h4 class="sub-title">Basic Inputs</h4>
                                            <form>
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="col-sm-1">
                                                        <input type="text" class="form-control" placeholder="col-sm-1">
                                                    </div>
                                                    <div class="col-sm-11">
                                                        <input type="text" class="form-control" placeholder="col-sm-11">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" placeholder="col-sm-2">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="col-sm-10">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" placeholder="col-sm-3">
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" placeholder="col-sm-9">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="col-sm-4">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" placeholder="col-sm-8">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" placeholder="col-sm-5">
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" placeholder="col-sm-7">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="col-sm-6">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="col-sm-6">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" placeholder="col-sm-12">
                                                    </div>
                                                </div>
                                            </form>
                                            <h4 class="sub-title">Flex Inputs</h4>
                                            <form>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="col">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="col-sm-4">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="col">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="col">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="col-sm-6">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="col">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" placeholder="col-sm-8">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="col">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="col">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="col">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="col-sm-10">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="col">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>-->
                                <!-- Input Grid card end -->
                                <!-- Input Validation card start -->
                                <!--<div class="card">
                                        <div class="card-header">
                                            <h5>Input Validation</h5>
                                            <span>Add class of <code>.form-control</code> with
                                                <code>&lt;input&gt;</code> tag</span>
                                            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="sub-title">Input Validation</h4>
                                            <div class="form-group has-success row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="inputSuccess1">Input
                                                        with
                                                        success</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-success"
                                                        id="inputSuccess1">
                                                    <div class="col-form-label">Success! You've done it.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group has-warning row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="inputWarning1">Input
                                                        with
                                                        warning</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-warning"
                                                        id="inputWarning1">
                                                    <div class="col-form-label">Shucks, check the formatting
                                                        of that
                                                        and try again.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group has-danger row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="inputDanger1">Input
                                                        with
                                                        danger</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-danger"
                                                        id="inputDanger1">
                                                    <div class="col-form-label">Sorry, that username's
                                                        taken. Try
                                                        another?
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                <!-- Input Validation card end -->
                                <!-- Input Alignment card start -->
                                <!--<div class="card">
                                        <div class="card-header">
                                            <h5>Input Alignment</h5>
                                            <span>Add class of <code>.form-control</code> with
                                                <code>&lt;input&gt;</code> tag</span>
                                            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>
                                        </div>
                                        <div class="card-block">
                                            <form>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Normal
                                                        Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-normal"
                                                            placeholder=".form-control-normal">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Bold Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-bold"
                                                            placeholder=".form-control-bold">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Capitalize
                                                        Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-capitalize"
                                                            placeholder=".form-control-capitalize">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Uppercase
                                                        Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-uppercase"
                                                            placeholder=".form-control-uppercase">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Lowercase
                                                        Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-lowercase"
                                                            placeholder=".form-control-lowercase">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Varient
                                                        Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-variant"
                                                            placeholder=".form-control-variant">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Left-Align
                                                        Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-left"
                                                            placeholder=".form-control-left">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Center-Align
                                                        Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-center"
                                                            placeholder=".form-control-center">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Right-Align
                                                        Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-right"
                                                            placeholder=".form-control-right">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">RTL Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-rtl"
                                                            placeholder=".form-control-rtl">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>-->
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

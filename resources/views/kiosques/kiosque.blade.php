@extends('layouts.layout')

@section('content')
    <div class="col-sm-10 pcoded-content">
        <div class="card tabs-card pcoded-inner-content">
            <div class="card-block p-0 main-body page-wrapper">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs" role="tablist">
                    <h5>Liste des Kiosques</h5><br><br>
                    <div class="card-header">
                        <a href="{{ route('kiosque')}}" class="btn btn-primary btn-round">Creer un Kiosque</a>
                    </div>
                </ul><br>


                <!-- Tab panes -->
                <div class="tab-content card-block">
                    <div class="tab-pane active" id="home3" role="tabpanel">

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nom</th>
                                    <th>Adresse</th>
                                    <th>Heure Ouverture</th>
                                    <th>Heure Fermeture</th>
                                    <th>Actions</th>
                                </tr>

                                @foreach ($kiosques as $kiosque)
                                    <tr>
                                        <td>{{$kiosque->nom}}</td>
                                        <td>{{$kiosque->adresse}}</td>
                                        <td>{{$kiosque->heure_ouverture}}</td>
                                        <td>{{$kiosque->heure_fermeture}}</td>
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                onclick="return confirm('Are you sure you want to edit? if yes press OK');"><span
                                                    class="ti-pencil"></span></button>
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete? if yes press OK');"><span
                                                    class="ti-trash"></span></button>
                                        </td>
                                    </tr>
                                @endforeach






                            </table>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection

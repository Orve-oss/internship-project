@extends('layouts.layout')

@section('content')
    <div class="col-sm-10 pcoded-content">
        <div class="card tabs-card pcoded-inner-content">
            <div class="card-block p-0 main-body page-wrapper">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs" role="tablist">
                    <h5>Liste des rôles</h5><br><br>
                    <div class="card-header">
                        <a href="{{ route('role')}}" class="btn btn-primary btn-round">Creer un rôle</a>
                    </div>
                </ul><br>
                <div></div>


                <!-- Tab panes -->
                <div class="tab-content card-block">
                    <div class="tab-pane active" id="home3" role="tabpanel">

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Libelle</th>
                                    <th>Date de creation</th>
                                    <th>Actions</th>
                                </tr>

                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->libelle}}</td>
                                        <td>{{$role->created_at}}</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary"
                                                onclick="return confirm('Are you sure you want to edit? if yes press OK');"><span
                                                    class="ti-pencil"></span></button>
                                            <a href="/delete/{{$role->id}}" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete? if yes press OK');"><span
                                                    class="ti-trash"></span></a>
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

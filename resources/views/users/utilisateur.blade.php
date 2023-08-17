@extends('layouts.layout')

@section('content')
    <div class="col-sm-10 pcoded-content">
        <div class="card tabs-card pcoded-inner-content">
            <div class="card-block p-0 main-body page-wrapper">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs" role="tablist">
                    <h5>Liste des utilisateurs</h5><br><br>
                    <div class="card-header">
                        <a href="/creation" class="btn btn-primary btn-round">Creer un utilisateur</a>
                    </div>
                </ul><br>





                <!-- Tab panes -->
                <div class="tab-content card-block">
                    <div class="tab-pane active" id="home3" role="tabpanel">

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>

                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="/update/{{$user->id}}" class="btn btn-sm btn-primary"
                                                onclick="return confirm('Are you sure you want to edit? if yes press OK');"><span
                                                    class="ti-pencil"></span></a>
                                            <a href="/delete/{{$user->id}}" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete? if yes press OK');"><span
                                                    class="ti-trash"></span></a>
                                        </td>
                                    </tr>
                                @endforeach






                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $users->links('pagination::bootstrap-4') }}
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection

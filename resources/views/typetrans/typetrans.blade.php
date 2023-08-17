@extends('layouts.layout')

@section('content')
    <div class="col-sm-10 pcoded-content">
        <div class="card tabs-card pcoded-inner-content">
            <div class="card-block p-0 main-body page-wrapper">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs" role="tablist">
                    <h5>Liste des types de transactions</h5><br><br>
                    <div class="card-header">
                        <a href="{{ route('type')}}" class="btn btn-primary btn-round">Creer un type de transaction</a>
                    </div>
                </ul><br>


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

                                @foreach ($types as $type)
                                    <tr>
                                        <td>{{$type->id}}</td>
                                        <td>{{$type->libelle}}</td>
                                        <td>{{$type->created_at}}</td>
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                onclick="return confirm('Are you sure you want to edit? if yes press OK');"><span
                                                    class="ti-pencil"></span></button>
                                            <a href="/delete/{{$type->id}}" class="btn btn-sm btn-danger"
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

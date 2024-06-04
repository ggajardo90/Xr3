@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'usuarios'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-info">
                                    <h4 class="card-title"style="font-weight: bold;">Usuarios</h4>
                                    <p class="card-category">Lista de Usuarios</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="succes">
                                        {{session('success')}}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('users.create')}}" class="btn btn-sm btn-warning" style="font-weight: bold;">Crear Usuario</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-info">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Correo</th>
                                                <th>Username</th>
                                                <th>Created_at</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)                                            
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->create_at}}</td>
                                                    <td class="td-actions text-right">
                                                       
                                                            <a href="{{route('users.show', $user->id)}}" class="btn btn-info">
                                                                <i class="material-icons">person</i>
                                                            </a>
                                                        <button class="btn btn-warning" type="button">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button class="btn btn-danger" type="button">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto">
                                    {{$users->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles de usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Usuarios</div>
                            <p class="card-category">Vista detallada del usuario {{$user->name}}</p>
                        </div>
                        {{-- body --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <div class="author">
                                                        <a href="#">
                                                            <img src="{{asset('/img/avatar.png')}}" alt="image" class="avatar">
                                                            <h5 class="title mt-3">{{$user->name}}</h5>
                                                        </a>
                                                        <p class="description">
                                                            {{$user->username}}<br>
                                                            {{$user->email}}<br>
                                                            {{$user->created_at}}<br>
                                                        </p>
                                                    </div>
                                                </p>
                                                <div class="card-description">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque natus velit eos ratione
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="button-container">
                                                    <div class="btn btn-sm btn-primary">Editar</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Usuario: {{ $usuario->name }}</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos del Usuario</h3>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <label for="name">Nombre de Usuario:</label>
                                <h4>{{ $usuario->name }}</h4>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <label for="email">Email de Usuario:</label>
                                <h4>{{ $usuario->email }}</h4>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <label for="created_at">Fecha de creación:</label>
                                <h4>{{ $usuario->created_at }}</h4>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <a href="{{ route('admin.usuarios.index') }}" class="btn btn-info">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

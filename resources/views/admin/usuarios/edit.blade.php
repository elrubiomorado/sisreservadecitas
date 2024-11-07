@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Edición de usuario: {{ $usuario->name }}</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url("/admin/usuarios", $usuario->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="name">Nombre de Usuario:</label> <b>*</b>
                                    <input type="text" class="form-control" id="name" name="name" required value="{{ $usuario->name }}">
                                    @error("name")
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="email">Email de Usuario:</label> <b>*</b>
                                    <input type="text" class="form-control" id="email" name="email" required value="{{ $usuario->email }}">
                                    @error("email")
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" class="form-control" id="password" name="password" >
                                    @error("password")
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="passwordverify">Verificación de Contraseña:</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <a href="{{ route("admin.usuarios.index") }}" class="btn btn-danger">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar usuario</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

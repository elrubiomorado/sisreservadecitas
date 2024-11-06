@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Listado de usuarios</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Usuarios registrados</h3>

                    <div class="card-tools">
                        <a href="{{ route("admin.usuarios.create") }}" class="btn btn-info btn-sm">
                            <i class="fas fa-plus"></i>  Registrar usuario
                        </a>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-sm">
                            <caption>Listado de usuarios</caption>
                            <thead class="thead-ligth">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>
                                            ver / editar / eliminar
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    </div>
@endsection

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
                        <a href="{{ route('admin.usuarios.create') }}" class="btn btn-info btn-sm">
                            <i class="fas fa-plus"></i> Registrar usuario
                        </a>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    {{-- mensaje de sesion  --}}
                   
                    <div class="table-responsive">
                        <table id="example1" class="table table-hover table-sm">
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
                                    <tr >
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ url("admin/usuarios/".$usuario->id) }}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                <a  href="{{ url("/admin/usuarios/".$usuario->id."/edit") }}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                
                                                <form id="deleteUserForm-{{ $usuario->id }}" action="{{ url("/admin/usuarios/".$usuario->id) }}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="button" onclick="confirmDelete({{ $usuario->id }})" class="btn btn-danger btn-sm">
                                                        <i class="bi bi-person-x"></i>
                                                    </button>
                                                </form>
                                                                                         
                                            </div>
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

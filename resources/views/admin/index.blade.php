@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Panel principal</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $total_usuarios }}</h3>

                    <p>Cantidad de Usuarios</p>
                </div>
                <div class="icon">
                    <i class="ion bi bi-file-person"></i>"></i>
                </div>
                <a href="{{ route("admin.usuarios.index") }}" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection

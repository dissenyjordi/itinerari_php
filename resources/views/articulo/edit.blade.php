@extends('layouts.template_main')

@section('content2')
    <div class="p-3 my-3 bg-itacademy text-white">
        <h1>CRUD, <strong>editar registro</strong></h1>
    </div>
    <form action="{{ route('articulos.store') }}/{{ $articulo->id }}" method="POST"><!-- Alias link "articulos.store", no name"../articulos". Laravel8 CRUD. 18.05.2021 - jpm -->
       @csrf <!-- TOKEN evita ordres no autoritzades en nom d’un usuari autenticat. Laravel8 CRUD. 18.05.2021 - jpm -->
       @method('PUT') <!-- Directive to Laravel 8.0, using the PUT method to generate a CRUD, Update. 18.05.2021 - jpm-->
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$articulo->codigo}}" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$articulo->descripcion}}" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" min="0" max="50" step="1"  value="{{$articulo->cantidad}}" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" class="form-control" tabindex="4" min="0" max="100" step="0.10"  value="{{$articulo->precio}}" >
        </div>
        <a href="{{ route('articulos.store') }}" class="btn btn-secondary" tabindex="5">Cancelar <i class="fa fa-ban"></i></a><!-- Alias link "articulos.store", no name"../articulos". Laravel8 CRUD. 18.05.2021 - jpm -->
        <button type="submit" class="btn btn-info" tabindex="6">Guardar <i class="fa fa-check-circle"></i></button>
    </form>
    <br>
    <br>
@endsection
@extends('layouts.template_main')

@section('content2')
    <div class="p-3 my-3 bg-itacademy text-white">
        <h1>CRUD, <strong>nuevo registro</strong></h1>
    </div>
    <form action="{{ route('articulos.store') }}" method="POST"><!-- Alias link "articulos.store", no name"../articulos". File: "ArticuloController.php", line 37: "public function store(Request $request)". Laravel8 CRUD. 18.05.2021 - jpm -->
        @csrf <!-- TOKEN evita ordres no autoritzades en nom d’un usuari autenticat. Laravel8 CRUD. 18.05.2021 - jpm -->
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" placeholder="Descripción del producto">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" min="0" max="50" step="1" placeholder="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" class="form-control" tabindex="4" min="0" max="100" step="0.10" placeholder="15.50 €">
        </div>
        <a href="{{ route('articulos.store') }}" class="btn btn-secondary" tabindex="5">Cancelar <i class="fa fa-ban"></i></a><!-- Alias link "articulos.store", no name"../articulos". File: "ArticuloController.php", line 37: "public function store(Request $request)". Laravel8 CRUD. 18.05.2021 - jpm -->
        <button type="submit" class="btn btn-info" tabindex="6">Guardar <i class="fa fa-check-circle"></i></button>
    </form>
    <br>
    <br>
@endsection
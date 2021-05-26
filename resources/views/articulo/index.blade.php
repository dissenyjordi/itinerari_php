@extends('layouts.template_main')

@section('content')
    <div class="p-3 my-3 bg-itacademy text-white">
        <h1>Bienvenido a la página principal de <strong>CRUD</strong></h1>
    </div>
@endsection

@section('content2')
    <a href="articulos/create" class="btn btn-info">New product <i class="fa fa-plus-circle"></i></a>
        <br>
        <br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->codigo }}</td>
                    <td>{{ $articulo->descripcion }}</td>
                    <td>{{ $articulo->cantidad }}</td>
                    <td>{{ $articulo->precio }}</td>
                    <td>
                        <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST"><!-- Alias link "articulos.store", no name"../articulos". Laravel8 CRUD. 18.05.2021 - jpm -->
                            @csrf <!-- TOKEN evita ordres no autoritzades en nom d’un usuari autenticat. Laravel8 CRUD. 18.05.2021 - jpm -->
                            @method('DELETE') <!-- Directive to Laravel 8.0, using the PUT method to generate a CRUD, Update. 18.05.2021 - jpm-->
                                <a href="{{ route('articulos.store') }}/{{ $articulo->id}}/edit" class="btn btn-warning">Editar <i class="fa fa-pencil-square-o"></i></a>
                                <button type="submit" class="btn btn-danger">Borrar <i class="fa fa-trash"></i></a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
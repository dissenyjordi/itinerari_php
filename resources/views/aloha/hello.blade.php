@extends('layouts.template_main')

@section('title', $hola . ' ' . $mundo)

@section('content')
    <div class="p-3 my-3 bg-itacademy text-white">
        <h1>
            <?php
            if ($mundo){
                echo "<h1>Primer ejercicio 'personalizado' de programación: <strong>¡$hola, $mundo!</strong></h1>";
            } else {
                echo "<h1>Primer ejercicio típico de programación: <strong>¡hola mundo!</strong></h1>";
            }
            ?>
        </h1>
    </div>
    
@endsection
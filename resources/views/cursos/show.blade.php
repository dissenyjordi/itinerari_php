@extends('layouts.template_main')

@section('title', $curso . ' ' . $categoria)

@section('content')
<div class="p-3 my-3 bg-itacademy text-white">
    <h1>Bienvenido al curso:<strong>
        <?php 
            if ($categoria){
                echo $curso . "</strong>, de la categoria: <strong>". $categoria . "</strong>";
            } else {
                echo $curso . "</strong>";
            }
        ?>
    </h1>
</div>
@endsection
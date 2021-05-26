@extends('layouts.template_main')

@section('title', 'Cursos')

@section('content')
    <div class="p-3 my-3 bg-itacademy text-white">
        <h1>Bienvenido a la página principal de <strong>cursos</strong></h1>
    </div>
    <h3>Nivell 1 - Exercici 2</h3>
        <p>Genera tres vistes amb controladors diferents, en cadascuna d'elles ha d'aparéixer un text de benvinguda diferent.</p>
        <hr>
        <br>
        <h4>Controlador 1 <strong>"Cursos"</strong></h4>
            <h5>ejemplos de URL: (para escribir en el navegador después de <strong>"cursos"</strong>):</h5><br>
                <code>/create</code><br>
                <code>/javascript*</code> o<br>
                <code>/javascript*/web*</code><br>
                <em><code>*</code> se puede escribitr cualquier palabra</em>
            </h5>
        <br>
        <hr>
        <br>
        <h4>Controlador 2 <strong>"blog"</strong></h4>
            <h5>cambiar la palabra <strong>"cursos"</strong> por <strong>"blog"</strong> en la URL del navegador<br>
                escribir en la URL del navegador después de <strong>"blog"</strong></h5><br>
                <code>/show</code>
            </h5>
        <br>
        <hr>
        <br>
        <h4>Controlador 3 <strong>"aloha"</strong></h4>
            <h5>cambiar la palabra <strong>"blog"</strong> por <strong>"aloha"</strong> en la URL del navegador<br>
            <h5>escribir en la URL del navegador después de <strong>"aloha"</strong>):</h5><br>
                    <code>/hola</code> o<br>
                    <code>/hola/mundillo*</code><br>
                    <em><code>*</code> se puede escribitr cualquier palabra</em>
            </h5>
        <hr>
@endsection
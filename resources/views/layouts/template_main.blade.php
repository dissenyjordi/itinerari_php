<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <!-- favicon -->
        <!-- START - style -->
        <!-- START - Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- END - Bootstrap -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
        <!-- END - style -->
        <!-- START - Fontawesome CSS File  -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <!-- END - Fontawesome CSS File  -->
        
        <!-- START - script -->
        <!-- START - JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- END - JQuery -->
        <!-- START - POPPER -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- END - POPPER -->
        <!-- START - Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- END - Bootstrap -->
        <!-- END - script -->
    </head>
    <body>
        <!-- header -->
        <!-- START - navigation -->
        <div class="container">
            <nav class="navbar navbar-expand-sm bg-dark navbar-top">
                <!-- START - Brand/logo -->
                <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('assets/img/apple-touch-icon.png')}}" alt="" width="55" height="55" class="d-inline-block align-middle logo"> Sprint 9</a>
                <!-- END - Brand/logo -->
                <!-- START - Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">Nivel 1</a> -->
                        <a class="nav-link" href="{{ route('cursos.index') }}">Nivel 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articulos.index') }}">Nivel 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nivel 3</a>
                    </li>
                </ul>
                <!-- END - Links -->
              </nav>
        </div>
        <!-- END - navigation -->
        <!-- START - breadcrumb -->
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Ni</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                </ol>
            </nav>
        </div>
        <!-- END - breadcrumb -->
        <div class="container">

                @yield('content')
        
        </div>
        <div class="container">

                @yield('content2')

        </div>
        <!-- footer -->
        <!-- script -->
    </body>
</html>
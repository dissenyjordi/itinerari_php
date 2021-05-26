<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class) ->name('index'); // alias del enlace. "->name('index');" // /* Modify line, Link URL - main menu & bootstrap. 17.05.2021 - jpm */

Route::get('cursos', [CursoController::class, 'index']) ->name('cursos.index'); // alias del enlace. "->name('cursos.index');" // /* Modify line, Link URL - main menu & bootstrap. 17.05.2021 - jpm */

Route::get('cursos/create', [CursoController::class, 'create']);

Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'show']);

Route::get('aloha', [HelloController::class, 'index']);

Route::get('aloha/{hola}/{mundo?}', [HelloController::class, 'helloworld']);

Route::get('blog', [BlogController::class, 'index']);

Route::get('blog/show', [BlogController::class, 'show']);

Route::resource('articulos', 'App\Http\Controllers\ArticuloController'); /* New line, Laravel8 CRUD. 13.05.2021 - jpm */
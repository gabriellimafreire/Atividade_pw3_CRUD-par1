<?php

use App\Http\Controllers\AgendamentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\agendamento;

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
Route::get('/',[AgendamentoController::class, 'home']);
Route::post('/create',[AgendamentoController::class, 'create']);
Route::get('/consultar',[AgendamentoController::class, 'consulta']);


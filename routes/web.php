<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Funcionario');
});
Route::get('/params/{pathInteiro?}/{pathString?}', [App\Http\Controllers\ParamController::class, 'param'])
->where('pathInteiro', '[0-9]+')
->where('pathString', '[A-Za-z]+');

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/junior/{nome}/{numeroInscricao}/{salario}/{HorasTrabalhadas}', [App\Http\Controllers\JuniorController::class, 'aumentarSalario'])
    ->where('nome', '[A-Za-z]+')
    ->where('numeroInscricao', '[0-9]+')
    ->where('salario', '[0-9]+\.[0-9]+')
    ->where('HorasTrabalhadas', '[0-9]+\.[0-9]+');

Route::get('/Junior/{nome}/{numeroInscricao}/{salario}/imposto', [App\Http\Controllers\JuniorController::class, 'calcularImposto']);
Route::get('/Junior/{nome}/{numeroInscricao}/{salario}/impostoaumentado', [App\Http\Controllers\JuniorController::class, 'calcularImpostoAumentado']);

Route::get('/Pleno/{nome}/{numeroInscricao}/{salario}/aumentado/{HorasTrabalhadas?}', [App\Http\Controllers\PlenoController::class, 'aumentarSalario']);
Route::get('/Pleno/{nome}/{numeroInscricao}/{salario}/imposto', [App\Http\Controllers\PlenoController::class, 'calcularImposto']);
Route::get('/Pleno/{nome}/{numeroInscricao}/{salario}/impostoaumentado', [App\Http\Controllers\PlenoController::class, 'calcularImpostoAumentado']);

Route::get('/Senior/{nome}/{numeroInscricao}/{salario}/aumentado/{HorasTrabalhadas}', [App\Http\Controllers\SeniorController::class, 'aumentarSalario']);
Route::get('/Senior/{nome}/{numeroInscricao}/{salario}/imposto', [App\Http\Controllers\SeniorController::class, 'calcularImposto']);
Route::get('/Senior/{nome}/{numeroInscricao}/{salario}/impostoaumentado', [App\Http\Controllers\SeniorController::class, 'calcularImpostoAumentado']);

Route::get('/laravel', function () {
    return view('welcome');
});

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

Route::get('/JuniorAumentado/{nome}/{numeroInscricao}/{salario}', [App\Http\Controllers\JuniorController::class, 'AumentarSalario'])
->where('nome', '[A-Za-z]+')
->where('numeroInscricao', '[0-9]+')
->where('salario', '[0-9]+')
->where('HorasTrabalhadas', '[0-9]+');

Route::get('/JuniorImposto/{nome}/{numeroInscricao}/{salario}', [App\Http\Controllers\JuniorController::class, 'calcularImposto'])
    ->where('nome', '[A-Za-z]+')
    ->where('numeroInscricao', '[0-9]+')
    ->where('salario', '[0-9]+');

Route::get('/JuniorImpostoAumentado/{nome}/{numeroInscricao}/{salario}', [App\Http\Controllers\JuniorController::class, 'calcularImpostoAumentado'])
    ->where('nome', '[A-Za-z]+')
    ->where('numeroInscricao', '[0-9]+')
    ->where('salario', '[0-9]+');

Route::get('/PlenoAumentado/{nome}/{numeroInscricao}/{salario}', [App\Http\Controllers\PlenoController::class, 'AumentarSalario'])
->where('nome', '[A-Za-z]+')
->where('numeroInscricao', '[0-9]+')
->where('salario', '[0-9]+')
->where('HorasTrabalhadas', '[0-9]+');

Route::get('/Pleno/{nome}/{numeroInscricao}/{salario}', [App\Http\Controllers\PlenoController::class, 'calcularImposto'])
    ->where('nome', '[A-Za-z]+')
    ->where('numeroInscricao', '[0-9]+')
    ->where('salario', '[0-9]+');

Route::get('/Pleno/{nome}/{numeroInscricao}/{salario}', [App\Http\Controllers\PlenoController::class, 'calcularImpostoAumentado'])
    ->where('nome', '[A-Za-z]+')
    ->where('numeroInscricao', '[0-9]+')
    ->where('salario', '[0-9]+');

Route::get('/SeniorAumentado/{nome}/{numeroInscricao}/{salario}', [App\Http\Controllers\SeniorController::class, 'AumentarSalario'])
->where('nome', '[A-Za-z]+')
->where('numeroInscricao', '[0-9]+')
->where('salario', '[0-9]+')
->where('HorasTrabalhadas', '[0-9]+');

Route::get('/Senior/{nome}/{numeroInscricao}/{salario}', [App\Http\Controllers\SeniorController::class, 'calcularImposto'])
    ->where('nome', '[A-Za-z]+')
    ->where('numeroInscricao', '[0-9]+')
    ->where('salario', '[0-9]+');
    
Route::get('/Senior/{nome}/{numeroInscricao}/{salario}', [App\Http\Controllers\SeniorController::class, 'calcularImpostoAumentado'])
    ->where('nome', '[A-Za-z]+')
    ->where('numeroInscricao', '[0-9]+')
    ->where('salario', '[0-9]+');

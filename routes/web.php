<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Funcionario');
});
Route::get('/Junior/{$nome}/{$numeroInscricao}/{$salario}/aumentado/{$HorasTrabalhadas}', function () {
    return view('JuniorAumentado');
});
Route::get('/Junior/{$nome}/{$numeroInscricao}/{$salario}/imposto', function () {
    return view('Junior');
});
Route::get('/Junior/{$nome}/{$numeroInscricao}/{$salario}/impostoaumentado', function () {
    return view('Junior');
});

Route::get('/Pleno/{$nome}/{$numeroInscricao}/{$salario}/aumentado/{$HorasTrabalhadas?}', [App\Http\Controllers\PlenoController::class, 'aumentado']);

Route::get('/Pleno/{$nome}/{$numeroInscricao}/{$salario}/imposto', function () {
    return view('Pleno');
});
Route::get('/Pleno/{$nome}/{$numeroInscricao}/{$salario}/impostoaumentado', function () {
    return view('Pleno');
});

Route::get('/Senior/{$nome}/{$numeroInscricao}/{$salario}/aumentado/{$HorasTrabalhadas}', function () {
    return view('Senior');
});
Route::get('/Senior/{$nome}/{$numeroInscricao}/{$salario}/imposto', function () {
    return view('Senior');
});
Route::get('/Senior/{$nome}/{$numeroInscricao}/{$salario}/impostoaumentado', function () {
    return view('Senior');
});
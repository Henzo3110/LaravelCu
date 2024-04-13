<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Senior;

class SeniorController extends Controller
{
    public function AumentarSalario(string $nome,int $numeroInscricao, float $salario, Request $HorasTrabalhadas) {
        $HorasTrabalhadasint = intval($HorasTrabalhadas ->query('horas'));
        $Senior = new Senior($nome ,$numeroInscricao, $salario , $HorasTrabalhadasint );
        $Senior-> AumentarSalario($salario, $HorasTrabalhadasint);  
        return view('SeniorAumentado')
        ->with('Senior', $Senior);
    }
    
    public function calcularImposto(string $nome, float $salario, int $numeroInscricao, Request $HorasTrabalhadas) {
        $HorasTrabalhadasint = intval($HorasTrabalhadas ->query('horas'));
        $Senior = new Senior ($nome, $salario, $numeroInscricao, $HorasTrabalhadasint);
        $Senior->calcularImposto($salario);
        return view('SeniorImposto') 
        ->with('Senior', $Senior)
        ->with('Salario', $salario);
    }
    public function calcularImpostoAumentado(string $nome, float $salarioAumentado, int $numeroInscricao, Request $HorasTrabalhadas) {
        $HorasTrabalhadasint = intval($HorasTrabalhadas ->query('horas'));
        $Senior = new Senior ($nome, $salarioAumentado, $numeroInscricao, $HorasTrabalhadasint);
        $Senior->calcularImpostoAumentado($salarioAumentado);
        return view('SeniorImpostoAumentado')
        ->with('Senior', $Senior);
     }
}

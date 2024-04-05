<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Funcionario;

class SeniorController extends FuncionarioController
{
    public function aumentarSalario(string $nome, float $salario, int $numeroInscricao, int $HorasTrabalhadas) {
        $Senior = new Funcionario($nome ,$salario ,$numeroInscricao );
        return view('SeniorAumentado')
        ->with('Senior', $Senior)
        ->with('Salario', $salario)
        ->with('HorasTrabalhadas', $HorasTrabalhadas);
    }
    
    public function calcularImposto(string $nome, float $salario, int $numeroInscricao) {
        $Senior = new Funcionario ($nome, $salario, $numeroInscricao);
        return view('SeniorImposto') 
        ->with('Senior', $Senior)
        ->with('Salario', $salario);
    }
    public function calcularImpostoAumentado(string $nome, float $salario, int $numeroInscricao) {
        $Senior = new Funcionario ($nome, $salario, $numeroInscricao);
        $Senior->depositar($numeroInscricao);
        return view('SeniorImpostoAumentado')
        ->with('Senior', $Senior)
        ->with('Salario', $salario);
     }
}

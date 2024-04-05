<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Funcionario;


class JuniorController extends FuncionarioController
{
    public function aumentarSalario(string $nome, float $salario, int $numeroInscricao, int $HorasTrabalhadas) {
        $Junior = new Funcionario($nome ,$salario ,$numeroInscricao );
        return view('JuniorAumentado')
        ->with('Junior', $Junior)
        ->with('Salario', $salario)
        ->with('HorasTrabalhadas', $HorasTrabalhadas);
    }
    
    public function calcularImposto(string $nome, float $salario, int $numeroInscricao) {
        $Junior = new Funcionario ($nome, $salario, $numeroInscricao);
        return view('JuniorImposto') 
        ->with('Junior', $Junior)
        ->with('Salario', $salario);
    }
    public function calcularImpostoAumentado(string $nome, float $salario, int $numeroInscricao) {
        $Junior = new Funcionario ($nome, $salario, $numeroInscricao);
        $Junior->depositar($numeroInscricao);
        return view('JuniorImpostoAumentado')
        ->with('Junior', $Junior)
        ->with('Salario', $salario);
     }

}

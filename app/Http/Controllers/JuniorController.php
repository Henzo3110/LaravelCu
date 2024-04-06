<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Funcionario;


class JuniorController extends Controller
{
    public function aumentarSalario(string $nome, float $salario, int $numeroInscricao, int $HorasTrabalhadas) {
        $Junior = new Funcionario($nome ,$salario ,$numeroInscricao );
        $Junior->aumentarSalario($salario,$HorasTrabalhadas);
        return view('JuniorAumentado')
        ->with('Junior', $Junior)
        ->with('HorasTrabalhadas', $HorasTrabalhadas);
    }
    
    public function calcularImposto(string $nome, float $salario, int $numeroInscricao) {
        $Junior = new Funcionario ($nome, $salario, $numeroInscricao);
        return view('JuniorImposto') 
        ->with('Junior', $Junior);
    }
    public function calcularImpostoAumentado(string $nome, float $salario, int $numeroInscricao) {
        $Junior = new Funcionario ($nome, $salario, $numeroInscricao);
        $Junior->calcularImpostoAumentado($salario);
        return view('JuniorImpostoAumentado')
        ->with('Junior', $Junior);
     }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Funcionario;

class PlenoController extends FuncionarioController
{
    public function aumentarSalario(string $nome, float $salario, int $numeroInscricao, int $HorasTrabalhadas) {
        $Pleno = new Funcionario($nome ,$salario ,$numeroInscricao );
        return view('PlenoAumentado')
        ->with('Pleno', $Pleno)
        ->with('Salario', $salario)
        ->with('HorasTrabalhadas', $HorasTrabalhadas);
    }
    
    public function calcularImposto(string $nome, float $salario, int $numeroInscricao) {
        $Pleno = new Funcionario ($nome, $salario, $numeroInscricao);
        return view('PlenoImposto') 
        ->with('Pleno', $Pleno)
        ->with('Salario', $salario);
    }
    public function calcularImpostoAumentado(string $nome, float $salario, int $numeroInscricao) {
        $Pleno = new Funcionario ($nome, $salario, $numeroInscricao);
        $Pleno->depositar($numeroInscricao);
        return view('PlenoImpostoAumentado')
        ->with('Pleno', $Pleno)
        ->with('Salario', $salario);
     }

}

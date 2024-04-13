<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pleno;

class PlenoController extends Controller
{
    public function AumentarSalario(string $nome,int $numeroInscricao, float $salario, Request $HorasTrabalhadas) {
        $HorasTrabalhadasint = intval($HorasTrabalhadas ->query('horas'));
        $Pleno = new Pleno($nome ,$numeroInscricao, $salario , $HorasTrabalhadasint );
        $Pleno-> AumentarSalario($salario, $HorasTrabalhadasint);  
        return view('PlenoAumentado')
        ->with('Pleno', $Pleno);
    }
    
    public function calcularImposto(string $nome, float $salario, int $numeroInscricao, Request $HorasTrabalhadas) {
        $HorasTrabalhadasint = intval($HorasTrabalhadas ->query('horas'));
        $Pleno = new Pleno ($nome, $salario, $numeroInscricao, $HorasTrabalhadasint);
        $Pleno->calcularImposto($salario);
        return view('PlenoImposto') 
        ->with('Pleno', $Pleno)
        ->with('Salario', $salario);
    }
    public function calcularImpostoAumentado(string $nome, float $salarioAumentado, int $numeroInscricao, Request $HorasTrabalhadas) {
        $HorasTrabalhadasint = intval($HorasTrabalhadas ->query('horas'));
        $Pleno = new Pleno ($nome, $salarioAumentado, $numeroInscricao, $HorasTrabalhadasint);
        $Pleno->calcularImpostoAumentado($salarioAumentado);
        return view('PlenoImpostoAumentado')
        ->with('Pleno', $Pleno);
    }

}

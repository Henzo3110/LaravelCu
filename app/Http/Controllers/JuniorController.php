<?php
// $request->query('get')
//Request $request
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Junior;


class JuniorController extends Controller
{
    public function AumentarSalario(string $nome,int $numeroInscricao, float $salario, Request $HorasTrabalhadas) {
        $HorasTrabalhadasint = intval($HorasTrabalhadas ->query('horas'));
        $Junior = new Junior($nome ,$numeroInscricao, $salario , $HorasTrabalhadasint );
        $Junior-> AumentarSalario($salario, $HorasTrabalhadasint);  
        return view('JuniorAumentado')
        ->with('Junior', $Junior);
    }
    
    public function calcularImposto(string $nome, float $salario, int $numeroInscricao, Request $HorasTrabalhadas) {
        $HorasTrabalhadasint = intval($HorasTrabalhadas ->query('horas'));
        $Junior = new junior ($nome, $salario, $numeroInscricao, $HorasTrabalhadasint);
        $Junior->calcularImposto($salario);
        return view('JuniorImposto') 
        ->with('Junior', $Junior);
    }
    public function calcularImpostoAumentado(string $nome, float $salarioAumentado, int $numeroInscricao, Request $HorasTrabalhadas) {
        $HorasTrabalhadasint = intval($HorasTrabalhadas ->query('horas'));
        $Junior = new Junior ($nome, $salarioAumentado, $numeroInscricao, $HorasTrabalhadasint);
        $Junior->calcularImpostoAumentado($salarioAumentado);
        return view('JuniorImpostoAumentado')
        ->with('Junior', $Junior);
     }

}

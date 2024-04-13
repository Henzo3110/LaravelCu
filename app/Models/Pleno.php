<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pleno extends Funcionario
{
    private $HorasTrabalhadas;

    public function getHorasTrabalhadas(){
        return $this->HorasTrabalhadas;
    }

    public function setHorasTrabalhadas($HorasTrabalhadas) {
        $this->HorasTrabalhadas = $HorasTrabalhadas;
    }
    public function AumentarSalario( $salario,$HorasTrabalhadas){
    $salario = parent::getSalario();
    $porcentagemAumento = 0.10;
    $porcentagemAumentomaior = 0.15;
    if($this->HorasTrabalhadas <= 100){
        $salarioAumentado = ($salario * $porcentagemAumento) + $salario;
        return parent::setSalario($salarioAumentado);
        }else {
            $salarioAumentado = ($salario * $porcentagemAumentomaior) + $salario;
            return parent::setSalario($salarioAumentado);
        }
    }
    public function calcularImposto($salario){
        $salario = parent::getSalario();
        $ImpostoDeRenda = ($salario * 0.11);
        $Inss = ($salario * 0.08);
        $Sindicato = ($salario * 0.05);
        $SomaDosImpostos = ($ImpostoDeRenda + $Inss + $Sindicato);
        $SalarioComDesconto = ($salario - $SomaDosImpostos);
        parent::setSalario($SalarioComDesconto);
    }
    public function calcularImpostoAumentado($salarioAumentado){
        $ImpostoDeRenda = ($salarioAumentado * 0.11);
        $Inss = ($salarioAumentado * 0.08);
        $Sindicato = ($salarioAumentado * 0.05);
        $SomaDosImpostos = ($ImpostoDeRenda + $Inss + $Sindicato);
        $salarioAumentadoComDesconto = ($salarioAumentado - $SomaDosImpostos);
        parent::setSalario($salarioAumentadoComDesconto);
    }
    public function __construct ($nome, $salario, $numeroInscricao, $HorasTrabalhadas){
        parent::setNome($nome);
        parent::setSalario($salario);
        parent::setNumeroInscricao($numeroInscricao);
        $this->setHorasTrabalhadas($HorasTrabalhadas);
    }
}

<?php

namespace App\Models;

use App\InterfaceFuncionario;
use App\Models\Funcionario;
use App\interfaceFuncionarios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Junior extends Funcionario
{
    use HasFactory;

    private $HorasTrabalhadas;

    public function getHorasTrabalhadas(){
        return $this->HorasTrabalhadas;
    }

    public function setHorasTrabalhadas($HorasTrabalhadas) {
        $this->HorasTrabalhadas = $HorasTrabalhadas;
    }

    public function AumentarSalario($salario, $HorasTrabalhadas) {
        $salario = parent::getSalario();
        if($HorasTrabalhadas >= 80) {
            $salarioCoisado = $salario * 0.10;
            $salarioAumentado = $salario + $salarioCoisado;
            parent::setSalario($salarioAumentado);
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

//12.1  8.8  5.5 26.4
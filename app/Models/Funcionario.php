<?php

namespace App\Models;

use App\InterfaceFuncionario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Funcionario extends Model implements InterfaceFuncionario
{
    use HasFactory;

    private $nome;
    private $salario;
    private $numeroInscricao;


    public function getNome() : string {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSalerio() : float {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getNumeroInscricao() : int {
        return $this->numeroInscricao;
    }

    public function setNumeroInscricao($numeroInscricao)  {
        $this->numeroInscricao = $numeroInscricao;
    }

    public function aumentarSalario($salario, $HorasTrabalhadas) : float {
        $aumento = ($salario * 0.10);
        $salarioAumentado = $salario + $aumento;
        return "salario aumentado em: ". $salarioAumentado;
    }

    public function calcularImposto($salario) : float {
        $ImpostoDeRenda = ($salario * 0.11);
        $Inss = ($salario * 0.08);
        $Sindicato = ($salario * 0.05);
        $SomaDosImpostos = ($ImpostoDeRenda + $Inss + $Sindicato);
        $SalarioComDesconto = ($salario - $SomaDosImpostos);
        return "Seu salario com o desconto dos impostos está em". $SalarioComDesconto;
    }
    public function calcularImpostoAumentado($salarioAumentado) : float {
        $ImpostoDeRenda = ($salarioAumentado * 0.11);
        $Inss = ($salarioAumentado * 0.08);
        $Sindicato = ($salarioAumentado * 0.05);
        $SomaDosImpostos = ($ImpostoDeRenda + $Inss + $Sindicato);
        $salarioAumentadoComDesconto = ($salarioAumentado - $SomaDosImpostos);
        return "Seu Salari$salarioAumentado com o desconto dos impostos está em". $salarioAumentadoComDesconto;
    }

    public function __construct($nome, $salario,$numeroInscricao) {
        $this->setNome($nome);
        $this->setNalario($salario);
        $this->setNumeroInscricao($numeroInscricao);

    }
}
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

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getSalario() : float {
        return $this->salario;
    }

    public function setSalario(float $salario) {
        $this->salario = $salario;
    }

    public function getNumeroInscricao() : int {
        return $this->numeroInscricao;
    }

    public function setNumeroInscricao(int $numeroInscricao)  {
        $this->numeroInscricao = $numeroInscricao;
    }
    public function __construct($nome, $salario, $numeroInscricao){
        $this->nome = $nome;
        $this->salario = $salario;
        $this->numeroInscricao = $numeroInscricao;
    }
}
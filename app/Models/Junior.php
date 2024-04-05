<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Junior extends Funcionario
{
    private $HorasTrabalhadas;

    public function getHorasTrabalhadas() : int {
        return $this->HorasTrabalhadas;
    }

    public function setHorasTrabalhadas($HorasTrabalhadas) {
        $this->HorasTrabalhadas = $HorasTrabalhadas;
    }

    public function aumentarSalario($HorasTrabalhadas, $salario) : int {
        if($HorasTrabalhadas < 80){
            $aumento = ($salario);
        }else {
            $aumento = ($salario * 0.10);
        }
        $salarioAumentado = $salario + $aumento;
        return "salario aumentado em: ". $salarioAumentado;
    }

}

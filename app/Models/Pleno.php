<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pleno extends Funcionario
{
    private $HorasTrabalhadas;

    public function getHorasTrabalhadas() : int {
        return $this->HorasTrabalhadas;
    }

    public function setHorasTrabalhadas(int $HorasTrabalhadas) {
        $this->HorasTrabalhadas = $HorasTrabalhadas;
    }
    
    public function aumentarSalario($HorasTrabalhadas, $salario) : int {
        if($HorasTrabalhadas < 100){
            $aumento = ($salario * 0.10);
        }else {
            $aumento = ($salario * 0.15);
        }
        $salarioAumentado = $salario + $aumento;
        return "salario aumentado em: ". $salarioAumentado;
    }
}

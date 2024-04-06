<?php

namespace App;

interface InterfaceFuncionario
{
    public function aumentarSalario($salario, $HorasTrabalhadas);
    
    public function calcularImposto($salario);
    
    public function calcularImpostoAumentado($salarioAumentado);
}

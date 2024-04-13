<?php

namespace App;

interface InterfaceFuncionario
{
    // 
    public function AumentarSalario($salario, $HorasTrabalhadas);
    
    public function calcularImposto($salario);
    
    public function calcularImpostoAumentado($salarioAumentado);
}
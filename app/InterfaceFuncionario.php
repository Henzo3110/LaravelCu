<?php

namespace App;

interface InterfaceFuncionario
{
    public function aumentarSalario($salario, $HorasTrabalhadas);
    
    public function calcularImpostoAumentado($salarioAumentado);

    public function calcularImposto($salario);
}

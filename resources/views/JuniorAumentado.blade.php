<h3>
    Cargo: junior <br>
    Nome: {{ $nome->getNome() }} <br>
    Salario: {{ $Salario->getSalario() }} <br>
    Horas Trabalhadas : {{$HorasTrabalhadas}} <br>
    {{ $Junior->aumentarSalario($HorasTrabalhadas) }} <br>
</h3>
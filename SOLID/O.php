<?php

// O — Open-Closed Principle (Princípio Aberto-Fechado)

class ContratoClt {

    public function calcularSalario() {}

}

class Estagio {

    public function bolsaAuxilio() {}

}

class ContratoPj {
    public function calcularPagamento() {}
}

class FolhaDePagamento { // essa classe não está de acordo ao O de solid pois a cada nova forma de pagamento é necessario modificar ela

    public function calcular($funcionario) {
        
        if($function instanceof ContratoClt) {
            $salario = $funcionario->calcularSalario();
        } else if($function instanceof Estagio) {
            $salario = $funcionario->bolsaAuxilio();
        } else if($function instanceof ContratoPj) {
            $salario = $funcionario->calcularPagamento();
        }

        return $salario;

    }

}

///////////////////////////////////////

interface Remuneravel {
    public function remuneracao();
}

class ContratoClt2 implements Remuneravel{

    public function remuneracao() {}

}

class Estagio implements Remuneravel {

    public function remuneracao() {}

}

class ContratoPj implements Remuneravel{
    public function remuneracao() {}
}

class ContratoInternacional implements Remuneravel {
    public function remuneracao() {}
}

class FolhaDePagamento { // essa classe está de acordo com o O de solid pois não é necessario alterar nada da classe mesmo adicionando novas classes de funcionario
    
    // aberto a extensão(mais funcionarios), fechado a modificação(não é necessario alterar o método para adicionar novos funcionarios)
    public function calcular(Remuneravel $funcionario) {
        
        return $funcionario->remuneracao();

    }

}




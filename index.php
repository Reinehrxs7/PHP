<?php

class Pessoa
{
    public $nome;
    public $telefone;
    public $endereço;
    public function __construct($nome, $telefone, $endereço){
        $this->nome=$nome;
        $this->telefone=$telefone;
        $this->endereço=$endereço;
    }
}

class PessoaFisica extends Pessoa
{
    public $CPF;
    public function __construct($nome, $telefone, $endereço, $CPF){
        parent:: __construct($nome, $telefone, $endereço,);
        $this->CPF=$CPF;
    }
}

class PessoaJuridica extends Pessoa
{
    public $CNPJ;
    private array $socios = [];
    public function __construct($nome, $telefone, $endereço, $CNPJ){
        parent:: __construct($nome, $telefone, $endereço);
        $this->CNPJ=$CNPJ;
    }

    public function adicionarSocio(PessoaFisica $socio){
    array_push($this->socios, $socio);
    }
}

$pf1= new PessoaFisica("joão", "11111-2222", "Rua A", "193.354.344-63");
$pf2= new PessoaFisica("mario", "22222-1111", "Rua A", "235.634.346-65");

$pj = new PessoaJuridica("gti","21212-2312", "Av das flores", "120.346.645/0001-65");
$pj->adicionarSocio($pf1);
$pj->adicionarSocio($pf2);

var_dump($pf1);
echo "<br>";
echo "<br>";
var_dump($pf2);
echo "<br>";
echo "<br>";
var_dump($pj);
echo "<br>";
echo "<br>";
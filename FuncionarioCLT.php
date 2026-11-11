<?php 
require_once "Funcionario.php";

class FuncionarioCLT extends Funcionario{
    # Atributos
    private string $cpf;
    private string $salarioBase;
    private float $taxaINSS;
    private float $faltas;
    private float $taxaFaltas;

    # Metódos
    # [Override]
    public function __construct(string $nome, string $email, string $cpf, string $telefone, string $nascimento, string $endereco, string $cargo, string $salarioBase, float $taxaINSS, float $faltas, float $taxaFaltas, bool $status){
        parent::__construct($nome, $email, $telefone, $nascimento, $endereco, $cargo, $status);
        $this->cpf = $cpf;
        $this->salarioBase = $salarioBase;
        $this->taxaINSS = $taxaINSS;
        $this->faltas = $faltas;
        $this->taxaFaltas = $taxaFaltas;
    }
}
?>
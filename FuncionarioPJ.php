<?php 
require_once "Funcionario.php";

class FuncionarioPJ extends Funcionario{
    # Atributos
    private string $cnpj;
    private float $valorNotaFiscal;
    private float $aliquotaImposto;
    private float $custosFixos;

    # Metódos
    # [Override]
    public function __construct(string $nome, string $email, string $cnpj, string $telefone, string $nascimento, string $endereco, string $cargo, float $valorNotaFiscal, float $aliquotaImposto, float $custosFixos, bool $status){
        parent::__construct($nome, $email, $telefone, $nascimento, $endereco, $cargo, $status);
        $this->cnpj = $cnpj;
        $this->valorNotaFiscal = $valorNotaFiscal;
        $this->aliquotaImposto = $aliquotaImposto;
        $this->custosFixos = $custosFixos;
    }
    }
    ?>
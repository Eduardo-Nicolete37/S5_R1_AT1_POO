<?php 
require_once "FuncionarioRepository.php";
abstract class Funcionario extends FuncionarioRepository {
    # Atributos
    protected string $nome;
    protected string $email;
    protected string $telefone;
    protected string $nascimento;
    protected string $endereco;
    protected string $cargo;
    protected bool $status;

    # Metódo construct

    public function __construct(string $nome, string $email, string $telefone, string $nascimento, string $endereco, string $cargo, bool $status){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->nascimento = $nascimento;
        $this->endereco = $endereco;
        $this->cargo = $cargo;
        $this->status = $status;
    }
}
?>
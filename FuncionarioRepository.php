<?php 
require_once "FuncionarioInterface.php";

# Metódos do Funcionário
abstract class FuncionarioRepository implements FuncionarioInterface {
    public function demitir()
    {
        if ($this->status) {
            $this->status = false;
            return "\n Funcionário foi demitido!";  
        } else {
            return "\n Essa pessoa nem sequer é funcionário! Quem é?";
        }
    }

    # [Override]
    public function contratar(){
        if (!$this->status){
            $this->status = True;
            return "\n Funcionário contratado!";
        } else {
            return "\n Funcionário já está contratado!";
        }
    }
}
?>
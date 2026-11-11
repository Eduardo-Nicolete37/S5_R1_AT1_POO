<?php 
require_once "FuncionarioCLT.php";
require_once "FuncionarioPJ.php";

$f[0] = new FuncionarioCLT("Kingo", "kingoLingoDingo@gmail.com", "123.456.789.22", "(19) 9580-3245", "31/11/1992", "Rua das Laranjeiras, 123", "Programador Senior",6700, 0.05, 5, 0.02, False);
$f[1] = new FuncionarioPJ("Banco Master", "vorcaroKingo@gmail.com", "123.456.789/0001-32", "(19) 9321-2343", "24/03/1980", "Rua Epitácio Oliveira, 321", "Programador Pleno", 6700, 0.05, 2000, True);

foreach ($f as $func) {
    echo $func->contratar();
    echo $func->demitir();
}
?>
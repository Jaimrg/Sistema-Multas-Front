<?php

if (isset($_POST['nome']) && isset($_POST['senha'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if ($nome == 'admin' and $senha == 'admin') {
       header("location: Painel_Administrador.php");
    } elseif($nome == '20193514' and $senha == '123'){
        header("location: Painel_Agente.php");
    }else{
        echo 'Nome de usuario ou senha invalido';
    }
}

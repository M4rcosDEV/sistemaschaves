<?php

include_once "chave.php";

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];

    if($tipo === 'cadastrarchave'){
        cadastrar();
    }else if($tipo === "excluirsala"){

    }
}

// $nome = $_POST['nome'];
// $predio = $_POST['predio'];

// echo $predio;
// echo $nome;
function cadastrar()
{
    $numero= $_POST['nome'];
    $predio = $_POST['predio'];
    $chave = new Chave($numero, $predio);
    $chave->inserir();
    //header("Location:index.php");
}

?>
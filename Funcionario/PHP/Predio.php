<?php

include_once 'Insert.php';
include_once 'Conexao.php';

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];

    if($tipo === "cadastrarPredio"){
        cadastrar();
    }
}

function cadastrar()
{
    //$id_predio = filter_input (INPUT_POST, 'id_Novo_Predio', FILTER_SANITIZE_NUMBER_INT);
    $idCadPredio = $_POST['idCadPredio'];
    $predio = new Predio($idCadPredio);
   
    $predio->inserir();
    header("Location: ../home.php");
}

function exibir(){
    $banco = new Banco();
    $conexao = $banco -> conectar();
        /*dados*/
        $stmt = $conexao -> prepare("SELECT * FROM predio");
        $stmt -> execute();
            $dados2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($dados2);
    }

print_r (exibir());
<?php

include_once "sala.php";

// function excluir_sala(){
//         $id_aluno = $_POST["id_aluno"];
//         $aluno = Aluno::carregar($id_aluno);
//         $aluno->excluir();
// }

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];
    if($tipo === 'cadastraraluno'){
        cadastrar();
    }else if($tipo === "excluiraluno"){
        excluir_aluno();
    }

    

}

function cadastrar()
{
    $numero = $_POST['numero'];

    $sala = new Aluno($numero);
   
    $sala->inserir();
    //header("Location:index.php");
}



function getSalas(){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("select * from sala");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $salas = array();
        foreach($stmt->fetchAll() as $v => $value){
            $sala = new Sala();
             $sala->id_sala = $value['id_sala'];
            array_push($salas, $sala);
        }
       return $salas;

    }catch(PDOException $ex){
        echo 'Erro; ' . $ex->getMessage();
    }
}



function getSalasPredio($id_predio){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("select * from sala where id_predio = :id_predio");
        $stmt->bindParam(':id_predio',$id_predio);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $salas = array();
        foreach($stmt->fetchAll() as $v => $value){
            $sala = new Sala();
             $sala->id_sala = $value['id_sala'];
            array_push($salas, $sala);
        }
       return $salas;

    }catch(PDOException $ex){
        echo 'Erro; ' . $ex->getMessage();
    }
}
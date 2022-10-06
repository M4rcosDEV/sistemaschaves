<?php
class Chave{
    public $id_chave;
    public $situacao;

    function __constructor($situacao){
        this->$situacao = $situacao;
    }

    function inserir(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            
            $stmt->execute();

        } catch(PDOException $ex){
            echo "Erro ao inserir aluno: " . $ex;
        }
    }

    function deletar(){

    }
}
?>
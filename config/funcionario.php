<?php
class Funcionario{
    public $id_funcionario;
    public $matricula;
    public $nome;
    public $cpf;
    public $tipo_func;

    function __constructor($matricula, $nome, $cpf, $tipo_func){
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->tipo_func = $tipo_func;
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
}
?>
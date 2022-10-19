<?php

include_once 'banco.php';

class Usuario {
    public $id;
    public $nome;
    public $tipo_func;
    public $matricula;
    public $senha;
    public $email;

    function __construct($nome, $tipo_func, $matricula, $senha, $email){
        $this->nome = $nome;
        $this->tipo_func = $tipo_func; 
        $this->matricula = $matricula; 
        $this->senha = $senha;
        $this->email = $email;
    }

    function inserirCliente()
    {
        $banco = new Banco();
        $conexao = $banco->conectar();
        try {
            $stmt = $conexao->prepare("insert into cliente(nome, matricula, senha, tipo_func, email) values (:nome, :matricula, :senha, :tipo_func, :email)");
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':matricula', $this->matricula);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->bindParam(':tipo_func', $this->tipo_func);
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();
            $_SESSION['sucesso_cadastro'] = true;
        }
        catch (PDOException $ex) {
            echo "Erro ao inserir Funcionário: " . $ex;
        }
    }

    function inserirAdministrador()
    {
        $banco = new Banco();
        $conexao = $banco->conectar();
        try {
            $stmt = $conexao->prepare("insert into administrador (nome, matricula, senha, tipo_func, email) values (:nome, :matricula, :senha, :tipo_func, :email)");
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':matricula', $this->matricula);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->bindParam(':tipo_func', $this->tipo_func);
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();
            $_SESSION['sucesso_cadastro'] = true;
        } catch (PDOException $ex) {
            echo "Erro ao inserir Funcionário: " . $ex;
        }
    }
}
?>
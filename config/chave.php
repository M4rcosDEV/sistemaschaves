<?php
class Chave{
    public $id_chave;
    public $situacao;
    public $id_sala;   
    public $id_predio;

    public $desc;

    function __construct($id_chave, $id_sala){
        $this->id_chave = $id_chave;
        $this->id_sala = $id_sala;
    }

    function inserir(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("insert into chave (id_chave, situacao, id_sala) values (:id_chave, :situacao, :id_sala)");
            $stmt->bindParam(':id_chave', $this->id_chave);
            $situacao = 1;
            $stmt->bindParam(':situacao', $situacao);
            $stmt->bindParam(':id_sala', $this->id_sala);
            // $stmt->bindParam(':id_predio', $this->id_predio);
            $stmt->execute();

        } catch(PDOException $ex){
            echo "Erro ao inserir aluno: " . $ex;
        }
    }
}
?>
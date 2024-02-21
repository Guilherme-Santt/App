<?php
class PessoaDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:8000;dbname=db_system_mvc";

        $conexao = new PDO($dsn, 'root', '');
    }

    public function insert(PessoaModel $model)
    {
        $sql = "INSERT INTO pessoa (nome, cpf, nascimento) VALUES (?,?,?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->nascimento);
        
        $stmt->execute();
        
    }
    public function update(PessoaModel $model)
    {

    }
    public function select()
    {

    }
}
?>
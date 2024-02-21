<?php
class PessoaModel
{
    public $id, $nome, $cpf, $nascimento;
    
    public function save()
    {
        include 'DAO/userDao.php';

        $dao = new PessoaDAO();

        $dao->insert($this);
    }
}
?>
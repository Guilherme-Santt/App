<?php
class PessoaController
{
    public static function index(){
        include 'View/modules/user/ListaUser.php';
    }    

    public static function form(){
        include 'View/modules/user/FormUser.php';

    }

    public static function save(){
        include 'Model/UserModel.php';
        $model = new PessoaModel();
        $model->$nome = $_POST['nome'];
        $model->$cpf = $_POST['cpf'];
        $model->$nascimento = $_POST['nascimento'];
        $model->save();
        
    }
}

?>
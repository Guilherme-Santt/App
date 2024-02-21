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
        var_dump($_POST);
    }
}

?>
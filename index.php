<?php
include 'Controller/UserController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/':
        echo "Página inicial";
    break;
        
    case '/user':
        PessoaController::index();
    break;

    case '/user/form':
        PessoaController::form();
    break;

    case '/user/form/save':
        PessoaController::save();
    break;

    default:
        echo "Erro 404";
    break;
                            
}
?>
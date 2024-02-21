<?php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch($url){
    case '/':
        echo "Página inicial";
    break;
        
    case '/user':
        echo "Listagem de usuarios";
    break;

    case '/cliente/form':
        echo "Página inicial";
    break;

    case '/':
        echo "Página inicial";
    break;

    default:
        echo "Erro 404";
    break;
                            
}
?>
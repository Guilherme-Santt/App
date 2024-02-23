<?php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        echo "teste";
    break;

    case '/pessoa':
        echo "teste";
    break;

    case '/pessoa/form':
        echo "teste";
    break;

    default:
        echo "teste";
    break;
}
?>
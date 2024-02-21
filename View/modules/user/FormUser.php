<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de user</title>
    <style>
        label, input{ display: block;}
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de pessoa</legend>

        <form action="/user/form/save" method="POST">
        
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text">

            <label for="cpf">CPF:</label>
            <input id="cpf" name="cpf" type="number">

            <label for="cpf">Data de Nascimento:</label>
            <input id="nascimento" name="nascimento" type="date">

            <button type="submit">Enviar</button>

        </form>

    </fieldset>
</body>
</html>
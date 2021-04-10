<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ongaku</title>
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.css">
</head>
<?php

    include_once "config.php";
    include_once "queries.php";

    var_dump($conn);
    var_dump(get_class_methods($conn));
    $parm = 'home';
    // get_pages
    if (isset($_GET['teste'])){
        $titulo = 'teste';
        $parm = 'teste';

    }

    // Inclui Paginas conforme o get
    switch ($parm){
        case 'teste':
            include_once 'teste.php';
    }
    ?>
<body>
<script src="node_modules/materialize-css/dist/js/materialize.js"></script>
</body>
</html>
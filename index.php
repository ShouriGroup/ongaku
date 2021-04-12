<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ongaku</title>
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <main>
        <?php
        $parm = "";
        //Constants with configurable values
        include_once "config.php";
        //File with funcions and anything relationed with data base
        include_once "classes/Users.php";
        // get_pages
        if (isset($_GET['home'])) {
            $titulo = 'home';
            $parm = 'home';
        } elseif (isset($_GET['dashboard'])) {
        }

        // Inclui Paginas conforme o get
        switch ($parm) {
            case 'home':
                include_once 'dashboard.php';
                break;
            default:
                include_once 'login.php';
                break;
        }
        ?>

        <script src="node_modules/materialize-css/dist/js/materialize.js"></script>
        <script src="js/custom.js"></script>
    </main>
</body>

</html>
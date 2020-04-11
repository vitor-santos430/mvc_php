<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Loja de Roupas Virtual</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
    <?php require_once 'templates/header.php'; ?>
    <div class="container">
        <div class="posheader">
            <p class="h2 text-center m-3 text-muted">O melhor lugar para você comprar</p>
        </div>
        <div class="shadow p-3 bg-white text-center py-5 mx-5 rounded">
            <?php
                //requisitos => vender, comprar, disponibilizar, estátisticas, entrada de mercadorias
                require_once 'controller/pages.php';
                if(isset($_GET['p']))
                {
                    if($_GET['p'] == "mostruario")
                    {
                        $tipo = $_GET['t'];
                        $mostruario = new Mostruario;
                        $mostruario->abrir($tipo);
                    }
                    else if($_GET['p'] == "compra")
                    {
                        $compra = new Compra;
                        $compra->abrir();
                    }
                    else
                    {
                        $tipo = $_GET['t'];
                        $mostruario = new Mostruario;
                        $mostruario->abrir($tipo);
                    }
                }
            ?>
        </div>
    </div>
    <script src="./bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap/dist/js/vendor/jquery.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
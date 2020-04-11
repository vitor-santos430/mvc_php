
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institucional</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/<?php if($_GET){ echo $_GET['url'].'.css'; }else{ echo 'home.css'; } ?>">
</head>
<body>
    <header>
        <h1 class="text-title">Tov Solutions</h1>
        <ul class="navbar">
            <a href="home"><li>Home</li></a>
            <a href="servicos"><li>Serviços</li></a>
            <a href="sobre"><li>Sobre</li></a>
            <a href="contato"><li>Contato</li></a>
        </ul>
        <a href="#" class="btn_menu">
            Menu
        </a>
    </header>

    <?php

    if($_GET){
        $url = explode('/',$_GET['url']);
        require_once './pages/routes.php';
        $routes = new Routes;
        $routes->use($url);
    }
    else{
        require_once 'pages/home/index.php';
    }
    ?>

    <footer>
        <span class="text-footer"> - Tov Solutions -</span>
        <p class="text-footer">2020</p>
    </footer>
</body>
</html>
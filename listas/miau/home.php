<?php 
require_once 'controllers/homecontroller.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        .sidebar {
            height: 100vh;
            width: 220px;
            position: fixed;
            top: 0;
            left: 0;
            background: #222;
            color: #fff;
            padding-top: 30px;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.5em;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px 20px;
            border-bottom: 1px solid #333;
        }
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }
        .sidebar ul li a:hover {
            background: #444;
        }
        .main-content {
            margin-left: 220px;
            padding: 40px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Consultas</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1>Bem-vindo, <?php echo $usuario->username; ?></h1>
        <p>Este é o seu painel inicial.  <?php print_r($usuario);?></p>


    </div>
</body>
</html>
<?php
require_once './core/Database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $stmt = $data->prepare('SELECT * FROM users WHERE username = :usuario AND password = :senha');
    $stmt -> bindValue(":usuario",$username);
    $stmt -> bindValue(":senha",$password);
    $stmt -> execute();
    $user = $stmt -> fetch();
    
    
    
    if ($user != NULL) {
        $_SESSION['userId'] = $user["iduser"];
        $_SESSION['isLogged'] = true;
        header('Location: home.php');
        
    }

}
?>
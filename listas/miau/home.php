<?php
session_start();
require_once 'core/Database.php';
require_once './models/user.php';

try {
    $stmt = $data->prepare("SELECT * FROM users WHERE iduser = :id");
    $stmt->bindValue(":id",$_SESSION['userId']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $usuario = new User($result["username"],$result["telefone"],$result["imgprofile"],$result["password"]);
    print_r($_SESSION['userId']);



/*     foreach($result as $key => $value){
       echo $key ." : ". $value;
    } */

    print_r($usuario);
} catch (PDOException $e) {
    echo "Erro ao buscar dados: " . $e->getMessage();
}
?>

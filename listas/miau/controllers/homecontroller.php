<?php
session_start();
require_once 'core/Database.php';
require_once 'models/user.php';

try {
    $data= $pdo->prepare("SELECT * FROM users WHERE iduser = :id");
    $data->bindValue(":id",$_SESSION['userId']);
    $data->execute();
    //$result = $data->fetch(PDO::FETCH_ASSOC);
    $usuario =  $data->fetchObject('User');




/*     foreach($result as $key => $value){
       echo $key ." : ". $value;
    } */

   
} catch (PDOException $e) {
    echo "Erro ao buscar dados: " . $e->getMessage();
}
?>
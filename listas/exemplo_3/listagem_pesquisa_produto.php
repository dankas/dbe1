<?php

$nome=$_POST['nome_prod'];

include "conecta.php";

$sql = "select nome,quantidade from produto where nome like '%$nome%'order by codpod";


$resultado = mysqli_query($conexao,$sql);



while($linha=mysqli_fetch_assoc($resultado)) {


	echo $linha['nome']." - ";
	echo $linha['quantidade']."<br>";

}
?>
<br>
<a href='form_cad_produto.php'>Voltar </a>
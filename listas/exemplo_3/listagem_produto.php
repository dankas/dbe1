<?php

include "conecta.php";

$sql = "select * from produto order by codpod";


$resultado = mysqli_query($conexao,$sql);



while($linha=mysqli_fetch_assoc($resultado)) {

?>
<section>
<form action="edicao_produto.php" method="post">
<p>ID: <?php echo $linha['codpod']; ?></p>
<input type ="hidden" name = "codpod" value="<?php echo $linha['codpod']?>">
<p>Nome:  <input type="text" name="nome" value="<?php echo $linha['nome']?>"></p>
<p>Tipo:<input type ="text" name = "tipo" value="<?php echo $linha['tipo']?>"></p> 
<p>Quantidade: <input type ="text" name = "quantidade" value="<?php echo $linha['quantidade']?>" ?></p>
<button type="submit" name="acao" value="editar"> Editar </button>
<button type="submit" name="acao" value="excluir" onclick = "return confirma_excluir()"> Deletar </button> 
</form>                                                         
</section>
<?php
}
?>
<a href='form_cad_produto.php'>Voltar </a>
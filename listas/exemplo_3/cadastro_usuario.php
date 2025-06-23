<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$cpf=$_POST['cpf'];
$senha=$_POST['senha'];
$nome_arquivo=$_FILES['arquivo']['name'];  
$tamanho_arquivo=$_FILES['arquivo']['size']; 
$arquivo_temporario=$_FILES['arquivo']['tmp_name']; 

if (move_uploaded_file($arquivo_temporario, "imagens/$nome_arquivo"))
{
	echo " Upload do arquivo: ". $nome_arquivo." foi concluído com sucesso <br>";
}
else
{
	echo "Arquivo não pode ser copiado para o servidor.";
	$nome_arquivo='foto.png';

}

include "conecta.php";

$sql="insert into pessoa (nome,email,cpf,senha,imagem) values ('$nome','$email','$cpf','$senha','$nome_arquivo')";

//echo $sql;

$resultado = mysqli_query($conexao,$sql);

if($resultado)
{
   echo "Cadastro Efetuado com sucesso";
}
else
{
   echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
   echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
}

?>
<br><a href='form_cad_usuario.php'>Voltar </a>
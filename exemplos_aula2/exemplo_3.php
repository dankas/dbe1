<?php
$conexao = mysqli_connect('localhost', 'root', '','aula');// conexão pelo método procedural - pela utilização de uma função
mysqli_set_charset($conexao,"utf8");

if (!$conexao) {
    die('Não foi possível conectar: ' . mysql_error()); // função que mostra os erros de sql da conexão
}

$sql="SELECT * FROM pessoa"; //preparação da string que vai ser passada para a função query

$resultado = mysqli_query($conexao,$sql) or die("Erro"); 
// seleciona todas as linhas e colunas da tabela pessoa
// se acontecer algum erro a execução é interrompida pelo die e mostra Erro
// mysqli_query (função procedural para executar um comando sql) 
// mysqli_query (esta função possui dois parametros $conexão e a query) 


while($dados=mysqli_fetch_assoc($resultado)){ // função procedural para retornar um vetor associativo em $dados - a cada iteração $dados contem uma linha do resultado da query - iniciando pela linha 0 

	echo $dados['codpessoa'];    // os índices de dados são strings com 
	echo "-";					 // a identificação das colunas do banco
	echo $dados['nome'];		  
	echo "-";					 
	echo $dados['email'];		 
	echo "-";
	echo $dados['cpf'].'<br>';
}

echo "<br><br><br>";

mysqli_data_seek($resultado,0);   //posiciona novamente o ponteiro na primeira linha de resultado - linha zero para iniciar um novo laço while para o mesmo $SQL 

while($dados=mysqli_fetch_row($resultado)){ // função procedural para retornar um vetor (numerico) em $dados - a cada iteração $dados contem uma linha do resultado da query - iniciando pela linha 0 

	echo $dados[0];      // os índices de dados são numéricos 
	echo "-";					   // conforme a ordem 
	echo $dados[1];		   // em que as colunas foram criadas na 
	echo "-";					   // iniciando em zero
	echo $dados[2];		 
	echo "-";
	echo $dados[3].'<br>';
}

echo "<br><br><br>";

mysqli_data_seek($resultado,0);   //posiciona novamente o ponteiro na primeira linha de resultado - linha zero para iniciar um novo laço while para o mesmo $SQL 

while($dados=mysqli_fetch_array($resultado)){ // função procedural para retornar um vetor (numerico e associativo) em $dados - a cada iteração $dados contem uma linha do resultado da query - iniciando pela linha 0 

	echo $dados['codpessoa'];    // os índices de dados podem ser strings com 
	echo "-";					 // a identificação das colunas do banco
	echo $dados['nome'];		 // ou os índices numéricos conforme a ordem 
	echo "-";					 // em que as colunas foram criadas na tabela
	echo $dados[2];		 // iniciando em zero
	echo "-";
	echo $dados[3].'<br>';
}

?>
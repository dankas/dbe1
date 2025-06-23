<?php
$conexao = new mysqli("localhost", "root", "", "aula"); // conexao pelo método orientado a objetos - através do instanciamento de um objeto 
//notação para acessar um método do objeto no PHP "$objeto->metodo()"
$conexao->set_charset("utf8");

if (!$conexao) {
    die('Não foi possível conectar: ' . mysql_error());
}

$sql="SELECT * FROM pessoa"; //preparação da string que vai ser passada para o método query

$resultado = $conexao->query($sql);  // seleciona todas as colunas e todas as linhas da tabela pessoa através do método query que é executado a partir do objeto de conexão $conexao->query

 while($linha=$resultado->fetch_object()){ // retorna um vetor de objeto
 						// outras opções: fetch_assoc,fetch_num e fetch_array
echo $linha->codpessoa;   
echo "-";
echo $linha->nome;      // notação para acessar um atributo do objeto no PHP
echo "-";				// "$objeto->atributo"
echo $linha->email;
echo "-";
echo $linha->cpf.'<br>';
}


?>
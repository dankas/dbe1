<?php
$conexao = mysqli_connect('localhost', 'root', '','aula');
$conexao->set_charset("utf8");
if (!$conexao) {
    die('Não foi possível conectar: ' . mysql_error());
}
var_dump($conexao);
echo 'Conexão bem sucedida';
echo "<br>";
echo "<br>";
echo "<br>";

$sql = mysqli_query($conexao,"select * from pessoa") or die("Erro");

print_r(mysqli_fetch_array($sql)); // retorna um vetor com ambos os índices
echo "<br>";                       // numérico e associativo 
echo "<br>";
echo "<br>";


print_r(mysqli_fetch_assoc($sql)); // retorna um vetor associativo
echo "<br>";
echo "<br>";
echo "<br>";

$sql->data_seek(1); //posiciona na segunda linha de resultado   
					//a primeira linha de resultado de um select é a zero 

print_r(mysqli_fetch_row($sql)); // retorna um vetor numérico
echo "<br>";
echo "<br>";
echo "<br>";

$sql->data_seek(0); //posiciona na primeira linha de resultado (linha zero)

print_r($sql->fetch_all(MYSQLI_ASSOC)); // utilizando o parametro: 
								// MYSQLI_ASSOC retorna um vetor associativo
								// MYSQLI_NUM retorna um vetor numerico
								// MYSQLI_BOTH retorna ambos (numérico e assocativo)
								// sem parametro retorna um vetor numérico
mysqli_close($conexao);
?>
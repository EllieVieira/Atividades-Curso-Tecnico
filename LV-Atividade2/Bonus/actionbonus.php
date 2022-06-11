<?php
header( 'Content-Type: text/html; charset=utf-8' );
require_once 'bonusatividade2.php';

$nome             = $_POST["nome"];
$datadenascimento = $_POST["data"];
$altura           = $_POST["altura"];
$dataNasc         = $_POST["data"];
$dataAtual        = date( "Y/m/d" );
$val              = ( (int) $dataAtual - (int) $dataNasc );

$pessoa = new Pessoa();
$pessoa->setNome( $nome );
$pessoa->setDatadeNascimento( $datadenascimento );
$pessoa->setAltura( $altura );

echo "<h1>Cliente</h1><br>";
echo "Nome: " . $pessoa->getNome() . ".<br>";
echo "Data de nascimento: " . $pessoa->getDatadeNascimento() . ".<br>";
echo "Altura: " . $pessoa->getAltura() . ".<br>";
echo "A idade é: $val Anos.";
?>
<?php
header( 'Content-Type: text/html; charset=utf-8' );
require_once 'atividade2.php';
$funcionario = new Funcionario();
$funcionario->setNome( "Maria" );
echo $funcionario->getNome();
echo "<br>";
$funcionario = new Funcionario();
$funcionario->setFuncao( "Vendedora" );
echo $funcionario->getFuncao();
echo "<br>";
$funcionario = new Funcionario();
$funcionario->setDepartamento( "Vendas" );
echo $funcionario->getDepartamento();
echo "<br>";
$funcionario = new Funcionario();
$funcionario->setSalario( "Salário Comercial" );
echo $funcionario->getSalario();
?>
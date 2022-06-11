<?php
require_once "Atividade1.php";

$nome           = $_POST["ename"];
$cpf            = $_POST["ecpf"];
$dataCadastro   = $_POST["edate"];
$dataNascimento = $_POST["fdate"];
$sexo           = $_POST["esexo"];
$celular        = $_POST["ecelular"];
$email          = $_POST["email"];

$cliente = new Cliente();
$cliente->setNome( $nome );
$cliente->setCpf( $cpf );
$cliente->setDataCadastro( $dataCadastro );
$cliente->setDataNascimento( $dataNascimento );
$cliente->setSexo( $sexo );
$cliente->setCelular( $celular );
$cliente->setEmail( $email );
echo "<h1>Informações do cliente:</h1><br>";
echo "Nome: " . $cliente->getNome() . ".<br>";
echo "CPF: " . $cliente->getCpf() . ".<br>";
echo "Data de cadastro: " . $cliente->getDataCadastro() . ".<br>";
echo "Data de nascimento: " . $cliente->getDataNascimento() . ".<br>";
echo "Sexo: " . $cliente->getSexo() . ".<br>";
echo "Celular: " . $cliente->getCelular() . ".<br>";
echo "E-mail: " . $cliente->getEmail() . ".<br>";
?>
<?php
require_once 'dao/ClienteDAO.php';
require_once 'dto/ClienteDTO.php';

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome( 'Alice' );
$clienteDTO->setPreco( 54,99 );
$clienteDTO->setCategoria( 'Computador' );
$clienteDTO->setFornecedor( 'Samsung' );

$clienteDAO = new ClienteDAO();
$clienteDAO->salvar( $clienteDTO );
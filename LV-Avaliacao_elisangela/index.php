<?php
require_once 'dao/ClienteDAO.php';
require_once 'dto/ClienteDTO.php';

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome( 'Maria' );
$clienteDTO->setPreco( 1211111124 );
$clienteDTO->setCategoria( '561455555' );
$clienteDTO->setFornecedor( "2021-02-20" );

$clienteDAO = new ClienteDAO();
$clienteDAO->salvar( $clienteDTO );
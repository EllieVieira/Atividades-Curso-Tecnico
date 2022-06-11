<?php
    require_once '../dto/ClienteDTO.php';
    require_once '../dao/ClienteDAO.php';

    error_reporting( 0 );
    $nome       = $_POST["nome"];
    $preco      = $_POST["preco"];
    $categoria  = $_POST["categ"];
    $fornecedor = $_POST["forn"];

    $clienteDTO = new ClienteDTO();
    $clienteDTO->setNome( $nome );
    $clienteDTO->setPreco( $preco );
    $clienteDTO->setCategoria( $categoria );
    $clienteDTO->setFornecedor( $fornecedor );

    $clienteDAO = new ClienteDAO();
    if ( $clienteDAO->salvar( $clienteDTO ) ) {
        header( "Location: ../form.php" );
    }
?>



<?php
    require_once '../dto/ClienteDTO.php';
    require_once '../dao/ClienteDAO.php';

    $nome           = $_POST["nome"];
    $cpf            = $_POST["cpf"];
    $dataNascimento = $_POST["datanascimento"];
    $telefone       = $_POST["telefone"];

    $clienteDTO = new ClienteDTO();
    $clienteDTO->setNome( $nome );
    $clienteDTO->setCpf( $cpf );
    $clienteDTO->setDataNascimento( $dataNascimento );
    $clienteDTO->setTelefone( $telefone );

    $clienteDAO = new ClienteDAO();
    if ( $clienteDAO->salvar( $clienteDTO ) ) {
        header( "Location: ../view/listarTodosClientes.php" );
    }
?>


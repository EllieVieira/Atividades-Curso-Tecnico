<?php
require_once 'conexao/Conexao.php';

class ClienteDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( ClienteDTO $clienteDTO ) {
        try {
            $sql = "INSERT INTO "
                . "tb_cliente(nome,cpf,datanascimento,telefone) "
                . "VALUES(:nome,:cpf,:datanascimento,:telefone)";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":nome", $clienteDTO->getNome() );
            $stmt->bindValue( ":cpf", $clienteDTO->getCpf() );
            $stmt->bindValue( ":datanascimento", $clienteDTO->getDataNascimento() );
            $stmt->bindValue( ":telefone", $clienteDTO->getTelefone() );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql  = "SELECT * FROM tb_cliente ORDER BY id DESC";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $clientes = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $clientes;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os clientes: ", $e->getMessage();
        }
    }
}
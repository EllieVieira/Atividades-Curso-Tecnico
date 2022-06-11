<?php

require_once 'conexao/Conexao.php';

class ClienteDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = conexao::getInstance();
    }

    public function salvar( ClienteDTO $clienteDTO ) {
        try {
            $sql = "INSERT INTO fitdb.tb_produto"
                . "(nome,preco,categoria,fornecedor)"
                . "VALUES(:nome,:preco,:categ,:forn)";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":nome", $clienteDTO->getNome() );
            $stmt->bindValue( ":preco", $clienteDTO->getPreco() );
            $stmt->bindValue( ":categ", $clienteDTO->getCategoria() );
            $stmt->bindValue( ":forn", $clienteDTO->getFornecedor() );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo $e->getMessage();
        }
    }
}
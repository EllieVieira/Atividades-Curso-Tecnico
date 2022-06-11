<?php
Class Conexao {

    private $pdo;

    public function __construct( $dbname, $host, $user, $senha ) {
        try {
            $this->pdo = new PDO( "mysql:dbname=" . $dbname . ";host=" . $host, $user, $senha );
        } catch ( PDOException $e ) {
            echo $e->getMessage();
        } catch ( Exception $e ) {
            echo $e->getMessage();
        }
    }

    public function buscarDados() {
        $res = array();
        $cmd = $this->pdo->query( "SELECT * FROM fitdb.tb_produto ORDER BY id DESC" );
        $res = $cmd->fetchAll( PDO::FETCH_ASSOC );
        return $res;
    }
}
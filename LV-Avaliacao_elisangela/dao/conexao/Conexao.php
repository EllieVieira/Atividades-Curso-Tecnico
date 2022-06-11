<?php

abstract class Conexao {
    private static $instance;
    /**
     *@return PDO
     */
    public static function getInstance() {
        try {
            if ( !isset( self::$instance ) ) {
                self::$instance = new PDO( "mysql:dbname=fitdb;host=127.0.0.1", "root", "" );
                self::$instance->setattribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            }
            return self::$instance;
        } catch ( PDOException $e ) {
            echo $e->getMessage();
        }
    }
}

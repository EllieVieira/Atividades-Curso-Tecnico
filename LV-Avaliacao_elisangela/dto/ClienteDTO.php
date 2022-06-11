<?php

class ClienteDTO {
    private $nome;
    private $preco;
    private $categoria;
    private $fornecedor;

    public function getNome() {
        return $this->nome;
    }

    public function setNome( $nome ) {
        $this->nome = $nome;
        return $this;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco( $preco ) {
        $this->preco = $preco;
        return $this;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria( $categoria ) {
        $this->categoria = $categoria;
        return $this;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function setFornecedor( $fornecedor ) {
        $this->fornecedor = $fornecedor;
        return $this;
    }
}
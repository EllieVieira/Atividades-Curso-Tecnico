<?php
class Funcionario {
    private $nome;
    private $funcao;
    private $departamento;
    private $salario;

    public function getNome() {
        return $this->nome;
    }
    public function setNome( $nome ) {
        $this->nome = $nome;
    }

    public function getFuncao() {
        return $this->funcao;
    }
    public function setFuncao( $funcao ) {
        $this->funcao = $funcao;
    }

    public function getDepartamento() {
        return $this->departamento;
    }
    public function setDepartamento( $departamento ) {
        $this->departamento = $departamento;
    }

    public function getSalario() {
        return $this->salario;
    }
    public function setSalario( $salario ) {
        $this->salario = $salario;
    }
}
?>
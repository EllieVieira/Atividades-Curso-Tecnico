<?php
class Pessoa {
    private $nome;
    private $datadenascimento;
    private $altura;

    public function getNome() {
        return $this->Nome;
    }
    public function setNome( $nome ) {
        $this->Nome = $nome;
    }

    public function getDatadeNascimento() {
        return $this->DatadeNascimento;
    }
    public function setDatadeNascimento( $datadenascimento ) {
        $this->DatadeNascimento = $datadenascimento;
    }

    public function getAltura() {
        return $this->Altura;
    }
    public function setAltura( $altura ) {
        $this->Altura = $altura;
    }
}
?>
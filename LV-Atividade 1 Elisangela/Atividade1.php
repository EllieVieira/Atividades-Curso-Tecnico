<?php

    class Cliente {
        private $nome;
        private $cpf;
        private $dataCadastro;
        private $dataNascimento;
        private $sexo;
        private $celular;
        private $email;

        public function getNome() {
            return $this->nome;
        }
        public function setNome( $nome ) {
            $this->nome = $nome;
        }

        public function getCpf() {
            return $this->cpf;
        }
        public function setCpf( $cpf ) {
            $this->cpf = $cpf;
        }

        public function getDataCadastro() {
            return $this->dataCadastro;
        }
        public function setDataCadastro( $dataCadastro ) {
            $this->dataCadastro = $dataCadastro;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }
        public function setDataNascimento( $dataNascimento ) {
            $this->dataNascimento = $dataNascimento;
        }

        public function getSexo() {
            return $this->sexo;
        }
        public function setSexo( $sexo ) {
            $this->sexo = $sexo;
        }

        public function getCelular() {
            return $this->celular;
        }
        public function setCelular( $celular ) {
            $this->celular = $celular;
        }

        public function getEmail() {
            return $this->email;
        }
        public function setEmail( $email ) {
            $this->email = $email;
        }

    }
?>

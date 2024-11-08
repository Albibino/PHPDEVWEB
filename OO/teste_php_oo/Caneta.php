<?php 
class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $carga;
    private $tampada;
    
    public function __construct($modelo, $cor, $ponta, $carga, $tampada) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->carga = $carga;
        $this->tampada = $tampada;
    }

    public function getCor() { 
        return $this->cor; 
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function getCarga() {
        echo 'Carga da caneta: '.$this->carga.'%';
    }

    public function getTampada() {
        return $this->tampada;
    }

    public function setRabiscando() {
        $this->getCarga();
        if ($this->tampada == false) {
            echo '<br>';
            echo 'Estou rabiscando...';
            $this->carga = $this->carga - 10;
        }
        else if ($this->tampada == true) {
            echo 'Destampe a caneta para poder rabiscar.';
        }
    }

    public function setTampada() {
        if ($this->tampada == true) {
            $this->tampada = false;
        }
        else if ($this->tampada == false) {
            $this ->tampada = true;
        }
    }
}
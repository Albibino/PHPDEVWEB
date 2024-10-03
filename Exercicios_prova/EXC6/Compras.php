<?php

class ListaDeCompras{
    private $produto;
    private $quantidade;
    private $precokg;

    public function __construrct() {
        $this->produto = "melancia";
        $this->quantidade = 1;
        $this->precokg = 0.50;
    }

    public function getProduto(){
        return $this->produto;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getPrecokg(){
        return $this->precokg;
    }
}


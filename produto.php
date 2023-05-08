<?php

class Produto{
    //atributos
    private $nome;
    private $marca;
    private $descricao;
    private $valor;
    //Contrutores
    function __construct($nome, $marca, $descricao, $valor){
        $this->nome = $nome;
        $this->marca = $marca;
        $this->descricao = $descricao;
        $this->valor = $valor;
    }


    //getters and setters
    function set_nome($nome){
        $this->nome =$nome;
    }

    function get_nome(){
        return($this->nome);
    }


    function set_marca($marca){
        $this->marca =$marca;
    }

    function get_marca(){
        return($this->marca);
    }


    function set_descricao($descricao){
        $this->descricao =$descricao;
    }

    function get_descicao(){
        return($this->descricao);
    }


    function set_valor($valor){
        $this->valor =$valor;
    }

    function get_valor(){
        return($this->valor);
    }



    //métodos
    function atualizar($taxa){
        $x=($this->valor*$taxa) / 100;
        echo "O Produto " . $this->nome . " custa " . ($this->valor*$taxa) / 100;
        $this->valor =$this->valor + $x;
    }

    function nome(){
        echo " O Produto " . $this->nome . " é da marca " . $this->marca
        . " tem a cor " . $this->descricao ;

         
    }
    



   

}
?>


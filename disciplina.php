<?php

class Disciplina{
    //atributos
    private $nome;
    private $professor;  
    private $aulas;
    private $avaliacoes;
    private $aluno;
    //Contrutores
    function __construct($nome, $professor, $aulas, $avaliacoes, $aluno){
        $this->nome = $nome;
        $this->professor = $professor;
        $this->aulas = $aulas;
        $this->avaliacoes = $avaliacoes;
        $this->aluno = $aluno;
    }


    //getters and setters
    function set_nome($nome){
        $this->nome =$nome;
    }

    function get_nome(){
        return($this->nome);
    }



    function set_professor($professor){
        $this->$professor =$professor;
    }

    function get_professor(){
        return($this->professor);
    }



    function set_aulas($aulas){
        $this->aulas =$aulas;
    }

    function get_aulas(){
        return($this->aulas);
    }



    function set_avaliacoes($avaliacoes){
        $this->avaliacoes =$avaliacoes;
    }

    function get_avaliacoes(){
        return($this->avaliacoes);
    }



    function set_aluno($aluno){
        $this->aluno =$aluno;
    }

    function get_aluno(){
        return($this->aluno);
    }

    
    function exibir(){
        echo "O Curso ". $this->nome ." Tem o professor " . $this->professor . " com   " . $this->aulas . " e avaliacao P1 dia: " . $this->avaliacoes . " com os alunos:" . $this->aluno;

         
    }

}
<?php

require "produto.php";
//Instaciando objeto produto 1 
$produto1 = new Produto ("celular", "iphone", "preto",200);

$produto1->atualizar(10);
$produto1->nome();
?>
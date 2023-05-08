<?php
require "cliente.php";

$cliente1 = new Cliente("Yan", "404-808-168-32", "18", "rua: jose Ribeiro da Motta", "yan060604@gmail", "996538506");

$cliente1->verificarIdade(18);
$cliente1->exibir()

?>
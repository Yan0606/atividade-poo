<?php
require "cliente.php";

$cliente1 = new Cliente("Yan", "404", "18", "rua jose", "gmail", "018");

$cliente1->verificarIdade(18);


?>
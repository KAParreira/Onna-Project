<?php

header("Location: ../cadastro-funcionario.php");

require_once("Profissional.php");

$profissional = new Profissional();

$profissional->setNomeProfissional($_POST['NomeF']);
$profissional->setCpfProfissional($_POST['CpfF']);
$profissional->setRgProfissional($_POST['RgF']);

$profissional->cadastrar($profissional);

?>

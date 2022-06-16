<?php
  
  header("Location: ../cadastro-cliente.php");

  require_once("Paciente.php");

  $paciente = new Paciente();

  $paciente->setnomePaciente($_POST['NomeP']);
  $paciente->setcpfPaciente($_POST['CpfP']);
  $paciente->setrgPaciente($_POST['RgP']);
  $paciente->setdataNascimentoPaciente($_POST['DataP']);
  $paciente->setemailPaciente($_POST['EmailP']);
  $paciente->settelefonePaciente($_POST['TelefoneP']);
  $paciente->setcelularPaciente($_POST['CelularP']);

  $paciente->cadastrar($paciente);

  echo("<h1> Paciente: ". $paciente->getnomePaciente() . "</h1> CPF: " . $paciente->getcpfPaciente() ."
  <br> E-mail: ". $paciente->getemailPaciente() . "<br> Celular: " . $paciente->getcelularPaciente() . "<br> <h1>cadastrado com sucesso</h1>");

?>
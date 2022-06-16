<?php
    header("Location: ../form-agenda.php");

    require_once("Paciente.php");
    require_once("Profissional.php");
    require_once("Agenda.php");

    $paciente = new Paciente();
    $profissional = new Profissional();
    $agenda = new Agenda();

    $agenda->setDtAgenda($_POST['txtData']);
    $agenda->setHoraAgenda($_POST['txtHora']);

    $paciente->setidPaciente($_POST['paciente']);
    $agenda->setPaciente($paciente);

    $profissional->setIdProfissional($_POST['profissional']);
    $agenda->setProfissional($profissional);

    $agenda->cadastrar($agenda);

?>
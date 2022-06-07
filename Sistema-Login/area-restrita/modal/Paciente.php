<?php

require_once("Conexao.php");

class Paciente
{
    private $nomePaciente;
    private $idPaciente;
    private $cpfPaciente;
    private $dataNascimentoPaciente;
    private $emailPaciente;
    private $celularPaciente;
    private $telefonePaciente;
    private $rgPaciente;


    function setnomePaciente($nomePaciente)
    {
        $this->nomePaciente = $nomePaciente;
    }
    function getnomePaciente()
    {
        return $this->nomePaciente;
    }

    function setidPaciente($idPaciente)
    {
        $this->idPaciente = $idPaciente;
    }
    function getidPaciente()
    {
        return $this->idPaciente;
    }

    function setcpfPaciente($cpfPaciente)
    {
        $this->cpfPaciente = $cpfPaciente;
    }
    function getcpfPaciente()
    {
        return $this->cpfPaciente;
    }

    function setdataNascimentoPaciente($dataNascimentoPaciente)
    {
        $this->dataNascimentoPaciente = $dataNascimentoPaciente;
    }
    function getdataNascimentoPaciente()
    {
        return $this->dataNascimentoPaciente;
    }
    function setemailPaciente($emailPaciente)
    {
        $this->emailPaciente = $emailPaciente;
    }
    function getemailPaciente()
    {
        return $this->emailPaciente;
    }
    function setcelularPaciente($celularPaciente)
    {
        $this->celularPaciente = $celularPaciente;
    }
    function getcelularPaciente()
    {
        return $this->celularPaciente;
    }
    function settelefonePaciente($telefonePaciente)
    {
        $this->telefonePaciente = $telefonePaciente;
    }
    function getTelefonePaciente()
    {
        return $this->telefonePaciente;
    }
    function setrgPaciente($rgPaciente)
    {
        $this->rgPaciente = $rgPaciente;
    }
    function getrgPaciente()
    {
        return $this->rgPaciente;
    }

    public function cadastrar($paciente)
    {
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare("INSERT INTO tbpaciente(nomepaciente, cpfpaciente, rgpaciente, datanascpaciente,
         emailpaciente, telefonepaciente, celularpaciente) 
        VALUES(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $paciente->getnomePaciente());
        $stmt->bindValue(2, $paciente->getcpfPaciente());
        $stmt->bindValue(3, $paciente->getrgPaciente());
        $stmt->bindValue(4, $paciente->getdataNascimentoPaciente());
        $stmt->bindValue(5, $paciente->getemailPaciente());
        $stmt->bindValue(6, $paciente->getTelefonePaciente());
        $stmt->bindValue(7, $paciente->getcelularPaciente());

        $stmt->execute();
    }
    public function listar()
    {
        $conexao = Conexao::conectar();
        $querySelect = " SELECT idpaciente, nomepaciente, cpfpaciente, rgpaciente, datanascpaciente, emailpaciente
        ,telefonepaciente, celularpaciente FROM tbpaciente";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}

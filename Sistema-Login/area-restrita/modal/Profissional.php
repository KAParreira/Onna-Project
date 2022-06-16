<?php

require_once("Conexao.php");

class Profissional
{   
    private $idProfissional;
    private $nomeProfissional;
    private $cpfProfissional;
    private $rgProfissional;

    public function getIdProfissional()
    {
        return $this->idProfissional;
    }
    public function setIdProfissional($idProfissional)
    {
        $this->idProfissional = $idProfissional;
    }
    public function getNomeProfissional()
    {
        return $this->nomeProfissional;
    }

    public function setNomeProfissional($nomeProfissional)
    {
        $this->nomeProfissional = $nomeProfissional;

        return $this;
    }

    public function getCpfProfissional()
    {
        return $this->cpfProfissional;
    }

    public function setCpfProfissional($cpfProfissional)
    {
        $this->cpfProfissional = $cpfProfissional;

        return $this;
    }

    public function getRgProfissional()
    {
        return $this->rgProfissional;
    }

    public function setRgProfissional($rgProfissional)
    {
        $this->rgProfissional = $rgProfissional;

        return $this;
    }

    public function cadastrar($profissional)
    {
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare("INSERT INTO tbprofissional(nomeprofissional, cpfprofissional, rgprofissional) 
        VALUES(?, ?, ?)");
        $stmt->bindValue(1, $profissional->getnomeprofissional());
        $stmt->bindValue(2, $profissional->getcpfprofissional());
        $stmt->bindValue(3, $profissional->getrgprofissional());
        $stmt->execute();
    }
    public function listar()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idprofissional, nomeprofissional, cpfprofissional, rgprofissional FROM tbprofissional";
        $resultado = $conexao->query($querySelect);
        $lista2 = $resultado->fetchAll();
        return $lista2;
    }
}

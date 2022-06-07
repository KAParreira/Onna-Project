<?php
include_once("./valida-sentinela.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../IMG/icon.png">
    <link rel="stylesheet" href="../assets/CSS/restritaStyle.css">
    <title>Document</title>
</head>
<body>
<div class="container">



<body>
  <div id="sidebar">
    <div class="toggle-btn" onclick ="show()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul>
      <li><a href="index-area-restrita.php">Home</a></li>
      <li><a href="cadastro-cliente.php">Cliente</a></li>
      <li><a href="cadastro-funcionario.php">Funcionario</a></li>
      <li><a href="#">Agencia</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<h1>Home Cliente</h1>
<div class="tabelinha">
  <table class="container">
    <?php 
    $titulos = array(
      0 => "id",
      1 => "Nome",
      2 => "Cpf",
      3 => "Rg",
      4 => "Nascimento",
      5 => "Email",
      6 => "Telefone",
      7 => "Celular",
    );
    $id = array(
      0 => "1",
      1 => "2",
      2 => "3",
      3 => "4",
      4 => "5",
    );
    $nome = array(
      0 => "Kauan",
      1 => "Bruno",
      2 => "Igor",
      3 => "Ricardo",
      4 => "Neymar"
    );
    $cpf = array(
      0 => "123.123.123-10",
      1 => "123.123.123-11",
      2 => "123.123.123-12",
      3 => "123.123.123-13",
      4 => "123.123.123-14",
    );
    $rg = array(
      0 => "134.456-10",
      1 => "134.456-11",
      2 => "134.456-12",
      3 => "134.456-13",
      4 => "134.456-14",
    );
    $nascimento = array(
      0 => "20/12/2000",
      1 => "20/12/2001",
      2 => "20/12/2002",
      3 => "20/12/2003",
      4 => "20/12/2004",
    );
    $email = array(
      0 => "Usuario00@etec.sp.gov.br",
      1 => "Usuario01@etec.sp.gov.br",
      2 => "Usuario02@etec.sp.gov.br",
      3 => "Usuario03@etec.sp.gov.br",
      4 => "Usuario04@etec.sp.gov.br",
    );
    $telefone = array(
      0 => "4002-8920",
      1 => "4002-8921",
      2 => "4002-8922",
      3 => "4002-8923",
      4 => "4002-8924",
    );
    $celular = array(
      0 => "91324-4560",
      1 => "91324-4561",
      2 => "91324-4562",
      3 => "91324-4563",
      4 => "91324-4564",
    );
    ?>
    
    <tr>
    <?php
    for($i = 0; $i <=7; $i++){
      echo('<th>'. $titulos[$i].'</th>');
    }
    ?>
    </tr>
    <tr>
      <?php 
      for($i = 0; $i <=4; $i++){
        $view = array(
          0 => $id[$i],
          1 => $nome[$i],
          2 => $cpf[$i],
          3 => $rg[$i],
          4 => $nascimento[$i],
          5 => $email[$i],
          6 => $telefone[$i],
          7 => $celular[$i],
        );
        echo('<tr>');
        for($j=0; $j<=7; $j++){
          echo('<td>'. $view[$j].'</td>');
        }
        echo('</tr>');
      }
      ?>
      
    
  </table>
</div>

<style>
p1{
  
  text-align: center;
  font-family: 'Honey';
  color: #999;
  font-size: 15px;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../assets/JS/Navbar.js"></script>
</body>

</html>
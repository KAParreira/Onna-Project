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
    <title>Agenda</title>
</head>

<body>

    <div id="sidebar">
        <ul>
            <li><a href="index-area-restrita.php">Home</a></li>
            <li><a href="cadastro-cliente.php">Paciente</a></li>
            <li><a href="cadastro-funcionario.php">Funcionario</a></li>
            <li><a href="#">Agendamento</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </div>
    <?php
    require_once('modal/Paciente.php');
    require_once('modal/Profissional.php');
    require_once('modal/Agenda.php');

    try {
        $paciente = new Paciente();
        $profissional = new Profissional();
        $agenda = new Agenda();
        $listapaciente = $paciente->listar();
        $listaprofissional = $profissional->listar();
        $listaagenda = $agenda->listar();
    } catch (Exception $error) {
        echo $error->getMessage();
    }
    ?>

    <div class="tabelinha">
        <h1>Agendamentos</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Paciente</th>
                    <th>Profissional</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaagenda as $linha) { ?>
                    <tr>
                        <td><?php echo $linha['idagenda'] ?></td>
                        <td><?php echo $linha['dtagenda'] ?></td>
                        <td><?php echo $linha['horaagenda'] ?></td>
                        <td><?php echo $linha['nomepaciente'] ?></td>
                        <td><?php echo $linha['nomeprofissional'] ?></td>
                        <td>
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></i>
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg></i>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <button id="myBtn">INSERIR CADASTRO</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <form action="../area-restrita/modal/cadrasta-agenda.php" method="POST">
                    <div class="box">
                        <label>Data:</label><br>
                        <input class="inpP" type="date" name="txtData">
                        <br>
                        <label>Hora:</label><br>
                        <input class="inpP" type="time" name="txtHora">
                        <br>
                        <label>Paciente</label><br>
                        <select class="inpP" name="paciente">
                            <option value="0">Selecione</option>
                            <?php foreach ($listapaciente as $linha) { ?>
                                <option value="<?php echo $linha['idpaciente'] ?>">
                                    <?php echo $linha['nomepaciente'] ?>
                                </option>
                            <?php } ?>
                        </select>
                        <br>
                        <label>Profissional</label>
                        <select class="inpP" name="profissional">
                            <option value="0">Selecione</option>
                            <?php foreach ($listaprofissional as $linha) { ?>
                                <option value="<?php echo $linha['idprofissional'] ?>">
                                    <?php echo $linha['nomeprofissional'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <input class="Butao" type="submit" value="Cadastrar">
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/JS/Navbar.js"></script>
    <script src="../assets/JS/Modal.js"></script>
</body>

</html>
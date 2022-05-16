<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onna Estética</title>
    <link rel="icon" href="../../IMG/icon.png">
    <link rel="stylesheet" type="text/css" href="../assets/CSS/restritaStyle.css">
</head>

<body>
    <?php
    include_once("./valida-sentinela.php");
    ?>

    <nav>
        <div class="boxH">
            <hr>
            <h2> ようこそ！<?php echo ($_SESSION['login-session']); ?> </h2>
            <hr>
        </div>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="cadastro-cliente.php"> CADASTRO CLIENTE</a></li>
            <li><a href="../logout.php">LOGOUT</a></li>
        </ul>
        <img class="img2" src="../../IMG/Logo2.png">
    </nav>

    <section>
        <h1>LISTA DE CLIENTES</h1>
        <table>
            <?php
            $titulos = array(
                0 => "Id",
                1 => "Nome",
                2 => "Contato",
            );
            $id = array(
                0 => "1",
                1 => "2",
                2 => "3",
                3 => "4",
                4 => "5",

            );
            $nomes = array(
                0 => "Cleytom",
                1 => "Cleytin",
                2 => "Cleytão",
                3 => "Kleyton",
                4 => "kleycton",
            );
            $contatos = array(
                0 => "1198765432",
                1 => "1192345678",
                2 => "1197862541",
                3 => "1196325874",
                4 => "1195468732",
            );

            ?>
            <tr>
                <?php
                for ($i = 0; $i <= 2; $i++) {
                    echo ('<th>' . $titulos[$i] . '</th>');
                }
                ?>
            </tr>
            <?php
            for ($i = 0; $i <= 4; $i++) {
                $vetor = array(
                    0 => $id[$i],
                    1 => $nomes[$i],
                    2 => $contatos[$i],
                );
                echo ('<tr>');
                for ($j = 0; $j <= 2; $j++) {
                    echo ('<td>' . $vetor[$j] . '</td>');
                }
                echo ('</tr>');
            }
            ?>

        </table>    


    </section>

</body>

</html>
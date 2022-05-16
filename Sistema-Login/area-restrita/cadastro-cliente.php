<?php
include_once('./valida-sentinela.php');
?>

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
    <nav>
        <div class="boxH">
            <hr>
            <h2> ようこそ！<?php echo ($_SESSION['login-session']); ?> </h2>
            <hr>
        </div>
        <ul>
            <li><a href="index-area-restrita.php">HOME</a></li>
            <li><a href="#"> CADASTRO CLIENTE</a></li>
            <li><a href="../logout.php">LOGOUT</a></li>
        </ul>
        <img class="img2" src="../../IMG/Logo2.png">
    </nav>

    <section>
        <h1>CADASTRO DE CLIENTES</h1>
        <table>
            <?php
            $titulos = array(
                0 => "Id",
                1 => "Nome",
                2 => "Contato",
                3 => "Edit",
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

            $edit = array(
                0 => '  <form action="">
                <button class="button"><i><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 17 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></i></button>
                <button class="button"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
              </svg></i></button>
            </form>',
            );

            ?>
            <tr>
                <?php
                for ($i = 0; $i <= 3; $i++) {
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
                    3 => $edit[0],
                );
                echo ('<tr>');
                for ($j = 0; $j <= 3; $j++) {
                    echo ('<td>' . $vetor[$j] . '</td>');
                }
                echo ('</tr>');
            }
            ?>

        </table>    


    </section>


</body>

</html>
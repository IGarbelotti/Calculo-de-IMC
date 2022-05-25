<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <div id="resposta">
            <?php
            $p = $_POST['peso'];
            $a = $_POST['altura'];
            $imc = $p / ($a * $a);
            /* number_format = numero formatado, casas decimais, pontuação decimal */
            $imc = number_format($imc, 1, '.' ,'');
            echo "Seu IMC é $imc <br>";
            if ($imc < 18.5) {
                echo "Voce esta abaixo do Peso";
                echo "<img src='desnutricao.gif' width=200 height=150 />";
            }
             else if ($imc >= 18.5 and $imc < 25) {
                echo "Você está com peso Normal";
                echo "<img src='saudavel.gif' width=200 height=150 />";
            }
             else if ($imc >= 25 and $imc < 30) {
                echo "Você está com Sobrepeso";
                echo "<img src='fome.gif' width=200 height=150 />";
            }
             else if ($imc >= 30 and $imc < 35) {
                echo "Você está com Obesidade grau 1";
                echo "<img src='obesidade1.gif' width=200 height=150 />";
            }
             else if ($imc >= 35 and $imc < 40) {
                echo "Você está com Obesidade grau 2<br>";
                echo "<img src='obesidade2.gif' width=150 height=150 />";
            }
             else if ($imc >= 40) {
                echo "Você está com Obesidade grau 3";
                echo "<img src='obesidade3.gif' width=200 height=150 />";
            }
             else {
                echo "Numero Inválido";
                echo "<img src='else.gif' width=200 height=150 />";
            }
            ?>
            <a href="index.php"> Voltar </a>
        </div>
    </div>
</body>

</html>
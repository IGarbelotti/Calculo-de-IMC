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
            echo "Seu IMC é $imc <br>";
            if ($imc < 18.5) {
                echo "Voce esta abaixo do peso";
            }
             else if ($imc >= 18.5 and $imc < 25) {
                echo "Você está com peso Normal";
            }
             else if ($imc >= 25 and $imc < 30) {
                echo "Você está com Sobrepeso";
            }
             else if ($imc >= 30 and $imc < 35) {
                echo "Você está com Obesidade grau 1";
            }
             else if ($imc >= 35 and $imc < 40) {
                echo "Você está com Obesidade grau 2";
            }
             else if ($imc < 40) {
                echo "Você está com Obesidade grau 3";
            }
             else {
                echo "Numero Inválido";
            }
            ?>
        </div>
    </div>
</body>

</html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta();
        $c1->ponta = 0.5;
        $c1->cor = "Azul";
        $c1->tampada = false;

        $c1->rabiscar();

        var_dump($c1);
    ?>
</body>

</html>

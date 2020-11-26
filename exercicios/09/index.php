<html>

<head>

</head>

<body>
<h1>Leitores</h1>
<pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $p = new Pessoa(
        "Jonas Brito",
        20,
        "Masculino"
    );

    $l = new Livro(
        "A cabana",
        "Mack",
        187,
        $p
    );
    $l->folhear();
    $l->detalhes();

    ?>
    </pre>
</body>

</html>
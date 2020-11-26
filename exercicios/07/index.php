<html>

<head>

</head>

<body>
<h1>Lutadores</h1>
<pre>
    <?php
    require_once 'Lutador.php';

    $l = array();

    $l[0] = new Lutador(
        "Pretty Boy",
        "França",
        31,
        1.75,
        68.9,
        11,
        3,
        1
    );

    $l[1] = new Lutador(
        "Putscript",
        "Brasil",
        29,
        1.68,
        57.8,
        14,
        2,
        3
    );
    $l[0]->apresentar();
    echo "<br>";
    $l[1]->apresentar();
    ?>
    </pre>
</body>

</html>
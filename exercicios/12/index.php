<html>

<head>

</head>

<body>
<h1>Animais</h1>
<pre>
    <?php
    require_once 'Animal.php';
    require_once 'Peixe.php';
    require_once 'Mamifero.php';
    require_once 'Ave.php';
    require_once 'Reptil.php';

    $p1 = new Mamifero();
    $p2 = new Reptil();
    $p3 = new Peixe();
    $p4 = new Ave();

    $p1->setPeso(84.2);
    $p1->setIdade(2);
    $p1->setMembros(4);
    $p1->locomover();
    $p1->alimentar();
    $p1->emitirSom();

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    ?>
    </pre>
</body>

</html>
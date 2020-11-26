<html>

<head>

</head>

<body>
<h1>Pessoas</h1>
<pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Funcionario.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';

    $p1 = new Pessoa("Jonas", 20, "M");
    $p2 = new Funcionario("Jonas", 20, "M");
    $p3 = new Aluno("Jonas", 20, "M");
    $p4 = new Professor("Jonas", 20, "M");

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    ?>
    </pre>
</body>

</html>
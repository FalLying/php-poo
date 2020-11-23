<html>

<head>
    <title>POO</title>
</head>
<body>
<pre>
<?php
    require_once 'ContaBanco.php';

    $contaA = new ContaBanco();
    $contaA->abrirConta("CP");
    $contaA->setNumConta("098713");
    $contaA->setDono("Jonas Guilherme de Brito");

    $contaB = new ContaBanco();
    $contaB->abrirConta("CC");
    $contaB->setNumConta("981341");
    $contaB->setDono("José da Silva Souza");

    print_r($contaA);
    print_r($contaB)

?>
</pre>
</body>
</html>

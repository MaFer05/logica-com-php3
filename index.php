<?php
$var1 = 10;
$var2 = '10';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta meta="utf-8" />
        <title>Exemplo</title>
    </head>
    <body>
        <h1>Estruturas de controle</h1>
        <?php if($var1 == $var2): ?>
            <p><?= 'Variáveis iguais' ?></p>
        <?php else: ?>
            <p><?= 'Variáveis diferentes' ?></p>
        <?php endif ?>
        <hr />

        <?php
            if($var1 === $var2) {
                echo "<p>Valores iguais</p>";
            } else {
                echo "<p>Valores diferentes</p>";
            }
        ?>
    </body>
</html>
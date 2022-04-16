<?php
    $_vEmployees = array('Lucas', 'Adelmo', 'Homol', 'Eduardo');
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $_vEmployees[] = $_arrIt = array('Programador', 'Analista', 'Gerente', 'Estagiário');
        ?>

        <pre>
        <?php
            print_r($_vEmployees . $_arrIt);
            $_arrConcat = $_vEmployees[0] . $$_arrIt[0];
            print_r($_arrConcat);
        ?>
        </pre>
    </body>
</html>
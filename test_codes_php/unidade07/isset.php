<?php
    $_vName = 'Lucas';
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo isset($_vName);
            //Se a variável estiver declarada, retorna 1, exceto se o valor for NULL;
        ?>
    </body>
</html>
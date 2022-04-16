<?php
    $_vGender = true;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo is_bool($_vGender);
            // Essa função retorna se a expressão passada é booleana ou não, 1 para verdadeiro, e "" (vazio) para falso.
        ?>
    </body>
</html>
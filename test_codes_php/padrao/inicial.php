
<!-- Utilizado o bloco PHP antes do inicio de HTML quando não há necessidade de visualização pelo usuário. -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $_vSalary1 = 1500;
            $_vSalary2 = 3290;
            $_vMedia = ($_vSalary1 + $_vSalary2) / 2;
            echo $_vMedia;

        ?>
    </body>
</html>

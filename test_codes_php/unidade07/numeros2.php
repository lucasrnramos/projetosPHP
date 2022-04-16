<?php
    $_vSalario = 1095;
    $_vGasolina = 4.55;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérico
            echo is_numeric($_vSalario);

            // testar se é inteiro
            echo is_int($_vSalario);
            //or
            echo is_integer($_vSalario);


            // testar se é float
            echo is_float($_vSalario);
        ?>
        <!-- Ambas as verificações, retorna "1" se verdadeiro, ou "" (vazio) se falso. -->
        
    </body>
</html>
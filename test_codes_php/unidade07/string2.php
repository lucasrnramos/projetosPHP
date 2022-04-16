<?php 
    $_vName = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
    <p>
        <?php 
            // strlen - Retorna primeira ocorrencia
            echo strlen($_vName) . ' '. 'Quantidade de Caracteres de uma String ou Variável. strlen()';
        ?> 
    </p>

    <p>
        <?php 
            // stripos  - Retorna primeira ocorrência 
            echo stripos($_vName, "H") . ' '. 'Primeira posição da referência passada. stripos()';
        ?> 
    </p>
           
    <p>
        <?php 
            // strripos - Retorna última ocorrência
            echo strripos($_vName, "l") . ' '. 'Última posição da referência passada. strripos()';
        ?> 
    </p>

    <p>
        <?php 
            // strtolower - converte para letras min.
            echo strtolower($_vName) . ' '. 'Converte tudo para minúsculo strtolower()';
        ?> 
    </p>

    <p>
        <?php 
            // strtoupper - converte para letras mai.
            echo strtoupper($_vName) . ' '. 'Converte tudo para minúsculo strtoupper()';
        ?> 
    </p>

    <p>
        <?php 
            // SUBSTR_COUNT - Conta quantas ocorreram
            echo substr_count($_vName, "P") . ' '. 'Retorna a quantidade de ocorrências da referência passada SUBSTR_COUNT()';
        ?> 
    </p>
    </body>
</html>
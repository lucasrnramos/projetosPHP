<?php
    $_vEmployees = array('Lucas', 'Josué', 'Eduardo');
    $_vSalary    = array(3290, 900, 6000);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando</title>   
</head>
<body>
    <pre>
    <?php
        for($_i = 0; $_i <= 2; $_i++){
        echo ($_vEmployees[$_i] . $_vSalary[$_i]);
        }
    ?>
    </pre>
</body>
</html>
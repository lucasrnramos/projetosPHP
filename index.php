<?php
    $_vEmployeeOne    = 'Lucas';
    $_vEmployeeTwo    = 'Josué';
    $_vEemployeeThree = 'Eduardo';
   // $_vEmployees = array($_vEmployeeOne, $_vEmployeeTwo, $_vEemployeeThree);
    $_vSalary = array(3290, 900, 6000);
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
        print_r($_vEmployees[0] . $_vSalary[0]);
    ?>
    </pre>
</body>
</html>
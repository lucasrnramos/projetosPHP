<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        $_arr = array(rand(1, 100));                  
        for($_i = 1; $_i <= 100; $_i++){
            print_r($_arr);
        }
    ?>
</body>
</html>
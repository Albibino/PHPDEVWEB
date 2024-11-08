<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta('BIC Cristal','Azul',0.5,100,true);
            $c1->setTampada();
            echo '<br>';
            $c1->setRabiscando();
            echo '<br>';
            print_r( $c1->getCarga());
        ?>
    </body>
</html>
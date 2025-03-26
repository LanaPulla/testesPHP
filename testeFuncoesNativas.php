<html>
    <head>
        <meta charset="utf-8">
        <title>Teste</title>
    </head>
     
    <body>
   <?php

        $texto = 'lAna rosa';

        echo strtolower($texto);
        echo "<br> <hr>";

        echo strtoupper($texto);
        echo "<br> <hr>";

        echo ucfirst($texto);
        echo "<br> <hr>";

        echo 'a string tem ' . strlen($texto) . ' caracteres' ;
        echo "<br> <hr>";

        echo str_replace('lAna', 6, $texto);
        echo "<br> <hr>";


        echo substr($texto, 0, 4);

        
    ?>
    </body>

</html>
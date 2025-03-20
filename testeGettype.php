<html>
    <head>
        <meta charset="utf-8">
        <title>Teste</title>
    </head>
     
    <body>
   <?php
        $variavel ="lnais";
        $tipoDeVar= gettype($variavel);

        if($tipoDeVar == "string"){
            $texto = true;
            print "é true";

        } else{
            print "nao é true";
        }
        ?>
    </body>

</html>
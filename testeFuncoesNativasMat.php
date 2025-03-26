<html>
    <head>
        <meta charset="utf-8">
        <title>Teste</title>
    </head>
     
    <body>
   <?php
        $numero = 7.9;
        $numero2 = 16;
        $numero3 = 6.4;

        echo ceil($numero); //arredonda para cima o valor 
        echo "<br> <hr>";

        echo floor($numero); //arredonda para baixo o valor 
        echo "<br> <hr>";

        //arredonda dependendo se esta de 0-4 ou de 5-9
        echo round($numero); //8
        echo "<br> ";
        echo round($numero3); //6
        echo "<br> <hr>";

        echo rand();  
        echo "<br> ";
        //gera um numero aleatorio ate o maximo que a maquina pode suportar (se nao for especificado um limite)
        echo getrandmax(); //pega o valor maximo da maquina
        echo "<br> <hr>";

        echo sqrt($numero2);

        ?>
    </body>

</html>
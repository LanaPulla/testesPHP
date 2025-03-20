<html>
    <head>
        <meta charset="utf-8">
        <title>Teste</title>
    </head>
     
    <body>
   <?php 
        
        $idade = 23;
        $peso = 50;

        $testeTernario = $peso >= 16 && $peso >=50 ? "PODE DOAR SANGUE" : "NAO PODE DOAR SANGUE";


        print $testeTernario;
        
   ?>
    </body>

</html>
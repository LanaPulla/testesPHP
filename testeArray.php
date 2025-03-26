<html>
    <head>
        <meta charset="utf-8">
        <title>Teste</title>
    </head>
     
    <body>
   <?php
         $lista_mercado = array('margarina', 'arroz', 'sabao', 'massa', 'maça');
         $lista_mercado2 = [ 'a'=> 'margarina', 'arroz', 'sabao', 'massa', 'maça'];


         echo '<pre>';
         print_r ($lista_mercado);
         echo '<\pre>';

         echo '<pre>';
         var_dump ($lista_mercado2);
         echo '<\pre>';

         echo '<br>';
         echo $lista_mercado2[2];
         echo '<br>';
         echo $lista_mercado2['a'];
    ?>
    </body>

</html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Teste</title>
    </head>
     
    <body>
   <?php

       /*echo date('d/m/Y H:i'); //cada token de data esta situado na documentação do php oficial, como cada coisa vai sair 
       echo '<br>';

       echo date_default_timezone_get(); //pega o local de onde o php está configurado 
       echo '<br>';
       
       date_default_timezone_set('America/Sao_Paulo'); //modifica a zona onde fica a data e hora (sp pois nao mudaram para brasilia)
       
       echo date('d/m/Y H:i'); */


       // para calcular quantos dias há entre datas é preciso primeiro converter essas datas para segundos com  a funcao...
       $data_inicial= '2004-05-07';
       $data_final = '2025-05-07';
      

        $time_inicial  = strtotime($data_inicial); //... essa funcao converte as datas para segundos a partir de 1-1-1970


       $time_final = strtotime($data_final); 

       echo "$data_inicial - $time_inicial <br>";

       echo "$data_final - $time_final <br>";

        $diferença_dias = $time_final - $time_inicial; // entao se diminui os segundos maiores pelos menores...

        $dias = $diferença_dias / (24*60*60);//... dps se diminui pelos segundos que tem um dia e se tem quantos dias há entre um e o outro

        echo "há $dias dias entre $data_inicial e $data_final <br>";


    ?>
    </body>

</html>
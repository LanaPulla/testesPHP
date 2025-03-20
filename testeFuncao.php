<html>
    <head>
        <meta charset="utf-8">
        <title>Teste</title>
    </head>
     
    <body>
        <?php
        
           /* function calculoArea($largura, $comprimento){
                $contaArea = $largura * $comprimento;
                return $contaArea;
            }

            echo 'a area é '. calculoArea(55,40) . ' metros';*/


            function impostoDeRenda($valorImposto){

                if ($valorImposto <= 1903.98) {
                    echo "a pessoa está isenta de pagar imposto";
                }
                else if($valorImposto >= 1903.99 && $valorImposto <=  2826.65){
                    $contaImposto = $valorImposto * 0.075;
                    return $contaImposto;
                }
            }

            echo impostoDeRenda(2000);
       
        ?>
    </body>

</html>
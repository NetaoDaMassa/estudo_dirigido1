<?php
    //desconto na mercadoria
    print "Insira o valor, em reais, da mercadoria: ";
    $mercadoria= (float) fgets (STDIN);
        
    print "Insira o valor do percentual de desconto: ";
    $porcentagem= (float) fgets (STDIN)/100;

        $desconto= $mercadoria*$porcentagem;
        $novoPreco= $mercadoria-$desconto;

        print "Com um desconto de $desconto reais, o total a pagar da mercadoria é de $novoPreco reais. \n";
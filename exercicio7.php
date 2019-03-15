<?php
    //aluguel de carro
    print "Quantos quilômetros você percorreu com o carro? ";
    $quilometros= (float) fgets (STDIN);

    print "Por quantos dias você alugou o carro? ";
    $dias= (float) fgets (STDIN);
       
        $precoTotal= ($dias*60)+($quilometros*0.15);

    print "O total a pagar pelo aluguel foi de $precoTotal reais. \n";
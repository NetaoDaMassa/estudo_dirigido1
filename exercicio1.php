<?php
//conversão de metros para milímetros
    print "Insira um valor em metros: ";
    $medidaEmMetros= (float) fgets (STDIN);

        $conversao= $medidaEmMetros*1000;
        
    print "$medidaEmMetros metro(s) convertido(s), são $conversao milímetros \n";
<?php
    //redução de dias na vida de um fumante
        print "Quantos cigarros você fuma por dia? ";
        $cigarrosDiarios= (float) fgets (STDIN);

        print "Quantos anos você já fuma? ";
        $anos= (float) fgets (STDIN);
        
        $horasPerdidasDiarias= 10*$cigarrosDiarios/60;
        $horasTotais=  ($anos*365)*$horasPerdidasDiarias;
        $diasPerdidos= round ($horasTotais/24); //round arredonda. 
        
        print "Você já perdeu, em média, $diasPerdidos dia(s) de vida fumando. \n";
        print "Proerd é a salvação, não use drogas (y). \n";
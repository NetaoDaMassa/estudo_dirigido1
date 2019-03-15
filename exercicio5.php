<?php
    //tempo de viagem
    print "Insira a distância, em km, até o ponto de chegada: ";
        $distancia= (float) fgets (STDIN);
        
        print "Insira a velocidade média, em Km/h, esperada para a viagem: ";
        $velocidade= (float) fgets (STDIN);
        
        $tempo=  $distancia/$velocidade;
        
        print "Você chegará ao seu destino em, aproximadamente, $tempo. \n";
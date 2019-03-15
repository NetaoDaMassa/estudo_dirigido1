<?php
//idade do usuário em segundos
    print "Digite sua idade: ";
        $anos= (float) fgets (STDIN);
        $dias= $anos*365;
        $horas= $dias*24;
        $minutos= $horas*60;
        $segundos= $minutos*60;
    
    print "Você já viveu $segundos segundos na sua vida. \n";
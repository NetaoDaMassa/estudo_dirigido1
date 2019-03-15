<?php
    //conversão de Celsius para Fahrenheit
    print "Insira a temperatura em graus Celsius: ";

        $celsius= (float) fgets (STDIN);
        $fahrenheit= 9*$celsius/5+32;

    print "A temperatura digitada convertida para Fahrenheit é de $fahrenheit °F. \n";
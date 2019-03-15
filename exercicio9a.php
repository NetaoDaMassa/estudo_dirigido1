<?php
    //loja de tintas questão a.
    print "Insira a medida em metros quadrados: ";
    $medida= (float) fgets (STDIN);

    $litros= $medida/6;
    $qtdLatas= ceil ($litros/18); //ceil arredonda pra cima
    $preco= $qtdLatas*80.00;
    
    print "Você gastará R$$preco em $qtdLatas lata(s) de tinta. \n";
<?php
    //loja de tintas
    print "Insira a medida em metros quadrados: ";
    $medida= (float) fgets (STDIN);

    $litros= $medida/6;
    $qtdGaloes= ceil ($litros/3.6); //ceil arredonda pra cima
    $preco= $qtdGaloes*25.00;
    
    print "Você gastará R$$preco em $qtdGaloes galão(ões) de tinta. \n";
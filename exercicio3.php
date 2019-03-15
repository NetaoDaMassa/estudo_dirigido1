<?php
//aumento salarial
    print "Insira o valor, em reais, do seu salário: ";
    $salario= (float) fgets (STDIN);
        
    print "Insira a porcentagem do seu aumento: ";
    $porcentagem= (float) fgets (STDIN)/100;

        $aumento= $porcentagem*$salario;
        $novoSalario= $salario+$aumento;

    print "Seu novo salário é de R$$novoSalario com um aumento de R$$aumento. \n";
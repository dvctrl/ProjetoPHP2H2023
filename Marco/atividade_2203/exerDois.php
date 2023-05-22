<?php 

    $qtdHorasTrab= 160;
    $salarioHora=2;
    $numDependentes=3; 
    $ir = 0;
    $salarioBruto = $qtdHorasTrab * $salarioHora + (50 * $numDependentes);  
    

    if ($salarioBruto<= 1000){
        $inss = $salarioBruto * (8.5/100);
        
    }else if($salarioBruto > 1000){
        $inss = $salarioBruto * (9/100);
    }

    if($salarioBruto > 500 && $salarioBruto < 1000){
        $ir = $salarioBruto*(5/100);
    }else if($salarioBruto > 1000){
        $ir = $salarioBruto*(7/100);
    }
    
    $salarioLiquido = $salarioBruto - $inss - $ir;

    echo "Salario Bruto R$".$salarioBruto."\nInss R$".$inss."\nImposto De Renda R$".$ir."\nSalario Liquido R$".$salarioLiquido; 



?>

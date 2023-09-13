<?php
    $date = date("d/m/Y");
    echo $date;

    echo "<br>";

    $formMYSQL = date("Y/m/d");
    echo $formMYSQL;

    echo "<br>";
    
    // date_default_timezone_set('America/Sao_paulo');
    $hoje = date("Y/m/d H:i:s");
    echo $hoje;

    echo "<br>";

    $data = date('D');
    
    $semana = array(
        'Sun' => 'Domingo', 
        'Mon' => 'Segunda-Feira',
        'Tue' => 'Terca-Feira',
        'Wed' => 'Quarta-Feira',
        'Thu' => 'Quinta-Feira',
        'Fri' => 'Sexta-Feira',
        'Sat' => 'Sábado'
    );
    
    echo $semana["$data"];

    echo "<br>";
    echo "<br>";
    echo "<br>";    
    echo "<br>";    

    $my_date = getdate();

    

  
    
    echo "<br>";  
    echo $my_date["hours"].":";
    echo $my_date["minutes"].":";
    echo $my_date["seconds"];


    
   
?>
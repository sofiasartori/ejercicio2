<?php
    echo "Ejercicio 1<br>";

    echo "Ejercicio 2<br>";

    echo date("y-M-d");
    $mes = date('m');
    echo '<br>';

    if($mes == 'Jan' || $mes == 'Feb' || $mes =='Dec')
        echo 'estamos en verano<br>';
    else if($mes == 'Mar' || $mes == 'Apr' || $mes =='May')
        echo 'estamos en otonio<br>';
    else if($mes == 'Jun' || $mes == 'Jul' || $mes =='Ago')
        echo 'estamos en invierno<br>';
    else
        echo 'estamos en primavera<br>';
    
    echo "Ejercicio 3<br>";

    $numero1 = rand();
    $numero2 = rand();
    $numero3 = rand();

    echo 'Numero 1: '.$numero1;
    echo '<br>Numero 2: '.$numero2;
    echo '<br>Numero 3: '.$numero3;

    if ($numero1<$numero2 && $numero1>$numero3 || $numero1>$numero2 && $numero1<$numero3)   
        echo '<br>'.$numero1;
    else if($numero2<$numero1 && $numero2>$numero3 || $numero2>$numero1 && $numero2<$numero3)
        echo '<br>'.$numero2;
    else
        echo '<br>'.$numero3;

    echo '<br>Ejercicio 4';

    

    echo "<br>Ejercicio 6";

    /*Primer manera: constructor de array
    Segunda manera: lo mismo pero con corchetes (en for o lineas separadas)
    Tercer manera: .push() para cada uno de los elementos, con for o linea a linea
    var_dump(array) para mostrarlo
    */
    
    //Primer manera

    /*$miArray = array(rand(), rand(), rand(), rand(), rand());
    var_dump($miArray);*/

    //Segunda manera
    /*$miArray = array();
    for($i=0; $i<5; $i++){
        $miArray[$i] = rand();
    }
    var_dump($miArray);*/

    //Tercera manera

    $miArray = array();
    for($i=0; $i<5; $i++){
        array_push($miArray, rand());
    }
    var_dump($miArray);

?>
<?php

    require_once 'funciones.php';
    require_once 'figuraGeometrica.php';

    echo "Ejercicio 1<br>";

    /*ARREGLAR
    $suma = 0;
    $numero=1;

    while($suma<1000){
        $suma = $suma+$numero;
        $numero += $suma;
        echo $suma.'<br>';
    }*/

    echo "Ejercicio 2<br>";

    echo date("y-M-d");
    $mes = date('M');
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

    echo '<br>Ejercicio 4<br>';
    $operador= '*';

    $opt1 = 10;
    $opt2= 2;

    switch ($operador) {
        case '*':
            echo $opt1*$opt2;
            break;
        case '-':
            echo $opt1-$opt2;
            break;
        case '+':
            echo $opt1+$opt2;
            break;
        case '/':
            echo $opt1/$opt2;
            break;        
        default:
            break;
    }

    echo "<br>Ejercicio 5<br>";

    //ARREGLAR $numero = new NumberFormatter('es', NumberFormatter::SPELLOUT);

    //echo $numero->format(10);    

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

    echo"<br>Ejercicio 7<br>";
    /*ARREGLAR
    $numeroImpar = 0;
    $arrayImpar = array();

    for($cantidad=0; $cantidad<= 10; $cantidad++){
        if($numeroImpar %2 != 0 ){
            echo $numeroImpar.'<br>';
            array_push($arrayImpar, $numeroImpar);
        }
        $numeroImpar++;
    }*/

    echo"<br>Ejercicio 8<br>";
    
    $arrayAsoc = array(
        '1'=>90,
        '30'=>7,
        'e'=>99,
        'hola'=>'mundo');
    foreach ($arrayAsoc as $key => $value) {
        echo '$v['.$key.']='.$value.';';
    }

    echo '<br>Ejercicio 9<br>';

    $arrayLapicera = array();

    array_push($arrayLapicera, 'color', 'azul');
    array_push($arrayLapicera, 'marca', 'bic');
    array_push($arrayLapicera, 'trazo', 'medio');
    array_push($arrayLapicera, 'precio','$10');
    var_dump($arrayLapicera);

    echo '<br>Ejercicio 10<br>';   
    
    $arrayDeArray = array();

    array_push($arrayDeArray, $arrayLapicera);
    var_dump($arrayDeArray); 

    echo '<br>Ejercicio 11<br>';

    for ($i=0; $i<4; $i++){
        echo Calculadora::Potencia($i, $i).'<br>';
    }

    /*ARREGLAR
    echo '<br>Ejercicio 12<br>';
    echo Calculadora::invertirPalabra('Hola');*/

    echo '<br>Ejercicio 13<br>';
    echo Calculadora::invertirPalabra2('Recuperatorio', 14);

    echo '<br>Ejercicio 14<br>';
    echo Calculadora::esPar(4).'<br>';
    echo Calculadora::esImpar(4).'<br>';

    echo '<br>Ejercicio 15<br>';

?>
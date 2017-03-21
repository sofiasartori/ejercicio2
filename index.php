<?php
    echo "Hola Mundo";

    /*Primer manera: constructor de array
    Segunda manera: lo mismo pero con corchetes (en for o lineas separadas)
    Tercer manera: .push() para cada uno de los elementos, con for o linea a linea
    var_dump(array) para mostrarlo
    */
    
    //Primer manera

    /*$miArray = array(rand(), rand(), rand(), rand(), rand());
    var_dump($miArray);*/

    //Segunda manera
    $miArray = array();
    for($i=0; $i<5; $i++){
        $miArray[$i] = rand();
    }
    var_dump($miArray);

?>
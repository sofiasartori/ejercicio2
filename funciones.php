<?php

class Calculadora 
{
    public static function Potencia (){
        for ($i=0; $i<4; $i++){
            return pow($i, $i);
        }

    }

    public static function invertirPalabra ($palabra){
        $miArray = array($palabra);
        $array2 = array();
        for($i=0; $i<sizeof($miArray); $i++) 
            array_push($array2, $miArray[$i]); 
        return $array2;
    }
    public static function esPar($num)
    {
        if($num%2 == 0)
            return 'Es par';
        else 
            return 'No es par';
    }

    public static function esImpar($num)
    {
        if($num%2 != 0)
            return 'Es impar';
        else 
            return 'No es impar';
    }
    
}

    
?>
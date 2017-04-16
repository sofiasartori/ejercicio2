<?php

class Calculadora 
{
    public static function Potencia ($num1, $num2){
        return pow($num1, $num2);

    }

    public static function invertirPalabra ($palabra){
        $miArray = array();
        for($i=0; $i<str_word_count($palabra); $i++) 
            array_push($miArray, $palabra[$i]); 
        return array_reverse($miArray);
    }

    public static function invertirPalabra2($palabra, $max){
        if(str_word_count($palabra)<$max){
            if($palabra=='Recuperatorio' || $palabra=='Parcial' || $palabra=='Programacion')
                return 1;
            else
                return 0;
        }

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
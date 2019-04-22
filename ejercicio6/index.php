<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */

function conteo($palabra){
 
        $cont = strlen($palabra);
        $vocales = substr_count($palabra, 'a')+substr_count($palabra, 'e')+substr_count($palabra, 'i')+substr_count($palabra, 'o')+substr_count($palabra, 'u')+substr_count($palabra, 'A')+substr_count($palabra, 'E')+substr_count($palabra, 'I')+substr_count($palabra, 'O')+substr_count($palabra, 'U');
        $a = substr_count($palabra, 'a'); 
        $e = substr_count($palabra, 'e') ;
        $i = substr_count($palabra, 'i'); 
        $o = substr_count($palabra, 'o'); 
        $u = substr_count($palabra, 'u'); 
        echo "la palabra $palabra tiene: $cont letras" ;
        echo ('<br>');
        echo ('<br>');
        echo "Numero de vocales: a es $a <br/>";
        echo "Numero de vocales: e  es $e <br/>";
        echo "Numero de vocales: i  es $i <br/>";
        echo "Numero de vocales: o  es $o <br/>";
        echo "Numero de vocales: u  es $u <br/>";
         echo ('<br>');
         echo "El total de vocales es $vocales";
}
$palabra = 'aceituno';
echo conteo($palabra);
?>
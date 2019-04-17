<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */

 $Cont = 1;

  echo "Tabla del 2 con el for";
  echo "<br>";
  for($t=2;$t<=20;$t=$t+2)
  {
    echo $Cont++.'X'.'2'.'='.$t;
    echo "<br>";
    
  }

  
      echo "<br>";
 $Contw = 1;
 echo "Tabla del 2 con el while";
  echo "<br>";
   
  $w=2;
  while ($w<=20)
  {
    
    echo $Contw++.'X'.'2'.'='.$w;
	$w=$w+2; 
	 echo "<br>";
  }

      echo "<br>";

 $Contd = 1;
 echo "Tabla del 2 con el do while";
 echo "<br>";
  $d=2;
  do {
     echo $Contd++.'X'.'2'.'='.$d;
      echo "<br>";
	$d=$d+2;	
  } while ($d<=20);

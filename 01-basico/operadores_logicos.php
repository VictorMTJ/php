<?php

/**
 * ---------- Simbolo               nombre      
 *             and                   and (y)
 *             or                    or (o)
 *             !                     not(not)
 *             &&                    and (y)
 *             ||                    or (o)
 * 
 * 
 *            tabla de operadores AND
 *   Expresion 1             expresion 2         resultado
 *   False           &&      False               False
 *   False           &&      True                False
 *   True            &&      True                True
 *   True            &&      False               False
 * 
 */


 $valor1 = 7;
 $valor2 = 2;

 var_dump($valor1 == 7 && 2 > 3);
 echo "<br>";
 var_dump($valor1 == 7 && 9 > 3);
 echo "<br>"; 



 /**
  *  --------------- tabla de operador or 
  * expresion1        expresion 2         resultado
  * false        ||   false               false 
  * false        ||   true                True
  * True         ||   False               True
  * True         ||   True                True
  */


  var_dump($valor1 == 7 or 2> 3);
  echo "<br>";
  var_dump($valor1 == 5 || 9 > 3);
  echo "<br>";
  var_dump($valor1 == 5 || 1 > 3);
  echo "<br>";
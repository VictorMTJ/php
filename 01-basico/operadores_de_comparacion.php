<?php

/**
 *      ejemplo           simbolo         resultado
 * 1 == "1"               ==(simbolo)     True
 * 10 === "10"           ===(identico)    False
 * 7 != 7                ! = (diferente)  False
 * 21 <> '21'            <> (diferente)   False
 * '21' !== 21          !==(no identic)     True
 * 7 < 4                  < (menor que)   False
 * 7 > 4                  > (mayor que)   True
 * 2<= 2         <= (menor o igual que)   True
 * 3 >= 7        >= (mayor o igual que)   False
 * 
 */


 var_dump(2 == "2");
 echo "<br>";
 var_dump(2 == "2");
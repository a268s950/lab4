<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


echo '<table border=\"0\">';

  for( $a = 1; $a <= 100; $a++)
  {
     echo'<tr>';
     for( $b = 1; $b <= 100; $b++)
     {
                       echo '<td>' .$a*$b. '</td>';
     }
                       echo '</tr>';
   }
echo '</table>';
?>

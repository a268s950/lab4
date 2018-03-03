<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
$password = 0; //or'0'
$quantityP = $_POST['Puppies'];
$quantityK = $_POST['Kittens'];
$quantityD = $_POST['Ducks'];
$shipping = $_POST['shipping'];
if($shipping == "7day"){$costS=0;}
elseif($shipping == "3day"){$costS=5;}
else{$costS=50;}
$costP = 1.00;
$costK = 2;
$costD = 99.99;
$Password = $_POST['pword'];
  echo "Welcome!
        Your password is: " . $Password;
  echo "<table border='4' class='stats' cellspacing='0'>

      <tr>
      <td class='hed' colspan='8'>Your Receipt</td>
      </tr>

      <tr>
      <th> </th>
      <th>Quantity</th>
      <th>Cost Per Item</th>
      <th>Subtotal</th>
      </tr>";

        echo "<tr>";
        echo "<td>" . "Puppies" . "</td>";
        echo "<td>" . $quantityP . "</td>";
        echo "<td>$" . $costP . ".00" . "</td>";
        echo "<td>$" . $quantityP * $costP . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "Kittens" . "</td>";
        echo "<td>" . $quantityK . "</td>";
        echo "<td>$" . $costK . ".00" . "</td>";
        echo "<td>$" . $quantityK * $costK . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "Ducks" . "</td>";
        echo "<td>" . $quantityD . "</td>";
        echo "<td>$" . $costD . "</td>";
        echo "<td>$" . $quantityD * $costD . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "Shipping" . "</td>";
        echo "<td>" . $shipping . "</td>";
        echo "<td>" . " " . "</td>";
        echo "<td>$" . $costS . ".00</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . "Total Cost" . "</td>";
        echo "<td>" . "" . "</td>";
        echo "<td>" . " " . "</td>";
        echo "<td>$" . ($costS+$quantityP * $costP+$quantityK * $costK+$quantityD * $costD) . "</td>";
        echo "</tr>";

echo "</table>";

?>

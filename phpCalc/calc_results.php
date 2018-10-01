<style>
h4 {
  font-size: 18px;
  font-family: tahoma;
  color: darkgreen;
}

a {
  font-size: 22px;
  color: darkblue;
  margin-top: 20px;
  padding-top: 10px;
}

</style>

<?php

function compute() {
  $num1 = $_POST['FirstNum'];
  $num2 = $_POST['SecondNum'];

  switch($_POST['dropdown']) {
    case "Addition":
      $sum = $num1 + $num2;
      return $sum;
      break;
    case "Subtraction":
      $diff = $num1 - $num2;
      return $diff;
      break;
    case "Division":
      $quo = $num1 / $num2;
      return $quo;
      break;
    case "Multiplication":
      $prod = $num1 * $num2;
      return $prod;
      break;
    default:
      echo "Invalid Operation";
  }
}
    echo "<h4>The result is: </h4>" . compute();
?>

<br>
<br>
<a href="calc.php">Back</a>

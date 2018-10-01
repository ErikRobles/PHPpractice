<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="calc.css">
    <title>PHP Calc</title>
  </head>
  <body>
    <form action="calc_results.php" method="POST">
      <label class="theLabel">Select an operation:</label>
      <select class="dropbox" name="dropdown">
      <option value="Addition">Addition</option>
      <option value="Subtraction">Subtraction</option>
      <option value="Division">Division</option>
      <option value="Multiplication">Multiplication</option>
    </select><br><br>

    <p>Enter the first number:</p><input type="text" name="FirstNum" required/><br><br>
    <p>Enter the Second number:</p><input type="text" name="SecondNum" required/><br><br>
    <input class="bigButton" type="submit" value="Calculate"/>
    </form>
  </body>
</html>

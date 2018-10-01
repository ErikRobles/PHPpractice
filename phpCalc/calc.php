<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Calc</title>
  </head>
  <body>
    <form action="calc_results.php" method="POST">
      <label>Select an operation:</label>
      <select name="dropdown">
      <option value="Addition">Addition</option>
      <option value="Subtraction">Subtraction</option>
      <option value="Division">Division</option>
      <option value="Multiplication">Multiplication</option>
    </select><br><br>

    <p>Enter the first number:</p><input type="text" name="FirstNum" required/><br><br>
    <p>Enter the Second number:</p><input type="text" name="SecondNum" required/><br><br>
    <input type="submit" value="Calculate"/>
    </form>
  </body>
</html>

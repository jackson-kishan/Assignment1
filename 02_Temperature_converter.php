<?php 

  /* 
  * Design a PHP program that convert temperatures between Celsius and Fahrenheit.
  * Provide a form where the user can input a temperature value and select the conversion direction (Celsius to fahrenheit or versa)
  * Display the converted temperature.
  */

  $celsius = 55;
  $fahrenheit = (float)($celsius * 9/5) + 32;
  
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tempreature Convertor</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="container">
    <form action="" method="post">
      <h2>Celsius To Fahrenheit Convertor</h2>
    <input type="number" name="temp" placeholder="Enter your number" required><br><br>
    <button name="submit">Submit</button><br><br>

    <div class="result">
      <?php 
       
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $temp = $_POST['temp'];

    $toFahrenheit = (float)($temp * 9/5) + 32;

    echo "Celsius:  ". number_format($temp, 2) ."°C" . "<br>";
    echo "Fahrenheit:  ". number_format($toFahrenheit, 2) ."°F" . "<br>";

}
      
      ?>
    </div>
    </form>
  </div>
     
  
</body>
</html>
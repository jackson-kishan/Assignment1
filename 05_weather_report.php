<?php 

  /*
   * Create a PHP script that Provides wheather information based on temperature.
   * Use a variable to store the temperature. Depending on the temprature range,
   * display messages like "it's freezing!" , "it's cool." or "it's warm".
   */

 


   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather Report App</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <form action="" method="post">
      <h2>Weather Report</h2>
    <input type="number" name="temp" placeholder="Enter your number" required><br><br>
    <button name="submit">Submit</button><br><br>

    <div class="result">
      <?php 
       
      if($_SERVER["REQUEST_METHOD"] == "POST") {

        $temp = $_POST['temp'];

        if($temp <= 0) {
          $message = "It's freezing";
        }elseif($temp > 0 && $temp < 15){
         $message = "It's cool";
        } elseif($temp > 15) {
         $message = "It's warm";
        } else {
         $message = "Invaild Temperature Value";
        }
     
        echo $message;

      }
            
      ?>
    </div>
    </form>
  </div>
     
  
</body>
</html>
<?php 


   /* 
    * Develop a PHP tool that compares two numbers and displays the larger one using the ternary operator.
    * Create a form where the user can input two numbers.
    * Use the ternary operator to determine the larger number and display the result
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>
<body>

  <div class="container">
    <form action="" method="post">
    <h2>Comparison Tool</h2>
        <input type="number" name="num1" placeholder="Enter first number" required><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br>
        <button type="submit">Check</button><br><br>
       

        <div class="result">
            <?php 
             
              if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];


                $largerNumber = ($num1 > $num2) ? $num1 : $num2;

                echo "The Larger Number is {$largerNumber}";
              }
            
            
            ?>
        </div>

    </form>
    </div>  
    
</body>
</html>
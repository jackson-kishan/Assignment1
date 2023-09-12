<?php 

  /* 
  * Build a PHP program that checks whether a given number is even or odd.
  * Provide an input field where the user can enter a number. Display a message indicating the number is even or odd.
  */
   
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd number Checker</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

 <div class="container">
  <form action="" method="post">
    <label for=""><b> Even or Odd Number Checker </b></label><br><br>
    <input type="number" name="num" placeholder="Enter first number" required><br>
    <button type="submit">Check</button><br><br>

     <div id="result">
        <?php 
         if($_SERVER["REQUEST_METHOD"] == "POST"){

            $num = $_POST['num'];
       
            if($num % 2 == 0) {
               echo "{$num} is Even Number !";
            } else {
               echo "{$num} is Odd Number !";
            }
          }
       
        
        ?>
     </div>
  </form>
  </div>
    
</body>
</html>
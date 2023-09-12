<?php 

  /* 
  * Develop a PHP script that computes the average of three test scores and determines the corresponding letter grade.
  * Create a form where the user input three test scores.
  * Calculate the average and display it along with the corresponding grade (A, B, C, D, F)
  */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      <?php include "styles.css" ?>
    </style>
</head>
<body>
 
  <div class="container">
    <form action="" method="post">
      <h2>Grade Score Calculator</h2>
    <label for="num1">Math Score :</label>
        <input type="number" name="num1" required><br>

        <label for="num2">English Score :</label>
        <input type="number" name="num2" required><br>

        <label for="num3">Science Score :</label>
        <input type="number" name="num3" required><br>

        <button type="submit" name="submit">Submit</button> 

        <div id="result">
            <?php
            
              if(isset($_POST['submit'])){
                   
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];

                $total = ($num1 + $num2 + $num3) / 3;

                if ($total >= 90) {
                  $grade = 'A';
              } elseif ($total >= 80) {
                  $grade = 'B';
              } elseif ($total >= 70) {
                  $grade = 'C';
              } elseif ($total >= 60) {
                  $grade = 'D';
              } else {
                  $grade = 'F';
                }
      
              echo "Letter Grade : {$grade}"; 

              }
            
            ?>
        </div>
   
    </form>

   </div>

</body>
</html>
<?php 

   /* 
    * Build a PHP Calculator that performs basic arithmetic Operations. Provide input fields for two numbers and a dropdown
    * to select the operation (addition , subtraction, multiplication, division). Display the result of the chosen opreation.
    */



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build A Simple Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Basic Calculator</h2>
     <form action="" method="post">
      <input type="number" name="num1" placeholder="Enter your number" required><br><br>
      <input type="number" name="num2" placeholder="Enter your number" required><br><br>
      <select name="operation" id="">
          <option value="add">Addition</option>
          <option value="Sub" >Subtraction</option>
          <option value="multipy" >Multiplication</option>
          <option value="divi" >Division</option>
      </select><br><br>
      <button name="submit">Submit</button><br><br>
 
   <div class="result">
     <?php
      
    if(isset($_POST['submit'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];


    if("add" ==  $operation) {
        $result = $num1 + $num2;
        echo "Result: ". $result;
    } elseif("Sub" ==  $operation) {
        $result = $num1 - $num2;
        echo "Result: ". $result;
    } elseif("multipy" ==  $operation) {
        $result = $num1 * $num2;
        echo "Result: ". $result;
    } elseif("divi" ==  $operation) {
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "Result: " . $result;
        } else {
            echo "Cannot divide by zero.";
        }
    }


   }  
      ?> 
    </div>   
    
    </form>   
   </div>
</body>
</html>
<?php 
 
  /* 
  * Create a PHP that display your Personal Information using variable and the echo statement.
  * Include your name , age , country and a brief information.
  */

  $fname = "kishan";
  $lname = "Rozario";

  $age = 23;
  $country = "Dhaka , Bangladesh";

  $info = "Greeting Everyone , I am {$fname } {$lname} . <br>";
  $info .= " I am {$age} year old .";
  $info .= "  I live in {$country} .";
  $info .= " I am a Student ";
  $info .= " and I am passionate person about Programming. ";
  $info .= " Thank You, bye bye. ";

  //echo $info ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Information</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
  <?php echo $info; ?>
</div>
  
</body>
</html>
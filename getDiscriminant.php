<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>getDiscriminant</title>
  <style>
    body {
      background-color: #fcebf3;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>
<body>
   <?php  
   if(isset($_GET['getTotal'])) {

    // String passed inside the GET variable
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    // Variable to store the total
    $total = $b*$b - 4*$a*$c;

    // Prints the result
    echo "<div>";
    echo "<h1>Discriminant of a quadratic equation</h1>";
    echo "<h2>The answer is " . $total . "</h2>";
    echo "</div>";
   }
   ?>
</body>
</html>

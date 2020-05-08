<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>

<?php


$limit = 12;
$numbers = [1,2,3,4,5,6,7,8,9,10,11,12];

for($i = 0; $i < count($numbers); $i++):
    $currentNumber = $numbers[$i];

    for ($y = 1; $y <= $limit; $y++):
        $multiply = $currentNumber * $y;
        echo "$currentNumber * $y => $multiply <br>";
    endfor;
    
    echo '<br>';
endfor;

?>


</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

    <h1>Multiplication table of number 5:</h1>

    <?php
    	$number = 5;

    for($i = 1; $i <= 10; $i++) {
   	 echo $number ."x". $i ."=".$number * $i ."<br>";
    }
	?>

</body>
</html>

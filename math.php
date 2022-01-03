<?php
include_once('func.php');
if(isset($_POST['sub'])){
    $one = $_POST['numOne'];
    $two = $_POST['numTwo'];

    if(empty($one) || empty($two)){
        echo "<span style='color:red'>Please input two numbers.</span>";
    }
    else{
        $c = new calculator();
        $c->sum($one, $two);
        $c->sub($one, $two);
    }
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <form action="math.php" method="POST">
        <input type="number" min="0" name="numOne"></input>
        <input type="number" min="0" name="numTwo"></input>
        <input type="submit" name="sub"></input>
    </form>
</body>
</html>


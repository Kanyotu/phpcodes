<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
        text-align: center;
    }
    form {
        text-align: center;
        border: solid 1px black;
        border-radius: 10px;
        width: 50%;
        box-shadow: 2px 2px 5px white;

    }
    input[type="number"] {
        padding: 5px;
        margin: 5px;
        border-radius: 10px;
        width: 50%;
    }
    input[type="submit"] {
        padding: 5px;
        margin: 5px;
        border-radius: 10px;
        background-color: burlywood;
        border: none;
    }
  </style>  
<body>
    <h1>Calculate the hypotenuse of a right-angled triangle</h1><hr><br>
    <p>Enter the base and height of the right-angled triangle to calculate the hypotenuse in the input box below</p>
    <form action="hypotenuse.php" method="post">
        <label for="base">Enter the length of the base:</label><br>
        <input type="number" name="base" placeholder="Enter the length of the base"><br>
        <label for="height"> Enter the length of the height:</label><br>
        <input type="number" name="height" placeholder="Enter the length of the height"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
    function hypotenuse($base, $height){
        $hypotenuse = sqrt(pow($base, 2) + pow($height, 2));
        return $hypotenuse;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $base = $_POST["base"];
        $height = $_POST["height"];
        echo "<b>The hypotenuse of the right-angled triangle is: ".hypotenuse($base, $height)."</b>";
    }
?>
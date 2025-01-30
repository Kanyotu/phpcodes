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
    <h1>Even or Odd</h1><hr><br>
    <p>Enter a number in the input box to check if it is even or odd</p><br>
    <form action="iseven.php" method="post">
        <label for="number"> Enter a number:</label><br>
        <input type="number" name="number" placeholder="Enter a number"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
    function isEven($number){
        if($number % 2 == 0){
            return true;
        }else{
            return false;
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = $_POST["number"];
        if(isEven($number)){
            echo "<b>The number is even</b>";
        }else{
            echo "<b>The number is odd</b>";
        }
    }
   
?>
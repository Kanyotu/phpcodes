<?php
   include("header.html");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<style>
    body {
        background-color: black;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: white;
        
    }
    div.form {
        position: relative;
        border: solid 1px white;
        box-shadow: 5 2 10px white;
        width: 100%;
        padding: 10px;
        margin: 5px;
        border-radius: 10px;
        width: 70%;

        

    }
    .form input[type="text"], .form input[type="number"] {
        padding: 5px;
        margin: 5px;
        background-color: black;
        border-radius: 7px;
        align-items: center;
        width: 80%;
    }
    .form input[type="submit"] {
        padding: 5px;
        margin: 5px;
        background-color:burlywood;
        color: black;
        border: none;
        border-radius: 10px;
        width: 70%;
        
    }
    .form input[type="submit"]:hover {
        background-color: black;
        color: white;
    }
    .form h3 {
        text-align: center;
        text-decoration: none;
        padding-bottom: 5px;
    }
    @media(max-width: 768px){
        .form input[type="text"], .form input[type="number"] {
            width: 100%;
            padding: 5px;
            margin: 5px;
            background-color: black;
            border-radius: 7px;
            align-items: center;
            
        }
        .form input[type="submit"] {
            padding: 5px;
            margin: 5px;
            background-color:burlywood;
            color: black;
            border: none;
            border-radius: 10px;
            width: 100%;
            
        }
    }


</style>
<body>
    <h1>This is the homepage</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere et dolorem quos minima itaque ea, quia sapiente quae. Voluptatem numquam est recusandae eum doloribus doloremque corporis quod aliquid ipsum praesentium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam ut quisquam sunt facere quas nemo debitis vel ullam error consequatur minus sed eveniet, minima tempora, harum incidunt quae, nesciunt illum!</p><br>
    <p>
        There is a form below fill it and submit for something fun to happen</p> <br>

    <div class="form">
        <h3>Fill This</h3>
        <form action="index.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" name="name" placeholder="kanyo2">
            <br>
            <label for="age">Age:</label><br>
            <input type="number" name="age" placeholder="20">
            <br>
            
            <input type="submit" value="submit">
        </form>
    </div>

</body>
</html>
<?php
    
    if(isset($_POST['name']) && isset($_POST['age'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        echo "<h3>Hi $name, you are $age years old</h3>";
    }
    
?>
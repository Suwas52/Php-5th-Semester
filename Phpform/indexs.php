<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php form</title>
</head>
<body>
    <form action="<?php echo  $_SERVER['PHP_SELF']  ?>" method="post">
        <label >First-Name: </label>
        <input type="text" name="firstName" placeholder="Enter Your First Name" ><br><br>
        <label >Last-Name: </label>
        <input type="text" name="lastName" placeholder="ENter Your last Name"><br><br>
        <label >Email: </label>
        <input type="email" name="email" placeholder="ENter Your Email"><br><br>
        <label >Password: </label>
        <input type="password" name="password" placeholder="ENter Your Password"><br><br>
        <input type="submit" name="submit" value="Submit">

    </form>

    <?php
// if(isset($_POST['submit']))

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        
        $FirstName = $_POST['firstName'];
        $LastName = $_POST['firstName'];
        $Email = $_POST['firstName'];
        $Password = $_POST['password'];

        //db connect
        $conn = new mysqli("localhost:3307","root","", "user");
        if($conn->connect_error){
            die("$conn->Connect_error");
        }
        echo "success";
    }
    


    // echo "First-Name : $FirstName";
    // echo "<br>";
    // echo "Last-Name : $LastName";
    // echo "<br>";
    // echo "Email: $Email";
    // echo "<br>";
    // echo "Password: $Password";


?>
</body>
</html>
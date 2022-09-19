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
        <label >Email: </label>
        <input type="email" name="email" placeholder="ENter Your Email"><br><br>
        <label >Password: </label>
        <input type="password" name="password" placeholder="ENter Your Password"><br><br>
        <input type="submit" name="submit" value="Login">

    </form>

    <?php
// if(isset($_POST['submit']))

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        //db connect
        $conn = new mysqli("localhost:3307","root","", "user");
        //database name 

        if($conn->connect_error){
            die("$conn->Connect_error");
        }

        //start login process
        echo "success";

        //query         
        $sql = "SELECT * FROM users WHERE email = '$email' and password ='$password' ";

        //connection query
        $result = $conn-> query($sql); 

        if($result->num_rows > 0 ){
            
       echo "<pre>";
       print_r($result);
       echo "</pre>";

       $row = $result ->fetch_assoc();
       echo "<pre>";
       print_r($row);
       echo "</pre>";

       $db_email = $row["email"];
       $db_password = $row["password"];

       if($db_email === $email && $db_password=== $password){
           echo "Login Successful";
       }
       else {
           echo "Complete the form";
       }
        }

    
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
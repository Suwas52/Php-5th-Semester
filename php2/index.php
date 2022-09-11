<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial of Given Number</title>
</head>
<body>
    <form method="post">
        <label for="Number">Factorial For Number</label><br>
        <input type="number" name="number"><br><br>
        <input type="submit" name="submit" values="Submit">
    </form>
    
    <?php
if(isset($_POST['submit']))
{

    $num = $_POST['number'];
    function factorial($n){
       if($n>=1){
        return $n * factorial($n -1);
       }
       else{
        return 1;
       }
    }
    $result = factorial($num);
    echo "Factorial of $num is $result";
}   
    ?>
</body>
</html>
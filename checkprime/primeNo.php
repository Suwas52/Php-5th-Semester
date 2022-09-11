<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="primeNo.php" method="get">
        <label for="text">Check the numbe whether it is prime number of not</label><br><br>
      <input type="text" name="number" placeholder="Enter Number" />
      <button type="submit"  name="submit">Submit</button>
    </form>

    <?php
    if(isset($_GET['submit'])){
        
        $num  = $_GET['number'];
        $count = 0;
        for( $i=1; $i<=$num; $i++){
            if($num % $i == 0){
                $count++;
            }
        }
        if($count<=2){
            echo "$num is a prime number ";
        }
        else {
            echo "$num is not a prime number ";
        }
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum value</title>
</head>
<body>


    <?php
        function getMax($array)
        {
            $n = count($array);
            $max = $array[0];
            for ($i = 1; $i < $n; $i++)
            if ($max < $array[$i])
            $max = $array[$i];
            return $max;      
        }
        $arrNum = array(1,2,3,56,32,100,23,5);

        echo (getMax($array));


    ?>
</body>

</html>
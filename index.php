<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $x = rand(1, 20);
        $y = rand(1,20);
        $msg = "";
        echo "X: $x <br> Y: $y";
        if($x > $y)
            $msg = "<h1> MAGGIORE </h1>";
        elseif($x < $y)
            $msg = "<h1> MAGGIORE </h1>";
        else
            $msg = "<h1> UGUALE </h1>";
        echo $msg;

        $max = max($x, $y);
        $second_msg = "";
        if($max < 10)
            $second_msg = "<p> $max minore di 10 </p>";
        else if($max <= 20)
            $second_msg = "<p> $max compreso tra 10 e 20 </p>";
        else if($max <= 30)
            $second_msg = "<p> $max compreso tra 21 e 30 </p>";
        else
            $second_msg = "<p> $max maggiore di 30 </p>";
        echo $second_msg; 
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>This is my first PHP</h1>
        <p>
            <?php
            $x = $_GET['x'];
            $y = $_GET['y'];
            $z = $x + $y;
            echo "The sum of x and y is: <br>" . $z;        
            ?> 
        </p>
        
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keep count</title>
</head>
<body>
    <style>
        body {
            text-align: center;
            align-items: center;
        }
    </style>
    <h1>
        Welcome to my webpage
    </h1>
    <?php 
        $file = 'count.txt';
        $handler = fopen($file, 'r') or die('Cannot open file');
        $count = fread($handler, 10);
        $count++;
        echo '<h2>The number of people who have visited this site is : '.$count.'</h2>';
        fclose($handler);
        $handler = fopen($file, 'w');
        fwrite($handler, $count);
        fclose($handler);
    ?>
</body>
</html>


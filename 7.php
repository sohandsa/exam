<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Digital Clock</title>
</head>
<body>
    <style>
        body {
            text-align: center;
        }
    </style>
    <h1>Digital Clock</h1>
    <hr>
    <?php
        echo '<h1>'.date('h:i:s A').'</h1>';
    ?>
</body>
</html>
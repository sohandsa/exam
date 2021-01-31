<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern matching</title>
</head>
<body>
    <?php
        $res = shell_exec('python ./9.py');
        $states = explode("\n", $res);
        echo "Statement is <b>$states[4]</b><br>";
        echo "Words that end with xas : <b>$states[0]</b><br>";  
        echo "Words that starts with k and end with s : <b>$states[1]</b><br>";  
        echo "Words that starts with m end with s : <b>$states[2]</b><br>";  
        echo "Words that end with a : <b>$states[3]</b><br>";  
    ?>
</body>
</html>
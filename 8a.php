<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculator</title>
</head>
<body>
    <h1>Simple calculator</h1>
    <hr>
    <?php 
        $op1 = $_POST['op1'];
        $op2 = $_POST['op2'];
        $operand = $_POST['operands'];
        $result = 0;
        switch($operand) {
            case '+':
                $result = $op1 + $op2;
                break;
            case '-':
                $result = $op1 - $op2;
                break;
            case '*':
                $result = $op1 * $op2;
                break;
            case '/':
                if($op2 == 0) {
                    echo '<h2>Divide by zero error</h2>';
                    exit();
                }
                else {
                    $result = $op1 / $op2;
                }
                break;
        }
        echo '<h2>Result of '.$op1.' '.$operand.' '.$op2.' = '.$result.'</h2>';
    ?>
</body>
</html>
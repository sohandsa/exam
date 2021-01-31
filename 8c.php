<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication of Matrix</title>
</head>
<body>
    <h1>Multiplication of matrix</h1>
    <?php
        $matA = Array(
            Array(1, 2),
            Array(3, 4),
            Array(5, 6),
        );
        $matB = Array(
            Array(2, 3, 4),
            Array(1, 3, 1)
        );
        $result = Array();
        echo '<h2>Matrix A is <br>';
        for($i = 0; $i < count($matA); $i++) {
            for($j = 0; $j < count($matA[0]); $j++) {
                echo $matA[$i][$j].' ';
            }
            echo '<br>';
        }
        echo '</br>';
        echo '<h2>Matrix B is <br>';
        for($i = 0; $i < count($matB); $i++) {
            for($j = 0; $j < count($matB[0]); $j++) {
                echo $matB[$i][$j].' ';
            }
            echo '<br>';
        }
        echo '</br>';
        echo '<h2>Matrix A X Matrix B<br>';
        for($i = 0; $i < count($matA); $i++) {
            for($j = 0; $j < count($matA[0]); $j++) {
                $result[$i][$j] = 0;
                for($k = 0; $k < count($matB); $k++) {
                    $result[$i][$j] += ($matA[$i][$k] * $matB[$k][$j]);
                }
            }
        }
        for($i = 0; $i < count($result); $i++) {
            for($j = 0; $j < count($result[0]); $j++) {
                echo $result[$i][$j].' ';
            }
            echo '<br>';
        }
        echo '</br>';
        
    ?>
    
</body>
</html>
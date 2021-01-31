<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Matrices</title>
</head>
<body>
    <h1>Addition of matrices</h1>
    <?php
                $matA = Array(
                    Array(1, 2),
                    Array(3, 4),
                    Array(5, 6),
                );
                $matB = Array(
                    Array(4, 5),
                    Array(6, 7),
                    Array(3, 5),
                );
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
                echo '<h2>Matrix A + Matrix B<br>';
                for($i = 0; $i < count($matA); $i++) {
                    for($j = 0; $j < count($matA[0]); $j++) {
                        echo $matA[$i][$j] + $matB[$i][$j].' ';
                    }
                    echo '<br>';
                }
                echo '</br>';
    ?>
</body>
</html>
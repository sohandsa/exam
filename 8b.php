<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transpose Matrix</title>
</head>
<body>
    <h1>Transpose of matrix</h1>
    <?php
        $matA = Array(
            Array(1, 2),
            Array(3, 4),
            Array(5, 6)
        );
        $matB = Array();
        echo '<h2>Matrix is<br>';
        for($i = 0; $i < count($matA); $i++) {
            for($j = 0; $j < count($matA[0]); $j++) {
                echo $matA[$i][$j].' ';
                $matB[$j][$i] = $matA[$i][$j];
            }
            echo '<br>';
        }
        echo '</h2>';
        echo '<h2>Transpose is<br>';
        for($i = 0; $i < count($matB); $i++) {
            for($j = 0; $j < count($matB[0]); $j++) {
                echo $matB[$i][$j].' ';
            }
            echo '<br>';
        }
        echo '</h2>';
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bang cuu chuong</title>
</head>
<body>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<h3>Bảng cửu chương $i</h3>";
        for ($j = 1; $j <= 10; $j++) {
            $tich = $i * $j;
            echo "$i x $j = $tich <br>";
        }
        echo "<hr>";
    }
    ?>
</body>
</html>
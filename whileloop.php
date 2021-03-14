<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Do while loop</title>
</head>
<body>
    <?php
    $grade = 0;
    while ($grade < 10) {
        echo "<h3>I'm in primary school. My age is $grade.</h3>";
        echo '<h4>Now my age is : '.++$grade.'</h4>';
    }
    ?>
</body>
</html>
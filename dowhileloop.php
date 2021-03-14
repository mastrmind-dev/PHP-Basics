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
    $count = 11;
    do{
        echo 'I\'m doing\' this until you say me to stop. ASK : '.$count;
        ++$count;
    } while($count < 10);
    ?>
</body>
</html>
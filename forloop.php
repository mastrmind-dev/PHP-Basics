<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - For loop</title>
</head>
<body>
<?php
for($count = 0; $count < 10; $count++){
    $newcount = $count + 1;
    echo "<p>The Count Is : $newcount</p>";
}
?>
</body>
</html>
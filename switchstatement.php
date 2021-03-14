<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch statement</title>
</head>
<body>
<?php
$grade = 'A';

switch($grade){
    case 'A':
        echo'<h1 style="color:green">You\'re a superstar!!!</h1>';
        break;
    case 'B':
        echo 'not bad';
        break;
    default:
        echo 'nothing';
}
?>
    
</body>
</html>
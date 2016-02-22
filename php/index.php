<?php
$url = parse_url($_SERVER['REQUEST_URI']);
$name = substr($url['path'], 1);
if (strlen($name) == 0) {
    $name = 'World';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>Hello <?= htmlentities($name) ?></title>
</head>
<body>
    <h1>Hello <?= htmlentities($name) ?>!</h1>
    
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1

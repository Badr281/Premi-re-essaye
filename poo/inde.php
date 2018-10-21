<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content ="">
    <meta name ="author" content ="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php

//la documentation des classes

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
    include $class_name . '.php';
   
// require 'bootstrapform.php';  
$Form = new bootstrappform($_POST);
?>

<form action="#" method="post">
<?php

echo $Form->input('username');
echo $Form->input('password');
echo $Form->submit();

?>
</form>

    
</body>
</html>
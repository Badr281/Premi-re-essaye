<?php

require '../app/Autoloader.php';
App\Autoloader::register();
if(isset($_GET['p']))
{
    $p = $_GET['p'];
}
else
{
    $p = 'homme';
}
ob_start();
if($p === 'homme')
{
    require '../pages/homme.php';
}
elseif($p ==='single')
{
    require '../pages/single.php';
}

$content = ob_get_clean();

require '../pages/Template/default.php';
?>



<?php
include "Form.php";
include "Text.php";
// $Form = new form(array('username' =>'karim' , 'password' => '123456'));


var_dump(calcul::rec(9));
$Form = new form($_POST);

?>
<form action="#" method ="post">
<?php
echo "Username : &nbsp; ". $Form->input('username')  ;
echo $Form->input('password');


echo $Form->submit();

?>
</form>
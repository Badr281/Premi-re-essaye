<!-- <h1><?= $content;?></h1> -->


<?php
$pdo = new PDO('mysql:dbname=founder;host=localhost','root','');
// die(var_dump(PDO::ATTR_ERRMODE));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$res=$pdo->query('select * from User');
// $count = $pdo->exec('insert into user(Username,Password,Mode) values ("badr","1234","Directeur") ');
$datas =$res->fetchALL(PDO::FETCH_OBJ);
var_dump($datas[1]);

?>
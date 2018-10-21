<?php


namespace App;

Use \pdo;
class connexion
{
private $username;
private $password;
private $db_name;
private $host;
private $pdo;


public function __construct($db_name,$username='root',$password='',$host='localhost')
{
    $this->db_name = $db_name;
    $this ->username = $username;
    $this ->password = $password;
    $this->host = $host;
}
public function getPdo()
{
    if($this ->pdo === null)
    {
        $pdo = new PDO('mysql:dbname=founder;host=localhost','root','root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo=$pdo;
    }
    return $pdo;
}
    public functionn querry($statement)
    {
        $req = $this->getPdo()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_OBJ);
        return $datas;


    }

}



?>
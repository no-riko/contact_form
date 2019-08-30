<?php

$host = "localhost";
$dbname = "contact_from";
$scharset = "utf8";
$user = "root";
$password = "";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

echo $sdn;

try{
    $dbh = new PDO($dsn, $user, $password, $options)

}catch(\PDOException $e){
    var_dump($e->getMessage());

    exit;
}

?>
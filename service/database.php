<?php
$dns = 'mysql:host=localhost;dbname=doiyourstyle';
$user = 'root';
try{
    $conn = new PDO($dns, $user, '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo $e->getMessage();
    die('.....Koneksi ERROR');
}

$query = $conn->query('SELECT * FROM product');

$box = [];

while($row = $query->fetch(PDO::FETCH_ASSOC)){
    $box[] = $row;
}

// print_r($box) ;
?>


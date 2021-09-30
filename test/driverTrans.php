<?php
header('content-type:application/json;charset=utf-8');
try{
    $dsn="mysql:host=mariadb-071.wc2.dfw3.stabletransit.com;dbname=1015490_pricssw";
    $pdo=new PDO($dsn,'1015490_pricssw','7CcjUGsxLN82');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");
    $sql="SELECT * FROM `db_driver` order by id desc limit 1";
    $res = $pdo->query($sql);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $info = $res->fetch();

    $params=$info['ddata'];
    $values=base64_decode($params);
    $paraArr=json_decode($values);
    echo json_encode($paraArr,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
}catch(PDOException $e){
    echo $e->getMessage();
}
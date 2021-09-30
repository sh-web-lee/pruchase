<?php
/**
 * handle requests
 */
session_start();
include_once './include/conf.php';
include_once './include/pub.func.php';
error_reporting(E_ALL);
if (!empty($_GET['action']) && (($_GET['action']) == 'sendGift')) {
    $sendEmail = $_GET['sendEmail'];
    if (isEmail($sendEmail)) {
        try {
            $dsn = "mysql:host=" . $dbConf['server'] . ";dbname=" . $dbConf['database'];
            $pdo = new PDO($dsn, $dbConf['user'], $dbConf['password']);
            $pdo->exec("set names 'utf8'");
            $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            //mail check
            $checkSql = "select * from aff2018newyear where sendEmail=:sendEmail and status=1";
            $pre = $pdo->prepare($checkSql);
            $pre->bindParam(':sendEmail', $sendEmail);
            $pre->execute();
            $insertSql = "insert into aff2018newyear(sendEmail,ip,addTime,status) VALUES (:sendEmail,:ip,:addTime,0)";
            $insertPre = $pdo->prepare($insertSql);
            $clientIp = getIP();
            $addTime = time();
            $insertPre->bindParam(':sendEmail', $sendEmail);
            $insertPre->bindParam(':ip', $clientIp);
            $insertPre->bindParam(':addTime', $addTime);
            $insertPre->execute();
            $insertId = $pdo->lastInsertId();

            $body = file_get_contents('./template/mail.temp.html');
            $return = sendLogMail($mailConf['slat'], $sendEmail, $mailConf['title'], $mailConf['fromName'], $mailConf['fromEmail'], $body, '');
            if (is_numeric($return)) {
                $pdo->exec('update aff2018newyear set status=1 where id=' . $insertId);
                setcookie('aff_ga_s', 1, time() + 3600 * 24 * 30);
                echo json_encode(array('status' => 1, 'errorMsg' => ''));
                exit();
            }
        } catch (PDOException $e) {
            file_put_contents('errorLog.txt', time() . ':' . $e->getMessage() . PHP_EOL, FILE_APPEND);
        }
    } else {
        echo json_encode(array('status' => 0, 'errorMsg' => 'Incorrect E-mail format.'));
        exit();
    }
}
echo json_encode(array('status' => 0, 'errorMsg' => ''));
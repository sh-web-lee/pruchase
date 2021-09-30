<?php
/**
 * 公共方法
 */

/**
 * 发送邮件
 * @param $slat
 * @param $email
 * @param $title
 * @param $from_name
 * @param $from_email
 * @param $body
 * @param string $name
 * @return mixed
 */
function sendLogMail($slat,$email, $title,$from_name,$from_email, $body, $name = ''){
    $url = "http://interface.iobit.com/mail/";
    if (is_array($email)) $email = implode(',', $email);

    $post_data['subject'] = $title;
    $post_data['body'] = $body;
    $post_data['tname'] = $name;
    $post_data['email'] = $email;
    $post_data['fname'] = $from_name;
    $post_data['femail'] = $from_email;
    $post_data['slat'] = $slat;
    $post_data['attachment'] = 0;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, 'http://www.iobit.com/');
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

/**
 * 获取ip
 * @return string
 */
function getIP()
{
    if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
        $cip = $_SERVER["HTTP_CLIENT_IP"];
    } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        $ip_arr = explode(',',$_SERVER["HTTP_X_FORWARDED_FOR"]);
        $cip=$ip_arr[0];
    } elseif (!empty($_SERVER["REMOTE_ADDR"])) {
        $cip = $_SERVER["REMOTE_ADDR"];
    }else{
        $cip='';
    }
    return $cip;
}

/**
 * 邮箱判断
 * @param $email
 * @return bool
 */
function isEmail($email){
    if (!preg_match("^[_\.0-9a-z+-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$^",$email)){
        return false;
    }
    return true;
}
<?php
error_reporting(0);
session_start();
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$refStr = (empty($_GET['ref']) ? '' : $_GET['ref']);
$affStr = (empty($_GET['aff']) ? (empty($_GET['AFF']) ? '' : $_GET['AFF']) : $_GET['aff']);

$ref = empty($refStr) ? (empty($affStr) ? '' : '?aff='.$affStr) : (empty($affStr) ? '?ref=ir' : '?ref='.$refStr.'&aff='.$affStr);
header("Refresh: 5; url=https://purchase.iobit.com/aff/en/asc/2017asc10general/index.php$ref");

if(($_GET['src']=='tp') && in_array($_GET['t'],array('26634253','26634264','26660412','26708771',
        '26695207','26695234','15526758','15817409','26695295','26695255','26695361','26695367','26696019',
        '26696077','26696248','26696471','26696522','26696578','26696655','27232005','27232028'))){
  $cName='enaffbf_s';
  $currentStatus=$_COOKIE[$cName];
  if($currentStatus==2){
    header('location:https://www.iobit.com/en/thankyou.php?refs=enaffbf');
    exit();
  }
}

if($_GET['action']=='statistic'){
  $status=$_GET['status'];
  $des=$_GET['des'];
  statistic($status,$des);
  exit();
}

$arr = [
    'asc'=>['onepc'=>'135', 'threepc'=>'128'],
    'db'=>['onepc'=>'119', 'threepc'=>'116'],
    'imf'=>['onepc'=>'353', 'threepc'=>'314'],
    'mb'=>['onepc'=>'309', 'threepc'=>'327'],
    'isu'=>['onepc'=>'235', 'threepc'=>'227'],
    'iu'=>['onepc'=>'213', 'threepc'=>'206'],
    'all'=>['onepc'=>'98', 'threepc'=>'78'],
];
if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $type = $_GET['type'];
    $button = $_GET['button'];
    $c_name = 'bfriday'.$type.$button.'_p' . $date;
    $c_name_t = 'bfriday'.$type.$button.'_t' . $date;
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = $arr[$type][$button];
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t, $totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 1) {
            $packsNum = 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

function statistic($status,$des=''){
  try{
    $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
    $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");
    $insertSql="insert into enaffbf(ip,addtime,status,des) values(:ip,:addtime,:status,:des)";
    $pre=$pdo->prepare($insertSql);

    $ip=getIP();
    $addTime=time();
    $pre->bindParam(':ip',$ip);
    $pre->bindParam(':addtime',$addTime);
    $pre->bindParam(':status',$status);
    $pre->bindParam(':des',$des);
    $pre->execute();
  }catch (PDOException $e){
    var_dump($e->getMessage());
  }
}

function sendMail($email,$title,$body){
    $url = "http://interface.iobit.com/mail/";

    $post_data['subject'] 		= $title;
    $post_data['body'] 			= $body;
    $post_data['tname']	 		= "";
    $post_data['email']	 		= $email;
    $post_data['fname']	 		= "IObit";
    $post_data['femail'] 		= "iobitfacebook@iobit.com";
    $post_data['slat']	 		= '8dcdbc87be2dc42dd3ec9cae301a12d3';
    $post_data['attachment'] 	= 0;
    //$post_data['callback'] 		= "http://test.iobit.com/pwei/test_mail_api/return.php";

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
$body = 'Dear customer,<br><br>

Thank you for your order. Here we prepared you a super gift pack, which contains three PC utilities: Smart Defrag, IObit Uninstaller, and Protected Folder.<br><br>

Please check the details here:<br>
1. Smart Defrag 6 PRO (1 year / 1 PC):<br>
Download link: https://cdn.iobit.com/dl/smart-defrag-setup.exe<br>
License code: 2D376-6622C-96905-DD8B6<br><br>

2. IObit Uninstaller 10 PRO (1 year / 1 PC):<br>
Download link: https://cdn.iobit.com/dl/iobituninstaller.exe<br>
License code: 68D3C-9FCD8-D1793-230B0<br><br>

3. Protected Folder (1 year / 1 PC):<br>
Download link: https://cdn.iobit.com/dl/protected-folder-setup.exe<br>
License code: 214F5-729ED-3B768-2A1B9<br><br>

If you have any further question, please feel free to contact tickets@iobit.com.<br><br>

Best Regards,<br>
IObit';



//$conn = new mysqli('127.0.0.1', 'root', '', 'iobit');
//$dsn = 'ld-iobit-com.cylexcs6bned.us-east-1.rds.amazonaws.com';
//$conn = new mysqli($dsn, 'admin','yzfu9CFYcdo8LyyCg7Kd','user_info');
//if($_POST['email']){
//   $date = date('Y-m-d H:i:s');
//   $email = addslashes($_POST['email']);
//   $sql = "insert into blcakfriday (email, date) values('$email', '$date')";
//   if (!$conn->query($sql)) {
//       var_dump($conn->error);
//   }else{
//       sendMail($email,'Congratulations! Enjoy the Free gift pack from IObit',$body);
//   }
//   exit();
//}
$buyLinkAscDbImf1pc='https://www.iobit.com/buy.php?product=enaff-2020valuepack2797&ref='.($refStr ? $refStr : 'enaff_asc14dbimf_2020bf1pc').'&aff='.$affStr;
$buyLinkAscDbImf3pc='https://www.iobit.com/buy.php?product=enaff-2020valuepack3397&ref='.($refStr ? $refStr : 'enaff_asc14dbimf_2020bf3pc').'&aff='.$affStr;;
$buyLinkAsc1pc='https://www.iobit.com/buy.php?product=enaff-asc141199&ref='. ($refStr ? $refStr : "enaff_asc14_2020bf1pc").'&aff='.$affStr;
$buyLinkAsc3pc='https://www.iobit.com/buy.php?product=enaff-asc141499&ref='. ($refStr ? $refStr : 'enaff_asc14_2020bf3pc').'&aff='.$affStr;
$buyLinkDb1pc='https://www.iobit.com/buy.php?product=enaff-db81499&ref='. ($refStr ? $refStr : 'enaff_db8_2020bf1pc') .'&aff='. $affStr;
$buyLinkDb3pc='https://www.iobit.com/buy.php?product=enaff-db81799&ref='. ($refStr ? $refStr : 'enaff_db8_2020bf3pc') .'&aff='. $affStr;
$buyLinkImf1pc='https://www.iobit.com/buy.php?product=enaff-imf81499&ref='. ($refStr ? $refStr : 'enaff_imf8_2020bf1pc') .'&aff='. $affStr;
$buyLinkImf3pc='https://www.iobit.com/buy.php?product=enaff-imf81799&ref='. ($refStr ? $refStr : 'enaff_imf8_2020bf3pc') .'&aff='. $affStr;
$buyLinkMb1pc='https://www.iobit.com/buy.php?product=enaff-mb81599&ref='. ($refStr ? $refStr : 'enaff_mb8_2020bf1mac') .'&aff='. $affStr;
$buyLinkMb3pc='https://www.iobit.com/buy.php?product=enaff-mb82799&ref='. ($refStr ? $refStr : 'enaff_mb8_2020bf3mac') .'&aff='. $affStr;
$buyLinkIsu1pc='https://www.iobit.com/buy.php?product=enaff-isu3899&ref'. ($refStr ? $refStr : 'enaff_isu3_2020bf1pc') .'&aff='. $affStr;
$buyLinkIsu3pc='https://www.iobit.com/buy.php?product=enaff-isu31199&ref'. ($refStr ? $refStr : 'enaff_isu3_2020bf3pc') .'&aff='. $affStr;
$buyLinkIu1pc='https://www.iobit.com/buy.php?product=enaff-iu10999&ref='. ($refStr ? $refStr : 'enaff_iu10_2020bf1pc') .'&aff='. $affStr;
$buyLinkIu3pc='https://www.iobit.com/buy.php?product=enaff-iu101299&ref='. ($refStr ? $refStr : 'enaff_iu10_2020bf3pc') .'&aff='. $affStr;
$buyLinkAscDb1pc='https://www.iobit.com/buy.php?product=enaff-2020toppacka2248&ref='. ($refStr ? $refStr : 'enaff_asc14db_2020bf1pc') .'&aff='. $affStr;
$buyLinkAscDb3pc='https://www.iobit.com/buy.php?product=enaff-2020toppacka2748&ref='. ($refStr ? $refStr : 'enaff_asc14db_2020bf3pc') .'&aff='. $affStr;
$buyLinkAscIu1pc='https://www.iobit.com/buy.php?product=enaff-2020toppackb2248&ref='. ($refStr ? $refStr : 'enaff_asc14iu_2020bf1pc') .'&aff='. $affStr;
$buyLinkAscIu3pc='https://www.iobit.com/buy.php?product=enaff-2020toppackb2748&ref='. ($refStr ? $refStr : 'enaff_asc14iu_2020bf3pc') .'&aff='. $affStr;
$buyLinkDbImf1pc='https://www.iobit.com/buy.php?product=enaff-2020toppackc2498&ref='. ($refStr ? $refStr : 'enaff_db8imf_2020bf1pc') .'&aff='. $affStr;
$buyLinkDbImf3pc='https://www.iobit.com/buy.php?product=enaff-2020toppackc2998&ref='. ($refStr ? $refStr : 'enaff_db8imf_2020bf3pc') .'&aff='. $affStr;

//if(strpos($_GET['ref'],'ir') !== false){
//    $buyLinkAscDbImf3pc='https://iobit.onfastspring.com/2019-iobit-black-friday-pack-asc-db-1-pc-2248';
//    $buyLinkAscDbImf1pc='https://iobit.onfastspring.com/2019-iobit-black-friday-best-value-pack-1-pc-2797';
//    $buyLinkAsc3pc='https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-2019bf-1499';
//    $buyLinkAsc1pc='https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-1-pc-2019bf-1199';
//    $buyLinkDb3pc='https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-2019bf-1799';
//    $buyLinkDb1pc='https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-1-pc-2019bf-1499';
//    $buyLinkImf3pc='https://iobit.onfastspring.com/iobit-malware-fighter-pro-1-year-subscription-3-pcs-2019bf-1799';
//    $buyLinkImf1pc='https://iobit.onfastspring.com/iobit-malware-fighter-pro-1-year-subscription-1-pc-2019bf-1499';
//    $buyLinkMb3pc='https://iobit.onfastspring.com/macbooster-pro-1-year-subscription-3-macs-2799';
//    $buyLinkMb1pc='https://iobit.onfastspring.com/macbooster-pro-1-year-subscription-1-mac-1599';
//    $buyLinkIsu3pc='https://iobit.onfastspring.com/iobit-software-updater-pro-1-year-subscription-3-pcs-2019bf-1199';
//    $buyLinkIsu1pc='https://iobit.onfastspring.com/iobit-software-updater-pro-1-year-subscription-1-pc-899';
//    $buyLinkIu3pc='https://iobit.onfastspring.com/iobit-uninstaller-pro-1-year-subscription-3-pcs-2019bf-1299';
//    $buyLinkIu1pc='https://iobit.onfastspring.com/iobit-uninstaller-pro-1-year-subscription-1-pc-2019bf-999';
//    $buyLinkAscDb3pc='https://iobit.onfastspring.com/2019-iobit-black-friday-pack-asc-db-3-pcs';
//    $buyLinkAscDb1pc='https://iobit.onfastspring.com/2019-iobit-black-friday-pack-asc-db-1-pc-2248';
//    $buyLinkAscIu3pc='https://iobit.onfastspring.com/iobit-black-friday-pack-asc-iu-3-pcs-2748';
//    $buyLinkAscIu1pc='https://iobit.onfastspring.com/iobit-black-friday-pack-asc-iu-1-pc-2248';
//    $buyLinkDbImf3pc='https://iobit.onfastspring.com/2019-iobit-black-friday-pack-db-imf-3-pcs';
//    $buyLinkDbImf1pc='https://iobit.onfastspring.com/2019-iobit-black-friday-pack-db-imf-1-pc-2498';
//}
?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Save up to 90% OFF on the Best PC & Mac Utilities</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap&Lato:wght@700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script
      id="fsc-api"
      src="https://d1f8f9xcsvx3ha.cloudfront.net/sbl/0.7.4/fastspring-builder.min.js"
      type="text/javascript"
      data-popup-closed="onPopClosed"
      data-storefront="iobit.onfastspring.com/popup-iobit">
  </script>
<script>
    buyLinkAsc3pc = "<?= $buyLinkAsc3pc; ?>";
    buyLinkAsc1pc = "<?= $buyLinkAsc1pc; ?>";
    buyLinkDb3pc = "<?= $buyLinkDb3pc; ?>";
    buyLinkDb1pc = "<?= $buyLinkDb1pc; ?>";
    buyLinkImf3pc = "<?= $buyLinkImf3pc; ?>";
    buyLinkImf1pc = "<?= $buyLinkImf1pc; ?>";
    buyLinkMb3pc = "<?= $buyLinkMb3pc; ?>";
    buyLinkMb1pc = "<?= $buyLinkMb1pc; ?>";
    buyLinkIsu3pc = "<?= $buyLinkIsu3pc; ?>";
    buyLinkIsu1pc = "<?= $buyLinkIsu1pc; ?>";
    buyLinkIu3pc = "<?= $buyLinkIu3pc; ?>";
    buyLinkIu1pc = "<?= $buyLinkIu1pc; ?>";
    buyLinkAscDb3pc = "<?= $buyLinkAscDb3pc; ?>";
    buyLinkAscDb1pc = "<?= $buyLinkAscDb1pc; ?>";
    buyLinkAscIu3pc = "<?= $buyLinkAscIu3pc; ?>";
    buyLinkAscIu1pc = "<?= $buyLinkAscIu1pc; ?>";
    buyLinkDbImf3pc = "<?= $buyLinkDbImf3pc; ?>";
    buyLinkDbImf1pc = "<?= $buyLinkDbImf1pc; ?>";
</script>
</head>
<body oncontextmenu=self.event.returnValue=false>
<div class="cont-bg">
  <!-- float -->
  <div class="float">
    <div class="min">
      <img class='left' src="<?php echo getStaticUrl('images/grandprize.png')?>" alt="">
      <img class='left_min' src="<?php echo getStaticUrl('images/grandprize_m.png')?>" alt="">
      <img class='right' src="<?php echo getStaticUrl('images/header-min-bg.png')?>" alt="">
      <span class="text">Claim Your Prize (<b>Free $60</b> Value Gift Pack) with Any Purchase</span>
      <div class="time">
        <p class="countdown" id="countdown2">
            <em>Prize expires in</em>
            <strong>05</strong> <span>M <b>:</b></span>
            <strong>00</strong> <span>S <b>:</b></span>
            <strong class="last">00</strong> <span>Ms</span>
          </p>
          <p class="more">Learn More</p>
      </div>
    </div>
  </div>

  <div class="float—max-box">
    <div class="float—max">
      <div class="cont">
      <h3>Claim Your Prize (<span>Free $60</span> Value Gift Pack) with Any Purchase</h3>
      <div class="time">
          <p class="countdown" id="countdown1">
              <em>Hurry!  Prize expires in</em>
              <strong class="_st">05</strong> <span>M <b>:</b></span>
              <strong>00</strong> <span>S <b>:</b></span>
              <strong class="last">00</strong> <span>Ms</span>
          </p>
      </div>
      <p class="nav">
        <span>1.  Select any product</span><span>2. Complete the purchase</span><span>3.  Enter email in the pop-up Window</span>
      </p>
      <dl class="list">
        <img src="<?php echo getStaticUrl('images/xl/title.png')?>" alt="">
        <dd>
            <div class="item">
              <img src="<?php echo getStaticUrl('images/xl/g-1.png')?>" alt="">
              <h4>Smart Defrag PRO</h4>
              <del>$19.99</del>
              <span> Fast & Deep Defrag for the Maximized Hard Drive & PC Performance</span>
            </div>
            <div class="item">
              <img src="<?php echo getStaticUrl('images/xl/g-2.png')?>" alt="">
              <h4>IObit Uninstaller PRO</h4>
              <del>$19.99</del>
              <span>Remove Stubborn Programs without Leaving a Trace</span>
            </div>
            <div class="item">
              <img src="<?php echo getStaticUrl('images/xl/g-3.png')?>" alt="">
              <h4>Protected Folder</h4>
              <del>$19.99</del>
              <span>Secure Important Files with One Password Access</span>
            </div>
        </dd>
      </dl>
      </div>
    </div>
  </div>

  <!-- end float -->

  <!-- banner(offer80) -->
  <div class="banner">
    <div class="img">
      <img class="window" src="<?php echo getStaticUrl('images/title.png')?>" alt="">
      <img class="mble tes" src="<?php echo getStaticUrl('images/title-m.png')?>" alt="">
      <div id="Best"></div>
      <img class="window mesl"  src="<?php echo getStaticUrl('images/80.png')?>" alt="">
      <img class="mble mesl" src="<?php echo getStaticUrl('images/80-m.png')?>" alt="">
    </div>
    <div class="cont-box">
      <img class="window " style="margin:auto;" src="<?php echo getStaticUrl('images/80-title.png')?>" alt="" />
      <img class="mble title" src="<?php echo getStaticUrl('images/80-title-m.png')?>" alt="" />
      <div class="cont">
        <img class="box window" src="<?php echo getStaticUrl('images/box.png')?>" alt="" />
        <img class="box mble box" src="<?php echo getStaticUrl('images/box-m.png')?>" alt="" />
        <i class="zk"></i>
        <dl class="right">
          <dt>Includes:</dt>
          <dd class="text">
            <h4>Advanced SystemCare 14 PRO</h4>
            <p> Deep clean your PC with one-click & make your PC cleaner, faster and more secure.</p>
          </dd>
          <dd class="text">
            <h4>Driver Booster 8 PRO</h4>
            <p> Automatically and safely keep over 4,500,000 drivers & popular game components up-to-date. </p>
          </dd>
          <dd class="text">
            <h4>IObit Malware Fighter 8 PRO</h4>
            <p>Triple engines to fully protect your PC against malware, virus & ransomware in real time. </p>
          </dd>
          <div id="all" class="buy-btn">
          <dl>
            <dd class="onepc">
              <h4>Only <b>$22.58</b> <del>$225.83</del></h4>
              <a href="<?= $buyLinkAscDbImf1pc; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc14dbimf2020bf1pc')"><button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="12" viewBox="0 0 19 12"><path id="形状_26" data-name="形状 26" class="cls-1" d="M1271.26,941.422h-2.54l-4.48,6.883a0.811,0.811,0,0,1-.25.242,0.789,0.789,0,0,1-.52.194H1256a0.833,0.833,0,0,1,0-1.665h7.08l0.65-1h-9.09a0.832,0.832,0,0,1,0-1.664h10.06a0.718,0.718,0,0,1,.11.007l0.69-1.054h-11.62a0.833,0.833,0,0,1,0-1.665h12.71l0.99-1.525a0.841,0.841,0,0,1,.27-0.259,0.827,0.827,0,0,1,.49-0.164h2.92A0.833,0.833,0,0,1,1271.26,941.422Zm-13.54,7.986a1.175,1.175,0,1,1-1.15,1.174A1.157,1.157,0,0,1,1257.72,949.408Zm4.33,0a1.175,1.175,0,1,1-1.15,1.174A1.165,1.165,0,0,1,1262.05,949.408Z" transform="translate(-1253.06 -939.75)"/></svg><b>Buy Now</b> 1 year / 1 pc</button></a>
              <p><i><del style="width:24px"></del></i><span> 78 Left </span></p>
            </dd>
            <dd class="threepc">
              <h4>Only <b>$27.58</b> <del>$275.83</del></h4>
              <a href="<?= $buyLinkAscDbImf3pc; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc14dbimf2020bf3pc')"><button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="12" viewBox="0 0 19 12"><path id="形状_26" data-name="形状 26" class="cls-1" d="M1271.26,941.422h-2.54l-4.48,6.883a0.811,0.811,0,0,1-.25.242,0.789,0.789,0,0,1-.52.194H1256a0.833,0.833,0,0,1,0-1.665h7.08l0.65-1h-9.09a0.832,0.832,0,0,1,0-1.664h10.06a0.718,0.718,0,0,1,.11.007l0.69-1.054h-11.62a0.833,0.833,0,0,1,0-1.665h12.71l0.99-1.525a0.841,0.841,0,0,1,.27-0.259,0.827,0.827,0,0,1,.49-0.164h2.92A0.833,0.833,0,0,1,1271.26,941.422Zm-13.54,7.986a1.175,1.175,0,1,1-1.15,1.174A1.157,1.157,0,0,1,1257.72,949.408Zm4.33,0a1.175,1.175,0,1,1-1.15,1.174A1.165,1.165,0,0,1,1262.05,949.408Z" transform="translate(-1253.06 -939.75)"/></svg><b>Buy Now</b> 1 year / 3 pcs</button></a>
              <p ><i><del style="width:18px"></del></i><span> 98 Left </span></p>
            </dd>
          </dl>
        </div>
        </dl>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <div id="off70"></div>
  <img class="next window" src="<?php echo getStaticUrl('images/next.png')?>" alt="" />
  <img class="next mble" src="<?php echo getStaticUrl('images/next-m.png')?>" alt="" />
  <!-- offer70 -->
  <div class="offer offer70" >
    <img class="i-title window" src="<?php echo getStaticUrl('./images/70-title.png')?>" alt="" />
    <img class="i-title mble" src="<?php echo getStaticUrl('./images/70-title-m.png')?>" alt="" />
    <div class="cont">
      <ul id="offer70">
      </ul>
      <div id="off75"></div>
    </div>
  </div>
  <!-- end offer70 -->

  <!-- offer75 -->
  <div class="offer offer75">
    <img class="i-title window"  src="<?php echo getStaticUrl('./images/75-title.png')?>" alt="" />
    <img class="i-title mble"  src="<?php echo getStaticUrl('./images/75-title-m.png')?>" alt="" />
    
    <div class="cont">
      <ul id="offer75">
      </ul>
    </div>
  </div>
  <!-- end offer75 -->
  <img class="next window" src="<?php echo getStaticUrl('images/next.png')?>" alt="" />
  <img class="next mble" src="<?php echo getStaticUrl('images/next-m.png')?>" alt="" />
</div>
<!-- review -->
<div class="review-box">
  <div class="review">
    <div class="wrapper">
      <!-- review-content -->
      <div class="review-content">
      </div>
      <!-- review-users -->
      <ul>
        <li >
          <img src="<?php echo getStaticUrl('images/CNET.png')?>" alt="">
          <cite>CNET</cite>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="">
          <cite>patsy-clark</cite>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="">
          <cite>dunston-diaz</cite>
        </li>
        <li class="active">
          <img src="<?php echo getStaticUrl('images/Craig-E.Whittington.png"')?>" alt="">
          <cite>Craig-E.Whittington</cite>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/ali.png')?>" alt="">
          <cite>ali</cite>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/aron-takizad.png"')?>" alt="">
          <cite>aron-takizad</cite>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/softpedia.png"')?>" alt="">
          <cite>softpedia</cite>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- end review -->
<!-- service -->
<div class="service">
  <div class="wrapper clearfix">
    <!-- payment -->
    <p class="payment">Accepted Payments <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""></p>
    <!-- dl -->
    <div class="dl-box">
    <dl>
      <dt>
        <img src="<?php echo getStaticUrl('images/tk.png')?>" alt="">
      </dt>
      <dd>
        <h3>Money-Back Guarantee</h3>
        <p>If you're not satisfied with our products, you'll get a full refund of your purchase within 60 days.</p>
      </dd>
    </dl>
    <dl>
      <dt>
      <img src="<?php echo getStaticUrl('images/aq.png')?>" alt="">
      </dt>
      <dd>
        <h3>Secure Payment</h3>
        <p>We're committed to protecting your personal info with advanced encryption and anti-spam protection.</p>
      </dd>
    </dl>
    <dl>
      <dt>
      <img src="<?php echo getStaticUrl('images/js.png')?>" alt="">
      </dt>
      <dd>
        <h3>Free, 24/7 Tech Support</h3>
        <p> Our premium support team will respond to you for any questions you may have regarding our products within 24 hours.</p>
      </dd>
    </dl>
    <dl>
      <dt>
      <img src="<?php echo getStaticUrl('images/mf.png')?>" alt="">
      </dt>
      <dd>
        <h3>Free Updates</h3>
        <p>You will get all software updates for free during the subscription period.</p>
      </dd>
    </dl>
  </div>
  </div>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dd>Note:</dd>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>*.Data may vary based on different system or computer.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved.</p>
  </div>
</div>
<!-- end footer -->

<!-- coupon -->
<div class="coupon">
    <div class="pop">
      <i class="hide icon" onclick="ga('send', 'event', 'bfbuy', 'buy', 'enaff2020bfpopup2')"></i>
      <dl>
        <dd class="cj">
          <h2>Congrats! You've been selected!</h2>
          <p class="text"><span>Spin the wheel</span>&nbsp;and win your exclusive Black Friday Prize</p>
          <button class="now playnow" onclick="ga('send', 'event', 'bfbuy', 'buy', 'enaff2020bfpopup3')">Play now</button>
          <div class="zp">
            <img class="zb" src="<?php echo getStaticUrl('images/cj/zb.png')?>" alt="" />
            <p class="WinYourPrize">
            <img class="" src="<?php echo getStaticUrl('images/cj/WinYourPrize.png')?>" alt="" />
            <button class="play playnow" onclick="ga('send', 'event', 'bfbuy', 'buy', 'enaff2020bfpopup4')">Play now</button>
            <span class="time">0:10</span>
            </p>
          </div>
        </dd>
        <dd class="zj">
          <h2>Congrats! You won the <span>Grand Prize!</span></h2>
          <p class="text">Claim your Prize (<span>Free $60</span> value gift pack) with any purchase!</p>
          <div class="cont">
          <img class="" src="<?php echo getStaticUrl('images/cj/box.png')?>" alt="" />
          <img class="" src="<?php echo getStaticUrl('images/cj/60-zk.png')?>" alt="" />
          </div>
          <button class="now showz" onclick="ga('send', 'event', 'bfbuy', 'buy', 'enaff2020bfpopup7')">Shop Now</button>
        </dd>
        <!-- <dd class="wl">
          <h2>Wait! You left your <span>Grand Prize</span> behind!</h2>
          <p class="text">Buy any items and claim your prize (<span>Free $60</span> Value Gift Pack)</p>
          <div class="cont">
          <img class="" src="<?php echo getStaticUrl('images/cj/box.png')?>" alt="" />
          </div>
          <button class="now icon" onclick="ga('send', 'event', 'bfbuy', 'buy', 'enaff2020bfpopup10')">Continue shopping</button>
          <p class="l hide icon" onclick="ga('send', 'event', 'bfbuy', 'buy', 'enaff2020bfpopup11')">No thanks, I want to give up the prize</p>
        </dd> -->
      </dl>
      
    </div>
</div>
<!-- end coupon -->

<div class="email">
  <div class="bg">
    <i class="hide" onclick="ga('send', 'event', 'bfbuy', 'buy', 'enaff2020bfpopup13')"></i>
    <div class="cont">
      <img class="" src="<?php echo getStaticUrl('images/yx/Thankyouforyourorder.png')?>" alt="" />
      <p class="to">To claim your <span>Grand Prize</span> gift pack, please enter your email address in the input box and click the "Claim My Grand Prize" button below. The gift pack will be sent over in minutes.</p>
      <input id="email" type="text" placeholder="Enter your email address here" />
      <button class="emailbtn" onclick="ga('send', 'event', 'bfbuy', 'buy', 'enaff2020bfpopup14')"><img class="" src="<?php echo getStaticUrl('images/yx/gift.png')?>" alt="" /> Claim My Grand Prize</button>
      <p class="for">For any help, please email tickets@iobit.com with your order id included.</p>
    </div>
    <div class="_cont">
      <img class="" src="<?php echo getStaticUrl('images/yx/h-title.png')?>" alt="" />
      <p class="to">The <span>Grand Prize</span> pack has been sent to your mailbox</p>
      <p class="for">* Please check your email and feel free to contact tickets@iobit.com <br/> if you have any question.</p>
    </div>
  </div>
</div>

<div class="r-nav">
<img class="" src="<?php echo getStaticUrl('images/blackfridaysale.png')?>" alt="" />
  <ul>
    <li class="ac"><a href="#Best"><span>Best Value Pack</span></a></li>
    <li><a href="#off70"><span>82% OFF Top Sellers</span></a></li>
    <li><a href="#off75"><span>87% OFF Top Bundles</span></a></li>
  </ul>
</div>
<div class="pop-up">
    <div class="pop-main">
        <div class="pop-box">
            <h2>Note:</h2>
            <p>Thank you for your visit and your interest in IObit products! This Special Offer is over now.</p>
            <p>You will be redirected to the latest IObit promotion page automatically.</p>
        </div>
    </div>
</div>
<script>refStr = "<?= $refStr; ?>"</script>
<script>affStr = "<?= $affStr; ?>"</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>

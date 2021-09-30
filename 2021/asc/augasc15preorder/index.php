<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enascoff_p' . $date;
  $c_name_t='enascoff_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,78);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';
include 'lang/en.php';

$refStr = empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr .= empty($_GET['instd'])?'':('-i'.$_GET['instd']);
$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];


$content = $text['content'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $text['title']; ?></title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 14 PRO" class="asc-box"/>
    <div class="right-message">
      <p><?php echo $content[0]; ?></p>
      <h1><?php echo $content[1]; ?></h1>
      <h3>Limited to first 500 preorders per day </h3>
      <div class="numbox">
        <span id="topNum" class="giftNum">
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
        </span>
        left now
        <div class="progress"><span></span></div>
      </div>
      <div class="price">
        <span><?php echo $content[3]; ?></span>
        <strong>$<b>0</b> <sup>*</sup></strong>
        <a href="https://www.iobit.com/buy.php?product=asc15preorder&ref=en-asc15preorder<?= $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc15preorder');" class="buybtn"><?php echo $content[4]; ?></a>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->
<div class="feature-main">
  <div class="feature01 wrapper">
     <h2>New Advanced SystemCare PRO Can Serve You Better</h2>
     <div class="box">
      <dl>
        <dt>Premium PC cleaning</dt>
        <dd>Liberate your storage space greatly with enhanced AI cleaning of redundant entries and junk files.</dd>
      </dl>
      <dl class="right">
        <dt>200% Faster PC <span>PRO ONLY</span></dt>
        <dd>Intelligently manage startup items and automatically release RAM to boost PC up to 200% faster.</dd>
      </dl>
     </div>
     <img src="<?php echo getStaticUrl('images/feature-box.png')?>" alt="" class="img-box">
     <div class="box">
      <dl>
        <dt>100% Surfing Protection <span>PRO ONLY</span></dt>
        <dd>Remove more privacy traces and hide your digital fingerprint to keep trackers and advertisers out of your connection.</dd>
      </dl>
      <dl class="right">
        <dt>300% Faster Internet <span>PRO ONLY</span></dt>
        <dd>Optimize browser settings for up to 300% faster downloading, video viewing, and online gaming, etc.</dd>
      </dl>
     </div>
  </div>
  <!-- comparison start -->
  <div class="comparison wrapper">
    <h2>With PRO, You Can Unlock All Premium Features</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th colspan="2"></th>
          <th class="space fisrt"></th>
          <th class="free" valign="bottom"><div>FREE Edition</div></th>
          <th class="space"></th>
          <th class="pro"><div> PRO Edition</div></th>
         
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr class="first">
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
          <td class="text">Basic PC cleaning and optimization</td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons yes">√</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
          <td class="text">Block malicious links and suspicious senders in web emails</td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons yes">√</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
          <td class="text">Deeply clean registry to avoid system freezes or crashes</td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
          <td class="text">Auto stop unnecessary processes to release RAM</td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
          <td class="text">Defrag hard drive data to optimize PC performance</td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></td>
          <td class="text">Up to 200% quicker PC startup</td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
          <td class="text">Up to 300% Internet speedup with Internet Booster</td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
          <td class="text">Disguise digital fingerprint to keep online activities private <img src="<?php echo getStaticUrl('images/new.png')?>" alt=""></td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <!-- 10 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
          <td class="text">Premium surfing protection with auto browsing data clean </td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <!-- 11 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
          <td class="text">Auto prevent spyware and other threats in real time <img src="<?php echo getStaticUrl('images/improved.png')?>" alt=""></td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></td>
          <td class="text">1-Click to update outdated software  <img src="<?php echo getStaticUrl('images/more.png')?>" alt=""></td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons12.png')?>" alt=""></td>
          <td class="text">Auto update to the latest version</td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
        <tr class="last">
          <td class="icon"><img src="<?php echo getStaticUrl('images/icons13.png')?>" alt=""></td>
          <td class="text">Free 24/7 technical support on demand</td>
          <td class="space fisrt"></td>
          <td class="free"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
</div>
<div class="bottom-bg">
  <div class="worthy wrapper">
    <h2>It’s the Top-ranking & Trust-worthy PC Optimizer</h2>
    <dl>
      <dt><?php echo $content[33]; ?></dt>
      <dd><?php echo $content[34]; ?></dd>
    </dl>
     <dl class="center">
      <dt><?php echo $content[35]; ?></dt>
      <dd><?php echo $content[36]; ?></dd>
    </dl>
     <dl class="last">
      <dt><?php echo $content[37]; ?></dt>
      <dd><?php echo $content[38]; ?></dd>
    </dl>
  </div>
  <div class="review wrapper">
    <h2><?php echo $content[39]; ?></h2>
    <ul>
      <li><img src="<?php echo getStaticUrl('images/ryan.png')?>" alt="Ryan Hill"> </li>
      <li><img src="<?php echo getStaticUrl('images/lyle.png')?>" alt="Lyle Stelmaschuk"> </li>
      <li class="active"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""> </li>
      <li><img src="<?php echo getStaticUrl('images/brendon.png')?>" alt="Brendon O'Rourke"> </li>
      <li><img src="<?php echo getStaticUrl('images/anthony-baker.png')?>" alt="Anthony Baker"> </li>
    </ul>
    <div class="content">
      <dl>
        <dt><?php echo $content[40]; ?></dt>
        <dd><?php echo $content[41]; ?></dd>
      </dl>
      <dl>
        <dt><?php echo $content[42]; ?></dt>
        <dd><?php echo $content[43]; ?></dd>
      </dl>
      <dl class="active">
        <dt><?php echo $content[44]; ?></dt>
        <dd><?php echo $content[45]; ?></dd>
      </dl>
        <dl>
        <dt><?php echo $content[46]; ?></dt>
        <dd><?php echo $content[47]; ?> </dd>
      </dl>
      <dl>
        <dt><?php echo $content[48]; ?></dt>
        <dd><?php echo $content[49]; ?></dd>
      </dl>
    </div>
    <div class="change">
      <span></span>
      <span></span>
      <span class="active"></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="awards wrapper">
    <h2><?php echo $content[50]; ?></h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" />
  </div>
</div>

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dd>
          <?php echo $content[51]; ?>
      </dd>
      <dd><?php echo $content[52]; ?></dd>
      <dd><?php echo $content[53]; ?></dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. <?php echo $content[58]; ?></p>
  </div>
  <!-- footer end -->


<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/fl-box.png')?>" alt="Advanced SystemCare 14 PRO" />
     <div class="numbox">
      <span id="botNum" class="giftNum">
        <b class="nwrap"><b class="numlist"><span>0</span></b></b>
        <b class="nwrap"><b class="numlist"><span>0</span></b></b>
        <b class="nwrap"><b class="numlist"><span>0</span></b></b>
      </span>
         <?php echo $content[54]; ?>
    </div>
    <div class="price">
        <strong>$<b>0</b> <sup>*</sup></strong>
        <a href="https://www.iobit.com/buy.php?product=asc15preorder&ref=en-asc15preorder<?= $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc15preorder');" class="buybtn"><?php echo $content[55]; ?></a>
      </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script>soldout_banner="<?php echo $content[56];?>";</script>
  <script>soldout_float="<?php echo $content[57];?>";</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
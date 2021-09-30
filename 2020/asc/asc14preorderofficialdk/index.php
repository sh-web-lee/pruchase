<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dkascoff_p' . $date;
  $c_name_t='dkascoff_t' . $date;
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
include 'lang/dk.php';

$refStr = empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr .= empty($_GET['instd'])?'':('-i'.$_GET['instd']);
$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];


$content = $text['content'];
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $text['title']; ?></title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 14 PRO" class="asc-box"/>
    <div class="right-message">
      <p><?php echo $content[0]; ?></p>
      <h1><?php echo $content[1]; ?></h1>
      <div class="numbox">
        <span id="topNum" class="giftNum">
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
        </span>
          <?php echo $content[2]; ?>
      </div>
      <div class="price">
        <span style='opacity: 0;'><?php echo $content[3]; ?></span>
        <strong><b>0</b> kr. <sup>*</sup></strong>
        <a href="https://www.iobit.com/buy.php?product=dk-asc14preorder&ref=dk_asc14preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14preorderofficial-dk');" class="buybtn"><?php echo $content[4]; ?></a>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->
<div class="feature-main">
  <div class="feature-box wrapper clearfix">
    <div class="left-message">
      <p><?php echo $content[5]; ?></p>
      <h2><?php echo $content[6]; ?> </h2>
      <div class="ai">
        <div class="line01"></div>
        <div class="line02"></div>
        <div class="line03"></div>
        <div class="line04"></div>
        <div class="line05"></div>
      </div>
    </div>
    <div class="message">
      <dl>
        <dt><?php echo $content[7]; ?></dt>
        <dd><?php echo $content[8]; ?></dd>
      </dl>
      <dl>
        <dt><?php echo $content[9]; ?></dt>
        <dd><?php echo $content[10]; ?></dd>
      </dl>
      <dl>
        <dt><?php echo $content[11]; ?></dt>
        <dd><?php echo $content[12]; ?></dd>
      </dl>
    </div>
  </div>
  <div class="feature feature01 wrapper clearfix" data-name='animation'>
    <div class="img-box left">
      <img src="<?php echo getStaticUrl('images/feature-box.png')?>" alt="" class="animation">
      <span class="broom animation"></span>
      <span class="list01 animation"></span>
      <span class="list02 animation"></span>
      <span class="list03 animation"></span>
    </div>
    <div class="message right">
      <h2 class="animation"><?php echo $content[13]; ?></h2>
      <dl class="animation">
        <dt><?php echo $content[14]; ?></dt>
        <dd><?php echo $content[15]; ?></dd>
        <dt><?php echo $content[16]; ?></dt>
        <dd><?php echo $content[17]; ?></dd>
        <dt><?php echo $content[18]; ?></dt>
        <dd><?php echo $content[19]; ?> </dd>
      </dl>
    </div>
  </div>
  <div class="feature feature02 wrapper clearfix" data-name='animation'>
    <div class="img-box right">
      <img src="<?php echo getStaticUrl('images/feature-box-02.png')?>" alt="" class="animation">
      <span class="rocket animation"></span>
      <span class="list01 animation"></span>
      <span class="list02 animation"></span>
      <span class="list03 animation"></span>
    </div>
    <div class="message left">
      <h2 class="animation"><?php echo $content[20]; ?></h2>
      <dl class="animation">
        <dt><?php echo $content[21]; ?></dt>
        <dd><?php echo $content[22]; ?></dd>
        <dt><?php echo $content[23]; ?></dt>
        <dd><?php echo $content[24]; ?></dd>
       </dl>
    </div>
  </div>
  <div class="feature feature03 wrapper clearfix">
    <div class="img-box left">
      <img src="<?php echo getStaticUrl('images/feature-box-03.png')?>" alt="">
      <span class="light"></span>
      <div class="list01">
        <span class="line"></span>
        <img src="<?php echo getStaticUrl('images/feature-03-03.png')?>" alt="">
      </div>
      <div class="list02">
        <span class="line"></span>
        <img src="<?php echo getStaticUrl('images/feature-03-04.png')?>" alt="">
      </div>
      <div class="list03">
        <span class="line"></span>
        <img src="<?php echo getStaticUrl('images/feature-03-05.png')?>" alt="">
      </div>
      <div class="list04 animation"></div>
      <div class="safe"></div>
    </div>
    <div class="message right">
      <h2 class="animation"><?php echo $content[25]; ?></h2>
      <dl class="animation">
        <dt><?php echo $content[26]; ?></dt>
        <dd><?php echo $content[27]; ?></dd>
        <dt><?php echo $content[28]; ?></dt>
        <dd><?php echo $content[29]; ?> </dd>
        <dt><?php echo $content[30]; ?></dt>
        <dd><?php echo $content[31]; ?> </dd>
      </dl>
    </div>
  </div>
</div>
<div class="bottom-bg">
  <div class="worthy wrapper">
    <h2><?php echo $content[32]; ?></h2>
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
        <strong><b>0</b> kr. <sup>*</sup></strong>
        <a href="https://www.iobit.com/buy.php?product=dk-asc14preorder&ref=dk_asc14preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14preorderofficial-dk');" class="buybtn"><?php echo $content[55]; ?></a>
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
<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
include "lang/es.php";
$content = $db['content'];

$viewNum = rand(98, 165);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}
if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $isInit = $_GET['isInit'];
    $c_name = 'esdbblack_p' . $date;
    $c_name_t = 'esdbblack_t' . $date;
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = (intval($_GET['packsNum']) > 0) ? intval($_GET['packsNum']) : 49;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t, $totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            if ($isInit == 1) {
                $packsNum = intval($_COOKIE[$c_name]);
            } else {
                $packsNum = $_COOKIE[$c_name] - 1;
            }
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

$refStr=empty($_GET['id'])?'':('-'.$_GET['id']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);

function paramDeal($num){
  return (intval($num)>0)?number_format(intval($num)):'';
}

$packsNum=49;
$transData=$paramData=json_decode(base64_decode($_GET['data']));

$transDataPacks=json_decode(base64_decode($_GET['num']));
if(!empty($transDataPacks)){
  if(@intval($transDataPacks->seats)){
    $packsNum=@intval($transDataPacks->seats);
  }
}
$ver=0;
if(preg_match('/(.*)\./isU',$_GET['ver'],$matches)){
  $ver=$matches[1];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $db['title']; ?></title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <div class="title clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
      </div>
      <div class="right fr">
        <b class="only"><?= $content[1]; ?></b>
        <h1><?= $content[2]; ?></h1>
        <h5><?= $content[3]; ?></h5>
        <div class="discount"><?= $content[4]; ?></div>
      </div>
    </div>
    <div class="chart">
      <div class="chartbox one"><span><?= $content[5]; ?></span></div>
      <div class="chartbox big two"><span><?= $content[6]; ?>></span></div>
      <div class="chartbox center three"><span><?= $content[7]; ?></span></div>
      <div class="chartbox big four"><span><?= $content[8]; ?></span></div>
      <div class="chartbox five"><span><?= $content[9]; ?></span></div>
    </div>
    <div class="price clearfix">
      <div class="numbox">
          <?= $content[10]; ?>
        <div id="flip" class="flipNum">
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>5</b></span></div>
          <div class="listbox last"><span class="list"><b>0</b></span></div>
        </div>
          <?= $content[11]; ?>
      </div>
      <div class="btnbox">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-db83pc149912m&ref=es_db83pc1499bf2010<?php echo $refStr;?>&refs=es_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db83pc1499bf2010-es');">
            <?= $content[12]; ?>
        </a>
        <p><?= $content[13]; ?></p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2><?= $content[14]; ?></h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        <div class="scan"><?= $content[15]; ?></div>
      </div>
      <ul class="right fr">
        <li>
          <i class="all-icons">●</i>
          <span><?= $content[16]; ?></span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span><?= $content[17]; ?></span>
        </li>
        <li class="db5">
          <i class="all-icons">●</i>
          <span><?= $content[18]; ?></span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span><?= $content[19]; ?></span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span><?= $content[20]; ?></span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- enjoy start -->
<div class="enjoy">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <div class="left fl">
      <h3>
          <?= $content[21]; ?>
      </h3>
      <ul>
        <li>
          <i class="all-icons">√</i>
          <span><?= $content[22]; ?></span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span><?= $content[23]; ?></span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span><?= $content[24]; ?></span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span><?= $content[25]; ?></span>
        </li>
        <li class="db5">
          <i class="all-icons">√</i>
          <span><?= $content[26]; ?></span>
        </li>
      </ul>
    </div>
    <div class="right fr">
      <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
      <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
    </div>
  </div>
</div>
<!-- enjoy end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2><?= $content[27]; ?></h2>
    <div class="container clearfix">
      <div class="special left">
        <dl>
          <dt><span class="icon05"></span></dt>
          <dd>
            <h3><?= $content[28]; ?></h3>
            <p><?= $content[29]; ?></p>
          </dd>
        </dl>
      </div>
      <div class="special right">
        <dl>
          <dt><span class="icon06"></span></dt>
          <dd>
            <h3><?= $content[30]; ?></h3>
            <p><?= $content[31]; ?></p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2><?= $content[32]; ?></h2>
    <div class="content">
      <dl class="active">
        <dt><h3><?= $content[33]; ?></h3></dt>
        <dd>
            <?= $content[34]; ?>
        </dd>
      </dl>
      <dl>
        <dt><h3><?= $content[35]; ?></h3></dt>
        <dd>
            <?= $content[36]; ?>
        </dd>
      </dl>
      <dl>
        <dt><h3><?= $content[37]; ?></h3></dt>
        <dd>
            <?= $content[38]; ?>
        </dd>
      </dl>
      <dl>
        <dt><h3><?= $content[39]; ?></h3></dt>
        <dd>
            <?= $content[40]; ?>
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/chip-de.png" alt="Chip.de"></div>
        <p><?= $content[41]; ?></p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="Pcmag.com"></div>
        <p><?= $content[42]; ?></p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/peter-bomers.png" alt="Peter Bomers"></div>
        <p><?= $content[43]; ?></p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa"></div>
        <p><?= $content[44]; ?></p>
      </li>
    </ul>
    <span class="arrow"></span>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2><?= $content[45]; ?></h2>
    <p>
        <?= $content[46]; ?>
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <div class="service">
      <dl class="left fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>
          <h3><?= $content[47]; ?></h3>
          <p>
              <?= $content[48]; ?>
          </p>
        </dd>
      </dl>
      <dl class="right fr">
        <dt><h3><?= $content[49]; ?></h3></dt>
        <dd>
          <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
        </dd>
      </dl>
    </div>
    <dl>
      <dt><?= $content[50]; ?></dt>
      <dd><?= $content[51]; ?></dd>
      <dd><?= $content[52]; ?></dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. <?= $content[53]; ?></p>
  </div>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
      <div class="discount"><?= $content[54]; ?></div>
    </div>
    <div class="numbox fl">
      <div id="fliptwo" class="flipNum">
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox last"><span class="list"><b>0</b></span></div>
      </div>
      <p class="change"><?= $content[55]; ?></p>
    </div>
    <div class="price fl">
      <strong class="change-price"><?= $content[56]; ?></strong> <del><?= $content[57]; ?></del>
      <p><?= $content[58]; ?></p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=es-db83pc149912m&ref=es_db83pc1499bf2010<?php echo $refStr;?>&refs=es_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db83pc1499bf2010-es');">
        <?= $content[59]; ?>
    </a>
  </div>
</div>
<!-- floatlayer end -->

<script>
  refStr="<?php echo $refStr;?>";
  soldStr="<?php echo $content[60];?>";
  packsNum=<?php echo $packsNum;?>;
  $(".intro .wrapper .right b").eq(0).html("<?php echo paramDeal($paramData->UpdDrv);?>").end().
  eq(1).html("<?php echo paramDeal($paramData->UpdCmp);?>").end().
  eq(2).html("<?php echo paramDeal($paramData->UpdRdy);?>").end().
  eq(3).html("<?php echo paramDeal($paramData->FixedErr);?>");
</script>

<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esascexpir_p' . $date;
  $c_name_t='esascexpir_t' . $date;
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


$refStr = empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr .= empty($_GET['instd'])?'':('-i'.$_GET['instd']);
$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];

function normal($num){
    return empty($num) ? '' : preg_replace('/(?<=[0-9])(?=(?:[0-9]{3})+(?![0-9]))/', ',',$num);
}
$data = json_decode(base64_decode(urldecode($_GET['data'])),true);

$sizemb = $data['junk']/(1024*1024);
$sizegb = $data['junk']/(1024*1024*1024);
$junk=number_format(round(($sizegb>=1)?$sizegb:$sizemb,2),2);
$junkStr=$junk.(($sizegb>=1)?' GB':' MB');

include 'lang/es.php';
$content = $text['content'];
if($junk == "0.00"){
    $content[6]='Se han eliminado de archivos inútiles para un PC más limpio';
}
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
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
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
      <div class="numbox">
        <span id="topNum" class="giftNum">
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
        </span>
          <?php echo $content[2]; ?>
      </div>
      <div class="price">
        <span><?php echo $content[3]; ?></span>
        <strong><b>0</b>€ <sup>*</sup></strong>
        <a href="http://www.iobit.com/buy.php?product=es-asc14preorder&ref=es_asc14preorderexpired<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14preorderexpired-es');" class="buybtn"><?php echo $content[4]; ?></a>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->
<div class="feature-main">
  <div class="feature feature01 wrapper clearfix" data-name='animation'>
    <div class="alc message">
		<h2><?= $content[5]; ?></h2>
	</div>
	<div class="img-box left">
	      <img src="<?php echo getStaticUrl('images/adva_computer.png')?>" alt="" class="adva_computer">
	      <span class="adva_corr animation"></span>
		  <span class="adva_arrow animation"></span>
	      <span class="adva_light animation"></span>
	    </div>
	<div class="message right adva_message">
		<div class="adva_profo adva_profo1">
			<ul>
				<li><?= $content[6]; ?></li>
				<li><?= $content[7]; ?></li>
			</ul>
		</div>
		<div class="adva_profo adva_profo2">
			<ul>
				<li><?= $content[8]; ?></li>
				<li><?= $content[9]; ?></li>
			</ul>
		</div>
		<div class="adva_profo adva_profo3">
			<ul>
				<li><?= $content[10]; ?></li>
				<li><?= $content[11]; ?></li>
			</ul>
		</div>
	</div>	
  </div>
  <div class="feature feature02 wrapper clearfix" data-name='animation'>
    <div class="message">
    	<h2 class="alc"><?= $content[12]; ?></h2>
		<div class="lost_area">
			<ul>
				<li>
					<div class="lost_img_area">
						<div class="animation lost_area1 lost_area1_img1"></div>
						<div class="animation lost_area2 lost_area1_img2"></div>
					</div>
					<div class="animation lost_exclabox lost_exclabox1">
						<h5><?= $content[13]; ?></h5>
						<p><?= $content[14]; ?></p>
					</div>
				</li>
				<li>
					<div class="lost_img_area">
						<div class="animation lost_area1 lost_area2_img1"></div>
						<div class="animation lost_area2 lost_area2_img2"></div>
					</div>
					<div class="animation lost_exclabox lost_exclabox2">
						<h5><?= $content[15]; ?></h5>
						<p><?= $content[16]; ?></p>
					</div>
				</li>
				<li>
					<div class="lost_img_area">
						<div class="animation lost_area1 lost_area3_img1"></div>
						<div class="animation lost_area2 lost_area3_img2"></div>
					</div>
					<div class="animation lost_exclabox lost_exclabox3">
						<h5><?= $content[17]; ?></h5>
						<p><?= $content[18]; ?></p>
					</div>
				</li>
			</ul>
		</div>
    </div>
  </div>
  
  
  <div class="feature feature03 wrapper clearfix" data-name='animation'>
	  <div class="message">
	  	<h2 class="alc"><?= $content[19]; ?></h2>
	  	<div class="lost_renew">
	  		<div class="animation lost_renew_clean lost_renew_clean1">
				<h5><?= $content[20]; ?></h5>
				<div class="lost_renew_line"></div>
				<p><?= $content[21]; ?></p>
			</div>
			<div class="animation lost_renew_clean lost_renew_clean2">
				<h5><?= $content[22]; ?></h5>
				<div class="lost_renew_line"></div>
				<p><?= $content[23]; ?></p>
			</div>
			<div class="animation lost_renew_clean lost_renew_clean3">
				<h5><?= $content[24]; ?></h5>
				<div class="lost_renew_line"></div>
				<div class="clearfix"></div>
				<p><?= $content[25]; ?></p>
			</div>
	  	</div>
	  </div>
  </div>
  
</div>
<div class="bottom-bg">
  <div class="worthy wrapper">
    <h2><?= $content[26]; ?></h2>
    <dl>
      <dt><?php echo $content[27]; ?></dt>
      <dd><?php echo $content[28]; ?></dd>
    </dl>
     <dl class="center">
      <dt><?php echo $content[29]; ?></dt>
      <dd><?php echo $content[30]; ?></dd>
    </dl>
     <dl class="last">
      <dt><?php echo $content[31]; ?></dt>
      <dd><?php echo $content[32]; ?></dd>
    </dl>
  </div>
  <div class="review wrapper">
    <h2><?php echo $content[33]; ?></h2>
    <ul>
      <li><img src="<?php echo getStaticUrl('images/ryan.png')?>" alt="Ryan Hill"> </li>
      <li><img src="<?php echo getStaticUrl('images/lyle.png')?>" alt="Lyle Stelmaschuk"> </li>
      <li class="active"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""> </li>
      <li><img src="<?php echo getStaticUrl('images/brendon.png')?>" alt="Brendon O'Rourke"> </li>
      <li><img src="<?php echo getStaticUrl('images/anthony-baker.png')?>" alt="Anthony Baker"> </li>
    </ul>
    <div class="content">
      <dl>
        <dt><?php echo $content[34]; ?></dt>
        <dd><?php echo $content[35]; ?></dd>
      </dl>
      <dl>
        <dt><?php echo $content[36]; ?></dt>
        <dd><?php echo $content[37]; ?></dd>
      </dl>
      <dl class="active">
        <dt><?php echo $content[38]; ?></dt>
        <dd><?php echo $content[39]; ?></dd>
      </dl>
        <dl>
        <dt><?php echo $content[40]; ?></dt>
        <dd><?php echo $content[41]; ?> </dd>
      </dl>
      <dl>
        <dt><?php echo $content[42]; ?></dt>
        <dd><?php echo $content[43]; ?></dd>
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
    <h2><?php echo $content[44]; ?></h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" />
  </div>
</div>

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dd>
          <?php echo $content[45]; ?>
      </dd>
      <dd><?php echo $content[46]; ?></dd>
      <dd><?php echo $content[47]; ?></dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. <?php echo $content[52]; ?></p>
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
         <?php echo $content[48]; ?>
    </div>
    <div class="price">
        <strong><b>0</b>€ <sup>*</sup></strong>
        <a href="http://www.iobit.com/buy.php?product=es-asc14preorder&ref=es_asc14preorderexpired<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14preorderexpired-es');" class="buybtn"><?php echo $content[49]; ?></a>
      </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script>soldout_banner="<?php echo $content[50];?>";</script>
  <script>soldout_float="<?php echo $content[51];?>";</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
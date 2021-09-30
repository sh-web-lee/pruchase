<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptascrc_p' . $date;
  $c_name_t='ptascrc_t' . $date;
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
include 'lang/pt.php';

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
		  <?php echo $content[65]; ?>
        <span id="topNum" class="giftNum">
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
          <b class="nwrap"><b class="numlist"><span>0</span></b></b>
        </span>
          <?php echo $content[2]; ?>
      </div>
      <div class="price">
        <span><?php echo $content[3]; ?></span>
        <strong>R$<b>0</b> <sup>*</sup></strong>
        <a href="https://www.iobit.com/buy.php?product=pt-asc14preorder&ref=pt-asc14preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc" 
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14predorderrc-pt');" class="buybtn"><?php echo $content[4]; ?></a>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->
<div class="feature-main">
  <div class="feature feature01 wrapper clearfix" data-name='animation'>
    <div class="message">
		<div class="olduser_title">
			<p class="olduser_desp"><?= $content[5]; ?></p>
			<h2><?= $content[6]; ?></h2>
		</div>
	</div>
	<div class="olduser_powered">
	      <div class="olduser_powai">
			  <span class="olduser_powcic1 animation"></span>
			  <span class="olduser_powcic2 animation"></span>
			  <span class="olduser_powcic3 animation"></span>
		  </div>
		  <div class="olduser_powrev">
			  <div class="olduser_powli olduser_powli1 animation">
				  <h5><?= $content[7]; ?></h5>
				  <p><?= $content[8]; ?></p>
			  </div>
			  <div class="olduser_powli olduser_powli2 animation">
			  	   <h5><?= $content[9]; ?></h5>
			  		<p><?= $content[10]; ?></p>
			  </div>
			  <div class="olduser_powli olduser_powli3 animation">
			  		<h5><?= $content[11]; ?></h5>
			  		<p><?= $content[12]; ?></p>
			  </div>
		  </div>
	</div>
  </div>
  <div class="feature feature02 wrapper clearfix" data-name='animation'>
    <div class="message">
    	<h2><?= $content[13]; ?></h2>
		<div class="olduser_feature">
			<ul>
				<li class="olduser_fea1 animation">
					<em><?= $content[14]; ?></em>
					<h5><?= $content[15]; ?></h5>
					<p><?= $content[16]; ?></p>
				</li>
				<li class="olduser_fea2 animation">
					<em><?= $content[17]; ?></em>
					<h5><?= $content[18]; ?></h5>
					<p><?= $content[19]; ?></p>
				</li>
				<li class="olduser_fea3 animation">
					<em><?= $content[20]; ?></em>
					<h5><?= $content[21]; ?></h5>
					<p><?= $content[22]; ?></p>
				</li>
			</ul>
		</div>
    </div>
  </div>
  
  
  <div class="feature feature03 wrapper clearfix" data-name='animation'>
	  <div class="message">
		<div class="alc olduser_title">
			<h2><?= $content[23]; ?></h2>
			<p class="olduser_desp"><?= $content[24]; ?></p>
		</div>
	  <div class="olduser_othtit">
		  <div class="olduser_tit1"></div>
		  <div class="olduser_tit2"><p><?= $content[25]; ?></p></div>
		  <div class="olduser_tit3"><p><?= $content[26]; ?></p></div>
	  </div>
	  <table>
		  <tr>
			  <td class="olduser_are1"><span class="olduser_othico1"></span><?= $content[27]; ?></td>
			  <td class="olduser_cor olduser_are2"></td>
			  <td class="olduser_cor olduser_are3"></td>
		  </tr>
		  <tr>
		  	  <td><span class="olduser_othico2"></span><?= $content[28]; ?></td>
		  	  <td class="olduser_cor"></td>
		  	  <td class="olduser_cor"></td>
		  </tr>
		  <tr>
		  	  <td><span class="olduser_othico3"></span><?= $content[29]; ?></td>
		  	  <td class="olduser_cor"></td>
		  	  <td class="olduser_cor"></td>
		  </tr>
		  <tr>
		  	  <td><span class="olduser_othico4"></span><?= $content[30]; ?></td>
		  	  <td></td>
		  	  <td class="olduser_cor"></td>
		  </tr>
		  <tr>
		  	  <td><span class="olduser_othico5"></span><?= $content[31]; ?></td>
		  	  <td></td>
		  	  <td class="olduser_cor"></td>
		  </tr>
		  <tr>
		  	  <td><span class="olduser_othico6"></span><?= $content[32]; ?></td>
		  	  <td></td>
		  	  <td class="olduser_cor"></td>
		  </tr>
		  <tr>
		  	  <td><span class="olduser_othico7"></span><?= $content[33]; ?></td>
		  	  <td></td>
		  	  <td class="olduser_cor"></td>
		  </tr>
		  <tr>
		  	  <td><span class="olduser_othico8"></span><?= $content[34]; ?></td>
		  	  <td></td>
		  	  <td class="olduser_cor"></td>
		  </tr>
		  <tr>
		  	  <td><span class="olduser_othico9"></span><?= $content[35]; ?></td>
		  	  <td></td>
		  	  <td class="olduser_cor"></td>
		  </tr>
		  <tr>
		  	  <td><span class="olduser_othico10"></span><?= $content[36]; ?></td>
		  	  <td></td>
		  	  <td class="olduser_cor"></td>
		  </tr>
		  <tr>
		  	  <td><span class="olduser_othico11"></span><?= $content[37]; ?></td>
		  	  <td></td>
		  	  <td class="olduser_cor"></td>
		  </tr>
	  </table>
	  
	  </div>
  </div>
</div>

<div class="bottom-bg">
  <div class="worthy wrapper">
    <h2><?php echo $content[38]; ?></h2>
    <dl>
      <dt><?php echo $content[39]; ?></dt>
      <dd><?php echo $content[40]; ?></dd>
    </dl>
     <dl class="center">
      <dt><?php echo $content[41]; ?></dt>
      <dd><?php echo $content[42]; ?></dd>
    </dl>
     <dl class="last">
      <dt><?php echo $content[43]; ?></dt>
      <dd><?php echo $content[44]; ?></dd>
    </dl>
  </div>
  <div class="review wrapper">
    <h2><?php echo $content[45]; ?></h2>
    <ul>
      <li><img src="<?php echo getStaticUrl('images/ryan.png')?>" alt="Ryan Hill"> </li>
      <li><img src="<?php echo getStaticUrl('images/lyle.png')?>" alt="Lyle Stelmaschuk"> </li>
      <li class="active"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""> </li>
      <li><img src="<?php echo getStaticUrl('images/brendon.png')?>" alt="Brendon O'Rourke"> </li>
      <li><img src="<?php echo getStaticUrl('images/anthony-baker.png')?>" alt="Anthony Baker"> </li>
    </ul>
    <div class="content">
      <dl>
        <dt><?php echo $content[46]; ?></dt>
        <dd><?php echo $content[47]; ?></dd>
      </dl>
      <dl>
        <dt><?php echo $content[48]; ?></dt>
        <dd><?php echo $content[49]; ?></dd>
      </dl>
      <dl class="active">
        <dt><?php echo $content[50]; ?></dt>
        <dd><?php echo $content[51]; ?></dd>
      </dl>
        <dl>
        <dt><?php echo $content[52]; ?></dt>
        <dd><?php echo $content[53]; ?> </dd>
      </dl>
      <dl>
        <dt><?php echo $content[54]; ?></dt>
        <dd><?php echo $content[55]; ?></dd>
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
    <h2><?php echo $content[56]; ?></h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" />
  </div>
</div>

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dd>
          <?php echo $content[57]; ?>
      </dd>
      <dd><?php echo $content[58]; ?></dd>
      <dd><?php echo $content[59]; ?></dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. <?php echo $content[64]; ?></p>
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
         <?php echo $content[60]; ?>
    </div>
    <div class="price">
        <strong>R$<b>0</b> <sup>*</sup></strong>
        <a href="https://www.iobit.com/buy.php?product=pt-asc14preorder&ref=pt-asc14preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc" 
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14predorderrc-pt');" class="buybtn"><?php echo $content[61]; ?></a>
      </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script>soldout_banner="<?php echo $content[62];?>";</script>
  <script>soldout_float="<?php echo $content[63];?>";</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
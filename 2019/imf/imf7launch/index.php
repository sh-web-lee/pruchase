<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(128,158);

if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='enimflau'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 97;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit;
}
if(!empty($_GET['pop'])){
    $refStr ='-'.$_GET['pop'];
}
if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr .= empty($_GET['to']) ? '-unknown' : '-'.$_GET['to'];
$refStr .= empty($_GET['ref']) ? '-unknown' : '-'.$_GET['ref'];
$refStr .= '-'.$ver;
$refStr .= empty($_GET['insur']) ? '-unknown' : '-'.$_GET['insur'];
$refStr .= '-' . ((strlen($_GET['lsnstatus']) == 0) ? 'unknown' : 'I'.$_GET['lsnstatus']);
$refStr .= '-' . ((strlen($_GET['user']) == 0) ? 'unknown' : 'u'.$_GET['user']);
$refStr .= '-' . ((strlen($_GET['insday']) == 0) ? 'unknown' : 'i'.$_GET['insday']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Save up to 65% OFF on IObit Malware Fighter PRO and Get free gift pack - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script>
	  function pageDivide(divideUrl){
      var queryStr ="";
      var cName = 'enimftestab';
      var pageAb = cGet(cName);
      if (pageAb == 'tob') {
        window.location.replace(divideUrl + queryStr);
      } else {
        if (pageAb == null) {
          var randNum = Math.random();
          if (randNum > 0.5) {
            window.location.replace(divideUrl + queryStr);
            cSet(cName, 'tob');
          } else {
            cSet(cName, 'toa');
          }
        }
      }
    }

		function cSet(name,value) {
			var Days = 2;
			var exp = new Date();
			exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
			document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
		}
		function cGet(name) {
			var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
			if (arr = document.cookie.match(reg))
				return unescape(arr[2]);
			else
				return null;
		}
    var queryStr ="<?php echo (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING']));?>";
    var paramVer=MApp(2.2).url.getParameters('ver').slice(0,1);
	  var paramRef=MApp(2.2).url.getParameters('ref');
    if((paramRef=='launchnews'||paramRef=='launchnewsmin')&&paramVer==8){
      pageDivide('./loyal.php'+queryStr);
    }
	</script>
</head>
<body>

<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>New Launch Special Offer</h1>
    <!-- large-message -->
    <div class="large-message active clearfix">
      <!-- left -->
      <div class="left fl">
        <!-- countdown -->
        <div class="number">
          <span class="viewNum"><?php echo $viewNum;?></span> watching,
          <div class="countdown countdown1">
            <div class="scroll-tick"><strong>0</strong></div>
            <div class="scroll-tick"><strong>0</strong></div>
          </div>
          packs left now!
        </div>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/banner-imf3pcsbundle.png')?>" alt=""/>
      </div>
      <!-- right -->
      <div class="right fr">
        <!-- list -->
        <div class="list">
          <h3>Valuable Launch Pack</h3>
          <table>
            <tr class="first">
              <td valign="top">
                IObit Malware Fighter 8 PRO <br>
                <span>1 Year Subscription / 3 PCs</span>
              </td>
              <td valign="top">$19.95</td>
              <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;<del>$54.95</del></td>
            </tr>
            <tr class="second" valign="bottom">
              <td><i class="all-icons"></i> Smart Defrag 7 PRO</td>
              <td>$0</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;<del>$19.99</del></td>
            </tr>
            <tr>
              <td><i class="all-icons"></i> IObit Uninstaller 11 PRO</td>
              <td>$0</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;<del>$19.99</del></td>
            </tr>
          </table>
        </div>
        <!-- price -->
        <p class="price">$<strong>19</strong>.95 <del>$94.93</del></p>
        <!-- 3pcs+bundle buybtn -->
        <a class="buybtn imf3pcs"
           href="https://www.iobit.com/buy.php?product=imf83pciusd1995&ref=en-imf3pciusdlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
           onclick="ga('send', 'event', 'imfbundlebuy', 'buy', 'imfpurchase-launch');">
          Activate Now
        </a>
        <!-- note -->
        <p class="note"><i class="all-icons"></i>100% 60-Day Money Back Guarantee</p>
      </div>
    </div>
    <!-- small-message -->
    <div class="small-message">
      <!-- 1pc -->
      <dl class="fl clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/box-imf1pc.png" alt="IObit Malware Fighter PRO 8"></dt>
        <dd>
          <!-- price -->
          <p class="price small"><strong>$14.</strong>77 <del>$39.95</del></p>
          <!-- 1pc buybtn -->
          <a class="buybtn small imf1pc"
             href="https://www.iobit.com/buy.php?product=imf81pc1477&ref=en-imf1pclaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
             onclick="ga('send', 'event', 'imf1pcbuy', 'buy', 'imfpurchase-launch');">
            Activate Now
          </a>
        </dd>
      </dl>
      <!-- 3pcs -->
      <dl class="fr change clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/box-imf3pcs.png" alt="IObit Malware Fighter PRO 8"></dt>
        <dd>
          <!-- price -->
          <p class="price small"><strong>$19.</strong>95 <del>$54.95</del></p>
          <!-- 3pcs buybtn -->
          <a class="buybtn small imf3pcs"
             href="https://www.iobit.com/buy.php?product=imf83pc1995&ref=en-imf3pclaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
             onclick="ga('send', 'event', 'imf3pcbuy', 'buy', 'imfpurchase-launch');">
            Activate Now
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payments -->
<div class="payments">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo $pResUrl;?>images/opswat.png" alt="">
    <p class="fl">
      <strong>Opswat Certified </strong> <br>
      IObit Malware Fighter receives Silver certification from <a>OPSWAT</a> in their anti-malware quality test.
      <span>
        OPSWAT has partnered with AV-TEST, AV-Comparatives, Virus Bulletin, SE Labs, SKD Labs and ICSA Labs <br>
        to test the performance, protection, and usability of anti-malware applications.
      </span>
    </p>
  </div>
</div>
<!-- end payments -->

<!-- feature -->
<div class="feature wrapper">
  <h2>New features and improvements of IObit Malware Fighter 8 PRO</h2>
  <!-- details -->
  <dl class="one">
    <dd>
      <span>Improved</span>
      <h3>Faster Scan</h3>
      <p>
        New generation engine dramatically increases <br>
        the speed to complete anti-malware scan.
      </p>
    </dd>
  </dl>
  <dl class="two">
    <dd>
      <span>Improved</span>
      <h3>Higher Detection Rate</h3>
      <p>
        Thoroughly and accurately detect viruses, <br>
        spyware, and other online threats.
      </p>
    </dd>
  </dl>
  <dl class="three clearfix">
    <dd>
      <span class="new">New</span>
      <h3>Email Protection</h3>
      <p>
        Detect malicious links in web mails and <br>
        protect you from Internet threats.
      </p>
    </dd>
    <dd>
      <span>Improved</span>
      <h3>Privacy Protection</h3>
      <p>
        Protect your private files and sensitive data <br>
        from unauthorized accesses.
      </p>
    </dd>
    <dd>
      <span>Improved</span>
      <h3>All-round Ransomware Protection</h3>
      <p>
        Detect and block ransomware attacks from <br>
        encrypting your personal files.
      </p>
    </dd>
  </dl>
</div>

<div class="featurebox wrapper _hide">
  <h2>Enjoy Better PC Protection with the Latest PRO Version</h2>
  <dl class="first">
    <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
    <dd>
      <h4>Higher Detection Rate</h4>
      <p>
        Combined with Bitdefender engine, prevents against over 200 million viruses, spyware, and other online threats.
      </p>
    </dd>
  </dl>
  <dl class="secend">
    <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
    <dd>
      <h4>Stop Harmful Tracking</h4>
      <p>Automatically cleans browser cookies to prevent you being tracked by hackers.</p>
    </dd>
  </dl>
  <dl class="third">
    <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
    <dd>
      <h4>Better Privacy Protection</h4>
      <p>Protects your private files and sensitive data from unauthorized accesses.</p>
    </dd>
  </dl>
  <dl class="fourth">
    <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
    <dd>
      <h4>Multi-layer Ransomware Protection</h4>
      <p>Detects and blocks ransomware from changing or encrypting your personal files.</p>
    </dd>
  </dl>
  <dl class="fifth">
    <dt><img src="<?php echo getStaticUrl('images/feature-05.png')?>" alt=""/></dt>
    <dd>
      <h4>Web Protection</h4>
      <p>Auto cleans browsing traces to avoid advertisers and hackers accessing your personal data.</p>
    </dd>
  </dl>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <h2>​What extra benefit will you get from valuable launch pack?</h2>
    <!-- sd box -->
    <dl class="fl clearfix">
      <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt=""/></dt>
      <dd>
        <h3>Smart Defrag PRO</h3>
        <p class="sale"><strong>$0</strong> <del>$19.99</del></p>
        <p>
          Maximize Hard Drive <br>
          Optimizationfor Faster PC
        </p>
      </dd>
    </dl>
    <!-- iu box -->
    <dl class="fr clearfix">
      <dt><img src="<?php echo getStaticUrl('images/gifts-iu.png')?>" alt=""/></dt>
      <dd>
        <h3>IObit Uninstaller PRO</h3>
        <p class="sale"><strong>$0</strong> <del>$19.99</del></p>
        <p>Remove Useless Programs<br> & Plug-ins for Cleaner PC</p>
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review wrapper">
  <div class="reviews">
    <h2>User Review</h2>
    <h3>"  It is lot quicker at scanner and easy to use."</h3>
    <p>"I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter."</p>
  </div>
  <div class="reviews active">
    <h2>Media Review</h2>
    <h3>"It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots. "</h3>
    <p>The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similartools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.</p>
  </div>
  <div class="reviews">
    <h2>User Review</h2>
    <h3>" It scans my laptop without affecting its performance while I also recommended this product to two of my friends."</h3>
    <p>I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.</p>
  </div>
  <div class="reviews">
    <h2>User Review</h2>
    <h3>"IObit Malware fighter is great as it can scan files and usbs and protect against online and offline threats."</h3>
    <p> Overall with IObit products I have gotten great results even with the free versions as they have helped me and my computer. I would recommend IObit and all of their programs to anyone looking for protection and speediness of their computer and making life just that bit easier.</p>
  </div>
  <ul class="handle clearfix">
    <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy"><span></span></div>
      <strong>David Cassidy</strong>
    </li>
    <li class="active">
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/software.png" alt="software.informer.com"><span></span></div>
      <strong>software.informer</strong>
    </li>
    <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir"><span></span></div>
      <strong>Gelu Batir</strong>
    </li>
    <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/adam-cullen.png" alt="Adam Cullen"><span></span></div>
      <strong>Adam Cullen</strong>
    </li>
  </ul>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison wrapper">
  <h2>What the other benefits of IObit Malware Fighter 8 PRO?</h2>
  <table>
    <thead>
      <tr>
        <th colspan="2"></th>
        <th class="space"></th>
        <th class="itema">IObit Malware Fighter <br> FREE</th>
        <th class="space"></th>
        <th class="itemb">IObit Malware Fighter <br> PRO</th>
        <th class="space"></th>
        <th class="itemc">IObit Malware Fighter <br> Launch Pack</th>
      </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""></td>
        <td class="text">Basic Anti-Malware Function</td>
        <td class="space"></td>
        <td class="itema yes"><img src="<?php echo $pResUrl;?>images/star-grey.png" alt=""></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""></td>
        <td class="text">Scan download files and remove ads to enhance protection </td>
        <td class="space"></td>
        <td class="itema yes"><img src="<?php echo $pResUrl;?>images/star-grey.png" alt=""></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""></td>
        <td class="text">Detect 209,000,000+ threats with Bitdefender & IObit engines <sup>IMPROVED</sup></td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""></td>
        <td class="text">Stop ransomware attempting to encrypt your important files <sup>IMPROVED</sup></td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""></td>
        <td class="text">Block unauthorized accesses to your private files <sup>IMPROVED</sup></td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""></td>
        <td class="text">Auto clean trace to avoid advertisers, worse, and hackers <sup>IMPROVED</sup></td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""></td>
        <td class="text">Boot-time disk protection against malicious attacks</td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon08.png" alt=""></td>
        <td class="text">Prevent hackers from hijacking your camera</td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon09.png" alt=""></td>
        <td class="text">Prevent virus infection carried by USB disk <sup>IMPROVED</sup></td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 10 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon10.png" alt=""></td>
        <td class="text">Detect malicious process running in RAM</td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 11 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon11.png" alt=""></td>
        <td class="text">Automatic update to the latest version</td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 12 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon12.png" alt=""></td>
        <td class="text">Free 24/7 technical support on demand</td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb yes"><img src="<?php echo $pResUrl;?>images/star-yellow.png" alt=""></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 13 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon13.png" alt=""></td>
        <td class="text">Maximize hard drive optimization for faster PC</td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
      <!-- 14 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon14.png" alt=""></td>
        <td class="text">Easily uninstall stubborn programs and malicious plug-ins</td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itemc"><img src="<?php echo $pResUrl;?>images/star-orange.png" alt=""></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2"></th>
        <th class="space"></th>
        <th class="itema">Your current version</th>
        <th class="space"></th>
        <th class="itemb">
          <p class="sale"><strong>$19.</strong>95 <del>$54.95</del></p>
          <!-- 3pcs buybtn -->
          <a class="buybtn compare imf3pcs"
             href="https://www.iobit.com/buy.php?product=imf83pc1995&ref=en-imf3pclaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
             onclick="ga('send', 'event', 'imf3pcbuy', 'buy', 'imfpurchase-launch');  ">
            Activate Now
          </a>
          <!-- type -->
          <p class="note">1 Year / 3 PCs</p>
        </th>
        <th class="space"></th>
        <th class="itemc">
          <p class="sale"><strong>$19.</strong>95 <del>$94.93</del></p>
          <!-- 3pcs+bundle buybtn -->
          <a class="buybtn compare imf3pcs"
             href="https://www.iobit.com/buy.php?product=imf83pciusd1995&ref=en-imf3pciusdlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
             onclick="ga('send', 'event', 'imfbundlebuy', 'buy', 'imfpurchase-launch');">
            Activate Now
          </a>
          <!-- type -->
          <p class="note">1 Year / 3 PCs</p>
        </th>
      </tr>
    </tfoot>
  </table>
</div>
<!-- end comparison -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <!-- award -->
    <div class="award">
      <h2>Trusted and awarded by these medias</h2>
      <img src="<?php echo $pResUrl;?>images/award.png" alt="">
    </div>
    <!-- service -->
    <div class="service clearfix">
      <dl class="fl clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
        <dd class="fl">
          <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
          <p>
            We're confident that activating PRO edition will protect your PC all-round for <br>
            affordable price!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h3>We accept</h3>
        </dd>
        <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
      </dl>
    </div>
    <!-- annotation -->
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>*.We tested IObit Malware Figther PRO in our internal test lab. Your results may vary.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- end footer -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
    <img class="box fl" src="<?php echo getStaticUrl('images/float-imf3pcsbundle.png')?>" alt=""/>
    <div class="middle fl">
      <!-- countdown -->
      <div class="number">
        <div class="countdown countdown2">
          <div class="scroll-tick"><strong>0</strong></div>
          <div class="scroll-tick"><strong>0</strong></div>
          <div class="scroll-tick"><strong>0</strong></div>
          <div class="scroll-tick"><strong>0</strong></div>
        </div>
      </div>
      <p> <span class="viewNum"><?php echo $viewNum;?></span> watching, <strong class="packsNum">98</strong> packs left</p>
    </div>
    <div class="another fr">
      <p class="sale"></p>
      <a class="buybtn bottom imf3pcs"
         href="https://www.iobit.com/buy.php?product=imf83pciusd1995&ref=en-imf3pciusdlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
         onclick="ga('send', 'event', 'imfbundlebuy', 'buy', 'imfpurchase-launch');">
        Get It Now
      </a>
    </div>
  </div>
</div>
<!-- end float -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
    var imgUrl = ["<?php echo getStaticUrl('images/box-imf3pcsbundle.png')?>", "<?php echo getStaticUrl('images/banner-imf3pcs.png')?>", "<?php echo getStaticUrl('images/float-imf3pcs.png')?>"];
</script>
</body>
</html>
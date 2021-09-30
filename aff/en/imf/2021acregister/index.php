<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }

  if ($_GET['ref']) {
    $refStr = $_GET['ref'];
  } else {
    $refStr = 'enaff_imf8_2021acregister';
  }

if(in_array($_GET['to'],array('db_ac_imf'))){
    $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acimf'))){
  $refStr.='-'.$_GET['st'];
}
  include $pRootUrl.'include/common.inc.php';


$buyUrl = "https://www.iobit.com/buy.php?product=enaff-imf8-acak&ref=".$refStr."&aff=". $_GET['aff'];
if (preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {
    $buyUrl = "https://iobit.onfastspring.com/iobit-malware-fighter-pro-1-year-subscription-1-pc-1499";
    if ($arr[1][0] != null) {
        $buyUrl = "https://macbooster.7eer.net/c/" . $arr[1][0] . "/1086669/4385";
    }
}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>85% OFF on IObit Malware Fighter PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Extra Protection for Your PC Security!">
<meta property="og:url" content="https://purchase.iobit.com/aff/en/imf/2021acregister/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="85% OFF on IObit Malware Fighter PRO - IObit">
<meta property="og:description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Extra Protection for Your PC Security!">
<meta property="og:image" content="https://purchase.iobit.com/2017/imf/2021acregister/images/snapshot-large.png">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:500,600,,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>IObit Malware Fighter 8 PRO</h1>
        <p>Triple protection to remove malware &amp; virus, block ransomware</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="">
        <div class="discount fl">
          <h2>85% OFF</h2>
          <p>Exclusive for IObit Valued Users</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>ONLY: <strong>$14.99 </strong><del>$99.93</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="<?= $buyUrl; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf82021acregister');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Activate Now</span>
              </div>
            </a>
          </dd>
          <dd>1 Year / 1 PC</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <div class="feature wrapper">
    <h2>What IObit Malware Fighter PRO can do for you?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""/></dt>
        <dd>
          <h3>DETECT 209,000,000 THREATS</h3>
          <p>Prevent threats from infecting your computer with Bitdefender anti-virus engine & IObit anti-malware engine.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""/></dt>
        <dd>
          <h3>NO RANSOMWARE ATTACKS</h3>
          <p>Stop ransomware attempting to encrypt your important files.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""/></dt>
        <dd>
          <h3>PROTECT FILES WITH PASSWORD</h3>
          <p>Important files like your personal data can be kept separately from others and no one can gain access without permission.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""/></dt>
        <dd>
          <h3>POWERFUL USB DISK GUARD</h3>
          <p>Stop threats that hide in USB disk from harming your computer.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""/></dt>
        <dd>
          <h3>ANTI-TRACKING</h3>
          <p>Auto clean harmful tracking data when browser closed.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""/></dt>
        <dd>
          <h3>REAL-TIME PROTECTION</h3>
          <p>Triple protect engines and multiple security guards guarantee safe computer in real time.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper clearfix">
      <dl class="fl left">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/antimalware.png')?>" alt=""/></dt>
        <dd class="fl">
          <h4>Opswat Certified</h4>
          <p>
            IObit Malware Fighter receives Silver certification from <b><a href="javascript: void(0)">OPSWAT</a><span class="tips">OPSWAT has partnered with AV-TEST, AV-Comparatives, Virus Bulletin, SE Labs, SKD Labs and ICSA Labs to test the performance, protection, and usability of anti-malware applications.</span></b> in their anti-malware quality test.
          </p>
        </dd>
      </dl>
      <dl class="right fr">
        <dt><h4>Also trusted and awarded by</h4></dt>
        <dd class="clearfix">
          <a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine" />
          </a>
          <a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet" />
          </a>
          <a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/majorgeeks.png')?>" alt="Major Geeks" />
          </a>
          <a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/pcworld.png')?>" alt="PC World" />
          </a>
          <a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip" />
          </a>
          <a href="http://www.softpedia.com/get/Tweak/System-Tweak/Advanced-WindowsCare-Professional.shtml?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Softpedia" />
          </a>
          <a class="last" href="http://driver-booster.updatestar.com/?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/updatestar.png')?>" alt="Updatestar" />
          </a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
        <h3>User Review</h3></dt>
        <dd>
          <h4>" It scans my laptop without affecting its performance while I also recommended this product to two of my friends."</h4>
        </dd>
        <dd>
          I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.
        </dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Media Review</h3></dt>
        <dd>
          <h4>"It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots. "</h4>
        </dd>
        <dd>
          The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similartools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>User Review</h3></dt>
        <dd>
          <h4>" It is lot quicker at scanner and easy to use."</h4>
        </dd>
        <dd>
          "I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>User Review</h3></dt>
        <dd>
          <h4>"IObit Malware fighter is great as it can scan files and usbs and protect against online and offline threats."</h4>
        </dd>
        <dd>
          Overall with IObit products I have gotten great results even with the free versions as they have helped me and my computer. I would recommend IObit and all of their programs to anyone looking for protection and speediness of their computer and making life just that bit easier.
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"/></div>
        <p>Gelu Batir</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"/></div>
        <p>Software.Informer</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"/></div>
        <p>David Cassidy</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"/></div>
        <p>Adam Cullen</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Ensure a Safe PC &amp; Advanced Online Surfing Protection</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>ONLY: <strong>$14.99 </strong><del>$99.93</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="<?= $buyUrl; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf82021acregister');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Activate Now</span>
              </div>
            </a>
          </dd>
          <dd>1 Year / 1 PC</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>EXCLUSIVE OFFER</h2>
        <p><strong>85% OFF</strong> to Protect from Malicious Attacks and Privacy Leaks</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>$14.99 </strong><del>$99.93</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="<?= $buyUrl; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf82021acregister');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Activate Now</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo $pResUrl; ?>script/script.js"></script> 
</body>
</html>
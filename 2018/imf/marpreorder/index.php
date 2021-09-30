<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enimfmarpre' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 55;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24 * 2);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$querytr=empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pay $0 to Get IObit Malware Fighter 6 PRO for 30 Days - IObit</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Raleway:500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    var lan=MApp(2.2).language.langArr[0];
    if(lan=='de'){
      window.location.href='http://purchase.iobit.com/de/imf/imf6preorder.php<?php echo $queryStr?>';
    }else if(lan=='fr'){
      window.location.href='http://purchase.iobit.com/fr/imf/imf6preorder.php<?php echo $queryStr?>';
    }
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <div class="clearfix">
        <div class="right fr">
          <h1>IObit Malware Fighter 6 PRO</h1>
          <p>Pre-order Today for Complete Cybersecurity</p>
          <div class="price">
            <div class="gift">
              Only 
              <div class="countdown packsNum">
                <div class="list"><div class="scroll-tick">9</div></div>
                <div class="list right"><div class="scroll-tick">9</div></div>
              </div> 
              places left
            </div>
            <p class="people"><b class="buyNum">731,717</b> people pre-ordered</p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=imf63pc0&ref=imf6preorder1<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf"
               onclick="ga('send', 'event', 'imfbuy1', 'buy', 'imfpurchase-preorder');">
              Pre-order Now 
            </a>
          </div>
        </div>
      </div>
      <ul class="point clearfix">
        <li>Pay <b>$0</b> to enjoy IObit Malware Fighter 6 PRO (3 PCs) for 30 days.</li>
        <li class="center">
          You won't be billed until 30-day trial expires, you can cancel the order at any time.
        </li>
        <li class="last">
          After 30 days, get exclusive <b>57<small>%</small> OFF</b> ($23.95) on 1 Year Subscription for <b>3 PCs</b> (Original: $54.95) 
        </li>
      </ul>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <h2>IObit Malware Fighter 6 PRO, the Right Cybersecurity You're Looking for!</h2>
    <div class="clearfix">
      <div class="content fl">
        <p>
          Over the years, we having been dedicating to make significant enhancements to powerful protection against malware, ransomware, adware, spyware, fishing and other hidden security threats. Now the new IObit Malware Fighter 6 is powerful enough to shield your personal file and keep your computer away from hacking.
        </p>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt="" /></dt>
          <dd>
            <h4>Folder Protection <i class="all-icons new">New</i></h4>
            <p>
              SafeBox protects your specified important folders from unauthorized access and
              latest threats.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt="" /></dt>
          <dd>
            <h4>Boot-time Disk Guard <i class="all-icons new">New</i></h4>
            <p>
              New MBR Guard prevents PC against malicious attacks, especially ransomware
              attacks like WannaCry during boot process.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" /></dt>
          <dd>
            <h4>Anti-Ransomware Engine <i class="all-icons">Enhanced</i></h4>
            <p>
              Proactively stop any Ransomware trying to break into Your PC. Even
              Petya/GoldenEye Ransomware can be blocked and removed precisely.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" /></dt>
          <dd>
            <h4>Anti-Virus &amp; Anti-Malware <i class="all-icons">Enhanced</i></h4>
            <p>
              Double protection with Advanced Bitdefender Anti-virus Engine &amp; IObit
              Anti-Malware Engine with enhanced database.
            </p>
          </dd>
        </dl>
      </div>
      <div class="computer fr"><img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" /></div>
    </div>
    <h3>Explore more about the smarter and faster security tool now.</h3>
    <div class="price">
      <a class="buybtn big"
         href="https://www.iobit.com/buy.php?product=imf63pc0&ref=imf6preorder2<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf"
         onclick="ga('send', 'event', 'imfbuy2', 'buy', 'imfpurchase-preorder');">
        Pre-order Now at <b>$<big>0</big></b>
      </a>
      <div class="gift">
        Only
        <div class="countdown packsNum">
          <div class="list"><div class="scroll-tick">9</div></div>
          <div class="list"><div class="scroll-tick">9</div></div>
        </div> 
        places left
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <h2>Let's Have a Glance on More Highlighted Improvements in New Pro</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="title"></th>
            <th class="space"></th>
            <th class="itema"><span>IObit Malware Fighter 5 PRO</span></th>
            <th class="space"></th>
            <th class="itemb"><span>IObit Malware Fighter 6 PRO</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="title">AutoUpdate</td>
            <td class="space"></td>
            <td class="itema">Privilege of auto update on database and programs.</td>
            <td class="space"></td>
            <td class="itemb"><b>More</b> accurate detection</td>
          </tr>
          <tr>
            <td class="title">USB Guard</td>
            <td class="space"></td>
            <td class="itema">Scan &amp; Prevent virus infection carried by USB disk.</td>
            <td class="space"></td>
            <td class="itemb"><b>130%*</b> faster scan</td>
          </tr>
          <tr>
            <td class="title">Anti-tracking</td>
            <td class="space"></td>
            <td class="itema">Auto clear malicious tracking cookies once exit browser.</td>
            <td class="space"></td>
            <td class="itemb"><b>15,000+</b> threats sample added</td>
          </tr>
          <tr>
            <td class="title">Camera Guard</td>
            <td class="space"></td>
            <td class="itema">Safeguard your camera against unauthorized access.</td>
            <td class="space"></td>
            <td class="itemb"><b>115%*</b> faster scan. <b>More</b> accurate detection</td>
          </tr>
        </tbody>
      </table>
      <div class="price">
        <h3>DON'T MISS OUT!</h3>
        <p>Get Exclusive Early Bird Offer to Protect You and Yours Comprehensively.</p>
        <a class="buybtn big"
           href="https://www.iobit.com/buy.php?product=imf63pc0&ref=imf6preorder3<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf"
           onclick="ga('send', 'event', 'imfbuy3', 'buy', 'imfpurchase-preorder');">
          Pre-order Now at <b>$<big>0</big></b>  
        </a>
        <div class="gift">
          Only 
          <div class="countdown packsNum">
            <div class="list"><div class="scroll-tick">5</div></div>
            <div class="list"><div class="scroll-tick">6</div></div>
          </div> 
          places left
        </div>
      </div>
    </div>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>See what other users and media say about this new version</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"/></dt>
        <dd>
          <h3>Gelu Batir</h3>
          <p>
            I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while  I also recommended this product to two of my friends. 
          </p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"/></dt>
        <dd>
          <h3>Software.Informer</h3>
          <p>
            The program uses two AV engines, its own and BitDefender, and seems to be effective against <span>malware that cannot be detected by other similar</span> tools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"/></dt>
        <dd>
          <h3>David Cassidy</h3>
          <p>
            I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter. 
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <p>As being trusted and awarded by those world-class media in the past ten years, you know you’ve got the right PC protection</p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd>
            <h3>Money Back Guarantee</h3>
            <p>If you're not satisfied in the first 60 days, we will give you back your money.</p>
          </dd>
        </dl>
        <dl class="center">
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd>
            <h3>Secure Payment</h3>
            <p>IObit supports several safe modes of payment.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
          <dd>
            <h3>Get License</h3>
            <p>You will receive the license within a few minutes after purchase.</p>
          </dd>
        </dl>
      </div>
      <dl class="annotation">
        <dt>Note:</dt>
        <dd>*.Data may vary based on different system or computer.</dd>
      </dl>
      <p>© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/imfbox.png')?>" alt="">
      <div class="content fl">
        <h2>Get IObit Malware Fighter 6 PRO Now for <b>FREE!</b></h2>
        <p>Keep Away from Ransomware, Malware, Adware and Other Malicious Attacks.</p>
      </div>
      <div class="price fl">
        <a class="buybtn small"
           href="https://www.iobit.com/buy.php?product=imf63pc0&ref=imf6preorder4<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf"
           onclick="ga('send', 'event', 'imfbuy4', 'buy', 'imfpurchase-preorder');">
          Pre-order Now at <b>$<big>0</big></b>
        </a>
        <p>1 Year / <b>3 PCs</b> Original: $54.95</p>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
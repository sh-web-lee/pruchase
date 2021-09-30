<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  $viewNum=rand(98,165);
  if($_GET['action']=='getViewNum'){
    echo $viewNum;
    exit();
  }
  if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'enimfnovbr_p' . $date;
    $c_name_t='enimfnovbr_t' . $date;
    $isInit=$_GET['isInit'];
    if ($_COOKIE[$c_name]===null) {
      $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
      setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
      setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
    } else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        $packsNum = 0;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      } else {
        if($isInit==1){
          $packsNum = intval($_COOKIE[$c_name]);
        }else {
          $packsNum = $_COOKIE[$c_name] - 1;
        }
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
    echo json_encode(array('packsNum'=>$packsNum));
    exit();
  }

  $refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

  $isNewUser=false;
  $isNewUserV = false;
  if(preg_match('/^7\./',$_GET['ver'])){
    $isNewUser=true;
  }
  if(preg_match('/^5\./',$_GET['ver'])){
    $isNewUserV = true;
  }

  $packsNum=49;
  $transData=json_decode(base64_decode($_GET['num']));
  if(!empty($transData)){
    if(@intval($transData->seats)){
      $packsNum=@intval($transData->seats);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% OFF to Enjoy More Secure PC and Personal Data - Black Friday Sale | IObit</title>
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
      <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
      <div class="title clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
        </div>
        <div class="right fr">
          <b class="only">Only Today</b>
          <h1>Black Friday Sale</h1>
          <h5>Lowest price of the year</h5>
          <div class="discount">70% OFF</div>
        </div>
      </div>
      <div class="chart">
        <div class="chartbox one"><span>Before Nov. 18 <b>$54.95</b></span></div>
        <div class="chartbox big two"><span><span class="date-str">Nov. 18-24</span> <b>$23.99</b></span></div>
        <div class="chartbox center three"><span>Today <b class="change-price">$<big>16</big>.99</b></span></div>
        <div class="chartbox big four"><span><span class="date-str">Nov. 26 - Dec. 30</span> <b>$23.99</b></span></div>
        <div class="chartbox five"><span>After Dec. 30 <b>$54.95</b></span></div>
      </div>
      <div class="price clearfix">
        <div class="numbox fl">
          <div id="flip" class="flipNum">
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>5</b></span></div>
            <div class="listbox last"><span class="list"><b>0</b></span></div>
          </div>
          <p class="change">Hurry, only<b class="packsNum">50</b>Left at this price!</p>
        </div>
        <div class="btnbox fl">
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=2019imf3pc1699&ref=br_imf&refs=purchase_imfbf" 
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bf');">
            Activate Now <small>- $16.99</small>
          </a>
          <p>1 year subscription / 3 PCs</p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <h2>We have been working on giving you a…</h2>
    <div class="wrapper intro-box">
      <div class="intro-img">
        <div class="intro-list one">
          <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
          <div class="malwarebox">
            <span class="malware"><img src="<?php echo getStaticUrl('images/malware.png')?>" alt=""/></span>
            <b>MALWARE</b>
          </div>
          <div class="scanbox">
            <div class="computer one"></div>
            <div class="computer two">
              <span class="imfline"></span>
              <span class="imflight"></span>
            </div>
            <div class="shield"><img src="<?php echo getStaticUrl('images/shield.png')?>" alt=""/></div>
            <div class="safe one"><img src="<?php echo getStaticUrl('images/safe01.png')?>" alt=""/></div>
            <div class="safe two"><img src="<?php echo getStaticUrl('images/safe02.png')?>" alt=""/></div>
            <div class="safe-words">YOUR PC IS PROTECTED</div>
          </div>
        </div>
      </div>
      <div class="intro-txt">
        <div class="slow">
          <h3><span>Fragile PC</span></h3>
          <p>
            <span class="one">unable to defend against various malicious</span>
            <span class="two">attacks.</span>
          </p>
        </div>
        <div class="fast">
          <h3>Safe PC</h3>
          <p>Prevent computer and personal data from being targeted by malicious threats.</p>
          <div class="fast-list">
            <div class="one">
              <dl>
                <dt><b>Real-time Protection with Bitdefender Engine</b></dt>
                <dd>
                  With latest Bitdefender anti-virus engine, 200,000,000+ threats are kept away from your computer in real-time.
                </dd>
              </dl>
              <dl>
                <dt><b>Stop Ransomware Attacks</b></dt>
                <dd>Ransomware can’t break into your computer or encrypt your important files.</dd>
              </dl>
            </div>
            <div class="two">
              <dl>
                <dt><b>Protect Personal Data with Password</b></dt>
                <dd>
                  Your personal information, financial files, contacts can be kept separately from others. No one can access them without password.  
                </dd>
              </dl>
              <dl>
                <dt><b>Guarantee Safe Online Browsing</b></dt>
                <dd>
                  Automatically clear cookies, so snoopers can’t track your online traces. Phishing and infected websites are also blocked for you. 
                </dd>
              </dl>
            </div>
            <span class="line"><span class="red"></span></span>
          </div>
        </div>
      </div>
    </div>
    <span class="intro-bg"></span>
  </div>
  <!-- intro end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <h2 class="">What you have…</h2>
    <table>
      <thead>
        <tr>
          <th class="text"></th>
          <th class="itema">
            <div class="free">Your current version</div>
          </th>
          <th class="itemb">
            <div class="pro">IObit Malware Fighter 7 <big>PRO</big></div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="virtue">Latest IObit malware engine to detect malware</td>
          <td class="itema"><i class="all-icons black">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr class="two">
          <td class="virtue">Bitdefender engine to detect 200,000,000+ threats</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr class="three">
          <td class="virtue">Anti-ransomware engine to stop attacks</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Password-protect your personal data</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Comprehensive real-time protection for top PC security</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Auto online trace cleaning for safe browsing</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Boot-time disk protection against malicious attacks</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Safeguard camera against unauthorized access</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Prevent virus infection carried by USB disk</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Auto update database</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th></th>
          <th class="itema"></th>
          <th class="itemb"></th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->

  <!-- feature start -->
  <div id="feature" class="feature">
    <div class="wrapper">
      <h2>Activate now, you can get all features and have more…</h2>
      <div class="feature-box">
        <div class="feature-img">
          <img src="<?php echo getStaticUrl('images/screen05.png')?>" alt=""/>
          <div class="light-box"><span class="light"></span></div>
          <img class="small-box" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
        </div>
        <div class="feature-list">
          <div class="feature-item">
            <img src="<?php echo getStaticUrl('images/f-icons01.png')?>" alt=""/>
            <h5>Malware Database</h5>
            <h3>60% Larger</h3>
          </div>
          <div class="feature-item two">
            <img src="<?php echo getStaticUrl('images/f-icons02.png')?>" alt=""/>
            <h5>Scanning Speed</h5>
            <h3>3X* Faster</h3>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price">$<big>16</big>.99</strong> <del>$54.95</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=2019imf3pc1699&ref=br_imf&refs=purchase_imfbf" 
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bf');">
          Activate Now
        </a>
        <p>1 year subscription / 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>What others say…</h2>
      <div class="review-box">
        <div class="reviews">
          <h3>User Review</h3>
          <h4>"  It is lot quicker at scanner and easy to use."</h4>
          <p>
            "I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter."
          </p>
        </div>
        <div class="reviews active">
          <h3>Media Review</h3>
          <h4>"It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots. "</h4>
          <p>
            The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similartools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots.
          </p>
        </div>
        <div class="reviews">
          <h3>User Review</h3>
          <h4>" It scans my laptop without affecting its performance while I also recommended this product to two of my friends."</h4>
          <p>
            I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.
          </p>
        </div>
      </div>
      <ul class="handle clearfix">
        <li>
          <div class="badge">
            <img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"/>
            <span></span>
          </div>
          <strong>David Cassidy</strong>
        </li>
        <li class="active">
          <div class="badge">
            <img src="<?php echo getStaticUrl('images/software.png')?>" alt="software.informer.com">
            <span></span>
          </div>
          <strong>software.informer</strong>
        </li>
        <li>
          <div class="badge">
            <img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir">
            <span></span>
          </div>
          <strong>Gelu Batir</strong>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <p>
        As being trusted and awarded by those world-class media in the past six years, you know you've got the right PC protector.
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
            <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
            <p>
              We're confident that activating PRO edition will protect your PC all-round for affordable price!
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>We accept</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>Note:</dt>
        <dd>*.Data may vary based on different system or computer.</dd>
        <dd>
          *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
        <div class="discount">70% OFF</div>
      </div>
      <div class="numbox fl">
        <div id="fliptwo" class="flipNum">
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>5</b></span></div>
          <div class="listbox last"><span class="list"><b>0</b></span></div>
        </div>
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> visitors now,<b class="packsNum">50</b>seats left at this price.</p>
      </div>
      <div class="price fl">
        <strong class="change-price">$16.99</strong> <del>$54.95</del>
        <p>1 year / 3 PCs</p>
      </div>
      <a class="buybtn fr"
         href="https://www.iobit.com/buy.php?product=2019imf3pc1699&ref=br_imf&refs=purchase_imfbf" 
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bf');">
        Activate Now
      </a>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
    var _href = "https://www.iobit.com/buy.php?product=2019imf3pc1799&ref=br_imf1799&refs=purchase_imfbf";
    var _ga = "ga('send', 'event', 'imfbuypop', 'buy', 'imfpurchase-bf');";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

  <?php if($isNewUser):?>
    <script>
      $(".feature").removeClass("new").addClass("new");
      $(".feature .feature-box").remove();
      $(".feature h2").text('Activate all features at the lowest price of the year now!');
    </script>
  <?php endif;?>

  <?php if($isNewUserV):?>
    <script>
      $(".feature-item").find("h3").text('2X Larger');
      $(".feature-item.two").find("h3").text('5X* Faster');
    </script>
  <?php endif;?>
</body>
</html>
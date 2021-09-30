<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbofficial_p' . $date;
  $c_name_t='endbofficial_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,98);
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

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$data=json_decode(base64_decode($_GET['ddata']),true);
if($data){
    $driverCount=$data['m'];
}else{
    $driverCount=0;
}
$drivers=$data['l'];
$listCount=count($drivers);
$status=array('Old','Very Old','Extremely Old','Outdated','Missing','Faulty','Not Installed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pay $0 to Get Driver Booster 9 PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header first-l">
        <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
          IObit
        </a>
      </div>

      <div class="ac-header clearfix  display-n second-l">
        <div class="clearfix">
          <a class="logos" href="https://www.iobit.com/en/index.php" target="_blank">
            IObit
          </a>
        </div>
        <div class="cont">
          <i class="left-icon ac-header-icon" _type="left"></i>
          <div class="cont-list-box">
              <ul class="cont-list clearfix">
                  <?php for ($i = 0; $i < $listCount && $i < 5; $i++): ?>
                      <li>
                          <p><?php echo $drivers[$i]['n'] ?></p>
                          <p>Current: <span><?php echo $status[intval($drivers[$i]['al'])] ?></span></p>
                          <p>Available: <?php echo $drivers[$i]['av'] ?>
                              <?php if ($drivers[$i]['g']): ?>
                                  <span class="btn OFFICIAL"></span>
                              <?php else: ?>
                                  <span class="btn WHQL"></span>
                              <?php endif; ?>
                          </p>
                      </li>
                  <?php endfor; ?>
              </ul>
          </div>
          <i class="right-icon ac-header-icon" _type="right"></i>
        </div>
      </div>

      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
        <p class="m">THE GLOBAL PRESALE IS ON</p>
          <div class="first-l">
            <h2>Once-per-year Chance to Get PRO for $0</h2>
            <h4>• Smoother PC    • Faster Gaming  </h4>
          </div>
          <div class="second-l display-n">
            <h2>Now Get PRO for $0 to Keep <span><?php echo $driverCount;?></span><br> Drivers Up-to-date</h2>
            <!-- <h4>Give You Smoother PC and Faster Gaming</h4> -->
          </div>
          <div class="price">
            <span>Presale <br> Price:</span>
            <strong>$0 <sup>*</sup></strong>
            <a href="https://www.iobit.com/buy.php?product=db9preorder&ref=en-db9preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db9preorderrc');" class="buybtn">Get It Now</a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              left now
            </h3>
            <div class="bar">
               <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="feature">
    <div class=" max-title">
        <div class="__title">
          <div class="line left"></div>
          <h2>
            <p>Why Upgrade</p>
            It Can Do <span>More</span> for Your PC
          </h2>
          <div class="line right"></div>
        </div>
    </div>
    <div class="wrapper ">
      <img class="first-wrapper-img" src="<?php echo getStaticUrl('images/cont-bg.png')?>" alt="">
        <div class="message01 mb-130">
            <div class="title">
            <div class="_cont">
            <h2>Update&nbsp;<span>More Drivers</span><img src="<?php echo getStaticUrl('images/PRO.png')?>" alt=""></h2>
            </div>
          </div>
          <div class="line _message01-line left"></div>
          <div class="line _message01-line right"></div>
          <div class="_message clearfix">
          <img src="<?php echo getStaticUrl('images/driver.png')?>" class="animate__animated animation-box">
          <div class="message-box animate__animated animation-box">
            <dl>
                <?php if (in_array($_GET['to'],array('trialbuy_1', 'trialbuy_2', 'trialbuy_3', 'trialbuy_4', 'trialbuy_5', 'trialbuy_6', 'trialbuy_7', 'trialbuy_8', 'trialbuy_9', 'trialbuy_10', 'trialbuy_11'))): ?>
              <dt><i></i><div class="dt-cont">Unlimited <span class="market">drivers updating per day with 8,000,000+ driver database;</span></div></dt>
                <?php else: ?>
              <dt><i></i><div class="dt-cont">Privilege<span class="market">of updating more rare drivers with 8,000,000+ driver database;</span></div></dt>
                <?php endif;?>
              <dt><i></i><div class="dt-cont">Priority<span class="market">to the latest game-ready drivers for faster gaming;</span></div></dt>
              <dt><i></i><div class="dt-cont">Privilege<span class="market">of getting suitable game components for smoother game loading;</span></div></dt>
            </dl>
          </div>
          </div>
        </div>
        <div class="message01">
            <div class="title">
            <div class="_cont _conts">
            <h2>Fix&nbsp;<span>More Issues</span><img src="<?php echo getStaticUrl('images/PRO.png')?>" alt=""></h2>
            </div>
          </div>
          <div class="line message01-line left"></div>
          <div class="line message01-line right"></div>
          <div class="_message clearfix tow">
          <div class="message-box">
            <dl class="animate__animated animation-box">
              <dt><i></i><div class="dt-cont">Fix<span class="market">missing network driver and other network driver problems without internet connection;</span></div></dt>
              <dt><i></i><div class="dt-cont">Fix<span class="market">50+ device errors like cannot access your external hard drives with 1-click; </span></div></dt>
            </dl>
          </div>
          <img src="<?php echo getStaticUrl('images/p.png')?>" class="animate__animated animation-box">
          </div>
        </div>
    </div>
    
    <!-- <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Game Ready Drivers & Components</h2>
        <h4>Optimization for 90% PC Games</h4>
      </div>
      <div class="line"></div>
      <dl class="message-box">
        <dt class="one" data-name='default'>Smoother Game </dt>
        <dd class="one" data-name='default'>Provide the latest game ready drivers and components to reduce computer lags or screen tears and support the new game features.</dd>
        <dt class="two" data-name='default'>Game Boost</dt>
        <dd class="two" data-name='default'>Stop unnecessary services to improve your PC speed for a better gaming experience.</dd>
      </dl>
      <div class="img-box">
        <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" class="computer three" data-name='default'>
        <span class="light four" data-name='default'></span>
        <span class="smail-light"></span>
        <img src="<?php echo getStaticUrl('images/feature-icon.png')?>" alt="" class="icon five" data-name='default'>
      </div>
    </div> -->
    <div class="feature-list" data-name='animation'>
      <div class="__title">
        <div class="line left"></div>
        <h2>It Offers <span>More</span> Intelligent Update Process for You</h2>
        <div class="line right"></div>
      </div>
      <div class="wrapper">
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt="" ></dt>
          <dd>
            <div class="_title"><h3>Safe</h3><img src="<?php echo getStaticUrl('images/PRO.png')?>" alt=""></div>
            <p>Automatically backup previous drivers before updating in case of anything unexpected;</p>
          </dd>
        </dl>
        <dl class="center two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt="" ></dt>
          <dd>
            <div class="_title"><h3>Auto</h3><img src="<?php echo getStaticUrl('images/PRO.png')?>" alt=""></div>
            <p>Automatically download & install driver updates while system is idle;</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt="" ></dt>
          <dd>
            <div class="_title"><h3>Fast</h3><img src="<?php echo getStaticUrl('images/PRO.png')?>" alt=""></div>
            <p>Unlock download speed limit to save time and avoid disturbing your daily routine</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>It’s the Top Most Driver Updater Worldwide</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>200M+ </strong>
          Installs
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          User’s Rating
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          Media  <br> Recommendations
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Media Review</dt>
              <dd> Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.</dd>
            </dl>
            <dl>
              <dt>User Review</dt>
              <dd>It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB7. Easy to use and fast downloads it is the best tool in the Market until now!</dd>
            </dl>
            <dl>
              <dt>User Review</dt>
              <dd>What a surprise to receive the new Driver Booster from IObit. Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade. Once upgrading was complete it was as if my PC had a complete makeover. Sensational!</dd>
            </dl>

            <dl>
              <dt>User Review</dt>
              <dd>Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended. </dd>
            </dl>
            <dl>
              <dt>User Review</dt>
              <dd>First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM,  i was able to play new game titles without having to shutdown any background process.  I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product. </dd>
            </dl>

          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></div>
            <p>Dunston Diaz</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></div>
            <p>Carlos Alexandre Veríssimo</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></div>
            <p>Harold Barr</p>
          </li>
           
        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>World-wide Awards</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Note:</dt>
      <dd>
        *.At the end of the 40-day free trial period, your credit card or PayPal account will be charged $22.95 automatically. This 70% discount from the original price   of $74.85 is bonus only for preorders!
      </dd>
      <dd>*.If you're unsatisfied, you can cancel the order you placed within 40 days without paying a fee.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-db-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        of 1000 places left now
      </h3>
    </div>
    <div class="price fr">
     <strong>$0 <sup>*</sup></strong>
     <span></span>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=db9preorder&ref=en-db9preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db9preorderrc');">
           Get It Now
        </a>
    </div>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';listCount = '<?php echo $driverCount; ?>'</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
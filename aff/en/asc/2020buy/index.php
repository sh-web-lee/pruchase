<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='enaff_asc13_2020buy1pc';
$ref3pc='enaff_asc13_2020buy3pc';
$ref3pcgift = 'enaff_asc13_2020buy3pcgift';
if(!empty($_GET['ref'])){
  $ref1pc=$ref3pc=$ref3pcgift=$_GET['ref'];
}
include $pRootUrl.'include/common.inc.php';

$reduceNum=74041325;
$buyNum = number_format(ceil(microtimeFloat()*1000/20000) - $reduceNum);
if($_GET['action']=='maskCount'){
  $maskType=$_GET['maskType'];
  if(in_array($maskType,array(1,2))) {
    $buttonClick=$_GET['buttonClick'];
    $ip=empty($_GET['ip']) ? getIP() : $_GET['ip'];
    $time=time();
    try {
      $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
      $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->query("set names utf8");

      $sql = "insert into affascmaskcount2019 (ip,addTime,maskType,buttonClick) values(:ip,:addTime,:maskType,:buttonClick)";
      $pre = $pdo->prepare($sql);
      $pre->bindParam(':ip', $ip);
      $pre->bindParam(':addTime', $time);
      $pre->bindParam(':maskType', $maskType);
      $pre->bindParam(':buttonClick', $buttonClick);
      $pre->execute();
    } catch (PDOException $e) {
      var_dump($e->getMessage());
    }
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Activating Advanced SystemCare PRO Now to Make Your Sluggish PC Run at Peak Capacity!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
        success: function(packs){
          $('.buynum').html(packs);
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt="" /></dt>
      <dd class="fl">
        <span>You are activating:</span>
        <h1>Advanced SystemCare 13 PRO</h1>
        <p>Buy now to rejuvenate your sluggish PC and make it run at peak capacity!</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>“Advanced Systemcare aims to <br> remedy whatever ails your computer”</p>
      <img src="<?php echo getStaticUrl('images/clnet.png')?>" alt="" />
    </div>
  </div>
</div>
<!-- banner end -->

<!-- container start -->
<div class="wrapper">
  <!-- title -->
  <h2 class="title"></h2>
  <!-- offer start -->
  <div class="offer clearfix">
    <!-- 1PC BOX -->
    <div class="box pc">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <!-- title -->
      <h2>1 Year / 1 PC License</h2>
      <!-- details -->
      <ul>
        <li><i></i>Ultimate PC Cleaning</li>
        <li><i></i>Premium System Tuneup</li>
        <li><i></i>Full Privacy Protection</li>
        <li><i></i>Automatic RAM Cleanup</li>
        <li><i></i>Free updates</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong><small>$</small>14.99</strong> <del>$29.99</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=enaff-asc131pc1477a&ref=enaff_asc13_2020buy1pc&aff=<?php echo $_GET['aff'];?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc132020buy1pc')">
          Add to Cart
        </a>
      </div>
    </div>
    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>1 Year / 3 PCs License</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>Ultimate PC Cleaning</li>
        <li><i></i>Premium System Tuneup</li>
        <li><i></i>Full Privacy Protection</li>
        <li><i></i>Automatic RAM Cleanup</li>
        <li><i></i>Free updates</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong><small>$</small>19.99</strong> <del>$49.99</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=enaff-asc133pc1999a&ref=enaff_asc13_2020buy3pc&aff=<?php echo $_GET['aff'];?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc132020buy3pc')">
          Add to Cart
        </a>
        <p class="people"><b class="buynum"><?php echo $buyNum;?></b> people has bought</p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>We accept</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>60-DAY MONEY-BACK GUARANTEE</h2>
        <p>
          If you're not satisfied with Advanced SystemCare PRO, you'll get a full refund of your purchase within 60 days.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>SECURE PAYMENT</h2>
        <p>We're committed to protecting your personal info with advanced encryption and anti-spam protection.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>FREE, 24/7 TECH SUPPORT</h2>
        <p>
          Our premium support team will respond to you for any questions you may have regarding our products within 24 hours.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>FREE UPDATES</h2>
        <p>You will get all software updates for free during the subscription period.</p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->
</div>
<!-- container end -->

<!-- review start -->
<div class="container bordertop clearfix">
  <div class="review wrapper">
    <div class="review-box">
      <!-- 01 -->
      <div class="reviews clearfix">
        <h2>User Review</h2>
        <h3>"Cleaned up Spyware and Malware My antivirus lets slip through"</h3>
        <p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>Media Review</h2>
        <h3>"Advanced Systemcare aims to remedy whatever ails your computer."</h3>
        <p>"There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>User Review</h2>
        <h3>"My choice is still overwhelmingly Advanced SystemCare Pro"</h3>
        <p>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"><span></span></div>
        <strong>Bob Bassett</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
        <strong>Cnet</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"><span></span></div>
        <strong>Charles R. Widick</strong>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- footer start -->
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
<!-- footer end -->

<!-- mask start -->
<div class="mask">
  <div class="mask-box">
    <div class="plana">
      <p>Congrats! You’re Today's Lucky Visitor! </p>
      <p>Get Your <b>Extra 10% OFF &amp; 2 Free Gifts</b> Now!</p>
      <div class="panel clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="">
        <div class="right fl">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr class="top">
              <td class="title">
                <h3>Advanced SystemCare 11 PRO</h3>
                <p>(1 Year / 3 PCs) </p>
              </td>
              <td class="space"></td>
              <td class="itema"><b>$17.99</b></td>
              <td class="space"></td>
              <td class="itemb"><b>$19.99</b></td>
            </tr>
            <tr class="space"></tr>
            <tr>
              <td class="title">
                Smart Defrag 5 PRO
                <span class="point">
                    <div class="txt">
                      <p>Automatically and Intelligently Defragment to Maximize Hard Drive Performance &amp; Speed Up Your PC</p>
                    </div>
                  </span>
              </td>
              <td class="space"></td>
              <td class="itema">FREE</td>
              <td class="space"></td>
              <td class="itemb">$19.99</td>
            </tr>
            <tr class="space"></tr>
            <tr>
              <td class="title">
                IObit Uninstaller 7 PRO
                <span class="point">
                    <div class="txt">
                      <p>Powerfully Uninstall Unwanted Programs, Plug-ins and Windows Apps for Lighter PC &amp; Safer Online Browsing</p>
                    </div>
                  </span>
              </td>
              <td class="space"></td>
              <td class="itema">FREE</td>
              <td class="space"></td>
              <td class="itemb">$19.99</td>
            </tr>
            <tr class="space"></tr>
            <tr class="bottom">
              <td class="title">
                <h3>Total Price</h3>
              </td>
              <td class="space"></td>
              <td class="itema"><b>$17.99</b></td>
              <td class="space"></td>
              <td class="itemb"><b>Save $41.98</b></td>
            </tr>
          </table>
          <div class="buybox">
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=enaffasc11sdiu1799&ref=<?php echo $ref3pcgift;?>&aff=<?php echo $_GET['aff'];?>"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc112018buy3pcgift');maskCount(1)">
              ADD TO CART
            </a>
            <p onclick="maskClose()">No thanks, I want to pay the full price</p>
          </div>
        </div>
      </div>
    </div>
    <div class="close" onclick="maskClose()">x</div>
  </div>
</div>
<!-- mask end -->

<script>var imgSrc = "<?php echo getStaticUrl('images/off.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
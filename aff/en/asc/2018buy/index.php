<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  $ref1pc='enaff_asc11_2018buy1pc';
  $ref3pc='enaff_asc11_2018buy3pc';
  $ref3pcgift = 'enaff_asc11_2018buy3pcgift';
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

      $sql = "insert into affascmaskcount (ip,addTime,maskType,buttonClick) values(:ip,:addTime,:maskType,:buttonClick)";
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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Activating Advanced SystemCare PRO Now to Make Your Sluggish PC Run at Peak Capacity!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
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
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <dl class="fl clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt="" /></dt>
        <dd class="fl">
          <span>You are activating:</span>
          <h1>Advanced SystemCare 11 PRO</h1>
          <p>Buy now to rejuvenate your sluggish PC and make it run at peak capacity!</p>
        </dd>
      </dl>
      <div class="right fr">
        <p>“Advanced Systemcare aims to remedy whatever ails your computer”</p>
        <img src="<?php echo getStaticUrl('images/clnet.png')?>" alt="" />
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="wrapper">
    <!-- offer start -->
    <div class="offer">
      <div class="box pc">
        <h2>1 Year / 1 PC License</h2>
        <p>This license key is good for one year <span>on one computer. You can renew</span> it if you're satisfied.</p>
        <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
        <div class="price">
          <p><strong><small>$</small>14.77</strong> <del>$29.99</del></p>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=enaffasc111pc1477&ref=<?php echo $ref1pc;?>&aff=<?php echo $_GET['aff'];?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc112018buy1pc')">
            Add to Cart
          </a>
        </div>
      </div>
      <div class="box pcs">
        <h2>1 Year / 3 PCs License</h2>
        <p>This license key is good for one year on <span>three computers. You can renew</span> it if you're satisfied.</p>
        <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
        <div class="price">
          <p><strong><small>$</small>19.99</strong> <del>$49.99</del></p>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=enaffasc113pc1999&ref=<?php echo $ref3pc;?>&aff=<?php echo $_GET['aff'];?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc112018buy3pc')">
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
          <h2>FREE LIFETIME UPDATES</h2>
          <p>You will get all software updates for free during the subscription period.</p>
        </dd>
      </dl>
    </div>
    <!-- feature end -->
  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
  <!-- footer end -->

  <!-- mask start -->
  <div class="mask">
    <div class="mask-box">
      <div class="plana">
        <p>Congrats! You’re Today's Lucky Visitor! </p>
        <p>Get Your <b>Extra 10% OFF &amp; 2 Free Gifts</b> Now!</p>
        <p class="ends">Offer ends in:</p>
        <div id="countdown" class="countdown">
          <strong>02</strong>
          <b>:</b>
          <strong>00</strong>
        </div>
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
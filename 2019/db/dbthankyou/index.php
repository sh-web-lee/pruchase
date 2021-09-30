<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}

if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$55 OFF Driver Booster PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
        <h1>$55 OFF</h1>
        <ul>
          <li>. When you spend over $55</li>
          <li>. Expiry Date: <span class="date-str">10 August 2019</span></li>
        </ul>
      </div>
      <div class="content">
        <div class="change">
          <dl class="db active" data-name="db">
            <dt><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""></dt>
            <dd>Driver Booster 7 PRO <br> $74.85</dd>
            <dd><span><i class="all-icons"></i></span></dd>
            <dd class="add-img hide"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" width="50"></dd>
          </dl>
          <dl class="pf" data-name="pf">
            <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""></dt>
            <dd>Protected Folder <br> $39.95</dd>
            <dd><span><i class="all-icons"></i></span></dd>
            <dd class="add-img"><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="" width="50"></dd>
          </dl>
          <dl class="sm" data-name="sm">
            <dt><img src="<?php echo getStaticUrl('images/sm-box.png')?>" alt=""></dt>
            <dd>Start Menu 8 PRO <br> $22.95</dd>
            <dd><span><i class="all-icons"></i></span></dd>
            <dd class="add-img"><img src="<?php echo getStaticUrl('images/sm-box.png')?>" alt="" width="50"></dd>
          </dl>
        </div>
        <div class="message">
          <h3>your items: </h3>
          <dl data-name="db">
            <dt><span>Driver Booster 7 PRO</span> <em>$</em>74.85 <i class="all-icons close" ></i></dt>
            <dd>1 year subscription, 3 PCs</dd>
          </dl>
          <div class="coupon">
            <p><span>Subtotal</span> <cite>$74.85</cite></p>
            <p><span>Gift voucher</span> <cite class="red">-$55</cite></p>
          </div>
          <div class="price">
            <p><span>Total:  </span> <strong>$<b>19</b>.85</strong></p>
            <a href="https://www.iobit.com/buy.php?product=db1985&ref=db63pcty&aff=<?php echo $_GET['aff'];?>&refs=purchase_db" onclick="ga( ‘send', ‘event’, ‘dbbuy’, ‘buy’, ‘dbpurchase-thankyou’)" class="buybtn"><strong>Buy Now</strong> <span><i class="all-icons"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="db-feature">
    <div class="wrapper ">
      <h2>Update Your Outdated Drivers and Game Components</h2>
      <img src="<?php echo getStaticUrl('images/feature.png')?>" alt="" class="img-box">
      <div class="message">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
          <dd>
            <h3>Easier Driver Update</h3>
            <p><i>.</i> Auto check 3,500,000+ drivers and recommend the right ones.</p>
            <p><i>.</i> Auto update drivers while system is idle and backup drivers.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
          <dd>
            <h3>Smoother PC Performance</h3>
            <p><i>.</i> Update drivers to reduce system freezing and crashes.</p>
            <p><i>.</i> Fix device errors to reduce hardware problems.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
          <dd>
            <h3>Better Gaming Experience</h3>
            <p><i>.</i> Update suitable components to guarantee smooth launching.</p>
            <p><i>.</i> Update game-related drivers to experience advanced & new features.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="gift-message">
    <div class="wrapper">
      <dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="" width="148">
          <h3>Protect Your Important Files</h3>
        </dt>
        <dd><i class="all-icons icons01"></i> 1 password for all important files and data</dd>
        <dd><i class="all-icons icons02"></i> Protect your files from malicious attacks</dd>
        <dd><i class="all-icons icons03"></i> Protect your privacy from others</dd>
      </dl>
      <dl class="sm">
        <dt>
          <img src="<?php echo getStaticUrl('images/sm-box.png')?>" alt="" width="148">
          <h3>Bring Back Your Classic Start Menu</h3>
        </dt>
        <dd><i class="all-icons icons04"></i> Switch your start menu between Win 7 and Win 8/10</dd>
        <dd><i class="all-icons icons05"></i> Faster and more accurate file locating</dd>
        <dd><i class="all-icons icons06"></i> Customize your start button icon</dd>
        <dd><i class="all-icons icons07"></i> No-ads and clean start menu</dd>
      </dl>
    </div>
  </div>

  <!-- review start -->
  <div class="review wrapper">
    <h2>What Others Say: </h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Media Review</h2>
            <h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best.</h4>
            <p>
              Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
          <dd>
            <h2>Media Review</h2>
            <h4></h4>
            <p>
              "Start Menu 8 recaptures the navigation structure that you are familiar with from Windows 7. The Windows 8 interface, called Metro, did away with the Start button and replaced it with the flat-paneled menu used on Windows phones and tablets."
            </p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></dt>
          <dd>
            <h2>User Review</h2>
            <h4></h4>
            <p>
              First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM,  i was able to play new game titles without having to shutdown any background process.  I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product. 
            </p>
            <cite>Dunston Diaz</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
          <dd>
            <h2>User Review</h2>
            <h4></h4>
            <p>
              What a surprise to receive the new Driver Booster from IObit.  Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade.  Once upgrading was complete it was as if my PC had a complete makeover. Sensational!
            </p>
            <cite>Harold Barr</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
          <dd>
            <h2>User Review</h2>
            <h4></h4>
            <p>
              Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended. 
            </p>
            <cite>Hishaam Salasa</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></dt>
          <dd>
            <h2>User Review</h2>
            <h4></h4>
            <p>
              It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB7. Easy to use and fast downloads it is the best tool in the Market until now!
            </p>
            <cite>Carlos Alexandre Veríssimo</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/juerg.png')?>" alt="Juerg"></dt>
          <dd>
            <h2>User Review</h2>
            <h4></h4>
            <p>
              Even thought I’m not a green horn, I was lost the first time I used Win 8 and was more than happy to get the help of “Start Menu 8” which saves me time and allows me not to change my habits too much. In addition I had once a small issue with it and couldn’t solve it by myself, so I wrote to the IObit support team without many hopes…. Wrong assumption…. They answered quickly and gave me the solution to my problem in no time! Since, I’m even more a fan of IObit and looking forward for their next release.
            </p>
            <cite>Juerg</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dan-jurden.png')?>" alt="Dan Jurden"></dt>
          <dd>
            <h2>User Review</h2>
            <h4></h4>
            <p>
              As a technology consultant and application developer, I rely on virtualization software a lot. I like to create a new virtual machine for each of my projects. This way I can keep the machine clutter free; and only install the tools I need for that project. As I do not like the Metro screen in Windows 8, I like to use a start menu replacement solution to get my Windows 7 look and feel back. I have struggled for the last few years with several different solutions, both paid and free. Sometimes they work well, sometimes not. Since I started using Start Menu 8, I have had NO issues with the start menu. It is a clean implementation and very easy to use and configure. 
            </p>
            <cite>Dan Jurden</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
          <p>
            We're confident that activating PRO edition will give you a better experience.
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>We accept</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer one-box clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" class="db-box" width="117 "/>
      <img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="" class="pf-box" width="117 "/>
      <img src="<?php echo getStaticUrl('images/sm-box.png')?>" alt="" class="sm-box" width="117 "/>
    </div>
    <div class="message fl">
      <h2>Buy Now with <span>$55 OFF</span></h2>
      <p>Today Only</p>
    </div>
    <ul class="price fr ">
      <li><strong>$<b>19</b>.85</strong> <del>$74.85</del></li>
      <li>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=db1985&ref=db63pcty&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
           onclick="ga( ‘send', ‘event’, ‘dbbuy’, ‘buy’, ‘dbpurchase-thankyou’)">
          <strong>Buy Now</strong>
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

  <script>
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
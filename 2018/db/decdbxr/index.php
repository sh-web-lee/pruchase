<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='dbprepa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>73% OFF to Keep Drivers Always Up-to-date - Christmas Sale | IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <div class="title">
          <h4>Merry Christmas! Special Sale</h4>
          <h1>Last Chance to Save Big – Once Per Year Only!</h1>
        </div>
        
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
            <div class="balloon"><img src="<?php echo getStaticUrl('images/balloon.png')?>" alt=""/></div>
          </div>
          <div class="right fr">
            <h2>Driver Booster 6 PRO</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <i class="all-icons"></i> <b id="packbox" class="reduceGift packbox"><span><b class="list"><strong>*</strong></b></span><span class="last"><b class="list"><strong>*</strong></b></span></b> seats left now! 
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <ul class="clearfix">
                  <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching</li>
                  <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms* Left</li>
                </ul>
              </div>
              <p><strong>$<big>19</big>.95</strong> <del>$74.85</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=db63pc1995x&ref=xr_db&refs=purchase_dbx" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-xmas');">
                Activate Now
              </a>
              <p class="year">1 Year Subscription / 3 PCs</p>
              <img class="moneyback" src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/>
            </div>
          </div>
        </div>
      </div>
      <div class="left-bg"><img src="<?php echo getStaticUrl('images/banner-left.png')?>" alt=""/></div>
      <div class="right-bg"><img src="<?php echo getStaticUrl('images/banner-right.png')?>" alt=""/></div>
    </div>
    <!-- banner end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <h2>One Click to Update Missing, Outdated and Faulty Drivers!  </h2>
        <p class="over">
         Over 150,000,000 worldwide users choose Driver Booster Pro as their driver updater to make driver update easier and game performance faster.
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt="IObit Malware Fighter PRO"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Update 3,000,000+ Device Drivers </h3>
                <p>
                 Auto check 3,000,000+ drivers and recommendthe right ones to reduce computer crashes and improve system stability.
                 <br><b> 20% more compared with free edition. </b>
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>Faster and Better Game Performance</h3>
                <p> Auto check game related drivers and game components to help give you faster gaming. Some games' speed has an increase by up to 39%. 
                 <br><b>*PRO Only</b>
                </p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Faster Driver Updating Speed</h3>
                <p>
                  Pre-download your drivers to save update time and reduce computer stutter/lag duringupdate.
                  <br> <b>*PRO Only</b>
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Solve Sound& Internet Issues</h3>
                <p>
                  Fix device errors to reduce problems and conflictswith your printer,screen, internet, mouseand external devices.
                  <br> <b>*PRO Only</b>
                </p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Get Pro for easier driver update and faster game performance</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <?php echo $viewNum;?> watching, <b id="packbox1" class="reduceGift packbox"><span><b class="list"><strong>*</strong></b></span><span class="last"><b class="list"><strong>*</strong></b></span></b> seats left now! 
            </p>
          </div>
          <p><strong>$<big>19</big>.95</strong> <del>$54.95</del></p>
          <a class="buybtn yellow" href="https://www.iobit.com/buy.php?product=db63pc1995x&ref=xr_db&refs=purchase_dbx" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-xmas');">
            Activate Now
          </a>
          <p class="year">1 Year Subscription / 3 PCs</p>
          <img class="moneyback" src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/>
        </div>
      </div>
    </div>
    <!-- centbuy end -->
  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>To See Clearly What You Will Get from Pro, If You Activate Now:</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">Driver Booster <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>Driver Booster  <br> <b>Pro</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema">2,500,000+</td>
          <td class="itemb">Driver database</td>
          <td class="itemc">3,000,000+</td>
        </tr>
        <tr>
          <td class="itema">Limited</td>
          <td class="itemb">Driver download speed</td>
          <td class="itemc">Unlimited</td>
        </tr>
        <tr>
          <td class="itema">Basic</td>
          <td class="itemb">Auto update outdated drivers</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Auto back up drivers against accidents</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Fix device errors</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Check game components</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Priority to check game ready drivers </td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Auto update to the latest version</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema last"></td>
          <td class="itemb"></td>
          <td class="itemc last"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->
  <!-- between-message start -->
  <div class="between-message wrapper">
    <h2>DON'T MISS OUT!</h2>
    <h3>Get Exclusive 73% OFF to Keep Your Drivers Up-to-date with 1-Click</h3>
    <div class="price">
       <p><strong>$<big>19</big>.95</strong> <del>$54.95</del></p>
       <a class="buybtn" href="https://www.iobit.com/buy.php?product=db63pc1995x&ref=xr_db&refs=purchase_dbx" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-xmas');">
        Activate Now
        </a>
        <p class="year countdown">Hurry!  <b>04</b>M: <b>04</b>S: <b>004</b>Ms Left</p>
    </div>
  </div>
  <!-- between-message end -->


    <!-- review start -->
    <div class="review wrapper">
      <h2>Trusted by 150,000,000 Users</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt="PC Magazine"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>"IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best. Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack."</p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"Driver booster is an amazing application. As for someone who has a lot of applications and drives as does not have the time to manually update them, I strongly recommend Driver Booster, it will help to update the driver quickly and easily."</p>
              <cite>Adam Backlund</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"This is one of the best driver updater programs around. Microsoft has even led me astray by suggesting updates that wouldn’t work with my machine. This program knew what updates I needed without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"</p>
              <cite>Wayne Bowler</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"With Driver Booster, I can easily know which devices drivers are out of date and can easily update them. Besides, it helps me to fix sound error, network error, device error etc...I don't believe it before I using, but after using it I really love it..just my PC is faster ,securer and newer more than the last 8 months ago..so thank you IObit."</p>
              <cite>Myo Thuya</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>World-wide Awards</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
              <p>
                We’re confident that activating PRO edition will fix all your headache driver matters for affordable price!
              </p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>We accept</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Note:</dt>
            <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- backtotop start -->
    <div id="backtotop" class="backtotop">top</div>
    <!-- backtotop end -->

    <!-- float start -->
    <div class="floatlayer">
        <div class="wrapper clearfix">
          <img class="fl" src="<?php echo getStaticUrl('images/db-fl-box.png')?>" alt="Driver Booster PRO"/>
          <div class="price fl">
            <div class="count">
              <ul class="clearfix">
                <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <span class="packsNum">50</span> seats left now! </li>
                <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms* Left</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
            </div>
          </div>
          <!-- buybtn -->
          <a class="buybtn yellow fr" href="https://www.iobit.com/buy.php?product=db63pc1995x&ref=xr_db&refs=purchase_dbx" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-xmas');">
            Activate Now
          </a>
        </div>
    </div>
    <!-- float end -->

    <!-- mask start -->
    <div class="mask"></div>
    <div class="popShow">
      <div class="title">
        <h2>SURPRISE!! Merry Christmas! </h2>
      </div>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/db-pop-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="price fl">
         <h3>Extra $<b>1</b> OFF as our gift for you!</h3>
          <p>Only $<strong><big>18</big>.<span>95</span></strong> <span>1 year / 3 PCs</span></p>
          <a class="buybtn yellow" href="https://www.iobit.com/buy.php?product=db63pc1895&ref=xr_db1895&refs=purchase_dbx" onclick="ga('send', 'event', 'dbbuypop', 'buy', 'dbpurchase-xmas);">
            Activate Now
          </a>
          <p class="year"> Seize your last chance for the big Christmas saving!</p>
        </div>
      </div>
    </div>
    <!-- mask end -->

  </div>
  <script>var viewNum = "<?php echo $viewNum;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
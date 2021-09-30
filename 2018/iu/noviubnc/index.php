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
$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>55% OFF to Get IObit Uninstalller PRO - Black Friday Sale | IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
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
          <h1>BLACK FRIDAY FLASH SAlE</h1>
          <p>Best Chance to Save Big – Once Per Year Only!</p>
        </div>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO"/>
          </div>
          <div class="right fr">
            <h2>IObit Uninstaller 8 PRO</h2>
            <p class="note">Limited quantity available</p>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> seats left now!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Left<strong>*</strong></p>
              </div>
              <p><strong>$<big>12</big>.97</strong> <del>$29.99</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=iu83pc1297bnc&ref=bnc_iu<?php echo $refStr;?>&refs=purchase_iubf" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-bf');">
                <div class="inner">
                  <i class="all-icons"></i>
                  <span>Activate Now</span>
                </div>
              </a>
              <p class="year">1 Year Subscription / 3 PCs</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Why Upgrade to IObit Uninstaller 8 PRO?</h2>
        <h4>1-click to solve the following uninstalling problems</h4>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="red"><img src="<?php echo getStaticUrl('images/problems.png')?>" alt="Problems"/></th>
              <th><b>U</b>nknown bundled items stealthily installed alongside freeware </th>
              <th><b>M</b>alicious and ads plugs added on browsers without your permission</th>
              <th><b>P</b>rograms can't be uninstalled by Windows or other programs</th>
              <th><b>S</b>oftware leftovers cannot be deleted by other utilities</th>
              <th><b>S</b>everal essential programs on your computer are outdated</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema red">IObit Uninstaller 8 <br>PRO</td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Uninstall</span>
              </td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Uninstall</span>
              </td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Uninstall</span>
              </td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Auto clean</span>
              </td>
              <td class="itema">
                <i class="all-icons">√</i> <span>Update all with 1-click</span>
              </td>
            </tr>
            <tr>
              <td class="itemb black">IObit Uninstaller 8 FREE <p>Your Current Edition</p></td>
              <td class="itemb">
                <i class="all-icons fork">×</i> <span>No help available</span>
              </td>
              <td class="itemb">
                <i class="all-icons fork">×</i> <span>No help available</span>
              </td>
              <td class="itemb">
                <i class="all-icons fork">×</i> <span>No help available</span>
              </td>
              <td class="itemb">
                <i class="all-icons fork">×</i> <span>No help available</span>
              </td>
              <td class="itemb last">
                <i class="all-icons fork circle">×</i> <span>Update one by one</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- review start -->
    <div class="review">
      <div class="wrapper">
        <h2 class="retitle">Trusted by 25,000,000+ Users Worldwide</h2>
        <div id="dg-container" class="dg-container">
          <div class="nav">
            <span class="dg-prev"></span>
            <span class="dg-next"></span>
          </div>
          <div class="content dg-wrapper">
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
              <dd>
                <h2>Media Review</h2>
                <p>
                  " This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."
                </p>
                <cite>MakeUseOf</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></dt>
              <dd>
                <h2>User Review</h2>
                <p>
                  "Uninstaller PRO is just one of five IObit family of ‘maintenance’ programs I have invested in my PC, like Chefs invested in their knives. Uninstaller is great at finding the remnants of bits and bytes hiding here and there taking up disk spaces and impacting the register. If I used the 'uninstall' of the software program to uninstall, it worked. But, Uninstaller PRO somehow popped up later and showed 35 files need to be cleared. All I need to do is click OK. Highly recommended and I bought a license for 3 PCs. Support service is courteous and excellent."
                </p>
                <cite>Joseph Yu</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></dt>
              <dd>
                <h2>User Review</h2>
                <p>
                  "IObit Uninstaller is probably one of the best software to remove unnecessary program from your computer. Unlike the basic windows uninstaller that program will remove all leftovers of the program, which later may slow down performance of your PC. I have been using this program for a several years and always it helps to keep my computer clean and fast. I had recommended this program to some of my friends in the past and would recommend it again today."
                </p>
                <cite>Sergey Erlich</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></dt>
              <dd>
                <h2>User Review</h2>
                <p>
                  "IObit Uninstaller is one of the best programs with its utilization. Easy to work with, very fast cleaning and deep cleaning. From version 5 with more other functionalities cooperating not only with Windows 10. Fast cleaning from plug-ins is also very comfortable. Great searching for duplicities not used programs as well. Thanks for your hospitality of me and my family’s computers."
                </p>
                <cite>Áda Görtler</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
              <dd>
                <h2>User Review</h2>
                <p>
                  "The IObit Uninstaller gets better with every update. I've been using it for more than 3 years now. It's fast to load and has simple UI. Some of the many features I regularly use are Batch uninstall, Powerful scan, File shredder and Recently installed feature which gives me quick access to a program that I just installed which I don't like or it doesn't work properly."
                </p>
                <cite>Lovro Žužić</cite>
              </dd>
            </dl>
          </div>
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
              <p>We’re confident that activating PRO edition will help you quickly uninstall unwanted programs for affordable price!</p>
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
        <img class="fl" src="<?php echo getStaticUrl('images/iu-float-box.png')?>" alt="IObit Uninstalller PRO"/>
        <div class="price fl">
          <div class="count">
            <ul>
              <li>
                <p class="watch"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> seats left now!</p>
              </li>
              <li>
                <p id="floatdown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Left<strong>*</strong></p>
              </li>
            </ul>
            <div class="progressbar">
              <span></span>
            </div>
          </div>
        </div>
        <!-- buybtn -->
        <div class="price fr">
          <p><strong>$<big>12</big>.97</strong> <del>$29.99</del></p>
          <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=iu83pc1297bnc&ref=bnc_iu<?php echo $refStr;?>&refs=purchase_iubf" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-bf');">
            <div class="inner">
              <i class="all-icons"></i>
              <span>Activate Now</span>
            </div>
          </a>
        </div>
      </div>  
    </div>
    <!-- float end -->
    <div class="maskAll"></div>

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrcTrial = "<?php echo getStaticUrl('images/iu-mask-box.png')?>";
    var imgSrcEnd = "<?php echo getStaticUrl('images/iu-mask-box-small.png')?>";
    var imgSrcOff = "<?php echo getStaticUrl('images/off.png')?>";
    var _hrefTrial = "https://www.iobit.com/buy.php?product=iu83pcbnctrial&ref=bnc_iutrial<?php echo $refStr;?>&refs=purchase_iubf&tw=-8";
    var _hrefEnd = "https://www.iobit.com/buy.php?product=iu83pc1477bnc&ref=bnc_iu1477<?php echo $refStr;?>&refs=purchase_iubf&tw=-8";
    var _gaTrial = "ga('send', 'event', 'iutrialbuypop', 'buy', 'iupurchase-bf');";
    var _gaEnd = "ga('send', 'event', 'iubuypop', 'buy', 'iupurchase-bf');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>
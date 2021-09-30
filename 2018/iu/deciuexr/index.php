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
  $cName='iuexrprepa'.$date;
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
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
$data=json_decode(base64_decode($_GET['data']));
//$junk=empty($data->filesize)?0:number_format(round(($data->filesize/(1024*1024*1024)),2),2);
$junkMb=$data->filesize/(1024*1024);
$junkGb=$data->filesize/(1024*1024*1024);
$junk=($junkMb<100)?0:number_format(round(($junkGb>=1)?$junkGb:$junkMb,2),2);
$junkStr=$junk.(($junkGb>=1)?' GB':' MB');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>57% OFF to Get IObit Uninstaller Pro - Christmas Sale | IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700'>
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
          <h4>Your registered IObit Uninstaller Pro has expired!</h4>
          <h1>Welcome Back and We Miss You</h1>
        </div>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller Pro"/>
            <div class="balloon"><img src="<?php echo getStaticUrl('images/balloon.png')?>" alt=""/></div>
          </div>
          <div class="right fr">
            <h2>57% OFF Christmas Sale</h2>
            <p>Exclusive for our gold member</p>
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
                  <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b> Ms* Left</li>
                </ul>
              </div>
              <p><strong>$<big>12</big>.97</strong> <del>$29.99</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=iu83pc1297&ref=xr_iue&refs=purchase_iuex" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuepurchase-xmas');">
                Renew Now
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
        <h4>Since Being with You, </h4>
        <h2>What Did IObit Uninstaller PRO Do for You</h2>
        <div class="panel clearfix">
          <div class="screen fl">
            <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="IObit Uninstaller Pro"/>
          </div>
          <div class="right fr">
            <dl class="one clearfix <?php echo $junk?'':'datahide';?>">
              <dt>1</dt>
              <dd>
                <h3>Free up disk space</h3>
                <b class="data <?php echo $junk?'':'hide';?>"><span><?php echo $junkStr;?></span></b>
                <p>
                  Help you free up more space by removing unwanted programs.
                </p>
              </dd>
            </dl>
            <dl class="two clearfix">
              <dt>2</dt>
              <dd>
                <h3>Guarantee a clean uninstall</h3>
                <p>
                  Auto clean unnecessary files, folders and registry keys left over in your computer after uninstalling.
                </p>
              </dd>
            </dl>
            <dl class="three clearfix">
              <dt>3</dt>
              <dd>
                <h3>Ensure safe online surfing</h3>
                <p>
                  Ensure you secure browsing by removing the malicious or advertising supported plug-ins.
                </p>
              </dd>
            </dl>
            <dl class="four clearfix">
              <dt>3</dt>
              <dd>
                <h3>Keep programs up-to-date</h3>
                <p>
                  1-click to update you essential programs to the latest version.
                </p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2 class="btitle">Without IObit Uninstaller PRO,</h2>
        <p><i class="all-icons"></i> What Will You Lose <i class="all-icons right"></i></p>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">Before</th>
              <th class="itemb"></th>
              <th class="itemc">Now</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Stubborn programs removal</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Detect and uninstall bundleware</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Auto clean software leftovers</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Remove malicious toolbars and plug-ins</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Remove ad-based toolbars and plug-ins</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Update essential software with 1-click</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
            <tr>
              <td class="itema">
                <i class="all-icons green">√</i>
                <span>Available</span>
              </td>
              <td class="itemb">Auto update to the latest version</td>
              <td class="itemc">
                <i class="all-icons red">×</i>
                <span>Unavailable</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Now Come Back with New IObit Uninstaller PRO</h2>
        <p>Uninstall unwanted programs more easily and thoroughly</p>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/new-icon02.png')?>" alt=""/></dt>
            <dd>
              <b>Easier</b>
              <h4>Unwanted Programs, Windows<br> Apps & Extensions Uninstall</h4>
              <p><span class="green">NEW</span></p>
            </dd>
          </dl>
          <dl class="center">
            <dt><img src="<?php echo getStaticUrl('images/new-icon01.png')?>" alt=""/></dt>
            <dd>
              <b>Deeper</b>
              <h4>Cleaning of Software Leftovers</h4>
              <p><span>Enhanced</span></p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/new-icon03.png')?>" alt=""/></dt>
            <dd>
              <b>1-click</b>
              <h4>Update for All Essential Programs</h4>
              <p><span>Enhanced</span></p>
            </dd>
          </dl>
        </div>
        <div class="price">
          <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=iu83pc1297&ref=xr_iue&refs=purchase_iuex" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuepurchase-xmas');">
            Renew Now & Save 57%
          </a>
          <p class="year">1 Year Subscription / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>World-wide Awards</h2>
        <p>
          As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right PC uninstaller.
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review wrapper">
      <h2 class="btitle">Trusted by 25,000,000 Users</h2>
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
                "This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."
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
    <!-- review end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
              <p>
                We’re confident that activating PRO edition will fix all your quickly uninstall unwanted programs for affordable price!
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
            <dd>
              *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
            </dd>
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
          <img class="fl" src="<?php echo getStaticUrl('images/iu-small-box.png')?>" alt="IObit Uninstaller Pro"/>
          <div class="price fl">
            <div class="count">
              <ul class="clearfix">
                <li class="fl"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <span class="packsNum"><?php echo $viewNum;?></span> seats left now! </li>
                <li id="bandown" class="countdown fr">Hurry! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms* Left</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
            </div>
          </div>
          <!-- buybtn -->
          <a class="buybtn yellow fr" href="https://www.iobit.com/buy.php?product=iu83pc1297&ref=xr_iue&refs=purchase_iuex" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuepurchase-xmas');">
            Renew Now & Save 57%
          </a>
        </div>
    </div>
    <!-- float end -->

    <!-- mask start -->
    <div class="mask"></div>
    <div class="popShow">
      <div class="title">
        <h2>Oops! Chrisitmas Sale has ended!</h2>
        <h4>Don’t worry. Grab your last chance in 2018 for big saving!</h4>
      </div>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller Pro"/>
        </div>
        <div class="price fl">
          <img src="<?php echo getStaticUrl('images/pop-off.png')?>" alt="50% OFF"/>
          <p><strong>$<big>14</big>.77</strong> <del>$29.99</del></p>
          <a class="buybtn yellow" href="https://www.iobit.com/buy.php?product=iu83pc1477&ref=xr_iue1477&refs=purchase_iuex" onclick="ga('send', 'event', 'iubuypop', 'buy', 'iuepurchase-xmas');">
            Renew Now
          </a>
          <p class="year">1 Year Subscription / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- mask end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var viewNum = "<?php echo $viewNum;?>";
    var junk="<?php echo $junk;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>
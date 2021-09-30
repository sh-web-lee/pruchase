<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(126,158);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'eniupreorder_p' . $date;
  $c_name_t='eniupreorder_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(41,59);
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
$transData=json_decode(base64_decode($_GET['data']));
$fileSize=$transData->cleanuninstall->extra;
$fileSizeShow=number_format($fileSize/(1024*1024),0);
if(($fileSize/(1024*1024))>=10){
  $fileSizeStr=$fileSizeShow.' MB';
}else{
  $fileSizeStr='';
}

$refStr='';
if(in_array($_GET['st'],array('iu_xmas','iuxmasr','iu_ascxmas','iu_dbxmas','iu_imfxmas'))){
  $refStr.='-'.$_GET['st'];
}
$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);

if(in_array($_GET['pop'],array('x_iu'))){
    $refStr.='-'.$_GET['pop'];
}
$ver = explode('.', $_GET['ver']);

$refStr.=empty($_GET['ver']) ? '' : ('-' . $ver[0] . $ver[1]);

$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);

if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
$refStr.=empty($_GET['user'])?'':('-u'.$_GET['user']);

$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pay $0 to get IObit Uninstaller 10 PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <script type="text/javascript">
  var lang = navigator.language||navigator.userLanguage;
  lan = lang.substr(0, 2);
  var queryStr = <?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
  if(lan=='fr') window.location.replace('https://purchase.iobit.com/fr/iu/installmonitor.php' + queryStr);
  if(lan=='de') window.location.replace('https://purchase.iobit.com/de/iu/installmonitor.php' + queryStr);
  if(lan=='es') window.location.replace('https://purchase.iobit.com/es/iu/installmonitor.php' + queryStr);
  if(lan=='ru') window.location.replace('https://ru.iobit.com/purchase/iu/installmonitor.php' + queryStr);
  if(lan=='it') window.location.replace('https://purchase.iobit.com/it/iu/installmonitor.php' + queryStr);
  </script>
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>

</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/en/index.php?ref=iu" class="logo" target="_blank">IObit</a>
      <ul class="uninstall">
        <li class="first"><i></i> <span>Clean Uninstall</span></li>
        <li class="center">Clean <strong><?php echo $fileSizeStr;?></strong> more leftovers than Uninstall mode</li>
      </ul>
      <div class="clearfix">
        <div class="left-img"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" data-name="default" alt="IObit Uninstalller PRO"></div>
        <div class="right fr">
          <h1 data-name="default">Welcome to our Presale</h1>
          <h2 data-name="default">Get Pro Edition for <big>$0</big></h2>
          <h3 data-name="default">Limited to first 500 users per day before August 25<sup>th</sup></h3>
          <!-- number -->
          <div class="number" data-name="default">
            <div id="reduce" class="reduceNum">
              <div class="listbox"><span class="list"><b>0</b></span></div>
              <div class="listbox"><span class="list"><b>5</b></span></div>
              <div class="listbox"><span class="list"><b>0</b></span></div>
            </div>
            left now
            <div class="bar">
              <span></span>
            </div>
          </div>
          <!-- message -->
          <div class="price delay" data-name="default">
            <!-- price -->
            <strong>$0 <sup>*</sup></strong>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=iu10preorder&ref=en-iu10preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predordercuninstall');">
              Get It Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end banner -->

  <!-- problem -->
  <div class="problem uninstall">
    <div class="wrapper">
      <h2>What Is the <span>Difference</span> Between Uninstall and Clean Uninstall?</h2>
      <h3>Clean Uninstall helps you free up <span><?php echo $fileSizeStr;?></span> more space</h3>
      <div class="message-box">
        <div class="list01">
          <span><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""/></span>
          <h3>Uninstall</h3>
          <p>Auto clean leftovers of uninstalled programs.</p>
        </div>
        <div class="list02">
          <span><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""/></span>
          <h3>Clean Uninstall</h3>
          <p>Auto clean leftovers of uninstalled programs and fully revert file and registry changes made by the programs.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- end problem -->

  <div class="feature uninstall">
    <div class="wrapper clearfix">
      <div class="left-message">
        <h2>Why Do You Need <span>Clean Uninstall</span>?</h2>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></dt>
          <dd>
            <h3>Free Up More Space</h3>
            <p>
              Delete all associated files and registries of uninstalled programs to free up more disk space.
            </p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list06.png')?>" alt=""></dt>
          <dd>
            <h3>Better PC Performance</h3>
            <p>Clean all traces of uninstalled programs to make your PC run faster and smoother.</p>
          </dd>
        </dl>
      </div>
      <img class="img-box" src="<?php echo getStaticUrl('images/screen-03.png')?>" alt=""/>
    </div>
  </div>

  <!-- benfits -->
  <div class="benfits">
    <div class="wrapper">
      <h2 class="uninstall">What Other Benefits Can I Get from<br>IObit Uninstaller PRO?</h2>
      <div class="box">
        <dl class="list01">
          <dt>Delete Stubborn Programs</dt>
          <dd>Completely delete stubborn programs that can't be uninstalled by conventional means.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list02 right">
          <dt>Complete Clean</dt>
          <dd>Auto clean leftover files of programs uninstalled without using IObit <br>Uninstaller.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list03">
          <dt>Software Updater</dt>
          <dd>1-click to upgrade your<br> important software<br> without any user intervention.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list04 right">
          <dt>Fast & Safe Browser</dt>
          <dd>Identify malicious & advertising plug-ins to ensure secure browsing experience.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list05 right botright">
          <dt>Remove Bundleware</dt>
          <dd>Remove unwanted third-party programs installed alongside freeware to advertise or steal privacy data.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->


  <div class="review wrapper">
    <h2>What Other Users and Media Say</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/pcgm.png')?>" alt="PC Magazine"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>"If you need a program that lets you cleanly and completely uninstall applications, fire up IObit Uninstaller. This free utility makes it a breeze to delete apps, including stray files that are often left behind when you use Windows to delete software from your hard drive or SSD."</p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."</p>
              <cite>Ivan White</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></dt>
            <dd>
              <h2>User Review</h2>
              <p>This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."</p>
              <cite>Ali Tekin</cite>
            </dd>
          </dl>                 
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "</p>
              <cite>Samrat Kumar Chakrabortty</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></dt>
            <dd>
              <h2>User Review</h2>
              <p>"IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."</p>
              <cite>John Glenn Perong</cite>
            </dd>
          </dl>
        </div>                 
    </div>
  </div>
  
  <div class="bottom">
      <div class="award wrapper ">
        <h2>World-wide Awards</h2>
        <p>As being trusted and awarded by those world-class media in the past eight years, you know you’ve got the right PC uninstaller.</p>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <p>If you're unsatisfied, you can cancel the order you placed within 30 days without paying a fee.</p>
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
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Note: </dt>
      <dd>*.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $14.77 automatically. This 50% discount from the original price of $29.99 is bonus only for preorders!</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>


  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=" IObit Uninstalller PRO"></div>
      <div class="number fl">
        <div id="fReduce" class="reduceNum">
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>5</b></span></div>
          <div class="listbox"><span class="list"><b>0</b></span></div>
        </div>
        of 500 places left now
      </div>
      <div class="price fr on">
        <!-- price -->
        <strong>$0 <sup>*</sup></strong>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=iu10preorder&ref=en-iu10preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predordercuninstall');">
          Get It Now
        </a>
      </div>
    </div>
  </div>

  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
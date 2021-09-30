<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }

  include $pRootUrl.'include/common.inc.php';

  $viewNum=rand(116,198);
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

  $refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$ver = explode('.', $_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : ('-' . $ver[0] . $ver[1]);
$refStr.=empty($_GET['user'])?'':('-u'.$_GET['user']);

  $transData=json_decode(base64_decode($_GET['data']));
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
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/en/index.php?ref=iu" class="logo" target="_blank">IObit</a>
      <ul class="attention _hide">
        <li class="first"><i></i> ATTENTION! Your Incomplete Uninstall Leaves</li>
        <?php if($transData->trd->file>0):?>
        <li><strong><?php echo $transData->trd->file;?></strong> <?php echo ($transData->trd->file==1)?'useless file':'useless files';?></li>
        <?php endif;?>
        <?php if($transData->trd->reg>0):?>
        <li class="last <?php echo ($transData->trd->file>0)?'class="last-line"':'';?>"><strong><?php echo $transData->trd->reg;?></strong> <?php echo ($transData->trd->reg==1)?'useless registry entry':'useless registry entries';?></li>
        <?php endif;?>
      </ul>
      <ul class="clean">
        <li class="first"><i></i> Auto Clean</li>
        <li>No more redundant clicks, auto clean residuals from now on.</li>
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
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predordertrdclean');">
              Get It Now
            </a>

            <a class="buybtn attention _hide"
               href="https://www.iobit.com/buy.php?product=iu10preorder&ref=en-iu10preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predordertrd');">
              Get It Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- problem -->
  <div class="problem ">
    <h2>What <span>Problems</span> May Result from Leftovers of Programs?</h2>
    <div class="wrapper-box">
      <div class="message-box">
        <dl class="list01">
          <dt><span>Problem 1</span> Low disk space</dt>
          <dd>Leftovers take up your disk space and make your disk run <br> low on available storage.</dd>
        </dl>
        <dl class="list02">
          <dt><span>Problem 2</span> Slow computer</dt>
          <dd>Useless files take up valuable resources on your computer <br> and make system get slower over time.</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end problem -->
  <div class="feature">
    <div class="wrapper">
      <div class="left-message">
        <h2>Why <span>IObit Uninstaller PRO</span> Is the <br> Uninstaller I Need?</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
          <dd>
            <strong>Auto detect</strong>
            <p>Auto detect leftovers of programs that are uninstalled <br> through control panel or other utilities. </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
          <dd>
            <strong>Auto clean</strong>
            <p>Auto clean all leftovers which are refused to be deleted <br> through control panel or other utilities. </p>
          </dd>
        </dl>

      </div>
      <img src="<?php echo getStaticUrl('images/cleaning.png')?>" alt="" class="img-box">
    </div>
  </div>
  <!-- benfits -->
  <div class="benfits ">
    <div class="wrapper">
      <h2>What Other Benefits Can I Get from <br> IObit Uninstaller PRO?</h2>
      <dl class="list01">
        <dt>Fast & Safe Browser</dt>
        <dd>Remove malicious plug-ins from <br> browser to ensure secure <br> browsing experience.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list02">
        <dt>Software Updater</dt>
        <dd>1-click to upgrade  your important <br> software without any user <br> intervention.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list03">
        <dt>Delete Stubborn Programs</dt>
        <dd>Completely delete stubborn programs <br> that refuse to uninstall.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list04">
        <dt>Remove Bundleware</dt>
        <dd>Remove unwanted third-party programs <br> alongside freeware to advertise or steal <br> privacy data.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
      <dl class="list05">
        <dt>Installation Monitor</dt>
        <dd>Monitor and record all things that a program did to <br> your system during installation and fully revert all <br> changes when the program is no longer needed.</dd>
        <dd><strong>*Pro only</strong></dd>
      </dl>
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
        <p>As being trusted and awarded by those world-class media in the past eight years, you know you've got the right PC uninstaller. </p>
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
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predordertrdclean');">
          Get It Now
        </a>

        <a class="buybtn attention _hide"
           href="https://www.iobit.com/buy.php?product=iu10preorder&ref=en-iu10preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predordertrd');">
          Get It Now
        </a>
      </div>
    </div>
  </div>

  <script>refStr="<?php echo $refStr;?>";</script>
  <script>to="<?php echo $_GET['to'];?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
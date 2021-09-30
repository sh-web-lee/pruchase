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
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='eniumon'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=rand(78,98);
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}
function changeCont($to, $transData){
    switch ($to){
        case 'cleanuninstall':
            $fileSize=$transData->cleanuninstall->extra;
            $fileSizeShow=number_format($fileSize/(1024*1024),0);
            if(($fileSize/(1024*1024))>=10){
                $fileSizeStr=$fileSizeShow.' MB';
            }else{
                $fileSizeStr='';
            }
            $dataNum = $transData->cleanuninstall->reg
            +$transData->cleanuninstall->file
            +$transData->cleanuninstall->task
            +$transData->cleanuninstall->service
            +$transData->cleanuninstall->dll;
            return json_encode(array('fileSize'=>$fileSizeStr,'dateNum'=>$dataNum));
            break;
        case 'prom_d':
            $dataNum = $transData->promote3->reg
                +$transData->promote3->file
                +$transData->promote3->task
                +$transData->promote3->service
                +$transData->promote3->dll;
            return json_encode(array('dateNum'=>$dataNum));
            break;
    }
}
$to = empty($_GET['to']) ? '' : $_GET['to'];
$data = empty($_GET['data']) ? '' : $_GET['data'];
$tData=json_decode(base64_decode($data));

if ($to == 'cleanuninstall' || $to == 'prom_d') {
    $transData = changeCont($to, $tData);
}

$refStr='';
if(in_array($_GET['st'],array('iu_wr','iu_xmas','iuxmasr','iu_ascxmas','iu_dbxmas','iu_imfxmas'))){
  $refStr.='-'.$_GET['st'];
}
if($_GET['pop']=='x_iu'){
    $refStr.='-'.$_GET['pop'];
}

if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr = '-' . ((strlen($_GET['to']) == 0) ? 'unknown' : $_GET['to']);
$refStr .= '-' . $ver;
$refStr .= '-' . ((strlen($_GET['user']) == 0) ? 'unknown' : 'u'.$_GET['user']);
$refStr .= '-' . ((strlen($_GET['insday']) == 0) ? 'unknown' : 'i'.$_GET['insday']);
$refStr .= '-' . ((strlen($_GET['insur']) == 0) ? 'unknown' : $_GET['insur']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Save up to 75% OFF on IObit Uninstaller PRO and Get free gift pack - IObit</title>
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
      <a href="https://www.iobit.com/en/index.php" class="logo" target="_blank">IObit</a>
      <ul>
        <li class="first">Monitor Installation</li>
        <li class="last">Monitor the system changes programs made during installation</li>
      </ul>
      <ul class="monitor _hide">
        <li class="first"><i></i> <span>Attention!</span> Your Incomplete Uninstall Leaves</li>
        <li class="center"><strong>3</strong> useless files</li>
        <li class="last"><strong>3</strong> useless registry entries</li>
      </ul>
      <ul class="uninstall _hide">
        <li class="first"><i></i> <span>Clean Uninstall</span></li>
        <li class="center">Clean all <strong>x</strong> logged items and free up <strong>y</strong> more space</li>

        <li class="change _hide">Clean <strong>X</strong> more leftovers with Clean Uninstall mode</li>
      </ul>
      <div class="left-img"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO"></div>
      <div class="right-message">
        <h1>IObit Uninstaller 11 PRO</h1>
        <h2>Revert system changes after uninstalling programs</h2>
        <h2 class="uninstall _hide">Help to uninstall programs more thoroughly</h2>
        <p class="price"><strong>$<b>14</b>.77</strong> <del>$59.93</del></p>
        <p class="pc"><span></span> 1 Year Subscription / 3 PCs</p>
        <div class="number-message">
          <div class="number">
            <div class="countdown">
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
            </div>
            <p>Hurry, only <span class="gift">50</span> left at this cost!</p>
          </div>
          <div class="buy-content">
            <a href="https://www.iobit.com/buy.php?product=iu113pc1477&ref=en-iu3pcmonitor<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-monitor');" class="buybtn"><i></i> <span>Activate Now</span></a>

            <a href="https://www.iobit.com/buy.php?product=iu113pc1477&ref=en-iu3pccleanuninstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-cleanuninstall');" class="buybtn uninstall _hide"><i></i> <span>Activate Now</span></a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- end banner -->

  <!-- problem -->
  <div class="problem">
    <div class="wrapper">
      <h2>What Is <span>Install</span> Monitor?</h2>
      <div class="message-box">
        <div class="list01">
          <h3>Monitor Installation</h3>
          <p>Help to monitor all things that programs did to your system during installation.</p>
        </div>
        <div class="list02">
          <h3>Record Changes</h3>
          <p>Record the file and registry changes made by the programs to a log.</p>
        </div>
        <img class="screen" src="<?php echo getStaticUrl('images/screen-01.png')?>" alt=""/>
      </div>
    </div>
  </div>

  <div class="problem uninstall _hide">
    <div class="wrapper">
      <h2>What Is the <span>Difference</span> Between Uninstall and Clean Uninstall?</h2>
        <?php if($to == 'prom_d'):?>
            <h3>Clean Uninstall helps you delete <span><?php echo json_decode($transData)->dateNum;?></span> more leftovers</h3>
        <?php elseif ($to == 'cleanuninstall'):?>
            <h3>Clean Uninstall helps you free up <span><?php echo json_decode($transData)->fileSize;?></span> more space</h3>
        <?php endif;?>
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
  <div class="feature">
    <div class="wrapper clearfix">
      <div class="left-message">
        <h2>Why Enable <span>Install Monitor</span>?</h2>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
          <dd>
            <h3>View</h3>
            <p>
              Allow you view the logged data to see exactly what the monitored programs did during installation.
            </p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
          <dd>
            <h3>Uninstall</h3>
            <p>Help to fully revert files and registry changes made by monitored programs after uninstalling.</p>
          </dd>
        </dl>
      </div>
      <img class="img-box" src="<?php echo getStaticUrl('images/screen-02.png')?>" alt=""/>
    </div>
  </div>

  <div class="feature uninstall _hide">
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
      <h2>What Other Benefits Can I Get from<br>IObit Uninstaller PRO?</h2>
      <h2 class="uninstall _hide">What Other Benefits Can I Get from<br>IObit Uninstaller PRO?</h2>
      <div class="box">
        <dl class="list01">
          <dt>Uninstall Stubborn Programs</dt>
          <dd>Safely & completely uninstall 1000+ stubborn programs that refuse to remove from your PC.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list02 right">
          <dt>In-depth Scan & Clean</dt>
          <dd>Full detect & clean leftover files of programs uninstalled without using IObit Uninstaller.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list03">
          <dt>Software Updater</dt>
          <dd>1-click to upgrade your<br> important software<br> without any user intervention.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list04 right">
          <dt>Fast & Safe Surfing</dt>
          <dd>Quickly find and eliminate malware & advertising plug-ins to protect your online privacy.</dd>
          <dd><strong>*Pro only</strong></dd>
        </dl>
        <dl class="list05 right botright">
          <dt>Better Software Performance</dt>
          <dd>1-click to manage software permission, disable popup notifications, fix uninstall issues, and clean installation files.</dd>
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
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>" This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."</p>
              <cite>MakeUseOf</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."
              </p>
              <cite>Ivan White</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/ali.png')?>" alt="Ali Tekin"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."
              </p>
              <cite>Ali Tekin</cite>
            </dd>
          </dl>                 
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "
              </p>
              <cite>Samrat Kumar Chakrabortty</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."
              </p>
              <cite>John Glenn Perong</cite>
            </dd>
          </dl>
        </div>               
    </div>
  </div>
  
  <div class="bottom">
      <div class="award wrapper ">
        <h2>World-wide Awards</h2>
        <p>As being trusted and awarded by those world-class media in the past ten years, you know you’ve got the right PC uninstaller.</p>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
          <p>
           We’re confident that activating PRO edition will quickly uninstall unwanted programs for affordable price!
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
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Note: </dt>
      <dd>*.Data may vary based on different system or computer.</dd>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
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
      <div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> visitors now, only <span class="gift">50</span> left at this cost!</p>
      </div>
      <p class="price"> <del>$59.93</del> <strong>$<b>14</b>.77</strong></p>
      <a href="https://www.iobit.com/buy.php?product=iu113pc1477&ref=en-iu3pcmonitor<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-monitor');" class="buybtn"><i></i> <span>Activate Now</span></a>

      <a href="https://www.iobit.com/buy.php?product=iu113pc1477&ref=en-iu3pccleanuninstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-cleanuninstall');" class="buybtn uninstall _hide"><i></i> <span>Activate Now</span></a>
    </div>
  </div>
  <div class="pop-over ">
    
    <h2>Surprise! Free Gifts for Our Lucky Visitor</h2>
    <h3>Activate IObit Uninstaller Pro Today to Get Your Free Gifts (Value $39.98)</h3>
    <p>Limited Offer! Ends in <strong><span class="count-time">60</span>s</strong></p>
    <img src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt=" IObit Uninstalller PRO" class="imgbox">
    <a href="https://www.iobit.com/buy.php?product=iu11sdpf1477&ref=en-iu3pcsdpfpopmonitor<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-monitor ');" class="buybtn buybtn-pop">Get My Free Gifts</a>

    <a href="https://www.iobit.com/buy.php?product=iu11sdpf1477&ref=en-iu3pcsdpfpopcleanuninstall<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-cleanuninstall');" class="buybtn buybtn-pop uninstall _hide">Get My Free Gifts</a>
  </div>
  <div class="pop-bg "><span class="close">X</span></div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script>transData = '<?= $transData; ?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'eniuoffcial_p' . $date;
  $c_name_t='eniuoffcial_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(60,89);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['user'])?'':('-u'.$_GET['user']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pay $0 to get the latest IObit Uninstaller PRO</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
    
  </head>
<body>
  <div class="wrap">
    <!-- banner start -->
    <div class="sec1 parts animated">
      <div class="colorful hd"></div>
      <div class="sec1Con">
        <a href="https://www.iobit.com/en/index.php" target="_blank" class="logo hd ani_up1">IObit</a>
        <div class="left ani_up2">
          <div class="box hd"></div>
        </div>
        <div class="right ani_up2">
          <p class="name ani_up4">ANNUAL EVENT</p>
          <h2 class="right-title ani_up4">The Best Uninstaller Presale Starts</h2>
          <div id="reduce" class="reduceNum ani_up5">
            <span class="reduce-msg">Packs left for today:</span>
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>5</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          <p class="sec1-outmsg">to make your PC cleaner and safer with <strong>50% OFF</strong></p>
          <div class="price ani_up6">
              <strong>$0 <sup>*</sup><sub class="originPrice">$29.99</sub></strong>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=iu11preorder&ref=en-iu11preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu11preorderofficial');">
                 Pre-order Now
              </a>
            </div>
        </div>
      </div>
    </div>
    <!-- banner end -->
    <!-- With IObit Uninstaller -->
    <div class="sec2 parts">
      <div class="left ani_up1">
        <div class="leftbox ani_up4">
          <div class="leftbox-before ani_up7"></div>
          <div class="leftbox-after ani_up7"></div>
          <div class="btn hd ani_up5"></div>
          <div class="box hd ani_up5"></div>
        </div>
      </div>
      <div class="right ani_up1">
         <h2 class="sec2-title ani_up2">With IObit Uninstaller</h2>
         <ul class="rigt-con ani_up4">
           <li class="item-msg ani_up4">
             <p>You Get a Cleaner<br>PC</p>
           </li>
           <li class="right-item ani_up5">
             <h3 class="item-title">Easy<br>Uninstall</h3>
             <p class="item-text">
              1-click to uninstall unwanted programs, useless plug-ins & default Windows apps in batch.
             </p>
           </li>
           <li class="right-item ani_up6">
             <h3 class="item-title">Powerful<br>Uninstall</h3>
             <p class="item-text">
              Completely uninstall 1000+ stubborn software &<br> bundleware that refuse to be removed.
             </p>
           </li>
           <li class="right-item ani_up7">
             <h3 class="item-title">Auto<br>Uninstall</h3>
             <p class="item-text">
              Automatically clean leftovers of uninstalled programs, even those left by other uninstallations.
             </p>
           </li>
         </ul>
      </div>
    </div>
    <!-- You Can Enjoy a Safer PC -->
    <div class="sec3 parts">
      <div class="left fl ani_up1">
        <h2 class="left-title ani_up4">You Can Enjoy a Safer PC</h2>
        <ul class="left-text ani_up4">
          <li class="left-item ani_up5">
            <h3 class="item-title">Malicious Removal</h3>
            <p class="item-text">Remove malicious & ad-based plug-ins, and block annoying browser notice for safer surfing.</p>
          </li>
          <li class="left-item ani_up6 ">
            <h3 class="item-title">Install Monitor</h3>
            <p class="item-text">Monitor all changes made to system during program installation and revert them when uninstalling.</p>
          </li>
          <li class="left-item ani_up7">
            <h3 class="item-title">Software Health</h3>
            <p class="item-text">Fix software or uninstallation issues easily to reduce security risks and make software run smoother.</p>
          </li>
        </ul>
      </div>
      <div class="right fr ani_up4">
        <div class="btn">
          <div class="btn-itembg hd ani_up4"></div>
          <div class="btn-item hd ani_up5"></div>
          <div class="btn-roate hd"></div>
        </div>
        <span class="tag tag01 hd"></span>
        <span class="tag tag02 hd"></span>
        <span class="tag tag03 hd"></span>
      </div>
    </div>
    <!-- Others Along with -->
    <div class="sec4 parts">
      <h2 class="sec4-title fl ani_up1">Others<br> Along with</h2>
      <ul class="sec4-icons fr">
        <li class="sec4-icon ani_up2">
          <i class="tips one hd"></i>
          <p class="text">1-Click<br>Software Updater</p>
        </li>
        <li class="sec4-icon ani_up4">
          <i class="tips two hd"></i>
          <p class="text">Optimized<br>Force Uninstall+</p>
        </li>
        <li class="sec4-icon ani_up4">
          <i class="tips three hd"></i>
          <p class="text">Thoroughly<br>Leftover Scanning</p>
        </li>
      </ul>
      <div class="sec4-line ani_up5"></div>
    </div>
    <!-- Take the Numbers & Words for It -->
    <div class="sec5 parts">
      <div class="sec5-title ani_up2">Take the Numbers & Words for It</div>
      <ul class="sec5-con">
        <li class="sec5-item ani_up4">
          <icon class="tips one hd ani_up4"></icon>
          <p>53M+</p>
          <span>Downloads</span>
        </li>
        <li class="sec5-item ani_up4">
          <icon class="tips two hd ani_up4"></icon>
          <p>95%</p>
          <span>User Satisfaction</span>
        </li>
        <li class="sec5-item ani_up4">
          <icon class="tips three hd ani_up4"></icon>
          <p>1000+</p>
          <span>Media Recommendations</span>
        </li>
      </ul>
    </div>
    <div class="sec6 parts">
      <ul class="text ani_up2">
        <!-- item add on show class name-->
        <li class="item ani_up3 on">
          <h3 class="item-title">MakeUseOf</h3>
          <p class="item-text">"This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."</p>
        </li>
        <li class="item ani_up3">
          <h3 class="item-title">John Glenn Perong</h3>
          <p class="item-text">"IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."</p>
        </li>
        <li class="item ani_up3">
          <h3 class="item-title">James Gresley</h3>
          <p class="item-text">"IObit's Uninstaller works extremely well, scrubbing the leftovers out of my system. It works fast and safely with no extra fuss to get everything so it’s simple to use. I originally got it because it also can uninstall browser extensions and other difficult programs. It has never failed me. Also, I love that it makes a system restore points on the fly for emergencies."</p>
        </li>
        <li class="item ani_up3">
          <h3 class="item-title">Ivan White</h3>
          <p class="item-text">"IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."</p>
        </li>
        <li class="item ani_up3">
          <h3 class="item-title">Ali Tekin</h3>
          <p class="item-text">"This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IObit I love you."</p>
        </li>
      </ul>
      <div class="pageations">
        <!-- pagetaion add on show class name -->
        <div class="pageation pageationOne on ani_up2">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon1.png')?>" alt="" width="98" height="98" class="ani_up4">
        </div>
        <div class="pageation pageationTwo ani_up7">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon2.png')?>" alt="" width="98" height="98" class="ani_up4">
        </div>
        <div class="pageation pageationThree ani_up4">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon3.png')?>" alt="" width="98" height="98" class="ani_up4">
        </div>
        <div class="pageation pageationFour ani_up5">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon4.png')?>" alt="" width="98" height="98" class="ani_up4">
        </div>
        <div class="pageation pageationFive ani_up6">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon5.png')?>" alt="" width="98" height="98" class="ani_up4">
        </div>
      </div>
    </div>
    <!-- World-wide Awards -->
    <div class="sec7 parts">
      <h2 class="sec7-title ani_up2">World-wide Awards</h2>
      <div class="sec7-icon ani_up4">
        <div class="icon"></div>
      </div>
    </div>
    <div class="bottom">
      <div class="container">
        <dl class="annotation">
          <dt>Note:</dt>
          <dd>
          *.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $14.77 automatically. This 50% discount from the original price of $29.99 is bonus only for preorders!
          </dd>
          <dd>
          *.If you're unsatisfied, you can cancel the order you placed within 30 days without paying a fee.
          </dd>
        </dl>
        <p class="copyright">Copyright © 2005 - 2021 IObit. All Rights Reserved</p>
      </div>
    </div>
    <div class="floatlayer">
      <div class="container">
        <img src="<?php echo getStaticUrl('images/floatlayer-box.png')?>" alt="">
        <div id="fReduce" class="reduceNum">
          <span class="msg">Hurry,only</span>
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>5</b></span></div>
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <span class="msg">left now!</span>
        </div>
        <p class="floatlpayer-sold"><strong>50% OFF</strong> to Get the Best Uninstaller</p>
        <div class="price">
          <strong>$0 <sup>*</sup><sub class="originPrice">$29.99</sub></strong>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=iu11preorder&ref=en-iu11preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu11preorderofficial');">
             Pre-order Now
          </a>
        </div>
      </div>
    </div>
  </div>

  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/jquery-1.7.1.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
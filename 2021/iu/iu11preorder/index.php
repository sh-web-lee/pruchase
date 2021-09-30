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
  $c_name = 'eniupreoder_p' . $date;
  $c_name_t='eniupreoder_t' . $date;
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
    <title>Pay $0 to get the best IObit Uninstaller PRO</title>
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
      <div class="colorful hd">colorful background</div>
      <div class="sec1Con">
        <a href="https://www.iobit.com/en/index.php" target="_black" class="logo hd ani_up1">IObit</a>
        <div class="left ani_up2">
          <div class="box hd">box</div>
        </div>
        <div class="right ani_up2">
          <p class="name ani_up2">ANNUAL EVENT</p>
          <h2 class="right-title ani_up4">Get IObit Uninstaller PRO <i>for $0</i><span class="sec1-param">with</span> <strong class="off">50% OFF</strong></h2>
          <div id="reduce" class="reduceNum ani_up5">
            <span class="reduce-msg">Packs left for today:</span>
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          <!-- <p class="sec1-outmsg ani_up5">to make your PC cleaner and safer with <strong>50% OFF</strong></p> -->
          <div class="price ani_up6">
              <strong>$0 <sup>*</sup><sub class="originPrice">$29.99</sub></strong>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=iu11preorder&ref=en-iu11preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu11preorder');">
                 Get It Now
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
          <div class="btn hd ani_up5"></div>
          <div class="box hd ani_up7"></div>
        </div>
      </div>
      <div class="right ani_up1">
         <h2 class="sec2-title ani_up2">IObit Uninstaller PRO Guarantees</h2>
         <ul class="rigt-con ani_up4">
           <h1 class="right-con-title">100% Clean Removal</h1>
           <li class="right-con-item">
             <img src="<?php echo getStaticUrl('images/sec2-icon.png')?>" alt="">
             <p>Batch uninstall unwanted programs, useless plug-ins </br> and default Windows apps.</p>
           </li>
           <li class="right-con-item">
             <img src="<?php echo getStaticUrl('images/sec2-icon.png')?>" alt="">
             <p>Completely remove 1000+ stubborn software & </br> bundleware that refuse to be removed. <i class="item-pro">*PRO ONLY</i></p>
           </li>
           <li class="right-con-item item3">
             <img src="<?php echo getStaticUrl('images/sec2-icon.png')?>" alt="">
             <p>Automatically clean leftovers and revert system</br> changes as if those programs have never been</br> installed before. <i class="item-pro">*PRO ONLY</i></p>
           </li>
         </ul>
      </div>
    </div>
    <!-- You Can Enjoy a Safer PC -->
    <div class="sec3 parts">
      <div class="left fl ani_up1">
        <h2 class="left-title ani_up4">All-round Software Health</h2>
        <ul class="left-text ani_up4">
          <li class="left-item ani_up5">
            <img src="<?php echo getStaticUrl('images/sec3-icon.png')?>" alt="" class="item-icon">
            <p class="item-text">Fix software or uninstallation issues easily to reduce security risks and make software run smoother.</p>
          </li>
          <li class="left-item ani_up5">
            <img src="<?php echo getStaticUrl('images/sec3-icon.png')?>" alt="" class="item-icon">
            <p class="item-text">Get rid of malicious and advertising plug-ins that target your personal data and slow down your system.<i class="item-pro">*PRO ONLY</i></p>
          </li>
          <li class="left-item ani_up5">
            <img src="<?php echo getStaticUrl('images/sec3-icon.png')?>" alt="" class="item-icon">
            <p class="item-text">Batch update your outdated software that may exist security vulnerabilities.<i class="item-pro">*PRO ONLY</i></p>
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
      <h1 class="sec4-title">With IObit Uninstaller PRO, You Can Enjoy More</h1>
      <div class="sec4-table ani_up2">
        <div class="table-head">
          <span class="table-head1">Your Current Version</span>
          <span class="table-head2">IObit Uninstaller PRO</span>
        </div>
        <div class="table-content">
          <table>
            <tr>
              <td class="list1 table-line1">1-Click to uninstall unwanted apps</td>
              <td class="list2 table-line2"><img src="<?php echo getStaticUrl('images/table-true.png')?>" alt="" class="table-true"></td>
              <td class="list3 list-a"><img src="<?php echo getStaticUrl('images/table-true.png')?>" alt="" class="table-true"></td>
            </tr>
            <tr>
              <td class="list1">Auto clean leftovers after uninstalling apps</td>
              <td class="list2 table-line2"><img src="<?php echo getStaticUrl('images/table-true.png')?>" alt="" class="table-false"></td>
              <td class="list3 list-a"><img src="<?php echo getStaticUrl('images/table-true.png')?>" alt="" class="table-true"></td>
            </tr>
            <tr>
              <td class="list1">Auto clean residual left by other uninstallers</td>
              <td class="list2 table-line2"><img src="<?php echo getStaticUrl('images/table-false.svg')?>" alt="" class="table-false"></td>
              <td class="list3 list-a"><img src="<?php echo getStaticUrl('images/table-true.png')?>" alt="" class="table-true"></td>
            </tr>
            <tr>
              <td class="list1">Uninstall 1000+ stubborn and bundled programs</td>
              <td class="list2 table-line2"><img src="<?php echo getStaticUrl('images/table-false.svg')?>" alt="" class="table-false"></td>
              <td class="list3 list-a"><img src="<?php echo getStaticUrl('images/table-true.png')?>" alt="" class="table-true"></td>
            </tr>
            <tr>
              <td class="list1">Remove malicious and advertising plug-ins</td>
              <td class="list2 table-line2"><img src="<?php echo getStaticUrl('images/table-false.svg')?>" alt="" class="table-false"></td>
              <td class="list3 list-a"><img src="<?php echo getStaticUrl('images/table-true.png')?>" alt="" class="table-true"></td>
            </tr>
            <tr>
              <td class="list1">Monitor installations and revert system changes</td>
              <td class="list2 table-line2"><img src="<?php echo getStaticUrl('images/table-false.svg')?>" alt="" class="table-false"></td>
              <td class="list3 list-a"><img src="<?php echo getStaticUrl('images/table-true.png')?>" alt="" class="table-true"></td>
            </tr>
            <tr>
              <td class="list1">1-Click to update outdated software with 50% larger database</td>
              <td class="list2 table-line2"><img src="<?php echo getStaticUrl('images/table-false.svg')?>" alt="" class="table-false"></td>
              <td class="list3 list-a"><img src="<?php echo getStaticUrl('images/table-true.png')?>" alt="" class="table-true"></td>
            </tr>
            <tr>
              <td class="list1">Premium technical support</td>
              <td class="list2"><img src="<?php echo getStaticUrl('images/table-false.svg')?>" alt="" class="table-false"></td>
              <td class="list3"><img src="<?php echo getStaticUrl('images/table-true.png')?>" alt="" class="table-true"></td>
            </tr>
            <tr>
              <td></td>
              <td class="list2"><div class="extra-box"></div></td>
              <td style="position: relative;">
                <a class="get-btn buybtn"
                 href="https://www.iobit.com/buy.php?product=iu11preorder&ref=en-iu11preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu11preorder');">
                 Get PRO for $0
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
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
        <!-- item  add on show class name -->
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
          <img src="<?php echo getStaticUrl('images/sec6-icon1.png')?>" alt="" width="98" height="98" class="ani_up3 active">
        </div>
        <div class="pageation pageationTwo ani_up7">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon2.png')?>" alt="" width="98" height="98" class="ani_up3 active">
        </div>
        <div class="pageation pageationThree ani_up4">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon3.png')?>" alt="" width="98" height="98" class="ani_up3 active">
        </div>
        <div class="pageation pageationFour ani_up5">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon4.png')?>" alt="" width="98" height="98" class="ani_up3 active">
        </div>
        <div class="pageation pageationFive ani_up6">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon5.png')?>" alt="" width="98" height="98" class="ani_up3 active">
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
        <img src="<?php echo getStaticUrl('images/floatlayer-box-new.png')?>" alt="box">
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
             href="https://www.iobit.com/buy.php?product=iu11preorder&ref=en-iu11preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu11preorder');">
             Get It Now
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
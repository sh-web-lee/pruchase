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
  $c_name = 'eniu11exp_p' . $date;
  $c_name_t='eniu11exp_t' . $date;
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

$data = json_decode(base64_decode(urldecode($_GET['data'])),true)['iu11pre'];
$sizemb = $data['filesize'] / (1024 * 1024);
$sizegb = $data['filesize'] / (1024 * 1024 * 1024);
$size = number_format(round(($sizegb >= 1) ? $sizegb : $sizemb, 2), 2);
$sizeStr = ($sizegb >= 1) ? ' GB' : ' MB';
//var_dump(str_check($data['file']));
function str_check($str){
    return empty($str) ? '' : $str;
}
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
        <a href="https://www.iobit.com/en/index.php" class="logo hd ani_up1" target="_blank">IObit</a>
        <div class="left ani_up2">
          <div class="box hd">box</div>
        </div>
        <div class="right ani_up2">
          <p class="name ani_up3">THE NEW</p>
          <h2 class="right-title ani_up4">IObit Uninstaller PRO Presale Starts</h2>
          <div id="reduce" class="reduceNum ani_up5">
            <span class="reduce-msg">Packs left for today:</span>
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>5</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div> 
          <p class="sec1-outmsg ani_up5">to make your PC cleaner and safer with <strong>50% OFF</strong></p>
          <div class="price ani_up6">
              <strong>$0 <sup>*</sup><sub class="originPrice">$29.99</sub></strong>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=iu11preorder&ref=en-iu11preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu11preorderexp');">
                 Pre-order Now
              </a>
            </div>
        </div>
      </div>
    </div>
    <!-- banner end -->
    <!-- With IObit Uninstaller -->
    <div class="sec2 parts">
      <div class="container">
		  <h2 class="ani_up2">What Did IObit Uninstaller 10 PRO Do for You?</h2>
		  <div class="sec2-content ">
			  <div class="sec2-left">
				  <div class="sec2-one"></div>
				  <div class="sec2-two"></div>
				  <div class="sec2-three"></div>
			  </div>
			  <div class="sec2-right">
				  <ul>
				  	<li class="ani_up5">
						<p>Uninstall <strong class="sec2-num ani-word"><?= str_check($data['soft'])?></strong> unwanted programs and apps.</p>
					</li>
					<li class="ani_up6">
						<p>Remove <strong class="sec2-num ani-word"><?= str_check($data['plugin']+$data['plugin-mp'])?></strong> unwanted & malicious plug-ins.</p>
					</li>
					<li class="ani_up7">
						<p>Delete <strong class="sec2-num ani-word"><?= str_check($data['file']); ?></strong> files and <strong class="sec2-num ani-word"><?= str_check($data['reg']); ?></strong> registries.</p>
					</li>
					<li class="ani_up8">
						<p>Update <strong class="sec2-num ani-word"><?= str_check($data['update']);?></strong> outdated software to fix security holes.</p>
					</li>
				  </ul>
			      <div class="sec2-right-circul ani_up9">
					  <div class="sec2-right-ram">
                          <?php if ($sizemb >= 1): ?>
                              <h3><strong class="ram ani-word"><?= $size; ?></strong><span><?= $sizeStr; ?></span></h3>
                              <p>Save more space</p>
                          <?php else: ?>
                              <h3><strong class="ram ani-word">More</strong></h3>
                              <p>Disk space</p>
                          <?php endif; ?>
					  </div>
					  <div class="sec2-right-auto">
						  <h3>Auto</h3>
						  <p>Intelligent software assistant</p>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
    </div>
    <!-- You Can Enjoy a Safer PC -->
    <div class="sec3 parts">
       <div class="container">
		   <h2 class="ani_up4">New IObit Uninstaller 11 PRO Makes Uninstall Easier and Cleaner</h2>
		   <div class="sec3-content">
			    <div class="sec3-left">
					<ul>
						<li>
							<h3 class="ani_up5">
								In-depth Cleanup
								<span>IMPROVED</span>
							</h3>						
							<p class="ani_up6">Easily uninstall unwanted programs, plugins, apps as if they have never been installed before.</p>
						</li>
						<li>
							<h3 class="ani_up7">Stubborn Removal
								<span>1000+</span></h3>
							<p class="ani_up8">Completely uninstall 1000+ stubborn software & bundleware that refuse to be removed.</p>
						
						</li>
						<li>
							<h3 class="green ani_up9">Software Health
							<span>NEW</span></h3>
							<p class="ani_up10">Fix software or uninstallation issues easily to reduce security risks and make software run smoother.</p>
							
						</li>
					</ul>
				</div>
		        <div class="sec3-right ani_up11"></div>
		   </div>	  
	   </div>
    </div>
    <!-- Others Along with -->
    <div class="sec4 parts">
      <div class="container">
		  <h2 class="ani_up4">Back to PRO, Continue to Enjoy Exclusive Priviliges</h2>
		  <table class="ani_up4">
			  <tr>
			  	<td class="table-word"> 
				 <p class="improve ani_up6">1-Click to uninstall unwanted programs<span>Improved</span></p>
				 
				</td>
			    <td class="table-border table-two">
					<img src="<?php echo getStaticUrl('images/yes.svg')?>" class=" ani_up5">
					<div class="current ">
						<p class="ani_up5">Your Current Version</p>
						
					</div>
				</td>
			    <td class="table-border2 table-three">
					<img src="<?php echo getStaticUrl('images/yes.svg')?>" class=" ani_up5">
					<div class="pro">
						<p class="ani_up5">IObit Uninstaller 11 PRO</p>						
					</div>
				</td>
			  </tr>
			  <tr>
			  	<td class="table-word">
					<p class="improve ani_up6">
						Auto clean leftovers after uninstalling apps
					   <span>Improved</span>
					</p>
					
				</td>
			    <td class="table-border table-two "><img src="<?php echo getStaticUrl('images/yes.svg')?>" class=" ani_up6"></td>
			    <td class="table-border2 table-three "><img src="<?php echo getStaticUrl('images/yes.svg')?>" class=" ani_up6"></td>
			  </tr>
			  <tr>
			  	<td class="table-word">
					<p class="ani_up7 improve">Auto clean residual left by other uninstallers</p>
				</td>
			  	<td class="table-border table-two "><img src="<?php echo getStaticUrl('images/no.svg')?>" class=" ani_up7"></td>
			  	<td class="table-border2 table-three "><img src="<?php echo getStaticUrl('images/yes.svg')?>" class=" ani_up7"></td>
			  </tr>
			  <tr>
			  	<td class="table-word">
					<p class="improve i-span ani_up8">Uninstall stubborn and bundled programs<span>1000+</span></p>
					
				</td>
			  <td class="table-border table-two "><img src="<?php echo getStaticUrl('images/no.svg')?>" class=" ani_up8"></td>
			  <td class="table-border2 table-three "><img src="<?php echo getStaticUrl('images/yes.svg')?>" class=" ani_up8"></td>
			  </tr>
			  <tr>
			  	<td class="table-word">
					<p class="ani_up9 improve">Identify & remove malicious and advertising plug-ins</p>
				</td>
			  	<td class="table-border table-two "><img src="<?php echo getStaticUrl('images/no.svg')?>" class=" ani_up9"></td>
			  	<td class="table-border2 table-three "><img src="<?php echo getStaticUrl('images/yes.svg')?>" class=" ani_up9"></td>
			  </tr>
			  <tr>
			  	<td class="table-word">
					<p class="improve ani_up10">Monitor installations and revert system changes<span>Improved</span></p>
					
				</td>
			  	<td class="table-border table-two "><img src="<?php echo getStaticUrl('images/no.svg')?>" class=" ani_up10"></td>
			  	<td class="table-border2 table-three "><img src="<?php echo getStaticUrl('images/yes.svg')?>" class=" ani_up10"></td>
			  </tr>
			  <tr>
			  	<td class="table-word">
					<p class="new improve ani_up11">Fix uninstallation issues to software run smoother<span>New</span></p>
					
				</td>
			  	<td class="table-border table-two "><img src="<?php echo getStaticUrl('images/no.svg')?>" class=" ani_up11"></td>
			  	<td class="table-border2 table-three "> <img src="<?php echo getStaticUrl('images/yes.svg')?>" class=" ani_up11"></td>
			  </tr>
			  <tr>
			  	<td class="table-word">
					<p class="improve ani_up12">1-Click to update outdated software<span>50% more</span></p>
					
				</td>
			  	<td class="table-border table-two "><img src="<?php echo getStaticUrl('images/no.svg')?>" class=" ani_up12"></td>
			  	<td class="table-border2 table-three "><img src="<?php echo getStaticUrl('images/yes.svg')?>" class=" ani_up12"></td>
			  </tr>
			  <tr>
			  	<td class="table-word table-he">
					<p class="ani_up13">Premium technical support</p>
				</td>
			  	<td class="table-border table-two table-he"><img src="<?php echo getStaticUrl('images/no.svg')?>" class="ani_up13"></td>
			  	<td class="table-border2 table-three  table-he table-special">
					<img src="<?php echo getStaticUrl('images/yes.svg')?>" class="ani_up13">
				</td>
			  </tr>
		  </table>
	      <div class="sec4-line  ani_up13"></div>
	  </div>
    </div>
    <!-- Take the Numbers & Words for It -->
    <div class="sec5 parts">
      <div class="sec5-title ani_up2">Take the Numbers & Words for It</div>
      <ul class="sec5-con">
        <li class="sec5-item ani_up4">
          <icon class="tips one hd ani_up4">icon</icon>
          <p>53M+</p>
          <span>Downloads</span>
        </li>
        <li class="sec5-item ani_up4">
          <icon class="tips two hd ani_up4">icon</icon>
          <p>95%</p>
          <span>User Satisfaction</span>
        </li>
        <li class="sec5-item ani_up4">
          <icon class="tips three hd ani_up4">icon</icon>
          <p>1000+</p>
          <span>Media Recommendations</span>
        </li>
      </ul>
    </div>
    <div class="sec6 parts">
      <ul class="text ani_up2">
        <!-- item add on show class name -->
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
          <img src="<?php echo getStaticUrl('images/sec6-icon1.png')?>" alt="" width="98" height="98" class="ani_up3">
        </div>
        <div class="pageation pageationTwo ani_up7">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon2.png')?>" alt="" width="98" height="98" class="ani_up3">
        </div>
        <div class="pageation pageationThree ani_up4">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon3.png')?>" alt="" width="98" height="98" class="ani_up3">
        </div>
        <div class="pageation pageationFour ani_up5">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon4.png')?>" alt="" width="98" height="98" class="ani_up3">
        </div>
        <div class="pageation pageationFive ani_up6">
          <i class="circle hd"></i>
          <img src="<?php echo getStaticUrl('images/sec6-icon5.png')?>" alt="" width="98" height="98" class="ani_up3">
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
            href="https://www.iobit.com/buy.php?product=iu11preorder&ref=en-iu11preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu11preorderexp');">
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
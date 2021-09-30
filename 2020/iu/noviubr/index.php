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
  $cName='noviubr'.$date;
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
$refStr = empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr .= empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr .= empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr .= empty($_GET['r'])?'':('-'.$_GET['r']);
$ver = empty($_GET['ver']) ? '' : $_GET['ver'];
$ver_arr = explode('.',$ver);
$display = (in_array($ver_arr[0],['9','8'])) ? 0 : 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% OFF to get rid of unwanted programs, plug-ins, Windows Apps - Black Friday Sale | IObit</title>
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
        <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <div class="title">
          <h1>BLACK FRIDAY EXCLUSIVE SAlE</h1>
          <p>Best Chance to Save Big – Once Per Year Only!</p>
        </div>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="IObit Uninstaller 10 PRO"/>
          </div>
          <div class="right fr">
            <h2>IObit Uninstaller 10 PRO</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> seats left now!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S* Left</p>
              </div>
              <p><strong>$<big>12</big>.97</strong> <del>$42.99</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu<?= $refStr; ?>&refs=purchase_iubf" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-bf');">
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

    <!-- intro start -->
    <div class="intro">
	  <div class="intro_arrow">
		  <img src="<?php echo getStaticUrl('images/free-arrow.png')?>">
		  <p>Get PRO to</p>
	  </div>
      <h2>Remove Anything Unwanted with Ease</h2>
      <div class="wrapper intro-box">
        <div class="intro-img">
          <img src="<?php echo getStaticUrl('images/introimg.png')?>">
        </div>
        <div class="intro-txt">
          <div class="fast">
            <h3>Complete Uninstall</h3>
            <p>Remove every trace of unwanted programs and plug-ins – even the tricky ones.</p>
          </div>
          <div class="fast-list">
          	<div class="fastbox">
              <div class="one">
                <dl>
                  <dt><b>Remove stubborn programs</b></dt>
                  <dd>that can't be uninstalled through standard uninstall.</dd>
                </dl>
                <dl>
                  <dt><b>Auto Delete</b></dt>
                  <dd>
                      leftovers of each uninstalled programs.
                  </dd>
                </dl>
                <dl>
                  <dt><b>In-depth cleaning</b></dt>
                  <dd>
                      by deleting logged items that were created during programs installation.
                  </dd>
                </dl>
              </div>
              <div class="two">
              	<dl>
                  <dt><b>Remove leftovers</b></dt>
                  <dd>
                      left by the uninstallation of other uninstallers.
                  </dd>
                </dl>
                <dl>
                  <dt><b>Remove bundled programs</b></dt>
                  <dd>
                      that secretly installed alongside freeware to advertise or steal personal data.
                  </dd>
                </dl>
                <dl>
                  <dt><b>Remove malicious/advertising plug-ins</b></dt>
                  <dd>
                      that collect your browser data and redirect you to malicious websites.
                  </dd>
                </dl>
              </div>
              
            </div>
            <div class="line"><span class="red"></span></div>
            </div>
        </div>
      </div>
      <span class="intro-bg"></span>
    </div>
    <!-- intro end -->
    
    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
		  <h2>Unlock All PRO-only Benefits and Improvements</h2>
		  <table class="tablesecl1" <?php echo $display ? 'style="display: none;"' : ''?>>
		    <thead>
		      <tr>
		        <th class="text"></th>
				<th class="space"></th>
		        <th class="itema">
		          <div class="free">Your current version</div>
		        </th>
				<th class="space"></th>
		        <th class="itemb">
		          <div class="pro">IObit Uninstaller 10<big>PRO</big></div>
		        </th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td class="virtue">Remove programs, plug-ins, and windows apps</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="red">50% faster</i></td>
		      </tr>
		      <tr class="two">
		        <td class="virtue">Monitor changes in real time when installing programs</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Scan leftovers of already uninstalled programs <sup class="new">improved</sup></td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="red">30% more</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Remove programs that refuse to be uninstalled <sup class="new">improved</sup></td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Remove bundleware that installed without notice</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Remove malicious and advertising plug-ins with 1-click</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto delete items created during installation</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto clean leftovers that can’t be gotten rid of easily</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Update all outdated programs with 1-click <sup class="new">improved</sup></td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Block site notifications for smooth browsing experience</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
			  <tr>
			    <td class="virtue">Auto update when a new version is available</td>
				<td class="space"></td>
			    <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
			    <td class="itemb"><i class="all-icons red">√</i></td>
			  </tr>
		    </tbody>
		    <tfoot>
		      <tr>
		        <th></th>
				<th class="space"></th>
		        <th class="itema"></th>
				<th class="space"></th>
		        <th class="itemb"></th>
		      </tr>
		    </tfoot>
		  </table>
		  
		  
		  <table class="tablesecl2" <?php echo $display ? '' : 'style="display: none;"'; ?>>
		    <thead>
		      <tr>
		        <th class="text"></th>
		    	<th class="space"></th>
		        <th class="itema">
		          <div class="free">Your current version</div>
		        </th>
		    	<th class="space"></th>
		        <th class="itemb">
		          <div class="pro">IObit Uninstaller 10<big>PRO</big></div>
		        </th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td class="virtue">Remove programs, plug-ins, and windows apps</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr class="two">
		        <td class="virtue">Monitor changes in real time when installing programs</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Remove programs that refuse to be uninstalled</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Remove bundleware that installed without notice</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Remove malicious and advertising plug-ins with 1-click</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto delete items created during installation</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto clean leftovers that can’t be gotten rid of easily</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Update all outdated programs with 1-click</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto update when a new version is available</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		    </tbody>
		    <tfoot>
		      <tr>
		        <th></th>
		    	<th class="space"></th>
		        <th class="itema"></th>
		    	<th class="space"></th>
		        <th class="itemb"></th>
		      </tr>
		    </tfoot>
		  </table>
		  
	  </div>
    </div>
    <!-- comparison end -->

    

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>DON'T MISS OUT!</h3>
        <h2>Get Exclusive 70% OFF to Care You and Your PC for a Whole Year</h2>
        <div class="price">
          <p><strong>$<big>12</big>.97</strong> <del>$42.99</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu<?= $refStr; ?>&refs=purchase_iubf" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-bf');">
            <i class="all-icons"></i>
            <span>Activate Now</span>
          </a>
          <p id="footdown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S* Left</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- review start -->
    <div class="review wrapper">
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
                "This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."
              </p>
              <cite>Ali Tekin</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed."
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
                We're confident that activating PRO edition will complete uninstall programs for affordable price!
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
            <dd>*.Data may vary based on different system or computer.</dd>
            <dd>
              *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
            </dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
        </div>
        <!-- footer end -->
      </div>
    </div>
	
	<!-- float start -->
	<div class="floatlayer">
	    <div class="wrapper clearfix">
	      <img class="fl" src="<?php echo getStaticUrl('images/asc-float-box.png')?>" alt=""/>
	      <div class="exc fl">
	        <div class="count">
	          <h5>Get Exclusive <span>70% OFF</span> to Care Your PC for a Whole Year</h5>
	          <p id="floatdown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S*</p>
	        </div>
	      </div>
	      <div class="price fr">
	        <p><strong>$<big>12</big>.97</strong> <del>$42.99</del></p>
	        <a class="buybtn" href="https://www.iobit.com/buy.php?product=2020iu3pc1297&ref=br_iu<?= $refStr; ?>&refs=purchase_iubf" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-bf');">
	          <div class="inner">
	            <i class="all-icons"></i>
	            <span>Activate Now</span>
	          </div>
	        </a>
	      </div>
	    </div>
	</div>
	<!-- float end -->
  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=2020iu3pc1197&ref=br_iu" + refStr + "&refs=purchase_iubf&tw=-8";
    var _ga = "ga('send', 'event', 'iubuypop', 'buy', 'iupurchase-bf');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.mousewheel.min.js')?>"></script>
</body>
</html>
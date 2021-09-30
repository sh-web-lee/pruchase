<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'decimfxr_p' . $date;
    $c_name_t = 'decimfxr_t' . $date;
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = rand(50, 66);
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t, $totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

$viewNum=rand(88,102);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}
$refStr = empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr .= empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr .= empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr .= empty($_GET['r'])?'':('-'.$_GET['r']);
$ver = empty($_GET['ver']) ? '' : $_GET['ver'];
$ver_arr = explode('.',$ver);
$display = (in_array($ver_arr[0],['6','7'])) ? 0 : 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% OFF to protect PC from security threats in real time - Christmas Sale | IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
        <h1 class="title">Big Sale Last Chance to Save Big!</h1>
        <div class="clearfix">
          <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
            <div class="discount">70% OFF</div>
          </div>
          <div class="msgbox fl">
            <div class="change-title"><h2><span>70%</span> Discount Limited to FIRST 999 Purchase</h2></div>
            <div class="numbox">
              <div id="flip" class="flipNum">
                <div class="numwrap">
                  <div class="listbox">
                    <span class="list">
                      <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                    </span>
                  </div>
                </div>
                <div class="numwrap">
                  <div class="listbox">
                    <span class="list">
                      <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                    </span>
                  </div>          
                </div>
                <div class="numwrap last">
                  <div class="listbox">
                    <span class="list">
                      <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                    </span>
                  </div> 
                </div>
              </div>
              <span class="numwrap-seats">Seats Left Now</span>
            </div>
            <ul class="price">
              <li class="first">
                <p><strong class="change-price">$<big>16.99</big></strong> <del>$54.95</del></p>
                <p>1 year subscription / 3 PCs</p>
              </li>
              <li>
                <a class="buybtn exbtn"
                   href="https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=xr_imf<?= $refStr; ?>&refs=purchase_imfxr" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-xr');">
                  Activate Now
                </a>
              </li>
            </ul>
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
      <h2>Unlock Full-round Protection and Enjoy Top Cyber Security</h2>
      <div class="wrapper intro-box">
        <div class="intro-img">
          <img src="<?php echo getStaticUrl('images/introimg.png')?>">
        </div>
        <div class="intro-txt">
			<img src="<?php echo getStaticUrl('images/claus.png')?>" class="claus">
          <div class="fast">
            <h3>Always Stay Safe Online</h3>
            <p>Protect your PC, your data and your privacy away from online threats.</p>
          </div>
          <div class="fast-list">
          	<div class="fastbox">
          	  <div class="one">
          	    <dl>
          	      <dt><b>Bitdefender & IObit Engines</b></dt>
          	      <dd>Enhanced multi-engines work to detect & block over 209,000,000 security threats.</dd>
          	    </dl>
          	    <dl>
          	      <dt><b>Ransomware Protection</b></dt>
          	      <dd>
          	          Stop ransomware attacks trying to hack into your computer in real time.
          	      </dd>
          	    </dl>
          	  </div>
          	  <div class="two">
          	    <dl>
          	      <dt><b>Personal Data Protection</b></dt>
          	      <dd>
          	          No one can access your contacts, financial files or personal data without password.
          	      </dd>
          	    </dl>
          	    <dl>
          	      <dt><b>Safer Online Surfing</b></dt>
          	      <dd>
          	          Auto delete online traces and block malicious sites, links and intruders.
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
    <div class="midcenter">
    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
		  <h2>Unlock All PRO-Only Benefits and Improvements</h2>
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
				  <img src="<?php echo getStaticUrl('images/snow.png')?>" class="chrsnow">
		          <div class="pro">IObit Malware Fighter 8<big>PRO</big></div>
		        </th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td class="virtue">Anti-malware with IObit malware database <sup class="green">IMPROVED</sup></td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="red">100% Larger</i></td>
		      </tr>
		      <tr class="two">
		        <td class="virtue">Quickly detect threats hiding in your computer <sup class="green">IMPROVED</sup></td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="red">50% Faster</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Detect and identify malicious links in your web mails <sup class="new">NEW</sup></td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Bitdefender engine to detect 200,000,000+ threats</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Protect against ransomware attacks in real time</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Full anti-malware ability with unique "Triple-Core" engine</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Protect your personal data with password</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Safeguard camera against unauthorized access <sup class="green">IMPROVED</sup></td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto clean surfing trace with browser anti-tracking <sup class="green">IMPROVED</sup></td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Prevent virus infection carried by USB disk</td>
		    	<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    	<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto update to the latest version</td>
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
					<img src="<?php echo getStaticUrl('images/snow.png')?>" class="chrsnow">
		          <div class="pro">IObit Malware Fighter 8<big>PRO</big></div>
		        </th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td class="virtue">Anti-malware with IObit malware database</td>
		    			<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
		    			<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr class="two">
		        <td class="virtue">Basic real-time protection against malicious behaviors</td>
		    			<td class="space"></td>
		          <td class="itema"><i class="all-icons black">√</i></td>
		    			<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Detect 200,000,000+ threats with Bitdefender engine</td>
		    			<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    			<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Protect against ransomware attacks in real time</td>
		    			<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    			<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Full anti-malware ability with unique "Triple-Core" engine</td>
		    			<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    			<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Boot-time disk protection against malicious attacks</td>
		    			<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    			<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Safeguard your camera against unauthorized access</td>
		    			<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    			<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto clean surfing trace with browser anti-tracking</td>
		    			<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    			<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Prevent virus infection carried by USB disk</td>
		    			<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		    			<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto update to the latest version</td>
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
        <h2>Get Exclusive 70% OFF for Smarter, Faster and Better Online Protection</h2>
        <div class="price">
          <p><strong>$<big>16</big>.99</strong> <del>$54.95</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=xr_imf<?= $refStr; ?>&refs=purchase_imfxr" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-xr');">
            <i class="all-icons"></i>
            <span>Activate Now</span>
          </a>
          <p id="footdown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S* Left</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->
	</div>
    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software.png')?>" alt="software"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>
                "The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similartools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots."
              </p>
              <cite>software.informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="gelu-batir"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends."
              </p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="adam-cullen"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "Overall with IObit products I have gotten great results even with the free versions as they have helped me and my computer. I would recommend IObit and all of their programs to anyone looking for protection and speediness of their computer and making life just that bit easier."
              </p>
              <cite>Adam Cullen</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="david-cassidy"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter."
              </p>
              <cite>David Cassidy</cite>
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
                We’re confident that activating PRO edition will protect your PC all-round for affordable price!
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
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	    <div class="imgbox fl">
	      <img src="<?php echo getStaticUrl('images/asc-box-flayer.png')?>" alt=""/>
	      <div class="discount">70% OFF</div>
	    </div>
	    <div class="numbox fl">
	      <div id="fliptwo" class="flipNum">
	        <div class="numwrap">
	          <div class="listbox">
	            <span class="list">
	              <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
	            </span>
	          </div>
	        </div>
	        <div class="numwrap">
	          <div class="listbox">
	            <span class="list">
	              <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
	            </span>
	          </div>          
	        </div>
	        <div class="numwrap last">
	          <div class="listbox">
	            <span class="list">
	              <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
	            </span>
	          </div> 
	        </div>
	      </div>
	      <p class="change"><b class="viewNum"><?php echo $viewNum;?></b>visitors now,<b class="packsNum">50</b>seats left now.</p>
	    </div>
	    <ul class="price fl">
	      <li class="first">
	        <p><strong class="change-price">$<big>16.99</big></strong> <del>$54.95</del></p>
	        <p>1 year subscription / 3 PCs</p>
	      </li>
	      <li>
	        <a class="buybtn exbtn"
	           href="https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=xr_imf<?= $refStr; ?>&refs=purchase_imfxr"
	           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-xr');">
	          Activate Now
	        </a>
	      </li>
	    </ul>
	  </div>
	</div>
	<!-- float end -->
  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=2020imf3pc1599&ref=xr_imf1599" + refStr + "&refs=purchase_imfxr&tw=-8";
    var _ga = "ga('send', 'event', 'imfbuypop', 'buy', 'imfpurchase-xr');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.mousewheel.min.js')?>"></script>
</body>
</html>
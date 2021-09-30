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
    $c_name = 'decascxr_p' . $date;
    $c_name_t = 'decascxr_t' . $date;
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
$display = (in_array($ver_arr[0],['12','13'])) ? 0 : 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% OFF to Get Cleaner, Faster and More Secure PC - Christmas Sale | IObit</title>
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
                <p><strong class="change-price">$<big>14.77</big></strong> <del>$49.99</del></p>
                <p>1 year subscription / 3 PCs</p>
              </li>
              <li>
                <a class="buybtn exbtn"
                   href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_asc<?= $refStr; ?>&refs=purchase_ascxr"
                   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-xr');">
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
      <h2>Optimize Slow PC with AI-powered Analysis</h2>
      <div class="wrapper intro-box">
        <div class="intro-img">
          <img src="<?php echo getStaticUrl('images/introimg.png')?>">
        </div>
        <div class="intro-txt">
			<img src="<?php echo getStaticUrl('images/claus.png')?>" class="claus">
          <div class="fast">
            <h3>AI Scan for Faster PC</h3>
            <p>Optimize your PC with AI mode for a quick system response, Internet speed and all-round privacy protection.</p>
          </div>
          <div class="fast-list">
          	<div class="fastbox">
              <div class="one">
                <dl>
                  <dt><b>200%* Faster PC</b></dt>
                  <dd>Auto clean and optimize system to make computer 200%* faster.</dd>
                </dl>
                <dl>
                  <dt><b>300%* Faster Internet</b></dt>
                  <dd>
                    Optimize network to accelerate download, surfing, gaming, YouTube viewing 300%* faster.
                  </dd>
                </dl>
              </div>
              <div class="two">
                <dl>
                  <dt><b>Privacy Shield</b></dt>
                  <dd>
                    Stop unauthorized access to your sensitive data like contact, e-mail data, Dropbox etc. 
                  </dd>
                </dl>
                <dl>
                  <dt><b>Safe Browsing</b></dt>
                  <dd>
                    Auto clear traces to prevent trackers from snooping on what you read, view and purchase.
                  </dd>
                </dl>
              </div>
              
            </div>
            <div class="line"><span class="red"></span></div>
            </div>
        </div>
      </div>
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
		          <div class="pro">Advanced SystemCare 14<big>PRO</big></div>
		        </th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td class="virtue">Clean junk files to free up disk space <sup class="green">IMPROVED</sup></td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="red">40% More</i></td>
		      </tr>
		      <tr class="two">
		        <td class="virtue">Optimize startup items for faster PC boot <sup class="green">IMPROVED</sup></td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="red">50% More</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Fully analyze and optimize system with AI mode <sup class="new">NEW</sup></td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Turn on Antivirus Protection & Firewall with 1-click <sup class="new">NEW</sup></td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto optimize CPU and RAM for 200% faster PC running</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Accelerate internet speed up to 300% faster</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Block unauthorized access to your private files</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto remove privacy traces for safe browsing <sup class="green">IMPROVED</sup></td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Prevent spyware and malware in real time <sup class="green">IMPROVED</sup></td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Reduce and repair system crashes and errors</td>
				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
			  <tr>
			    <td class="virtue">Update software to fix security vulnerabilities <sup class="green">IMPROVED</sup></td>
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
		          <div class="pro">Advanced SystemCare 14<big>PRO</big></div>
		        </th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td class="virtue">Basic system clean, fix and optimization</td>
		  				<td class="space"></td>
		        <td class="itema"><i class="all-icons black">√</i></td>
		  				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr class="two">
		        <td class="virtue">Fully analyze and optimize system with AI mode</td>
		  				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		  				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto optimize CPU and RAM for 200% faster PC running</td>
		  				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		  				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Accelerate internet speed up to 300% faster</td>
		  				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		  				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Block unauthorized access to your private files</td>
		  				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		  				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Auto remove privacy traces for safe browsing</td>
		  				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		  				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Prevent spyware and malware in real time</td>
		  				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		  				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Reduce and repair system crashes and errors</td>
		  				<td class="space"></td>
		        <td class="itema"><i class="all-icons">×</i></td>
		  				<td class="space"></td>
		        <td class="itemb"><i class="all-icons red">√</i></td>
		      </tr>
		      <tr>
		        <td class="virtue">Update software to fix security vulnerabilities</td>
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
        <h2>Get Exclusive 70% OFF to Care You and Yours for a Whole Year.</h2>
        <div class="price">
          <p><strong>$<big>14</big>.77</strong> <del>$49.99</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_asc<?= $refStr; ?>&refs=purchase_ascxr" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-xr');">
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
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>
                "Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I have tried various programs over time which have promised to keep my computers running problem free. I turned to ASC years ago using the free version at first. Finding that I no longer suffered from the niggles and bloating that occurs I upgraded to the Paid version and have never looked back since. Advanced SystemCare Pro is the only one I would recommend based on my experiences. I also use IObit Uninstaller, Smart Defrag and Driver Booster just make things much better."
              </p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/Brendon.png')?>" alt="Brendon-O'Rourke"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I have been using ASC for years now. I have recently tested the latest version V14. And it is by far the most comprehensive version to date. IObit continue to improve their Products and Technology. With more options and easier navigation that help find solutions. I don't need to shop elsewhere."
              </p>
              <cite>Brendon O'Rourke</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/Anthony-Baker.png')?>" alt="Anthony-Baker"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "The features in Advanced System Care (ASC) 14 are awesome and the overall appearance is clean, fresh, and modern. I have used other all-in-one system maintenance programs, but none have been as effective as ASC 14. The program reduces and eliminates the use of non-essential resources which allow your computer to run cooler and more efficiently. This product is amazing and the best in class. If you care about your laptop or pc, use Advanced System Care 14!"
              </p>
              <cite>Anthony-Baker</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/Ryan-Hill.png')?>" alt="Ryan-Hill"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "Advanced system care 14 is the most complete all in one system on the market. I've been using the products for years now and every year there getting better the new easy interface the deep cleaning you get with the software its breeze to use one click and its doing its magic all the other options that come within system are great also the empty folder finder the internet booster even game booster rocks!! I think it's one of the best cleaning systems out there today."
              </p>
              <cite>Ryan-Hill</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/Lyle-Stelmaschuk.png')?>" alt="Lyle-Stelmaschuk"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I have purchased many different software programs to speed up and fix problems with my PC. Unfortunately, most of them really didn't help or make a difference until I tried out Advanced System Care 14. I love that there are so many options and solutions to fix any problem. It's amazing how much faster my PC is now after the first scan and repair. Definitely the best product I have come across."
              </p>
              <cite>Lyle-Stelmaschuk</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "I love using Advanced SystemCare 14 Beta. It is fast. It cleans up privacy traces, junk files and registry fragments. I especially like the sensitive area access permission pop-up. The first time an app tries to access sensitive files, a window opens to either allow access or deny. Once permission is granted for an app, the pop-up no longer occurs for that app. I know my sensitive files will be kept safe."
              </p>
              <cite>Richard Preston</cite>
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
                We’re confident that activating PRO edition will improve your PC performance for affordable price!
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
	        <p><strong class="change-price">$<big>14.77</big></strong> <del>$49.99</del></p>
	        <p>1 year subscription / 3 PCs</p>
	      </li>
	      <li>
	        <a class="buybtn exbtn"
	           href="https://www.iobit.com/buy.php?product=2020asc3pc1477&ref=xr_asc<?= $refStr; ?>&refs=purchase_ascxr"
	           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-xr');">
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
    var _href = "https://www.iobit.com/buy.php?product=2020asc3pc1377&ref=xr_asc1377" + refStr + "&refs=purchase_ascxr&tw=-8";
    var _ga = "ga('send', 'event', 'ascbuypop', 'buy', 'ascpurchase-xr');";
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
<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (!empty($_GET['action']) && ($_GET['action'] == 'getSales')) {
    $date = $_GET['d'];
    $cName = 'decimfxre' . $date;
    $cookie = $_COOKIE[$cName];
    if ($cookie !== null) {
        $packsNum = $_COOKIE[$cName];
        if ($packsNum >= 0) {
            $packsNum--;
            setcookie($cName, $packsNum);
        } else {
            $packsNum = 0;
        }
    } else {
        $packsNum = 50;
        setcookie($cName, $packsNum);
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
$ver_arr = explode('.', $ver);

function normal($num)
{
    return empty($num) ? '' : preg_replace('/(?<=[0-9])(?=(?:[0-9]{3})+(?![0-9]))/', ',', $num);
}

$data = json_decode(base64_decode(urldecode($_GET['data'])), true);

$sizemb = $data['junk'] / (1024 * 1024);
$sizegb = $data['junk'] / (1024 * 1024 * 1024);
$junk = number_format(round(($sizegb >= 1) ? $sizegb : $sizemb, 2), 2);
$junkStr = $junk . (($sizegb >= 1) ? ' GB' : ' MB');
if ($junk == 0.00)
    $junkStr = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% OFF to Get Back to IObit Malware Fighter PRO - Christmas Sale | IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700'>
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
                <p><strong class="change-price">$<big>15.99</big></strong> <del>$54.95</del></p>
                <p>1 year subscription / 3 PCs</p>
              </li>
              <li>
                <a class="buybtn exbtn"
                   href="https://www.iobit.com/buy.php?product=2020imf3pc1599&ref=xr_imfe<?= $refStr; ?>&refs=purchase_imfxr"
                   onclick="ga('send', 'event', 'imfebuy', 'buy', 'imfepurchase-xr');">
                  Renew Now
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <p>Since Being With You, </p>
        <h2 class="btitle">What Have IObit Malware Fighter PRO Helped You</h2>
        <div class="panel clearfix">
          <div class="screen fl">
            <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="Advanced SystemCare Pro"/>
          </div>
          <div class="fl">
            <dl class="one clearfix <?php echo empty($data['fileto'])?'':'datahide';?>">
              <dd>
                <b>Remove <span><?= normal($data['fileto']); ?></span> security threats</b>
                <p>for safer personal data & PC</p>
              </dd>
            </dl>
            <dl class="two clearfix <?php echo empty($data['rsto'])?'':'datahide';?>">
              <dd>
                <b>Stop <span><?= normal($data['rsto']);?></span> ransomware attacks</b>
                <p>trying to hijack your files & PC</p>
              </dd>
            </dl>
            <dl class="three clearfix <?php echo empty($data['camto'])?'':'datahide';?>">
              <dd>
                <b>Detect <span><?= normal($data['camto']);?></span> unauthorized access</b>
                <p>to safeguard your camera</p>
              </dd>
            </dl>
			<dl class="four clearfix <?php echo empty($data['traceto'])?'':'datahide';?>">
			  <dd>
			    <b>Erase <span><?= normal($data['traceto']);?></span> online traces</b>
			    <p>to avoid snoopers & privacy leak</p>
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
        <h2 class="btitle">Without IObit Malware Fighter PRO Now,</h2>
        <p>See What You’ve Already Lost</p>
        <table>
          <thead>
            <tr>
              <th class="text"></th>
              <th class="itema">
                <div class="free">Before</div>
              </th>
			  <th class="space"></th>
              <th class="itemb">
				<img src="<?php echo getStaticUrl('images/snow.png')?>" class="chrsnow" alt=""/>
				<img src="<?php echo getStaticUrl('images/sadface.png')?>" class="chrssad" alt=""/>
                <div class="pro">Now</div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="virtue">Bitdefender Anti-virus Engine</td>
              <td class="itema">200+ Million Detection</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr class="two">
              <td class="virtue">Password-protect Personal Data</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr class="three">
              <td class="virtue">Powerful Ransomware Protection</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Auto Online Trace Cleaning</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Untrust Access Block</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Infected USB Protection</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Real-time PC Protection</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th></th>
              <th class="itema"></th>
			  <th class="space"></th>
              <th class="itemb"></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2 class="btitle">Now Come Back to New IObit Malware Fighter 8 PRO to enjoy</h2>
        <div class="clearfix">
          <dl>
            <dt></dt>
            <dd>
              <strong>Triple</strong>
              <p>Anti-virus Engines</p>
            </dd>
          </dl>
          <dl>
            <dt></dt>
            <dd>
              <strong>Larger</strong>
              <p>Anti-malware Database</p>
            </dd>
          </dl>
          <dl>
            <dt></dt>
            <dd>
              <strong>Safer</strong> 
              <p>Surfing Privacy & Personal Data</p>
            </dd>
          </dl>
        </div>
        <div class="price">
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=2020imf3pc1599&ref=xr_imfe<?= $refStr; ?>&refs=purchase_imfxr" onclick="ga('send', 'event', 'imfebuy', 'buy', 'imfepurchase-xr');">
            Renew Now & Save 70%
          </a>
        </div>
      </div>
    </div>
    <!-- centbuy end -->
	
    <!-- review start -->
    <div class="review wrapper">
      <h2 class="btitle">Trusted by 30,000,000 Users</h2>
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
                "I am very satisfied with your product IObit Malware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends."
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
            <p><strong class="change-price">$<big>15.99</big></strong> <del>$54.95</del></p>
            <p>1 year subscription / 3 PCs</p>
          </li>
          <li>
            <a class="buybtn exbtn"
               href="https://www.iobit.com/buy.php?product=2020imf3pc1599&ref=xr_imfe<?= $refStr; ?>&refs=purchase_imfxr"
               onclick="ga('send', 'event', 'imfebuy', 'buy', 'imfepurchase-xr');">
              Renew Now & Save 70%
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
    var _href = "https://www.iobit.com/buy.php?product=2020imf3pc1499&ref=xr_imfe1499" + refStr + "&refs=purchase_imfxr&tw=-8";
    var _ga = "ga('send', 'event', 'imfebuypop', 'buy', 'imfepurchase-xr');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
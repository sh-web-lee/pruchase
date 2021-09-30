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
    $cName = 'ascprepa' . $date;
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

$viewNum = rand(60, 88);
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
<title>80% OFF to Get Back to Driver Booster PRO - Black Friday Sale | IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700'>
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
        <h4>Your registered Driver Booster PRO has expired!</h4>
        <h1>Welcome Back and We Miss You</h1>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Driver Booster 8 PRO"/>
            <div class="balloon"><img src="<?php echo getStaticUrl('images/balloon.png')?>" alt=""/></div>
          </div>
          <div class="right fr">
            <h2>Driver Booster 8 PRO</h2>
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
              <p><strong>$<big>12</big>.85</strong> <del>$74.85</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=2020db3pc1285&ref=br_dbe<?= $refStr; ?>refs=purchase_dbbf" onclick="ga('send', 'event', 'dbebuy', 'buy', 'dbepurchase-bf');">
                Renew Now
              </a>
              <p class="year">1 Year Subscription / 3 PCs</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <p>Since Being with You, </p>
        <h2 class="btitle">Driver Booster PRO has Help You</h2>
        <div class="panel clearfix">
          <div class="screen fl">
            <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="Advanced SystemCare Pro"/>
          </div>
          <div class="fl">
            <dl class="one clearfix <?php echo $junk?'':'datahide';?>">
              <dd>
                <b>Update <span><?= $junkStr; ?></span> Important Drivers</b>
<!--                <h3 class="data --><?php //echo $junk?'':'hide';?><!--"><span>--><?php //echo $junk;?><!--</span>--><?php //echo ($sizegb>=1)?' GB':' MB';?><!--</h3>-->
                <p>to avoid system freezes or crashes</p>
              </dd>
            </dl>
            <dl class="two clearfix <?php echo $reg?'':'datahide';?>">
              <dd>
                <b>Fix <span><?= normal($data['reg']);?></span> Device Error Issues</b>
<!--                <h3 class="data --><?php //echo $data['reg']?'':'hide';?><!--">--><?php //echo $data['reg'];?><!--</h3>-->
                <p>for effective device management</p>
              </dd>
            </dl>
            <dl class="three clearfix <?php echo $data['antitrack']?'':'datahide';?>">
              <dd>
                <b>Update <span><?= normal($data['antitrack']);?></span> Essential Game Components</b>
<!--                <h3 class="data --><?php //echo $data['antitrack']?'':'hide';?><!--">--><?php //echo $data['antitrack'];?><!--</h3>-->
                <p>for faster but smoother game launching</p>
              </dd>
            </dl>
			<dl class="four clearfix <?php echo $data['antitrack']?'':'datahide';?>">
			  <dd>
			    <b>Update <span><?= normal($data['program']);?></span> Game-Related Drivers</b>
<!--			    <h3 class="data --><?php //echo $data['program']?'':'hide';?><!--">--><?php //echo $data['program'];?><!--</h3>-->
			    <p>for better gaming experience</p>
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
        <h2 class="btitle">Without Driver Booster PRO Now</h2>
        <p>See What Priorities You’ve Lost</p>
        <table>
          <thead>
            <tr>
              <th class="text"></th>
              <th class="itema">
                <div class="free">Before</div>
              </th>
			  <th class="space"></th>
              <th class="itemb">
                <div class="pro">Now</div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="virtue">Driver Database Supported</td>
              <td class="itema">4,500,000+</td>
			  <td class="space"></td>
              <td class="itemb">3,500,000+</td>
            </tr>
            <tr class="two">
              <td class="virtue">Driver Download Acceleration</td>
              <td class="itema">100% Faster</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">√</i>Unavailable</td>
            </tr>
            <tr class="three">
              <td class="virtue">Update Game Components</td>
              <td class="itema"><i class="all-icons black">×</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">√</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Game-Ready Driver Priority</td>
              <td class="itema"><i class="all-icons black">×</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">√</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Easily Fix Device Errors</td>
              <td class="itema"><i class="all-icons black">×</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">√</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Auto Driver Update & Backup</td>
              <td class="itema"><i class="all-icons black">×</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">√</i>Unavailable</td>
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
        <h2 class="btitle">Now Come Back to New Driver Booster PRO</h2>
        <p>with New and Improved Features</p>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/comparison_arrow.png')?>" alt=""/></dt>
            <dd>
              <strong>50%</strong>
              <p>Larger Driver Database</p>
              <em class="green">IMPROVED</em>
              <div class="extra">*Extra <b>16</b> updates found now</div>
            </dd>
          </dl>
          <dl>
            <dt></dt>
            <dd>
              <strong>Smarter</strong>
              <p>Driver Update Mode</p>
              <em class="green">NEW</em>
            </dd>
          </dl>
          <dl class="center">
            <dt></dt>
            <dd>
              <strong>Easier</strong> 
              <p>Offline Driver Update</p>
              <em class="green">NEW</em>
            </dd>
          </dl>
		  <dl class="last">
		    <dt></dt>
		    <dd>
		      <strong>Safer</strong> 
		      <p>Driver Backup</p>
		      <em class="green">IMPROVED</em>
		    </dd>
		  </dl>
        </div>
        <div class="price">
          <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=2020db3pc1285&ref=br_dbe<?= $refStr; ?>refs=purchase_dbbf" onclick="ga('send', 'event', 'dbebuy', 'buy', 'dbepurchase-bf');">
            Renew Now & Save 80%
          </a>
          <p class="year">1 Year Subscription / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>World-wide Awards</h2>
        <p>
          As being trusted and awarded by those world-class media in the past eleven years, you know you’ve got the right PC optimizer.
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

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
            <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="Pc"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>
                "Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack."
              </p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="dunston-diaz"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM, i was able to play new game titles without having to shutdown any background process. I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product."
              </p>
              <cite>Dunston Diaz</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="harold-barr"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "What a surprise to receive the new Driver Booster from IObit. Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade. Once upgrading was complete it was as if my PC had a complete makeover. Sensational!"
              </p>
              <cite>Harold Barr</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="hishaam-salasa"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended."
              </p>
              <cite>Hishaam Salasa</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="carlos-alexandre"></dt>
            <dd>
              <h2>User Review</h2>
              <p>
                "It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB7. Easy to use and fast downloads it is the best tool in the Market until now!"
              </p>
              <cite>Carlos Alexandre Veríssimo</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
              <p>
                We’re confident that activating PRO edition will fix all your headache driver matters for affordable price!
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

    <!-- backtotop start -->
    <div id="backtotop" class="backtotop">top</div>
    <!-- backtotop end -->

    <!-- float start -->
    <div class="floatlayer">
        <div class="wrapper clearfix">
          <img class="fl" src="<?php echo getStaticUrl('images/asc-float-box.png')?>" alt=""/>
          <div class="price fl">
            <div class="count">
              <p class="watch"><span class="surplusGift viewNum"><?php echo $viewNum;?></span> watching, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> seats left now!</p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="floatdown" class="countdown">Hurry! <b>05</b>M:<b>00</b>S* Left</p>
            </div>
          </div>
          <!-- buybtn -->
          <a class="buybtn bigbtn fr" href="https://www.iobit.com/buy.php?product=2020db3pc1285&ref=br_dbe<?= $refStr; ?>refs=purchase_dbbf" onclick="ga('send', 'event', 'dbebuy', 'buy', 'dbepurchase-bf');">
            Renew Now & Save 80%
          </a>
        </div>
    </div>
    <!-- float end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var imgoffSrc = "<?php echo getStaticUrl('images/mask-off.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=2020db3pc1185&ref=br_dbe1185" + refStr + "&refs=purchase_dbbf";
    var _ga = "ga('send', 'event', 'dbebuypop', 'buy', 'dbepurchase-bf');";
    var viewNum = "<?php echo $viewNum;?>";
    var junk="<?php echo $junk;?>";
    var reg="<?php echo $reg;?>";
    var privacy="<?php echo $privacy;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>
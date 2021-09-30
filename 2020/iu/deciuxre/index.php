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
    $cName = 'deciuxre' . $date;
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

$sizemb = $data['filesize'] / (1024 * 1024);
$sizegb = $data['filesize'] / (1024 * 1024 * 1024);
$size = number_format(round(($sizegb >= 1) ? $sizegb : $sizemb, 2), 2);
$sizeStr = $size . (($sizegb >= 1) ? ' GB' : ' MB');
if ($size == 0.00)
    $sizeStr = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% OFF to Get Back to IObit Uninstaller PRO - Christmas Sale | IObit</title>
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
                <p><strong class="change-price">$<big>11.97</big></strong> <del>$42.99</del></p>
                <p>1 year subscription / 3 PCs</p>
              </li>
              <li>
                <a class="buybtn exbtn"
                   href="https://www.iobit.com/buy.php?product=2020iu3pc1197&ref=xr_iue<?= $refStr; ?>&refs=purchase_iuxr"
                   onclick="ga('send', 'event', 'iuebuy', 'buy', 'iuepurchase-xr');">
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
        <p>Since Being with You, </p>
        <h2 class="btitle">What Have IObit Uninstaller PRO Helped You</h2>
        <div class="panel clearfix">
          <div class="screen fl">
            <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="Advanced SystemCare Pro"/>
          </div>
          <div class="fl">
            <dl class="one clearfix <?php echo $size?'':'datahide';?>">
              <dd>
                <b>Free up <span><?= $sizeStr; ?></span> disk space</b>
                <p>for smoother PC performance</p>
              </dd>
            </dl>
            <dl class="two clearfix <?php echo $data['soft']?'':'datahide';?>">
              <dd>
                <b>Uninstall <span><?= normal($data['soft']);?></span> programs</b>
                <p>that can’t be removed easily</p>
              </dd>
            </dl>
              <?php $total = $data['reg'] + $data['file'] + $data['service'] + $data['task'] + $data['deep']; ?>
            <dl class="three clearfix <?php echo $total?'':'datahide';?>">
              <dd>
                <b>Auto clean <span><?= normal($total);?></span> leftovers & logged items</b>
                <p>for complete uninstallation and clean computer</p>
              </dd>
            </dl>
			<dl class="four clearfix <?php echo $data['softupdate']?'':'datahide';?>">
			  <dd>
			    <b>Update <span><?= normal($data['softupdate']);?></span> software</b>
			    <p>to enjoy new features and fix holes</p>
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
        <h2 class="btitle">Without IObit Uninstaller PRO Now,</h2>
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
              <td class="virtue">Delete stubborn programs</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr class="two">
              <td class="virtue">In-depth cleaning of leftover files</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr class="three">
              <td class="virtue">Delete bundled programs</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Delete malicious and advertising extensions</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Auto delete leftovers of programs uninstalled by other utilities</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">1-click to update all software</td>
              <td class="itema"><i class="all-icons black">√</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">×</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Auto update when a new version is available</td>
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
        <h2 class="btitle">Now Come Back to IObit Uninstaller 10 PRO to Enjoy</h2>
        <div class="clearfix">
          <dl>
            <dt></dt>
            <dd>
              <strong>470+</strong>
              <p>stubborn programs uninstalling</p>
            </dd>
          </dl>
          <dl>
            <dt></dt>
            <dd>
              <strong>Complete</strong>
              <p>uninstall with no leftovers</p>
            </dd>
          </dl>
          <dl>
            <dt></dt>
            <dd>
              <strong>60+</strong> 
              <p>popular software updating</p>
            </dd>
          </dl>
        </div>
        <div class="price">
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=2020iu3pc1197&ref=xr_iue<?= $refStr; ?>&refs=purchase_iuxr" onclick="ga('send', 'event', 'iuebuy', 'buy', 'iuepurchase-xr');">
            Renew Now & Save 70%
          </a>
        </div>
      </div>
    </div>
    <!-- centbuy end -->
	
    <!-- review start -->
    <div class="review wrapper">
      <h2 class="btitle">Trusted by 120,000,000 Users</h2>
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
            <p><strong class="change-price">$<big>11.97</big></strong> <del>$42.99</del></p>
            <p>1 year subscription / 3 PCs</p>
          </li>
          <li>
            <a class="buybtn exbtn"
               href="https://www.iobit.com/buy.php?product=2020iu3pc1197&ref=xr_iue<?= $refStr; ?>&refs=purchase_iuxr"
               onclick="ga('send', 'event', 'iuebuy', 'buy', 'iuepurchase-xr');">
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
    var _href = "https://www.iobit.com/buy.php?product=2020iu3pc1097&ref=xr_iue1097" + refStr + "&refs=purchase_iuxr&tw=-8";
    var _ga = "ga('send', 'event', 'iuebuypop', 'buy', 'iuepurchase-xr');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
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
    $cName = 'ascnovas' . $date;
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
<title>75% OFF to Get Back Advanced SystemCare PRO - Black Friday Sale | IObit</title>
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
        <h4>Your registered Advanced SystemCare Pro has expired!</h4>
        <h1>Welcome Back and We Miss You</h1>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare Pro"/>
            <div class="balloon"><img src="<?php echo getStaticUrl('images/balloon.png')?>" alt=""/></div>
          </div>
          <div class="right fr">
            <h2>Advanced SystemCare 14 PRO</h2>
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
              <p><strong>$<big>12</big>.97</strong> <del>$49.99</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=2020asc3pc1297&ref=br_asce<?= $refStr; ?>&refs=purchase_ascbf" onclick="ga('send', 'event', 'ascebuy', 'buy', 'ascepurchase-bf');">
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
        <h2 class="btitle">What Have Advanced SystemCare PRO Helped You</h2>
        <div class="panel clearfix">
          <div class="screen fl">
            <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="Advanced SystemCare Pro"/>
          </div>
          <div class="fl">
            <dl class="one clearfix <?php echo $junk?'':'datahide';?>">
              <dd>
                <b>Clean <span><?= $junkStr; ?></span> Junk Files</b>
<!--                <h3 class="data --><?php //echo $junk?'':'hide';?><!--"><span>--><?php //echo $junk;?><!--</span>--><?php //echo ($sizegb>=1)?' GB':' MB';?><!--</h3>-->
                <p>for larger disk space & faster PC</p>
              </dd>
            </dl>
            <dl class="two clearfix <?php echo $reg?'':'datahide';?>">
              <dd>
                <b>Fix <span><?= normal($data['reg']);?></span> Registry Entries</b>
<!--                <h3 class="data --><?php //echo $data['reg']?'':'hide';?><!--">--><?php //echo $data['reg'];?><!--</h3>-->
                <p>to avoid system crashes/errors</p>
              </dd>
            </dl>
            <dl class="three clearfix <?php echo $data['antitrack']?'':'datahide';?>">
              <dd>
                <b>Erase <span><?= normal($data['antitrack']);?></span> Online Traces</b>
<!--                <h3 class="data --><?php //echo $data['antitrack']?'':'hide';?><!--">--><?php //echo $data['antitrack'];?><!--</h3>-->
                <p>for better online surfing protection</p>
              </dd>
            </dl>
			<dl class="four clearfix <?php echo $data['antitrack']?'':'datahide';?>">
			  <dd>
			    <b>Block <span><?= normal($data['program']);?></span> Untrusted Accesses</b>
<!--			    <h3 class="data --><?php //echo $data['program']?'':'hide';?><!--">--><?php //echo $data['program'];?><!--</h3>-->
			    <p>for better sensitive data protection</p>
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
        <h2 class="btitle">Without Advanced SystemCare PRO Now,</h2>
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
                <div class="pro">Now</div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="virtue">Optimize Slow PC Performance</td>
              <td class="itema">200% Faster</td>
			  <td class="space"></td>
              <td class="itemb">Basic</td>
            </tr>
            <tr class="two">
              <td class="virtue">Speed Up Internent Connection</td>
              <td class="itema">300% Faster</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">√</i>Unavailable</td>
            </tr>
            <tr class="three">
              <td class="virtue">Deep PC Cleaning</td>
              <td class="itema"><i class="all-icons black">×</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">√</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Auto RAM Clean</td>
              <td class="itema"><i class="all-icons black">×</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">√</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Block Unauthorized Access to Private Files</td>
              <td class="itema"><i class="all-icons black">×</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">√</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Auto Online Trace Cleaning</td>
              <td class="itema"><i class="all-icons black">×</i>Available</td>
			  <td class="space"></td>
              <td class="itemb"><i class="all-icons red">√</i>Unavailable</td>
            </tr>
            <tr>
              <td class="virtue">Real-time Protection</td>
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
        <h2 class="btitle">Now Come Back to New Advanced SystemCare PRO</h2>
        <p>with New and Improved Features</p>
        <div class="clearfix">
          <dl>
            <dt></dt>
            <dd>
              <strong>AI <font>Scan</font></strong>
              <p>Smarter, Simpler, Quick</p>
              <em class="new">NEW</em>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/comparison_arrow.png')?>" alt=""/></dt>
            <dd>
              <strong>50%</strong>
              <p>More Junk File Clean</p>
              <em class="green">IMPROVED</em>
            </dd>
          </dl>
          <dl class="center">
            <dt><img src="<?php echo getStaticUrl('images/comparison_arrow.png')?>" alt=""/></dt>
            <dd>
              <strong>40%</strong> 
              <p>More Startup Items Optimization</p>
              <em class="green">IMPROVED</em>
            </dd>
          </dl>
		  <dl class="last">
		    <dt><img src="<?php echo getStaticUrl('images/comparison_arrow.png')?>" alt=""/></dt>
		    <dd>
		      <strong>30%</strong> 
		      <p>More Software Update</p>
		      <em class="green">IMPROVED</em>
		    </dd>
		  </dl>
        </div>
        <div class="price">
          <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=2020asc3pc1297&ref=br_asce<?= $refStr; ?>&refs=purchase_ascbf" onclick="ga('send', 'event', 'ascebuy', 'buy', 'ascepurchase-bf');">
            Renew Now & Save 75%
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
          <a class="buybtn bigbtn fr" href="https://www.iobit.com/buy.php?product=2020asc3pc1297&ref=br_asce<?= $refStr; ?>&refs=purchase_ascbf" onclick="ga('send', 'event', 'ascebuy', 'buy', 'ascepurchase-bf');">
            Renew Now & Save 75%
          </a>
        </div>
    </div>
    <!-- float end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var imgoffSrc = "<?php echo getStaticUrl('images/mask-off.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=2020asc3pc1197&ref=br_asce1197" + refStr + "&refs=purchase_ascbf&tw=-8";
    var _ga = "ga('send', 'event', 'ascebuypop', 'buy', 'ascepurchase-bf');";
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
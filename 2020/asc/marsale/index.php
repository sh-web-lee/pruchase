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
    $c_name = 'enascmarsale_p' . $date;
    if ($_COOKIE[$c_name]===null) {
      $packsNum=rand(68,78);
      setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
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
  $data = json_decode(base64_decode($_GET['data']));
  $se = $data->se;
  $ps = $data->ps;
  $st = $data->st;
  $fp = $data->se+$data->ps+$data->st;
  $refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
if(!empty($_GET['insur'])){
	$refStr.='-'.$_GET['insur'];
}
if(!empty($_GET['pop'])){
	$refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
	$ver=$matches[1].'-'.$matches[2];
	$refStr.='-'.$ver;
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Up to 75% OFF on Advanced SystemCare PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="nav">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
        <h1 class="title">
          Activate Pro Edition <span>to Fix the Following<b class="problem-num"><?php echo $fp;?></b>Problems</span>
        </h1>
        <ul class="clearfix">
          <li><i class="all-icons"></i> <span class="system"><?php echo $se;?></span> System errors</li>
          <li class="center"><i class="all-icons"></i> <span class="items"><?php echo $ps;?> items</span> Slowing down your PC</li>
          <li class="last"><i class="all-icons"></i> <span class="security"><?php echo $st;?></span> Security threats</li>
        </ul>
      </div>
    </div>
    <div class="wrapper clearfix">
      <div class="offer">
        <span class="avatar all-icons"></span>
        <h2>Advanced SystemCare 13 PRO</h2>
        <div class="price">
          <p><strong>$16.77</strong> <del>$29.99</del></p>
          <p class="tag"><span> 1 PC, 1 Year</span></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=asc1pc1677&ref=en-asc1pcmar<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
             onclick="ga('send', 'event', 'asc1pcbuy', 'buy', 'ascpurchase-202003');">
            Activate Now
          </a>
          <p class="save"><b>SAVE 45%</b></p>
        </div>
      </div>
      <div class="offer bigoff">
        <span class="avatar all-icons"></span>
        <h2>Advanced SystemCare 13 PRO</h2>
        <div class="price">
          <p><strong>$19.99</strong> <del>$89.97</del></p>
          <p class="tag"><span>3 PCs, 1 Year</span></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=asc13sdiuamc1999up&ref=en-asc3pciusdamcmar<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
             onclick="ga('send', 'event', 'ascbundlebuy', 'buy', 'ascpurchase-202003');">
            Activate Now
          </a>
          <p class="save"><b>SAVE 45%</b></p>
        </div>
        <div class="gift">
          <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/offer-bift-box.png')?>" alt="" />
            <!-- <div class="imgreduce"></div> -->
          </div>
          <ul class="fl">
            <li class="first">
              <h6><b class="packsNum"><span>78</span><!-- <span class="reduce">78</span> --></b> Packs Left Today</h6>
            </li>
            <li>Smart Defrag 6 Pro</li>
            <li>IObit Uninstaller 9 Pro</li>
            <li>AMC Security Pro</li>
          </ul>
          <!-- <div class="soldout"><span class="sold-words">SOLD OUT!</span></div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- comparison start -->
  <div id="compare" class="comparison wrapper">
    <h2>And Enjoy More Pro-exclusive Features</h2>
    <table>
      <thead>
        <tr>
          <th colspan="2"></th>
          <th class="itema">
            <div class="free">FREE</div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <div class="pro">PRO</div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></td>
          <td class="virtue">Basic system clean, protection and optimization</td>
          <td class="itema"><i class="all-icons gray">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></td>
          <td class="virtue">Boost Internet connection speed up to 300%  </td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
          <td class="virtue">Speed up PC by organizing fragmented files more efficiently </td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></td>
          <td class="virtue">Auto disable unnecessary processes that hog up memory  </td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></td>
          <td class="virtue">Auto care your computer at a scheduled time </td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
          <td class="virtue">Update outdated programs with one click   </td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
          <td class="virtue">Identify and fix registry issues that cause crashes</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></td>
          <td class="virtue">Auto hide your fingerprint to block invisible trackers</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></td>
          <td class="virtue">Block accesses to sensitive data from untrusted programs</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></td>
          <td class="virtue">Protect you against adware and spyware in real time</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""/></td>
          <td class="virtue">Auto update to the latest version</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons12.png')?>" alt=""/></td>
          <td class="virtue">Free 24/7 technical support on demand</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons blue">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <th colspan="2"></th>
        <th></th>
        <th class="space"></th>
        <th class="itemb">
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=asc13sdiuamc1999up&ref=en-asc3pciusdamcmar<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
             onclick="ga('send', 'event', 'ascbundlebuy', 'buy', 'ascpurchase-202003');">
            Activate Now
          </a>
        </th>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>What Other Users Say</h2>
      <ul class="clearfix">
        <li class="active"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
        <li><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
        <li><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></li>
        <li><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
        <li><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></li>
        <li><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
      </ul>
      <div class="review-content">
        <div class="review-list active">
          <p>
            "Advanced System Care is a great program. I have used this program for many years and it works great. They're always improving their products and just get better over the years. I use many of their products and they all work great."
          </p>
          <h4>Patsy Clark</h4>
        </div>
        <div class="review-list">
          <p>
            "I have been using Advanced SystemCare Pro for a long time and this latest version 13 is even better than version 12. It can find and fix problems very quickly and has so many extra features you can use to keep your computer running well and stable. I cannot recommend it more highly."
          </p>
          <h4>Tony Fisher</h4>
        </div>
        <div class="review-list">
          <p>
            "The New ASC 13 is a must have for all PC users. Its clean and intuitive interface makes it easy to use for the novice as well as the advanced user. Many powerful tools included to keep your PC running at its peak performance. Kudos to you IObit for such a wonderful set of tools all in one place."
          </p>
          <h4>Daniel Sanders</h4>
        </div>
        <div class="review-list">
          <p>
            "I have tried various programs over time which have promised to keep my computers running problem free. I turned to ASC years ago using the free version at first. Finding that I no longer suffered from the niggles and bloating that occurs I upgraded to the Paid version and have never looked back since. Advanced SystemCare Pro is the only one I would recommend based on my experiences. I also use IObit Uninstaller, Smart Defrag and Driver Booster just make things much better."
          </p>
          <h4>Richard Beavers</h4>
        </div>
        <div class="review-list">
          <p>
            "I love using Advanced SystemCare 13 Beta. It is fast. It cleans up privacy traces, junk files and registry fragments. I especially like the sensitive area access permission pop-up. The first time an app tries to access sensitive files, a window opens to either allow access or deny. Once permission is granted for an app, the pop-up no longer occurs for that app. I know my sensitive files will be kept safe."
          </p>
          <h4>Richard Preston</h4>
        </div>
        <div class="review-list">
          <p>
            " I have never found a better pc maintenance or security program than Advanced Systems Care, since buying ASC I've never had issues with viruses, phishing, black screens or any other kind of bugaboo one could think of, best money I've ever spent when it comes to computers, thank you ASC for making my pc experience so much more enjoyable."
          </p>
          <h4>Danny R. Sheets</h4>
        </div>
      </div>
      
      <span class="review-line"></span>
    </div>
  </div>
  <!-- review end -->

  <!-- giftbox start -->
  <div class="giftbox">
    <h2>Activate Now to Get Three Optimizing Tools for Free</h2>
    <div class="wrapper clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/></dt>
        <dd>
          <h3>Smart Defrag PRO</h3>
          <strong>$0</strong> <del>$19.99</del>
          <p>Maximize Hard Drive Optimization<br> for Faster PC</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/></dt>
        <dd>
          <h3>IObit Uninstaller PRO</h3>
          <strong>$0</strong> <del>$19.99</del>
          <p>Uninstall Unwanted Plug-ins<br> for Cleaner PC & Browsing</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="AMC Security PRO"/></dt>
        <dd>
          <h3>AMC Security PRO</h3>
          <strong>$0</strong> <del>$19.99</del>
          <p>All-in-One Protector and Booster<br> for Android Device</p>
        </dd>
      </dl>
    </div>
    <div class="price">
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=asc13sdiuamc1999up&ref=en-asc3pciusdamcmar<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
         onclick="ga('send', 'event', 'ascbundlebuy', 'buy', 'ascpurchase-202003');">
        Get My Free Gifts
      </a>
      <p class="hurry">Hurry, only<b class="packsNum"><span>78</span><!-- <span class="reduce">78</span> --></b>left now</p>
    </div>
  </div>
  <!-- giftbox end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      <div class="service clearfix">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>Try it RISK FREE - 60-day Money Back Guarantee</h3>
            <p>
              We’re confident that activating PRO edition will improve your PC performance for affordale price!
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>We accept</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="notes">
      <dt>Note: </dt>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>*.Smart Defrag PRO / IObit Uninstaller PRO support 1 year subscription / 1 PC.</dd>
      <dd>*.License for AMC Security Full Version with in-app ads.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
  <!-- footer end -->
<script>
var refStr='<?php echo $refStr;?>';
</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if($_GET['to']=='purchase-6'){
  if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    if(count($matches[1])>=2){
      $refStr.='-'.$matches[1][0].$matches[1][1];
    }
  }
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
if(!empty($_GET['pop'])){
  $refStr.='-'.$_GET['pop'];
}
/*if($_GET['pop']=='x_db'){
	$refStr.='-'.$_GET['pop'];
	if(in_array($_GET['user'],array('1','2'))){
		$refStr.=$_GET['user'];
	}
}*/
$transData=json_decode(base64_decode($_GET['idata']));

if(!empty($_GET['ref'])){
  $refStr.='-'.$_GET['ref'];
}
if(!empty($_GET['insur'])){
  $refStr.='-'.$_GET['insur'];
}
if(!empty($_GET['pdt'])){
  $refStr.='-'.$_GET['pdt'];
}
if(!empty($_GET['finstd'])){
  $refStr.='-f'.$_GET['finstd'];
}
$paramPri=$_GET['pri'];
if((!empty($paramPri))&&$transData->$paramPri!==null){
  $refStr.='-'.$paramPri.$transData->$paramPri;
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
$pageDevice=in_array($_GET['pri'],array('asc','imf','iu','sd'))?1:0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>70% OFF Driver Booster</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <script>
    var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
    var browserLanguage = MApp(2.2).language.langArr[0];
    var irpid = MApp(2.2).url.getParameters('irpid');
    var ver = MApp(2.2).url.getParameters('ver');

    var paramTo = MApp(2.2).url.getParameters('to');
    var reg = new RegExp("^6\.[3-9]|^[7-9]\.[0-9]|^[1-9]\\d+\.[0-9]");
    var crossReg = new RegExp("^6\.3");
    var pageDevice =<?php echo $pageDevice;?>;
    if (reg.test(ver) && ((paramTo == 'gaexpired') || (paramTo == 'multipcexpired_2'))) {
      window.location.href = "./dbexp.php" + queryStr;
    }/*else if((paramTo=='hombnro')||(paramTo=='prebtno')){
      pageDivide('dbnewlau','newlaunch.php');
    }*//*else if((paramTo=='hombnrn')||(paramTo=='prebtnn')){
      pageDivide('dbnewins','newinstall.php');
    }*/

    function pageDivide(cName,devicePage){
      var queryStr = <?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
      var pageAb = cGet(cName);
      if (pageAb == 'tob') {
        window.location.replace(devicePage + queryStr);
      } else {
        if (pageAb == null) {
          randNum = Math.random();
          if (randNum > 0.5) {
            window.location.replace(devicePage + queryStr);
            cSet(cName, 'tob');
          } else {
            cSet(cName, 'toa');
          }
        }
      }
    }

    function cSet(name, value) {
      var Days = 2;
      var exp = new Date();
      exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
      document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
    }
    function cGet(name) {
      var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
      if (arr = document.cookie.match(reg))
        return unescape(arr[2]);
      else
        return null;
    }
  </script>
  <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <!-- wrapper -->
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <div class="title"><h1 class="new">BLACK FRIDAY</h1></div>
    <div class="offer clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster"/>
        <p><strong>$<big>23</big>.95</strong>  was <del>$74.85</del></p>
      </div>
      <div class="center fl">
        <div id="bancountdown" class="countdown">
          <i class="all-icons">Hurry!</i> Only <b>04</b>M:<b>54</b>S:<b>25</b>Ms Left
        </div>
        <h2>Get other IObit signature product for $1 more</h2>
        <ul id="banlist">
          <li id="sd" class="on">
            <i class="all-icons"></i>
            <h3>Smart Defrag PRO <span><b>$<big>1</big></b> <del>was $19.99</del></span></h3>
            <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/>
          </li>
          <li id="iu" class="on">
            <i class="all-icons"></i>
            <h3>IObit Uninstaller PRO <span><b>$<big>1</big></b> <del>was $19.99</del></span></h3>
            <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
          </li>
        </ul>
        <!-- <div class="mask"><span class="zoomout">SOLDOUt</span></div> -->
      </div>
      <div class="right two fr">
        <h2 class="line">your items:</h2>
        <ul>
          <li class="one">
            <h3>Driver Booster 8 PRO <span><b><small>$</small>23.95</b> <del>$74.85</del></span></h3>
            <p>1 year subscription / 3 PCs</p>
          </li>
          <li class="sd">
            <h3>Smart Defrag PRO <span><b><small>$</small>1</b> <del>$19.99</del></span></h3>
            <p>1 year subscription / 1 PC</p>
          </li>
          <li class="iu">
            <h3>IObit Uninstaller PRO <span><b><small>$</small>1</b> <del>$19.99</del></span></h3>
            <p>1 year subscription / 1 PC</p>
          </li>
        </ul>
        <div class="price line">
          <p><span>Total: </span> <strong>$<big>25</big>.95</strong></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=db8sdiu&ref=en-db3pcsdiuspring<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
             onclick="ga('send', 'event', 'dbbuyiusd', 'buy', 'dbpurchase-202003')">
            <i class="all-icons"></i> <span>Activate Now</span>
          </a>
          <!-- <p class="only">only $1.95 / Month </p> -->
          <div class="tips">
            <i class="all-icons">!</i>
            <div class="txt">
              <p>The price shown in the page is valid only for this promotion.</p>
              <p>
                Your Driver Booster subscription will continue after the initial subscription period at the non-promotional price of $29.99.
              </p>
              <p>
                If you choose the Driver Booster 8 bundle pack, all products will also continue after the first year at the normal price shown in the page below.
              </p>
              <p class="bottom">Cancel Auto-renewal</p>
              <p>
                If you do not want to participate in the auto-renewal plan, you can uncheck the Auto-renewal box in shopping cart review page or in your account at any time before the start of the next subscription.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- choose start -->
<div class="choose">
  <div class="wrapper">
    <h2>Why do over 150 million users choose Driver Booster?</h2>
    <p>
      Because their PC runs up to 200% faster* than before, by keeping device drivers always Up-to-date and improving Stability of PC Performance, with the proven driver updating and security technology.
    </p>
  </div>
</div>
<!-- choose end -->

<!-- feature start -->
<div class="feature wrapper">
  <img class="db-box" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></dt>
    <dd>
      <strong>No need of one-by-one driver update</strong>
      <p>Providing you one-stop driver detecting & updating solution.</p>
    </dd>
  </dl>
  <dl class="two">
    <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
    <dd>
      <strong>Safe driver download & update</strong>
      <p>Automatically backing up & creating system restore point before <br> updating, in case of anything unexpected.</p>
    </dd>
  </dl>
  <dl class="three">
    <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
    <dd>
      <strong>4,500,000+ driver database</strong>
      <p>Priority to update more outdated & rare<br> drivers, and all supplied drivers are WHQL<br> certified.</p>
    </dd>
  </dl>
  <dl class="four">
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
    <dd>
      <strong>Offline driver update</strong>
      <p>Update and install network drivers<br> without Internet connection.</p>
    </dd>
  </dl>
  <dl class="five">
    <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
    <dd>
      <strong>Peak gaming performance guaranteed</strong>
      <p>Game Ready Driver and necessary game components are available to help <br> run game smoothly.</p>
    </dd>
  </dl>
</div>
<!-- feature end -->

<!-- giftbox start -->
<div class="giftbox">
  <div class="wrapper">
    <h2 class="new">Black Friday Sale - Buy IObit Signature Products for $1</h2>
    <p>Keep drivers always up-to-date and optimize your PCs for better performance.</p>
    <ul class="clearfix">
      <li>
        <img src="<?php echo getStaticUrl('images/sd-icon.png')?>" alt="Smart Defrag PRO"/>
        <h3>Smart Defrag PRO</h3>
        <strong>$1</strong> <del>$19.99</del>
        <p>Maximize Hard Drive Optimization <span>for Faster PC</span></p>
      </li>
      <li class="last">
        <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt="IObit Uninstaller PRO"/>
        <h3>IObit Uninstaller PRO</h3>
        <strong>$1</strong> <del>$19.99</del>
        <p>Uninstall Unwanted Plug-ins <span>for Cleaner PC & Browsing</span></p>
      </li>
    </ul>
  </div>
</div>
<!-- giftbox end -->

<div class="wrapper">
  <!-- service start -->
  <div class="service clearfix">
    <dl class="fl">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
      <dd>
        <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
        <p>
          We’re confident that activating PRO edition will fix all your headache driver matters for affordable price!
        </p>
      </dd>
    </dl>
    <dl class="fr">
      <dt><h3>We accept</h3></dt>
      <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- awards start -->
  <div class="awards">
    <h2>World-wide Awards</h2>
    <p>
      As being trusted and awarded by those world-class media in the past seven years, you know you’ve got the right driver updater.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
</div>

<!-- review start -->
<div class="review wrapper">
  <div class="content">
    <dl class="active">
      <dt>
        <h3>Media Review</h3></dt>
      <dd>
        <h4>IObit makes many utilities, and Driver Booster PRO, which automatically updates your drivers, is one of its best.</h4>
      </dd>
      <dd>
        Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>User Review</h3></dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM,  i was able to play new game titles without having to shutdown any background process.  I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product.
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>User Review</h3></dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        What a surprise to receive the new Driver Booster from IObit.  Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade.  Once upgrading was complete it was as if my PC had a complete makeover. Sensational!
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>User Review</h3></dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended.
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>User Review</h3></dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB7. Easy to use and fast downloads it is the best tool in the Market until now!
      </dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li class="active">
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine">
      </div>
      <p>PC Magazine</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/dunston-diaz.png" alt="Dunston Diaz"></div>
      <p>Dunston Diaz</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/harold-barr.png" alt="Harold Barr"></div>
      <p>Harold Barr</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa">
      </div>
      <p>Hishaam Salasa</p>
    </li>
    <li>
      <div class="pic">
        <img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt="Carlos Alexandre Veríssimo">
      </div>
      <p>Carlos Alexandre Veríssimo</p>
    </li>
  </ul>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison">
  <div class="wrapper">
    <h2>The comparison between FREE and PRO may help you make better decision</h2>
    <table>
      <thead>
      <tr>
        <th colspan="2"></th>
        <th class="itema">
          <div class="free">Driver Booster FREE</div>
        </th>
        <th class="itemb">
          <div class="pro">Driver Booster PRO</div>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
        <td class="virtue">Auto Scan Outdated/Missing Drivers <span><em>IMPROVED</em></span></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
        <td class="virtue">Auto Update Drivers when System Is Idle <span><em>IMPROVED</em></span></td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
        <td class="virtue">100%* Faster Download Speed</td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
        <td class="virtue">Auto Backup & Restore before Updating</td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon07.png')?>" alt=""></td>
        <td class="virtue">Priority to update the stability-first drivers <span class="new"><em>NEW</em></span></td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
        <td class="virtue">Necessary Components for Smooth Game <span><em>IMPROVED</em></span></td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
        <td class="virtue">Priority to Get Latest Game Ready Driver</td>
        <td class="itema"><i class="all-icons gray">×</i></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
      <!-- <tfoot>
        <tr>
          <th colspan="2"></th>
          <th class="itema"></th>
          <th class="itemb">
            <p>Only <strong>$22.95</strong></p>
            <a class="buybtn">
              <i class="all-icons"></i> <span>Activate Now</span>
            </a>
            <p>1 Year Subscription / 3 PCs</p>
          </th>
        </tr>
      </tfoot> -->
    </table>
  </div>
</div>
<!-- comparison end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster"/></div>
    <ul id="footlist" class="fl clearfix">
      <li class="on">
        <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/>
        <p><b>$<big>1</big></b> <del>was $19.99</del></p>
        <i class="all-icons"></i>
      </li>
      <li class="on last">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
        <p><b>$<big>1</big></b> <del>was $19.99</del></p>
        <i class="all-icons"></i>
      </li>
    </ul>
    <div class="price fr">
      <p>only <strong>$<big>25</big>.95</strong></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=db8sdiu&ref=en-db3pcsdiuspring<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db"
         onclick="ga('send', 'event', 'dbbuyiusd', 'buy', 'dbpurchase-202003')">
        <i class="all-icons"></i> <span>Activate Now</span>
      </a>
      <p class="subscript">1 year subscription / <em>3</em> PCs</p>
    </div>
    <div id="footcountdown" class="countdown">
      <i class="all-icons">Hurry!</i> Only <b>04</b>M:<b>54</b>S:<b>25</b>Ms Left
    </div>
    <!-- <div class="mask"><span class="zoomout">SOLDOUt</span></div>
    <div class="all-icons add">+</div> -->
  </div>
</div>
<!-- footbuy end -->

<!-- bottom start -->
<dl class="note wrapper">
  <dt>Note:</dt>
  <dd>*.Data may vary based on different system or computer.</dd>
  <dd>
    *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
  </dd>
  <dd>*. Smart Defrag PRO / IObit Uninstaller PRO support 1 year subscription / 1 PC.</dd>
</dl>
<div class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
<!-- bottom end -->

<script>
  var refStr="<?php echo $refStr;?>";
  var affStr="<?php echo $_GET['aff'];?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
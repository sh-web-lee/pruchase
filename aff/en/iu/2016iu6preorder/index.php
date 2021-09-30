<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

function num_format($num){
  if(!is_numeric($num)){
    return false;
  }
  $rvalue='';
  $num = explode('.',$num);
  $rl = !isset($num['1']) ? '' : $num['1'];
  $j = strlen($num[0]) % 3;
  $sl = substr($num[0], 0, $j);
  $sr = substr($num[0], $j);
  $i = 0;
  while($i <= strlen($sr)){
    $rvalue = $rvalue.','.substr($sr, $i, 3);
    $i = $i + 3;
  }
  $rvalue = $sl.$rvalue;
  $rvalue = substr($rvalue,0,strlen($rvalue)-1);
  $rvalue = explode(',',$rvalue);
  if($rvalue[0]==0){
    array_shift($rvalue);
  }
  $rv = $rvalue[0];
  for($i = 1; $i < count($rvalue); $i++){
    $rv = $rv.','.$rvalue[$i];
  }
  if(!empty($rl)){
    $rvalue = $rv.'.'.$rl;
  }else{
    $rvalue = $rv;
  }
  return $rvalue;
}

  //创建浮点计算，取 购买人数 及 剩余礼品数，根据情况选择使用
  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  
  // 已购买人数
  // 需要精确到某个值时，先输出 ceil(microtime_float()*1000/20000) 再 由此结果计算需要减去的量
  $buyNum = ceil(microtime_float()*1000/20000) - 73041325;
  $buyNum = num_format($buyNum);
  if ($_GET['action'] == 'getPacks'){
    echo $buyNum;
    exit;
  }

  // 剩余礼品数
  $packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }

  $refstr=empty($_GET['ref'])?'enaff_iu_2016iu6preorder':$_GET['ref'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Save 50% on IObit Uninstaller PRO 6 & get extra 2 months subscription for free!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script>
  function decreasingPacks() {
    $.ajax({
      type: "GET",
      url: "index.php",
      data: "action=getPacks&r=" + Math.random(),
      success: function(packs) {
        $('#buyNum').html(packs);
        setTimeout('decreasingPacks()', 20000);
      }
    });
  }
  setTimeout('decreasingPacks()', 20000);
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="main">
  <!-- header start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <h1>Pre-order IObit Uninstaller 6 PRO to Enjoy VIP Privileges</h1>
      <div class="panel boxinfo clearfix">
        <img class="fl" src="<?php echo $pResUrl; ?>images/header_iu.png">
        <dl class="product fl clearfix">
          <dt>
            <h3><strong>VIP</strong> Privileges Only for Pre-orders</h3>
          </dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/five.png" alt="">
            <h4 class="off">50% OFF</h4>
            <span>Exclusive 50% off on </span>
            <span>IObit Uninstaller 6 </span>
            <span>1 Year / 3 PCs</span>
          </dd>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/six.png" alt="">
            <h4>Extra 60-day for Free</h4>
            <span>Extra 2 Months' </span>
            <span>Subscription for free after </span>
            <span>pre-ordering</span>
          </dd>
        </dl>
        <!-- time -->
        <ul id="countdown" class="countdown">
          <li>00</li>
          <li>00</li>
          <li>00</li>
          <li>000</li>
        </ul>
      </div>
      <dl class="price clearfix">
        <dt>
          <a class="buybtn" href="http://www.iobit.com/buy.php?product=iu6preorder14m&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu2016iu6preorder');">
            <i class="all-icons">car</i>
            <span>Pre-order Now</span>
          </a>
        </dt>
        <dd class="yellow">
          Now
          <img src="<?php echo $pResUrl; ?>images/yellow_price.png" alt="">
          <del>$29.99</del>
        </dd>
        <dd> 14 Months Subscription / 3 PCs</dd>
      </dl>
    </div>
    <div class="bottom">
      <ul class="wrapper">
        <li>
          <i class="all-icons">1、</i>
          Grab it now! The price will jump back up after pre-order period is over!
        </li>
        <li>
          <i class="all-icons people">2、</i>
           <span id="buyNum"><?php echo $buyNum;?></span> People Pre-ordered
        </li>
      </ul>
    </div>
  </div>
  <!-- header end -->

  <!-- container start -->
  <div class="wrapper">
    <!-- payment start -->
    <div class="payment clearfix">
      <dl>
        <dt>Accepted Payments</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/payment_pay.png" alt=""></dd>
      </dl>
      <dl>
        <dt>Money Back Guarantee</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/payment_back.png" alt=""></dd>
      </dl>
      <dl class="last">
        <dt>Secure Payment</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/payment_secure.png" alt=""></dd>
      </dl>
    </div>
    <!-- payment end -->

    <!-- intro start -->
    <div class="intro">
      <h3>Improved Powerful Uninstall with Brand New IObit Uninstaller 6 PRO</h3>
      <div class="intro-iu"><img src="<?php echo $pResUrl; ?>images/intro_iu.png" alt="IObit Uninstaller"></div>
    </div>
    <!-- intro end -->

    <!-- feature-intro start -->
    <div class="feature-intro clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_01.png" alt=""></dt>
        <dd><h4><span>IMPROVED!</span> Powerful Uninstall</h4></dd>
        <dd>Support more stubborn programs </dd>
        <dd>uninstall with real-time database</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_02.png" alt=""></dt>
        <dd><h4><span class="new">NEW!</span> Faster & Safer Browse</h4></dd>
        <dd>Automatically identify malicious &  </dd>
        <dd>ad-based plug-ins & extensions</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_03.png" alt=""></dt>
        <dd><h4><span>IMPROVED!</span> Auto Clean</h4></dd>
        <dd>Auto leftovers/registry entries scan </dd>
        <dd>&  removal for faster and clean PC</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_04.png" alt=""></dt>
        <dd><h4><span class="new">NEW!</span> Win 10 Compatible</h4></dd>
        <dd>Fully support Microsoft Edge </dd>
        <dd>extensions removal on Win 10</dd>
      </dl>
    </div>
    <!-- feature-intro end -->

    <!-- center-buy end -->
    <dl class="center-buy clearfix">
      <dt>
        <a class="buybtn" href="http://www.iobit.com/buy.php?product=iu6preorder14m&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu2016iu6preorder');">
          <i class="all-icons">car</i>
            <span>Pre-order Now</span>
        </a>
      </dt>
      <dd>
        <i class="all-icons">1、</i>
        Enjoy Exclusive <strong>50% OFF</strong> on IU 6 1 Year / 3 PCs 
      </dd>
      <dd>
        <i class="all-icons gift">2、</i>
        Get Extra 2 Months' Subscription for <strong>FREE</strong>
      </dd>
    </dl>
    <!-- center-buy end -->

    <!-- awards start -->
    <div class="awards">
      <h3>Company Awards</h3>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
    <!-- awards end -->
  </div>

  <!-- review start -->
  <div class="review clearfix">
    <div class="wrapper">
      <div class="media-rev">
        <h3>Media Review</h3>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/makeuseof-crosswise.png" alt=""></dt>
          <dd>
            <h4>
              "This easy-to-use and informative uninstall tool cleans, configures, and
              optimizes your PC."
            </h4>
          </dd>
          <dd>
            "IObit Uninstaller is small and its interface is friendly. Users can download
            it virtually in a blink of an eye. This uninstall tool can be categorized
            as the best uninstaller and allows users to do uninstallation in bulk.
            It will offer users to do a "Powerful Scan" to go deeper and find leftovers.
            In general, this uninstaller delivers what it promises: thorough uninstallation.
            The performance alone makes this little uninstall tool worth keeping."
            <span class="fr">-MakeUseOf</span>
          </dd>
        </dl>
      </div>
      <div class="user-rev" id="user_rev">
        <div class="content">
          <h3 class="hide">User Review</h3>
          <dl>
            <dd>
              <h4>
                "This Uninstaller is powerful, efficient, and has many functions to personalize
                your uninstall."
              </h4>
            </dd>
            <dd>
              "IObits new Uninstaller is an absolutely amazing addition to my Pc system,
              as we all know sometimes files are not completely deleted, this is not
              the case with what IObit have achieved here. I personally install, Uninstall
              very often given the nature of Beta testing simulation products, and after
              running the Powerful Scan no file is left behind. This Uninstaller is powerful,
              efficient, and has many functions to personalize your uninstall, ie Large
              Programs, Recently Installed, Batch Uninstall and File Shredder just to
              name a few. Take care of your Pc system and install IObit Uninstaller."
            </dd>
          </dl>
          <dl class="hide">
            <dd>
              <h4>"The IObit Uninstaller is just about the best uninstaller you can find."</h4>
            </dd>
            <dd>
              "The IObit Uninstaller is just about the best uninstaller you can find,
              especially with the Power scan that you can use to be sure nothing is left
              into your computer from the software you just uninstalled. I strongly recommended
              to my friends and they all love it very much."
            </dd>
          </dl>
          <dl class="hide">
            <dd>
              <h4>
                "IObit Uninstaller software, is an important tool to remove software
                from computer."
              </h4>
            </dd>
            <dd>
              "Apart from removing software, IObit Uninstaller  combines deep scan
              on the computer to find the "tails" that left behind and removes them completely.
              As one that performs quite a few regulations on the computer, since I installed
              IObit Uninstaller, I use only this software to make removing software.
              I strongly recommend to use IObit Uninstaller ."
            </dd>
          </dl>
          <dl class="hide">
            <dd>
              <h4>
                "IObit Uninstaller is a great tool for uninstalling programs and even
                toolbars and plugins."
              </h4>
            </dd>
            <dd>
              "IObit Uninstaller  is a great tool for uninstalling programs and even
              toolbars and plugins. Its use has been very helpful to me as it uninstalls
              programs and applications, as well as it cleans their associated register,
              in most cases unknown to users like myself. It has a nice and intuitive
              interface without needing major informatics skills. I recommend it strongly!"
            </dd>
          </dl>
        </div>
        <ul class="users">
          <li class="current">
            <img src="<?php echo $pResUrl; ?>images/richard-lincoln.jpg" alt="">
            <span>Richard Lincoln</span>
            <span>2015</span>
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/jacques-bergeron.jpg" alt="">
            <span>Jacques Bergeron</span>
            <span>2015</span>
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/ronen-levi.jpg" alt="">
            <span>Ronen Levi</span>
            <span>2015</span>
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/fernando-lourenco-gomes.jpg" alt="">
            <span>Fernando Lourenço Gomes</span>
            <span>2015</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->
  <div class="wrapper">
  
    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">More Reasons to Pre-order IObit Uninstaller 6</th>
            <th class="itemb">
              <span>IObit Uninstaller 6</span>
              <span>FREE</span>
            </th>
            <th class="itema">
              <span>IObit Uninstaller 6</span>
              <span>PRO</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
            <td class="virtue">Thorough and Clean Unwanted Programs Uninstall</td>
            <td class="itemb"><span class="all-icons mark-icons blue">√</span></td>
            <td class="itema"><span class="all-icons mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
            <td class="virtue">
              Plug-ins & Extensions Removal on Edge, Chrome, IE, Firefox, etc.
              <span class="all-icons new">improved</span>
            </td>
            <td class="itemb"><span class="all-icons mark-icons blue">√</span></td>
            <td class="itema"><span class="all-icons mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
            <td class="virtue">Quick/Multiple Uninstall of Programs & Extensions</td>
            <td class="itemb"><span class="all-icons mark-icons blue">√</span></td>
            <td class="itema"><span class="all-icons mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
            <td class="virtue">
              Completely Remove Win 10 & Win 8's Built-in Apps
              <span class="all-icons imp">Ameliore</span>
            </td>
            <td class="itemb"><span class="all-icons mark-icons blue">√</span></td>
            <td class="itema"><span class="all-icons mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
            <td class="virtue">
              Auto Leftover/Registry Scan & Removal for Faster and Clean PC
              <span class="all-icons imp">Ameliore</span>
            </td>
            <td class="itemb"><span class="all-icons mark-icons arrow">√</span></td>
            <td class="itema"><span class="all-icons mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
            <td class="virtue">
              Automatically Identify Malicious Plug-ins for Safer Browse
              <span class="all-icons new">Ameliore</span>
            </td>
            <td class="itemb"><span class="all-icons mark-icons arrow">√</span></td>
            <td class="itema"><span class="all-icons mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
            <td class="virtue">
              Secure Surfing without Annoying Ads by Adware Uninstall
              <span class="all-icons new">Ameliore</span>
            </td>
            <td class="itemb"><span class="all-icons mark-icons arrow">√</span></td>
            <td class="itema"><span class="all-icons mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
            <td class="virtue">
              Real-time Database for More Stubborn Programs Uninstall
              <span class="all-icons imp">Ameliore</span>
            </td>
            <td class="itemb"><span class="all-icons mark-icons arrow">√</span></td>
            <td class="itema"><span class="all-icons mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
            <td class="virtue">Automatic Update to Latest Version</td>
            <td class="itemb"><span class="all-icons mark-icons arrow">√</span></td>
            <td class="itema"><span class="all-icons mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
            <td class="virtue">Premium 24/7 Technical Support on Demand</td>
            <td class="itemb"><span class="all-icons mark-icons arrow">√</span></td>
            <td class="itema"><span class="all-icons mark-icons orange">√</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->

    <!-- footer-buy start -->
    <div class="footer-buy clearfix">
      <dl class="iu fl">
        <dt><img src="<?php echo $pResUrl; ?>images/footer_buy_iu.png" alt=""></dt>
        <dd> 1 Year / 3 PCs</dd>
      </dl>
      <dl class="plus fl">
        <dd class="all-icons">+</dd>
      </dl>
      <dl class="extra fl">
        <dt><img src="<?php echo $pResUrl; ?>images/footer_buy_iuextra.png" alt=""></dt>
        <dd> Extra 2 Months / 3 PCs</dd>
      </dl>
      <dl class="fl offer">
        <dt>
          Now
          <img src="<?php echo $pResUrl; ?>images/red_price.png" alt="">
          <del>$29.99</del>
        </dt>
        <dd>
          <a class="buybtn" href="http://www.iobit.com/buy.php?product=iu6preorder14m&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu2016iu6preorder');">
            <i class="all-icons">car</i>
            <span>Pre-order Now</span>
          </a>
        </dd>
        <dd> 14 Months Subscription / 3 PCs</dd>
      </dl>
    </div>
    <!-- footer-buy end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Note: </dt>
      <dd>
        *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
      </dd>
    </dl>
    <!-- annotation end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - 2016 IObit. All Rights Reserved</div>
  <!-- footer end -->
    <div class="pop-up">
        <div class="pop-main">
            <div class="pop-box">
                <h2>Note:</h2>
                <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
                <p>You will be redirected to the latest IObit promotion page automatically.</p>
            </div>
        </div>
    </div>
<script>    
  //userreview 
  $(".users li").mouseover(function(event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".user-rev .content > dl").eq(num).removeClass('hide').siblings().addClass('hide');
  });

  //count down
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    document.getElementById('countdown').innerHTML = '<li>'+h+'<span>Hr</span></li><li>'+ i+'<span>M</span></li><li>'+ s+'<span>s</span></li><li class="last">'+ mi+'<span>ms</span></li>'+'<sup>*</sup>';
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();
  setTimeout('window.location.href="https://purchase.iobit.com/aff/en/iu/2019launchsale/index.php'+location.search+'"',5000);
</script>
</div>
</body>
</html>
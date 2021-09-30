<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  if($_GET['ref']=='purchase'){
      $radnum = rand(1,100);
      if($radnum%2==0){
          $keywordsnow = 'purchase';
      }else{
          $keywordsnow = 'purchaseb';
          $tob = 1;
      }
  }
  if(!empty($keywordsnow)){
      $staticskeyUrl = 'http://interface.iobit.com/facebook/imftest/testimf.php?keyword='.$keywordsnow;
      file_get_contents($staticskeyUrl);
  }

  if(!empty($tob)){
    header("location:http://www.iobit.com/buy.php?product=imf-upgrade3&ref=".$keywordsnow."&refs=purchase_imf");
  }
$refstr=empty($_GET['ref'])?'enaff_imf_2016aprspringsale':$_GET['ref'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>80% OFF! Activate IMF PRO to Protect PC and Online Experience!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- header start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>IMF Spring Special Sale</h1>
        <h2>Save 80% to get full protection for you and your family!</h2>
      </div>
      <!-- time -->
      <ul id="countdown" class="countdown">
        <li>00</li>
        <li>00</li>
        <li>00</li>
        <li>000</li>
      </ul>
      <!-- panel -->
      <div class="panel whitebg clearfix">
        <img class="fl" src="<?php echo $pResUrl; ?>images/header_imf.png" alt="IObit Malware Fighter PRO">
        <dl class="fl">
          <dt><strong>IObit Malware Fighter 4 PRO </strong></dt>
          <dd>
            <i class="all-icons">√</i>
            Deeply Malware Removal with New Bitdefender Engine
          </dd>
          <dd>
            <i class="all-icons">√</i>
            Detect and Remove over 100 Million Hidden Threats
          </dd>
          <dd>
            <i class="all-icons">√</i>
            Auto Clean Surfing Privacy Trace with Browser Anti-Tracking
          </dd>
          <dd>
            <i class="all-icons">√</i>
            Automatic Background Scan and Huge Database Updates
          </dd>
          <dd class="last"><a href="javascript:void(0)" onclick="goTarget($('#compare'),-30)">Learn more about PRO edition >></a></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- main start -->
  <div class="main">
    <div class="wrapper">
      
      <!-- product start -->
      <div class="product whitebg">

        <!--intro -->
        <div class="intro clearfix">
          <div class="single fl">
            <dl class="title">
              <dt>Single Solution</dt>
              <dd>
                $19.95 <del> $39.95</del>
              </dd>
              <dd>
                <a class="probuybtn" href="http://www.iobit.com/buy.php?product=enaffimf4-upgrade&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf2016aprspringsale');">
                  Get It Now
                </a>
              </dd>
            </dl>
            <dl class="content">
              <dt>1 Year / 1 PC</dt>
              <dd class="first"><strong>$1.66</strong> per PC per month</dd>
              <dd>\</dd>
              <dd>\</dd>
              <dd>\</dd>
              <dd><del>$39.95  </del><b>Save 50%</b></dd>
            </dl>
          </div>
          <div class="family fl">
            <dl class="title">
              <dt>Family Pack</dt>
              <dd>
                $23.99 <del> $114.88</del>
              </dd>
              <dd>
                <a class="probuybtn" href="http://www.iobit.com/buy.php?product=enaffimf4iusdpf2399&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf2016aprspringsale');">
                  Get It Now
                </a>
              </dd>
            </dl>
            <dl class="content">
              <dt>1 Year / 3 PCs</dt>
              <dd class="first">Only <strong>$0.67</strong> per PC per month</dd>
              <dd>
                <ul>
                  <li>
                    <i class="all-icons">gift</i>
                    <span class="name">IObit Uninstaller PRO</span>
                    <span><del>$19.99</del></span>
                    <sup class="free">FREE</sup>
                  </li>
                  <li>
                    <i class="all-icons">gift</i>
                    <span class="name">Smart Defrag PRO</span>
                    <span><del>$19.99</del></span>
                    <sup class="free">FREE</sup>
                  </li>
                  <li>
                    <i class="all-icons">gift</i>
                    <span class="name">Protected Folder</span>
                    <span><del>$19.95</del></span>
                    <sup class="free">FREE</sup>
                  </li>
                </ul>
              </dd>
              <dd><del>$114.88  </del><b> Save <i>80%</i></b></dd>
            </dl>
          </div>
        </div>
        
        <!-- details -->
        <div class="details clearfix">
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/iu.png"></dt>
            <dd class="first"><strong>$0</strong> <del>$19.99</del> 1 Y / 1 PC</dd>
            <dd><strong>IObit Uninstaller PRO</strong></dd>
            <dd>Most Powerful Unin- <br>staller to Remove <br>Plug-ins & Apps!</dd>
          </dl>
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/sd.png"></dt>
            <dd class="first"><strong>$0</strong> <del>$19.99</del> 1 Y / 1 PC</dd>
            <dd><strong>Smart Defrag PRO</strong></dd>
            <dd>Get the Maximum Hard  <br>Drive Performance! </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/pf.png"></dt>
            <dd class="first"><strong>$0</strong> <del>$19.95</del> 1 Y / 1 PC</dd>
            <dd><strong>Protected Folder</strong></dd>
            <dd>No Worries of Data  <br>Theft or Privacy Leaks!</dd>
          </dl>
        </div>
      </div>
      <!-- product end -->

      <!-- payment start -->
      <div class="payment darkgraybg clearfix">
        <dl>
          <dt>Accepted Payments</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/payment.png"></dd>
        </dl>
        <dl>
          <dt>Money Back Guarantee</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/pay_refund.png"></dd>
        </dl>
        <dl>
          <dt>Secure Payment</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/pay_bfb.png"></dd>
        </dl>
      </div>
      <!-- payments end -->

      <!-- review start -->
      <div class="review lightgraybg">
        <div class="media-rev">
          <h3>Media Review</h3>
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/betanews.jpg"></dt>
            <dd>
              "IObit Malware Fighter PRO is a complete security package. It weeds out spyware, Trojan and all manner of other nasties, there're also Startup Guard that ensures no malicious processes start with Windows, Browser Guard that ensures no software makes changes to your web browser, File Guard that ensures unknown file you open do not cause any damage, USB Guard, Process Guard and more." 
              <span>- betanews.com</span>
            </dd>
          </dl>
        </div>
        <div class="user-rev" id="user-rev">
          <div class="content">
            <h3>User Review</h3>
            <dl>
              <dd><h4>"We have not had a problem since using your products."</h4></dd>
              <dd>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with IObit Malware Fighter Pro and Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence. We have not had a problem since using your products."</dd>
            </dl>
            <dl class="show">
              <dd>
                <h4>
                  "I also had other programs for this purpose installed, but IMF always finds the problems first and blocks them."
                </h4>
              </dd>
              <dd>
                "Some years ago somebody drew my attention to IObit Malware Fighter. First I was sceptic. But after installing it, it became my favourite anti-malware program. It is very easy to use. Through the years it already has detected several threats and removed it. In cooperation with the other IObit programs, like for example ASC, I have a good PC protection. I now recommend these programs to all my friends and family."
              </dd>
            </dl>
          </div>
          <ul class="users">
            <li>
              <img src="<?php echo $pResUrl; ?>images/bob_bassett.jpg" alt="Bob Bassett">
              Bob Bassett
              <span>2013</span>
            </li>
            <li class="current">
              <img src="<?php echo $pResUrl; ?>images/peter_stoffers.jpg" alt="Peter Stoffers">
              Peter Stoffers
              <span>2012</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- review end -->
      
      <!-- comparison start -->
      <div class="comparison whitebg" id="compare">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th colspan="2" style="text-align:left;"><b>See what PRO edition can do for you:</b></th>
              <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
              <th class="itema"><span>IObit Malware Fighter PRO</span>1 Year / 1 PC</th>
              <th class="itemb itempcs"><span>IObit Malware Fighter PRO</span>1 Year / 3 PCs</th> 
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
              <td class="virtue">Basic Anti-Malware Function</td>
              <td class="itemb"><span class="mark-icons blue">√</span></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
              <td class="virtue">Full Anti-Malware Ability with Unique "Dual-Core" Engine</td>
              <td class="itemb"></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
              <td class="virtue">Advanced Threat Protection with Bitdefender Anti-Virus Engine</td>
              <td class="itemb"></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
              <td class="virtue">Basic Real-time Protection against Malicious Behavior</td>
              <td class="itemb"><span class="mark-icons blue">√</span></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
              <td class="virtue">Comprehensive Real-time Protection for Top PC Security</td>
              <td class="itemb"></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
              <td class="virtue">Prevent Virus Infection Carried by USB Disk</td>
              <td class="itemb"></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
              <td class="virtue">Detect Malicious Process Running in RAM</td>
              <td class="itemb"></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
              <td class="virtue">Auto Clean Surfing Privacy Trace with Browser Anti-Tracking</td>
              <td class="itemb"></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
              <td class="virtue">Detect Threats by Analyzing Malicious Action</td>
              <td class="itemb"></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
              <td class="virtue">Intelligently Works in Background without Interrupting</td>
              <td class="itemb"></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
              <td class="virtue">Automatic Update to the Latest Version</td>
              <td class="itemb"></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
              <td class="virtue">Free 24/7 Technical Support on Demand</td>
              <td class="itemb"></td>
              <td class="itema"><span class="mark-icons orange">√</span></td>
              <td class="itemb"><span class="mark-icons orange">√</span></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="2"></th>
              <th class="itemb free"><span>IObit Malware Fighter FREE</span>Your current edition</th>
              <th class="itema">
                <span class="first"><strong>$19.95</strong> <del>$39.95</del></span>
                <span class="pc">1 Year / <strong>1 PC</strong></span>
                <a href="http://www.iobit.com/buy.php?product=enaffimf4-upgrade&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf2016aprspringsale');" class="tbbuybtn">
                  Buy Now
                </a>
              </th>
              <th class="itemb">
                <span><strong>$23.99</strong> <del>$114.88</del></span>
                <span class="pc pcs">1 Year / <strong>3 PCs</strong></span>
                <a href="http://www.iobit.com/buy.php?product=enaffimf4iusdpf2399&ref=<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf2016aprspringsale');" class="tbbuybtn">
                  Buy Now
                </a>
                We Recommend
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- comparison end -->

      <!-- annotation start -->
      <dl class="annotation whitebg">
        <dt>Note:</dt>
        <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
      <!-- footer end -->

    </div>
  </div>
  <!-- main end -->
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
  $(document).ready(function() {
    
    //userreview 
    $(".users li").mouseover(function(event) {
      var num = $(this).index();
      $(".users li").eq(num).addClass('current').siblings().removeClass('current');
      $("#user-rev .content > dl").eq(num).addClass('show').siblings().removeClass('show');
    });
  });

  function goTarget(target,yoffset) {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }

  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    document.getElementById('countdown').innerHTML = '<li class="first">'+h+'<span>H :</span>'+'</li><li>'+ i+'<span>M :</span>'+'</li><li>'+ s+'<span>S :</span>'+'</li><li class="last">'+ mi+'<sup>*</sup></li>';
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();
  setTimeout('window.location.href="https://purchase.iobit.com/aff/en/imf/2020newlaunchsale/index.php'+location.search+'"',5000);
</script>
</div>
</body>
</html>
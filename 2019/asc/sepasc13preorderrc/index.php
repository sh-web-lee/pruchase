<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enascpre_p' . $date;
  $c_name_t='enascpre_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pay $0 to get the newest Advanced SystemCare 13 PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Make your slow PC 200%* faster</h3>
      <dl>
        <dt class="price">
          <strong>$<b>0</b><sup>*</sup></strong>
          <a href="https://www.iobit.com/buy.php?product=asc13preorder&ref=asc13preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderrc');"
             class="buybtn">
            <span>Pre-order Now</span>
          </a>
        </dt>
        <dd class="number">
          HURRY, ONLY
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          LEFT. <span><span class="viewNum"><?php echo $viewNum;?></span> WATCHING NOW. </span>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- intro -->
<div class="intro wrapper clearfix">
  <span class="arrow"></span>
  <h2> Why Advanced SystemCare 13 PRO</h2>
  <div class="title">
    <span class="arrow"></span>
    <h2> Why Advanced SystemCare 13 PRO</h2>
  </div>
  <div class="left-message">
    <div class="message">

      <div class="list">
        <h3>Faster Computer</h3>
        <dl>
          <dt>200%* Faster PC</dt>
          <dd>Clean and optimize system to speed up startup <br> and computer running up to 200% faster.</dd>
          <dd><em>PRO ONLY</em></dd>
        </dl>
        <dl>
          <dt>300%* Faster Internet</dt>
          <dd>Optimize browser settings to accelerate download, <br> surfing, gaming, YouTube viewing up to 300% faster.</dd>
          <dd><em>PRO ONLY</em></dd>
        </dl>
      </div>
    </div>

    <div class="message">
      <div class="list">
        <h3>Safer Surfing</h3>
        <dl>
          <dt>Privacy Shield </dt>
          <dd>Stop untrusted programs to access your sensitive data like <br> contact, e-mail data, Dropbox, OneDrive etc. </dd>
          <dd><em>PRO ONLY</em></dd>
        </dl>
        <dl>
          <dt>Safe Browsing</dt>
          <dd>Auto clear browsing data and hide your trace to prevent <br> trackers from snooping on what you read, view and purchase.</dd>
          <dd><em>PRO ONLY</em></dd>
        </dl>
      </div>
    </div>

  </div>
  <div class="change-img">

    <div class="list-img list01 show">
      <img src="<?php echo getStaticUrl('images/intro1.png')?>" alt="" class="nomal">
      <div class="scan">
        <div class="circleprogress-content">
          <div class="circle right">
            <div class="circleprogress rightcircle"></div>
          </div>
          <div class="circle left">
            <div class="circleprogress leftcircle"></div>
          </div>
        </div>
      </div>
      <div class="img-before">
        <span class="change-num">50</span>
        <span class="completed"></span>
        <div class="circle">
          <div class="top-circle"></div>
          <div class="bottom-circle"></div>
        </div>
      </div>

    </div>

    <div class="list-img list02">
      <img src="<?php echo getStaticUrl('images/intro2.png')?>" alt="" class="nomal2">
      <div class="privacy">
        <span class="icon"></span>
        <div class="check"></div>
        <span class="text">1 secret access</span>
      </div>
      <div class="privacy-right"></div>
    </div>
  </div>
</div>
<!-- end intro -->

<!-- comparison -->
<div class="comparison wrapper">
  <span class="arrow"></span>
  <h2>More About Advanced SystemCare 13 PRO</h2>
  <table>
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="item">
        <div>Your Current Version</div>
      </th>
      <th class="item-up">
        <div>Advanced SystemCare <br> 13 PRO</div>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""></td>
      <td class="text">Basic PC cleaning and optimization</td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""></td>
      <td class="text">Basic PC protection with spyware removal</td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""></td>
      <td class="text">Capture intruders automatically with FaceID</td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""></td>
      <td class="text">Detect malicious links in your web email</td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""></td>
      <td class="text">Auto clean and optimization at a schedule time</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""></td>
      <td class="text">Deeply clean registry to reduce system crashes and errors</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""></td>
      <td class="text">Auto protect against malware infection in real time</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon08.png" alt=""></td>
      <td class="text">Auto stop unnecessary services to release RAM</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon09.png" alt=""></td>
      <td class="text">Detect the deepest threats rooted in computer</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon10.png" alt=""></td>
      <td class="text">Auto remove ads & privacy traces for safer browsing </td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 11 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon11.png" alt=""></td>
      <td class="text">Update outdated software with one click</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 12 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon12.png" alt=""></td>
      <td class="text">Auto Update to the latest version</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 13 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon13.png" alt=""></td>
      <td class="text">Free 24/7 technical support on demand</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up last"><span class="all-icons">√</span></td>
    </tr>
    </tbody>
  </table>
  <span class="border"></span>
</div>
<!-- end comparison -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Things We Do on Computer Optimization</h2>
    <div class="review-content clearfix">
      <div class="review-icons fl">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/review-icon01.png" alt=""></dt>
          <dd class="fl">
            Fix <br>
            issues for <br>
            <b>30,000,000</b> users
          </dd>
        </dl>
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/review-icon02.png" alt=""></dt>
          <dd class="fl">
            Save <br>
            <b>2,666,667</b> hours <br>
            per month
          </dd>
        </dl>
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/review-icon03.png" alt=""></dt>
          <dd class="fl">
            Save <br>
            <b>$1.18</b> billion <br>
            per year
          </dd>
        </dl>
      </div>
      <div class="review-users fr">
        <div class="review-details">
          <div>
            <!-- Media -->
            <h3>Media Review</h3>
            <p>"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</p>
            <cite>Cnet</cite>
          </div>
          <!-- Tony Fisher -->
          <div>
            <h3>User Review</h3>
            <p>"I have been using Advanced SystemCare Pro for a long time and this latest version 13 is even better than version 12. It can find and fix problems very quickly and has so many extra features you can use to keep your computer running well and stable. I cannot recommend it more highly."</p>
            <cite>Tony Fisher</cite>
          </div>
          <!-- Richard Preston -->
          <div>
            <h3>User Review</h3>
            <p>"I love using Advanced SystemCare 13 Beta. It is fast. It cleans up privacy traces, junk files and registry fragments. I especially like the sensitive area access permission pop-up. The first time an app tries to access sensitive files, a window opens to either allow access or deny. Once permission is granted for an app, the pop-up no longer occurs for that app. I know my sensitive files will be kept safe."</p>
            <cite>Richard Preston</cite>
          </div>
          <!-- Richard Beavers -->
          <div>
            <h3>User Review</h3>
            <p>"I have tried various programs over time which have promised to keep my computers running problem free. I turned to ASC years ago using the free version at first. Finding that I no longer suffered from the niggles and bloating that occurs I upgraded to the Paid version and have never looked back since. Advanced SystemCare Pro is the only one I would recommend based on my experiences. I also use IObit Uninstaller, Smart Defrag and Driver Booster just make things much better."</p>
            <cite>Richard Beavers</cite>
          </div>
          <!-- Pasty Clark -->
          <div>
            <h3>User Review</h3>
            <p>"Advanced System Care is a great program. I have used this program for many years and it works great. They're always improving their products and just get better over the years. I use many of their products and they all work great."</p>
            <cite>Patsy Clark</cite>
          </div>
          <!-- Danny R. Sheets -->
          <div>
            <h3>User Review</h3>
            <p>"I have never found a better pc maintenance or security program than Advanced Systems Care, since buying ASC I've never had issues with viruses, phishing, black screens or any other kind of bugaboo one could think of, best money I've ever spent when it comes to computers, thank you ASC for making my pc experience so much more enjoyable."</p>
            <cite>Danny R. Sheets</cite>
          </div>
          <!-- Daniel Sanders -->
          <div>
            <h3>User Review</h3>
            <p>"The New ASC 13 is a must have for all PC users. Its clean and intuitive interface makes it easy to use for the novice as well as the advanced user. Many powerful tools included to keep your PC running at its peak performance. Kudos to you IObit for such a wonderful set of tools all in one place."</p>
            <cite>Daniel Sanders</cite>
          </div>
        </div>
        <div class="review-photos clearfix">
          <ul class="fr">
            <li class="one" data-num="0" data-fixed="0"><img src="<?php echo $pResUrl;?>images/cnet.png" alt="Cnet"></li>
            <li class="two" data-num="6" data-fixed="6"><img src="<?php echo $pResUrl;?>images/daniel-sanders.png" alt="Daniel Sanders"></li>
            <li class="three" data-num="5" data-fixed="5"><img src="<?php echo $pResUrl;?>images/danny-r-sheets.png" alt="Danny R. Sheets."></li>
            <li class="four" data-num="4" data-fixed="4"><img src="<?php echo $pResUrl;?>images/patsy-clark.png" alt="Patsy Clark"></li>
            <li class="five" data-num="3" data-fixed="3"><img src="<?php echo $pResUrl;?>images/richard-beavers.png" alt="Richard Beavers"></li>
            <li class="six" data-num="2" data-fixed="2"><img src="<?php echo $pResUrl;?>images/richard-preston.png" alt="Richard Preston"></li>
            <li class="seven" data-num="1" data-fixed="1"><img src="<?php echo $pResUrl;?>images/tony-fisher.png" alt="Tony Fisher"></li>
          </ul>
        </div>
        <a class="next" href="javascript: userNext();"></a>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- bottom -->
<div class="bottom">
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>World-wide Awards</h2>
    <p>
      As being trusted and awarded by those world-class media in the past twelve years, you know you’ve got the right PC optimizer.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dd>
          Note:
        </dd>
        <dd>*.We tested the Advanced SystemCare 13 PRO in our internal test lab. Your results may vary.</dd>
        <dd>*.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $19.99 automatically. This 60% discount from the original price of $49.99 is bonus only for preorders!</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- footer end -->

</div>
<!-- end bottom -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      HURRY, ONLY
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      LEFT. <span><span class="viewNum"><?php echo $viewNum;?></span> WATCHING NOW. </span>
    </div>
    <div class="price">
      <strong>$<b>0</b><sup>*</sup></strong>
      <a href="https://www.iobit.com/buy.php?product=asc13preorder&ref=asc13preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderrc');"
         class="buybtn">
        <span>Pre-order Now</span>
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
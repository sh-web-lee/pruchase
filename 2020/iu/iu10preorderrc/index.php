<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'eniupreorder_p' . $date;
  $c_name_t='eniupreorder_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(50,79);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['user'])?'':('-u'.$_GET['user']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pay $0 to get IObit Uninstaller 10 PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- container start -->
<div class="container">
  <!-- banner start -->
  <div class="banner" data-name="animation">
    <div class="wrapper">
      <!-- top -->
      <div class="top clearfix">
        <!-- logo -->
        <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
        <div class="record-box">
          <i></i>
          We will automatically record system changes made by each installation.
        </div>
        <!-- icon -->
        <div class="icon"><img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""> IObit Uninstaller 10</div>
      </div>
      <!-- content -->
      <div class=" content clearfix">
        <!-- left-img -->
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
          <img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
          <img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
        </div>
        <!-- right -->
        <div class="right fr">
          <h1 data-name="default">Welcome to Our Presale</h1>
          <h2 data-name="default">Get Pro Edition for $0</h2>
          <h3 data-name="default">Limited to first 500 users per day before August 25<sup>th</sup></h3>
          <!-- number -->
          <div class="number" data-name="default">
            <div id="reduce" class="reduceNum">
              <div class="listbox"><span class="list"><b>0</b></span></div>
              <div class="listbox"><span class="list"><b>5</b></span></div>
              <div class="listbox"><span class="list"><b>0</b></span></div>
            </div>
            left now
            <div class="bar">
              <span></span>
            </div>
          </div>
          <!-- message -->
          <div class="price" data-name="default">
            <!-- price -->
            <strong>$0 <sup>*</sup></strong>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=iu10preorder&ref=en-iu10preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderrc');">
              Get It Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <!-- title -->
      <h2>Make Uninstallation Easier, Cleaner and Safer</h2>
      <!-- content -->
      <div class="content">
        <!-- feature-nav -->
        <ul class="feature-nav" id="barUl">
          <li class="active one">Easier</li>
          <li class="two">Cleaner</li>
          <li class="three">Safer</li>
        </ul>
        <!-- feature-container -->
        <div class="feature-container clearfix">
          <!-- interface -->
          <div class="interface-list fl">
            <!-- Easier -->
            <div class="interface easier">
              <span>Uninstall</span>
              <ul>
                <li class="act05"><img src="<?php echo getStaticUrl('images/feature-easier-icon05.png')?>" alt=""></li>
                <li class="act04"><img src="<?php echo getStaticUrl('images/feature-easier-icon04.png')?>" alt=""></li>
                <li class="act03"><img src="<?php echo getStaticUrl('images/feature-easier-icon03.png')?>" alt=""></li>
                <li class="act02"><img src="<?php echo getStaticUrl('images/feature-easier-icon02.png')?>" alt=""></li>
                <li class="act01"><img src="<?php echo getStaticUrl('images/feature-easier-icon01.png')?>" alt=""></li>
              </ul>
            </div>

            <!-- Cleaner -->
            <div class="interface cleaner">
              <span></span>
              <div class="picture"><span></span></div>
              <div class="xprogress"><span></span></div>
            </div>

            <!-- Safer -->
            <div class="interface safer">
              <ul>
                <li class="act one">
                  Malicious Toolbars and Plugs-ins
                </li>
                <li class="act two">
                  Ad-based Toolbars and Plug-ins
                </li>
                <li class="three">
                  Trusted Toolbars and Plug-ins
                </li>
              </ul>
            </div>
          </div>

          <!-- details -->
          <div class="detail-list fr" id="wheelUl">
            <!-- one -->
            <div class="detail">
              <h3>Uninstall Any Programs, <br> Plugins & Windows Apps</h3>
              <ul>
                <li class="one">Programs that can't be uninstalled by conventional means.</li>
                <li class="two">Third-party programs installed alongside freeware.</li>
                <li class="three">Browser extensions installed without your permission.</li>
                <li class="four">Windows 10's built-in apps that you don’t want.</li>
              </ul>
            </div>

            <!-- two -->
            <div class="detail">
              <h3>Clean Traces of Uninstalled <br> Programs</h3>
              <ul>
                <li class="one">Leftovers of the standard uninstall.</li>
                <li class="two">Remnants of already uninstalled programs.</li>
                <li class="three">Files and registries which can’t be removed by standard <br> uninstall.</li>
              </ul>
            </div>

            <!-- three -->
            <div class="detail">
              <h3><br>Reduce Security Risk</h3>
              <ul>
                <li class="one">Identify plug-ins and tell you which are safe to leave <br> on your PC.</li>
                <li class="two">Update outdated software to close the holes in your <br> PC’s defense.</li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <h2>Editions Comparison</h2>
      <!-- table -->
      <table>
        <thead>
          <tr>
            <th colspan="2"></th>
            <th class="free" valign="bottom"><div>Your Current Version</div></th>
            <th class="pro"><div>PRO Edition</div></th>
          </tr>
        </thead>
        <tbody>
          <!-- 01 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
            <td class="text">Uninstall programs, plugins and apps with 1-click</td>
            <td class="free"><i class="all-icons yes">√</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 02 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
            <td class="text">Scan leftovers for the standard uninstall</td>
            <td class="free"><i class="all-icons yes">√</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 03 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
            <td class="text">In-depth cleaning of files which can’t be removed by standard uninstall</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 04 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
            <td class="text">Remove programs that can't be uninstalled by conventional means</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 05 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
            <td class="text">Uninstall third-party programs installed alongside freeware</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 07 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
            <td class="text">Auto clean leftovers of already uninstalled programs</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 08 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
            <td class="text">Identify and remove malicious & advertising plug-ins</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 09 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
            <td class="text">One click to update all important software</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 10 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
            <td class="text">Automatic update to latest version</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 11 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></td>
            <td class="text">Premium 24/7 technical support on demand</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
        </tbody>
      </table>
      <!-- buybtn -->
      <div>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=iu10preorder&ref=en-iu10preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderrc');">
          <span>Get Pro for $0</span>
        </a>
      </div>
    </div>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>It’s a Trust-worthy Uninstaller</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
        <dd>
          <h3>50M+</h3>
          <p>Downloads</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
        <dd>
          <h3>4.5+</h3>
          <p>User’s Rating</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
        <dd>
          <h3>1000+</h3>
          <p>Media Recommendations</p>
        </dd>
      </dl>
      <div class="review-box">
        <div class="box">
          <h3>User Review</h3>
          <p>"IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."</p>
        </div>
        <div class="box">
          <h3>User Review</h3>
          <p>This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."</p>
        </div>
        <div class="box active">
          <h3>Media Review</h3>
          <p>"If you need a program that lets you cleanly and completely uninstall applications, fire up IObit Uninstaller. This free utility makes it a breeze to delete apps, including stray files that are often left behind when you use Windows to delete software from your hard drive or SSD."</p>
        </div>
        <div class="box">
          <h3>User Review</h3>
          <p>"I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "</p>
        </div>
        <div class="box">
          <h3>User Review</h3>
          <p>"IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."</p>
        </div>
      </div>
      <ul>
        <li>
          <span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
          <p>Ivan White</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
          <p> Ali Tekin</p>
        </li>
        <li class="active">
          <span><img src="<?php echo getStaticUrl('images/pcgm.png')?>" alt="PC Magazine"></span>
          <p>PC Magazine</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></span>
          <p>Samrat Kumar Chakrabortty</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></span>
          <p>John Glenn Perong</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <dl class="annotation">
        <dt>Note:</dt>
        <dd>
          *.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $14.77 automatically. This 50% discount from the original price of $29.99 is bonus only for preorders!
        </dd>
        <dd>*.If you're unsatisfied, you can cancel the order you placed within 30 days without paying a fee.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- bottom end -->
</div>
<!-- container end -->


<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
      IObit Uninstaller 10
    </div>
    <div class="number fl">
      <div id="fReduce" class="reduceNum">
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
      </div>
      of 500 places left now
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>refStr="<?php echo $refStr;?>";</script>
<script>to="<?php echo $_GET['to'];?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
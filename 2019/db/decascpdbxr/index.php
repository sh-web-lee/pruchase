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
  $c_name = 'endecascpdbxr_p' . $date;
  $c_name_t='endecascpdbxr_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

// $refStr=empty($_GET['pop'])?'':('-'.$_GET['pop']);

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}

$ver=0;
if(preg_match('/(.*)\./isU',$_GET['ver'],$matches)){
  $ver=$matches[1];
}
// $refStr.='-'.$_GET['pop'];
// if(in_array($_GET['pop'],array('xr_ascdb'))){
//   $refStr.='-'.$_GET['pop'];
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% OFF to Get Driver Booster PRO - Christmas Sale | IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
      <h1 class="title">Big Sale Last Chance to Save Big!</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
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
            <span>Seats Left Now</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price">$<big>19.95</big></strong> <del>$74.85</del></p>
              <p>1 year subscription / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=db3pc1995&ref=xr_ascpdb&refs=purchase_dbx"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-xmasascp');">
                Activate Now
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
      Try it RISK FREE – Activate now to keep your PC in excellent status and get our 60-day Money Back Guarantee
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <h2>Driver Booster PRO Gives You</h2>
    <p class="title"><span>worry-free Update Process</span></p>
    <div class="wrapper intro-box">
      <!-- intro-img -->
      <div class="intro-img">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <div class="scanbox">
          <div class="scan">
            <div class="circleprogress-content">
              <div class="circle left">
                <div class="circleprogress leftcircle"></div>
              </div>
              <div class="circle right">
                <div class="circleprogress rightcircle"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="attention"><img src="<?php echo getStaticUrl('images/screen04.png')?>" alt=""/></div>
        <div class="downbox">
          <img src="<?php echo getStaticUrl('images/screen05.png')?>" alt=""/>
          <div id="down" class="downloading">
            <i class="down-icon"><em></em></i>
            <div class="down-info">
              <p class="down-num">Downloading (<span>0</span>%)...</p>
              <div class="down-bar">
                <span class="down-red-bar"><span class="down-red-light"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="installbox">
          <img src="<?php echo getStaticUrl('images/screen06.png')?>" alt=""/>
          <div id="install" class="downloading">
            <i class="down-icon"><em></em></i>
            <div class="down-info">
              <p class="down-num">Installing (<span>0</span>%)...</p>
              <div class="down-bar">
                <span class="down-red-bar"><span class="down-red-light"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="completed">
          <i class="completed-icon"></i>
          <p>Congratulations! Update Completed.</p>
        </div>
      </div>
      <!-- intro-txt -->
      <div class="intro-txt clearfix">
        <div class="intro-tag">
          <span class="tag-red"></span>
          <span class="tag-bg"></span>
          <div class="tag-num">
            <div>1</div>
            <div>2</div>
            <div class="last">3</div>
          </div>
        </div>
        <ul class="intro-details">
          <li>
            <h3>Auto check driver status</h3>
            <p>Automatically check driver status and latest updates for over 3,500,000 drivers.</p>
          </li>
          <li>
            <h3>Auto download drivers <i class="only">PRO Only</i></h3>
            <p>Automatically download drivers with 100%* faster speed while your system is idle.</p>
          </li>
          <li>
            <h3>Auto install drivers <i class="only">PRO Only</i></h3>
            <p>Automatically install drivers without disturbing and backup previous drivers in case of anything unexpected.</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- intro-pro -->
    <div class="wrapper intro-pro">
      <p class="title"><span>Better Game Performance</span></p>
      <ul>
        <li>Focus system resource on game by <br> ending unnecessary processes.</li>
        <li>Guarantee smooth game launching and faster <br> gaming with suitable components. <br> <i class="only red">PRO Only</i></li>
      </ul>
    </div>
  </div>
  <!-- intro end -->

  <!-- compare start -->
  <div class="compare-wrap">
    <!-- comparison start -->
    <div class="comparison wrapper" id="compare">
      <h2>But Now You Only Have…</h2>
      <table>
        <thead>
          <tr>
            <th class="text"></th>
            <th class="space"></th>
            <th class="itema">
              <div class="free">Your current version</div>
            </th>
            <th class="space"></th>
            <th class="itemb">
              <div class="pro">Driver Booster 7 <big>PRO</big></div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="virtue">Driver database</td>
            <td class="space"></td>
            <td class="itema"><span class="comparethree">3,000,000+</span></td>
            <td class="space"></td>
            <td class="itemb"><span class="comparefive">3,500,000+</span></td>
          </tr>
          <tr class="two">
            <td class="virtue">Automatically check driver status</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons black">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr class="three">
            <td class="virtue">100%* faster download speed</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Auto update drivers when system is idle</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Auto backup & restore before updating</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Necessary components for smooth game</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Priority to get latest game ready drivers</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">1-click to fix device errors</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Auto update to the latest version</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th></th>
            <th class="space"></th>
            <th class="itema"></th>
            <th class="space"></th>
            <th class="itemb"></th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- comparison end -->

    <!-- feature start -->
    <div id="feature" class="feature wrapper">
      <h2>Activate all features with <span>70% OFF</span> today!</h2>
      <div class="price">
        <p><strong class="change-price">$<big>19</big>.95</strong> <del class="original">$74.85</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=db3pc1995&ref=xr_ascpdb&refs=purchase_dbx"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-xmasascp');">
          Activate Now
        </a>
        <p>1 year subscription / 3 PCs</p>
      </div>
    </div>
    <!-- feature end -->
  </div>
  <!-- compare end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>What We've Achieved & Received</h2>
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
      <span class="arrow"></span>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <p>
        As being trusted and awarded by those world-class media in the past six years, you know you’ve got the right driver updater.
      </p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
            <p>
              We're confident that activating PRO edition will fix all your headache driver matters for affordable price!
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>We accept</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>Note:</dt>
        <dd>*.Data may vary based on different system or computer.</dd>
        <dd>
          *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
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
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> visitors now,<b class="packsNum">50</b>seats left now.</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price">$<big>19.95</big></strong> <del>$74.85</del></p>
          <p>1 year subscription / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=db3pc1995&ref=xr_ascpdb&refs=purchase_dbx"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-xmasascp');">
            Activate Now
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <!-- popbox start -->
  <div class="pop-bg"></div>
  <div class="popbox">
    <h2 class="title">A Christmas Surprise for our lucky visitor</h2>
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
    </div>
    <div class="msgbox fl">
      <h3>Exclusive <span class="off">75%</span> OFF</h3>
      <h4 class="minbox">Ends in <span class="minute"><em>6</em><em class="last">0</em></span> s</h4>
      <div class="price">
        <p><strong class="change-price">$<big>18.95</big></strong> <del>$74.85</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=db3pc1895&ref=xr_ascpdbpop&refs=purchase_dbx"
           onclick="ga('send', 'event', 'dbbuypop', 'buy', 'dbpurchase-xmasascp');">
          Activate Now
        </a>
        <p>1 year subscription / 3 PCs</p>
      </div>
    </div>
    <span class="close"></span>
  </div>
  <!-- popbox end -->



  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";

    $(function(){
      var ver=<?php echo $ver;?>;
      switch(ver) {
        case 5:
          $(".comparethree").html("1,000,000+");
          break;
        case 6:
          $(".comparethree").html("2,500,000+");
          break;
        default:
          $(".comparethree").html("3,000,000+");
      } 
    });
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
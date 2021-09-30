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
  $isInit=$_GET['isInit'];
  $c_name = 'endbdecdbxre_p' . $date;
  $c_name_t='endbdecdbxre_t' . $date;
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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);

// function paramDeal($num,$decimals,$separate=',',$decimal='.'){
//  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
// }

// $params=json_decode(base64_decode($_GET['data']));
// $fileSizeShow=paramDeal($params->junk/(1024*1024*1024),2,',','.');
// $fileSizeUnit='GB';
// if($fileSizeShow<=1){
//  $fileSizeShow=paramDeal($params->junk/(1024*1024),2,',','.');
//  $fileSizeUnit='MB';
// }
// $paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
// $paramPri=paramDeal($params->privacy,0,',','.');
// $paramPro=paramDeal($params->program,0,',','.');

function paramDeal($num){
  return (intval($num)>0)?number_format(intval($num)):'';
}


$packsNum=49;
$paramData=json_decode(base64_decode($_GET['data']));

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>80% OFF to Get Back Driver Booster PRO – Christmas Sale | IObit</title>
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
          <div class="discount">65% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>80% Discount Limited to <b>FIRST 999</b> Purchase</h2></div>
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
            <!-- <p class="change">Hurry, only <b class="packsNum">50</b> Left at this price!</p> -->
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price">$<big>12.85</big></strong> <del>$74.85</del></p>
              <p>1 year subscription / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=2019db3pc1285&ref=xr_dbe<?php echo $refStr;?>&refs=purchase_dbx"
                 onclick="ga('send', 'event', 'dbebuy', 'buy', 'dbepurchase-xmas');">
                Renew Now
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
    <div class="wrapper">
      <h2>What Did Driver Booster PRO Do for You?</h2>
      <div class="clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
          <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
          <div class="scan">SCAN</div>
        </div>
        <ul class="right fr">
          <li>
            <i class="all-icons">●</i>
            <span>Updated <b>XX</b> outdated drivers for smooth PC performance</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span>Updated <b>XX</b> game components for smoother gaming</span>
          </li>
          <li class="db5">
            <i class="all-icons">●</i>
            <span>Updated <b>xx</b> game ready drivers for better game performance</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span>Fixed <b>xx</b> device errors for smooth hardware connection</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span> Accelerated driver download speed up to <b>100%</b> faster</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- enjoy start -->
  <div class="enjoy">
    <div class="wrapper clearfix">
      <span class="arrow"></span>
      <div class="left fl">
        <h3>Now with Expired Version,</h3>
        <h2>You <b>No Longer</b> Enjoy:</h2>
        <ul>
          <li>
            <i class="all-icons">√</i>
            <span>Large driver database for powerful driver updating</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Fast driver download speed without disturbing</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Game component updates for smooth game launching</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Automatic driver update processes</span>
          </li>
          <li class="db5">
            <i class="all-icons">√</i>
            <span>Be the first to get latest game-ready drivers</span>
          </li>
        </ul>
      </div>
      <div class="right fr">
        <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
      </div>
    </div>
  </div>
  <!-- enjoy end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Come Back with Us, New PRO Version <span>Helps More</span>: </h2>
      <div class="container clearfix">
        <div>
          <dl>
            <dt><span class="icon01"></span></dt>
            <dd>
              <h3>4GB<small>*</small> more</h3>
              <p><b>Disk space released</b></p>
            </dd>
          </dl>
        </div>
        <div>
          <dl>
            <dt><span class="icon02"></span></dt>
            <dd>
              <h3>195% more</h3>
              <p><b>Spyware detected</b></p>
            </dd>
          </dl>
        </div>
        <div>
          <dl>
            <dt><span class="icon03"></span></dt>
            <dd>
              <h3>90% more</h3>
              <p><b>Software kept updated</b></p>
            </dd>
          </dl>
        </div>
        <div >
          <dl>
            <dt><span class="icon04"></span></dt>
            <dd>
              <h3>Fully</h3>
              <p><b>Protected Privacy</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

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
          <p><strong class="change-price">$<big>12.85</big></strong> <del>$74.85</del></p>
          <p>1 year subscription / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=2019db3pc1285&ref=xr_dbe<?php echo $refStr;?>&refs=purchase_dbx"
             onclick="ga('send', 'event', 'dbebuy', 'buy', 'dbepurchase-xmas');">
            Renew Now
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
      <h3>Exclusive 70% OFF <span class="off">80%</span></h3>
      <h4 class="minbox">Ends in <span class="minute"><em>6</em><em class="last">0</em></span> s</h4>
      <div class="price">
        <p><strong class="change-price">$<big>12.85</big></strong> <del>$74.85</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=2019db3pc1285&ref=xr_dbepop<?php echo $refStr;?>&refs=purchase_dbx"
           onclick="ga('send', 'event', 'dbebuypop', 'buy', 'dbepurchase-xmas');">
          Renew Now
        </a>
        <p>1 year subscription / 3 PCs</p>
      </div>
    </div>
    <span class="close"></span>
  </div>
  <!-- popbox end -->



  <script>
    packsNum=<?php echo $packsNum;?>;
    $(".intro .wrapper .right b").eq(0).html("<?php echo paramDeal($paramData->UpdDrv);?>").end().
    eq(1).html("<?php echo paramDeal($paramData->UpdCmp);?>").end().
    eq(2).html("<?php echo paramDeal($paramData->UpdRdy);?>").end().
    eq(3).html("<?php echo paramDeal($paramData->FixedErr);?>");

    $(function(){
      var ver=<?php echo $ver;?>;
      if(ver){
        fillFeature(ver);
      }
    });
  </script>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
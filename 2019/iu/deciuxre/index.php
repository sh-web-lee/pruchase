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
  $c_name = 'endeciuxre_p' . $date;
  $c_name_t='endeciuxre_t' . $date;
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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);

function paramDeal($num,$decimals,$separate=',',$decimal='.'){
  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
}

$params=json_decode(base64_decode($_GET['data']),true);
$fileSizeShow=paramDeal($params['filesize']/(1024*1024*1024),2,',','.');
$fileSizeUnit='GB';
if($fileSizeShow<=1){
  $fileSizeShow=paramDeal($params['filesize']/(1024*1024),2,',','.');
  $fileSizeUnit='MB';
}
$paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
$uninstallPP = paramDeal($params['soft']+$params['plugin'],0,',','.');
$removeBP = paramDeal($params['stubborn']+$params['bundle'],0,',','.');
$autoClean = paramDeal($params['reg']+$params['file']+$params['service']+$params['task'],0,',','.');
$softUpdate=paramDeal($params['softupdate'],0,',','.');
$removePM=paramDeal($params['plugin-mp'],0,',','.');

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

/*function paramDeal($num){
  return (intval($num)>0)?number_format(intval($num)):'';
}*/

$packsNum=49;
//$transData=$paramData=json_decode(base64_decode($_GET['data']));

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
<title>55% OFF to Get Back IObit Uninstaller PRO – Christmas Sale | IObit</title>
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
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
          <div class="discount">55% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>55% Discount Limited to <b>FIRST 999</b> Purchase</h2></div>
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
              <p><strong class="change-price">$<big>12.97</big></strong> <del>$29.99</del></p>
              <p>1 year subscription / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=2019iu3pc1297&ref=xr_iue<?php echo $refStr;?>&refs=purchase_iux"
                 onclick="ga('send', 'event', 'iuebuy', 'buy', 'iuepurchase-xmas');">
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
      <h2>What Did IObit Uninstller PRO Do for You?</h2>
      <div class="clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
          <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        </div>
        <ul class="right fr">
          <li>
            <i class="all-icons">●</i>
            <span>Freed up <b>XX</b> disk space</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span>Uninstall <b>XX</b> unwanted programs and plug-ins.</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span>Remove <b>XX</b> stubborn and bundled programs that won’t uninstall.</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span>Auto clean <b>XX</b> leftovers after uninstallation.</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span>Update <b>xx</b> outdated software with one click.</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span>Remove <b>xx</b> malicious and advertising extensions.</span>
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
            <span>Complete uninstall for stubborn and bundled programs.</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Auto clean leftovers refused to be deleted through other utilities.</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Removal of extensions which may inject ads or malicious links into webpages.</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Real-time monitoring of file changes made by programs during its installation.</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Instant update for outdated software.</span>
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
      <h2>Come Back with Us, New PRO Version <span>Helps More</span>:</h2>
      <div class="container clearfix">
        <div>
          <dl>
            <dt><span class="icon01"></span></dt>
            <dd>
              <h3>150% More</h3>
              <p><b>Stubborn programs removal</b></p>
            </dd>
          </dl>
        </div>
        <div>
          <dl>
            <dt><span class="icon02"></span></dt>
            <dd>
              <h3>50%<small>*</small> More</h3>
              <p><b>Leftovers cleaning</b></p>
            </dd>
          </dl>
        </div>
        <div>
          <dl>
            <dt><span class="icon03"></span></dt>
            <dd>
              <h3>50% More</h3>
              <p><b>Malicious plugins identification</b></p>
            </dd>
          </dl>
        </div>
        <div >
          <dl>
            <dt><span class="icon04"></span></dt>
            <dd>
              <h3>Real-time Monitor</h3>
              <p><b>Monitoring of file changes</b></p>
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
      <div class="review-box">
        <div class="reviews">
          <h3>User Review</h3>
          <p>
            I have used IObit programs for years with great effect ! For this reason I stay with IObit products. I, in the past have serviced and fixed laptops and mobiles (android) and always leave them, with IObit products installed, and ask them to regularly 'hit the big' C' and tell them it will automatically fix and speed up their laptop/computer/mobile! :) I highly recommend the uninstaller (and the latest beta) as a safe reliable program that shifts stubborn programs! Most importantly, remove 'hidden' coding that the programmer intended to leave, which then brings adverts to re-install again! IObit 'ALL' products are safe' and easy to use' most of all look after your PC's.
          </p>
        </div>
        <div class="reviews">
          <h3>User Review</h3>
          <p>
            I find IObit uninstaller excellent to use as it has all you could wish for. I love the fact that it uninstalls all the left over fragments. It also has a software updater which reminds you when one of the programs need updating, and the fact that it will uninstall batch programs really makes it a winner. In fact it is basically just what one needs to keep your computer good to go.
          </p>
        </div>
        <div class="reviews active">
          <h3>Media Review</h3>
          <p>
            This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping.
          </p>
        </div>
        <div class="reviews">
          <h3>User Review</h3>
          <p>
            IObit Uninstaller is the best software to remove programs on the computer, it is fast and very effective it does not compare anything with basic uninstaller of windows, it seriously cleans all the rest of the program and so there are no delays in the computer. I have been using it for a few months and I do not know how to live without it, I recommend it to my friends and family. Thanks IObit Uninstaller is fantastic.
          </p>
        </div>
        <div class="reviews">
          <h3>User Review</h3>
          <p>
            The IObit Uninstaller gets better with every update. I've been using it for more than 3 years now. It's fast to load and has simple UI. Some of the many features I regularly use are Batch uninstall, Powerful scan, File shredder and Recently installed feature which gives me quick access to a program that I just installed which I don't like or it doesn't work properly.
          </p>
        </div>
      </div>
      <ul class="handle clearfix">
        <li>
          <div class="badge">
            <img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/>
            <span></span>
          </div>
          <strong>Jeff A Watts</strong>
        </li>
        <li>
          <div class="badge">
            <img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/>
            <span></span>
          </div>
          <strong>Lynette van Niekerk</strong>
        </li>
        <li class="active">
          <div class="badge">
            <img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="Paulo Martins">
            <span></span>
          </div>
          <strong>MakeUseOf</strong>
        </li>
        <li>
          <div class="badge">
            <img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins">
            <span></span>
          </div>
          <strong>Paulo Martins</strong>
        </li>
        <li>
          <div class="badge">
            <img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić">
            <span></span>
          </div>
          <strong>Lovro Žužić</strong>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <p>
        As being trusted and awarded by those world-class media in the past eight years, you know you’ve got the right program uninstaller.
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
              We're confident that activating PRO edition will quickly uninstall unwanted programs for affordable price!
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
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
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
          <p><strong class="change-price">$<big>12.97</big></strong> <del>$29.99</del></p>
          <p>1 year subscription / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=2019iu3pc1297&ref=xr_iue<?php echo $refStr;?>&refs=purchase_iux"
             onclick="ga('send', 'event', 'iuebuy', 'buy', 'iuepurchase-xmas');">
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
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
    </div>
    <div class="msgbox fl">
      <h3>Exclusive 70% OFF <span class="off">70%</span></h3>
      <h4 class="minbox">Ends in <span class="minute"><em>6</em><em class="last">0</em></span> s</h4>
      <div class="price">
        <p><strong class="change-price">$<big>12.97</big></strong> <del>$29.99</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=2019iu3pc1297&ref=xr_iuepop<?php echo $refStr;?>&refs=purchase_iux"
           onclick="ga('send', 'event', 'iuebuypop', 'buy', 'iuepurchase-xmas');">
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
    $(".intro .wrapper .right b").eq(0).html("<?php echo $paramJunk;?>").end().
    eq(1).html("<?php echo $uninstallPP;?>").end().
    eq(2).html("<?php echo $removeBP;?>").end().
    eq(3).html("<?php echo $autoClean;?>").end().
    eq(4).html("<?php echo $softUpdate;?>").end().
    eq(5).html("<?php echo $removePM;?>");
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
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
  $c_name = 'endecimfxre_p' . $date;
  $c_name_t='endecimfxre_t' . $date;
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

//function paramDeal($num,$decimals,$separate=',',$decimal='.'){
//  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
//}

//$params=json_decode(base64_decode($_GET['data']));
//$fileSizeShow=paramDeal($params->junk/(1024*1024*1024),2,',','.');
//$fileSizeUnit='GB';
//if($fileSizeShow<=1){
//  $fileSizeShow=paramDeal($params->junk/(1024*1024),2,',','.');
//  $fileSizeUnit='MB';
//}
//$paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
//$paramPri=paramDeal($params->privacy,0,',','.');
//$paramPro=paramDeal($params->program,0,',','.');

function paramDeal($num){
  return (intval($num)>0)?number_format(intval($num)):'';
}

$packsNum=49;
$transData=$paramData=json_decode(base64_decode($_GET['data']));

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
<title>60% OFF to Get Back IObit Malware Fighter PRO - Christmas Sale | IObit</title>
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
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
          <div class="discount">65% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>60% Discount Limited to <b>FIRST 999</b> Purchase</h2></div>
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
              <p><strong class="change-price">$<big>19.95</big></strong> <del>$54.95</del></p>
              <p>1 year subscription / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=2019imf3pc1995&ref=xr_imfe<?php echo $refStr;?>&refs=purchase_imfx"
                 onclick="ga('send', 'event', 'imfebuy', 'buy', 'imfepurchase-xmas');">
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
      <h2>What Did IObit Malware Fighter PRO Do for You?</h2>
      <div class="clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
          <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        </div>
        <ul class="right fr">
          <li>
            <i class="all-icons">●</i>
            <span>Removed <b>XX</b> security threats for safe PC & personal data</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span>Blocked <b>XX</b> ransomware trying to encrypt your important files</span>
          </li>
          <li class="db5">
            <i class="all-icons">●</i>
            <span>Erased <b>XX</b> online traces to avoid privacy leak</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span>Detected <b>XX</b> untrusted access to your camera</span>
          </li>
          <li>
            <i class="all-icons">●</i>
            <span>Enabled <b>Full-round</b> protection to stop infections in real time</span>
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
            <span>Bitdefender anti-virus engine for 200 million malware detection</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Powerful protection to stop ransomware attacks</span>
          </li>
          <li class="imf7">
            <i class="all-icons">√</i>
            <span>Password-protection for your personal data</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Automatic online trace cleaning for safe browsing </span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Camera protection against access from untrusted programs</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Real-time protection for secure PC</span>
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
              <h3>Ransomware</h3>
              <p><b>Protection in real-time</b></p>
            </dd>
          </dl>
        </div>
        <div>
          <dl>
            <dt><span class="icon02"></span></dt>
            <dd>
              <h3>300%* faster</h3>
              <p><b>Threats Scanning</b></p>
            </dd>
          </dl>
        </div>
        <div>
          <dl>
            <dt><span class="icon03"></span></dt>
            <dd>
              <h3>203,000,000</h3>
              <p><b>Malware Identified</b></p>
            </dd>
          </dl>
        </div>
        <div >
          <dl>
            <dt><span class="icon04"></span></dt>
            <dd>
              <h3>Password-protect</h3>
              <p><b>Personal Data</b></p>
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
          <dt><h3>Media Review</h3></dt>
          <dd>
            "The program uses two AV engines, its own and BitDefender, and seems to be effective against malware that cannot be detected by other similar tools so it is good that it can run together with your standard AV software. It can detect a wide array of spyware, ransomware, adware, Trojans, worms, keyloggers and bots."
          </dd>
        </dl>
        <dl>
          <dt><h3>User Review</h3></dt>
          <dd>
            "I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends."
          </dd>
        </dl>
        <dl>
          <dt><h3>User Review</h3></dt>
          <dd>
            "I would like to say a great thanks to all the staff at IObit for working hard to bring us the best programs out. It is great update you have made for your users. It is lot quicker at scanner and easy to use. People who really want a good Malware and ant-virus program which is also good value for money need to look no further than IObit Malware Fighter. I would recommend that they forget the rest and get the best which is IObit Malware Fighter."
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li class="first active">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/software-informer.png" alt="Software.Informer">
          </div>
          <p>Software.Informer</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir"></div>
          <p>Gelu Batir</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/dave-cassidy.png" alt="David Cassidy"></div>
          <p>David Cassidy</p>
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
        As being trusted and awarded by those world-class media in the past six years, you know you've got the right PC protector.
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
              We're confident that activating PRO edition will protect your PC all-round for affordable price!
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
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
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
          <p><strong class="change-price">$<big>19.95</big></strong> <del>$54.95</del></p>
          <p>1 year subscription / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=2019imf3pc1995&ref=xr_imfe<?php echo $refStr;?>&refs=purchase_imfx"
             onclick="ga('send', 'event', 'imfebuy', 'buy', 'imfepurchase-xmas');">
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
      <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
    </div>
    <div class="msgbox fl">
      <h3>Exclusive 70% OFF <span class="off">80%</span></h3>
      <h4 class="minbox">Ends in <span class="minute"><em>6</em><em class="last">0</em></span> s</h4>
      <div class="price">
        <p><strong class="change-price">$<big>19.95</big></strong> <del>$54.95</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=2019imf3pc1995&ref=xr_imfepop<?php echo $refStr;?>&refs=purchase_imfx"
           onclick="ga('send', 'event', 'imfebuypop', 'buy', 'imfepurchase-xmas');">
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
    $(".intro .wrapper .right b").eq(0).html("<?php echo paramDeal($paramData->fileto);?>").end().
    eq(1).html("<?php echo paramDeal($paramData->rsto);?>").end().
    eq(2).html("<?php echo paramDeal($paramData->traceto);?>").end().
    eq(3).html("<?php echo paramDeal($paramData->camto);?>");

    $(function(){
      var ver=<?php echo $ver;?>;
      console.log(ver);
      if(ver){
        fillFeature(ver);
      }
    });
  </script>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>

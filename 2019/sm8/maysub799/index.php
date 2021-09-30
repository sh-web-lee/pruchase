<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(99,189);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='ensmmay'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 77;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit;
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['st'])){
  $refStr.='-'.$_GET['st'];
}

$trialDay=$_GET['trialday'];
$expStr='';
if($trialDay>0){
  if($trialDay==1){
    $expStr='Expires after <em>1</em> day';
  }else{
    $expStr='Expires after <em>'.$trialDay.'</em> days';
  }
}else{
  $expStr='Trial Expired';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Big Sales - 65% OFF to Get Start Menu 8 PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
  <script>
    function cSet(name,value) {
      var Days = 2;
      var exp = new Date();
      exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
      document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
    }
    function cGet(name) {
      var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
      if (arr = document.cookie.match(reg))
        return unescape(arr[2]);
      else
        return null;
    }
    var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
    var cName = 'ensmtestab';
    var pageAb = cGet(cName);
    if (pageAb == 'tob') {
      window.location.replace('./bigsale.php' + queryStr);
    } else {
      if (pageAb == null) {
        var randNum = Math.random();
        if (randNum > 0.5) {
          window.location.replace('./bigsale.php' + queryStr);
          cSet(cName, 'tob');
        } else {
          cSet(cName, 'toa');
        }
      }
    }
  </script>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>Start Menu 8 Big Sale</h1>
      <h2>Get 65% OFF to Easily Return to Classic Start Menu</h2>
      <div class="panel clearfix">
        <div class="offer small">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/sm-one-box.png')?>" alt=""/></div>
          <div class="price">
            <p><strong>$<big>4</big>.99  </strong> <del>$12.99</del></p>
            <a class="buybtn yellow"
               href="https://www.iobit.com/buy.php?product=sm81pc&ref=sm81pc499&aff=&refs=purchase_sm8"
               onclick="ga('send', 'event', 'sm81pc', 'buy', 'sm8purchase')">
              <i class="all-icons"></i>
              <span>Activate Now</span>   
            </a>
          </div>
          <ul>
            <li><i class="all-icons"></i> <b>60-day</b> Money Back Guarantee</li>
            <li>1 Year Subscription / <b>1 PC</b></li>
            <li><b>$0.42</b> / Month / PC</li>
            <li class="last"><b>$8</b> Saved</li>
          </ul>
        </div>
        <div class="offer big">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/sm-three-box.png')?>" alt=""/>
            <b>65% OFF</b>
          </div>
          <div class="price">
            <p><strong>$<big>7</big>.99  </strong> <del>$22.95</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sm83pc&ref=sm83pc799&aff=&refs=purchase_sm8"
               onclick="ga('send', 'event', 'sm83pc', 'buy', 'sm8purchase')">
              <i class="all-icons"></i>
              <span>Activate Now</span>  
            </a>
          </div>
          <ul>
            <li><i class="all-icons"></i> <b>60-day</b> Money Back Guarantee</li>
            <li>1 Year Subscription / <b>3 PCs</b></li>
            <li><b>$0.22</b> / Month / PC</li>
            <li class="last"><b>$14.96</b> Saved</li>
          </ul>
          <div class="numbox">
            <i class="all-icons"></i> <span class="viewNum"><?php echo $viewNum;?></span> viewing, only <b id="gbox" class="gbox"></b> left now!
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end --> 

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2 class="subtitle">What Start Menu 8 v5 can do for you?</h2>
      <div class="imgbox">
        <img src="<?php echo getStaticUrl('images/screen.png')?>" alt=""/>
      </div>
      <div class="one clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/intro-icon1.png')?>" alt=""/></dt>
          <dd>
            <h3>Bring Back Your Classic Start Menu</h3>
            <p>Easily switch your start menu between Win 7 and Win 8/10.</p>
          </dd>
        </dl>
        <dl class="fr">
          <dt><img src="<?php echo getStaticUrl('images/intro-icon2.png')?>" alt=""/></dt>
          <dd>
            <h3>Ad-free</h3>
            <p>Guarantee that no ads can invade your clean start menu.</p>
          </dd>
        </dl>
      </div>
      <div class="two clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/intro-icon3.png')?>" alt=""/></dt>
          <dd>
            <h3>20%* Faster File Locating</h3>
            <p>Type your file name or even file contents to easily and accurately get your file.</p>
          </dd>
        </dl>
        <dl class="fr">
          <dt><img src="<?php echo getStaticUrl('images/intro-icon4.png')?>" alt=""/></dt>
          <dd>
            <h3>Customize Your Start Button Icon</h3>
            <p>Choose your favorite start button icon to better fit the style of your PC.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Trusted and awarded by these medias</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
          <dd>
            <h2>Media Review</h2>
            <p>
              "Start Menu 8 recaptures the navigation structure that you are familiar with from Windows 7. The Windows 8 interface, called Metro, did away with the Start button and replaced it with the flat-paneled menu used on Windows phones and tablets."
            </p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/juerg.png')?>" alt="Juerg"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "Even thought I’m not a green horn, I was lost the first time I used Win 8 and was more than happy to get the help of “Start Menu 8” which saves me time and allows me not to change my habits too much. In addition I had once a small issue with it and couldn’t solve it by myself, so I wrote to the IObit support team without many hopes…. Wrong assumption…. They answered quickly and gave me the solution to my problem in no time! Since, I’m even more a fan of IObit and looking forward for their next release."
            </p>
            <cite>Juerg</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dan-jurden.png')?>" alt="Dan Jurden"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "As a technology consultant and application developer, I rely on virtualization software a lot. I like to create a new virtual machine for each of my projects. This way I can keep the machine clutter free; and only install the tools I need for that project. As I do not like the Metro screen in Windows 8, I like to use a start menu replacement solution to get my Windows 7 look and feel back. I have struggled for the last few years with several different solutions, both paid and free. Sometimes they work well, sometimes not. Since I started using Start Menu 8, I have had NO issues with the start menu. It is a clean implementation and very easy to use and configure. "
            </p>
            <cite>Dan Jurden</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div id="compare" class="comparison wrapper">
    <h2>The Comparison Table Helps You Make up Your Mind</h2>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2"></th>
          <th class="itemb">Start Menu 8 <b>Trial</b></th>
          <th class="itema"><span>Start Menu 8 <b>PRO</b></span></th>            
        </tr>        
      </thead>
      <tbody>
        <tr class="title">
          <td class="icons gray" width="45"></td>
          <td class="virtue gray"><strong>Classic & Customized Start Menu</strong></td>
          <td class="itemb gray"></td>
          <td class="itema orange"></td>
        </tr>
        <tr class="tall">
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" />
          </td>
          <td class="virtue">Bring back Windows 7-style Start Menu to Windows 8, 8.1, 10</td>
          <td class="itemb"><span><?php echo $expStr;?></span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" />
          </td>
          <td class="virtue">Flat style Start Menu with customzied color</td>
          <td class="itemb"><span><?php echo $expStr;?></span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
        <tr>
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" />
          </td>
          <td class="virtue">Customized start button for Windows 7, 8, 8.1, 10</td>
          <td class="itemb"><span><?php echo $expStr;?></span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
        <tr>
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" />
          </td>
          <td class="virtue">Quick & accurate access to your files, documents and programs</td>
          <td class="itemb"><span><?php echo $expStr;?></span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
        <tr>
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" />
          </td>
          <td class="virtue">Easily pin and organize favorite apps and websites</td>
          <td class="itemb"><span><?php echo $expStr;?></span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
        <tr class="bottall">
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" />
          </td>
          <td class="virtue">100% clean Start Menu with no ads disturbing</td>
          <td class="itemb"><span><?php echo $expStr;?></span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
        <tr class="title">
          <td class="icons gray" width="45"></td>
          <td class="virtue gray"><strong>Optimum IObit Service</strong></td>
          <td class="itemb gray"></td>
          <td class="itema orange"></td>
        </tr>
        <tr class="tall">
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" />
          </td>
          <td class="virtue">Auto Update to the Latest Version</td>
          <td class="itemb white"><span><?php echo $expStr;?></span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="bottall">
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" />
          </td>
          <td class="virtue">Priority 24/7 Technical Support on Demand</td>
          <td class="itemb white"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th class="text" colspan="2"></th>
          <th class="itemb"></th>
          <th class="itema">
            <p><strong>$<big>7</big>.99</strong> <del>$22.95</del></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sm83pc&ref=sm83pc799&aff=&refs=purchase_sm8"
               onclick="ga('send', 'event', 'sm83pc', 'buy', 'sm8purchase')">
              <i class="all-icons"></i>
              <span>Activate Now</span>  
            </a>
            <p>1 Year Subscription/ <span>3 PCs</span></p>
          </th>            
        </tr>        
      </tfoot>
    </table>  
  </div>
  <!-- comparison end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Note:</dt>
      <dd>*.Data may vary based on different system or computer.</dd>
      <dd>
        *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
      </dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/sm-three-box.png')?>" alt=""/>
        <b>65% OFF</b>
      </div>
      <div class="center fl">
        <h2>Easy way to return to classic Start Menu!</h2>
        <div class="numbox">
          <i class="all-icons"></i> <span class="viewNum"><?php echo $viewNum;?></span> viewing, only <b id="fgbox" class="gbox"></b> left now!
        </div>
      </div>
      <div class="price fr">
        <p><strong>$<big>7</big>.99  </strong> <del>$22.95</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sm83pc&ref=sm83pc799&aff=&refs=purchase_sm8"
           onclick="ga('send', 'event', 'sm83pc', 'buy', 'sm8purchase')">
          <i class="all-icons"></i>
          <span>Activate Now</span>  
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    var imgSrc = "<?php echo getStaticUrl('images/sm-two-box.png')?>";
    var packsNum ='<?php echo $packsNum;?>';
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
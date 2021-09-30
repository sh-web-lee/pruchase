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
  $c_name = 'endecsdpascxr_p' . $date;
  $c_name_t='endecsdpascxr_t' . $date;
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
<title>60% OFF to Get Advanced SystemCare PRO - Christmas Sale | IObit
</title>
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
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
          <div class="discount">60% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2><span>60%</span> Discount Limited to FIRST 999 Purchase</h2></div>
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
              <p><strong class="change-price">$<big>19.99</big></strong> <del>$49.99</del></p>
              <p>1 year subscription / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=asc133pc1999x&ref=xr_sdpasc&refs=purchase_ascx"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-xmassdp');">
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
    <h2>Advanced SystemCare PRO Gives You</h2>
    <p class="title"><span>Faster PC</span></p>
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
        <div id="attention" class="attention">
          <img src="<?php echo getStaticUrl('images/screen04.png')?>" alt=""/>
          <div class="attentioncircle"></div>
          <p class="down-num"><span>0</span></p>
          <div class="completed"></div>
        </div>
        <div class="downbox">
          <img src="<?php echo getStaticUrl('images/screen05.png')?>" alt=""/>
          <div id="down" class="downloading">
            <div class="down-info">
              <div class="down-bar">
                <span class="down-red-bar"><span class="down-red-light"></span></span>
              </div>
            </div>
            <p class="down-num"><span>0</span>% <img src="<?php echo getStaticUrl('images/intro-stop.png')?>" alt=""></p>
          </div>
        </div>
        <div class="installbox">
          <img src="<?php echo getStaticUrl('images/screen06.png')?>" alt=""/>
          <div id="install" class="downloading">
            <strong>Auto RAM Clean</strong> <em>Pro</em> <br>
            Improve your PC performance automatically and continuously
            <span class="button">
              <span class="blue"></span>
              <span class="open"></span>
            </span>
          </div>
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
            <h3>1-click Optimization</h3>
            <p>Clean up useless files for larger disk space, deeply remove registries to avoid system crash and manage startup items for faster startup.</p>
          </li>
          <li>
            <h3>Faster Browsing <i class="only">PRO Only</i></h3>
            <p>Optimize Internet connection for 300%* faster download, surfing, gaming, YouTube viewing.</p>
          </li>
          <li>
            <h3>Smoother Running <i class="only">PRO Only</i></h3>
            <p>Automatically stop unnecessary background processes to release system resources for better PC performance.</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- intro-pro -->
    <div class="wrapper intro-pro">
      <p class="title"><span>Safer PC</span></p>
      <ul>
        <li>Keep malware out in real time. <i class="only">PRO Only</i></li>
        <li>Automatically clean browsing data. <i class="only">PRO Only</i></li>
        <li>Block untrusted programs accessing to personal files. <i class="only">PRO Only</i></li>
        <li>Automatically disguise digital fingerprint from snoopers. <i class="only">PRO Only</i></li>
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
              <div class="pro">Advanced SystemCare 13  <big>PRO</big></div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="virtue">Startup items management for fast startup  </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons black">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr class="two">
            <td class="virtue">1-click cleaning to get rid of junk files </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons black">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr class="three">
            <td class="virtue">Deep registries cleaning to reduce system crashes </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Up to 300% faster web surfing and downloading </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Auto RAM cleaning for smooth PC </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Speed up computer up to 200% faster </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Prevent spyware and malware in real time </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Block unauthorized access to your private files </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Auto remove privacy traces for safe browsing </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Auto disguise digital fingerprint to keep online data safe </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Auto keep essential programs up-to-date </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Auto update to the latest version </td>
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
      <h2>Activate all features with <span>60% OFF</span> today!</h2>
      <div class="price">
        <p><strong class="change-price">$<big>19</big>.99</strong> <del class="original">$49.99</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=asc133pc1999x&ref=xr_sdpasc&refs=purchase_ascx"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-xmassdp');">
          Activate Now
        </a>
        <p>1 year subscription / 3 PCs</p>
      </div>
    </div>
    <!-- feature end -->
  </div>
  <!-- compare end -->

  <!-- review start -->
  <div class="review-wrap">
    <div class="wrapper">
      <h2>What we do…</h2>
      <div class="present clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/p-icons01.png')?>" alt=""/></dt>
          <dd>Fix issues for <h4 class="first">300,000,00</h4> users</dd>
        </dl>
        <dl class="center">
          <dt><img src="<?php echo getStaticUrl('images/p-icons02.png')?>" alt=""/></dt>
          <dd>Save <h4 class="two">2,666,667</h4> hours per month</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/p-icons03.png')?>" alt=""/></dt>
          <dd>Save <h4>$1.18 billion</h4> per year</dd>
        </dl>
      </div>

      <div class="review">
        <div id="dg-container" class="dg-container">
          <div class="nav">
            <span class="dg-prev"></span>
            <span class="dg-next"></span>
          </div>
          <div class="content dg-wrapper">
            <dl class="reviews active">
              <dt><h2><span>Media Review</span></h2></dt>
              <dd>
                <p class="on">"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience."</p>
                <cite>Cnet</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><h2><span>User Review</span></h2></dt>
              <dd>
                <p>"I have tried various programs over time which have promised to keep my computers running problem free. I turned to ASC years ago using the free version at first. Finding that I no longer suffered from the niggles and bloating that occurs I upgraded to the Paid version and have never looked back since. Advanced SystemCare Pro is the only one I would recommend based on my experiences.  I also use IObit Uninstaller, Smart Defrag and Driver Booster just make things much better."</p>
                <cite>Richard Beavers</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><h2><span>User Review</span></h2></dt>
              <dd>
                <p>"Advanced System Care is a great program.  I have used this program for many years and it works great. They're always improving their products and just get better over the years. I use many of their products and they all work great."</p>
                <cite>Patsy Clark</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><h2><span>User Review</span></h2></dt>
              <dd>
                <p>" I have never found a better pc maintenance or security program than Advanced Systems Care, since buying ASC I've never had issues with viruses, phishing, black screens or any other kind of bugaboo one could think of, best money I've ever spent when it comes to computers, thank you ASC for making my pc experience so much more enjoyable."</p>
                <cite>Danny R. Sheets</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><h2><span>User Review</span></h2></dt>
              <dd>
                <p>"I have been using Advanced SystemCare Pro for a long time and this latest version 13 is even better than version 12. It can find and fix problems very quickly and has so many extra features you can use to keep your computer running well and stable. I cannot recommend it more highly."</p>
                <cite>Tony Fisher</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><h2><span>User Review</span></h2></dt>
              <dd>
                <p>"The New ASC 13 is a must have for all PC users. Its clean and intuitive interface makes it easy to use for the novice as well as the advanced user. Many powerful tools included to keep your PC running at its peak performance. Kudos to you IObit for such a wonderful set of tools all in one place."</p>
                <cite>Daniel Sanders</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><h2><span>User Review</span></h2></dt>
              <dd>
                <p>"I love using Advanced SystemCare 13 Beta. It is fast. It cleans up privacy traces, junk files and registry fragments. I especially like the sensitive area access permission pop-up. The first time an app tries to access sensitive files, a window opens to either allow access or deny. Once permission is granted for an app, the pop-up no longer occurs for that app. I know my sensitive files will be kept safe."</p>
                <cite>Richard Preston</cite>
              </dd>
            </dl>
          </div>
          <ul>
            <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
            <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></li>
            <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></li>
            <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
            <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
            <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
            <li class="six last" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <p>
        As being trusted and awarded by those world-class media in the past twelve years, you know you've got the right PC optimizer.
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
              We're confident that activating PRO edition will improve your PC performance for affordable price!
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
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
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
          <p><strong class="change-price">$<big>19.99</big></strong> <del>$49.99</del></p>
          <p>1 year subscription / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=asc133pc1999x&ref=xr_sdpasc&refs=purchase_ascx"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-xmassdp');">
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
      <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
    </div>
    <div class="msgbox fl">
      <h3>Exclusive 65% OFF</h3>
      <h4 class="minbox">Ends in <span class="minute"><em>6</em><em class="last">0</em></span> s</h4>
      <div class="price">
        <p><strong class="change-price">$<big>18.99</big></strong> <del>$49.99</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=asc133pc1899x&ref=xr_sdpascpop&refs=purchase_ascx"
           onclick="ga('send', 'event', 'ascbuypop', 'buy', 'ascpurchase-xmassdp');">
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
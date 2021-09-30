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
  $c_name = 'enascnovbr_p' . $date;
  $c_name_t='enascnovbr_t' . $date;
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

$refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

$isNewUser=false;
if(preg_match('/^13\./',$_GET['ver'])){
  $isNewUser=true;
}

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% OFF to Get Cleaner, Faster and More Secure PC - Black Friday Sale | IObit</title>
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
      <div class="title clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
        </div>
        <div class="right fr">
          <b class="only">Only Today</b>
          <h1>Black Friday Sale</h1>
          <h5>Lowest price of the year</h5>
          <div class="discount">70% OFF</div>
        </div>
      </div>
      <div class="chart">
        <div class="chartbox one"><span>Before Nov. 18 <b>$49.99</b></span></div>
        <div class="chartbox big two"><span><span class="date-str">Nov. 18-24</span> <b>$19.99</b></span></div>
        <div class="chartbox center three"><span>Today <b class="change-price">$<big>14</big>.77</b></span></div>
        <div class="chartbox big four"><span><span class="date-str">Nov. 26 - Dec. 30</span> <b>$19.99</b></span></div>
        <div class="chartbox five"><span>After Dec. 30 <b>$49.99</b></span></div>
      </div>
      <div class="price clearfix">
        <div class="numbox fl">
          <div id="flip" class="flipNum">
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>5</b></span></div>
            <div class="listbox last"><span class="list"><b>0</b></span></div>
          </div>
          <p class="change">Hurry, only <b class="packsNum">50</b> Left at this price!</p>
        </div>
        <div class="btnbox fl">
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=2019asc3pc1477&ref=br_asc<?php echo $refStr;?>&refs=purchase_ascbf"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-bf');">
            Activate Now <small>- $14.77</small>
          </a>
          <p>1 year subscription / 3 PCs</p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <h2>We have been working on giving you a…</h2>
    <div class="wrapper intro-box">
      <div class="intro-img">
        <div class="intro-list one">
          <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
          <div class="gray"></div>
          <span class="loading">Loading...</span>
          <div class="scanbox">
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
          </div>
          <div class="percent">
            <span class="change-num">50</span>
            <span class="completed"></span>
            <div class="circletwo">
              <div class="bottom-circle"></div>
              <div class="top-circle"></div>
            </div>
          </div>
          <div class="rocket"></div>
          <div class="safebox">
            <img src="<?php echo getStaticUrl('images/screen04.png')?>" alt=""/>
            <div class="privacy">
              <span class="icon"></span>
              <span class="shield">Privacy Shield</span>
              <div class="check"></div>
              <span class="text">1 secret access</span>
            </div>
            <div class="privacy-right">
              <img src="<?php echo getStaticUrl('images/privacy-right.png')?>" alt=""/>
            </div>
            <div class="shield-img"></div>
          </div>
        </div>
      </div>
      <div class="intro-txt">
        <div class="slow">
          <h3><span>Slow PC</span></h3>
          <p>
            <span class="one">quantity of junk files, errors, crashes and data</span>
            <span class="two"> breach.</span>
          </p>
        </div>
        <div class="fast">
          <h3>Fast PC</h3>
          <p>quick response and Internet speed and all-round protection for privacy.</p>
          <div class="fast-list">
            <div class="one">
              <dl>
                <dt><b>200%* Faster PC</b></dt>
                <dd>Auto clean and optimize system to make computer 200%* faster.</dd>
              </dl>
              <dl>
                <dt><b>300%* Faster Internet</b></dt>
                <dd>
                  Optimize network to accelerate download, surfing, gaming, YouTube viewing 300%* faster.
                </dd>
              </dl>
            </div>
            <div class="two">
              <dl>
                <dt><b>Privacy Shield</b></dt>
                <dd>
                  Stop unauthorized access to your sensitive data like contact, e-mail data, Dropbox etc. 
                </dd>
              </dl>
              <dl>
                <dt><b>Safe Browsing</b></dt>
                <dd>
                  Auto clear traces to prevent trackers from snooping on what you read, view and purchase.
                </dd>
              </dl>
            </div>
            <span class="line"><span class="red"></span></span>
          </div>
        </div>
      </div>
    </div>
    <span class="intro-bg"></span>
  </div>
  <!-- intro end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <h2>What you have…</h2>
    <table>
      <thead>
        <tr>
          <th class="text"></th>
          <th class="itema">
            <div class="free">Your current version</div>
          </th>
          <th class="itemb">
            <div class="pro">Advanced SystemCare <big>PRO</big></div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="virtue">Basic System Clean, Fix and Optimization</td>
          <td class="itema"><i class="all-icons black">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr class="two">
          <td class="virtue">Optimize startup items for faster boot time</td>
          <td class="itema"><i class="all-icons black">√</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr class="three">
          <td class="virtue">Detect malicious links in your web email</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Speed up computer up to 200% faster </td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Accelerate internet speed up to 300% faster</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Block unauthorized access to your private files </td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Auto remove privacy traces for safe browsing </td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Prevent spyware and malware in real time</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Reduce and repair system crashes and errors</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Update essential programs with 1-click </td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Auto update to the latest version</td>
          <td class="itema"><i class="all-icons">×</i></td>
          <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th></th>
          <th class="itema"></th>
          <th class="itemb"></th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->

  <!-- feature start -->
  <div id="feature" class="feature">
    <div class="wrapper">
      <h2>Activate now, you can get all features and have more…</h2>
      <div class="feature-box">
        <div class="feature-img">
          <img src="<?php echo getStaticUrl('images/screen05.png')?>" alt=""/>
          <div class="light-box"><span class="light"></span></div>
          <img class="small-box" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
        </div>
        <div class="feature-list">
          <div class="feature-item">
            <img src="<?php echo getStaticUrl('images/f-icons01.png')?>" alt=""/>
            <h5>Junk File Clean</h5>
            <h3>4GB<sup>*</sup>  more</h3>
          </div>
          <div class="feature-item">
            <img src="<?php echo getStaticUrl('images/f-icons02.png')?>" alt=""/>
            <h5>Startup Optimization</h5>
            <h3>30% more</h3>
          </div>
          <div class="feature-item">
            <img src="<?php echo getStaticUrl('images/f-icons03.png')?>" alt=""/>
            <h5>Software Update</h5>
            <h3>60% more</h3>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price">$<big>14</big>.77</strong> <del class="original">$49.99</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=2019asc3pc1477&ref=br_asc<?php echo $refStr;?>&refs=purchase_ascbf"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-bf');">
          Activate Now
        </a>
        <p>1 year subscription / 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review-wrap">
    <div class="wrapper">
      <h2>What we do…</h2>
      <div class="present clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/p-icons01.png')?>" alt=""/></dt>
          <dd>Fix issues for <h4 class="first">00,000,000</h4> users</dd>
        </dl>
        <dl class="center">
          <dt><img src="<?php echo getStaticUrl('images/p-icons02.png')?>" alt=""/></dt>
          <dd>Save <h4 class="two">0,000,000</h4> hours per month</dd>
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
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>5</b></span></div>
          <div class="listbox last"><span class="list"><b>0</b></span></div>
        </div>
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> visitors now,<b class="packsNum">50</b>seats left at this price.</p>
      </div>
      <div class="price fl">
        <strong class="change-price">$14.77</strong> <del class="original">$49.99</del>
        <p>1 year / 3 PCs</p>
      </div>
      <a class="buybtn fr"
         href="https://www.iobit.com/buy.php?product=2019asc3pc1477&ref=br_asc<?php echo $refStr;?>&refs=purchase_ascbf"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-bf');">
        Activate Now
      </a>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
    var _href = "https://www.iobit.com/buy.php?product=2019asc3pc1677&ref=br_asc1677<?php echo $refStr;?>&refs=purchase_ascbf";
    var _ga = "ga('send', 'event', 'ascbuypop', 'buy', 'ascpurchase-bf');";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

  <?php if($isNewUser):?>
    <script>
      $(".feature").removeClass("new").addClass("new");
      $(".feature .feature-box").remove();
      $(".comparison tr.two").remove();
      $(".comparison tr.three .itema i").addClass("black");
      $(".feature h2").text('Activate all features at the lowest price of the year now!');
    </script>
  <?php endif;?>


  <?php if(in_array($_GET['pop'],array('br_asclp'))):?>
    <script>
      document.title = "80% OFF to Get Cleaner, Faster and More Secure PC - Black Friday Sale | IObit";
      $(".discount").removeClass("eight").addClass("eight");
      if (!$(".buybtn").hasClass("soldout")) {
        $(".change-price").html('$<big>9</big>.99');
        $(".floatlayer .change-price").html('$9.99');
        $(".banner .buybtn small").html('- $9.99');
        $(".buybtn").attr({
          "href":'https://www.iobit.com/buy.php?product=2019asc3pc999&ref=br_asclp<?php echo $refStr;?>&refs=purchase_ascbf',
          "onclick":"ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-bflp');",
        });
      } else {
        $(".change").html('Sorry, 80% OFF offer is sold out.');
        $(".change-price").html('$<big>12</big>.97');
        $(".floatlayer .change-price").html('$12.97');
        $(".banner .buybtn small").html('- $12.97');
        $(".buybtn.soldout").attr({
          "href":'https://www.iobit.com/buy.php?product=2019asc3pc1297&ref=br_asclp1297<?php echo $refStr;?>&refs=purchase_ascbf',
          "onclick":"ga('send', 'event', 'ascbuypop', 'buy', 'ascpurchase-bflp');",
        });
      }
    </script>
  <?php endif;?>
  <?php if(in_array($_GET['pop'],array('br_asccl'))):?>
    <script>
      document.title = "75% OFF to Get Cleaner, Faster and More Secure PC - Black Friday Sale | IObit";
      $(".discount").removeClass("seven").addClass("seven");
      if (!$(".buybtn").hasClass("soldout")) {
        $(".change-price").html('$<big>12</big>.97');
        $(".floatlayer .change-price").html('$12.97');
        $(".banner .buybtn small").html('- $12.97');
        $(".buybtn").attr({
          "href":'https://www.iobit.com/buy.php?product=2019asc3pc1297&ref=br_asccl<?php echo $refStr;?>&refs=purchase_ascbf',
          "onclick":"ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-bfcl');",
        });
      } else {
        $(".change-price").html('$<big>14</big>.77');
        $(".floatlayer .change-price").html('$14.77');
        $(".banner .buybtn small").html('- $14.77');
        $(".change").html('Sorry, 75% OFF offer is sold out.');
        $(".buybtn.soldout").attr({
          "href":'https://www.iobit.com/buy.php?product=2019asc3pc1477&ref=br_asccl1477<?php echo $refStr;?>&refs=purchase_ascbf',
          "onclick":"ga('send', 'event', 'ascbuypop', 'buy', 'ascpurchase-bfcl');",
        });
      }
    </script>
  <?php endif;?>
</body>
</html>
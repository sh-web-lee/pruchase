<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='decsdxr'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
$refStr = empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr .= empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr .= empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr .= empty($_GET['r'])?'':('-'.$_GET['r']);
$ver = empty($_GET['ver']) ? '' : $_GET['ver'];
$ver_arr = explode('.',$ver);
$display = (in_array($ver_arr[0],['12','13'])) ? 0 : 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% OFF to Get Smart Defrag - Christmas Sale | IObit</title>
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
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">IObit</a>
      <h1 class="title">Big Sale Last Chance to Save Big!</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
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
            <span class="numwrap-seats">Seats Left Now</span>
            <!-- <p class="change">Hurry, only <b class="packsNum">50</b> Left at this price!</p> -->
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price">$<big>11.99</big></strong> <del>$39.99</del></p>
              <p>1 year subscription / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd<?php echo $refStr;?>&refs=purchase_sdxr"
                 onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase-xr');">
                Activate Now
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <h2>We’ve dedicated to give you a faster PC.</h2>
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/sd-screen.png')?>" alt=""/>
        <span class="rocket"></span>
      </div>
      <div class="msgbox fr">
        <dl>
          <dt><h3>200%* Faster File Access</h3></dt>
          <dd>Accelerate file access speed & game launching speed with Large File Defrag</dd>
        </dl>
        <dl>
          <dt><h3>100%* Faster Startup</h3></dt>
          <dd>Boot-time Defrag gives you quick PC startup and top system running speed.</dd>
        </dl>
        <dl>
          <dt><h3>Auto Smart Defrag</h3></dt>
          <dd>Automatically defragment selected files and disks without interruption.</dd>
        </dl>
        <dl>
          <dt><h3>Ultra-fast Defragment </h3></dt>
          <dd>Defragment files more efficiently and thoroughly in less time.</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <div class="compare-wrap">
    <!-- comparison start -->
    <div class="comparison wrapper" id="compare">
      <h2>But now yours doesn’t perform that well.</h2>
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
              <div class="pro">Smart Defrag 6 <big>PRO</big></div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="virtue">Basic hard drive defragmentation and optimization</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons black">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr class="two">
            <td class="virtue">Deep defrag for up to 200% faster file access</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr class="three">
            <td class="virtue">Boot defrag for up to 100% faster PC Startup</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Better, faster & more stable data transfer</td>
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
      <h2>So improve your PC performance with <span>70%</span> OFF today! </h2>
      <div class="price">
        <p><strong class="change-price">$<big>11</big>.99</strong> <del class="original">$39.99</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd<?php echo $refStr;?>&refs=purchase_sdxr"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase-xr');">
          Activate Now
        </a>
        <p>1 year subscription / 3 PCs</p>
      </div>
    </div>
    <!-- feature end -->
  </div>

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
              "IObit Smart Defrag optimizes your PC to take full advantage of SSD performance while defragmenting your hard disks. Its SSD Trim tool automatically enables system tweaks that typically require experience to apply. Smart Defrag's updates include a new defrag engine, specialized Game Defrag, a cool new look, and many more language options (35 and counting)."
            </p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/amnon.png')?>" alt="amnon"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "Smart defrag is a very well behaved disk defrag software, operating in the background whenever computer is idle so that you hardly notice it. As a result: drives are permanently defragmented allowing rapid access and less wear and tear. Smart defrag is the best Free disk defragmenter I've ever used and I'll definitely recommend it to my family and friends!"
            </p>
            <cite>Amnon</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="hans"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "I am a user of Smart defrag for many years. Since using this fantastic software my desktop and my laptop are fast and save. Together with advance system care ultimate you have a complete tool for keeping you system up to date, fast and secure.Using it every day without need to wait (pc closes itself) you keep your system in top condition even if you have no technical background!"
            </p>
            <cite>Hans</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="edward-lee-ah-yen"></dt>
          <dd>
            <h2>User Review</h2>
            <p>
              "I run a combination of RAID 0 SSDs and RAID 0 HDDs and use Smart Defrag Pro to analyse, defrag and keep my drives running at peak performance. As with all IObit software it is easy to install, use and very reliable. Just set it up and forget it. Smart Defrag has a very small memory foot print so it won't slow down your system. Definitely recommended!"
            </p>
            <cite>Edward Lee Ah Yen</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->
  
  

  <!-- awards start -->
    <div class="awards wrapper">
      <h2>World-wide Awards</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
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
              We are confident that activating PRO edition will boost your disk performance for affordable price!
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
        <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
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
          <p><strong class="change-price">$<big>11.99</big></strong> <del>$39.99</del></p>
          <p>1 year subscription / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd<?php echo $refStr;?>&refs=purchase_sdxr"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase-xr');">
            Activate Now
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/sd-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=2020sd3pc1099&ref=xr_sd1099" + refStr + "&refs=purchase_sdxr&tw=-8";
    var _ga = "ga('send', 'event', 'sdbuypop', 'buy', 'sdpurchase-xr');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  
  
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
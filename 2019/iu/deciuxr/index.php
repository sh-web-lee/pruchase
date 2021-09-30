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
  $c_name = 'endeciuxr_p' . $date;
  $c_name_t='endeciuxr_t' . $date;
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

// $refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$isNewRef = false;
$isNewUser=false;
if(preg_match('/^9\./',$_GET['ver']) || in_array($_GET['ref'],array('ascfree','ascpro','imffree',
      'imfpro','iufree','iupro','dbfree',
      'dbpro','isu'))){
  $isNewUser=true;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
      'imfpro','iufree','iupro','dbfree',
      'dbpro','isu'))){
    $isNewRef = true;
  }
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
<title>50% OFF to Get Cleaner and Faster Browsing - Christmas Sale | IObit</title>
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
          <div class="discount">50% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2><span>50%</span> Discount Limited to FIRST 999 Purchase</h2></div>
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
              <p><strong class="change-price">$<big>14.77</big></strong> <del>$29.99</del></p>
              <p>1 year subscription / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=iu93pc1477x&ref=xr_iu<?php echo $refStr;?>&refs=purchase_iux"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-xmas');">
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
    <h2>We have been working on giving you a…</h2>
    <div class="wrapper intro-box">
      <div class="intro-img fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <div class="scanbox">
          <div class="secure"></div>
          <div class="scancircle"></div>
        </div>
        <div class="gray-bg"></div>
        <div class="waitbox">
          <i class="gree one"></i>
          <i class="gree two"></i>
          <i class="gree three"></i>
          <i class="gree four"></i>
          <i class="gree five"></i>
          <i class="gree six"></i>
          <i class="gree seven"></i>
          <span class="load-bar"></span>
        </div>
        <div class="finishbox"></div>
        <div class="deepbox"></div>
        <div class="toolbar"></div>
      </div>
      <div class="intro-txt">
        <div class="slow">
          <h3><span>Regular uninstall</span></h3>
          <p>
            <span class="one">Programs may be refused to be uninstalled or</span>
            <span class="two"> remnants stagnate in the computer.</span>
          </p>
        </div>
        <div class="fast">
          <div class="fast-title">
            <h3>Clean uninstall</h3>
            <p>Unwanted programs and useless files are really and easily purged from your.</p>
          </div>
          <div class="fast-list">
            <div id="inner" class="inner">
              <div class="one">
                <dl>
                  <dt><b>Remove stubborn software and Windows apps </b></dt>
                  <dd>that can't be uninstalled by conventional means.</dd>
                </dl>
                <dl>
                  <dt><b>Remove bundled programs</b></dt>
                  <dd>installed alongside freeware to advertise or steal privacy data. </dd>
                </dl>
                <dl class="last">
                  <dt><b>Auto Scan for leftovers</b></dt>
                  <dd>after standard uninstall or refused to be deleted through other utilities.</dd>
                </dl>
              </div>
              <div class="two">
                <dl>
                  <dt><b>Identify malicious or advertising plug-ins </b></dt>
                  <dd>which inject ads or malicious links into the pages that display.</dd>
                </dl>
                <dl>
                  <dt><b>Real-time monitoring</b></dt>
                  <dd>of file changes made by programs during its installation.</dd>
                </dl>
                <dl class="last">
                  <dt><b>Deep scan for remnants</b></dt>
                  <dd>of previously uninstalled programs.</dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <div class="compare-wrap">
    <!-- comparison start -->
    <div class="comparison wrapper" id="compare">
      <h2>What you have…</h2>
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
              <div class="pro">IObit Uninstaller 9 <big>PRO</big></div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="virtue">Remove programs and Windows apps</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons black">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr class="two">
            <td class="virtue">Delete leftovers after the standard uninstall</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons black">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr class="three">
            <td class="virtue">Delete stubborn programs and bundleware</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Identify malicious and advertising extensions</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Monitor files changes in real time</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Auto delete leftovers of programs uninstalled by other utilities </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr class="new">
            <td class="virtue">Scan leftovers of already uninstalled programs </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Update all outdated programs with one click</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="virtue">Auto update when a new version is available</td>
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
    <div id="feature" class="feature">
      <div class="wrapper">
        <h2>Activate now, you can get all features and have more…</h2>
        <div class="feature-box">
          <div class="feature-img">
            <img src="<?php echo getStaticUrl('images/screen05.png')?>" alt=""/>
            <div class="light-box"><span class="light"></span></div>
            <img class="small-box" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
          </div>
          <div class="feature-list">
            <div class="feature-item">
              <img src="<?php echo getStaticUrl('images/f-icons01.png')?>" alt=""/>
              <h5>Stubborn Programs Removal</h5>
              <h3>152% more</h3>
            </div>
            <div class="feature-item">
              <img src="<?php echo getStaticUrl('images/f-icons02.png')?>" alt=""/>
              <h5>Malicious & Advertising Plugins Removal </h5>
              <h3>50% more</h3>
            </div>
            <div class="feature-item">
              <img src="<?php echo getStaticUrl('images/f-icons03.png')?>" alt=""/>
              <h5>Software Update</h5>
              <h3>15% more</h3>
            </div>
          </div>
        </div>
        <div class="price">
          <p><strong class="change-price">$<big>14.77</big></strong> <del>$29.99</del></p>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=iu93pc1477x&ref=xr_iu<?php echo $refStr;?>&refs=purchase_iux"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-xmas');">
            Activate Now
          </a>
          <p>1 year subscription / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- feature end -->
  </div>

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>What others say…</h2>
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
        <div class="discount">50% OFF</div>
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
          <p><strong class="change-price">$<big>14.77</big></strong> <del>$29.99</del></p>
          <p>1 year subscription / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=iu93pc1477x&ref=xr_iu<?php echo $refStr;?>&refs=purchase_iux"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-xmas');">
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
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
    </div>
    <div class="msgbox fl">
      <h3>Exclusive <span class="off">55%</span> OFF</h3>
      <h4 class="minbox">Ends in <span class="minute"><em>6</em><em class="last">0</em></span> s</h4>
      <div class="price">
        <p><strong class="change-price">$<big>12.97</big></strong> <del>$29.99</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=iu93pc1297x&ref=xr_iu1297<?php echo $refStr;?>&refs=purchase_iux"
           onclick="ga('send', 'event', 'iubuypop', 'buy', 'iupurchase-xmas);">
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
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

  <?php if($isNewUser):?>
    <script>
      $(".compare-wrap").removeClass("new").addClass("new");
      $(".feature .feature-box").remove();
      $(".comparison tr.new").remove();
      $(".feature h2").html('Activate all features with <span>50% OFF</span> today!');  
    </script>
  <?php endif;?>

  <?php if ($isNewRef):?>
    <script>
      $(".comparison h2").html("What's the difference?");
      $(".comparison thead .free").html("IObit Uninstaller Free");
    </script>
  <?php endif;?>
</body>
</html>
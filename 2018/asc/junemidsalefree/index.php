<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
function get_line($file, $line,$numMax)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      $namesArr=explode(' ',$c);
      return array(
        'userName'=>trim($namesArr[1]).' '.trim($namesArr[2]),
        'index'=>($line%$numMax)
      );
      break;
    }
  }
}

function getUserByLineNum($start,$end,$userNum,$numMax){
  $userArr=array();
  for($i=0;$i<$userNum;$i++){
    $lineNum=rand($start,$end);
    $userArr[]=get_line('data/global_names.txt',$lineNum,$numMax);
  }
  return $userArr;
}

$globalUser=array();
$globalUser['america']=getUserByLineNum(1,94,rand(1,5),5);
$globalUser['asia']=getUserByLineNum(321,383,rand(0,2),2);
$globalUser['europe']=getUserByLineNum(95,290,rand(1,4),4);
$globalUser['australia']=getUserByLineNum(291,320,rand(0,2),2);
if($_GET['action']=='getPurchasedUsers'){
  echo json_encode($globalUser);
  exit();
}
  include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Special 80% OFF on Advanced SystemCare 11 PRO!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,600'>
<link href="<?php echo getStaticUrl('style/animation.min.css')?>" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    users=JSON.parse('<?php echo json_encode($globalUser)?>');
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <div id="main" class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="http://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <h1>Think Fast, Act Faster 24-hour FLASH SALE</h1>
        <div class="offer clearfix">
          <div class="fl imgbox"><img src="<?php echo getStaticUrl('images/asc.png')?>" alt=""/></div>
          <div class="right fl">
            <div id="countdown" class="countdown">
              <span><strong>09</strong> Hours </span>
              <span><strong>59</strong> Minutes </span>
              <span><strong>12</strong> Seconds</span>
            </div>
            <img src="<?php echo getStaticUrl('images/discount.png')?>" alt=""/>
            <p>TO GET YOUR PC RUN LIKE NEW</p>
            <div class="price">
              <p><strong>$16.77</strong> <del>$89.97</del></p>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=asc11midyearedm&ref=asc113pc1677june2018&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201806free');"
                 data-text="ACTIVATE NOW">
                <span>ACTIVATE NOW</span>
              </a>
              <p>1 Year / 3 PCs</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <div class="payments">
      <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
    </div>

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <h2>Why Millions of Users Upgrade to PRO Edition?</h2>
        <p>Because Advanced SystemCare PRO can make your computer run cleaner, faster and safer.</p>
        <img src="<?php echo getStaticUrl('images/feature_icon.png')?>" alt=""/>
        <ul class="clearfix">
          <li>More Precious Disk Space</li>
          <li class="center">300%* Faster Internet</li>
          <li>No Malicious Tracking</li>
        </ul>
      </div>
    </div>
    <!-- feature end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>See How PRO Edition Makes Your PC Cleaner, Faster & Safer</h2>
        <div class="tabox">
          <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
            <thead>
              <tr>
                <th colspan="2"></th>
                <th class="itema">Advanced SystemCare <b>Free</b></th>
                <th class="itemb">Advanced SystemCare <b>11 PRO</b></th>
              </tr>
            </thead>
            <tbody>
              <tr class="title">
                <td colspan="4">Basic Features</td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
                <td class="text">Basic system cleaning & optimization</td>
                <td class="itema"><i class="all-icons">√</i></td>
                <td class="itemb"><i class="all-icons orange">√</i></td>
              </tr>
              <tr class="last">
                <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""/></td>
                <td class="text">Basic PC protection with spyware removal</td>
                <td class="itema"><i class="all-icons">√</i></td>
                <td class="itemb"><i class="all-icons orange">√</i></td>
              </tr>
              <tr class="title blue">
                <td colspan="4"><div class="hill">PRO-Only Features</div></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
                <td class="text">Deep cleaning reduces system crashes</td>
                <td class="itema"><i class="all-icons circle">√</i></td>
                <td class="itemb"><i class="all-icons orange">√</i></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
                <td class="text">Up to 300%* faster surfing, downloading and video viewing</td>
                <td class="itema"><i class="all-icons circle">√</i></td>
                <td class="itemb"><i class="all-icons orange">√</i></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""/></td>
                <td class="text">Up to 200%* faster PC startup</td>
                <td class="itema"><i class="all-icons circle">√</i></td>
                <td class="itemb"><i class="all-icons orange">√</i></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
                <td class="text">Block malware & spyware in real time</td>
                <td class="itema"><i class="all-icons circle">√</i></td>
                <td class="itemb"><i class="all-icons orange">√</i></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
                <td class="text">Never suffer privacy leak like Facebook privacy breach</td>
                <td class="itema"><i class="all-icons circle">√</i></td>
                <td class="itemb"><i class="all-icons orange">√</i></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
                <td class="text">Keep programs updated with 1-click</td>
                <td class="itema"><i class="all-icons circle">√</i></td>
                <td class="itemb"><i class="all-icons orange">√</i></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="2"></th>
                <th class="itema"></th>
                <th class="itemb">
                  <p><strong>$16.77</strong> <del>$89.97</del></p>
                  <a class="buybtn"
                     href="https://www.iobit.com/buy.php?product=asc11midyearedm&ref=asc113pc1677june2018a&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
                     onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201806freea');"
                     data-text="ACTIVATE NOW">
                    <span>ACTIVATE NOW</span>
                  </a>
                </th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <!-- comparison end -->

    <div class="awards wrapper"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>

    <!-- review start -->
    <div class="review wrapper">
      <div class="content">
        <dl>
          <dt><h2>User Review</h2></dt>
          <dd>
            <h3>"Not only is it a great product, but the support is equally great"</h3>
            <p>
              "I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>User Review</h2></dt>
          <dd>
            <h3>"Cleaned up Spyware and Malware My antivirus lets slip through"</h3>
            <p>
              "We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"
            </p>
          </dd>
        </dl>
        <dl class="active">
          <dt><h2>Media Review</h2></dt>
          <dd>
            <h3>"A PC optimization tool that wipes out security threats and helps stop new ones in their tracks."</h3>
            <p>IObit Avanced SystemCare is one of our favorite PC cleanup and maintenance tools, and the latest version builds on an already great toolkit with new security-focused options.</p>
          </dd>
        </dl>
        <dl>
          <dt><h2>User Review</h2></dt>
          <dd>
            <h3>"My choice is still overwhelmingly Advanced SystemCare Pro"</h3>
            <p>
              "As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>User Review</h2></dt>
          <dd>
            <h3>"My system has never run better."</h3>
            <p>
              "In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."
            </p>
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay">
          </div>
          <p>Bruce Ramsay</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"></div>
          <p>Bob Bassett</p>
        </li>
        <li class="active">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/techradar.png" alt="Techradar"></div>
          <p>Techradar</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
          </div>
          <p>Charles R. Widick</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold">
          </div>
          <p>Gordon Griswold</p>
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- worldmap start -->
    <div class="worldmap">
      <div class="wrapper">
        <h2>See! They are on board now...</h2>
        <p>You can trust that PRO edition helps breathe new life into your old PC</p>
        <div class="mapbox">
          <div class="circle c01"></div><div class="circle c02"></div><div class="circle c03"></div>
          <div class="circle c04"></div><div class="circle c05"></div><div class="circle c06"></div>
          <div class="circle c07"></div><div class="circle c08"></div><div class="circle c09"></div>
          <div class="circle c10"></div><div class="circle c11"></div><div class="circle c12"></div>
          <div class="circle c13"></div><div class="circle c14"></div><div class="circle c15"></div>
          <div class="circle c16"></div><div class="circle c17"></div><div class="circle c18"></div>
          <div class="circle c19"></div><div class="circle c20"></div><div class="circle c21"></div>
          <div class="circle c22"></div><div class="circle c23"></div><div class="circle c24"></div>
          <div class="circle c25"></div><div class="circle c26"></div><div class="circle c27"></div>
          <div class="circle c28"></div><div class="circle c29"></div><div class="circle c30"></div>
          <div class="circle c31"></div><div class="circle c32"></div><div class="circle c33"></div>
          <div class="circle c34"></div><div class="circle c35"></div><div class="circle c36"></div>
          <div class="circle c37"></div><div class="circle c38"></div><div class="circle c39"></div>
          <div class="circle c40"></div>
          <img class="map-bg" src="<?php echo getStaticUrl('images/map.png')?>" alt=""/>
          <div class="dialog">
            <div class="america01"><span>John Austin</span> purchased just now</div>
            <div class="america02"><span>John Austin</span> purchased just now</div>
            <div class="america03"><span>John Austin</span> purchased just now</div>
            <div class="america04 right"><span>John Austin</span> purchased just now</div>
            <div class="america05"><span>John Austin</span> purchased just now</div>
            <div class="europe01 right"><span>John Austin</span> purchased just now</div>
            <div class="europe02"><span>John Austin</span> purchased just now</div>
            <div class="europe03 right"><span>John Austin</span> purchased just now</div>
            <div class="europe04"><span>John Austin</span> purchased just now</div>
            <div class="asia01 right"><span>John Austin</span> purchased just now</div>
            <div class="asia02"><span>John Austin</span> purchased just now</div>
            <div class="australia01 right"><span>John Austin</span> purchased just now</div>
            <div class="australia02 right"><span>John Austin</span> purchased just now</div>
          </div>
        </div>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=asc11midyearedm&ref=asc113pc1677june2018b&aff=<?php echo $_GET['aff'];?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-201806freeb');"
           data-text="JOIN OUR HAPPY USER CLUB NOW">
          <span>JOIN OUR HAPPY USER CLUB NOW</span>
        </a>
      </div>
    </div>
    <!-- worldmap end -->

    <!-- bottom start -->
    <div class="wrapper">
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>Money Back Guarantee</h3>
            <p>If you're not satisfied in the first 60 days, we will give you back your money.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
          <dd>
            <h3>Secure Payment</h3>
            <p>IObit supports several safe modes of payment.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt=""/></dt>
          <dd>
            <h3>Get License</h3>
            <p>You will receive the license within a few minutes after purchase.</p>
          </dd>
        </dl>
      </div>

      <dl class="annotation">
        <dt>Note:</dt>
        <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
        <dd>*.Data may vary based on different system or computer.</dd>
      </dl>

      <!-- footer start -->
      <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
      <!-- footer end -->
    </div>
    <!-- bottom end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
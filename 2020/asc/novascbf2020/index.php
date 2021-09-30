<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
include "lang/de.php";
$content = $text['content'];

if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'ascblacknl_p' . $date;
    $c_name_t='ascblacknl_t' . $date;
    if ($_COOKIE[$c_name]===null) {
        $totalNum=$packsNum=rand(88,99);
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t,$totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum'=>$packsNum));
    exit();
}

$viewNum = rand(60, 88);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}
$refStr = (empty($_GET['ref']) ? '' : ('-' . $_GET['ref'])) ;
$refStr .= (empty($_GET['st']) ? '' : ('-' . $_GET['st']));
$refStr .= (empty($_GET['to']) ? '' : ('-' . $_GET['to']));
$refStr .= (empty($_GET['pop']) ? '' : ('-' . $_GET['pop']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= $text['title']; ?></title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <div class="title">
          <h1><?= $content[1]; ?></h1>
          <p><?= $content[2]; ?></p>
        </div>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          </div>
          <div class="right fr">
            <h2><?= $content[3]; ?></h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> <?= $content[4]; ?> <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> <?= $content[5]; ?>!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
              </div>
              <p><strong>€<big>14</big>,99</strong> <del>49,99€</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-asc143pc1499&ref=nl_asc143pcblackfriday1499purchase2011<?= $refStr; ?>&aff=&refs=nl_purchase_db" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascblackfriday1799-nl');">
                <div class="inner">
                  <i class="all-icons"></i>
                  <span><?= $content[8]; ?></span>
                </div>
              </a>
              <p class="year"><?= $content[9]; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- benefits -->
    <div class="benefits">
      <div class="wrapper">
        <h2><?= $content[10]; ?></h2>
        <!-- showcase -->
        <div class="showcase">
          <div class="inner">
            <ul class="screenshot">
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-00.jpg')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt="">
              </li>
            </ul>
          </div>
          <ul class="zoom">
            <li></li>
            <li class="fun3">
              <div class="container">
                <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt="">
              </div>
            </li>
            <li class="fun2">
              <div class="container">
                <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt="">
              </div>
            </li>
            <li class="fun4">
              <div class="container">
                <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt="">
              </div>
            </li>
            <li class="fun5">
              <div class="container">
                <img src="<?php echo getStaticUrl('images/screenshot-05-zoom.png')?>" alt="">
              </div> 
            </li>
          </ul>
          <ul class="list-icon">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <!-- detail-list -->
        <div class="detail-list">
          <dl>
            <dt><i class="benefits04"></i></dt>
            <dd>
              <h3><?= $content[11]; ?></h3>
              <p><?= $content[12]; ?></p>
            </dd>
          </dl>
          <dl>
            <dt><i class="benefits02"></i></dt>
            <dd>
              <h3><?= $content[13]; ?></h3>
              <p><?= $content[14]; ?></p>
            </dd>
          </dl>
          <dl>
            <dt><i class="benefits03"></i></dt>
            <dd>
              <h3><?= $content[15]; ?></h3>
              <p><?= $content[16]; ?></p>
            </dd>
          </dl>
          <dl>
            <dt><i class="benefits01"></i></dt>
            <dd>
              <h3><?= $content[17]; ?></h3>
              <p><?= $content[18]; ?></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- end benefits -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2><?= $content[20]; ?></h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> over!
            </p>
          </div>
          <p><strong>€<big>14</big>,99</strong> <del>€49,99</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-asc143pc1499&ref=nl_asc143pcblackfriday1499purchase2011<?= $refStr; ?>&aff=&refs=nl_purchase_db" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascblackfriday1799-nl');">
            <div class="inner">
              <i class="all-icons"></i>
              <span><?= $content[21]; ?></span>
            </div>
          </a>
          <p class="year"><?= $content[22]; ?></p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2><?= $content[23]; ?></h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema"><?= $content[24]; ?></th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span><?= $content[25]; ?></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema"><i class="all-icons free">√</i></td>
              <td class="itemb"><?= $content[26]; ?></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb"><?= $content[27]; ?></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb"><?= $content[28]; ?></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb"><?= $content[29]; ?></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb"><?= $content[30]; ?></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb"><?= $content[31]; ?></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb"><?= $content[32]; ?></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb"><?= $content[33]; ?></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb"><?= $content[34]; ?></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"></td>
              <td class="itemb"></td>
              <td class="itemc last"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3><?= $content[35]; ?></h3>
        <h2><?= $content[36]; ?></h2>
        <div class="price">
          <p><strong>€<big>14</big>,99</strong> <del>€49,99</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-asc143pc1499&ref=nl_asc143pcblackfriday1499purchase2011<?= $refStr; ?>&aff=&refs=nl_purchase_db" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascblackfriday1799-nl');">
            <i class="all-icons"></i>
            <span><?= $content[37]; ?></span>
          </a>
		  <p class="pricehol watching">
		     Beslis snel! Nog maar <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> beschikbaar
		  </p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

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
              <h2><?= $content[38]; ?></h2>
              <p>
                  <?= $content[39]; ?>
              </p>
              <cite><?= $content[40]; ?></cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/brendon-o-rourke.png')?>" alt="Brendon O'Rourke"></dt>
            <dd>
              <h2><?= $content[41]; ?></h2>
              <p>
                  <?= $content[42]; ?>
              </p>
              <cite><?= $content[43]; ?></cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/anthony-baker.png')?>" alt="Anthony Baker"></dt>
            <dd>
              <h2><?= $content[44]; ?></h2>
              <p>
                  <?= $content[45]; ?>
              </p>
              <cite><?= $content[46]; ?></cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/ryan-hill.png')?>" alt="Ryan Hill"></dt>
            <dd>
              <h2><?= $content[47]; ?></h2>
              <p>
                  <?= $content[48]; ?>
              </p>
              <cite><?= $content[49]; ?></cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lyle-stelmaschuk.png')?>" alt="Lyle Stelmaschuk"></dt>
            <dd>
              <h2><?= $content[50]; ?></h2>
              <p>
                  <?= $content[52]; ?>
              </p>
              <cite><?= $content[53]; ?></cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2><?= $content[54]; ?></h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4><?= $content[55]; ?></h4>
              <p>
                  <?= $content[56]; ?>
              </p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4><?= $content[57]; ?></h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt><?= $content[58]; ?></dt>
            <dd><?= $content[59]; ?></dd>
            <dd>
                <?= $content[60]; ?>
            </dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. <?= $content[61]; ?></p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- backtotop start -->
    <div id="backtotop" class="backtotop"><?= $content[62]; ?></div>
    <!-- backtotop end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=nl-asc141699-ac&ref=nl_asc143pcblackfriday1699purchase2011"+ refStr +"&aff=&refs=nl_purchase_db&tw=-8";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'ascblackfriday2295-nl');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>
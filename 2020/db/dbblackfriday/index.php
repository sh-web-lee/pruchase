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

if (!empty($_GET['action']) && ($_GET['action'] == 'getSales')) {
    $date = $_GET['d'];
    $cName = 'dedbfriday' . $date;
    $cookie = $_COOKIE[$cName];
    if ($cookie !== null) {
        $packsNum = $_COOKIE[$cName];
        if ($packsNum >= 0) {
            $packsNum--;
            setcookie($cName, $packsNum);
        } else {
            $packsNum = 0;
        }
    } else {
        $packsNum = 50;
        setcookie($cName, $packsNum);
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

$viewNum = rand(60, 88);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}
$refStr = (empty($_GET['ref']) ? '' : ('-' . $_GET['ref']));
$refStr .=  (empty($_GET['st']) ? '' : ('-' . $_GET['st']));
$refStr .=  (empty($_GET['pop']) ? '' : ('-' . $_GET['pop']));
$refStr .=  (empty($_GET['to']) ? '' : ('-' . $_GET['to']));
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
        <a class="logo" href="https://www.iobit.com/de/" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <div class="title">
          <h1><?= $content[1]; ?></h1>
          <p><?= $content[2]; ?></p>
        </div>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster 6 Pro"/>
          </div>
          <div class="right fr">
            <h2><?= $content[3]; ?></h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> <?= $content[4]; ?> <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em><?= $content[5]; ?>
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown"><?= $content[6]; ?> <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms <?= $content[7]; ?></p>
              </div>
              <p><strong><big>20</big>,99€</strong> <del>89,99€</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db83pc2099&ref=de_dbbf2099sale202010<?= $refStr; ?>&aff=&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8bf2099sale-de');">
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

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <h2><?= $content[10]; ?></h2>
        <p class="over">
            <?= $content[11]; ?>
        </p>
        <div class="screen">
          <dl class="one">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3><?= $content[12]; ?></h3>
              <p><?= $content[13]; ?></p>
            </dd>
          </dl>
          <dl class="two">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3><?= $content[14]; ?></h3>
              <p>
                  <?= $content[15]; ?>
              </p>
            </dd>
          </dl>
          <dl class="three">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3><?= $content[16]; ?></h3>
              <p><?= $content[17]; ?></p>
            </dd>
          </dl>
          <dl class="four">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3><?= $content[18]; ?></h3>
              <p><?= $content[19]; ?></p>
            </dd>
          </dl>
          <dl class="five">
            <dt><img src="<?php echo getStaticUrl('images/feature-05.png')?>" alt=""/></dt>
            <dd>
              <h3><?= $content[20]; ?></h3>
              <p><?= $content[21]; ?></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- together start -->
<!--    <div class="together">-->
<!--      <div class="wrapper">-->
<!--        <h2>-->
<!--          Together with Advanced SystemCare Pro, you will enjoy <br>top PC performance and peak game experience!-->
<!--        </h2>-->
<!--        <div class="panel clearfix">-->
<!--          <div class="asc-box fl clearfix">-->
<!--            <div class="box fl">-->
<!--              <h3>Top PC Performance <i></i></h3>-->
<!--              <dl>-->
<!--                <dt><strong>Cleaner & Faster PC</strong></dt>-->
<!--                <dd>-->
<!--                  Auto clean junk files and optimize registries to accelerate running speed.-->
<!--                  <span>* Advanced SystemCare pro only</span>-->
<!--                </dd>-->
<!--              </dl>-->
<!--              <dl>-->
<!--                <dt><strong>More Stable PC</strong></dt>-->
<!--                <dd>-->
<!--                  Missing/faulty/outdated/rare PC driver updating.-->
<!--                  <span>* Driver Booster Pro only</span>-->
<!--                </dd>-->
<!--              </dl>-->
<!--            </div>-->
<!--            <div class="imgbox fr"><img src="--><?php //echo getStaticUrl('images/left-asc-box.png')?><!--" alt="Advanced SystemCare Pro"/></div>-->
<!--          </div>-->
<!--          <div class="db-box fl clearfix">-->
<!--            <div class="imgbox fl"><img src="--><?php //echo getStaticUrl('images/right-db-box.png')?><!--" alt="Driver Booster 6 Pro"/></div>-->
<!--            <div class="box fl">-->
<!--              <h3><i></i> Peak Game Experience </h3>-->
<!--              <dl>-->
<!--                <dt><strong>Faster Gaming</strong></dt>-->
<!--                <dd>-->
<!--                  Auto clean RAM and stop useless <br>processes.-->
<!--                  <span>* Advanced SystemCare pro only</span>-->
<!--                </dd>-->
<!--              </dl>-->
<!--              <dl>-->
<!--                <dt><strong>Smoother Gaming</strong></dt>-->
<!--                <dd>-->
<!--                  Game Ready Drivers and components available to improve gaming experience.-->
<!--                  <span>* Driver Booster Pro only</span>-->
<!--                </dd>-->
<!--              </dl>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
    <!-- together end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2><?= $content[30]; ?></h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster 6 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> <?= $content[31]; ?> <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> <?= $content[32]; ?>
            </p>
          </div>
          <p><strong><big>20</big>,99€</strong> <del>89,99€</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db83pc2099&ref=de_dbbf2099sale202010<?= $refStr; ?>&aff=&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8bf2099sale-de');">
            <div class="inner">
              <i class="all-icons"></i>
              <span><?= $content[33]; ?></span>
            </div>
          </a>
          <p class="year"><?= $content[34]; ?></p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2><?= $content[35]; ?></h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema" colspan="2"></th>
              <th class="itemb"><?= $content[36]; ?></th>
              <th class="itemc"><span><?= $content[37]; ?></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""/></td>
              <td class="itema"><?= $content[38]; ?></td>
              <td class="itemb"><i class="all-icons">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""/></td>
              <td class="itema"><?= $content[39]; ?></td>
              <td class="itemb"><i class="all-icons free">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""/></td>
              <td class="itema"><?= $content[40]; ?></td>
              <td class="itemb"><i class="all-icons free">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""/></td>
              <td class="itema"><?= $content[41]; ?></td>
              <td class="itemb"><i class="all-icons free">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""/></td>
              <td class="itema"><?= $content[42]; ?></td>
              <td class="itemb"><i class="all-icons free">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr class="last">
              <td class="icons"><img src="<?php echo getStaticUrl('images/icons_06.png')?>" alt=""/></td>
              <td class="itema"><?= $content[43]; ?></td>
              <td class="itemb"><i class="all-icons free">√</i></td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3><?= $content[44]; ?></h3>
        <h2><?= $content[45]; ?></h2>
        <div class="price">
          <p><strong><big>20</big>,99€</strong> <del>89,99€</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-db83pc2099&ref=de_dbbf2099sale202010<?= $refStr; ?>&aff=&refs=de_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8bf2099sale-de');">
            <div class="inner">
              <i class="all-icons"></i>
              <span><?= $content[46]; ?></span>
            </div>
          </a>
          <p id="footdown" class="countdown"><?= $content[6]; ?> <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms <?= $content[7]; ?></p>
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
            <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
            <dd>
              <h2><?= $content[47]; ?></h2>
              <h4><?= $content[48]; ?></h4>
              <p>
                  <?= $content[49]; ?>
              </p>
              <cite><?= $content[50]; ?></cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt=""></dt>
            <dd>
              <h2><?= $content[51]; ?></h2>
              <h4><?= $content[52]; ?></h4>
              <p>
                  <?= $content[53]; ?>
              </p>
              <cite><?= $content[54]; ?></cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""></dt>
            <dd>
              <h2><?= $content[55]; ?></h2>
              <h4><?= $content[56]; ?></h4>
              <p>
                  <?= $content[57]; ?>
              </p>
              <cite><?= $content[58]; ?></cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
            <dd>
              <h2><?= $content[59]; ?></h2>
              <h4><?= $content[60]; ?></h4>
              <p>
                  <?= $content[61]; ?>
              </p>
              <cite><?= $content[62]; ?></cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2><?= $content[63]; ?></h2>
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
              <h4><?= $content[64]; ?></h4>
              <p>
                  <?= $content[65]; ?>
              </p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4><?= $content[66]; ?></h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt><?= $content[67]; ?></dt>
            <dd><?= $content[68]; ?></dd>
            <dd>
                <?= $content[69]; ?>
            </dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. <?= $content[70]; ?></p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- backtotop start -->
    <div id="backtotop" class="backtotop"><?= $content[71]; ?></div>
    <!-- backtotop end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var soldStr = '<?= $content[72]; ?>';
    var imgSrc = "<?php echo getStaticUrl('images/db-mask-box.png')?>";
    var imgOff = "<?php echo getStaticUrl('images/mask-off.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=de-db83pc2699&ref=de_db8bf2699soldout202010"+ refStr +"&aff=&refs=de_purchase_db &tw=-8";
    var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'db8bf2699soldout-de');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>


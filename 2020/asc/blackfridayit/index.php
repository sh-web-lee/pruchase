<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
include 'lang/it.php';
$content = $text['content'];

$viewNum = rand(98, 165);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}

if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'itascnovbr_p' . $date;
    $c_name_t = 'itascnovbr_t' . $date;
    $isInit = $_GET['isInit'];
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = (intval($_GET['packsNum']) > 0) ? intval($_GET['packsNum']) : 49;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
        setcookie($c_name_t, $totalNum, time() + 3600 * 24 * 2);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
        } else {
            if ($isInit == 1) {
                $packsNum = intval($_COOKIE[$c_name]);
            } else {
                $packsNum = $_COOKIE[$c_name] - 1;
            }
            setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
        }
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

$refStr = empty($_GET['id']) ? '' : ('-' . $_GET['id']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);

$isNewUser = false;
if (preg_match('/^13\./', $_GET['ver'])) {
    $isNewUser = true;
}

$packsNum = 49;
$transData = json_decode(base64_decode($_GET['num']));
if (!empty($transData)) {
    if (@intval($transData->seats)) {
        $packsNum = @intval($transData->seats);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $text['title']; ?></title>
    <meta name="Copyright" content="IObit">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
    <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
    <div class="wrapper">
        <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
        <div class="title clearfix">
            <div class="left fl">
                <img src="<?php echo getStaticUrl('images/asc-box.png') ?>" alt=""/>
            </div>
            <div class="right fr">
                <b class="only"><?= $content[1]; ?></b>
                <h1><?= $content[2]; ?></h1>
                <h5><?= $content[3]; ?></h5>
                <div class="discount"><?= $content[4]; ?></div>
            </div>
        </div>
        <div class="chart">
            <div class="chartbox one"><span><?= $content[5]; ?></span></div>
            <div class="chartbox two"><span><?= $content[6]; ?></span></div>
            <div class="chartbox center three"><span><?= $content[7]; ?></span></div>
            <div class="chartbox four"><span><?= $content[8]; ?></span>
            </div>
            <div class="chartbox five"><span><?= $content[9]; ?></span></div>
        </div>
        <div class="price clearfix">
            <div class="numbox fl">
                <div id="flip" class="flipNum">
                    <div class="listbox"><span class="list"><b>0</b></span></div>
                    <div class="listbox"><span class="list"><b>0</b></span></div>
                    <div class="listbox"><span class="list"><b>5</b></span></div>
                    <div class="listbox last"><span class="list"><b>0</b></span></div>
                </div>
                <p class="change"><?= $content[10]; ?></p>
            </div>
            <div class="btnbox fl">
                <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-asc3pc1399&ref=it_asc3pc1399bf2010<?php echo $refStr; ?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pc1399bf2010-it');">
                    <?= $content[11]; ?>
                </a>
                <p><?= $content[12]; ?></p>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
    <h2><?= $content[13]; ?></h2>
    <div class="wrapper intro-box">
        <div class="intro-img">
            <div class="intro-list one">
                <img src="<?php echo getStaticUrl('images/screen01.png') ?>" alt=""/>
                <div class="gray"></div>
                <span class="loading"><?= $content[14]; ?></span>
                <div class="scanbox">
                    <div class="scan">
						<h6>Scansiona</h6>
                        <!-- <div class="circleprogress-content">
                            <div class="circle right">
                                <div class="circleprogress rightcircle"></div>
                            </div>
                            <div class="circle left">
                                <div class="circleprogress leftcircle"></div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="percent">
                    <span class="change-num"><?= $content[15]; ?></span>
                    <span class="completed"></span>
                    <div class="circletwo">
                        <div class="bottom-circle"></div>
                        <div class="top-circle"></div>
                    </div>
                </div>
                <div class="rocket"></div>
                <div class="safebox">
                    <img src="<?php echo getStaticUrl('images/screen04.png') ?>" alt=""/>
                    <div class="privacy">
                        <!-- <span class="icon"></span>
                        <span class="shield"><?= $content[16]; ?></span> -->
                        <div class="check"></div>
                        <!-- <span class="text"><?= $content[17]; ?></span> -->
                    </div>
                    <!-- <div class="privacy-right">
                        <img src="<?php echo getStaticUrl('images/privacy-right.png') ?>" alt=""/>
                    </div> -->
                    <div class="shield-img"></div>
                </div>
            </div>
        </div>
        <div class="intro-txt">
            <div class="slow">
                <h3><span><?= $content[18]; ?></span></h3>
                <p>
                    <span class="one"><?= $content[19]; ?></span>
                    <span class="two"><?= $content[20]; ?></span>
                </p>
            </div>
            <div class="fast">
                <h3><?= $content[21]; ?></h3>
                <p><?= $content[22]; ?></p>
                <div class="fast-list">
                    <div class="one">
                        <dl>
                            <dt><b><?= $content[23]; ?></b></dt>
                            <dd><?= $content[24]; ?></dd>
                        </dl>
                        <dl>
                            <dt><b><?= $content[25]; ?></b></dt>
                            <dd>
                                <?= $content[26]; ?>
                            </dd>
                        </dl>
                    </div>
                    <div class="two">
                        <dl>
                            <dt><b><?= $content[27]; ?></b></dt>
                            <dd>
                                <?= $content[28]; ?>
                            </dd>
                        </dl>
                        <dl>
                            <dt><b><?= $content[29]; ?></b></dt>
                            <dd>
                                <?= $content[30]; ?>
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
    <h2><?= $content[31]; ?></h2>
    <table>
        <thead>
        <tr>
            <th class="text"></th>
            <th class="itema">
                <div class="free"><?= $content[32]; ?></div>
            </th>
            <th class="itemb">
                <div class="pro"><?= $content[33]; ?></div>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="virtue"><?= $content[34]; ?></td>
            <td class="itema"><i class="all-icons black">√</i></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr class="two">
            <td class="virtue"><?= $content[35]; ?></td>
            <td class="itema"><i class="all-icons black">√</i></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr class="three">
            <td class="virtue"><?= $content[36]; ?></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
            <td class="virtue"><?= $content[37]; ?></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
            <td class="virtue"><?= $content[38]; ?></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
            <td class="virtue"><?= $content[39]; ?></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
            <td class="virtue"><?= $content[40]; ?></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
            <td class="virtue"><?= $content[41]; ?></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
            <td class="virtue"><?= $content[42]; ?></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
            <td class="virtue"><?= $content[43]; ?></td>
            <td class="itema"><i class="all-icons">×</i></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
            <td class="virtue"><?= $content[44]; ?></td>
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
        <h2><?= $content[45]; ?></h2>
        <div class="feature-box">
            <div class="feature-img">
                <img src="<?php echo getStaticUrl('images/screen05.png') ?>" alt=""/>
                <div class="light-box"><span class="light"></span></div>
                <img class="small-box" src="<?php echo getStaticUrl('images/asc-box.png') ?>" alt=""/>
            </div>
            <div class="feature-list">
                <div class="feature-item">
                    <img src="<?php echo getStaticUrl('images/f-icons01.png') ?>" alt=""/>
                    <h5><?= $content[46]; ?></h5>
                    <h3><?= $content[47]; ?></h3>
                </div>
                <div class="feature-item">
                    <img src="<?php echo getStaticUrl('images/f-icons02.png') ?>" alt=""/>
                    <h5><?= $content[48]; ?></h5>
                    <h3><?= $content[49]; ?></h3>
                </div>
                <div class="feature-item">
                    <img src="<?php echo getStaticUrl('images/f-icons03.png') ?>" alt=""/>
                    <h5><?= $content[50]; ?></h5>
                    <h3><?= $content[51]; ?></h3>
                </div>
            </div>
        </div>
        <div class="price">
            <p><strong class="change-price"><?= $content[52]; ?>
            </p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-asc3pc1399&ref=it_asc3pc1399bf2010<?php echo $refStr; ?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pc1399bf2010-it');">
                <?= $content[53]; ?>
            </a>
            <p><?= $content[54]; ?></p>
        </div>
    </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review-wrap">
    <div class="wrapper">
        <h2><?= $content[55]; ?></h2>
        <div class="present clearfix">
            <dl>
                <dt><img src="<?php echo getStaticUrl('images/p-icons01.png') ?>" alt=""/></dt>
                <dd><?= $content[56]; ?></dd>
            </dl>
            <dl class="center">
                <dt><img src="<?php echo getStaticUrl('images/p-icons02.png') ?>" alt=""/></dt>
                <dd><?= $content[57]; ?></dd>
            </dl>
            <dl>
                <dt><img src="<?php echo getStaticUrl('images/p-icons03.png') ?>" alt=""/></dt>
                <dd><?= $content[58]; ?></dd>
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
                        <dt><h2><span><?= $content[59]; ?></span></h2></dt>
                        <dd>
                            <p class="on"><?= $content[60]; ?></p>
                            <cite><?= $content[61]; ?></cite>
                        </dd>
                    </dl>
                    <dl class="reviews">
                        <dt><h2><span><?= $content[62]; ?></span></h2></dt>
                        <dd>
                            <p><?= $content[63]; ?></p>
                            <cite><?= $content[64]; ?></cite>
                        </dd>
                    </dl>
                    <dl class="reviews">
                        <dt><h2><span><?= $content[65]; ?></span></h2></dt>
                        <dd>
                            <p><?= $content[66]; ?></p>
                            <cite><?= $content[67]; ?></cite>
                        </dd>
                    </dl>
                    <dl class="reviews">
                        <dt><h2><span><?= $content[68]; ?></span></h2></dt>
                        <dd>
                            <p><?= $content[69]; ?></p>
                            <cite><?= $content[70]; ?></cite>
                        </dd>
                    </dl>
                    <dl class="reviews">
                        <dt><h2><span><?= $content[71]; ?></span></h2></dt>
                        <dd>
                            <p><?= $content[72]; ?></p>
                            <cite><?= $content[73]; ?></cite>
                        </dd>
                    </dl>
                    <dl class="reviews">
                        <dt><h2><span><?= $content[74]; ?></span></h2></dt>
                        <dd>
                            <p><?= $content[75]; ?></p>
                            <cite><?= $content[76]; ?></cite>
                        </dd>
                    </dl>
					<dl class="reviews">
					    <dt><h2><span><?= $content[77]; ?></span></h2></dt>
					    <dd>
					        <p><?= $content[78]; ?></p>
					        <cite><?= $content[79]; ?></cite>
					    </dd>
					</dl>
                </div>
                <ul>
                    <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/Ryan-Hill.png') ?>"
                                                        alt="Ryan-Hill"></li>
                    <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/Santiago-Díaz-de-la-Fuente.png') ?>"
                                                      alt="Santiago-Díaz-de-la-Fuente"></li>
					<li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/richard-preston.png') ?>"
					                                    alt="Richard Preston"></li>
                    <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/HTML.it.png') ?>" alt="HTML">
                    </li>
                    <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/Anthony-Baker.png') ?>"
                                                       alt="Anthony Baker"></li>
                    <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/Brendon.png') ?>"
                                                       alt="Brendon O Rourke"></li>
                    <li class="six last" data-num="3"><img src="<?php echo getStaticUrl('images/Lyle-Stelmaschuk.png') ?>"
                                                           alt="Lyle-Stelmaschuk"></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
    <div class="wrapper">
        <h2><?= $content[80]; ?></h2>
        <p>
            <?= $content[81]; ?>
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt=""/>
    </div>
</div>
<!-- awards end -->

<!-- footer start -->
<div class="footer">
    <div class="wrapper">
        <div class="service">
            <dl class="left fl">
                <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""/></dt>
                <dd>
                    <h3><?= $content[82]; ?></h3>
                    <p>
                        <?= $content[83]; ?>
                    </p>
                </dd>
            </dl>
            <dl class="right fr">
                <dt><h3><?= $content[84]; ?></h3></dt>
                <dd>
                    <img src="<?php echo getStaticUrl('images/payment.png') ?>" alt=""/>
                </dd>
            </dl>
        </div>
        <dl>
            <dt><?= $content[85]; ?></dt>
            <dd><?= $content[86]; ?></dd>
            <dd>
                <?= $content[87]; ?>
            </dd>
        </dl>
        <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. <?= $content[88]; ?></p>
    </div>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
        <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png') ?>" alt=""/>
            <div class="discount"><?= $content[89]; ?></div>
        </div>
        <div class="numbox fl">
            <div id="fliptwo" class="flipNum">
                <div class="listbox"><span class="list"><b>0</b></span></div>
                <div class="listbox"><span class="list"><b>0</b></span></div>
                <div class="listbox"><span class="list"><b>5</b></span></div>
                <div class="listbox last"><span class="list"><b>0</b></span></div>
            </div>
            <p class="change"><b class="viewNum"><?php echo $viewNum; ?></b> <?= $content[90]; ?></p>
        </div>
        <div class="price fl">
            <strong class="change-price"><?= $content[91]; ?></strong>
            <del class="original"><?= $content[92]; ?></del>
            <p><?= $content[93]; ?></p>
        </div>
        <a class="buybtn fr"
           href="https://www.iobit.com/buy.php?product=it-asc3pc1399&ref=it_asc3pc1399bf2010<?php echo $refStr; ?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pc1399bf2010-it');">
            <?= $content[94]; ?>
        </a>
    </div>
</div>
<!-- floatlayer end -->

<script>
    packsNum =<?php echo $packsNum;?>;
    refStr = "<?php echo $refStr;?>";
    var _href = "https://www.iobit.com/buy.php?product=it-asc3pc1599&ref=it_asc3pc1599bf2010<?php echo $refStr;?>&refs=it_purchase_asc";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc3pc1599bf2010-it');";
</script>
<script src="<?php echo $pRootUrl; ?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>

<?php if ($isNewUser): ?>
    <script>
        $(".feature").removeClass("new").addClass("new");
        $(".feature .feature-box").remove();
        $(".comparison tr.two").remove();
        $(".comparison tr.three .itema i").addClass("black");
        $(".feature h2").text('Activate all features at the lowest price of the year now!');
    </script>
<?php endif; ?>


<?php if (in_array($_GET['pop'], array('br_asclp'))): ?>
    <script>
        document.title = "80% OFF to Get Cleaner, Faster and More Secure PC - Black Friday Sale | IObit";
        $(".discount").removeClass("eight").addClass("eight");
        if (!$(".buybtn").hasClass("soldout")) {
            $(".change-price").html('$<big>9</big>.99');
            $(".floatlayer .change-price").html('$9.99');
            $(".banner .buybtn small").html('- $9.99');
            $(".buybtn").attr({
                "href": 'https://www.iobit.com/buy.php?product=2019asc3pc999&ref=br_asclp<?php echo $refStr;?>&refs=purchase_ascbf',
                "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-bflp');",
            });
        } else {
            $(".change").html('Sorry, 80% OFF offer is sold out.');
            $(".change-price").html('$<big>12</big>.97');
            $(".floatlayer .change-price").html('$12.97');
            $(".banner .buybtn small").html('- $12.97');
            $(".buybtn.soldout").attr({
                "href": 'https://www.iobit.com/buy.php?product=2019asc3pc1297&ref=br_asclp1297<?php echo $refStr;?>&refs=purchase_ascbf',
                "onclick": "ga('send', 'event', 'ascbuypop', 'buy', 'ascpurchase-bflp');",
            });
        }
    </script>
<?php endif; ?>
<?php if (in_array($_GET['pop'], array('br_asccl'))): ?>
    <script>
        document.title = "75% OFF to Get Cleaner, Faster and More Secure PC - Black Friday Sale | IObit";
        $(".discount").removeClass("seven").addClass("seven");
        if (!$(".buybtn").hasClass("soldout")) {
            $(".change-price").html('$<big>12</big>.97');
            $(".floatlayer .change-price").html('$12.97');
            $(".banner .buybtn small").html('- $12.97');
            $(".buybtn").attr({
                "href": 'https://www.iobit.com/buy.php?product=2019asc3pc1297&ref=br_asccl<?php echo $refStr;?>&refs=purchase_ascbf',
                "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-bfcl');",
            });
        } else {
            $(".change-price").html('$<big>14</big>.77');
            $(".floatlayer .change-price").html('$14.77');
            $(".banner .buybtn small").html('- $14.77');
            $(".change").html('Sorry, 75% OFF offer is sold out.');
            $(".buybtn.soldout").attr({
                "href": 'https://www.iobit.com/buy.php?product=2019asc3pc1477&ref=br_asccl1477<?php echo $refStr;?>&refs=purchase_ascbf',
                "onclick": "ga('send', 'event', 'ascbuypop', 'buy', 'ascpurchase-bfcl');",
            });
        }
    </script>
<?php endif; ?>
</body>
</html>
<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name='lop'.$date;
    if (empty($_COOKIE[$c_name])) {
        $packsNum = 78;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
        if ($_GET['t'] == 1) {
            $packsNum = $_COOKIE[$c_name];
        }
        else {
            if (intval($_COOKIE[$c_name]) <= 3) {
                setcookie($c_name, 3, time() + 3600 * 24);
                $packsNum = $_COOKIE[$c_name];
            } else {
                $packsNum = $_COOKIE[$c_name] - 1;
                setcookie($c_name, $packsNum, time() + 3600 * 24);
                if (rand(1, 100) % 2 == 0) {
                    $packsNum++;
                }
            }
        }
    }
    echo $packsNum;
    exit;
}

if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_db4_2016preblackfriday';

include $pRootUrl . 'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Save 80% on DB PRO and enjoy more stable PC performance with up-to-date drivers!</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,600i,700,700i'>
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700'>
    <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
    <script>
        function decreasingPacks() {
            var dateNow = new Date();
            $.ajax({
              type: "GET",
              url: "index.php",
              data: "action=getPacks&r=" + Math.random()+"&d="+dateNow.getDate(),
              success: function(packs) {
                $('.packs').html(packs);
                $('.packs-left').html((packs>=10?'00':'000')+packs);
                setTimeout('decreasingPacks()', 20000);
              }
            });
        }
        setTimeout('decreasingPacks()', 20000);
    </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<div id="main" class="main">
    <!-- header start -->
    <div class="header">
        <div class="wrapper">
            <a class="logo" href="http://www.iobit.com" target="_blank">
                <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
            </a>

            <h1>PRE-BLACK FRIDAY SALE</h1>

            <h2>Buy Earlier, Save Bigger</h2>

            <p>Save up to <b>80%</b> on Driver Booster PRO </p>

            <div class="offer clearfix">
                <dl class="first">
                    <dt>FIRST 2,000 ORDERS</dt>
                    <dd>80% OFF</dd>
                    <dd class="add">+</dd>
                    <dd><img src="<?php echo $pResUrl; ?>images/gift.png" alt=""></dd>
                    <dd class="time">
                        Hurry up,
            <span>
              <em><i class="packs-left">****</i></em>
            </span>
                        left today!
                    </dd>
                    <div class="bar">
                        <div class="barbox"></div>
                        <div class="light"></div>
                        <span>80% OFF</span>
                    </div>
                </dl>
                <dl>
                    <dt>NEXT 3,000 ORDERS</dt>
                    <dd>40% OFF</dd>
                </dl>
                <dl class="last">
                    <dt>REST ALL ORDERS</dt>
                    <dd>10% OFF</dd>
                </dl>
            </div>
            <div class="common clearfix">
                <div class="fl text clearfix">
                    <img class="fl" src="<?php echo $pResUrl; ?>images/center_db.png" alt="">

                    <div class="title fl">
                        <h3>Driver Booster 4 PRO</h3>

                        <p>1 Year / 3 PCs <strong> $24.95</strong>
                            <del>$74.85</del>
                        </p>
                    </div>
                    <ul class="clickhere fr">
                        <li class="first"><span>Smart Defrag PRO</span> <strong>$0 </strong>
                            <del>$19.99</del>
                        </li>
                        <li><span>Protected Folder</span> <strong>$0 </strong>
                            <del>$19.99</del>
                        </li>
                        <li><span>AMC Security PRO</span> <strong>$0 </strong>
                            <del>$19.99</del>
                        </li>
                    </ul>
                </div>
                <dl class="fr">
                    <dt>
                        <strong>$24.95</strong>
            <span>
              <del>$134.82</del>
              <i>80% OFF</i>
            </span>
                    </dt>
                    <dd>
                        <a class="buybtn btn ccount"
                           href="http://www.iobit.com/buy.php?product=enaffdb4sdpfamc&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db"
                           onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaff_db4_2016preblackfriday');">
                            <i class="all-icons">car</i>
                            <span>Activate Now</span>
                        </a>
                    </dd>
                    <dd>
                        Hurry up, <span class="packs">**</span> left today!
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- container start -->
    <div class="wrapper">
        <!-- payment start -->
        <div class="payment clearfix">
            <dl>
                <dt>Accepted Payments</dt>
                <dd><img src="<?php echo $pResUrl; ?>images/payment.jpg" alt=""></dd>
            </dl>
            <dl>
                <dt>Money Back Guarantee</dt>
                <dd><img src="<?php echo $pResUrl; ?>images/back.jpg" alt=""></dd>
            </dl>
            <dl>
                <dt class="last">Secure Payment</dt>
                <dd><img src="<?php echo $pResUrl; ?>images/godaddy.jpg" alt=""></dd>
            </dl>
        </div>
        <!-- patment end -->

        <!-- awards start -->
        <div class="awards">
            <h2>Trusted and awarded by these medias</h2>
            <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
        </div>
        <!-- awards end -->

        <!-- intro star -->
        <div class="intro">
            <div class="wrapper">
                <h2>Get More Drivers & Enjoy Better Gaming and PC Performance with DB 4 PRO</h2>

                <div class="intro-img">
                    <img src="<?php echo $pResUrl; ?>images/intro_ui.jpg" alt="Driver Booster">
                </div>
                <div class="panel clearfix">
                    <dl>
                        <dt><img src="<?php echo $pResUrl; ?>images/intro_icon1.png" alt=""></dt>
                        <dd>
                            <h4>200% Larger Database</h4>

                            <p>Priority to update more outdated and rare drivers</p>
                        </dd>
                    </dl>
                    <dl class="dlmargin">
                        <dt><img src="<?php echo $pResUrl; ?>images/intro_icon2.png" alt=""></dt>
                        <dd>
                            <h4>200% Faster Download *</h4>

                            <p>Up to 200% faster driver download at system idle time</p>
                        </dd>
                    </dl>
                    <dl>
                        <dt><img src="<?php echo $pResUrl; ?>images/intro_icon3.png" alt=""></dt>
                        <dd>
                            <h4>Auto & Safe</h4>

                            <p>Auto download and backup drivers for safe restore</p>
                        </dd>
                    </dl>
                    <dl>
                        <dt><img src="<?php echo $pResUrl; ?>images/intro_icon4.png" alt=""></dt>
                        <dd>
                            <h4>VC Runtime, Adobe Flash, PhysX, OpenAL,DirectX, etc. </h4>

                            <p>Fix system issues caused by outdated drivers for better PC performance</p>
                        </dd>
                    </dl>
                    <dl class="dlmargin">
                        <dt><img src="<?php echo $pResUrl; ?>images/intro_icon5.png" alt=""></dt>
                        <dd>
                            <h4>Nvidia, Realtek, Intel, AMD, Broadcom, VIA,etc. </h4>

                            <p>Enjoy more smooth gaming & video playback</p>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <!-- intro end -->

        <!-- donation star -->
        <div class="donation clearfix">
            <h2>Black Friday Free Gift Pack</h2>
            <dl>
                <dt><img src="<?php echo $pResUrl; ?>images/donation_amc.png" alt="AMC Security PRO"></dt>
                <dd><h3>AMC Security PRO</h3></dd>
                <dd><strong>$0 </strong>
                    <del>$19.99</del>
                    <span>1 Y / Multi Devices</span></dd>
                <dd>200% Speed up and Fully Protect your Android from any treats!</dd>
            </dl>
            <dl>
                <dt><img src="<?php echo $pResUrl; ?>images/donation_sd.png" alt="Smart Defrag PRO"></dt>
                <dd><h3>Smart Defrag PRO</h3></dd>
                <dd><strong>$0 </strong>
                    <del>$19.99</del>
                    <span>1 Y / 1 PC</span></dd>
                <dd>Get the Maximum Hard Drive Performance!</dd>
            </dl>
            <dl>
                <dt><img src="<?php echo $pResUrl; ?>images/donation_pf.png" alt="Protected Folder"></dt>
                <dd><h3>Protected Folder</h3></dd>
                <dd><strong>$0 </strong>
                    <del>$19.99</del>
                    <span>1 Y / 1 PC</span></dd>
                <dd>Never Worry about Data Theft or Privacy Leaks!</dd>
            </dl>
        </div>
        <!-- donation end -->
    </div>

    <!-- center-buy start -->
    <div class="header center-buy">
        <div class="wrapper clearfix">
            <div class="common clearfix">
                <div class="fl text clearfix">
                    <img class="fl" src="<?php echo $pResUrl; ?>images/center_db.png" alt="">

                    <div class="title fl">
                        <h3>Driver Booster 4 PRO</h3>

                        <p>1 Year / 3 PCs <strong> $24.95</strong>
                            <del>$74.85</del>
                        </p>
                    </div>
                    <ul class="clickhere fr">
                        <li class="first"><span>Smart Defrag PRO</span> <strong>$0 </strong>
                            <del>$19.99</del>
                        </li>
                        <li><span>Protected Folder</span> <strong>$0 </strong>
                            <del>$19.99</del>
                        </li>
                        <li><span>AMC Security PRO</span> <strong>$0 </strong>
                            <del>$19.99</del>
                        </li>
                    </ul>
                </div>
                <dl class="fr">
                    <dt>
                        <strong>$24.95</strong>
          <span>
            <del>$134.82</del>
            <i>80% OFF</i>
          </span>
                    </dt>
                    <dd>
                        <a class="buybtn btn ccount"
                           href="http://www.iobit.com/buy.php?product=enaffdb4sdpfamc&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_db"
                           onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaff_db4_2016preblackfriday');">
                            <i class="all-icons">car</i>
                            <span>Activate Now</span>
                        </a>
                    </dd>
                    <dd>
                        Hurry up, <span class="packs">**</span> left today!
                    </dd>
                </dl>
            </div>
            <p class="secure">
                <i class="all-icons">√</i>
                100% 60-DAY MONEY BACK GUARANTEE
            </p>
        </div>
    </div>
    <!-- center-buy end -->

    <div class="wrapper">
        <!-- review start -->
        <div id="user" class="review wrapper clearfix">
            <!-- media -->
            <div class="media">
                <h2>DB Media Review</h2>

                <div class="content">
                    <dl>
                        <dt><img src="<?php echo $pResUrl; ?>images/clnet.jpg"></dt>
                        <dd><img src="<?php echo $pResUrl; ?>images/four_star.jpg">“Update system drivers with the
                            greatest
                        </dd>
                        <dd>of ease.”</dd>
                    </dl>
                    <dl class="cor">
                        <dt><img src="<?php echo $pResUrl; ?>images/soft.jpg"></dt>
                        <dd><img src="<?php echo $pResUrl; ?>images/five_star.jpg">“Works fine and eliminates</dd>
                        <dd>the problems created by incompatible drivers.”</dd>
                    </dl>
                    <dl>
                        <dt><img src="<?php echo $pResUrl; ?>images/softonic.jpg"></dt>
                        <dd><img src="<?php echo $pResUrl; ?>images/four_star.jpg">“Simple and effective solution for
                            quickly
                        </dd>
                        <dd>updating outdated drivers.”</dd>
                    </dl>
                </div>
            </div>
            <!-- user -->
            <div class="user">
                <h2>User Review</h2>
                <dl>
                    <dt class="mg"><img src="<?php echo $pResUrl; ?>images/mike.png" alt="Mike Goggans"></dt>
                    <dd><h4>Mike Goggans</h4></dd>
                    <dd class="user-bg user-bg2"><span>I had 10 drivers that were out of date and the Driver Booster updated them all perfectly.</span>
                    </dd>
                </dl>
                <dl>
                    <dt class="vl"><img src="<?php echo $pResUrl; ?>images/vince.png" alt="Vince Lewis"></dt>
                    <dd><h4 class="vlh4">Vince Lewis</h4></dd>
                    <dd class="user-bg">
          <span class="vlspan">
            Driver Booster did it all with just one click of the mouse. 19 drivers were updated in no time at all.
          </span>
                    </dd>
                </dl>
                <dl>
                    <dt class="mg"><img src="<?php echo $pResUrl; ?>images/wayne.png" alt="Wayne Bowler"></dt>
                    <dd><h4>Wayne Bowler</h4></dd>
                    <dd class="user-bg user-bg2">
          <span>
            It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!
          </span>
                    </dd>
                </dl>

            </div>
        </div>
        <!-- review end-->

        
    </div>
    <!-- container end -->

    <!-- annotation start -->
    <dl class="annotation wrapper">
        <dt>Note:</dt>
        <dd>*.Data may vary based on different system or computer.</dd>
        <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole
            discretion.
        </dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">
        <div class="wrapper">
            <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
        </div>
    </div>
    <!-- footer end -->
    <div class="pop-up">
        <div class="pop-main">
            <div class="pop-box">
                <h2>Note:</h2>
                <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
                <p>You will be redirected to the latest IObit promotion page automatically.</p>
            </div>
        </div>
    </div>
</div>

<script>
    $(".ccount").click(function(){
        $.ajax({
            type: "GET",
            url: "index.php",
            data: "action=count&click_url=" + encodeURI($(this).attr('href'))
        });
    });
    var dateNow = new Date();
      $.ajax({
        type: "GET",
        url: "index.php",
        data: "action=getPacks&t=1&r=" + Math.random()+"&d="+dateNow.getDate(),
        success: function(packs) {
          $('.packs').html(packs);
          $('.packs-left').html((packs>10?'00':'000')+packs);
        }
      });
    $(window).load(function () {
        $(".bar span").addClass("on");
        $(".bar").addClass("on");
        setTimeout('$(".barbox").addClass("on")', 500);
        setTimeout('$(".light").addClass("on")', 500);
    });
    function goTarget(target, yoffset) {
        if (!yoffset) yoffset = 0;
        var Theigth = target.offset().top - yoffset;
        $("html, body").animate({scrollTop: Theigth}, 'slow');
    }
    setTimeout('window.location.href="https://purchase.iobit.com/aff/en/db/2017general/index.php'+location.search+'"',5000);
</script>
</body>
</html>
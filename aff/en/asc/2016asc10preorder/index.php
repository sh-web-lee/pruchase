<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_asc_2016asc10preorder';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

function num_format($num)
{
    if (!is_numeric($num)) {
        return false;
    }
    $rvalue = '';
    $num = explode('.', $num);
    $rl = !isset($num['1']) ? '' : $num['1'];
    $j = strlen($num[0]) % 3;
    $sl = substr($num[0], 0, $j);
    $sr = substr($num[0], $j);
    $i = 0;
    while ($i <= strlen($sr)) {
        $rvalue = $rvalue . ',' . substr($sr, $i, 3);
        $i = $i + 3;
    }
    $rvalue = $sl . $rvalue;
    $rvalue = substr($rvalue, 0, strlen($rvalue) - 1);
    $rvalue = explode(',', $rvalue);
    if ($rvalue[0] == 0) {
        array_shift($rvalue);
    }
    $rv = $rvalue[0];
    for ($i = 1; $i < count($rvalue); $i++) {
        $rv = $rv . ',' . $rvalue[$i];
    }
    if (!empty($rl)) {
        $rvalue = $rv . '.' . $rl;
    } else {
        $rvalue = $rv;
    }
    return $rvalue;
}

$buyNum = num_format(ceil(microtime_float() * 1000 / 20000) - 73417026);

if ($_GET['action'] == 'getPacks') {
    if ((rand(1, 100) % 2) == 0) {
        echo 0;
        exit();
    }
    echo $buyNum;
    exit;
}

if (in_array($_GET['st'], array('asc_c1new', 'asc_c1new1', 'asc_c6', 'asc_c2', 'asc_c3', 'asc_feature', 'asc_c7', 'asc_t2', 'asc_t3',
    'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1', 'asc_s2', 'asc_s3', 'asc_s4',
    'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report', 'asc_promote', 'asc_autocare', 'asc_buypro',
    'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5', 'asc_pro6'))) {
    $refStr = '-' . $_GET['st'];
} else {
    $refStr = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Get ASC 10 PRO for 30 Days for Free & Enjoy 80% Discount for 1 Year Subscription</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600'>
    <link href="<?php echo $pResUrl; ?>style/style.min.css" rel="stylesheet">
    <!-- <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet"> -->
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
    <script type="text/javascript">
        function decreasingPacks() {
            $.ajax({
                type: "GET",
                url: "asc10preorder.php",
                data: "action=getPacks&r=" + Math.random(),
                success: function (packs) {
                    if(packs!=0){
                        $('.packs').html(packs);
                    }
                    setTimeout('decreasingPacks()', 10000);
                }
            });
        }
        setTimeout('decreasingPacks()', 10000);
    </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<div class="main">
    <!-- header start -->
    <div class="header">
        <div class="top">
            <div class="wrapper clearfix">
                <a class="logo" href="http://www.iobit.com" target="_blank">
                    <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
                </a>
                <!-- time -->
                <ul id="countdown" class="countdown">
                    <li>00</li>
                    <li>00</li>
                    <li>00</li>
                    <li>000</li>
                </ul>
            </div>
        </div>
        <div class="panel">
            <div class="wrapper">
                <h1 id="sell0" class="sellingAnimate">ASC 10 PRO Pre-launch Offer only for preorders</h1>

                <div class="selling">
                    <div class="zero sellingAnimate">
                        <dl>
                            <dt>$0</dt>
                            <dd>Pay $0 to pre-order Advanced SystemCare 10 PRO</dd>
                        </dl>
                    </div>
                    <div class="day sellingAnimate">
                        <dl>
                            <dt>30 days</dt>
                            <dd>Enjoy ASC 10 PRO features free for 30 days</dd>
                        </dl>
                    </div>
                    <div class="off sellingAnimate">
                        <dl>
                            <dt>80% off</dt>
                            <dd>80% off on ASC 10 PRO 1 Year / 3 PCs after 30-day trial</dd>
                        </dl>
                    </div>
                    <div class="or sellingAnimate">
                        <strong>OR</strong> If not satisfied, opt-out anytime during the 30-day trial period without
                        payment of any fees
                        <i class="all-icons">?</i>
                    </div>
                    <div class="popup">
                        At the end of the 30-day free trial period, your credit card or PayPal account will be charged
                        $19.99 at once automatically. <br>
                        This 80% discount from the original price of $89.97 is bonus only for preorders!
                    </div>
                </div>
                <dl>
                    <dt><span>Pay</span> <strong class="zero">$0</strong> <b>Original:
                            <del>$89.97</del>
                        </b></dt>
                    <dd class="btn">
                        <a class="buybtn"
                           href="http://www.iobit.com/buy.php?product=affasc10preorder&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8"
                           onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2016asc10preorder');">
                            Pre-order Now
                            <!-- <div class="mask"></div>
                            <div class="light" id="light0"></div> -->
                        </a>
                    </dd>
                    <dd><b class="packs"><?php echo $buyNum; ?></b> people already pre-ordered!</dd>
                </dl>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- container start -->

    <!-- interface start -->
    <div class="interface wrapper">
        <div class="inter-main">
            <img src="<?php echo $pResUrl; ?>images/header_asc.png" alt="">
        </div>
        <div id="inter1" class="inter-left">
            <img src="<?php echo $pResUrl; ?>images/header_asc_left.png" alt="">
        </div>
        <div id="inter2" class="inter-right">
            <img src="<?php echo $pResUrl; ?>images/header_asc_right.png" alt="">
        </div>
    </div>
    <!-- interface end -->

    <div class="intro">
        <!-- intro-first start -->
        <div class="intro-first">
            <div id="intro0" class="title introAnimate">
                <h2>Try Advanced SystemCare 10 PRO</h2>

                <p>How to Make Your PC faster, Cleaner and More Secure?</p>
            </div>
            <div class="panel">
                <div class="wrapper">
                    <div class="lists clearfix">
                        <img src="<?php echo $pResUrl; ?>images/intro_first_01.png" alt="">
                        <dl>
                            <dt>Deep Clean & Optimization <sup>IMPROVED</sup></dt>
                            <dd>
                                ASC 10 will deeply clean up junk files, invalid registry entries, unwanted programs and
                                optimize internet, system and disks.
                            </dd>
                            <dd class="details">
                                <span>Why clean and optimize <em>+</em></span>
                                <ul>
                                    <li>Boost slow computer up to 300% faster*</li>
                                    <li>Free up more disk space for films and photos</li>
                                    <li>Reduce Windows crashes & error messages</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <div class="lists clearfix">
                        <img src="<?php echo $pResUrl; ?>images/intro_first_02.png" alt="">
                        <dl>
                            <dt>One-click to Manage PC Startup <sup>IMPROVED</sup></dt>
                            <dd>
                                ASC 10 can detect and disable unnecessary programs & services slowing down PC boot time
                                and monitor newly added startup items in real time.
                            </dd>
                            <dd class="details">
                                <span>Why manage startup <em>+</em></span>
                                <ul>
                                    <li>Speed PC startup up to 200% faster*</li>
                                    <li>Detect and block dangerous startup items</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <div id="intro1" class="scan">
                        <img src="<?php echo $pResUrl; ?>images/intro_first_mask.png" alt="">
                    </div>
                    <div class="scan-bg"></div>
                </div>
            </div>
        </div>
        <!-- intro-first end -->

        <!-- intro-two start -->
        <div class="intro-two">
            <div class="wrapper">
                <div class="top clearfix">
                    <div class="top-pic fl">
                        <div id="intro2" class="surf introAnimatetwo">
                            <img src="<?php echo $pResUrl; ?>images/intro_two_01.png" alt="">
                        </div>
                        <div class="brow introAnimatetwo" id="intro3">
                            <img src="<?php echo $pResUrl; ?>images/intro_two_02.png" alt="">
                        </div>
                    </div>
                    <dl class="fr">
                        <dt>Block Ads & Remove Privacy Traces <sup>NEW</sup></dt>
                        <dd>
                            ASC 10 sweeps the browsing and download history, cookies, caches, etc., and removes annoying
                            ads in Internet Explorer, Chrome and Firefox.
                        </dd>
                        <dd class="details">
                            <span>Why remove ads & traces <em>+</em></span>
                            <ul>
                                <li>Improve Internet browsing speed and reliability</li>
                                <li>Protect browsers from hijack and online threats</li>
                                <li>Erase all traces to prevent you from being tracked</li>
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="bot clearfix">
                    <dl class="fl">
                        <dt>Monitor System Resource in Real-time <sup>NEW</sup></dt>
                        <dd>
                            ASC 10 helps you manage RAM, CPU and Disk usage with 1-click, and auto detects & disables
                            inactive processes & programs to release memory.
                        </dd>
                        <dd class="details">
                            <span>Why monitor system resource <em>+</em></span>
                            <ul>
                                <li>Reduce stutter & lag for a smoother running PC</li>
                                <li>Improve PC performance and stability</li>
                            </ul>
                        </dd>
                    </dl>
                    <div class="bot-pic fr">
                        <div class="pic-title"><i id="intro4" class="all-icons"></i></div>
                        <div class="box">
                            <img id="intro5" src="<?php echo $pResUrl; ?>images/intro_two_asc.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- intro-two end -->
    </div>

    <!-- three-contrast start -->
    <div class="three-contrast">
        <div class="wrapper clearfix">
            <dl class="first">
                <dt>
                    <i class="all-icons"></i>
                    <span>Up to <strong>200%</strong> Quicker Startup</span>
                </dt>
                <dd>
                    <div id="bar0" class="green">
                        <div class="point">
                            <span class="all-icons"></span>

                            <div class="text">Now</div>
                        </div>
                    </div>
                    <div class="blue" id="bar1">
                        <div class="point">
                            <span class="all-icons"></span>

                            <div class="text">Before</div>
                        </div>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <i class="all-icons gb"></i>
                    <span><strong>65 GB</strong>  More Disk Space</span>
                </dt>
                <dd>
                    <div id="bar2" class="green">
                        <div class="point">
                            <span class="all-icons"></span>

                            <div class="text">Now</div>
                        </div>
                    </div>
                    <div class="blue" id="bar3">
                        <div class="point">
                            <span class="all-icons"></span>

                            <div class="text">Before</div>
                        </div>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <i class="all-icons trace"></i>
                    <span><strong>100% </strong> Trace Clean for Safer Surfing</span>
                </dt>
                <dd>
                    <div id="bar4" class="green">
                        <div class="point">
                            <span class="all-icons"></span>

                            <div class="text">Now</div>
                        </div>
                    </div>
                    <div class="blue" id="bar5">
                        <div class="point">
                            <span class="all-icons"></span>

                            <div class="text">Before</div>
                        </div>
                    </div>
                </dd>
            </dl>
        </div>
    </div>
    <!-- three-contrast end -->

    <!-- center-buy start -->
    <div class="center-buy">
        <div class="wrapper">
            <dl>
                <dt><span>Pay </span> <strong class="zero">$0</strong>
                    <del>$89.97</del>
                </dt>
                <dd>
                    <a class="buybtn"
                       href="http://www.iobit.com/buy.php?product=affasc10preorder&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8"
                       onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2016asc10preorder');">
                        Pre-order Now
                        <!-- <div class="mask"></div>
                        <div class="light" id="light1"></div> -->
                    </a>
                </dd>
                <dd>
                    <ul class="point clearfix">
                        <li>
                            <img src="<?php echo $pResUrl; ?>images/point_icons01.png" alt="">
                            <span><b class="packs"><?php echo $buyNum; ?></b> people already pre-ordered</span>
                        </li>
                        <li>
                            <img src="<?php echo $pResUrl; ?>images/point_icons02.png" alt="">
                            <span>Enjoy 80% exclusive discount after trial period is over</span>
                        </li>
                        <li>
                            <img src="<?php echo $pResUrl; ?>images/point_icons03.png" alt="">
                            <span>Opt-out anytime during 30-day trial period without payment of any fees</span>
                        </li>
                    </ul>
                </dd>
            </dl>
            <ul class="media clearfix">
                <li class="first">
                    <span>Accepted Payments</span>
                    <img src="<?php echo $pResUrl; ?>images/media_icons01.png" alt="">
                </li>
                <li>
                    <span>Secure Payment</span>
                    <img src="<?php echo $pResUrl; ?>images/media_icons02.png" alt="">
                </li>
            </ul>
        </div>
    </div>
    <!-- center-buy end -->

    <div class="wrapper">

        <!-- payment start -->
        <div class="payment">
            <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
        </div>
        <!-- payment end -->

        <!-- review start -->
        <div class="review">
            <div class="content">
                <dl>
                    <dt><img src="<?php echo $pResUrl; ?>images/user_title.png" alt=""></dt>
                    <dd>
                        <h4>"Not only is it a great product, but the support is equally great"</h4>
                    </dd>
                    <dd>
                        "I like many started off with the free version and eventually purchased the full version. It's
                        been working to keep my computer clean and "bug" free for years now and it hasn't let me down
                        yet. I contacted Advanced System Care recently and they responded within a day or two with all I
                        needed to know. In my mind support is huge in the decision to stay with a product and ASC wins
                        in both product and support."
                    </dd>
                </dl>
                <dl>
                    <dt><img src="<?php echo $pResUrl; ?>images/user_title.png" alt=""></dt>
                    <dd>
                        <h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4>
                    </dd>
                    <dd>
                        "We used to use up to a dozen different programs to keep our machines running smoothly and keep
                        the bad guys out. It took hours every week to maintain security and performance. Now, with
                        Advanced System Care Pro, everything is in one place and it takes us just a few minutes every
                        couple of days to do the same jobs with much more confidence"
                    </dd>
                </dl>
                <dl class="active">
                    <dt><img src="<?php echo $pResUrl; ?>images/media_title.png" alt=""></dt>
                    <dd>
                        <h4>"Advanced Systemcare aims to remedy whatever ails your computer."</h4>
                    </dd>
                    <dd>
                        "There's nothing worse than a computer that is bogged down so much that it impedes your ability
                        to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not
                        only cleaning up junk files, malware, and invalid registry entries, but by giving your computer
                        a boost to optimize your PC experience."-Cnet
                    </dd>
                </dl>
                <dl>
                    <dt><img src="<?php echo $pResUrl; ?>images/user_title.png" alt=""></dt>
                    <dd>
                        <h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4>
                    </dd>
                    <dd>
                        "As a computer repair tech I find by downloading and scanning with ASC free most common problems
                        are resolved. When finished with a repair I usually suggest the client purchase the Pro package.
                        Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7?
                        This is the best product a home user can buy. Thank you for making my job easier."
                    </dd>
                </dl>
                <dl>
                    <dt><img src="<?php echo $pResUrl; ?>images/user_title.png" alt=""></dt>
                    <dd>
                        <h4>"My system has never run better."</h4>
                    </dd>
                    <dd>
                        "In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows
                        user, providing excellent value and function in both its shareware and freeware versions. IObit
                        provides expert technical support that is competent, knowledgeable and responsive, adding
                        significant value to their products and services for their customers."
                    </dd>
                </dl>
            </div>
            <ul class="users clearfix">
                <li>
                    <div class="pic"><img src="<?php echo $pResUrl; ?>images/review_icons1.png" alt="Bruce Ramsay">
                    </div>
                    <p>Bruce Ramsay <b>2015</b></p>
                </li>
                <li>
                    <div class="pic"><img src="<?php echo $pResUrl; ?>images/review_icons2.png" alt="Bob Bassett"></div>
                    <p>Bob Bassett<b>2014</b></p>
                </li>
                <li class="current">
                    <div class="pic"><img src="<?php echo $pResUrl; ?>images/review_icons3.png" alt="Cnet"></div>
                    <p>Cnet</p>
                </li>
                <li>
                    <div class="pic"><img src="<?php echo $pResUrl; ?>images/review_icons4.png" alt="Charles R. Widick">
                    </div>
                    <p>Charles R. Widick <b>2015</b></p>
                </li>
                <li>
                    <div class="pic"><img src="<?php echo $pResUrl; ?>images/review_icons5.png" alt="Gordon Griswold">
                    </div>
                    <p>Gordon Griswold <b>2014</b></p>
                </li>
            </ul>
        </div>
        <!-- review end -->

    </div>
    <!-- container end -->

    <!-- bot-banner start -->
    <div class="bot-banner main">
        <div class="wrapper">
            <h2 id="bsell0" class="bsellingAnimate">Be the first to Try New PRO features of Advanced SystemCare 10
                PRO!</h2>

            <div class="bselling">
                <div class="zero bsellingAnimate">
                    <dl>
                        <dt>$0</dt>
                        <dd>Pay $0 to pre-order</dd>
                    </dl>
                </div>
                <div class="day bsellingAnimate">
                    <dl>
                        <dt>30 days</dt>
                        <dd>30 days for free</dd>
                    </dl>
                </div>
                <div class="off bsellingAnimate">
                    <dl>
                        <dt>80% off</dt>
                        <dd>80% off after 30-day trial</dd>
                    </dl>
                </div>
                <div class="asc bsellingAnimate">
                    <img src="<?php echo $pResUrl; ?>images/bot_banner_asc.png" alt="">
                </div>
                <div class="or bsellingAnimate">
                    <strong>OR</strong> Opt-out anytime during the 30-day trial period without payment of any fees
                </div>
            </div>
            <div class="btn">
                <a class="buybtn"
                   href="http://www.iobit.com/buy.php?product=affasc10preorder&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc&tw=-8"
                   onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc2016asc10preorder');">
                    Pre-order Now with $0
                    <!-- <div class="mask"></div>
                    <div class="light" id="light2"></div> -->
                </a>
            </div>
        </div>
        <dl>
            <dt>Promotion terms:</dt>
            <dd>
                At the end of the 30-day free trial period, your credit card or PayPal account will be charged $19.99 at
                once automatically. This 80% discount from the original price of $89.97 is bonus for customers
                who choose to pre-order only!
            </dd>
        </dl>
    </div>
    <!-- bot-banner end -->

    <!-- footer start -->
    <div class="footer">
        <div class="wrapper">
            <!-- annotation start -->
            <dl class="annotation border-bottom">
                <dt>Note:</dt>
                <dd>
                    *.Such promotional programs are subject to change without notice, from time to time in our sole
                    discretion.
                </dd>
                <dd>*.Data may vary based on different system or computer.</dd>
            </dl>
            <!-- annotation end -->
            <p>Copyright © 2005 - <?php echo date(Y)?> IObit.</p>
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

<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script src="<?php echo $pResUrl; ?>script/script.min.js"></script>
<script>setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);</script>
<!-- <script src="<?php echo $pResUrl; ?>script/script.js"></script> -->
</body>
</html>
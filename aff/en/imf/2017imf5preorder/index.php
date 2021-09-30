<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (empty($_GET['ref'])) $_GET['ref'] = 'en_aff_imf5preorder35d'; 

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 69041325;
$buyNum = number_format($buyNum);

$packsNum = ceil(microtime_float() * 2000 / 20000);
$packsNum = 360 - ($packsNum % 360);
if ($_GET['action'] == 'getPacks') {
    echo $packsNum;
    exit;
}
if (!empty($_GET['action']) && $_GET['action'] == 'getSalePacks') {
    $date = $_GET['d'];
    $c_name = 'preimf' . $date;
    $type = $_GET['type'];
    if (empty($_COOKIE[$c_name])) {
        $packsNum = "19*100";
        setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
        $packs=$_COOKIE[$c_name];
        $packsArr=explode('*',$packs);
        $packs35=$packsArr[0];
        $packs30=$packsArr[1];
        if($packs30>0) {
            if ($type == 1&&($packs35>0)) {
                $packs35--;
                setcookie($c_name, $packs35 . '*' . $packs30, time() + 3600 * 24);
                if (rand(1, 100) % 2 == 0) {
                    $packs35++;
                }
            } else {
                $packs30--;
                setcookie($c_name, $packs35 . '*' . $packs30, time() + 3600 * 24);
                if (rand(1, 100) % 2 == 0) {
                    $packs30++;
                }
            }
            $packsNum=$packs35.'*'.$packs30;
        }else{
            $packsNum='0*0';
        }
    }
    echo $packsNum;
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pay $0 to Experience Better PC & Online Browsing Protection</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600'>
    <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
    <script>
        var lan=MApp(2.2).language.langArr[0];
        if(lan=='de'){
            window.location='http://purchase.iobit.com/de/imf/imf5preorderde.php';
        }
    </script>
</head>

<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!-- banner start -->
<div class="banner">
    <div class="wrapper">
        <a class="logo" href="http://www.iobit.com" target="_blank">
            <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
        </a>

        <div class="title">
            <h1>Pay $0 to GetAll-round Protection for Your PC</h1>

            <p>IObit Malware Fighter 5 PRO Pre-order ONLY</p>
        </div>
        <div class="panel clearfix">
            <div class="daybox five daysold shadow packs35">
                <div class="txt">
                    <h2>FIRST 50 ORDERS</h2>

                    <div class="dayimg"><img src="<?php echo $pResUrl; ?>images/five.png" alt=""></div>
                    <div class="counter">
                        <span class="num countNum num35">20</span>
                    </div>
                    <b>ORDERS LEFT</b>
                </div>
                <div class="waterbox"><div class="water fivewater anima"></div></div>
                <div class="sold"></div>                
            </div>
            <div class="daybox thirty daysold beginshadow packs30">
                <div class="txt">
                    <h2>NEXT 100 ORDERS</h2>

                    <div class="dayimg"><img src="<?php echo $pResUrl; ?>images/thirty.png" alt=""></div>
                    <div class="counter">
                        <span class="num countNum num30">100</span>
                    </div>
                    <b>ORDERS LEFT</b>
                </div>
                <div class="waterbox"><div class="water thwater"></div></div>
                
                <div class="beginning"><h3>beginning soon</h3></div>
                <div class="sold"></div> 
            </div>
            <div class="daybox seven beginshadow packs7">
                <h2>REST ALL ORDERS</h2>

                <div class="dayimg"><img src="<?php echo $pResUrl; ?>images/seven.png" alt=""></div>
                <div class="beginning"><h3>beginning soon</h3></div>
            </div>
        </div>
        <div class="clearfix">
            <div class="fl">
                <img class="imgbox" src="<?php echo $pResUrl; ?>images/b_imf_box.png" alt="">
                <ul>
                    <li>
                        <img src="<?php echo $pResUrl; ?>images/blue.png" alt="">
                        Pay $0 to enjoy <b><span class="countDay">35</span>-day</b> free trial
                    </li>
                    <li>
                        <img src="<?php echo $pResUrl; ?>images/blue.png" alt="">
                        Opt out anytime during trial period
                    </li>
                    <li>
                        <img src="<?php echo $pResUrl; ?>images/blue.png" alt="">
                        <b>53%</b> early bird discount when trial EXPIRES
                    </li>
                </ul>
            </div>
            <div class="fr site">
                <span>Pay: <strong>$0</strong> <del>$54.95</del></span>
                <a class="buybtn" href="http://www.iobit.com/buy.php?product=imf5preorder35&ref=<?php echo $_GET['ref'] ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf5preorder35d')">
                    Pre-order Now
                </a>

                <p><img src="<?php echo $pResUrl; ?>images/people.png" alt=""><b>315,330</b> People Pre-ordered</p>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- terms start -->
<div class="terms">
    <dl class="wrapper">
        <dt>Promotion terms:</dt>
        <dd>
            At the end of the <span class="countDay">35</span>-day free trial period, your credit card or PayPal account will be charged $25.99
            automatically. This 53% discount from the original price of $54.95 for 1 Year / 3 PCs is bonus only for
            preorders!
        </dd>
    </dl>
</div>
<!-- terms end -->

<!-- container start -->
<div class="wrapper">
    <!-- pays start -->
    <div class="pays clearfix">
        <dl>
            <dt>Accepted Payments</dt>
            <dd><img src="<?php echo $pResUrl; ?>images/pays.png" alt=""></dd>
        </dl>
        <dl>
            <dt>Money Back Guarantee</dt>
            <dd><img src="<?php echo $pResUrl; ?>images/payback.png" alt=""></dd>
        </dl>
        <dl>
            <dt>Secure Payment</dt>
            <dd class="last"><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
        </dl>
    </div>
    <!-- pays end -->

    <!-- intro start -->
    <div class="intro">
        <h2>Enjoy Completely Secure PC & Browsing Experience in <span class="countDay">35</span> Days for FREE</h2>

        <div class="imgbox"><img src="<?php echo $pResUrl; ?>images/i_imf_box.png" alt=""></div>
        <div class="clearfix">
            <div class="list">
                <img src="<?php echo $pResUrl; ?>images/intro_icons1.png" alt="">
                <dl>
                    <dt>
                    <h3>Anti-Virus & Anti-Malware<span>IMPROVED</span></h3></dt>
                    <dd>Double protection offered by advanced Bitdefender Anti-virus Engine & IObit Anti-Malware
                        Engine
                    </dd>
                </dl>
            </div>
            <div class="list right">
                <img src="<?php echo $pResUrl; ?>images/intro_icons2.png" alt="">
                <dl>
                    <dt>
                    <h3>Block Ransomware Attacks<span class="new">NEW</span></h3></dt>
                    <dd>Analyze any suspicious behavior to prevent all kinds of ransomware attacks & protect your
                        personal assets
                    </dd>
                </dl>
            </div>
            <div class="list">
                <img src="<?php echo $pResUrl; ?>images/intro_icons3.png" alt="">
                <dl>
                    <dt>
                    <h3>Deeper Real-time Protection<span>IMPROVED</span></h3></dt>
                    <dd>Automatically block & remove any online threat to protect your PC in real time</dd>
                </dl>
            </div>
            <div class="list right">
                <img src="<?php echo $pResUrl; ?>images/intro_icons4.png" alt="">
                <dl>
                    <dt>
                    <h3>Camera Guard<span class="new">NEW</span></h3></dt>
                    <dd>Inform you immediately if any program attempts to use your camera secretly</dd>
                </dl>
            </div>
        </div>
    </div>
    <!-- intro start -->

    <!-- centbuy start -->
    <div class="centbuy">
        <p>Pay: <strong>$0</strong></p>
        <a class="buybtn" href="http://www.iobit.com/buy.php?product=imf5preorder35&ref=<?php echo $_GET['ref'] ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf5preorder35d')">
            Pre-order Now
        </a>
        <ul>
            <li>
                <img src="<?php echo $pResUrl; ?>images/white.png" alt="">
                Opt out anytime during <span class="countDay">35</span>-day period
            </li>
            <li>
                <img src="<?php echo $pResUrl; ?>images/white.png" alt="">
                Enjoy exclusive 53% OFF when trial expires
            </li>
        </ul>
    </div>
    <!-- centbuy end -->

    <!-- media start -->
    <div class="media">
        <h2>Trusted and awarded by these media</h2>
        <img src="<?php echo $pResUrl; ?>images/media.png" alt="">
    </div>
    <!-- media end -->

    <!-- review start -->
    <div class="review">
        <div class="reviews">
            <h2>User Review</h2>

            <h3>"We have not had a problem since using IObit Malware Fighter PRO."</h3>

            <p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad
                guys out. It took hours every week to maintain security and performance. Now, with IObit Malware Fighter
                Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same
                jobs with much more confidence. We have not had a problem since using your products."</p>
        </div>
        <div class="reviews active">
            <h2>Media Review</h2>

            <h3>"IObit Malware Fighter will thoroughly scan your system hard drives and any other external storage
                device"</h3>

            <p>“IObit Malware Fighterwill thoroughly scan your system hard drives and any other external storage device
                connected to your computer looking for spyware, trojans, keyloggers, worms, hijackers, adware, etc."</p>
        </div>
        <div class="reviews">
            <h2>User Review</h2>

            <h3>"I also had other programs for this purpose installed, but IMF always finds the problems first and
                blocks them."</h3>

            <p>"Some years ago somebody drew my attention to IObit Malware Fighter. First I was sceptic. But after
                installing it, it became my favourite anti-malware program. It is very easy to use. Through the years it
                already has detected several threats and removed it. In cooperation with the other IObit programs, like
                for example ASC, I have a good PC protection. I now recommend these programs to all my friends and
                family."</p>
        </div>
        <ul class="handle clearfix">
            <li>
                <div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png"
                                        alt="Bob Bassett"><span></span></div>
                <strong>Bob Bassett</strong>
            </li>
            <li class="active">
                <div class="badge"><img src="<?php echo $pResUrl; ?>images/software.png"
                                        alt="software.informer.com"><span></span></div>
                <strong>software.informer.com</strong>
            </li>
            <li>
                <div class="badge"><img src="<?php echo $pResUrl; ?>images/peter-stoffers.png"
                                        alt="Peter Stoffers"><span></span></div>
                <strong>Peter Stoffers</strong>
            </li>
        </ul>
    </div>
    <!-- review end -->

    <!-- footbuy start -->
    <div class="footbuy clearfix">
        <img class="imgbox fl" src="<?php echo $pResUrl; ?>images/f_imf_box.png" alt="">
        <dl class="fl">
            <dt><em>Free</em> to enjoy <span class="countDay">35</span>-day full protection</dt>
            <dd>Opt out anytime during trial period</dd>
            <dd><b>53%</b> early bird discount when trial expires</dd>
        </dl>
        <div class="fr">
            <span>Pay: <strong>$0 </strong> <del>$54.95</del></span>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=imf5preorder35&ref=<?php echo $_GET['ref'] ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf5preorder35d')">
                Pre-order Now
            </a>

            <p><img src="<?php echo $pResUrl; ?>images/people.png" alt=""><b>315,330</b> People Pre-ordered</p>
        </div>
    </div>
    <!-- footbuy end -->

    <!-- annotation start -->
    <dl class="annotation">
        <dt>Note:</dt>
        <dd>
            *.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
        </dd>
    </dl>
    <!-- annotation end -->

</div>
<!-- container end -->

<!-- footer start -->
<div class="footer">Copyright © 2005 - <?php echo date('Y') ?> IObit. All Rights Reserved</div>
<!-- footer end -->

<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
        <div class="left">
            <h2><span class="countDay">35</span>-day Full PC & Online Browsing Protection for Free </h2>

            <h3>
                <img class="clock" src="<?php echo $pResUrl; ?>images/clock.png" alt="">
                <span class="countNum packsNum">20</span> Orders Left ONLY
            </h3>
        </div>
        <div class="right">
            <p>Pay: <strong>$0 </strong>
                <del>$54.95</del>
            </p>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=imf5preorder35&ref=<?php echo $_GET['ref'] ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_imf&tw=-8" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf5preorder35d')">
                Pre-order Now
            </a>
        </div>
    </div>
</div>
<!-- floatlayer end -->
    <div class="pop-up">
        <div class="pop-main">
            <div class="pop-box">
                <h2>Note:</h2>
                <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
                <p>You will be redirected to the latest IObit promotion page automatically.</p>
            </div>
        </div>
    </div>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script src="<?php echo $pResUrl; ?>script/script.min.js"></script>
<script>setTimeout('window.location.href="https://purchase.iobit.com/aff/en/imf/2020newlaunchsale/index.php'+location.search+'"',5000);</script>
</div>
</body>
</html>
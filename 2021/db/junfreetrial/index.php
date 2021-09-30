<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr = '';
if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr .= empty($_GET['to']) ? '-unknown' : '-'.$_GET['to'];
$refStr .= '-'.$ver;
$refStr .= empty($_GET['ref']) ? '-unknown' : '-'.$_GET['ref'];
$refStr .= empty($_GET['insur']) ? '-unknown' : '-'.$_GET['insur'];
$refStr .= empty($_GET['finstd']) ? '-unknown' : '-f'.$_GET['finstd'];
$refStr .= '-' . ((strlen($_GET['instd']) == 0) ? 'unknown' : 'i'.$_GET['instd']);
$refStr .= '-' . ((strlen($_GET['usr']) == 0) ? 'unknown' : 'u'.$_GET['usr']);
$refStr .= '-' . ((strlen($_GET['type']) == 0) ? 'unknown' : 't'.$_GET['type']);
$refStr .= '-' . ((strlen($_GET['expd']) == 0) ? 'unknown' : 'e'.$_GET['expd']);
$refStr .= '-' . ((strlen($_GET['flag']) == 0) ? 'unknown' : 'flag'.$_GET['flag']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <title>30-Day Free Trial of Driver Booster PRO</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>
</head>
<body>
    <!-- banner -->
    <div class="banner">
        <div class="wrapper">
            <a href="https://www.iobit.com/en/index.php" class="logo" target="_blank">IObit</a>
            <div class="banner_box">
                <div class="banner_cont1 fl">
                    <img class="banner_box_image" src="<?php echo $pResUrl; ?>images/banner-box.png" alt="">
                    <!-- <img class="banner_box_image" src="./images/banner-box.png" alt=""> -->
                </div>
                <div class="banner_cont2 fl">
                    <h1 class="banner_cont2_title">30 Day Trial of Driver Booster PRO</h1>
                    <ul class="banner_cont2_tips">
                        <li><img src="<?php echo $pResUrl; ?>images/banner-gou.png" alt=""><span class="banner_cont2_text">4,500,000+ driver database</span></li>
                        <li><img src="<?php echo $pResUrl; ?>images/banner-gou.png" alt=""><span class="banner_cont2_text">Peak PC performance</span></li>
                        <li><img src="<?php echo $pResUrl; ?>images/banner-gou.png" alt=""><span class="banner_cont2_text">Smoother game experience</span></li>
                    </ul>
                    <div class="banner_cont2_price">
                        <div class="price fl">$0</div>
                        <a class="btn fl" onclick="ga('send', 'event', 'dbtrialbuy', 'buy', 'dbpurchase-freetrial')" href="https://www.iobit.com/buy.php?product=dbtrial&ref=en-db30daytrial<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db">Get It Now</a>
                    </div>
                    <p class="count_time" id="shi_jian"><b id="hour">12</b> H : <b id="minute">60</b> M : <b id="second">60</b> S : <b id="millisecond">1000</b>&nbsp; MS</p>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- Driver Booster -->
    <div class="driver_booster">
        <div class="wrapper">
            <h1 class="driver_booster_title">The Best Driver Booster PRO Enables You to</h1>
            <div class="driver_booster_box">
                <div class="driver_booster_item">
                    <img class="item_image" src="<?php echo $pResUrl; ?>images/db-item1.png" alt="">
                    <h2 class="item_title">Avoid PC Freezes or Crashes</h2>
                    <p class="item_text">1-Click to update outdated or faulty drivers to ensure a stable PC performance.</p>
                </div>
                <div class="driver_booster_item">
                    <img class="item_image" src="<?php echo $pResUrl; ?>images/db-item2.png" alt="">
                    <h2 class="item_title">Save Your Time</h2>
                    <p class="item_text">Accelerate driver download speed up to 100% faster compared to free version.</p>
                </div>
                <div class="driver_booster_item">
                    <img class="item_image" src="<?php echo $pResUrl; ?>images/db-item3.png" alt="">
                    <h2 class="item_title">Fix Windows Issues</h2>
                    <p class="item_text">Fix sound, printer, USB and network issues in minutes through a quick click.</p>
                </div>
                <div class="driver_booster_item">
                    <img class="item_image" src="<?php echo $pResUrl; ?>images/db-item4.png" alt="">
                    <h2 class="item_title">Run Game Smoothly</h2>
                    <p class="item_text">Update game-related drivers and components <br /> to enjoy faster and smoother game.</p>
                </div>
                <div class="driver_booster_item">
                    <img class="item_image" src="<?php echo $pResUrl; ?>images/db-item5.png" alt="">
                    <h2 class="item_title">Back Up Drivers</h2>
                    <p class="item_text">Back up previous drivers automatically in the event of unexpected problems.</p>
                </div>
                <div class="driver_booster_item">
                    <img class="item_image" src="<?php echo $pResUrl; ?>images/db-item6.png" alt="">
                    <h2 class="item_title">Update Drivers Offline</h2>
                    <p class="item_text">Update and install network drivers without Internet connection.</p>
                </div>
            </div>
            <a class="driver_booster_btn" onclick="ga('send', 'event', 'dbtrialbuy', 'buy', 'dbpurchase-freetrial')" href="https://www.iobit.com/buy.php?product=dbtrial&ref=en-db30daytrial<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db">Get PRO for $0</a>
        </div>
    </div>
    <!-- Driver Booster end -->

    <!-- table -->
    <div class="table">
        <div class="wrapper">
            <h1 class="table_title">See What PRO Can Do for You and Enjoy the PRO Benefits for 30 Days for FREE</h1>
            <div class="head">
                <div class="head1"></div>
                <div class="head2">Driver Booster FREE</div>
                <div class="head3">Driver Booster PRO</div>
            </div>
            <dl class="table_list">
                <dd>
                    <li class="table_col">
                        <div class="table_col1">Driver Database</div>
                        <div class="table_col2">3,500,000+</div>
                        <div class="table_col3 bg_black hei60">4,500,000+</div>
                    </li>
                    <li class="table_col">
                        <div class="table_col1">Driver Download Speed</div>
                        <div class="table_col2">Basic</div>
                        <div class="table_col3 bg_black hei60">100% Faster</div>
                    </li>
                    <li class="table_col">
                        <div class="table_col1">1-Click to update drivers</div>
                        <div class="table_col2"><img src="<?php echo $pResUrl; ?>images/table-true.png" alt=""></div>
                        <div class="table_col3 bg_black"><img src="<?php echo $pResUrl; ?>images/table-redtrue.png" alt=""></div>
                    </li>
                    <li class="table_col">
                        <div class="table_col1">Auto update drivers while system is idle</div>
                        <div class="table_col2"><img src="<?php echo $pResUrl; ?>images/table-false.png" alt=""></div>
                        <div class="table_col3 bg_black"><img src="<?php echo $pResUrl; ?>images/table-redtrue.png" alt=""></div>
                    </li>
                    <li class="table_col">
                        <div class="table_col1">Fix device errors for safer PC</div>
                        <div class="table_col2"><img src="<?php echo $pResUrl; ?>images/table-false.png" alt=""></div>
                        <div class="table_col3 bg_black"><img src="<?php echo $pResUrl; ?>images/table-redtrue.png" alt=""></div>
                    </li>
                    <li class="table_col">
                        <div class="table_col1">Get necessary game components</div>
                        <div class="table_col2"><img src="<?php echo $pResUrl; ?>images/table-false.png" alt=""></div>
                        <div class="table_col3 bg_black"><img src="<?php echo $pResUrl; ?>images/table-redtrue.png" alt=""></div>
                    </li>
                    <li class="table_col">
                        <div class="table_col1">Priority to get latest game ready drivers</div>
                        <div class="table_col2"><img src="<?php echo $pResUrl; ?>images/table-false.png" alt=""></div>
                        <div class="table_col3 bg_black"><img src="<?php echo $pResUrl; ?>images/table-redtrue.png" alt=""></div>
                    </li>
                    <li class="table_col">
                        <div class="table_col1">Driver backup for safe restore</div>
                        <div class="table_col2"><img src="<?php echo $pResUrl; ?>images/table-false.png" alt=""></div>
                        <div class="table_col3 bg_black"><img src="<?php echo $pResUrl; ?>images/table-redtrue.png" alt=""></div>
                    </li>
                    <li class="table_col">
                        <div class="table_col1">Update drivers offline</div>
                        <div class="table_col2"><img src="<?php echo $pResUrl; ?>images/table-false.png" alt=""></div>
                        <div class="table_col3 bg_black br_cell"><img src="<?php echo $pResUrl; ?>images/table-redtrue.png" alt=""></div>
                    </li>
                </dd>
            </dl>
            <a class="table_btn" onclick="ga('send', 'event', 'dbtrialbuy', 'buy', 'dbpurchase-freetrial')" href="https://www.iobit.com/buy.php?product=dbtrial&ref=en-db30daytrial<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db">Get PRO for $0</a>
            <!-- 分割线 -->
            <div class="cutline"></div>
        </div>
    </div>
    <!-- table end -->

    <!-- user views -->
    <div class="user">
        <div class="wrapper">
            <h1 class="user_title">What are They Talking about Driver Booster PRO</h1>
            <div class="user_text">
                <ul class="user_textlists">
                    <li>Driver Booster PRO's simple core functionality is made even more attractive thanks to the inclusion of multiple licenses at a very wallet-friendly price, <br /> as well as a customizable interface that does a good job of displaying specific hardware-related information. Competitors Ashampoo Driver Updater <br /> and SlimWare Utilities DriverUpdate offer compelling features, but IObit Driver Booster PRO leads the pack.</li>
                    <li>It helped solve slowliness problems with my laptop gamer without crashing it. Sometimes when I tried updating my drivers the computer crashed and I had to format my computer in order to restore functions and now it doesn’t happen with DB7. Easy to use and fast downloads it is the best tool in the Market until now!</li>
                    <li>What a surprise to receive the new Driver Booster from IObit. Once installed and its update began, I hadn't known that half of the programs on my PC were there let alone needed an upgrade. Once upgrading was complete it was as if my PC had a complete makeover. Sensational!</li>
                    <li>Truly the best driver updater on the market. It's user friendly, has a simple and easy to use interface and does its job better than any application I've used. This program is worth a 5 start rating. Highly recommended.</li>
                    <li>First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM, i was able to play new game titles without having to shutdown any background process. I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product.</li>
                </ul>
            </div>
            <div class="user_box">
                <a href="javascript:void(0);" class="prevbtn changebtn"></a>
                <div class="user_avatar">
                    <ul class="user_lists">
                        <li><img src="<?php echo $pResUrl; ?>images/pc.png" alt=""><p class="user_name">PC Magazine</p></li>
                        <li><img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt=""><p class="user_name">Carlos Alexandre Veríssimo</p></li>
                        <li><img src="<?php echo $pResUrl; ?>images/harold-barr.png" alt=""><p class="user_name">Harold Barr</p></li>
                        <li><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt=""><p class="user_name">Hishaam Salasa</p></li>
                        <li><img src="<?php echo $pResUrl; ?>images/dunston-diaz.png" alt=""><p class="user_name">Dunston Diaz</p></li>
                    </ul>
                </div>
                <a href="javascript:void(0);" class="nextbtn changebtn"></a>
            </div>
        </div>
    </div>

    <!-- world-wide -->
    <div class="award">
        <div class="wrapper">
            <h1 class="award_title">World-wide Awards</h1>
            <img class="award_image" src="<?php echo $pResUrl; ?>images/award-image.png" alt="">
        </div>
    </div>
    <!-- world-wide end -->

    <!-- footer -->
    <div class="footer">
        <div class="wrapper">
            <p class="footer_note">Note:</p>
            <p class="footer_text">*.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $22.95 automatically. This 70% discount from the original price of $74.85 is bonus only for you!</p>
            <p class="footer_text">*.If you're unsatisfied, you can cancel the order you placed within 30 days without paying a fee.</p>
            <p class="footer_copyright">Copyright © 2005-2021 IObit All Rights Reserved</p>
        </div>
    </div>
</body>
</html>
<script>refStr = "<?= $refStr; ?>";</script>
<script src="<?php echo getStaticUrl('script/jquery-3.6.0.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
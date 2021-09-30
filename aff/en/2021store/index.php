<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$buyUrl = [
    'enaff-asc141pc1999'=>'https://iobit.onfastspring.com/advanced-systemcare-10-pro-1-year-subscription-1-pc',
    'enaff-asc143pc2999'=>'https://iobit.onfastspring.com/advanced-systemcare-10-pro-1-year-subscription-3-pcs',
    'enaff-db81pc2495'=>'https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-1-pc-2495',
    'enaff-db83pc2995'=>'https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-2995',
    'enaff-iu101pc1799'=>'https://iobit.onfastspring.com/iobit-uninstaller-pro-1-year-subscription-1-pc-1799',
    'enaff-iu103pc2399'=>'https://iobit.onfastspring.com/iobit-uninstaller-pro-1-year-subscription-3-pcs-2399',
    'enaff-isu41pc1477'=>'https://iobit.onfastspring.com/iobit-software-updater-pro-1-year-subscription-1-pc-1477',
    'enaff-isu43pc1999'=>'https://iobit.onfastspring.com/iobit-software-updater-pro-1-year-subscription-3-pcs',
    'enaff-sd71pc1799'=>'https://iobit.onfastspring.com/smart-defrag-pro-1-year-subscription-1pc-1799',
    'enaff-sd73pc1999'=>'https://iobit.onfastspring.com/smart-defrag-5-pro-1-year-subscription-3-pcs-1999',
    'enaff-sm81pc899'=>'https://iobit.onfastspring.com/start-menu-8-pro-1-year-subscription-1-pc-899',
    'enaff-sm83pc1399'=>'https://iobit.onfastspring.com/start-menu-8-pro-1-year-subscription-3-pcs-1399',
    'enaff-imf81995'=>'https://iobit.onfastspring.com/iobit-malware-fighter-5-pro-1-year-subscription-1-pc',
    'enaff-imf82495'=>'https://iobit.onfastspring.com/iobit-malware-fighter-pro-1-year-subscription-3-pcs-2495',
    'enaff-pf1pc1995'=>'https://iobit.onfastspring.com/protected-folder-1-year-subscription-1-pc',
    'enaff-isr1pc3999'=>'https://iobit.onfastspring.com/ifun-screen-recorder-pro-1-year-subscription-1-pc-3999',
    'enaff-isr3pc4999'=>'https://iobit.onfastspring.com/ifun-screen-recorder-pro-1-year-subscription-3-pcs-4999',
    'enaff-mb81mac3995'=>'https://iobit.onfastspring.com/macbooster-pro-1-year-subscription-1-mac-3995',
    'enaff-mb83mac5995'=>'https://iobit.onfastspring.com/macbooster-pro-1-year-subscription-3-macs-5995',
    'enaff-amc1d999'=>'https://iobit.onfastspring.com/amc-security-pro-1-year-subscription-1-device-1-999',
    'enaff-amc3d1599'=>'https://iobit.onfastspring.com/amc-security-pro-1-year-subscription-3-devices-1-1599',
];

function refStr($str, $product=''){
    global $buyUrl;

    if(strpos($_GET['ref'], 'ir') !== false) {

        return $buyUrl[$product];
    }
    return 'https://www.iobit.com/buy.php?product='.$product.'&ref='.(empty($_GET['ref']) ? $str : $_GET['ref']).'&aff='.$_GET['aff'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>IObit Hot Deals</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;500;600;700;800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&amp;display=swap">
    <link rel="stylesheet" href="<?php echo $pResUrl; ?>style/index.css">
    <?php echo $gJavascript['public'];?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
    <div class="container">
        <div class="banner">
            <div class="wrapper">
                <div class="logo">
                    <img src="<?php echo $pResUrl; ?>images/logo.png" alt="logo">
                </div>
                <div class="title">IObit Products on Sale </div>
                <div class="sub-title">Troubleshoot whatever problem your Windows/Mac/Android encounters</div>
            </div>
        </div>
        <div class="platform">
            <div class="wrapper">
                <ul class="nav">
                    <li class="windows active">
                        <div class="icon">
                            <img src="<?php echo $pResUrl; ?>images/windows-active.png" alt="windows">
                        </div>
                        <span>Windows</span>
                    </li>
                    <li class="mac">
                        <div class="icon">
                            <img src="<?php echo $pResUrl; ?>images/mac.png" alt="mac">
                        </div>
                        <span>Mac</span>
                    </li>
                    <li class="mobile">
                        <div class="icon">
                            <img src="<?php echo $pResUrl; ?>images/mobile.png" alt="mobile">
                        </div>
                        <span>Mobile</span>
                    </li>
                </ul>
                <!-- windows -->
                <div class="platform-box windows-box">
                    <h3 class="pro-title"><i></i>Optimization & Maintenance</h3>
                    <ul class="pro-list pro-list-first">
                        <li class="mr">
                            <dl>
                                <dt>
                                    <img src="<?php echo $pResUrl; ?>images/asc.png" alt="asc">
                                </dt>
                                <dd class="name">Advanced SystemCare 14 PRO</dd>
                                <dd class="desc">Powerful tune-up utility ensures a cleaner, safer and 200% faster PC.</dd>
                                <dd class="price-box">
                                    <div class="single-pc">
                                        <div class="price">
                                            <span class="new-price">$19.99</span>
                                            <del class="old-price">$29.99</del>
                                        </div>
                                        <a href="<?= refStr('enaff_asc14_2021store1pc','enaff-asc141pc1999'); ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142021store1pc')  " class="btn btn-one">Buy Now<i>1 year / 1 pc</i></a>
                                    </div>
                                    <div class="three-pcs">
                                        <div>
                                            <span class="new-price">$29.99</span>
                                            <del class="old-price">$89.97</del>
                                        </div>
                                        <a href="<?= refStr('enaff_asc14_2021store3pc','enaff-asc143pc2999'); ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142021store3pc')" class="btn btn-three">Buy Now<i>1 year / 3 pcs</i></a>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo $pResUrl; ?>images/db.png" alt="db">
                                </dt>
                                <dd class="name">Driver Booster 8 PRO</dd>
                                <dd class="desc">One of the best driver updater keeps over
                                    4,500,000 drivers and popular game components up-to-date.</dd>
                                <dd class="price-box">
                                    <div class="single-pc">
                                        <div class="price">
                                            <span class="new-price">$24.95</span>
                                            <del class="old-price">$39.95</del>
                                        </div>
                                        <a href="<?= refStr('enaff_db8_2021store1pc','enaff-db81pc2495'); ?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82021store1pc')" class="btn btn-one">Buy Now<i>1 year / 1 pc</i></a>
                                    </div>
                                    <div class="three-pcs">
                                        <div>
                                            <span class="new-price">$29.95</span>
                                            <del class="old-price">$74.85</del>
                                        </div>
                                        <a href="<?= refStr('enaff_db8_2021store3pc','enaff-db83pc2995'); ?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'enaffdb82021store3pc')" class="btn btn-three">Buy Now<i>1 year / 3 pcs</i></a>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                        <li class="mr">
                            <dl>
                                <dt>
                                    <img src="<?php echo $pResUrl; ?>images/iu.png" alt="iu">
                                </dt>
                                <dd class="name">IObit Uninstaller 11 PRO</dd>
                                <dd class="desc">Most effective uninstaller guarantees complete software uninstallation and leftovers removal.</dd>
                                <dd class="price-box">
                                    <div class="single-pc">
                                        <div class="price">
                                            <span class="new-price">$17.99</span>
                                            <del class="old-price">$19.99</del>
                                        </div>
                                        <a href="<?= refStr('enaff_iu10_2021store1pc','enaff-iu101pc1799'); ?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu102021store1pc')" class="btn btn-one">Buy Now<i>1 year / 1 pc</i></a>
                                    </div>
                                    <div class="three-pcs">
                                        <div>
                                            <span class="new-price">$23.99</span>
                                            <del class="old-price">$59.93</del>
                                        </div>
                                        <a href="<?= refStr('enaff_iu10_2021store3pc','enaff-iu103pc2399'); ?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu102021store3pc')" class="btn btn-three">Buy Now<i>1 year / 3 pcs</i></a>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo $pResUrl; ?>images/isu.png" alt="isu">
                                </dt>
                                <dd class="name">IObit Software Updater 4 PRO</dd>
                                <dd class="desc">
                                    <ul style="width: 322px;">
                                        <li>Automatically update software</li>
                                        <li>1-click to keep all software updated</li>
                                        <li>Directly download & install essential software</li>
                                    </ul>
                                </dd>
                                <dd class="price-box">
                                    <div class="single-pc">
                                        <div class="price">
                                            <span class="new-price">$14.77</span>
                                            <del class="old-price">$19.99</del>
                                        </div>
                                        <a href="<?= refStr('enaff_isu4_2021store1pc','enaff-isu41pc1477'); ?>" onclick="ga('send', 'event', 'isubuy', 'buy', 'enaffisu42021store1pc')" class="btn btn-one">Buy Now<i>1 year / 1 pc</i></a>
                                    </div>
                                    <div class="three-pcs">
                                        <div>
                                            <span class="new-price">$19.99</span>
                                            <del class="old-price">$29.99</del>
                                        </div>
                                        <a href="<?= refStr('enaff_isu4_2021store3pc','enaff-isu43pc1999'); ?>" onclick="ga('send', 'event', 'isubuy', 'buy', 'enaffisu42021store3pc')" class="btn btn-three">Buy Now<i>1 year / 3 pcs</i></a>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                        <li class="mr">
                            <dl>
                                <dt>
                                    <img src="<?php echo $pResUrl; ?>images/sd.png" alt="sd">
                                </dt>
                                <dd class="name">Smart Defrag 7 PRO</dd>
                                <dd class="desc">
                                    <ul style="width: 165px;">
                                        <li>Faster defrag speed</li>
                                        <li>Auto defrag select files</li>
                                        <li>Quicker PC startup</li>
                                    </ul>
                                </dd>
                                <dd class="price-box">
                                    <div class="single-pc">
                                        <div class="price">
                                            <span class="new-price">$17.99</span>
                                            <del class="old-price">$29.99</del>
                                        </div>
                                        <a href="<?= refStr('enaff_sd7_2021store1pc','enaff-sd71pc1799'); ?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'enaffsd72021store1pc')" class="btn btn-one">Buy Now<i>1 year / 1 pc</i></a>
                                    </div>
                                    <div class="three-pcs">
                                        <div>
                                            <span class="new-price">$19.99</span>
                                            <del class="old-price">$39.99</del>
                                        </div>
                                        <a href="<?= refStr('enaff_sd7_2021store3pc','enaff-sd73pc1999'); ?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'enaffsd72021store3pc')" class="btn btn-three">Buy Now<i>1 year / 3 pcs</i></a>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo $pResUrl; ?>images/sm.png" alt="sm">
                                </dt>
                                <dd class="name">Start Menu 8 PRO</dd>
                                <dd class="desc">
                                    <ul style="width: 270px;">
                                        <li>Back to classic start menu with 1-click</li>
                                        <li>Quick & powerful file search</li>
                                        <li>No-ads and clean start menu</li>
                                    </ul>
                                </dd>
                                <dd class="price-box">
                                    <div class="single-pc">
                                        <div class="price">
                                            <span class="new-price">$8.99</span>
                                            <del class="old-price">$12.99</del>
                                        </div>
                                        <a href="<?= refStr('enaff_sm8_2021store1pc','enaff-sm81pc899'); ?>" onclick="ga('send', 'event', 'smbuy', 'buy', 'enaffsm82021store1pc')" class="btn btn-one">Buy Now<i>1 year / 1 pc</i></a>
                                    </div>
                                    <div class="three-pcs">
                                        <div>
                                            <span class="new-price">$13.99</span>
                                            <del class="old-price">$22.95</del>
                                        </div>
                                        <a href="<?= refStr('enaff_sm8_2021store3pc','enaff-sm83pc1399'); ?>" onclick="ga('send', 'event', 'smbuy', 'buy', 'enaffsm82021store3pc')" class="btn btn-three">Buy Now<i>1 year / 3 pcs</i></a>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                    <!-- Security -->
                    <h3 class="security-title"><i></i>Security</h3>
                    <ul class="pro-list">
                        <li class="mr">
                            <dl>
                                <dt>
                                    <img src="<?php echo $pResUrl; ?>images/imf.png" alt="imf">
                                </dt>
                                <dd class="name">IObit Malware Fighter 8 PRO</dd>
                                <dd class="desc">
                                    <ul style="width: 261px;">
                                        <li>Detect & remove 209 million threats</li>
                                        <li>Protect personal data with password</li>
                                        <li>Block ransomware attacks</li>
                                    </ul>
                                </dd>
                                <dd class="price-box">
                                    <div class="single-pc">
                                        <div class="price">
                                            <span class="new-price">$19.95</span>
                                            <del class="old-price">$39.95</del>
                                        </div>
                                        <a href="<?= refStr('enaff_imf8_2021store1pc','enaff-imf81995'); ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaff2021store1pc')" class="btn btn-one">Buy Now<i>1 year / 1 pc</i></a>
                                    </div>
                                    <div class="three-pcs">
                                        <div>
                                            <span class="new-price">$24.95</span>
                                            <del class="old-price">$54.95</del>
                                        </div>
                                        <a href="<?= refStr('enaff_imf8_2021store3pc','enaff-imf82495'); ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'enaffimf82021store3pc')" class="btn btn-three">Buy Now<i>1 year / 3 pcs</i></a>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo $pResUrl; ?>images/pf.png" alt="pf">
                                </dt>
                                <dd class="name">Protected Folder</dd>
                                <dd class="desc">Protect your files from malicious attacks 1 password for all files Protect privacy from others.</dd>
                                <dd class="price-box">
                                    <div class="three-pcs">
                                        <div>
                                            <span class="new-price">$19.95</span>
                                            <del class="old-price">$39.95</del>
                                        </div>
                                        <a href="<?= refStr('enaff_pf_2021store1pc','enaff-pf1pc1995'); ?>" onclick="ga('send', 'event', 'pfbuy', 'buy', 'enaffpf2021store1pc')" class="btn btn-three">Buy Now<i>1 year / 1 pc</i></a>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <!-- mac -->
                <div class="platform-box mac-box">
                    <div class="pro-box">
                        <div class="pro-img">
                            <img src="<?php echo $pResUrl; ?>images/mb.png" alt="mb">
                        </div>
                        <div class="pro-info">
                            <div class="pro-name">MacBooster 8</div>
                            <div class="pro-desc">
                                <ul>
                                    <li>Deep System Cleanup</li>
                                    <li>Excellent Performance Boost</li>
                                    <li>Full Security Protection</li>
                                </ul>
                            </div>
                            <div class="price-box">
                                <div class="single-pc" style="margin-right: 30px;">
                                    <div class="price">
                                        <span class="new-price">$39.95</span>
                                        <del class="old-price">$59.95</del>
                                    </div>
                                    <a style="width: 210px;" href="<?= refStr('enaff_mb8_2021store1mac','enaff-mb81mac3995'); ?>" onclick="ga('send', 'event', 'mbbuy', 'buy', 'enaffmb82021store1mac')" class="btn btn-one">Buy Now<i>1 year / 1 Mac</i></a>
                                </div>
                                <div class="three-pcs">
                                    <div>
                                        <span class="new-price">$59.95</span>
                                        <del class="old-price">$129.95</del>
                                    </div>
                                    <a style="width: 210px;" href="<?= refStr('enaff_mb8_2021store3mac','enaff-mb83mac5995'); ?>" onclick="ga('send', 'event', 'mbbuy', 'buy', 'enaffmb82021store3mac')" class="btn btn-three">Buy Now<i>1 year / 3 Macs</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile -->
                <div class="platform-box mobile-box">
                    <div class="pro-box">
                        <div class="pro-img">
                            <img src="<?php echo $pResUrl; ?>images/as.png" alt="as">
                        </div>
                        <div class="pro-info">
                            <div class="pro-name">AMC Security</div>
                            <div class="pro-desc">
                                <ul>
                                    <li>Auto scan & clean your mobile</li>
                                    <li>Secure your shopping payment</li>
                                    <li>Anti-phishing & anti-theft</li>
                                </ul>
                            </div>
                            <div class="price-box">
                                <div class="single-pc" style="margin-right: 30px;">
                                    <div class="price">
                                        <span class="new-price">$9.99</span>
                                        <del class="old-price">$11.48</del>
                                    </div>
                                    <a style="width: 210px;" href="<?= refStr('enaff_amc_2021store1d','enaff-amc1d999'); ?>" onclick="ga('send', 'event', 'amcbuy', 'buy', 'enaffamc2021store1d')" class="btn btn-one">Buy Now<i>1 year / 1 device</i></a>
                                </div>
                                <div class="three-pcs">
                                    <div>
                                        <span class="new-price">$15.99</span>
                                        <del class="old-price">$22.95</del>
                                    </div>
                                    <a style="width: 210px;" href="<?= refStr('enaff_amc_2021store3d','enaff-amc3d1599'); ?>" onclick="ga('send', 'event', 'amcbuy', 'buy', 'enaffamc2021store3d')" class="btn btn-three">Buy Now<i>1 year / 3 devices</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Awards -->
        <div class="awards">
            <div class="wrapper">
                <h3>World-wide Awards</h3>
                <div class="sub-title">Trusted by these world-leading media, we always strive for the best</div>
                <ul class="awards-list">
                    <li>
                        <img src="<?php echo $pResUrl; ?>images/pcword.png" alt="pcword">
                    </li>
                    <li>
                        <img src="<?php echo $pResUrl; ?>images/chippick.png" alt="chippick">
                    </li>
                    <li>
                        <img src="<?php echo $pResUrl; ?>images/cnet.png" alt="cnet">
                    </li>
                    <li>
                        <img src="<?php echo $pResUrl; ?>images/pcmag.png" alt="pcmag">
                    </li>
                    <li>
                        <img src="<?php echo $pResUrl; ?>images/majorgeeks.png" alt="majorgeeks">
                    </li>
                </ul>
            </div>
        </div>
        <!-- service -->
        <div class="service">
            <div class="wrapper">
                <div class="moneyback">
                    <dl>
                        <dt>
                            <img src="<?php echo $pResUrl; ?>images/moneyback.png" alt="moneyback">
                        </dt>
                        <dd>
                            <h4>Money Back Guarantee</h4>
                            <p>If you're not satisfied in the first 60 days, we will give you back your money.</p>
                        </dd>
                    </dl>
                </div>
                <div class="payment">
                    <dl>
                        <dt>
                            <img src="<?php echo $pResUrl; ?>images/secure-payment.png" alt="secure-payment">
                        </dt>
                        <dd>
                            <h4>Secure Payment</h4>
                            <p>IObit supports several safe methods of payment.</p>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="copy-right">© 2005 - 2021 IObit. All Rights Reserved</div>
        </div>
        <div class="flo-win">
            <div class="airplane">
                <img src="<?php echo $pResUrl; ?>images/airplane.png" alt="airplane">
            </div>
            <div class="title">IObit Products on Sale</div>
            <ul>
                <li class="active">Optimization & Maintenance</li>
                <li>Security</li>
            </ul>
            <div class="top">
                <div class="icon-up">
                    <img src="<?php echo $pResUrl; ?>images/up.png" alt="up">
                </div>
                <div>Top</div>
            </div>
        </div>
    </div>
    <script src="<?php echo $pResUrl; ?>script/index.js"></script>
</body>
</html>
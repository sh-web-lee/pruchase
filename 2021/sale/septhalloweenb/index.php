<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$entryIsPdts = false;

$entryIsPdts = preg_match("/^p_/", $_GET['ref']);

$refStr = empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['name']) ? '' : ('-' . $_GET['name']);

?>
<!DOCTYPE html>
<html lang="en"> <!-- 12 -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Join our Halloween Party to get 85% off - IObit</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/index.css')?>">
    <link href="https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>
  </head>
  <body>
    <div class="container">
      <div class="banner">
        <div class="title-logo">
          <h1>
            <img src="<?php echo $pResUrl; ?>images/banner_title.svg" alt="">
          </h1>
          <p>Oct.18 - Nov.1, 2021</p>
        </div>
        <div class="banner-cont">
          <div class="cont-box">
            <img src="<?php echo $pResUrl; ?>images/box.png" alt="">
            <img src="<?php echo $pResUrl; ?>images/asc.png" alt="" class="asc-img animate__animated animate__fadeInUp">
            <img src="<?php echo $pResUrl; ?>images/iu.png" alt="" class="iu-img animate__animated animate__fadeInUp">
            <img src="<?php echo $pResUrl; ?>images/sd.png" alt="" class="sd-img animate__animated animate__fadeInUp">
            <img src="<?php echo $pResUrl; ?>images/PF.png" alt="" class="pf-img animate__animated animate__fadeInUp">
            <img src="<?php echo $pResUrl; ?>images/sugar.png" alt="" class="sugar-img ">
            <img src="<?php echo $pResUrl; ?>images/box-pumpkin.png" alt="" class="pumpkin-img">
          </div>
          <div class="cont-purchase">
            <h2>Today's Special Halloween Treat has only 
              <div class="countdown">
                <div class="scroll-tick"><b>1</b></div>
                <div class="scroll-tick" style="padding-top: 1px;"><b>3</b></div>
                <div class="scroll-tick" style="padding-top: 1px;"><b>2</b></div>
              </div> 
              packs left</h2>
            <ul class="cont-purchase-ul">
              <li data-name="asc-img">
                <b>Advanced SystemCare 15 PRO</b>
                <span><i>1 Year / 3 PCs</i><del>$89.97</del></span>
              </li>
              <li data-name="iu-img">
                <b>IObit Uninstaller 11 PRO</b>
                <span><i>1 Year / 1 PC</i><del>$19.99</del></span>
              </li>
              <li data-name="sd-img">
                <b>Smart Defrag 7 PRO</b>
                <span><i>1 Year / 1 PC</i><del>$19.99</del></span>
              </li>
              <li data-name="pf-img">
                <b>Protected Folder</b>
                <span><i>1 Year Subscription</i><del>$39.95</del></span>
              </li>
            </ul>
            <div class="purchase-box">
              <div class="price" style="padding-top: 9px;">
                <img src="<?php echo $pResUrl; ?>images/purchase-price.svg" alt="">
              </div>
              <a href="https://www.iobit.com/buy.php?product=asc14sdpfiu&ref=en-asciusdpfhalloweenb<?php echo $refStr?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_halloweenb" onclick="ga('send', 'event', 'bpackbuy', 'buy', 'purchase-2021halloweenb')" class="btn_bundle">Get It Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="transit"></div>

      <div class="packs">
        <div class="packs-title">
          <img src="<?php echo $pResUrl; ?>images/packs-title.svg" alt="">
        </div>
        <div class="packs-cont">
          <div class="packs-items">
            <ul>
              <li class="packs-items1">
                <div class="item-title">Top-ranking PC Optimizer</div>
                <div class="item-cont">
                  <div class="item-cont-box">
                    <img src="<?php echo $pResUrl; ?>images/item-asc.png" alt="">
                  </div>
                  <div class="item-cont-main">
                    <h1>Advanced SystemCare 15 <span><img src="<?php echo $pResUrl; ?>images/pro icon.svg" alt=""></span></h1>
                    <h2>1 Year / 3 PCs</h2>
                    <ul>
                      <li>Intelligent PC care with AI</li>
                      <li>200% faster system running</li>
                      <li>300% faster Internet speedup</li>
                    </ul>
                    <p><sup>$</sup><span>19.99</span><sup><del>$89.97</del></sup></p>
                    <a href="https://www.iobit.com/buy.php?product=asc143pc1999&ref=en-aschalloweenb<?php echo $refStr?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_halloweenb" onclick="ga('send', 'event', 'ascbuy', 'buy', 'purchase-2021halloweenb')" class="btn_bundle">Get It Now</a>
                  </div>
                </div>
              </li>
              <li class="packs-items2">
                <div class="item-title">No.1 Driver Updater</div>
                <div class="item-cont">
                  <div class="item-cont-box">
                    <img src="<?php echo $pResUrl; ?>images/item-db.png" alt="">
                  </div>
                  <div class="item-cont-main">
                    <h1>Driver Booster 8 <span><img src="<?php echo $pResUrl; ?>images/pro icon.svg" alt=""></span></h1>
                    <h2>1 Year / 3 PCs</h2>
                    <ul>
                      <li>4,500,000+ driver database</li>
                      <li>Automatic & Safe Driver Update</li>
                      <li>Better Game Performance</li>
                    </ul>
                    <p><sup>$</sup><span>22.95</span><sup><del>$74.85</del></sup></p>
                    <a href="https://www.iobit.com/buy.php?product=driverbooster8&ref=en-dbhalloweenb<?php echo $refStr?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_halloweenb" onclick="ga('send', 'event', 'dbbuy', 'buy', 'purchase-2021halloweenb')" class="btn_bundle">Get It Now</a>
                  </div>
                </div>
              </li>
              <li class="packs-items3">
                <div class="item-title">The Best Uninstaller</div>
                <div class="item-cont">
                  <div class="item-cont-box">
                    <img src="<?php echo $pResUrl; ?>images/item-iu.png" alt="">
                  </div>
                  <div class="item-cont-main">
                    <h1>IObit Uninstaller 11 <span><img src="<?php echo $pResUrl; ?>images/pro icon.svg" alt=""></span></h1>
                    <h2>1 Year / 3 PCs</h2>
                    <ul>
                      <li>Completely delete stubborn programs</li>
                      <li>Automatically clean leftovers</li>
                      <li>Monitor and record system changes</li>
                    </ul>
                    <p><sup>$</sup><span>16.77</span><sup><del>$59.93</del></sup></p>
                    <a href="https://www.iobit.com/buy.php?product=iu113pc1677&ref=en-iuhalloweenb<?php echo $refStr?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_halloweenb" onclick="ga('send', 'event', 'iubuy', 'buy', 'purchase-2021halloweenb')" class="btn_bundle">Get It Now</a>
                  </div>
                </div>
              </li>
              <li class="packs-items4">
                <div class="item-title">All-in-one PC Protector</div>
                <div class="item-cont">
                  <div class="item-cont-box">
                    <img src="<?php echo $pResUrl; ?>images/item-ascu.png" alt="">
                  </div>
                  <div class="item-cont-main">
                    <h1>Advanced SystemCare Ultimate 14 <span><img src="<?php echo $pResUrl; ?>images/pro icon.svg" alt=""></span></h1>
                    <h2>1 Year / 3 PCs</h2>
                    <ul>
                      <li>Optimize for ultimate PC performance</li>
                      <li>Defend against viruses in real time</li>
                      <li>Protects against malicious infection</li>
                    </ul>
                    <p><sup>$</sup><span>29.99</span><sup><del>$49.99</del></sup></p>
                    <a href="https://www.iobit.com/buy.php?product=ascultimate14&ref=en-ascuhalloweenb<?php echo $refStr?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_halloweenb" onclick="ga('send', 'event', 'ascubuy', 'buy', 'purchase-2021halloweenb')" class="btn_bundle">Get It Now</a>
                  </div>
                </div>
              </li>
              <li class="packs-items5">
                <div class="item-title">Awarded PC Antivirus</div>
                <div class="item-cont">
                  <div class="item-cont-box">
                    <img src="<?php echo $pResUrl; ?>images/item-imf.png" alt="">
                  </div>
                  <div class="item-cont-main">
                    <h1>IObit Malware Fighter 8 <span><img src="<?php echo $pResUrl; ?>images/pro icon.svg" alt=""></span></h1>
                    <h2>1 Year / 3 PCs</h2>
                    <ul>
                      <li>Detect & remove 209 million threats</li>
                      <li>Protect personal data with password</li>
                      <li>Block ransomware attacks</li>
                    </ul>
                    <p><sup>$</sup><span>23.99</span><sup><del>$59.93</del></sup></p>
                    <a href="https://www.iobit.com/buy.php?product=imf83pc&ref=en-imfhalloweenb<?php echo $refStr?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_halloweenb" onclick="ga('send', 'event', 'imfbuy', 'buy', 'purchase-2021halloweenb')" class="btn_bundle">Get It Now</a>
                  </div>
                </div>
              </li>
              <li class="packs-items6">
                <div class="item-title">Popular Software Updater</div>
                <div class="item-cont">
                  <div class="item-cont-box">
                    <img src="<?php echo $pResUrl; ?>images/item-isu.png" alt="">
                  </div>
                  <div class="item-cont-main">
                    <h1>IObit Software Updater 4 <span><img src="<?php echo $pResUrl; ?>images/pro icon.svg" alt=""></span></h1>
                    <h2>1 Year / 3 PCs</h2>
                    <ul>
                      <li>Automatically update software</li>
                      <li>1-click to keep all software updated</li>
                      <li>Directly download & install software</li>
                    </ul>
                    <p><sup>$</sup><span>12.97</span><sup><del>$29.99</del></sup></p>
                    <a href="https://www.iobit.com/buy.php?product=isu43pc&ref=en-isuhalloweenb<?php echo $refStr?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_halloweenb" onclick="ga('send', 'event', 'isubuy', 'buy', 'purchase-2021halloweenb')" class="btn_bundle">Get It Now</a>
                  </div>
                </div>
              </li>
              <li class="packs-items7">
                <div class="item-title">Fast & Deep Defraggler</div>
                <div class="item-cont">
                  <div class="item-cont-box">
                    <img src="<?php echo $pResUrl; ?>images/item-sd.png" alt="">
                  </div>
                  <div class="item-cont-main">
                    <h1>Smart Defrag 7 <span><img src="<?php echo $pResUrl; ?>images/pro icon.svg" alt=""></span></h1>
                    <h2>1 Year / 3 PCs</h2>
                    <ul>
                      <li>Faster defrag speed</li>
                      <li>Auto defrag select files</li>
                      <li>Quicker PC startup</li>
                    </ul>
                    <p><sup>$</sup><span>19.99</span><sup><del>$39.99</del></sup></p>
                    <a href="https://www.iobit.com/buy.php?product=sd3pcs&ref=en-sdhalloweenb<?php echo $refStr?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_halloweenb" onclick="ga('send', 'event', 'sdbuy', 'buy', 'purchase-2021halloweenb')" class="btn_bundle">Get It Now</a>
                  </div>
                </div>
              </li>
              <li class="packs-items8">
                <div class="item-title">Effective Files Protection Tool</div>
                <div class="item-cont">
                  <div class="item-cont-box">
                    <img src="<?php echo $pResUrl; ?>images/item-pf.png" alt="">
                  </div>
                  <div class="item-cont-main">
                    <h1>Protected Folder</h1>
                    <h2>1 Year / 1 PC</h2>
                    <ul>
                      <li>Protect files from malicious attacks</li>
                      <li>1 password for all files</li>
                      <li>Protect privacy from others</li>
                    </ul>
                    <p><sup>$</sup><span>19.95</span><sup><del>$39.95</del></sup></p>
                    <a href="https://www.iobit.com/buy.php?product=protected-folder&ref=en-pfhalloweenb<?php echo $refStr?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_halloweenb" onclick="ga('send', 'event', 'pfbuy', 'buy', 'purchase-2021halloweenb')" class="btn_bundle">Get It Now</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer">
        <div class="footer-cont">
          <div class="footer-awards">
            <div class="footer-awards-ins">
              <div class="logo">
                <img src="<?php echo $pResUrl; ?>images/refund-logo.svg" alt="">
              </div>
              <div class="intr">
                <h2>Try it RISK FREE - with our 60-day Money Back Guarantee</h2>
                <p>If you're not satisfied in the first 60 days, we will give you<br> back your money.</p>
              </div>
            </div>
            <div class="footer-awards-img">
              <h3>We accept</h3>
              <img src="<?php echo $pResUrl; ?>images/payicon.svg" alt="">
            </div>
          </div>
          <p>Note: <br>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</p>
        </div>
        <div class="footer-copyright">Copyright © 2005 - 2021 IObit. All Rights Reserved</div>
      </div>

      <div class="floatlayer animate__animated animate__fadeInUp">
        <img src="<?php echo $pResUrl; ?>images/float.png" alt="">
        <img src="<?php echo $pResUrl; ?>images/toparrow.svg" alt="" class="top_arrow">
        <img src="<?php echo $pResUrl; ?>images/toparrow-hover.svg" alt="" class="top_arrowhover">
      </div>

      <!-- mask -->
      <div class="mask">
        <div>
          <img src="<?php echo $pResUrl; ?>images/slogan.svg" alt="">
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>

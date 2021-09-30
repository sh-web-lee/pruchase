<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum = rand(116, 198);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}

if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'eniujunexp0709_p' . $date;
    $c_name_t = 'eniujunexp0709_t' . $date;
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = rand(41, 59);
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t, $totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$data = json_decode(base64_decode($_GET['data']), true);
$data_arr = $data['iu10pre'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pay $0 to get IObit Uninstaller 10 PRO</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner" data-name="animation">
    <div class="wrapper">
        <div class="top">
            <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
                IObit
            </a>
            <div class="icon">
                <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
                IObit Uninstaller 10
            </div>
        </div>
        <div class="clearfix">
            <div class="left-img">
                <img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" class="iu-box" data-name="default">
                <img src="<?php echo getStaticUrl('images/banner-icon01.png') ?>" alt="" class="iu-icon01"
                     data-name="default">
                <img src="<?php echo getStaticUrl('images/banner-icon02.png') ?>" alt="" class="iu-icon02"
                     data-name="default">
            </div>
            <div class="right fr">
                <h1 data-name="default">Once-A-Year Presale Starts</h1>
                <h2 data-name="default">Renew PRO Edition for $0</h2>
                <h3 data-name="default">Limited to first 500 users per day before August 25<sup>th</sup></h3>
                <div class="number" data-name="default">
                    <div id="reduce" class="reduceNum">
                        <div class="listbox"><span class="list"><b>5</b></span></div>
                        <div class="listbox"><span class="list"><b>0</b></span></div>
                    </div>
                    left now
                    <div class="bar">
                        <span></span>
                    </div>
                </div>
                <div class="price" data-name="default">
                    <strong>$0 <sup>*</sup></strong>
                    <a class="buybtn"
                       href="https://www.iobit.com/buy.php?product=iu10preorder&ref=en-iu10preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu"
                       onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderexp');">
                        Renew Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
    <div class="wrapper ">
        <h2>IObit Uninstaller PRO Has Already Helped You</h2>
        <div class="clearfix">
            <dl class="one" data-name="default">
                <dt><img src="<?php echo getStaticUrl('images/intro-icon01.png') ?>" alt=""/></dt>
                <dd>
                    Uninstall <?php echo empty($data_arr['soft']) ? '' : '<b class="total">' . $data_arr['soft'] . '</b>'; ?>
                    programs,
                    including <?php echo (empty($data_arr['bundle']) || empty($data_arr['soft'])) ? '' : '<b class="bundle">' . $data_arr['bundle'] . '</b>'; ?>
                    bundle
                    & <?php echo (empty($data_arr['stubborn']) || empty($data_arr['soft'])) ? '' : '<b class="sofeware">' . $data_arr['stubborn'] . '</b>'; ?>
                    stubborn software
                </dd>
            </dl>
            <dl class="right" data-name="default">
                <dt><img src="<?php echo getStaticUrl('images/intro-icon02.png') ?>" alt=""/></dt>
                <dd>
                    Uninstall <?php echo empty($data_arr['plugin']) ? '' : '<b class="plug-total">' . $data_arr['plugin'] . '</b>'; ?>
                    plug-ins & toolbars,
                    including <?php echo (empty($data_arr['plugin-mp']) || empty($data_arr['plugin'])) ? '' : '<b class="mail">' . $data_arr['plugin-mp'] . '</b>'; ?>
                    malicious & advertising plug-ins
                </dd>
            </dl>
            <dl class="two" data-name="default">
                <dt><img src="<?php echo getStaticUrl('images/intro-icon03.png') ?>" alt=""/></dt>
                <?php echo (empty($data_arr['file']) || empty($data_arr['reg'])) ? '<dd>Delete files and registry entries</dd>' : '<dd>Delete <b class="files">' . $data_arr['file'] . '</b> files and <b class="registries">' . $data_arr['reg'] . '</b> registries</dd>'; ?>
                <!-- <dd>Delete files and registry entries</dd> -->
            </dl>
            <dl class="right two" data-name="default">
                <dt><img src="<?php echo getStaticUrl('images/intro-icon04.png') ?>" alt=""/></dt>
                <?php if (empty($data_arr['filesize'])) : ?>
                    <dd>Clean traces and save disk space</dd>
                <?php else :
                    $filesize = round($data_arr['filesize'] / (1024 * 1024), 2);
                    $size = explode('.', $filesize);
                    ?>
                    <dd>Save <b class="disk"><em class="integer"><?php echo $size[0];?></em>.<em class="decimal"><?php echo $size[1];?></em></b> MB disk space
                        in total
                    </dd>
                <?php endif; ?>
                <!-- <dd>Clean traces and save disk space</dd> -->
            </dl>
        </div>
    </div>
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature" data-name="animation">
    <div class="wrapper">
        <h2>Your PRO-Priority Has Expired, and You Have to <span>Say Goodbye to:</span></h2>
        <div class="feature-img">
            <img class="img-box" src="<?php echo getStaticUrl('images/feature-img.png') ?>" data-name="default" alt=""/>
            <dl class="one" data-name="default">
                <dt>Powerful Uninstall</dt>
                <dd>1-click to uninstall unwanted programs, especially stubborn or antivirus software that refuse to be
                    removed.
                </dd>
            </dl>
            <dl class="two" data-name="default">
                <dt>Safe & Fast Browser</dt>
                <dd>Identify malicious & advertising plug-ins to ensure secure browsing experience.</dd>
            </dl>
            <dl class="three" data-name="default">
                <dt>Auto Clean</dt>
                <dd>Auto detect and clean leftovers, those left by uninstallation with other utilities.</dd>
            </dl>
            <dl class="four" data-name="default">
                <dt>In-depth Clean</dt>
                <dd>Monitor and completely delete all files and registries created by installation and left after
                    standard uninstall.
                </dd>
            </dl>
            <dl class="five" data-name="default">
                <dt>Software Update</dt>
                <dd>1-click to upgrade all important software without any user intervention.</dd>
            </dl>
            <span class="circle one" data-name="default"></span>
            <span class="circle two" data-name="default"></span>
            <span class="circle three" data-name="default"></span>
        </div>
    </div>
</div>
<!-- feature end -->

<div class="feature-02" data-name="animation">
    <div class="wrapper">
        <h2>New IObit Uninstaller 10 Performs Better:</h2>
        <dl data-name="default" class="one">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon08.png') ?>" alt=""></dt>
            <dd>
                <h3><b>50% Faster</b> Uninstall Progress</h3>
            </dd>
        </dl>
        <dl class="center" data-name="default">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon07.png') ?>" alt=""></dt>
            <dd>
                <h3>Scan <b>30% more</b> uninstall leftovers</h3>
            </dd>
        </dl>
        <dl data-name="default" class="three">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png') ?>" alt=""></dt>
            <dd>
                <h3><b>Block</b> site notification prompts</h3>
            </dd>
        </dl>
    </div>
</div>

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>It’s a Trust-worthy Uninstaller</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
      <dd>
        <h3>50M+</h3>
        <p>Downloads</p>
      </dd>
    </dl>
    <dl class="center">
      <dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
      <dd>
        <h3>4.5+</h3>
        <p>User’s Rating</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
      <dd>
        <h3>1000+</h3>
        <p>Media Recommendations</p>
      </dd>
    </dl>
    <div class="review-box">
      <div class="box">
        <h3>User Review</h3>
        <p>"IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."</p>
      </div>
      <div class="box">
        <h3>User Review</h3>
        <p>This program saved my money. Before using this program, my computer was very slow. I couldn't do anything. But my computer is very clean now. Thanks to this program, my computer got very Fast. I saved everything through this program. Thank you so much IOBit I love you."</p>
      </div>
      <div class="box active">
        <h3>Media Review</h3>
        <p>"If you need a program that lets you cleanly and completely uninstall applications, fire up IObit Uninstaller. This free utility makes it a breeze to delete apps, including stray files that are often left behind when you use Windows to delete software from your hard drive or SSD."</p>
      </div>
      <div class="box">
        <h3>User Review</h3>
        <p>"I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed. "</p>
      </div>
      <div class="box">
        <h3>User Review</h3>
        <p>"IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."</p>
      </div>
    </div>
    <ul>
      <li>
        <span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
        <p>Ivan White</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
        <p> Ali Tekin</p>
      </li>
      <li class="active">
        <span><img src="<?php echo getStaticUrl('images/pcgm.png')?>" alt="PC Magazine"></span>
        <p>PC Magazine</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></span>
        <p>Samrat Kumar Chakrabortty</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></span>
        <p>John Glenn Perong</p>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- service start -->
<div class="service">
    <div class="wrapper">
        <h2>World-wide Awards</h2>
        <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt=""/>
    </div>
</div>
<!-- service end -->

<!-- bottom start -->
<div class="bottom">
    <div class="wrapper">
        <dl class="annotation">
            <dt>Note:</dt>
            <dd>
                *.At the end of the 30-day free trial period, your credit card or PayPal account will be charged $14.77
                automatically. This 50% discount from the original price of $29.99 is bonus only for preorders!
            </dd>
            <dd>*.If you're unsatisfied, you can cancel the order you placed within 30 days without paying a fee.</dd>
        </dl>
        <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. All Rights Reserved</p>
    </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
        <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
            IObit Uninstaller 10
        </div>
        <div class="number fl">
            <div id="fReduce" class="reduceNum">
                <div class="listbox"><span class="list"><b>5</b></span></div>
                <div class="listbox"><span class="list"><b>0</b></span></div>
            </div>
            of 500 places left now
        </div>
    </div>
</div>
<!-- floatlayer end -->
<script>refStr = "<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>
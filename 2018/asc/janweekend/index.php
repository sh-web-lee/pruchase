<?php
error_reporting(0);
define("IObit","IObit");
date_default_timezone_set('Etc/GMT+8');
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Weekend Exclusive - Best Price to Get ASC PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Cabin:400'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <div class="clearfix">
      <a class="logo fl" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1 class="fl">48-HOUR Weekend Sale</h1>
    </div>
    <div class="top-discount">
      <dl>
        <dt>$5 OFF</dt>
        <dd>purchase &nbsp;of &nbsp;$10+</dd>
      </dl>
      <dl class="two">
        <dt>$20 OFF</dt>
        <dd>purchase &nbsp;of &nbsp;$30+</dd>
      </dl>
      <dl>
        <dt>$40 OFF</dt>
        <dd>purchase &nbsp;of &nbsp;$50+</dd>
      </dl>
    </div>
    <!-- time -->
    <ul id="countdown" class="countdown">
      <li><strong>00</strong> H:</li>
      <li><strong>00</strong> M:</li>
      <li><strong>00</strong> s:</li>
      <li class="last"><strong>000</strong><sup>*</sup></li>
    </ul>
    <div class="product clearfix">
      <div class="list pc">
        <div class="imgbox"><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="" /></div>
        <div class="price">
          <h4>
            <span class="original"><small>$</small><strong>19.99</strong></span>
              <span class="current">
                <b class="tag tag-icons">$5 <small>OFF</small> $<b class="num-off">10</b>+</b>
                <strong class="discount">$<b>14.99</b></strong>
              </span>
          </h4>
        </div>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=asc111pc1499wk&ref=asc1pc1499jan2018&refs=purchase_asc"
           onclick="ga('send', 'event', 'asc1499buy', 'buy', 'ascpurchase-wk');">
          Buy Now
        </a>
        <p>* $<b>5</b> OFF will be auto applied at checkout</p>
      </div>
      <div class="list pcs">
        <div class="imgbox"><img src="<?php echo getStaticUrl('images/pcs.png')?>" alt="" /></div>
        <h4>
          <span class="original"><small>$</small><strong>39.99</strong></span>
            <span class="current">
              <b class="tag tag-icons">$20 <small>OFF</small> $<b class="num-off">30</b>+</b>
              <strong class="discount">$<b>19.99</b></strong>
            </span>
        </h4>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=asc113pc1999wk&ref=asc3pc1999jan2018&refs=purchase_asc"
           onclick="ga('send', 'event', 'asc1999buy', 'buy', 'ascpurchase-wk'); ">
          Buy Now
        </a>
        <p>* $<b>20</b> OFF will be auto applied at checkout</p>
      </div>
      <div class="list pcstwo">
        <div class="imgbox"><img src="<?php echo getStaticUrl('images/twopcs.png')?>" alt="" /></div>
        <h4>
          <span class="original"><small>$</small><strong>59.99</strong></span>
            <span class="current">
              <b class="tag tag-icons">$40 <small>OFF</small> $<b class="num-off">50</b>+</b>
              <strong class="discount">$<b>19.99</b></strong>
            </span>
        </h4>
        <a class="buybtn pctwobtn"
           href="https://www.iobit.com/buy.php?product=asc113pc14m1999wk&ref=asc3pc14m1999jan2018&refs=purchase_asc"
           onclick="ga('send', 'event', 'asc14mbuy', 'buy', 'ascpurchase-wk'); ">
          Buy Now
        </a>
        <p>* $<b>40</b> OFF will be auto applied at checkout</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- payments start -->
<div class="payments">
  <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
</div>
<!-- payments end -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>Why Upgrade To Pro Version</h2>
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="gray">Your Current Version</th>
      <th class="blue">PRO Version</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="gray">
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" /></dt>
          <dd>
            <h4>Clean</h4>
            Basic junk files clean for more disk space
          </dd>
        </dl>
      </td>
      <td class="blue">
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" /></dt>
          <dd>
            <h4>Clean</h4>
            Basic junk files clean for more disk space <span>Deep registry clean for less crashes</span>
          </dd>
        </dl>
      </td>
    </tr>
    <tr>
      <td class="gray">
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" /></dt>
          <dd>
            <h4>Faster</h4>
            Speed up PC startup & running
          </dd>
        </dl>
      </td>
      <td class="blue">
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" /></dt>
          <dd>
            <h4>Faster</h4>
            Speed up PC startup & running up to 200% faster <span>Speed up Internet up to 300% faster</span>
          </dd>
        </dl>
      </td>
    </tr>
    <tr>
      <td class="gray">
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" /></dt>
          <dd>
            <h4>Protection</h4>
            Protect against malware
          </dd>
        </dl>
      </td>
      <td class="blue">
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt="" /></dt>
          <dd>
            <h4>Protection</h4>
            Protect against malware in real-time <span>Remove privacy traces automatically</span>
          </dd>
        </dl>
      </td>
    </tr>
    <tr class="last">
      <td class="gray">
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt="" /></dt>
          <dd>
            <h4>Update</h4>
            Update outdated PC programs manually <span>Update to the latest version manually</span>
          </dd>
        </dl>
      </td>
      <td class="blue">
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt="" /></dt>
          <dd>
            <h4>Update</h4>
            Update outdated PC programs automatically <span>Update to the latest version automatically</span>
          </dd>
        </dl>
      </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <td><img src="<?php echo getStaticUrl('images/vs.png')?>" alt="" /></td>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->

<!-- centbuy start -->
<div class="centbuy purchase">
  <div class="wrapper product clearfix">
    <div class="imglist fl">
      <img class="pc" src="<?php echo getStaticUrl('images/pc.png')?>" alt="" />
      <img class="pcs" src="<?php echo getStaticUrl('images/pcs.png')?>" alt="" />
      <img class="twopcs active" src="<?php echo getStaticUrl('images/twopcs.png')?>" alt="" />
    </div>
    <ul class="fl">
      <li>
        <i class="all-icons"></i>
        <b>1 Year / 1 PC</b>
        <span class="tag-icons">$<b class="num">5</b> OFF</span>
      </li>
      <li>
        <i class="all-icons"></i>
        <b>1 Year / 3 PCs</b>
        <span class="tag-icons">$<b class="num">20</b> OFF</span>
      </li>
      <li class="active">
        <i class="all-icons"></i>
        <b>1 Year / 3 PCs + Extra 2 Months</b>
        <span class="tag-icons">$<b class="num">40</b> OFF</span>
      </li>
    </ul>
    <div class="price list">
      <h4>
        <span class="original"><small>$</small><strong>59.99</strong></span>
          <span class="current">
            <b class="tag tag-icons">$<b class="num">40</b> <small>OFF</small> $<b class="num-off">50</b>+</b>
            <strong class="discount">$<b>19.99</b></strong>
          </span>
      </h4>
      <a class="buybtn pctwobtn" href="https://www.iobit.com/buy.php?product=asc113pc14m1999wk&ref=asc3pc14m1999jan2018&refs=purchase_asc"
           onclick="ga('send', 'event', 'asc14mbuy', 'buy', 'ascpurchase-wk'); ">
        Buy Now
      </a>
      <p>* $<b class="num">40</b> OFF will be auto applied at checkout</p>
    </div>
  </div>
</div>
<!-- centbuy end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>World-wide Awards</h2>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
</div>
<!-- awards end -->

<!-- review start -->
<div class="container clearfix">
  <div class="review wrapper">
    <div class="review-box">
      <div class="reviews clearfix">
        <h2>User Review</h2>
        <h3>"Not only is it a great product, but the support is equally great"</h3>
        <p>"I like many started off with the free version and eventually purchased the full version. It's been working to keep my computer clean and "bug" free for years now and it hasn't let me down yet. I contacted Advanced System Care recently and they responded within a day or two with all I needed to know. In my mind support is huge in the decision to stay with a product and ASC wins in both product and support."</p>
      </div>
      <div class="reviews clearfix">
        <h2>User Review</h2>
        <h3>"Cleaned up Spyware and Malware My antivirus lets slip through"</h3>
        <p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence"</p>
      </div>
      <div class="reviews clearfix active">
        <h2>Media Review</h2>
        <h3>A PC optimization tool that wipes out security threats and helps stop new ones in their tracks.</h3>
        <p>IObit Avanced SystemCare is one of our favorite PC cleanup and maintenance tools, and the latest version builds on an already great toolkit with new security-focused options.</p>
      </div>
      <div class="reviews clearfix">
        <h2>User Review</h2>
        <h3>"My choice is still overwhelmingly Advanced SystemCare Pro"</h3>
        <p>"As a computer repair tech I find by downloading and scanning with ASC free most common problems are resolved. When finished with a repair I usually suggest the client purchase the Pro package. Who needs a tech when you have the power of Advanced System Care Pro working your system 24-7? This is the best product a home user can buy. Thank you for making my job easier."</p>
      </div>
      <div class="reviews clearfix">
        <h2>User Review</h2>
        <h3>"My system has never run better."</h3>
        <p>"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</p>
      </div>
    </div>
    
    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay"><span></span></div>
        <strong>Bruce Ramsay</strong>

      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"><span></span></div>
        <strong>Bob Bassett</strong>

      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/techradar.png" alt="Techradar"><span></span></div>
        <strong>Techradar</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"><span></span></div>
        <strong>Charles R. Widick</strong>

      </li>
      <li class="last">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold"><span></span></div>
        <strong>Gordon Griswold</strong>

      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- footbuy start -->
<div class="footbuy purchase">
  <div class="wrapper product clearfix">
    <div class="imglist fl">
      <img class="pc" src="<?php echo getStaticUrl('images/pc.png')?>" alt="" />
      <img class="pcs" src="<?php echo getStaticUrl('images/pcs.png')?>" alt="" />
      <img class="twopcs active" src="<?php echo getStaticUrl('images/twopcs.png')?>" alt="" />
    </div>
    <ul class="fl">
      <li>
        <i class="all-icons"></i>
        <b>1 Year / 1 PC</b>
        <span class="tag-icons">$<b class="num">5</b> OFF</span>
      </li>
      <li>
        <i class="all-icons"></i>
        <b>1 Year / 3 PCs</b>
        <span class="tag-icons">$<b class="num">20</b> OFF</span>
      </li>
      <li class="active">
        <i class="all-icons"></i>
        <b>1 Year / 3 PCs + Extra 2 Months</b>
        <span class="tag-icons">$<b class="num">40</b> OFF</span>
      </li>
    </ul>
    <div class="price list">
      <h4>
        <span class="original"><small>$</small><strong>59.99</strong></span>
          <span class="current">
            <b class="tag tag-icons">$<b class="num">40</b> <small>OFF</small> $<b class="num-off">50</b>+</b>
            <strong class="discount">$<b>19.99</b></strong>
          </span>
      </h4>
      <a class="buybtn pctwobtn" href="https://www.iobit.com/buy.php?product=asc113pc14m1999wk&ref=asc3pc14m1999jan2018&refs=purchase_asc"
           onclick="ga('send', 'event', 'asc14mbuy', 'buy', 'ascpurchase-wk'); ">
        Buy Now
      </a>
      <p>* $<b class="num">40</b> OFF will be auto applied at checkout</p>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper service clearfix">
    <dl class="fl one">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
      <dd>
        <h3>Money Back Guarantee</h3>
        If you're not satisfied in the first 60 days, <span>we will give you back your money.</span>
      </dd>
    </dl>
    <dl class="fl two">
      <dt><img src="<?php echo getStaticUrl('images/secure.png')?>" alt="" /></dt>
      <dd>
        <h3>Secure Payment</h3>
        IObit supports several safe modes of <span>payment.</span>
      </dd>
    </dl>
    <dl class="fr">
      <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt="" /></dt>
      <dd>
        <h3>Get License</h3>
        You will receive the license within a few <span>minutes after purchase.</span>
      </dd>
    </dl>
  </div>
  <div class="footer wrapper">
    <p>*Such promotional programs are subject to change without notice, from time to time in our sole discretion.</p>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- bottom end -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
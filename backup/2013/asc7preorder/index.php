<?php
    error_reporting(E_ERROR);
    define("IObit","IObit");
    $pRootUrl = '../../';
    include '../../include/common.inc.php';
    if (empty($_GET['ref'])) $_GET['ref'] = 'asc7preorder';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ASC 7 Pre-order Special Offer</title>
<meta name="description" content="" />
<link type="text/css" rel="stylesheet" href="style/style.css">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="header">
  <div class="headtop"> <a href="http://www.iobit.com" title="IObit"></a>
    <dl>
      <dt><img src="img/star.png"></dt>
      <dd>This ulitity provides an always-on, auto- mated, all-in-one PC Healthcare.</dd>
    </dl>
  </div>
</div>
<div class="shadow"></div>
<div id="main">
  <h1>Brand New <span>Advanced SystemCare <em>7</em></span></h1>
  <h2>—— Your Ultimate Solution for PC Speedup</h2>
  <div class="minfo">
    <div class="boxshot"></div>
    <dl class="discount">
      <dt><img src="img/discount.png" alt="" /></dt>
      <dd><a href="http://www.iobit.com/buy.php?product=asc7preorder&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="toporderbtn">Click to Pre-order Now</a></dd>
      <dd><img src="img/price.png" alt="" /></dd>
    </dl>
    <div class="clear"></div>
  </div>
  <div class="infoarea">
    <div class="benfits">
      <h4>Faster&Safer, <span>We Promise.</span> <a href="#compare">Click here to show the product comparison</a></h4>
      <dl>
        <dt><span><img src="img/icon_04.png" alt="" /></span>200%</dt>
        <dd class="discrip">Double the Speed of Your Slow PC</dd>
        <dd>Automatically improves your PC performance by intelligently managing system resources and constantly detecting inactive process.</dd>
      </dl>
      <dl class="end">
        <dt><span><img src="img/icon_02.png" alt="" /></span>300%</dt>
        <dd class="discrip">Boost Internet up to 300% Faster</dd>
        <dd>Accelerate Internet downloading, web surfing, online gaming, Youtube viewing up to 300% faster.</dd>
      </dl>
      <dl>
        <dt><span><img src="img/icon_01.png" alt="" /></span>Deeper</dt>
        <dd class="discrip">Clean and Optimize Registry More Deeply</dd>
        <dd>Full scan and repair harmful registry entries to optimize your PC for better performance.</dd>
      </dl>
      <dl class="end">
        <dt><span><img src="img/icon_03.png" alt="" /></span>Real-time</dt>
        <dd class="discrip">Active Protection & Optimization</dd>
        <dd>Automatically protect against malware with Real-time Protector and boost PC performance with Active Optimize in real time</dd>
      </dl>
    </div>
    <div class="rightinfo">
      <div class="count"> <span class="arrow"></span>
        <p>Over <span>
          <?php
			function microtime_float(){
				list($usec, $sec) = explode(" ", microtime());
				return ((float)$usec + (float)$sec);
			}
			echo ceil(microtime_float()*1000/20000)-69002590;
			?>
          customers</span> <br />
          have pre-ordered <br />
          <em class="txtasc7"></em> so far</p>
      </div>
      <dl class="review">
        <dt>" My system has never run better "</dt>
        <dd><img src="img/gordon.jpg" alt="" />
          <p>In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. <span>-- Gordon Griswold</span></p>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
  </div>
  <div class="pricebox">
    <h2>Your Cart</h2>
    <table cellpadding="0" cellspacing="0" width="100%" class="pricetab">
      <tr class="grybg">
        <td width="50" class="tlborder"></td>
        <td width="220" class="topborder"></td>
        <td class="topborder"></td>
        <td width="100" class="topborder bf16 center">Original</td>
        <td width="140" class="topborder rborder bf16 center">Price</td>
      </tr>
      <tr>
        <td height="50" class="tlborder bborder center"><img src="img/ascsmall.png" alt="Advancd SystemCare 7" /></td>
        <td class="topborder bborder bf14">Advanced SystemCare 7 PRO</td>
        <td class="topborder bborder f11">Boost your PC performance up to 300% and get full protection. <a href="">Get it now>></a></td>
        <td class="tlborder bborder bf16 center"><span class="price">$29.99<em></em></span></td>
        <td class="tlborder bborder rborder center"><span class="bf16 red">$14.77</span> <br />
          (For 14 Months / 1 PC)</td>
      </tr>
    </table>
  </div>
  <div class="checkout">
    <div class="moneyback"> Save 50% and Get Extra 2 Months' Subscription!</div>
    <div class="btn"> <a href="http://www.iobit.com/buy.php?product=asc7preorder&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" class="checkbtn">Check out >></a> <span>100% money back guarantee</span> </div>
  </div>
  <div class="awards"><img src="img/awards.png" alt="" /></div>
  <div class="comparison_table" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th colspan="2" style="text-align:left">See what PRO edition can do for you:</th>
          <th class="itemb"><span>Advanced Systemcare Free</span></th>
          <th class="itema"><span>Advanced Systemcare PRO</span></a> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="img/compare_icon_01.png"></td>
          <td class="virtue">Basic System Clean, Fix and Optimization</td>
          <td class="itemb"><img src="img/bluemark.png"/></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_02.png"></td>
          <td class="virtue">Ultimate System Tuneup for Top Performance</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_03.png"></td>
          <td class="virtue">300% Internet Speed up with Internet Booster</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_04.png"></td>
          <td class="virtue">Real-time Optimization with Active Optimize</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_05.png"></td>
          <td class="virtue">Deep Windows Registry Clean</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_06.png"></td>
          <td class="virtue">Maximum Hard Drive Performance</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_07.png"></td>
          <td class="virtue">Basic Protection from Security Threats</td>
          <td class="itemb"><img src="img/bluemark.png"/></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_08.png"></td>
          <td class="virtue">Full Detection against Security Threats</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_09.png"></td>
          <td class="virtue">Safe Online Experience with Surfing Protection</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_10.png"></td>
          <td class="virtue">Auto Clean for Privacy Security Whenever You Log on</td>
          <td class="itemb"><img src="img/bluemark.png"/></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_11.png"></td>
          <td class="virtue">Auto Update to the Latest Version</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_12.png"></td>
          <td class="virtue">Runs in the Background - Install and Forget It</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_13.png"></td>
          <td class="virtue">Fantastic New Skins &amp; Themes</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
        <tr>
          <td class="icons"><img src="img/compare_icon_14.png"></td>
          <td class="virtue">Free 24/7 Technical Support on demand</td>
          <td class="itemb"></td>
          <td class="itema"><img src="img/redmark.png"/></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2" class="awards"></th>
          <th class="itemb"><span>Advanced Systemcare Free</span><br />
            Your current edition</th>
          <th class="itema"><span>Advanced Systemcare PRO</span><br />
            <a href="http://www.iobit.com/buy.php?product=asc7preorder&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" class="buybtn">Upgrade Now</a> </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <div class="shadow"></div>
</div>
<div id="footer">&copy; 2005 - 2013 IObit Information Technology. All Rights Reserved.</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>

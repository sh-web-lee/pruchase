<?php
	define("IObit","IObit");
	$pRootUrl = '../';
	include '../include/common.inc.php';
	
switch($_GET['ref']){
	case 'asc6trial903':
		$price = '$14.77';
		$url = 'http://www.iobit.com/buy.php?product=asc63pc1477&ref='.$_GET['ref'];
		break;
	case 'asc6trial902':
		$price = '$12.97';
		$url = 'http://www.iobit.com/buy.php?product=asc63pc1297&ref='.$_GET['ref'];
		break;
	case 'asc6trial901':
		$price = '$14.77';
		$url = 'http://www.iobit.com/buy.php?product=asc63pc1477&ref='.$_GET['ref'];
		break;
	default:
		$ref = empty($_GET['ref']) ? 'asc6trial' : $_GET['ref'];
		$price = '$14.77';
		$url = 'http://www.iobit.com/buy.php?product=asc63pc1477&ref='.$ref;
		break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>_udn = "iobit.com";</script>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='2581509-31',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upgrade to Advanced SystemCare 6 PRO</title>
<link type="text/css" rel="stylesheet" href="style/asctrial.css" />
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head'];?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
  <div class="wrapper"> <a href="http://www.iobit.com" class="homelink">Iobit</a>
    <dl>
      <dt></dt>
      <dd><img src="img/star.png" alt=""/></dd>
      <dd>This ulitity provides an always-on, automated, all-in-one PC Healthcare. </dd>
    </dl>
  </div>
</div>
<div id="main">
  <div class="wrapper">
    <h2>Activate Your License</h2>
    <h3>Save <span>85%</span> Today, and Get Extra Support for 2 PCs for FREE!</h3>
    <div class="checkout">
      <dl>
        <dt><a href="<?php echo $url;?>" class="activebtn">Activate your license</a></dt>
        <dd><span>ONLY <strong><?php echo $price; ?></strong></span> <del>$89.97</del>1Year / <span>3</span>PCs</dd>
      </dl>
      <div class="moneyback"><img src="img/moneyback.png"></div>
    </div>
    <dl class="procinfo">
      <dt>Enjoy the Same Benefits as Your Trial</dt>
      <dd>Protect Internet and System Better</dd>
      <dd>Clean and Optimize Registry More Deeply</dd>
      <dd>Boost Internet up to 300% Faster</dd>
      <dd>Double the Speed of Your Slow PC</dd>
    </dl>
    <div class="cart">
      <table cellpadding="0" cellspacing="0" width="100%" class="pricetab">
        <tr>
          <td height="30" class="tlborder bf16 ">Advanced SystemCare 6 PRO</td>
          <td class="tlborder bf16 center "><span class="price">$29.99<em></em></span></td>
          <td class="tlborder rborder f12 center "><span class="bf16 red"><?php echo $price; ?></span></td>
        </tr>
        <tr>
          <td height="30" class="tlborder bf16 ">Additional Support for 2 PCs</td>
          <td class="tlborder bf16 center "><span class="price">$59.98<em></em></span></td>
          <td class="tlborder rborder f12 center "><span class="bf16 red">Free</span></td>
        </tr>
        <tr>
          <td height="30" class="topborder"><a href="<?php echo $url; ?>">Get Support for 3 PCs with the Price of ONE!</a></td>
          <td class="tlborder bf16 center bborder ybg"><span class="price">$89.97<em></em></span></td>
          <td class="tlborder rborder f12 center bborder ybg"><span class="bf16 red"><?php echo $price; ?></span></td>
        </tr>
      </table>
    </div>
    <div class="checkout"> <a href="<?php echo $url;?>" class="activebtn">Activate your license</a>
      <div class="moneyback2"><img src="img/moneyback.png"></div>
    </div>
    <div class="awards">
      <h4>Product Awards</h4>
      <img src="img/awards.jpg"> </div>
    <div class="review">
      <h4>Over 150 Million Users Trust ASC</h4>
      <dl class="personal_info">
        <dt><img src="img/jane_mcclain.jpg"></dt>
        <dd>Jane McClain, 2012</dd>
      </dl>
      <dl class="quote">
        <dt><img src="img/quote.jpg"></dt>
        <dd>The Advanced-System Care Pro keeps my computer well cleaned. Not only that, their customer service is excellent. They persevered with courteous help until I was able to solve my problem of sending a gift of this ASC service to another person. This is evidence of a good company.”</dd>
      </dl>
      <div class="clear"></div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="wrapper">
    <div class="shadow"><img src="img/shadow.jpg"></div>
    <div class="merchant"><img src="img/merchant.jpg"></div>
    <p>© 2005 - 2013 IObit. All Rights Reserved </p>
    <div class="clear"></div>
  </div>
</div>
</body>
</html>
<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IObit New Year Sale</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>css/style.css"/>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body class="wrapper">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="header"><img src="<?php echo $pResUrl; ?>img/header.jpg"></div>
<div class="main">
        <h2>Download.com exclusive offer: <span>SAVE 40%</span> on all IObit products! </h2>
        <p class="time">Valid until Jan 25, 2015</p>
        <div class="bestselling clearfix">
                <h3>BEST-SELLING PC & MAC UTILITIES</h3>
                <div class="sellbox">
                        <div class="imgproduct"><img src="<?php echo $pResUrl; ?>img/product_asc.jpg"></div>
                        <dl>
                                <dt>Advanced SystemCare 8 PRO</dt>
                                <dd>One-click solution to speed up startup, Internet connection and the whole PC powerfully</dd>
                                <dd class="price"><del>$19.99</del>$11.99</dd>
                                <dd class="btnbuy"><a href="https://store.iobit.com/order/checkout.php?PRODS=4633271&QTY=1&AFFILIATE=9996&CART=1&COUPON=CNETNY2015" onclick="ga('send', 'event', 'ascbuy', 'buy', '2015NY-CNETASC')">Buy Now</a></dd>
                        </dl>
                </div>
                <div class="sellbox">
                        <div class="imgproduct"><img src="<?php echo $pResUrl; ?>img/product_mb.jpg"></div>
                        <dl>
                                <dt>MacBooster 2</dt>
                                <dd>Clean junk files, prevent malware & virus infection, accelerate OS X startup & processing speed</dd>
                                <dd class="price"><del>$39.95</del>$23.97</dd>
                                <dd class="btnbuy"><a href="https://store.iobit.com/order/checkout.php?PRODS=4627846&QTY=1&AFFILIATE=9996&CART=1&COUPON=CNETNY2015" onclick="ga('send', 'event', 'mbbuy', 'buy', '2015NY-CNETMB')" class="btnmac">Buy Now</a></dd>
                        </dl>
                </div>
        </div>
        <div class="selling clearfix">
                <div class="sellbox">
                        <div class="imgproduct"><img src="<?php echo $pResUrl; ?>img/product_ascu.jpg"></div>
                        <dl>
                                <dt>Advanced SystemCare Ultimate 8</dt>
                                <dd>No.1 ranked antivirus + top PC-tuneup for ultimate protection and ultimate performance</dd>
                                <dd class="price"><del>$29.99</del>$17.99</dd>
                                <dd class="btnbuy"><a href="https://store.iobit.com/order/checkout.php?PRODS=4636911&QTY=1&AFFILIATE=9996&CART=1&COUPON=CNETNY2015" onclick="ga('send', 'event', 'ascubuy', 'buy', '2015NY-CNETASCU')">Buy Now</a></dd>
                        </dl>
                </div>
                <div class="sellbox">
                        <div class="imgproduct"><img src="<?php echo $pResUrl; ?>img/product_db.jpg"></div>
                        <dl>
                                <dt>Driver Booster 2 PRO</dt>
                                <dd>Update outdated drivers safely and rapidly to maximize PC and gaming performance</dd>
                                <dd class="price"><del>$28.95</del>$17.37</dd>
                                <dd class="btnbuy"><a href="https://store.iobit.com/order/checkout.php?PRODS=4631623&QTY=1&AFFILIATE=9996&CART=1&COUPON=CNETNY2015" onclick="ga('send', 'event', 'dbbuy', 'buy', '2015NY-CNETDB')">Buy Now</a></dd>
                        </dl>
                </div>
                <div class="sellbox">
                        <div class="imgproduct"><img src="<?php echo $pResUrl; ?>img/product_imf.jpg"></div>
                        <dl>
                                <dt>IObit Malware Fighter 2 PRO</dt>
                                <dd>Protect PC against various kinds of malware in real-time to ensure a safer PC</dd>
                                <dd class="price"><del>$29.99</del>$17.97</dd>
                                <dd class="btnbuy"><a href="https://store.iobit.com/order/checkout.php?PRODS=4537902&QTY=1&AFFILIATE=9996&CART=1&COUPON=CNETNY2015" onclick="ga('send', 'event', 'imfbuy', 'buy', '2015NY-CNETIMF')">Buy Now</a></dd>
                        </dl>
                </div>
                <div class="sellbox">
                        <div class="imgproduct"><img src="<?php echo $pResUrl; ?>img/product_pf.jpg"></div>
                        <dl>
                                <dt>Protected Folder</dt>
                                <dd>Hide privacy and important data from being seen or accessed by others</dd>
                                <dd class="price"><del>$19.95</del>$11.97</dd>
                                <dd class="btnbuy"><a href="https://store.iobit.com/order/checkout.php?PRODS=4637572&QTY=1&AFFILIATE=9996&CART=1&CART=1&COUPON=CNETNY2015" onclick="ga('send', 'event', 'pfbuy', 'buy', '2015NY-CNETPF')">Buy Now</a></dd>
                        </dl>
                </div>
        </div>
        <div class="payment"><img src="<?php echo $pResUrl; ?>img/payment.jpg"></div>
        <div class="user_rev" id="user_rev">
                <div class="content">
                        <h3>User Review</h3>
                        <dl class="show">
                                <dd>
                                        <h4>"I'm really happy I upgraded, it puts my mind at ease and does all the work."</h4>
                                </dd>
                                <dd>"The Advanced-System Care Pro keeps my computer well cleaned. Not only that, their customer service is excellent. They persevered with courteous help until I was able to solve my problem of sending a gift of this ASC service to another person. This is evidence of a good company."</dd>
                        </dl>
                        <dl class="hidden">
                                <dd>
                                        <h4>"I recommend advanced systemcare ultimate as their antivirus/system optimizer."</h4>
                                </dd>
                                <dd>"I have had a past problem of always messing with my computer. Then I got my first copy of Advanced Systemcare. There is no need to mess around any longer. Now that I have antivirus, included in the product, my need for secondary software is none existent. Advanced System Care Ultimate is the new mother load. The big winner! My computer is always up to date and runs like deer. Unlike other products; there has not been a constant stream of conflicts."</dd>
                        </dl>
                        <dl class="hidden">
                                <dd>
                                        <h4>"Driver Booster did it all with just one click of the mouse. 19 drivers were updated in no time at all."</h4>
                                </dd>
                                <dd>"I am delighted with Driver Booster. I have come across these types of program before but they only told me what drivers I needed then left me to search for them myself. Driver Booster did it all with just one click of the mouse. I was very impressed by the whole operation and of course the results. 19 drivers were updated in no time at all."</dd>
                        </dl>
                        <dl class="hidden">
                                <dd>
                                        <h4>"I also had other programs for this purpose installed, but IMF always finds the problems first and blocks them."</h4>
                                </dd>
                                <dd>"Some years ago somebody drew my attention to IObit Malware Fighter. First I was sceptic. But after installing it, it became my favourite anti-malware program. It is very easy to use. Through the years it already has detected several threats and removed it. In cooperation with the other IObit programs, like for example ASC, I have a good PC protection. I now recommend these programs to all my friends and family."</dd>
                        </dl>
                </div>
                <ul class="users">
                        <li class="current"><img src="<?php echo $pResUrl; ?>img/jane_mcclain.jpg" alt="" />Jane McClain</li>
                        <li><img src="<?php echo $pResUrl; ?>img/rod_garnett.jpg" alt="" />Rod Garnett</li>
                        <li><img src="<?php echo $pResUrl; ?>img/vince_lewis.jpg" alt="" />Vince Lewis</li>
                        <li><img src="<?php echo $pResUrl; ?>img/peter_stoffers.jpg" alt="" />Peter Stoffers</li>
                </ul>
        </div>
        <div class="award">
        	<dl>
                	<dt>IObit Software is also awarded by:</dt>
                        <dd><img src="<?php echo $pResUrl; ?>img/award.jpg"></dd>
                </dl>
        </div>
        <p class="copyright">© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
</div>
<?php echo $gJavascript['foot']; ?>
<script type="text/javascript">
    $(function () {
      $("#user_rev .users li").mouseover(function(event) {
        var num = $(this).index();
        console.log(num);
        $("#user_rev .users li").each(function(index, el) {
          $(this).removeClass('current');
        });
        $(this).addClass('current');
        $("#user_rev dl").each(function(index, el) {
          $(this).removeClass('show').addClass('hidden')
        });
        $("#user_rev dl").eq(num).removeClass('hidden').addClass('show');
        //   
      });       
    });
</script> 
</body>
</html>
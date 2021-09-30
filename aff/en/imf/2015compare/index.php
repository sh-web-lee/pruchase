<?php
    error_reporting(E_ERROR);
    define("IObit","IObit");
    if (@!$include){
        $pResUrl = './';
        $pRootUrl = '../../../../';
    }
    include $pRootUrl.'include/common.inc.php';
    if (empty($_GET['aff'])) $_GET['aff'] = '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IObit Malware Fighter Free Vs. PRO</title>
<link href="<?php echo $pResUrl; ?>css/compare.css" type="text/css" rel="stylesheet" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script src="<?php echo $pRootUrl; ?>tpl/js/jquery.superbox-min.js" type="text/javascript" language="javascript"></script>
<link href="<?php echo $pRootUrl; ?>tpl/css/superbox.css" rel="stylesheet" type='text/css'/>
<script type="text/javascript">
$(function(){
    $.superbox();
});
</script>
</head>
<body>
<div id="head">
  <div class="wrapper clearfix"> 
    <a href="http://www.iobit.com/" class="logo_head">IObit</a>
  </div>
</div>
<div id="main">
    <div class="wrapper">
        <h2>IObit Malware Fighter 3 - Most Efficient to Remove the Deepest Malware!</h2>
        <div class="comparison_table">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <thead>
                    <tr style=" border-bottom: none;">
                        <th colspan="2" valign="top">
                            <div class="intro">
                                <p>With IObit unique "Dual-Core" anti-malware engine, IObit Malware Fighter PRO is faster and more efficient to detect the most complex and deepest malware, like spyware, adware, trojans, keyloggers, bots, worms, and hijackers! It will take a proactive way to fully protect your privacy by removing harmful tacking data, and finally keeps your computer secure all the time. </p>
                                <br />
                                <img src="<?php echo $pResUrl; ?>img/promo_awards.png"/>
                                <br />
                                <strong>See what PRO edition can do for you:</strong>
                            </div>
                        </th>
                        <th width="235" valign="top"> 
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="procdetail">
                                <tr>
                                    <td height="30"><p>IObit Malware Fighter Free</p></td>
                                </tr>
                                <tr>
                                    <td height="140"><a rel="superbox[gallery][IObit_Malware_Fighter_Free]" href="<?php echo $pResUrl; ?>img/imffreebig.jpg"><img src="<?php echo $pResUrl; ?>img/imffree.jpg"/></a></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td height="50">Your current edition</td>
                                </tr>
                                <tr>
                                    <td class="version"></td>
                                </tr>
                            </table>
                        </th>
                        <th width="235" valign="top"> 
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="procdetail">
                                <tr>
                                    <td><p>IObit Malware Fighter Pro</p></td>
                                </tr>
                                <tr>
                                    <td height="140"><a rel="superbox[gallery][IObit_Malware_Fighter_Pro]" href="<?php echo $pResUrl; ?>img/imfprobig.jpg"><img src="<?php echo $pResUrl; ?>img/imfpro.jpg"/></a></td>
                                </tr>
                                <tr>
                                    <td class="price"><strong>Only $19.95</strong> Original <em>$39.95</em><br />1 Year Subscription / 1 PC</td>
                                </tr>
                                <tr>
                                    <td height="50" class="buyarea">
                                        <span class="discount"></span>
                                        <a href="http://www.iobit.com/buy.php?product=imf-upgrade3&ref=imfcompare&aff=<?php echo $_GET['aff']; ?>&refs=compare_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfcompare');" class="btn_buy btnfont">Upgrade<br/>
                                        <em>to PRO</em></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="money">
                                    Time-limited Offer
                                        <div id="countdown" class="countdown"></div>
                                        <script type="text/javascript">
                                            function countdown(){
                                                var startTimestamp = 1383553207;
                                                var intervalTimestamp = 4*24*60*60;
                                                var dateObj = new Date();
                                                var time = dateObj.getTime().toString().substring(0,10);
                                                for(i=1;;i++){
                                                    var remainingTime = (startTimestamp+intervalTimestamp*i)-time;
                                                    if (remainingTime > 0) break;
                                                }
                                                var d = Math.floor(remainingTime/(24*60*60));
                                                var H = Math.floor(remainingTime/(60*60)%24);
                                                var i = Math.floor(remainingTime/60%60);
                                                var s = Math.floor(remainingTime%60);
                                                var mi = 999-dateObj.getMilliseconds();
                                                            if (mi < 10){
                                                                 mi = '00'+mi;
                                                            } else if(mi < 100) {
                                                                mi = '0'+mi;
                                                            }
                                                var countdown = '<strong>'+d+'</strong>d: <strong>'+H+'</strong>h: <strong>'+i+'</strong>m: <strong>'+s+'</strong>s <em>'+mi+'</em>';
                                                document.getElementById('countdown').innerHTML = countdown + '<sub>①</sub>';
                                                setTimeout('countdown()', 1);
                                            }
                                            countdown();
                                        </script>
                                    </td>
                                </tr>
                            </table>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_01.png"></td>
                        <td class="virtue">Basic Anti-Malware Function</td>
                        <td class="itemb"><img src="<?php echo $pResUrl; ?>img/bluemark.png"/></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_02.png"></td>
                        <td class="virtue">Full Anti-Malware Ability with Unique "Dual-Core" Engine</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_03.png"></td>
                        <td class="virtue">Basic Real-time Protection against Malicious Behavior</td>
                        <td class="itemb"><img src="<?php echo $pResUrl; ?>img/bluemark.png"/></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_04.png"></td>
                        <td class="virtue">Comprehensive Real-time Protection for Top PC Security</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_05.png"></td>
                        <td class="virtue">Prevent Virus Infection Carried by USB Disk</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_06.png"></td>
                        <td class="virtue">Detect Malicious Process Running in RAM</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_07.png"></td>
                        <td class="virtue">Detect Threats by Analyzing Malicious Action</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_08.png"></td>
                        <td class="virtue">Intelligently Works in Background without Interrupting</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_09.png"></td>
                        <td class="virtue">Automatic Update to the Latest Version</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>     
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_10.png"></td>
                        <td class="virtue">Free 24/7 Technical Support on Demand</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>               
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2" class="awards"></th>
                        <th class="itemb"><span>IObit Malware Fighter Free</span> <em>Your current edition</em></th>
                        <th class="itema"><span>IObit Malware Fighter Pro</span><a href="http://www.iobit.com/buy.php?product=imf-upgrade3&ref=imfcompare&aff=<?php echo $_GET['aff']; ?>&refs=compare_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfcompare');" class="btn_buy btnfont">Upgrade<br/>
                            <em>to PRO</em></a></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="reviews clearfix">
            <div class="media">
                <h3>User Review</h3>
                <h4>"We have not had a problem since using your products."</h4>
                <dl>
                    <dt><img src="<?php echo $pResUrl; ?>img/bob_bassett.jpg"><br>
                        <span>Bob Bassett<br/>
                        2012</span></dt>
                    <dd class="detail">"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with IObit Malware Fighter Pro and Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence. We have not had a problem since using your products."</dl>
            </div>
            <div class="customer">
                <h3>&nbsp;</h3>
                <h4>"I also had other programs for this purpose installed, but IMF always finds the problems first and blocks them."</h4>
                <dl>
                    <dt><img src="<?php echo $pResUrl; ?>img/peter_stoffers.jpg"><br>
                        <span>Peter Stoffers<br/>
                        2012</span></dt>
                    <dd class="detail">"Some years ago somebody drew my attention to IObit Malware Fighter. First I was sceptic. But after installing it, it became my favourite anti-malware program. It is very easy to use. Through the years it already has detected several threats and removed it. In cooperation with the other IObit programs, like for example ASC, I have a good PC protection. I now recommend these programs to all my friends and family."</dd>
                </dl>
            </div>
            <div class="clear"></div>
           
        </div>
        <dl class="buy">
            <dt><img src="<?php echo $pResUrl; ?>img/mony_back.jpg" alt=""/></dt>
            <dd class="price">$19.95<sup>*</sup>
            <dd><a href="http://www.iobit.com/buy.php?product=imf-upgrade3&ref=imfcompare&aff=<?php echo $_GET['aff']; ?>&refs=compare_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfcompare');" class="btn_buy">Upgrade Now</a></dd>
            <dd>100% MONEY BACK GUARANTEE</dd>
        </dl>
    </div>
</div>
<div id="footer">
    <div class="wrapper">
        <div class="footer">
          <p> &copy; 2005 - 2015 IObit. All Rights Reserved &nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/privacy.php" target="_blank">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/legal.php" target="_blank">Legal Notice</a></p>
          <ul>
            <li><a href="http://www.iobit.com/" target="_blank">Home</a></li>
            <li><a href="http://www.iobit.com/products.php" target="_blank">Products</a></li>
            <li><a href="http://www.iobit.com/onlinefeedback.php" target="_blank">Support</a></li>
            <li class="end"><a href="http://www.iobit.com/contact.php" target="_blank">Contact Us</a></li>
          </ul>
        </div>
    </div>
</div>
</body>
</html>
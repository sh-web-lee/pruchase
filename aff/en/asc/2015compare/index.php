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
<title>ASC FREE Vs. PRO - IObit</title>
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
<a name="top"></a>
<body>
<div id="head">
    <div class="wrapper clearfix"> 
        <a href="http://www.iobit.com/" class="logo_head">IObit</a>
    </div>
</div>
<div id="main">
    <div class="wrapper">
        <h2>Advanced SystemCare 8 – Faster, Smarter, Much More Secure and Powerful!</h2>
        <div class="comparison_table">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <thead>
                    <tr style=" border-bottom: none;">
                        <th colspan="2" valign="top">
                            <div class="intro">
                                <p>With improved real-time optimization technology, Advanced SystemCare 8 PRO is your best choice to boost your slow PC and internet up to 300% faster. And the new Protect Module will protect your browser homepages, search engine, online surfing as well as reinforce your system. Whenever you run your computer, your privacy is guaranteed with enhanced cleaning technology.</p>
                                <br />
                                <img src="<?php echo $pResUrl; ?>img/promo_awards.png"/>
                                <br />
                                <strong>See what PRO edition can do for you:</strong>
                            </div>
                        </th>
                        <th width="235" valign="top"> 
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="procdetail">
                                <tr>
                                    <td height="30"><p>Advanced SystemCare Free</p></td>
                                </tr>
                                <tr>
                                    <td height="140"><a rel="superbox[gallery][Advanced_SystemCare_FREE]" href="<?php echo $pResUrl; ?>img/ascfreebig.jpg"><img src="<?php echo $pResUrl; ?>img/ascfree.jpg"/></a></td>
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
                                    <td><p>Advanced SystemCare Pro</p></td>
                                </tr>
                                <tr>
                                    <td height="140"><a rel="superbox[gallery][Advanced_SystemCare_Pro]" href="<?php echo $pResUrl; ?>img/ascprobig.jpg"><img src="<?php echo $pResUrl; ?>img/ascpro.jpg"/></a></td>
                                </tr>
                                <tr>
                                    <td class="price"><strong>Only $14.77</strong> Original <em>$29.99</em><br />1 Year Subscription / 1 PC</td>
                                </tr>
                                <tr>
                                    <td height="50" class="buyarea">
                                        <span class="discount"></span>
                                        <a href="http://www.iobit.com/buy.php?product=asc81pc1477&ref=asc8compare&aff=<?php echo $_GET['aff']; ?>&refs=compare_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asccompare');" class="btn_buy btnfont">Upgrade<br/>
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
                        <td class="virtue">Basic System Clean, Fix and Optimization</td>
                        <td class="itemb"><img src="<?php echo $pResUrl; ?>img/bluemark.png"/></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_02.png"></td>
                        <td class="virtue">Ultimate System Tuneup for Top Performance</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_03.png"></td>
                        <td class="virtue">Up to 300% Internet Speedup with Internet Booster</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_04.png"></td>
                        <td class="virtue">Real-time Optimization with Active Optimize</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_05.png"></td>
                        <td class="virtue">Deep Windows Registry Clean</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_06.png"></td>
                        <td class="virtue">Maximum Hard Drive Performance</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_07.png"></td>
                        <td class="virtue">Basic Protection from Security Threats</td>
                        <td class="itemb"><img src="<?php echo $pResUrl; ?>img/bluemark.png"/></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_08.png"></td>
                        <td class="virtue">Full Detection against Security Threats</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_09.png"></td>
                        <td class="virtue">Safe Online Experience with Surfing Protection</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_10.png"></td>
                        <td class="virtue">Auto Clean for Privacy Security Whenever You Log on</td>
                        <td class="itemb"><img src="<?php echo $pResUrl; ?>img/bluemark.png"/></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_11.png"></td>
                        <td class="virtue">Auto Update to the Latest Version</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_12.png"></td>
                        <td class="virtue">Runs in the Background - Install and Forget It</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_13.png"></td>
                        <td class="virtue">Fantastic New Skins &amp; Themes</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                    <tr>
                        <td class="icons"><img src="<?php echo $pResUrl; ?>img/icon_14.png"></td>
                        <td class="virtue">Free 24/7 Technical Support on demand</td>
                        <td class="itemb"></td>
                        <td class="itema"><img src="<?php echo $pResUrl; ?>img/redmark.png"/></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2" class="awards"></th>
                        <th class="itemb"><span>Advanced SystemCare Free</span><em>Your current edition</em></th>
                        <th class="itema"><span>Advanced SystemCare PRO</span><a href="http://www.iobit.com/buy.php?product=asc81pc1477&ref=asc8compare&aff=<?php echo $_GET['aff']; ?>&refs=compare_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asccompare');" class="btn_buy btnfont">Upgrade<br/>
                            <em>to PRO</em></a></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="reviews clearfix">
            <div class="media">
                <h3>User Review</h3>
                <h4>"The Advanced-System Care Pro keeps my computer well cleaned."</h4>
                <dl>
                    <dt><img src="<?php echo $pResUrl; ?>img/jane_mcclain.jpg"><br>
                        <span>Jane McClain<br/>
                        2012</span></dt>
                    <dd class="detail">"The Advanced-System Care Pro keeps my computer well cleaned. Not only that, their customer service is excellent. They persevered with courteous help until I was able to solve my problem of sending a gift of this ASC service to another person. This is evidence of a good company."
                </dl>
            </div>
            <div class="customer">
                <h3>&nbsp;</h3>
                <h4>"IObit's ASC Pro is the best maintenance application available for the Windows user."</h4>
                <dl>
                    <dt><img src="<?php echo $pResUrl; ?>img/gordon.jpg"><br>
                        <span>Gordon Griswold<br/>
                        2012</span></dt>
                    <dd class="detail">"In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions.  IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers."</dd>
                </dl>
            </div>
            <div class="clear"></div>
            <div class="mlink" id="opentxt"><a onclick="$('#opentxt').hide();$('#hiddenfeed').show();" href="#hidden">See more</a></div>
            <div id="hiddenfeed" style="display:none;">
                <div class="media">
                    <h3>&nbsp;</h3>
                    <h4>"My system has never run better."</h4>
                    <dl>
                        <dt><img src="<?php echo $pResUrl; ?>img/almirr.jpg"><br>
                            <span>Almir Romboli Tavares<br/>
                            2012</span></dt>
                        <dd class="detail">"Advanced System Care Pro has proved to be a trusted tool, automatically improving performance and security in a simple interface and with a great support. I recommend it to all my Family and friends."
                    </dl>
                </div>
                <div class="customer">
                    <h3>&nbsp;</h3>
                    <h4>"All the things I can take care of with only a few clicks."</h4>
                    <dl>
                        <dt><img src="<?php echo $pResUrl; ?>img/bob_bassett.jpg"><br>
                            <span>Bob Bassett<br/>
                            2012</span></dt>
                        <dd class="detail">"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out.  It took hours every week to maintain security and performance.<br />
                            Now, with Malware Fighter Pro and Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence. We have not had a problem since using your products."</dd>
                    </dl>
                </div>
                <div class="clear"></div>
                <div class="mlink"><a href="#top" onclick="$('#opentxt').show();$('#hiddenfeed').hide();">Back to top</a></div>
            </div>
        </div>
        <dl class="buy">
            <dt><img src="<?php echo $pResUrl; ?>img/mony_back.jpg" alt=""/></dt>
            <dd class="price">$14.77<sup>*</sup>
            <dd><a href="http://www.iobit.com/buy.php?product=asc81pc1477&ref=asc8compare&aff=<?php echo $_GET['aff']; ?>&refs=compare_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asccompare');" class="btn_buy">Upgrade Now</a></dd>
            <dd>100% MONEY BACK GUARANTEE</dd>
        </dl>
        <dl class="annotation">
          <dt>Note:</dt>
          <dd>①.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
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
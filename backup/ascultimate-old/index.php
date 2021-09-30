<?php
// [禁止ADN缓存]
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");
//	[定义常量]
	error_reporting(0);
	define("IObit","IObit");
	$pRootUrl = '../';
	include '../include/common.inc.php';

	if (empty($_GET['ref'])) $_GET['ref'] = 'ebook2pc';
	
	$download_url_arr = array(
		'6'=>'http://www.iobit.com/buy.php?product=ascultimate-6', //到期小于6个月 pro1
		'6m'=>'http://www.iobit.com/buy.php?product=ascultimate-6m', //到期大于6个月 pro2
		'other'=>'http://www.iobit.com/buy.php?product=ascultimate'
	);

	if ($_POST['id']){
		if (array_key_exists($_POST['id'],$download_url_arr)){
			echo $download_url_arr[$_POST['id']];
		}
		exit;
	}

	if ($_POST['key']){
		$url = 'http://api.iobit.com/upgrade.php';
		$post_data['code'] = $_POST['key'];
		$post_data['action'] = 'check';
		$post_data['app'] ='asc5';
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 1); 
		$response = curl_exec($ch); 
		curl_close($ch);
		$return = '';
		if ($response == '-1' || $response=='-2' || $response=='3' || $response==''){
			$return = 'other';
		} else {
			if ($response=='1'){
				$return ='6';
			} elseif($response=='2'){
				$return ='6m';
			}
		}
		echo $return;
		exit;
	}

if (isset($_GET['cd']) && array_key_exists($_GET['cd'], $download_url_arr)){
	$download_url = $download_url_arr[$_GET['cd']].'&ref='.$_GET['ref'].'&aff='.$_GET['aff'].$request;
	$money = $_GET['cd'] == '6m' ? '$9.99' : '$12.99';
} else {
	$download_url = $download_url_arr['other'].'&ref='.$_GET['ref'].'&aff='.$_GET['aff'].$request;
	$money ='$29.99';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Get Advanced SystemCare Ultimate 6 with discounted prices</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
<?php echo $gJavascript['public']; ?>
<script type="text/javascript">//AutoGotoLangPage(GetPageName());</script>
<?php echo $gJavascript['head']; ?>

</head>

<body>
<a name="top"></a>
<div id="main">
	
	<div class="head">
    	<div class="savepoint">Save 70% When You Purchase Today</div>
    	<div id="lang"><span id="google_translate_element"></span> </div>
    </div>
    <div class="mbody">
    	
    	<div class="intro">
        	<div class="salebox">
        	  <div class="textconn">
               	  <img src="img/ascultimatebig.png" alt="Advanced SystemCare Ultimate 6"/>
        <h3 class="mb10">Advanced SystemCare Ultimate 6</h3>
                    Based on #1 ranked BitDefender antivirus technology and IObit anti-malware engine, Advanced SystemCare Ultimate 6 provides always-on, automated, and all-in-one protection against all kinds of security threats, system slow down, freeze and crash. It ensures PC security, and maintains maximum computer performance automatically without slowing down your system. Advanced SystemCare Ultimate 6 is compatible with other security software like anti-virus, anti-malware, firewall, etc.
                	<div class="clear"></div>
                 </div>
                 <div class="link">Original <span class="del">$49.99</span> Now $29.99&nbsp;&nbsp;&nbsp;</div>
            	  <div class="clear"></div>
            </div>
            <div class="freebox ml10">
              <div class="textconn">
   	   		    <h3 style="font-size:13px;" class="mb10">Additional Support for 2 PCs</h3>
                    <img src="img/pcbig.png" alt=""/>
                    Buy Advanced SystemCare Ultimate 6 today and we'll provide support for 2 additional PCs with your license for free. So your friends or family can also benefit from a more secure and better performance PC. 
                <div class="clear"></div>
              </div>
 <div class="link">Original <span class="del">$39.99</span> Now FREE&nbsp;&nbsp;&nbsp;</div>
              <div class="clear"></div>
            </div>
            <div class="freebox right">
              <div class="textconn">
       	    <h3 style="font-size:13px;" class="mb10">60 Days Money Back Guarantee</h3>
                    
                    <img src="img/60days-moneyback.png" alt=""/>You're fully protected by our 100% money back guarantee and you WILL see a significant improvement in your PC's security and performance WITHIN 60 DAYS, or we'll send you a full refund. No questions asked.
<div class="clear"></div>
              </div>
<!--                <div class="link">Original <span class="del">$19.99</span>&nbsp;&nbsp;&nbsp;<a href="#cart">Get it free>></a></div>
-->            	<div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="pricebox">
        	<a name="cart"></a>
        	<h2>Your Cart</h2>
            <table cellpadding="0" cellspacing="0" width="100%" class="pricetab">
            	<tr class="grybg">
                	<td width="50" class="tlborder"></td>
                    <td width="270" class="topborder"></td>
                    <td class="topborder"></td>
                    <td width="120" class="topborder bf16 center">Original</td>
                    <td width="120" class="topborder rborder bf16 center">Now</td>
                </tr>
                <tr>
               	  <td height="50" class="tlborder center"><img src="img/ascultimates.png" alt="Advanced SystemCare Ultimate 6" /></td>
                  <td class="topborder bf14">Advanced SystemCare Ultimate 6</td>
                  <td class="topborder f11">Enjoy confident security without system slowdown.<br /><a href="<?php echo $download_url;?>" class="order_url">Get it now>></a></td>
                  <td class="tlborder bf16 center"><span class="price">$49.99<em></em></span></td>
                  <td class="tlborder rborder bf16 center red money" id="money"><?php echo $money;?></td>
                </tr>
                <tr>
                  <td height="50" class="tlborder  center"><img src="img/pcs.png" alt="Advancd SystemCare5" /></td>
                  <td class="topborder bf14">Additional Support for 2 PCs</td>
                  <td class="topborder  f11">Get confident security and ultimate performance for 2 additional PCs with your license code.<a href="<?php echo $download_url;?>" class="order_url">Get it now>></a></td>
                  <td class="tlborder bf16 center"><span class="price">$39.99<em></em></span></td>
                  <td class="tlborder rborder bf16 center red" id="money2">FREE</td>
                </tr>
                <tr>
                  <td height="35" class="topborder center">&nbsp;</td>
                  <td class="topborder bf14 myfont" colspan="2" align="right">Save 70% When You Purchase Today!(1 Year Subscription/3PCs)&nbsp;&nbsp;&nbsp;</td>
                  <td class="tlborder bborder bf16 center grybg"><span class="price">$89.98<em></em></span></td>
                  <td class="tlborder bborder rborder bf16 center red grybg money" id="money3"><?php echo $money;?></td>
                </tr>
          </table>
        </div>
        <div class="checkout">
          <div class="checksn">
          	<span style="display:none;">Dear PRO user, please enjoy your sole discount.</span>
          	<ul>
            	<li><strong>Are you an Advanced SystemCare PRO user?</strong> Please enter your license code to redeem a bigger discount!</li>
                <li><input type="text" id="key" class="sntext" /><input type="button" onclick="getCheckKey();" value="Update Cart" class="clickbtn" /></li>
                <li class="errormsg"></li>
            </ul>
          </div>
          <div class="btn">
           	  <a href="<?php echo $download_url;?>" title="CHECKOUT" id="order_url" class="checkbtn order_url">Checkout >></a>
              <span>100% money back guarantee</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="awards">
        	<a onclick="window.open(this.href,'verysignwin', 'toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=no,resizable=no,width=550,height=566');return false;" href="https://seal.verisign.com/splash?form_file=fdf/splash.fdf&dn=SECURE.AVANGATE.COM&lang=en" class="vs_secured"></a>
            <a href="https://www.scanalert.com/RatingVerify?ref=secure.avangate.com" target="_blank" oncontextmenu="alert('Copying Prohibited by Law - HACKER SAFE is a Trademark of ScanAlert'); return false;" alt="HACKER SAFE certified sites prevent over 99.9% of hacker crime." src="//images.scanalert.com/meter/secure.avangate.com/12.gif" class="ma_secure"></a>
        </div>
        <div class="clear"></div>
        <div class="tab">
        	<h4><a style="cursor:pointer; color:#ff6600; text-decoration:underline;" onclick="$('#hidetab').show();">Why Choose Advanced SystemCare Ultimate 6?</a></h4>
            <div id="hidetab" style="display:none;">
            	<dl class="comtable">
                	<dt><span>Better Protection</span>, and <span>No Performance Lag</span> Anymore. See Comparison below</dt>
                    <dd><img src="img/AntiVirus_full.png"  /></dd>
                </dl>
                <dl class="comlist">
                	<dt>Unrivaled Detection Rate and Maximum Protection</dt>
                    <dd>One click to clean hidden and stubborn Viruses, Trojans, worms, spyware, adware and various malware. Advanced SystemCare Ultimate 6 also provides an always-on, automated, and proactive protection against all kinds of Internet security threats, with rapid virus database updating.</dd>
                    <dt>Enjoy Confident Security without System Slowdown </dt>
                    <dd>Your system runs at its top speed without any performance lag, due to our industry-leading Internet security technology.</dd>
                    <dt>Safe Surf, Search, Download and Share with Confidence</dt>
                    <dd>Proactive Virus Control technology monitors processes behavior in real-time, scans files shared with email and blocks possible threats. Unmatched detection rate assures you a safer environment while using your PC.</dd>
                    <dt>Get Highly-tuned Performance and Enjoy the New PC Feeling</dt>
                    <dd>Already proven powerful PC tune-up ability unleashes the full power of your PC. With Real-time optimization and ActiveBoost feature, system resources are intelligently managed to ensure you a super-fast PC.</dd>
                </dl>
            </div>
        </div>
  </div>
    <div class="footer"></div>
</div>
<script type="text/javascript">
        function getCheckKey(){
          var key = $('#key').val();
            $.ajax({
                type : "post",              
                url : 'index.php',
                timeout: 5000,              
                async : false,
                dataType : 'text',
                data : { 'key':key },
                error : function() {  
                },
                success : function(response) {
                    getUrl(response);
                    if(response=='6'||response=='6m'){
                      $('.errormsg').text('Dear PRO user, please enjoy your sole discount.');
                      if(response=='6') $('.money').text('$12.99');
                      if(response=='6m') $('.money').text('$9.99');
                    }else
                      $('.errormsg').text('Your license is not valid. Please confirm and type it again.');   
                }
            });       
        }
        function getUrl(id){
            $.ajax({
                type : "post",              
                url : 'index.php',
                timeout: 5000,              
                async : false,
                dataType : 'text',
                data : { 'id':id },
                error : function() {  
                },
                success : function(response) {  
                    $('.order_url').attr("href",response+"&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'].$request; ?>");
                }
            });       
        }
    </script>
<?php echo $gJavascript['foot']; ?>


</body>
</html>

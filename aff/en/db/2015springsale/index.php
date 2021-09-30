<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../../';
	}
	include $pRootUrl.'include/common.inc.php';
	#if (empty($_GET['ref'])) $_GET['ref'] = '2015springasc';
	$_GET['ref'] = '2015springasc';
	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}

  if($_GET['st']==11){
    $ststr = '-st11';   
  }else{
    $ststr = '';
  }
	
	$buyNum = ceil(microtime_float()*1000/20000) - 69041325;
	
	$packsNum = ceil(microtime_float()*2000/20000);
  	$packsNum = 360-($packsNum%360);
  	if ($_GET['action'] == 'getPacks'){
    	echo $packsNum;
   		exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>Save 80% on Driver Booster 2 PRO & Get Super Gifts for FREE!</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="<?php echo $pResUrl; ?>css/css.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function decreasingPacks(){
      $.ajax({
        type: "GET",
        url: "index.php",
        data: "action=getPacks&r="+Math.random(),
        success: function(packs){
          $('#packs').html(packs);
          setTimeout('decreasingPacks()', 10000);
        }
      });
    }
    setTimeout('decreasingPacks()', 10000);
  </script>
</head>
<body>
<div class="main">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="warp clearfix">    
    <!--banner-->
    <div class="gift-message" id="gift">
        <h2>SPRING</h2>
        <h2>BIG SALE</h2>
        <dl class="gift-dl">
            <dt><img src="<?php echo $pResUrl; ?>images/guarantee.png"></dt>
            <dd style="font-size:14px;">Activate DB PRO for 3 PCs, and get Smart Defrag PRO, Picture Collage Maker Standard and Windows Tweaks Guide for FREE! </dd>
        </dl>
        <p>Today: <b>$24.95</b>&nbsp;<del>$134.73</del></p>
        <a class="btn" href="http://www.iobit.com/buy.php?product=dbsdebookpcm&ref=db2014dec<?php echo $ststr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', '2015springsale-en-aff')"><img src="<?php echo $pResUrl; ?>images/shop.png" class="shop">Activate Now</a>
        <p><?php echo $buyNum;?> &nbsp; &nbsp; people activated</p>
       	<p id="counttime"><span>23</span>:<span>49</span>:<span>39</span><em>112</em> <sub>1*</sub></p>
    </div>
</div>
<!--mian-->
<div id="mian" class="warp">
    <!--product-->
    <div class="product">
        <!--introduce-->
          <h2>Enjoy More Stable PC Performance with Up-to-date Drivers! <span><i id="packs"><?php echo $packsNum;?></i> Packs Left Today!</span></h2>
          <dl class="introduce-content">
              <dt>
                  <img src="<?php echo $pResUrl; ?>images/product_img.jpg">
              </dt>
              <dd>
                  <h2>What you can get by <br><font class="cl">activating</font> DB PRO edition:</h2>
                  <ul class="introduce-list">
                      <li>Support More Hardware Devices 2*</li>
                      <li>njoy Priority to Update Outdated Drivers</li>
                      <li>Fix System Issues Caused By Outdated Drivers</li>
                      <li>Backup Drivers for Safe Restore</li>
                  </ul>
                  <a class="more" onclick="scrollto($('#compare'))">See more about PRO edition >></a>
              </dd>
          </dl>
          <div class="clear"></div>
        <!--introduce list-->
        <ul class="introduce-img">
            <li>
                <img src="<?php echo $pResUrl; ?>images/introduce_list.jpg">
                <dl>
                    <dt><b>$0</b> <del>$19.99</del></dt>
                    <dd>Smart Defrag 3 PRO</dd>
                    <dd>Get the Maximum Hard Drive Performance!</dd>
                </dl>
            </li>
            <li>
                <img src="<?php echo $pResUrl; ?>images/introduce_list1.jpg">
                <dl>
                    <dt><b>$0</b> <del>$29.90</del></dt>
                    <dd>Picture Collage Maker Standard</dd>
                    <dd>The Most Easy-to-use Photo Collage Software!!</dd>
                </dl>
            </li>                
            <li>
                <img src="<?php echo $pResUrl; ?>images/introduce_list2.jpg">
                <dl>
                    <dt><b>$0</b> <del>$9.99</del></dt>
                    <dd>Windows Tweaks Guide</dd>
                    <dd>This complete, step-by-step system optimization guide is given to you for FREE</dd>
                </dl>
            </li>                
        </ul>
    </div>
    <!---->
     <div class="sales">
        <p>Get all these four powerful tools today with the price of one! <br>Offer limited for this Spring only!</p>
        <p>Today: <b>$24.98</b> <del>$134.73</del></p>
        <a  class="btn" href="http://www.iobit.com/buy.php?product=dbsdebookpcm&ref=db2014dec<?php echo $ststr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', '2015springsale-en-aff')"><img src="<?php echo $pResUrl; ?>images/shop.png" class="shop">Act now and SAVE 80%!</a>
        <p id="counttime1"><span>23</span>:<span>49</span>:<span>39</span><em>112</em> <sub>1*</sub></p>
    </div>
    <div class="reviews">
        <div class="media_rev">
            <h3>Media Review</h3>
            <dl>
              <dt><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="" /></dt>
              <dd>"Driver Booster, from IObit, promises an easier solution to download and update driver with its most advanced technology by acting as an all-in-one command center. All of your drivers are listed in the app’s interface, making it a super easy process to download and update drivers. Downloading and installing drivers with this software is a cinch and often takes just minutes (or less)." <span>- MakeUseOf</span></dd>
            </dl>				
        </div>
        <div class="user_rev" id="user_rev">
            <div class="content">
              <h3>User Review</h3>
              <dl class="show">
                <dd><h4>"Driver Booster did it all with just one click of the mouse. 19 drivers were updated in no time at all."</h4></dd>
                <dd>"I am delighted with Driver Booster. I have come across these types of program before but they only told me what drivers I needed then left me to search for them myself. Driver Booster did it all with just one click of the mouse. I was very impressed by the whole operation and of course the results. 19 drivers were updated in no time at all."</dd>
              </dl>
              <dl class="hidden">
                <dd><h4>"I had 10 drivers that were out of date and the Driver Booster updated them all perfectly."</h4></dd>
                <dd>"WOW! This is a great program. I upgraded my laptop from dual core to a quad and was having trouble updating some of the new hardware that I have installed. I had 10 drivers that were out of date and the Driver Booster updated them all perfectly. My laptop is completely up to date now and running smoothly. GOOD JOB.......I will recommend this program to my family and friends."</dd>
              </dl>
              <dl class="hidden">
                <dd><h4>"It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"</h4></dd>
                <dd>"This is one of the best driver updater programs around. Microsoft has even led me astray by suggesting updates that wouldn’t work with my machine. This program knew what updates I needed without any conflicts. It worked perfectly. Easy to use, informative, and intuitive. This one will stay in my toolbox forever... Great job!"</dd>
              </dl>
              <dl class="hidden">
                <dd><h4>Driver Booster found I needed two driver updates, while the other driver updater failed to find them.</h4></dd>
                <dd>I have recently installed Driver Booster, and found it like all other IObit products, brilliant. I already had a driver updater installed, but yours found I needed two driver updates, while the other driver updater failed to find them. It downloaded the required updates in no time at all. I am so pleased with this product.</dd>
              </dl>
            </div>
            <ul class="users">
	          <li class="current"><img src="<?php echo $pResUrl; ?>images/jane-mcclain.jpg" alt="" />Vince Lewis <br />2013</li>
	          <li><img src="<?php echo $pResUrl; ?>images/bob-bassett.jpg" alt="" />Mike Goggans<br />2013</li>
	          <li><img src="<?php echo $pResUrl; ?>images/almirr.jpg" alt="" />Wayne Bowler<br />2013</li>
	          <li><img src="<?php echo $pResUrl; ?>images/gordon.jpg" alt="" />Leslie Hutton <br />2013</li>
            </ul>
        </div>
    </div>
    <div class="comparison_table" id="compare">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <thead>
              <tr>
                <th colspan="2" style="text-align:left; line-height: 106px;">See what PRO edition can do for you:</th>
                <th class="itemb"><span>Driver Booster Free</span></th>
                <th class="itema">
                  <span>Driver Booster Pro</span>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=dbsdebookpcm&ref=db2014dec<?php echo $ststr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', '2015springsale-en-aff')"><img src="<?php echo $pResUrl; ?>images/shop.png" class="shop">Activate Now</a>
                  
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
                <td class="virtue">Automatically Identify Outdated Drivers</td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greenmark.png"/></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"/></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
                <td class="virtue">Download and Update Outdated Drivers with One Click</td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greenmark.png"/></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"/></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
                <td class="virtue">Unlock Driver Update Speed Limit</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"/></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
                <td class="virtue">Specialized Driver Tweaking for Better Gaming Experience</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"/></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
                <td class="virtue">Support More Comprehensive Hardware Devices</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"/></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
                <td class="virtue">Enjoy Priority to Update Outdated Drivers Promptly</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"/></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
                <td class="virtue">Backup Drivers for Safe Restore</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"/></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
                <td class="virtue">Enhance Hardware Functionality for Better Performance</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"/></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
                <td class="virtue">Automatically Update to the Latest Version</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"/></td>
              </tr>
              <tr>
                <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
                <td class="virtue">Free 24/7 Technical Support on Demand</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"/></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="2"></th>
                <th class="itemb"> <span>Driver Booster Free</span> <br />
                  Your current edition </th>
                <th class="itema"><span>Driver Booster PRO</span><br />
                   <a class="btn" href="http://www.iobit.com/buy.php?product=dbsdebookpcm&ref=db2014dec<?php echo $ststr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db" style="margin-top:10px;" onclick="ga('send', 'event', 'dbbuy', 'buy', '2015springsale-en-aff')"><img src="<?php echo $pResUrl; ?>images/shop.png" class="shop">Activate Now</a>
                </th>
              </tr>
            </tfoot>
        </table>
    </div>
    <dl class="annotation">
        <dt>Note:</dt>
        <dd>①.Such promotional programs are subject to change without notice, from time to time in our sole discretion. </dd>
      </dl>
    <p class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
</div>
<div class="floatlayer" id="floatlayer">
	<div class="warp">
      <dl class="left">
          <dt>Save <span>80%</span> Enjoy Priority to Update Drivers Promptly!</dt>
          <dd><em><?php echo $buyNum;?></em> people activated</dd>
          <dd id="counttime2" class="countdown"><span>02</span>:<span>02</span>:<span>02</span><em>222</em><sub>1*</sub></dd>
        </dl>
        <dl class="checkarea">
          <dt>Today: <span>$24.95</span> <del>Original: $ 134.73</del></dt>
          <dd><a class="btn" href="http://www.iobit.com/buy.php?product=dbsdebookpcm&ref=db2014dec<?php echo $ststr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', '2015springsale-en-aff')"><img src="<?php echo $pResUrl; ?>images/shop.png" class="shop">Activate Now</a></dd>
        </dl>
    </div>
  </div>
<div class="pop-up">
    <div class="pop-main">
        <div class="pop-box">
            <h2>Note:</h2>
            <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
            <p>You will be redirected to the latest IObit promotion page automatically.</p>
        </div>
    </div>
</div></div>
</body>
</html>
<script>		
	$("#user_rev .users li").mouseover(function(event) {
      var num = $(this).index();
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
	
    function scrollto(target) {
			var targetHeight =  target.offset().top - 140;
			$('html,body').stop(true,true).animate({scrollTop: targetHeight}, "slow");
		}
		$(document).ready(function() {
			 $(window).on('scroll', function () {
          var scrollHeight = $("#gift .btn").offset().top;
          if ($(window).scrollTop() > scrollHeight) {
              $('#floatlayer').addClass('on');
          } else {
              $('#floatlayer').removeClass('on');
          }
	      }); 
		});
		 
	function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			document.getElementById('counttime').innerHTML = '<span>'+h+'</span>:<span>'+i+'</span>:<span>'+s+'</span><em>'+mi+'</em> <sub>1*</sub>';
			document.getElementById('counttime1').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em> <sub style="font-size:12px;">1*</sub>';
			document.getElementById('counttime2').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em> <sub>1*</sub>';
			setTimeout('cycleCountdown()', 1);
		}
	cycleCountdown();
    setTimeout('window.location.href="https://purchase.iobit.com/aff/en/db/2017general/index.php'+location.search+'"',5000);
</script>

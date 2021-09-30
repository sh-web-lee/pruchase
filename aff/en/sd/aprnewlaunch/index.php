<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
if (empty($_GET['ref'])) $_GET['ref'] = 'enaff_sd5_2016aprnewlaunch';

$buyHref="https://www.iobit.com/buy.php?product=sd53pcsamc_aff&ref=".$_GET['ref']."&aff=".$_GET['aff']."&refs=purchase_sd";
if($_GET['ref']=='cb'){
	$buyHref="https://www.cleverbridge.com/289/?scope=checkout&cart=178672&pricerule=sdamc1999";
}

$packsNum=empty($_COOKIE['pc'])?120:$_COOKIE['pc'];
if ($_GET['action'] == 'getPacks') {
    $randNum=rand(1,100);
    if($randNum%4==0){
        $packsNum-=2;
    }else
        $packsNum--;
    if($packsNum<=0){
        $packsNum=120;
    }
    setcookie('pc',$packsNum,time()+3600*720);
	echo $packsNum;
	exit ;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Save up to 70% on SD PRO, speed up your PC and optimize hard drive performance!</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
		<script type="text/javascript">
		function decreasingPacks() {
		$.ajax({
			type: "GET",
				url: "index.php",
				data: "action=getPacks&r=" + Math.random(),
				success: function(packs) {
					$('.packs').html(packs);
					setTimeout('decreasingPacks()', 75000);
				}
			});
		}
		setTimeout('decreasingPacks()', 75000);
		</script>
	</head>
	<body>
    <div class="main">
	<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
		<!-- header -->
		<div class="header">
			<div class="wrapper">
				<a href="http://www.iobit.com" class="logo" target="_blank">iobit</a>
				<h1>up to 70% off Smart Defrag 5 New Launch Special Offer</h1>
				<ul id="counttime1">
					<li>00 <span>hr:</span></li>
					<li>00 <span>m:</span></li>
					<li>00 <span>s:</span></li>
					<li>000 <sup>*</sup></li>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="content">
				<div class="left">
					<img src="<?php echo $pResUrl; ?>images/sd-box.png" alt="">
				</div>
				<div class="arrow"></div>
				<div class="right">
					<dl class="message">
						<dt><strong>Smart Defrag 5 PRO <span>(1 Year / 1 PC)</span></strong> <b>$19.99</b> <del>$29.99</del></dt>
						<dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>SD 5 PRO Extra 2 PCs Supported</strong> <img src="<?php echo $pResUrl; ?>images/free.png" alt=""> <del>$19.99</del></dd>
						<dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>AMC Security PRO</strong> <img src="<?php echo $pResUrl; ?>images/free.png" alt=""> <del>$19.99</del></dd>
					</dl>
					<dl class="buy">
						<dt><strong>$0.55</strong>/month per PC</dt>
						<dd>
              <a class="buybtn" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'affensd2016aprnewlaunch');">
                Activate Now
              </a>
            </dd>
						<dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> Only <strong class="packs"><?php echo $packsNum; ?></strong> Gift Packs Left</dd>
					</dl>
				</div>
			</div>

		</div>
		<!-- header end -->
		<div class="wrapper accepted">
			<img src="<?php echo $pResUrl; ?>images/accepted.png" alt="">
		</div>
		<div class="wrapper clnet">
			<h2>Company Awards</h2>
			<img src="<?php echo $pResUrl; ?>images/clnet.png" alt="">
		</div>
		<div class="wrapper sd-content clearfix">
			<h2>Maximize Hard Drive Performance & Speed Up Your PC with SD 5 PRO</h2>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons001.png" alt=""></dt>
				<dd><strong>New Ultra-fast Engine</strong> <span>Defragment files more efficiently and thoroughly in less time</span></dd>
			</dl>
			<dl class="right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons002.png" alt=""></dt>
				<dd><strong>Up to 200% Faster *</strong> <span>Accelerate file access speed & game launching speed with Large File Defrag</span></dd>
			</dl>
			<div class="clear"></div>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons003.png" alt=""></dt>
				<dd><strong>Auto Smart Defrag</strong> <span>Automatically and intelligently defragment selected files and disks without interruption</span></dd>
			</dl>
			<dl class="right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons004.png" alt=""></dt>
				<dd><strong>Quicker PC Startup</strong> <span>Enjoy quicker PC startup and top system running speed with Boot Time Defrag</span></dd>
			</dl>
			<div class="clear"></div>
			<img src="<?php echo $pResUrl; ?>images/sd-content.png" alt="" class="img-sd-content">
			<p><a href="javascript:void(0);" onclick="goTaget($('#compare'))">Learn more about PRO edition ></a></p>
		</div>
		<div class="wrapper between-buy clearfix">
			<div class="left">
				<dl class="sd">
					<dt><img src="<?php echo $pResUrl; ?>images/big-sd.png" alt=""></dt>
					<dd><strong>$19.99</strong> <del>$29.99</del></dd>
				</dl>
				<dl class="free">
					<dt><img src="<?php echo $pResUrl; ?>images/two-sd.png" alt=""></dt>
					<dd>Extra 2 PCs supported</dd>
					<dd><span class="see-more">See More</span></dd>
				</dl>
				<dl class="free amc">
					<dt><img src="<?php echo $pResUrl; ?>images/amc-free.png" alt=""></dt>
					<dd>Android devices against viruses</dd>
					<dd><span class="see-more">See More</span></dd>
				</dl>
			</div>
			<div class="pop-content hidden">
				<span class="close"></span>
				<dl>
					<dt>Extra 2 PCs Supported</dt>
					<dd>Smart Defrag 5 PRO license supports additional 2 PCs so you can share it with your family & friends!</dd>
					<dt>AMC Security PRO <span>Multi Devices</span></dt>
					<dd class="check">Speed your mobile up to 200%</dd>
					<dd class="check">Real-time protection from mobile threats</dd>
					<dd class="check">Totally protect your private data</dd>
					<dd class="check">Pioneer in mobile payment & never worry about fraud again    </dd>
				</dl>
			</div>
			<dl class="right buy">
				<dt><strong>$0.55</strong>/month per PC</dt>
				<dd>
          <a class="buybtn" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'affensd2016aprnewlaunch');">
            Activate Now
          </a>
        </dd>
				<dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> Only <strong class="packs"><?php echo $packsNum; ?></strong> Gift Packs Left</dd>
			</dl>
		</div>
		<div class="review">
		  <div class="wrapper">
		    <div class="media_rev">
		      <h3>Media Review</h3>
		      <dl>
		        <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg" alt=""></dt>
		        <dd><strong>"IObit Smart Defrag is the best defragger we've tried yet."</strong></dd>
		        <dd>"IObit Smart Defrag optimizes your PC to take full advantage of SSD performance while defragmenting your hard disks. Its SSD Trim tool automatically enables system tweaks that typically require experience to apply. Smart Defrag's updates include a new defrag engine, specialized Game Defrag, a cool new look, and many more language options (35 and counting)."<span>- Cnet</span></dd>
		      </dl>
		    </div>
		    <div class="user_rev" id="user_rev">
		      <div class="content">
		        <h3>User Review</h3>
		        <dl class="show">
		          <dd><h4>"Smart defrag is a very well behaved disk defrag software."</h4></dd>
		          <dd>"Smart defrag is a very well behaved disk defrag software, operating in the background whenever computer is idle so that you hardly notice it. As a result: drives are permanently defragmented allowing rapid access and less wear and tear. Smart defrag is the best Free disk defragmenter I've ever used and I'll definitely recommend it to my family and friends!"</dd>
		        </dl>
		        <dl>
		          <dd><h4>"It is easy to use, must have utility, for your hard disc or SSD."</h4></dd>
		          <dd>"I run a combination of RAID 0 SSDs and RAID 0 HDDs and use Smart Defrag Pro to analyse, defrag and keep my drives running at peak performance. As with all IObit software it is easy to install, use and very reliable. Just set it up and forget it. Smart Defrag has a very small memory foot print so it won't slow down your system. Definitely recommended!"</dd>
		        </dl>
		        <dl>
		          <dd><h4>"Since using this fantastic software my desktop and my laptop are fast and save."</h4></dd>
		          <dd>"I am a user of Smart defrag for many years. Since using this fantastic software my desktop and my laptop are fast and save. Together with advance system care ultimate you have a complete tool for keeping you system up to date, fast and secure.Using it every day without need to wait (pc closes itself) you keep your system in top condition even if you have no technical background!"</dd>
		        </dl>
		      </div>
		      <ul class="users">
		        <li class="active"><img src="<?php echo $pResUrl; ?>images/amnon.jpg" alt="">Amnon<br>2014</li>
		        <li class=""><img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">Edward Lee Ah Yen<br>2014</li>
		        <li class=""><img src="<?php echo $pResUrl; ?>images/hans.jpg" alt="">Hans<br>2014</li>
		      </ul>
		    </div>
		  </div>
		</div>
		<div class="comparison_table wrapper" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th colspan="2"><b>See what PRO edition can do for you:</b></th>
          <th class="itemb">Smart Defrag FREE</th>
          <th class="itema"><span>Smart Defrag PRO <br>+ Free Gift</span>
            <a class="tbbuybtn" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'affensd2016aprnewlaunch');">
              Activate Now
            </a>
						<span class="last"><strong>$19.99</strong> <del>$69.97</del></span>
           </th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons01.jpg"></td>
          <td class="virtue">Basic Hard Drive Defragmentation and Optimization</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons02.jpg"></td>
          <td class="virtue">Up to 200% Faster File Access Speed</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons03.jpg"></td>
          <td class="virtue">Boot Time Defragment for Quicker PC Startup</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons04.jpg"></td>
          <td class="virtue">Automatically & Intelligently Defragment Fragmented Files</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons05.jpg"></td>
          <td class="virtue">Customizing Defrag Mode & Disks/Files to Be Defragged</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons06.jpg"></td>
          <td class="virtue">DMA Applied for Better, Faster & More Stable Data Transfer</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons07.jpg"></td>
          <td class="virtue">No Interruption at Working or Gaming with Silent Mode</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons08.jpg"></td>
          <td class="virtue">Top Gaming Experience with Game Optimize</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons09.jpg"></td>
          <td class="virtue">Scheduled Task Supported for Idle Defrag</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons10.jpg"></td>
          <td class="virtue"> Auto Update to the Latest Version</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons11.jpg"></td>
          <td class="virtue">Free 24/7 Technical Support on Demand</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        </tbody>
        <tfoot>
	        <tr>
	          <th colspan="2"></th>
	          <th class="itemb">Smart Defrag FREE</th>
	          <th class="itema"><span>Smart Defrag PRO <br>+ Free Gift</span>
	           </th>
	        </tr>
        </tfoot>
      </table>
  </div>
  <div class="fy-banner wrapper">
  	<img src="<?php echo $pResUrl; ?>images/bottom-sd-content.png" alt="">
  	<dl>
  		<dd>
  			<span><img src="<?php echo $pResUrl; ?>images/spped.png" alt="">Speed up your PC with smart defragmentation</span>
  			<span><img src="<?php echo $pResUrl; ?>images/imporve.png" alt="">Improve PC performance with optimized hard drive</span>
  		</dd>
  		<dt>
        <a class="buybtn" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'sdbuy', 'buy', 'affensd2016aprnewlaunch');">
          Activate Now
        </a>
  		</dt>
  	</dl>
  </div>
  <dl class="annotation wrapper">
  	<dt>Note:</dt>
  	<dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
  	<dd>*.Data may vary based on different system or computer.</dd>
  </dl>
		<!-- footer -->
		<div class="footer">
			<p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
		<!-- footer end -->
        <div class="pop-up">
            <div class="pop-main">
                <div class="pop-box">
                    <h2>Note:</h2>
                    <p>Thank you for your visiting and your interest in IObit products! This Special Offer is over now.</p>
                    <p>You will be redirected to the latest IObit promotion page automatically.</p>
                </div>
            </div>
        </div>
		<script>
			$(document).ready(function() {
					$("#user_rev .users li").mouseover(function(event) {
		      var num = $(this).index();
		      $("#user_rev .users li").eq(num).addClass('active').siblings().removeClass('active');
		      $("#user_rev dl").eq(num).addClass('show').siblings().removeClass('show');
				});
				cycleCountdown();
			});
			$(".see-more").click(function(){
	      $(".pop-content").addClass("show").removeClass("hidden");
    	});
    	$(".close").click(function(){
	      $(".pop-content").addClass("hidden").removeClass("show");
    	});
		  function goTaget(target) {
		    var Theigth = target.offset().top;
		    $("html, body").animate({scrollTop: Theigth}, 'slow');
		  }
			function cycleCountdown(){
				var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
				var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
				d = MApp(2.2).packages.zeroize(datetime[0], 2);
				h = MApp(2.2).packages.zeroize(datetime[1], 2);
				i = MApp(2.2).packages.zeroize(datetime[2], 2);
				s = MApp(2.2).packages.zeroize(datetime[3], 2);
				mi = MApp(2.2).packages.zeroize(datetime[4], 3);
				document.getElementById('counttime1').innerHTML = '<li>'+h+'<span>hr : </span></li><li>'+i+'<span>m : </span></li><li>'+s+'<span>s : </span></li> <li>'+mi+'<sup>*</sup></li>';
				setTimeout('cycleCountdown()', 1);
			}
            setTimeout('window.location.href="https://purchase.iobit.com/aff/en/sd/anniversarysale/index.php'+location.search+'"',5000);
		</script>
    </div>
    </body>
</html>
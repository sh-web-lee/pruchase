<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (!empty($_GET['ver'])) {
    $ver_arr = explode('.', $_GET['ver']);
    $ver = 'v'.$ver_arr[0] . $ver_arr[1];
}else{
    $ver = 'unknown';
}
$refStr = '-' . ((strlen($_GET['to']) == 0) ? 'unknown' : $_GET['to']);
$refStr .= '-' . $ver;
$refStr .= '-' . ((strlen($_GET['user']) == 0) ? 'unknown' : 'u'.$_GET['user']);
$refStr .= '-' . ((strlen($_GET['insday']) == 0) ? 'unknown' : 'i'.$_GET['insday']);
$refStr .= '-' . ((strlen($_GET['insur']) == 0) ? 'unknown' : $_GET['insur']);

$data = json_decode(base64_decode(urldecode($_GET['data'])),true)['iu11pre'];
$sizemb = $data['filesize'] / (1024 * 1024);
$sizegb = $data['filesize'] / (1024 * 1024 * 1024);
$size = number_format(round(($sizegb >= 1) ? $sizegb : $sizemb, 2), 2);
$sizeStr = ($sizegb >= 1) ? ' GB' : ' MB';
function str_check($str){
    return empty($str) ? '' : $str;
}

if ($_GET['action'] == 'getpack') {
    $date = $_GET['d'];
    $c_name = 'fansaleb_p' . $date;
    $c_name_t='fansaleb_t' . $date;
    if ($_COOKIE[$c_name]===null) {
        $totalNum=$packsNum=rand(85,99);
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t,$totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum'=>$packsNum));
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>70% Off on IObit Uninstaller PRO + Free Gifts right now! -lObit</title>
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend Deca">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
	</head>
	<body>
		<div class="home">
			<!-- banner -->
			<section class="banner animated">
				<div class="container">
					<a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
						<img src="<?php echo getStaticUrl('images/logo.png')?>" alt="logo" class="ani_up1">
					</a>
					<h1 class="title ani_up2"></h1>
					<!-- Word and div -->
					<div class="banner-data">
						<p class="b-word ani_up3">Catch the Lowest Price and Limited Offer on the Best Uninstalling Tool !</p>
						<div class="b-gift">
							<div class="gift-box">
								<div class="gift-free">
									<img src="<?php echo getStaticUrl('images/banner-gift.png')?>">
									<!-- num decrease -->
									<span id="gift-num" class="reduce" style="opacity: 0;">-1</span>
								</div>								
							</div>
							<p class="activate">Activate any plan below to get the free gifts. Hurry, limited quantity!</p>
							<!-- total num -->
							<div class="total-num" id="first">
								<ul  id="topNum" class="giftNum">
									<li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                    <li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                    <li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                    <li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                </ul>
							</div>
							
						</div>
					    <div class="soldout1">
					    	<img src="<?php echo getStaticUrl('images/soldout1.png')?>">
							<img src="<?php echo getStaticUrl('images/soldout2.png')?>" class="soldout2">
					    </div>
					</div>
				   <!-- two box-->
				   <div class="banner-box">
					   <ul class="ani_up5">
					   	<li class="box-left">
							<p class="most ani_up5">Most Valuable Deal</p>
							<h2 class="ani_up6">
								<span></span> &nbsp;
								Family Plan 
								&nbsp;<span></span>
							</h2>
							<p class="year ani_up6">1 Year / 3 PCs</p>
							<div class="iu ani_up7">
								<img src="<?php echo getStaticUrl('images/box-iu.png')?>" >
								<div class="iu-price">							
									<p class="ani_up8">
										<span>$</span>
										<strong>16.</strong>
										<em>77</em>
									</p>
									<del class="ani_up9">$59.93</del>
								</div>
								<div class="white"></div>
							</div>
							<!-- button -->
							<a href="https://www.iobit.com/buy.php?product=iu113pc1677&ref=en-iu3pcfansale<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu1677buy', 'buy', 'iupurchase-fansale');" class="button ani_up10 button1">
							  <span>Activate Now</span>
							  <img src="<?php echo getStaticUrl('images/arrow.svg')?>" alt="arrow" class="arrow">
							</a>						
							<p class="day ani_up11">60-Day Money Back Guarantee</p>
						</li>
					   	<li class="box-right">
							<h2 class="ani_up6">
								<span></span> &nbsp;
								Individual Plan
								&nbsp;<span></span>
							</h2>
							<p class="year ani_up6">1 Year / 1 PC</p>
							<div class="iu ani_up7">
								<img src="<?php echo getStaticUrl('images/box-iu1.png')?>" >
								<div class="iu-price">							
									<p class="ani_up8">
										<span>$</span>
										<strong>14.</strong>
										<em>77</em>
									</p>
									<del class="ani_up9">$19.99</del>
								</div>
								<div class="white"></div>
							</div>
							<!-- button -->
							<a href="https://www.iobit.com/buy.php?product=iu111pc1477&ref=en-iu1pcfansale<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu1477buy', 'buy', 'iupurchase-fansale');" class="button button2 ani_up10">
							  <span>Activate Now</span>
							  <img src="<?php echo getStaticUrl('images/arrow.svg')?>" alt="arrow" class="arrow">
							</a>						
							<p class="day ani_up11">60-Day Money Back Guarantee</p>
							
							
						</li>
					   </ul>
				   </div>
				</div>
			</section>
			<!-- sec1  -->	
			<section class="sec1">
				<div class="container">
					<h2 class="ani_up1">How IObit Uninstaller Pro Works to Supercharge Your<br>PC’s Productivity?</h2>
					<div class="sec1-top">
						<div class="sec1-left">
						   <img src="<?php echo getStaticUrl('images/computer.png')?>" class="computer ani_up2">
						   <img src="<?php echo getStaticUrl('images/c1.png')?>" class="c1 ani_com1">
					       <img src="<?php echo getStaticUrl('images/c2.png')?>" class="c2 ani_com2">
					       <img src="<?php echo getStaticUrl('images/c3.png')?>" class="c3 ani_com3">
					    </div>
						<div class="sec1-right">
							 <ul>
							 	<li>
									<h3 class="ani_up3"><span></span>Install Monitor</h3>
									<p class="ani_up4">Monitor & record the file and registry changes made by the installing<br>programs and fully revert them back to the pre-installation state <br>when you uninstall.</p>
								</li>
							 	<li>
									<h3 class="ani_up5"><span></span>Complete Uninstall</h3>
									<p class="ani_up6">Totally uninstall any programs, including Window apps, bundleware, <br>even the stubborn programs that refuse to be removed from your <br>computer.</p>
								</li>
							 	<li>
									<h3 class="ani_up7"><span></span>In-depth Clean</h3>
									<p class="ani_up8">Auto scan & clean all executable files and registry entries related to <br>the removing programs as well as the invalid remnant left by other<br>uninstallers.</p>
								</li>
							 </ul>
						</div>
					</div>				
				</div>
				<div class="sec1-bottom">
					<h2 class="ani_up2">
					  <p class="p1">Something MORE that’s tailored to fit your needs
					   <p class="p2">keep software health</p>
					  </p>					  
					</h2>
					<ul>
						<li>

							<img src="<?php echo getStaticUrl('images/ico1.png')?>" class="ani_up3">
							<p class="ani_up4">
								Scan, fix and remove programs <br>with uninstall issues 
								<span>caused by<br> missing built-in uninstaller errors.</span>
							</p>
						</li>
						<li>
							<img src="<?php echo getStaticUrl('images/ico2.png')?>" class="ani_up3">
							<p class="ani_up4">Delete malware & ad-based plug-ins<br> 
								<span>which spy on you or slow down<br> your online experience.</span>
							</p>
						</li>
						<li>
							<img src="<?php echo getStaticUrl('images/ico3.png')?>" class="ani_up3">
							<p class="ani_up4">Auto update your critical software <br>						
								<span>with 1-click to avoid leaving your PC <br>vulnerabilities to security holes.</span>
							</p>
						</li>
					</ul>
				</div>
				<div class="sec1-bottom-op"></div>
			</section>		
		    <!-- sec2-->
			<section class="sec2">
				<div class="container">
					<!-- box part-->
					<div class="sec2-box">
                      <div class="sec2-box-con"> 
						  <img src="<?php echo getStaticUrl('images/extra.png')?>"  class="extra ani_up2">
						  <h2 class="ani_up3">You Can Get From the Valuable Pack</h2>
						  <ul class="ani_up4">
						  	<li class="lili">
								<img src="<?php echo getStaticUrl('images/ul-box1.png')?>" class="ani_up5">
								<p class="ani_up6">
									<span>$</span><strong>16.</strong><em>77</em>
									<del>$59.93</del>
								</p>
								<h3>1 Y / 3 PCs</h3>
								<p class="li-word ani_up7">Uninstall Any Unwanted Programs and Plug-ins for Cleaner PC.</p>
							</li>
						  	<li class="add"><img src="<?php echo getStaticUrl('images/add.png')?>" class="ani_up5"></li>
						  	<li class="lili li-free">
								<img src="<?php echo getStaticUrl('images/ul-box2.png')?>" class="ani_up5">
								<p class="ani_up6">
									<span>$</span><strong>0</strong>
									<del>$19.99</del>
								</p>
								<h3>1 Y / 1 PC</h3>
								<p class="li-word ani_up7">Fast & Deep Defrag to Optimize Hard Drive and PC Performance.</p>
							</li>
						  	<li class="add"><img src="<?php echo getStaticUrl('images/add.png')?>" class="ani_up5"></li>
						  	<li class="lili li-free">
								<img src="<?php echo getStaticUrl('images/ul-box3.png')?>" class="ani_up5">
								<p class="ani_up6">
									<span>$</span><strong>0</strong>
									<del>$19.95</del>
								</p>
								<h3>1 Y / 1 PC</h3>
								<p class="li-word ani_up7">Protect Your Private Files and Data From Theft, Loss or Leaks!</p>
							</li>
						  </ul>
						  <div class="sec2-line ani_up8"></div>
						  <!-- button -->
						  <a href="https://www.iobit.com/buy.php?product=iu11pro1677&ref=en-iu3pcsdpfafansale<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu1677sdpfabuy', 'buy', 'iupurchase-fansale');" class="button ani_up9 button5">
						    <span>Get It Now</span>
						    <img src="<?php echo getStaticUrl('images/arrow.svg')?>" alt="arrow" class="arrow">
						  </a>
					  </div>
					</div>
				</div>
				<!--Carousel part-->				
				<div class="swiper">
					<div class="container">
					  <h2 class="ani_up3">Trusted by Millions of PC Users Worldwide</h2>
					  <div class="flashBg">
						 <ul class="mobile ani_up5">
					  	  <li>
							 <img src="<?php echo getStaticUrl('images/people1.png')?>" > 
							 <h3>Ivan White</h3>
							 <p>"IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well."</p>
						  </li>
					  	  <li>
							  <img src="<?php echo getStaticUrl('images/people2.png')?>" >
							  <h3>makeuseof.com</h3>
							  <p>" This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."</p>
						  </li>
					  	  <li>
							  <img src="<?php echo getStaticUrl('images/people3.png')?>" >
							  <h3>John Glenn Perong</h3>
							  <p>"IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."</p>
						  </li>
					  	  <li>
							  <img src="<?php echo getStaticUrl('images/people4.png')?>" >
							  <h3>Samrat Kumar Chakrabortty</h3>
							  <p>"I have used multiple uninstallers in the past, however, once I started using IObit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify bundleware and remove them is one great feature present in IObit which is unsurpassed. "</p>
						  </li>
					  	  <li>
							  <img src="<?php echo getStaticUrl('images/people5.png')?>" >
							  <h3>PC Magazine</h3>
							  <p>"If you need a program that lets you cleanly and completely uninstall applications, fire up IObit Uninstaller. This free utility makes it a breeze to delete apps, including stray files that are often left behind when you use Windows to delete software from your hard drive or SSD."</p>
						  </li>
					    </ul>

					  </div>
					  <div class="mobile-left ani_up11"></div>
					  <div class="mobile-right ani_up11"></div>
					</div>
				</div>
			</section>
	        <!-- sec3-->
			<section class="sec3">
				<div class="container">
					<h2 class="ani_up1">See the Differences Between FREE and PRO More Clearly</h2>
					<table>
						<tr>
							<td class="td1 td1-title ani_up2">Efficient Tool for Programs Removal</td>
							<td class="td2 td2-title ani_up2">
							   <img src="<?php echo getStaticUrl('images/td2-title.svg')?>" class="ani_up3">
							   Regular Uninstaller
							</td>
							<td class="tdtd"></td>
							<td class="td2 td3-title ani_up2">
								<img src="<?php echo getStaticUrl('images/td3-title.png')?>" class="ani_up3">
								IObit Uninstaller 11 FREE
							</td>
							<td class="tdtd"></td>
							<td class="td3 td4-title ani_up2">
								<img src="<?php echo getStaticUrl('images/td4-title.png')?>" class="ani_up3">
								IObit Uninstaller 11<br>PRO
							</td>
						</tr>
						<tr  class="td-purple">
							<td class="td1 ani_up1">Primary feature of uninstaller</td>
							<td class="td2 ani_up1">programs only</td>
							<td class="tdtd"></td>
							<td class="td2 ani_up1">programs, Windows apps and plug-ins</td>
							<td class="tdtd"></td>
							<td class="td3 ani_up1">programs, Windows apps and plug-ins</td>
						</tr>
						<tr>
							<td class="td1 ani_up2">Auto clean leftovers of uninstalled programs</td>
							<td class="td2 ani_up2"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td2 ani_up2"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td3 ani_up2"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
						</tr>
						<tr  class="td-purple">
							<td class="td1 ani_up3">System maintenance and optimization tools</td>
							<td class="td2 ani_up3"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td2 ani_up3"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td3 ani_up3"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
						</tr>
						<tr>
							<td class="td1 ani_up4">Remove programs that can’t be deleted via regular means</td>
							<td class="td2 ani_up4"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td2 ani_up4"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td3 ani_up4"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
						</tr>
						<tr  class="td-purple">
							<td class="td1 ani_up5">Uninstall third-party programs installed with freeware</td>
							<td class="td2 ani_up5"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td2 ani_up5"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td3 ani_up5"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
						</tr>
						<tr>
							<td class="td1 ani_up6">Auto deep cleaning residue left by other uninstaller</td>
							<td class="td2 ani_up6"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td2 ani_up6"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td3 ani_up6"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
						</tr>
						<tr class="td-purple">
							<td class="td1 ani_up7">Monitor installations and revert system changes</td>
							<td class="td2 ani_up7"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td2 ani_up7"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td3 ani_up7"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
						</tr>
						<tr> 
							<td class="td1 ani_up8">Identify and remove malware & ads plug-ins</td>
							<td class="td2 ani_up8"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td2 ani_up8"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td3 ani_up8"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
						</tr>
						<tr class="td-purple">
							<td class="td1 ani_up9">Scan and fix programs with uninstall issues</td>
							<td class="td2 ani_up9"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td2 ani_up9"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td3 ani_up9"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
						</tr>
						<tr>
							<td class="td1 ani_up10">One-click to auto-update your software</td>
							<td class="td2 ani_up10"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td2 ani_up10"><img src="<?php echo getStaticUrl('images/no.svg')?>"></td>
							<td class="tdtd"></td>
							<td class="td3 ani_up10"><img src="<?php echo getStaticUrl('images/yes.svg')?>"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="td4-buy ani_up14">
								<p class="ani_up15">
									<span>$</span><strong>16</strong><span>.77</span>
									<del>59.93</del>
									<em>
										70% OFF
									</em>
								</p>
								<!-- button -->
								<a href="https://www.iobit.com/buy.php?product=iu113pc1677&ref=en-iu3pcafansale<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu1677abuy', 'buy', 'iupurchase-fansale');" class="button ani_up16 button3">
								  <span>Activate Now</span>
								  <img src="<?php echo getStaticUrl('images/arrow.svg')?>" alt="arrow" class="arrow">
								</a>
							</td>
						</tr>
					</table>
				</div>
			</section>
		    <div class="world">
				<h2>World-wide Awards</h2>
				<p>As being trusted and awarded by those world-class media in the past ten years, you know you’ve got the right PC uninstaller.</p>
				<img  alt="" src="<?php echo getStaticUrl('images/world_img.png')?>">
			</div>
			<!-- footer-->
		    <footer>
		    	<div class="container">
		    		<ul>
		    			<li class="days">
		    				<img  alt="" src="<?php echo getStaticUrl('images/days.png')?>">
		    				<div>
		    					<h4>Try it RISK FREE - with our 60-day Money Back Guarantee</h4>
		    					<p>We’re confident that activating PRO edition will improve your PC</p>
		    					<p>performance for affordable price!</p>
		    				</div>
		    			</li>
		    			<li class="pays">
		    				<p>We accept</p>
		    				<img  alt=""  src="<?php echo getStaticUrl('images/pay.png')?>">
		    			</li>
		    		</ul>
		    	    <div class="notes">
		    		 <h4>Note:</h4>
		    		 <p> *.Data may vary based on different system or computer.</p>
		    		 <p>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</p>
		    		 <h3>Copyright © 2005 - 2021 IObit. All Rights Reserved</h3>
		    	    </div>
		    	</div>
			</footer>	
		    <!--Bullet frame -->
			<section class="bullet">
			<!-- frist -->
			<div class="first-box">
				<img src="<?php echo getStaticUrl('images/close.png')?>" class="close close_box">
				<div class="first-gift">
					<img src="<?php echo getStaticUrl('images/box-top.png')?>" class="box-top">
					<img src="<?php echo getStaticUrl('images/box-bottom.png')?>" class="box-bottom">
				</div>
				<!-- button -->
				<a href="javascript:void(0)" class="button open">
				  <span>Open It</span>
				  <img src="<?php echo getStaticUrl('images/arrow.svg')?>" alt="arrow" class="arrow">
				</a>	
			</div>
			<div class="sec-gift">
				<img src="<?php echo getStaticUrl('images/close.png')?>" class="close" id="close_gift">
				<p>With only 2000 gifts in total, you are 90% luckier than everyone else to draw it!</p>
				<img src="<?php echo getStaticUrl('images/sec-box.png')?>" class="sec-box">
				<!-- button -->
				<a href="javascript:void(0)" class="button get">
				  <span>Get & Back</span>
				  <img src="<?php echo getStaticUrl('images/arrow.svg')?>" alt="arrow" class="arrow">
				</a>
			</div>
			</section>
		    <!-- mystery gift-->
			<section class="mystery">
				<img src="<?php echo getStaticUrl('images/my1.png')?>" class="my1 box_rotate">
				<img src="<?php echo getStaticUrl('images/my2.png')?>" class="my2">
				<p class="for">for fans</p>
				<p class="try">try your luck>></p>
			</section>
		    <!-- click-->
			<section class="clock box_rotate " id="clock">
				<div class="total-num">
								<ul  id="topNum" class="giftNum">
									<li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                    <li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                    <li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                    <li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                </ul>
				</div>
				<p>Hurry! Grab your gifts before they sell out!</p>
			</section>
		    <!-- float-->
			<section class="no_gift first_gift">
				<div class="container">
					<img src="<?php echo getStaticUrl('images/float_box.png')?>" class="float_box">
					<div class="float_our">
						70%OFF
					</div>
					<p class="catch">Catch the Lowest Price and Get Powerful Tools for <br> Family Members</p>
					<div class="float_price">
						<p>
							<span>$</span><strong>16</strong><span>.77</span>
							<del>$59.93</del>
						</p>
						
					</div>
					<!-- button -->
					<a href="https://www.iobit.com/buy.php?product=iu113pc1677&ref=en-iu3pcfansale<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu1677buy', 'buy', 'iupurchase-fansale');" class="button">
					  <span>Activate Now</span>
					  <img src="<?php echo getStaticUrl('images/arrow.svg')?>" alt="arrow" class="arrow">
					  <p class="float_yellow">
						  SAVE $43.16
					  </p>
					</a>	
				</div>				
			</section>
			<section class="no_gift yes_gift sec_gift">
				<div class="container">
					<img src="<?php echo getStaticUrl('images/float_box.png')?>" class="float_box">
					<img src="<?php echo getStaticUrl('images/yes_box.png')?>" class="yes_box">
					<div class="float_our">
						70%OFF
					</div>
					<!-- total num -->
					<div class="total-num" id="last">
								<ul  id="topNum" class="giftNum">
									<li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                    <li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                    <li><b class="nwrap"><b class="numlist"><span>0</span></b></b></li>
                                    <li><b class="nwrap"><b class="numlist"><span>1</span></b></b></li>
                                </ul>
						<p class="catch">Hurry! Grab your gifts before they sell out!</p>
					</div>
				
					<div class="float_price">
						<p>
							<span>$</span><strong>16</strong><span>.77</span>
							<del>$59.93</del>
						</p>
						
					</div>
					<!-- button -->
					  <a href="https://www.iobit.com/buy.php?product=iu113pc1677&ref=en-iu3pcbfansale<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu" onclick="ga('send', 'event', 'iu1677bbuy', 'buy', 'iupurchase-fansale');" class="button button4">
					  <span>Activate Now</span>
					  <img src="<?php echo getStaticUrl('images/arrow.svg')?>" alt="arrow" class="arrow">
					  <p class="float_yellow">
						  SAVE $83.1
					  </p>
					</a>	
				</div>				
			</section>
		</div>
	</body>
	<script>refStr="<?php echo $refStr;?>";</script>
	<script src="<?php echo getStaticUrl('script/jquery-3.5.1.min.js')?>"></script>
	<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</html>

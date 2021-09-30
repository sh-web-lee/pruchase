<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'eniu11exp_p' . $date;
  $c_name_t='eniu11exp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(60,89);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
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
//var_dump(str_check($data['file']));
function str_check($str){
    return empty($str) ? '' : $str;
}

if($_GET['action'] == 'Overnum'){
    echo rand(69,100);
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Get 70% discount on IObit Uninstaller PRO + Free Gifts right now! -lObit</title>
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium Web">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carter One">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
	</head>
	<body>
		<div class="home">
			<!-- banner -->
			<section class="banner animated">
				<div class="container">
						<a class="logo  ani_up1" href="https://www.iobit.com/en/index.php" target="_blank">
							<img src="<?php echo getStaticUrl('images/logo.svg')?>" alt="logo">
						</a>					
						<h1 class="title ani_up2"></h1>						
				</div>
				<!-- box -->
				<div class="box">
					<div class="container ">
						<div class="box-off ani_up3 "></div>
					    <div class="box-price">
							<h2 class="ani_up3">Performance Optimization Package</h2>
							<p class="get ani_up4">Get a 70% discount right now, while supplies last!</p>
							<div class="discount ani_up5">
								<del>$59.93</del>
								<h3>$16<span>.77</span></h3>
								<strong>$0.46/month/pc</strong>
							</div>
							<a href="https://www.iobit.com/buy.php?product=iu10pro1677&ref=en-iu3pcsdpfaugfansale<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-aug');" class="button ani_up6" >
								Buy Now
							</a>
							<div class="time ani_up7">								
								<div id="time1">
									<strong>Ends in：</strong>
									<span>1</span> <span>1</span> ： <span>5</span> <span>9</span> ： <span>5</span> <span>9</span>
								</div>
							</div>
							<div class="price-bg">
								<img alt="" src="<?php echo getStaticUrl('images/price-bg.svg')?>">
							</div>
						</div>
					</div>					
				</div>
			</section>
		    <!--sec1-->
			<section class="sec1">
				 <div class="sec1-special">
					 <div class="container">
						 <ul class="sec1-ul">
						 	<li class="ani_up2">
								<img alt="" src="<?php echo getStaticUrl('images/sec1-one.svg')?>">
								<div>
									<p>Over <span class="sec1-num" id="over_num">53,268,980</span></p>
									<p>users worldwide</p>
								</div>
							</li>
						 	<li class="ani_up2">
								<img alt="" src="<?php echo getStaticUrl('images/sec1-two.svg')?>">
								<div>
									<p>Reviews: </p>
									<p>Excellent</p>
								</div>
							</li>
						 	<li class="ani_up2">
								<img alt="" src="<?php echo getStaticUrl('images/sec1-three.svg')?>">
								<div>
									<p class="sec1-num">100% 60-Day</p>
									<p>Money Back Guarantee</p>
								</div>
							</li>
						 </ul>
					 </div>
				 </div>
			     <div class="sec1-data">
					 <div class="container">
						 <h2 class="ani_up1">What IObit Uninstaller PRO Can Do?</h2>
						 <div class="sec1-des">
							 <div class="sec1-des-com ani_up3">
								 <img alt="" src="<?php echo getStaticUrl('images/complete.png')?>">
								 <div>
									 <h3>Complete Uninstall</h3>
									 <p>Monitor all system changes made by program installation and revert them back to the state before installation when uninstalling the program.</p>
								 </div>
							 </div>
							 <div class="sec1-des-box">
								 <ul>
								 	<li class="ani_up4">
										<img  alt="" src="<?php echo getStaticUrl('images/sec1-des-one.png')?>">
										<h3>Powerful Scan</h3>
										<p>Automatically scan & remove all associated</p>
										<p>files of uninstalled programs and residual</p>
										<p>files left by other uninstallers.</p>
									</li>
								 	<li class="ani_up5">
										<img alt="" src="<?php echo getStaticUrl('images/sec1-des-two.png')?>">
										<h3>Auto Update Software</h3>
										<p>1-click to update your outdated software to</p>
										<p>avoid exposing your sensitive data to hackers</p>
										<p>through vulnerabilities and security holes.</p>
									</li>
								 </ul>
								 <div  class="sec1-computer"></div>
								 <ul>
								 	<li class="ani_up6">
										<img  alt="" src="<?php echo getStaticUrl('images/sec1-des-three.png')?>">
										<h3>Remove Stubborn Programs</h3>
										<p>1-click to uninstall 1000+ stubborn programs &</p>
										<p>bundleware that can’t be removed by the</p>
										<p>conventional methods.</p>
									</li>
								 	<li class="ani_up7">
										<img alt="" src="<?php echo getStaticUrl('images/sec1-des-four.png')?>">
										<h3>Faster & Safer Surfing</h3>
										<p>Identify and remove any malicious and bundled </p>
										<p>advertising plug-ins for secure and fast browsing.</p>
									</li>
								 </ul> 
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="sec1-table">
				 	 <div class="container">
				 		 <h2 class="ani_up5">Is IObit Uninstaller PRO Worth To Buy？</h2>
							<table>
								<tr>
									<td class="td1 ani_up6">
									 <p>Regular Uninstaller</p>	
									</td>
									<td class="td2 ani_up6">
										<p>IObit Uninstaller</p>
										<p>FREE</p>
									</td>
									<td class="td3">
										<div>
											<img  alt="" src="<?php echo getStaticUrl('images/star.png')?>">
										    <p class="pro"><span></span>IObit Uninstaller<span></span>	</p> 
										    <p>PRO</p>
										</div>
									</td>
								</tr>
								<tr>
									<td class="uni tdone ani_up7">
										<p>Uninstall unwanted programs only</p>
									</td>
									<td class="uni tdtwo ani_up7">
										<p>Uninstall unwanted programs, Windows apps and plug-ins</p>
									</td>
									<td class="uni tdthreew ani_up7">
										<p>Uninstall unwanted programs, Windows apps and plug-ins</p>
									</td>
								</tr>
								<tr>
									<td class="tdone ani_up8">
										<img  alt="" src="<?php echo getStaticUrl('images/error.png')?>">
									</td>
									<td class="tdtwo ani_up8">
										<p>Auto clean leftovers of uninstalled programs</p>
									</td>
									<td class="tdthreeb ani_up8">
										<p>Auto clean leftovers of uninstalled programs</p>
									</td>
								</tr>
								<tr>
									<td class="tdone ani_up9"><img alt="" src="<?php echo getStaticUrl('images/error.png')?>"></td>
									<td class="tdtwo ani_up9">
										<p>System maintenance and optimization tools</p>
									</td>
									<td class="tdthreew ani_up9">
										<p>Remove programs that can’t be deleted by regular means</p>
									</td>
								</tr>
								<tr>
									<td class="tdone ani_up10"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdtwo ani_up10"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdthreeb ani_up10">
										<p>Uninstall third-party programs installed with freeware</p>
									</td>
								</tr>
								<tr>
									<td class="tdone ani_up11"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdtwo ani_up11"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdthreew ani_up11">
										<p>In-depth cleaning residue left by standard uninstall</p>
									</td>
								</tr>
								<tr>
									<td class="tdone ani_up12"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdtwo ani_up12"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdthreeb ani_up12">
										<p>Restore all system changes to the pre-installation state</p>
									</td>
								</tr>
								<tr>
									<td class="tdone ani_up13"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdtwo ani_up13"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdthreew ani_up13">
										<p>Identify and remove malicious & advertising plug-ins</p>
									</td>
								</tr>
								<tr>
									<td class="tdone ani_up14"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdtwo ani_up14"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdthreeb ani_up14">
										<p>One-click software updater for safer PC</p>
									</td>
								</tr>
								<tr>
									<td class="tdone tdonelast ani_up15"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdtwo ani_up15"><img src="<?php echo getStaticUrl('images/error.png')?>" alt=""></td>
									<td class="tdthreew system ani_up15">
										<p>System maintenance and optimization tools</p>
										<div></div>
									</td>
								</tr>
							</table>			 
				 	 </div>
				 </div>
			</section>
		       
		</div>
	        <!-- sec2-->
			<section class="sec2">
				<div class="container">
					<h2 class="ani_up3">Leave A Clean Desktop & Make Your PC Run Great!</h2>
					<div class="sec2-box">
						<div class="sec2-box-data">
							<div class="sel-box ani_up5">
								<img  alt="" class="ani_up6"  src="<?php echo getStaticUrl('images/sec2-box1.png')?>">
								<div class="ani_up7">
									<del>$59.93</del>
									<h3>1 Year / 3 PCs</h3>
								</div>
								<p class="ani_up8">Complete Software Uninstall Without Leaving a Trace.</p>
							</div>
							<div class="sub ani_up5">
								<img  alt="" src="<?php echo getStaticUrl('images/sub.svg')?>">
							</div>
							<div class="sel-box ani_up5 free">
								<img  alt="" class="ani_up6"   src="<?php echo getStaticUrl('images/sec2-box2.png')?>">
								<div class="ani_up7">
									<del>$19.95</del>
									<h3>1 Year / 1 PC</h3>
								</div>
								<p class="ani_up8">Protect Your Private Files and Data From Theft, Loss or Leaks!</p>
							</div>
							<div class="sub ani_up5">
								<img  alt="" src="<?php echo getStaticUrl('images/sub.svg')?>">
							</div>
							<div class="sel-box ani_up5 free">
								<img alt="" class="ani_up6"  src="<?php echo getStaticUrl('images/sec2-box3.png')?>">
								<div class="ani_up7">
									<del>$19.99</del>
									<h3>1 Year / 3 PCs</h3>
								</div>
								<p class="ani_up8">Fast & Deep Defrag to Optimize Hard Drive & PC Performance.</p>
							</div>
						</div>
					    <div class="sec2-box-price">						 
							   <div class="discount ani_up9">
							   	<del>$59.93</del>
							   	<h3>$16<span>.77</span></h3>
							   	<strong>$0.46/month/pc</strong>
							   </div>
							   <a href="https://www.iobit.com/buy.php? product=iu10pro1677&ref=en-iu3pcsdpfaugfansalea<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu" onclick="ga('send', 'event', 'iuabuy', 'buy', 'iupurchase-aug');" class="button ani_up10">
							   	Buy Now
							   </a>
							   <div class="time ani_up11">								
							   	<div id="time2">
							   		<strong>Ends in：</strong>
							   		<span>1</span> <span>1</span> ： <span>5</span> <span>9</span> ： <span>5</span> <span>9</span>
							   	</div>
							   </div>
					    </div>
					</div>
				</div>
			    <div class="review">
					<div class="container">
						<h2 class="ani_up8">Look What Others Say</h2>
						<ul class="review-word ani_up10">
							<li class="slideLft active">
								<h3>Ivan White</h3>
								<p>“IObit uninstaller has come a long way, I have used it for a long time, I love it, it is very thorough, now it is even getting better. Very pleased with it, would not be without it. If you do not use it you might wish to try it, it is 100% better today than it was a year ago. It cleans up all the extra registry junk and does it very well.”</p>
							</li>
							<li class="slideLft">	<h3>PC Magazine</h3>
								<p>"If you need a program that lets you cleanly and completely uninstall applications, fire up IObit Uninstaller. This free utility makes it a breeze to delete apps, including stray files that are often left behind when you use Windows to delete software from your hard drive or SSD."</p></li>
							<li class="slideLft">	<h3>Samrat Kumar Chakrabortty</h3>
								<p>"I have used multiple uninstallers in the past, however, once I started using IObit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify bundleware and remove them is one great feature present in IObit which is unsurpassed. "</p></li>
							<li class="slideLft">	<h3>John Glenn Perong</h3>
								<p>"IObit Uninstaller finds plugins in my browsers that I didn’t even know existed. The clean-up of the residual files is very good; it doesn’t leave any useless data left on the uninstalled software. It reminds me of the available updates for all my programs. Overall, my computer’s performance improved thanks to this. It is very convenient and easily manageable; I even recommended this to my friends."</p></li>
							<li class="slideLft">	<h3>makeuseof.com</h3>
								<p>
" This easy-to-use and informative uninstall tool cleans, configures, and optimizes your PC. Users can download it virtually in a blink of an eye. This uninstall tool can be categorized as the best uninstaller and allows users to do uninstallation in bulk. It will offer users to do a "Powerful Scan" to go deeper and find leftovers. The performance alone makes this little uninstall tool worth keeping."</p></li>
						</ul>
						<div class="review-people ani_up12">
							<div class="people1 on">
								<img  alt="" src="<?php echo getStaticUrl('images/people1.png')?>">
							</div>
							<div class="people2">
								<img  alt="" src="<?php echo getStaticUrl('images/people2.png')?>">
							</div>
							<div class="people3">
								<img  alt="" src="<?php echo getStaticUrl('images/people3.png')?>">
							</div>
							<div class="people4">
								<img  alt="" src="<?php echo getStaticUrl('images/people4.png')?>">
							</div>
							<div class="people5">
								<img  alt="" src="<?php echo getStaticUrl('images/people.png')?>">
							</div>
						</div>
					</div>
				</div>
			    <div class="world"></div>
			</section>
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
				<!--  float-->
				<div class="float">
					<div class="container">
					  <div class="float-time">
						<h3>Catch The Lowest Price Of The Package For PC ！</h3>
						<p>
							<span>11</span>
							<i>HRS</i> 
							<span>59</span>
							<i>MIN</i> 
							<span>59</span>
							<i>SEC</i> 
						</p>
					  </div>
					  <div class="float-btn">
						  <h2>
							  $16.77
						  </h2>
						  <del>$59.93</del>
						  <a href="https://www.iobit.com/buy.php? product=iu10pro1677&ref=en-iu3pcsdpfaugfansaleb<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubbuy', 'buy', 'iupurchase-aug');" class="button" >Get Now</a>
					  </div>
					</div>					
				</div>
			</footer>
	</body>
	<script>refStr="<?php echo $refStr;?>";</script>
	<script src="<?php echo getStaticUrl('script/jquery-3.5.1.min.js')?>"></script>
	<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</html>

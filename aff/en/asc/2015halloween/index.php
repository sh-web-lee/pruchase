<?php
//	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

    if(isset($_GET['st'])&&$_GET['st']!=null){
        $ststr='-'.$_GET['st'];
    }else{
        $ststr='';
    }
    if(in_array($_GET['ref'], array('es_a8purchase','ascfeature'))){
        $ststr.= '-'.$_GET['ref'];
    }

	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
	$buyNum = ceil(microtime_float()*1000/20000)-69057026;
	
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
<title> Save up to 80% on ASC PRO - Advanced SystemCare 3-day special sale</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic' rel='stylesheet' type='text/css'>
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="main">
<!--banner-->
<div class="header">
	<div class="wrapper">
    <a href="http://www.iobit.com/" target="_blank" class="logo"></a>
    <h1> <img src="<?php echo $pResUrl; ?>images/title.jpg" alt=""></h1>
    <h2>Activate ASC PRO to ensure you & your family faster, cleaner and more secure PC!</h2>
    <ul id="counttime">
     <li>20</li>
      <li>20</li>
      <li>20</li>
      <li>200</li>
    </ul>
    <div class="clear"></div>
    <div class="container">
     <p class="people"><em><?php echo $buyNum; ?></em> people activated</p>
    	<!--left-->
      <div class="left">
      	<dl class="sale">
        	<dt class="mar">Single Solution</dt>
          <dd><strong>$14.77</strong> <del>$29.99</del></dd>
          <dt><a href="http://www.iobit.com/buy.php?product=asc91pc1477&ref=asc1pc2015octc<?php echo $ststr?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'halloween2015-aff');;" class="buybtn">Get It Now</a></dt>
          <dd>1 Year / 1 PC</dd>
        </dl>
        <div class="message">
        	<h3>only today!</h3>
          <dl class="bottom">
            <dt id='date1'>On  June 1, 2015</dt>
            <dd><strong>50% OFF</strong></dd>
          </dl>
          <dl>
            <dt id='date2'>On  June 1, 2015></dt>
            <dd>40% OFF</dd>
          </dl>
          <dl class="bottom">
            <dt id='date3'>On  June 1, 2015</dt>
            <dd>35% OFF</dd>
          </dl>
          <p>Only <strong>$1.23</strong> per PC per month</p>
        </div>
      </div>
    	<!--right-->
      <div class="right">
      	<dl class="sale">
        	<dt class="mar"><strong>Family Pack</strong></dt>
          <dd><strong>$19.99</strong> <del>$89.97</del></dd>
          <dt><a href="http://www.iobit.com/buy.php?product=asc9ebook3pc&ref=asc3pcs2015octc<?php echo $ststr?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'halloween2015-aff');" class="buybtn">Get It Now</a></dt>
          <dd>1 Year / 3  PCs </dd>
        </dl>
        <div class="message">
        	<h3>only today!</h3>
          <dl class="bottom">
           <dt class="size" id='sdate1'>On  June 1, 2015</dt>
           <dd><strong>80% OFF</strong></dd>
          </dl>
          <dl><dt id='sdate2'>On  June 1, 2015</dt><dd>70% OFF</dd></dl>
          <dl class="bottom"><dt id='sdate3'>On  June 1, 2015</dt><dd>65% OFF</dd></dl>
          <p>Only <strong>$0.55 </strong> per PC per month</p>
        </div>
      </div>      
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="clear"></div>
<div class="wrapper">
  <!--product-->
  <div class="product">
  	<img src="<?php echo $pResUrl; ?>images/asc.jpg">
    <dl>
    	<dt>What you can get by activating ASC PRO</dt>
      <dd>Basic System Clean, Fix and Optimization</dd>
      <dd>Basic Protection from Security Threats</dd>
      <dd>Fantastic New Skins & Themes</dd>
      <dd><a href="javascript:void(0)" onclick="goTaget($('#compare'))">Learn more about PRO edition</a></dd>
    </dl>
  </div>
  <!--payment-->
	<ul class="payment">
  	<li>Accepted Payments  <br> <img src="<?php echo $pResUrl; ?>images/payments.jpg"></li>
    <li>Money Back Guarantee  <br> <img src="<?php echo $pResUrl; ?>images/guarantee.jpg"></li>
    <li>Secure Payment  <br> <img src="<?php echo $pResUrl; ?>images/payment.jpg"></li>
  </ul>
</div>
<dl class="awards wrapper">
  <dt>Product Awards</dt>
  <dd><img src="<?php echo $pResUrl; ?>images/product.jpg"></dd>
</dl>
<div class="clear"></div>
<div class="review">
    <div class="wrapper">
      <div class="media_rev">
        <h3>Media Review</h3>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg" alt=""></dt>
          <dd>"There's nothing worse than a computer that is bogged down so much that it impedes your ability to work or play games. Advanced Systemcare aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience." <span>- Cnet</span></dd>
        </dl>         
      </div>
      <div class="user_rev" id="user_rev">
        <div class="content">
          <h3>User Review</h3>
          <dl class="show">
            <dd><h4>"I'm really happy I upgraded, it puts my mind at ease and does all the work"</h4></dd>
            <dd>"The Advanced-System Care Pro keeps my computer well cleaned. Not only that, their customer service is excellent. They persevered with courteous help until I was able to solve my problem of sending a gift of this ASC service to another person. This is evidence of a good company."</dd>
          </dl>
          <dl class="hidden">
            <dd><h4>"Cleaned up Spyware and Malware My antivirus lets slip through"</h4></dd>
            <dd>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence."</dd>
          </dl>
          <dl class="hidden">
            <dd><h4>"It takes care of everything in the background"</h4></dd>
            <dd>"Advanced System Care Pro has proved to be a trusted tool, automatically improving performance and security in a simple interface and with a great support. I recommend it to all my Family and friends."</dd>
          </dl>
          <dl class="hidden">
            <dd><h4>My system has never run better.</h4></dd>
            <dd>In my opinion, IObit's ASC Pro is the best maintenance application available for the Windows user, providing excellent value and function in both its shareware and freeware versions. IObit provides expert technical support that is competent, knowledgeable and responsive, adding significant value to their products and services for their customers.</dd>
          </dl>
        </div>
        <ul class="users">
          <li class="current"><img src="<?php echo $pResUrl; ?>images/jane_mcclain.jpg" alt="">Jane McClain<br>2014</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/bob.jpg" alt="">Bob Bassett<br>2014</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/almir.jpg" alt="">Almir Romboli Tavares<br>2014</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/gordon.jpg" alt="">Gordon Griswold<br>2014</li>
        </ul>
      </div>
    </div>
  </div>
<div class="wrapper">
	<div class="comparison_table" id="compare">
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th colspan="2">See what PRO edition can do for you:</th>
            <th class="itemb"><span>Advanced SystemCare Free</span></th>
            <th class="itema"><span>Advanced SystemCare PRO</span><br>
            <p> 1 Year / 1 PC</p></th>
            <th class="itemb">
              <span>Advanced SystemCare PRO</span>
              <p>1 Year / 3 PCs</p>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_01.png"></td>
            <td class="virtue">Basic System Clean, Fix and Optimization</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_02.png"></td>
            <td class="virtue">Ultimate System Tuneup for Top Performance</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_03.png"></td>
            <td class="virtue">Up to 300% Internet Speedup with Internet Booster</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_04.png"></td>
            <td class="virtue">Real-time Optimization with Active Optimize</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_05.png"></td>
            <td class="virtue">Deep Windows Registry Clean</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_06.png"></td>
            <td class="virtue">Maximum Hard Drive Performance</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_07.png"></td>
            <td class="virtue">Basic Protection from Security Threats</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_08.png"></td>
            <td class="virtue">Full Detection against Security Threats</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_09.png"></td>
            <td class="virtue">Auto RAM Clean on Performance Monitor</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_10.png"></td>
            <td class="virtue"> Auto Online Privacy Trace Clean with Browser Anti-Tracking</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_11.png"></td>
            <td class="virtue">Auto Update to the Latest Version</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_12.png"></td>
            <td class="virtue">Runs in the Background - Install and Forget It</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_13.png"></td>
            <td class="virtue">Fantastic New Skins &amp; Themes</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/compare_icon_14.png"></td>
            <td class="virtue">Free 24/7 Technical Support on demand</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="2"></th>
            <th class="itemb"> <span>FREE</span> <br>
              Your current edition </th>
            <th class="itema"><span>$14.77</span> <del>$29.99</del><br>
              <p>1 Year / 1 PC</p>
              <a href="http://www.iobit.com/buy.php?product=asc91pc1477&ref=asc1pc2015octc<?php echo $ststr?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'halloween2015-aff');;" class="tbbuybtn">Activate Now</a>
            </th>
            <th class="itemb"><span>$19.99</span> <del>$89.97</del><br>
              <p>1 Year / <strong>3 PCs</strong></p>
              <a href="http://www.iobit.com/buy.php?product=asc9ebook3pc&ref=asc3pcs2015octc<?php echo $ststr?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'halloween2015-aff');" class="tbbuybtn">Activate Now</a>
              <br>We Recommend
            </th>            
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <div class="annotation">
    <dl class="wrapper">
      <dt>Note:</dt>
      <dd>1*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
      <dd>2*.Data may vary based on different system or computer. </dd>
    </dl>
  </div>  
  <div id="footer">
    Copyright © 2005 - 2015 IObit. All Rights Reserved
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
</div>
</div>
<script type="text/javascript">
    $(function () {
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
      });
      setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);
      var datenow  = new Date();
      var date2 = new Date(datenow.getTime()+1000*3600*24);
      var date3 = new Date(datenow.getTime()+1000*3600*24*2);
      var timestr1 = getDateformat(datenow.getFullYear(),datenow.getMonth()+1,datenow.getDate());
      var timestr2 = getDateformat(date2.getFullYear(),date2.getMonth()+1,date2.getDate());
      var timestr3 = getDateformat(date3.getFullYear(),date3.getMonth()+1,date3.getDate());

      $("#date1").html(timestr1);
      $("#sdate1").html(timestr1);
      $("#date2").html(timestr2);
      $("#sdate2").html(timestr2);
      $("#date3").html(timestr3);
      $("#sdate3").html(timestr3);
    });

    function getDateformat(year,month,day){
        var dateformstr = 'On ';
        switch(month){
          case 1:
            dateformstr += 'January';
            break;
          case 2:
            dateformstr += 'February';
            break;  
          case 3:
            dateformstr += 'March';
            break;
          case 4:
            dateformstr += 'April';
            break;
          case 5:
            dateformstr += 'May';
            break;
          case 6:
            dateformstr += 'June';
            break;
          case 7:
            dateformstr += 'July';
            break;
          case 8:
            dateformstr += 'August';
            break;
          case 9:
            dateformstr += 'September';
            break;
          case 10:
            dateformstr += 'October';
            break;  
          case 11:
            dateformstr += 'November';
            break;
          case 12:
            dateformstr += 'December';
            break;             
        }

        dateformstr += ' '+day;
        //dateformstr += year;
        return dateformstr;
    }

		function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			document.getElementById('counttime').innerHTML = '<li>'+h+'</li><li>'+i+'</li><li>'+s+'</li><li>'+mi+'</li>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();

    function goTaget(target) {
      var Theigth = target.offset().top - 160;
      $("html, body").animate({scrollTop: Theigth}, 'slow');
    }
</script> 

</body>
</html>

<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  $viewNum=rand(49,88);
  if($_GET['action']=='getViewNum'){
    echo $viewNum;
    exit();
  }
  if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'loyalimf8_p' . $date;
    $c_name_t='loyalimf8_t' . $date;
    $isInit=$_GET['isInit'];
    if ($_COOKIE[$c_name]===null) {
      $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
      setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
      setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
    } else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        $packsNum = 0;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      } else {
        if($isInit==1){
          $packsNum = intval($_COOKIE[$c_name]);
        }else {
          $packsNum = $_COOKIE[$c_name] - 1;
        }
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
    echo json_encode(array('packsNum'=>$packsNum));
    exit();
  }

  $refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

  $packsNum=49;
  $transData=json_decode(base64_decode($_GET['num']));
  if(!empty($transData)){
    if(@intval($transData->seats)){
      $packsNum=@intval($transData->seats);
    }
  }

  $refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
  $refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Exclusive 65% OFF and Free Gifts to Get Latest IObit Malware Fighter PRO</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
      <h1 class="title">Thanks for Your Loyal Support</h1>
      <h2>65% OFF + 2 Free Gifts</h2>
      <div class="imgbox">
        <div class="number">Only <div class="countdown countdown1">
            <div class="scroll-tick"><strong>0</strong></div>
            <div class="scroll-tick"><strong>0</strong></div>
          </div> 
        thank-you gifts left</div>
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="right-message">
        <h3>Items Incl.</h3>
        <dl>
          <dt>
            <strong>IObit Malware Fighter PRO <span>(1 year subscription / 3 PCs)</span>  </strong>
            <b>$19.95</b>
            <del>$54.95</del>
          </dt>
          <dd>
            <strong><i></i> IObit Uninstaller PRO   </strong>
            <b>$0</b>
            <del>$19.99</del>
          </dd>
          <dd>
            <strong><i></i> Smart Defrag PRO        </strong>
            <b>$0</b>
            <del>$19.99</del>
          </dd>
        </dl>
        <div class="price">
          <strong>$<b>19</b>.95</strong>
          <a href="https://www.iobit.com/buy.php?product=imf83pciusd1995&ref=en-imf3pciusdloyal&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
            onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-loyal');" class="buybtn">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <div class="arrow-down"></div>
      <h2>Upgrade to the Latest PRO, Enjoy Our Best Protection</h2>
      <h3><span>What we’ve optimized</span></h3>
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" class="imgbox">
      <div class="left-message">
        <dl>
          <dt>
            <i class="imp"></i>
            <strong>Latest 200 Million Virus Detection</strong>
          </dt>
          <dd>Quickly identify over 200 million viruses <br>  with Bitdefender engine;</dd>
        </dl>
        <dl>
          <dt>
            <i class="new"></i>
            <strong>revious Unknown Virus Detection</strong>
          </dt>
          <dd>Detect suspicious files on your  <br> computer for stronger protection;</dd>
        </dl>
      </div>
      <div class="right-message">
        <dl>
          <dt>
            <i class="imp"></i>
            <strong>Stop Ransomware Attacks</strong>
          </dt>
          <dd>Protect your important files and sensitive data from ransomware; </dd>
        </dl>
        <dl>
          <dt>
            <i class="imp"></i>
            <strong>Safe Data with Password</strong>
          </dt>
          <dd>No one can access to your files without password; </dd>
        </dl>
        <dl>
          <dt>
            <i class="imp"></i>
            <strong>50% Faster Scanning  </strong>
          </dt>
          <dd>Save time and do not bother your daily work;</dd>
        </dl>
        
      </div>
    </div>
  </div>
  <!-- feature end -->
  <div class="compartab wrapper">
    <h2><span>What we offer with PRO</span></h2>
    <table>
      <thead>
        <tr>
          <th class="text"></th>
          <th class="itema"><div>Your Current <br> Version</div></th>
          <th class="space"></th>
          <th class="itemb"><div>IObit <br> Malware Fighter 8 <strong>PRO</strong></div></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text">Latest IObit engine to detect 9 million malware  <i>Improved</i></td>
          <td class="itema"><i></i></td>
          <td class="space"></td>
          <td class="itemb"><i></i></td>
        </tr>
        <tr>
          <td class="text">Latest Bitdefender engine to detect 200 million malware & viruses <i>Improved</i></td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i></i></td>
        </tr>
        <tr>
          <td class="text">Comprehensive real-time protection with multiple security guards   </td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i></i></td>
        </tr>
        <tr>
          <td class="text">Stop hackers from encrypting your computer and ask for ransom <i>Improved</i>  </td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i></i></td>
        </tr>
        <tr>
          <td class="text">Keep your personal files separately with password <i>Improved</i></td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i></i></td>
        </tr>
        <tr>
          <td class="text">Safeguard your camera from being used by snoopers</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i></i></td>
        </tr>
        <tr>
          <td class="text">USB drive virus can’t harm your computer </td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i></i></td>
        </tr>
         <tr>
          <td class="text">Automatically clear online traces for you  </td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i></i></td>
        </tr>
         <tr>
          <td class="text">Auto scan your computer to detect existing threats <i>Improved</i> </td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i></i></td>
        </tr>
         <tr>
          <td class="text">Auto update to latest database to identify more threats  </td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i></i></td>
        </tr>
      </tbody>
    </table>
    <div class="arrow-down"></div>
  </div>
  
  <div class="gift">
    <div class="wrapper">
      <h2>​2 Valuable Thank-you Gifts You Can Get for Free</h2>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="">
        <h3>Smart Defrag PRO</h3>
        <p> <strong>$0</strong> <del>$19.99  </del></p>
        <p>Maximize Hard Drive <br> Optimizationfor Faster PC</p>
      </div>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="">
        <h3>IObit Uninstaller PRO</h3>
        <p> <strong>$0</strong> <del>$19.99  </del></p>
        <p>Uninstall Unwanted Plug-ins <br> for Cleaner PC & Browsing</p>
      </div>
    </div>
  </div>

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Media Review</h2>
      <ul>
        <li data-num="0"><img src="<?php echo getStaticUrl('images/tx.png')?>" alt="Adrian"></li>
        <li data-num="1"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
        <li data-num="2"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></li>
        <li class="active last" data-num="3"><img src="<?php echo getStaticUrl('images/software.png')?>" alt="software.informer.com"></li>
      </ul>
      <span class="prev"></span>
      <div class="message">
        <div>
          <h3>I have used many malware fighters but none has come near the efficiency and accuracy of IObit Malware Fighter. </h3>
          <p>"It is easy to set up, easy to use and easy to feel relaxed that your computer is not to be invaded by maleficent invaders set upon infecting your communications with viruses and program destroying malware."</p>
          <p class="name">Adrian</p>
        </div>
        <div>
          <h3>"We have not had a problem since using IObit Malware Fighter PRO."</h3>
          <p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with IObit Malware Fighter Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence. We have not had a problem since using your products."</p>
          <p class="name">Bob Bassett</p>
        </div>
        <div>
          <h3>"I also had other programs for this purpose installed, but IMF always finds the problems first and blocks them."</h3>
          <p>"Some years ago somebody drew my attention to IObit Malware Fighter. First I was sceptic. But after installing it, it became my favourite anti-malware program. It is very easy to use. Through the years it already has detected several threats and removed it. In cooperation with the other IObit programs, like for example ASC, I have a good PC protection. I now recommend these programs to all my friends and family."</p>
          <p class="name">Peter Stoffers</p>
        </div>
        <div class="active">
          <h3>IObit Malware Fighter will thoroughly scan your system hard drives and any other external storage device</h3>
          <p>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with IObit Malware Fighter Pro, everything is in one place and it takes us just a few 
            minutes every couple of days to do the same jobs with much more confidence. We have not had a problem since using your products."</p>
          <p class="name">software.informer.com</p>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- footer -->
  <div class="footer">
    <div class="wrapper">
      <!-- award -->
      <div class="award">
        <h2>Trusted and awarded by these medias</h2>
        <img src="<?php echo $pResUrl;?>images/award.png" alt="">
      </div>
      <!-- service -->
      <div class="service clearfix">
        <dl class="fl clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
          <dd class="fl">
            <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
            <p>
              We're confident that activating PRO edition will protect your PC all-round for <br>
              affordable price!
            </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h3>We accept</h3>
          </dd>
          <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
        </dl>
      </div>
      <!-- annotation -->
      <dl class="annotation">
        <dt>Note:</dt>
        <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
        <dd>*.We tested IObit Malware Figther PRO in our internal test lab. Your results may vary.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- end footer -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <div class="img-box"></div>
        <div class="number">Only <div class="countdown countdown2">
            <div class="scroll-tick"><strong>0</strong></div>
            <div class="scroll-tick"><strong>0</strong></div>
          </div>  thank-you gifts left
        </div>
      </div>
      <div class="price fl">
        
        <p><strong>$<b>19</b>.95</strong></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=imf83pciusd1995&ref=en-imf3pciusdloyal&aff=<?php echo $_GET['aff']?>&refs=purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-loyal');">
          Buy Now
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->
  <div class="pop-bg"></div>
  <div class="pop-box">
    <span class="close"></span>
    <h2>You Get  Extra $1 Off</h2>
    <div class="right-message">
      <h3>Offer Ends in <strong>59</strong>s</h3>
      <dl>
        <dt><strong>$<b>18</b>.95</strong> <del>$54.95 </del></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=imf83pc1895&ref=en-imf3pcpoployal&aff=<?php echo $_GET['aff']?>&refs=purchase_imf" 
               onclick=" ga('send', 'event', 'imf3pcpopbuy', 'buy', 'imfpurchase-loyal');" class="buybtn">Buy Now</a></dd>
      </dl>
    </div>
  </div>
  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
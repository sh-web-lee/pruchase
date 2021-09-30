<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
$refStr='';
if(in_array($_GET['to'],array('db_ac_asc_p1','db_ac_asc_p2'))){
  $refStr.='-'.$_GET['to'];
}
  include $pRootUrl.'include/common.inc.php';
  // if (empty($_GET['ref'])) $_GET['ref'] = 'en-israc';

$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
$refStr .= empty($_GET['ref']) ? '' : '-'.$_GET['ref'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>80% OFF on iFun Screen Recorder PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Clean, Fast and Secure PC Easily!">
<meta property="og:url" content="https://purchase.iobit.com/asc-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="80% OFF on iFun Screen Recorder PRO - IObit">
<meta property="og:description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Clean, Fast and Secure PC Easily!">
<meta property="og:image" content="https://purchase.iobit.com/2021/isr/aprisrac/images/snapshot-large.png?t=3">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/recorder-icon.png" mce_href="<?php echo $pRootUrl; ?>tpl/img/recorder-icon.png" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/recorder-icon.png" mce_href="<?php echo $pRootUrl; ?>tpl/img/recorder-icon.png" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://recorder.iobit.com/" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>iFun Screen Recorder PRO</h1>
        <p>Record your screen and webcam, edit your video, and add personal watermark</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" />
        <div class="discount fl">
          <h2>80% OFF</h2>
          <p>Exclusive for IObit Valued Users</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>ONLY: <strong>$7.99 </strong><del>$42.99</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=isr-acak&ref=en-israc<?= $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=ac_isr" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isrpurchase-ac');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Buy Now</span>
              </div>
            </a>
          </dd>
          <dd>1 Year / 1 PC</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <div class="feature wrapper">
    <h2>What iFun Screen Recorder PRO can do for you?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>Create HD & 4K Video</h3>
          <p>Get high resolution videos with advanced encoding algorithms while recording screen and webcam smoothly.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>Add Personal Watermark</h3>
          <p>Add personal watermark on your video to keep your video content on-brand and help your content from being stolen.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>High-FPS Game Recording</h3>
          <p>Experience no lag while recording your gameplay by using hardware-accelerated technology.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>Edit Video</h3>
          <p>Simply trim and cut your videos to the right length with ease.</p>
        </dd>
      </dl>
    </div>
    
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
		<dl class="active">
		  <dt><h3>User Review</h3></dt>
		  <dd>
		    <h4>I came across this free screen recorder and became a fan of it for its simple editing functions.</h4>
		  </dd>
		  <dd>Because I like to record the operation process to help people solve computer problems, and this recording software allows me to record with audio so that I can directly upload the edited video to YouTube after recording. It combines recording and editing, which is very convenient for bloggers who want to share tutorials video just like me!</dd>
		</dl>
		<dl>
		  <dt>
		  <h3>User Review</h3></dt>
		  <dd>
		    <h4>Hi, there! Your fantastic free screen recorder surprises me.</h4>
		  </dd>
		  <dd> I can record all these precious and wonderful moments with iFun Screen Recorder, especially for some live videos. The videos I record with ISR are extremely high-quality. I can save and share them with my friends. I was not sure of its services but the results I have got are far more amazing. It’s brilliant!</dd>
		</dl>
      <dl>
        <dt>
        <h3>User Review</h3></dt>
        <dd>
          <h4>Well, so far so great. iFun Screen Recorder has really been an all-in-one tool that is easy to use.</h4>
        </dd>
        <dd>
           It solves my problem of how to record screen on Windows. With ISR, I can take screenshots while HD recording and edit diverse captions for the video after recording. Then I send it to my Instagram and catch massive attention. This powerful screen recorder has helped drive my business forward. BTW, it’s totally free.
        </dd>
      </dl>
      
      <dl>
        <dt>
        <h3>User Review</h3></dt>
        <dd>
          <h4>As a secretary, I need to use screen recording software a lot.</h4>
        </dd>
        <dd> It is hard to find an ideal free screen recorder for me, but iFun Screen Recorder happens to be such a perfect tool for video-teleconference records and helps me a lot! I could record the HD screen with it and convert the video into different formats. I highly recommend ISR, and it deserves to be owned!</dd>
      </dl>
      
    </div>
    <ul class="users clearfix">
		<li class="active">
		  <div class="pic"><img src="<?php echo $pResUrl; ?>images/user2.png" alt="Enrico Valencia"></div>
		  <p>Enrico Valencia</p>
		</li>
		<li>
		  <div class="pic"><img src="<?php echo $pResUrl; ?>images/user4.png" alt="Robbins Hilton">
		  </div>
		  <p>Robbins Hilton</p>
		</li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/user1.png" alt="Elsie Weston">
        </div>
        <p>Elsie Weston</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/user3.png" alt="Marielle Irvine"></div>
        <p>Marielle Irvine</p>
      </li>
      
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Quickly record your screen and webcam on Windows PC now</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>ONLY: <strong>$7.99 </strong><del>$42.99</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=isr-acak&ref=en-israc<?= $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=ac_isr" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isrpurchase-ac');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Buy Now</span>
              </div>
            </a>
          </dd>
          <dd>1 Year / 1 PC</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- container end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <p class="annotation">Note: *.Data may vary based on different system or computer.</p>
      <!-- annotation end -->
      
      <!-- footer start -->
      <div class="footer">© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>EXCLUSIVE OFFER</h2>
        <p><strong>80% OFF </strong> to record your screen and webcam on any occasions.</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>$7.99 </strong><del>$42.99</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="https://www.iobit.com/buy.php?product=isr-acak&ref=en-israc<?= $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=ac_isr" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isrpurchase-ac');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Buy Now</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
<?php
  error_reporting(0);
  define("IObit", "IObit");
  if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';
  
  $refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

  $refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
  if(!empty($_GET['k'])){
    $refStr.='-'.$_GET['k'];
  }
  if(!empty($_GET['c'])){
    $refStr.='-'.$_GET['c'];
  }
  if(!empty($_GET['insur'])){
    $refStr.='-'.$_GET['insur'];
  }
  
  if(!empty($_GET['pop'])){
    $refStr.='-'.$_GET['pop'];
  }
  if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1].'-'.$matches[2];
    $refStr.='-'.$ver;
  }
  $refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Up to 85% OFF to Get Advanced SystemCare PRO</title>
  <link rel="stylesheet" href="<?php echo getStaticUrl('styles/style.css')?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <div id="container">
    <div id="touming"></div>
    <div id="layout">
      <div id="product-list" class="do">
        <div class="logo">
          <a href="https://www.iobit.com/en/index.php" target="_blank">
            <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="" width="46" height="16">
          </a>
        </div>
        <div class="title-logo">
          <img src="<?php echo getStaticUrl('images/NewYearBIGSALE.png')?>" alt="">
          <p>Take 85% OFF to Get the Best 4-in-1 PC Utilities</p>
        </div>
        <div class="product-content">
          <ul class="animate__animated animate__fadeInLeft">
            <li>
              <div class="li-top">
                <img src="<?php echo getStaticUrl('images/tag1.png')?>" alt="">
                <img src="<?php echo getStaticUrl('images/pro1.png')?>" alt="" style="position: relative;left: -8px">
              </div>
              <div class="li-bottom">
                <div class="price">
                  <span>$</span>
                  <b>16.77</b>
                  <s>$29.99</s>
                </div>
                <div class="btn">
                  <a
                    href="https://www.iobit.com/buy.php?product=asc141pc1677&ref=en-asc1pcjannewyear&aff=<?php echo $refStr?>&refs=purchase_asc"
                    onclick="ga('send', 'event', 'asc1677buy', 'buy', 'ascpurchase-2021newyear')">
                    <button type="button">Activate Now</button>
                  </a>
                </div>
                <div class="desc">
                  <p>Only $1.40 / Month</p>
                </div>
                <div class="save">
                  <p>Save $13.22</p>
                </div>
              </div>
            </li>
            <li>
              <div class="li-top">
                <img src="<?php echo getStaticUrl('images/tag2_1.png')?>" alt="">
                <img class="hide" src="<?php echo getStaticUrl('images/tag2.png')?>" alt="">
                <img src="<?php echo getStaticUrl('images/pro2-1.png')?>" alt="" style="position: relative;left: -5px">
                <img class="hide" src="<?php echo getStaticUrl('images/pro2.png')?>" alt="" style="position: relative;left: -7px">
              </div>
              <div class="li-bottom">
                <div class="price">
                  <span>$</span>
                  <b>19.99</b>
                  <s>$89.97</s>
                </div>
                <div class="btn">
                  <a
                    href="https://www.iobit.com/buy.php?product=asc143pc1999&ref=en-asc3pcjannewyear&aff=<?php echo $refStr?>&refs=purchase_asc"
                    onclick="ga('send', 'event', 'asc1999buy', 'buy', 'ascpurchase-2021newyear')">
                    <button type="button">Activate Now</button>
                  </a>
                </div>
                <div class="desc">
                  <p>Only $1.66 / Month </p>
                </div>
                <div class="save">
                  <p>Save $69.98</p>
                </div>
              </div>
            </li>

            <li>
              <div class="li-top">
                <img src="<?php echo getStaticUrl('images/super-value-pack.png')?>" alt="">
                <img class="hide" src="<?php echo getStaticUrl('images/super-value-pack-gray.png')?>" alt="">
                <img src="<?php echo getStaticUrl('images/85off.png')?>" alt="" style="position: relative;left: -5px">
                <img class="hide" src="<?php echo getStaticUrl('images/85off.png')?>" alt="" style="position: relative;left: -5px">
                <div class="top-cover">
                  <p>Hurry! Only <span class="num"> 100
                    </span> Left Today!</p>
                </div>
              </div>
              <div class="li-bottom">
                <div class="price">
                  <span>$</span>
                  <b>23.98</b>
                  <s>$149.90</s>
                </div>
                <div class="btn">
                  <a
                    href="https://www.iobit.com/buy.php?product=asc143pc2398&ref=en-asc3pciusdpf&aff=<?php echo $refStr?>&refs=purchase_asc"
                    onclick="ga('send', 'event', 'asc2398buy', 'buy', 'ascpurchase-2021newyear')">
                    <button type="button">Activate Now</button>
                  </a>
                </div>
                <div class="desc">
                  <p>Only $1.99 / Month</p>
                </div>
                <div class="save">
                  <p>Save $125.92</p>
                </div>
              </div>

              <div class="saleout hide"><img src="<?php echo getStaticUrl('images/saleout.png')?>" alt="" width="174" height="103"></div>

            </li>
          </ul>
        </div>
      </div>
      <div id="no-question">
        <div>
          <p>No More Worries about the Following Questions with Advanced SystemCare PRO</p>
          <div class="no-question_top-content">
            <div class="no-question_top-left">
              <ul>
                <li>
                  <img src="<?php echo getStaticUrl('images/ai-optimization.png')?>" alt="" width="354">
                  <p>Intelligently and automatically perform the premium </p>
                  <p>PC cleaning and optimization based on the status of your PC.</p>
                </li>
                <li>
                  <img src="<?php echo getStaticUrl('images/200-faster.png')?>" alt="" width="354">
                  <p>Automatically release RAM to stop unused processes and</p>
                  <p>reduce system stutter, speeding your PC up to 200% faster.</p>
                </li>
              </ul>
            </div>
            <div class="no-question_top-right">
              <div class="cover">
                <img src="<?php echo getStaticUrl('images/scan.png')?>" alt="" width="705">
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="no-question_bottom-left">
            <div class="cover">
              <img src="<?php echo getStaticUrl('images/lock.png')?>" alt="" width="100%" height="100%">
            </div>
          </div>
          <div class="no-question_bottom-right">
            <div class="cover">
              <ul>
                <li>
                  <img src="<?php echo getStaticUrl('images/300-faster.png')?>" alt="" height="124">
                  <p>Boost your Internet connection and accelerate download, </p>
                  <p>video viewing and online gaming up to 300% faster.</p>
                </li>
                <li>
                  <img src="<?php echo getStaticUrl('images/privacy-security.png')?>" alt="" height="124">
                  <p>Proactively detect and block security holes in real-time, and keep</p>
                  <p>your online personal data away from any untrusted access.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="product-advantages">
        <p>Enjoy Automatic Care Advanced SystemCare PRO Brings to You</p>
        <ul>
          <li>
            <div class="li-top">
              <img src="<?php echo getStaticUrl('images/icon.png')?>" alt="" width="169">
            </div>
            <div class="li-bottom">
              <h2>Auto Clean</h2>
              <p>
                junk files to keep your <br> PC running smoothly.
              </p>
            </div>
          </li>
          <li>
            <div class="li-top">
              <img src="<?php echo getStaticUrl('images/icon2.png')?>" alt="" width="169">
            </div>
            <div class="li-bottom">
              <h2>Auto Remove</h2>
              <p>
                ads and privacy traces for <br> safer browsing.
              </p>
            </div>
          </li>
          <li>
            <div class="li-top">
              <img src="<?php echo getStaticUrl('images/icon3.png')?>" alt="" width="140">
            </div>
            <div class="li-bottom">
              <h2>Auto Update</h2>
              <p>
                important software to the <br> latest version.
              </p>
            </div>
          </li>
        </ul>
      </div>
      <div id="super-value-pack">
        <h2>What More Will You Get from Super Value Pack?</h2>
        <div class="pack-list">
          <ul>
            <li>
              <img src="<?php echo getStaticUrl('images/pack-pro1.png')?>" alt="">
              <h3>IObit Uninstaller 10 PRO</h3>
              <p><s>$19.99</s>  1 PC / Year</p>
              <span>Remove Useless Plug-ins <i style="color: #ff3d1d;">for Cleaner PC</i></span>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/pack-pro2.png')?>" alt=""> 
              <h3>Smart Defrag 6 PRO</h3> 
              <p><s>$19.99</s>  1 PC / Year</p>
              <span>Optimize Hard Drive <i style="color: #ff3d1d;">for Faster PC</i></span>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/pack-pro3.png')?>" alt="">
              <h3>Protected Folder</h3>
              <p><s>$19.95</s>  1 PC / Year</p>
              <span>Protect Important Files <i style="color: #ff3d1d;">for Secured Privacy</i></span>
            </li>
          </ul>
          <div class="button">
            <a href="https://www.iobit.com/buy.php?product=asc143pc2398&ref=en-asc3pciusdpf&aff=<?php echo $refStr?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc2398buy', 'buy', 'ascpurchase-2021newyear')">
            <button>Get It Now</button>
          </a>
            
          </div>
          <div class="daojishi">Hurry! Only <span class="num" style="color: #ff2e14;">100</span> Left Today!</div>
        </div>
      </div>
      <div id="user-list">
        <p>User and Media Review</p>
        <div class="users-avator" id="carousel">
          <div><img data-id="3" src="<?php echo getStaticUrl('images/users/cnet.png')?>" alt="" width="100%" height="100%"></div>
          <div><img data-id="0" src="<?php echo getStaticUrl('images/users/Ryan-Hill.png')?>" alt="" width="100%" height="100%"></div>
          <div><img data-id="1" src="<?php echo getStaticUrl('images/users/Lyle-Stelmaschuk.png')?>" alt="" width="100%" height="100%"></div>
          <div><img data-id="2" src="<?php echo getStaticUrl('images/users/richard-preston.png')?>" alt="" width="100%" height="100%"></div>
          <div><img data-id="4" src="<?php echo getStaticUrl('images/users/richard-beavers.png')?>" alt="" width="100%" height="100%"></div>
          <div><img data-id="5" src="<?php echo getStaticUrl('images/users/Brendon-O\'Rourke.png')?>" alt="" width="100%" height="100%"></div>
          <div><img data-id="6" src="<?php echo getStaticUrl('images/users/Anthony-Baker.png')?>" alt="" width="100%" height="100%"></div>
        </div>
        <div class="comments">
          <div class="arrow-left" onclick="arrowLeft()">
            <img src="<?php echo getStaticUrl('images/left.png')?>" alt="">
          </div>
          <div class="comments-content">
            <ul>
            <li class="on">
                <p>"Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many
                  aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk
                  files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC
                  experience."</p>
                <h3>Cnet</h3>
              </li>
              <li>
                <p>"Advanced system care 14 is the most complete all in one system on the market. I've been using the
                  products for years now and every year there getting better the new easy interface the deep cleaning
                  you get with the software its breeze to use one click and its doing its magic all the other options
                  that come within system are great also the empty folder finder the internet booster even game booster
                  rocks!! I think it's one of the best cleaning systems out there today."</p>
                <h3>Ryan Hill</h3>
              </li>
              <li>
                <p>"I have purchased many different software programs to speed up and fix problems with my PC.
                  Unfortunately, most of them really didn't help or make a difference until I tried out Advanced System
                  Care 14. I love that there are so many options and solutions to fix any problem. It's amazing how much
                  faster my PC is now after the first scan and repair. Definitely the best product I have come across."
                </p>
                <h3>Lyle Stelmaschuk</h3>
              </li>
              <li>
                <p>"I love using Advanced SystemCare 14 Beta. It is fast. It cleans up privacy traces, junk files and
                  registry fragments. I especially like the sensitive area access permission pop-up. The first time an
                  app tries to access sensitive files, a window opens to either allow access or deny. Once permission is
                  granted for an app, the pop-up no longer occurs for that app. I know my sensitive files will be kept
                  safe."</p>
                <h3>Richard Preston</h3>
              </li>


              <li>
                <p>"I have tried various programs over time which have promised to keep my computers running problem
                  free. I turned to ASC years ago using the free version at first. Finding that I no longer suffered
                  from the niggles and bloating that occurs I upgraded to the Paid version and have never looked back
                  since. Advanced SystemCare Pro is the only one I would recommend based on my experiences. I also use
                  IObit Uninstaller, Smart Defrag and Driver Booster just make things much better."</p>
                <h3>Richard Beavers</h3>
              </li>
              <li>
                <p>"I have been using ASC for years now. I have recently tested the latest version V14. And it is by far
                  the most comprehensive version to date. IObit continue to improve their Products and Technology. With
                  more options and easier navigation that help find solutions. I don't need to shop elsewhere."</p>
                <h3>Brendon O'Rourke</h3>
              </li>
              <li>
                <p>"The features in Advanced System Care (ASC) 14 are awesome and the overall appearance is clean,
                  fresh, and modern. I have used other all-in-one system maintenance programs, but none have been as
                  effective as ASC 14. The program reduces and eliminates the use of non-essential resources which allow
                  your computer to run cooler and more efficiently. This product is amazing and the best in class. If
                  you care about your laptop or pc, use Advanced System Care 14!"</p>
                <h3>Anthony Baker</h3>
              </li>
            </ul>
          </div>
          <div class="arrow-right" onclick="arrowRight()">
            <img src="<?php echo getStaticUrl('images/right.png')?>" alt="">
          </div>
        </div>
      </div>
      <div id="awards-list">
        <h3>World-wide Awards</h3>
        <p>As being trusted and awarded by these world-class media for more than a decade, it's totally the right one
          you should own.</p>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="" height="50" width="967">
        <ul>
          <li>
            <img src="<?php echo getStaticUrl('images/huizhang.png')?>" alt="" width="58" height="58">
            <div>
              <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
              <p>We’re confident that activating PRO edition will improve your PC <br> performance for affordable price!
              </p>
            </div>
          </li>
          <li>
            <p>We accept</p>
            <img src="<?php echo getStaticUrl('images/accepts.png')?>" alt="" height="39" width="458">
          </li>
        </ul>
      </div>
      <div id="footer">
        <p>Note:</p>
        <p>*.Data may vary based on different system or computer.</p>
        <p>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.
        </p>
        <p class="center">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
      </div>
    </div>
    <div class="banner banner1 animate__animated animate__fadeInUp">
      <div class="banner1200">
        <div class="iconImg">
          <img src="<?php echo getStaticUrl('images/3pcs-fc.png')?>" alt="">
        </div>
        <div class="countDown">
          <div class="box">
            <div class="bai">
              <div class="time">
                <span>0</span>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
                <span>6</span>
                <span>7</span>
                <span>8</span>
                <span>9</span>
              </div>
            </div>
            <div class="shi">
              <div class="time">
                <span>0</span>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
                <span>6</span>
                <span>7</span>
                <span>8</span>
                <span>9</span>
              </div>
            </div>
            <div class="ge">
              <div class="time">
                <span>0</span>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
                <span>6</span>
                <span>7</span>
                <span>8</span>
                <span>9</span>
              </div>
            </div>
          </div>
          <p>Hurry! Only <span class="num">100</span> left now!</p>
        </div>


        <div class="buy">
          <p>
            <span>$</span>
            <b>23.98</b>
            <s>$149.90</s>
          </p>
          <a href="https://www.iobit.com/buy.php?product=asc143pc2398&ref=en-asc3pciusdpf&aff=<?php echo $refStr?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc2398buy', 'buy', 'ascpurchase-2021newyear')">
            <button>Activate Now</button>
          </a>
        </div>

      </div>
    </div>
    <div class="banner banner2 animate__animated animate__fadeInUp">
      <div class="banner1200">
        <div class="iconImg img1">
          <img src="<?php echo getStaticUrl('images/pro3-2.png')?>" alt="">
        </div>
        <div class="iconImg img2">
          <img src="<?php echo getStaticUrl('images/75-OFF.png')?>" alt="">
        </div>
        <div class="buy">
          <p>
            <span>$</span>
            <b>19.99</b>
            <s>$89.97</s>
          </p>
          <a  href="https://www.iobit.com/buy.php?product=asc143pc1999&ref=en-asc3pcjannewyear&aff=<?php echo $refStr?>&refs=purchase_asc" onclick="ga('send', 'event', 'asc1999buy', 'buy', 'ascpurchase-2021newyear')">
            <button type="button">Activate Now</button>
          </a>

        </div>
      </div>
    </div>

    <div class="tc">
      <div class="tc-box animate__animated animate__bounceIn tc1" style="display: none;">
        <div class="cha" onclick="getClose()">
          <img src="<?php echo getStaticUrl('images/cha.png')?>" alt="" width="24" height="24">
        </div>
        <div class="box-top">
          <p>The 2021st visitor today! Come and win our <span>extra 10% OFF!</span></p>
          <div class="img-posi">
            <img src="<?php echo getStaticUrl('images/LuckyYou!.png')?>" alt="" width="235">
          </div>
        </div>
        <div class="box-bottom">
          <img src="<?php echo getStaticUrl('images/pro4.png')?>" alt="" width="166" height="170">
          <div>
            <p>Hurry! This Offer Ends in <span class="shi1">6</span><span class="fen1">0</span> s</p>
            <ul>
              <li>
                <p>Original Price</p>
                <p style="text-decoration: line-through;">$149.95</p>
              </li>
              <li>
                <p>Sale Price</p>
                <p style="text-decoration: line-through;">$21.95</p>
              </li>
              <li>
                <p>Lucky Offer Price</p>
                <p>$19.75</p>
              </li>
            </ul>
            <div style="text-align: center; padding-left: 5px;">
              <a
                href="https://www.iobit.com/buy.php?product=asc145pc1975&ref=en-asc5pcpopjannewyear&aff=<?php echo $refStr?>&refs=purchase_asc"
                onclick="ga('send', 'event', 'asc1975buy', 'buy', 'ascpurchase-2021newyear')">
                <button>Get It Now</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="tc-box animate__animated animate__bounceIn tc2">
        <div class="cha" onclick="getClose()">
          <img src="<?php echo getStaticUrl('images/cha.png')?>" alt="" width="24" height="24">
        </div>
        <div class="box-top">
          <p>The 2021st visitor today! Come and get our <span>extra 10% OFF!</span></p>
          <div class="img-posi">
            <img src="<?php echo getStaticUrl('images/LuckyYou!.png')?>" alt="" width="235">
          </div>
        </div>
        <div class="box-bottom">
          <img src="<?php echo getStaticUrl('images/3pcs.png')?>" alt="" width="218" height="146">
          <div>
            <p>Hurry! This Offer Ends in <span class="shi1">6</span><span class="fen1">0</span> s</p>
            <ul>
              <li>
                <p>Original Price</p>
                <p style="text-decoration: line-through;">$149.90</p>
              </li>
              <li>
                <p>Sale Price</p>
                <p style="text-decoration: line-through;">$23.98</p>
              </li>
              <li>
                <p>Lucky Offer Price</p>
                <p>$21.98</p>
              </li>
            </ul>
            <div style="text-align: center;padding-left: 5px;">
              <a
                href="https://www.iobit.com/buy.php?product=asc143pc2198a&ref=en-asc3pcpopiusdpf&aff=<?php echo $refStr?>&refs=purchase_asc"
                onclick="ga('send', 'event', 'asc2198buy', 'buy', 'ascpurchase-2021newyear')">
                <button>Get It Now</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo getStaticUrl('scripts/index.js')?>"></script>
  <script src="<?php echo getStaticUrl('scripts/cookie.js')?>"></script>
  <script src="<?php echo getStaticUrl('scripts/carousel.js')?>"></script>
  <script src="<?php echo getStaticUrl('scripts/snowflakes.min.js')?>"></script>
  <script>
    $('#carousel').carousel({
      curDisplay: 0,
      autoPlay: false,
      interval: 5000
    });
    var sf = new Snowflakes({
      color: "#fff",
      count: 75,
      minOpacity: 0.8,
      maxOpacity: 1
    });
  </script>
</body>

</html>

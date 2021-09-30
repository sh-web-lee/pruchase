<?php
error_reporting(0);
define("IObit", "IObit");
header("location:https://recorder.itopvpn.com/aff/isrgeneral".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));exit();
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl.'include/common.inc.php';

$refStr = '';

$refStr .= empty($_GET['ref']) ? 'isr1g21' : $_GET['ref'];

$buyRefStr .= empty($_GET['ref']) ? 'enaff_isr1_2021general' : $_GET['ref'];

$affStr = empty($_GET['aff']) ? '' : $_GET['aff'];

$buyUrl = "https://www.iobit.com/buy.php?product=enaffisr1pc1year2149&ref=".$buyRefStr."&aff=". $affStr;

if(!empty($_GET['ref'])){

    if(preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

        $buyUrl = "https://iobit.onfastspring.com/ifun-screen-recorder-pro-1-year-subscription-1-pc-2149";

        if ($arr[1][0] != null) {

            $buyUrl = "https://macbooster.7eer.net/c/" . $arr[1][0] . "/1041108/4385";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>The Best Screen Recorder to Capture Anything on Your PC</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/swiper3.min.css">
    <link rel="stylesheet" href="./style/animate.min.css">
    <link rel="stylesheet" href="./style/index.css">
    <?php echo $gJavascript['public'];?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
    <div class="container">
        <div class="g-main">
            <!-- banner -->
            <div class="m-banner">
                <div class="m-banner-bg">
                    <div class="mask mask-left"></div>
                    <div class="mask mask-right"></div>
                </div>
                <div class="banner">
                    <a href="https://www.iobit.com" class="logo" target="_blank"></a>
                    <div class="banner-content wow fadeInUp" data-wow-duration=".5s">
                        <h1>iFun Screen Recorder</h1>
                        <div class="sub-title">One-click to Capture Everything You Want on Your PC Screen</div>
                        <div class="reviews">
                            <span>Reviews ( 1126 )</span>
                            <ul class="star">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="banner-btn wow fadeInUp">
                        <a class="btn free-btn" onclick="ga('send', 'event', 'isrdl-en', 'download', 'isr1g21')"
                           href="https://www.iobit.com/downloadaffisr.php?ref=<?= $refStr; ?>&aff=<?= $affStr; ?>">
                            <div class="free-btn-bg"></div>
                            <div class="text">Get a Free Trial Now</div>
                            <div class="windows">For Windows 10/8/7</div>
                        </a>
                        <a class="btn free-btn-ie" onclick="ga('send', 'event', 'isrdl-en', 'download', 'isr1g21')"
                           href="https://www.iobit.com/downloadaffisr.php?ref=<?= $refStr; ?>&aff=<?= $affStr; ?>">
                            <div class="free-btn-bg"></div>
                            <div class="text"></div>
                            <div class="windows"></div>
                        </a>
                        <a class="btn buy-btn" onclick="ga('send', 'event', 'isr1ybuy', 'buy', 'enaffisr12021general')"
                           href="<?= $buyUrl; ?>">
                            <div class="buy-btn-bg"></div>
                            <span class="text">Buy Now & Save 50%</span>
                            <i class="img"><img src="./images/tag.png" alt="tag"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- features -->
            <div class="m-features">
                <div class="features">
                    <div class="features-bg"></div>
                    <div class="features-content">
                        <h2 class="wow fadeInUp" data-wow-duration=".5s">An Easy-to-use Screen Recorder with Powerful Features</h2>
                        <ul class="features-list">
                            <li>
                                <dl>
                                    <dt class="wow fadeInUp" data-wow-delay=".5s"><img src="./images/feature01.png" alt="feature01"></dt>
                                    <dd class="wow fadeInUp"><h3>Record Any Area of Your Screen</h3></dd>
                                    <dd class="wow fadeInUp"><p>Easily capture your desktop, websites, video calls – anything on your PC screen, along with webcam and audio.</p></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt class="wow fadeInUp" data-wow-delay=".5s"><img src="./images/feature02.png" alt="feature02"></dt>
                                    <dd class="wow fadeInUp"><h3>Create Personal Watermark</h3></dd>
                                    <dd class="wow fadeInUp"><p>Add your personal watermark to your video recording to keep your content on-brand and help your content from being stolen.</p></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt class="wow fadeInUp" data-wow-delay=".5s"><img src="./images/feature03.png" alt="feature03"></dt>
                                    <dd class="wow fadeInUp"><h3>Enjoy High-quality Games Recording</h3></dd>
                                    <dd class="wow fadeInUp"><p>Record gameplay smoothly with FPS Optimization & create a stable recording with GPU acceleration.</p></dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- enjoy -->
            <div class="g-enjoy">
                <div class="enjoy">
                    <div class="enjoy-point-up"></div>
                    <div class="enjoy-point-down"></div>
                    <div class="enjoy-content">
                        <h2 class="wow fadeInUp" data-wow-duration=".5s">Enjoy Excellent Screen Recording Experience</h2>
                        <div class="m-enjoy">
                            <ul class="enjoy-list wow fadeInUp">
                                <li class="active">
                                    <dl>
                                        <dt><img src="./images/function01-active.png" alt="function01"></dt>
                                        <dd>
                                            <h3>Record Your Screen<i></i></h3>
                                            <p>Entire PC screen or any selected area.</p>
                                        </dd>
                                        <dd class="img-box">
                                            <div class="img wow fadeInUp">
                                                <img src="./images/function01-image.png" alt="function01-image">
                                            </div>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".1s">
                                    <dl>
                                        <dt><img src="./images/function02.png" alt="function02"></dt>
                                        <dd>
                                            <h3>Record Your Webcam<i></i></h3>
                                            <p>Capture footage from your webcam.</p>
                                        </dd>
                                        <dd class="img-box">
                                            <div class="img wow fadeInUp">
                                                <img src="./images/function02-image.png" alt="function02-image">
                                            </div>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".2s">
                                    <dl>
                                        <dt><img src="./images/function03.png" alt="function03"></dt>
                                        <dd>
                                            <h3>Record the Screen with Audio<i></i></h3>
                                            <p>Record the screen with audio from your PC, microphone, both or neither.</p>
                                        </dd>
                                        <dd class="img-box">
                                            <div class="img wow fadeInUp">
                                                <img src="./images/function03-image.png" alt="function03-image">
                                            </div>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    <dl>
                                        <dt><img src="./images/function04.png" alt="function04"></dt>
                                        <dd>
                                            <h3>Edit Your Video<i></i></h3>
                                            <p>Trim video length and add your own customized watermark.</p>
                                        </dd>
                                        <dd class="img-box">
                                            <div class="img wow fadeInUp">
                                                <img src="./images/function04-image.png" alt="function04-image">
                                            </div>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".4s">
                                    <dl>
                                        <dt><img src="./images/function05.png" alt="function05"></dt>
                                        <dd>
                                            <h3>Multiple Output/Convert Formats<i></i></h3>
                                            <p>Your recorded videos can be exported to a wide range of formats, like MP4, AVI, etc.</p>
                                        </dd>
                                        <dd class="img-box">
                                            <div class="img wow fadeInUp">
                                                <img src="./images/function05-image.png" alt="function05-image">
                                            </div>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                            <div id="enjoyImg" class="enjoy-img wow fadeInUp">
                                <div class="img function01-img">
                                    <img class="main" src="./images/function01-image.png" alt="function01-image">
                                </div>
                                <div class="img function02-img">
                                    <img class="main" src="./images/function02-image.png" alt="function01-image">
                                    <img class="icon" src="./images/function02-image-show.png" alt="function02-image-show">
                                </div>
                                <div class="img function03-img">
                                    <img class="main" src="./images/function03-image.png" alt="function01-image">
                                    <img class="icon" src="./images/function03-image-show.png" alt="function03-image-show">
                                </div>
                                <div class="img function04-img">
                                    <img class="main" src="./images/function04-image.png" alt="function01-image">
                                </div>
                                <div class="img function05-img">
                                    <img class="main" src="./images/function05-image.png" alt="function01-image">
                                    <img class="icon" src="./images/function05-image-show.png" alt="function05-image-show">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="enjoy-btn wow fadeInUp" data-wow-delay=".2s">
                        <a class="btn free-btn" onclick="ga('send', 'event', 'isrdl-en', 'download', 'isr1g21')"
                           href="https://www.iobit.com/downloadaffisr.php?ref=<?= $refStr; ?>&aff=<?= $affStr; ?>">
                            <div class="free-btn-bg"></div>
                            <div class="text">Get a Free Trial Now</div>
                            <div class="windows">For Windows 10/8/7</div>
                        </a>
                        <a class="btn free-btn-ie" onclick="ga('send', 'event', 'isrdl-en', 'download', 'isr1g21')"
                           href="https://www.iobit.com/downloadaffisr.php?ref=<?= $refStr; ?>&aff=<?= $affStr; ?>">
                            <div class="free-btn-bg"></div>
                            <div class="text"></div>
                            <div class="windows"></div>
                        </a>
                        <a class="btn buy-btn" onclick="ga('send', 'event', 'isr1ybuy', 'buy', 'enaffisr12021general')"
                           href="<?= $buyUrl; ?>">
                            <div class="buy-btn-bg"></div>
                            <span class="text">Buy Now & Save 50%</span>
                            <i class="img"><img src="./images/tag.png" alt="tag"></i>
                        </a>
                    </div>
                    <div class="enjoy-bg"></div>
                </div>
            </div>
            <!-- count -->
            <div class="m-count">
                <div class="count">
                    <div class="count-bg"></div>
                    <h2 class="wow fadeInUp">Whenever You Need a Screen Recorder, You can Count on Us</h2>
                    <ul class="count-list wow fadeInUp" data-wow-delay=".2s">
                        <li>
                            <div class="mask">
                                <h3>WORK</h3>
                                <p>There are no better ways to note than iFun Screen Recorder to keep every single word in the conference. You don’t allow any small details at work to lose, neither do we.</p>
                            </div>
                            <div class="count-img">
                                <img src="./images/count01-mask.png" alt="count01">
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <h3>EDUCATION</h3>
                                <p>iFun Screen Recorder helps to memorize the points you missed and review things you learned in the online courses.</p>
                            </div>
                            <div class="count-img">
                                <img src="./images/count02-mask.png" alt="count02">
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <h3>GAME</h3>
                                <p>Record your gaming moment smoothly with 60 FPS right away and share the amazing  gamplay experience with others.</p>
                            </div>
                            <div class="count-img">
                                <img src="./images/count03-mask.png" alt="count03">
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <h3>PERSONAL</h3>
                                <p>Taking advantage of its Facecam to record yourself in a video, showing your expressions and explanations to others. Let them understand the videos better.</p>
                            </div>
                            <div class="count-img">
                                <img src="./images/count04-mask.png" alt="count04">
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-container swiper1 wow fadeInUp" data-wow-duration="1s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="mask">
                                    <h3>WORK</h3>
                                    <p>There are no better ways to note than iFun Screen Recorder to keep every single word in the conference. You don’t allow any small details at work to lose, neither do we.</p>
                                </div>
                                <div class="count-img">
                                    <img src="./images/count01-mask.png" alt="count01">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mask">
                                    <h3>EDUCATION</h3>
                                    <p>iFun Screen Recorder helps to memorize the points you missed and review things you learned in the online courses.</p>
                                </div>
                                <div class="count-img">
                                    <img src="./images/count02-mask.png" alt="count02">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mask">
                                    <h3>GAME</h3>
                                    <p>Record your gaming moment smoothly with 60 FPS right away and share the amazing  gamplay experience with others.</p>
                                </div>
                                <div class="count-img">
                                    <img src="./images/count03-mask.png" alt="count03">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mask">
                                    <h3>PERSONAL</h3>
                                    <p>Taking advantage of its Facecam to record yourself in a video, showing your expressions and explanations to others. Let them understand the videos better.</p>
                                </div>
                                <div class="count-img">
                                    <img src="./images/count04-mask.png" alt="count04">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- comment -->
            <div class="m-comment">
                <div class="comment">
                    <div class="comment-header">
                        <div class="title wow fadeInUp">
                            <h2>What Others Say</h2>
                            <p>Users are satisfied using our screen recorder, and want to share their experience to you.</p>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper-container swiper2 wow fadeInUp" data-wow-duration="1s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <dl>
                                    <dt><img src="./images/RobbinsHilton.png" alt="Robbins Hilton"></dt>
                                    <dd><p>Hi, there! Your fantastic screen recorder surprises me. I can record all these precious and wonderful moments with iFun Screen Recorder, especially for some live videos. The videos I record with iFun Screen Recorder are extremely high-quality. I can save and share them with my friends. I was not sure of its services but the results I have got are far more amazing. It’s brilliant!</p></dd>
                                    <dd><h4>Robbins Hilton</h4></dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <dl>
                                    <dt><img src="./images/ElsieWeston.png" alt="Elsie Weston"></dt>
                                    <dd><p>Well, so far so great. iFun Screen Recorder has really been an all-in-one tool that is easy to use. It solves my problem of how to record screen on Windows. With iFun Screen Recorder, I can take screenshots while HD recording and edit diverse captions for the video after recording. Then I send it to my Instagram and catch massive attention. This powerful screen recorder has helped drive my business forward. BTW, it’s totally free.</p></dd>
                                    <dd><h4>Elsie Weston</h4></dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <dl>
                                    <dt><img src="./images/MarielleIrvine.png" alt="Marielle Irvine"></dt>
                                    <dd><p>As a secretary, I need to use screen recording software a lot. It is hard to find an ideal screen recorder for me, but iFun Screen Recorder happens to be such a perfect tool for video-teleconference records and helps me a lot! I could record the HD screen with it and convert the video into different formats. I highly recommend iFun Screen Recorder, and it deserves to be owned!</p></dd>
                                    <dd><h4>Marielle Irvine</h4></dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <dl>
                                    <dt><img src="./images/EnricoValencia.png" alt="Enrico Valencia"></dt>
                                    <dd><p>I came across this  screen recorder and became a fan of it for its simple editing functions. Because I like to record the operation process to help people solve computer problems, and this recording software allows me to record with audio so that I can directly upload the edited video to YouTube after recording. It combines recording and editing, which is very convenient for bloggers who want to share tutorials video just like me!</p></dd>
                                    <dd><h4>Enrico Valencia</h4></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- action -->
            <div class="m-action">
                <div class="action">
                    <div class="action-img wow fadeInLeft">
                        <img src="./images/action.png" alt="action">
                    </div>
                    <div class="action-content wow fadeInRight">
                        <div class="title">Get iFun Screen Recorder to Capture All the Actions on Screen</div>
                        <div class="action-btn">
                            <a class="btn free-btn" onclick="ga('send', 'event', 'isrdl-en', 'download', 'isr1g21')"
                               href="https://www.iobit.com/downloadaffisr.php?ref=<?= $refStr; ?>&aff=<?= $affStr; ?>">
                                <div class="free-btn-bg"></div>
                                <div class="text">Get a Free Trial Now</div>
                                <div class="windows">For Windows 10/8/7</div>
                            </a>
                            <a class="btn free-btn-ie" onclick="ga('send', 'event', 'isrdl-en', 'download', 'isr1g21')"
                               href="https://www.iobit.com/downloadaffisr.php?ref=<?= $refStr; ?>&aff=<?= $affStr; ?>">
                                <div class="free-btn-bg"></div>
                                <div class="text"></div>
                                <div class="windows"></div>
                            </a>
                            <a class="btn buy-btn" onclick="ga('send', 'event', 'isr1ybuy', 'buy', 'enaffisr12021general')"
                               href="<?= $buyUrl; ?>">
                                <div class="buy-btn-bg"></div>
                                <span class="text">Buy Now & Save 50%</span>
                                <i class="img"><img src="./images/tag.png" alt="tag"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- payment -->
            <div class="m-payment">
                <div class="payment">
                    <div class="try wow fadeInLeft">
                        <dl>
                            <dt><img src="./images/moneyback.png" alt="moneyback"></dt>
                            <dd>
                                <div class="title">Try it RISK FREE - with our up to 30-day Money Back Guarantee</div>
                                <p>We're confident that activating PRO edition will give you better recording experience for affordable price!</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="payment-img wow fadeInRight">
                        <dl>
                            <dt>We accept</dt>
                            <dd class="img-pc"><img src="./images/payment.png" alt="payment"></dd>
                            <dd class="img-mobile">
                                <div><img src="./images/payment-m1.png" alt="payment1"></div>
                                <div><img src="./images/payment-m2.png" alt="payment2"></div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="footer wow fadeIn" data-wow-delay=".2s">Copyright © 2005 - 2021 IObit. All Rights Reserved</div>
            </div>
        </div>
    </div>
    <script src="./script/jquery-1.12.4.js"></script>
    <script src="./script/swiper3.min.js"></script>
    <script src="./script/wow.min.js"></script>
    <script src="./script/index.js"></script>
    <script>
        if (!isIE()) {
            $('.free-btn').css('display', 'block')
            $('.free-btn-ie').css('display', 'none')
            JSLoad({
                url: 'script/wow.min.js',
                callback: function() {
                    new WOW().init()
                }
            })
        } else {
            $('.free-btn').css('display', 'none')
            $('.free-btn-ie').css('display', 'block')
        }
        function isIE() {
            if(!!window.ActiveXObject || "ActiveXObject" in window){
            return true;
            }else{
            return false;
        　　 }
        }
        function JSLoad(args) {
            s = document.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.setAttribute("src", args.url);
            s.onload = s.onreadystatechange = function () {
                if (!s.readyState || s.readyState == "loaded" || s.readyState == "complete") {
                    if (typeof args.callback == "function") args.callback(this, args);
                    s.onload = s.onreadystatechange = null;
                    try {
                        s.parentNod;
                        s.parentNode.removeChild(s);
                    } catch (e) {}
                }
            };
            document.getElementsByTagName("body")[0].appendChild(s);
        }
        var swiper1 = new Swiper('.swiper1', {
            pagination: {
                el: '.swiper-pagination',
            },
            pagination : '.swiper-pagination',
            slidesPerView: 'auto',
            centeredSlides: true,
            loop: false
        })
        var swiper = new Swiper('.swiper2', {
            spaceBetween: 16,
            slidesPerView: 'auto',
            centeredSlides: true,
            loop: true,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    </script>
</body>
</html>
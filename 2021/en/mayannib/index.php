<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$entryIsPdts = false;

$entryIsPdts = preg_match("/^p_/", $_GET['ref']);

$refStr = empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['name']) ? '' : ('-' . $_GET['name']);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Join our party now to get 90% off birthday pack - IObit</title>
    <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/index.css')?>">
      <script>
          var queryStr = <?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
          window.location.replace('../asc/index.php' + queryStr);
      </script>
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>
  </head>
  <body>
    <div class="container">
      <div class="g-main">
        <!-- banner -->
        <div class="banner">
          <div class="banner-cont">
            <a href="https://www.iobit.com/en/index.php" target="_blank" class="logo"><img src=<?php echo getStaticUrl('images/logo.png')?>" alt="logo"></a>
            <div class="banner-title">
              <div class="small">It's Party Time!</div>
              <div class="big">Open Your <i></i> OFF Birthday Pack</div>
            </div>
            <div class="date">May 19 - June 21</div>
            <div class="img">
              <img src=<?php echo getStaticUrl('images/banner-product.png')?>" alt="banner-product">
            </div>
            <div class="m-product">
              <h3 class="title">Our <i>Birthday Pack</i> Includes</h3>
              <ul>
                <li>
                  <div class="name">Advanced SystemCare PRO <i>(1 year / 3 PCs)</i></div>
                  <div class="price">$89.97</div>
                </li>
                <li>
                  <div class="name">Driver Booster PRO <i>(1 year / 3 PCs)</i></div>
                  <div class="price">$74.85</div>
                </li>
                <li>
                  <div class="name">IObit Uninstaller PRO <i>(1 year / 3 PCs)</i></div>
                  <div class="price">$59.93</div>
                </li>
                <li>
                  <div class="name">IObit Malware Fighter PRO <i>(1 year / 3 PCs)</i></div>
                  <div class="price">$54.95</div>
                </li>
                <li>
                  <div class="name">IObit Software Updater PRO <i>(1 year / 3 PCs)</i></div>
                  <div class="price">$29.99</div>
                </li>
                <li>
                  <div class="name">Smart Defrag PRO <i>(1 year / 3 PCs)</i></div>
                  <div class="price">$39.99</div>
                </li>
              </ul>
              <div class="m-price">
                <div class="price">
                  <div class="new">
                    <i>$</i>29.99
                  </div>
                  <div class="old">$349.68</div>
                  <div class="tag">90<i>% OFF</i></div>
                </div>
                <a class="btn" href="https://www.iobit.com/buy.php?product=ascdbiuimfisusd2999&ref=en-ascdbiuimfisusdanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'bpackbuy', 'buy', 'purchase-2021annib')">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
           <!-- packs -->
          <div class="pack-cont">
            <h3><i>85</i>% OFF PC Optimization Packs are also Here for You</h3>
            <div class="pack-list">
              <div class="pack-item">
                <dl>
                  <dt><img src=<?php echo getStaticUrl('images/pack01.png')?>" alt="pack01"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Clean, speed up and protect your PC</li>
                      <li><i></i>Update drivers and components for smoother PC</li>
                      <li><i></i>Uninstall programs and plugins to free up space</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>$</i>32.92</div>
                    <div class="old">$224.75</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=2020ascdbiu3292&ref=en-ascdbiuanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'ascdbiubuy', 'buy', 'purchase-2021annib')">Buy Now</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src=<?php echo getStaticUrl('images/pack02.png')?>" alt="pack02"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Clean, speed up and protect your PC</li>
                      <li><i></i>Update drivers and components for smoother PC</li>
                      <li><i></i>Easily Update outdated programs</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>$</i>29.22</div>
                    <div class="old">$194.81</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=2021ascdbisu2922&ref=en-ascdbisuanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'ascdbisubuy', 'buy', 'purchase-2021annib')">Buy Now</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src=<?php echo getStaticUrl('images/pack03.png')?>" alt="pack03"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Clean, speed up and protect your PC</li>
                      <li><i></i>Update drivers and components for smoother PC</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>$</i>24.97</div>
                    <div class="old">$164.82</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=2020ascdb2497&ref=en-ascdbanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'purchase-2021annib')">Buy Now</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src=<?php echo getStaticUrl('images/pack04.png')?>" alt="pack04"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Clean, speed up and protect your PC</li>
                      <li><i></i>Uninstall programs and plugins to free up space</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>$</i>22.95</div>
                    <div class="old">$149.90</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=asciu2295&ref=en-asciuanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'asciubuy', 'buy', 'purchase-2021annib')">Buy Now</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- product -->
          <div class="product-cont">
            <h3>Or up to <i>75</i>% OFF to Get Product that Meets Your Daily Needs</h3>
            <div class="product-list">
              <div class="product-item mr">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product01.png')?>" alt="product01">
                </div>
                <div class="info">
                  <div class="title">Advanced Systemcare PRO</div>
                  <div class="desc">The best PC optimization utility that you can turn to. It make your old PC run like new again.</div>
                  <div class="price">
                    <div class="new">$19.99</div>
                    <div class="old">$89.97</div>
                    <div class="tag">75% <i>OFF</i></div>
                  </div>
                  <a href="https://www.iobit.com/buy.php?product=asc3pc1999&ref=en-asc3pcanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'ascbuy', 'buy', 'purchase-2021annib')" class="btn">Buy Now</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product02.png')?>" alt="product02">
                </div>
                <div class="info">
                  <div class="title">Driver Booster PRO</div>
                  <div class="desc">The best driver updater to update drivers and fix device issues with 4,500,000+ driver database.</div>
                  <div class="price">
                    <div class="new">$22.95</div>
                    <div class="old">$74.85</div>
                    <div class="tag">70% <i>OFF</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=db3pc2295&ref=en-db3pcanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'dbbuy', 'buy', 'purchase-2021annib')">Buy Now</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product03.png')?>" alt="product03">
                </div>
                <div class="info">
                  <div class="title">IObit Uninstaller PRO</div>
                  <div class="desc">Powerful uninstaller you need to make programs and plugins uninstallation a breeze.</div>
                  <div class="price">
                    <div class="new">$16.77</div>
                    <div class="old">$59.93</div>
                    <div class="tag">70% <i>OFF</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=iu3pc1677&ref=en-iu3pcanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'iubuy', 'buy', 'purchase-2021annib')">Buy Now</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product04.png')?>" alt="product04">
                </div>
                <div class="info">
                  <div class="title">IObit Malware Fighter PRO</div>
                  <div class="desc">Protect your PC away from virus, malware and ransomware with triple protection engines.</div>
                  <div class="price">
                    <div class="new">$23.99</div>
                    <div class="old">$54.95</div>
                    <div class="tag">55% <i>OFF</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=imf3pc2399&ref=en-imf3pcanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'imfbuy', 'buy', 'purchase-2021annib')">Buy Now</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product05.png')?>" alt="product05">
                </div>
                <div class="info">
                  <div class="title">IObit Software Updater PRO</div>
                  <div class="desc">Easily Update your software without quantity limits and recommend popular programs for you.  </div>
                  <div class="price">
                    <div class="new">$12.97</div>
                    <div class="old">$29.99</div>
                    <div class="tag">55% <i>OFF</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=isu3pc1297&ref=en-isu3pcanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'isubuy', 'buy', 'purchase-2021annib')">Buy Now</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product06.png')?>" alt="product06">
                </div>
                <div class="info">
                  <div class="title">Smart Defrag PRO</div>
                  <div class="desc">Manage and defragment your disk space for better PC performance.</div>
                  <div class="price">
                    <div class="new">$19.99</div>
                    <div class="old">$39.99</div>
                    <div class="tag">50% <i>OFF</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=sd3pc1999&ref=en-sd3pcanniversaryb<?php echo $refStr ?>&aff=<?php echo $_GET['aff'] ?>&refs=purchase_annib" onclick="ga('send', 'event', 'sdbuy', 'buy', 'purchase-2021annib')">Buy Now</a>
                </div>
              </div>
            </div>
          </div>
          <!-- award -->
          <div class="award-cont">
            <h3>World-wide Awards</h3>
            <div class="award-list">
              <img src=<?php echo getStaticUrl('images/awards.png')?>" alt="awards">
            </div>
          </div>
          <div class="review wrapper">
            <div class="content">
              <span class="next"></span>
              <span class="prev"></span>
              <div class="message">
                <div class="roll">
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
                    <dd>
                      <h3>Media Review</h3>
                      <p>
                        Advanced SystemCare is a great all-in-one PC utility that can scan, repair, and optimize many aspects of your system.It aims to remedy whatever ails your computer by not only cleaning up junk files, malware, and invalid registry entries, but by giving your computer a boost to optimize your PC experience.
                      </p>
                      <h4>Cnet</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/brendon-rourke.png')?>" alt=""></dt>
                    <dd>
                      <h3>User Review</h3>
                      <p>
                        I have been using ASC for years now. I have recently tested the latest version V14. And it is by far the most comprehensive version to date. IObit continue to improve their Products and Technology. With more options and easier navigation that help find solutions. I don't need to shop elsewhere.
                      </p>
                      <h4>Brendon O'Rourke</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt=""></dt>
                    <dd>
                      <h3>User Review</h3>
                      <p>
                        First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM, i was able to play new game titles without having to shutdown any background process. I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product.
                      </p>
                      <h4>Dunston Diaz</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/gelu-batir.png')?>" alt=""></dt>
                    <dd>
                      <h3>User Review</h3>
                      <p>
                        I am very satisfied with your product IObit Maleware Fighter. Previously this product came to me I had a lot of troubles with malicious interferences, I was not able to watch an entire movie or concert, which I like very much. Due to your product now every operation is clear, safe and well protected. It scans my laptop without affecting its performance while I also recommended this product to two of my friends.
                      </p>
                      <h4>Gelu Batir</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/samrat.png')?>" alt=""></dt>
                    <dd>
                      <h3>User Review</h3>
                      <p>
                        I have used multiple uninstallers in the past, however, once I started using IOBit since ver.7.0, I have never gone back to any other application. It has an easy to use interface and does the job it is meant for with pin-point perfection. It helps you to clean up the registry automatically which otherwise gets choked with leftovers, and thus maintain PC Health. The ability to identify Bundleware and remove them is one great feature present in IOBit which is unsurpassed.
                      </p>
                      <h4>Samrat Kumar Chakrabortty</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/softpedia.png')?>" alt=""></dt>
                    <dd>
                      <h3>Media Review</h3>
                      <p>
                        IObit Software Updater was designed to simplify the task of keeping all the applications on your computer up-to-date. It can check for new versions and install them automatically, even without user input. Moreover, it can help you download and install popular applications for various purposes.
                      </p>
                      <h4>Softpedia</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/hans.png')?>" alt=""></dt>
                    <dd>
                      <h3>Media Review</h3>
                      <p>
                        I am a user of Smart defrag for many years. Since using this fantastic software my desktop and my laptop are fast and save. Together with advance system care ultimate you have a complete tool for keeping you system up to date, fast and secure.Using it every day without need to wait (pc closes itself) you keep your system in top condition even if you have no technical background!
                      </p>
                      <h4>Hans</h4>
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="g-footer">
        <div class="service">
          <div class="wrapper">
            <div class="clearfix">
              <dl class="first">
                <dt><img src=<?php echo getStaticUrl('images/moneyback.png')?>"></dt>
                <dd>
                  <h3>Try it RISK FREE - with our 60-day Money Back Guarantee</h3>
                  <p>We're confident that activating PRO edition will maximize your <br> PC performance and security for an affordable price!</p>
                </dd>
              </dl>
              <dl class="last">
                <dt><h3>We accept</h3></dt>
                <dd><img src=<?php echo getStaticUrl('images/payment.png')?>"></dd>
              </dl>
            </div>
            <div class="note">
            <p>Note:</p>
            <p>*.Data may vary based on different system or computer.</p>
            <p>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</p>
          </div>
          <div class="copyright">Copyright ©2005 - <?= date('Y'); ?> IObit. All Rights Reserved</div>
          </div>
        </div>
      </div>
      <div class="g-float">
        <div class="cake"></div>
        <div class="off-list">
          <div class="off-item active">
            <div class="num"><i></i>90% OFF</div>
            <div class="name">Birthday Pack</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>85% OFF</div>
            <div class="name">PC Optimization Pack</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>75% OFF</div>
            <div class="name">Flagship Product</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>

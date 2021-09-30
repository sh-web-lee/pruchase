<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
   
}

include $pRootUrl . 'include/common.inc.php';
include "lang/de.php";
$content = $text['content'];

if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'dbblacknl_p' . $date;
    $c_name_t='dbblacknl_t' . $date;
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

$viewNum = rand(60, 88);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}
$refStr = (empty($_GET['ref']) ? '' : ('-' . $_GET['ref']));
$refStr .=  (empty($_GET['st']) ? '' : ('-' . $_GET['st']));
$refStr .=  (empty($_GET['pop']) ? '' : ('-' . $_GET['pop']));
$refStr .=  (empty($_GET['to']) ? '' : ('-' . $_GET['to']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= $text['title']; ?></title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper bann">
        <div class="title">
          <h1><?= $content[1]; ?></h1>
          <p class="banner_pop"><span><?= $content[2]; ?></span><span class="banner_bold">今だけ！ </span></p>
         </div>
         <!-- 盒子 -->
            <div class="palen clearfix">
                  <div class="left fl">
                      <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster 6 Pro"/>
                  </div>
                  <div class="right fl">
                     <div class="right-min01"><img  src="<?php echo getStaticUrl('images/year_last.png')?>" alt=""></div>
                      <div class="right-min02">ワンクリックでパソコンを高速化！</div>
                      <div class="clearfix banner-img">
                          <div class="fl right03-left"><img  src="<?php echo getStaticUrl('images/banner_left01.png')?>" alt=""><span>クリーナーソフト<span></div>
                          <div  class="fl right03-center"><img  src="<?php echo getStaticUrl('images/circle.png')?>" alt=""></div>
                          <div  class="fl right03-right"><img  src="<?php echo getStaticUrl('images/banner_left02.png')?>" alt=""><span>ドライバー更新ソフト <span></div>
                     </div>
                     <div class="right-min04">
                        <span class="right-min04-one"> 永久ライセンス/３ PC</span><span class="right-min04-text">2 点セット</span>
                      </div>
                      <div class="right-min05">
                         <span class="right-min05-one"> 通常セット価格：</span><del class="right-min05-text">9,960円(税抜)</del>
                      </div>
                      <div class="right-min06 clearfix">
                          <div class="fl leftText">まとめ買い価格：</div>
                          <div class="fl rightBox">
                            <span class="maxPrice">
                                3,980
                            </span>
                            <span class="maxPrice-tp">税抜</span>
                            <span class="maxPrice-bt">円</span>
                          </div>
                      </div>
                      <a class="right-min07" onclick="gtag('event','buy',{'event_category':'dbbuy','event_label':'jp_asc14db83pcpurchase3980xmas20-1'});"  href="https://www.iobit.com/buy.php?product=jp-asc14db83pc3980&ref=jp_asc14db83pcpurchase3980xmas20&refs=jp_purchase_asc">まとめて買う</a>
                  </div>
            </div>
            <div class="banner-bot"><img src="<?php echo getStaticUrl('images/limiticon.png')?>" alt=""/><span>2020年11月30日(月)～2020年12月31日（木）</span></div>
         <!-- 盒子 end-->
         
      </div>
    </div>
    <!-- banner end -->

<!-- feature start -->
    <div class="myfeature">
     <div class="fature-leftbg"></div>
        <div class="fature-rightbg"></div>
      <div class="feature wrapper">
         <h2 class="feature-title">まとめ買い対象ソフト</h2>
         <div class="feature-list clearfix">
           <div class="fature-add"><img src="<?php echo getStaticUrl('images/add_icon.png')?>" alt=""/></div>
           <div class="fature-sum"><img src="<?php echo getStaticUrl('images/sum_icon.png')?>" alt=""/></div>
           <div class="feature-advan fl">
             <div class="itemMark itemMark01"><img src="<?php echo getStaticUrl('images/star_icon.png')?>" alt=""/></div>
              <div class="fea-min">
                <img src="<?php echo getStaticUrl('images/A.png')?>" alt=""/><span>Advanced SystemCare 14 Pro</span>
              </div>
              <div class="fea-pro">
                 <img src="<?php echo getStaticUrl('images/banner_left01.png')?>" alt=""/><span>Pro版にしかできないこと</span>
              </div>
              <ul class="min-list01">
                <li> <img src="<?php echo getStaticUrl('images/orange_star.png')?>" alt=""/><span>Free版の制限を全て解除</span></li>
                <li> <img src="<?php echo getStaticUrl('images/orange_star.png')?>" alt=""/><span>PCの遅い重いを徹底解消</span></li>
                <li> <img src="<?php echo getStaticUrl('images/orange_star.png')?>" alt=""/><span>より高度なセキュリティ対策</span></li>
                <li> <img src="<?php echo getStaticUrl('images/orange_star.png')?>" alt=""/><span>個人情報の漏えい防止</span></li>
              </ul>
               <div class="fea-price">
                 <span class="fea-price-bob">2,980</span>
                 <span class="fea-price-min">円</span>
                 <span class="fea-price-reg">(税抜) <del>4,980円（税抜）</del></span>
               </div>
               <div class="last-des">永久ライセンス/３PC</div>
               <a class="buynow buynow01" onclick="gtag('event','buy',{'event_category':'dbbuy','event_label':'jp_asc143pcpurchase2980xmas20'});" href="https://www.iobit.com/buy.php?product=jp-asc143pc2980&ref=jp_asc143pcpurchase2980xmas20&refs=jp_purchase_asc">購入する</a>
            </div>
           <div class="feature-db fl">
              <div class="itemMark itemMark02"><img src="<?php echo getStaticUrl('images/star_icon.png')?>" alt=""/></div>
              <div class="fea-min">
                <img src="<?php echo getStaticUrl('images/B.png')?>" alt=""/><span>Driver Booster 8 Pro</span>
              </div>
              <div class="fea-prodb">
                 <img src="<?php echo getStaticUrl('images/banner_left02.png')?>" alt=""/><span>Pro版にしかできないこと</span>
              </div>
              <ul class="min-list02">
                <li> <img src="<?php echo getStaticUrl('images/orange_star.png')?>" alt=""/><span>Free版の制限を全て解除</span></li>
                <li> <img src="<?php echo getStaticUrl('images/orange_star.png')?>" alt=""/><span>450万個のドライバーに対応</span></li>
                <li> <img src="<?php echo getStaticUrl('images/orange_star.png')?>" alt=""/><span>自動アップデート、自動ケア</span></li>
                <li> <img src="<?php echo getStaticUrl('images/orange_star.png')?>" alt=""/><span>ゲーム起動加速、パフォーマンス向上</span></li>
              </ul>
              <div class="fea-price">
                 <span class="fea-price-bob">2,980</span>
                 <span class="fea-price-min">円</span>
                 <span class="fea-price-reg">(税抜) <del>4,980円（税抜）</del></span>
               </div>
               <div class="last-des">永久ライセンス/３PC</div>
               <a class="buynow" onclick="gtag('event','buy',{'event_category':'dbbuy','event_label':'jp_db83pcpurchase2980xmas20'});" href="https://www.iobit.com/buy.php?product=jp-db83pc2980&ref=jp_db83pcpurchase2980xmas20&refs=jp_purchase_asc">購入する</a>
            </div>
           <div class="feature-sumres fl">
              <div class="itemMark itemMark03"><img src="<?php echo getStaticUrl('images/sumes_icon.png')?>" alt=""/></div>
              <div class="itemMark itemMark04"><img src="<?php echo getStaticUrl('images/sumes_top.png')?>" alt=""/></div>
              <div class="fea-max">
                <span>合計金額より</span>      
                <span class="colorF9">さらに1,980円OFF!!</span>
              </div>
              <div class="fea-min fea-min02">
                <img src="<?php echo getStaticUrl('images/aa.png')?>" alt=""/>
                <span>Advanced SystemCare 14 </span>
                <img src="<?php echo getStaticUrl('images/pro.png')?>" alt=""/>
              </div>
              <div class="add-icon">
                <img src="<?php echo getStaticUrl('images/add-icon.png')?>" alt=""/>
              </div>
              <div class="fea-min fea-min03">
                <img src="<?php echo getStaticUrl('images/bb.png')?>" alt=""/>
                <span>Driver Booster 8</span>
                <img src="<?php echo getStaticUrl('images/pro.png')?>" alt=""/>
              </div>
              <ul class="min-list03">
                <li> <img src="<?php echo getStaticUrl('images/red_star.png')?>" alt=""/><span>能制限なし</span></li>
                <li> <img src="<?php echo getStaticUrl('images/red_star.png')?>" alt=""/><span>PCの遅い重いを徹底解消</span></li>
                <li> <img src="<?php echo getStaticUrl('images/red_star.png')?>" alt=""/><span>より高度なセキュリティ対策</span></li>
                <li> <img src="<?php echo getStaticUrl('images/red_star.png')?>" alt=""/><span>個人情報の漏えい防止</span></li>
                <li> <img src="<?php echo getStaticUrl('images/red_star.png')?>" alt=""/><span>450万個のドライバーに対応、一括更新可</span></li>
                <li> <img src="<?php echo getStaticUrl('images/red_star.png')?>" alt=""/><span>自動アップデート、自動ケア</span></li>
                <li> <img src="<?php echo getStaticUrl('images/red_star.png')?>" alt=""/><span>ゲーム起動加速、パフォーマンスを向上</span></li>
              </ul>
              <div class="fea-price03">
                 <span class="fea-price03-bob">3,980</span>
                 <span class="fea-price03-min">円</span>
                 <span class="fea-price03-reg">(税抜) <del>9,960円（税抜）</del></span>
               </div>
               <div class="last-des03">永久ライセンス/３PC</div>
               <a class="buynow03" onclick="gtag('event','buy',{'event_category':'dbbuy','event_label':'jp_asc14db83pcpurchase3980xmas20-2'});" href="https://www.iobit.com/buy.php?product=jp-asc14db83pc3980&ref=jp_asc14db83pcpurchase3980xmas20&refs=jp_purchase_asc">購入する</a>
            </div>
        
         </div>
      </div>
     </div>
<!-- tips start -->
     <div class="buy-jp">
       <div class="wrapper">
         <h2 class="buy-title">今すぐご購入の・・・4大メリット</h2>
         <ul class="buy-list clearfix">
           <li class="fl buy-list01">
             <div>
               <img src="<?php echo getStaticUrl('images/buy01.png')?>" alt=""/>
             </div>
             <div class="margintop33">今までのない割引</div>
             <div> <img src="<?php echo getStaticUrl('images/whiteline.png')?>" alt=""/></div>
             <div class="mintext">対象ソフトの合計金額より、</div>
             <div class="mintext-gold">さらに1,980円OFF</div>
           </li>
           <li class="fl buy-list02">
             <div>
               <img src="<?php echo getStaticUrl('images/buy02.png')?>" alt=""/>
             </div>
             <div class="margintop33">最高のPCパフォーマンス</div>
             <div> <img src="<?php echo getStaticUrl('images/whiteline.png')?>" alt=""/></div>
             <div></div>
             <div class="mintext">Free版全ての制限を解除</div>
           </li>
           <li class="fl buy-list03">
             <div>
               <img src="<?php echo getStaticUrl('images/buy03.png')?>" alt=""/>
             </div>
             <div class="margintop33">安全な情報保護仕組み</div>
             <div> <img src="<?php echo getStaticUrl('images/whiteline.png')?>" alt=""/></div>
             <div></div>
             <div class="mintext">お支払い情報は全て暗号化によって保護されております</div>
           </li>
           <li class="fl buy-list04">
             <div>
               <img src="<?php echo getStaticUrl('images/buy04.png')?>" alt=""/>
             </div>
             <div class="margintop33">安心のサポート体制</div>
             <div> <img src="<?php echo getStaticUrl('images/whiteline.png')?>" alt=""/></div>
             <div> </div>
             <div class="mintext"> 24時間技術サポート＆60日間返金保証</div>
           </li>
         </ul>
          <div class="buyPop">
             <div class="butterfly">
               <img src="<?php echo getStaticUrl('images/butter.png')?>" alt=""/>
             </div>
              <h2 class="popTitle">年内最後のセール価格</h2>
              <div class="mindletext"><span>今が一番お得！</span><span class="boldtext">5,980</span><span class="thintext">円</span>
              <span class="off">OFF!</span>
            </div>
             <div class="buy-lastwo">
               <span class="thrreenine">3,980</span><span class="minlast">円(税抜) </span><del>9,960円</del>
             </div>
             <a class="buynow04" onclick="gtag('event','buy',{'event_category':'dbbuy','event_label':'jp_asc14db83pcpurchase3980xmas20-3'});" href="https://www.iobit.com/buy.php?product=jp-asc14db83pc3980&ref=jp_asc14db83pcpurchase3980xmas20&refs=jp_purchase_asc">まとめて買う</a>
          </div>
           <div class="payment">
             <img src="<?php echo getStaticUrl('images/payment_icon.png')?>" alt=""/>
           </div>
       </div>
     </div>
<!-- tips end -->

    <!-- choice start -->
    <div class="choice" id="choiceid">
       <div class="wrapper">
          <h2 class="choiceid-title">iObitが選ばる理由</h2>
          <ul class="clearfix bottomList">
            <li class="fl  bottomList01">
              <div> <img src="<?php echo getStaticUrl('images/15.png')?>" alt=""/></div>
              <div class="midTit"><span class="bott-bold">15年</span><span>以上の開発歴史</span></div>
              <div class="bot-des">高い技術力を備え、パソコン
                セキュリティやパフォーマンス
                改善を目指しております</div>
            </li>
            <li class="fl bottomList02">
              <div> <img src="<?php echo getStaticUrl('images/100.png')?>" alt=""/></div>
              <div class="midTit"><span class="bott-bold">100</span><span>以上の受賞歴史</span></div>
              <div class="bot-des">
                    PCWorld、CNETなど
                    複数のメディアに信頼され、
                    100回以上受賞しております
              </div>
            </li>
            <li class="fl bottomList03">
              <div> <img src="<?php echo getStaticUrl('images/220.png')?>" alt=""/></div>
              <div class="midTit"><span class="bott-bold">220ヶ国</span><span>で利用されている</span></div>
               <div class="bot-des">
                世界各国で販売実績あり、
                グローバルマーケットで
                活躍しております
                </div>
            </li>
            <li class="fl bottomList04">
              <div> <img src="<?php echo getStaticUrl('images/mil25.png')?>" alt=""/></div>
              <div class="midTit"><span class="bott-bold">2.5億</span><span>以上のユーザー数</span></div>
              <div class="bot-des">
                  全世界のお客様が
                  追求した商品やサービスを
                  提供しております
               </div>
            </li>
          </ul>
      </div>
      <div class="bott-line"></div>
      <div class="markTips wrapper">
              <p>ご注意：</p>
              <p>* パソコンやシステムによってデータが異なるものがあります。</p>
              <p>* 当社の単独の裁量により、このページは予告なしに変更されることがあります。</p>
          </div>
    </div>
    <!-- choice end -->
    <div class="jp-footer">©2004 - 2020 IObit All Rights Reserved</div>
    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
          <div class="footContain clearfix">
              <div class="fl botIcon"><img src="<?php echo getStaticUrl('images/boticon.png')?>" alt=""/></div>
              <div class="fl botcenter">
                <p class="but-tips">クリスマス まとめ買いセール</p>
                 <p class="secTwo">
                   <span class="todaytips">今だけ !</span>
                   <span class="secTwo01">セットで</span>
                   <span class="secTwo02">3,980</span>
                   <span class="secTwo03">円</span>
                   <span class="secTwo04">( 税抜 )</span><span class="secTwo05">！</span>
                 </p>
              </div>
              <div class="fl cutbox">
                <h3>終了まで...</h3>
                <ul id="countdown" class="countdown clearfix">
                  <li class="fl"><strong class="timebox">00</strong> <div class="timetext">日</div></li>
                  <li class="fl"><strong class="timebox">00</strong> <div class="timetext">時間</div></li>
                  <li class="fl"><strong class="timebox">00</strong> <div class="timetext">分</div></li>
                  <li class="fl"><strong class="timebox">00</strong> <div class="timetext">秒</div></li>
                  <li class="fl"></li>
                </ul>
                </ul> 
              </div>
              <div class="fl buynow06">
                <a href="https://www.iobit.com/buy.php?product=jp-asc14db83pc3980&ref=jp_asc14db83pcpurchase3980xmas20&refs=jp_purchase_asc">まとめて買う‼</a>
              </div>
          </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- backtotop start -->
    <!-- <div id="backtotop" class="backtotop"><?= $content[71]; ?></div> -->
    <!-- backtotop end -->
  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var soldStr = '<?= $content[72]; ?>';
    var imgSrc = "<?php echo getStaticUrl('images/db-mask-box.png')?>";
    var imgOff = "<?php echo getStaticUrl('images/mask-off.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=nl-db83pc2295&ref=nl_db83pcblackfriday2295purchase2011"+ refStr +"&aff=&refs=nl_purchase_db&tw=-8";
    var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'dbblackfriday2295-nl');";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>


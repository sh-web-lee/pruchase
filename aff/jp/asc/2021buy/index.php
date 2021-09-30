<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='enaff_asc14_2021buy1pc';
$ref3pc='enaff_asc14_2021buy3pc';
$ref3pcgift = 'enaff_asc14_2021buy3pcgift';
if(!empty($_GET['ref'])){
  $ref1pc=$ref3pc=$ref3pcgift=$_GET['ref'];
}
include $pRootUrl.'include/common.inc.php';

$reduceNum=74041325;
$buyNum = number_format(ceil(microtimeFloat()*1000/20000) - $reduceNum);
if($_GET['action']=='maskCount'){
  $maskType=$_GET['maskType'];
  if(in_array($maskType,array(1,2))) {
    $buttonClick=$_GET['buttonClick'];
    $ip=empty($_GET['ip']) ? getIP() : $_GET['ip'];
    $time=time();
    try {
      $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
      $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->query("set names utf8");

      $sql = "insert into affascmaskcount2019 (ip,addTime,maskType,buttonClick) values(:ip,:addTime,:maskType,:buttonClick)";
      $pre = $pdo->prepare($sql);
      $pre->bindParam(':ip', $ip);
      $pre->bindParam(':addTime', $time);
      $pre->bindParam(':maskType', $maskType);
      $pre->bindParam(':buttonClick', $buttonClick);
      $pre->execute();
    } catch (PDOException $e) {
      var_dump($e->getMessage());
    }
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Advanced SystemCare PROを今すぐアップグレードして、動作の遅いPCを解消しましょう！</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
        success: function(packs){
          $('.buynum').html(packs);
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt="" /></dt>
      <dd class="fl">
        <span>アップグレード：</span>
        <h1>Advanced SystemCare 14 PRO</h1>
        <p>今すぐ購入して、動作が遅いPCを最大軽量化してみましょう</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>「AdvancedSystemcareは、お手元のパソコンの不具合・エラーを修復します」</p>
      <img src="<?php echo getStaticUrl('images/clnet.png')?>" alt="" />
    </div>
  </div>
</div>
<!-- banner end -->

<!-- container start -->
<div class="wrapper">
  <!-- title -->
  <h2 class="title"></h2>
  <!-- offer start -->
  <div class="offer clearfix">
    <!-- 1PC BOX -->
    <div class="box pc">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <!-- title -->
      <h2>1年/ 1ライセンス</h2>
      <!-- details -->
      <ul>
        <li><i></i>究極のPCクリーニング</li>
        <li><i></i>システムチューンアップ</li>
        <li><i></i>完全なプライバシー保護</li>
        <li><i></i>自動RAMクリーンアップ</li>
        <li><i></i>生涯無料アップデート</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>2,235<small>円</small></strong> <del>4,470円</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=jpaff-asc141pc2235&ref=jpaff_asc14_2021buy1pc&aff=<?php echo $_GET['aff'];?>&tw=-8"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'jpaffasc142021buy1pc')">
          今すぐ購入
        </a>
      </div>
    </div>
    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>1年/ 3ライセンス</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>究極のPCクリーニング</li>
        <li><i></i>システムチューンアップ</li>
        <li><i></i>完全なプライバシー保護</li>
        <li><i></i>自動RAMクリーンアップ</li>
        <li><i></i>生涯無料アップデート</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>2,980<small>円</small></strong> <del>7,450円</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=jpaff-asc143pc2980&ref=jpaff_asc14_2021buy3pc&aff=<?php echo $_GET['aff'];?>&tw=-8"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'jpaffasc142021buy3pc') ">
          今すぐ購入
        </a>
        <p class="people" style="width: 220px; padding-left: 10px; background-position: 0px center;"><b class="buynum"><?php echo $buyNum;?></b> 人がすでに購入しました</p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>支払方法</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>60日間の返金保証</h2>
        <p>
          Advanced SystemCare PROに満足できない場合は、60日以内に購入の全額が返金されます。
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>安全なお支払い </h2>
        <p>高度な暗号化とスパム対策保護により、お客様の個人情報を保護することをお約束します。</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>無料の24時間年中無休の技術サポート</h2>
        <p>
          当社のプレミアムサポートチームは、24時間以内に当社の製品に関するご質問に対応します。
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>無料の生涯アップデート </h2>
        <p>サブスクリプション期間中は、すべてのソフトウェアアップデートを無料で入手できます。</p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->
</div>
<!-- container end -->

<!-- review start -->
<div class="container bordertop clearfix">
  <div class="review wrapper">
    <div class="review-box">
      <!-- 01 -->
      <div class="reviews clearfix">
        <h2>ユーザーレビュー</h2>
        <h3>「スパイウェアとマルウェアをクリーンアップしました。アンチウイルスソフトの検証もできます。」</h3>
        <p>「以前は、マシンをスムーズに実行し、悪意のあるユーザーを排除するために、最大12の異なるプログラムを使用していました。セキュリティとパフォーマンスを維持するのに毎週数時間かかりました。現在、Advanced System Care Proを使用すると、すべてが1か所にまとめられます。同じことをしても、数日おきに数分しかかかりません。」</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>メディアレビュー</h2>
        <h3>「AdvancedSystemcareは、コンピューターの問題を解決することを目的としています。」</h3>
        <p>「コンピュータが機能しなくなって、仕事やゲームをプレイできなくなるほど悪いことはありません。AdvancedSystemcareは、ジャンクファイル、マルウェア、無効なレジストリエントリをクリーンアップするだけでなく、コンピュータの問題を解決することを目的としています。 PCエクスペリエンスを最適化するために、コンピューターを後押しします。」</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>ユーザーレビュー</h2>
        <h3>「私の選択はまだ圧倒的に高度なSystemCareProです」</h3>
        <p>「ASC無料でダウンロードしてスキャンすることで見つけたコンピューター修理技術者として、最も一般的な問題は解決されます。修理が終了したら、通常、クライアントにProパッケージを購入することをお勧めします。AdvancedSystemCareProのパワーを持っているときに技術者が必要な人システムを24時間年中無休で動作させますか？これは、ホームユーザーが購入できる最高の製品です。私の仕事を簡単にしてくれてありがとう。」</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"><span></span></div>
        <strong>Bob Bassett</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
        <strong>Cnet</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"><span></span></div>
        <strong>Charles R. Widick</strong>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- footer start -->
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
<!-- footer end -->

<!-- mask start -->
<div class="mask">
  <div class="mask-box">
    <div class="plana">
      <p>Congrats! You’re Today's Lucky Visitor! </p>
      <p>Get Your <b>Extra 10% OFF &amp; 2 Free Gifts</b> Now!</p>
      <div class="panel clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="">
        <div class="right fl">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr class="top">
              <td class="title">
                <h3>Advanced SystemCare 11 PRO</h3>
                <p>(1 Year / 3 PCs) </p>
              </td>
              <td class="space"></td>
              <td class="itema"><b>$17.99</b></td>
              <td class="space"></td>
              <td class="itemb"><b>$19.99</b></td>
            </tr>
            <tr class="space"></tr>
            <tr>
              <td class="title">
                Smart Defrag 5 PRO
                <span class="point">
                    <div class="txt">
                      <p>Automatically and Intelligently Defragment to Maximize Hard Drive Performance &amp; Speed Up Your PC</p>
                    </div>
                  </span>
              </td>
              <td class="space"></td>
              <td class="itema">FREE</td>
              <td class="space"></td>
              <td class="itemb">$19.99</td>
            </tr>
            <tr class="space"></tr>
            <tr>
              <td class="title">
                IObit Uninstaller 7 PRO
                <span class="point">
                    <div class="txt">
                      <p>Powerfully Uninstall Unwanted Programs, Plug-ins and Windows Apps for Lighter PC &amp; Safer Online Browsing</p>
                    </div>
                  </span>
              </td>
              <td class="space"></td>
              <td class="itema">FREE</td>
              <td class="space"></td>
              <td class="itemb">$19.99</td>
            </tr>
            <tr class="space"></tr>
            <tr class="bottom">
              <td class="title">
                <h3>Total Price</h3>
              </td>
              <td class="space"></td>
              <td class="itema"><b>$17.99</b></td>
              <td class="space"></td>
              <td class="itemb"><b>Save $41.98</b></td>
            </tr>
          </table>
          <div class="buybox">
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=enaffasc11sdiu1799&ref=<?php echo $ref3pcgift;?>&aff=<?php echo $_GET['aff'];?>"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc112018buy3pcgift');maskCount(1)">
              ADD TO CART
            </a>
            <p onclick="maskClose()">No thanks, I want to pay the full price</p>
          </div>
        </div>
      </div>
    </div>
    <div class="close" onclick="maskClose()">x</div>
  </div>
</div>
<!-- mask end -->

<script>var imgSrc = "<?php echo getStaticUrl('images/off.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
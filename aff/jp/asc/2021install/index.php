<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  $refStr = (empty($_GET['ref']) ? 'deaff_asc14_2021install' : $_GET['ref']);
  $affStr = (empty($_GET['aff']) ? '' : $_GET['aff']);
if (empty($_GET['ref'])) $_GET['ref'] = 'deaff_asc14_2021install';
  
?>
<!DOCTYPE html>
<html lang="jp">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Advanced SystemCareインストール完了</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto|Titillium+Web" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"> -->
<link href="https://jp.iobit.com/wp-content/themes/iobit/css/normalize.css" rel="stylesheet" media="screen">
<link href="https://jp.iobit.com/wp-content/themes/iobit/css/base.css" rel="stylesheet" media="screen">

<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://jp.iobit.com/wp-content/themes/iobit/css/font.css" media="all">
<!-- <link href="https://www.iobit.com/tpl/styles/global.css" rel="stylesheet" media="screen"> -->
<link href="https://jp.iobit.com/wp-content/themes/iobit/css/component.css" rel="stylesheet" media="screen">
<link href="https://jp.iobit.com/wp-content/themes/iobit/css/thankyou.css" rel="stylesheet" media="screen">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<style>
/* .compare{padding:0;} */
  .footer {
    text-align: center;
    line-height: 42px;
  }
  .footer p { padding: 0; margin: 0; }
	.compare td.text div,.compare thead th.text{
		display: block;
		width: auto;
	}
	.compare tbody td.text{padding-left: 30px; padding-right: 30px; }
</style>
</head>

<body id="compare">
<div class="thankyou-banner">
  <div class="inner">
  <img src="https://jp.iobit.com/wp-content/themes/iobit/img/thankyou/icon.png" alt="" class="icon">
    <h1>Advanced SystemCareをインストールしていただき、<br> ありがとうございます。</h1>
    <p class="price">
      <del>４,470円</del>
      <span></span>
      <strong><b>2,235円</b> 税抜</strong>
    </p>
    <div class="button button-large button-buy">
      <a href="https://www.iobit.com/buy.php?product=jpaff-asc141pc2235&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'jpaffasc142021install')"> <i class="fas fa-shopping-cart"></i>  今すぐ購入</a>
    </div>
    <p class="message">より多くの機能を体験するには、Pro版を購入しよう</p>
    <p class="payment">
      お支払い方法
      <img src="https://jp.iobit.com/wp-content/themes/iobit/img/thankyou/payment.png" alt="">
    </p>
  </div>
</div>
<div class="compare">
  <div class="inner">
    <h2>感謝の気持ちを込めて、Advanced SystemCare Proを <br> <span>50% OFF</span> の特別価格でお届けします！</h2>
    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="wrapper">
      <thead>
      <tr>
          <th class="text">
            項目
          </th>
          <th class="space"></th>
          <th class="itemb">
             <div class="box">
              <strong>advanced SystemCare Pro</strong>
                <p class="price">
                  <del>4,470円</del>
                  <b>2,235円</b>
                </p>
                1PC/永久
                <div class="button button-large button-buy">
                  <a href="https://www.iobit.com/buy.php?product=jpaff-asc141pc2235&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'jpaffasc142021install')"> <i class="fas fa-shopping-cart"></i>  今すぐ購入</a>
                </div>
             </div>
          </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="text"><div>レジストリクリーン</div></td>
        <td class="space"></td>
        <td class="itemb"><div>ベーシック機能+ディープクリーン</div></td>
      </tr>
      <tr>
        <td class="text"><div>スパイウェア、アドウェア、トロイの木馬対策</div></td>
        <td class="space"></td>
        <td class="itemb"><div>ベーシック機能+完全検出</div></td>
      </tr>
      <tr>
        <td class="text"><div>ブラウザ広告ブロック</div></td>
        <td class="space"></td>
        <td class="itemb"><div><i class="hook-icon2"></i></div></td>
      </tr>
      <tr>
        <td class="text"><div>悪意のあるリンクを含むメールや疑わしい送信者をブロック</div></td>
        <td class="space"></td>
        <td class="itemb"><div><i class="hook-icon2"></i></div></td>
      </tr>
      <tr>
        <td class="text"><div>安心のシステムリアルタイム保護</div></td>
        <td class="space"></td>
        <td class="itemb"><div><i class="hook-icon2"></i></div></td>
      </tr>
      <tr>
        <td class="text"><div>インターネット速度300%以上 UP</div></td>
        <td class="space"></td>
        <td class="itemb"><div><i class="hook-icon2"></i></div></td>
      </tr>
      <tr>
        <td class="text"><div>Windowsアイコンが表示されない、タスクバーが反応しないなどのWindows問題を修復</div></td>
        <td class="space"></td>
        <td class="itemb"><div><i class="hook-icon2"></i></div></td>
      </tr>
      <tr>
        <td class="text"><div>手間なし快適な自動 RAM クリーン</div></td>
        <td class="space"></td>
        <td class="itemb"><div><i class="hook-icon2"></i></div></td>
      </tr>
      <tr>
        <td class="text"><div>便利なスケジュールによる自動ケア</div></td>
        <td class="space"></td>
        <td class="itemb"><div><i class="hook-icon2"></i></div></td>
      </tr>
      <tr>
        <td class="text"><div>自動的にブラウザ履歴削除</div></td>
        <td class="space"></td>
        <td class="itemb"><div><i class="hook-icon2"></i></div></td>
      </tr>
      <tr>
        <td class="text"><div>ディスククリーナー</div></td>
        <td class="space"></td>
        <td class="itemb"><div><i class="hook-icon2"></i></div></td>
      </tr>
      </tbody>
      <tfoot>
        <tr>
          <th class="text"></th>
          <th class="space"></th>
          <th class="itemb"></th>
      </tr>
    </tfoot>
  </table>
  </div>
</div>
<div class="payment-box">
  <div class="wrapper">
    <dl>
      <dt><img src="https://jp.iobit.com/wp-content/themes/iobit/img/thankyou/hour.png" alt=""></dt>
      <dd>24時間安心サポート体制</dd>
    </dl>
    <dl>
      <dt><img src="https://jp.iobit.com/wp-content/themes/iobit/img/thankyou/shop.png" alt=""></dt>
      <dd>セキュアなカートシステム</dd>
    </dl>
    <dl>
      <dt><img src="https://jp.iobit.com/wp-content/themes/iobit/img/thankyou/serves.png" alt=""></dt>
      <dd>100以上の受賞歴</dd>
    </dl>
    <dl>
      <dt><img src="https://jp.iobit.com/wp-content/themes/iobit/img/thankyou/day.png" alt=""></dt>
      <dd>60日間返金保証</dd>
    </dl>
    <dl>
      <dt><img src="https://jp.iobit.com/wp-content/themes/iobit/img/thankyou/mail.png" alt=""></dt>
      <dd>ライセンスコードがすぐ届ける</dd>
    </dl>
  </div>
</div>
<div class="bottom-banner">
  <div class="wrapper">
    <h2>Advanced SystemCare</h2>
    <p>重い・遅いPCを<span>1クリック</span>で解消</p>
    <div class="button button-large button-buy">
      <a href="https://www.iobit.com/buy.php?product=jpaff-asc141pc2235&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'jpaffasc142021install')"><i class="fas fa-shopping-cart"></i>  今すぐ購入</a>
    </div>
  </div>
</div>

  <div class="footer">
    <div class="container">
      <p>© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
</body>
</html>
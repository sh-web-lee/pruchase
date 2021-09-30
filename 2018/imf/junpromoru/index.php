<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$packsNumReTime = 10;
$packsCount = 249;
$packsNum = ceil(microtime_float() * 1000 / (1000 * $packsNumReTime));
$packsNum = $packsCount - ($packsNum % $packsCount);
include $pRootUrl . 'include/common.inc.php';

$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
    'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
    'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
    'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
    'box','notibc','box13thbc'))){
  $refStr.='-'.$_GET['ref'];
}
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Сэкономьте 88% на Тройную Защиту с IObit Malware Fighter PRO с Бесплатным Подарком!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <?php if(!empty($_SERVER['QUERY_STRING'])):?>
  <link rel="canonical" href="https://ru.iobit.com/purchase/imf/" />
  <?php endif;?>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png') ?>" alt="IObit"/>
    </a>
    <h1>ЛОВИ МОМЕНТ! Тройная Защита с IMF PRO   </h1>
    <h2>Обеспечьте Защищенный ПК и Онлайн-Серфинг</h2>
    <div class="one-pc box">
      <h3>59% скидка</h3>
      <img src="<?php echo getStaticUrl('images/imf-box.png') ?>" alt="">
      <p><strong>495 руб</strong> <del> 1200 руб</del> <span>1 Год / 1 ПК</span></p>
      <a href="https://www.iobit.com/buy.php?product=ru-imf61pc495&ref=ru_imf61pc495purchase<?php echo $refStr;?>&refs=ru_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1pc1806-ru')" class="buy-btn">Купить Сейчас</a>
    </div>
    <div class="three-pc box">
      <h3>88% скидка</h3>
      <h4><strong>11</strong>Часов <strong>11</strong>Мин <strong>11</strong>Сек <strong>11</strong>Mc <sup>*</sup> </h4>
      <img src="<?php echo getStaticUrl('images/three-imf-box.png') ?>" alt="">
      <p><strong>649 руб</strong> <del> 5200 руб</del> <span>1 Год / 3 ПК</span></p>
      <a href="https://www.iobit.com/buy.php?product=ru-imf63pcpf649&ref=ru_imf63pcpf649purchase<?php echo $refStr;?>&refs=ru_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcpf1806-ru')" class="buybtn">Купить Сейчас</a>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo getStaticUrl('images/payment.png') ?>" alt="">
</div>
<!-- payment end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Полная Защита ПК от Вредоносного ПО, Вирусов и Вымогателей</h2>
    <div class="introimg">
      <div class="imglist">
        <ul>
          <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot03.png') ?>" alt=""></li>
          <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot02.png') ?>" alt=""></li>
          <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot01.png') ?>" alt=""></li>
        </ul>
      </div>
      <div class="mask left-mask"></div>
      <div class="mask right-mask"></div>
      <a href="javascript:" class="prev btn"><</a>
      <a href="javascript:" class="next btn">></a>
    </div>
    <div class="point clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/point01.png') ?>" alt=""/></dt>
        <dd><strong>Без Атак Вымогателей</strong></dd>
        <dd>Проактивное обнаружение и <br> блокировка вымогателей <br> от шифрования ваших файлов.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/point02.png') ?>" alt=""/></dt>
        <dd><strong>Глубокая Защита в Реальном времени</strong></dd>
        <dd>Защита безопасности USB диска <br> и камеры, мониторинг <br> вредоносных действий и т.д.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/point03.png') ?>" alt=""/></dt>
        <dd><strong>Защита от Онлайн-Отслеживания</strong></dd>
        <dd>Автоматическая очистка <br> частную трассировку после <br> закрытия браузера.</dd>
      </dl>
    </div>
    <a class="klicken" href="javascript: void(0);">Нажмите здесь для подробной информации >></a>
  </div>
</div>
<!-- intro end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Нас Рекомендуют и Хвалят Всемирные СМИ</h2>
    <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<!-- review start -->
<div class="review wrapper">
  <div class="content ">
    <dl>
      <dt>
      <h3>Отзывы Пользователей </h3></dt>
      <dd>
        <h4>"Теперь, с помощью IObit Malware Fighter Pro, всё стало куда проще."</h4>
      </dd>
      <dd>"Для защиты компьютеров мы когда-то использовали десяток разных программ и еженедельно тратили по несколько часов на обслуживание компьютеров. Теперь, с помощью IObit Malware Fighter Pro, всё стало куда проще. На обслуживание ПК мы тратим всего несколько минут пару раз в неделю, а результат намного лучше. Перейдя на ваши программы, мы избавились от кучи проблем."</dd>
    </dl>
    <dl class="active">
      <dt><h3>Отзывы СМИ</h3></dt>
      <dd>
        <h4>"IObit Malware Fighter PRO - полный комплект защитных средств. Она удаляет шпионские программы, троянов ипрочие гадости."</h4>
      </dd>
      <dd>"Она также включает в себя Охрана Запуска, чтобы защищать от вредоносных процессов при запуске с Windows, Охрана Просмотра, чтобы какие-либо программы не вносили изменения в ваш веб-браузер, Охрана Файла, чтобы неизвестный файл, который вы открываете, не наносил никаких повреждений, защита USB, защита процесса и т. д."</dd>
    </dl>
    <dl>
      <dt><h3>Отзывы Пользователей </h3></dt>
      <dd>
        <h4>"Несколько лет назад кто-то обратил мое внимание на IObit Malware Fighter. Сначала я был настроен скептически. Однако..." </h4>
      </dd>
      <dd>"Несколько лет назад кто-то обратил мое внимание на IObit Malware Fighter. Сначала я был настроен скептически. Однако после установки эта программа стала моим любимым средством защиты от вредоносных программ.Ей очень просто пользоваться. За эти годы она не раз обнаружила угрозы и удалилаих.Я также использую другие программы фирмы IObit, такие как Advanced SystemCare, так что защита у меня надежная. Теперь я рекомендую эти программы всем своим друзьям и родственникам."</dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/bob-bassett.png') ?>" alt="Bob Bassett"></div>
       <p>Bob Bassett</p>
    </li>
    <li class="active">
      <div class="pic"><img src="<?php echo getStaticUrl('images/software.png') ?>" alt="Betanews.com"></div>
      <p>Betanews.com</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/peter-stoffers.png') ?>" alt="Peter Stoffers"></div>
      <p>Peter Stoffers</p>
    </li>
  </ul>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Какие преимущества Вы получите с IMF PRO? </th>
      <th class="space"></th>
      <th class="itemb"><span>IObit Malware Fighter</span>FREE</th>
      <th class="space"></th>
      <th class="itema"><span>IObit Malware Fighter</span>PRO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Базовая Защита от Вредоносных Программ</td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Базовая защита в режиме реального времени от вредоносных действий</td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">До 130% быстрее проверка на активные угрозы  <sup>УЛУЧШЕНО</sup></td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Анти-майненг криптовалюты и блокировка всплывающих окон для безопасного и чистого просмотра <sup>УЛУЧШЕНО</sup></td>
      <td class="space"></td>
     <td class="itemb gray"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Улучшенная защита домашней страницы и DNS</td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Расширенная защита от угроз с помощью антивирусного движка Bitdefender <sup>УЛУЧШЕНО </sup></td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Расширенная база данных для обнаружения и предотвращения атак вымогателей <sup> УЛУЧШЕНО</sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Хранить важный файл отдельно и недоступно для хакеров <sup class="green">НОВИНКА</sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Комплексная защита в режиме реального времени для обеспечения максимальной безопасности ПК <sup>УЛУЧШЕНО</sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Предотвращение атак вымогателей, как WannaCry, NotPetya во время загрузки <sup class="green">НОВИНКА</sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Защита камеры от несанкционированного доступа <sup>УЛУЧШЕНО</sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Предотвращение вирусных инфекций, переносимых USB-дисками</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
      <td class="virtue">Обнаружение вредоносного процесса в операционной памяти</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
      <td class="virtue">Обнаружение угроз путем анализа вредоносных действий </td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="35"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
      <td class="virtue">Автоматическая очистка следов серфинга, чтобы избежать вредоносного отслеживания</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons star">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->
<div class="bottom-buy">
  <div class="wrapper">
     <h2>Тройная Защита Обеспечивает Всестороннюю Безопасность ПК</h2>
     <div class="content">
       <img src="<?php echo getStaticUrl('images/bottom-imf-box.png')?>" alt="" class="imf-box">
       <div class="message">
         <h3><strong>11</strong>Часов <strong>11</strong>Мин <strong>11</strong>Сек <strong>11</strong>Mc <sup>*</sup> </h3>
         <p>Движок Анти-вымогателей <br> Движок Анти-вирусов Bitdefender <br> Движок Анти-вредоносынх программ <span>Защита по поролям файлов от посторонних</span></p>
       </div>
       <dl>
         <dt>Только <strong>649<b>руб</b></strong> <del> 5200 руб</del> <span>1 Год / 3 ПК</span></dt>
         <dd><a href="https://www.iobit.com/buy.php?product=ru-imf63pcpf649&ref=ru_imf63pcpf649purchase<?php echo $refStr;?>&refs=ru_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcpf1806-ru')" class="buybtn">Купить Сейчас</a></dd>
       </dl>
     </div>
  </div>
</div>
<div class="service wrapper clearfix">
  <dl class="one">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
    <dd><h3>Гарантия Возврата Денег</h3></dd>
    <dd>Мы гарантируем возврат <br>  в пределах 60 дней со <br>  дня покупка. </dd>
  </dl>
  <dl class="two">
    <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></dt>
    <dd><h3>100% Безопасный Платеж</h3></dd>
    <dd>IObit предлагает безопасные <br>  способы оплаты.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/opswat.png')?>" alt=""></dt>
    <dd><h3>Быстрая Активация</h3></dd>
    <dd>После завершения покупки, <br> вы получите код лицензии всего <br> за несколькоминут по <br> электронной почте.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/online.png')?>" alt=""></dt>
    <dd><h3>Служба Поддержка</h3></dd>
    <dd>Бесплатная Техническая  Поддержка 24/7.</dd>
  </dl>
</div>
<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Примечание:</dt>
      <dd>* Данные могут различаться в зависимости от разных систем или компьютеров.</dd>
      <dd>*. Рекламные программы могут быть изменены в любое время без предварительного уведомленияпо нашему собственному усмотрению.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright   2005 - <?php echo date('Y') ?> IObit. Все Права Защищены.</div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>
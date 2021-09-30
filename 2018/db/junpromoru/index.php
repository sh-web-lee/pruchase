<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
}
$name=explode(' ',trim(get_line('data/db_data.txt',rand(1,500))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=3;

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itdbanb' . $date;
  if($_GET['isExpired']==0){
    $packsNum=89;
  }else {
    if (!isset($_COOKIE[$c_name])) {
      $packsNum = 97;
    } else {
      if (intval($_COOKIE[$c_name]) <= 5) {
        $packsNum = 5;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
    }
  }
  setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>3));
  exit();
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Сэкономьте 90% на Driver Booster PRO с Бесплатным Подарком! Попрощайтесь со Сбоем Системы и Наслаждайтесь Быстродействием ПК!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <?php if(!empty($_SERVER['QUERY_STRING'])):?>
  <link rel="canonical" href="https://ru.iobit.com/purchase/db/" />
  <?php endif;?>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>"/>
  <?php echo $gJavascript['public'];?>
  <!-- Google Analytics Content Experiment code -->
  <script>function utmx_section(){}function utmx(){}(function(){var
  k='114018648-686',d=document,l=d.location,c=d.cookie;
  if(l.search.indexOf('utm_expid='+k)>0)return;
  function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
  indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
  length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
  '<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
  '://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
  '&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
  valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
  '" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
  </script><script>utmx('url','A/B');</script>
  <!-- End of Google Analytics Content Experiment code -->
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo"  href="https://ru.iobit.com/" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
    </a>
    <div class="title">
      <h2>Празднуйте с Нами</h2>
      <h1>Новый Выпуск Driver Booster 6</h1>
    </div>
    <div class="panel clearfix">
      <div class="box left">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
        <div class="price">
          <p>
            <strong><span class="current">499</span><small class="current-sm">руб</small></strong>
            <del class="original">1990 руб</del>
          </p>
          <a class="buybtn banbtn"
             href="https://www.iobit.com/buy.php?product=ru-db61pc499&ref=ru_db61pc499purchase<?php echo $refStr;?>&aff=&refs=ru_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1806-ru')">
            Купить Сейчас
          </a>
        </div>
      </div>
      <div class="box red">
        <div class="gift clearfix">
          <ul id="countdown" class="countdown">
            <li><strong>00</strong> Часов </li>
            <li><strong>09</strong> Мин </li>
            <li><strong>49</strong> Сек </li>
            <li><strong>618</strong> Мс* </li>
          </ul>
        </div>
        <div class="ds-box">
          <img src="<?php echo getStaticUrl('images/ds-box.png')?>" alt="" />
        </div>
        <div class="price">
          <p><strong><span class="current">690</span><small class="current-sm">руб</small></strong> <span><del class="original">6960 руб</del></span></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=ru-db63pcsd690&ref=ru_db63pcsd690purchase<?php echo $refStr;?>&aff=&refs=ru_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcsd1806-ru')">
            Купить Сейчас
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- second start -->
<div class="second">
  <div class="payment">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" /></div>
  </div>
  <div class="intro wrapper">
    <h2>Попрощайтесь со Сбоем Системы и Наслаждайтесь Быстродействием ПК</h2>
    <div class="feature clearfix">
      <img class="feature-img" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
      <div class="feature-box">
        <dl class="database">
          <dt><h3>До 300% расширенная база данных</h3></dt>
          <dd>База данных в три раза больше для обновления больших редких и устаревших драйверов.</dd>
        </dl>
        <dl class="driver">
          <dt><h3>Более безопасное и быстрое обновление</h3></dt>
          <dd>Предоставляем только драйверы, проходящие тест Microsoft WHQL и тест IObit Review.</dd>
        </dl>
        <dl class="veloce">
          <dt><h3>Оптимальная производительность игры</h3></dt>
          <dd>Новейшие Game Ready Драйверы из разных брентов и необходимые игровые компонеты улучшают ваш игровой опыт.</dd>
        </dl>
        <dl class="backup">
          <dt><h3>Безопасное резервное копирование </h3></dt>
          <dd>Автоматическое резервное копирование всех драйверов для безопасного восстановления.</dd>
          <dd>
            <a class="per" href="javascript: void(0);">Нажмите здесь для подробной информации</a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- second end -->

<!-- donation start -->
<div class="donation">
  <div class="wrapper">
    <h2>Бесплатный подарок только для подписки Driver Booster на 3 ПК / 1 Год</h2>
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="" /></dt>
      <dd class="fl">
        <del>990 руб</del> <strong>Подарок</strong>
        <p>Полезное решение для тщательной дефрагментации и ускорения работы жесткого диска.</p>
      </dd>
    </dl>
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-db63pcsd690&ref=ru_db63pcsd690purchase<?php echo $refStr;?>&aff=&refs=ru_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcsd1806-ru')">
      Получите подарок сейчас!
    </a>
  </div>
</div>
<!-- donation end -->

<!-- review start -->
<div class="review">
  <div class="wrapper ">
    <h2>Награды и Отзывы по Всему Миру</h2>
    <h3>Выбор <strong>200+ млн</strong> пользователей из разных стран</h3>
    <div class="review-message">
      <dl class="wayne">
        <dt>
        <div class="img-box">
          <h4>Wayne Bowler</h4>
          <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
        </div>
        <div class="line"></div>
        </dt>
        <dd>"Эта программа знает, какие обновления мне нужны без никаких конфликтов. Она отлично работает,простая в использовании, информативная и интуитивно понятная. Она будет оставаться в моем ПК навсегда. " <em>-Перевод с английского</em></dd>
      </dl>
      <dl class="myo">
        <dt>
        <div class="img-box">
          <h4>Myo Thuya</h4>
          <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
        </div>
        <div class="line"></div>
        </dt>
        <dd>"После использования мне действительно он очень нравится. Мой компьютер стал быстрее, безопаснее и новее, чем 8 месяцев назад. Большое спасибо IObit." <em>-Перевод с английского</em></dd>
      </dl>
      <dl class="pcmag active right">
        <dt>
        <div class="img-box">
          <h4>PC-MAG</h4>
          <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
        </div>
        <div class="line"></div>
        </dt>
        <dd>"IObit сделал много полезных утилит для Windows, и Driver Booster PRO, которая может автоматически обновлять ваши драйверы, это одна из лучших." <em>-Перевод с английского</em></dd>
      </dl>
      <dl class="chip">
        <dt>
        <div class="img-box">
          <h4>chip</h4>
          <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
        </div>
        <div class="line"></div>
        </dt>
        <dd>"Driver Booster Pro: функция автоматической загрузки драйверов доступна только в версии Pro"<em>-Перевод с немецкого</em></dd>
      </dl>
      <dl class="fabio red-round active">
        <dt>
        <div class="img-box">
          <h4>Fabio Tursi</h4>
          <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
        </div>
        <div class="line"></div>
        </dt>
        <dd>"Наконец, с помощью IObit Driver Booster Pro я нашел отличную программу для обновления драйверов и поддержания моей системы в чистоте и по порядке." <em>-Перевод с итальянского</em></dd>
      </dl>
      <dl class="vector ">
        <dt>
        <div class="img-box">
          <h4>Vector</h4>
          <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
          <div>
            <div class="line"></div>
        </dt>
        <dd>"Наконец-то я нашел Driver Booster Pro, программа идеально подходит для того, чтобы всегда держать систему в чистоте и легко обновить до актуального состояния ." <em>-Перевод с японского</em></dd>
      </dl>
      <dl class="adam active">
        <dt>
        <div class="img-box">
          <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
          <h4>Adam Backlund</h4>
        </div>
        <div class="line"></div>
        </dt>
        <dd>"Для тех, у кого много приложений и драйверов, обычно нет времени для их ручного обновления, я очень рекомендую Driver Booster, он поможет быстро и легко обновить драйверы." <em>-Перевод с английского</em></dd>
      </dl>
      <dl class="olnet ">
        <dt>
        <div class="img-box">
          <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
          <h4>01net</h4>
          <div>
            <div class="line"></div>
        </dt>
        <dd>"Все операции могут быть завершены одним щелчком мыши, Driver Booster поможет вам сделать компьютер более стабильным и сэкономить ваше время." <em>-Перевод с французского</em></dd>
      </dl>
      <dl class="olorin active">
        <dt>
        <div class="img-box">
          <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
          <h4>Olorin 89</h4>
        </div>
        <div class="line"></div>
        </dt>
        <dd>"Driver Booster - это инструмент обновления драйверов, который облегчает жизнь для всех." <em>-Перевод с итальянского</em></dd>
      </dl>
      <dl class="html ">
        <dt>
        <div class="img-box">
          <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
          <h4>HTML-it</h4>
        </div>
        <div class="line"></div>
        </dt>
        <dd>"Driver Booster Pro предлагает вам более простое решение для обновления драйверов с помощью самых передовых технологий." <em>-Перевод с итальянского</em></dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- comparison start -->
<div id="compare" class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text">Некоторые Преимущества Вы Получите Только с <br>Driver Booster PRO</th>
      <th class="space"></th>
      <th class="itema">
        <div class="box">
          <p>FREE версия</p>
          <img src="<?php echo getStaticUrl('images/cry.png')?>" alt="" />
        </div>
      </th>
      <th class="space"></th>
      <th class="itemb">
        <div class="box">
          <p>PRO версия</p>
          <img src="<?php echo getStaticUrl('images/smile.png')?>" alt="" />
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Автоматическая проверка и определение устаревших, отсутствующих и неисправных драйверов </td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Обновление устаревших драйверов в 1 клик</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue top">Предоставляем только драйверы, проходящие тест Microsoft WHQL и тест IObit Review <em>УЛУЧШЕНО</em></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Сжатый пакет драйвера с меньшим размером для экономии времени</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">
        <span>Повышает производительность игры, прекратив ненужные процессы <em class="nuo">новинка</em></span>
      </td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Расширенная база данных обновляет больше устаревших и редких драйверов <em>УЛУЧШЕНО</em></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Разблокировка ограничения скорости обновления драйверов</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue"><span>Автоматическое резервное копирование всех драйверов для безопасного восстановления</span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue"><span>Автоматическое скачивание и установка во время простоя системы <em>УЛУЧШЕНО</em></span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue"><span>Легкое исправление ошибок устройства для лучшей производительности <em>УЛУЧШЕНО</em></span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue"><span>Приоритет обновления Game Ready Драйверов для более гладкой и повышенной производительности игры <em class="nuo">новинка</em></span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue"><span>Улучшенный игровой опыт с помощью необходимых игровых компонентов <em>УЛУЧШЕНО</em></span></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
      <td class="virtue">Автоматическое обновление до последней версии</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
      <td class="virtue">Бесплатная техническая поддержка 24/7 по запросу</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper">
    <h2>Только <b>19 руб</b> за каждый месяц, легко обновите устаревшие драйверы до актуальных!</h2>
    <div class="offer">
      <div class="imgbox">
        <img class="pcs active" src="<?php echo getStaticUrl('images/ds-box.png')?>" alt="" />
        <img class="pc" src="<?php echo getStaticUrl('images/db-box-sm.png')?>" alt="" />
      </div>
      <ul class="fl">
        <li class="active pcs" data-num="1">3 ПК / 1 Год + подарок <strong>-90%</strong></li>
        <li class="pc" data-num="0">1 ПК / 1 Год <strong>-75%</strong></li>
      </ul>
      <div class="price fr">
        <div class="price-box">
          <strong><span class="current">690</span><small class="current-sm">руб</small></strong> <del class="original">6960 руб</del>
        </div>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=ru-db63pcsd690&ref=ru_db63pcsd690purchase<?php echo $refStr;?>&aff=&refs=ru_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcsd1806-ru')">
          Купить Сейчас
        </a>
      </div>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd>
          <h3>Гарантия Возврата Денег</h3>
          <p>Мы гарантируем возврат в <span>пределах 60 дней со дня</span>покупка.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
        <dd>
          <h3>100% Безопасный Платеж</h3>
          <p>IObit предлагает безопасные <span>способы оплаты.</span></p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt="" /></dt>
        <dd>
          <h3>Быстрая Активация</h3>
          <p>После завершения покупки, вы <span>получите код лицензии всего за </span>несколько минут по электронной почте.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt="" /></dt>
        <dd>
          <h3>Служба Поддержки</h3>
          <p>Бесплатная Техническая <span>Поддержка 24/7.</span></p>
        </dd>
      </dl>
    </div>

    <dl class="annotation">
      <dt>Примечание:</dt>
      <dd>* Данные могут различаться в зависимост  и от разных систем или компьютеров.</dd>
      <dd>*. Рекламные программы могут быть изменены в любое время без предварительного уведомления по нашему собственному усмотрению.</dd>
    </dl>
    <p class="copyright">©2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</p>
  </div>
</div>
<!-- bottom end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$driversCount=empty($_GET['uc'])?0:intval($_GET['uc']);
$updateAuto=($_GET['adu']==1)?1:0;
?>
<!DOCTYPE html>
  <html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>Эксклюзивная 95% СКИДКА, чтобы снова пользоваться Driver Booster 6 PRO – IObit</title>
    <meta name="Copyright" content="IObit">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>

  </head>
  <body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://ru.iobit.com/" target="_blank">IObit</a>
      <!-- title -->
      <h1>Выкупите Новый Driver Booster 6 Pro</h1>
      <!-- subtitle -->
      <h2>No.1 Решение для Обновления Драйверов – обновите драйверы легко, безопасно и быстро</h2>
      <!-- db-box -->
      <img class="db-box fl" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO">
      <!-- db-message -->
      <div class="db-message fr">
        <!-- db-off -->
        <img class="db-off" src="<?php echo getStaticUrl('images/db-off.png')?>" alt="">
        <!-- db-line -->
        <p class="db-des">Эксклюзивно для Giveaway Пользователей</p>
        <p class="add">Только <strong>1 руб</strong> в день нужен для Ваших 3 ПК</p>
        <!-- price -->
        <p class="price">
          Только:  <span><b>349</b>руб</span>  <del>5970 руб</del>  
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=ru-db63pc349-ac&ref=ru_2018sepgiveaway&aff=<?php echo $_GET['aff']?>&refs=ru_purchase_db"
           onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-ru');">
          Выкупить Сейчас
        </a>
        <!-- attention -->
        <p class="attention">1 год подписки / 3 ПК</p>
        <!-- money-back -->
        <img class="money-back" src="<?php echo getStaticUrl('images/money-back.png')?>" alt="">
      </div>
    </div>
  </div>
  <!-- banner end -->
  <!-- feature-part1 start -->
  <div class="feature-part1">
    <div class="wrapper">
      <!-- arrow -->
      <img class="arrow" src="<?php echo $pResUrl;?>images/feature-arrow.png" alt="">
      <!-- title -->
      <h2 class="fr">
        <span class="top">Будучи с Вами, </span>
        <span class="bottom">Driver Booster Pro уже</span>
      </h2>
      <!-- details -->
      <ul class="details fr">
        <!-- updated -->
        <li class="updated">
          <?php if($driversCount!=0):?>
          Обновил 
          <span class="numbers clearfix">
            <i class="num1">0123456789</i>
            <i class="num2">0123456789</i>
            <i class="num3">0123456789</i>
          </span>драйверов и игровых компонентов, обеспечил вам  <strong>стабильную производительность ПК и плавный игровой опыт</strong>;
          <?php else:?>
            Обеспечил стабильную производительность вашего ПК и плавный игровой опыт.
          <?php endif;?>
        </li>
        <!-- saved -->
        <li class="saved">
          <?php if($updateAuto==1):?>
          <strong>Сэкономил  </strong> вам по крайней мере
          <span class="letters clearfix">
            <i class="let1">ä b c d e f g i j k l m п n o p q r s t u v w x y z</i>
            <i class="let2">b c d e f g H i j k l m о n o p q r s t u v w x y z</i>
            <i class="let3">ä b c d e f g H i j k л m n o p q r s t u v w x y z</i>
            <i class="let4">ä b c d e i g H о j k l m n o p q r s t u v w x y z</i>

            <i class="let5">ä b c d e f g H i j k l m n o p q r s в u v w x y z</i>
            <i class="let6">b c d ä f g H i и k l m и n o p q r s t u v w x y z</i>

            <i class="let7">ä b c d e f g H i j k l m n o p q r s н u v w x y z</i>
            <i class="let8">b c d ä f g H у j k l m у n o p q r s у u v w x y z</i>
            </span>
            <b>вашего времени</b> с помощью автоматическим обновлением;
          <?php endif;?>
        </li>
        <!-- reduced -->
        <li class="reduced">
            <b class="red">Уменьшил</b> ваш <strong>системный сбой</strong> с помощью технологии автоматического резервного копирования и восстановления драйверов.
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part1 end -->
  <!-- feature-part2 start -->
  <div class="feature-part2">
    <div class="wrapper">
      <!-- content -->
      <p>
        В течение последних 6 лет Driver Booster Pro обновил <strong>12,700,000</strong> драйверов для <strong>1,500,000 </strong> ценных пользователей, что делает работу их ПК на  <strong>200%* </strong> быстрее в среднем благодаря постоянному обновлению драйверов устройств и повышению стабильности производительности ПК.
      </p>
    </div>
  </div>
  <!-- feature-part2 end -->
  <!-- feature-part3 start -->
  <div class="feature-part3 wrapper">
    <!-- title -->
    <h2>Теперь, если Вы пропустите новый Pro, <br>Вы можете столкнуться с этими проблемами, как...</h2>
    <!-- content for progress -->
    <div class="content clearfix">
      <!-- Worse PC Performance -->
      <dl class="performance fl">
        <dt>Ухудшая производительность ПК  </dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>15% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Unstable & Stuck Gaming Experience -->
      <dl class="experience fl">
        <dt>Нестабильность и затревание  в игре</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>35% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Time-consuming Driver Update -->
      <dl class="update fr">
        <dt>Долгое время обновления драйверов</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>2X  больше</i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <!-- notes -->
    <p>*Мы протестировали Driver Booster 6 PRO в нашей внутренней тестовой лаборатории. Ваши результаты могут отличаться.</p>
  </div>
  <!-- feature-part3 end -->
  <hr>
  <!-- feature-part4 start -->
  <div class="feature-part4">
    <div class="wrapper clearfix">
      <!-- title -->
      <h2>
        Поэтому мы настоятельно рекомендуем Вам выкупить Driver Booster 6 Pro, <br> чтобы поддерживать все драйверы постоянно в актуальном состоянии
      </h2>
      <!-- left-message -->
      <ul class="left-message fl">
        <li class="padding-right25">
          <strong>3,000,000+ драйверов</strong> в базе данных, <br> чтобы поддерживать все ваши <br> драйверы устройств в актуальном <br> состоянии
        </li>
        <li class="padding-right55">
          <strong>Автообновление </strong>  драйверов без <br> каких-либо помех при работе
        </li>
        <li class="padding-right5">
          <strong>1 щелчок, чтобы исправить</strong> все <br> ошибки устройств для вашего ПК
        </li>
      </ul>
      <!-- right-message -->
      <ul class="right-message fr">
        <li class="padding-left45">
          <strong>Необходимые компоненты </strong> для <br> успешного запуска игры
        </li> 
        <li class="padding-left5">
          Приоритет обновления <strong>драйверов <br> Game Ready</strong> для лучшего <br> игрового опыта
        </li>
        <li class="padding-left10">
          1-клик, чтобы <strong>остановить ненужные <br> процессы</strong> для быстрой игры
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part4 end -->
  <!-- between-buy start -->
  <div class="between-buy wrapper">
    <!-- title -->
    <h2>Обеспечьте Лучшую Производительность ПК и Более Плавный Игровой Опыт</h2>
    <!-- price -->
    <p class="price">
      Только: <span><b>349</b>руб</span>  <del>5970 руб</del>  
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=ru-db63pc349-ac&ref=ru_2018sepgiveaway1&aff=<?php echo $_GET['aff']?>&refs=ru_purchase_db"
       onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-ru');">
      Выкупить Сейчас
    </a>
    <!-- attention -->
    <p class="attention">1 год подписки / 3 ПК</p>
    <!-- money-back -->
    <img class="money-back" src="<?php echo getStaticUrl('images/money-back.png')?>" alt="">
  </div>
  <!-- between-buy end -->
  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <!-- title -->
      <h2>Что бы Вы пропустили, если остановитесь на FREE версии</h2>
      <!-- table -->
      <table cellspacing="0" cellpadding="0" valign="middle" align="cnter">
        <thead>
        <tr>
          <th class="w320"></th>
          <th class="w530"></th>
          <th class="w350"></th>
          <th class="w50"></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td class="w320 grey">2,000,000+</td>
          <td class="w530">База данных драйверов</td>
          <td class="w350 red">3.000.000+</td>
          <td class="w50"></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="w320 grey">Нет ускорения</td>
          <td class="w530">Скорость загрузки драйвера</td>
          <td class="w350 red">200% быстрее</td>
          <td class="w50"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="w320 grey">Нет приоритета</td>
          <td class="w530">Драйверы Game Ready</td>
          <td class="w350 red">Приоритет</td>
          <td class="w50"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Игровые компоненты</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Автообновление драйверов</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Резервное копирование драйверов</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td class="w320"></td>
          <td class="w530"></td>
          <td class="w350"></td>
          <td class="w50"></td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->
  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Отзывы СМИ</h2>
            <p>"IObit сделал много утилит, и Driver Booster PRO, которая может автоматически обновлять ваши драйверы, это одна из лучших. Простая основная функциональность Driver Booster PRO стала еще более привлекательной благодаря включению нескольких лицензий по очень выгодной цене, а также и настраиваемому интерфейсу, который отлично отображает конкретную аппаратной информацию. Конкуренты Ashampoo Driver Updater и SlimWare Utilities DriverUpdate предлагают прекрасные функции, но IObit Driver Booster PRO делает еще лучше."</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt=""></dt>
          <dd>
            <h2>Отзывы Пользователей</h2>
            <p>"С Driver Booster я могу легко узнать, какие драйверы устройств устарели, и легко их обновить. Он также помогает мне исправить ошибки со звуком, интернет-соединением, устройством и т.д.. Я не верил ему перед использованием, но после использования мне действительно он очень нравится. Мой компьютер стал быстрее, безопаснее и новее, чем 8 месяцев назад. Большое спасибо IObit."</p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""></dt>
          <dd>
            <h2>Отзывы Пользователей</h2>
            <p>"Driver Booster - это замечательное приложение. Для тех, у кого много приложений и драйверов, обычно нет времени для их ручного обновления, я очень рекомендую Driver Booster, он поможет быстро и легко обновить драйверы."</p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
          <dd>
            <h2>Отзывы Пользователей</h2>
            <p>"Это одна из лучших программ обновления драйверов. Microsoft даже сбила меня с пути, предложив обновления, которые не будут работать с моей машиной. Эта программа знала, какие обновления мне нужны без никаких конфликтов. Она отлично работает, простая в использовании, информативная и интуитивно понятная. Она будет оставаться в моем ПК навсегда. Прекрасная работа! "</p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <!-- title -->
    <h2>Всемирные Награды</h2>
    <img src="<?php echo getStaticUrl('images/awards-icon.png')?>" alt="">
  </div>
  <!-- award end -->
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="footer-servizio clearfix">
        <dl class="money_back fl">
          <dd>
            <img src="<?php echo getStaticUrl('images/money-back.png')?>" alt="">
          </dd>
          <dt>
            <h3>Гарантия Возврата Денег</h3>
            <p>Мы вернем Вам деньги в пределах <br> 60 дней со дня покупки, если Вы не <br> удовлетворены.</p>
          </dt>
        </dl>
        <dl class="veloce fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/veloce.png" alt="">
          </dd>
          <dt>
            <h3>Безопасный Платеж</h3>
            <p>IObit предлагает безопасные <br> способы оплаты.</p>
          </dt>
        </dl>
        <dl class="verified fr">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/verified.png" alt="">
          </dd>
          <dt>
            <h3>Быстрая Активация</h3>
            <p>После завершения покупки, <br> выполучите код лицензии всего за <br> несколько минут.</p>
          </dt>
        </dl>
      </div>
      <p class="note">
        Примечание:<br>
        * Данные могут различаться в зависимости от разных систем или компьютеров.
      </p>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</p>
    </div>
  </div>
  <!-- footer end -->
  <!-- float start -->
  <div class="float">
    <div class="wrapper clearfix">
      <dl class="fl">
        <dt>Эксклюзивное Предложение </dt>
        <dd><strong> <b>95% </b> СКИДКА</strong> на Избавление Системных Сбоев и Нестабильного Игрового Опыта </dd>
      </dl>
      <div class="float-message fr">
        <!-- price -->
        <p class="price">
          Только: <span><b>349</b>руб </span>  <del>5970 руб</del>  
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=ru-db63pc349-ac&ref=ru_2018sepgiveaway2&aff=<?php echo $_GET['aff']?>&refs=ru_purchase_db"
           onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-ru');">
          Выкупить Сейчас
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->
  <script>
    driversCount=<?php echo $driversCount;?>;
    autoUpdate=<?php echo $updateAuto;?>;
    $(document).ready(function() {
      $('#dg-container').gallery();
    });
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  </body>
  </html>
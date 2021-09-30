<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
    $date=$_GET['d'];
    $cName='rudb'.$date;
    $cookie=$_COOKIE[$cName];
    if($cookie){
        $packsNum=$_COOKIE[$cName];
        if($packsNum>3){
            $packsNum--;
            setcookie($cName,$packsNum);
            if(rand(1,100)%2==0){
                $packsNum++;
              }
    }else{
            $packsNum=3;
          }
  }else{
        $packsNum=79;
        setcookie($cName,$packsNum);
      }
  echo $packsNum;
  exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Супер распродажа! Купи 1 и получи 2 в подарок на Driver Booster PRO!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <?php if(!empty($_SERVER['QUERY_STRING'])):?>
  <link rel="canonical" href="https://ru.iobit.com/purchase/db/" />
  <?php endif;?>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>"/>
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://ru.iobit.com/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h4>ЗАКРЫТАЯ РАСПРОДАЖА</h4>
      <h1>ТВОЙ 1=<b>3</b> ШАНС</h1>
      <div id="bantime" class="countdown">
        <i class="all-icons"></i> <b>12</b> Часов: <b>30</b> Мин: <b>56</b> Сек: <b>321</b> Мс*
      </div>
      <div class="panelbox packbox"><span><b class="reducebox"><b class="giftnum">50</b></b> пакетов</span> осталось сегодня!</div>
      <div class="panelbox panel">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
        <span>+</span>
        <img class="right" src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>
      </div>
      <div class="price">
        <p><del>5970</del> <strong>990 руб</strong></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=ru-db63pc990&ref=ru_db63pc990purchase&aff=<?php echo $_GET['aff'];?>&refs=ru_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc1810-ru')">
          <i class="all-icons"></i>
          Купить Сейчас
        </a>
        <p class="people"><i class="all-icons"></i> <b>3,149,917</b> людей уже купили</p>
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
  <h4><b class="giftnum">50</b> пакетов осталось сегодня!</h4>
  <h2>Активируйте Driver Booster PRO c Супервыгодой!</h2>
  <p>Более безопасное обновление драйверов и улучшенный игровой опыт.</p>
  <ul class="clearfix">
    <li>
      <img src="<?php echo getStaticUrl('images/dbm-box.png')?>" alt=""/>
      <div class="txt">
        <h3>Driver Booster PRO</h3>
        <strong>0 руб</strong> <del>1990</del>
      </div>
    </li>
    <li>
      <img src="<?php echo getStaticUrl('images/dbm-box.png')?>" alt=""/>
      <div class="txt">
        <h3>Driver Booster PRO</h3>
        <strong>0 руб</strong> <del>1990</del>
      </div>
    </li>
  </ul>
  <div class="price">
    <a class="buybtn" 
       href="https://www.iobit.com/buy.php?product=ru-db63pc990&ref=ru_db63pc990purchase&aff=<?php echo $_GET['aff'];?>&refs=ru_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc1810-ru')">
      Получите Ваш Подарок за 0 руб
    </a>
    <p>Стоимостью <b>3980</b> руб</p>
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
<div class="footbuy wrapper">
  <h2>Ловите шанс получить 2 дополнительных DB Pro бесплатно!</h2>
  <div class="countdown">
    <i class="all-icons"></i> <b>12</b> Часов: <b>30</b> Мин: <b>56</b> Сек: <b>321</b> Мс*
  </div>
  <div class="clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
    <div class="price fl">
      <p><strong>990 руб</strong> &nbsp; <del>5970</del></p>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=ru-db63pc990&ref=ru_db63pc990purchase&aff=<?php echo $_GET['aff'];?>&refs=ru_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc1810-ru')">
        Купи и сэкономь 4980 р.
      </a>
      <p class="people"><i class="all-icons"></i> <b>3,149,917</b> людей уже купили</p>
    </div>
  </div>
</div>
<!-- footbuy start -->

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
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
</body>
</html>
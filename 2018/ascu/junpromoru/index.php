<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

  // 剩余礼品数
  $packsNum = ceil(microtime_float()*2000/20000);
  //礼品数最大值
  $packsCount=360;
  $packsNum = $packsCount-($packsNum%$packsCount);
  if ($_GET['action'] == 'getPacks'){
      echo $packsNum;
      exit;
  }

$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Сэкономьте 78% на Advanced SystemCare Ultimate, Наслаждайтесь Максимальной Защитой ПК от Вирусов!</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <?php if(!empty($_SERVER['QUERY_STRING'])):?>
  <link rel="canonical" href="https://ru.iobit.com/purchase/ascu/" />
  <?php endif;?>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>

  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- header start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="https://ru.iobit.com" target="_blank">IObit </a>
      <p class="title">Advanced SystemCare Ultimate</p>
      <h1 class="title">ОГРАНИЧЕННОЕ ПРЕДЛОЖЕНИЕ</h1>
      <ul class="countdown clearfix" id="countdown">
        <li>
          <strong>00</strong>
          Часов
        </li>
        <li>
          <strong>00</strong>
          Мин
        </li>
        <li>
          <strong>00</strong>
          Сек
        </li>
        <li>
          <strong>000</strong>
          <sup>*</sup>
        </li>
      </ul>
      <!-- header-content for ascu -->
      <div class="content clearfix ">
        <img class="header-ascu left" src="<?php echo $pResUrl; ?>images/header-ascu.png" alt="">
        <div class="header-infor right">
          <p>Активируйте ASC Ultimate для 3 ПК сегодня со скидочной ценой! Дайте ПК всестороннюю защиту!</p>
          <p class="mrgin-top-10"><strong class="packsNum"><?php echo $packsNum ?></strong> Пакетов Остались Теперь!</p>
          <h3>Оптимальная Защита ПК</h3>
          <dl>
            <dt>
              <p>
                Теперь 
                <strong>990<b>руб</b></strong>  
                <span class="sup">4500 руб</span>  
                <span class="sub">1 Год / 3 ПК</span>
              </p>
            </dt>
            <dd>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-ascu113pc990&ref=ru_ascu113pc990purchase<?php echo $refStr;?>&refs=ru_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pc1806-ru')">
                <i></i>
                <span>Купить Сейчас</span>
              </a>
              <img class="money-back" src="<?php echo $pResUrl; ?>images/money-back.png" alt="">
              <p class="attention">7,632,027 людей активировали</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- header end -->
  <!-- product-intro start -->
  <div class="product-intro wrapper clearfix">
    <h3>Полная Защита Вашего ПК и Максимальная Производительность!</h3>
    <div class="box left">
      <img class="buy-icon" src="<?php echo $pResUrl; ?>images/buy-icon.png" alt="">
      <dl class="buy-ascu clearfix">
        <dt class="left">
          <img src="<?php echo $pResUrl; ?>images/boxshot-ascu.png" alt="">
        </dt>
        <dd class="right">
          <h3>
            Что вы можете получить,<br>
            <strong>АКТИВИРУЯ</strong> ASC Ultimate 11:
          </h3>
          <p>
            Автоматическая и полномасштабная антивирусная <br>
            утилита против всех видов вирусов, вымогателей, <br>
            системного замедления, замораживания и сбоев. <br>
            Это ваше лучшее решение для обеспечения <br>
            безопасности и производительности.
          </p>
          <img src="<?php echo $pResUrl; ?>images/product_awards.png" alt="">
          <a class="intro" href="javascript:void(0)">Узнайте больше о версии PRO >> </a>
        </dd>
      </dl>
    </div>
    <div class="box right">
      <img class="free-icon" src="<?php echo $pResUrl; ?>images/free-icon.png" alt="">
      <dl class="free-ascu">
        <dt>
          <img src="<?php echo $pResUrl; ?>images/additional.png" alt="">
        </dt>
        <dd>
          <h3>0руб <span>3000 руб</span></h3>
          <p>
            <strong>2 Дополнительных ПК</strong><br>
            Лицензия Advanced SystemCare Ultimate <br> 
            поддерживает дополнительные 2 ПК, <br>
            поэтому вы можете поделиться ею со своей<br> 
            семьей и друзьями!
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- product-intro end -->
  <!-- intermediary-buy start-->
  <div class="intermediary-buy wrapper">
    <dl class="clearfix">
      <dt class="left">
        <h3>Advanced SystemCare Ultimate</h3>
        <p>
          Активируйте Теперь и Получите Лицензию на 3 ПК / 1 Год за Очень Выгодную Цену!
        </p>
        <p>
          ОГРАНИЧЕННОЕ предложение по продаже!
        </p>
        <p><strong class="packsNum"><?php echo $packsNum ?></strong> Пакетов Лишь Остались!<br></p>
        <!-- delete some code  -->
      </dt>
      <dd class="right">
        <p class="price">Только <strong>990<b>руб</b></strong>  <span>4500 руб</span></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-ascu113pc990&ref=ru_ascu113pc990purchase<?php echo $refStr;?>&refs=ru_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pc1806-ru')">
          <i></i>
          <span>Купите и Сэкономьте 78%</span>
        </a>
        <p class="attention">
          7,632,027 людей активировали!
        </p>
      </dd>
    </dl>
  </div>
  <!-- intermediary-buy end -->
  <!-- review start -->
  <div class="review container">
    <div class="wrapper">
      <a class="control-prev" href="javascript: prevFun()"></a>
      <a class="control-next" href="javascript: nextFun()"></a>
      <ul class="review-content">
        <li class="far-left" data-role="rod-garnett">
          <img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="">
          <div class="review-details">
            <h3>Отзывы Пользователей</h3>
            <h4>"Advanced SystemCare Ultimate - новая мать нагрузки. Большой победитель!"</h4>
            <p>
              "У меня была проблема всегда возиться с моим компьютером. Затем я получил свой первую копию Advanced Systemcare. Не нужно возиться дольше. Теперь, когда у меня есть антивирус, включенный в этот продукт, мне больше не нужно второй программы. Advanced System Care Ultimate это новая мать нагрузки. Большой победитель! Мой компьютер всегда в отличном состоянии и работает быстро, как олень. В отличие от других продуктов, не было постоянных конфликтов."
            </p>
            <h4>Rod Garnett</h4>
          </div>
        </li>
        <li class="on-left" data-role="dareen-lim">
          <img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="">
          <div class="review-details">
            <h3>Отзывы Пользователей</h3>
            <h4>"Я рекомендую advanced systemcare ultimate как их антивирус / оптимизатор системы."</h4>
            <p>
              "С помощью прошлой версии advanced systemcare ultimate у меня не было проблем почти со всем, системой, вредоносными программами и т.д. И теперь, программа обновлена с большими возможностей на нем, что сделает мой ноутбук работать в 5 раз быстрее, чем раньше. Мне также нравится новый скин. Еак что в будущем, когда я исправляю чужой компьютер, я рекомендую advanced systemcare ultimate как их антивирус/оптимизатор системы."
            </p>
            <h4>Dareen Lim</h4>
          </div>
        </li>
        <li class="on-middle" data-role="logo-addictivetips">
          <img src="<?php echo $pResUrl; ?>images/logo-addictivetips.png" alt="">
          <div class="review-details">
            <h3>Отзывы СМИ</h3>
            <h4>"Advanced SystemCare Ultimate - мощный антивирус и оптимизатор системы."</h4>
            <p>
              "Advanced SystemCare Ultimate - мощный антивирус и оптимизатор системы. Помимо защиты вашего ПК от вредоносных программ, вирусов и аналогичных угроз, она также может повысить производительность вашего ПК, фиксируя различные реестра и ярлыки, удаляя мусорные файлы, проверяя локальные диски на системные уязвимости и т.д. "
            </p>
            <h4>Addictivetips</h4>
          </div>
        </li>
        <li class="on-right" data-role="russell-peck">
          <img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt="">
          <div class="review-details">
            <h3>Отзывы Пользователей</h3>
            <h4>"Это одна из самых простых, но эффективных программ, которые я нашел, чтобы сохранить все три моих компьютеров здоровыми."</h4>
            <p>
              "Я использовал многие версии Advanced SystemCare уже несколько лет. Когда я посмотрел на особенности Advanced SystemCare Ultimate, я понял, что я должен был иметь его. И он меня не разочаровало меня. Это одна из самых простых, но эффективных программ, которые я нашел, чтобы сохранить все три моих компьютеров здоровыми."
            </p>
            <h4>Russell Peck</h4>
          </div>
        </li>
      </ul>
    </div>
    <div class="hidden" id="comparetab"></div>
  </div>
  <!-- review end -->
  <!-- comparetab start -->
  <div class="comparetab wrapper">
    <h3 class="comparetab-title">Почему Выбрать Advanced SystemCare Ultimate 11?</h3>
    <h4 class="comparetab-subhead"><span>Лучшая Защита</span> и Больше <span>не Будет Задержки Производительности.</span> Посмотрите Сравнение Ниже</h4>
    <table>
      <thead>
        <tr>
          <td></td>
          <td>
            <p>Advanced SystemCare <br>Ultimate</p>
          </td>
          <td>
            <p>AVG <br>Anti-virus</p>
          </td>
          <td>
            <p>Norton Security <br>Deluxe</p>
          </td>
          <td>
            <p>Avast! Pro <br>Antivirus</p>
          </td>
          <td>
            <p>Microsoft Security  <br>Essentials</p>
          </td>
          <td>
            <p>McAfee® AntiVirus</p>
          </td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Частота <br>Обнаружения</td>
          <td>Очень высокая</td>
          <td>Нормальная</td>
          <td>Высокая</td>
          <td>Нормальная</td>
          <td>Высокая</td>
          <td>Высокая</td>
        </tr>
        <tr>
          <td>
            Задержка <br>Производительности
          </td>
          <td>Нет</td>
          <td>Есть</td>
          <td>Есть</td>
          <td>Есть</td>
          <td>Есть</td>
          <td>Есть</td>
        </tr>
        <tr>
          <td>
            Оптимальная <br>Очистка и <br>Оптимизация ПК
          </td>
          <td><span></span></td>
          <td><span></span></td>
          <td><span></span></td>
          <td><span></span></td>
          <td><span></span></td>
          <td><span></span></td>
        </tr>
        <tr>
          <td>
            20+ Инструментов <br>для Повышения <br>Работы ПК
          </td>
          <td><span></span></td>
          <td><span></span></td>
          <td><span></span></td>
          <td><span></span></td>
          <td><span></span></td>
          <td><span></span></td>
        </tr>
      </tbody>
    </table>
    <ul>
      <li>
        <h3>Бесподобная Частота Обнаружния и Максимальная Защита</h3>
        <p>
          Один клик для очистки скрытых и упрямых вирусов, троянов, червей, шпионских программ, рекламного ПО и различных вредоносных программ. 
          Advanced SystemCare Ultimate также обеспечивает постоянную, автоматическую и проактивную защиту от всех видов угроз безопасности в Интернете с последней вирусной базой данных.
        </p>
      </li>
      <li>
        <h3>Наслаждайтесь Уверенной Безопасностью без Системного Замедления</h3>
        <p>
          Ваша система работает на максимальной скорости без какой-либо задержки в производительности благодаря нашей передовой технологии интернет-безопасности.
        </p>
      </li>
      <li>
        <h3>Безопасный Серфинг, Поиск, Скачивание</h3>
        <p>
          Технология Проактивной Вирусной Контроли контролирует поведения процессов в реальном времени, проверяет файлы, передаваемые по электронной почте, и блокирует возможные угрозы. Бесподобная частота обнаружния гарантирует вам более безопасную среду при использовании вашего ПК.
        </p>
      </li>
      <li>
        <h3>Получите Высоко Настраиваемую Производительность и Наслаждайтесь Новым ПК</h3>
        <p>
          Уже доказанная мощная способность настройки ПК развязывает полную мощь вашего ПК. С помощью оптимизации в реальном времени и функции 
          активногоускорения, системные ресурсы разумно управляются, чтобы обеспечить вам супер-быстрый компьютер.
        </p>
      </li>
    </ul>
  </div>
  <!-- conparetab end -->
  <!-- award start -->
  <div class="award container">
    <div class="wrapper">
      <h3>Нас Рекомендуют Эти СМИ</h3>
      <img src="<?php echo $pResUrl; ?>images/award.png" alt="">
    </div>
  </div>
  <!-- award end -->
  <!-- footer start -->
  <div class="footer wrapper clearfix">
    <dl class="secure left clearfix">
      <dt class="left">
        <img src="<?php echo $pResUrl; ?>images/secure.png" alt="">
      </dt>
      <dd class="right">
        <h3>Безопасный Платеж</h3>
        <p>IObit предлагает несколько способов оплаты</p>
      </dd>
    </dl>
    <div class="payments right">
      <img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
    </div>
    <div class="clear"></div>
    <hr>
    <p class="statement">
      Примечание:<br>
      *. Рекламные программы могут быть изменены в любое время без предварительного уведомленияпо нашему собственному усмотрению.
    </p>
    <p class="copyright">© 2005 - 2018 IObit. Все Права Защищены.</p>
    </div>
  </div>
  <!-- footer end -->
  <!-- floatlayer start -->
  <div class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h3>Сэкономьте <span>78%</span> на Максимальную Защиту ПК от Вирусов!</h3>
        <p><strong>7,632,231</strong> людей активировали</p>
        <ul class="countdown clearfix" id="float-countdown">
          <li>
            <strong></strong>
            Часов
          </li>
          <li>
            <strong></strong>
            Мин
          </li>
          <li>
            <strong></strong>
            Сек
          </li>
          <li>
            <strong></strong>
            <sup>*</sup>
          </li>
        </ul>
      </div>
      <dl class="right">
        <dt>только&nbsp;&nbsp;<strong>990<b>руб</b></strong> <del>4500 руб</del></dt>
        <dd>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-ascu113pc990&ref=ru_ascu113pc990purchase<?php echo $refStr;?>&refs=ru_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3pc1806-ru')">
            <i></i>
            <span>Купить Сейчас</span>
          </a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- floatlayer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    function getPacksNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&r="+Math.random(),
      success: function(packs){
        $('.packsNum').html(packs);
        setTimeout('getPacksNum()', 10000);
      }
    });
  }
  setTimeout('getPacksNum()', 10000);
  </script>

</body>
</html>

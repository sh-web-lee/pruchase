<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$refStr = 'ru_sd-ac';
if($_GET['to']=='db_ac_sd'){
  $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acsd','ascu_acsd'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>65% Cкидка на Smart Defrag PRO</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Эксклюзивное предложение только для ценных пользователей IObit. Быстрая и глубокая дефрагментация для оптимизации жесткого диска и повышения производительности ПК!">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>Smart Defrag 6 PRO</h1>
        <p>Максимизируйте производительность жесткого диска и ускорьте свой ПК</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="">
        <div class="discount fl">
          <h2>65% СКИДКА</h2>
          <p>Эксклюзивно для Ценных Пользователей IObit</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>ТОЛЬКО: <strong>349 руб</strong> <del>990 руб</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=ru-sd6-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ru_ac_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdacjun-ru')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Активируйте Сейчас</span>
              </div>
            </a>
          </dd>
          <dd>1 Год / 1 ПК</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <div class="feature wrapper">
    <h2>Что может сделать Smart Defrag 6 PRO для Вас?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""/></dt>
        <dd>
          <h3>Сверхбыстрый Движок Дефрагментации</h3>
          <p>Более эффективная и тщательная дефрагментация за меньшее время.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""/></dt>
        <dd>
          <h3>Автоматическая Умная Дефрагментация</h3>
          <p>Автоматическая дефрагментация указанных файлов и дисков без перерыва.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""/></dt>
        <dd>
          <h3>Быстрая Скорость Доступа</h3>
          <p>Ускорение скорости доступа к файлам и скорости запуска игры с помощью Дефрагментации Больших Файлов.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""/></dt>
        <dd>
          <h3>Быстрый Запуск ПК</h3>
          <p>Быстрый запуск ПК и максимальная скорость работы системы с помощью Дефрагментации во Время Загрузки.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Всемирные Награды</h2>
      <ul class="clearfix">
        <li>
          <a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine" />
          </a>
        </li>
        <li>
          <a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet" />
          </a>
        </li>
        <li>
          <a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/majorgeeks.png')?>" alt="Major Geeks" />
          </a>
        </li>
        <li>
          <a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/pcworld.png')?>" alt="PC World" />
          </a>
        </li>
        <li>
          <a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip" />
          </a>
        </li>
        <li>
          <a href="http://www.softpedia.com/get/Tweak/System-Tweak/Advanced-WindowsCare-Professional.shtml?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Softpedia" />
          </a>
        </li>
        <li class="last">
          <a href="http://driver-booster.updatestar.com/?ref=imfac" target="_blank">
            <img src="<?php echo getStaticUrl('images/updatestar.png')?>" alt="Updatestar" />
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl class="active">
        <dt>
        <h3>Отзывы СМИ</h3></dt>
        <dd>
          <h4>"Iobit Smart Defrag-лучший дефрагментатор, который мы пробовали."</h4>
        </dd>
        <dd>"IObit Smart Defrag оптимизирует ваш ПК, чтобы позволить в полной мере использовать производительность SSD при дефрагментации жестких дисков. SSD Trim tool автоматически активирует системные твики, которые обычно требуют опыта для их активизации. Обновления Smart Defrag включают в себя новый движок дефрагментации, специализированная Дефрагментация Игры, классный новый интерфейс и многиеязыковые варианты (35 и подсчет)."</dd>
      </dl>
      <dl>
        <dt>
        <h3>Отзывы Пользователей</h3></dt>
        <dd>
          <h4>"Smart defrag это очень полезная программа для дефрагментации диска."</h4>
        </dd>
        <dd>"Smart defrag это очень полезная программа для дефрагментации диска, работает в фоновом режиме, когда компьютер находится в режиме ожидания, так что вы его почти не замечает. В результате: диски постоянно дефрагментируются, что обеспечивает быстрый доступ и меньший износ. Smart defrag является лучшим бесплатным дефрагментатором дисков, который я когда-либо использовал, и я обязательно рекомендую его своей семье и друзьям!"</dd>
      </dl>
      <dl>
        <dt>
        <h3>Отзывы Пользователей</h3></dt>
        <dd>
          <h4>"Это простая и достойная утилита для вашего жесткого диска или SSD."</h4>
        </dd>
        <dd>"У меня запускается комбинация RAID 0 SSD и RAID 0 HDD, и использую Smart Defrag Pro для анализа, дефрагментации и поддержания работы своих дисков с максимальной производительностью. Как и все другие IObit программы, она проста в установке и использовании и очень надежна. Просто установите и забудьте об этом. Smart Defrag имеет очень маленький объем памяти, так что он не замедлит работу вашей системы. Определенно рекомендуется!"</dd>
      </dl>
      <dl>
        <dt>
        <h3>Отзывы Пользователей</h3></dt>
        <dd>
          <h4>"С помощью этой фантастической программой мой рабочий стол и ноутбук работают быстро и экономически."</h4>
        </dd>
        <dd>"Я являюсь пользователем Smart defrag уже многие годы. С помощью этой фантастической программой мой рабочий стол и ноутбук работают быстро и экономически. Вместе с advance System care ultimate у вас будет полный комлект инструментов для быстрого и безопасного обновления вашей системы до актуального состояния.Используя его каждый день без необходимости ждать (компьютер закрывается сам), вы можете держать вашу систему в отличном состоянии, даже если у вас нет технического фона!"</dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li  class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/clnet.png')?>" alt="cnet"/></div>
        <p>Cnet</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/amnon.png')?>" alt="Amnon"/></div>
        <p>Amnon</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"/></div>
        <p>Edward Lee Ah Yen</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="Hans"/></div>
        <p>Hans</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Наслаждайтесь отличной производительностью жесткого <br> диска и более плавным ПК</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>ТОЛЬКО: <strong>349 руб</strong> <del>990 руб</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=ru-sd6-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ru_ac_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdacjun-ru')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Активируйте Сейчас</span>
              </div>
            </a>
          </dd>
          <dd>1 Год / 1 ПК</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">© 2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>Эксклюзивное Предложение</h2>
        <p><strong>65% СКИДКА</strong> на Увеличение Скорости Роботы Медленного ПК и Загрузки к Файлам</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>349 руб </strong><del>990 руб</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="https://www.iobit.com/buy.php?product=ru-sd6-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ru_ac_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdacjun-ru')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Активируйте Сейчас</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo $pResUrl; ?>script/script.js"></script>
</body>
</html>
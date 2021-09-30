<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
$aff=$_GET['aff'];
$refStr = 'ru_db-ac';
if(in_array($_GET['st'],array('asc_acdb','ascu_acdb'))){
  $refStr.='-'.$_GET['st'];
}
if(in_array($_GET['to'],array('db_ac_asc_p1','db_ac_asc_p2','db_ac_asc_p3','db_ac_imf','db_ac_iot','db_ac_iu','db_ac_sd','db_ac_sm8'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>80% Cкидка на Driver Booster PRO</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Эксклюзивное предложение только для ценных пользователей IObit. Лучшее средство для обновления драйверов ПК, чтобы предотврадить систему от сбоев и обеспечить стабильный игровый опыт!">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://ru.iobit.com/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <div class="title">
        <h1>Driver Booster 6 PRO</h1>
        <p>Лучшее средство для обновления драйверов ПК легко, безопасно и быстро</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="">
        <div class="discount fl">
          <h2>80% СКИДКА</h2>
          <p>Эксклюзивно для Ценных Пользователей IObit</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>ТОЛЬКО: <strong>349 руб</strong> <del>1990 руб</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=ru-db6-ac&ref=<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=ru_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbacjun-ru');">
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
    <h2>Что может сделать Driver Booster PRO для Вас?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>БОЛЬШАЯ БАЗА ДАННЫХ ДРАЙВЕРОВ</h3>
          <p>Обнаружите и обновите более 3,000,000+ драйверов в 1 клик, чтобы повысить стабильность и производительность вашего ПК.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>ОПТИМАЛЬНЫЙ ИГРОВОЙ ОПЫТ</h3>
          <p>Повысьте производительность с помощью новейших Game Ready драйверов, и наслаждайтесь плавностью в играх с помощью необходимых компонентов.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>БЫСТРОЕ И АВТОМАТИЧЕСКОЕ СКАЧИВАНИЕ</h3>
          <p>Быстрое и автоматическое скачивание во время простоя системы.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>БЕЗОПАСНОЕ ОБНОВЛЕНИЕ ДРАЙВЕРОВ</h3>
          <p>Автоматическое выполнение резервного копирования перед обновлением.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Всемирные Награды</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
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
          <h4>
            "IObit сделал много утилит, и Driver Booster PRO, которая может автоматически обновлять ваши драйверы, это одна из лучших."
          </h4>
          <p>
            "Простая основная функциональность Driver Booster PRO стала еще более привлекательной благодаря включению нескольких лицензий по очень выгодной цене, а также и настраиваемому интерфейсу, который отлично отображает конкретную аппаратной информацию. Конкуренты Ashampoo Driver Updater и SlimWare Utilities DriverUpdate предлагают прекрасные функции, но IObit Driver Booster PRO делает еще лучше." 
          </p>
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Отзывы Пользователей</h3></dt>
        <dd>
          <h4>"Мой компьютер стал быстрее, безопаснее и новее, чем 8 месяцев назад."</h4>
          <p>
            "С Driver Booster я могу легко узнать, какие драйверы устройств устарели, и легко их обновить. Он также помогает мне исправить ошибки со звуком, интернет-соединением, устройством и т.д. Я не верил ему перед использованием, но после использования мне действительно он очень нравится. Мой компьютер стал быстрее, безопаснее и новее, чем последние 8 месяцев назад. Большое спасибо IObit."
          </p>
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Отзывы Пользователей</h3></dt>
        <dd>
          <h4>"Я очень рекомендую Driver Booster, он поможет быстро и легко обновить драйверы."</h4>
          <p>
            "Driver Booster - это замечательное приложение. Для тех, у кого много приложений и драйверов, обычно нет времени для их вручного обновления, я очень рекомендую Driver Booster, он поможет быстро и легко обновить драйверы."
          </p>
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Отзывы Пользователей</h3></dt>
        <dd>
          <h4>
            "Она отлично работает,простая в использовании, информативная и интуитивно понятная.Она будет оставаться в моем ПК навсегда. Прекрасная работа!"
          </h4>
          <p>
            "Это одна из лучших программ обновления драйверов. Microsoft даже сбила меня с пути, предложив обновления, которые не будут работать с моей машиной. Эта программа знала, какие обновления мне нужны без никаких конфликтов. Она отлично работает,простая в использовании, информативная и интуитивно понятная. Она будет оставаться в моем ПК навсегда. Прекрасная работа!"
          </p>
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/pcmag.png')?>" alt="PC Magazine">
        </div>
        <p>PC Magazine</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></div>
        <p>Myo Thuya</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></div>
        <p>Adam Backlund</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler">
        </div>
        <p>Wayne Bowler</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Обеспечьте Лучшую Производительность ПК и Более Плавный Игровой Опыт</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>ТОЛЬКО: <strong>349 руб</strong> <del>1990 руб</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=ru-db6-ac&ref=<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=ru_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbacjun-ru');">
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
        <h2>ЭКСКЛЮЗИВНОЕ ПРЕДЛОЖЕНИЕ</h2>
        <p><strong>80% СКИДКА </strong>на Предотвращене Системы от Сбоев и Обеспечение Стабильного Игрового Опыта</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>349 руб</strong> <del>1990 руб</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="https://www.iobit.com/buy.php?product=ru-db6-ac&ref=<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=ru_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbacjun-ru');">
              <div class="inner">
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
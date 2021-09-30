<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
$refStr='';
if(in_array($_GET['to'],array('db_ac_iu','cr_a','cr_b'))){
  $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('ascu_aciu','asc_aciu'))){
  $refStr.='-'.$_GET['st'];
}
  include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>65% Cкидка на IObit Uninstaller PRO</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Эксклюзивное предложение только для ценных пользователей IObit. Лучший деинсталлятор для удаления связанных и ненужных программ и плагинов в 1 клик!">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
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
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>IObit Uninstaller 8 PRO</h1>
        <p>Лучший Деинсталлятор для Удаления Связанных и Ненужных Программ и Плагинов в 1 клик</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" />
        <div class="discount fl">
          <h2>65% СКИДКА</h2>
          <p>Эксклюзивно для Ценных Пользователей IObit</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>ТОЛЬКО: <strong>349 руб </strong><del>990 руб</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=ru-iu8-ac&ref=ru_iu-ac<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ru_ac_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuacjun-ru');">
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
    <h2>Что может сделать IObit Uninstaller PRO для Вас?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt="" /></dt>
        <dd>
          <h3>ОБНАРУЖЕНИЕ И ДЕИНСТАЛЛЯЦИЯ СВЯЗАННЫХ ПРОГРАММ</h3>
          <p>Обнаружение рекламного ПО, панелей инструментов и ненужных сторонних программ наряду с бесплатными программами, которые украдут ваши личные данные.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt="" /></dt>
        <dd>
          <h3>БЕЗ РЕКЛАМ ВО ВРЕМЯ СЕРФИНГА</h3>
          <p>Удаление рекламных и вредоносных плагинов для обеспечения безопасного и чистого просмотра.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt="" /></dt>
        <dd>
          <h3>АВТОМАТИЧЕСКАЯ ОЧИСТКА ОСТАТКОВ</h3>
          <p>Автоматическая проверка и очистка остатков удаленных программ, включая те, которые были удалены другими деинсталляторами.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt="" /></dt>
        <dd>
          <h3>ОБНОВЛЕНИЕ ПО</h3>
          <p>1 клик для обновления важных программ на вашем ПК без вмешательства пользователя.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Всемирные Награды</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
        <h3>Отзывы Пользователей</h3></dt>
        <dd>
          <h4>"IObit Uninstaller - отличный инструмент для удаления программ и даже панелей инструментов и плагинов.Я сильно рекомендую его!"</h4>
        </dd>
        <dd>
          "IObit Uninstaller - отличный инструмент для удаления программ и даже панелей инструментов и плагинов. Он мне очень помог, он не только удаляет программы и приложения, но и очищает их связанный реестр, существования которого обычно незнают многие люди, как я. Он имеет приятный и интуитивно понятный интерфейс, не требуя больших навыков информатики. Я сильно рекомендую его!"
        </dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Отзывы СМИ</h3></dt>
        <dd>
          <h4>"Iobit Uninstaller - это, несомненно, лучший деинсталлятор для Windows, который я тестировал. "</h4>
        </dd>
        <dd>
          "Если вам нужно приложение, которое позволяет вам чисто и полностью удалять приложения, запустите IObit Uninstaller. Эта утилита, теперь совместимая с Windows 10, позволяет легко удалять приложения, в том числе оставшиеся файлы поддержки после удаления программы с ПК, и те надоедливые панели инструментов и плагины веб-браузера. Короче говоря, если вы используете ПК с ОС Windows, вы должны скачать IObit Uninstaller." 
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Отзывы СМИ</h3></dt>
        <dd>
          <h4>"IObit Uninstaller обеспечивает то, что она обещает: полное удаление"</h4>
        </dd>
        <dd>
          "IObit Uninstaller — маленькая программа с интуитивно понятным интерфейсом, которую можно скачать почти мгновенно. Это переносимая программа, предназначенная для быстрого удаления одной или нескольких программ. Опция «глубокая проверка» позволяет полностью удалить самые неподатливые куски программ. В общем, IObit Uninstallerобеспечивает то, что она обещает: полное удаление. Использовать эту программу имеет смысл хотя бы из-за высокой скорости работы."
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/fernando-lourenco-gomes.png" alt="Fernando Lourenço Gomes">
        </div>
        <p>Fernando Lourenço Gomes</p>
      </li>
      <li class="active">
        <a href="https://www.pcmag.com/" target="_blank">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt="PC Magazine"></div>
          <p>PC Magazine</p>
        </a>
      </li>
      <li>
        <a href="http://www.makeuseof.com/" target="_blank">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt="MakeUseOf"></div>
          <p>MakeUseOf</p>
        </a>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Обеспечьте Чистый, Легкий ПК и Безопасный Онлайн-серфинг</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>ТОЛЬКО: <strong>349 руб </strong><del>990 руб</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=ru-iu8-ac&ref=ru_iu-ac<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ru_ac_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuacjun-ru');">
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
        <p><strong>65% СКИДКА</strong> на Удаление Ненужных Программ и Раздражающих Всплывающих Окон</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>349 руб </strong><del>990 руб</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="https://www.iobit.com/buy.php?product=ru-iu8-ac&ref=ru_iu-ac<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ru_ac_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuacjun-ru');">
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
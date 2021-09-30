<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
$refStr = 'ru_imf-ac';
if($_GET['to']=='db_ac_imf'){
  $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acimf'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>67% Cкидка на IObit Malware Fighter PRO</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Эксклюзивное предложение только для ценных пользователей IObit. Наслаждайтесь тройной защитой безопасности вашего ПК!">
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
        <h1>IObit Malware Fighter 6 PRO</h1>
        <p>Тройная защита для удаления вредоносных программ и вирусов, блокировки вымогателей</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="">
        <div class="discount fl">
          <h2>67% СКИДКА</h2>
          <p>Exclusive for IObit Valued Users</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>ТОЛЬКО: <strong>399 руб</strong> <del>1200 руб</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=ru-imf7-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ru_ac_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfacjun-ru')">
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
    <h2>Что может сделать IObit Malware Fighter PRO для Вас?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""/></dt>
        <dd>
          <h3>Обнаружение 203,000,000+ Угроз</h3>
          <p>Предотвращает проникновение угроз на Ваш компьютер благодаря антивирусному движку Bitdefender & антивредоносному движку IObit. </p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""/></dt>
        <dd>
          <h3>Никаких Атак Вымогателей</h3>
          <p>Остановите программы-вымогатели от попыток шифрования Ваших важных файлов. </p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""/></dt>
        <dd>
          <h3>Защита Файлов Паролем</h3>
          <p>Важные файлы – Ваша личная информация, например, – могут храниться отдельно от других данных, никто не сможет получить доступ к ней без разрешения. </p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""/></dt>
        <dd>
          <h3>Мощная Защита USB-Диска</h3>
          <p>Борьба с угрозами, скрывающимися в USB-диске, и предотвращение повреждения Вашего ПК. </p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""/></dt>
        <dd>
          <h3>Анти-слежка</h3>
          <p>Автоматическая очистка вредоносных данных отслеживания при закрытии браузера.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""/></dt>
        <dd>
          <h3>Защита в Реальном Времени</h3>
          <p>Движки тройной защиты и многочисленные защитники гарантируют безопасность компьютера в режиме реального времени. </p>
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
      <dl>
        <dt>
        <h3>Отзывы Пользователей</h3></dt>
        <dd>
          <h4>"Я очень доволен вашим продуктом Iobit Malware Fighter."</h4>
        </dd>
        <dd>"Прежде чем я использовал этот продукт, у меня было много проблем с вредоносными вмешательствами, я не мог смотреть целый любимый фильм или концерт. Благодаря вашему продукту теперь каждая операция гладка, безопасна и хорошо защищена. Он проверяет мой ноутбук, не влияя на его производительность.Я также рекомендовал этот продукт двум моим друзьям."</dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Отзывы СМИ</h3></dt>
        <dd>
          <h4>"Программа использует два антивирусных движка, свой собственный и BitDefender, и, кажется, она эффективна против вредоносного ПО, которое не может быть обнаружено другими подобными инструментами."</h4>
        </dd>
        <dd>"Программа использует два антивирусных движка, свой собственный и BitDefender, и, кажется, она эффективна против вредоносного ПО, которое не может быть обнаружено другими подобными инструментами, так что это хорошо, что он может работать вместе с вашей стандартной антивирусной программой . Она может обнаруживать разнообразные шпионские программы, вымогатели, рекламное ПО, троянов, червей, клавиатурных шпионов и ботов."    </dd>
      </dl>
      <dl>
        <dt>
        <h3>Отзывы Пользователей</h3></dt>
        <dd>
          <h4>"Я хотел бы сказать большое спасибо всем сотрудникам IObit за напряженную работу, за обработку лучших программ."</h4>
        </dd>
        <dd>"Я хотел бы сказать большое спасибо всем сотрудникам IObit за напряженную работу, за обработку лучших программ. Это большое обновление, которое вы сделали для ваших пользователей. Это намного быстрее на сканере и просто в использовании. Люди, которым действительно нуженэффективный также и экономический антивирус и антивымогатель, должны только посмотреть на IObit Malware Fighter. Я бы порекомендовал, что они забывают другие и получают лучший IObit Malware Fighter."</dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"/></div>
        <p>Gelu Batir</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"/></div>
        <p>Software.Informer</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"/></div>
        <p>David Cassidy</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Обеспечьте Безопасный ПК и Повышенную Защиту Онлайн-серфинга</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>ТОЛЬКО: <strong>399 руб</strong> <del>1200 руб</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=ru-imf7-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ru_ac_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfacjun-ru')">
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
        <p><strong>67% СКИДКА</strong> на Защиту от Вредоносных Атак и Утечки Конфиденциальности</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>399 руб </strong><del>1200 руб</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="https://www.iobit.com/buy.php?product=ru-imf7-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=ru_ac_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfacjun-ru')">
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
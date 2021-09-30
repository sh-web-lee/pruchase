<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>77% Cкидка на Advanced SystemCare PRO</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Эксклюзивное предложение только для ценных пользователей IObit. Мощная утилита настройки обеспечивает максимальную производительность вашего ПК!">
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
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>Advanced SystemCare 13 PRO</h1>
        <p>Защита ПК и конфиденциальности от вредоносных угроз и отслеживания</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" />
        <div class="discount fl">
          <h2>77% СКИДКА</h2>
          <p>Эксклюзивно для Ценных Пользователей IObit</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>ТОЛЬКО: <strong>349 руб  </strong><del>1499 руб</del></dt>
          <dd>
            <a class="buybtn bigbtn"
               href="https://www.iobit.com/buy.php?product=ru-asc13-ac&ref=ru_asc-ac&aff=<?php echo $_GET['aff']?>&refs=ru_ac_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascacjun-ru');">
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
    <h2>Что может сделать Advanced SystemCare PRO для Вас?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt="" /></dt>
        <dd>
          <h3>ГЛУБОКАЯ ОЧИСТКА</h3>
          <p>Избавьтесь от ненужных файлов реестра во избежание системных ошибок и сбоев.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt="" /></dt>
        <dd>
          <h3>АВТОМАТИЧЕСКИЙ УХОД ЗА ВАШИМ ПК</h3>
          <p>Автоматический уход за ПК по расписанию и очистка RAM для повышения производительности ПК.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt="" /></dt>
        <dd>
          <h3>Быстрый Онлайн Браузинг</h3>
          <p>Оптимизируйте настройки браузера для ускорений загрузок, просмотра видео, онлайн гейминга и т. д до 300%*.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt="" /></dt>
        <dd>
          <h3>Сохраните онлайн анонимность</h3>
          <p>Обнаружьте и заблокируйте скрытые попытки доступа к Вашей личной информации.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt="" /></dt>
        <dd>
          <h3>Быстрый ПК</h3>
          <p>Оптимально настройте системные ресурсы для ускорения ПК до 200%*.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt="" /></dt>
        <dd>
          <h3>Обеспечьте Защиту ПК</h3>
          <p>Предотвратите заражение ПК вредоносными, шпионскими и другими видами опасных ПО в реальном времени.</p>
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
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Отзывы СМИ</span></h2></dt>
          <dd>
            <p class="on">"Advanced SystemCare - это замечательное универсальное средство для сканирования, настройки и оптимизации Вашей системы. Advanced SystemCare создана для устранения любых неполадок Вашего ПК за счет не только удаления мусора, вредоносных программ и недействительных записей в реестре, но и ускорения Вашего компьютера так, чтобы Вы получали удовольствие от работы с ним."</p>
           <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Отзывы Пользователей</span></h2></dt>
          <dd>
            <p>"Мне повелось испробовать много программ за то время, что я обещал себе поддерживать максимальную производительность компьютера. ASC я начал пользоваться несколько лет назад, начал я с бесплатной версии. Убедившись в том, что проблемы с компьютером были полностью устранены, я с уверенностью оплатил полную версию, которая в дальнейшем меня нисколько не подвела. Исходя из личного опыта, Advanced SystemCare Pro – единственное, что я рекомендую. Я также использую IObit Uninstaller, Smart Defrag и Driver Booster, которые ещё больше облегчают мне жизнь!"</p> 
            <cite>Richard Beavers</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Отзывы Пользователей</span></h2></dt>
          <dd>
            <p>"Advanced SystemCare – отличная платформа. Я использую эту программу уже много лет и она отлично справляется. Они постоянно работают над своими продуктами, благодаря чему они всё лучше и лучше с каждым годом. Я пользуюсь многими из их программ, и все они отлично работают."</p>
            <cite>Patsy Clark</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Отзывы Пользователей</span></h2></dt>
          <dd>
            <p>"Я никогда не видел программу по обслуживанию и безопасности ПК, которые была бы лучше Advanced Systems Care, так как с тех пор, как я купил ASC, я не сталкивался с проблемами ассоциирующимися с вирусами, фишингом, черным экраном или же разного рода ‘‘пугалом’’, что бы оно для моего компьютера не значило. Лучшее, за что я платил для своего компьютера. Спасибо ASC за то, что превратил мою работу на компьютере во что-то намного большее!"</p>
            <cite>Danny R. Sheets</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Отзывы Пользователей</span></h2></dt>
          <dd> 
            <p>"Я уже сколько времени использую Advanced SystemCare Pro и эта последняя версия 13 даже лучше чем предыдущая (12). Он может быстро найти и исправить проблемы, причём ещё снабжён многими дополнительными функциями, которые вы можете использовать для гладкой и стабильной работы вашего компьютера. Лучше этого я ничего не могу порекомендовать Вам."</p>
            <cite>Tony Fisher</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Отзывы Пользователей</span></h2></dt>
          <dd>
            <p>"Если Вы пользуетесь ПК, то у Вас просто должен быть New ASC 13. Понятный и интуитивный интерфейс делают работу на нём легкой как для новичка, так и для профессионала. Множество полезных инструментов позволяют компьютеру работать с максимальной производительностью. Молодцы, IObit, за такое прекрасное совмещение стольких инструментов в одном приложении."</p>
            <cite>Daniel Sanders</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Отзывы Пользователей</span></h2></dt>
          <dd>
            <p>"Очень люблю пользоваться Advanced SystemCare 13 Beta. Он такой быстрый! Умеет очищать следы конфиденциальности, ненужные файлы и фрагменты реестра. Мне в особенности нравится уведомление разрешения на получение доступа к конфиденциальной зоне. Когда приложение пытается получить доступ к конфиденциальной зоне в первый раз, открывается окно, в котором нужно либо подтвердить, либо отказать запросу использовать её. Если дать согласие, то больше не увидите то всплывающее окно. С этой программой, я знаю, что мои личные файлы под надёжной защитой."</p>
            <cite>Richard Preston</cite>
          </dd>
        </dl>
      </div>
      <ul>
        <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
        <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></li>
        <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></li>
        <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
        <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
        <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
        <li class="six last" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Наслаждайтесь Чистым, Безопасным и Быстрым ПК с Все-в-одном Оптимизатором ПК</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>ТОЛЬКО: <strong>349 руб </strong><del>1499 руб</del></dt>
          <dd>
            <a class="buybtn bigbtn"
               href="https://www.iobit.com/buy.php?product=ru-asc13-ac&ref=ru_asc-ac&aff=<?php echo $_GET['aff']?>&refs=ru_ac_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascacjun-ru');">
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

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <p class="annotation">Примечание: *.Данные могут различаться в зависимости от системы или компьютера.</p>
      <!-- annotation end -->
      
      <!-- footer start -->
      <div class="footer">© 2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>ЭКСКЛЮЗИВНОЕ ПРЕДЛОЖЕНИЕ</h2>
        <p><strong>77% СКИДКА</strong> на Максимальную Производительность Вашего ПК</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>349 руб </strong><del>1499 руб</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=ru-asc13-ac&ref=ru_asc-ac&aff=<?php echo $_GET['aff']?>&refs=ru_ac_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascacjun-ru');">
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

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
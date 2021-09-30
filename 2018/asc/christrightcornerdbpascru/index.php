<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='frasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>La mejor oportunidad para obtener Advanced SystemCare 12 Pro con 65% de descuento - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://ru.iobit.com/" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>РОЖДЕСТВЕНСКАЯ РАСПРОДАЖА!</h1>
        <p class="best">Отличный шанс сэкономить много – только раз в году!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
            <span class="ghost"><span class="reduce"></span></span>           
          </div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 Pro</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> людей смотрят,  <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>мест осталось сейчас!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Спешите! До конца <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
              </div>
              <p><strong>499<big>руб</big></strong> <span><del>4497руб</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-asc123pc499&ref=ru_asc123pc499purchase&refs=ru_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1811rightcornerdbpasc-ru')">
                 Активировать сейчас
              </a>
              <p class="year">1 год подписки / 3 ПК</p>
            </div>
          </div>
        </div>
      </div>
        <span class="snow list01"></span>
        <span class="snow snow-clarity  list02"></span>
        <span class="snow snow-smail list03"></span>
        <span class="round  list04"></span>
        <span class="round round-smail list05"></span>
        <span class="round round-clarity list06"></span>
        <span class="round round-large list07"></span>
        <span class="snow snow-clarity  list15"></span>
        <span class="snow snow-smail  list16"></span>
        <span class="snow snow-clarity  list17"></span>
        <span class="snow snow-smail  list18"></span>
        <span class="round round-clarity list23"></span>
        <span class="round round-clarity list24"></span>

        <span class="round round-clarity list08"></span>
        <span class="round round-smail list09"></span>
        <span class="round round-large  list10"></span>
        <span class="round list11"></span>
        <span class="snow snow-clarity list12"></span>
        <span class="snow snow-smail list13"></span>
        <span class="snow list14"></span>
        <span class="snow snow-clarity  list19"></span>
        <span class="snow snow-smail  list20"></span>
        <span class="snow snow-clarity  list21"></span>
        <span class="snow snow-smail  list22"></span>
        <span class="round round-clarity list25"></span>
        <span class="round round-clarity list26"></span>
    </div>
    <!-- banner end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <h2>Что Вы Получите от Advanced SystemCare 12 PRO?</h2>
        <p class="over">
          Более 35,000,000 пользователей по всему миру выбирают Advanced SystemCare Pro в качестве своего инструмента для оптимизации ПК, чтобы их старый ПК работал как новый, и новый ПК работал еще быстрее.
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
        <div class="clearfix">
            <dl class="clearfix fl">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Более безопасная конфиденциальность<b class="sign">Новинка</b></h3>
                <p>Удаление следов конфиденциальности, чтобы предотвратить отслеживание, и защитить конфиденциальные данные от любого секретного доступа.</p>
              </dd>
            </dl>
            <dl class="clearfix fr">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>200%* более быстрый ПК <b>Улучшено </b></h3>
                <p>Сокращение системного заикания / отставания и ускорение работы ПК до 200% быстрее.</p>
              </dd>
            </dl>
            <div class="clearfix"></div>
            <dl class="clearfix fr">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Более глубокая очистка<b>Улучшено </b></h3>
                <p>Авто-освобождение ОЗУ для повышения производительности ПК, и исправление проблем с реестром для стабильной системы.</p>
              </dd>
            </dl>
            <dl class="clearfix fl">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>300%* более быстрое соединение к сети<b>Улучшено </b></h3>
                <p>Ускорение загрузки, серфинга, игры, просмотра YouTube до 300% быстрее.</p>
              </dd>
            </dl>
        </div>
      </div>
    </div>
    <!-- feature end -->
    <!-- together start -->
    <div class="together">
      <div class="wrapper">
        <h2>
          Вместе с Driver Booster Pro, Вы насладитесь оптимальным игровым опытом и высокой <span>производительностью ПК!</span>

        </h2>
        <div class="panel clearfix">
          <div class="asc-box fl clearfix on">
            <div class="box fl">
              <h3>ОПТИМАЛЬНЫЙ ИГРОВОЙ ОПЫТ <i></i></h3>
              <dl>
                <dt><strong>Более быстрая игра</strong></dt>
                <dd>
                  Авмтоочистка ОЗУ и закрытие ненужных процессов. 
                  <span>* Advanced SystemCare pro эксклюзивно</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Более плавная игра</strong></dt>
                <dd>
                  Game Ready драйверы и игровые компоненты для улучшения игрового опыта.
                  <span>* Driver Booster Pro эксклюзивно</span>
                </dd>
              </dl>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
          </div>
          <div class="db-box fl clearfix on">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
            <div class="box fl">
              <h3><i></i> ТОП ПРОИЗВОДИТЕЛЬНОСТЬ ПК </h3>
              <dl>
                <dt><strong>Более чистый и быстрый ПК</strong></dt>
                <dd>Авмтоочистка мусорных файлов и оптимизация реестра для ускорения с корости работы.
                  <span>* Advanced SystemCare pro эксклюзивно</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Более стабильный ПК </strong></dt>
                <dd>Обновление отсутствующих/ошибочных/ устаревших/редких драйверов ПК. 
                  <span>* Driver Booster Pro эксклюзивно</span>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- together end -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Активируйте Advanced SystemCare Pro Сейчас - Последний Шанс Сэкономить Много в году!</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> людей смотрят, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> мест осталось сейчас!
            </p>
          </div>
          <p><strong>499<big>руб</big></strong> <span><del>4497руб</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-asc123pc499&ref=ru_asc123pc499purchase&refs=ru_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1811rightcornerdbpasc-ru')">
            Активировать сейчас
          </a>
          <p class="year">1 год подписки / 3 ПК</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Быстрое сравнение FREE и PRO</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">Advanced SystemCare<br>FREE</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>Advanced SystemCare<b>PRO</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema"><i class="all-icons free">√</i></td>
              <td class="itemb">Базовая очистка, исправление и оптимизация системы</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Блокирование несанкционированного доступа к вашим л ичным файлам</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Защита от шпионских и вредоносных программ в реальном времени</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Сокращение и исправление системных сбоев и ошибок</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Ускорение компьютера до 200% быстрее</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Ускорение интернет-соединения до 300% быстрее</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Автообновление важных программ до актуального состояния</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Автоматическое удаление следов конфиденциальности для безопасного просмотра</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Автообновление до последней версии</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"></td>
              <td class="itemb"></td>
              <td class="itemc last"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>НЕ УПУСТИТЕ</h3>
        <h2>Получите эксклюзивную <b>90% СКИДКУ</b> на более чистый, быстрый и безопасный ПК!</h2>
        <div class="price">
          <p><strong>499<big>руб</big></strong> <span><del>4497руб </del></span></p> 
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-asc123pc499&ref=ru_asc123pc499purchase&refs=ru_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1812rc-es')">
            Активировать сейчас
          </a>
          <p id="footdown" class="countdown">Спешите! До конца<b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Всемирные Награды</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
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
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
            <dd>
              <h2>Отзывы СМИ</h2>
              <p>"Advanced SystemCare - это великолепное универсальное средство для проверки, очистки и настройки системы. Программа Advanced SystemCare создана не только для устранения компьютерных проблем путем удаления вредоносных программ, некорректных элементов реестра и ненужных файлов, но и для такой оптимизации работы компьютера, чтобы им было приятно пользоваться."</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/Hal-Barry-Koren.png')?>" alt="Hal Barry Koren"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"Ваша программа значительно улучшилась за эти годы . Сканирование диска может быть выполнено без перезагрузки, по крайней мере, для незначительных ошибок. Speed UP Turbo Boost значительно улучшила загрузку, все программы и браузеры. Все работает хорошо с небольшим использованием процессора или диска. Ваш Driver Booster значительно экономит время без проблем. Я использую ваш Uninstaller многие годы, потому что он действительно полностью удаляет. Ваш Defrager отличный. Моя машина работает как настроенные часы с помощью ваших программ."</p>
              <cite>Hal Barry Koren</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/Michael-D-Masters.png')?>" alt="Michael D. Masters"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"После установки я заметил, что Advanced System Care вдохнула новую жизнь в мой компьютер! Я сразу заметил удивительную разницу. Время запуска было быстрее, общие проблемы, вызвавшие медленную производительность, исчезли! Я был так впечатлен, что решил загрузить ваши другие продукты. Большое вам спасибо за такую замечательную программу. Она лучшая, и я буду рекомендовать ей всегда!"</p>
              <cite>Michael D. Masters</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/Savio-Da-Rocha-Lobo.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>« Ce programme est le meilleur que j’ai jamais essayé. Mon ordinateur est beaucoup plus performant depuis que j’ai téléchargé ASC. Il a nettoyé les fichiers indésirables, les fichiers en double et les dossiers vides. Je l’ai aussi utilisé pour déchiqueter des fichiers. Je vous recommande d’acheter ce programme, pas cher et très efficace pour maximiser les performances de votre PC. Vous allez l’adorer, je vous le promets. »</p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/Stephen-H-Littleton.png')?>" alt="Stephen H. Littleton"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"После установки я заметил, что Advanced System Care вдохнула новую жизнь в мой компьютер! Я сразу заметил удивительную разницу. Время запуска было быстрее, общие проблемы, вызвавшие медленную производительность, исчезли! Я был так впечатлен, что решил загрузить ваши другие продукты. Большое вам спасибо за такую замечательную программу. Она лучшая, и я буду рекомендовать ей всегда!"</p>
              <cite>Stephen H. Littleton</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Попробуйте БЕЗ РИСКОВ - 60-дневная гарантия возврата денег</h4>
              <p>Мы уверены, что активация PRO версии принесет повышенную производительность вашего ПК по доступной цене!</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Возможные способы оплаты</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Примечание:</dt>
            <dd>* Данные могут различаться в зависимости от разных систем или компьютеров.</dd>
            <dd>* Акционные продукты могут быть изменены в любое время без предварительного уведомления по нашему собственному усмотрению.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- backtotop start -->
    <div id="backtotop" class="backtotop">top</div>
    <!-- backtotop end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=ru-asc123pc799&ref=ru_asc123pc799purchase&refs=ru_purchase_asc";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1811rightcornerdbpasc-ru')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
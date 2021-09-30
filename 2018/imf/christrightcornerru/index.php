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
  $cName='ruimfpre'.$date;
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

$viewNum=rand(80,100);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Рождественская распродажа! Скидка до 90% на IObit Malware Fighter PRO c подарками!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
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
        <h1>РОЖДЕСТВЕНСКАЯ РАСПРОДАЖА</h1>
        <p class="best">Отличный шанс сэкономить много – только раз в году!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
          </div>
          <div class="right fr">
            <h2>Всесторонняя Защита ПК от Различных Атак</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> смотрят, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  пакетов осталось сейчас !  
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Спешите! До конца <b>05</b>M:<b>00</b>С:<b class="last">00</b>Mc</p>
              </div>
              <p><strong>599 руб</strong> <del>6160 руб</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-imf63pcpfamc599&ref=ru_imf63pcpfamc599purchase<?php echo $refStr;?>&refs=ru_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcpfamc1811rightcorner-ru');">
                 Активировать сейчас
              </a>
              <p class="year">1 год / 3 ПК</p>
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
        <h2>Наслаждайтесь Всесторонней Защитой ПК от Вредоносных Атак! </h2>
        <p class="over">
         Более 5,500,000 пользователей выбирают IObit Malware Fighter Pro в качестве своего решения против вирусов, вымогателей, шпионского ПО, троянов, рекламного ПО, фишингового ПО и других раздражающих вредоносных программ.
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/imf-screen.png')?>" alt="IObit Malware Fighter PRO"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Защита Диска при Загруске Системы <b class="sign"> Новинка </b></h3>
                <p>
                 Защита ПК от вредоносных атак, особенно атак из вымогателей во время загрузки.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>Нет Атак Вымогателей  <b>Усилено</b></h3>
                <p>Анти-вымогательный Движок активно останавливает любые вымогатели, которые пытаются проникнуть в ваш ПК, например, Petya / GoldenEye.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Всесторонняя Защита в Реальном Времени <b> Усилено</b></h3>
                <p>Двойная защита с помощью передового Bitdefender Антивирусного Движка и IObit Анти-вымогательного Движка с расширенной базой данных.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Защита в Реальном Времени <b> Усилено</b></h3>
                <p>Автоматически блокирует и удаляет более 200 миллионов угроз в реальном времени и очищает вредные данные отслеживания.</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- donation start -->
    <div class="donation clearfix">
      <h2>Не упустите Ваш последний шанс получить супервыгоду в этом году!</h2>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <h3> <strong>0 руб</strong> <del>1600 руб</del></h3>
          <p>Защитите свои файлы от других пользователей вашего ПК.</p>
          <p>Храните важные данные вдали от вредоносных атак.</p>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="AMC"/></dt>
        <dd>
          <h3><strong>0 руб</strong> <del>990 руб</del></h3>
          <p>Универсальная утилита очистки и ускорения для вашего Андроид смартфона.</p>
          <p>Мощная защита конфиденциальности на устройстве.</p>
        </dd>
      </dl>
    </div>
    <!-- donation end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Adquira a versão Pro para uma proteção online completa e inteligente</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/imf-small-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> смотрят, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> пакетов осталось сейчас ! 
            </p>
          </div>
          <p><strong> 599 руб </strong> <del> 6160 руб</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-imf63pcpfamc599&ref=ru_imf63pcpfamc599purchase<?php echo $refStr;?>&refs=ru_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcpfamc1811rightcorner-ru');">
            Активировать сейчас
          </a>
          <p class="year"> 1 год / 3 ПК</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Узнайте, что Вы получите с PRO, если активируете сейчас:</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">IObit Malware Fighter <br>Free</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>IObit Malware Fighter <b>Pro</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">Базовая</td>
              <td class="itemb">Защита от  вредоносных программ и вирусов</td>
              <td class="itemc">Движок Анти-вирус Bitdefender</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Анти-вымогатель</td>
              <td class="itemc">Движок Анти-вымогатель</td>
            </tr>
            <tr>
              <td class="itema">Базовая</td>
              <td class="itemb">Защита в реальном времени</td>
              <td class="itemc">Всесторонняя</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Защита диска при запуске системы</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Защита вашей камеры</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Защита важных папок</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Авто-очистка следов серфинга</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Защита диска USB</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Защита ОЗУ</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">Авто-обновление</td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>НЕ УПУСТИТЕ СВОЙ ШАНС!</h3>
        <h2>Получите эксклюзивную СКИДКУ 90% на всестороннюю защиту для семьи.</h2>
        <div class="price">
          <p><strong>599 руб</strong> <del>6160</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=ru-imf63pcpfamc599&ref=ru_imf63pcpfamc599purchase<?php echo $refStr;?>&refs=ru_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcpfamc1811rightcorner-ru');">
            Активировать сейчас
          </a>
          <p id="footdown" class="countdown">Спешите! До конца <b>05</b>M:<b>00</b>С:<b class="last">00</b>Mc</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></dt>
            <dd>
              <h2>Отзывы СМИ</h2>
              <p>"Программа использует два антивирусных движка, свой собственный и BitDefender, и, кажется, она эффективна против вредоносного ПО, которое не может быть обнаружено другими подобными инструментами, так что это хорошо, что он может работать вместе с вашей стандартной антивирусной программой . Она может обнаруживать разнообразные шпионские программы, вымогатели, рекламное ПО, троянов, червей, клавиатурных шпионов и ботов."</p>
              <cite>Software Informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"Я очень доволен вашим продуктом Iobit Malware Fighter. Прежде чем я использовал этот продукт, у меня было много проблем с вредоносными вмешательствами, я не мог смотреть целый любимый фильм или концерт. Благодаря вашему продукту теперь каждая операция гладка, безопасна и хорошо защищена. Он проверяет мой ноутбук, не влияя на его производительность. Я также рекомендовал этот продукт двум моим друзьям."</p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"Я хотел бы сказать большое спасибо всем сотрудникам IObit за напряженную работу, за обработку лучших программ. Это большое обновление, которое вы сделали для ваших пользователей. Это намного быстрее на сканере и просто в использовании. Люди, которым действительно нужен эффективный также и экономический антивирус и антивымогатель, должны только посмотреть на IObit Malware Fighter. Я бы порекомендовал, что они забывают другие и получают лучший IObit Malware Fighter." </p>
              <cite>David Cassidy</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"Для защиты компьютеров мы когда-то использовали десяток разных программ и еженедельно тратили по несколько часов на обслуживание компьютеров. Теперь, с помощью IObit Malware Fighter Pro и Advanced SystemCare Pro, всё стало куда проще. На обслуживание ПК тратим всего несколько минут пару раз в неделю, а результат намного лучше. Перейдя на ваши программы, мы избавились от кучи проблем."</p>
              <cite>Bob Bassett</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"Несколько лет назад кто-то обратил мое внимание на IObit Malware Fighter. Сначала я был настроен скептически. Однако после установки эта программа стала моим любимым средством защиты от вредоносных программ. Ей очень просто пользоваться. За эти годы она не раз обнаружила угрозы и удалила их. Я также использую другие программы фирмы IObit, такие как Advanced SystemCare, так что защита у меня надежная. Теперь я рекомендую эти программы всем своим друзьям и родственникам."</p>
              <cite>Peter Stoffers</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Всемирные Награды</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl>
            <dt> Гарантия Возврата Денег</dt>
            <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
          </dl>
          <dl>
            <dt>Доступные Cпособы Оплаты</dt>
            <dd><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dd>
          </dl>
          <dl>
            <dt>Сертификат Безопасности</dt>
            <dd><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dd>
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
    var imgSrc = "<?php echo getStaticUrl('images/imf-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=ru-imf63pcpfamc529&ref=ru_imf63pcpfamc529purchase<?php echo $refStr;?>&refs=ru_purchase_imf&tw=-8";
    var _ga = "ga('send', 'event', ''imfbuy', 'buy', 'imfpurchase3pcpfamc1811rightcorner-ru')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
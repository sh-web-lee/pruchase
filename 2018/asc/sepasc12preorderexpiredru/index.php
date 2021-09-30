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
  $cName='ascprepa'.$date;
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

$params=json_decode(base64_decode($_GET['data']));
$reg=empty($params->reg)?1113:$params->reg;
$junk=round((empty($params->junk)?9762:(($params->junk)/1024)),2);
$startUp=empty($params->startup)?19:$params->startup;
$internet=empty($params->internet)?21:$params->internet;
$privacy=empty($params->privacy)?2014:$params->privacy;
$ad=empty($params->ad)?0:$params->ad;

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Оплатите 0 руб, чтобы снова пользоваться новым Advanced SystemCare PRO</title>
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
        <a class="logo" href="https://ru.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Добро пожаловать к глобальной предпродаже за 0 руб</h1>
        <h3>Раш! 500 ограниченных количеств доступно, <span class="soldNum">453</span> продано сейчас</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/></div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <p>
                сейчас:  <del>1499 руб</del>
                <img src="<?php echo getStaticUrl('images/price.png')?>" alt=""/>
              </p>
              <ul>
                <li>
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> смотрят , <b class="reduceGift"><span class="packsNum">**</span></b> мест осталось сейчас!
                </li>
                <li id="bandown" class="countdown">До конца акции: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=ru-asc12preorder&ref=ru_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=ru_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-ru');"
                 data-text="Предзаказ Сейчас">
                <span>Предзаказ Сейчас</span>
              </a>
              <h5>1 год подписки / 3 ПК</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- flow start -->
    <div class="flow wrapper clearfix">
      <p>Если устроит, получите 50% СКИДКА от первоначальной цены через 30 дней после предзаказа</p>
      <h2>0 руб предзаказ сегодня</h2>
      <p>Если не устроит, отмените в течение 30 дней без оплаты денег</p>
    </div>
    <!-- flow end -->

    <!-- intro-part01 start -->
    <div class="intro intro-part01">
      <div class="wrapper">
        <h3>Давайте вспомним: </h3>
        <h2>Как Ваш компьютер работает с Advanced SystemCare 11 PRO?</h2>
        <div class="event">
          <!-- bight -->
          <div class="bight"></div>
          <!-- optimized for faster PC -->
          <dl class="optimized clearfix">
            <dd class="fr">
              <p>
                <strong class="startupNum"><?php echo $startUp;?></strong> элементов запуска и <br>
                <strong class="browserNum"><?php echo $internet;?></strong> настроек браузера были<br>
                оптимизированы для<br>
                более быстрого ПК.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon01.png" alt=""></dt>
          </dl>
          <!-- during online surfing  -->
          <dl class="online clearfix">
            <dd>
              <p>
                <strong class="personalNum"><?php echo $privacy;?></strong> личных следов и <strong class="popupNum"><?php echo $ad;?></strong><br>
                всплывающих окон были <br>
                удалены во время онлайн-серфинга.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon02.png" alt=""></dt>
          </dl>
          <!-- to free up disk  -->
          <dl class="disk">
            <dd>
              <p>
                <strong class="bytesNum"><?php echo $junk;?></strong> MB мусорных файлов и<br>
                <strong class="regNum"><?php echo $reg;?></strong> реестров были удалены, <br>
                чтобы освободить место на диске.
              </P>
              <span></span>
            </dd>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon03.png" alt=""></dt>
          </dl>
          <!-- Better PC Performance -->
          <p class="better">Повышенная<br>производительность ПК</p>
        </div>
      </div>
    </div>
    <!-- intro-part01 end -->

    <!-- intro-part02 start -->
    <div class="intro intro-part02">
      <div class="wrapper clearfix">
        <h3>С этого момента:</h3>
        <h2>1 Исследуйте функции, доступные только в Новом Advanced SystemCare 12</h2>
        <img class="intro-pc fl" src="<?php echo $pResUrl;?>images/intro-pc.jpg" alt="">
        <div class="right-message fr">
          <!-- Privacy Shield -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon04.png" alt=""></dt>
            <dd>
              <h4>Защита Конфиденциальности <span>эксклюзивно</span></h4>
              <p>
                Конфиденциальные данные остаются нераскрытыми для <br>
                ненадежных программ.
              </p>
            </dd>
          </dl>
          <!-- Digital Fingerprint Protection -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon05.png" alt=""></dt>
            <dd>
              <h4>Защита Цифровых Опечатков Пальцев <span>эксклюзивно</span></h4>
              <p>
                Никакие хакеры не могут отслеживать и вторгаться в вашу <br>
                личную информацию.
              </p>
            </dd>
          </dl>
          <!-- Unfinished Downloads File Cleaning -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon06.png" alt=""></dt>
            <dd>
              <h4>Очистка Файлов Незавершенного Скачивания <span class="marginleft0">эксклюзивно</span></h4>
              <p>
                Быстро избавиться от файлов, которые не завершают <br>
                загрузку, чтобы освободить место диска.
              </p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- intro-part02 end -->

    <!-- intro-part03 start -->
    <div class="intro intro-part03">
      <div class="wrapper clearfix">
        <h2>2 Наслаждайтесь важными улучшениями по сравнению с Advanced SystemCare 11 PRO</h2>
        <!-- Cleaner -->
        <dl class="cleaner fl">
          <dt>
            <h4>Чище</h4>
            <img src="<?php echo $pResUrl;?>images/intro-cleaner.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-more30.png" alt="">
            <p>запасного дискового пространства</p>
          </dd>
        </dl>
        <!-- Faster -->
        <dl class="faster fl">
          <dt>
            <h4>Быстрее</h4>
            <img src="<?php echo $pResUrl;?>images/intro-faster.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-faster20.png" alt="">
            <p>запуска ПК</p>
          </dd>
        </dl>
        <!-- Safer -->
        <dl class="safer fl">
          <dt>
            <h4>Безопаснее</h4>
            <img src="<?php echo $pResUrl;?>images/intro-safer.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-more40.png" alt="">
            <p>реклам могут быть удалены</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro-part03 end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>
          Только за <span>,чтобы снова получить PRO и насладиться всеми этими<br>
          захватывающими возможностями!</span>
          <b> 0руб</b>
        </h2>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=ru-asc12preorder&ref=ru_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=ru_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-ru');"
           data-text="Предзаказ Сейчас">
          <span>Предзаказ Сейчас</span>
        </a>
        <p class="price">1 год подписки / 3 ПК</p>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- intro-part04 start -->
    <div class="intro-part04">
      <div class="wrapper">
        <h3>
          Без версии PRO теперь,<br>
          Вы страдаете от следующих проблем?
        </h3>
        <div class="intro-top clearfix">
          <!-- slow computer -->
          <dl class="fl clearfix">
            <dd class="fl">
              <strong>Медленный компьютер</strong> занимает <br>
              слишком много времени для ответа <br>
              и загрузки веб-страниц
            </dd>
            <dt class="fr"><img class="margintop10" src="<?php echo $pResUrl;?>images/intro-icon08.png" alt=""></dt>
          </dl>
          <!-- system freezes or crashes -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon09.png" alt=""></dt>
            <dd class="fl marginleft15">
              Иногда возникают внезапные <br>
              <strong>зависания или сбои системы</strong>
            </dd>
          </dl>
        </div>
        <div class="intro-bottom clearfix">
          <!-- cluttering up -->
          <dl class="fl clearfix">
            <dd class="fl">
              Бесполезные и неважные файлы<br>
              <strong>загромождают</strong> ваш жесткий диск
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon10.png" alt=""></dt>
          </dl>
          <!-- annoying ads -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon11.png" alt=""></dt>
            <dd class="fr">
              <strong>Раздражающие рекламы </strong><br>
              всплывают каждый раз, когда вы<br>
              на интернет-серфинге
            </dd>
          </dl>
        </div>
        <h2>Пришло время обратиться к Advanced SystemCare 12 PRO за <b> 0руб</b></h2>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=ru-asc12preorder&ref=ru_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=ru_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-ru');"
           data-text="Предзаказ сейчас">
          <span>Предзаказ сейчас</span>
        </a>
        <p class="price">1 год подписки / 3 ПК</p>
      </div>
    </div>
    <!-- intro-part04 end -->

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
              <p>"Нет ничего хуже плохо работающего компьютера, на котором нельзя толком ни поработать, ни поиграть. Программа Advanced SystemCare создана не только для устранения компьютерных проблем путем удаления вредоносных программ, некорректных элементов реестра и ненужных файлов, но и для такой оптимизации работы компьютера, чтобы им стало приятно пользоваться."</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"Я, как и многие, начал с бесплатной версии и в конечном итоге купил полную версию. Он хорошо работает, чистит мой компьютер и устраняет ошибки за эти годы, и он еще не подвело меня. Я недавно связался с Advanced SystemCare, и они ответили в течение дня или двух со всем, что мне нужно было знать. На мой взгляд, служба поддержки очень важна в решении остаться с продуктом, и ASC выигрывает как в продукте, так и в поддержке."</p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"Как и большинство людей, я не компьютерный эксперт. Я не знаю, сколько программ я пробовал за эти годы, все утверждают, что они лучшие, но ни один из них не сравним с Advanced SystemCare Pro, который у меня есть сейчас. С тех пор, как я получил эту удивительную программу, мне не приходилось ни разу звонить технологии. Он намного превзошло мои ожидания, и всегда обновляется, и интерфейс пользователей очень крутой! Огромное спасибо вам за то, что вы значительно облегчили мне жизнь."</p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"Эта программа - самая лучшая, что я когда-либо пробовал. Мой компьютер работает намного лучше и быстрее, когда я загрузил ASC10. Он очистил ненужные и повторяющиеся файлы, пустые папки, и я использовал его для уничтожения файлов. Он очистил и дефрагментировал реестр и все файлы на этом ПК. Я настоятельно рекомендую вам приобрести эту программу. Это не дорого, и то, что он может сделать для вашего компьютера, будет совершенно потрясающим. Вы будет любить его, я обещаю."</p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>Отзывы Пользователей</h2>
              <p>"Как специалист по обслуживанию компьютеров, я обнаружил, что при загрузке и сканирования с помощью ASC free могут быть устранены наиболее распространенные проблемы. Когда я закончил ремонт, я обычно предлагаю клиенту приобрести пакет Pro. Кому нужна технология, когда у них работает Advanced System Care Pro в 24/7? Это лучший продукт, который стоит купить домашним пользователям. Спасибо, что облегчили мне работу."</p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Нас Рекомендуют и Хвалят Эти СМИ</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl>
            <dt>Возможные Способы Оплаты  </dt>
            <dd><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dd>
          </dl>
          <dl>
            <dt>Гарантия Возврата Денег</dt>
            <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
          </dl>
          <dl class="service">
            <dt>Надежная Служба Поддержки</dt>
            <dd>
              <p>Бесплатная Техническая Поддержка 24/7</p>
              <p>Онлайн-чат</p>
            </dd>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dd>* По окончании 30-дневного бесплатного пробного периода, с Вашей кредитной карты или счета PayPal будет автоматически списываться сумма 699 руб. Эта скидка 50% от первоначальной цены 1499 руб является бонусом только для предзаказов!</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt=""/>
        <div class="price fl">
          <ul>
            <li>
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> смотрят,  <b class="reduceGift"><span class="packsNum">**</span></b> мест осталось сейчас!
            </li>
            <li id="floatdown" class="countdown">До конца акции: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
        <a class="buybtn fr"
           href="https://www.iobit.com/buy.php?product=ru-asc12preorder&ref=ru_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=ru_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-ru');"
           data-text="0 руб Предзаказ Сейчас">
          <span>0 руб Предзаказ Сейчас</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->
  </div>

  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired499-ru')";
    var _url = "https://www.iobit.com/buy.php?product=ru-asc12preorder499&ref=ru_asc12preorderexpired499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=ru_purchase_asc";
  </script>

</body>
</html>
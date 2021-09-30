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
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Оплатите 0 руб, чтобы предзаказать новый Advanced SystemCare PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,500'>
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
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
        <h1>Глобальная Предпродажа Открыта</h1>
        <h3>Раш! 500 ограниченных количеств доступно,  <span class="soldNum">453</span> продано сейчас</h3>
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
                 href="https://www.iobit.com/buy.php?product=ru-asc12preorder&ref=ru_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=ru_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialru');"
                 data-text="Предзаказать Сейчас">
                <span>Предзаказать Сейчас</span>
              </a>
              <h5>1 Год / 3 ПК</h5>
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

    <!-- intro start -->
    <div class="intro wrapper">
      <h2>Почему Предзаказать <b>Advanced SystemCare 12 PRO</b></h2>
      <div class="top clearfix">
        <div class="fl">
          <h3>Испытайте новые функции раньше других</h3>
          <img src="<?php echo getStaticUrl('images/computer_01.png')?>" alt="Advanced SystemCare 12 PRO"/>
        </div>
        <div class="fr">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_01.png')?>" alt="Advanced SystemCare 12 PRO"/></dt>
            <dd>
              <h4>Защита Конфиденциальности</h4>
              <h5>Блокируйте секретный доступ к вашим файлам и фото</h5>
              <p>
                Сообщает вам, когда появится секретный доступ к вашим личным файлам и фотографиям, так что вы сможете заблокировать его.
              </p>
              <span>Эксклюзивная функция PRO</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_02.png')?>" alt=""/></dt>
            <dd>
              <h4>Защита Цифровых Опечатков Пальцев</h4>
              <h5>Никто не может знать, что вы делаете в Интернете</h5>
              <p>
                Предотвращает трекеров от маскировки ваших цифровых фингерпринтах для того чтобы отслеживать, что вы читаете, просматриваете, и покупаете.
              </p>
              <span>Эксклюзивная функция PRO</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_03.png')?>" alt=""/></dt>
            <dd>
              <h4>Анти-Майнинг Криптовалюты</h4>
              <h5>Остановите внезапные сбои, перегрев и выключение компьютера</h5>
              <p>
                Остановит вредоносные веб-сайты, от использования вашего компьютера для добычи криптоконверсий, что может привести к сбою браузера, перегреву компьютера и внезапному закрытию системы.
              </p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="bot clearfix">
        <div class="fl">
          <h3>Наслаждайтесь этими улучшениями как можно скорее</h3>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_04.png')?>" alt=""/></dt>
            <dd>
              <h4>Очистка и Оптимизация</h4>
              <h5>Ускорьте медленный компьютер <br>до <b>200%</b> быстрее</h5>
              <p>
                Очищает все ненужные файлы и оптимизируйте CPU и RAM, чтобы запуск и работа системы работали в 2 раза быстрее.
              </p>
              <span>Эксклюзивная функция PRO</span>
            </dd>
          </dl>
          <dl class="last">
            <dt><img src="<?php echo getStaticUrl('images/intro_05.png')?>" alt=""/></dt>
            <dd>
              <h4>Интернет Ускорение</h4>
              <h5>Ускорьте подключение к Интернету <br>на <b>300%</b> быстрее</h5>
              <p>
                Оптимизирует настройки браузера для в 3 раза ускоренной загрузки, интернет-серфинга, онлайн игр и просмотра YouTube.
              </p>
              <span>Эксклюзивная функция PRO</span>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <img src="<?php echo getStaticUrl('images/computer_02.png')?>" alt=""/>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Устраните ваши разочарующие проблемы с ПК с помощью <b>1</b>-клика</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema"><span class="cry">Проблемы</span></th>
              <th class="itemb"></th>
              <th class="itemc"><span class="smile">Решение</span></th>
            </tr>
          </thead>
          <tbody>
            <tr class="first">
              <td class="itema">
                <p>Получите сообщение ”Заканчивается место на диске [drive]”</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Автоматическое сканирование и удаление мусорных файлов для освобождения дискового пространства</p>
                <b><i class="all-icons">■</i> Эксклюзивная функция PRO</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Система загружается медленно и работает медленно</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Автоматическое освобождение памяти для ускорения ПК до 200% быстрее, когда ПК становится медленным</p>
                <b><i class="all-icons">■</i> Эксклюзивная функция PRO</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Медленная загрузка в Интернете, веб-серфинг, онлайн-игры и просмотр на YouTube</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Оптимизация настроек браузера для ускорения интернет-соединения до 300% быстрее</p>
                <b><i class="all-icons">■</i> Эксклюзивная функция PRO</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Внезапные сбои системы и замерзание при интернет-серфинге</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Очистка и ремонт реестров для повышения стабильности и безопасности системы</p>
                <b><i class="all-icons">■</i> Эксклюзивная функция PRO</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Рекламы, которые вы просматривали в интернете следуют за вами вокруг</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Автоматическая блокировка реклам и зачистка онлайн-следов, чтобы вас не отслеживали хакеры</p>
                <b><i class="all-icons">■</i> Эксклюзивная функция PRO</b>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- ad-points start -->
    <div class="ad-points wrapper">
      <h2>Что Мы Делаем для Наших Пользователей</h2>
      <ul class="clearfix">
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_01.png')?>" alt=""/></div>
          <p class="light">Решено</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num01.png')?>" alt=""/></div>
          <p>Проблем с ПК в месяц</p>
        </li>
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_02.png')?>" alt=""/></div>
          <p class="light">Экономлено</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num02.png')?>" alt=""/></div>
          <p>часов в месяц</p>
        </li>
        <li class="last">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_03.png')?>" alt=""/></div>
          <p class="light">Экономлено</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num03.png')?>" alt=""/></div>
          <p>млрд. в год</p>
        </li>
      </ul>
    </div>
    <!-- ad-points end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Предзаказ за 0 руб сейчас на ваш более быстрый, чистый и безопасный ПК</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=ru-asc12preorder&ref=ru_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=ru_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialru');"
           data-text="Предзаказать Сейчас">
          <span>Предзаказать Сейчас</span>
        </a>
        <ul class="price">
          <li><span class="surplusGift viewNum"><?php echo $viewNum;?></span> смотрят, <b class="reduceGift"><span class="packsNum">**</span></b> мест осталось сейчас!</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->

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
            <dd>* По окончании 30-дневного бесплатного пробного периода, с Вашей кредитной карты или счета PayPal будет автоматически списываться сумма 699 руб. Эта скидка 50% от </dd>
            <dd>первоначальной цены 1499 руб является бонусом только для предзаказов!</dd>
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
           href="https://www.iobit.com/buy.php?product=ru-asc12preorder&ref=ru_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=ru_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialru');"
           data-text="0 руб Предзаказать Сейчас">
          <span>0 руб Предзаказать Сейчас</span>
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
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficial499ru');";
    var _url = "https://www.iobit.com/buy.php?product=ru-asc12preorder499&ref=ru_asc12preorderofficial499<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=ru_purchase_asc";
  </script>

</body>
</html>
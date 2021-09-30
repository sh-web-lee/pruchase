<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../';
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
  $packsNum = ceil(microtime_float()*2000/20000);
  $packsCount=100;
  $packsNum = $packsCount-($packsNum%$packsCount);
  if ($_GET['action'] == 'getPacks'){
      echo $packsNum;
      exit;
  }
if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12')
)){
  $refstr='-'.$_GET['st'];
}else{
  $refstr='';
}

if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refstr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Сэкономьте 85% на Advanced SystemCare PRO c Бесплатным Подарком!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
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
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://ru.iobit.com/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title">
        <h1>ОГРАНИЧЕННОЕ ПРЕДЛОЖЕНИЕ</h1>
        <h2>Купите сейчас и получите <b>85%</b> скидку на ASC PRO c бесплатным подарком!</h2>
      </div>
      <div class="box one-box">
        <img src="<?php echo getStaticUrl('images/50-sold.png')?>" alt="" class="sold">
        <img src="<?php echo getStaticUrl('images/asc-one-pc.png')?>" alt="">
        <dl>
          <dt><strong><b>769</b>руб</strong> <del>1499 руб</del> </dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=ru-asc111pc769&ref=ru_asc111pc769purchase&refs=ru_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pc1808-ru')" class="buybtn"><i></i> Купить Сейчас</a>
          </dd>
        </dl>
      </div>
      <div class="box three-gift">
        <img src="<?php echo getStaticUrl('images/85-sold.png')?>" alt="" class="sold">
        <ul>
          <li><strong>01</strong>Часов : </li>
          <li><strong>01</strong>Мин : </li>
          <li><strong>01</strong>Сек : </li>
          <li><strong>01</strong>Мс</li>
        </ul>
        <img src="<?php echo getStaticUrl('images/asc-three-gift.png')?>" alt="">
        
        <dl>
          <dt><strong><b>799</b>руб</strong> <del>5487 руб</del> </dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=ru-asc113pcsd799&ref=ru_asc113pcsd799purchase&refs=ru_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsd1808-ru')" class="buybtn"><i></i> Купить Сейчас</a>
          </dd>
          <dd class="last"><i class="all-icons"></i> <strong>3,149,917</strong> людей активировали</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- intro start -->
  <div class="intro wrapper clearfix">
    <h2>ОПТИМИЗИРУЙТЕ ПРОИЗВОДИТЕЛЬНОСТЬ ВАШЕГО ПК С ПОМОЩЬЮ НОВОГО ASC 11!</h2>
    <img class="screen" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt="" /></dt>
      <dd>Повышение быстродействия <br>ПК!*</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt="" /></dt>
      <dd>Проверка и исправление <br>различных проблем с ПК!</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt="" /></dt>
      <dd>Увеличение скорости <br>интернета до 300%!*</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt="" /></dt>
      <dd>Обеспечение более <br>безопасного онлайн-опыта!</dd>
    </dl>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper clearfix">
      <h2>БЕСПЛАТНЫЙ ПОДАРОЧНЫЙ НАБОР ПО ОГРАНИЧЕННОМУ ПРЕДЛОЖЕНИЮ</h2>
      <h3>доступны только <strong class="packsNum"><?php echo $packsNum ?></strong> пакетов!</h3>
      <div class="gift">
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""> 
        <h4>Advanced SystemCare PRO <strong>799</strong>руб <del>4497 руб</del></h4>
        <p>Лицензия на 2 дополнительных ПК в подарок!<br> Сильно раскройте полный потенциал вашего <br>медленного ПК.</p>
      </div>
      <div class="gift right">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""> 
        <h4>Smart Defrag 6 PRO <strong>0</strong>руб <del>990 руб</del></h4>
        <p>Надежный и интеллектуальный <br>дефрагментатор с 7,000,000+ <br>пользователями</p>
      </div>
      <h4>Advanced SystemCare PRO с подарком SD</h4>
      <ul>
        <li><strong>01</strong>Часов : </li>
        <li><strong>01</strong>Мин : </li>
        <li><strong>01</strong>Сек : </li>
        <li><strong>01</strong>Мс <sup>*</sup></li>
      </ul>
      <a href="https://www.iobit.com/buy.php?product=ru-asc113pcsd799&ref=ru_asc113pcsd799purchase&refs=ru_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsd1808-ru')" class="buybtn"><i></i> Купить Сейчас</a>
    </div>
  </div>
  <!-- donation end -->


  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Нас Рекомендуют и Хвалят Эти СМИ</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <dl class="user clearfix">
        <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="" /></dt>
        <dd>
          <span>Отзывы СМИ</span>
          <h2>"Программа Advanced SystemCare создана для решения всех проблем, что беспокоят ваш компьютер."</h2>
          <p>
            "Нет ничего хуже плохо работающего компьютера, на котором нельзя толком ни поработать, ни поиграть. Программа 
            Advanced SystemCare создана не только для устранения компьютерных проблем путем удаления вредоносных программ, 
            некорректных элементов реестра и ненужных файлов, но и для такой оптимизации работы компьютера, чтобы им стало 
            приятно пользоваться."     
          </p>
        </dd>
      </dl>
      <div class="usereview" id="user">
        <div class="content">
          <h2>Отзывы Пользователей</h2>
          <dl>
            <dt><h4>"Он намного превзошло мои ожидания, и всегда обновляется, и интерфейс пользователей очень крутой!Огромное спасибо вам за то, что вы значительно облегчили мне жизнь."</h4></dt>
            <dd>
              "Как и большинство людей, я не компьютерный эксперт. Я не знаю, сколько программ я пробовал заэти годы, все утверждают, что они лучшие, но ни один из них не сравним сAdvancedSystemCarePro, который у меня есть сейчас. С тех пор, как я получил эту удивительную программу, мне не приходилось ни разу звонить технологии. Оннамного превзошло мои ожидания, и всегда обновляется, и интерфейс пользователей очень крутой! Огромное спасибовам за то, что вы значительно облегчили мне жизнь."
            </dd>
          </dl>
          <dl class="active">
            <dt>
              <h4>"Это не дорого, и то, что он может сделать для вашего компьютера, будет совершенно потрясающим. Вы будет любить его, я обещаю."</h4>
            </dt>
            <dd>
              "Эта программа - самая лучшая, что я когда-либо пробовал. Мой компьютер работает намного лучше и быстрее, когда я загрузил ASC10. Он очистил ненужные и повторяющиеся файлы, пустые папки, и я использовал его для уничтожения файлов. Он очистил и дефрагментировал реестр и все файлы на этом ПК.Я настоятельно рекомендую вам приобрести эту программу.Это не дорого, и то, что он может сделать для вашего компьютера, будет совершенно потрясающим.Вы будет любить его, я обещаю."
            </dd>
          </dl>
          <dl>
            <dt><h4>"Мой первый выбор все по-прежнему Advanced SystemCare Pro"</h4></dt>
            <dd>
              "Как специалист по обслуживанию компьютеров, я обнаружил, что при загрузке и сканирования с помощью ASCfree могут быть устранены наиболее распространенные проблемы.Когда я закончил ремонт, я обычно предлагаю клиенту приобрести пакет Pro.Кому нужна технология, когда у них работает Advanced System Care Pro в 24/7?Это лучший продукт, который стоит купить домашним пользователям.Спасибо, что облегчили мне работу."
            </dd>
          </dl>
          <dl>
            <dt><h4>"ASC выигрывает как в продукте, так и в поддержке."</h4></dt>
            <dd>
              "Я, как и многие, начал с бесплатной версии и в конечном итоге купил полную версию.Он хорошо работает, чиститмой компьютер и устраняет ошибкиза эти годы, и он еще не подвело меня.Я недавно связался с Advanced SystemCare, и они ответили в течение дня или двух со всем, что мне нужно было знать.На мой взгляд, служба поддержкиочень важна в решении остаться с продуктом, и ASC выигрывает как в продукте, так и в поддержке."
            </dd>
          </dl>
        </div>
        <ul class="users clearfix">
          <li>
            <img src="<?php echo getStaticUrl('images/hank-ewert.jpg')?>" alt="" />
            <p>Hank Ewert</p>
          </li>
          <li  class="active">
            <img src="<?php echo getStaticUrl('images/loretta-harnarine.jpg')?>" alt="" />
            <p>Loretta <span>Harnarine</span></p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/charles-r-widick.jpg')?>" alt="" />
            <p>Charles R. Widick</p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/bruce-ramsay.jpg')?>" alt="" />
            <p>Bruce Ramsay</p>
          </li>
        </ul>  
      </div>
    </div>
  </div>
  <!-- review end -->
  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Какие преимущества Вы получите с ASC PRO?</th>
          <th class="space"></th>
          <th class="itemb"><span>Advanced SystemCare <br>FREE</span></th>
          <th class="space"></th>
          <th class="itema">
            Advanced SystemCare <br>PRO
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Базовая очистка и оптимизация ПК</td>
          <td class="space"></td>
          <td class="itemb gray"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Мониторинг состояния системы в реальном времени <i>УЛУЧШЕНО</i></td>
          <td class="space"></td>
          <td class="itemb gray"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Базовая защита ПК с помощью Удаления Шпионского ПО <i>УЛУЧШЕНО</i></td>
          <td class="space"></td>
          <td class="itemb gray"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">
            <span>Автоматический захват злоумышленников с помощью Идентификации Лица <i>УЛУЧШЕНО</i></span>
          </td>
          <td class="space"></td>
          <td class="itemb gray"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">
            <span>Автоматическая очистка оперативной памяти для остановки неиспользуемых программ и процессов <i>УЛУЧШЕНО</i></span>
          </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Автоматический уход за ПК по расписанию</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Премиумная очистка и оптимизация ПК <i>УЛУЧШЕНО</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">До 200% быстрее запуск ПК</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue"><span>До 300% быстрее скорость доступа в Интернет с помощью Интернет Ускорения</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Глубокая очистка реестра для защиты системы от сбоев <i>УЛУЧШЕНО</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">
            <span>Полная защита ПК для обнаружения и удаления самых глубоких инфекций <i>УЛУЧШЕНО</i></span>
          </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">
            <span>Дефрагментация жесткого диска для оптимизации производительности ПК ти ПК Идентификации Лица <i>УЛУЧШЕНО</i></span>
          </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
          <td class="virtue"><span>Премиумная защита серфинга с автоматической очисткой данных отслеживания</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
          <td class="virtue"><span>Проактивное обнаружение и закрытие дыр в безопасности в реальном времени</span></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons close">●</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
  <div class="bottom-buy">
    <div class="wrapper">
      <h2>Наслаждайтесь Быстрой работой  ПК со Скидочной Ценой!</h2>
      <span class="img-box"></span>
      <ul>
        <li data-url="https://www.iobit.com/buy.php?product=ru-asc111pc769&ref=ru_asc111pc769purchase&refs=ru_purchase_asc" data-price="769" data-original="1499 руб" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pc1808-ru')"><strong>-50%</strong> <span> 1 Год / 1 ПК   </span></li>
        <li class="three-box active" data-url="https://www.iobit.com/buy.php?product=ru-asc113pcsd799&ref=ru_asc113pcsd799purchase&refs=ru_purchase_asc" data-price="799" data-original="5487 руб" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsd1808-ru')"><strong>-85%</strong> <span>1 Год / 3 ПК + подарок SD  </span></li>
      </ul>
      <dl>
        <dt> <strong class="price">799</strong>руб <del class="original">5487 руб</del></dt>
        <dd>
          <a href="https://www.iobit.com/buy.php?product=ru-asc113pcsd799&ref=ru_asc113pcsd799purchase&refs=ru_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsd1808-ru')" class="buybtn"><i></i> Купить Сейчас</a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- server start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt>Возможные Способы Оплаты  </dt>
      <dd><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></dd>
    </dl>
    <dl>
      <dt>Гарантия Возврата Денег</dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
    </dl> 
    <dl class="service">
      <dt>Надежная Служба Поддержки</dt>
      <dd>
        <p>Бесплатная Техническая Поддержка 24/7</p>
        <p>Онлайн-чат</p>
      </dd>
    </dl>
  </div>
  <!-- server end -->

  <!-- annotation start -->
  <dl class="annotation wrapper">
    <dt>Примечание:</dt>
    <dd>* Данные могут различаться в зависимости от разных систем или компьютеров.</dd>
    <dd>*. Рекламные программы могут быть изменены в любое время без предварительного уведомления по нашему собственному усмотрению.</dd>
  </dl>
  <!-- annotation end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</div>
  <!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
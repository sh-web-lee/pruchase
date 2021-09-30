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
  $cName='ruasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=3;
    }
  }else{
    $packsNum=79;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
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
<title>Супер распродажа! Купи 1 и получи 2 в подарок на Advanced SystemCare PRO!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<?php if(!empty($_SERVER['QUERY_STRING'])):?>
  <link rel="canonical" href="https://ru.iobit.com/purchase/asc/" />
<?php endif;?>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
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
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h4>ЗАКРЫТАЯ РАСПРОДАЖА</h4>
      <h1>ТВОЙ 1=<b>3</b> ШАНС</h1>
      <div id="bantime" class="countdown">
        <i class="all-icons"></i> <b>12</b> Часов: <b>30</b> Мин: <b>56</b> Сек: <b>321</b> Мс*
      </div>
      <div class="panelbox packbox"><span><b class="reducebox"><b class="giftnum">50</b></b> пакетов</span> осталось сегодня!</div>
      <div class="panelbox panel">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
        <span>+</span>
        <img class="right" src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>
      </div>
      <div class="price">
        <p><del>4497</del> <strong>499 руб</strong></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=ru-asc123pc499&ref=ru_asc123pc499purchase<?php echo $refStr;?>&refs=ru_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1809-ru')">
          <i class="all-icons"></i>
          Купить Сейчас
        </a>
        <p class="people"><i class="all-icons"></i> <b>3,149,917</b> людей уже купили</p>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payments start -->
  <div class="payments">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  </div>
  <!-- payments end -->

  <div class="wrapper">
    <!-- feature start -->
    <div class="feature clearfix">
      <h2>Если Вы Ищете Эффективное Решение для Того, Чтобы...</h2>
      <div class="clearfix">
        <div class="showcase">
          <div class="inner">
            <ul class="screenshot">
              <li>              
                <img src="<?php echo $pResUrl; ?>images/screenshot-01.png" alt="">
              </li>
              <li>              
                <img src="<?php echo $pResUrl; ?>images/screenshot-02.png" alt="">
              </li>
              <li>              
                <img src="<?php echo $pResUrl; ?>images/screenshot-03.png" alt="">
              </li>
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-04.png" alt="">
              </li>
            </ul>         
          </div>    
        </div>
        <div class="detail-list">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>Очистить мусор и реестр для повышенного быстродействия ПК и для защиты от сбоев системы!*</dd>
          </dl>
          <dl class="active two">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>Защита ваших конфиденциальных данных, таких как контакты, данные электронной почты, Dropbox, OneDrive и т. д. от любого секретного доступа.</dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>Увеличить запуск ПК до 200%* и скорость соединения Интернета до 300%!*</dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>Автоочистка данных просмотров и защита цифровых отпечатков от вредоносных отслеживаний.</dd>
          </dl>
        </div>
      </div>
      <a class="textlink" href="Javascript:void(0);">Узнайте больше возможностей ASC Pro>></a>
    </div>
    <!-- feature end -->

    <!-- donation start -->
    <div class="donation">
      <h4><b class="giftnum">50</b> пакетов осталось сегодня!</h4>
      <h2>То Активируйте Advanced SystemCare Pro с Супервыгодой!</h2>
      <p>Идеальная утилита принесет оптимальную производительнось ПК.</p>
      <ul class="clearfix">
        <li>
          <img src="<?php echo getStaticUrl('images/ascm-box.png')?>" alt=""/>
          <div class="txt">
            <h3>Advanced SystemCare PRO</h3>
            <strong>0 руб</strong> <del>1499</del>
          </div>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/ascm-box.png')?>" alt=""/>
          <div class="txt">
            <h3>Advanced SystemCare PRO</h3>
            <strong>0 руб</strong> <del>1499</del>
          </div>
        </li>
      </ul>
      <div class="price">
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=ru-asc123pc499&ref=ru_asc123pc499purchase<?php echo $refStr;?>&refs=ru_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1809-ru')">
          Получите Ваш Подарок за 0 руб
        </a>
        <p>Стоимостью <b>2998</b> руб</p>
      </div>
    </div>
    <!-- donation end -->

    <!-- awards start -->
    <div class="awards">
      <h2>Нас Рекомендуют и Хвалят Эти СМИ</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- review -->
    <div class="review">
      <div class="container">
        <div id="dg-container" class="dg-container">
          <div class="nav">
            <span class="dg-prev"></span>
            <span class="dg-next"></span>
          </div>
          <div class="content dg-wrapper">
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""/></dt>
              <dd>
                <h2>Отзывы СМИ</h2>
                <p>"Нет ничего хуже плохо работающего компьютера, на котором нельзя толком ни поработать, ни поиграть. Программа Advanced SystemCare создана не только для устранения компьютерных проблем путем удаления вредоносных программ, некорректных элементов реестра и ненужных файлов, но и для такой оптимизации работы компьютера, чтобы им стало приятно пользоваться."</p>
                <cite>Cnet</cite></dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt=""/></dt>
              <dd>
                <h2>Отзывы Пользователей</h2>
                <p>"Я, как и многие, начал с бесплатной версии и в конечном итоге купил полную версию. Он хорошо работает, чистит мой компьютер и устраняет ошибки за эти годы, и он еще не подвело меня. Я недавно связался с Advanced SystemCare, и они ответили в течение дня или двух со всем, что мне нужно было знать. На мой взгляд, служба поддержки очень важна в решении остаться с продуктом, и ASC выигрывает как в продукте, так и в поддержке."</p>
                <cite>Bruce Ramsay</cite></dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank-Ewert"/></dt>
              <dd>
                <h2>Отзывы Пользователей</h2>
                <p>"Как и большинство людей, я не компьютерный эксперт. Я не знаю, сколько программ я пробовал за эти годы, все утверждают, что они лучшие, но ни один из них не сравним с Advanced SystemCare Pro, который у меня есть сейчас. С тех пор, как я получил эту удивительную программу, мне не приходилось ни разу звонить технологии. Он намного превзошло мои ожидания, и всегда обновляется, и интерфейс пользователей очень крутой! Огромное спасибо вам за то, что вы значительно облегчили мне жизнь."</p>
                <cite>Hank Ewert</cite></dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles-R-Widick"/></dt>
              <dd>
                <h2>Отзывы Пользователей</h2>
                <p>"Как специалист по обслуживанию компьютеров, я обнаружил, что при загрузке и сканирования с помощью ASC free могут быть устранены наиболее распространенные проблемы. Когда я закончил ремонт, я обычно предлагаю клиенту приобрести пакет Pro. Кому нужна технология, когда у них работает Advanced System Care Pro в 24/7? Это лучший продукт, который стоит купить домашним пользователям. Спасибо, что облегчили мне работу."</p>
                <cite>Charles R. Widick</cite></dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta-Harnarine"/></dt>
              <dd>
                <h2>Отзывы Пользователей</h2>
                <p>"Эта программа - самая лучшая, что я когда-либо пробовал. Мой компьютер работает намного лучше и быстрее, когда я загрузил ASC10. Он очистил ненужные и повторяющиеся файлы, пустые папки, и я использовал его для уничтожения файлов. Он очистил и дефрагментировал реестр и все файлы на этом ПК. Я настоятельно рекомендую вам приобрести эту программу. Это не дорого, и то, что он может сделать для вашего компьютера, будет совершенно потрясающим. Вы будет любить его, я обещаю."</p>
                <cite>Loretta Harnarine</cite></dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Почему 5+ млн пользователей выбирают ASC pro?</th>
            <th class="itemb">
              <div class="box">
                Advanced SystemCare <b>FREE</b> 
                <img src="<?php echo getStaticUrl('images/cry.png')?>" alt=""/></div>
            </th>
            <th class="space"></th>
            <th class="itema">
              <div class="box">
                Advanced SystemCare <b>PRO</b>
                <img src="<?php echo getStaticUrl('images/smile.png')?>" alt=""/>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Базовая очистка и оптимизация ПК</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Мониторинг состояния системы в реальном времени <i>УЛУЧШЕНО</i></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Базовая защита ПК с помощью Удаления Шпионского ПО <i>УЛУЧШЕНО</i></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">
              <span class="eho">Автоматический захват злоумышленников с помощью Идентификации Лица </span><i>УЛУЧШЕНО</i>
            </td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Премиумная очистка и оптимизация ПК <i>УЛУЧШЕНО</i></td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Глубокая очистка реестра для защиты системы от сбоев <i>УЛУЧШЕНО</i></td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_17.png')?>" alt="" /></td>
            <td class="virtue">Маскировка цифрового отпечатка для защиты частных <br>поведений в Интернете <i class="sign">НОВИНКА</i></td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_18.png')?>" alt="" /></td>
            <td class="virtue">Хранение ваших личных данных вдали от ненадежных программ <i class="sign">НОВИНКА</i></td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">
              <span class="eho">Дефрагментация жесткого диска для оптимизации производительности ПК</span> <i>УЛУЧШЕНО</i>
            </td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">
              <span class="eho">Автоматическая очистка оперативной памяти для остановки неиспользуемых программ и процессов</span> <i>УЛУЧШЕНО</i>
            </td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Автоматический уход за ПК по расписанию</td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">До 200% быстрее запуск ПК</td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">До 300% быстрее скорость доступа в Интернет с помощью <br>Интернет Ускорения</td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">
              <span class="eho">Полная защита ПК для обнаружения и удаления самых глубоких инфекций </span> <i>УЛУЧШЕНО</i>
            </td>
           <td class="itemb"><i class="all-icons line">√</i></td>
           <td class="space"></td>
           <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
            <td class="virtue">Премиумная защита серфинга с автоматической очисткой <br>данных отслеживания</td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
            <td class="virtue">Проактивное обнаружение и закрытие дыр в безопасности в <br>реальном времени</td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt="" /></td>
            <td class="virtue">Автоматическое обновление до последней версии</td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_16.png')?>" alt="" /></td>
            <td class="virtue">Бесплатная техническая поддержка 24/7 по запросу </td>
            <td class="itemb"><i class="all-icons line">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <h2>Ловите шанс получить 2 дополнительных ASC Pro бесплатно!</h2>
      <div id="footime" class="countdown">
        <i class="all-icons"></i> <b>12</b> Часов: <b>30</b> Мин: <b>56</b> Сек: <b>321</b> Мс*
      </div>
      <div class="clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
        <div class="price fl">
          <p><strong>499 руб</strong> <del>4497</del></p>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=ru-asc123pc499&ref=ru_asc123pc499purchase<?php echo $refStr;?>&refs=ru_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1809-ru')">
            Купи и сэкономь 3998 р.
          </a>
          <p class="people"><i class="all-icons"></i> <b>3,149,917</b> людей уже купили</p>
        </div>
      </div>
    </div>
    <!-- footbuy start -->

    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback-sm.png')?>" alt=""/></dt>
        <dd>
          <h3>Гарантия Возврата Денег</h3>
          <p>Мы гарантируем возврат <br>в пределах 60 дней со <br>дня покупка.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
        <dd>
          <h3>100% Безопасный Платеж</h3>
          <p>IObit предлагает безопасные <br>способы оплаты.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
        <dd>
          <h3>Быстрая Активация</h3>
          <p>После завершения покупки, <br>вы получите код лицензии всего <br>за несколькоминут по <br>электронной почте.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt=""/></dt>
        <dd>
          <h3>Служба Поддержка</h3>
          <p>Бесплатная Техническая <br>Поддержка 24/7.</p>
        </dd>
      </dl>
    </div>
    <!-- service end -->
  </div>

  <!-- footer start -->
  <div class="footer">
    <!-- annotation start -->
    <dl class="wrapper">
      <dt>Примечание:</dt>
      <dd>* Данные могут различаться в зависимости от разных систем или компьютеров.</dd>
      <dd>* Акционные продукты могут быть изменены в любое время без предварительного уведомления по нашему собственному усмотрению.</dd>
    </dl>
    <!-- annotation end -->
    <p>© 2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</p>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
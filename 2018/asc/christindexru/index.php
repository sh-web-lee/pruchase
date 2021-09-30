<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
	$date=$_GET['d'];
	$cName='itascjanpa'.$date;
	$cookie=$_COOKIE[$cName];
	if($cookie){
		$packsNum=$_COOKIE[$cName];
		if($packsNum>5){
			$packsNum--;
			setcookie($cName,$packsNum);
			if(rand(1,100)%2==0){
				$packsNum++;
			}
		}else{
			$packsNum=5;
		}
	}else{
		$packsNum=41;
		setcookie($cName,$packsNum);
	}
	echo $packsNum;
	exit();
}

function get_line($file, $line)
{
	$fp = fopen($file, 'r');
	$i = 0;
	while (!feof($fp)) {
		$i++;
		$c = fgets($fp);
		if ($i == $line) {
			return $c;
			break;
		}
	}
}

$buyNum = ceil(microtimeFloat() * 1000 / 20000) -76400174;
$buyNum = number_format($buyNum);

$name=explode(' ',trim(get_line('data/it_name_natale.txt',rand(1,454))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;
$viewNum=rand(60,88);
//if($_GET['type']==2){
//	$saleType=1;
//}
if($_GET['action']=='getPack'){
	echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'buyNum'=>$buyNum,'viewNum'=>$viewNum));
	exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_asc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Рождественская распродажа! Скидка до 90% на Advanced SystemCare PRO!</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
	<div class="banner">
	 	<div class="wrapper">
	 		<a href="https://ru.iobit.com/" target="_blank" class="logo">IObit</a>
			<h1>Рождественская распродажа</h1>
			<h2>Предложение ограничено по времени! Спешите!</h2>

 			<div class="defalut-exceed"></div>
 			<div class="sold-box">
 				<h3>До конца: <strong>55</strong> ч: <strong>55</strong> м: <strong>55</strong> с: <strong>555</strong> мс* </h3>
 				<div class="img-box">
 					<span class="three-img"></span>
 					<span class="one-img"></span>
 				</div>
 				<dl>
 					<dt><strong>90%</strong> СКИДКА</dt>
 					<dd>
            <!-- 3pc + sd buybtn -->
            <a href="https://www.iobit.com/buy.php?product=ru-asc123pcsd499&ref=ru_asc123pcsd499purchase<?php echo $refStr;?>&refs=ru_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsd1811christ-ru')"
                 class="button button-btm-lag">
              <span></span>
              ПОЛУЧИТЬ СЕЙЧАС
            </a>
          </dd>
 					<dd><span class="buyNum"><?php echo $buyNum?></span> людей уже купили
          </dd>
 				</dl>
 			</div>
 			<div class="one-pc-box">
 				<div class="img-box">
 					<span class="one-img"></span>
 					<span class="three-img"></span>
 				</div>
 				<dl>
 					<dt><strong>89%</strong> СКИДКА</dt>
 					<dd>
            <!-- 3pc buybtn -->
            <a href="https://www.iobit.com/buy.php?product=ru-asc123pc499&ref=ru_asc123pc499purchase<?php echo $refStr;?>&refs=ru_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1811christ-ru')"
                 class="button">
              ПОЛУЧИТЬ СЕЙЧАС
            </a>
          </dd>
 				</dl>
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

  <!-- payments start -->
	<div class="payments wrapper">
		<img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
	</div>
  <!-- payments end -->

	<!-- benfits start -->
  <div class="benfits">
    <div class="wrapper">
      <h2>Если Вы Ищете Эффективное Решение для Того,<br>
        Чтобы...</h2>
      <div class="showcase">
        <div class="inner">
          <ul class="screenshot">
            <li>
              <img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
            </li>
            <li>
              <img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
            </li>
            <li>
              <img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
            </li>
            <li>
              <img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
            </li>
            <li>
              <img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
            </li>
          </ul>
        </div>
        <ul class="zoom">
          <li></li>
          <li class="fun3">
            <div class="container">
              <img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
            </div>
          </li>
          <li class="fun2">
            <div class="container">
              <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
            </div>
          </li>
          <li class="fun4">
            <div class="container">
              <img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
            </div>
          </li>
          <li class="fun5">
            <div class="container">
              <img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
            </div>
          </li>
        </ul>
        <ul class="list-icon">
          <li class="active"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="detail-list">
        <dl>
          <dt><i class="benfits04"></i></dt>
          <dd>
            <h3>ЗАЩИТИТЬ КОНФИДЕНЦИАЛЬНОСТЬ </h3>
            <p>Автоматически очистить от данных отслеживания и <br>
              обеспечить более безопасный просмотр страниц!
            </p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits02"></i></dt>
          <dd>
            <h3>УСКОРИТЬ РАБОТУ ПК ДО 200%*</h3>
            <p>
              Оптимизировать использование системных ресурсов, <br>
              чтобы раскрыть полный потенциал вашего <br>
              медленного ПК.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits03"></i></dt>
          <dd>
            <h3>УСКОРИТЬ СОЕДИНЕНИЕ СЕТИ ДО 300%*</h3>
            <p>
              Значительно ускорить загрузку файла,просмотр <br>
              веб-страниц и онлайн-просмотр видео, и повысить игровую производительностиь для лучших<br>
              впечатлений от работы в Интернете
            </p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits01"></i></dt>
          <dd>
            <h3>ОЧИСТИТЬ ОТ МУСОРА</h3>
            <p>Глубоко очистить от накопленных ненужных файлов, <br>
              мусора, файлов реестра, незавершенных загрузок и т.д., <br>
              чтобы ПК стал чище, легче и быстрее.
            </p>
          </dd>
        </dl>
        <a href="Javascript:void(0);" onclick="goTarget($('#compare'))" class="textlink">
          Узнайте больше о возможностях ASC Pro>>
        </a>
      </div>
    </div>
  </div>
	<!-- benfits end -->

	<!-- gifts start -->
	<div class="gifts">
		<div class="wrapper">
			<h2>БесплатныЙ Подарок Только для Выбора 3 ПК / 1 Год</h2>
			<div class="gift-list clearfix">
				<dl class="exceed">
					<dt>
						<span></span>
						<strong>IObit Uninstaller PRO</strong>
					</dt>
          <dd><del>990 руб </del> &nbsp;&nbsp; <b><span>0</span></b> руб</dd>
				  <dd><p>Мощный деинсталлятор обнаруживает и удаляет<br> пакеты ПО, рекламное ПО и плагины.</p></dd>
				</dl>
				<dl class="sd">
					<dt>
						<span></span>
						<strong>Smart Defrag PRO</strong>
					</dt>
					<dd><del>990 руб</del> &nbsp;&nbsp; <b><span>0</span></b> руб</dd>
				  <dd><p>Ускорьте работу вашего ПК с помощью интеллектуальной <br> дефрагментации жесткого диска.</p></dd>
				</dl>
			</div>
      <!-- buybtn 3pc+sd -->
			<a href="https://www.iobit.com/buy.php?product=ru-asc123pcsd499&ref=ru_asc123pcsd499purchase<?php echo $refStr;?>&refs=ru_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsd1811christ-ru')"
         class="button btn-mid-lag">
        <span></span>
        ПОЛУЧИТЬ ПОДАРОК ЗА 0 РУБ
      </a>

		</div>
	</div>
	<!-- gifts end -->

	<!-- review start -->
	<div class="reviews-top">
		<div class="wrapper">
			<h2>Всемирные Награды и Отзывы</h2>
			<p>Отвечает требованиям пользователей по всему миру</p>
			<ul class="message clearfix">
				<li>
					<strong>200+</strong>
					<p>Пользователи из более чем <b>200</b><br> стран или регионов</p>
				</li>
				<li>
					<strong>1,000+</strong>
					<p>Более <b>1,000</b> СМИ рекомендовали <br> Advanced SystemCare</p>
				</li>
				<li>
					<strong>250,000,000+</strong>
					<p><b>250</b> млн пользователей по всему <br> миру выбирают Advanced SystemCare</p>
				</li>
				<li>
					<strong>80%+</strong>
					<p><b>80%</b> пользователей купили PRO <br> версию Advanced SystemCare</p>
				</li>
			</ul>
		</div>
	</div>

  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/cnet.png" alt=""></dt>
          <dd>
            <h2>Отзывы СМИ</h2>
            <p>"Нет ничего хуже компьютера, забитого до такой степени, что на нем нельзя ни поработать, ни поиграть. Программа Advanced SystemCare создана для решения любых проблем, угрожающих Вашему компьютеру, не только путем удаления файлового мусора, вредоносных программ и некорректных элементов реестра, но и ускоряя работу Вашего ПК, чтобы улучшить Ваши впечатления."</p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/bruce-ramsay.png" alt=""></dt>
          <dd>
            <h2>Отзывы Пользователей</h2>
            <p>"Я, как и многие, начал с бесплатной версии и в конечном итоге купил полную версию. Она чистит мой компьютер и обеспечивает его отличную работу уже годы, еще никогда не подводила меня. Недавно я связывался с Advanced SystemCare, и они ответили и рассказали все, что было нужно, в течение дня или двух. На мой взгляд, при решении, пользоваться продуктом или нет, служба поддержки очень важна, и ASC выигрывает как в плане качества, так и службы поддержки."</p>
            <cite>Bruce Ramsay</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/hank-ewert.png" alt=""></dt>
          <dd>
            <h2>Отзывы Пользователей</h2>
            <p>"Как и большинство людей, я не компьютерный эксперт. Я не знаю, сколько программ я перепробовал за эти годы, все утверждают, что они лучшие, но ни одна из них не сравнима с Advanced SystemCare Pro, которая у меня сейчас. С тех пор, как я получил эту шикарную программу, мне ни разу не пришлось звонить в техподдержку. Она намного превзошла мои ожидания, постоянно обновляется, и дизайн очень крутой! Огромное Вам спасибо за то, что Вы так сильно облегчили мне жизнь."</p>
            <cite>Hank Ewert</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/charles-r-widick.png" alt=""></dt>
          <dd>
            <h2>Отзывы Пользователей</h2>
            <p>"Как специалист по обслуживанию компьютеров, я обнаружил, что загрузка и сканирование с помощью ASC free могут помочь в решении наиболее распространенных проблем. Обычно когда я заканчиваю с починкой, я предлагаю клиенту приобрести пакет Pro. Кому нужны технологии, когда есть помощь Advanced System Care Pro, работающей 24/7? Это лучший продукт, который стоит купить пользователям с домашними ПК. Спасибо, что облегчили мне работу."</p>
            <cite>Charles R. Widick</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/loretta-harnarine.png" alt=""></dt>
          <dd>
            <h2>Отзывы Пользователей</h2>
            <p>"Эта программа - самая лучшая из того, что я когда-либо пробовала. Мой компьютер работает намного лучше и быстрее теперь, когда я загрузила ASC10. Программа очистила ПК от ненужных и повторяющихся файлов, пустых папок, и я также использовала ее для шреддинга файлов. ASC10 очистила и дефрагментировала реестр и все файлы на ПК. Я настоятельно рекомендую Вам приобрести эту программу. Она недорогая, а то, что она сделает с Вашим ПК, будет совершенно потрясающим. Вы полюбите ее, я обещаю."</p>
            <cite>Loretta Harnarine</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
	<!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2">Какие преимущества вы получите с ASC Pro?</th>
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
        <td class="virtue">До 200%* быстрее запуск ПК</td>
        <td class="itemb"><i class="all-icons line">√</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
        <td class="virtue">До 300%* быстрее скорость доступа в Интернет с помощью <br>Интернет Ускорения</td>
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

	<!-- bottomcart start -->
	<div class="bottomcart">
		<div class="wrapper">
			<h2>Активируйте Advanced SystemCare Pro и Наслаждайтесь Оптимальной Производительностью!</h2>
				<div class="showcase">
					<span class="img"></span>
				</div>
				<div class="selection">
					<ul>
						<li class="three-pc active" ><i></i> <span>3 ПК / 1 год + SD </span> <strong>-90%</strong></li>
						<li class="one-pc"><i></i> <span>3 ПК / 1 год </span> <strong>-89%</strong></li>
					</ul>
				</div>

				<dl class="btnarea">
					<dt> <strong><b>499 руб</b></strong> <del> 5487 руб</del></dt>
					<dd>
            <!-- buybtn 3pc+sd -->
						<a href="https://www.iobit.com/buy.php?product=ru-asc123pcsd499&ref=ru_asc123pcsd499purchase<?php echo $refStr;?>&refs=ru_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsd1811christ-ru')"
               class="button button-top-lag">
              <span></span>
              ПОЛУЧИТЬ СЕЙЧАС
            </a>
					</dd>
				</dl>
		</div>
	</div>
	<!-- bottomcart end -->

	<!-- service start  -->
	<div class="service  clearfix">
		<div class="wrapper">
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
				<dd>
          <strong>Гарантия Возврата Денег</strong>
          Мы гарантируем возврат<br>
          в течение 60 дней со<br>
          дня покупки.
        </dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
				<dd>
          <strong>Безопасный Платеж</strong>
          IObit предлагает безопасные<br>
          способы оплаты.
        </dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
				<dd>
          <strong>Быстрая Активация</strong>
          Код лицензии придет на Вашу <br>
          электронную почту всего через <br>
          несколько минут после завершения покупки.
        </dd>
			</dl>
			<dl class="last">
				<dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
				<dd>
          <strong>Служба Поддержки</strong>
          Бесплатная Техническая<br>
          Поддержка 24/7.
        </dd>
			</dl>
		</div>
	</div>
	<!-- service end -->

	<!-- footer start -->
	<div class="footer">
		<dl class="annotation wrapper">
			<dt>Примечание:</dt>
			<dd>
        * Данные могут различаться в зависимости от разных систем или компьютеров.
			</dd>
			<dd>
        * Акционные продукты могут быть изменены в любое время без предварительного уведомления по нашему собственному усмотрению.
			</dd>
		</dl>
		<div class="copyright">©2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</div>
	</div>
	<!-- footer end -->

	<!-- float start
	<div class="float">
		<a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
		<dl>
			<dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
			<dd>покупал <span id="saleType"><?php echo $saleType;?></span> ПК / 1 год</dd>
			<dd class="last"><span class="viewNum"><?php echo $viewNum;?></span> людей сейчас смотрят</dd>
		</dl>
	</div>
   float end -->
  <script>
    $(document).ready(function() {
      $('#dg-container').gallery();
    });
    viewNum='<?php echo $viewNum;?>';
    refStr='<?php echo $refStr;?>';
  </script>
	<script src="<?php echo $pResUrl; ?>script/script.js"></script>
	<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/review-3d-carousel.min.js"></script>
  <script src="<?php echo $pResUrl; ?>script/modernizr.min.js"></script>
</body>
</html>
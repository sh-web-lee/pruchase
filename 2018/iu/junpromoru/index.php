<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';
$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
	$refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
		'bdprog','iuasc'))){
	$refStr.='-'.$_GET['to'];
}
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Сэкономьте 87% на IObit Uninstaller PRO с Бесплатным Подарком!</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<?php if(!empty($_SERVER['QUERY_STRING'])):?>
	<link rel="canonical" href="https://ru.iobit.com/purchase/iu/" />
	<?php endif;?>
	<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:Roboto:400,500'>
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://ru.iobit.com/" class="logo">IObit</a>
			<h1 class="title"><small>ЛОВИ МОМЕНТ!</small> ПРЕДЛОЖЕНИЕ ОГРАНИЧЕНО</h1>
			<div class="showcase">
				<div class="single">
					<dl>
						<dt><img src="<?php echo getStaticUrl('images/single-box.png')?>" alt=""/></dt>
						<dd class="price">
							<strong>399<b>руб</b></strong> <del>990 руб</del>
						</dd>
						<dd><a href="https://www.iobit.com/buy.php?product=ru-iu81pc399&ref=ru_iu81pc399purchase<?php echo $refStr;?>&aff=&refs=ru_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1pc1806-ru')" class="button ghost">Купить Сейчас</a></dd>
					</dl>
				</div>
				<div class="packs">
					<div class="countdown">
						<strong>10</strong> Часов : <strong>45</strong> Мин : <strong>15</strong> Сек : <strong>435</strong>  Мс*
					</div>
					<dl>
						<dt><img src="<?php echo getStaticUrl('images/packs-box.png')?>" alt=""/></dt>
						<dd class="price">
							<strong>499<b>руб</b></strong> <del>3890 руб</del>
						</dd>
						<dd><a href="https://www.iobit.com/buy.php?product=ru-iu83pcamc499&ref=ru_iu83pcamc499purchase<?php echo $refStr;?>&aff=&refs=ru_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc1806-ru')" class="button stand">Купить Сейчас</a></dd>
					</dl>
					<div class="counter"><strong>6,675,771</strong> людей активировали</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end banner -->
	<div class="payments wrapper">
		<img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/>
	</div>
	<!-- intro -->
	<div class="intro wrapper">
		<h2>Мощный Деинстоллятор для Более Быстрого, Тщательного Удаления!</h2>
		<div class="showcase">
			<div class="imglist">
				<ul>
					<li class="shot3"><img src="<?php echo $pResUrl;?>images/screenshot02.png" alt=""></li>
					<li class="shot2"><img src="<?php echo $pResUrl;?>images/screenshot03.png" alt=""></li>
					<li class="shot1"><img src="<?php echo $pResUrl;?>images/screenshot01.png" alt=""></li>
				</ul>
			</div>
			<a href="javascript:;" class="prev control"><</a>
			<a href="javascript:;" class="next control">></a>
		</div>
		<div class="features clearfix">
			<dl>
				<dt><img src="<?php echo $pResUrl;?>images/feature_01.png" alt=""></dt>
				<dd>
					<h3><span class="hob">НОВИНКА!</span> Обнаружение и удаление пакетов</h3>
					<p>Обнаружение и удаление пакетов, таких как рекламное ПО, связанные программы и плагины, которые могут быть частью процесса установки. </p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl;?>images/feature_02.png" alt=""></dt>
				<dd>
					<h3><span>УЛУЧШЕНО!</span> Чистый просмотр</h3>
					<p>Мощное удаление вредоносных и рекламных плагинов браузера для обеспечения безопасного и чистого просмотра.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl;?>images/feature_03.png" alt=""></dt>
				<dd>
					<h3><span>УЛУЧШЕНО!</span> Автоматическая очистка</h3>
					<p>Автоматическое обнаружение и очистка остатков удаленных программ, включая те остатки, которые нельзя удалить другими деинстоляторами.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl;?>images/feature_04.png" alt=""></dt>
				<dd>
					<h3><span class="hob">НОВИНКА!</span> Обновление программного обеспечения</h3>
					<p>В один клик обновление важных программ на своем ПК без дополнительных операций пользователя.</p>
				</dd>
			</dl>
		</div>
		<a href="javascript: void(0);" class="comparebtn">Нажмите здесь для подробной информации>></a>
	</div>
	<!-- end intro -->
	<!-- complimentary -->
	<div class="complimentary wrapper">
		<h2>Эксклюзивный Набор с Подарком Только для Подписки на 3 ПК / 1 год </h2>
		<div class="countdown"><strong>10</strong> Часов : <strong>45</strong> Мин : <strong>15</strong> Сек : <strong>435</strong>  Мс*</div>
		<div class="gift-list clearfix">
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/gift-iu.png')?>" alt=""/></dt>
				<dd>
					<h3>IObit Uninstaller PRO <strong>499 руб </strong> <del>2970 руб</del></h3>
					<ul>
						<li>Выгодная цена на 2 дополнительных ПК.</li>
						<li>Разблокируйте все расширенные функции на версии PRO для полной деинстолляции. </li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/gift-amc.png')?>" alt=""/></dt>
				<dd>
					<h3>AMC Security PRO* <strong>0 руб </strong> <del>990 руб</del></h3>
					<ul>
						<li class="last">Универсальная утилита очистки и ускорения для вашего Андроид смартфона.</li>
						<li class="last">Мощная защита конфиденциальности на устройствах.</li>
					</ul>
				</dd>
			</dl>
		</div>
		<a href="https://www.iobit.com/buy.php?product=ru-iu83pcamc499&ref=ru_iu83pcamc499purchase<?php echo $refStr;?>&aff=&refs=ru_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc1806-ru')" class="button stand">Купить Сейчас</a>
	</div>
	<!-- end complimentary -->
	<!-- awards -->
	<div class="awards wrapper">
		<h2>Нас Рекомендуют Всемирные СМИ</h2>
		<img src="<?php echo $pResUrl;?>images/awards.png" alt="" />
	</div>
	<!-- end awards -->
	<!-- review -->
	<div class="review wrapper">
		<div id="dg-container" class="dg-container">
			<div class="nav"> 
				<span class="dg-prev"></span>
				<span class="dg-next"></span>
			</div>
			<div class="content dg-wrapper">  
				<dl class="reviews">
					<dt><img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="MakeUseOf"></dt>
					<dd>
						<h2>Отзывы СМИ</h2>
						<cite>PC Magazine</cite>
						<h4>"Если вам нужна программа, которая позволяет вам чисто и полностью удалить приложения, то запустите Iobit Uninstaller."</h4>
						<p>
							"Iobit Uninstaller - это, несомненно, лучший деинсталлятор для Windows, который я тестировал. Если вам нужна программа, которая позволяет вам чисто и полностью удалить приложения, то запустите Iobit Uninstaller. Эта бесплатная утилита может легко удалить приложения, в том числе и оставшиеся файлы после того, когда вы используете Windows, чтобы удалить программное обеспечение с жесткого диска или SSD. Другие бесплатные инструменты, как Comodo Programs Manager и Revo Uninstaller, выполняют аналогичные функции, но Iobit Uninstaller лучше этих соперников со своими предложениями на основе сообщества и возможностью удалить раздражающие панели инструментов веб-браузера и плагины."
						</p>
					</dd>
				</dl>
				<dl class="reviews">
					<dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
					<dd>
						<h2>Отзывы СМИ</h2>
						<cite>MakeUseOf</cite>
						<h4>"IObit Uninstaller обеспечивает то, что она обещает: полное удаление."</h4>
						<p>
							"IObit Uninstaller — маленькая программа с интуитивно понятным интерфейсом, которую можно скачать почти мгновенно. Это переносимая программа, предназначенная для быстрого удаления одной или нескольких программ. Опция «глубокая проверка» позволяет полностью удалить самые неподатливые куски программ. В общем, IObit Uninstaller обеспечивает то, что она обещает: полное удаление. Использовать эту программу имеет смысл хотя бы из-за высокой скорости работы." 
						</p>
					</dd>
				</dl>
				<dl class="reviews">
					<dt><img src="<?php echo getStaticUrl('images/fernando.png')?>" alt="Fernando Lourenço Gomes"></dt>
					<dd>
						<h2>Отзывы Пользователей</h2>
						<cite>Fernando Lourenço Gomes</cite>
						<h4>"IObit Uninstaller - отличный инструмент для удаления программ и даже панелей инструментов и плагинов."</h4>
						<p>
							"IObit Uninstaller - отличный инструмент для удаления программ и даже панелей инструментов и плагинов. Он мне очень помог, он не только удаляет программы и приложения, но и очищает их связанный реестр, существования которого обычно не знают многие люди, как я. Он имеет приятный и интуитивно понятный интерфейс, не требуя больших навыков информатики. Я сильно рекомендую его!"     
						</p>
					</dd>
				</dl>
			</div>               
		</div>
	</div>
	<!-- end review -->
	<!-- copmtab -->
	<div class="comparison wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<thead>
				<tr>
					<th class="text" colspan="2">Какие преимущества Вы получите с IU PRO?</th>
					<th class="itemb">IObit Uninstaller 8 <br>FREE</th>
					<th class="itema">IObit Uninstaller 8 <br>PRO</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_01.png" alt="" /></td>
					<td class="virtue first">
						<span>Удаление программ через значок рабочего стола, открытое окно или значок в системном трее</span>
						<sup class="nuo">НОВИНКА</sup>
					</td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-mark.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_02.png" alt="" /></td>
					<td class="virtue">Удаление расширений от edge, chrome, IE, firefox и т. д.</td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-mark.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_03.png" alt="" /></td>
					<td class="virtue">Поддержка удаления упрямых программ <sup class="red three">УЛУЧШЕНО</sup></td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_04.png" alt="" /></td>
					<td class="virtue two">
						<span>Обнаружение и удаление сторонних программ наряду с бесплатными программами</span>
						<sup class="nuo">НОВИНКА</sup>
					</td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_08.png" alt="" /></td>
					<td class="virtue two three">
						<span>Автоматическое удаление остатков, которые не могут быть удалены другими утилитами</span>
						<sup class="red">УЛУЧШЕНО</sup>
					</td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_06.png" alt="" /></td>
					<td class="virtue">Поддержка обнаружения и удаления вредоносных плагинов <sup class="red three two">УЛУЧШЕНО</sup></td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_07.png" alt="" /></td>
					<td class="virtue">Поддержка обнаружения и удаления рекламных плагинов <sup class="red three two">УЛУЧШЕНО</sup></td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_05.png" alt="" /></td>
					<td class="virtue">1 клик для обновления всех важных программ <sup class="red three five">УЛУЧШЕНО</sup></td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_09.png" alt="" /></td>
					<td class="virtue">Автоматическое обновление до последней версии</td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
				<tr>
					<td class="icons" width="45"><img src="<?php echo $pResUrl;?>images/icon_10.png" alt="" /></td>
					<td class="virtue">Бесплатная техническая поддержка 24/7 по запросу</td>
					<td class="itemb"><img src="<?php echo $pResUrl;?>images/gray-point.png" alt="" /></td>
					<td class="itema"><img src="<?php echo $pResUrl;?>images/red-mark.png" alt="" /></td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- end copmtab -->
	<!-- bottom -->
	<div class="bottom">
		<div class="wrapper">
			<!-- service start -->
			<div class="service clearfix">
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
					<dd><h4>Гарантия Возврата Денег</h4></dd>
					<dd>Мы гарантируем возврат <span>в пределах 60 дней со дня</span> покупки.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl;?>images/godaddy-secure.png" alt="" /></dt>
					<dd><h4>100% Безопасный Платеж</h4></dd>
					<dd>IObit предлагает безопасные <span>способы оплаты.</span></dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl;?>images/cart.png" alt="" /></dt>
					<dd><h4>Быстрая Активация</h4></dd>
					<dd>После завершения покупки, вы <span>получите код лицензии всего за</span> несколькоминут по электронной почте.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo $pResUrl;?>images/24hours.png" alt="" /></dt>
					<dd><h4>Служба Поддержки</h4></dd>
					<dd>Бесплатная Техническая <span>Поддержка 24/7.</span></dd>
				</dl>
			</div>
			<!-- service end -->

			<!-- annotation start -->
			<dl class="annotation">
				<dt>Примечание:</dt>
				<dd>* Данные могут различаться в зависимости от разных систем или компьютеров.</dd>
				<dd>*. Рекламные программы могут быть изменены в любое время без предварительного уведомления по нашему собственному усмотрению.</dd>
			</dl>
			<!-- annotation end -->

			<!-- footer start -->
			<div class="footer">© 2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</div>
			<!-- footer end -->
		</div>
	</div>
	<!-- end bottom -->
	<script src="<?php echo $pResUrl;?>script/modernizr.min.js"></script>
	<script src="<?php echo $pResUrl;?>script/review-3d-carousel.min.js"></script>
	<script src="<?php echo $pResUrl;?>script/script.js"></script>
</body>
</html>
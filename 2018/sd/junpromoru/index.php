<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
  $packsNum = ceil(microtime_float()*2000/20000);
  $packsCount=360;
  $packsNum = $packsCount-($packsNum%$packsCount);
  if ($_GET['action'] == 'getPacks'){
      echo $packsNum;
      exit;
  }

if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
		'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
		'sdfeatures_noaction','sdddact_noaction','actreport'))){
	$refStr='-'.$_GET['ref'];
}else{
	$refStr='';
}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Сэкономьте 78% на Smart Defrag PRO с Бесплатным Подарком!</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
		<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
		<script type="text/javascript">
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
		<!-- header -->
		<div class="header">
			<div class="wrapper">
				<a href="https://www.iobit.com" class="logo" target="_blank">IObit</a>
				<h1>СКИДКА -87% Специальное Предложение Smart Defrag 6 pro</h1>
				<ul class="countdown" id="counttime1">
					<li><span>00</span> Часов:</li>
					<li><span>00</span> Мин:</li>
					<li><span>00</span> Сек:</li>
					<li><span>00</span> <sup>*</sup></li>
				</ul>
				<div class="clear"></div>
				<div class="content">
					<div class="left">
						<img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="">
					</div>
					<div class="arrow"></div>
					<div class="right">
						<dl class="message">
							<dt><strong>Smart Defrag 6 PRO <span>(1 Год / 1 ПК)</span></strong> <b> 499 руб</b> <del> 990 руб</del></dt>
							<dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>SD 6 PRO 2 дополнительных ПК</strong> <span>Подарок </span> <del>1980 руб</del></dd>
							<dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>AMC Security PRO</strong> <span>Подарок </span> <del>990 руб</del></dd>
						</dl>
						<dl class="buy">
							<dt><strong>499 руб</strong> <del>3890 руб</del></dt>
							<dd><a href="https://www.iobit.com/buy.php?product=ru-sd63pcamc499&ref=ru_sd63pcamc499purchase<?php echo $refStr;?>&refs=ru_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pcamc1806-ru')" class="buybtn"><i></i> Купить Сейчас</a></dd>
							<dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> Только <strong class="packsNum"><?php echo $packsNum; ?></strong>  пакетов доступны</dd>
						</dl>
					</div>
				</div>
		</div>
		</div>
		<!-- header end -->
		<div class="wrapper accepted">
			<dl>
				<dt>Возможные Способы Оплаты</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dd>
			</dl>
			<dl>
				<dt>Гарантия Возврата Денег </dt>
				<dd><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dd>
			</dl>
			<dl class="last">
				<dt>Защищенный Платеж</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/secured.png" alt=""></dd>
			</dl>
		</div>
		<div class="wrapper benfits clearfix">
			<h2>Максимизируйте Производительность Жесткого Диска с Smart Defrag PRO：</h2>
			<dl class="row1">
				<dt><img src="<?php echo $pResUrl; ?>images/icons001.png" alt=""></dt>
				<dd><strong>Новый Движок для Сверхбыстрой  Дефрагментации</strong> <span>Дефрагментирует файлы более эффективно и быстро за меньшее время.</span></dd>
			</dl>
			<dl class="row1 right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons002.png" alt=""></dt>
				<dd><strong>До 200% Быстрее *</strong> <span>Ускоряет доступ к файлам и скорость запуска игры благодаря Дефрагментации больших файлов.</span></dd>
			</dl>
			<div class="clear"></div>
			<dl class="row2">
				<dt><img src="<?php echo $pResUrl; ?>images/icons003.png" alt=""></dt>
				<dd><strong>Автоматическая Дефрагментация</strong> <span>Автоматически и разумно дефрагментирует указанные файлы и жесткие диски.</span></dd>
			</dl>
			<dl class="row2 right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons004.png" alt=""></dt>
				<dd><strong>Более Быстрый Запуск ПК</strong> <span>Более быстрый запуск ПК и загрузка системы благодаря Дефрагментации при загрузке.</span></dd>
			</dl>
			<div class="clear"></div>
			<p><a href="javascript:void(0);" onclick="goTaget($('#compare'))">Подробнее о версии PRO >></a></p>
		</div>
		<div class="wrapper between-buy clearfix">
			<div class="left">
				<dl class="sd">
					<dt><img src="<?php echo getStaticUrl('images/big-sd.png')?>" alt=""></dt>
					<dd><strong>499 руб</strong> <del> 990 руб</del></dd>
				</dl>
				<dl class="free">
					<dt><img src="<?php echo getStaticUrl('images/additions.png')?>" alt=""></dt>
					<dd>2 дополнительных ПК</dd>
					<dd><span class="see-more">Подробнее</span></dd>
				</dl>
				<dl class="free amc">
					<dt><img src="<?php echo $pResUrl; ?>images/amc-free.png" alt=""></dt>
					<dd>Защита Андроид  телефонов против вирусов</dd>
					<dd><span class="see-more">Подробнее</span></dd>
				</dl>
			</div>
			<div class="pop-content hidden">
				<span class="close"></span>
				<dl>
					<dt>2 Дополнительных ПК</dt>
					<dd>Лицензия Smart Defrag 6 PRO поддерживает 2 дополнительных ПК, так что вы можете поделиться со своими друзьями и семьей!</dd>
					<dt>AMC Security PRO  <span>Универсальная Утилита для Мобильников.</span></dt>
					<dd class="check">Ускорение своего устройства до 200% быстрее.</dd>
					<dd class="check">Защита своего устройства в реальном времени от угроз.</dd>
					<dd class="check">Полномаштабная защита личных данных.</dd>
					<dd class="check">Пионер в области безопасности платежей. Никогда не  беспокойтесь о мошенничестве.      </dd>
				</dl>
			</div>
			<dl class="right buy">
				<dt><strong>499 руб</strong> <del>990 руб</del></dt>
				<dd><a href="https://www.iobit.com/buy.php?product=ru-sd63pcamc499&ref=ru_sd63pcamc499purchase<?php echo $refStr;?>&refs=ru_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pcamc1806-ru')" class="buybtn"><i></i>Купить Сейчас</a></dd>
				<dd><img src="<?php echo $pResUrl; ?>images/count.png" alt="">  Только <strong class="packsNum"><?php echo $packsNum; ?></strong>  Пакетов Остались</dd>
			</dl>
		</div>
		<div class="wrapper awards">
			<h2>Нас Рекомендуют Всемирные СМИ</h2>
			<img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
		</div>
		<div class="review">
			<div class="wrapper">
				<div class="media_rev">
					<h3>Отзывы СМИ</h3>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/clubic.png" alt=""></dt>
						<dd><strong>"Простой в использовании и более комплектный инструмент, чем предлагает Windows."</strong></dd>
						<dd>"Smart defrag - это очень хорошая программа для дефрагментации диска, она работает в фоновом режиме, когда компьютер находится в спящем режиме, так что вы почти не замечаете ею. В результате, диски постоянно дефрагментируются, что обеспечивает быстрый доступ и меньший износ. Smart defrag это самый лучший дефрагментатор, который я когда-либо использовал, и я определенно рекомендую ей моей семье и друзьям!"</dd>
					</dl>
				</div>
				<div class="user_rev" id="user_rev">
					<div class="content">
						<h3>Отзывы Пользователей </h3>
						<dl class="show">
							<dd><h4>"Smart defrag - это очень хорошая программа для дефрагментации диска."</h4></dd>
							<dd>"Smart defrag - это очень хорошая программа для дефрагментации диска, она работает в фоновом режиме, когда компьютер находится в спящем режиме, так что вы почти не замечаете ею. В результате, диски постоянно дефрагментируются, что обеспечивает быстрый доступ и меньший износ. Smart defrag это самый лучший дефрагментатор, который я когда-либо использовал, и я определенно рекомендую ей моей семье и друзьям!"</dd>
						</dl>
						<dl>
							<dd><h4>"Это простая и достойная утилита для вашего жесткого диска или SSD."</h4></dd>
							<dd>"Я запускаю комбинацию RAID 0 SSD и RAID 0 и использую Smart Defrag Pro для анализа, дефрагментации и поддержания работы своих дисков с максимальной производительностью. Как и все другие IObit программы, она проста в установке и использовании и очень надежна. Просто установите и забудьте об этом. Smart Defrag имеет очень маленький обьем памяти, так что он не замедлит работу вашей системы. Определенно рекомендуется!"</dd>
						</dl>
						<dl>
							<dd><h4>"С помощью этой фантастической программой мой рабочий стол и мой ноутбук быстро и экономично."</h4></dd>
							<dd>"Я работаю с Smart Defrag уже многие годы. С помощью этой фантастической программой мой рабочий стол и мой ноутбук работают быстро и экономично. Вместе с advance system care ultimate у вас есть полный комплект инструментов для поддержания вашей системы в актуальном, быстром и безопасном состоянии. Используя его каждый день без необходимости ждать (ПК закрывается сам), вы держите свою систему в отличном состоянии, даже если у вас нет техническогофона!"</dd>
						</dl>
					</div>
					<ul class="users">
						<li class="active"><img src="<?php echo $pResUrl; ?>images/amnon.jpg" alt="">Amnon</li>
						<li class=""><img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">Edward Lee Ah Yen</li>
						<li class=""><img src="<?php echo $pResUrl; ?>images/hans.jpg" alt="">Hans</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="comparison_table wrapper" id="compare">
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
				<tr>
					<th colspan="2" class="text"><strong>Какие преимущества <br> Вы получите с Smart Defrag PRO?</strong></th>
					<th class="itemb">Smart Defrag FREE</th>
					<th class="itema">
						<span>Smart Defrag PRO с подарком </span>
						<span><strong>499 руб</strong> <del>  3890 руб</del></span>
						<span> 1 Год / 3 ПК</span>
						<a href="https://www.iobit.com/buy.php?product=ru-sd63pcamc499&ref=ru_sd63pcamc499purchase<?php echo $refStr;?>&refs=ru_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pcamc1806-ru')" class="buybtn">Купить Сейчас</a>
					 </th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icons-01.png"></td>
					<td class="virtue">Базовая дефрагментация и оптимизация диска</td>
					<td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icons-02.png"></td>
					<td class="virtue">Оптимизация игры для более быстрого и плавного игрового опыта</td>
					<td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icons-03.png"></td>
					<td class="virtue">Дефрагментация файлов реестра для повышения производительности ПК</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icons-04.png"></td>
					<td class="virtue">Ускорение дефрагментации для быстрого запуска ПК</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icons-05.png"></td>
					<td class="virtue">До 200% быстрее скорость доступа к файлам</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icons-06.png"></td>
					<td class="virtue">Автоматическая и интеллектуальная дефрагментация указанных файлов и дисков</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icons-07.png"></td>
					<td class="virtue">Дефрагментация настраиваемого файла при запуске ПК</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icons-08.png"></td>
					<td class="virtue">Принятие DMA для повышения производительности ПК </td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icons-09.png"></td>
					<td class="virtue">Автоматическое обновление до последней версии</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo $pResUrl; ?>images/icons-10.png"></td>
					<td class="virtue">Бесплатная техническая поддержка 24/7 по запросу</td>
					<td class="itemb"></td>
					<td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
				</tr>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th class="itemb">Smart Defrag FREE</th>
						<th class="itema">Smart Defrag PRO с подарком 
						 </th>
					</tr>
				</tfoot>
			</table>
	</div>
	<div class="fy-banner wrapper">
		<img src="<?php echo getStaticUrl('images/bottom-sd-content.png')?>" alt="">
		<dl>
			<dd>
				<span class="list01">Ускорьте работу вашего ПК с интеллектуальной <br> дефрагментацией!</span>
				<span class="list02">Увеличьте быстродействие ПК с оптимизированным <br> жестким диском!</span>
			</dd>
			<dt>
				<a href="https://www.iobit.com/buy.php?product=ru-sd63pcamc499&ref=ru_sd63pcamc499purchase<?php echo $refStr;?>&refs=ru_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3pcamc1806-ru')" class="buybtn"><i></i>Купить Сейчас</a>
			</dt>
		</dl>
	</div>
	<dl class="annotation wrapper">
		<dt>Примечание:</dt>
		<dd>* Данные могут различаться в зависимости от разных систем или компьютеров.</dd>
		<dd>*. Рекламные программы могут быть изменены в любое время без предварительного уведомленияпо нашему собственному усмотрению.</dd>
	</dl>
		<!-- footer -->
		<div class="footer">
			<p>Copyright © 2005 - <?php echo date('Y')?> IObit. Все Права Защищены.</p>
		</div>
		<!-- footer end -->
		<script>
			$(document).ready(function() {
					$("#user_rev .users li").mouseover(function(event) {
					var num = $(this).index();
					$("#user_rev .users li").eq(num).addClass('active').siblings().removeClass('active');
					$("#user_rev dl").eq(num).addClass('show').siblings().removeClass('show');
				});
				cycleCountdown();
			});
			$(".see-more").click(function(){
				$(".pop-content").addClass("show").removeClass("hidden");
			});
			$(".close").click(function(){
				$(".pop-content").addClass("hidden").removeClass("show");
			});
			function goTaget(target) {
				var Theigth = target.offset().top;
				$("html, body").animate({scrollTop: Theigth}, 'slow');
			}
			function cycleCountdown(){
				var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
				var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
				d = MApp(2.2).packages.zeroize(datetime[0], 2);
				h = MApp(2.2).packages.zeroize(datetime[1], 2);
				i = MApp(2.2).packages.zeroize(datetime[2], 2);
				s = MApp(2.2).packages.zeroize(datetime[3], 2);
				mi = MApp(2.2).packages.zeroize(datetime[4], 3);
				$("#counttime1 li span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
				setTimeout('cycleCountdown()', 1);
			}
		</script>
	</body>
</html>
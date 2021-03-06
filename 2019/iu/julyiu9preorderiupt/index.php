<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'eniujune_p' . $date;
	$c_name_t='eniujune_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(49,58);
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
		setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 0) {
			$packsNum = 0;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
	$refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tenha 60% de desconto no IObit Uninstaller 9 PRO</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
      <!-- logo -->
			<a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
      <!-- title -->
			<h1>A Pr??-Venda Global Come??a Agora</h1>
			<div class="clearfix">
        <!-- left-message: iu-box -->
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
        <!-- right-message -->
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<p>Desinstala????o completa sem deixar rastros</p>
					<ul class="price clearfix">
						<li class="first">
              <p><strong>R$<big>52</big>,99</strong> <del>R$144,00</del></p>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change"><b class="giftNum">50</b> pacotes restantes</p>
						</li>
						<li>
              <!-- buybtn -->
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=pt-iu93pc5299&ref=pt_iu9preorder5299userson<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu-pt');">
                 Aproveitar Agora
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro">
    <h2>Porque Atualizar para IObit Uninstaller 9 PRO?</h2>
    <!-- content -->
    <div class="content">
      <div class="wrapper">
        <ul class="clearfix">
          <li class="active">Desinstala????o Mais Poderosa</li>
          <li>Limpeza Mais Profunda</li>
        </ul>
        <div class="box">
          <div class="inlist">
            <div class="indetail first clearfix">
              <dl class="fl">
                <dt>
                  <h3>Sua Edi????o Atual</h3>
                  <h4>Desinstala</h4>
                </dt>
                <dd>
                  Programas, extens??o de navegadores e apps do Windows.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>IObit Uninstaller 9 PRO</h3>
                  <h4>Desinstala  <i>MELHORADO</i></h4>
                </dt>
                <dd>
                  Programas, extens??o de <br>
                  navegadores e apps do Windows.
                </dd>
                <dd>
                  Programas teimosos que n??o podem <br>
                  ser desinstalados por meios convencionais.
                </dd>
                <dd>
                  Programas em bundle que s??o instalados <br>
                  juntos com freeware para anunciar ou roubar <br>
                  dados privados. <br>
                  <em class="space">??nico no mercado</em>
                </dd>
                <dd>
                  Plugins maliciosos e de an??ncios que <br>
                  injetam an??ncios ou links maliciosos <br>
                  nas p??ginas que voc?? visita <br>
                  <em class="space">??nico no mercado</em>
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
            <div class="indetail last clearfix">
              <dl class="fl">
                <dt>
                  <h3>Sua Edi????o Atual</h3>
                </dt>
                <dd>
                  <h4>Remove</h4>
                  Sobras de programas e registros <br>
                  deixados ap??s a desinstala????o
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>IObit Uninstaller 9 PRO</h3>
                </dt>
                <dd>
                  <h4>Remove <i>MELHORADO</i></h4>
                  15% mais sobras de programas e <br>
                  registros deixados ap??s a desinstala????o.
                </dd>
                <dd>
                  <h4>Reverte <i class="new">NOVO</i></h4>
                  Mudan??as n??o-autorizadas no sistema <br>
                  feitas por instaladores
                </dd>
                <dd>
                  <h4>Verifica  <i class="new">NOVO</i></h4>
                  Por sobras de programas deixadas por <br>
                  programas desinstalados anteriormente <br>
                  sem o IObit Uninstaller. <br>
                  <em class="space">??nico no mercado</em>
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next active">></span>
    </div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Outros Benef??cios do IObit Uninstaller 9 PRO</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-03.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li><i class="all-icons">???</i> Remove m??ltiplos programas e apps de uma s?? vez</li>
            <li class="clearfix"><i class="all-icons fl">???</i> <span class="fl">Desinstala programas atrav??s do ??cone de desktop, janela <br> aberta ou ??cone na bandeja de sistema</span> </li>
						<li><i class="all-icons">???</i> Cria um ponto de restaura????o autom??tico antes de desinstalar </li>
						<li><i class="all-icons">???</i> Atualiza todos os programas desatualizados com 1-clique </li>
						<li><i class="all-icons">???</i> Atualiza automaticamente para novas vers??es sempre que dispon??vel </li>
						<li><i class="all-icons">???</i> Suporte t??cnico 24 horas </li>
					</ul>
				</div>
			</div>
      <div class="price clearfix">
        <h3>Adquira Agora por R$52,99 para Destravar todas as fun????es PRO</h3>
        <div class="fl">
          <strong>R$<big>52</big>,99</strong> <del>R$144,00</del>
          <p class="change">Corra, apenas<b class="giftNum">50</b>pacotes restantes</p>
        </div>
        <a class="buybtn fl"
           href="https://www.iobit.com/buy.php?product=pt-iu93pc5299&ref=pt_iu9preorder5299userson<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu-pt');">
          Aproveitar Agora
        </a>
      </div>
		</div>
	</div>
	<!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>O Que Outros Dizem?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
            <dd>
              <h3>Opini??o da M??dia</h3>
              <p>
                "Essa ferramenta informativa e de f??cil uso limpa, configura e otimiza seu PC e usu??rios podem baixar virtualmente num piscar de olhos. Essa ferramenta pode ser categorizada como a melhor ferramenta de desinstala????o e permite que usu??rios desinstalem em lote. Oferece aos usu??rios a op????o de fazer uma "Verifica????o Profunda" para ir mais fundo e procurar por restos deixados pelo processo de desinstala????o. O desempenho por si s?? j?? faz essa ferramenta valiosa de se ter."
              </p>
              <h4>MakeUseOf</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>Opini??o do Usu??rio</h3>
              <p>
                "Eu acho IObit Uninstaller excelente para usar e ?? tudo que eu desejaria. Eu amo o fato que ele desinstala sobras de programas. Tamb??m possui um atualizador de programas que lembra voc?? de quando os programas precisa atualiza????o, e desinstala m??ltiplos programas ao mesmo tempo o que o faz o melhor desinstalador do mercado. ?? o programa correto para quem quer manter seu computador em ordem."
              </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"/></dt>
            <dd>
              <h3>Opini??o do Usu??rio</h3>
              <p>
                "IObit Uninstaller ?? provavelmente o melhor aplicativo para removar programas desnecess??rios do seu computador. Diferentemente do desinstalador padr??o do Windows, IObit Uninstaller remove as sobras do programa desinstalado, que poderiam deixar seu PC lento. Eu estive usando esse programa por alguns anos e sempre me ajuda a manter meu computador limpo e r??pido. Eu recomendei este programa para alguns dos meus amigos no passado e recomendaria de novo."
              </p>
              <h4>Sergey Erlich</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>Opini??o do Usu??rio</h3>
              <p>
                "IObit Uninstaller ?? o melhor programa para remover programas do computador, ele ?? r??pido, efetivo e muito superior ao desinstalador b??sico de Windows. O programa limpa seriamente todos os restos do programa para que n??o haja atrasos no computador. Eu estive usando por alguns meses e eu n??o sei como viver sem ele, portanto eu recomendo para meus amigos e fam??lia. IObit Uninstaller ?? fant??stico!"
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro ??u??i??"/></dt>
            <dd>
              <h3>Opini??o do Usu??rio</h3>
              <p>
                "IObit Uninstaller fica melhor a cada atualiza????o. Eu o tenho usado por 3 anos, o programa carrega r??pido e possui uma interface simples. Algumas das fun????es que uso regularmente s??o Desinstala????o em Lote, Verifica????o Profunda, Destruidor de Arquivos e a fun????o adicionanda recentemente que me permite ter acesso r??pido a programas que eu instalei recentemente ou que n??o funcionam devidamente. ?? f??cil controlar seus itens de inicializa????o o que faz seu PC inicializar em menos tempo."
              </p>
              <h4>Lovro ??u??i??</h4>
            </dd>
          </dl>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next">></span>
    </div>
  </div>
  <!-- review end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper">
      <h2>World-wide Awards</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <dl class="annotation">
        <dt></dt>
        <dd></dd>
      </dl>
      <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
      </div>
      <div class="price fr clearfix">
        <div class="one fl">
          <div id="fReduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>5</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          <p class="change"><span class="viewNum"><?php echo $viewNum;?></span> visitantes, s?? <b class="giftNum">50</b> pacotes restantes!</p>
        </div>
        <div class="two fl"><strong>R$<big>52</big>,99</strong> <del>R$144,00</del>  </div>
        <div class="three fl">
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-iu93pc5299&ref=pt_iu9preorder5299official<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9preorderofficial-pt');">
            Aproveitar Agora
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
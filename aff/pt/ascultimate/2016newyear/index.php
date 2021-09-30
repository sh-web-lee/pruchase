<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (empty($_GET['ref'])) $_GET['ref'] = 'pt_au9pfpurchase1507';
function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;

$packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>Até 60% de desconto em ASC Ultimate - Oferta Especial de IOBit </title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $pResUrl; ?>style/style.css">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function decreasingPacks(){
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getPacks&r="+Math.random(),
		success: function(packs){
			$('#packs').html(packs);
			setTimeout('decreasingPacks()', 10000);
		}
	});
}
setTimeout('decreasingPacks()', 10000);
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="header">
	<div class="wrapper">
  	<a href="http://www.iobit.com" target="_blank"></a>
    <div class="time" id="counttime">
    	<span>02</span>
      <span>02</span>
      <span>02</span>
      <span style="font-size: 14px;">025</span>
    </div>
  </div>
</div>
<div id="banner">
	<div class="wrapper">
  	<img src="<?php echo $pResUrl; ?>images/box.jpg">
    <div class="right">
    	<h1>  Oferta Especial </h1>
      <p class="first">Compre Agora Advanced SystemCare Ultimate por Apenas <strong> R$ 89,99 </strong> <br>e ganhe Protected Folder gratuitamente. Absolutamente de Graça!</p>
      <ul>
     	 	<li>
        	<span><img src="<?php echo $pResUrl; ?>images/ascu.jpg" class="imgage"></span>
          <span class="lin list01"><strong>Advanced SystemCare Ultimate </strong><br>Oferece a melhor proteção para o seu PC</span>
          <span class="list02"> Apenas R$ 2.49/mês/PC</span>
          <span class="lin list03">3PCs/1 Ano<br>R$ 89,99  <del>R$217,85</del></span>
        </li>
     	 	<li>
        	<span><img src="<?php echo $pResUrl; ?>images/pf.jpg" class="imgage"></span>
          <span class="list01"><strong style=" float: left">Protected Folder </strong><a href="#" onclick="goTaget($('.content'))"><img src="<?php echo $pResUrl; ?>images/target.jpg"></a></span>
          <span class="list02 cor">Gratuito</span>
          <span class="list03">R$0 <del>R$67,95</del></span>
        </li>        
        <li class="last">Compre Agora e economize R$ 195.81!</li>
      </ul>
      <p><strong class=" money">R$ 89,99</strong> <del>R$ 285.8</del></p>
      <p><a  href="http://www.iobit.com/buy.php?product=pt-ascu9pf&ref=<?php echo $_GET['ref']; ?>&refs=pt_purchase_ascu&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'affptascu2016newyear')" class="btn">Compre Agora</a><img src="<?php echo $pResUrl; ?>images/days.png"></p>
      <div class="clear"></div>
      <p class="last"><em><?php echo $buyNum;?></em> Pessoas que já compraram</p>
      <p><img src="<?php echo $pResUrl; ?>images/paypal.jpg"></p>
    </div>
  </div>
</div>
<div class="wrapper">
	<div id="content">
  	<h2>Oferece a melhor proteção e otimização para o seu PC a um preço acessível! <span><strong id="packs"><?php echo $packsNum; ?></strong> Pacotes Restantes para Hoje!</span></h2>
    <div class="content">
    	<img src="<?php echo $pResUrl; ?>images/content.jpg">
      <dl>
      	<dt>O que você vai receber<br>ao ativar a versão ASCU PRO:</dt>
        <dd>Protege você de vírus, spyware, hackers, phishing, botnets e outros malwares</dd>
        <dd>Protege sua privacidade enquanto você navega na internet em tempo real</dd>
        <dd>Acelera, limpa e repara todos os tipos de problemas do PC com um clique</dd>
        <dd>Leve, fácil de usar e compatível com outros produtos de segurança</dd>
        <p><a href="#" onclick="goTaget($('.comparison_table'))"> Saiba mais sobre a versão PRO</a></p>
      </dl>
      <div class="clear"></div>
      <div class="pf">
      	<h2>Principais Características de Protected Folder</h2>
        <img src="<?php echo $pResUrl; ?>images/pf_big.jpg">
        <p style=" margin-top: 15px;">Bloqueia e desbloqueia importantes documentos do Office, fotos, vídeos e outros itens em qualquer formato e qualquer quantidade ao mesmo tempo com somente uma senha</p>
        <p>Mantém suas informações bloqueadas de serem roubadas</p>
      </div>
    </div>
  </div>
  <div class="payment clearfix">
     <img src="<?php echo $pResUrl; ?>images/payments.jpg" alt="">
  </div>  
	<dl class="awards">
      <dt>Prêmios </dt>
      <dd><img src="<?php echo $pResUrl; ?>images/awards.jpg"></dd>
    </dl> 
</div>
<div class="media_rev">
	<div class="wrapper">
    <h3>Opinião da Mídia </h3>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/addictivetips.jpg" alt="addictivetips.com"></dt>
      <dd>"Advanced SystemCare Ultimate é uma ferramenta de otimização de sistema e antivírus poderosa. Além de proteger seu PC de malware, vírus e ameças similares, o software também irá melhorar o desempenho do seu PC através da aplicação de várias correções de registro e de atalho, removendo arquivos inúteis, verificação dos volumes de disco local para vulnerabilidades do sistema, etc."</dd>
      <dd>- Addictivetips</dd>
    </dl>
  </div>
</div>
  <div class="user_rev" id="user_rev">
  <div class="wrapper">
				<h3>Opinião do Usuário</h3>
				<div class="content">
		      <dl class="show">
		        <dd><h4>"Advanced System Care Ultimate é o melhor! "</h4></dd>
		        <dd>“Sempre tive problemas com bagunça em meu computador!  Então adquiri a minha primeira versão de Advanced Systemcare e desde então não tive mais este tipo de problema. Agora que tenho antivírus incluído no produto, não existe mais necessidade de um software secundário. Advanced System Care Ultimate é o Melhor! O meu computador está sempre atualizado e funciona rapidamente. Ao contrário de outros produtos, não tenho mais fluxo constante de conflitos."</dd>
		      </dl>
		      <dl class="hidden">
		        <dd><h4>"Eu recomendo advanced systemcare ultimate como antivírus e otimizador de sistema."</h4></dd>
		        <dd>Na versão anterior de advanced systemcare ultimate, eu quase não tive problemas com sistema, malwares, etc. Agora que está atualizado, com mais recursos no software, meu laptop  está funcionando 5 vezes mais rápido do que antes. Também gosto da nova capa. Assim, sempre que reparo o computador de outra pessoa, eu recomendo advanced systemcare ultimate como antivírus e otimizador de sistema."</dd>
		      </dl>
	    	</div>
	      <ul class="users">
		      <li class="current"><img src="<?php echo $pResUrl; ?>images/rod-garnett.jpg" alt="">Rod Garnett <br></li>
		      <li class=""><img src="<?php echo $pResUrl; ?>images/dareen-lim.jpg" alt="">Dareen Lim<br></li>
	      </ul>
			</div>
      </div>
  </div>
  <div class="comparison_table wrapper">
    <h4>Por que escolher Advanced SystemCare Ultimate 9?</h4>
    <dl class="comtable">
      <dt>Melhor Proteção e não tenha mais problemas de Performance. Veja a comparação abaixo:</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/comparetable.jpg"></dd>
    </dl>
    <dl class="comlist">
      <dt>Taxa de Detecção Incomparável e Proteção Máxima</dt>
      <dd>Um clique para limpar os mais difíceis e escondidos vírus, trojans, worms, spyware, adware e vários outros malwares. Advanced SystemCare Ultimate 9 também fornece uma proteção sempre ativa, automática e proativa contra todos os tipos de ameaças de segurança da internet, com uma rápida atualização do banco de dados de vírus.</dd>
      
      <dt>Desfrute de uma Segurança Confiável Sem Lentidão no Sistema</dt>
      <dd>Seu sistema irá funcionar com máxima velocidade sem nenhum problema de desempenho, devido à nossa tecnologia líder em segurança de Internet. </dd>
      <dt>Navegue, Pesquise e Baixe com Segurança e Compartilhe com Confiaça</dt>
      <dd>Tecnologia de Controle de Vírus proativa que monitora o comportamento dos processos em tempo real, verifica arquivos compartilhados por email e bloqueia possíveis ameaças. Taxa de detecção incomparável garante um ambiente mais seguro enquanto estiver usando seu PC.</dd>
      <dt>Obtenha um Desempenho Altamente ajustado e Desfrute de um PC Novo.</dt>
      <dd>Capacidade poderosa de tune-up do PC comprovada, libera o poder total do seu PC. Com as funções de otimização e ActiveBoost em tempo real, os recursos do sistema são inteligentemente  gerenciados para garantir a você um PC super-rápido.</dd>
    </dl>
  </div>
	<dl class="annotation wrapper">
    <dt>Observe:</dt>
    <dd>1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
    <dd>2*. Todos os brindes se referem a um 1 ano de assinatura/ 1 PC.</dd>
  </dl>  
	<p class="footer">Copyright © 2005 - 2016 IObit. Todos os Direitos Reservados</p>
</div>
</div>
<div class="floatlayer" id="floatlayer">
		<div class="wrapper">
      <dl class="left">
          <dt>Economize  <span>60%</span> e Tenha uma Proteção e um Desempenho Superior!  </dt>
          <dd><em><?php echo $buyNum;?></em>  pessoas que já ativaram</dd>
          <dd id="counttime1"><span></span><span></span></dd>
        </dl>
        <dl class="checkarea">
          <dt> Somente <span> R$ 89,99</span> <del>R$ 285.8</del></dt>
          <dd><a class="btn" href="http://www.iobit.com/buy.php?product=pt-ascu9pf&ref=<?php echo $_GET['ref']; ?>&refs=pt_purchase_ascu&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascubuy', 'buy', 'affptascu2016newyear')">Ative Agora </a></dd>
        </dl>
    </div>
  </div>
  <script>
		$("#user_rev .users li").mouseover(function(event) {
    var num = $(this).index();
    $("#user_rev .users li").each(function(index, el) {
      $(this).removeClass('current');
    });
    $(this).addClass('current');
    $("#user_rev dl").each(function(index, el) {
      $(this).removeClass('show').addClass('hidden')
    });
    $("#user_rev dl").eq(num).removeClass('hidden').addClass('show');
    //
  });
    $(function () {
        $(window).on('scroll', function () {
            var scrollHeight = $("#banner").outerHeight();
            if ($(window).scrollTop() > scrollHeight) {
                $('#floatlayer').addClass('on');
            } else {
                $('#floatlayer').removeClass('on');
            }
        });
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
		document.getElementById('counttime').innerHTML = '<span>'+h+'</span><span>'+i+'</span><span>'+s+'</span><span style="font-size: 14px;">'+mi+'</span>';
		document.getElementById('counttime1').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s: <span>'+mi+'</span><sub>*</sub>';
		setTimeout('cycleCountdown()', 1);
	}
	cycleCountdown();
 </script>
</body>
</html>

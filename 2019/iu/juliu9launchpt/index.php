<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(96,167);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptiulaun_p' . $date;
  $c_name_t='ptiulaun_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
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
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);

$paramPct=$_GET['pct'];
$tagShow=true;
if(!empty($paramPct)){
  $refStr.='-'.$paramPct;
  if($paramPct==2){
    $tagShow=false;
  }
}

$transData=json_decode(base64_decode($_GET['data']));
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tenha 60% de desconto no IObit Uninstaller PRO e aproveite um preço especial - IObit  </title>
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
			<a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
      <!-- title -->
			<h1> Promoção Especial de Lançamento</h1>
			<div class="clearfix">
        <!-- left-message: iu-box -->
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
          <img src="<?php echo getStaticUrl('images/ghost.png')?>" class="ghost"/>
          <span class="disappear"></span>
				</div>
        <!-- right-message -->
				<div class="right fr">
          <div class="message">
            <h2>Adquira o Novo IObit Uninstaller 11 PRO</h2>
            <div class="number">
              <span>Apenas </span>
              <div id="reduce" class="reduceNum">
                <div class="listbox"><span class="list"><b>0</b></span></div>
                <div class="listbox"><span class="list"><b>0</b></span></div>
              </div>
              <span>Pacotes Restantes   </span>
            </div>
            <p><img src="<?php echo getStaticUrl('images/people.png')?>"> <strong class="viewNum"><?php echo $viewNum;?></strong>  usuários estão vendo a página agora </p>
          </div>
          <dl class="price">
            <dt><strong><small>R$</small><b>55</b>,99</strong> <del>R$ 144,99</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=pt-iu113pc5599&ref=pt_iunewlaunch2108<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
                   onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-newlaunch-pt');" 
                   class="buybtn">Ativar Agora</a></dd>
          </dl>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
  <div class="intro">
    <div class="wrapper">
      <h2>O Novo IObit Uninstaller 11 PRO Faz Mais <span></span></h2>
      <div class="message clearfix">
        <h3>1. Além de desinstalar programas indesejados, IObit Uninstaller 11 PRO também deleta:</h3>
        <img src="<?php echo getStaticUrl('images/intro-message.png')?>" class="img-box" alt="" / >
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>"></dt>
          <dd>
            <strong>Programas teimosos  </strong>que não podem ser removidos através da desinstação padrão.
            <?php if($tagShow):?><span>melhorado em  156%</span><?php endif;?>
          </dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>"></dt>
          <dd>
            <strong>Programas em Bundle  </strong>que ocupam espaço em disco sem avisar.
          </dd>
        </dl>
        <div class="clear"></div>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>"></dt>
          <dd>
            <strong>Extensões maliciosas de navegador  </strong>que obtém seus dados pessoais e tentam comprometer a segurança do seu PC.
            <?php if($tagShow):?><span>melhorado em 150%</span><?php endif;?>
          </dd>
        </dl>
        <dl class="right last">
          <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>"></dt>
          <dd>
            <strong>Plugins de anúncios </strong>com anúncios que o seguem onde você estiver surfando na internet.
            <?php if($tagShow):?><span>melhorado em 152%</span><?php endif;?>
          </dd>
        </dl>
      </div>
      <div class="message2 clearfix">
        <h3>2. Além de Sobras de Arquivos, <br> IObit Uninstaller 11 PRO também  </h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
          <dd><strong>Detecta automaticamente  </strong></dd>
          <dd>sobras de programas existents no seu PC antes mesmo de você instalar o IObit Uninstaller 11 PRO e ajuda a removê-los com apenas um clique.</dd>
          <dd><span>único no mercado</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
          <dd><strong>Limpa automaticamente </strong></dd>
          <dd> dados inúteis de programas desinstalados através do método padrão do Windows ou por outros programas.</dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
          <dd><strong>Reverte automaticamente as mudanças </strong> que programas fazem no seu sistema após desinstalá-los.</dd>
          <dd><span>único no mercado</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="intro2">
    <div class="wrapper">
      <h3>3. Ainda Tem Mais Benefícios que Você Não Vai Querer Perder</h3>
      <img src="<?php echo getStaticUrl('images/intro2-message.png')?>" class="img-box"> 
      <ul>
        <li>Saúde do Software - nova função que integra ferramentas fragmentadas;</li>
        <li>Verifica e limpa automaticamente sobras de programas após a desinstalação; <?php if($tagShow):?><span>melhorado em 15%</span><?php endif;?> </li>
        <li>Desinstala múltiplos programas e apps do windows;</li>
        <li>Examina automaticamente e atualiza com 1-clique quando uma nova versão está disponível;</li>
        <li>Assistência técnica 24 horas a sua disposição;</li>
      </ul>
    </div>
  </div>
	<!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>O Que Outros Dizem?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
            <dd>
              <h3>Opinião da Mídia</h3>
              <p>
                "Essa ferramenta informativa e de fácil uso limpa, configura e otimiza seu PC e usuários podem baixar virtualmente num piscar de olhos. Essa ferramenta pode ser categorizada como a melhor ferramenta de desinstalação e permite que usuários desinstalem em lote. Oferece aos usuários a opção de fazer uma "Verificação Profunda" para ir mais fundo e procurar por restos deixados pelo processo de desinstalação. O desempenho por si só já faz essa ferramenta valiosa de se ter."
              </p>
              <h4>MakeUseOf</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>Opinião do Usuário</h3>
              <p>
                "Eu acho IObit Uninstaller excelente para usar e é tudo que eu desejaria. Eu amo o fato que ele desinstala sobras de programas. Também possui um atualizador de programas que lembra você de quando os programas precisa atualização, e desinstala múltiplos programas ao mesmo tempo o que o faz o melhor desinstalador do mercado. É o programa correto para quem quer manter seu computador em ordem."
              </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"/></dt>
            <dd>
              <h3>Opinião do Usuário</h3>
              <p>
                "IObit Uninstaller é provavelmente o melhor aplicativo para removar programas desnecessários do seu computador. Diferentemente do desinstalador padrão do Windows, IObit Uninstaller remove as sobras do programa desinstalado, que poderiam deixar seu PC lento. Eu estive usando esse programa por alguns anos e sempre me ajuda a manter meu computador limpo e rápido. Eu recomendei este programa para alguns dos meus amigos no passado e recomendaria de novo."
              </p>
              <h4>Sergey Erlich</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>Opinião do Usuário</h3>
              <p>
                "IObit Uninstaller é o melhor programa para remover programas do computador, ele é rápido, efetivo e muito superior ao desinstalador básico de Windows. O programa limpa seriamente todos os restos do programa para que não haja atrasos no computador. Eu estive usando por alguns meses e eu não sei como viver sem ele, portanto eu recomendo para meus amigos e família. IObit Uninstaller é fantástico!"
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
            <dd>
              <h3>Opinião do Usuário</h3>
              <p>
                "IObit Uninstaller fica melhor a cada atualização. Eu o tenho usado por 3 anos, o programa carrega rápido e possui uma interface simples. Algumas das funções que uso regularmente são Desinstalação em Lote, Verificação Profunda, Destruidor de Arquivos e a função adicionanda recentemente que me permite ter acesso rápido a programas que eu instalei recentemente ou que não funcionam devidamente. É fácil controlar seus itens de inicialização o que faz seu PC inicializar em menos tempo."
              </p>
              <h4>Lovro Žužić</h4>
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
	<div class="awards">
		<div class="wrapper">
			<h2>Recomendado também por</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h4>Tente GRÁTIS com a nossa Garantia de Reembolso de 60 dias</h4>
            <p>
             Nós confiamos que ativando a versão PRO irá desinstalar rapidamente programas desnecessários por um preço acessível!
            </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Nós aceitamos</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
        </dl>
      </div>
			<dl class="annotation">
				<dt>Observe:</dt>
				<dd>
					1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.
				</dd>
        <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl"> 
        <img src="<?php echo getStaticUrl('images/fl-ghost.png')?>" class="ghost"/>
        <span class="disappear"></span>
        </div>
      <div class="message">
        <div class="number">
          <span>Corra, Apenas </span>
          <div id="fReduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          <span> Pacotes Restantes  </span>
        </div>
        <p><strong class="viewNum"><?php echo $viewNum;?></strong> usuários estão vendo a página agora</p>
      </div>
      <div class="price">
        <a href="https://www.iobit.com/buy.php?product=pt-iu113pc5599&ref=pt_iunewlaunch2108<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-newlaunch-pt');" class="buybtn">Aproveitar Agora </a>
      </div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
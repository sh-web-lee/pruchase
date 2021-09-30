<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Adquira Advanced SystemCare 14 Pro com IObit Uninstaller 11 Pro com 70% de desconto. Oferta Especial da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="http://www.iobit.com" target="_blank">iobit</a>
    <h1>IObit Uninstaller PRO  Promoção de Natal</h1>
    <h2> <span></span> <strong>     Corra, o Tempo está Acabando!  </strong> <strong>15</strong>Hor : <strong>15</strong>Min : <strong>15</strong>Sec : <strong>15</strong>MS <sup>*</sup> <span></span></h2>
    <div class="container clearfix">
      <dl class="left">
        <dt>IObit Uninstaller PRO</dt>
        <dd><img src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt="" class="box"></dd>
        <dd><strong><span>R$</span>55,99 </strong><del>R$ 99,00</del></dd>  
        <dd><a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-iu113pc5599&ref=pt_iu3pc2108<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_iu" onclick="ga('send', 'event', 'asciubuy', 'buy', 'iu3pcpurchase202108-pt')"> Ativar Agora</a></dd>
        <dd class="last">
          <p class="no">Internet até 300% mais Rápido</p>
          <p class="no">PC até 200% mais Rápido</p>
          <p class="no">Proteção da Privacidade</p>
          <p class="no">Limpeza mais Profunda e Manutenção do PC</p>
          <p>Economize R$ 43,00</p>
        </dd>
      </dl>
      <dl class="right">
        <dt>Advanced SystemCare PRO<span> IObit Uninstaller PRO</span></dt>
        <dd><img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="" class="box"></dd>
        <dd><strong><span>R$</span>76,99 </strong><del>R$ 299,89</del></dd>
        <dd><a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-asc14iu113pc7699&ref=pt_iuasc3pc2108<?php echo $refStr;?>&refs=pt_purchase_asciu" onclick="ga('send', 'event', 'asciubuy', 'buy', 'iuascpurchase202108-pt')">Ativar Agora</a></dd>
        <dd class="last">
          <p>Internet até 300% mais Rápido</p>
          <p>PC até 200% mais Rápido</p>
          <p>Proteção da Privacidade</p>
          <p>Limpeza mais Profunda e Manutenção do PC</p>
          <p>Economize <strong>R$ 222,90</strong> </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<div class="product">
  <h2>Obtenha um Desempenho Superior e um PC e Navegação mais Limpos</h2>
  <div class="wrapper">
    <dl class="left">
      <dt><img src="<?php echo $pResUrl; ?>images/product-sale.png" alt=""><strong> Ao ativar Advanced SystemCare PRO <br> você obtém</strong></dt>
      <dd>Acelera sua Internet em até 300%</dd>
      <dd>Acelera seu PC Lento em até 200% * </dd>
      <dd>Protege o PC contra Ameaças Maliciosas e Rastreamento</dd>
      <dd>Limpeza de 1-clique e Reparo de Diversos Tipos de Problemas no PC</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/product-free.png')?>" alt=""><strong>IObit Uninstaller PRO</strong></dt>
      <dd>Detecta e Desinstala Bundleware e Plugins em Bundle</dd>
      <dd>Navegação mais Rápida e Segura com a Remoção de Toolbars Maliciosas</dd>
      <dd>Verifica e Remove Programas com Problemas de Desinstalação e Todas as Sobras</dd>
      <dd>Atualiza Programas Importantes com 1-Clique </dd>
    </dl>
  </div>
</div>
<dl class="awards wrapper">
  <dt>Recomendado também por:</dt>
  <dd><img src="<?php echo $pResUrl; ?>images/awards.jpg" alt=""></dd>
</dl>
<p class="wrapper windows"><img src="<?php echo $pResUrl; ?>images/windows.png" alt="">Compatível com Windows 10, 8, 7, Vista e XP sp3</p>
<div class="foot-banner">
  <div class="wrapper">
    <h2><strong>COMPRE AGORA</strong> para Conseguir ASC PRO e IObit Uninstaller PRO</h2>
    <img src="<?php echo getStaticUrl('images/bottom-asc.png')?>" alt="" class="smail-gift">
    <dl>
      <dt>APENAS  <strong> <span>R$</span> 76,99</strong> <del>R$ 299,89</del></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=pt-asc14iu113pc7699&ref=pt_iuasc3pc2108<?php echo $refStr;?>&refs=pt_purchase_asciu" onclick="ga('send', 'event', 'asciubuy', 'buy', 'iuascpurchase202108-pt')" class="buybtn">Ativar Agora</a></dd>
      <dd><img src="<?php echo $pResUrl; ?>images/safe.png" alt="">Garantia 100% de Reembolso em 60 Dias</dd>
    </dl>
  </div>
</div>
<dl class="wrapper annotation">
  <dt>Observe:</dt>
  <dd>1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
  <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
</dl>
<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. Todos os Direitos Reservados</p>
<script type="text/javascript">
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $('.banner h2 strong').eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();
</script>
</body>
</html>


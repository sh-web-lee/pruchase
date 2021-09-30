<?php //  初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
if (empty($_GET['ref'])) $_GET['ref'] = 'pt_db3sdiupurchase1601';
$buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;

$packsNum = ceil(microtime_float() * 2000 / 20000);
$packsNum = 360 - ($packsNum % 360);
if ($_GET['action'] == 'getPacks') {
  echo $packsNum;
  exit ;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Até 75% de desconto em Driver Booster PRO - IObit 2016</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
    <script type="text/javascript">function decreasingPacks() {
      $.ajax({
        type: "GET",
          url: "index.php",
          data: "action=getPacks&r=" + Math.random(),
          success: function(packs) {
            $('#packs, #packs-floatlayer').html(packs);
            setTimeout('decreasingPacks()', 10000);
          }
        });
      }
      setTimeout('decreasingPacks()', 10000);
    </script>
  </head>
  <body>
    <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
    <div class="header wrapper">
      <a href="http://www.iobit.com" target="_blank" class="logo"><img src="<?php echo $pResUrl; ?>images/logo.jpg"></a>
      <h1>PROMOÇÃO ESPECIAL!<span>Em comemoração aos mais de 3,000,000 de Usuários de Driver Booster PRO</span></h1>
      <ul id="counttime">
        <li>00</li>
        <li>00</li>
        <li>00</li>
        <li>000</li>
      </ul>
      <div class="date-line"></div>
    </div>
    <div class="banner">
      <div class="wrapper">
        <p>Compre DB 3 PRO e você receberá dois Super Presentes <span>GRÁTIS!</span></p>
        <dl>
          <dt>Agora por Apenas R$<strong>79,99</strong>   <del>preço original R$ 307,85</del></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=pt-db3sdiu&ref=<?php echo $_GET['ref']; ?>&refs=pt_purchase_db&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'affptdb2016newyear');" class="buybtn"><span></span>Compre Agora</a></dd>
          <dd><em><?php echo $buyNum;?></em> pessoas já ativaram</dd>
          <dd><img src="<?php echo $pResUrl; ?>images/paypal.jpg" alt=""></dd>
        </dl>
      </div>
    </div>
    <div class="title">
      <h2>Otimize o desempenho do seu PC com a atualização dos seus drivers!</h2>
      <p><em id="packs"><?php echo $packsNum; ?></em> Pacotes Restantes para Hoje!</p>
    </div>
    <div id="content">
      <div class="db">
        <div class="wrapper">
          <img src="<?php echo $pResUrl; ?>images/db.jpg">
          <dl>
            <dt>Driver Booster 3 PRO:</dt>
            <dd>Suporta Mais Dispositivos do Hardware</dd>
            <dd>Velocidade 300% mais rápida dos drivers atualizados</dd>
            <dd>Reparo de Problemas do Sistema Causados por Drivers Desatualizados</dd>
            <dd>Backup de Drivers para Restauração Segura</dd>
            <dd class="link"><a href="javascript:;" onclick="goTaget($('.comparison_table'),160)"> Saiba mais sobre a versão PRO  >></a></dd>
          </dl>
        </div>
        <div class="clear"></div>
      </div>
      <div class="sd-iu wrapper">
        <dl class="sd">
          <dt><img src="<?php echo $pResUrl; ?>images/sd-boxshot-gift.jpg"></dt>
          <dd class="itema"><h2>Smart Defrag 5 PRO</h2></dd>
          <dd>Acesso Rápido aos Arquivos</dd>
          <dd>Acelere o seu PC 100%</dd>
          <dd>Desfragmentação do Disco Rígido de forma Automática e Segura</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/iu-boxshot-gift.jpg"></dt>
          <dd class="itema"><h2>IObit Uninstaller 5 PRO</h2></dd>
          <dd>Desinstalação Segura e Poderosa</dd>
          <dd>Aproveite um PC mais Rápido e Limpo</dd>
          <dd>Exclua de forma segura apps pré-instalados no windows 10</dd>
        </dl>
      </div>
      <div class="clear"></div>
    </div>
    <dl class="awards wrapper">
      <dt>Prêmios </dt>
      <dd><img src="<?php echo $pResUrl; ?>images/awards.jpg"></dd>
    </dl>

    <div class="media_rev">
      <div class="wrapper">
        <h3>Opinião da Mídia</h3>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/media_muf.jpg" alt=""></dt>
          <dd>"Driver Booster de IObit promove uma fácil solução  por meio de sua avançada tecnologia de atualização de drivers, agindo como um centro de comando all-in-one. Todos os drivers estão listadas na interface do aplicativo, tornando a atualização dos drivers um processo super fácil. Baixar e instalar drivers com este atualizador de drivers é algo simples e muitas vezes leva apenas alguns minutos (ou menos). "</dd>
          <dd>- MakeUseOf</dd>
        </dl>
      </div>
    </div>
    <div class="wrapper">
      <div class="user_rev" id="user_rev">
        <div class="wrapper">
          <h3>Opinião do Usuário</h3>
          <div class="content">
            <dl class="show">
              <dd><h4>"Eu tinha 10 drivers desatualizados e Driver Booster atualizou todos perfeitamente."</h4></dd>
              <dd>"WOW! É um ótimo programa. Eu mudei meu laptop de dual core para quad e estava tendo problemas com a atualização do hardware que eu tinha instalado.Haviam 10 drivers que estavam desatualizados e Driver Booster atualizou todos perfeitamente. Meu laptop está completamente atualizado e funcionando muito bem. BOM TRABALHO.......Eu irei recomendar este programa para toda a minha família e amigos."</dd>
            </dl>
            <dl class="hidden">
              <dd><h4>"Funciona perfeitamente. Muito fácil de usar, informativo e intuitivo. Este programa ficará em minha caixa de ferramentas para sempre ...Bom trabalho!"</h4></dd>
              <dd>"Este software é o melhor atualizador de drivers. Mesmo a Microsoft me deixou perdido sugerindo me atualizações que não funcionaram em minha máquina. Este programa conhece todas as atualizações necessárias sem nenhum conflito. Funciona perfeitamente. Muito fácil de usar, informativo e intuitivo. Este programa ficará em minha caixa de ferramentas para sempre ...Bom trabalho!"</dd>
            </dl>
            <dl class="hidden">
              <dd><h4>"Driver Booster encontrou duas atualizações necessárias enquanto os outros programas falharam em encontrar.”</h4></dd>
              <dd>"Instalei recentemente Driver Booster e achei o programa brilhante como todos os outros produtos IObit. Eu já tinha um atualizador de driver instalado, mas Driver Booster encontrou duas atualizações necessárias, enquanto os outros programas falharam em encontrar. O programa baixou as atualizações solicitadas rapidamente! Eu estou muito satisfeito com este produto."</dd>
            </dl>
          </div>
          <ul class="users">
            <li class="current" style="margin-left: 120px;"><img src="<?php echo $pResUrl; ?>images/bob-bassett.jpg" alt="">Mike Goggans</li>
            <li class=""><img src="<?php echo $pResUrl; ?>images/almirr.jpg" alt="">Wayne Bowler</li>
            <li class=""><img src="<?php echo $pResUrl; ?>images/gordon.jpg" alt="">Leslie Hutton</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-buy">
      <dl class="wrapper">
        <dt>Economize agora <em>75%</em> em DB PRO e ganhe IU e SD gratuitamente. <span> <strong><?php echo $buyNum;?></strong> pessoas já ativaram</span></dt>
        <dd>Agora por Apenas R$<strong>79,99</strong>   <del>de R$ 307,85</del></dd>
        <dd><a href="http://www.iobit.com/buy.php?product=pt-db3sdiu&ref=<?php echo $_GET['ref']; ?>&refs=pt_purchase_db&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'affptdb2016newyear');" class="buybtn"><span></span>Compre Agora</a></dd>
      </dl>
    </div>
    <dl class="annotation">
    	<dt>Observe:</dt>
    	<dd>1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
    </dl>
    <p class="footer">Copyright © 2005 - 2016 IObit. Todos os Direitos Reservados</p>
    <div class="floatlayer" id="floatlayer">
    		<div class="wrapper">
          <dl class="left">
              <dt>Economize <span>75%</span> e você ainda receberá proteção </dt>
              <dd><span>adicional para o seu PC!</span><em><?php echo $buyNum;?></em> pessoas já ativaram</dd>
            </dl>
            <dl class="checkarea">
              <dt>Agora por Apenas <span>R$<strong>79,99</strong></span> <del>de R$307,85</del></dt>
              <dd><a class="buybtn" href="http://www.iobit.com/buy.php?product=pt-db3sdiu&ref=<?php echo $_GET['ref']; ?>&refs=pt_purchase_db&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'affptdb2016newyear');"><span></span>Compre Agora</a></dd>
            </dl>
        </div>
      </div>
    <script>
      $(document).ready(function() {
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
          });

          $(window).on('scroll', function () {
            var scrollHeight = $(".banner .buybtn").offset().top;
            if ($(window).scrollTop() > scrollHeight) {
                $('#floatlayer').addClass('on');
            } else {
                $('#floatlayer').removeClass('on');
            }
          });

          cycleCountdown();
        });
        
         function goTaget(target,yoffset) {
            if(!yoffset) yoffset = 0;
            var Theigth = target.offset().top - yoffset;
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
          document.getElementById('counttime').innerHTML = '<li>'+h+'</li><li>'+i+'</li><li>'+s+'</li><li>'+mi+'</li>';
          setTimeout('cycleCountdown()', 1);
      }
    </script>
  </body>
</html>

<?php
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

$reduceNum=49683478;
$buyNum = ceil(microtime_float() * 1000 / 30000)-$reduceNum;
$buyNum = number_format($buyNum);

// $refStr='';
// if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
//     'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
//     'sdfeatures_noaction','sdddact_noaction','actreport'))){
//   $refStr.='-'.$_GET['ref'];
// }

if(!empty($_GET['ver'])){
    $ver = explode('.',$_GET['ver']);
    $refStr .= '-'.$ver[3];
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adquira Smart Defrag 7 Pro para 3 PCs com 35% de desconto. Oferta Limitada da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>   
  <script type="text/javascript">
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>r="+Math.random()+"&reTime=30",
      success: function(packs){
        $('.buy-num').html(strFormat(packs));
        setTimeout('getBuyNum()', 30000);
      }
    });  
  }
  setTimeout('getBuyNum()', 30000);
  </script>   
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>A FERRAMENTA DEFINITIVA PARA CUIDAR DO SEU HD/SSD!</h1>
      <p class="subhead">Compre Smart Defrag Pro com e leve suporte para 2PCs extras!</p>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/sdbox.png')?>" alt="" />
          <ul id="countdown" class="countdown">
            <li><strong>05</strong></li>
            <li><strong>30</strong></li>
            <li><strong>60</strong></li>
            <li class="last"><strong>60</strong></li>  
          </ul>
        </div>
        <div class="right fr">
          <h2>Smart Defrag 7 Pro - 1 ano / 3 PCs</h2>
          <p>Otimiza o seu disco para um PC mais r??pido</p>
          <div class="price">
            <p class="original">De <del>R$ 119,99</del></p>
            <p class="discount">6x de <strong>R$ 12,83</strong></p>
            <p>ou <b>R$ 76,99</b> a vista</p>
          </div>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-sd63pc7699&ref=pt_sd6purchase1803<?php echo $refStr;?>&refs=pt_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd63pcpurchase1803-pt')">
            COMPRAR AGORA
          </a>
          <p class="people"><i></i> Mais de <b class="buy-num"><?php echo $buyNum;?></b> pessoas j?? compraram</p>
          <div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" /></div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <h2>Entenda como o Smart Defrag PRO pode otimizar seu PC!</h2>
    <div class="box clearfix">
      <div class="left fl">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
          <dd>
            <h3>Acesso 200% mais R??pido <span>aos Arquivos*</span></h3>
            <p>Com Acelera????o de Disco Inteligente,  voc?? ter?? melhor</p>
            <p>desempenho e acesso mais veloz aos seus arquivos.</p>
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
          <dd>
            <h3 class="two">Desfragmenta????o Autom??tica</h3>
            <p>A vers??o PRO desfragmenta arquivos fragmentados</p>
            <p>durante o tempo ocioso para proteger seu disco.</p>
            </p>
          </dd>
        </dl>
      </div>
      <div class="right fr">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
          <dd>
            <h3>Motor Ultra-Veloz de <span>Desfragmenta????o</span></h3>
            <p>Tenha acesso ao mais veloz motor de desfragmenta????o</p>
            <p>dispon??vel para Windows.</p>
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
          <dd>
            <h3>Inicializa????o mais R??pida</h3>
            <p>Desfragmenta o registro e arquivos do sistema antes</p>
            <p>da inicializa????o para acelerar seu sistema.</p>
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <a class="clique" href="javascript: void(0);">Clique aqui e compare fun????o por fun????o a vers??o Free a vers??o Pro ></a>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>
        Smart Defrag Pro j?? otimizou o disco r??gido de mais de <b class="buy-num"><?php echo $buyNum;?></b> de PCs.
        <span>Chegou a hora de cuidar do seu.</span>
      </h2>
      <div class="clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="Hans" /></dt>
          <dd>
            <h3>Hans</h3>
            <p>
              "Sou um usu??rio do Smart Defrag por muitos anos. Desde que passei a usar esse software fant??stico, meu desktop e meu laptop est??o r??pidos e seguros. Juntamente com o Advanced System Care Ultimate, voc?? tem uma ferramenta completa para manter seu sistema atualizado, r??pido e seguro. Estou usando ele todos os dias, sem a necessidade de esperar (o PC desliga automaticamente) e ele mant??m o meu sistema nas melhores condi????es! " 
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/william-howez.png')?>" alt="William Howez" /></dt>
          <dd>
            <h3>William Howez</h3>
            <p>
              "Eu estive usando produtos da IObit por alguns anos. Eu estou rodando uma m??quina velha com 6 discos, incluindo 2 externos e Smart Defrag Pro da IObit me ?? muito ??til, j?? que meu PC ?? velho e meu sistema costuma fragmentar com facilidade. Configurando o meu Smart Defrag 7 Pro para "desfragmenta????o autom??tica" e o executando uma vez por semana, meu PC fica rodando perfeitamente. "
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Pr??mios da Empresa</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- comparison start -->
    <div id="compare" class="comparison">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Veja o que a edi????o PRO pode fazer por voc??:</th>
            <th class="speac"></th>
            <th class="itema">Smart Defrag <span>FREE</span></th>
            <th class="speac"></th>
            <th class="itemb">Smart Defrag PRO <p>1 Ano, 3 PCs  + Brinde</p></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Desfragmenta????o e Otimiza????o B??sicas para o Disco R??gido</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Velocidade de Acesso aos Arquivos at?? 200% Mais R??pido</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Desfragmenta????o no Boot para uma Inicializa????o Mais R??pida do PC</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Desfragmente automaticamente de forma inteligente os Arquivos Fragmentados</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Modo Customizado de Desfragmenta????o &amp; Discos/Arquivos a Serem Desfragmentados</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">DMA Aplicado para uma Transfer??ncia de Dados Melhor, Maior &amp; Mais Est??vel</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Sem interrup????es no Trabalho ou Jogo com o Modo Silencioso</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Experi??ncia Top ao Jogar com a Otimiza????o de Jogos</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Suporte a Agendamento de Tarefas para Desfragmenta????o em Modo Ocioso</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Atualiza????o Autom??tica para Vers??o mais Recente</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Suporte T??cnico Gratuito 24 horas por Dia</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">???</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">???</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <h2>Com apenas R$ 0,21 por dia, voc?? desfruta do desempenho m??ximo do seu Disco R??gido</h2>
      <p>Assine por um ano e leve Smart Defrag Pro para 2 PCs extras. </p>
      <dl class="clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/sdbox-sm.png')?>" alt="" /></dt>
        <dd class="fl">
          <p>6x de <strong>R$ 12,83</strong> (ou R$ 76,99 a vista)</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-sd63pc7699&ref=pt_sd6purchase1803<?php echo $refStr;?>&refs=pt_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd63pcpurchase1803-pt')">
            COMPRAR AGORA
          </a>
          <p>Economize <b>R$ 43,00</b></p>
        </dd>
      </dl>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><h3>Garantia de Reembolso</h3></dt>
        <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
      </dl>
      <dl>
        <dt><h3>Atendimento 24 Horas</h3></dt>
        <dd><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dd>
      </dl>
      <dl>
        <dt><h3>Pagamento 100% Seguro</h3></dt>
        <dd><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dd>
      </dl>
    </div>
    <!-- service end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Observe:</dt>
      <dd>1*.Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempos em tempos conforme nossos crit??rios.</dd>
      <dd>2*.Informa????es podem variar com base em diferentes sistemas ou computadores.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</div>
    <!-- footer end -->
  </div>

  <script>
    $.fn.target=function (target,yoffset) {
      $(this).click(function() { 
        if(!yoffset) yoffset = 0;
        var Theigth = target.offset().top - yoffset;
        $("html, body").animate({scrollTop: Theigth}, 'slow');
      });
    };
    var countdown = function (countdown){
      getCycleCountdown();
      $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
      setTimeout("countdown('"+ countdown +"')", 1);
    };
    function getCycleCountdown () {
      var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
      var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
      d = MApp(2.2).packages.zeroize(datetime[0], 2);
      h = MApp(2.2).packages.zeroize(datetime[1], 2);
      i = MApp(2.2).packages.zeroize(datetime[2], 2);
      s = MApp(2.2).packages.zeroize(datetime[3], 2);
      mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,2);
    }
    function strFormat(str){
        return str.replace(/,/g,'.');
    }
    $(function(){
     $(".clique").target($("#compare"),0);
     countdown((".countdown strong"));
     $('.buy-num').html(strFormat($('.buy-num').html()));
    });
  </script>

</body>
</html>
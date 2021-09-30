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
  <title>Adquira Smart Defrag Pro com 65% de desconto e leve um super brinde. Oferta Especial de Natal da IObit.  </title>
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
      <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>PROMOÇÃO DE NATAL</h1>
      <p class="subhead">Aproveite a melhor oferta de 2020 para cuidar do seu HD/SSD e leve um brinde grátis!</p>
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
          <h2>Smart Defrag 6 Pro - 1 ano / 3 PCs</h2>
          <p class="first"> + IObit Software Updater 3 PRO (Grátis!)</p>
          <div class="price">
            <p class="original">De <del>R$ 199,98</del></p>
            <p class="discount">6x de <strong>R$ 11,17</strong></p>
            <p>ou <b>R$ 66,99</b> a vista</p>
          </div>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-sd63pcisu6699&ref=pt_sd6purchase2011<?php echo $refStr;?>&refs=pt_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2011-pt')">
            COMPRAR AGORA
          </a>
          <p class="people"><i></i> Mais de <b class="buy-num"><?php echo $buyNum;?></b> pessoas já compraram</p>
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
            <h3>Acesso 200% mais Rápido <span>aos Arquivos*</span></h3>
            <p>Com Aceleração de Disco Inteligente,  você terá melhor</p>
            <p>desempenho e acesso mais veloz aos seus arquivos.</p>
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
          <dd>
            <h3 class="two">Desfragmentação Automática</h3>
            <p>A versão PRO desfragmenta arquivos fragmentados</p>
            <p>durante o tempo ocioso para proteger seu disco.</p>
            </p>
          </dd>
        </dl>
      </div>
      <div class="right fr">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
          <dd>
            <h3>Motor Ultra-Veloz de <span>Desfragmentação</span></h3>
            <p>Tenha acesso ao mais veloz motor de desfragmentação</p>
            <p>disponível para Windows.</p>
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
          <dd>
            <h3>Inicialização mais Rápida</h3>
            <p>Desfragmenta o registro e arquivos do sistema antes</p>
            <p>da inicialização para acelerar seu sistema.</p>
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <a class="clique" href="javascript: void(0);">Clique aqui e compare função por função a versão Free a versão Pro ></a>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>
        Smart Defrag Pro já otimizou o disco rígido de mais de <b class="buy-num"><?php echo $buyNum;?></b> de PCs.
        <span>Chegou a hora de cuidar do seu.</span>
      </h2>
      <div class="clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="Hans" /></dt>
          <dd>
            <h3>Hans</h3>
            <p>
              "Sou um usuário do Smart Defrag por muitos anos. Desde que passei a usar esse software fantástico, meu desktop e meu laptop estão rápidos e seguros. Juntamente com o Advanced System Care Ultimate, você tem uma ferramenta completa para manter seu sistema atualizado, rápido e seguro. Estou usando ele todos os dias, sem a necessidade de esperar (o PC desliga automaticamente) e ele mantém o meu sistema nas melhores condições! " 
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/william-howez.png')?>" alt="William Howez" /></dt>
          <dd>
            <h3>William Howez</h3>
            <p>
              "Eu estive usando produtos da IObit por alguns anos. Eu estou rodando uma máquina velha com 6 discos, incluindo 2 externos e Smart Defrag Pro da IObit me é muito útil, já que meu PC é velho e meu sistema costuma fragmentar com facilidade. Configurando o meu Smart Defrag 6 Pro para "desfragmentação automática" e o executando uma vez por semana, meu PC fica rodando perfeitamente. "
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Prêmios da Empresa</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
  </div>
  <!-- awards end -->

  <!-- comparison start -->
  <div id="compare" class="comparison">
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Veja o que a edição PRO pode fazer por você:</th>
            <th class="speac"></th>
            <th class="itema">Smart Defrag <span>FREE</span></th>
            <th class="speac"></th>
            <th class="itemb">Smart Defrag PRO <p>1 Ano, 3 PCs  + Brinde</p></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Desfragmentação e Otimização Básicas para o Disco Rígido</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Velocidade de Acesso aos Arquivos até 200% Mais Rápido</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Desfragmentação no Boot para uma Inicialização Mais Rápida do PC</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Desfragmente automaticamente de forma inteligente os Arquivos Fragmentados</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Modo Customizado de Desfragmentação &amp; Discos/Arquivos a Serem Desfragmentados</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">DMA Aplicado para uma Transferência de Dados Melhor, Maior &amp; Mais Estável</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Sem interrupções no Trabalho ou Jogo com o Modo Silencioso</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Experiência Top ao Jogar com a Otimização de Jogos</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Suporte a Agendamento de Tarefas para Desfragmentação em Modo Ocioso</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Atualização Automática para Versão mais Recente</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Suporte Técnico Gratuito 24 horas por Dia</td>
            <td class="speac"></td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="speac"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy wrapper">
    <h2>Com apenas R$ 0,18 por dia, você desfruta do desempenho máximo do seu Disco Rígido</h2>
    <p>Assine por um ano para 3 PCs e leve IObit Software Updater 3 PRO grátis</p>
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/sdbox-sm.png')?>" alt="" /></dt>
      <dd class="fl">
        <p>6x de <strong>R$ 11,17</strong> (ou R$ 66,99 a vista)</p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-sd63pcisu6699&ref=pt_sd6purchase2011<?php echo $refStr;?>&refs=pt_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2011-pt')">
          COMPRAR AGORA
        </a>
        <p>Economize <b>R$ 132,99</b></p>
      </dd>
    </dl>
  </div>
  <!-- footbuy end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
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
  <dl class="annotation wrapper">
    <dt>Observe:</dt>
    <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
    <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
  </dl>
  <!-- annotation end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</div>
  <!-- footer end -->

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
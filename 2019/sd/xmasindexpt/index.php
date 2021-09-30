<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','officialfree','officialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr','crcur',
        'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
        'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3',
        'sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport')
)){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='1';
}

if(in_array($_GET['ref'],array('nc_fr'))){
  $refStr.='-'.$_GET['ref'];
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc','xi_asc','xb_asc','xr_sd'))){
  $refStr.='-'.$_GET['pop'];

}
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira Smart Defrag 6 Pro com 65% de desconto e leve um super brinde para manter todos os seus programas atualizados. Oferta Especial de Ano Novo da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>PROMOÇÃO ESPECIAL DE ANO NOVO</h1>
      <p>Compre Smart Defrag Pro durante o Ano Novo com desconto e obtenha um super brinde grátis</p>
    </div>
    <!-- message -->
    <div class="message clearfix">

      <!-- 1pc asc -->
      <div class="message-box small fl">
        <!-- off -->
        <div class="off">35% OFF</div>
        <!-- box -->
        <div class="box"><img src="<?php echo getStaticUrl('images/sd-three-box.png')?>" alt=""/></div>
        <!-- price -->
        <p class="price"><span>R$ <big>76,99</big></span> <del>R$ 119,99</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-sd63pc7699&ref=pt_sd6purchase1911<?php echo $refStr;?>&refs=pt_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd6purchase1911-pt')  ">
          <i class="all-icons"></i> COMPRAR AGORA
        </a>
      </div>

      <!-- 3pc asc -->
      <div class="message-box large fr">
        <!-- off -->
        <div class="off">65% OFF</div>
        <!-- box -->
        <div class="box">
          <img src="<?php echo getStaticUrl('images/sd-three-box.png')?>" alt=""/>
          <span class="gift"></span>
        </div>
        <!-- price -->
        <p class="price large"><span>R$ <big>59,99</big></span> <del>R$ 199,98</del></p>
        <!-- buybtn -->
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=pt-sd63pcisu5999&ref=pt_sd63pcisupurchase1911<?php echo $refStr;?>&refs=pt_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd6purchase1911-pt')">
          <i class="all-icons"></i> COMPRAR AGORA
        </a>
        <!-- countdown -->
        <p class="countdown">
          <i class="all-icons"></i>
          <strong>00</strong> Horas :
          <strong>00</strong> Min :
          <strong>00</strong> Seg :
          <strong class="last">000</strong>Ms*
        </p>
        <div class="mask"><span></span></div>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment wrapper">
  <img src="<?php echo getStaticUrl('images/payment.png')?>images/payment.png" alt="">
</div>
<!-- end payment -->

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
          <h3 class="two">Desfragmentação <span>Automática</span></h3>
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

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- title -->
    <h2>Leve este super brinde grátis durante a promoção de Ano Novo</h2>
    <!-- gifts message -->
    <div class="gifts-message clearfix">
      <!-- isu -->
      <div class="gifts-box last">
        <dl class="isu">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon03.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>IObit Software Updater 2 PRO</h3>
            <em>1 ano / 3 PCs</em>
            <span class="arrow"></span>
            <ul>
              <li>Atualiza automaticamentes todos os seus programas de acordo com as suas preferências.</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
    <!-- buybtn -->
    <a class="buybtn large"
       href="https://www.iobit.com/buy.php?product=pt-sd63pcisu5999&ref=pt_sd63pcisupurchase1911<?php echo $refStr;?>&refs=pt_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd6purchase1911-pt')">
      <i class="all-icons"></i> COMPRAR AGORA
    </a>
  </div>
</div>
<!-- end gifts -->

<!-- comparison start -->
<div id="compare" class="comparison wrapper">
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
<!-- comparison end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Opinião da Mídia</span></h2></dt>
          <dd>
            <p>
              "IObit Smart Defrag 5 otimiza o seu PC para tirar o máximo proveito do desempenho do SSD, enquanto desfragmenta seus discos rígidos. Sua ferramenta SSD Trim ativa automaticamente ajustes de sistema que normalmente requerem experiência para serem feitos. As atualizações do Smart Defrag 5 incluem um novo mecanismo de desfragmentação, um desfragmentador especializado em Jogos, uma interface com cara nova, e muito mais opções de idiomas (35)."
            </p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Opinião do Usuário</span></h2></dt>
          <dd>
            <p>
              "Eu estive usando produtos da IObit por alguns anos. Eu estou rodando uma máquina velha com 6 discos, incluindo 2 externos e Smart Defrag 5 Pro da IObit me é muito útil, já que meu PC é velho e meu sistema costuma fragmentar com facilidade. Configurando o meu Smart Defrag 5 Pro para "desfragmentação automática" e rodando um "desfragmentar e otimizar" uma vez por semana, meu PC fica rodando perfeitamente. IObit está sempre atualizando e se esforçando para melhorar ainda mais o programa. Estou muito satisfeito com o produto."
            </p>
            <cite>William Howes</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Opinião do Usuário</span></h2></dt>
          <dd>
            <p>
              "Eu opero com uma combinação de RAID 0 SSDs e RAID 0 HDDs e uso o Smart Defrag Pro para analisar, desfragmentar e manter meus drivers funcionando com desempenho máximo. Tal como acontece com todos os softwares IObit, ele é fácil de instalar, usar e é muito confiável. Basta configurá-lo e deixá-lo rodando. Smart Defrag requer pouco espaço na memória então ele não irá desacelerar o seu sistema. Definitivamente recomendado!"
            </p>
            <cite>Edward Lee Ah Yen</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Opinião do Usuário</span></h2></dt>
          <dd>
            <p>
              "Eu uso Smart Defrag desde sua criação, eu já o testei em diversos PCs e desde o começo membros do meu clube de informática foram capazes de notar as melhorias contínuas. Era perfeito para eles, exceto pelo inglês. Então investi na IObit para a tradução em francês. Desde então, as revistas francesas de TI recomendam Smart Defrag, junto com o Otimizador do Windows 10, para um diagnóstico mais robusto e preciso com opções para melhorar a inicialização do sistema."
            </p>
            <cite>Roland Lalis</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Opinião do Usuário</span></h2></dt>
          <dd>
            <p>
              "Eu não sei como eu poderia estar mais satisfeito com Smart Defrag v5. Toda vez funciona que é uma maravilha, tudo o que eu tenho que fazer é rodar o programa e ele limpa tudo, me deixando 100% satisfeito não apenas com o programa, mas também com a resposta rápida que ele me dá sempre que eu preciso de um conselho de como resolver algum problema que eu tenha encontrado. Eu gosto muito disso."
            </p>
            <cite>Jim Parten</cite>
          </dd>
        </dl>
      </div>
      <ul>
        <li class="two" data-num="3"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten"></li>
        <li class="three" data-num="4"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
        <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/william-howes.png')?>" alt="William Howes"></li>
        <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></li>
        <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/roland-lalis.png')?>" alt="Roland Lalis"></li>
      </ul>
      <!-- <ul>
        <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten"></li>
        <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></li>
        <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></li>
        <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
        <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/william-howes.png')?>" alt="William Howes"></li>
        <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></li>
        <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/roland-lalis.png')?>" alt="Roland Lalis"></li>
      </ul> -->
    </div>
  </div>
</div>
<!-- review end -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- box -->
    <div class="box fl">
      <img src="<?php echo getStaticUrl('images/sd-three-box.png')?>" alt=""/>
      <span class="gift"></span>
    </div>
    <!-- bottombuy-mid -->
    <div class="bottombuy-mid fl">
      <!-- countdown -->
      <p class="countdown">
        <strong>00</strong> Horas :
        <strong>00</strong> Min :
        <strong>00</strong> Seg :
        <strong class="last">000</strong>Ms*
      </p>
      <!-- off -->
      <div class="off"></div>
    </div>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price large"><span>R$ <big>59,99</big></span> <del>R$ 199,98</del></p>
        <!-- buybtn -->
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=pt-sd63pcisu5999&ref=pt_sd63pcisupurchase1911<?php echo $refStr;?>&refs=pt_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd6purchase1911-pt')">
          <i class="all-icons"></i> COMPRAR AGORA
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

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
<div class="footer wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</div>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
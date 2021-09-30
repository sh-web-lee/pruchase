 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';


$refStr='';
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira IObit Uninstaller 9 Pro com 70% de desconto e leve um super brinde para proteger suas pastas importantes. Oferta Especial de Ano Novo da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">

  <div class="wrapper">
    <div class="star"></div>
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Promoção de NATAL Desconto 70%</h1>
    <div class="box">
      <dl>
        <dt><del>R$ 99,99</del></dt>
        <dd>
          <strong>R$ 59,99</strong>
          <span>3 PCs, 1 Ano</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=pt-iu93pc5999&ref=pt_iu93pcpurchase1911<?php echo $refStr;?>&refs=pt_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911-pt')" class="buybtn small">Comprar Agora</a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt><del>R$ 199,98</del></dt>
        <dd>
          <strong>R$ 55,99</strong>
          <span>3 PCs, 1 Ano <b>+ Brinde</b></span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=pt-iu93pcpf5599&ref=pt_iu93pcpfpurchase1911<?php echo $refStr;?>&refs=pt_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911-pt')" class="buybtn">Comprar Agora</a>
      <p>Promoção limitada durante o Natal</p>
    </div>
    <p class="last">Oferecemos reembolso total de 60 dias para garantir a sua satisfação total.</p>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- intro -->
  <div class="intro wrapper clearfix">
    <h2>Veja abaixo como IObit Uninstaller 9 Pro <br> vai deixar seu PC mais limpo e seguro</h2>
    <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img-box">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>MAIOR BANCO DE DADOS</strong>
        <p>Banco de Dados atualizado em tempo-real para remover três vezes mais programas teimosos.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd>
        <strong>ATUALIZAÇÃO SEGURA DE PROGRAMAS</strong>
        <p>Com apenas 1-clique, você pode atualizar múltiplos programas importantes assim que a nova versão oficial estiver disponível.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>NAVEGAÇÃO LIMPA E SEGURA</strong>
        <p>Lista e remove plugins maliciosos e de anúncios do navegador e verifica por adwares para uma melhor experiência de navegação.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>DESINSTALAÇÂO COMPLETA</strong>
        <p>Detecta e registra todas as mudanças no sistema durante a instalação de programas para garantir que quaisquer mudanças possam ser revertidas através de desinstalação.</p>
      </dd>
    </dl>
    <p class="learn-more">Compare a versão pro e a versão free>></p>
  </div>
  <!-- end intro -->

  <div class="donation wrapper">
    <h2>Leve um super brinde ao adquirir o pacote especial de Natal</h2>
    <div class="clearfix">
      <div class="item">
        <h4> Para Saúde do seu Disco </h4>
        <img class="fl" src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="Protected Folder">
        <div class="fl">
          <h3>Protected Folder Pro</h3>
          <ul>
            <li>
              <i class="all-icons">√</i>
              <span>Proteção de senha para pastas e arquivos no Windows</span>
            </li>
            <li>
              <i class="all-icons">√</i>
              <span>Te protege contra a perda de arquivos importantes causada por ataques maliciosos</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="betwwen-buy">
      <div class="content">
        <img src="<?php echo getStaticUrl('images/between-buy-box.png')?>" alt="" class="img-box">
        <dl>
          <dt><strong>R$ 55,99</strong> <del>R$ 199,98</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=pt-iu93pcpf5599&ref=pt_iu93pcpfpurchase1911<?php echo $refStr;?>&refs=pt_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911-pt')" class="buybtn red">Comprar Agora</a></dd>
          <dd class="last">Promoção limitada durante o Natal</dd>
        </dl>
      </div>
    </div>
  </div>


</div>
<!-- end container -->
<!-- review -->
<div class="user">
  <div class="wrapper clearfix">
    <h2>
      IObit Uninstaller Pro já limpou mais de <b class="buy-num">  2.355.811</b> PCs.
      <span>Chegou a hora de limpar o seu.</span>
    </h2>
    <ul class="user-list clearfix">
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/ronan-levi.png')?>" alt="Ronan Levi">
        <h4>Ronan Levi</h4>
        <p>
          “Além de remover programas, IObit Uninstaller conta com Verificação Profunda para encontrar as sobras deixadas e removê-las completamente do computador. Como alguém que gosta de sempre cuidar do meu computador, desde que eu instalei IObit Uninstaller, eu só uso esse pro-grama para desinstalar aplicativos. Recomendo fortemente o uso do IObit Uninstaller.”
        </p>
      </li>
      <li class="fr">
        <img src="<?php echo getStaticUrl('images/fernando-lourenco-gomes.png')?>" alt="Fernando Lourenço Gomes">
        <h4>Fernando Lourenço Gomes</h4>
        <p>
          ”IObit Uninstaller é uma ótima ferramenta para desinstalar programas, barras de ferramentas e plugins. Tem sido muito útil para mim pois não apenas desinstala programas e aplicativos, mas também como as entradas no registro relacionadas a eles. Tem uma interface intuitiva e bela e não precisa entender de informática para usá-lo. Recomendo! ”
        </p>
      </li>
    </ul>
  </div>
</div>
<!-- end review -->
<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2">Características & Benefícios</th>
        <td class="space"></td>
        <th class="itema"><span>IObit Uninstaller 9 FREE</span></th>
        <td class="space"></td>
        <th class="itemb"><span>IObit Uninstaller 9 PRO</span></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
        <td class="virtue"> Desinstala programas via ícone do área de trabalho, janela aberta ou bandeja do sistema </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
        <td class="virtue"> Remove extensões do Chrome, Firefox, Edge, IE, etç.</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
        <td class="virtue">Suporta a remoção de programas teimosos</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">Detecta e desinstala programas que vem instalados junto com freeware  </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">Deleta automaticamente sobras de programas que outros utilitáios não conseguem</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
        <td class="virtue"> Suporta a identificação e remoção de plugins maliciosos</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
        <td class="virtue">Suporta a identificação e remoção de plugins de anúncios</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue"> 1-clique para atualizar todos os programas importantes</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
       <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
        <td class="virtue"> Atualização automática para a última versão</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
       <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue"> Suporte Técnico Gratuito 24 horas por dia</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->
<!--bottom-->
<div class="bottom">
  <div class="wrapper">
    <div class="content">
      <div class="img-box"></div>
      <ul>
        <li><i></i> <strong>1 Ano,  <b>3 PCs  </b></strong> Por: R$ <span>59</span>,99</li>
        <li class="active"><i></i> <strong>1 Ano, 3 PCs <b>+ Brinde  </b></strong> Por: R$ <span>55</span>,99</li>
      </ul>
      <dl>
        <dt><span>70%</span> de Desconto</dt>
        <dd><a href="https://www.iobit.com/buy.php?product=pt-iu93pcpf5599&ref=pt_iu93pcpfpurchase1911<?php echo $refStr;?>&refs=pt_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911-pt')" class="buybtn">Comprar Agora</a></dd>
        <dd class="last">Promoção limitada durante o Natal</dd>
      </dl>
    </div>
  </div>
</div>
<!--bottom-->
<!-- service -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""></dt>
      <dd><strong>Garantia de Reembolso</strong></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""></dt>
      <dd><strong>Atendimento 24 Horas</strong></dd>
    </dl>
    <dl  class="last">
      <dt><img src="<?php echo getStaticUrl('images/secured.png')?>" alt=""></dt>
      <dd><strong>Pagamento 100% Seguro</strong></dd>
    </dl>
  </div>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Observe:</dt>
    <dd>
      1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.
    </dd>
  </dl>
  <div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados </div>
</div>
<!-- end footer -->


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>
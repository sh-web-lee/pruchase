 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptiuxnovexp_p' . $date;
  $c_name_t='ptiuxnovexp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}
$refStr='';
if(in_array($_GET['pop'],array('xr_iue'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira IObit Uninstaller 9 Pro com 75% de desconto e leve um super brinde para proteger suas pastas importantes. Oferta Especial de Natal da IObit.</title>
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
  <div class="lamp">
    <div class="light hide"></div>
    <div class="light01 hide"></div>
    <div class="light02 hide"></div>
  </div>
  <div class="snow"></div>

  <div class="wrapper">
    <div class="star"></div>
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Promo????o de NATAL Desconto 75%</h1>
    <div class="box">
      <dl>
        <dt><del>R$ 99,99</del></dt>
        <dd>
          <strong>R$ 59,99</strong>
          <span>3 PCs, 1 Ano</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=pt-iu93pc5999&ref=pt_iu93pcpurchase1911exp<?php echo $refStr;?>&refs=pt_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911exp-pt')" class="buybtn small">Comprar Agora</a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt><del>R$ 199,98</del></dt>
        <dd>
          <strong>R$ 51,99</strong>
          <span>3 PCs, 1 Ano <b>+ Brinde</b></span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=pt-iu93pcpf5199&ref=pt_iu93pcpfpurchase1911exp<?php echo $refStr;?>&refs=pt_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911exp-pt')" class="buybtn">Comprar Agora</a>
      <p>Promo????o limitada durante o Natal</p>
    </div>
    <p class="last">Oferecemos reembolso total de 60 dias para garantir a sua satisfa????o total.</p>
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
        <p>Banco de Dados atualizado em tempo-real para remover tr??s vezes mais programas teimosos.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd>
        <strong>ATUALIZA????O SEGURA DE PROGRAMAS</strong>
        <p>Com apenas 1-clique, voc?? pode atualizar m??ltiplos programas importantes assim que a nova vers??o oficial estiver dispon??vel.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>NAVEGA????O LIMPA E SEGURA</strong>
        <p>Lista e remove plugins maliciosos e de an??ncios do navegador e verifica por adwares para uma melhor experi??ncia de navega????o.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>DESINSTALA????O COMPLETA</strong>
        <p>Detecta e registra todas as mudan??as no sistema durante a instala????o de programas para garantir que quaisquer mudan??as possam ser revertidas atrav??s de desinstala????o.</p>
      </dd>
    </dl>
    <p class="learn-more">Compare a vers??o pro e a vers??o free>></p>
  </div>
  <!-- end intro -->

  <div class="donation wrapper">
    <h2>Leve um super brinde ao adquirir o pacote especial de Natal</h2>
    <div class="clearfix">
      <div class="item">
        <h4> Para Sa??de do seu Disco </h4>
        <img class="fl" src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="Protected Folder">
        <div class="fl">
          <h3>Protected Folder Pro</h3>
          <ul>
            <li>
              <i class="all-icons">???</i>
              <span>Prote????o de senha para pastas e arquivos no Windows</span>
            </li>
            <li>
              <i class="all-icons">???</i>
              <span>Te protege contra a perda de arquivos importantes causada por ataques maliciosos</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end container -->
<div class="comparison wrapper">
  <h2>Diferen??as entre a sua Edi????o Atual e o <br> IObit Uninstaller 9 PRO </h2>
  <table>
    <thead>
      <tr>
        <th class="text" colspan="2"></th>
        <th class="itema">
          <div class="free">Sua Edi????o Atual</div>
        </th>
        <th class="space"></th>
        <th class="itemb">
          <div class="pro">IObit Uninstaller 9 PRO</div>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
        <td class="virture">Remove m??ltiplos programas, extens??es e apps do Windows ao mesmo tempo</td>
        <td class="itema"><i class="all-icons orange"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
        <td class="virture">Identifica e remove programas teimosos e bundleware </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
        <td class="virture">Detecta e reverte mudan??as de sistema que um instalador fez </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
        <td class="virture">Suporta a identifica????o e remo????o de plugins de an??ncios e maliciosos  </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
        <td class="virture">Deleta automaticamente sobras de programas deixadas pela desinstala????o padr??o</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></td>
        <td class="virture">Verifica sobras deixadas por programas j?? desinstalados.  </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
        <td class="virture">Faz um ponto de restaura????o automaticamente antes de desinstalar  </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
        <td class="virture">Atualiza todos os programas desatualizados com 1-clique  </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
        <td class="virture">Atualiza????o autom??tica para a ??ltima vers??o   </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
        <td class="virture">Suporte T??cnico Gratuito 24 horas por dia </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
    </tbody>
  </table>
</div>
<div class="feature">
  <div class="wrapper clearfix">
    <h2>O Novo IObit Uninstaller 9 PRO faz muito mais <br> do que voc?? imagina!</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
      <dd>
        <h3>Mais Limpo</h3>
        <p>
          Remove for??osamente 150%* mais programas que n??o podem ser desinstalados por meios convencionais
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
      <dd>
        <h3>Mais Profundo</h3>
        <p>
          15%* mais sobras de programas e entradas de registro podem ser detectadas e removidas completamente ap??s desinstala????o
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
      <dd>
        <h3>Mais R??pido</h3>
        <p>Processo de desinstala????o 10%* mais r??pido</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
      <dd>
        <h3>Mais Seguro</h3>
        <p>50%* mais plugins maliciosos podem ser detectados e removidos</p>
      </dd>
    </dl>
  </div>
</div>
<!-- review -->
<div class="user">
  <div class="wrapper clearfix">
    <h2>
      IObit Uninstaller Pro j?? limpou mais de <b class="buy-num">  2.355.811</b> PCs.
      <span>Chegou a hora de limpar o seu.</span>
    </h2>
    <ul class="user-list clearfix">
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/ronan-levi.png')?>" alt="Ronan Levi">
        <h4>Ronan Levi</h4>
        <p>
          ???Al??m de remover programas, IObit Uninstaller conta com Verifica????o Profunda para encontrar as sobras deixadas e remov??-las completamente do computador. Como algu??m que gosta de sempre cuidar do meu computador, desde que eu instalei IObit Uninstaller, eu s?? uso esse pro-grama para desinstalar aplicativos. Recomendo fortemente o uso do IObit Uninstaller.???
        </p>
      </li>
      <li class="fr">
        <img src="<?php echo getStaticUrl('images/fernando-lourenco-gomes.png')?>" alt="Fernando Louren??o Gomes">
        <h4>Fernando Louren??o Gomes</h4>
        <p>
          ???IObit Uninstaller ?? uma ??tima ferramenta para desinstalar programas, barras de ferramentas e plugins. Tem sido muito ??til para mim pois n??o apenas desinstala programas e aplicativos, mas tamb??m como as entradas no registro relacionadas a eles. Tem uma interface intuitiva e bela e n??o precisa entender de inform??tica para us??-lo. Recomendo! ???
        </p>
      </li>
    </ul>
  </div>
</div>
<!-- end review -->

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
      1*. Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempo em tempo conforme nossos crit??rios.
    </dd>
  </dl>
  <div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados </div>
</div>
<!-- end footer -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt=""></div>
    <div class="center fl">
      <h2>Oferta Exclusiva para o Natal 2019!</h2>
      <div class="numbox">
        <p>Corra, apenas 
          <div id="flip" class="flipNum">
            <div class="listbox"><span class="list"><b>2</b></span></div>
            <div class="listbox"><span class="list"><b>1</b></span></div>
          </div>   restantes</p> 
        </div>
      </div>
    <div class="price fr">
      <p><strong>R$ 51,99</strong> <del> R$ 199,98</del></p>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-iu93pcpf5199&ref=pt_iu93pcpfpurchase1911exp<?php echo $refStr;?>&refs=pt_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911exp-pt')">
        Renovar agora!
      </a>
    </div>
  </div>
</div>

<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>
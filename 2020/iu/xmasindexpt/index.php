<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
// function microtime_float(){
//   list($usec, $sec) = explode(' ', microtime());
//   return ((float)$usec + (float)$sec);
// }
$reduceNum=76347174;
$buyNum = ceil(microtime_float() * 1000 / 20000)-$reduceNum;
$buyNum = number_format($buyNum);
function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1].'-'.$matches[2];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>static/css/Normalize.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>static/css/common.css" type="text/css">
  <!-- <link rel="stylesheet" href="<?= $pResUrl; ?>static/css/swiper.min.css"> -->
  <!-- <link rel="stylesheet" href="<?= $pResUrl; ?>static/css/animate.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
  <title>Adquira IObit Uninstaller 10 Pro com 75% de desconto e leve um super brinde para o seu computador. Oferta Especial de Natal da IObit. </title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <nav>
    <div class="logo"><a href="https://www.iobit.com/nl/index.php" target="_blank" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2011-nl')"><img src="<?= $pResUrl; ?>static/img/LOGO.png" alt=""></a>
    </div>
    <img src="<?= $pResUrl; ?>static/img/wordbd.png" alt="">
    <div class="book clearfix">
      <div class="one left ">
        <h3>Pacote Padrão</h3>
        <p style="text-align: right;">
        R$ 59<span style="font-size: 18px;">,99</span> <i style="font-size: 18px; color: #838395;text-decoration: line-through;">R$ 99,99</i>
        </p>
        <div style="text-align: left;">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <a href="https://www.iobit.com/buy.php?product=pt-iu103pc5999&ref=pt_iu103pcpurchase2011<?= $refStr; ?>&refs=pt_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2011-pt')">COMPRAR AGORA</button>
        </a>
      </div>
      <div class="two left">
        <div class="two-up">
          <h3>Pacote Especial de Natal!</h3>
          <p style=" padding-left: 27%;text-align: left;">
            <img src="<?= $pResUrl; ?>static/img/time.png" alt="">
            Termina em
            <i id="timeout">00:11:24:326</i>
          </p>
        </div>
        <p style="text-align: right;font-size: 60px; font-weight: 600;margin-right: 20px;">
        R$ 64<span style="font-size: 22px;">,99</span> <i style="font-size: 22px; color: #838395;text-decoration: line-through;">R$ 259,99</i>
        </p>
        <div style="text-align: left;margin-left: 25px;">
          <img src="<?= $pResUrl; ?>static/img/box.png" alt="">
        </div>
        <a href="https://www.iobit.com/buy.php?product=pt-iu103pcsd6499&ref=pt_iu103pcsdpurchase2011<?= $refStr; ?>&refs=pt_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2011-pt')">
          COMPRAR AGORA
          </button>
        </a>
        <img src="<?= $pResUrl; ?>static/img/Expirado.png" alt="" style="display: none;" id="post">
      </div>
       <!-- <div style="position: absolute;bottom: -125px;right: 360px;">
         <h5 style="margin-bottom:10px;font-size:16px;">Pagamento 100% Seguro</h5>
         <img src="<?= $pResUrl; ?>static/img/paymens.png" alt="">
       </div> -->
      <!-- <img src="<?= $pResUrl; ?>static/img/paymens.png" alt="" style=" bottom: -125px;
      position: absolute;
      z-index: 999;
      left: -64px;"> -->
    </div>
  </nav>
  <aside>
    <h2 style="text-align: center;"><img src="<?= $pResUrl; ?>static/img/feature-txt.png" alt=""></h2>
    <div class="feature wrapper clearfix">
      <!-- computer -->
      <div class="computer">
        <div class="screen">
          <div class="list clearfix">
            <img src="<?= $pResUrl; ?>static/img/num1.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num2.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num3.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num4.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num5.png" alt="">
          </div>
        </div>
      </div>
      <!-- ul -->
      <div class="message">
        <ul>
          <li>
            <b>MAIOR BANCO DE DADOS</b>&nbsp;Banco de Dados atualizado em tempo-real para remover três vezes mais programas teimosos.
          </li>
          <li>
            <b>NAVEGAÇÃO LIMPA E SEGURA</b>&nbsp;Lista e remove plugins maliciosos e de anúncios do navegador e verifica por adwares para uma melhor experiência de navegação.
          </li>
          <li>
            <b>ATUALIZAÇÃO SEGURA DE PROGRAMAS</b>&nbsp;Com apenas 1-clique, você pode atualizar múltiplos programas importantes assim que a nova versão oficial estiver disponível.
          </li>
          <li class="last">
            <b>DESINSTALAÇÂO COMPLETA</b>&nbsp;Deleta completamente programas teimosos que não podem ser desinstalados por meios convencionais

          </li>
        </ul>
        <!-- active -->
        <span></span>
      </div>
    </div>
  </aside>
  <article id="arti">
    <div class="art">
      <div class="num1">
        <img src="<?= $pResUrl; ?>static/img/twobox.png" alt="">
      </div>
      <div class="num2">
        <p>
          <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          Smart Defrag PRO
        </p>
        <i>Desfragmenta automaticamente seu PC e acelera a velocidade de acesso aos arquivos para otimizar o seu disco.</i>
        <!-- <p> <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          IObit Software Updater PRO</p>
        <i>houdt de software op uw pc automatisch up-to-date!</i> -->
      </div>
      <div class="num3">
        <a href="https://www.iobit.com/buy.php?product=pt-iu103pcsd6499&ref=pt_iu103pcsdpurchase2011<?= $refStr; ?>&refs=pt_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2011-pt')">COMPRAR AGORA</button>
          <p>
        </a>
        <img src="<?= $pResUrl; ?>static/img/time.png" alt="" style="margin-right: 7px;">
        Termina em
        <i id="timeout" style="font-size: 14px;color: #EA2D2D;font-weight: bold;">00:11:24:326</i>
        </p>
      </div>
    </div>
    <div class="nothing">
      <h2 style=" text-align: center;font-size: 26px;  color: #292b2f;margin-top: 23px;">Mas ainda restam 40% de desconto!
      </h2>
      <div class="arttwo">
        <div class="num1">
          <img src="<?= $pResUrl; ?>static/img/OFFsq.png" alt="">
        </div>
        <div class="num2">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <div class="num3">
          <p style="text-align: center;font-size: 48px; font-weight: 600;margin-right: 20px;">
          R$ 59<span style="font-size: 18px;">,99</span> <i style="font-size: 18px; color: #838395;text-decoration: line-through;">R$ 99,99</i>
          </p>
          <a href="https://www.iobit.com/buy.php?product=pt-iu103pc5999&ref=pt_iu103pcpurchase2011<?= $refStr; ?>&refs=pt_purchase_iu" target="_blank">
            <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2011-nl')">COMPRAR AGORA</button>
          </a>
        </div>
      </div>
    </div>
  </article>
  <div class="mainbox clearfix">
    <!-- <div class="tab">
      <div class="context">
        <div class="con">
          <h5>Klantbeoordeling</h5>
          <h6>Ik gebruik IObit Uninstaller al heel lang, en ik hou ervan. Het is heel grondig en nu zelfs nog beter. Ik
            ben heel tevreden en kan niet meer zonder. Als je het nog niet gebruikt, moet je het zeker proberen. Het is
            nu 100% beter dan een jaar geleden. Het ruimt alle rotzooi uit het register op en dat doet het geweldig</h6>
        </div>
        <div class="con">
          <h5>Klantbeoordeling</h5>
          <h6>Dit programma bespaart me een hoop geld. Voordat ik het gebruikte was mijn computer heel traag. Ik kon er
            niets meer mee. Dankzij dit programma, is mijn computer weer hartstikke snel. Dankzij dit programma hoef ik
            geen nieuwe computer te kopen. Heel erg bedankt, IObit! I love you.</h6>
        </div>
        <div class="con">
          <h5>Media recensie</h5>
          <h6>"Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma
            is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en
            maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u
            nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen."</h6>
        </div>
        <div class="con">
          <h5>Klantbeoordeling</h5>
          <h6>Ik heb in het verleden meerdere uninstallers gebruikt, maar zodra ik IObit gebruikte (sinds versie 7.0),
            wilde ik nooit meer een ander programma. De interface is zeer gebruiksvriendelijk en doet wat het doen moet
            met indrukwekkende perfectie. Het verschoont automatisch het register, dat anders helemaal dichtslibt, en
            draagt zo bij aan de gezondheid van de PC. De bundleware dectectie en verwijdering zijn super en
            ongeëvenaard door andere software.</h6>
        </div>
        <div class="con">
          <h5>Klantbeoordeling</h5>
          <h6>IObit Uninstaller detecteert plug-ins in my browsers waarvan ik niet eens wist dat ze bestonden. Het
            opschonen van restbestanden is heel goed; er blijven geen nutteloze gegevens achter. Mijn hele computer
            werkt daardoor beter. Het is een handig en gebruiksvriendelijk programma; ik beveel het al mijn vrienden
            aan.</h6>
        </div>
      </div>
      <ul class="btn">
        <li class="active">
          <img src="<?= $pResUrl; ?>static/img/ivan.png" alt="" class="imgon">
          <h3>Ivan White</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/ali.png" alt="" class="imgon">
          <h3>Ali Tekin</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/MakeUseOf.png" alt="" class="imgon">
          <h3>MakeUseOf</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/samrat.png" alt="" class="imgon">
          <h3>Samrat Kumar Chakrabortty</h3>
        </li>
        <li class="active">
          <img src="<?= $pResUrl; ?>static/img/john.png" alt="" class="imgon">
          <h3>John Glenn Perong</h3>
        </li>
      </ul>
    </div>
    <div class="tablebox">
      <div class="title">
        <h3>IObit Uninstaller Free </h3>
        <div>
          <img src="<?= $pResUrl; ?>static/img/title.png" alt="">
        </div>
        <h1> IObit Uninstaller PRO</h1>
      </div>
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/rightg.png" alt=""></td>
          <td>Deïnstalleer programma's via een snelkoppeling, openstaand venster of systeemvakicoon</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/rightg.png" alt=""></td>
          <td>Verwijdert Plug-ins & extensies in Edge, Chrome, IE, Firefox, etc.</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Kan hardnekkige programma's verwijderen </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Detecteert en verwijdert programma's die meekomen met freeware </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>
            Verwijdert automatisch restbestanden die andere uninstall
            programma’sniet verwijderd krijgen
          </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Houdt alle software op uw pc in goede conditie</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Indentificeert en verwijdert adverterende plug-ins</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Update automatisch alle belangrijke software in 1 klik </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Automatische update naar de nieuwste versie</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td style="border-bottom: 0;"><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td style="border-bottom: 0;">Gratis 24/7 technische ondersteuning</td>
          <td style="border-bottom: 0;"><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
      </table>
    </div> -->
     <!-- user start <?php echo $buyNum;?>-->
    <div class="user">
      <div class="wrapper clearfix">
        <h2>
          IObit Uninstaller Pro já limpou mais de <b class="buy-num">3.944.618</b> PCs.
          <span>Chegou a hora de limpar o seu.</span>
        </h2>
        <ul class="user-list clearfix">
          <li class="fl">
            <img src="<?= $pResUrl; ?>static/img/ronan-levi.png" alt="Ronan Levi" />
            <h4>Ronan Levi</h4>
            <p>
              “Além de remover programas, IObit Uninstaller conta com Verificação Profunda para encontrar as sobras deixadas e removê-las completamente do computador. Como alguém que gosta de sempre cuidar do meu computador, desde que eu instalei IObit Uninstaller, eu só uso esse pro-grama para desinstalar aplicativos. Recomendo fortemente o uso do IObit Uninstaller.”
            </p>
          </li>
          <li class="fr">
            <img src="<?= $pResUrl; ?>static/img/fernando-lourenco-gomes.png" alt="Fernando Lourenço Gomes" />
            <h4>Fernando Lourenço Gomes</h4>
            <p>
              ”IObit Uninstaller é uma ótima ferramenta para desinstalar programas, barras de ferramentas e plugins. Tem sido muito útil para mim pois não apenas desinstala programas e aplicativos, mas também como as entradas no registro relacionadas a eles. Tem uma interface intuitiva e bela e não precisa entender de informática para usá-lo. Recomendo! ”
            </p>
          </li>
        </ul>
      </div>
    </div>
  <!-- user end -->
  <div class="wrapper">
    <!-- awards start -->
    <div class="awards clearfix">
      <h2>Recomendado também por</h2>
      <img src="<?= $pResUrl; ?>static/img/awards.png" alt="" />
    </div>
    <!-- awards end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="text" colspan="2">Características & Benefícios</th>
          <th class="itemb">IObit Uninstaller 10 <span>FREE</span></th>
          <th class="itema">IObit Uninstaller 10 <span>PRO</span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon1.png" alt="" /></td>
          <td class="virtue first"><span>Desinstala programas via ícone do área de trabalho, janela aberta ou bandeja do sistema</span></td>
          <td class="itemb"><i class="all-icons"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon2.png" alt="" /></td>
          <td class="virtue">Remove extensões do Chrome, Firefox, Edge, IE, etç.</td>
          <td class="itemb"><i class="all-icons"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon3.png" alt="" /></td>
          <td class="virtue">Suporta a remoção de programas teimosos <sup class="threex">Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon4.png" alt="" /></td>
          <td class="virtue">Detecta e desinstala programas que vem instalados junto com freeware <sup>Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon5.png" alt="" /></td>
          <td class="virtue first">Deleta automaticamente sobras de programas que outros utilitáios não conseguem <sup>Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon6.png" alt="" /></td>
          <td class="virtue">Suporta a identificação e remoção de plugins maliciosos <sup class="threex twox">Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon7.png" alt="" /></td>
          <td class="virtue">Suporta a identificação e remoção de plugins de anúncios <sup class="threex twox">Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon8.png" alt="" /></td>
          <td class="virtue">1-clique para atualizar todos os programas importantes <sup class="threex fivex">Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
         <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon11.png" alt="" /></td>
          <td class="virtue">Grava e reverte mudanças de sistema feitos após instalações de programas <sup class="novo">Novo</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon9.png" alt="" /></td>
          <td class="virtue">Atualização automática para a última versão</td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?= $pResUrl; ?>static/img/icon10.png" alt="" /></td>
          <td class="virtue">Suporte Técnico Gratuito 24 horas por dia</td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->
   </div>
  </div>
  <section class="clearfix" id="sect">
    <div class="sec">
      <div class="sec-sale">
        <img src="<?= $pResUrl; ?>static/img/75.png" alt="" id="sale"> </div>
      <div class="sec-buy">
      <div class="soldout-buy"><p><span class="boldspan">R$ 64</span><span  class="minspan">,99</span> <i>R$ 259,99</i></p></div>
        
        <a href="https://www.iobit.com/buy.php?product=pt-iu103pcsd6499&ref=pt_iu103pcsdpurchase2011<?= $refStr; ?>&refs=pt_purchase_iu" target="_blank" id="hrf">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2011-pt')">COMPRAR AGORA</button>
        </a>
        <h2 id="hidn" style="text-align: left; padding-left: 17%;">
          <img src="<?= $pResUrl; ?>static/img/time.png" alt="" style="margin-right: 7px;">
          Termina em
          <i id="timeout" style="font-size: 14px;color:#292B2F;font-weight: bold;">00:11:24:326</i>
        </h2>
      </div>
    </div>
  </section>
  <!-- <footer>
    <ul>
      <li>
        <img src="<?= $pResUrl; ?>static/img/size72.png" alt="">
        <h3>Garantie</h3>
        <p>60 dagen niet-goed-geld-terug garantie.</p>
      </li>
      <li style="margin-top: 20px;">
        <img src="<?= $pResUrl; ?>static/img/secure.png" alt="">
        <h3 style="margin-top: 45px;">Website beveiliging</h3>
        <p>Alle websites van IObit zijn beveiligd </p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>static/img/erji.png" alt="">
        <h3 style="margin-top: 33px;">24/7 gratis klantenservice</h3>
        <p>IObit biedt gratis 24/7 <br> klantenservice voor PRO gebruikers</p>
      </li>
    </ul>
  </footer>
  <div class="laster">
    <h5>
      Let op: <br>
      *Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen
      goeddunken <br>
      * De gegevens kunnen variëren op basis van verschillende systemen en computers.
    </h5>
    <h6>Copyright ©2005-2019 IObit. Alle rechten voorbehouden</h6>
  </div> -->
  <div class="wrapper">
    <!-- service start -->
    <ul class="service clearfix">
      <li>
        <h5>Garantia de Reembolso</h5>
        <img src="<?= $pResUrl; ?>static/img/money-back-guarantee.png" alt="" />
      </li>
      <li>
        <h5> Atendimento 24 Horas</h5>
        <img src="<?= $pResUrl; ?>static/img/service.png" alt="" />
      </li>
      <li>
        <h5>Pagamento 100% Seguro</h5>
        <img style="margin-top: 25px;" src="<?= $pResUrl; ?>static/img/paymens.png" alt="">
      </li>
    </ul>
    <!-- service end -->

    <!--footer start -->
    <div class="footer clearfix">
      <p class="note">Observe:</p>
      <p class="note">1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.</p>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
    </div>
    <!--footer end -->
  </div>
</body>
<script>
  // $(".feature .message ul li").hover(function() {
  //   var index = $(this).index();
  //   $(".feature .message>span").stop().animate({
  //     "marginTop": index * 104
  //   }, 300);
  //   $(".feature .list ").stop().animate({
  //     "marginLeft": -(index + 1) * 560
  //   }, 300);
  // });
  //tab栏的切换显示与隐藏
  $(".con").eq(0).show();
  $('.btn li .hidn').eq(0).show()

  $(".btn li ").hover(function() {
    var num = $(".btn li ").index(this);
    $('.btn li').removeClass('active')
    $('.btn li').eq(num).addClass('active')
    $(".con").hide().animate({
      opacity: '0'
    }, 100);
    $(".con").eq(num).show().animate({
      opacity: '1'
    }, 100);
  })

  var countdown = function(countdown) {
    getCycleCountdown();
    $(countdown).html(h + ':' + i + ':' + s + ':' + mi);
    if (d != 0 || h != 0 || i != 0 || s != 0 || mi != 0) setTimeout("countdown('" + countdown + "')", 100);
    else soldOut();
  };

  function getCycleCountdown() {
    var date = new Date();
    if (MApp(2.2).cookie.get('xmasnl2020')) {
      dt = MApp(2.2).cookie.get('xmasnl2020');

    } else {
      dt = date.setMinutes(date.getMinutes() + 12);
      MApp(2.2).cookie.set('xmasnl2020', dt);
    }

    var datetime = getCountdown(dt);
    if (datetime == 0) {
      d = h = i = s = mi = "00";
      soldOut();
    } else {
      d = MApp(2.2).packages.zeroize(datetime[0], 2);
      h = MApp(2.2).packages.zeroize(datetime[1], 2);
      i = MApp(2.2).packages.zeroize(datetime[2], 2);
      s = MApp(2.2).packages.zeroize(datetime[3], 2);
      mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
    }
  }

  function getCountdown(t) {
    var e = new Date,
      i = Math.floor(e.getTime() / 1000),
      r = t / 1000,
      n = r - i;
    if (n > 0) {
      var s = Math.floor(n / 86400),
        a = Math.floor(n / 3600 % 24),
        o = Math.floor(n / 60 % 60),
        u = Math.floor(n % 60),
        h = 999 - e.getMilliseconds();
      return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
        Array(s, a, o, u, h)
    }
    return 0
  }
  //倒计时结束实现
  function soldOut() {
    $('#post').addClass('post')
    $('.one').addClass('topleft')
    $('.art').css('display', 'none')
    $('.nothing').css('display', 'block')
    $('#arti').css({
      "background-image": "url('<?= $pResUrl; ?>static/img/ker.png')"
    })
    $('#sect').css({
      "background-image": "url('<?= $pResUrl; ?>static/img/bann.png')"
    })
    $('#sale').attr('src', '<?= $pResUrl; ?>static/img/IU.png')
    $('#hrf').attr('href', 'https://www.iobit.com/buy.php?product=pt-iu103pc5999&ref=pt_iu103pcpurchase2011<?= $refStr; ?>&refs=pt_purchase_iu')
      $(".boldspan").text("R$59")
      $(".soldout-buy i").text("R$99,99")
  }
  (function() {
    countdown(("#timeout"));
    countdown(("#hidn i"));
    countdown((".art .num3 i"));
  }());
</script>

</html>
<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
include $pRootUrl . 'callback.php';
$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
    'bdprog','iuasc'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adquira IObit Uninstaller 11 Pro para 3 PCs com 75% de desconto e leve um super brinde. Oferta Limitada da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h1>PROMOÇÃO RELÂMPAGO</h1>
        <p>Compre IObit Uninstaller 11 e um super brinde para proteger suas pastas importantes!</p>
      </div>
      <div class="panel clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/boxsort_iu.png')?>" alt="" />
          <p>Oferta termina em</p>
          <!-- time -->
          <ul id="countdown" class="countdown">
            <li>Horas<strong>00</strong></li>
            <li>Min<strong>00</strong></li>
            <li>Seg<strong>00</strong></li>
            <li class="last">Ms<strong>00</strong></li>
            <sup>*</sup>
          </ul>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 11 Pro – 1 ano / 3 PCs</h2>
          <p>(Brinde: Smart Defrag – 1 ano / 1 Pc)</p>
          <div class="price">
            <p class="de">De <del>R$ 243,99</del></p>
            <p class="xde">6x de <strong>R$ 9,34</strong></p>
            <p>ou <b>R$ 55,99</b> a vista</p>
          </div>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-iu113pcsd5599&ref=pt_iu113pcsdspecial2008<?php echo $refStr;?>&aff=&refs=pt_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcsdspecial-pt');">
            Comprar Agora
          </a>
          <p class="people">
            <i class="all-icons"></i>Mais de  <strong class="buyNum">1.089.077</strong> pessoas já compraram
          </p>
          <div class="payments">
            <p>Formas de Pagamento</p>
            <img src="<?php echo getStaticUrl('images/paymens.png')?>" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Veja abaixo como IObit Uninstaller 11 Pro vai deixar seu PC mais limpo e seguro</h2>
      <img class="interface" src="<?php echo getStaticUrl('images/iu_interface.png')?>" alt="" />
      <div class="clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/intro_icons01.png')?>" alt="" /></dt>
          <dd>
            <h3>SAÚDE DO SOFTWARE</h3>
            <p>Nova função que integra ferramentas fragmentadas. Limpar pacotes de instalação e programas com problemas de desinstalação.</p>
          </dd>
        </dl>
        <dl class="fr">
          <dt><img src="<?php echo getStaticUrl('images/intro_icons02.png')?>" alt="" /></dt>
          <dd>
            <h3>DESINSTALAÇÃO COMPLETA</h3>
            <p>Banco de Dados atualizado para deletar completamente mais programas maliciosos e teimosos.</p>
          </dd>
        </dl>
      </div>
      <div class="clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/intro_icons03.png')?>" alt="" /></dt>
          <dd>
            <h3>ATUALIZAÇÃO SEGURA DE PROGRAMAS</h3>
            <p>Com apenas 1-clique, você pode atualizar mais múltiplos programas importantes assim que a nova versão oficial estiver disponível.</p>
          </dd>
        </dl>
        <dl class="fr last">
          <dt><img src="<?php echo getStaticUrl('images/intro_icons04.png')?>" alt="" /></dt>
          <dd>
            <h3>NAVEGAÇÃO LIMPA E SEGURA</h3>
            <p>Lista e remove plugins maliciosos e de anúncios do navegador e verifica por adwares para uma melhor experiência de navegação.</p>
            <a href="javascript: void(0);">Compare a versão pro e a versão free>></a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->
  <div class="donation wrapper">
    <h2>Leve um super brinde no Pacote de Limpeza para o PC</h2>
    <div class="clearfix">
      <div class="item">
        <h4> Para Saúde do seu Disco </h4>
        <img class="fl" src="../../2019/iu/jansalept/images/sd-box.png?t=1566366453" alt="Smart Defrag Pro">
        <div class="fl">
          <h3>Smart Defrag Pro</h3>
          <ul>
            <li>
              <i class="all-icons">√</i>
              <span>Aumenta a velocidade de acesso aos arquivos no seu disco!</span>
            </li>
            <li>
              <i class="all-icons">√</i>
              <span>Desfragmenta arquivos automaticamente durante o tempo ocioso do sistema!</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!--hightlight-->

  <!-- user start -->
  <div class="user">
    <div class="wrapper clearfix">
      <h2>
        IObit Uninstaller Pro já limpou mais de <b class="buy-num">1.089.077</b> PCs.
        <span>Chegou a hora de limpar o seu.</span>
      </h2>
      <ul class="user-list">
        <li class="fl">
          <img src="<?php echo getStaticUrl('images/ronan-levi.png')?>" alt="Ronan Levi" />
          <h4>Ronan Levi</h4>
          <p>
            “Além de remover programas, IObit Uninstaller conta com Verificação Profunda para encontrar as sobras deixadas e removê-las completamente do computador. Como alguém que gosta de sempre cuidar do meu computador, desde que eu instalei IObit Uninstaller, eu só uso esse pro-grama para desinstalar aplicativos. Recomendo fortemente o uso do IObit Uninstaller.”
          </p>
        </li>
        <li class="fl">
          <img src="<?php echo getStaticUrl('images/fernando-lourenco-gomes.png')?>" alt="Fernando Lourenço Gomes" />
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
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end --> 

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="text" colspan="2">Características & Benefícios</th>
          <th class="itemb">IObit Uninstaller 11 <span>FREE</span></th>
          <th class="itema">IObit Uninstaller 11 <span>PRO</span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon1.png')?>" alt="" /></td>
          <td class="virtue first"><span>Desinstala programas via ícone do área de trabalho, janela aberta ou bandeja do sistema</span></td>
          <td class="itemb"><i class="all-icons"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon2.png')?>" alt="" /></td>
          <td class="virtue">Remove extensões do Chrome, Firefox, Edge, IE, etç.</td>
          <td class="itemb"><i class="all-icons"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon3.png')?>" alt="" /></td>
          <td class="virtue">Digitalize e remova pacotes de instalação de software instalados e não usados para economizar espaço <sup class="novo">Novo</sup></td>
          <td class="itemb"><i class="all-icons"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon4.png')?>" alt="" /></td>
          <td class="virtue">Detecta e desinstala programas que vem instalados junto com freeware <sup>Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon8.png')?>" alt="" /></td>
          <td class="virtue first">Deleta automaticamente sobras de programas que outros utilitáios não conseguem <sup>Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon6.png')?>" alt="" /></td>
          <td class="virtue">Suporta a identificação e remoção de plugins maliciosos e programas teimosos <sup class="threex twox">Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon7.png')?>" alt="" /></td>
          <td class="virtue">Suporta a identificação e remoção de plugins de anúncios <sup class="threex twox">Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon5.png')?>" alt="" /></td>
          <td class="virtue">1-clique para atualizar todos os programas importantes <sup class="threex fivex">Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
         <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon11.png')?>" alt="" /></td>
          <td class="virtue">Grava e reverte mudanças de sistema feitos após instalações de programas</td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon9.png')?>" alt="" /></td>
          <td class="virtue">Atualização automática para a última versão</td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt="" /></td>
          <td class="virtue">Suporte Técnico Gratuito 24 horas por dia</td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <h2>Com apenas R$ 0,15 por dia, você mantém seu PC limpo e livre de extensões maliciosas</h2>
      <h3>Assine por um ano e leve IObit Uninstaller Pro para 2 PCs extras.</h3>
      <div class="box-contain clearfix">
        <img src="<?php echo getStaticUrl('images/boxsort_iu_small.png')?>" alt="" />
        <div class="bottom-btn">
          <p>6x de <strong>R$ 9,34</strong> (ou R$ 55,99 a vista)</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-iu113pcsd5599&ref=pt_iu113pcsdspecial2008<?php echo $refStr;?>&aff=&refs=pt_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcsdspecial-pt')">
            Comprar Agora
          </a>
          <p>Economize <b>R$ 188,00</b></p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <ul class="service clearfix">
      <li>
        <h5>Garantia de Reembolso</h5>
        <img src="<?php echo getStaticUrl('images/money-back-guarantee.png')?>" alt="" />
      </li>
      <li>
        <h5> Atendimento 24 Horas</h5>
        <img src="<?php echo $pResUrl; ?>images/service.png" alt="" />
      </li>
      <li>
        <h5>Pagamento 100% Seguro</h5>
        <img src="<?php echo $pResUrl; ?>images/secured.png" alt="" />
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

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
<?php //    初始化
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

$reduceNum=76036105;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

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
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Adquira IObit Uninstaller 8 Pro com 70% de desconto e leve um super brinde para proteger suas pastas importantes. Oferta Especial de Natal da IObit.</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
    <script type="text/javascript">
    function getBuyNum(){
        $.ajax({
          type: "GET",
          url: "<?php echo $pRootUrl;?>callback.php",
          data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
          success: function(packs){
            $('.buyNum').html(packs);
            setTimeout('getBuyNum()', 20000);
          }
        });
      }
      setTimeout('getBuyNum()', 20000);
    </script>
    <!-- banner -->
    <div class="banner">
      <div class="wrapper">
        <!-- logo -->
        <a class="logo" href="https://www.iobit.com/pt/" target="_blank">IObit</a>
        <!-- title -->
        <h1> Promoção Exclusiva de Natal!  Tempo limitado, Apenas uma Vez no Ano!</h1>
        <!-- banner-content -->
        <div class="banner-content">
          <img class="sign" src="<?php echo $pResUrl; ?>images/sign.png" alt=""/>
          <div class="banner-left fl">
            <img class="box-imf" src="<?php echo $pResUrl; ?>images/packs.png" alt=""/>
            <span>Oferta termina em</span>
            <ul class="time">
              <li>5</li>
              <li>30</li>
              <li>60</li>
              <li class="last">60</li>
            </ul>
          </div>
          <div class="banner-right fr">
            <h2>IObit Uninstaller 8 Pro - 1 ano / 3 PCs</h2>
            <p class="decri">+ Protected Folder (Grátis!)</p>
            <span class="banner-line"></span>
            <p class="de-price">De <del>R$ 199,98</del></p>
            <p class="main-price">6x de <b>R$ 9,34</b></p>
            <p class="small-price">ou <b>R$ 55,99</b> a vista</p>
            <span class="banner-line"></span>
            <!-- buybtn -->
            <a class="buy-btn"
               href="https://www.iobit.com/buy.php?product=pt-iu83pcpf5599&ref=pt_iu83pcpfpurchase1811<?php echo $refStr;?>&refs=pt_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8purchase1811-pt')">
              COMPRAR AGORA
            </a>
            <p class="people-box"><img src="<?php echo $pResUrl; ?>images/people.png" alt=""/>Mais de <b class="people-num buyNum"><?php echo $buyNum;?></b> pessoas já compraram</p>
            <div class="payments">
              <h4>Formas de Pagamento</h4>
              <img src="<?php echo $pResUrl; ?>images/paymens.png" alt=""/>
            </div>
          </div>
        </div>
      </div>
      <!-- snow -->
      <span class="snow list01"></span>
      <span class="snow snow-clarity  list02"></span>
      <span class="snow snow-smail list03"></span>
      <span class="round  list04"></span>
      <span class="round round-smail list05"></span>
      <span class="round round-clarity list06"></span>
      <span class="round round-large list07"></span>
      <span class="snow snow-clarity  list15"></span>
      <span class="snow snow-smail  list16"></span>
      <span class="snow snow-clarity  list17"></span>
      <span class="snow snow-smail  list18"></span>
      <span class="round round-clarity list23"></span>
      <span class="round round-clarity list24"></span>

      <span class="round round-clarity list08"></span>
      <span class="round round-smail list09"></span>
      <span class="round round-large  list10"></span>
      <span class="round list11"></span>
      <span class="snow snow-clarity list12"></span>
      <span class="snow snow-smail list13"></span>
      <span class="snow list14"></span>
      <span class="snow snow-clarity  list19"></span>
      <span class="snow snow-smail  list20"></span>
      <span class="snow snow-clarity  list21"></span>
      <span class="snow snow-smail  list22"></span>
      <span class="round round-clarity list25"></span>
      <span class="round round-clarity list26"></span>
    </div>
    <!-- banner end -->
    <!-- awards start -->
    <div class="awards">
      <h2>Recomendado também por</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
    <!-- awards end -->
    <!-- intro start -->
    <div class="intro">
        <div class="wrapper">
          <h2><span>Veja abaixo como IObit Uninstaller 8 Pro vai deixar seu PC mais limpo e seguro</span></h2>
          <img class="interface" src="<?php echo getStaticUrl('images/iu_interface.png')?>" alt="" />
          <div class="clearfix">
            <dl class="fl">
              <dt><img src="<?php echo getStaticUrl('images/intro_icons01.png')?>" alt="" /></dt>
              <dd>
                <h3>DESINSTALAÇÃO PROFUNDA</h3>
                <p>Banco de Dados atualizado em tempo-real para remover três vezes mais programas teimosos.</p>
              </dd>
            </dl>
            <dl class="fr">
              <dt><img src="<?php echo getStaticUrl('images/intro_icons02.png')?>" alt="" /></dt>
              <dd>
                <h3>LIMPEZA AUTOMÁTICA</h3>
                <p>Limpa automaticamente sobras e entradas no registro deixadas por programas desinstalados inclusive por outros programas ou pelo desinstalador padrão do Windows.</p>
              </dd>
            </dl>
          </div>
          <div class="clearfix">
            <dl class="fl">
              <dt><img src="<?php echo getStaticUrl('images/intro_icons03.png')?>" alt="" /></dt>
              <dd>
                <h3>NAVEGAÇÃO LIMPA E SEGURA</h3>
                <p>Lista e remove plugins maliciosos e de anúncios do navegador e verifica por adwares para uma melhor experiência de navegação.</p>
              </dd>
            </dl>
            <dl class="fr last">
              <dt><img src="<?php echo getStaticUrl('images/intro_icons04.png')?>" alt="" /></dt>
              <dd>
                <h3>DETECÇÃO E DESINSTALAÇÃO DE BUNDLEWARE</h3>
                <p>Detecta, lista e remove bundleware ou programas indesejados instalado junto com programas freeware.</p>
                <a href="javascript: void(0);">Compare a versão pro e a versão free>></a>
              </dd>
            </dl>
          </div>
        </div>
    </div>
    <!-- intro end -->
    <!-- gift message start -->
    <div class="gift-message">
      <div class="wrapper">
        <img src="<?php echo $pResUrl; ?>images/iu-center-box.png" alt="" class="img-box">
        <div class="right-message">
          <img src="<?php echo $pResUrl; ?>images/pf-box.png" alt="" class="img-box">
          <div class="box">
            <h3>Brinde Grátis - Protected Folder</h3>
            <p>1 Ano de Assinatura por R$ 0 (avaliado em R$ 99,99)</p>
            <p>Proteção de senha para pastas e arquivos no Windows</p>
            <p>Te protege contra a perda de arquivos importantes causadas por vírus</p>
          </div>
        </div>
      </div>
    </div>
    <!-- gift message end -->
    <!-- between-buy start -->
    <div class="between-buy">
      <div class="wrapper">
        <p class="price"><strong>R$ 55,99 </strong> <del>R$ 199,98</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-iu83pcpf5599&ref=pt_iu83pcpfpurchase1811<?php echo $refStr;?>&refs=pt_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8purchase1811-pt')">
          <i></i> <span>ATIVAR AGORA</span>
        </a>
        <p class="last"> <i></i> Mais de <span class="buyNum"><?php echo $buyNum;?></span> pessoas já compraram</p>
      </div>
    </div>
    <!-- between-buy end -->
    <!-- user start -->
    <div class="user">
        <div class="wrapper clearfix">
          <h2>
            IObit Uninstaller Pro já limpou mais de <b class="buy-num"><?php echo $buyNum;?></b> PCs.
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
    <!-- comparison start -->
    <div class="comparison wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Características & Benefícios</th>
            <th class="itemb">IObit Uninstaller 8 <span>FREE</span></th>
            <th class="itema"><strong>IObit Uninstaller 8 PRO</strong>
                <div class="price">
                    <span>R$ 55,99</span> <del>R$ 199,98</del>
                </div>
                <a href="https://www.iobit.com/buy.php?product=pt-iu83pcpf5599&ref=pt_iu83pcpfpurchase1811<?php echo $refStr;?>&refs=pt_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8purchase1811-pt')" class="buybtn">Comprar Agora</a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon1.png')?>" alt="" /></td>
            <td class="virtue first"><span>Desinstala programas via ícone do área de trabalho, janela aberta ou bandeja do sistema</span> <sup class="novo">Novo</sup></td>
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
            <td class="virtue">Suporta a remoção de programas teimosos <sup class="threex">Melhorado</sup></td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons orange"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon4.png')?>" alt="" /></td>
            <td class="virtue">Detecta e desinstala programas que vem instalados junto com freeware <sup class="novo mr">Novo</sup></td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons orange"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon8.png')?>" alt="" /></td>
            <td class="virtue first">Deleta automaticamente sobras de programas que outros utilitários não conseguem <sup>Melhorado</sup></td>
            <td class="itemb"><i class="all-icons circle"></i></td>
            <td class="itema"><i class="all-icons orange"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon6.png')?>" alt="" /></td>
            <td class="virtue">Suporta a identificação e remoção de plugins maliciosos <sup class="threex twox">Melhorado</sup></td>
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
        <tfoot>
            <tr>
                <th colspan="2"></th>
                <th class="itemb">IObit Uninstaller 8 <span>FREE</span></th>
                <th class="itema"><strong>IObit Uninstaller 8 PRO</strong>
                    <div class="price">
                        <span>R$ 55,99</span> <del>R$ 199,98</del>
                    </div>
                    <a href="https://www.iobit.com/buy.php?product=pt-iu83pcpf5599&ref=pt_iu83pcpfpurchase1811<?php echo $refStr;?>&refs=pt_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8purchase1811-pt')" class="buybtn">Comprar Agora</a>
                </th>
            </tr>
        </tfoot>
      </table>
    </div>
    <!-- comparison end -->
    <!-- service start -->
    <ul class="service wrapper clearfix">
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
    <div class="footer wrapper clearfix">
      <p class="note">Observe:</p>
      <p class="note">1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.</p>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
    </div>
    <!--footer end -->
    <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
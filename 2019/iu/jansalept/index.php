<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }

$reduceNum=76347174;
$buyNum = ceil(microtime_float() * 1000 / 20000)-$reduceNum;
$buyNum = number_format($buyNum);

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptascout' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24 * 2);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
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
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adquira IObit Uninstaller 11 PRO com 65% de desconto e leve dois super brindes. Oferta Limitada da IObit. </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>r="+Math.random()+"&reTime=20",
        success: function(packs){
          $('.buy-num').html(strFormat(packs));
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>
<body>
  <!-- header start -->
  <div class="header">
    <div class="wrapper clearfix">
      <a class="logo fl" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="site fr">
        <span>SITE SEGURO:</span>
        <img src="<?php echo $pResUrl; ?>images/header_site.png">
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <h1 class="title">Ainda restam <b id="num" class="numbox"><div class="list">0</div><div class="list">0</div></b>Pacotes de Otimiza????o Total dispon??veis!</h1>
      <div class="panel clearfix">

        <div class="box left">
          <div class="top"><h2>Pacote para 1 PC</h2></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
            <del>R$ 69,99</del>
          </div>
          <div class="price">
            <p><strong><big>20%</big> OFF</strong></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pt-iu111pc5599&ref=pt_iu111pc1901<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu1pcpurchase1901-pt')">
             COMPRAR AGORA
            </a>
          </div>
        </div>

        <div class="box center active">
          <div class="top"><h2>Pacote de Limpeza para o PC</h2></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt=""/>
            <del>R$ 259,99</del>
          </div>
          <div class="price">
            <p><strong><big>75%</big> OFF</strong></p>
            <a class="buybtn green"
               href="https://www.iobit.com/buy.php?product=pt-iu113pcsd6499&ref=pt_iu113pcsd1901<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcsdpurchase1901-pt')">
             COMPRAR AGORA
            </a>
            <p class="people"> <i class="all-icons"></i> Mais de  <b class="buy-num"><?php echo $buyNum;?></b> pessoas j?? compraram </p>
          </div>
        </div>

        <div class="box right">
          <div class="top"><h2>Pacote para 3PCs</h2></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/iu-box-three.png')?>" alt=""/>
            <del>R$ 99,99</del>
          </div>
          <div class="price">
            <p><strong><big>40%</big> OFF</strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pt-iu113pc5999&ref=pt_iu113pc1901<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpurchase1901-pt')">
             COMPRAR AGORA
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->

  <!-- intro start -->
  <div class="intro intro-wr">
    <div class="wrapper">
      <h2>Veja abaixo como IObit Uninstaller 11 PRO vai deixar seu PC mais limpo e seguro</h2>
      <img class="interface" src="<?php echo getStaticUrl('images/iu_interface.png')?>" alt="" />
      <div class="clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/intro_icons01.png')?>" alt="" /></dt>
          <dd>
            <h3>SA??DE DO SOFTWARE</h3>
            <p>Nova fun????o que integra ferramentas fragmentadas. Limpar pacotes de instala????o e programas com problemas de desinstala????o.</p>
          </dd>
        </dl>
        <dl class="fr">
          <dt><img src="<?php echo getStaticUrl('images/intro_icons02.png')?>" alt="" /></dt>
          <dd>
            <h3>DESINSTALA????O COMPLETA</h3>
            <p>Banco de Dados atualizado para deletar completamente mais programas maliciosos e teimosos.</p>
          </dd>
        </dl>
      </div>
      <div class="clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/intro_icons03.png')?>" alt="" /></dt>
          <dd>
            <h3>ATUALIZA????O SEGURA DE PROGRAMAS</h3>
            <p>Com apenas 1-clique, voc?? pode atualizar mais m??ltiplos programas importantes assim que a nova vers??o oficial estiver dispon??vel.
</p>
          </dd>
        </dl>
        <dl class="fr last">
          <dt><img src="<?php echo getStaticUrl('images/intro_icons04.png')?>" alt="" /></dt>
          <dd>
            <h3>NAVEGA????O LIMPA E SEGURA</h3>
            <p>Lista e remove plugins maliciosos e de an??ncios do navegador e verifica por adwares para uma melhor experi??ncia de navega????o.</p>
            <a href="javascript: void(0);">Compare a vers??o pro e a vers??o free>></a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation wrapper">
    <h2>Leve um super brinde no Pacote de Limpeza para o PC</h2>
    <div class="clearfix">
      <!--
      <div class="item">
        <h4>Para seu Android</h4>
        <img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="AMC Security PRO"/>
        <h3>AMC Security</h3>
        <ul>
          <li>
            <i class="all-icons">???</i>
            <span>Limpa e acelera seu Android atrav??s da otimiza????o de RAM e armazenamento!</span></li>
          <li>
            <i class="all-icons">???</i>
            <span>Garante a seguran??a de seus pagamentos com prote????o contra anti-phishing e anti-roubo!</span>
          </li>
        </ul>
      </div>
      -->
      <div class="item">
        <h4> Para Sa??de do seu Disco </h4>
        <img class="fl" src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag Pro"/>
        <div class="fl">
          <h3>Smart Defrag Pro</h3>
          <ul>
            <li>
              <i class="all-icons">???</i>
              <span>Aumenta a velocidade de acesso aos arquivos no seu disco!</span>
            </li>
            <li>
              <i class="all-icons">???</i>
              <span>Desfragmenta arquivos automaticamente durante o tempo ocioso do sistema!</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <!-- user start -->
  <div class="user">
    <div class="wrapper clearfix">
      <h2>
        IObit Uninstaller Pro j?? limpou mais de <b class="buy-num"><?php echo $buyNum;?></b> PCs.
        <span>Chegou a hora de limpar o seu.</span>
      </h2>
      <ul class="user-list clearfix">
        <li class="fl">
          <img src="<?php echo getStaticUrl('images/ronan-levi.png')?>" alt="Ronan Levi" />
          <h4>Ronan Levi</h4>
          <p>
            ???Al??m de remover programas, IObit Uninstaller conta com Verifica????o Profunda para encontrar as sobras deixadas e remov??-las completamente do computador. Como algu??m que gosta de sempre cuidar do meu computador, desde que eu instalei IObit Uninstaller, eu s?? uso esse pro-grama para desinstalar aplicativos. Recomendo fortemente o uso do IObit Uninstaller.???
          </p>
        </li>
        <li class="fr">
          <img src="<?php echo getStaticUrl('images/fernando-lourenco-gomes.png')?>" alt="Fernando Louren??o Gomes" />
          <h4>Fernando Louren??o Gomes</h4>
          <p>
            ???IObit Uninstaller ?? uma ??tima ferramenta para desinstalar programas, barras de ferramentas e plugins. Tem sido muito ??til para mim pois n??o apenas desinstala programas e aplicativos, mas tamb??m como as entradas no registro relacionadas a eles. Tem uma interface intuitiva e bela e n??o precisa entender de inform??tica para us??-lo. Recomendo! ???
          </p>
        </li>
      </ul>
    </div>
  </div>
  <!-- user end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards clearfix">
      <h2>Recomendado tamb??m por</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="text" colspan="2">Caracter??sticas & Benef??cios</th>
          <th class="itemb">IObit Uninstaller 11 <span>FREE</span></th>
          <th class="itema">IObit Uninstaller 11 <span>PRO</span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon1.png')?>" alt="" /></td>
          <td class="virtue first"><span>Desinstala programas via ??cone do ??rea de trabalho, janela aberta ou bandeja do sistema</span></td>
          <td class="itemb"><i class="all-icons"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon2.png')?>" alt="" /></td>
          <td class="virtue">Remove extens??es do Chrome, Firefox, Edge, IE, et??.</td>
          <td class="itemb"><i class="all-icons"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon3.png')?>" alt="" /></td>
          <td class="virtue">Digitalize e remova pacotes de instala????o de software instalados e n??o usados para economizar espa??o  <sup class="novo">Novo</sup></td>
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
          <td class="virtue first">Deleta automaticamente sobras de programas que outros utilit??ios n??o conseguem <sup>Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon6.png')?>" alt="" /></td>
          <td class="virtue">Suporta a identifica????o e remo????o de plugins maliciosos <sup class="threex twox">Melhorado</sup></td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon7.png')?>" alt="" /></td>
          <td class="virtue">Suporta a identifica????o e remo????o de plugins maliciosos e programas teimosos <sup class="threex twox">Melhorado</sup></td>
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
          <td class="virtue">Grava e reverte mudan??as de sistema feitos ap??s instala????es de programas </td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon9.png')?>" alt="" /></td>
          <td class="virtue">Atualiza????o autom??tica para a ??ltima vers??o</td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt="" /></td>
          <td class="virtue">Suporte T??cnico Gratuito 24 horas por dia</td>
          <td class="itemb"><i class="all-icons circle"></i></td>
          <td class="itema"><i class="all-icons orange"></i></td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imgbox eight"></div>
      <ul class="fl">
        <li class="eight active" data-num="1">
          <span>Pacote de Limpeza para o PC</span>
          <strong>-75%</strong>
        </li>
        <li data-num="2">
          <span> Pacote para 3 PCs</span>
          <strong>-40%</strong>
        </li>
        <li data-num="0">
          <span> Pacote para 1 PC</span>
          <strong>-20%</strong>
        </li>
      </ul>
      <div class="price fr">
        <p class="discount">
          <strong>R$<big>64</big>,99</strong> <del>R$ 259,99</del>
        </p>
        <a class="buybtn green"
           href="https://www.iobit.com/buy.php?product=pt-iu113pcsd6499&ref=pt_iu113pcsd1901<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcsdpurchase1901-pt')">
          COMPRAR AGORA
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <div class="wrapper">
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
      <p class="note">1*. Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempo em tempo conforme nossos crit??rios.</p>
      <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
    </div>
    <!--footer end -->
  </div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
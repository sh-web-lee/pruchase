<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) -71807174;
$buyNum = number_format($buyNum,0,'','.');
$refStr='';
$viewNum=rand(96,125);
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='frdboct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>2){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=2;
    }
  }else{
    $packsNum=97;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Adquira Advanced SystemCare Ultimate 12 Pro com 75% de desconto e leve dois super brindes grátis para cuidar do seu PC. Oferta Especial de Natal da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      Promoção Exclusiva de Natal!
      A melhor oferta do ano, aproveite!
    </h1>
    <!-- content -->
    <div class="content clearfix">
      <!-- left-message -->
      <div class="left-message fl">
        <img src="<?php echo $pResUrl;?>images/banner-db.png" alt="">
        <img class="db-reduce" src="<?php echo $pResUrl;?>images/banner-db-reduce.png" alt="">
        <img class="banner-off85" src="<?php echo $pResUrl;?>images/banner-off75.png" alt="">
      </div>
      <!-- right-message -->
      <div class="right-message fr">
        <!-- title -->
        <h3>Oferta Limitada, apenas 500 pacotes disponíveis!</h3>
        <!-- surplus -->
        <p class="surplus">Restam <b class="one">0</b><b class="two">0</b><b class="three">0</b> hoje!</p>
        <!-- progressbar -->
        <div class="progressbar">
          <span></span>
        </div>
        <!-- view -->
        <p class="view"><span class="viewNum"><?php echo $viewNum;?></span> pessoas estão visitando essa página!</p>
        <!-- price -->
        <p class="price">
          <strong>R$ 89,99</strong>
          <del> R$ 399,97</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-ascu123pcsdiu8999&ref=pt_ascu123pcsdpurchase1811<?php echo $refStr;?>&refs=pt_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu12purchase1811-pt')">
          COMPRAR AGORA
        </a>
        <!-- attention -->
        <p class="attention">1 ano de assinatura / 3 PCs</p>
        <!-- moneyback -->
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      </div>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- hightlight start -->
<div class="hightlight wrapper clearfix">
  <h2>Advanced Systemcare Ultimate Traz produtividade e segurança para seu dia a dia</h2>
  <img src="<?php echo getStaticUrl('images/hightlight.jpg')?>" alt="" class="img-box" />
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" /></dt>
    <dd>
      <strong>Proteja-se contra ameaças onlines e ataques de vírus</strong>
      <p>
        O motor antivírus Bitdefender garante segurança máxima e <br>
        é capaz de detectar vírus, ransomwares e diversos tipos de <br>
        ameaça que podem danificar ou ameaçar seu PC.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" /></dt>
    <dd>
      <strong>Seus dados estarão seguros de hackers</strong>
      <p>
        Limpa automaticamente rastros de privacidade e protege o <br>
        roubo de seus dados por spywares, adwares e malwares.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" /></dt>
    <dd>
      <strong>Libera o verdadeiro potencial do seu PC</strong>
      <p>
        Assista vídeos, jogue e trabalhe com múltiplos programas ao <br>
        mesmo tempo. Dê adeus aos travamentos constantes e <br>
        computador lento.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" /></dt>
    <dd>
      <strong>Surfe a Internet com 300% mais rapidez</strong>
      <p>
        Acesse o seu conteúdo favorito com mais velocidade e gaste <br>
        menos tempo carregando páginas e vídeos. <br>
      </p>
    </dd>
  </dl>
</div>
<!-- hightlight end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Profitez des cadeaux exclusifs uniquement pour Noël !</h2>
    <!-- SD -->
    <div class="list">
      <img class="fl" src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="" />
      <div class="box fl">
        <h3>Smart Defrag</h3>
        <h4><strong>R$ 0 </strong> <del>R$ 99,99</del> 1 ano / 1 PC </h4>
        <ul>
          <li>
            <span>Desfragmenta automaticamente seu PC <br> e acelera a velocidade de acesso a arquivos!</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- IU -->
    <div class="list iu">
      <img class="fl" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" />
      <div class="box fl">
        <h3>IObit Uninstaller 8 PRO</h3>
        <h4><strong>R$ 0 </strong> <del>R$ 99,99</del> 1 ano / 1 PC  </h4>
        <ul>
          <li>
            <span>Desinstale programas teimosos e plugins <br> maliciosos para manter o seu PC limpo </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- gift-box end -->

<!-- review start -->
<div class="user clearfix">
  <div class="wrapper">
    <h2>
      Advanced SystemCare Ultimate já cuidou de mais de <strong><?php echo $buyNum; ?></strong> de PCs. <span>Chegou a hora de cuidar do seu.</span>
    </h2>
    <ul class="user-list">
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/rod-garnett.png')?>" alt="Rod Garnett">
        <h4>Rod Garnett</h4>
        <p>
          "Sempre tive problemas com meu computador! Então adquiri a minha primeira versão de Advanced Systemcare e desde então não tive mais nenhum problema. Agora que tenho antivírus incluído no produto, não existe mais necessidade de um software secundário. Advanced System Care Ultimate é o Melhor! O meu computador está sempre atualizado e funciona rapidamente. Ao contrário de outros produtos, não tenho mais conflitos constantes."
        </p>
      </li>
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/russel-pack.png')?>" alt="Russel Pack">
        <h4>Russel Pack</h4>
        <p>
          "Eu usei várias versões do Advanced SystemCare no decorrer de alguns anos . Quando eu soube das funções do Advanced SystemCare Ultimate eu sabia que deveria tentá-lo e ele não me desapontou. Um dos programas mais simples porém mais efetivos que eu encontrei para manter meus três computadores rodando perfeitamente."
        </p>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Recomendado também por</h2>
  <img src="<?php echo getStaticUrl('images/awards.jpg')?>" alt="" />
</div>
<!-- awards end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="left-message">
      <img src="<?php echo $pResUrl;?>images/bottom-db.png" alt="">
      <img class="db-reduce" src="<?php echo $pResUrl;?>images/bottom-db-reduce.png" alt="">
    </div>
    <dl class="price-content">
      <dt>
        <h3>Stock limitÉ ! 1er arrivÉ, 1er servi !</h3>
        <!-- price -->
        <p class="price">
          <strong>R$ 89,99</strong>
          <del> R$ 399,97</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-ascu123pcsdiu8999&ref=pt_ascu123pcsdpurchase1811<?php echo $refStr;?>&refs=pt_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu12purchase1811-pt')">
          COMPRAR AGORA
        </a>
        <!-- attention -->
        <p class="attention"><i></i>Atenção, apenas <span class="packsNum"><?php echo $packsNum?></span> disponíveis</p>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!-- service start -->
<div class="service">
  <ul class="wrapper clearfix">
    <li>
      <h5>Garantia de Reembolso</h5>
      <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="">
    </li>
    <li>
      <h5>Formas de Pagamento</h5>
      <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
    </li>
    <li>
      <h5>Pagamento 100% Seguro</h5>
      <img src="<?php echo getStaticUrl('images/secured.png')?>" alt="">
    </li>
  </ul>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <p class="note">
      Observe:<br>
      1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.
      <br>
      2*.Informações podem variar com base em diferentes sistemas ou computadores.
    </p>
    <p class="copyright">
      Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados
    </p>
  </div>
</div>
<!-- footer end -->

<div class='popout'><p>ASCU v12 irá reconhecer a chave de licença do ASCU v11 como <strong>válida para ASCU v12.</strong></p></div>

<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
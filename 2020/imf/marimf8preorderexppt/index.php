<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptimf8exp_p' . $date;
  $c_name_t='ptimf8exp_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

$isNewUser=false;
$isNewUserV = false;
$isNewRef = false;
if(preg_match('/^7\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
    'imfpro','iufree','iupro','dbfree',
    'dbpro','isu'))){
  $isNewUser=true;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
    'imfpro','iufree','iupro','dbfree',
    'dbpro','isu'))){
    $isNewRef = true;
  }
}
if(preg_match('/^5\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
    'imfpro','iufree','iupro','dbfree',
    'dbpro','isu'))){
  $isNewUserV = true;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
    'imfpro','iufree','iupro','dbfree',
    'dbpro','isu'))){
    $isNewRef = true;
  }
}

$packsNum=49;
// $transData=json_decode(base64_decode($_GET['num']));
// if(!empty($transData)){
//   if(@intval($transData->seats)){
//     $packsNum=@intval($transData->seats);
//   }
// }

$transData=$_GET['fileto'].$_GET['rsto'].$_GET['camto'].$_GET['traceto'];

$popStr=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$isNewRef = false;
if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
  'imfpro','iufree','iupro','dbfree',
  'dbpro','isu'))){
  $isNewRef = true;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pague R$ 0 para adquirir o novo IObit Malware Fighter 8 PRO na pr??-venda</title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    <h1 class="title">A PR??-VENDA COME??A AGORA</h1>
    <div class="clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
      </div>
      <div class="msgbox fl">
        <h2>R$ 0 para ter a vers??o PRO novamente</h2>
        <div class="barbox clearfix">
          <div class="progressbar fl">
            <span class="reducebar">Primeiros 500 Clientes</span>
            <div class="numbox">
              <span class="totalNum">0</span> vendidos, <b class="reduceNum"><em>0</em></b> pacotes restantes
            </div>
          </div>
          <div class="changebar fl"><span>Pr??ximos 500 Clientes</span></div>
        </div>
        <ul class="barprice">
          <li>R$ 0*</li>
          <li class="last">R$ 69,99</li>
        </ul>
        <ul class="price">
          <li class="first">
            <p><strong>R$ 0</strong><sup>*</sup></p>
          </li>
          <li>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pt-imf8preorder&ref=pt-imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderexp-pt');">
              Adquirir Agora
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <div class="arrow-down"></div>
    <h2>O que o IObit Malware Fighter PRO fez por voc???</h2>
    <div class="clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <span class="line-left line"></span>
      </div>
      <div class="message fr">
        <h3>Protegeu seu PC</h3>
        <ul>
          <li>
            Removeu <?php if(!empty($_GET['fileto'])):?><b class="remove"><?php echo number_format($_GET['fileto'])?></b><?php endif;?> amea??as de seguran??a para um PC mais seguro
          </li>
          <li>
            Impediu que <?php if(!empty($_GET['rsto'])):?><b class="stop"><?php echo number_format($_GET['rsto'])?></b><?php endif;?> ransomware fizesse seu PC de ref??m
          </li>
          <li>
            Impediu que <?php if(!empty($_GET['fileto'])):?><b class="remove"><?php echo number_format($_GET['fileto'])?></b><?php endif;?> amea??as no drive USB infectassem seu PC
          </li>
          <li>Ativou prote????o <b>completa</b> em tempo-real</li>
        </ul>
      </div>
    </div>
    <div class="clearfix">
      <div class="message message2 fl">
        <h3>Protegeu sua Privacidade</h3>
        <ul>
          <li>
            Detectou <?php if(!empty($_GET['camto'])):?><b class="detect"><?php echo number_format($_GET['camto'])?></b><?php endif;?> acessos suspeitos a sua webcam
          </li>
          <li>
            Apagou <?php if(!empty($_GET['traceto'])):?><b class="online"><?php echo number_format($_GET['traceto'])?></b><?php endif;?> rastros onlines para evitar bisbilhoteiros
          </li>
          <li><b>Protegeu com Senha</b> seus arquivos pessoais</li>
        </ul>
      </div>
      <div class="imgbox imgbox2 fr">
        <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
        <span class="line-right line"></span>
        <span class="shield-box"><em class="shield"></em><em class="shield-shadow"></em></span>
      </div>
    </div>
    <div class="fbottom">
      <h2>Sem a vers??o PRO, Voc?? Fica Sem:</b></h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/screen03.png')?>" alt=""/>
          <span class="warning"></span>
        </div>
        <div class="message fr">
          <ul>
            <li>Prote????o contra malware e virus do Motor Bitdefender;</li>
            <li>Prote????o contra Ransomware do motor IObit Anti-ransomware;</li>
            <li>Prote????o para Webcam contra acesso n??o-autorizado;</li>
            <li>Prote????o contra amea??as de seguran??a do drive USB;</li>
            <li>Prote????o de privacidade com elimina????o dos rastros online de privacidade;</li>
            <li>Atualiza????o autom??tica de banco de dados de malware;</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- moregives start -->
<div class="moregives">
  <h2>A Nova Vers??o Vai Te Oferecer Ainda Mais:</h2>
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
      <dd>
        <big>100% Maior</big>
        <p>Bancos de Dados de Malware</p>
      </dd>
    </dl>
    <dl class="center">
      <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
      <dd>
        <big>50%* Mais R??pida</big>
        <p>Velocidade de Verifica????o</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
      <dd>
        <big>Prote????o de E-mail</big>
        <p>Para identificar links maliciosos</p>
      </dd>
    </dl>
  </div>
</div>
<!-- moregives end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>O Que Usu??rios como Voc?? Dizem</h2>
    <div class="review-box">
      <div class="reviews">
        <div class="inner">
          <dl>
            <dt>Peter Stoffers</dt>
            <dd>
              "Alguns anos atr??s algu??m chamou a minha aten????o para o IObit Malware Fighter. No come??o eu estava c??tico, mas depois de instal??-lo,ele se tornou o meu programa anti-malware favorito. ?? muito f??cil de se usar. No decorrer dos anos, ele j?? detectou e removeu muitas amea??as. Em coopera????o com os outros programas da IObit, como por exemplo o ASC, eu tenho uma boa prote????o do PC e agora recomendo esse programa para todos os meus amigos e familiares."
            </dd>
          </dl>
          <dl>
            <dt>Mr. Craig E. Whittington</dt>
            <dd>
              "Como resultado de usar alguns produtos da IObit, eu fiquei impressionado com a inova????o e resultado obtido com esses produtos. Eu posso recomendar o IObit Malware Fighter. "O IObit Malware Fighter roda quieto em segundo plano sem precisar que voc?? d?? muita aten????o a ele. Eu estou confiante que o IObit Malware Fighter ?? capaz de monitorar malwares & preven??-los de chegar ao meu computador. Eu recomendo IObit Malware Fighter a todos os usu??rios."
            </dd>
          </dl>
          <dl>
            <dt>David Cassidy</dt>
            <dd>
              "Aqueles que est??o procurando por um bom antiv??rus e anti-malware a um pre??o acess??vel n??o precisam ir al??m do IObit Malware Fighter. Eu recomendo que eles esque??am do resto e escolha o melhor, que ?? o IObit Malware Fighter."
            </dd>
          </dl>
        </div>
      </div>
      <div class="handle">
        <span class="one"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"/></span>
        <span class="two on"><img src="<?php echo getStaticUrl('images/craig-e-whittington.png')?>" alt="Mr. Craig E. Whittington"/></span>
        <span class="three"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></span>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Pr??mios da Imprensa Especializada</h2>
    <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
  </div>
</div>
<!-- awards end -->

<!-- footer start -->
<div class="footer">
  <dl class="wrapper">
    <dt>Nota:</dt>
    <dd>
      *.No fim do per??odo de teste de 30 dias, o seu cart??o de cr??dito ou conta do Paypal ser?? cobrado R$69,99 automaticamente. Este desconto de 55% no pre??o original de R$ 159,90 ?? um b??nus <br> &nbsp; apenas para pr??-venda!
    </dd>
    <dd>
      *.Se voc?? n??o est?? satisfeito, voc?? pode cancelar o pedido que voc?? fez dentro de 30 dias sem qualquer custo.
    </dd>
  </dl>
  <!-- <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p> -->
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
    </div>
    <div class="barbox fl">
      <h2>Pague R$0 na Pr??-Venda Agora</h2>
      <div class="numbox">
        Apenas para os primeiros 500 clientes, <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> pacotes restantes
      </div>
    </div>
    <ul class="price fr">
      <li class="first">
        <p><strong>R$ 0</strong><sup>*</sup></p>
      </li>
      <li>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-imf8preorder&ref=pt-imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderexp-pt');">
          Adquirir Agora
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- floatlayer end -->

<script>
  packsNum=<?php echo $packsNum;?>;
  refStr="<?php echo $refStr;?><?php echo $popStr;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
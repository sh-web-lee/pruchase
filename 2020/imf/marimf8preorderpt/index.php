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
  $c_name = 'ptimf8xr_p' . $date;
  $c_name_t='ptimf8xr_t' . $date;
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
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}

$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$isNewRef = false;
if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
  'imfpro','iufree','iupro','dbfree',
  'dbpro','isu'))){
  $isNewRef = true;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Pague R$ 0 para adquirir o novo IObit Malware Fighter 8 PRO na pré-venda</title>
  <meta name="Copyright" content="IObit">
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
    <h1 class="title">A PRÉ-VENDA COMEÇA AGORA</h1>
    <div class="clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
      </div>
      <div class="msgbox fl">
        <h2>R$ 0 para adquirir o IObit Malware Fighter 8 PRO <br> na pré-venda</h2>
        <div class="barbox clearfix">
          <div class="progressbar fl">
            <span class="reducebar">Primeiros 500 Clientes</span>
            <div class="numbox">
              <span class="totalNum">0</span> vendidos, <b class="reduceNum"><em>0</em></b> pacotes restantes
            </div>
          </div>
          <div class="changebar fl"><span>Próximos 500 Clientes</span></div>
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
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorder-pt');">
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
<div class="feature ftop">
  <div class="wrapper">
    <h2>Fique Seguro Agora com IObit Malware Fighter 8 PRO</h2>
    <div class="arrow-down"></div>
    <h3 class="hfirst">Previna que malware infecte seu computador</h3>
    <div class="feature-step clearfix">
      <div class="imgbox fl">
        <span class="browser"></span>
        <span class="files file-left"></span>
        <span class="files file-right"></span>
        <span class="worm">
            <em class="worm-legs-left01 on"></em>
            <em class="worm-legs-left02 on"></em>
            <em class="worm-legs-left03 on"></em>
            <em class="worm-legs-right01 on"></em>
            <em class="worm-legs-right02 on"></em>
            <em class="worm-legs-right03 on"></em>
          </span>
        <span class="worm-small worm-small-left"></span>
        <span class="worm-small worm-small-right"></span>
        <span class="worm-mask"></span>
        <span class="lock close"></span>
        <!-- <span class="lock open"></span> -->
        <span class="chain left"></span>
        <span class="chain right"></span>
        <span class="shield"><em class="star"></em></span>
      </div>
      <div class="message fr">
        <dl>
          <dt><h4>Motor Bitdefender</h4></dt>
          <dd>Detecta mais de 200 milhões de malware com alta precisão em tempo real.</dd>
        </dl>
        <dl>
          <dt><h4>Proteção contra Ransomware</h4></dt>
          <dd>Protege seu PC contra ransomware que criptografa seus arquivos e pede por dinheiro para liberá-los.</dd>
        </dl>
        <dl>
          <dt><h4>Guarda USB</h4></dt>
          <dd>Protege seu PC de virus e malware que podem te infectar através de dispositivos USB conectados.</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<div class="feature fbottom">
  <div class="wrapper">
    <h3 class="hlast">Não deixe que hackers espiem você</h3>
    <div class="feature-step clearfix">
      <div class="message fl">
        <dl>
          <dt><h4>Cofre</h4></dt>
          <dd>Protege sua privacidade e dados pessoais de acesso não-autorizado.</dd>
        </dl>
        <dl>
          <dt><h4>Guarda da Câmera</h4></dt>
          <dd>Detecta e impede que intrusos acessem sua webcam.</dd>
        </dl>
        <dl>
          <dt><h4>Anti-rastreamento</h4></dt>
          <dd>Apaga automaticamente seus rastros para esconder suas atividades online quando você fecha seu navegador.</dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <span class="inner"></span>
        <span class="webpage"></span>
        <span class="red-circle"></span>
        <span class="codebox"></span>
        <span class="thief"></span>
        <span class="thief-hook"></span>
        <span class="password"></span>
        <span class="wordbox left"></span>
        <span class="safebox"><em class="safe-handle"></em></span>
        <span class="shieldtwo"><em class="fork"></em></span>
      </div>
    </div>
    <h3>Disponibiliza proteção Completa em tempo real</h3>
    <div class="realtime">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
        <dd><h4>Proteção de E-mail <span><em>NOVO</em></span></h4></dd>
        <dd>Detecta links <br> maliciosos no e-mail.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
        <dd><h4>Detecção de Websites Maliciosos</h4></dd>
        <dd>Protege sua navegação de ataques <br> de phishing e anúncios irritantes.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
        <dd><h4>Proteção de Download</h4></dd>
        <dd>Mantém seu PC longe <br> de arquivos maliciosos.</dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>O Que Usuários como Você Dizem</h2>
    <div class="review-box">
      <div class="reviews">
        <div class="inner">
          <dl>
            <dt>Peter Stoffers</dt>
            <dd>
              "Alguns anos atrás alguém chamou a minha atenção para o IObit Malware Fighter. No começo eu estava cético, mas depois de instalá-lo,ele se tornou o meu programa anti-malware favorito. É muito fácil de se usar. No decorrer dos anos, ele já detectou e removeu muitas ameaças. Em cooperação com os outros programas da IObit, como por exemplo o ASC, eu tenho uma boa proteção do PC e agora recomendo esse programa para todos os meus amigos e familiares."
            </dd>
          </dl>
          <dl>
            <dt>Mr. Craig E. Whittington</dt>
            <dd>
              "Como resultado de usar alguns produtos da IObit, eu fiquei impressionado com a inovação e resultado obtido com esses produtos. Eu posso recomendar o IObit Malware Fighter. "O IObit Malware Fighter roda quieto em segundo plano sem precisar que você dê muita atenção a ele. Eu estou confiante que o IObit Malware Fighter é capaz de monitorar malwares & prevení-los de chegar ao meu computador. Eu recomendo IObit Malware Fighter a todos os usuários."
            </dd>
          </dl>
          <dl>
            <dt>David Cassidy</dt>
            <dd>
              "Aqueles que estão procurando por um bom antivírus e anti-malware a um preço acessível não precisam ir além do IObit Malware Fighter. Eu recomendo que eles esqueçam do resto e escolha o melhor, que é o IObit Malware Fighter."
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
    <h2>Prêmios da Imprensa Especializada</h2>
    <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
  </div>
</div>
<!-- awards end -->

<!-- footer start -->
<div class="footer">
  <dl class="wrapper">
    <dt>Nota:</dt>
    <dd>
      *.No fim do período de teste de 30 dias, o seu cartão de crédito ou conta do Paypal será cobrado R$69,99 automaticamente. Este desconto de 55% no preço original de R$ 159,90 é um bônus <br> &nbsp; apenas para pré-venda!
    </dd>
    <dd>
      *.Se você não está satisfeito, você pode cancelar o pedido que você fez dentro de 30 dias sem qualquer custo.
    </dd>
  </dl>
  <!-- <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p> -->
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
    </div>
    <div class="barbox fl">
      <h2>Pague R$ 0 na Pré-Venda</h2>
      <div class="numbox">
        Apenas para os primeiros 500 clientes, <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> pacotes  restantes
      </div>
    </div>
    <ul class="price fr">
      <li class="first">
        <p><strong>R$ 0</strong><sup>*</sup></p>
      </li>
      <li>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-imf8preorder&ref=pt-imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorder-pt');">
          Adquirir Agora
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- floatlayer end -->

<script>
  packsNum=<?php echo $packsNum;?>;
  refStr="<?php echo $refStr;?>";
</script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
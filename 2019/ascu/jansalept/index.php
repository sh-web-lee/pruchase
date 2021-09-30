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
$reduceNum=71807174;
$buyNum = ceil(microtime_float() * 1000 / 20000)-$reduceNum;
$buyNum = number_format($buyNum);
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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title> Adquira Advanced SystemCare Ultimate 14 para 3 PCs com 55% de desconto e leve um Super Brinde Grátis. Oferta Especial da IObit. </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
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

<!-- banner start -->
<div class="header clearfix">
    <div class="wrapper">
        <div class="head">
            <a href="https://www.iobit.com/pt/index.php" target="_blank" class="logo">IObit</a>
            <h1>PROMOÇÃO RELÂMPAGO</h1>
            <h2>Aproveite 55% de desconto para continuar com seu PC livre de problemas! </h2>
        </div>
        <div class="banner">
            <img class="sign" src="<?php echo $pResUrl; ?>images/sign.png" alt=""/>
            <div class="banner-left fl">
                <img class="box-imf" src="<?php echo $pResUrl; ?>images/boxsort-ascu.png" alt=""/>
                <span>Oferta termina em</span>
                <ul class="time">
                    <li>5</li>
                    <li>30</li>
                    <li>60</li>
                    <li class="last">60</li>
                </ul>
            </div>
            <div class="banner-right fr">
                <h2>Advanced SystemCare Ultimate 14 - 1 ano / 3 PCs</h2>
                <p class="decri">+ Smart Defrag 7 Pro (Grátis!)</p>
                <span class="banner-line"></span>
                <p class="de-price">De <del>R$ 199,90</del></p>
                <p class="main-price">6x de <b>R$ 14,99</b></p>
                <p class="small-price">ou <b>R$ 89,99</b> a vista</p>
                <span class="banner-line"></span>
                <a class="buy-btn" href="https://www.iobit.com/buy.php?product=pt-ascu143pcsdiu8999&ref=pt_ascu143pc2001<?php echo $refStr;?>&refs=pt_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu3pcpurchase2001-pt')">COMPRAR AGORA</a>
                <p class="people-box"><img src="<?php echo $pResUrl; ?>images/people.png" alt=""/>Mais de <b class="people-num buy-num"><?php echo $buyNum;?></b> pessoas já compraram</p>
                <div class="payments">
                    <h4>Formas de Pagamento</h4>
                    <img src="<?php echo $pResUrl; ?>images/paymens.png" alt=""/>
                </div>
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


<!-- review start -->
<div class="user clearfix">
  <div class="wrapper">
    <h2>
      Advanced SystemCare Ultimate já cuidou de mais de <strong class="buy-num"><?php echo $buyNum; ?></strong> de PCs. <span>Chegou a hora de cuidar do seu.</span>
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
<div class="bottom-buy wrapper clearfix">
  <h2>Com apenas R$ 0,25 por dia, você mantém seu PC otimizado e livr</h2>
  <h3>Assine por um ano e leve um super brinde para a saúde do seu disco</h3>
  <div class="box-contain">
    <img src="<?php echo $pResUrl; ?>images/boxsort-ascu-small.png" alt=""/>
    <div class="bottom-btn">
      <p class="bottom-price">6x de <b>R$ 14,99</b>(ou R$ 89,99 a vista)</p>
      <a class="buy-btn" href="https://www.iobit.com/buy.php?product=pt-ascu143pcsdiu8999&ref=pt_ascu143pc2001<?php echo $refStr;?>&refs=pt_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu3pcpurchase2001-pt')">COMPRAR AGORA</a>
      <span class="btn-prce">Economize <b>R$ 110,00</b></span>
    </div>
  </div>
</div>

<!-- service start -->
<ul class="service wrapper clearfix">
  <li>
    <h5>Garantia de Reembolso</h5>
    <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="">
  </li>
  <li>
    <h5> Atendimento 24 Horas</h5>
    <img src="<?php echo getStaticUrl('images/service.png')?>" alt="">
  </li>
  <li>
    <h5>Pagamento 100% Seguro</h5>
    <img src="<?php echo getStaticUrl('images/secured.png')?>" alt="">
  </li>
</ul>
<!-- service end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <p class="note">
      Observe:<br>
      1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.
    </p>
    <p class="copyright">
      Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados
    </p>
  </div>
</div>
<!-- footer end -->

<div class='popout'><p>ASCU v12 irá reconhecer a chave de licença do ASCU v11 como <strong>válida para ASCU v12.</strong></p></div>
<script type="text/javascript">
function cycleCountdown(){
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
  $(".time li").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout('cycleCountdown()', 1);
}
cycleCountdown();
$(function(){
    $('.buy-num').html(strFormat($('.buy-num').html()));
});
function strFormat(str){
    return str.replace(/,/g,'.');
}
</script>
</body>
</html>
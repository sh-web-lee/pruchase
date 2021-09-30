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

$refStr='';
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].'-'.$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Adquira IObit Software Updater Pro com 45% de Desconto e leve Protected Folder de brinde. Oferta Limitada da IObit</title>
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
            <h1>Oferta Especial de Lançamento</h1>
            <h2>Aproveite um super-desconto de lançamento para manter seus programas atualizados e leve um brinde grátis!</h2>
        </div>
        <div class="banner">
            <img class="sign" src="<?php echo $pResUrl; ?>images/sign.png" alt=""/>
            <div class="banner-left fl">
                <img class="box-imf" src="<?php echo getStaticUrl('images/isu-box.png')?>" alt=""/>
                <span>Oferta termina em</span>
                <ul class="time">
                    <li>5</li>
                    <li>30</li>
                    <li>60</li>
                    <li class="last">60</li>
                </ul>
            </div>
            <div class="banner-right fr">
                <h2>IObit Software Updater 4 – 1 ano / 3 PCs</h2>
                <p class="decri">+ Protected Folder (Grátis!)</p>
                <span class="banner-line"></span>
                <p class="de-price">De <del>R$ 99.99</del></p>
                <p class="main-price">6x de <b>R$ 8,67</b></p>
                <p class="small-price">ou <b>R$ 51,99</b> a vista</p>
                <span class="banner-line"></span>
                <a class="buy-btn" href="https://www.iobit.com/buy.php?product=pt-isu43pcpf5199&ref=pt_isu43pcpfpurchase2104<?php echo $refStr;?>&refs=pt_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2104-pt');">COMPRAR AGORA</a>
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
  <h2>Conheça como o IObit Software Updater Pro pode beneficiar seu PC</h2>
  <img class="img-box" src="<?php echo getStaticUrl('images/hightlight.jpg')?>" alt=""/>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" /></dt>
    <dd>
      <strong>Atualizações Automática de Programas</strong>
      <p>
        Com a versão Pro, você contará com atualizações automáticas agendadas de acordo com suas preferências, além de atualização silenciosa que rodaram no fundo sem interferir o seu trabalho.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" /></dt>
    <dd>
      <strong>Segurança Total nas Atualizações</strong>
      <p>
        IObit Software Updater Pro cria pontos de restauração automáticos a cada atualização para impedir que seu PC seja afetado por uma atualização que comprometa o funcionamento do Windows. 
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" /></dt>
    <dd>
      <strong>Limpeza Automática dos Pacotes de Instalações</strong>
      <p>
        Deleta automaticamente os pacotes de instalação de programas já instalados para liberar espaço em disco e facilitar a sua vida.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" /></dt>
    <dd>
      <strong>Assistência Técnica 24 horas</strong>
      <p>
        Conte com assistência técnica especializada 24 horas por dia para solucionar qualquer problema ou dúvida que você possa ter durante o uso do programa ou durante as atualizações.
      </p>
    </dd>
  </dl>
</div>
<!-- hightlight end -->

<!-- awards start -->
<!-- awards end -->

<!-- review start -->
<div class="user clearfix">
  <div class="wrapper">
    <h2>Conheça a opinião de usuários como você</h2>
    <ul class="user-list clearfix">
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/user-icon.png')?>" alt="Rod Garnett">
        <h4>Nico Bremmer</h4>
        <p>
          “É um excelente programa para atualização de programas, fácil de usar e simples. O uso do programa é intuitivo, ele funciona bem e é rápido. A interface é bela e moderna e é bom que possamos ver a versão antiga e a nova do programa que queremos atualizar. É também muito bom que o programa te dá dicas de novos programas.”
        </p>
      </li>
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/user-icon.png')?>" alt="Russel Pack">
        <h4>Joshua Irving</h4>
        <p>
          ”Eu adoro as atualizações automáticas, são rápidas e eficientes, e também criam um ponto de restauração antes da instalação apenas para o caso de algo dar errado. Eu também adoro o fato que o programa baixa as atualizações diretamente dos sites oficiais ao invés de eu ter que procurar o site de cada programa para baixar uma atualização. ”
        </p>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<div class="bottom-buy wrapper clearfix">
  <h2>Com apenas R$ 0,14  por dia, você mantém os programas do seu PC atualizados.</h2>
  <h3>Assine por um ano para 3 PCs e leve Protected Folder grátis</h3>
  <div class="box-contain">
    <img src="<?php echo getStaticUrl('images/isu-small-box.png')?>" alt=""/>
    <div class="bottom-btn">
      <p class="bottom-price">6x de <b>R$ 8,67</b>(ou R$ 51,99 a vista)</p>
      <a class="buy-btn" href="https://www.iobit.com/buy.php?product=pt-isu43pcpf5199&ref=pt_isu43pcpfpurchase2104<?php echo $refStr;?>&refs=pt_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2104-pt');">COMPRAR AGORA</a>
      <span class="btn-prce">Economize <b>R$ 48,00</b></span>
    </div>
  </div>
</div>

<!-- service start -->
<ul class="service wrapper clearfix">
  <li>
    <h5>Garantia de Reembolso</h5>
    <p><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></p>
  </li>
  <li>
    <h5>Ativação Imediata</h5>
    <p><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""></p>
  </li>
  <li>
    <h5>Pagamento 100% Seguro</h5>
    <p><img src="<?php echo getStaticUrl('images/secured.png')?>" alt=""></p>
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
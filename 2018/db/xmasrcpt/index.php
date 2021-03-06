<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='ptasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(66,94);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_db','xr_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adquira Driver Booster 6 Pro com 80% de desconto e leve um super brinde para cuidar dos discos do seu PC. Oferta Especial de Natal da IObit.  </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <h1>GRANDE OFFERTA DI NATALE!</h1>
      <p class="best">A Maior Promo????o do Ano ??? Sua Chance de Economizar!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster 6 PRO"/>
          <a class="hint" id="hint" href="javascript:void(0);"></a>
        </div>
        <div class="right fr">
          <h2>Driver Booster 6 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Corra! <b>05</b>Min: <b>00</b>Sec: <b class="last">000</b>MS Restantes</p>
            </div>
            <p><strong><small>R$ </small>69,99</strong> <del>R$ 399,89</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pt-db63pcsd6999&ref=pt_db63pcsdpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811rc-pt');">
              Comprar Agora
            </a>
            <p class="year">1 Ano de Assinatura / 3 PCs</p>
            <!-- money-back -->
            <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
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

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Um clique para atualizar drivers faltantes, desatualizados ou defeituosos!</h2>
      <p class="over">
        Mais de 3.500.000 usu??rios no mundo optaram por Driver Booster Pro para atualizar seus drivers com mais facilidade, efici??ncia e para melhorar sua experi??ncia de jogo.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt="Driver Booster 6 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Aggiorna oltre 3,000,000 di driver -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Atualiza 3,000,000+ de Drivers de Dispositivos</h3>
              <p>
                Verifica automaticamente por mais de 3.000.000 de drivers e recomenda atualiza????es para melhorar a estabilidade do sistema.
              </p>
              <p><b>20% mais que a vers??o gr??tis.</b></p>
            </dd>
          </dl>
          <!-- Migliore prestazione di gioco  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Desempenho de Jogo mais R??pido e Melhor</h3>
              <p>
                Verifica automaticamente por drivers relacionados a jogo e componentes de jogo. O ganho de rendimento em alguns jogos chega a 39%. 
              </p>
              <p><b>*Fun????o Exclusiva PRO</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Download di driver pi?? veloce -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Mais Rapidez na Atualiza????o de Drivers</h3>
              <p>
                Baixa drivers no tempo ocioso do sistema para economizar tempo e utiliza a velocidade m??xima para baixar drivers.
              </p>
              <p><b>*Fun????o Exclusiva PRO</b></p>
            </dd>
          </dl>
          <!--
            Nessuna scomparsa del suono e nessun
            problema di connessione a Internet
          -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Resolve Problemas de Som <br>e Internet</h3>
              <p>
                Corrige erros de dispositivo para reduzir problemas e conflitos com sua impressora, tela, internet, mouse e dispositivos internos.
              </p>
              <p><b>*Fun????o Exclusiva PRO</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifts -->
  <div class="gifts wrapper" id="gifts">
      <h2>Brinde Gr??tis Exclusivo no Natal 2018!</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
        <dd>
          <h3>Smart Defrag 6 PRO</h3>
          <del>R$ 99,99</del>  <b>R$ 0</b>
          <p class="first">- Acesso mais r??pido aos arquivos com acelera????o inteligente do Disco.</p>
          <p>- Desfragmenta????o autom??tica durante o tempo ocioso do sistea.</p>
          <p>- Inicializa????o mais r??pida com a desfragmenta????o dos arquivos antes da inicializa????o do sistema.</p>
        </dd>
      </dl>
  </div>
  <!-- end gifts -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Obtenha Pro para uma atualiza????o mais f??cil de drivers e desempenho melhor rodando jogos</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster 6 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes!
          </p>
        </div>
        <p><strong><small>R$ </small>69,99</strong> <del>R$ 399,89</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-db63pcsd6999&ref=pt_db63pcsdpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811rc-pt');">
          Comprar Agora
        </a>
        <p class="year">1 Ano de Assinatura / 3 PCs</p>
        <!-- money-back -->
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Veja o Que Voc?? Obter?? ao Ativar a Vers??o Pro:</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">Driver Booster <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>Driver Booster <br> <b>Pro</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema">2,500,000+</td>
          <td class="itemb">Banco de Drivers</td>
          <td class="itemc">3,000,000+</td>
        </tr>
        <tr>
          <td class="itema">Limitada</td>
          <td class="itemb">Velocidade de Download de Drivers</td>
          <td class="itemc">Ilimitada</td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">??</i></td>
          <td class="itemb">Atualiza????o Autom??tica de Drivers Desatualizados</td>
          <td class="itemc"><i class="all-icons pro">???</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">??</i></td>
          <td class="itemb">Backup Autom??tico de drivers contra acidentes</td>
          <td class="itemc"><i class="all-icons pro">???</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">??</i></td>
          <td class="itemb">Corrige erros de dispositivos</td>
          <td class="itemc"><i class="all-icons pro">???</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">??</i></td>
          <td class="itemb">Verifica Componentes de jogos</td>
          <td class="itemc"><i class="all-icons pro">???</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">??</i></td>
          <td class="itemb">Prioridade para verificar drivers game ready</td>
          <td class="itemc"><i class="all-icons pro">???</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">??</i></td>
          <td class="itemb">Atualiza automaticamente para ??ltima vers??o</td>
          <td class="itemc"><i class="all-icons pro">???</i></td>
        </tr>
        <tr>
          <td class="itema last"></td>
          <td class="itemb"></td>
          <td class="itemc last"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h3>N??O PERCA!</h3>
      <h2>Aproveite esta chance ??nica para comprar Driver Booster 6 Pro com 80% de Desconto</h2>
      <div class="price">
        <p><strong><small>R$ </small>69,99</strong> <del>R$ 399,89</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-db63pcsd6999&ref=pt_db63pcsdpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811rc-pt');">
          Comprar Agora
        </a>
        <p id="footdown" class="countdown">Corra! <b>05</b>Min: <b>00</b>Sec: <b class="last">000</b>MS Restantes</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- user start -->
  <div class="user wrapper clearfix">
    <h2>
      Driver Booster Pro j?? atualizou os drivers de mais de <strong class="buy-num buy-num-bot"><?php echo $buyNum;?></strong>  de PCs. <span>Chegou a hora de melhorar o seu PC.</span>
    </h2>
    <ul class="user-list clearfix">
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya" />
        <h4>Myo Thuya</h4>
        <p>
          "Com Driver Booster, eu consigo saber facilmente quais drivers est??o desatualizados e posso atualiz??-los com facilidade. Al??m disso, me ajuda a reparar erros como de rede. Eu n??o acreditava antes de usar, mas depois de test??-lo eu o adorei, pois meu PC est?? mais est??vel, r??pido e seguro do que h?? 8 meses atr??s. Muito obrigado, IObit."
        </p>
      </li>
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/talal-hafez.png')?>" alt="Talal Hafez" />
        <h4>Talal Hafez</h4>
        <p>
          "Uma verifica????o por dia mant??m os drivers sempre atualizados. Ao inv??s de procurar individualmente por atualiza????es de drivers; Driver Booster mant??m todos os drivers do meu PC atualizados com apenas um-clique! Driver Booster melhorou o meu PC para jogos, especialmente com os jogos mais recentes que precisam das ??ltimas atualiza????es. Os produtos da IObit me mostram a verdadeira capacidade do meu pc. "
        </p>
      </li>
    </ul>
  </div>
  <!-- user end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Recomendado tamb??m por </h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Tente SEM RISCOS ??? com nossa Garantia de 60 dias de Reembolso</h4>
            <p>
              N??s estamos confiantes que ativando a edi????o PRO voc?? obter?? um PC mais est??vel e uma melhor experi??ncia de jogo por um pre??o acess??vel! 
            </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>N??s aceitamos</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Observe:</dt>
          <dd>1*. Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempo em tempo conforme nossos crit??rios.</dd>
        </dl>
        <p>Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
      </div>
      <!-- footer end -->
    </div>
  </div>

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>

<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/db-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=pt-db63pcsd6499&ref=pt_db63pcsdpurchase1811rclp<?php echo $refStr;?>&refs=pt_purchase_db&tw=-8";
  var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811rclp-pt');";
  var viewNum = "<?php echo $viewNum;?>";
</script>

<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
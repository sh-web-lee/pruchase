<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$viewNum=rand(154,196);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbnew_p' . $date;
  $c_name_t='endbnew_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['to'])?'':('-').$_GET['to'];
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Adquira Driver Booster 8 Pro com 50% de desconto e suporte a 2PCs extras. Oferta Limitada da IObit.</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Prompt:400,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title">
        <h1>Adquira</h1>
        <p>seu Presente de Lan??amento do Driver Booster 8 PRO</p>
      </div>
      <div class="clearfix">
        <!-- left -->
        <div class="offer left">
          <div class="top">
            <h2>3 Meses</h2>
            <p><strong>R$<big>19,99</big>/M??s</strong></p>
            <p><span class="sign">SEM DESCONTO</span></p>
            <a class="buybtn small"
               href="https://www.iobit.com/buy.php?product=pt-db83pc3m5999&ref=pt-db83m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db "
               onclick="ga( 'send', 'event', 'db3mbuy', 'buy', 'dbpurchase-newlaunch-pt');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Comprar Agora</span>
            </a>
          </div>
          <div class="price">
            <h3>Pre??o</h3>
            <ul>
              <li><span>3 Meses</span><span class="right">R$59,99</span></li>
              <li><span><b>Total</b></span><span class="right"><b>R$59,99</b></span></li>
              <li class="last"><b class="red">(Economize R$0)</b></li>
            </ul>
          </div>
        </div>

        <!-- right -->
        <div class="offer right">
          <div class="top">
            <h2>Anual</h2>
            <p><strong>R$<big>6,67</big>/M??s</strong></p>
            <p><span class="sign">70% OFF + 2 Meses Gr??tis</span></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pt-db83pc14m7999&ref=pt-db814m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
               onclick="ga( 'send', 'event', 'db14mbuy', 'buy', 'dbpurchase-newlaunch-pt');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Comprar Agora</span>
            </a>
          </div>
          <div class="price">
            <h3>Pre??o</h3>
            <ul>
              <li><span>12 Meses</span><span class="right">R$ 299,90</span></li>
              <li><span>2 meses extras </span><span class="right"><del>R$ 39,00</del></span></li>
              <li><span>70% de Desconto</span><span class="right">- R$ 220,00</span></li>
              <li><span><b>Total</b></span><span class="right"><b>R$79,99</b></span></li>
              <li class="last"><b class="red">(Economize R$ 259,00)</b></li>
            </ul>
          </div>
          <div class="numbox">
            <h3>
              Corra, apenas
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
              </span>
              pacotes restantes
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature first">
    <h2 class="wrapper">Novas fun????es e melhorias do<br> Driver Booster 8 PRO</h2>
    <div class="wrapper clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/device.png')?>" alt=""/></div>
      <div class="content fr">
        <h3>Atualiza????o de Drivers em 1-clique</h3>
        <ul>
          <li class="twice">
            <i>???</i>
            <span>Atualiza mais de 4.500.000 de drivers com 1-clique para reduzir travamentos do sistema.</span>
          </li>
          <li class="twice">
            <i>???</i>
            <span>Velocidade de verifica????o mais r??pida de drivers desatualizados com novo motor de verifica????o.</span>
          </li>
          <li class="twice">
            <i>???</i>
            <span>Mais problemas de som e internet podem ser reparados com ferramentas melhoradas.</span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt>
              <img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/>
              <span class="_num">3,500,000+</span>
              <span class="_num red">4,500,000+</span>
            </dt>
            <dd>
              <strong>28%</strong>
              <p>Banco de Dados Maior</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon02.png')?>" alt=""/></dt>
            <dd>
              <strong>100%</strong>
              <p>Velocidade de Verifica????o Aumentada</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature second">
    <div class="wrapper clearfix">
      <div class="content fl">
        <h3>Melhor Experi??ncia de Jogo</h3>
        <ul>
          <li>
            <i>???</i>
            <span>Impulsionar Jogo melhorado para acelerar o PC durante jogos.</span>
          </li>
          <li class="twice">
            <i>???</i>
            <span>Silencia automaticamente todas as notifica????es do Driver Booster para evitar pertuba????es.</span>
          </li>
          <li class="twice">
            <i>???</i>
            <span>Silencia automaticamente todas as notifica????es do Driver Booster para evitar pertuba????es.</span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/></dt>
            <dd>
              <strong>15%</strong>
              <p>Impulsionar Jogo mais R??pido</p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="scan01" src="<?php echo getStaticUrl('images/scan-01.png')?>" alt=""/>
        <img class="scan02" src="<?php echo getStaticUrl('images/scan-02.png')?>" alt=""/>
        <img class="scan03" src="<?php echo getStaticUrl('images/scan-03.png')?>" alt=""/> 
      </div>
    </div>
  </div>
  <div class="feature third wrapper">
    <p>
      <span><i></i> <b>Driver Booster 7 Free</b></span> <span class="red"><i></i> <b>Driver Booster 8 PRO</b></span>
    </p>
    <p class="gray">*.N??s testamos o Driver Booster 8 PRO nos nossos laborat??rios internos. Resultados podem variar.</p>
  </div>
  <!-- feature end -->

  <!-- unique start -->
  <div class="feature unique">
    <div class="wrapper">
      <h2>Outros benef??cios ??nicos do Driver Booster 8 PRO</h2>
      <div class="clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/></div>
        <ul class="content fr">
          <li>
            <i class="all-icons"></i>
            <span>Velocidade ilimitada de download de drivers </span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Prioridade para obter os ??ltimos drivers game ready</span>
          </li>
          <li class="twice">
            <i class="all-icons"></i>
            <span>Baixa e atualiza automaticamente drivers durante o tempo ocioso do sistema</span>
          </li>
          <li class="twice">
            <i class="all-icons"></i>
            <span>Atualiza componentes necess??rios para melhor experi??ncia de jogo</span>
          </li>
          <li class="twice">
            <i class="all-icons"></i>
            <span>Corrige facilmente problemas de dispositivo para melhor desempenho</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Suporte t??cnico 24 horas por dia</span>
          </li>
        </ul>
      </div>
      <div class="giftbox">
        <h3>Compre a licen??a anual com 70% de desconto e obtenha dois meses gr??tis</h3>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/></dt>
          <dd>
            <div class="numbox">
              <h3>
                Corra, apenas
                <span id="centNum" class="giftNum">
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">5</b></b>
                  <b class="nwrap"><b class="numlist">5</b></b>
                </span>
                pacotes restantes
              </h3>
            </div>
            <a class="buybtn green"
               href="https://www.iobit.com/buy.php?product=pt-db83pc14m7999&ref=pt-db814m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
               onclick="ga( 'send', 'event', 'db14mbuy', 'buy', 'dbpurchase-newlaunch-pt');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Obter Agora</span>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- unique end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>O Que Outros Est??o Dizendo: </h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt="PCMG"></dt>
          <dd>
            <h2>Opini??o da M??dia</h2>
            <p>"A IObit tem muitos utilit??rios e o Driver Booster Pro, que atualiza seus drivers automaticamente, ?? um dos melhores. A fun????o central do Driver Booster PRO ?? ainda mais atraente gra??as ?? inclus??o de m??ltiplas licen??as por um pre??o bem amig??vel, assim como de uma interface personaliz??vel que mostra informa????es espec??ficas relacionadas ao hardware. Os competidores Ashampoo Driver Updater and Slimware Utilities Driver Update fazem um bom trabalho, mas IObit Driver Booster Pro ?? o melhor da sua categoria."</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo-Thuya"></dt>
          <dd>
            <h2>Opini??o do Usu??rio</h2>
            <p>"Com Driver Booster, eu consigo saber facilmente quais drivers est??o desatualizados e posso atualiz??-los com facilidade. Al??m disso, me ajuda a reparar erros com de e rede. Eu n??o acreditava antes de usar, mas depois de test??-lo eu o adorei, pois meu PC est?? mais est??vel, r??pido e seguro do que 8 meses atr??s. Muito obrigado, IObit."</p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam-Backlund"></dt>
          <dd>
            <h2>Opini??o do Usu??rio</h2>
            <p>"Driver Booster ?? um aplicativo sensacional. Se voc?? ?? como eu e tem diversos aplicativos e dispositivos e n??o tem tempo para atualiz??-los manualmente, eu recomendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveni??ncia.???</p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne-Bowler"></dt>
          <dd>
            <h2>Opini??o do Usu??rio</h2>
            <p>"Esse ?? o melhor atualizador de drivers dispon??veis. Microsoft j?? me confundiu algumas vezes me sugerindo atualiza????es que n??o funcionaram com meu computador, mas este programa sabe quais atualiza????es eu preciso sem causar qualquer conflito. Funcionou perfeitamente. F??cil de usar, eficiente e intuitivo. Este programa vai ficar na minha caixa de ferramentas para sempre... Bom trabalho!"</p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Pr??mios Mundiais</h2>
      <p>
        Reconhecido pelos grandes ve??culos de m??dia especializados
      </p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Tente GR??TIS com a nossa Garantia de Reembolso de 60 dias</h4>
          <p>
            N??s confiamos que ativando a vers??o PRO ir?? desinstalar rapidamente programas desnecess??rios por um pre??o acess??vel!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>N??s aceitamos</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Note:</dt>
        <dd>
          *Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempos em tempos conforme nossos crit??rios.
        </dd>
      </dl>
      <p>Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/float-gift-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Corra, apenas
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
        </span>
        pacotes restantes
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> visitantes na p??gina agora</p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=pt-db83pc14m7999&ref=pt-db814m<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_db"
       onclick="ga( 'send', 'event', 'db14mbuy', 'buy', 'dbpurchase-newlaunch-pt');">
      <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
      <span>Comprar Agora</span>
    </a>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
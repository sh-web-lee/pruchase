<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptdbpre_p' . $date;
  $c_name_t='ptdbpre_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
}
$refStr .= empty($_GET['instd']) ? '' : ('-' . $_GET['instd']);
$refStr .= empty($_GET['finstd']) ? '' : ('-' . $_GET['finstd']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-' . $_GET['st']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Pague R$0 para adquirir o Driver Booster 8 PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>A Pr??-Venda Come??ou</p>
          <h2>Atualiza para a ??ltima Vers??o PRO</h2>
          <h4>para Melhor Desempenho do PC e Jogos</h4>
          <div class="price">
            <span>Pre??o da <br>Pr??-venda<br></span>
             <strong>R$ 0 <sup>*</sup></strong>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=pt-db8preorder&ref=pt-db8preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderrc-pt');">
              Adquirir Agora
           </a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              Restantes Agora
            </h3>
            <div class="bar">
               <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
    <div class="feature">
    <div class="message01 wrapper">
      <div class="title">
        <h4>Driver Booster 8 PRO ??</h4>
        <h2> mais Completo e Eficiente</h2>
      </div>
      <div class="line"></div>
      <div class="message-box">
        <ul class="img-box">
          <li class="icon01">
            <img src="<?php echo getStaticUrl('images/feature-04-01.png') ?>" alt="" >
          </li>
          <li class="icon02">
            <img src="<?php echo getStaticUrl('images/feature-03-01.png') ?>" alt="">
          </li>
        </ul>
        <dl class='one'>
          <dt><i></i>
            <em>
              Maior 
            </em>
            Banco de Drivers
            <span class='soportes red_soportes'>50% <img src="<?php echo getStaticUrl('images/subir.png') ?>" alt=""></span></dt>
          <dd>Suporta agora mais de 4.500.000 drivers, e disponibiliza as atualiza????es corretas para todos os drivers desatualizados, faltantes ou defeituosos.</dd>
        </dl>
        <dl class='two'>
          <dt><i></i>
            Modo de Atualiza????o
            <em>
              mais Inteligente
            </em>
            <span class='soportes green_soportes'>Novo </span></dt>
          <dd>Disponibiliza os drivers mais est??veis para aqueles que priorizam estabilidade ou os drivers mais recentes para aqueles que priorizam desempenho. 
            <br> <div class='market'>??nico no mercado</div>
          </dd>
        </dl>
        <dl class='three'>
          <dt><i></i>
            Atualiza????o Offline
            <em>
              Mais F??cil
            </em>
            <span class='soportes green_soportes'>Novo </span></dt>
          <dd>Atualiza e instala drivers de rede sem precisar de conex??o com a internet.</dd>
        </dl>
        <dl class='four'>
          <dt><i></i>
            Backup de Drivers 
            <em>
             Mais Seguro
            </em>
            <span class='soportes red_soportes'>Melhorado</span></dt>
            <dd>O backup de drivers otimizado garante uma taxa de sucesso mais alta e garante que o seu PC n??o ter?? problemas com a atualiza????o.</dd>
        </dl>

      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2> Voc?? Vai Desfrutar de Todos os Benef??cios PRO</h2>
        <div class='current_Version'>
          Sua Vers??o Atual
        </div>
        <div class='driver_Booster'>

          <p>
            Driver Booster 8<br /> PRO<br />
            <span class='soportes green_soportes'>Novo </span>
          </p>
        </div>
        <ul class='benefits-ul'>
          <li>
            <i class='_icon'></i>
            <span>Verifica automaticamente drivers faltantes e desatualizados</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>1-clique para atualizar drivers desatualizados</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Banco de dados enorme com suporte a mais de 4,500,000+ de drivers</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Atualiza e instala drivers de rede offline </span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Atualiza drivers automaticamente quando o sistema est?? ocioso</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Velocidade ilimitada de download e atualiza????o de drivers</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Faz backup autom??tico de drivers e cria um ponto de restaura????o <br> do  sistema </span>
            <div class='_booster other'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version other' >
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Corrige erros de dispositivo facilmente para melhor desempenho </span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Prioridade para atualizar drivers de estabilidade   </span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Componentes necess??rios para uma melhor experi??ncia em jogos</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Prioridade para atualizar os ??ltimos drivers game ready</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">
            </div>
          </li>
        </ul>

      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>O Melhor Atualizador de Drivers do Mundo</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          Downloads
        </li>
        <li class="center" data-name='default'>
          <strong>4.9/5.0 </strong>
          Avalia????o dos Usu??rios
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          Recomenda????es da M??dia
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Opini??o da M??dia</dt>
              <dd>
                "A IObit tem muitos utilit??rios e o Driver Booster Pro, que atualiza seus drivers automaticamente, ?? um dos melhores. A fun????o central do Driver Booster PRO ?? ainda mais atraente gra??as ?? inclus??o de m??ltiplas licen??as por um pre??o bem amig??vel, assim como de uma interface personaliz??vel que mostra informa????es espec??ficas relacionadas ao hardware. Os competidores Ashampoo Driver Updater and Slimware Utilities Driver Update fazem um bom trabalho, mas IObit Driver Booster Pro ?? o melhor da sua categoria."
              </dd>
            </dl>
            <dl>
              <dt>Opini??o do Usu??rio</dt>
              <dd>
                "Driver Booster ?? um aplicativo sensacional. Se voc?? ?? como eu e tem diversos aplicativos e dispositivos e n??o tem tempo para atualiz??-los manualmente, eu recomendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveni??ncia.???
              </dd>
            </dl>
            <dl>
              <dt>Opini??o do Usu??rio</dt>
              <dd>
                Driver Booster ?? verdadeiramente o melhor atualizador de drivers no mercado. Possui uma interface amig??vel, ?? simples de usar e faz seu trabalho melhor do que qualquer atualizador de drivers que j?? usei. Esse programa ?? merecedor de nota m??xima. Recomendo fortemente.
              </dd>
            </dl>
            <dl>
              <dt>Opini??o do Usu??rio</dt>
              <dd>
                "Com Driver Booster, eu consigo saber facilmente quais drivers est??o desatualizados e posso atualiz??-los com facilidade. Al??m disso, me ajuda a reparar erros com de e rede. Eu n??o acreditava antes de usar, mas depois de test??-lo eu o adorei, pois meu PC est?? mais est??vel, r??pido e seguro do que 8 meses atr??s. Muito obrigado, IObit."
              </dd>
            </dl>
            <dl>
              <dt>Opini??o do Usu??rio</dt>
              <dd>
                O Driver Booster me ajudou a resolver problemas no meu laptop gamer. Quando eu tentava atualizar meus drivers, o meu computador ??s vezes apresentava problemas e eu tinha que format??-lo para restaurar suas fun????es e agora isto n??o acontece mais com Driver Booster 7. ?? a melhor ferramenta no mercado!
              </dd>
            </dl>
          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></div>
            <p>Myo Thuya</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Ver??ssimo"></div>
            <p>Carlos Alexandre Ver??ssimo</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></div>
            <p>Adam Backlund</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Pr??mios da Empresa</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Nota:</dt>
      <dd>
        *.No fim do per??odo de teste de 30 dias, o seu cart??o de cr??dito ou conta do Paypal ser?? cobrado R$ 79,99 automaticamente. Este desconto de 60% no pre??o original de R$ 199,99 ?? um b??nus apenas para pr??-venda!
      </dd>
      <dd>*.Se voc?? n??o est?? satisfeito, voc?? pode cancelar o pedido que voc?? fez dentro de 30 dias sem qualquer custo.</dd>
    </dl>
    <p>Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-db-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        de 1000 pacotes restantes agora
      </h3>
    </div>
    <div class="price fr">
      <strong>R$ 0 <sup>*</sup></strong>
      <span></span>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=pt-db8preorder&ref=pt-db8preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderrc-pt');">
        Adquirir Agora
      </a>
    </div>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
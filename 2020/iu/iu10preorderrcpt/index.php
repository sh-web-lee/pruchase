<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptiujunerc_p' . $date;
  $c_name_t='ptiujunerc_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,58);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['user'])?'':('-u'.$_GET['user']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adquira o novo IObit Uninstaller PRO por R$0  </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- container start -->
<div class="container">
  <!-- banner start -->
  <div class="banner" data-name="animation">
    <div class="wrapper">
      <!-- top -->
      <div class="top clearfix">
        <!-- logo -->
        <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
        <div class="record-box">
          <i></i>
          We will automatically record system changes made by each installation.
        </div>
        <!-- icon -->
        <div class="icon"><img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""> IObit Uninstaller 10</div>
      </div>
      <!-- content -->
      <div class=" content clearfix">
        <!-- left-img -->
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
          <img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
          <img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
        </div>
        <!-- right -->
        <div class="right fr">
          <h1 data-name="default">Bem-vindo a nossa Pr??-venda</h1>
          <h2 data-name="default">Adquira a Vers??o Pro por R$ 0</h2>
          <h3 data-name="default">Limitado aos primeiros 500 usu??rios do dia antes de Agosto 25</h3>
          <!-- number -->
          <div class="number" data-name="default">
            <div id="reduce" class="reduceNum">
              <div class="listbox"><span class="list"><b>0</b></span></div>
              <div class="listbox"><span class="list"><b>5</b></span></div>
              <div class="listbox"><span class="list"><b>0</b></span></div>
            </div>
             de 500 restantes
            <div class="bar">
              <span></span>
            </div>
          </div>
          <!-- message -->
          <div class="price" data-name="default">
            <!-- price -->
            <strong>R$ 0 <sup>*</sup></strong>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pt-iu10preorder&ref=pt-iu10preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderrcpt');">
              Adquirir Agora
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <!-- title -->
      <h2>Remove Programas Indesejados e Sobras Facilmente <br> IObit Uninstaller 10 PRO torna a desinstala????o mais f??cil, limpa e segura. </h2>
      <!-- content -->
      <div class="content">
        <!-- feature-nav -->
        <ul class="feature-nav" id="barUl">
          <li class="active one">Mais F??cil </li>
          <li class="two">Mais Limpo </li>
          <li class="three">Mais Seguro</li>
        </ul>
        <!-- feature-container -->
        <div class="feature-container clearfix">
          <!-- interface -->
          <div class="interface-list fl">
            <!-- Easier -->
            <div class="interface easier">
              <span>Desinstalar</span>
              <ul>
                <li class="act05"><img src="<?php echo getStaticUrl('images/feature-easier-icon05.png')?>" alt=""></li>
                <li class="act04"><img src="<?php echo getStaticUrl('images/feature-easier-icon04.png')?>" alt=""></li>
                <li class="act03"><img src="<?php echo getStaticUrl('images/feature-easier-icon03.png')?>" alt=""></li>
                <li class="act02"><img src="<?php echo getStaticUrl('images/feature-easier-icon02.png')?>" alt=""></li>
                <li class="act01"><img src="<?php echo getStaticUrl('images/feature-easier-icon01.png')?>" alt=""></li>
              </ul>
            </div>

            <!-- Cleaner -->
            <div class="interface cleaner">
              <span></span>
              <div class="picture"><span></span></div>
              <div class="xprogress"><span></span></div>
            </div>

            <!-- Safer -->
            <div class="interface safer">
              <ul>
                <li class="act one">
                  Malicious Toolbars and Plugs-ins
                </li>
                <li class="act two">
                  Ad-based Toolbars and Plug-ins
                </li>
                <li class="three">
                  Trusted Toolbars and Plug-ins
                </li>
              </ul>
            </div>
          </div>

          <!-- details -->
          <div class="detail-list fr" id="wheelUl">
            <!-- one -->
            <div class="detail">
              <h3>Desinstala Quaisquer Programas, Plugins e Apps do Windows</h3>
              <ul>
                <li class="one">Programas que n??o possam ser desinstalados por meios convencionais.</li>
                <li class="two">Programas instalados juntos com freeware.</li>
                <li class="three">Extens??es de navegador instaladas sem sua permiss??o.</li>
                <li class="four">Apps Nativos do Windows 10 que voc?? n??o quer.</li>
              </ul>
            </div>

            <!-- two -->
            <div class="detail">
              <h3>Limpa Rastros de Programas Desinstalados</h3>
              <ul>
                <li class="one">Sobras da desinstala????o padr??o.</li>
                <li class="two">Sobras de programas j?? desinstalados. </li>
                <li class="three">Arquivos e entradas de registros que n??o podem ser removidas pela desinstala????o padr??o.</li>
              </ul>
            </div>

            <!-- three -->
            <div class="detail">
              <h3>Reduz riscos de seguran??a</h3>
              <ul>
                <li class="one">Identifica plugins e te diz quais s??o seguros para serem mantidos no seu PC.</li>
                <li class="two">Atualiza programas desatualizados para evitar vulnerabilidades na defesa de seu PC.</li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <h2>Compara????o das Vers??es</h2>
      <!-- table -->
      <table>
        <thead>
          <tr>
            <th colspan="2"></th>
            <th class="free" valign="bottom"><div>Sua Vers??o Atual</div></th>
            <th class="pro"><div>Vers??o PRO</div></th>
          </tr>
        </thead>
        <tbody>
          <!-- 01 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
            <td class="text">Desinstala programas, plugins e apps com 1-clique </td>
            <td class="free"><i class="all-icons yes">???</i></td>
            <td class="pro"><i class="all-icons">???</i></td>
          </tr>
          <!-- 02 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
            <td class="text">Verifica sobras de programas deixados pela desinsta????o padr??o</td>
            <td class="free"><i class="all-icons yes">???</i></td>
            <td class="pro"><i class="all-icons">???</i></td>
          </tr>
          <!-- 03 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
            <td class="text">Limpeza profunda de arquivos que n??o podem ser removidos por desinsta????o padr??o</td>
            <td class="free"><i class="all-icons">??</i></td>
            <td class="pro"><i class="all-icons">???</i></td>
          </tr>
          <!-- 04 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
            <td class="text">Remove programas que n??o podem ser desinstalados por meios convencionais</td>
            <td class="free"><i class="all-icons">??</i></td>
            <td class="pro"><i class="all-icons">???</i></td>
          </tr>
          <!-- 05 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
            <td class="text">Desinstala programas indesejados instalados juntos com freeware </td>
            <td class="free"><i class="all-icons">??</i></td>
            <td class="pro"><i class="all-icons">???</i></td>
          </tr>
          <!-- 07 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
            <td class="text">Limpa automaticamente sobras de programas j?? desisntalados</td>
            <td class="free"><i class="all-icons">??</i></td>
            <td class="pro"><i class="all-icons">???</i></td>
          </tr>
          <!-- 08 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
            <td class="text">Identifica e remova plugins maliciosos e de an??ncios</td>
            <td class="free"><i class="all-icons">??</i></td>
            <td class="pro"><i class="all-icons">???</i></td>
          </tr>
          <!-- 09 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
            <td class="text">1-clique para atualizar todos os programas importantes</td>
            <td class="free"><i class="all-icons">??</i></td>
            <td class="pro"><i class="all-icons">???</i></td>
          </tr>
          <!-- 10 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
            <td class="text">Atualiza automaticamente para a ??ltima vers??o</td>
            <td class="free"><i class="all-icons">??</i></td>
            <td class="pro"><i class="all-icons">???</i></td>
          </tr>
          <!-- 11 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></td>
            <td class="text">Atendimento t??cnico 24 horas por dia  </td>
            <td class="free"><i class="all-icons">??</i></td>
            <td class="pro"><i class="all-icons">???</i></td>
          </tr>
        </tbody>
      </table>
      <!-- buybtn -->
      <div>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-iu10preorder&ref=pt-iu10preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderrcpt');">
          <span>Adquirir Pro for R$0</span>
        </a>
      </div>
    </div>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Voc?? Pode Confiar</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
        <dd>
          <h3>50M+</h3>
          <p>Downloads</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
        <dd>
          <h3>4.8/5.0</h3>
          <p>Avalia????o dos Usu??rios</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
        <dd>
          <h3>1000+</h3>
          <p>Recomenda????es da M??dia</p>
        </dd>
      </dl>
      <div class="review-box">
        <div class="box">
          <h3>Opini??o do Usu??rio</h3>
          <p>
            "IObit Uninstaller PRO ?? apenas um dos cinco produtos de "manuten????o" da IObit que eu investi para meu PC. O programa ?? ??timo para achar as sobras de bits e bytes escondidos no seu PC, tomando espa??o do disco e afetando o registro. Se eu usasse o desinstalador padr??o do programa que eu queria desinstalar, funcionava, mas ent??o o Uninstaller Pro aparecia e mostrava 35 arquivos que precisavam ser limpos. Tudo que eu preciso ?? clicar em "OK". Recomendo e inclusive adquiri uma licen??a para 3 PCs. O servi??o de atendimento ao cliente ?? atencioso e eficiente."
          </p>
        </div>
        <div class="box">
          <h3>Opini??o do Usu??rio</h3>
          <p>
            "IObit Uninstaller ?? provavelmente o melhor aplicativo para removar programas desnecess??rios do seu computador. Diferentemente do desinstalador padr??o do Windows, IObit Uninstaller remove as sobras do programa desinstalado, que poderiam deixar seu PC lento. Eu estive usando esse programa por alguns anos e sempre me ajuda a manter meu computador limpo e r??pido. Eu recomendei este programa para alguns dos meus amigos no passado e recomendaria de novo."
          </p>
        </div>
        <div class="box active">
          <h3>Opini??o da M??dia</h3>
          <p>
            "Essa ferramenta informativa e de f??cil uso limpa, configura e otimiza seu PC e usu??rios podem baixar virtualmente num piscar de olhos. Essa ferramenta pode ser categorizada como a melhor ferramenta de desinstala????o e permite que usu??rios desinstalem em lote. Oferece aos usu??rios a op????o de fazer uma "Verifica????o Profunda" para ir mais fundo e procurar por restos deixados pelo processo de desinstala????o. O desempenho por si s?? j?? faz essa ferramenta valiosa de se ter." -MakeUseOf
          </p>
        </div>
        <div class="box">
          <h3>Opini??o do Usu??rio</h3>
          <p>
            "IObit Uninstaller ?? um dos melhores programas para se ter no seu computador, pois ?? f??cil de operar e limpa profundamente com rapidez. A limpeza de plug-ins tamb??m ?? extremamente ??til. Obrigado por cuidar do computador meu e da minha fam??lia."
          </p>
        </div>
      </div>
      <ul>
        <li>
          <span><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></span>
          <p>Joseph Yu</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></span>
          <p>Sergey Erlich</p>
        </li>
        <li class="active">
          <span><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></span>
          <p>MakeUseOf</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="??da G??rtler"></span>
          <p>??da G??rtler</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper">
      <h2>Pr??mios Mundiais</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <dl class="annotation">
        <dt>Nota:</dt>
        <dd>
          *.No fim do per??odo de teste de 30 dias, o seu cart??o de cr??dito ou conta do Paypal ser?? cobrado R$55,99 automaticamente. Este desconto de 44% no pre??o original de R$ 99,99 ?? um b??nus apenas para pr??-venda!
        </dd>
        <dd>*.Se voc?? n??o est?? satisfeito, voc?? pode cancelar o pedido que voc?? fez dentro de 30 dias sem qualquer custo.</dd>
      </dl>
      <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- bottom end -->
</div>
<!-- container end -->


<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
      IObit Uninstaller 10
    </div>
    <div class="number fl">
      <div id="fReduce" class="reduceNum">
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
      </div>
      restantes agora
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
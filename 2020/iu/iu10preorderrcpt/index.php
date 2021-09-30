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
          <h1 data-name="default">Bem-vindo a nossa Pré-venda</h1>
          <h2 data-name="default">Adquira a Versão Pro por R$ 0</h2>
          <h3 data-name="default">Limitado aos primeiros 500 usuários do dia antes de Agosto 25</h3>
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
      <h2>Remove Programas Indesejados e Sobras Facilmente <br> IObit Uninstaller 10 PRO torna a desinstalação mais fácil, limpa e segura. </h2>
      <!-- content -->
      <div class="content">
        <!-- feature-nav -->
        <ul class="feature-nav" id="barUl">
          <li class="active one">Mais Fácil </li>
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
                <li class="one">Programas que não possam ser desinstalados por meios convencionais.</li>
                <li class="two">Programas instalados juntos com freeware.</li>
                <li class="three">Extensões de navegador instaladas sem sua permissão.</li>
                <li class="four">Apps Nativos do Windows 10 que você não quer.</li>
              </ul>
            </div>

            <!-- two -->
            <div class="detail">
              <h3>Limpa Rastros de Programas Desinstalados</h3>
              <ul>
                <li class="one">Sobras da desinstalação padrão.</li>
                <li class="two">Sobras de programas já desinstalados. </li>
                <li class="three">Arquivos e entradas de registros que não podem ser removidas pela desinstalação padrão.</li>
              </ul>
            </div>

            <!-- three -->
            <div class="detail">
              <h3>Reduz riscos de segurança</h3>
              <ul>
                <li class="one">Identifica plugins e te diz quais são seguros para serem mantidos no seu PC.</li>
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
      <h2>Comparação das Versões</h2>
      <!-- table -->
      <table>
        <thead>
          <tr>
            <th colspan="2"></th>
            <th class="free" valign="bottom"><div>Sua Versão Atual</div></th>
            <th class="pro"><div>Versão PRO</div></th>
          </tr>
        </thead>
        <tbody>
          <!-- 01 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
            <td class="text">Desinstala programas, plugins e apps com 1-clique </td>
            <td class="free"><i class="all-icons yes">√</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 02 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
            <td class="text">Verifica sobras de programas deixados pela desinstação padrão</td>
            <td class="free"><i class="all-icons yes">√</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 03 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
            <td class="text">Limpeza profunda de arquivos que não podem ser removidos por desinstação padrão</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 04 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
            <td class="text">Remove programas que não podem ser desinstalados por meios convencionais</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 05 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
            <td class="text">Desinstala programas indesejados instalados juntos com freeware </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 07 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
            <td class="text">Limpa automaticamente sobras de programas já desisntalados</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 08 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
            <td class="text">Identifica e remova plugins maliciosos e de anúncios</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 09 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
            <td class="text">1-clique para atualizar todos os programas importantes</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 10 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
            <td class="text">Atualiza automaticamente para a última versão</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 11 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></td>
            <td class="text">Atendimento técnico 24 horas por dia  </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
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
      <h2>Você Pode Confiar</h2>
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
          <p>Avaliação dos Usuários</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
        <dd>
          <h3>1000+</h3>
          <p>Recomendações da Mídia</p>
        </dd>
      </dl>
      <div class="review-box">
        <div class="box">
          <h3>Opinião do Usuário</h3>
          <p>
            "IObit Uninstaller PRO é apenas um dos cinco produtos de "manutenção" da IObit que eu investi para meu PC. O programa é ótimo para achar as sobras de bits e bytes escondidos no seu PC, tomando espaço do disco e afetando o registro. Se eu usasse o desinstalador padrão do programa que eu queria desinstalar, funcionava, mas então o Uninstaller Pro aparecia e mostrava 35 arquivos que precisavam ser limpos. Tudo que eu preciso é clicar em "OK". Recomendo e inclusive adquiri uma licença para 3 PCs. O serviço de atendimento ao cliente é atencioso e eficiente."
          </p>
        </div>
        <div class="box">
          <h3>Opinião do Usuário</h3>
          <p>
            "IObit Uninstaller é provavelmente o melhor aplicativo para removar programas desnecessários do seu computador. Diferentemente do desinstalador padrão do Windows, IObit Uninstaller remove as sobras do programa desinstalado, que poderiam deixar seu PC lento. Eu estive usando esse programa por alguns anos e sempre me ajuda a manter meu computador limpo e rápido. Eu recomendei este programa para alguns dos meus amigos no passado e recomendaria de novo."
          </p>
        </div>
        <div class="box active">
          <h3>Opinião da Mídia</h3>
          <p>
            "Essa ferramenta informativa e de fácil uso limpa, configura e otimiza seu PC e usuários podem baixar virtualmente num piscar de olhos. Essa ferramenta pode ser categorizada como a melhor ferramenta de desinstalação e permite que usuários desinstalem em lote. Oferece aos usuários a opção de fazer uma "Verificação Profunda" para ir mais fundo e procurar por restos deixados pelo processo de desinstalação. O desempenho por si só já faz essa ferramenta valiosa de se ter." -MakeUseOf
          </p>
        </div>
        <div class="box">
          <h3>Opinião do Usuário</h3>
          <p>
            "IObit Uninstaller é um dos melhores programas para se ter no seu computador, pois é fácil de operar e limpa profundamente com rapidez. A limpeza de plug-ins também é extremamente útil. Obrigado por cuidar do computador meu e da minha família."
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
          <span><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></span>
          <p>Áda Görtler</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper">
      <h2>Prêmios Mundiais</h2>
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
          *.No fim do período de teste de 30 dias, o seu cartão de crédito ou conta do Paypal será cobrado R$55,99 automaticamente. Este desconto de 44% no preço original de R$ 99,99 é um bônus apenas para pré-venda!
        </dd>
        <dd>*.Se você não está satisfeito, você pode cancelar o pedido que você fez dentro de 30 dias sem qualquer custo.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
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
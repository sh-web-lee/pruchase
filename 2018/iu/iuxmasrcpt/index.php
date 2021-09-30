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
  $cName='ptiu'.$date;
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

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adquira IObit Uninstaller Pro com 75% de desconto e leve Protected Folder grátis para proteger suas pastas. Oferta Especial de Natal da IObit.</title>
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
      <h1>Presentão de Natal</h1>
      <p class="best">  A Maior Promoção do Ano – Sua Chance de Economizar!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
          <div class="hint">
            <dl class="pop-bg">
              <dt>Protected Folder     <span><b> R$0  </b> <del>R$99,99</del></span></dt>
              <dd>Protege pastas e arquivos no Windows com senha e previne contra a perda de arquivos importantes causada por vírus</dd>
            </dl>
          </div>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span>   vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  pacotes restantes!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Corra!  <b>05</b>M: <b>00</b>S: <b class="last">000</b>Ms Restantes</p>
            </div>
            <p><strong><small>R$</small>51<small>,99</small></strong> <del> R$ 199,98</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pt-iu83pcpf5199&ref=pt_iu83pcpfpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu83pcpurchase1811rc-pt')">
               Comprar Agora
            </a>
            <p class="year">1 Ano de Assinatura / 3 PCs</p>
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
      <h2>Remove Completamente os Programas Teimosos e Plugins Malicious</h2>
      <p class="over">
        A escolha de mais de 1.000.000 de usuários no mundo, IObit Uninstaller PRO mantém seu computador livre de programas teimosos, sobras de programas e plugins maliciosos.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="IObit Uninstaller 8 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Rengöring av Bundleware -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Limpeza de Bundleware</h3>
              <p>
                Livra o seu PC de bundleware que são instalados sem sua permissão. 
              </p>
              <p><b>*Função Exclusiva PRO</b></p>
            </dd>
          </dl>
          <!-- Borttagning av Felaktiga Plugins  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Remoção de Plugins Maliciosos</h3>
              <p>
                Remove plugins maliciosos ou de anúncios para garantir uma navegação online segura.
              </p>
              <p><b>*Função Exclusiva PRO</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Inga Envisa Program -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Sem Programas Teimosos</h3>
              <p>
                Remove programas que não podem ser deletados por outros utilitários.
              </p>
              <p><b>*Função Exclusiva PRO </b></p>
            </dd>
          </dl>
          <!-- Rengör Rester Automatiskt -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Limpeza Automática de Sobras de Programas</h3>
              <p>
                Detecta automaticamente e limpa sobras de programas desinstalados
              </p>
              <p><b>*Função Exclusiva PRO</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->
  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Obtenha PRO Agora para um PC mais Limpo e Navegação mais Segura</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/iu-small-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  pacotes restantes agora!
          </p>
        </div>
        <p><strong><small>R$</small>51<small>,99</small></strong> <del> R$ 199,98</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-iu83pcpf5199&ref=pt_iu83pcpfpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu83pcpurchase1811rc-pt')">
           Comprar Agora
        </a>
        <p class="year">1 Ano de Assinatura / 3 PCs </p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Veja o Que Você Obterá ao Ativar a Pro Versão:</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">IObit Uninstaller <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>IObit Uninstaller <br> <b>Pro</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema"><i class="all-icons free">√</i></td>
          <td class="itemb">Desinstala Programas Indesejados e Plug-ins</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Desinstala Bundleware   </td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Remove Programas Teimosos</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Remove Plugins Maliciosos e de Anúncios</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Limpa Sobras de Programas</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Limpa Programas com 1-clique</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Auto Atualização</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
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
      <h3>NÃO PERCA</h3>
      <h2>Tenha 50% de Desconto Exclusivo para Fazer o seu PC mais Rápido, Seguro e Rápido</h2>
      <div class="price">
        <p><strong><small>R$</small>51<small>,99</small></strong> <del> R$ 199,98</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-iu83pcpf5199&ref=pt_iu83pcpfpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu83pcpurchase1811rc-pt')">
           Comprar Agora
        </a>
        <p id="footdown" class="countdown">Corra! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms  restantes</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- user start -->
  <div class="user">
    <div class="wrapper clearfix">
      <h2>
        IObit Uninstaller Pro já limpou mais de <b class="buy-num">1.089.077</b> PCs.
        <span>Chegou a hora de limpar o seu.</span>
      </h2>
      <ul class="user-list">
        <li class="fl">
          <img src="<?php echo getStaticUrl('images/ronan-levi.png')?>" alt="Ronan Levi" />
          <h4>Ronan Levi</h4>
          <p>
            “Além de remover programas, IObit Uninstaller conta com Verificação Profunda para encontrar as sobras deixadas e removê-las completamente do computador. Como alguém que gosta de sempre cuidar do meu computador, desde que eu instalei IObit Uninstaller, eu só uso esse pro-grama para desinstalar aplicativos. Recomendo fortemente o uso do IObit Uninstaller.”
          </p>
        </li>
        <li class="fl">
          <img src="<?php echo getStaticUrl('images/fernando-lourenco-gomes.png')?>" alt="Fernando Lourenço Gomes" />
          <h4>Fernando Lourenço Gomes</h4>
          <p>
            ”IObit Uninstaller é uma ótima ferramenta para desinstalar programas, barras de ferramentas e plugins. Tem sido muito útil para mim pois não apenas desinstala programas e aplicativos, mas também como as entradas no registro relacionadas a eles. Tem uma interface intuitiva e bela e não precisa entender de informática para usá-lo. Recomendo! ”
          </p>
        </li>
      </ul>  
    </div> 
  </div>
  <!-- user end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Recomendado também por</h2>
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
            <h4>Tente SEM RISCOS – com nossa Garantia de 60 dias de Reembolso</h4>
            <p>Nós estamos confiantes que ativando a versão PRO você terá um PC mais limpo e navegação online mais segura com preço acessível! </p>
          </dd>
        </dl>
        <dl class="fr clearfix">
          <dd>
            <h4>Aceitamos</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Observe:</dt>
          <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
          <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
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
  var imgSrc = "<?php echo getStaticUrl('images/iu-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=pt-iu83pcpf4899&ref=pt_iu83pcpfpurchase1811rclp<?php echo $refStr;?>&refs=pt_purchase_iu&tw=-8";
  var _ga = "ga('send', 'event', 'iubuy', 'buy', 'iu83pcpurchase1811rclp-pt')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
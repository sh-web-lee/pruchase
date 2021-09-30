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
  $cName='ascpre'.$date;
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

$viewNum=rand(80,100);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira IObit Malware Fighter 6 Pro com 75% de desconto e leve um super brinde para proteger suas pastas importantes. Oferta Especial de Natal da IObit.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Presentão de Natal</h1>
        <p class="best">A Maior Promoção do Ano – Sua Chance de Economizar!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
          </div>
          <div class="right fr">
            <h2>Segurança completa para você e sua família</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes!  
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Corra! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Restantes</p>
              </div>
              <p><strong><big>R$</big>59<big>,</big></strong><span>99 <del>R$259,89</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-imf63pcpf5999&ref=pt_imf63pcpfpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811rc-pt');">
                 Ativar Agora
              </a>
              <p class="year">1 Ano de Assinatura / 3 PCs</p>
            </div>
          </div>
        </div>
      </div>
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
        <h2>Segurança Online Completa para o seu Computador! </h2>
        <p class="over">
          A escolha de mais de 3.687.554 usuários para segurança online contra vírus, ransomware, spyware, trojans, adware, phishing e outros malwares frustrantes.
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/imf-screen.png')?>" alt="IObit Malware Fighter PRO"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Proteção Dupla <b class="sign">Melhorado </b></h3>
                <p>
                 Proteção Dupla com Motor Antivírus Bitdefender e Motor Anti-Malware IObit com maior banco de dados.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>Guarda do Disco de Inicialização <b>Novo</b></h3>
                <p>Previne contra ataques maliciosos, especialmente ataques de ransomware durante o boot do sistema.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Sem Ataques de Ransomware <b class="sign">Melhorado</b></h3>
                <p>Motor Anti-ransomware impede a invasão de Ransomware no seu PC como Petya/GoldenEye.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Proteção em Tempo Real <b class="sign">Melhorado</b></h3>
                <p>Bloqueia e remove automaticamente mais de 200 milhões de ameaças em tempo real e limpa dados que possam ser rastreados.</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- donation start -->
    <div class="donation clearfix">
      <h2>Brindes Grátis apenas na oferta especial de Natal 2018</h2>
      <dl class="clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd class="fl">
          <ul>
            <li><i>●</i> Garante a privacidade de seus arquivos e pastas confidenciais!</li>
            <li><i>●</i> Protege os arquivos selecionados até mesmo de vírus ou ransomware </li>
          </ul>
          <p><del>R$ 99,99</del> <strong>R$ 0</strong></p>
        </dd>
      </dl>
    </div>
    <!-- donation end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Adquira a versão Pro para uma proteção online completa e inteligente</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/imf-small-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes! 
            </p>
          </div>
          <p><strong><big>R$</big>59<big>,</big></strong> <span>99<del>R$259,89</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-imf63pcpf5999&ref=pt_imf63pcpfpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811rc-pt');">
            Ativar Agora
          </a>
          <p class="year">1 Ano de Assinatura / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Veja o que Você Obterá ao Ativar a Versão Pro:</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">IObit Malware Fighter <br>Free</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>IObit Malware Fighter <b>Pro</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">Básico</td>
              <td class="itemb">Proteção contra Malware e Proteção Vírus</td>
              <td class="itemc">Motor Antivírus Bitdefender</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Proteção Anti-ransomware</td>
              <td class="itemc">Motor Anti-ransomware</td>
            </tr>
            <tr>
              <td class="itema">Básico</td>
              <td class="itemb">Proteção em Tempo-Real</td>
              <td class="itemc">Total</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Proteção do Disco no Boot do Sistema</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Protege a Sua Câmera</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Proteção de Pastas Importantes</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Limpeza Automática de Rastros de Navegação</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Guarda de Disco USB</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Guarda de RAM</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">Atualização Automática</td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>NÃO PERCA!</h3>
        <h2>Aproveite esta chance única para comprar IObit Malware Fighter 6 Pro com 75% de Desconto.</h2>
        <div class="price">
          <p><strong><big>R$</big>59<big>,</big></strong> <span>99<del>R$259,89</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-imf63pcpf5999&ref=pt_imf63pcpfpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811rc-pt');">
            Ativar Agora
          </a>
          <p id="footdown" class="countdown">Corra! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Restantes</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- review start -->
    <div class="review">
      <h2 class="wrapper">
        IObit Malware Fighter Pro já protegeu mais de <b>3.687.554</b> de PCs. <br>Chegou a hora de proteger o seu.
      </h2>
      <div class="wrapper clearfix">
        <dl class="gelu-batir">
          <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
          <dd>
            <strong>Gelu Batir</strong>
            <p>
              Eu estou muito satisfeito com o produto de vocês, o IObit Malware Fighter. Toda operação é clara, segura e útil para proteger meu laptop. A verificação do programa também não afeta o desempenho da minha máquina e por isso recomendei este produto para dois amigos meus.
            </p>
            <p class="star"><img src="<?php echo getStaticUrl('images/star.png')?>" alt=""/></p>
          </dd>
        </dl>
        <dl class="david-cassidy">
          <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></dt>
          <dd>
            <strong>David Cassidy</strong>
            <p>
              Aqueles que estão procurando por um bom antivírus e anti-malware a um preço acessível não precisam ir além do IObit Malware Fighter. Eu recomendo que eles esqueçam do resto e escolha o melhor, que é o IObit Malware Fighter.
            </p>
            <p class="star"><img src="<?php echo getStaticUrl('images/star.png')?>" alt=""/></p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- review end -->

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
          <dl>
            <dt>Garantia de Reembolso</dt>
            <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
          </dl>
          <dl>
            <dt>Formas de Pagamento</dt>
            <dd><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dd>
          </dl>
          <dl>
            <dt>Pagamento 100% Seguro</dt>
            <dd><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dd>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Observe:</dt>
            <dd>1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.</dd>
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
    var imgSrc = "<?php echo getStaticUrl('images/imf-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=pt-imf63pcpf5599&ref=pt_imf63pcpfpurchase1811rclp<?php echo $refStr;?>&refs=pt_purchase_imf&tw=-8";
    var _ga = "ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811rclp-pt')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
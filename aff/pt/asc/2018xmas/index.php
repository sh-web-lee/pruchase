<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if (empty($_GET['ref'])) $_GET['ref'] = 'ptaff_asc12_2018xmas';
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

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
    'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
    'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
    'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
    'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
    'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
    'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
    'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
    'invalidcode','asc_install','asc_p6','asc_p7')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['pop'],array('xr_asc','x_dbasc','x_ascdb','xr_ascdb'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira Advanced SystemCare 12 Pro com 80% de desconto e leve dois super brindes para o seu computador. Oferta Especial de Natal da IObit.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
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
        <h1>Offre Spéciale de Noël</h1>
        <p class="best">A Maior Promoção do Ano – Sua Chance de Economizar!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
            <div class="hint">
              <dl class="pop-bg">
                <dt>IObit Uninstaller 8 PRO     <span><b>R$0 </b> <del>R$ 99,99</del></span></dt>
                <dd>Desinstala programas teimosos e plugins maliciosos para impedir que o seu PC acumule sobras de programas e garantir sua segurança online.</dd>
                <dt>Smart Defrag 6 PRO    <span><b> R$0 </b> <del>R$ 99,99</del></span></dt>
                <dd>Une uma desfragmentação rápida e profunda à otimização de disco para um melhor desempenho do PC</dd>
              </dl>
            </div>
          </div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 Pro</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown"> Corra! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Restantes</p>
              </div>
              <p><strong><big>R$</big>64<big>,</big></strong> <span>99 <del> R$399,88</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=ptaff-asc123pciusd6499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc122018xmas')">
                 Comprar Agora
              </a>
              <p class="year"> 1 Ano de Assinatura / 3 PCs</p>
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
        <h2>Limpeza Total, Otimização e Proteção do seu PC por um Preço Acessível!</h2>
        <p class="over">
          A escolha de mais de 8.000.000 usuários no mundo para fazer computadores antigos rodarem como novo e impedir a perda de desempenho de computadores novos. 
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Mais Privacidade <b>Novo </b></h3>
                <p>
                 Apaga rastros de privacidade para previnir contra rastreamento e manter seus dados pessoais seguros contra acesso secreto.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Internet 300%* Mais Rápida  <b  class="sign">Melhorado</b></h3>
                <p>Acelera velocidade de download, navegação, jogos online e videos do Youtube em até 300%.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>PC 200%* Mais Rápido <b  class="sign">Melhorado</b></h3>
                <p>Reduz a lentidão e travamentos do sistema e acelera o PC em até 200%.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Limpeza Mais Profunda   <b  class="sign"> Melhorado</b></h3>
                <p>Libera RAM automaticamente para um melhor desempenho e repara entradas do registro para um sistema mais estável.</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Obtenha Pro para um PC mais limpo, rápido e seguro!</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo,  <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes!
            </p>
          </div>
          <p><strong><big>R$</big>64<big>,</big></strong> <span>99 <del> R$399,88</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=ptaff-asc123pciusd6499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc122018xmas')">
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
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itemb"><p>Veja o Que Você Obterá ao Ativar a Pro Versão:</p></th>
              <th class="itemc"><span>Advanced SystemCare 12 <b>PRO</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itemb">Otimização, limpeza e reparos básicos do sistema</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itemb">Bloqueia acesso não-autorizado a seus arquivos privados</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itemb">Previne spyware and malware em tempo real</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itemb">Reduz e repara falhas e travamentos do sistema</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itemb">Acelera o computador em até 200%</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itemb">Acelera a Internet em até 300%</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itemb">Mantém programas essenciais automaticamente atualizados</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itemb">Remove automaticamente rastros de privacidade para uma navegação segura</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itemb">Atualiza automaticamente para a última versão</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
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
        <h3>NÃO PERCA!</h3>
        <h2>Aproveite esta chance única para comprar Advanced SystemCare 12 Pro com 80% de Desconto.</h2>
        <div class="price">
          <p><strong><big>R$</big>64<big>,</big></strong> <span>99 <del> R$399,88</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=ptaff-asc123pciusd6499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc122018xmas')">
            Ativar Agora
          </a>
          <p id="footdown" class="countdown">Corra!   <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Restantes</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
            <dd>
              <h2>Opinião da Mídia</h2>
              <p>"Advanced SystemCare é um ótimo utilitário de PC “tudo-em-um” que faz a varredura, reparação e otimiza diversos problemas do seu sistema. Ele tem o objetivo de remediar o que quer que aflija o seu computador, não só através da limpeza de arquivos inúteis, malware e entradas inválidas do registro, como também impulsionando a velocidade do seu computador para otimizar sua experiência no PC."</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hal-barry-koren.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>O seu programa me ajuda enormemente já há alguns anos. A verificação de disco repara sem reiniciar o PC para erros menores. A aceleração turbo aumentou em muito a velocidade da inicialização, os programas e os navegadores que uso. Tudo funciona bem com pouco uso de disco ou cpu. Seu Driver Booster me ajuda a economizar muito tempo sem trazer problemas. Eu tenho usado o IObit Uninstaller e tanto ele como o Smart Defrag são excelentes. Meu computador roda como uma máquina perfeitamente ajustada com a assistência dos seus programas."</p>
              <cite>Hal Barry Koren</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/michael-d-masters.png')?>" alt="Michael D. Masters"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"A versão 11 possui o melhor equilíbrio entre potência e facilidade de uso. A função de reconhecimento facial é uma adição bem-vinda ao arsenal que o Advanced SystemCare 11 emprega contra ameaças de segurança. O monitor do sistema mostra , em tempo real, quanta RAM e CPU seu PC está usando. Isso é especialmente importante no mundo do Windows 10, onde algumas atualizações usam recursos excessivamente. Eu também gostei bastante da nova função de liberar RAM, é bem mais leve e rápida, mas se eu tiver que escolher o meu elemento favorito, seria o Reforço de Segurança para o Windows 10. "</p>
              <cite>Michael D. Masters</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/savio-da-rocha-lobo.png')?>" alt="Savio Da Rocha Lobo"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"Tenho usado o ASC por um bom tempo – já são mais de 5 anos e ele é simplesmente tudo o que eu preciso para manter meu PC em ordem, funcionando e rodando como um novo O Software Advanced System Care só tem ficado cada vez melhor a cada versão – é um software verdadeiramente necessário e confiável para qualquer computador. Estou ansioso para checar os futuros upgrades do software. Novamente agradeço!"</p>
              <cite>Savio Da Rocha Lobo</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/stephen-h-littleton.png')?>" alt="Stephen H. Littleton"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"Assim que eu instalei, eu reparei que Advanced SystemCare deu vida nova ao meu PC! Logo de cara, eu percebi uma diferença notável. A inicialização estava mais rápida, os problemas que estavam causando travamentos e lentidão desapareceram! Eu fiquei tão impressionado que decidi testar outros produtos da IObit. Obrigado por esse excelente programa. É o melhor e eu recomendo sempre que eu posso!"</p>
              <cite>Stephen H. Littleton</cite>
            </dd>
          </dl>
        </div>
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
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Tente SEM RISCOS – com nossa Garantia de 60 dias de Reembolso</h4>
              <p>Nós estamos confiantes que ativando a edição PRO você obterá um PC mais limpo, rápido e segurocom um preço acessível! </p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Nós aceitamos </h4>
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
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=ptaff-asc123pciusd5999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>&tw=-8";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc122018xmas')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>
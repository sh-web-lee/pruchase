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
  $cName='frasc'.$date;
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

$viewNum=rand(71,98);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_sdpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adquira Advanced SystemCare 12 Pro com 60% de desconto, exclusivo para usuários Smart Defrag. Oferta Especial de Natal da IObit.</title>
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
      <a class="logo" href="https://www.iobit.com/pt/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>Presentão de Natal</h1>
      <p class="best">A Maior Promoção do Ano – Sua Chance de Economizar!</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          <span class="ghost"><span class="reduce"></span></span>
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
              <p id="bandown" class="countdown">Corre! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Restantes</p>
            </div>
            <p><strong><big>R$</big>76<big>,</big></strong> <span>99 <del>R$199,90 </del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pt-asc123pc7699&ref=pt_asc123pcsdpascpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1811rc-pt')">
              Comprar Agora
            </a>
            <p class="year">1 ano de assinatura / 3 PCs</p>
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
      <h2>Conheça o que você vai ganhar com o Advanced SystemCare 12 Pro?</h2>
      <p class="over">
        Mais de 8.000.000 de usuários pelo mundo escolheram Advanced SystemCare Pro como sua ferramenta de otimização do PC para fazer acelerar e otimizar seus PCs.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
      <div class="clearfix">
        <div class="fl">
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Mais Proteção da Privacidade<b class="sign"> Novo</b></h3>
              <p>
                Apaga rastros de privacidade para prevenir você de ser rastreado e manter seus dados pessoais livresde acesso secreto.
              </p>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Internet 300%* mais Rápida<b>Melhorado</b></h3>
              <p>Acelera o download, navegação, jogos e vídeos online em até 300%.</p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>PC 200%* mais Rápido<b>Melhorado</b></h3>
              <p>Reduz lag do sistema e acelera o PC em até 200%.</p>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Limpeza mais Profunda<b>Melhorado</b></h3>
              <p>Liberação automática de RAM para um melhor desempenho do PC e correção de problemas no registro para um sistema mais estável.</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- together start -->
  <div class="together">
    <div class="wrapper">
      <h2>
        Junto com o Smart Defrag Pro, <br> você vai maximizar o desempenho do seu disco e acelerar o PC!
      </h2>
      <div class="panel clearfix">
        <div class="asc-box fl clearfix">
          <div class="box fl">
            <h3>Desempenho do Disco <i></i></h3>
            <dl>
              <dt><strong>Até 200%* mais Rápido</strong></dt>
              <dd>
                Acelera a velocidade de acesso aos arquivos e velocidade de carregamento de jogos eficientemente.
                <span>*Exclusivo do Smart Defrag Pro!</span>
              </dd>
            </dl>
            <dl>
              <dt><strong>Melhor Desempenho do Disco</strong></dt>
              <dd>
                Desempenho de disco mais estável e rápido com Limpeza Automática de arquivos lixos e limpeza profunda de registro.
                <span>*Exclusivo do Advanced SystemCare Pro!</span>
              </dd>
            </dl>
          </div>
          <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
        </div>
        <div class="db-box fl clearfix">
          <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
          <div class="box fl">
            <h3><i></i>PC mais Rápido</h3>
            <dl>
              <dt><strong>Até 200%* mais Rápido</strong></dt>
              <dd>Reduz lag do sistema para acelerar o PC.
                <span>*Exclusivo do Advanced SystemCare Pro!</span>
              </dd>
            </dl>
            <dl>
              <dt><strong>Inicialização mais Rápida do PC</strong></dt>
              <dd>Desfrute de uma inicialização rápida do PC com a Desfragmentação no Boot.
                <span>*Exclusivo do Smart Defrag Pro!</span>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- together end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Ative Advanced SystemCare Pro Agora – Sua Última Chance de Economizar em 2018!</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes!
          </p>
        </div>
        <p><strong><big>R$</big>76<big>,</big></strong> <span>99 <del>R$199,90 </del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-asc123pc7699&ref=pt_asc123pcsdpascpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1811rc-pt')">
          Comprar Agora
        </a>
        <p class="year">Oferta exclusiva para usuários do Smart Defrag</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Compare o Advanced SystemCareFree e Pro</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">Advanced SystemCare<br>FREE</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>Advanced SystemCare<b>PRO</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema"><i class="all-icons free">√</i></td>
          <td class="itemb">Limpeza, Reparo e Otimização Básica de Sistema</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Bloqueia acesso não-autorizado aos seus arquivos privadors</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Previne spyware e malware em tempo real</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Reduz e repara travamentos e erros do sistema</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Acelera o computador em até 200%</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Acelera a internet em até 300%</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Atualiza automaticamente programas essenciais</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Remova automaticamente traços de privacidade para navegação segura</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Atualiza automaticamente para a última versão</td>
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
      <h3>NÃO PERCA!</h3>
      <h2>Tenha <b>60% de Desconto</b> para um PC mais Limpo, Rápido e Seguro!</h2>
      <div class="price">
        <p><strong><big>R$</big>76<big>,</big></strong> <span>99 <del>R$199,90 </del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-asc123pc7699&ref=pt_asc123pcsdpascpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1811rc-pt')">
          Comprar Agora
        </a>
        <p id="footdown" class="countdown">Corra! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Restantes</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Recomendado também por </h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review clearfix wrapper">
    <h2>COMPRAR AGORA</h2>
    <div class="content">
      <dl>
        <dt>Opinião do Usuário</dt>
        <dd>"Tenho usado o ASC por um bom tempo – já são mais de 5 anos e ele é simplesmente tudo o que eu preciso para manter meu PC em ordem, funcionando e rodando como um novo O Software Advanced System Care só tem ficado cada vez melhor a cada versão – é um software verdadeiramente necessário e confiável para qualquer computador. Estou ansioso para checar os futuros upgrades do software. Novamente agradeço!"</dd>
      </dl>
      <dl>
        <dt>Opinião do Usuário</dt>
        <dd>"Assim que eu instalei, eu reparei que Advanced SystemCare deu vida nova ao meu PC! Logo de cara, eu percebi uma diferença notável. A inicialização estava mais rápida, os problemas que estavam causando travamentos e lentidão desapareceram! Eu fiquei tão impressionado que decidi testar outros produtos da IObit. Obrigado por esse excelente programa. É o melhor e eu recomendo sempre que eu posso!"</dd>
      </dl>
      <dl class="active">
        <dt>Opinião da Mídia</dt>
        <dd>"Advanced SystemCare é um ótimo utilitário de PC “tudo-em-um” que faz a varredura, reparação e otimiza diversos problemas do seu sistema. Ele tem o objetivo de remediar o que quer que aflija o seu computador, não só através da limpeza de arquivos inúteis, malware e entradas inválidas do registro, como também impulsionando a velocidade do seu computador para otimizar sua experiência no PC."</dd>
      </dl>
      <dl>
        <dt>Opinião do Usuário</dt>
        <dd>"O seu programa me ajuda enormemente já há alguns anos. A verificação de disco repara sem reiniciar o PC para erros menores. A aceleração turbo aumentou em muito a velocidade da inicialização, os programas e os navegadores que uso. Tudo funciona bem com pouco uso de disco ou cpu. Seu Driver Booster me ajuda a economizar muito tempo sem trazer problemas. Eu tenho usado o IObit Uninstaller e tanto ele como o Smart Defrag são excelentes. Meu computador roda como uma máquina perfeitamente ajustada com a assistência dos seus programas."</dd>
      </dl>
      <dl>
        <dt>Opinião do Usuário</dt>
        <dd>"A versão 11 possui o melhor equilíbrio entre potência e facilidade de uso. A função de reconhecimento facial é uma adição bem-vinda ao arsenal que o Advanced SystemCare 11 emprega contra ameaças de segurança. O monitor do sistema mostra , em tempo real, quanta RAM e CPU seu PC está usando. Isso é especialmente importante no mundo do Windows 10, onde algumas atualizações usam recursos excessivamente. Eu também gostei bastante da nova função de liberar RAM, é bem mais leve e rápida, mas se eu tiver que escolher o meu elemento favorito, seria o Reforço de Segurança para o Windows 10."</dd>
      </dl>
    </div>
    <ul class="users">
      <li><img alt="" src="<?php echo $pResUrl; ?>images/savio-da-rocha-lobo.png">Savio Da Rocha Lobo</li>
      <li><img alt="" src="<?php echo $pResUrl; ?>images/stephen-h-littleton.png">Stephen H. Littleton</li>
      <li class="active"><img alt="" src="<?php echo $pResUrl; ?>images/cnet.png">Cnet</li>
      <li><img alt="" src="<?php echo $pResUrl; ?>images/hal-barry-koren.png">Hal Barry Koren</li>
      <li><img alt="" src="<?php echo $pResUrl; ?>images/michael-d-masters.png">Michael D. Masters</li>
    </ul>
    <div class="line"></div>
  </div>
  <!-- review end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Tente SEM RISCOS – com nossa Garantia de 60 dias de Reembolso</h4>
            <p>Nós estamos confiantes que ativando a edição PRO você obterá um PC mais limpo, rápido e seguro com um preço acessível! </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Aceitamos várias formas de pagamento:</h4>
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
  var _href = "https://www.iobit.com/buy.php?product=pt-asc123pc7299&ref=pt_asc123pcsdpascpurchase1811rclp<?php echo $refStr;?>&refs=pt_purchase_asc";
  var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1811rclp-pt')";
  var viewNum = "<?php echo $viewNum;?>";
</script>

<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
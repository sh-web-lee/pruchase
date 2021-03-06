<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='ptaff_asc13_2020buy1pc';
$ref3pc='ptaff_asc13_2020buy3pc';
if(!empty($_GET['ref'])){
  $ref1pc=$ref3pc=$_GET['ref'];
}
include $pRootUrl.'include/common.inc.php';

$reduceNum=74041325;
$buyNum = number_format(ceil(microtimeFloat()*1000/20000) - $reduceNum);
if($_GET['action']=='maskCount'){
  $maskType=$_GET['maskType'];
  if(in_array($maskType,array(1,2))) {
    $buttonClick=$_GET['buttonClick'];
    $ip=empty($_GET['ip']) ? getIP() : $_GET['ip'];
    $time=time();
    try {
      $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
      $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->query("set names utf8");

      $sql = "insert into affascmaskcount2019 (ip,addTime,maskType,buttonClick) values(:ip,:addTime,:maskType,:buttonClick)";
      $pre = $pdo->prepare($sql);
      $pre->bindParam(':ip', $ip);
      $pre->bindParam(':addTime', $time);
      $pre->bindParam(':maskType', $maskType);
      $pre->bindParam(':buttonClick', $buttonClick);
      $pre->execute();
    } catch (PDOException $e) {
      var_dump($e->getMessage());
    }
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ativando Advanced SystemCare PRO Para Fazer seu PC Lento Rodar no Topo da Capacidade</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
        success: function(packs){
          $('.buynum').html(packs);
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt="" /></dt>
      <dd class="fl">
        <span>Voc?? est?? ativando:</span>
        <h1>Advanced SystemCare 13 PRO</h1>
        <p>Compre agora para otimizar o seu computador lento e faz??-lo rodar no topo <br> da capacidade!</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>???Advanced Systemcare remedia qual for o problema de seu computador???</p>
      <img src="<?php echo getStaticUrl('images/clnet.png')?>" alt="" />
    </div>
  </div>
</div>
<!-- banner end -->

<!-- container start -->
<div class="wrapper">
  <!-- title -->
  <h2 class="title"></h2>
  <!-- offer start -->
  <div class="offer clearfix">

    <!-- 1PC BOX -->
    <div class="box pc">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <!-- title -->
      <h2>1 Ano / 1 PC Licen??a</h2>
      <!-- details -->
      <ul>
        <li><i></i>Limpeza Completa do PC</li>
        <li><i></i>Ajuste Definitivo do Sistema</li>
        <li><i></i>Prote????o Total de Privacidade</li>
        <li><i></i>Limpeza Autom??tica de RAM</li>
        <li><i></i>Atualiza????es Gr??tis</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong><small>??R$ </small>54,99</strong> <del>R$ 109,98</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=ptaff-asc131pc5499&ref=ptaff_asc13_2020buy1pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc132020buy1pc')">
          Adicionar para o Carrinho
        </a>
      </div>
    </div>

    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>1 Ano / 3 PCs Licen??a</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>Limpeza Completa do PC</li>
        <li><i></i>Ajuste Definitivo do Sistema</li>
        <li><i></i>Prote????o Total de Privacidade</li>
        <li><i></i>Limpeza Autom??tica de RAM</li>
        <li><i></i>Atualiza????es Gr??tis</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong><small> R$ </small>76,99</strong> <del>R$ 192,48</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=ptaff-asc133pc7699&ref=ptaff_asc13_2020buy3pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc132020buy3pc')">
          Adicionar para o Carrinho
        </a>
        <p class="people"><i></i><b class="buynum"><?php echo $buyNum;?></b> pessoas j?? compraram</p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>N??s aceitamos</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>GARANTIA DE REEMBOLSO DE 60 DIAS</h2>
        <p>
          Se voc?? n??o ficar satisfeito com o Advanced SystemCare PRO, devolveremos todo o seu dinheiro dentro de 60 dias ap??s a compra.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>PAGAMENTO SEGURO</h2>
        <p>
          N??s protegemos seus dados pessoais com criptografia avan??ado e prote????o anti-spam.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>ATENDIMENTO GR??TIS 24 HORAS POR DIA</h2>
        <p>
          Nosso time de atendimento ao cliente ir?? responder a todas as suas perguntas relacionadas a nossos produtos em no m??ximo 24 horas.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>ATUALIZA????ES GR??TIS</h2>
        <p>
          Voc?? receber?? todas as atualiza????es do programa enquanto durar o per??odo de assinatura.
        </p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->
</div>
<!-- container end -->

<!-- review start -->
<div class="container bordertop clearfix">
  <div class="review wrapper">
    <div class="review-box">
      <!-- 01 -->
      <div class="reviews clearfix">
        <h2>Opini??o do Usu??rio</h2>
        <h3>"Definitivamente ultrapassou as minhas expectativas"</h3>
        <p>"Eu perdi a conta de quantos programas eu tentei em anos e nenhum chegou perto do Advanced SystemCare Pro. Desde que eu tenho este programa eu n??o precisei chamar um t??cnico para reparar meu computador sequer uma vez. Definitivamente ultrapassou as minhas expectativas, sempre atualizado e o visual ?? bem legal tamb??m. Obrigado a voc??s por fazerem minha vida t??o mais f??cil."</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>Opini??o da M??dia</h2>
        <h3>???Advanced Systemcare remedia qual for o problema de seu computador???</h3>
        <p>"Advanced SystemCare ?? um ??timo utilit??rio de PC ???tudo-em-um??? que faz a varredura, repara????o e otimiza diversos problemas do seu sistema. Ele remedia qual for o problema de seu computador, n??o s?? atrav??s da limpeza de arquivos in??teis, malware e entradas inv??lidas do registro, como tamb??m impulsionando a velocidade do seu computador para otimizar sua experi??ncia no PC."</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>Opini??o do Usu??rio</h2>
        <h3>"Este ?? o melhor produto que um usu??rio pode comprar"</h3>
        <p>"Na opini??o de um t??cnico de reparo de computadores, eu acho que a maioria dos problemas s??o resolvidos escaneando o PC com o ASC Free. Quando termino com o reparo eu geralmente sugiro que o cliente compre o pacote PRO. Quem precisa de um t??cnico quando voc?? tem o poder do Advanced System Care Pro trabalhando no seu sistema 24hx7dias? Este ?? o melhor produto que um usu??rio pode comprar. Obrigado por facilitar o meu trabalho!"</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"><span></span></div>
        <strong>Bob Bassett</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
        <strong>Cnet</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"><span></span></div>
        <strong>Charles R. Widick</strong>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- footer start -->
<div class="footer">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</div>
<!-- footer end -->

<!-- mask start -->
<div class="mask">
  <div class="mask-box">
    <div class="close" onclick="maskClose()">x</div>
  </div>
</div>
<!-- mask end -->

<script>var imgSrc = "<?php echo getStaticUrl('images/off.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=76036105;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

$refStr='';
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Adquira IObit Malware Fighter 6 Pro com 70% de desconto e leve um super brinde para proteger suas pastas importantes. Oferta Especial de Natal da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript">
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 20000);
      }
    });
  }
  setTimeout('getBuyNum()', 20000);
</script>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1> Promoção Especial de Natal  Tempo limitado, Apenas uma Vez no Ano!</h1>
    <!-- banner-content -->
    <div class="banner-content">
      <img class="sign" src="<?php echo $pResUrl; ?>images/sign.png" alt=""/>
      <div class="banner-left fl">
        <img class="box-imf" src="<?php echo $pResUrl; ?>images/boxsort-imf.png" alt=""/>
        <span>Oferta termina em</span>
        <ul class="time">
          <li>5</li>
          <li>30</li>
          <li>60</li>
          <li class="last">60</li>
        </ul>
      </div>
      <div class="banner-right fr">
        <h2>IObit Malware Fighter 6 Pro - 1 ano / 3 PCs</h2>
        <p class="decri">+ Protected Folder (Grátis!)</p>
        <span class="banner-line"></span>
        <p class="de-price">De <del>R$ 259,89</del></p>
        <p class="main-price">6x de <b>R$ 11,67</b></p>
        <p class="small-price">ou <b>R$ 69,99</b> a vista</p>
        <span class="banner-line"></span>
        <!-- buybtn -->
        <a class="buy-btn"
           href="https://www.iobit.com/buy.php?product=pt-imf63pcpf6999&ref=pt_imf63pcpfpurchase1811<?php echo $refStr;?>&refs=pt_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811-pt')">
          COMPRAR AGORA
        </a>
        <p class="people-box"><img src="<?php echo $pResUrl; ?>images/people.png" alt=""/>Mais de <b class="people-num buyNum"><?php echo $buyNum;?></b> pessoas já compraram</p>
        <div class="payments">
          <h4>Formas de Pagamento</h4>
          <img src="<?php echo $pResUrl; ?>images/paymens.png" alt=""/>
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

<!-- awards start -->
<div class="awards">
  <h2>Recomendado pela Mídia Especializada</h2>
  <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
</div>
<!-- awards end -->

<!--hightlight start-->
<div class="imf-message wrapper clearfix">
  <h2>Entenda como IObit Malware Fighter Pro mantém seu PC livre de ataques</h2>
  <div class="wrapper">
    <ul class="message clearfix">
      <li class="one active">
        <h4>Proteção Dupla</h4>
        <p>Combina os motores Anti-Malware da IObit com o motor antívirus da Bitdefender</p>
      </li>
      <li class="two">
        <h4>Prevenção contra Ransomware</h4>
        <p>Protege contra qualquer ransomware que tente invadir seu PC e mantém os seus arquivos importantes protegidos no Cofre.</p>
      </li>
      <li class="three">
        <h4>Webcam Protegida</h4>
        <p>Protege sua webcam contra acesso não-autorizado e invasão de privacidade.</p>
      </li>
      <li class="four">
        <h4>Segurança na Inicialização</h4>
        <p>Protege a inicialização do seu PC para impedir que malwares danifiquem seu sistema durante o boot.</p>
      </li>
    </ul>
    <div class="img-change">
      <a href="javascript: void(0);" class="dg-prev"><span></span></a>
      <a href="javascript: void(0);" class="dg-next"><span></span></a>
      <div class="continer">
        <div class="roll">
          <div class="content" data-num="0">
            <img src="<?php echo $pResUrl; ?>images/img-list01.png">
            <span></span>
          </div>
          <div class="content" data-num="1">
            <img src="<?php echo $pResUrl; ?>images/img-list02.png">
            <span></span>
          </div>
          <div class="content" data-num="2">
            <img src="<?php echo $pResUrl; ?>images/img-list02.png">
            <span></span>
          </div>
          <div class="content" data-num="3">
            <img src="<?php echo $pResUrl; ?>images/img-list04.png">
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <div class="feature-change clearfix">
      <dl class="active">
        <dt><img src="<?php echo $pResUrl; ?>images/class1.png" alt=""></dt>
        <dd> Novo motor <br> Bitdefender </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/class2.png" alt=""></dt>
        <dd> Prevenção contra<br>Ransomware</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/class3.png" alt=""></dt>
        <dd>Webcam Protegida</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/class4.png" alt=""></dt>
        <dd>Segurança na<br>Inicialização</dd>
      </dl>
    </div>
    <ul class="list-content">
      <li class="list01 noaml">
        <span class="icons"></span>
        <span class="line"></span>
      </li>
      <li class="list02">
        <span class="icons"></span>
        <span class="line"></span>
      </li>
      <li class="list03">
        <span class="icons"></span>
        <span class="line"></span>
      </li>
      <li class="list04">
        <span class="icons"></span>
        <span class="line"></span>
      </li>
    </ul>
  </div>

</div>
<!-- hightlight end -->

<!-- gift message start -->
<div class="gift-message">
  <div class="wrapper">
    <img src="<?php echo $pResUrl; ?>images/imf-center-box.png" alt="" class="img-box">
    <div class="right-message">
      <img src="<?php echo $pResUrl; ?>images/pf-box.png" alt="" class="img-box">
      <div class="box">
        <h3>Brinde Grátis - Protected Folder</h3>
        <p>1 Ano de Assinatura por R$ 0 (avaliado em R$ 99,99)</p>
        <p>Proteção de senha para pastas e arquivos no Windows</p>
        <p>Te protege contra a perda de arquivos importantes causadas por vírus</p>
      </div>
    </div>
  </div>
</div>
<!-- gift message end -->

<!-- between-buy start -->
<div class="between-buy">
  <div class="wrapper">
    <p class="price"><strong>R$ 69,99 </strong> <del>R$ 259,89</del></p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=pt-imf63pcpf6999&ref=pt_imf63pcpfpurchase1811<?php echo $refStr;?>&refs=pt_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811-pt')">
      <i></i> <span>ATIVAR AGORA</span>
    </a>
    <p class="last"> <i></i> Mais de <span class="buyNum"><?php echo $buyNum;?></span> pessoas já compraram</p>
  </div>
</div>
<!-- between-buy end -->

<!-- review start -->
<div class="review wrapper">
  <h2>
    IObit Malware Fighter Pro já protegeu mais de <span class="buyNum"><?php echo $buyNum;?></span> de PCs.<br>
    Chegou a hora de proteger o seu.
  </h2>
  <div class="clearfix">
    <!-- Gelu Batir -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir"></dt>
      <dd>
        <h3>Gelu Batir</h3>
        <p>Eu estou muito satisfeito com o produto de vocês, o IObit Malware Fighter. Toda operação é clara, segura e útil para proteger meu laptop. A verificação do programa também não afeta o desempenho da minha máquina e por isso recomendei este produto para dois amigos meus.</p>
      </dd>
    </dl>
    <!-- David Cassidy -->
    <dl class="david">
      <dt><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy"></dt>
      <dd>
        <h3>David Cassidy</h3>
        <p>Aqueles que estão procurando por um bom antivírus e anti-malware a um preço acessível não precisam ir além do IObit Malware Fighter. Eu recomendo que eles esqueçam do resto e escolha o melhor, que é o IObit Malware Fighter.</p>
      </dd>
    </dl>
  </div>
</div>
<!-- review end -->

<!-- comparison_table start -->
<div class="comparison wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Veja o que a versão PRO traz para você</th>
      <th class="itemb">IObit Malware Fighter<br>
        FREE</th>
      <th class="itemc">IObit Malware Fighter
        PRO
        <span>1 Ano / 3 PCs</span>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon1.png"></td>
      <td class="virtue">Função Básica Anti-Malware <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
      <td class="itemb itembg"> <img src="<?php echo $pResUrl; ?>images/check1.png"></td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon2.png"></td>
      <td class="virtue">Verificação até 130% mais Rápida para Lidar Rapidamente com Ameaças <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
      <td class="itemb itembg"><img src="<?php echo $pResUrl; ?>images/check1.png"></td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon3.png"></td>
      <td class="virtue">Novo Motor Anti-ransomware para Bloquear que seus Arquivos sejam Criptografados ou seu Sistema feito de Refém <sup> <img src="<?php echo $pResUrl; ?>images/sup-green.png" alt=""></sup></td>
      <td class="itemb itembg"><img src="<?php echo $pResUrl; ?>images/check1.png"></td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon4.png"></td>
      <td class="virtue">Protege Arquivos Importantes contra Acesso Não-Autorizado com o Cofre <sup><img src="<?php echo $pResUrl; ?>images/sup-green.png" alt=""></sup>
      </td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon5.png"></td>
      <td class="virtue">Verifica Arquivos de Download e Remove Anúncios para Melhor Proteção <sup><img src="<?php echo $pResUrl; ?>images/sup-green.png" alt=""></sup></td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon6.png"></td>
      <td class="virtue">Capacidade Anti- Malware completa com Motor "Dual-Core" Único  <sup> <img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon7.png"></td>
      <td class="virtue">Proteção Avançada contra Ameaças com o Mecanismo de AntiVirus Bitdefender <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon8.png"></td>
      <td class="virtue">Proteção na Inicialização do Disco para Proteger contra Ataques Maliciosos com a Guarda do MBR <sup><img src="<?php echo $pResUrl; ?>images/sup-green.png" alt=""></sup></td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon9.png"></td>
      <td class="virtue">Protege sua Webcam contra Acesso Não-Autorizado <sup><img src="<?php echo $pResUrl; ?>images/sup-green.png" alt=""></sup></td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon10.png"></td>
      <td class="virtue">Proteção Completa em Tempo Real para Segurança Total do PC <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 11 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon11.png"></td>
      <td class="virtue">Evita Infecção de Vírus por meio do Disco USB</td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 12 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon12.png"></td>
      <td class="virtue">Detecta Processos Maliciosos na Mémoria RAM</td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 13 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon13.png"></td>
      <td class="virtue">Limpeza Automática de Dados Privados com Anti-Rastreamento do Browser <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 14 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon14.png"></td>
      <td class="virtue">Detecta Ameaças por Meio da Análise de Ações Maliciosas</td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 15 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon15.png"></td>
      <td class="virtue">Funciona de forma Inteligente em Segundo Plano Sem Interrupções</td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 16 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon16.png"></td>
      <td class="virtue">Atualiza Automaticamente para a Última Versão</td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    <!-- 17 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon17.png"></td>
      <td class="virtue">Suporte Técnico Gratuito 24/7</td>
      <td class="itemb itembg">-</td>
      <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <td class="text" colspan="2"></td>
      <td class="itemb itembg">
        IObit Malware Fighter<br>
        Free</td>
      <td class="itema">
        IMF PRO para 3 PCs<br>
        <b>R$ 69,99</b> <del>R$ 259.89</del>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-imf63pcpf6999&ref=pt_imf63pcpfpurchase1811<?php echo $refStr;?>&refs=pt_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811-pt')">
          Comprar Agora
        </a>
      </td>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison_table end -->

<!-- service start -->
<ul class="wrapper service clearfix">
  <li>
    <h5>Garantia de Reembolso</h5>
    <img src="<?php echo $pResUrl; ?>images/money-back-guarantee.png" alt="" />
  </li>
  <li>
    <h5> Atendimento 24 Horas</h5>
    <img src="<?php echo $pResUrl; ?>images/service.png" alt="" />
  </li>
  <li>
    <h5>Pagamento 100% Seguro</h5>
    <img src="<?php echo $pResUrl; ?>images/secured.png" alt="" />
  </li>
</ul>
<!-- service end -->

<!-- footer start -->
<div class="footer clearfix">
  <dl class="annotation">
    <dt>Observe:</dt>
    <dd>1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - 2018 IObit. Todos os Direitos Reservados</p>
</div>
<!-- footer end -->

<!-- sides bg start -->
<div class="container clearfix">
  <img class="fl" src="<?php echo $pResUrl;?>images/left-bg.jpg" alt="">
  <img class="fr" src="<?php echo $pResUrl;?>images/right-bg.jpg" alt="">
</div>
<!-- sides bg end -->

<script>
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $(".time li").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();

  $.fn.target=function (target) {
    $(this).click(function() {
      var Theigth = target.offset().top;
      $("html, body").animate({scrollTop: Theigth}, 'slow');
    });
  };


  $(function () {

    $("a.intro").target($("#compare"));

    //hightlight

    if ($('.img-change .roll').length != 0) {
      var count = $('.img-change .roll .content').length;
      $('.img-change .roll').css('width', 365 * count);
    };
    $('.img-change .dg-next').click(function(event) {
      $('.img-change .roll').stop(true, true).animate({marginLeft: -365}, '200',function(){
        $('.img-change .roll').css('marginLeft', '0');
        $('.img-change .roll').find('.content:first').appendTo($('.img-change .roll'));
      });
      num();
    });
    $('.img-change .dg-prev').click(function(event) {
      $('.img-change .roll').find('.content:last').prependTo($('.img-change .roll'));
      $('.img-change .roll').css('marginLeft', -365);
      $('.img-change .roll').stop(true, true).animate({marginLeft: 0}, '200');
      var num=$('.img-change .roll .content:first').attr("data-num");
      $('.imf-message .message li').eq(num).addClass("active").siblings().removeClass('active');
      $('.feature-change dl').eq(num).addClass("active").siblings().removeClass('active');
      $('.list-content li').eq(num).addClass("active").siblings().removeClass('active').removeClass("noaml");
    });
  })

  function num() {
    var num=$('.img-change .roll .content:first').attr("data-num");
    if(num==3) {
      $('.imf-message .message li').eq(0).addClass("active").siblings().removeClass('active');
      $('.feature-change dl').eq(0).addClass("active").siblings().removeClass('active');
      $('.list-content li').eq(0).addClass("active").siblings().removeClass('active').removeClass("noaml");
    }
    else {
      num ++;
      $('.imf-message .message li').eq(num).addClass("active").siblings().removeClass('active');
      $('.feature-change dl').eq(num).addClass("active").siblings().removeClass('active');
      $('.list-content li').eq(num).addClass("active").siblings().removeClass('active').removeClass("noaml");
    }
  }
</script>
</body>
</html>
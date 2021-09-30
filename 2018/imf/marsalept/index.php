<?php
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

$reduceNum=47683478;
$buyNum = ceil(microtime_float() * 1000 / 30000)-$reduceNum;
$buyNum = number_format($buyNum);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira IObit Malware Fighter 5 Pro para 3 PCs com 55% de desconto. Oferta Limitada da IObit.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,900i,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function getBuyNum(){
  $.ajax({
    type: "GET",
    url: "<?php echo $pRootUrl;?>callback.php",
    data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>r="+Math.random()+"&reTime=30",
    success: function(packs){
      $('.buy-num-bot').html(packs);
      setTimeout('getBuyNum()', 30000);
    }
  });
}
setTimeout('getBuyNum()', 30000);
</script>     
</head>

<body>
  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner bg">
    <div class="wrapper">
      <div class="wrapper clearfix">
        <a class="logo" href="http://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <div class="panel clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/imfbox.png')?>" alt="" />
            <h4>Oferta acaba em:</h4>
            <ul id="toptime" class="countdown">
              <li><strong>00</strong> <span>Horas</span></li>
              <li><strong>00</strong> <span>Min</span></li>
              <li class="three"><strong>00</strong> <span>Seg</span></li>
              <li class="four"><strong>00</strong> <span>Ms</span></li>
            </ul>
          </div>
          <div class="right fr">
            <img src="<?php echo getStaticUrl('images/title.png')?>" alt="" />
            <ul class="laft">
              <li><i>+</i> <h3>Múltiplos Dispositivos (3 PCs)</h3></li>
              <li><i>+</i> <h3>1 Ano de Proteção</h3></li>
            </ul>
            <div class="price">
              <p class="gray">DE: <del>R$ 159,90</del></p>
              <p class="red"><sup>POR:</sup> <strong>R$ 69,99</strong></p>
              <a class="buybtn"
                 href="http://www.iobit.com/buy.php?product=pt-imf53pc6999&ref=pt_imf53pcpurchase1803&refs=pt_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf5purchase1803-pt')">
                COMPRAR AGORA
              </a>
              <p class="people"><i class="all-icons"></i> Mais de <b class="people-num"><?php echo $buyNum; ?></b> pessoas já compraram</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- hightlight start -->
  <div class="imf-message wrapper clearfix">
    <h2>Antivírus, Anti-Malware e Anti-Ransomware em um Único Produto.</h2>
    <div class="wrapper">
      <ul class="message clearfix">
        <li class="one active">
          <h4>Proteção Dupla</h4>
          <p>Combina os motores Anti-Malware da IObit com o motor antívirus da Bitdefender</p>
        </li>
        <li class="two">
          <h4>PREVENÇÃO DE RANSOMWARE</h4>
          <p>Protege contra Qualquer Ransomware que Tente Invadir seu PC, Até o Ransomware Petya/GoldenEye Pode ser Facilmente Bloqueado e Removido.</p>
        </li>
        <li class="three">
          <h4>Webcam Protegida</h4>
          <p>Protege sua webcam contra acesso não-autorizado e invasão de privacidade.</p>
        </li>
        <li class="four">
          <h4>Elimina Rastros de Navegação</h4>
          <p>Elimina automaticamente seus rastros online com Anti-Rastreamento do Navegador</p>
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
          <dd> Prevenção de<br> Ransomware</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/class3.png" alt=""></dt>
          <dd>Webcam Protegida</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/class4.png" alt=""></dt>
          <dd>Elimina Rastros<br> de Navegação</dd>
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

  <!-- review start -->
  <div class="review wrapper">
    <h2>
      IObit Malware Fighter Pro já protegeu mais de <strong class="people-num"><?php echo $buyNum; ?></strong> de PCs. 
      <span>Chegou a hora de proteger o seu.</span>
    </h2>
    <div class="panel clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers" /></dt>
        <dd>
          <h3>Peter Stoffers</h3>
          <p>No começo eu estava cético, mas <span>depois de instalá-lo, o IObit</span> Malware Fighter se tornou o meu <span>programa anti-malware favorito. No</span> decorrer dos anos, ele já detectou e <span>removeu muitas ameaças.</span></p>
          <i class="all-icons">★★★★★</i>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/craig-e-witthington.png')?>" alt="Craig E. Witthington" /></dt>
        <dd>
          <h3>Craig E. Witthington</h3>
          <p>O IObit Malware Fighter roda <span>quieto em segundo plano sem</span> precisar que você dê muita atenção <span>a ele. Eu estou certo que ele é capaz</span> de monitorar malwares e <span>prevení-los de chegar ao meu</span> computador. </p>
          <i class="all-icons">★★★★★</i>
        </dd>
      </dl>
    </div>
  </div>
  <!-- review end -->

  <!-- centbuy start -->
  <div class=" centbuy bg">
    <div class="wrapper">
      <h2>Com apenas <b>R$ 0,19</b> por dia, você mantém seu PC e seus dados seguros.</h2>
      <h3>Assine por um ano e leve IObit Malware Fighter Pro para 2 PCs extras.</h3>
      <div class="clearfix">
        <img class="imgbox fl" src="<?php echo getStaticUrl('images/imfbox-sm.png')?>" alt="" />
        <div class="price fl">
          <p class="red"><strong>R$ 69,99</strong> <b>(ou em 6x de R$ 11,67 s/ juros)</b></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pt-imf53pc6999&ref=pt_imf53pcpurchase1803&refs=pt_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf5purchase1803-pt')">
            COMPRAR AGORA
          </a>
          <p class="people">Economize <b>R$ 90,00</b></p>
        </div>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Veja o que a versão PRO traz para você</th>
          <th class="itemb">IObit Malware Fighter<br> FREE</th>
          <th class="itema">
            IObit Malware Fighter PRO
            <span>1 Ano / 3 PCs</span>
          </th>  
        </tr>        
      </thead> 
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon1.png')?>" alt="" /></td>
          <td class="virtue">Função Básica Anti-Malware <sup>Melhorado</sup></td>
          <td class="itemb"><i class="all-icons"></i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon2.png')?>"></td>
          <td class="virtue">
            Verificação até 130% mais Rápida para Lidar Rapidamente com Ameaças  <sup>Melhorado</sup>
          </td>
          <td class="itemb"><i class="all-icons"></i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr> 
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon3.png')?>"></td>
          <td class="virtue">
            Verifica Arquivos de Download e Remove Anúncios para Melhor Proteção  <sup class="novo">Novo</sup>
          </td>
          <td class="itemb"><i class="all-icons"></i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>  
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon4.png')?>"></td>
          <td class="virtue">
            Capacidade Anti- Malware completa com Motor "Dual-Core" Único  <sup>Melhorado</sup>
          </td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr> 
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon5.png')?>"></td>
          <td class="virtue">
            Proteção Avançada contra Ameaças com o Mecanismo de AntiVirus Bitdefender  <sup class="lost">Melhorado</sup>
          </td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr> 
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon6.png')?>"></td>
          <td class="virtue">
            Protege seu PC e seu Dinheiro de Ataques de Ransomware <sup class="novo">Novo</sup>
          </td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon7.png')?>"></td>
          <td class="virtue">
            Protege sua Webcam contra Acesso Não-Autorizado <sup class="novo">Novo</sup>
          </td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon8.png')?>"></td>
          <td class="virtue">
            Proteção Completa em Tempo Real para Segurança Total do PC <sup>Melhorado</sup>
          </td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon9.png')?>"></td>
          <td class="virtue">Evita Infecção de Vírus por meio do Disco USB</td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>"></td>
          <td class="virtue">Detecta Processos Maliciosos na Mémoria RAM</td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon11.png')?>"></td>
          <td class="virtue">Limpeza Automática de Dados Privados com Anti-Rastreamento do Browser <sup class="lost">Melhorado</sup></td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon12.png')?>"></td>
          <td class="virtue">Detecta Ameaças por Meio da Análise de Ações Maliciosas</td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon13.png')?>"></td>
          <td class="virtue">Funciona de forma Inteligente em Segundo Plano Sem Interrupções</td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon14.png')?>"></td>
          <td class="virtue">Atualiza Automaticamente para a Última Versão</td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon15.png')?>"></td>
          <td class="virtue">Suporte Técnico Gratuito 24/7</td>
          <td class="itemb"><i class="all-icons line">-</i></td>
          <td class="itema"><i class="all-icons red"></i></td>  
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th class="text" colspan="2"></th>
          <th class="itemb">
            IObit Malware Fighter<br> FREE
            <p>Sua versão atual</p>
          </th>
          <th class="itema">
            IObit Malware Fighter PRO
            <p><strong>R$ 69,99</strong> <del>R$159,90</del></p>
            <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pt-imf53pc6999&ref=pt_imf53pcpurchase1803&refs=pt_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf5purchase1803-pt')">
            Comprar Agora
          </a>
          </th>  
        </tr>        
      </tfoot> 
    </table>  
  </div>
  <!-- comparison end -->
  <!-- service start -->
  <ul class="wrapper service clearfix">
    <li>
      <h5>Garantia de Reembolso</h5>
      <span><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></span>
    </li>
    <li>
      <h5>Formas de Pagamento</h5>
      <span><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></span>
    </li>
    <li>
      <h5>Pagamento 100% Seguro</h5>
      <span><img src="<?php echo getStaticUrl('images/secured.png')?>" alt="" /></span>
    </li>      
  </ul>
  <!-- service end -->

  <!-- footer start -->
  <div class="wrapper footer clearfix">
    <dl class="note">
      <dt>Observe:</dt>
      <dd>1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>      
  </div>
  <!-- footer end -->

  <script type="text/javascript">
    var countdown = function(countdown) {
      getCycleCountdown();
      $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
      setTimeout("countdown('" + countdown + "')", 1);
    };

    function getCycleCountdown() {
      var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
      var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
      d = MApp(2.2).packages.zeroize(datetime[0], 2);
      h = MApp(2.2).packages.zeroize(datetime[1], 2);
      i = MApp(2.2).packages.zeroize(datetime[2], 2);
      s = MApp(2.2).packages.zeroize(datetime[3], 2);
      mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
    }

    $(function() {
      countdown(("#toptime strong"));

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
    });
  </script>

</body>
</html>
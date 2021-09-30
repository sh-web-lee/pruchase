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
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
if($_GET['to']=='purchase-6'){
  if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    if(count($matches[1])>=2){
      $refStr.='-'.$matches[1][0].$matches[1][1];
    }
  }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira Driver Booster 5 Pro com 50% de desconto e leve Smart Defrag Pro grátis. Oferta Limitada da IObit.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,900i,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='17473586-658',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function strFormat(str) {
  return str.replace(/,/g, '.');
}
function getBuyNum(){
  $.ajax({
    type: "GET",
    url: "<?php echo $pRootUrl;?>callback.php",
    data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>r="+Math.random()+"&reTime=30",
    success: function(packs){
      $('.people-num').html(packs);
        $('.people-num').html(strFormat(packs));
      setTimeout('getBuyNum()', 30000);
    }
  });
}
setTimeout('getBuyNum()', 30000);
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!--banner-->
<div class="banner bg">
  <div class="wrapper clearfix">
    <a class="logo" href="http://www.iobit.com" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
    </a>
    <div class="panel clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/dbbox.png')?>" alt="" />
        <ul class="laft">
          <li><i>+</i> <h3>Assinatura de 1 ano / 3 PCs</h3></li>
          <li><i>+</i> <h3>Super Brinde (Smart Defrag Pro)</h3></li>
        </ul>
        <ul id="toptime" class="countdown">
          <li><strong>00</strong> <span>Horas</span></li>
          <li><strong>00</strong> <span>Min</span></li>
          <li class="three"><strong>00</strong> <span>Seg</span></li>
          <li class="four"><strong>00</strong> <span>Ms</span></li>
        </ul>
      </div>
      <div class="right fr">
        <img src="<?php echo getStaticUrl('images/title.png')?>" alt="" />
        <div class="price">
          <p class="gray">DE: <del>R$ 169,99</del></p>
          <p class="red"><sup>POR:</sup> <strong>R$ 79,99</strong></p>
          <p>ou em 6 x sem juros no cartão</p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pt-db53pcsd7999&ref=pt_db53pcsdpurchase1802<?php echo $refStr;?>&refs=pt_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db53pcpurchase1802-pt')">
            COMPRAR AGORA
          </a>
          <p class="people"><i class="all-icons"></i> Mais de <b class="people-num"><?php echo $buyNum; ?></b> pessoas já compraram</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--hightlight-->
<div class="imf-message wrapper">
  <h2>Entenda porque Driver Booster é  a escolha nº 1 dos técnicos de informática...</h2>
  <div class="clearfix box">
    <div class="left fl">
      <dl class="top">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" /></dt>
        <dd>
          <h3>Banco de Dados Maior</h3>
          <p>Conte com um banco de dados com mais de 1.000.000 de drivers e componentes para encontrar drivers mais obsoletos e raros.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt="" /></dt>
        <dd>
          <h3>Atualização mais Veloz</h3>
          <p>Obtenha a velocidade máxima de download  e baixe drivers no tempo ocioso do PC para economizar tempo.</p>
        </dd>
      </dl>
    </div>
    <div class="right fr">
      <dl class="top">
        <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" /></dt>
        <dd>
          <h3>Sistema mais Estável</h3>
          <p>Reduz o índice de travamentos e problemas em seu PC com os últimos drivers para cada dispositivo.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" /></dt>
        <dd>
          <h3>Backup Automático</h3>
          <p>Desfrute de backups automáticos na Nuvem ou no HD para prevenir qualquer problema inesperado.</p>
        </dd>
      </dl>
    </div>
  </div>
  <a href="javascript: void(0);" onclick="">
    Clique aqui e compare função por função a versão Free a versão Pro >
  </a>
</div>

<!--user-->
<div class="user wrapper">
  <h2>E também a escolha de usuários como você.</h2>
  <div class="panel clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="" /></dt>
      <dd>
        <h3>Myo Thuya</h3>
        <p>“Eu não acreditava antes de usar, mas depois de testá-lo adorei. Meu PC está mais estável, rápido e seguro do que há 8 meses atrás. Muito obrigado."</p>
        <i class="all-icons">★★★★★</i>
      </dd>
    </dl>
    <dl class="center">
      <dt><img src="<?php echo getStaticUrl('images/talal-hafez.png')?>" alt="" /></dt>
      <dd>
        <h3>Talal Hafez</h3>
        <p>Ao invés de procurar <span>individualmente por atualizações de</span> drivers, Driver Booster mantém <span>todos os drivers do meu PC</span> atualizados com apenas um-clique!</p>
        <i class="all-icons">★★★★★</i>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="" /></dt>
      <dd>
        <h3>Wayne Bowler</h3>
        <p>“Funcionou perfeitamente. Fácil de usar, eficiente e intuitivo. Este programa vai ficar na minha caixa de ferramentas para sempre... Bom trabalho!"</p>
        <i class="all-icons">★★★★★</i>
      </dd>
    </dl>
  </div>
</div>

<!-- centbuy -->
<div class=" centbuy bg">
  <div class="wrapper">
    <h2>Com apenas <b>R$ 0,22</b> por dia, você mantém seus drivers sempre atualizados.</h2>
    <h3>Leve grátis Smart Defrag Pro para cuidar da saúde do seu disco.</h3>
    <div class="clearfix">
      <img class="imgbox fl" src="<?php echo getStaticUrl('images/dbbox-small.png')?>" alt="" />
      <div class="price fl">
        <p class="red">6x de <strong>R$ 13,33</strong> <b>(ou R$ 79,99 a vista)</b></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pt-db53pcsd7999&ref=pt_db53pcsdpurchase1802<?php echo $refStr;?>&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db53pcpurchase1802-pt')">
          COMPRAR AGORA
        </a>
        <p class="people">Economize <b>R$ 90,00</b></p>
      </div>
    </div>
  </div>
</div>

<!--table-->
<div id="compare" class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="text" colspan="2">Veja o que a versão PRO pode fazer por você:</th>
        <th class="itemb">Driver Booster Grátis</th>
        <th class="itema">
          Driver Booster PRO
          <span>R$79.99 <del>R$169,99</del></span>
        </th>
      </tr>    
    </thead>
    <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon1.png')?>" alt="" /></td>
        <td class="virtue">Automaticamente Verifica e Identifica Drivers Desatualizados e em Falta</td>
        <td class="itemb"><i>√</i></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>  
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon2.png')?>" alt="" /></td>
        <td class="virtue">Download e Atualização de Drivers Desatualizados com Apenas Um-clique</td>
        <td class="itemb"><i>√</i></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon3.png')?>" alt="" /></td>
        <td class="virtue">Pacote de Drivers Reduzido com Novo Algoritmo de Compressão de Drivers</td>
        <td class="itemb"><i>√</i></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon4.png')?>" alt="" /></td>
        <td class="virtue">Atualização mais Segura Apenas com Drivers Certificados WHQL</td>
        <td class="itemb"><i>√</i></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon5.png')?>" alt="" /></td>
        <td class="virtue">Velocidade Ilimitada na Atualização de Drivers</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon6.png')?>" alt="" /></td>
        <td class="virtue">Maior Banco de Dados para Atualizar Drivers Antigos e Mais Raros</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon7.png')?>" alt="" /></td>
        <td class="virtue">Reduz o Travamento e Falhas do Sistema para um Melhor Desempenho</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon8.png')?>" alt="" /></td>
        <td class="virtue">Download Automático Melhorado para Acelerar Download</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon9.png')?>" alt="" /></td>
        <td class="virtue">Backup Automático de Todos os Drivers para Restauração Segura  </td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt="" /></td>
        <td class="virtue">Download e Instalação Automáticos de Drivers Durante o Tempo Ocioso do Sistema</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon11.png')?>" alt="" /></td>
        <td class="virtue">Prioridade na Atualização de Componentes de Jogos para Melhor Experiência de Jogo</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon12.png')?>" alt="" /></td>
        <td class="virtue">Atualiza Automaticamente para a Última Versão</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon13.png')?>" alt="" /></td>
        <td class="virtue">Suporte Técnico Gratuito 24/7</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th class="text" colspan="2"></th>
        <th class="itemb">
          Driver Booster Grátis
          <p>Sua versão atual</p>
        </th>
        <th class="itema">
          Driver Booster PRO
          <span>R$79.99 <del>R$169,99</del></span>
          <p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pt-db53pcsd7999&ref=pt_db53pcsdpurchase1802<?php echo $refStr;?>&refs=pt_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db53pcpurchase1802-pt')">
              Comprar Agora
            </a>
          </p>
        </th>
      </tr>    
    </tfoot>
  </table>
</div>

<!--service-->
<div class="wrapper service clearfix">
  <dl>
    <dt><h5>Garantia de Reembolso</h5></dt>
    <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
  </dl>
  <dl>
    <dt><h5>Formas de Pagamento</h5></dt>
    <dd><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></dd>
  </dl>
  <dl>
    <dt><h5>Pagamento 100% Seguro</h5></dt>
    <dd><img src="<?php echo getStaticUrl('images/seguro.png')?>" alt="" /></dd>
  </dl>
</div>

<!--footer-->
<div class="wrapper footer clearfix">
  <dl class="note">
    <dt>Observe:</dt>
    <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
    <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
</div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
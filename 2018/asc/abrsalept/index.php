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

$reduceNum=43646109;
$buyNum = ceil(microtime_float() * 1000 / 30000)-$reduceNum;
$buyNum = number_format($buyNum);
?>
<!DOCTYPE html>
<html lang="pt">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira Advanced SystemCare 11 Pro com 60% de desconto e leve Iobit Uninstaller Pro grátis. Oferta Limitada da IObit.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,900i,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
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

<body>
  <script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner bg">
    <div class="wrapper clearfix">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1>PROMOÇÃO RELÂMPAGO DE JUNHO!</h1>
      <div class="panel clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt="" />
          <ul class="laft">
            <li><i>+</i> <h3>Assinatura de 1 ano / 3 PCs</h3></li>
            <li><i>+</i> <h3>Super Brinde (IObit Uninstaller Pro)</h3></li>
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
            <p class="gray">DE: <del>229,99</del></p>
            <p class="red"><sup>POR:</sup> <strong>76,99</strong></p>
            <p>Ou em 6x sem juros no cartão</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pt-asc113pciu7699&ref=pt_asc11purchase1804&refs=pt_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc11purchase1804-pt')">
              COMPRAR AGORA
            </a>
            <p class="people"><i class="all-icons"></i> Mais de <b class="people-num"><?php echo $buyNum; ?></b> pessoas já compraram</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- hightlight start -->
  <div class="imf-message wrapper">
    <h2>Entenda porque <b>Advanced SystemCare Pro</b> é a escolha certa para o seu PC</h2>
    <div class="clearfix box">
      <div class="fl"><img src="<?php echo getStaticUrl('images/screen.png')?>" alt="" /></div>
      <div class="content fl">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" /></dt>
          <dd>
            <h3>Seu PC Rodando como Novo</h3>
            <ul>
              <li class="one">
                <i class="all-icons">●</i>
                <span>Assista vídeos, jogue e trabalhe com múltiplos programas ao mesmo tempo</span>
              </li>
              <li>
                <i class="all-icons">●</i>
                <span>Dê adeus aos travamentos constantes e computador lento.</span>
              </li>
            </ul>
          </dd>
        </dl>
        <dl class="two">
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt="" /></dt>
          <dd>
            <h3>Internet até 300% Mais Veloz* </h3>
            <ul>
              <li>
                <i class="all-icons">●</i>
                <span>Acesse o seu conteúdo favorito com mais velocidade</span>
              </li>
              <li>
                <i class="all-icons">●</i>
                <span>Gaste menos tempo carregando páginas e vídeos </span>
              </li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" /></dt>
          <dd>
            <h3>Navegue sem Medo</h3>
            <ul>
              <li>
                <i class="all-icons">●</i>
                <span>Limpeza automática de rastros de privacidade</span>
              </li>
              <li>
                <i class="all-icons">●</i>
                <span>Protege o roubo de seus dados por spyware, adware e invasores.</span>
              </li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" /></dt>
          <dd>
            <h3>Manutenção Automática</h3>
            <ul>
              <li>
                <i class="all-icons">●</i>
                <span>Cuida automaticamente do seu PC limpando os arquivos inúteis e otimizando as configurações atuais </span>
              </li>
              <li>
                <i class="all-icons">●</i>
                <span>Corrige as vulnerabilidades do Windows para um PC mais seguro.</span>
              </li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- hightlight end -->

  <!-- comparison start -->
  <div id="compare" class="comparison wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Compare detalhadamente a versão FREE e PRO</th>
          <th class="speac"></th>
          <th class="itemb">Advanced SystemCare 11 <span>FREE</span></th>
          <th class="speac"></th>
          <th class="itema">Advanced SystemCare 11 <span>PRO</span></th>
        </tr>    
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Limpeza, Reparo e Otimização Básica de Sistema</td>
          <td class="speac"></td>
          <td class="itemb gray"><i>√</i></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>  
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Proteção Básica contra Ameaças de Segurança</td>
          <td class="speac"></td>
          <td class="itemb gray"><i>√</i></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Sistema Mais Rápido com Limpeza Automática de RAM</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Ajuste Definitivo do Sistema para um Desempenho Superior</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Internet 300% Mais Rápida com Internet Booster</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Inicialização até Duas Vezes Mais Rápida com o Gerenciador de Inicializações</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Limpeza Profunda dos Registros do Windows</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Desempenho Máximo do Disco Rígido</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Otimização Agendada ou em Tempo Real com Manutenção Automática</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Detecção Completa contra Ameaças de Segurança</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Experiência Online Segura com Proteção de Navegação</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">Limpeza Automática de  Rastros com Anti-rastreamento do Navegador</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
          <td class="virtue">Atualização Automática para a Última Versão</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
          <td class="virtue">Suporte Técnico Gratuito 24/7</td>
          <td class="speac"></td>
          <td class="itemb"></td>
          <td class="speac"></td>
          <td class="itema"><i class="yellow">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- centbuy start -->
  <div class=" centbuy bg">
    <div class="wrapper">
      <h2>Com apenas  <b>0,21</b> por dia, você liberará o verdadeiro potencial do seu PC.</h2>
      <h3>Leve grátis IObit Uninstaller Pro para manter seu PC limpo e sem sobras de programas.</h3>
      <div class="clearfix">
        <img class="imgbox fl" src="<?php echo getStaticUrl('images/ascbox-small.png')?>" alt="" />
        <div class="price fl">
          <p class="red">6x de <strong>12,83</strong> <b>(ou  76,99 a vista)</b></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pt-asc113pciu7699&ref=pt_asc11purchase1804&refs=pt_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc11purchase1804-pt')">
            COMPRAR AGORA
          </a>
          <p class="people">Economize <b>153,00</b></p>
        </div>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- user start -->
  <div class="user wrapper">
    <h2>Avaliações de clientes</h2>
    <div class="panel clearfix">
      <dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/stephen-h-littleton.png')?>" alt=""/>
          <h4>Stephen H. Littleton</h4>
        </dt>
        <dd>
          <h3>Deu vida nova ao meu PC! <i class="all-icons">★★★★★</i></h3>
          <p>
            “Advanced SystemCare deu vida nova ao meu PC! Logo de cara, eu percebi uma diferença notável. A inicialização estava mais rápida, os problemas que estavam causando travamentos elentidão desapareceram!“
          </p>
        </dd>
      </dl>
      <dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/savio-da-rocha-lobo.png')?>" alt=""/>
          <h4>Sávio da Rocha Lobo</h4>
        </dt>
        <dd>
          <h3>O programa só tem ficado melhor a cada versão <i class="all-icons">★★★★★</i></h3>
          <p>
            "Tenho usado o Advanced SystemCare por um bom tempo e já são mais de 5 anos deixando o meu computador rodando como se ele tivesse acabado de sair da caixa e o programa só tem ficado melhor a cada versão.”
          </p>
        </dd>
      </dl>
      <dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/fritz-stein.png')?>" alt=""/>
          <h4>Fritz Stein</h4>
        </dt>
        <dd>
          <h3>Parecia o primeiro dia que estava usando meu PC <i class="all-icons">★★★★★</i></h3>
          <p>"O meu PC foi ficando lento com o tempo. Eu usei o Advanced SystemCare e fiquei surpreso,parecia o primeiro dia que estava usando meu PC."</p>
        </dd>
      </dl>
    </div>
  </div>  
  <!-- user end -->

  <!-- service start -->
  <div class="wrapper service clearfix">
    <dl>
      <dt><h5>Garantia de Reembolso</h5></dt>
      <dd>
        <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" />
        <p>Se você não estiver satisfeito nos primeiros 60 dias, devolveremos o seu dinheiro. </p>
      </dd>
    </dl>
    <dl>
      <dt><h5>Formas de Pagamento</h5></dt>
      <dd>
        <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" />
        <p>Aceitamos várias formas de <br>pagamento pelo seu pedido.</p>
      </dd>
    </dl>
    <dl>
      <dt><h5>Pagamento 100% Seguro</h5></dt>
      <dd>
        <img src="<?php echo getStaticUrl('images/seguro.png')?>" alt="" />
        <p>Pagamento online 100% seguro <br>garantido pela IObit.</p>
      </dd>
    </dl>
    <dl>
      <dt><h5>Atendimento ao Cliente</h5></dt>
      <dd>
        <img src="<?php echo getStaticUrl('images/service.png')?>" alt="" />
        <p>Suporte técnico 24 horas por dia.</p>
      </dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="wrapper footer clearfix">
    <dl class="note">
      <dt>Observe:</dt>
      <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
      <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
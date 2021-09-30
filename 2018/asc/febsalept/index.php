<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$reduceNum=70203510;
$buyNum = ceil(microtime_float() * 1000 / 20000) - $reduceNum;
$buyNum = number_format($buyNum);
include $pRootUrl . 'include/common.inc.php';
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  echo $buyNum;
  exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira Advanced SystemCare 11 Pro com 40% de desconto. Oferta Limitada da IObit.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
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
          $('.buy-num').html(packs.replace(/,/g,'.'));
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!-- header -->
<div class="header">
  <div class="wrapper clearfix">
    <a class="logo fl" href="http://www.iobit.com" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
    </a>
    <div class="fr">
      <span>SITE SEGURO:</span>
      <img src="<?php echo getStaticUrl('images/godaddy-seal.png')?>" alt="" />
    </div>
  </div>
</div>

<!--banner-->
<div class="banner">
  <div class="wrapper">
    <h1>Seu Computador Novo de Novo.</h1>
    <div class="panel clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt="" />
        <h5>Oferta de Duração Limitada:</h5>
        <ul id="countdown" class="countdown clearfix">
          <li><span>Horas</span> <strong>00</strong></li>
          <li><span>Min</span> <strong>00</strong></li>
          <li><span>Seg</span> <strong>00</strong> </li>
          <li class="last"><span>Ms</span> <strong>00</strong></li>
          <sup>*</sup>
        </ul>
      </div>
      <div class="offer fr">
        <h2>Advanced SystemCare 11 Pro</h2>
        <ul>
          <li>A Ferramenta Completa para </li>
          <li>Manutenção Automática de PCs Antigos </li>
        </ul>
        <h3>+ Assinatura de 1 ano / 3 PCs</h3>
        <div class="price">
          <p><del>De:R$ 129,99</del></p>
          <p>Por: <strong>R$ 76,99</strong></p>
          <a class="buybtn ujarak" 
             href="http://www.iobit.com/buy.php?product=pt-asc113pc7699&ref=pt_asc11purchase1802&refs=pt_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc113pcpurchase1802-pt')">
            COMPRAR AGORA     
          </a>
        </div>
        <p class="people"><i class="all-icons"></i> Mais de <b class="buy-num buy-num-bot"><?php echo $buyNum;?></b> pessoas já compraram</p>
      </div>
    </div>
    <div class="load bounce"></div>
  </div>
  
</div>

<!--hightlight-->
<div class="imf-message wrapper">
  <h2>Veja <b>3 motivos</b> porque Advanced SystemCare Pro é a escolha certa para o seu PC.</h2>
  <div class="box clearfix">
    <img class="screen fl" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
    <div class="fr">
      <div class="list">
        <img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""/>
        <div class="text">
          <h3>Seu PC Rodando como Novo</h3>
          <ul>
            <li>Assista vídeos, jogue e trabalhe com múltiplos programas ao mesmo tempo</li>
            <li>Dê adeus aos travamentos constantes e computador lento.</li>
          </ul>
        </div>
      </div>
      <div class="list second">
        <img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""/>
        <div class="text">
          <h3>Internet até 300% Mais Veloz* </h3>
          <ul>
            <li>Acesse o seu conteúdo favorito com mais velocidade</li>
            <li>Gaste menos tempo carregando páginas e vídeos</li>
          </ul>
        </div>
      </div>
      <div class="list last">
        <img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""/>
        <div class="text">
          <h3>Você Vai Navegar Sem Medo</h3>
          <ul>
            <li>Limpeza automática de rastros de privacidade</li>
            <li>Protege o roubo de seus dados por spywares, adwares e malwares</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!--user-->
<div class="user clearfix">
  <div class="wrapper">
    <h2>
      Advanced SystemCare Pro já acelerou mais de <strong class="buy-num buy-num-bot"><?php echo $buyNum;?></strong> de PCs. <p>Chegou a hora de otimizar o seu.</p>
    </h2>
    <ul class="user-list">
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/savio-da-rocha-lobo.png')?>" alt="Sávio da Rocha Lobo" />
        <h4>Sávio da Rocha Lobo</h4>
        <p>
          "Tenho usado o Advanced SystemCare por um bom tempo e já são mais de 5 anos deixando o meu computador rodando como se ele tivesse acabado de sair da caixa e o programa só tem ficado melhor a cada versão. “
        </p>
      </li>
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/stephen-h-littleton.png')?>" alt="Stephen H. Littleton" />
        <h4>Stephen H. Littleton</h4>
        <p>
          “Advanced SystemCare deu vida nova ao meu PC! Logo de cara, eu percebi uma diferença notável. A inicialização estava mais rápida, os problemas que estavam causando travamentos e lentidão desapareceram!“
        </p>
      </li>
    </ul>
  </div>
</div>

<!-- centbuy -->
<div class="centbuy">
  <div class="wrapper">
    <h2>Com apenas <b>R$ 0,21</b> por dia, você mantém o seu PC continuamente otimizado.</h2>
    <p>Assine por um ano e leve Advanced SystemCare 11 Pro para 2 Pcs extras.</p>
    <div class="panel clearfix">
      <img class="imgbox fl" src="<?php echo getStaticUrl('images/ascbox-small.png')?>" alt="" />
      <div class="price fl">
        <p>De:</p>
        <p><del>R$ 129,99</del></p>
        <p>Por:</p>
        <p><strong>R$ 76,99</strong> (ou 6x de R$ 12,83)</p>
        <a class="buybtn ujarak" 
           href="http://www.iobit.com/buy.php?product=pt-asc113pc7699&ref=pt_asc11purchase1802&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc113pcpurchase1802-pt')">
          COMPRAR AGORA     
        </a>
      </div>
    </div>
    <div class="load bounce"></div>
  </div>
</div>

<!--table-->
<div id="compare" class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="text" colspan="2">Nós confiamos no nosso produto. Nós apostamos na sua satisfação</th>
        <th class="speac"></th>
        <th class="itemb">Advanced SystemCare <span>FREE</span></th>
        <th class="speac"></th>
        <th class="itema">Advanced SystemCare <span>PRO</span></th>
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
    <tfoot>
      <tr>
        <th class="text" colspan="2"></th>
        <th class="speac"></th>
        <th class="itemb">GRÁTIS <p>Sua atual versão</p></th>
        <th class="speac"></th>
        <th class="itema">
          <p><strong>R$ 76,99</strong>  <del>R$ 129,99</del></p>
          <p>Licença de 1 Ano / 3PCs</p>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=pt-asc113pc7699&ref=pt_asc11purchase1802&refs=pt_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc113pcpurchase1802-pt')">
            COMPRAR AGORA     
          </a>
        </th>
      </tr>    
    </tfoot>
  </table>
</div>

<!-- bottom -->
<div class="wrapper">
  <!--service-->
  <ul class="service clearfix">
    <li>
      <h5>Garantia de Reembolso</h5>
      <img src="<?php echo $pResUrl; ?>images/moneyback.png" alt="" />
    </li>
    <li>
      <h5>Formas de Pagamento</h5>
      <img src="<?php echo $pResUrl; ?>images/payments.png" alt="" />
    </li>
    <li>
      <h5>Pagamento 100% Seguro</h5>
      <img src="<?php echo $pResUrl; ?>images/secured.png" alt="" />
    </li>
  </ul>

  <!--footer-->
  <div class="footer">
    <dl class="note">
      <dt>Observe:</dt>
      <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
      <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
  </div>
</div>


<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
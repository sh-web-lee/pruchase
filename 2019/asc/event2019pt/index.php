<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Corrija a Vulnerabilidade no Sistema de Acesso Remoto com Advanced SystemCare PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
 <div class="header">
   <div class="wrapper">
     <a href="https://www.iobit.com/pt/index.php" target="_blank" class="logo"> IObit</a>
     <h3>Atenção! Uma Vulnerabilidade Crítica foi Encontrada no Windows</h3>
     <p>Em <strong>14 de Maio de 2019</strong>, A Microsoft lançou um patch para corrigir uma vulnerabilidade no Serviço de Acesso Remoto que afeta Windows 7, Windows XP e outras versões mais antigas. Esta vulnerabilidade independe de interação do usuário. Um invasor que explorou esta vulnerabilidade pode instalar programas; visualizar, mudar ou deletar seus dados pessoais; ou até mesmo danificar seu sistema. Os sistemas afetados podem propagar o vírus para outros computadores vulneráveis numa maneira semelhante ao Wannacry que se espalhou pelo mundo em 2017.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
   <p>Portanto, recomendamos fortemente que você ative o Advanced SystemCare PRO para reduzir o risco que você seja atacado. O Advanced SystemCare disponibiliza proteção dupla aplicando atualizações importantes do Windows para evitar futuros ataques e reforçando seu sistema para defender seu PC contra potenciais ataque. Ative agora com <strong>45% OFF!</strong></p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="Advanced SystemCare PRO" class="asc-box">
     <dl class="price">
       <dt>
         <a href="https://www.iobit.com/buy.php?product=pt-asc12a6999-ac&ref=pt_asc3pc201905event1<?php echo $refStr;?>&refs=pt_purchase_asc"
            onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-pt');"
            class="buybtn">
           Ativar Agora -<strong>R$ 69,99</strong>
         </a>
       </dt>
       <dd>1 Ano de Assinatura / 3 PCs</dd>
       <dd><p>Economize <strong>R$ 60,00</strong> para usuários VIP da IObit</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Conheça Três Funções Poderosas do Advanced SystemCare PRO para Otimizar e Proteger seu PC</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Limpa entradas de registro e dados de navegação  automaticamente para melhorar o desempenho do PC e proteção.</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Otimiza configurações de navegador para acelerar sua conexão com a internet em até 300%*.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Mantém dados privados como contatos, dados de e-mails, Dropbox, Onedrive e outros, protegidos contra acesso secreto.</p>
     </li>
   </ul>
   <h3>Fique Longe de Ataques de Cybersegurança e Corrija Vulnerabilidades do Sistema Agora</h3>
   <dl class="price">
     <dt>
       <a href="https://www.iobit.com/buy.php?product=pt-asc12a6999-ac&ref=pt_asc3pc201905event1<?php echo $refStr;?>&refs=pt_purchase_asc"
          onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcevent1905-pt');"
          class="buybtn">
         Ativar Agora - <strong>R$ 69,99</strong>
       </a>
     </dt>
     <dd>1 Ano de Assinatura / 3 PCs</dd>
     <dd><p>Economize <strong>R$ 60,00</strong> para usuários VIP da IObit</p></dd>
   </dl>
 </div>
 <div class="footer">
   Observe:*Informações podem variar com base em diferentes sistemas ou computadores. <span>© 2005 - <?php echo date('Y')?> IObit Information Technology. Todos os Direitos Reservados.</span>
 </div>
</body>
</html>
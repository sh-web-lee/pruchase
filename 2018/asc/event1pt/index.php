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

$refStr='';
if(in_array($_GET['st'],array('no_patch_asc','patch_installed_asc','no_patch_db','patch_installed_db','no_patch_imf',
    'patch_installed_imf'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Corrija a Falha Kernel em Processadores Intel e Evite uma Queda de Desempenho com Advanced SystemCare Pro - IObit</title>
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
     <a href="https://www.iobit.com" target="_blank" class="logo"> IObit</a>
     <h3>Caros Usuários da IObit,</h3>
     <p>Uma falha crítica de segurança foi encontrada em processadores Intel que possibilita a hackers passarem a proteção de acesso kernel e terem acesso a informações privadas como senhas, chaves de criptografia, fotos, e-mail e outros dados que podem botar o seu PC em perigo. Esta falha foi reportada por veículos de mídia respeitados como Verge, PCWorld, The Register.</p>
     <p>A Microsoft lançou uma atualização de segurança na última terça para corrigir as vulnerabilidades dos processadores afetados que atingiram milhões de usuários, porém a Intel alertou que os patches liberados pelos fornecedores de sistema operacionais podem reduzir o desempenho do PC em até 30%.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
   <p>Advanced SystemCare Pro faz você não precisar se preocupar com estes problemas de segurança e aplica as atualizações mais importantes do Windows no seu PC. <br> Nós recomendados que usuários da IObit utilizem o <strong>Advanced SystemCare PRO</strong> – a escolha de mais de 250.000.000 de usuários no mundo para otimizar o Windows e garantir o desempenho máximo do seu computador. </p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="https://www.iobit.com/buy.php?product=pt-asc113pc7699&ref=pt_asc7699event2018a<?php echo $refStr;?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-event1-pt')" class="buybtn">Ativar Agora -  R$<strong>76,99</strong></a></dt>
       <dd>1 Ano de Assinatura / 3 PCs</dd>
       <dd><p>Economize <strong>R$122,91</strong> para usuários VIP da IObit</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Conheça Três Funções do Advanced SystemCare PRO que Farão seu PC Rodar como Novo</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Reduz lag do Sistema e deixa a inicialização 200%* mais rápida.</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Otimiza as configurações do navegador para uma internet até 300%* mais rápida.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Faz a manutenção automática do seu PC como agendado sem pertubar você.</p>
     </li>
   </ul>
   <h3>Fique Longe da Falha Kernel nos Processadores Intel e Evite uma Queda de Desempenho Agora</h3>
   <dl class="price">
     <dt><a href="https://www.iobit.com/buy.php?product=pt-asc113pc7699&ref=pt_asc7699event2018b<?php echo $refStr;?>&refs=pt_purchase_asc  " onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-event1-pt')" class="buybtn">Ativar Agora -  R$<strong>76,99</strong></a></dt>
     <dd>1 Ano de Assinatura / 3 PCs</dd>
     <dd><p>Economize <strong>R$122,91</strong> para usuários VIP da IObit</p></dd>
   </dl>
 </div>
 <div class="footer">
   Observe:*.Informações podem variar com base em diferentes sistemas ou computadores. <span>© 2005 - <?php echo date('Y')?> IObit Information Technology. Todos os Direitos Reservados.</span>
 </div>
</body>
</html>
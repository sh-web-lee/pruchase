<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
    $refStr = 'pt_imf-ac-register';
if($_GET['to']=='db_ac_imf'){
    $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acimf'))){
    $refStr.='-'.$_GET['st'];
}
if (empty($_GET['ref'])) $_GET['ref'] = 'ptaff_imf7_2020acregister';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Extra Protection for Your PC Security!"/>
<title>85% de DESCONTO em IObit Malware Fighter</title>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
    <div class="wrapper">
        <a href="https://www.iobit.com" class="homelink">IObit</a>
        <dl>
            <dt></dt>
            <dd><img src="<?php echo getStaticUrl('images/star.png')?>" alt=""/></dd>
            <dd>IObit Malware Fighter oferece muito em adição a sua capacidade de verificação.</dd>
        </dl>
    </div>
</div>
<div id="main">
    <div class="wrapper">
        <div class="shadow"></div>
        <div class="intro">
            <h1>IObit Malware Fighter PRO</h1>
            <h2>—— Proteção Extra para a Segurança de Seu PC!</h2>
            <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt=""/></div>
            <div class="discount">
                <h3><span>Oferta Exclusiva</span><br />SOMENTE para Usuários IObit</h3>
                <div class="disprice">85%<span>de DESCONTO</span></div>
                <div class="wprice">APENAS <em>R$ 49,99</em> <del>R$ 333,27</del><span>1 Ano de Assinatura/ 1PC</span></div>
                <div class="btnarea">
                    <a href="https://www.iobit.com/buy.php?product=ptaff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'ptaffimf72020acregister')" class="checkbtn">Compre Agora >></a>
                    <span>Garantia de 100% de Devolução</span>
                </div>
            </div>
        </div>
        <div class="promise">
            
            <div class="leftbox">
              <h2><span>Alguns dos Principais Benifícios</span></h2> 
              <ul>   
                <li><span><img src="<?php echo getStaticUrl('images/icon-av-engine.png')?>" alt="" /></span>Remoção Profunda de Malware com o Motor Antivírus Bitdefender</li>
                <li><span><img src="<?php echo getStaticUrl('images/icon-threate-remove.png')?>" alt="" /></span>Detecta e Remove mais de 200 Milhões de Ameaças Ocultas</li>
                <li><span><img src="<?php echo getStaticUrl('images/icon-browser-protect.png')?>" alt="" /></span>Limpeza Automática de Rastros de Privacidade com Anti-Rastreamento do Navegador</li>
                <li><span><img src="<?php echo getStaticUrl('images/icon-file-money-protect.png')?>" alt="" /></span>Impede que Ransomware tente criptografar seus arquivos.</li>
                <li><span><img src="<?php echo getStaticUrl('images/icon-camera-protect.png')?>" alt="" /></span>Cofre mantém pastas importantes livres de acesso não-autorizado e das últimas ameaças</li>
              </ul>
             </div>
            <div class="review"><span></span>"É provável que você já possua um antivírus ou programa semelhante, mas recomendamos fortemente que você também faça uma verificação regular do seu PC contra infecções com uma ferramenta anti-malware. Com atualizações automáticas, diversos módulos de proteção e a opção Segurança na Nuvem, IObit Malware Fighter oferece muito além da sua capacidade de verificação." <br /><div class="awpic"><img src="<?php echo getStaticUrl('images/download_com_logo.jpg')?>" alt=""/><br />
- download.com</div></div>    
        </div>
        <div class="clear"></div>
        <div class="checkout">
            <div class="moneyback">
                Você está totalmente protegido com a nossa garantia de 100% da devolução do dinheiro e VERÁ significativa melhora na performance do seu PC DENTRO de 60 DIAS, caso contrário iremos oferecer total reembolso do seu dinheiro. Sem perguntas.  <a href="https://www.iobit.com/buy.php?product=ptaff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'ptaffimf72020acregister')">Compre Agora </a>
            </div>
            <div class="btn">
                <a href="https://www.iobit.com/buy.php?product=ptaff-imf7-ac&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'ptaffimf72020acregister')" class="checkbtn">Compre Agora >></a>
                <span>Garantia de 100% de Devolução</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="awards"></div>
    </div>
</div>
<div id="footer">
    <div class="wrapper">
© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved 
    </div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>

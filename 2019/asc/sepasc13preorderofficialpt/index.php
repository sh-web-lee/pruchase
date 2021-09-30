<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptascpre_p' . $date;
  $c_name_t='ptascpre_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tenha 65% de Desconto no novo Advanced SystemCare 13 PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Mais Barato que Comprar um Computador Novo</h3>
      <dl>
        <dt class="price">
          <strong>R$ <b>66,99</b></strong> <a href="http://www.iobit.com/buy.php?product= pt-asc13preorder6699&ref=pt_asc13preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderofficial-pt');" class="buybtn"><span>Comprar Agora</span></a>
        </dt>
        <dd class="number">
          <span><span class="viewNum"><?php echo $viewNum;?></span> VENDO.</span> CORRE, APENAS
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          RESTANTES 
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- banner end -->
<div class="intro wrapper clearfix">
    <span class="arrow"></span>
    <h2>Por Que Advanced SystemCare 13 PRO.</h2>
    <div class="title">
      <span class="arrow"></span>
      <h2>Por Que Advanced SystemCare 13 PRO.</h2>
    </div>
  <div class="left-message">
    <div class="message">
      
      <div class="list">
        <h3 class="small">Computador mais Rápido</h3>
        <dl>
          <dt>PC 200%* mais Rápido</dt>
          <dd>Limpa e otimiza o sistema para acelerar a inicialização e<br> desempenho do PC em até 200%.</dd>
        </dl>
        <dl>
          <dt>Internet 300%* mais Rápida</dt>
          <dd>Otimiza as configurações do navegador para acelerar a<br> velocidade de navegação em até 300%.</dd>
        </dl>
      </div>
    </div>
    <div class="message">
      <div class="list">
        <h3>Navegação mais Rápida</h3>
        <dl>
          <dt>Escudo de Privacidade</dt>
          <dd>Impede que programas suspeitos acessem seus dados privados<br> como lista de contatos, e-mails, Dropbox, OneDrive, etç. </dd>
        </dl>
        <dl>
          <dt>Navegação Segura</dt>
          <dd>Limpa automaticamente dados de navegação e seus rastros para<br> evitar que tenham acesso ao que você está fazendo na internet.</dd>
        </dl>
      </div>
    </div>
    <div class="message last">
      <div class="list">
        <h3>Outros Benefícios</h3>
        <ul class="active">
          <li class="twice">Limpa automaticamente arquivos lixos para otimizar o sistema<br> num tempo agendado</li>
          <li class="twice">Limpeza profunda do registro para reduzir travamentos e erros<br> do sistema.</li>
          <li>Protege automaticamente contra infecções de malware em tempo.</li>
          <li>Para automaticamente serviços desnecessários para liberar RAM.</li>
          <li>Captura intrusos automaticamente com FaceID.</li>
          <li class="on">Detecta ameaças residindo no seu computador.</li>
          <li>Detecta links maliciosos nos e-mails em sua caixa de entrada.</li>
          <li>Remove automaticamente anúncios irritantes em webpages.</li>
          <li>Atualiza programas desatualizados com 1-clique.</li>
          <li>Atualiza automaticamente para a última versão.</li>
          <li>Suporte técnico 24 horas por dia ao seu dispor.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="change-img">
    <div class="list-img list01 show">
      <img src="<?php echo getStaticUrl('images/intro1.png')?>" alt="" class="nomal">
      <div class="scan">
        <div class="circleprogress-content">
          <div class="circle right">
              <div class="circleprogress rightcircle"></div>
          </div>
          <div class="circle left">
              <div class="circleprogress leftcircle"></div>
          </div>
       </div>
      </div>
      <div class="img-before">
        <span class="change-num">50</span>
        <span class="completed"></span>
        <div class="circle">
          <div class="top-circle"></div>
          <div class="bottom-circle"></div>
        </div>
      </div>

    </div>
    <div class="list-img list02">
      <img src="<?php echo getStaticUrl('images/intro2.png')?>" alt="" class="nomal2">
      <div class="privacy">
        <span class="icon"></span>
        <div class="check"></div>
        <span class="text">1 acesso secreto</span>
      </div>
      <div class="privacy-right"></div>
    </div>
    <div class="list-img list03">
      <img src="<?php echo getStaticUrl('images/intro3.png')?>" alt="" class="nomal3">
      <div class="icon-list">
        <span class="icons01"><i></i></span>
        <span class="icons02"><i></i></span>
        <span class="icons03"><i></i></span>
        <span class="icons04"><i></i></span>
        <span class="icons05"><i></i></span>
        <span class="icons06 active"><i></i></span>
      </div>
    </div>
  </div>
</div>

<div class="review-content">
  <div class="wrapper">
    <!-- review start -->
    <div class="review">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
            <dd>
              <h2>Opinião da Mídia</h2>
              <p>
                "Não há nada pior que um computador travado que impede você de trabalhar ou jogar. Advanced Systemcare irá reparar todos os problemas independente de quais sejam, não somente limpando os arquivos inúteis, malware, e entrada de registros inválidos, mas também irá dar um boost ao seu computador para otimizar sua experiência de PC."
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>
                Eu tentei vários programas que prometiam manter meu computador rodando sem problemas, até que eu instalei o Advanced SystemCare anos atrás na versão FREE. Logo eu parei de sofrer com lentidão e outros problemas, então eu adquiri a versão PRO e nunca mais olhei para trás. Advanced SystemCare PRO é o único que eu recomendo baseado nas minhas experiências. Eu também uso o IObit Uninstaller, Smart Defrag e Driver Booster para fazer as coisas ainda melhor.
              </p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <h4></h4>
              <p>
                Advanced SystemCare é um programa ótimo. Eu uso este programa por muitos anos e funciona perfeitamente. Eles estão sempre melhorando seus produtos e só melhorou com o tempo. Eu uso muito de seus produtos e todos eles me são úteis.
              </p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>
                Eu ainda não encontrei um programa melhor que o Advanced SystemCare para manutenção e segurança do PC. Desde que eu comprei o Advanced SystemCare PRO eu não tive mais problemas com vírus, phishing, telas pretas ou outros problemas. É o melhor dinheiro que já gastei em qualquer coisa relacionada com computadores. Obrigado Advanced SystemCare por fazer minha experiência no PC muito mais agradável.
              </p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->
  </div>
</div>
<div class="bottom">
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Recomendado também pela mídia especializada</h2>
    <p>
      Reconhecido e elogiado por tradicionais veículos de mídia ao longo dos últimos seis anos, você pode ter certeza que adquiriu o melhor atualizador de drivers
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
  <!-- footer start -->
  <div class="footer wrapper">
    <dl>
      <dd>
       Observe:
      </dd>
      <dd>*.Nós testamos o Advanced SystemCare 13 PRO nos nossos laboratórios internos. Os resultados podem variar de sistema para sistema.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados.</p>
  </div>
  <!-- footer end -->

</div>

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      <span><span class="viewNum"><?php echo $viewNum;?></span> VENDO.</span> CORRE, APENAS
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      RESTANTES 
    </div>
    <div class="price">
      <strong>R$ <b>66,99</b></strong> <a href="http://www.iobit.com/buy.php?product= pt-asc13preorder6699&ref=pt_asc13preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderofficial-pt');" class="buybtn"><span>Comprar Agora</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
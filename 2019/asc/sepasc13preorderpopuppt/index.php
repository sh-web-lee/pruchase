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
  $c_name = 'ptascpup_p' . $date;
  $c_name_t='ptascpup_t' . $date;
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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tenha 65% de Desconto no novo Advanced SystemCare 13 PRO - IObit</title>
<meta name="Copyright" content="IObit">
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
          <strong>R$ <b>66,99</b></strong> <a href="https://www.iobit.com/buy.php?product= pt-asc13preorder6699&ref=pt_asc13preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup-pt');" class="buybtn"><span>Comprar Agora</span></a>
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
  <h2> Por Que Advanced SystemCare 13 PRO.</h2>
  <h3><strong>Tenha seu Computador Rodando com o <span>M??ximo Desempenho </span></strong></h3>
  <div class="message01">
    <img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" class="img-box ">
    <img src="<?php echo getStaticUrl('images/guide.png')?>" alt="" class="guide">
    <img src="<?php echo getStaticUrl('images/good.png')?>" alt="" class="good">
    <img src="<?php echo getStaticUrl('images/intro-list01.png')?>" alt="" class="icons01">
    <img src="<?php echo getStaticUrl('images/intro-list02.png')?>" alt="" class="icons02">
    <div class="round">
      <div class="top-round"></div>
      <div class="circle right">
        <div class="circleprogress rightcircle"></div>
      </div>
    </div>
    <div class="left-round"></div>
    <dl class="list01">
      <dt>Maior Espa??o em Disco <span><em>PRO apenas</em></span></dt>
      <dd>Limpeza profunda de registro e desfragmenta????o <br> de disco maximizada para garantir um PC com <br> melhor desempenho performance.</dd>
    </dl>
    <dl class="list02">
      <dt>PC 200%* mais R??pido <span><em>PRO apenas</em></span></dt>
      <dd>Limpa e otimiza o sistema para acelerar a <br> inicializa????o e desempenho do PC em at?? 200%.</dd>
    </dl>
    <dl class="list03">
      <dt>Sem Processos Desnecess??rios <span> <em>PRO apenas</em></span></dt>
      <dd>Para automaticamente processos in??teis <br> rodando no fundo para evitar um PC lento.</dd>
    </dl>
    <dl class="list04">
      <dt>Internet 300%* mais R??pida <span><em>PRO apenas</em></span></dt>
      <dd>Otimiza as configura????es do navegador para <br> acelerar a velocidade de navega????o em at?? 300%.</dd>
    </dl>
  </div>

  <h3 class="title2"><strong>Tenha seu Computador com Privacidade e  <span>Seguran??a M??xima</span></strong></h3>
  <div class="message02">
    <div class="img-box">
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="">
      <img src="<?php echo getStaticUrl('images/lock.png')?>" alt="" class="lock">
    </div>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Sem Acesso N??o-Autorizado <span><em>PRO apenas</em></span></strong>
        Detecta imediatamente programas que tentem acessar secretamente seus dados pessoais.  </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Protege contra Infec????es de Malware <span><em>PRO apenas</em></span></strong>
        Seu PC permanecer?? protegido contra Malware e Spyware com a prote????o em tempo-real.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Apaga Rastros Online <span><em>PRO apenas</em></span></strong>
        Seus rastros online ser??o apagados automaticamente para evitar rastreamento. </dd>
    </dl>
  </div>

  <h3 class="title3"><strong>Advanced SystemCare 13 PRO Faz Mais <span>Faz Mais</span> </strong></h3>
  <div class="message03">
    <div class="box clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
        <dd>
          Limpa <strong>4GB* Mais</strong> de arquivos lixos acumulados no seu computador
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
        <dd>
          Limpa Rastros de  <strong>200+ Programas</strong> para todas as contas de usu??rio
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
        <dd>
          Otimiza  <strong>30% Mais</strong> itens de inicializa????o para uma inicializa????o mais r??pida
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
        <dd>
          Suporta  <strong>60% Mais</strong> atualiza????es de programas para melhor desempenho
        </dd>
      </dl>

    </div>
    <div class="line"><span class="trigon"></span></div>
    <ul>
      <li>
        <span><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></span>
        Protege seus <strong> Dados Pessoais </strong> de acesso n??o-autorizado para evitar vazamento de privacidade;
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></span>
         Protege seu <strong>E-mail</strong>  de amea??as maliciosas;
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></span>
        Otimiza Apps da <strong> Plataforma Universal do Windows </strong> para usu??rios do Windows 10;
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></span>
         Novo Gerenciador do Menu de Contexto ajuda a gerenciar o  <strong>menu de contexto com facilidade e rapidez; </strong>
      </li>
    </ul>
  </div>
</div>




<div class="bottom">
  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Opini??o do Usu??rio</span></h2></dt>
          <dd>
            <p>
                "N??o h?? nada pior que um computador travado que impede voc?? de trabalhar ou jogar. Advanced Systemcare ir?? reparar todos os problemas independente de quais sejam, n??o somente limpando os arquivos in??teis, malware, e entrada de registros inv??lidos, mas tamb??m ir?? dar um boost ao seu computador para otimizar sua experi??ncia de PC."
              </p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Opini??o do Usu??rio</span></h2></dt>
          <dd> 
            <p>
              Eu tentei v??rios programas que prometiam manter meu computador rodando sem problemas, at?? que eu instalei o Advanced SystemCare anos atr??s na vers??o FREE. Logo eu parei de sofrer com lentid??o e outros problemas, ent??o eu adquiri a vers??o PRO e nunca mais olhei para tr??s. Advanced SystemCare PRO ?? o ??nico que eu recomendo baseado nas minhas experi??ncias. Eu tamb??m uso o IObit Uninstaller, Smart Defrag e Driver Booster para fazer as coisas ainda melhor.
            </p>
            <cite>Richard Beavers</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Opini??o do Usu??rio</span></h2></dt>
          <dd>
           <p>
              Advanced SystemCare ?? um programa ??timo. Eu uso este programa por muitos anos e funciona perfeitamente. Eles est??o sempre melhorando seus produtos e s?? melhorou com o tempo. Eu uso muito de seus produtos e todos eles me s??o ??teis.
            </p>
            <cite>Patsy Clark</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Opini??o do Usu??rio</span></h2></dt>
          <dd>
            <p>
              Eu ainda n??o encontrei um programa melhor que o Advanced SystemCare para manuten????o e seguran??a do PC. Desde que eu comprei o Advanced SystemCare PRO eu n??o tive mais problemas com v??rus, phishing, telas pretas ou outros problemas. ?? o melhor dinheiro que j?? gastei em qualquer coisa relacionada com computadores. Obrigado Advanced SystemCare por fazer minha experi??ncia no PC muito mais agrad??vel.
            </p>
            <cite>Danny R. Sheets</cite>
          </dd>
        </dl>
      </div>
      <ul>
        <li class="first" data-num="0" data-fixed="0"><img src="<?php echo $pResUrl;?>images/cnet.png" alt="Cnet"></li>
        <li class="active" data-num="3" data-fixed="3"><img src="<?php echo $pResUrl;?>images/danny-r-sheets.png" alt="Danny R. Sheets."></li>
        <li class="two" data-num="2" data-fixed="2"><img src="<?php echo $pResUrl;?>images/patsy-clark.png" alt="Patsy Clark"></li>
        <li class="three" data-num="1" data-fixed="1"><img src="<?php echo $pResUrl;?>images/richard-beavers.png" alt="Richard Beavers"></li>
      </ul>
    </div>
  </div>
  <!-- review end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Recomendado tamb??m pela m??dia especializada</h2>
    <p>
      Reconhecido e elogiado por tradicionais ve??culos de m??dia ao longo dos ??ltimos seis anos, voc?? pode ter certeza que adquiriu o melhor atualizador de drivers
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
  <!-- footer start -->
  <div class="footer wrapper">
    <dl>
      <dd>
       Note:
      </dd>
      <dd>*.N??s testamos o Advanced SystemCare 13 PRO nos nossos labor??tios internos. Resultados podem variar de sistema para sistema.</dd>
    </dl>
    <p>Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
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
      <strong>R$ <b>66,99</b></strong> <a href="https://www.iobit.com/buy.php?product= pt-asc13preorder6699&ref=pt_asc13preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup-pt');" class="buybtn"><span>Comprar Agora</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
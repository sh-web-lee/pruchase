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
  $c_name = 'novxmasasciupt2019_p' . $date;
  $c_name_t='novxmasasciupt2019_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

$isNewUser=false;
if(preg_match('/^13\./',$_GET['ver'])){
  $isNewUser=true;
}

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira Advanced SystemCare 13 Pro com IObit Uninstaller 9 Pro com 70% de desconto. Oferta Especial de Natal da IObit.</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
      <h1 class="title">S??per Oferta de Navidad! ????ltima oportunidad para ahorrar a lo grande!</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">70% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>70% de Desconto para os 999 PRIMEIROS clientes</h2></div>
          <div class="numbox">
            <div id="flip" class="flipNum">
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>
              </div>
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>          
              </div>
              <div class="numwrap last">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div> 
              </div>
            </div>
            <span>Pacotes Restantes</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price">R$ <big>76,99</big></strong> <del>R$ 299,98</del></p>
              <p>1 ano de assinatura / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=pt-asc13iu93pc7699&ref=pt_asciu3pcpurchase1911rc<?php echo $refStr;?>&refs=pt_purchase_asciu"
                 onclick="ga('send', 'event', 'asciubuy', 'buy', 'asciupurchase1911rc-pt');">
                Comprar Agora
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
      Tente SEM RISCOS ??? Ative agora para manter seu PC num estado excelente e obtenha Garantia de Reembolso de 60 dias
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>O que est?? incluido</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/iu-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 13 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>Otimizador tudo-em-um para acelerar seu PC e proteger sua privacidade.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
              <span>IObit Uninstaller 9 PRO</span>
            </h3>
          </dt>
          <dd>
            Desinstalador de f??cil uso para remover completamente programas and plug-ins indesejados.
          </dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Por que Comprar?</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
        <dl>
          <dt><b>PC 200%* mais R??pido</b></dt>
          <dd>
            Limpa e otimiza automaticamente o sistema para fazer o computador mais r??pido. <span>PRO apenas</span>
          </dd>
        </dl>
        <dl>
          <dt><b>Internet 300%* mais R??pida</b></dt>
          <dd>
            Velocidade mais r??pida de download, navega????o, jogos online e Youtube. <span>PRO apenas</span>
          </dd>
        </dl>
        <dl>
          <dt><b>Prote????o de Privacidade</b></dt>
          <dd>Bloqueia acesso n??o-autorizado aos seus contatos, e-mail e outros dados pessoais. <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Navega????o Segura</b></dt>
          <dd>Previne que rastreiem o que voc?? l??, v?? e compra na internet.</dd>
        </dl>
        <dl>
          <dt><b>Atualizador de Programas</b></dt>
          <dd>Mant??m programas importantes atualizados com 1-clique. <span>PRO apenas</span></dd>
        </dl>
      </div>
    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>Remove programas teimosos e em bundle</b></dt>
          <dd>que n??o podem ser desinstalados por meios convencionais.  <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Verifica automaticamente por sobras de programas??</b></dt>
          <dd>deixadas por processo padr??o de desinsta????o.  <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Identificar plugins maliciosos ou de an??ncio??</b></dt>
          <dd>que injetam an??ncios ou links maliciosos nas p??ginas que voc?? visita. <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Monitoramento em tempo-real de mudan??as </b></dt>
          <dd>feitas por programas durante sua instala????o. <span>PRO apenas</span></dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/iu-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>O que dizem de n??s</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h3><span>Opini??o da M??dia</span></h3></dt>
            <dd>
              <p class="on">
                Em nossos testes, notamos que o Advanced SystemCare tem uma efici??ncia excepcional.
                Ele consegue encontrar problemas para resolver no seu computador que realmente s??o dif??ceis de imaginar.
              </p>
             <cite>Baixaki</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opini??o do Usu??rio</span></h3></dt>
            <dd> 
              <p>
                Tenho usado o Advanced SystemCare por um bom tempo e j?? s??o mais de 5 anos deixando o meu computador rodando como se ele tivesse acabado de sair da caixa e o programa s?? tem ficado melhor a cada vers??o.
              </p>
              <cite>S??vio Da Rocha Lobo</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opini??o do Usu??rio</span></h3></dt>
            <dd>
              <p>
                Advanced SystemCare deu vida nova ao meu PC! Logo de cara, eu percebi uma diferen??a not??vel. A inicializa????o estava mais r??pida, os problemas que estavam causando travamentos e lentid??o desapareceram!
              </p>
              <cite>Stephen H.Littleton</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opini??o do Usu??rio</span></h3></dt>
            <dd>
              <p>
                "IObit Uninstaller ?? provavelmente o melhor aplicativo para removar programas desnecess??rios do seu computador. Diferentemente do desinstalador padr??o do Windows, IObit Uninstaller remove as sobras do programa desinstalado, que poderiam deixar seu PC lento. Eu estive usando esse programa por alguns anos e sempre me ajuda a manter meu computador limpo e r??pido. Eu recomendei este programa para alguns dos meus amigos no passado e recomendaria de novo."
              </p>
              <cite>Sergey Erlich</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opini??o do Usu??rio</span></h3></dt>
            <dd> 
              <p>
                "IObit Uninstaller fica melhor a cada atualiza????o. Eu o tenho usado por 3 anos, o programa carrega r??pido e possui uma interface simples. Algumas das fun????es que uso regularmente s??o Desinstala????o em Lote, Verifica????o Profunda, Destruidor de Arquivos e a fun????o adicionanda recentemente que me permite ter acesso r??pido a programas que eu instalei recentemente ou que n??o funcionam devidamente. ?? f??cil controlar seus itens de inicializa????o o que faz seu PC inicializar em menos tempo."
              </p>
              <cite>Lovro ??u??i??</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opini??o do Usu??rio</span></h3></dt>
            <dd>
              <p>
                "IObit Uninstaller ?? o melhor programa para remover programas do computador, ele ?? r??pido, efetivo e muito superior ao desinstalador b??sico de Windows. O programa limpa seriamente todos os restos do programa para que n??o haja atrasos no computador. Eu estive usando por alguns meses e eu n??o sei como viver sem ele, portanto eu recomendo para meus amigos e fam??lia. IObit Uninstaller ?? fant??stico!"
              </p>
              <cite>Paulo Martins</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opini??o do Usu??rio</span></h3></dt>
            <dd>
              <p>
                "Eu acho IObit Uninstaller excelente para usar e ?? tudo que eu desejaria. Eu amo o fato que ele desinstala sobras de programas. Tamb??m possui um atualizador de programas que lembra voc?? de quando os programas precisa atualiza????o, e desinstala m??ltiplos programas ao mesmo tempo o que o faz o melhor desinstalador do mercado. ?? o programa correto para quem quer manter seu computador em ordem."
              </p>
              <cite>Lynette van Niekerk</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opini??o da M??dia</span></h3></dt>
            <dd>
              <p>
                "Essa ferramenta informativa e de f??cil uso limpa, configura e otimiza seu PC e usu??rios podem baixar virtualmente num piscar de olhos. Essa ferramenta pode ser categorizada como a melhor ferramenta de desinstala????o e permite que usu??rios desinstalem em lote. Oferece aos usu??rios a op????o de fazer uma "Verifica????o Profunda" para ir mais fundo e procurar por restos deixados pelo processo de desinstala????o. O desempenho por si s?? j?? faz essa ferramenta valiosa de se ter."
              </p>
              <cite>MakeUseOf</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro ??u??i??"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/baixaki.png')?>" alt="Baixaki"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/savio-da-rocha.png')?>" alt="S??VIO DA ROCHA LOBO"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/setephen.png')?>" alt="STEPHEN H.LITTLETON"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Recomendado tamb??m por</h2>
      <p>
        Reconhecido e elogiado por tradicionais ve??culos de m??dia ao longo dos ??ltimos seis anos, voc?? pode ter certeza que adquiriu o melhor atualizador de drivers
      </p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt>Garantia de Reembolso</dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
    </dl>
    <dl>
      <dt>Formas de Pagamento</dt>
      <dd><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""></dd>
    </dl>
    <dl>
      <dt>Site Seguro</dt>
      <dd><img src="<?php echo getStaticUrl('images/google.png')?>" alt=""></dd>
    </dl>
  </div>
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dt>Nota:</dt>
        <dd>
          1*.Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempos em tempos conforme nossos crit??rios.
        </dd>
        <dd>
          2*.Informa????es podem variar com base em diferentes sistemas ou computadores.
        </dd>
      </dl>
      <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados.</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">76% OFF</div>
      </div>
      <div class="numbox fl">
        <div id="fliptwo" class="flipNum">
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>
          </div>
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>          
          </div>
          <div class="numwrap last">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div> 
          </div>
        </div>
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> visitantes agora, <b class="packsNum">50</b> pacotes restantes.</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price">R$ <big>76,99</big></strong> <del>R$ 299,98</del></p>
          <p>1 ano de assinatura / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=pt-asc13iu93pc7699&ref=pt_asciu3pcpurchase1911rc<?php echo $refStr;?>&refs=pt_purchase_asciu"
             onclick="ga('send', 'event', 'asciubuy', 'buy', 'asciupurchase1911rc-pt');">
            Comprar Agora
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
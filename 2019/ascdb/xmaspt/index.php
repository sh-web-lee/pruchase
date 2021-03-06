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
  $c_name = 'ptxascdb_p' . $date;
  $c_name_t='ptxascdb_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}
$refStr='';
if(in_array($_GET['pop'],array('x_ascdb','xr_ascdb','xr_dbasc','x_dbasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Adquira Advanced SystemCare 13 Pro com Driver Booster 7 Pro com 75% de desconto. Oferta Especial de Natal da IObit.  </title>
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
      <h1 class="title">Natal Oferta Especial  Dispon??vel Apenas 1 vez por ano! </h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">75% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>75% de Desconto para os 999 PRIMEIROS clientes</h2></div>
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
            <!-- <p class="change">Hurry, only <b class="packsNum">50</b> Left at this price!</p> -->
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price">R$<big>119,99</big></strong> <del>R$ 499,80</del></p>
              <p>1 ano de assinatura / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=pt-asc13db3pc11999&ref=pt_ascdb3pcpurchase1911rc<?php echo $refStr;?>&refs=pt_purchase_ascdb"
                 onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase1911rc-pt') ">
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
        <img class="screen db" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
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
              <img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
              <span>Driver Booster 7 PRO</span>
            </h3>
          </dt>
          <dd>Atualizador de drivers f??cil de usar para atualizar drivers antigos e componentes de jogos.</dd>
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
          <dd>Limpa e otimiza automaticamente o sistema para fazer o computador mais r??pido. <span>PRO apenas</span> </dd>
        </dl>
        <dl>
          <dt><b>Internet 300%* mais R??pida </b></dt>
          <dd>Velocidade mais r??pida de download, navega????o, jogos online e Youtube. <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Prote????o de Privacidade</b></dt>
          <dd>Bloqueia acesso n??o-autorizado aos seus contatos, e-mail e outros dados pessoais.  <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Navega????o Segura</b></dt>
          <dd>Previne que rastreiem o que voc?? l??, v?? e compra na internet. <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Atualizador de Programas </b></dt>
          <dd>Mant??m programas importantes atualizados com 1-clique. <span>PRO apenas</span></dd>
        </dl>
      </div>
    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>Banco de dados 20% maior</b> </dt>
          <dd>Verifica e atualiza automaticamente mais de 3.500.000 drivers. <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Velocidade Ilimitada</b> </dt>
          <dd>Destrava a velocidade m??xima de download de drivers para downloads 100%* mais r??pidos. <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Melhor Experi??ncia de Jogo</b> </dt>
          <dd>Disponibiliza componentes de jogos recomendados para acelerar jogos. <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Corrige Erros de Dispositivos</b> </dt>
          <dd>Reduz som, internet e outros problemas de drivers. <span>PRO apenas</span></dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/db-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->


  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>O que dizem sobre n??s</h2>
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
                "N??o h?? nada pior que um computador travado que impede voc?? de trabalhar ou jogar. Advanced Systemcare ir?? reparar todos os problemas independente de quais sejam, n??o somente limpando os arquivos in??teis, malware, e entrada de registros inv??lidos, mas tamb??m ir?? dar um boost ao seu computador para otimizar sua experi??ncia de PC."
              </p>
             <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opini??o do Usu??rio</span></h3></dt>
            <dd> 
              <p>
                Eu tentei v??rios programas que prometiam manter meu computador rodando sem problemas, at?? que eu instalei o Advanced SystemCare anos atr??s na vers??o FREE. Logo eu parei de sofrer com lentid??o e outros problemas, ent??o eu adquiri a vers??o PRO e nunca mais olhei para tr??s. Advanced SystemCare PRO ?? o ??nico que eu recomendo baseado nas minhas experi??ncias. Eu tamb??m uso o IObit Uninstaller, Smart Defrag e Driver Booster para fazer as coisas ainda melhor.
              </p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opini??o do Usu??rio</span></h3></dt>
            <dd>
              <p>
                 Advanced SystemCare ?? um programa ??timo. Eu uso este programa por muitos anos e funciona perfeitamente. Eles est??o sempre melhorando seus produtos e s?? melhorou com o tempo. Eu uso muito de seus produtos e todos eles me s??o ??teis.
              </p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opini??o do Usu??rio</span></h3></dt>
            <dd>
              <p>
                 Eu ainda n??o encontrei um programa melhor que o Advanced SystemCare para manuten????o e seguran??a do PC. Desde que eu comprei o Advanced SystemCare PRO eu n??o tive mais problemas com v??rus, phishing, telas pretas ou outros problemas. ?? o melhor dinheiro que j?? gastei em qualquer coisa relacionada com computadores. Obrigado Advanced SystemCare por fazer minha experi??ncia no PC muito mais agrad??vel.
              </p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>

          <dl class="reviews">
            <dt><h3><span>Opini??o do Usu??rio</span></h3></dt>
            <dd>
              <p>
                "IObit Uninstaller PRO ?? apenas um dos cinco produtos de "manuten????o" da IObit que eu investi para meu PC. O programa ?? ??timo para achar as sobras de bits e bytes escondidos no seu PC, tomando espa??o do disco e afetando o registro. Se eu usasse o desinstalador padr??o do programa que eu queria desinstalar, funcionava, mas ent??o o Uninstaller Pro aparecia e mostrava 35 arquivos que precisavam ser limpos. Tudo que eu preciso ?? clicar em "OK". Recomendo e inclusive adquiri uma licen??a para 3 PCs. O servi??o de atendimento ao cliente ?? atencioso e eficiente."
              </p>
              <cite>Joseph Yu</cite>
            </dd>
          </dl>
          <dl class="reviews jeff">
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
                "IObit Uninstaller ?? um dos melhores programas para se ter no seu computador, pois ?? f??cil de operar e limpa profundamente com rapidez. A limpeza de plug-ins tamb??m ?? extremamente ??til. Obrigado por cuidar do computador meu e da minha fam??lia."
              </p>
              <cite>??da G??rtler</cite>
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
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="??da G??rtler"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Recomendado tamb??m pela m??dia especializada</h2>
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
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dt>Observe:</dt>
        <dd>1*.Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempos em tempos conforme nossos crit??rios.</dd>
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
        <div class="discount">75% OFF</div>
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
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b>  visitantes agora, <b class="packsNum">50</b> pacotes restantes.</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price">R$<big> 119.99</big></strong> <del>R$ 499,80</del></p>
          <p>1 ano de assinatura / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=pt-asc13db3pc11999&ref=pt_ascdb3pcpurchase1911rc<?php echo $refStr;?>&refs=pt_purchase_ascdb"
             onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase1911rc-pt') ">
            Comprar Agora
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
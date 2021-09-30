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
      <h1 class="title">Natal Oferta Especial  Disponível Apenas 1 vez por ano! </h1>
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
      Tente SEM RISCOS – Ative agora para manter seu PC num estado excelente e obtenha Garantia de Reembolso de 60 dias
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>O que está incluido</h2>
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
          <dd>Atualizador de drivers fácil de usar para atualizar drivers antigos e componentes de jogos.</dd>
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
          <dt><b>PC 200%* mais Rápido</b></dt>
          <dd>Limpa e otimiza automaticamente o sistema para fazer o computador mais rápido. <span>PRO apenas</span> </dd>
        </dl>
        <dl>
          <dt><b>Internet 300%* mais Rápida </b></dt>
          <dd>Velocidade mais rápida de download, navegação, jogos online e Youtube. <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Proteção de Privacidade</b></dt>
          <dd>Bloqueia acesso não-autorizado aos seus contatos, e-mail e outros dados pessoais.  <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Navegação Segura</b></dt>
          <dd>Previne que rastreiem o que você lê, vê e compra na internet. <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Atualizador de Programas </b></dt>
          <dd>Mantém programas importantes atualizados com 1-clique. <span>PRO apenas</span></dd>
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
          <dd>Destrava a velocidade máxima de download de drivers para downloads 100%* mais rápidos. <span>PRO apenas</span></dd>
        </dl>
        <dl>
          <dt><b>Melhor Experiência de Jogo</b> </dt>
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
      <h2>O que dizem sobre nós</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h3><span>Opinião da Mídia</span></h3></dt>
            <dd>
              <p class="on">
                "Não há nada pior que um computador travado que impede você de trabalhar ou jogar. Advanced Systemcare irá reparar todos os problemas independente de quais sejam, não somente limpando os arquivos inúteis, malware, e entrada de registros inválidos, mas também irá dar um boost ao seu computador para otimizar sua experiência de PC."
              </p>
             <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd> 
              <p>
                Eu tentei vários programas que prometiam manter meu computador rodando sem problemas, até que eu instalei o Advanced SystemCare anos atrás na versão FREE. Logo eu parei de sofrer com lentidão e outros problemas, então eu adquiri a versão PRO e nunca mais olhei para trás. Advanced SystemCare PRO é o único que eu recomendo baseado nas minhas experiências. Eu também uso o IObit Uninstaller, Smart Defrag e Driver Booster para fazer as coisas ainda melhor.
              </p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd>
              <p>
                 Advanced SystemCare é um programa ótimo. Eu uso este programa por muitos anos e funciona perfeitamente. Eles estão sempre melhorando seus produtos e só melhorou com o tempo. Eu uso muito de seus produtos e todos eles me são úteis.
              </p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd>
              <p>
                 Eu ainda não encontrei um programa melhor que o Advanced SystemCare para manutenção e segurança do PC. Desde que eu comprei o Advanced SystemCare PRO eu não tive mais problemas com vírus, phishing, telas pretas ou outros problemas. É o melhor dinheiro que já gastei em qualquer coisa relacionada com computadores. Obrigado Advanced SystemCare por fazer minha experiência no PC muito mais agradável.
              </p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>

          <dl class="reviews">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd>
              <p>
                "IObit Uninstaller PRO é apenas um dos cinco produtos de "manutenção" da IObit que eu investi para meu PC. O programa é ótimo para achar as sobras de bits e bytes escondidos no seu PC, tomando espaço do disco e afetando o registro. Se eu usasse o desinstalador padrão do programa que eu queria desinstalar, funcionava, mas então o Uninstaller Pro aparecia e mostrava 35 arquivos que precisavam ser limpos. Tudo que eu preciso é clicar em "OK". Recomendo e inclusive adquiri uma licença para 3 PCs. O serviço de atendimento ao cliente é atencioso e eficiente."
              </p>
              <cite>Joseph Yu</cite>
            </dd>
          </dl>
          <dl class="reviews jeff">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd> 
              <p>
                "IObit Uninstaller é provavelmente o melhor aplicativo para removar programas desnecessários do seu computador. Diferentemente do desinstalador padrão do Windows, IObit Uninstaller remove as sobras do programa desinstalado, que poderiam deixar seu PC lento. Eu estive usando esse programa por alguns anos e sempre me ajuda a manter meu computador limpo e rápido. Eu recomendei este programa para alguns dos meus amigos no passado e recomendaria de novo."
              </p>
              <cite>Sergey Erlich</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd>
              <p>
                "IObit Uninstaller é um dos melhores programas para se ter no seu computador, pois é fácil de operar e limpa profundamente com rapidez. A limpeza de plug-ins também é extremamente útil. Obrigado por cuidar do computador meu e da minha família."
              </p>
              <cite>Áda Görtler</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opinião da Mídia</span></h3></dt>
            <dd>
              <p>
                "Essa ferramenta informativa e de fácil uso limpa, configura e otimiza seu PC e usuários podem baixar virtualmente num piscar de olhos. Essa ferramenta pode ser categorizada como a melhor ferramenta de desinstalação e permite que usuários desinstalem em lote. Oferece aos usuários a opção de fazer uma "Verificação Profunda" para ir mais fundo e procurar por restos deixados pelo processo de desinstalação. O desempenho por si só já faz essa ferramenta valiosa de se ter."
              </p>
              <cite>MakeUseOf</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></li>
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
      <h2>Recomendado também pela mídia especializada</h2>
      <p>
        Reconhecido e elogiado por tradicionais veículos de mídia ao longo dos últimos seis anos, você pode ter certeza que adquiriu o melhor atualizador de drivers
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
        <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
        <dd>
          2*.Informações podem variar com base em diferentes sistemas ou computadores.
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados.</p>
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
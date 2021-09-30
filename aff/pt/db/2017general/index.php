<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
$buyLink="https://www.iobit.com/buy.php?product=ptaff-db83pc5999&ref=".(empty($_GET['ref'])?'ptaff_db8_2017general':$_GET['ref'])."&aff=".$affStr;
$refStr=$_GET['ref'];
$buytext = "65%";
if (preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

    $buyLink = "https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1993";

    if ($arr[1][0] != null) {

        $buyLink = "http://macbooster.7eer.net/c/" . $arr[1][0] . "/535215/4385";
    }
}else{
    if(preg_match('/fspi([0-9]*)/',$refStr,$matches)||preg_match('/ir([0-9]*)/',$refStr,$matches)){
        $buyLink='https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1993';
        $pregNum=$matches[1];
        if(!empty($pregNum)){
            $buyLink='http://macbooster.7eer.net/c/'.$pregNum.'/558401/4385';
        }
    }
}


function statistic($status){
  try{
    $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
    $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");
    $insertSql="insert into affdbgeneral(ip,refStr,addtime,status) values(:ip,:refStr,:addtime,:status)";
    $pre=$pdo->prepare($insertSql);

    $ip=getIP();
    $refStr=$_GET['ref'].'-'.$_GET['aff'];
    $addTime=time();
    $pre->bindParam(':ip',$ip);
    $pre->bindParam(':refStr',$refStr);
    $pre->bindParam(':addtime',$addTime);
    $pre->bindParam(':status',$status);
    $pre->execute();
  }catch (PDOException $e){
  }
}

if($_GET['action']=='downloadCount'){
  statistic(2);
  exit();
}

statistic(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tenha um PC mais Estável com Driver Booster PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h2>A Ferramenta Essencial para Atualização de Drivers</h2>
      <h1>Driver Booster PRO</h1>
      <p>Atualiza Drivers com Segurança e Rapidez em 1-Clique</p>
      <ul class="btnbox clearfix">
        <li class="first">
          <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'ptdb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'ptdb6g')" data-text="Download Grátis">
            <span>Download Grátis </span>
            <i class="all-icons"></i>
          </a>
        </li>
        <li>
          <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'ptaffdb82017general')  ;dlCount()" data-text="Compre agora e Economize <?php echo $buytext; ?> >>">
            <span>Compre agora e Economize <b><?php echo $buytext; ?></b> >></span>
          </a>
        </li>
      </ul>
      <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" /></div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper">
        <h2>Quais problemas de PC você tem com drivers e componentes de jogos desatualizados?</h2>
        <div class="clearfix">
          <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
          <div class="describe fr">
            <div class="list">
              <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" />
              <span><b>! </b>Travamento e lentidão frequentes do sistema</span>
            </div>
            <div class="list two">
              <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" />
              <span><b>! </b>A conexão de rede cai ocasionalmente</span>
            </div>
            <div class="list three">
              <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" />
              <span><b>! </b>Impressora ou outros dispositivos externos não funcionam corretamente</span>
            </div>
            <div class="list four">
              <img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" />
              <span><b>! </b>Problemas ou falta de som ao ouvir música ou em chamadas online</span>
            </div>
            <div class="list five">
              <img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" />
              <span><b>! </b>Péssimo desempenho de jogo ou o jogo trava por causa de drivers gráficos desatualizados</span>
            </div>
          </div>
        </div>
        <div class="learn">
          <a href="javascript: void(0)">Clique aqui para aprender sobre drivers</a>
          <div class="drivers">
            <p>Drivers são programas necessários para que cada dispositivo ou componente de hardware funcione corretamente. Se você conectar um dispositivo ao seu PC sem instalar o driver correto, o Windows não saberá como utilizá-lo corretamente.</p>
            <p>Drivers permitem ao seu sistema saber o que é o dispositivo e como usá-lo.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- threepoints start -->
    <div class="threepoints">
      <div class="wrapper">
        <h2> O que o Driver Booster PRO faz??</h2>
        <div class="clearfix">
          <div class="pointist one">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point01.png')?>" alt="" /></div>
            <b>1</b>
            <h4>Detecta e Repara Drivers com 1-clique</h4>
            <p>
				Detecta e repara facilmente todos<br> os drivers desatualizados, <br>faltantes e defeituosos com 1-clique.
            </p>
          </div>
          <div class="pointist two">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point02.png')?>" alt="" /></div>
            <b>2<span class="arrow"></span><span class="arrow right"></span></b>
            <h4>Baixa Drivers com Segurança e Rapidez</h4>
            <p>
				Faz um backup automático e cria um ponto de <br>restauração no sistema antes de atualizar, <br>em caso de qualquer problema inesperado.
            </p>
          </div>
          <div class="pointist three">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point03.png')?>" alt="" /></div>
            <b>3</b>
            <h4>Desfrute de uma Ótima Experiência de Jogo e um PC sem Problemas</h4>
            <p>
				Disponibiliza os últimos Drivers Game Ready <br>para ajudar a melhorar desempenho em jogos, <br>também corrige bugs e melhora a experiência de jogo.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- threepoints end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Obtenha a Solução Completa para Problemas Frustrantes de Drivers!</h2>
        <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'ptaffdb82017general')  ;dlCount()" data-text="Compre agora e Economize <?php echo $buytext; ?> >>">
          <span>Compre agora e Economize <b><?php echo $buytext; ?></b> >></span>
        </a>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Suporta a Atualização de mais de 4.500.000 de Drivers</h2>
          <span></span>
          <p>
            Obtenha automaticamente drivers e atualizações recomendadas para o seu hardware com Driver Booster PRO. Com suporte a mais de 4.500.000 de drivers de dispositivo, Driver Booster PRO corrige problemas de drivers para fazer o seu sistema rodar perfeitamente.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt="" />
        <div class="text">
          <h2>Atualização Segura de Drivers</h2>
          <span></span>
          <p>
           Driver Booster PRO faz backup automático dos drivers anteriores e cria um ponto de restauração do sistema antes de atualizar drivers para evitar qualquer problema inesperado. Como meio de garantir a segurança dos usuários, Driver Booster PRO só disponibiliza drivers com o certificado WHQL e adotou um novo protocolo HTTPS de conexão para criptografar sua conexão com o servidor ao baixar drivers.
          </p>
        </div>
      </div>
    </div>

    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Desfrute de uma Ótima Experiência de Jogo</h2>
          <span></span>
          <p>
            Driver Booster PRO mantém drivers gráficos e Game Ready sempre atualizados para obter o melhor desempenho em jogos. O programa também desliga processos desnecessários rodando no computador para destravar o potencial completo do seu jogo de PC. Componentes de jogos para a maioria dos jogos também estão disponíveis para ajudá-lo a inicializar seu jogo com sucesso.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" />
        <div class="text">
          <h2>Baixa Drivers de Forma Inteligente para Economizar Tempo</h2>
          <span></span>
          <p>
            Ao deletar arquivos inúteis em pacotes de instalação e comprimí-los, Driver Booster economiza seu tempo na atualização de drivers. Driver Booster PRO também oferece um download mais rápido e baixa e instala drivers durante o tempo ocioso do sistema de modo a não perturbar sua rotina.
          </p>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- footbuy start -->
    <div class="centbuy footbuy">
      <div class="wrapper">
        <h3>Como manter os drivers do PC atualizados? <span>Tente o Driver Booster PRO e faça-o com 1-clique!</span></h3>
        <ul class="btnbox clearfix">
          <li class="first">
            <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'ptdb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'ptdb6g')" data-text="Download Grátis">
              <span>Download Grátis </span>
              <i class="all-icons"></i>
            </a>
          </li>
          <li>
            <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'ptaffdb82017general')  ;dlCount()" data-text="Compre agora e Economize <?php echo $buytext; ?> >>">
              <span>Compre agora e Economize <b><?php echo $buytext; ?></b> >></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- brands start -->
    <div class="brands wrapper">
      <h2>Suporta a atualização de drivers de mais de 500 dos maiores fabricantes com 1-clique</h2>
      <!-- <p>med blot et klik</p> -->
      <ul class="clearfix">
        <li><img src="<?php echo getStaticUrl('images/hp.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/microsoft.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/canon.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/dell.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/nvidia.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/snmsung.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/lg.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/amd.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/brother.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/intel.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/sony.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/logitech.png')?>" alt=""/></li>
      </ul>
    </div>
    <!-- brands end -->

    <!-- review start -->
    <div class="review">
      <div class="wrapper">
        <div class="reviews active">
          <h2>Opinião da Mídia</h2>
          <h3>IObit desenvolve muitos utilitários e ferramentas para PC, e Driver Booster PRO, que atualiza automáticamente seus drivers, é uma das melhores.</h3>
          <p>A funcionalidade básica e central do Driver Booster PRO é feita ainda mais atraente graças a inclusão de múltiplas licenças a um preço muito ecônomico, assim como uma interface personalizável que faz um bom trabalho em mostrar informações específicas relacionada ao hardware. O Driver Booster PRO está um passo a frente de seus competidores.</p>
        </div>
        <div class="reviews">
          <h2>Opinião dos usuários</h2>
          <h3></h3>
          <p>Eu estava tendo todos os tipos de problemas com meu laptop até perceber que drivers eram o motivo dos problemas. Mesmo usando todos os canais disponibilizados pela minha marca de laptop eu ainda continuei com alguns problemas. Um clique no Driver Booster and ele encontrou 17 drivers desatualizados e os reparou imediatamente. Meus problemas com drivers se foram e o meu laptop está rodando muito melhor! Eu não usarei outro programa para atualizar drivers.</p>
        </div>
        <div class="reviews">
          <h2>Opinião dos usuários</h2>
          <h3></h3>
          <p>O Driver Booster da IObit é o melhor programa disponível. Eu usei todas as versões do Driver Booster ao longo dos anos. Driver Booster encontra drivers desatualizados para meu laptop e, junto com outros programas da IObit, mantém meu PC rodando sem problemas. Como de costume, IObit acerta em cheio com a nova versão que inova com novas tecnologias pra manter o meu sistema funcionando perfeitamente.</p>
        </div>
        <div class="reviews">
          <h2>Opinião dos usuários</h2>
          <h3></h3>
          <p>Uma verificação por dia mantém os drivers sempre atualizados. Ao invés de procurar individualmente por atualizações de drivers; Driver Booster mantém todos os drivers do meu PC atualizados com apenas um-clique! Driver Booster melhorou o meu PC para jogos, especialmente com os jogos mais recentes que precisam das últimas atualizações. Os produtos da IObit me mostram a verdadeira capacidade do meu pc. </p>
        </div>
        <ul class="handle clearfix">
          <li class="active">
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC Magazine" />
              <span></span>
            </div>
            <strong>PC Magazine</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/Cobus-Engelbrecht.png')?>" alt="Cobus Engelbrecht"/>
              <span></span>
            </div>
            <strong>Cobus Engelbrecht</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/Mike-Goggans.png')?>" alt="Mike Goggans"/>
              <span></span>
            </div>
            <strong>Mike Goggans</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/MTalal-Hafez.png')?>" alt="M.Talal Hafez"/>
              <span></span>
            </div>
            <strong>M.Talal Hafez</strong>
          </li>
        </ul>
      </div>
    </div>
    <!-- review end -->
  </div>
  <!-- container end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><h5>100% Limpo</h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="" /></dd>
    </dl>
    <dl class="two">
      <dt><h5>Garantia de Reembolso de 60 dias </h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
    </dl>
    <dl>
      <dt><h5>Suporte 24 horas por dia</h5></dt>
      <dd>Assistência Técnica 24 horas por Dia ao seu Dispor</dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer">
    <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div class="backtotop">top</div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='dkasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(89,108);
if($_GET['action']=='getViewNum'){
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_ascdb','x_dbasc','xr_ascdb'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Eksklusive 78% rabat på Advanced SystemCare 12 PRO & Driver Booster 6 PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com/dk/" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Glædelig jul! Særtilbud</h1>
        <p class="best">Sidste chance for at spare – Kun en gang om året! </p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          </div>
          <div class="right fr">
            <h2>Driver Booster 6 PRO & Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> ser på dette lige nu, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pladser tilbage!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Skynd dig! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
              </div>
              <p><strong>kr. <big>249</big></strong> <del> kr. 1128</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-ascdb249&ref=dk-ascdb3pc2018a&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018a-dk')">
                 Aktiver nu
              </a>
              <p class="year">1 års abonnement/ 3 PC’er</p>
            </div>
          </div>
        </div>
      </div>
        <span class="snow list01"></span>
        <span class="snow snow-clarity  list02"></span>
        <span class="snow snow-smail list03"></span>
        <span class="round  list04"></span>
        <span class="round round-smail list05"></span>
        <span class="round round-clarity list06"></span>
        <span class="round round-large list07"></span>
        <span class="snow snow-clarity  list15"></span>
        <span class="snow snow-smail  list16"></span>
        <span class="snow snow-clarity  list17"></span>
        <span class="snow snow-smail  list18"></span>
        <span class="round round-clarity list23"></span>
        <span class="round round-clarity list24"></span>

        <span class="round round-clarity list08"></span>
        <span class="round round-smail list09"></span>
        <span class="round round-large  list10"></span>
        <span class="round list11"></span>
        <span class="snow snow-clarity list12"></span>
        <span class="snow snow-smail list13"></span>
        <span class="snow list14"></span>
        <span class="snow snow-clarity  list19"></span>
        <span class="snow snow-smail  list20"></span>
        <span class="snow snow-clarity  list21"></span>
        <span class="snow snow-smail  list22"></span>
        <span class="round round-clarity list25"></span>
        <span class="round round-clarity list26"></span>
    </div>
    <!-- banner end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <h2>IObits Dobbeltgaranti: Hurtigere PC & en bedre gaming oplevelse </h2>
        <p class="over">Driver Booster 6 PRO arbejder sammen med verdensførende tune-up-værktøj – Advanced SystemCare 12 PRO, gør din PC hurtigere og giver bedre gaming oplevelse.</p>       
      </div>
    </div>
    <!-- feature end -->
    <!-- together start -->
    <div class="together">
      <div class="wrapper">        
        <div class="panel clearfix">
          <div class="asc-box fl clearfix on">
            <div class="box fl">
              <h3>Advanced SystemCare 12 PRO<i></i></h3>
              <dl>
                <dt><strong>Mere stabilt system,</strong></dt>
                <dd>Ingen registre der hober sig op på din disk.</dd>
              </dl>
              <dl>
                <dt><strong>Hurtigere spil-ydeevne, </strong></dt>
                <dd>unødvendige processer stoppes automatisk og frigør plads på din RAM.</dd>
              </dl>
              <dl>
                <dt><strong>Hurtigere PC respons,</strong></dt>
                <dd>op til 300% hurtigere internetforbindelse og 200% hurtigere opstart.</dd>
              </dl>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
          </div>
          <div class="db-box fl clearfix on">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
            <div class="box fl">
              <h3><i></i>Driver Booster 6 PRO</h3>
              <dl>
                <dt><strong>Hurtigere loading af spil </strong></dt>
                <dd>Udstyret med nødvendige og opdaterede spil-komponenter.</dd>
              </dl>
              <dl>
                <dt><strong>Bedre PC-ydeevne,</strong></dt>
                <dd>mere end 3,000,000 PC-drivers kan vedligeholdes.
                </dd>
              </dl>
              <dl>
                <dt><strong>Bedre spiæoplevelse</strong></dt>
                <dd>Med Game Reay Drivers og spil-komponenter som vedligeholdes.</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- together end -->
    <!-- features -->
    <div class="features">
      <div class="wrapper">
        <h2>Plus, Du kan også benytte dig af følgende fantastiske funktioner:</h2>
        <ul>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></span>
            <p>personlige databeskyttelse</p>
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></span>
            <p>beskyttelse af digitale fingeraftryk </p>
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></span>
            <p>opdaterer drivere automatisk</p>
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></span>
            <p>Løs nemt enhedsfejl</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- end features -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Gå ikke glip af tilbuddet! Få de to kraftfulde værktøjer til din PC og til dit spil nu</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> ser på dette, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pladser tilbage!
            </p>
          </div>
          <p><strong>kr. <big>249</big></strong> <del> kr. 1128</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-ascdb249&ref=dk-ascdb3pc2018b&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018b-dk')    ">
            Aktiver nu
          </a>
          <p class="year">1 års abonnement/ 3 PC’er</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Disse medier viser os stor tillid til og har tildelt os priser</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
    <!-- review -->
    <div class="review wrapper">
      <div class="review-box">
        <div class="reviews clearfix">
          <h2>Brugeranmeldelser</h2>
          <p>"Dette er et af de bedste driveropdateringsprogrammer overhovedet. Microsoft har endda vildledt mig ved at foreslå opdateringer, der ikke ville fungere sammen med min maskine. Dette program vidste hvilke opdateringer, jeg havde brug for uden konflikter. Det fungerede perfekt. Nemt at bruge, informativt og intuitivt. Det vil blive i min værktøjskasse for evigt ... Fantastisk job! "</p>
        </div>
        <div class="reviews clearfix">
          <h2>Brugeranmeldelser</h2>
          <p>"Med den Driver Booster kan jeg nemt se hvilke enhedsdrivere, der er forældede og kan nemt opdatere dem. Desuden hjælper programmet mig med at rette lydfejl, netværksfejl, enhedsfejl osv. ... Jeg troede ikke på det før, men efter at have brugt programmet elsker jeg det ... min pc er bare hurtigere, sikrere og virker nyere end for 8 måneder siden ... så tak til IObit."</p>
        </div>
        <div class="reviews clearfix active">
          <h2>Medieanmeldelser</h2>
          <p>Driver Booster PROs enkle kernefunktionalitet er blevet endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware. Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien."</p>
        </div>
        <div class="reviews clearfix">
          <h2>Medieanmeldelser</h2>
          <p>"Der er ikke noget værre end en computer, der driller så meget, at det forhindrer dig i at arbejde  eller spille. Avanceret SystemCare har til formål at afhjælpe hvad som helst, der måtte være galt med din computer ikke kun ved at rydde op, fjerne uønskede filer, malware og ugyldige registreringsposter, men også ved at give din computer et løft for at optimere din pc-oplevelse."</p>
        </div>
        <div class="reviews clearfix">
          <h2>Brugeranmeldelser</h2>
          <p>"Det her program er det allerbedste, jeg nogensinde har prøvet. Min computer kører så meget bedre og hurtigere nu, hvor jeg har downloadet ASC10. Programmet har fjernet unødvendige og duplikerede filer samt tomme mapper, og jeg har brugt det til at makulere filer. Det rensede og defragmenterede registreringsdatabasen og alle filerne på min pc. Jeg anbefaler på det varmeste, at du køber programmet. Det er ikke dyrt, og det det vil gøre for din computer, vil være helt fantastisk. Jeg garanterer, at du vil elske det."</p>
        </div>
        <div class="reviews clearfix">
          <h2>Brugeranmeldelser</h2>
          <p>"Jeg startede, som så mange andre, med den gratis version og endte med at købte den fulde version. Programmet har arbejdet med at holde computeren ren og fejlfri i årevis, og det har ikke ladet mig i stikken endnu. Jeg har for nylig kontaktet Advanced System Care og de svarede indenfor en dag eller to med alt, hvad jeg behøvede at vide. Efter min mening er god support meget vigtig, når man beslutter om man vil beholde et produkt, og ASC vinder med både produkt og support."t."</p>
        </div>
      </div>
      
      <ul class="handle clearfix">
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Wayne-Bowler.png" alt="Wayne Bowler"><span></span></div>
          <strong>Wayne Bowler</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Myo-Thuya.png" alt="Myo Thuya"><span></span></div>
          <strong>Myo Thuya</strong>
        </li>
        <li class="active">
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/PCMAG-editchoice.png" alt="PC Magazine"><span></span></div>
          <strong>PC Magazine</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/chip.png" alt="CHIP"><span></span></div>
          <strong>Cnet</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Loretta-Harnarine.png" alt="Loretta Harnarine"><span></span></div>
          <strong>Loretta Harnarine</strong>
        </li>
        <li class="last">
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Bruce-Ramsay.png" alt="Bruce Ramsay"><span></span></div>
          <strong>Bruce Ramsay</strong>
        </li>
      </ul>
    </div>
    <!-- end review  -->
    <!-- bottomcart -->
    <div class="btmcart">
      <div class="wrapper">
        <div class="leftpart">
          <img src="<?php echo getStaticUrl('images/btmpacks.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> ser på dette, &nbsp;&nbsp;<em class="packimg">
              <b id="packbox" class="reduceGift packbox">
                  <b class="list">
                    <strong>0</strong>
                    <strong>1</strong>
                    <strong>2</strong>
                    <strong>3</strong>
                    <strong>4</strong>
                    <strong>5</strong>
                    <strong>6</strong>
                    <strong>7</strong>
                    <strong>8</strong>
                    <strong>9</strong>
                  </b>
                  <b class="list">
                    <strong>0</strong>
                    <strong>1</strong>
                    <strong>2</strong>
                    <strong>3</strong>
                    <strong>4</strong>
                    <strong>5</strong>
                    <strong>6</strong>
                    <strong>7</strong>
                    <strong>8</strong>
                    <strong>9</strong>
                  </b>
              </b></em> pladser tilbage!
          </p>
          <div class="progressbar">
            <span></span>
          </div>
          <p id="bandown" class="countdown">Skynd dig! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
        </div>
        <div class="price">
          <p><strong>kr. <big>249</big></strong> <del> kr. 1128</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product= dk-ascdb249&ref=dk-ascdb3pc2018c&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018c-dk')    ">
                 Aktiver nu
              </a>
        </div>
      </div>
    </div>
    <!-- end btmcart -->
    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Prøv det RISIKOFRIT – med vores 60 dages Penge-tilbage Garanti</h4>
              <p>Vi er sikre på, at PRO-udgaven vil give dig en kraftigere PC med optimizer og driver updater til rimelige priser! </p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Vi tager imod</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Bemærk:</dt>
            <dd>*.Data kan variere afhængigt af forskellige styresystemer og computer.</dd>
            <dd>*.Sådanne promoverende kampagner kan ændre sig uden varsel fra tid til anden. IObit forbeholder sig retten til suverænt at træffe en sådan beslutning.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rettigheder forbeholdes</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- backtotop start -->
    <div id="backtotop" class="backtotop">top</div>
    <!-- backtotop end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=dk-ascdb239&ref=dk-ascdb3pc2018popup&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_asc&tw=-8";
    var _ga = "ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018popup-dk')      ";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
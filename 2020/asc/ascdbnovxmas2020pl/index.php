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
  $c_name = 'ascdbxmaspl_p' . $date;
  $c_name_t='ascdbxmaspl_t' . $date;
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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
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
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Kerstmis Bundel met Advanced SystemCare PRO en Driver Booster PRO - IObit</title>
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
      <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
      <h1 class="title">??wi??teczna WIELKA WYPRZEDA?? Ostatnia szansa na du??e oszcz??dno??ci!</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">77% TANIEJ</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>75% zni??ki ograniczone do PIERWSZYCH 999</h2></div>
          <div class="numbox">
          <span>zakup??w</span>
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
            <span>  wolnych miejsc</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price"><big>114.90</big>z??</strong> <del>499.80 z??</del></p>
              <p>Subskrypcja 1 rok / 3 komputery</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=pl-asc14db83pc114&ref=pl_asc14db83pcpc114purchase2011<?php echo $refStr?>&refs=pl_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbxmas2011-pl');">
                 Aktywuj teraz
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
    Wypr??buj BEZ RYZYKA - Aktywuj teraz, aby utrzyma?? sw??j komputer w doskona??ym stanie i uzyska?? 60-dniow?? gwarancj?? zwrotu pieni??dzy
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Co jest zawarte w super pakiecie?</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 14 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>Kompleksowy optymalizator systemu do automatycznego czyszczenia komputera (do 200% szybciej).</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
              <span>Driver Booster 8 PRO</span>
            </h3>
          </dt>
          <dd>??atwy w u??yciu program do aktualizacji sterownik??w, kt??ry umo??liwia szybkie pobieranie sterownik??w i ich automatyczne instalowanie. </dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Dlaczego warto kupi???</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
      <dl>
          <dt><b>Inteligentniejszy</b> <span> tylko PRO</span></dt>
          <dd>
          Ca??kowite zredukowanie liczby awarii i komunikat??w o b????dach systemu Windows dzi??ki nowemu trybowi AI. 
          </dd>
        </dl>
        <dl>
          <dt><b>200%* szybszy komputer</b> <span> tylko PRO</span></dt>
          <dd>
          Automatyczne czyszczenie i optymalizacja systemu, aby komputer by?? szybszy.
          </dd>
        </dl>
        <dl>
          <dt><b>300%* szybszy internet</b> <span> tylko PRO</span></dt>
          <dd>
          Szybsze pobieranie z internetu, surfowanie, gry, ogl??danie YouTube.
          </dd>
        </dl>
        <dl>
          <dt><b>Ochrona prywatno??ci </b> <span> tylko PRO</span></dt>
          <dd>
          Blokowanie nieautoryzowanego dost??pu do swoich kontakt??w, poczty e-mail i innych wra??liwych danych.
          </dd>
        </dl>
        <dl>
          <dt><b>Bezpieczne przegl??danie</b> <span> tylko PRO</span></dt>
          <dd>
           Zapobieganie pods??uchiwaniu przez tracker??w tego, co czytasz, przegl??dasz i kupujesz.
          </dd>
        </dl>
        
      </div>
    </div>
    <div class="line-center">

    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>4,500,000+ bazy sterownik??w </b> <span> ??tylko PRO</span></dt>
          <dd>Automatyczne skanowanie i aktualizacja 4,500,000+ sterownik??w.</dd>
        </dl>
        <dl>
          <dt><b>Nieograniczona pr??dko???? </b> <span> ??tylko PRO</span></dt>
          <dd>Odblokowuje ograniczenie pr??dko??ci, aby pobra?? sterownik o 100%* szybciej.</dd>
        </dl>
        <dl>
          <dt><b>Lepsze granie </b> <span> ??tylko PRO</span></dt>
          <dd>Rekomenduje komponenty gry, aby przyspieszy?? gr??.</dd>
        </dl>
        <dl>
          <dt><b>Bezpieczne pobieranie i aktualizacja sterownik??w </b> <span> ??tylko PRO</span></dt>
          <dd>Automatyczne tworzenie kopii zapasowych i tworzenie punktu przywracania systemu przed aktualizacj??.</dd>
        </dl>
        <dl>
          <dt><b>Aktualizacja sterownika offline </b> <span> ??tylko PRO</span></dt>
          <dd>Aktualizuje i instaluje sterowniki sieciowe w trybie offline.??</dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/db-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Kiedy najlepiej go zakupi???</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/center-box.png')?>" alt=""/>
          <!-- <span class="original"><em>???49,99</em></span>
          <span class="original last"><em>???74,85</em></span> -->
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost"><span>50%</span> TANIEJ</h3>
            <span class="month">??wi??to Dzi??kczynienia</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>77%</span> TANIEJ</h3>
            <span class="month">Dzisiaj</span>
          </div>
          <div class="clist three">
            <h3 class="cost"><span>60%</span> TANIEJ</h3>
            <span class="month">Nowy Rok</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price"><big>114.90</big> z??</strong> <del>499.80 z??</del></p>
        <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=pl-asc14db83pc114&ref=pl_asc14db83pcpc114purchase2011<?php echo $refStr?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbxmas2011-pl');">
             Aktywuj teraz
        </a>
        <p> 1 rok / 3 komputery</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Co m??wi?? inni?</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h3><span>Recenzje medi??w</span></h3></dt>
            <dd>
              <p class="on">
              ???Nie ma nic gorszego ni?? komputer, kt??ry jest tak zapchany, ??e jego u??ytkowanie oraz granie staj?? si?? niemo??liwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprz??tanie niepotrzebnych plik??w, z??o??liwego oprogramowania i nieprawid??owych wpis??w w rejestrze, ale r??wnie?? daj??c Twojemu komputerowi impuls do zoptymalizowania jego dzia??ania???.
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recenzja u??ytkownika</span></h3></dt>
            <dd>
              <p>
              ???To jest najlepszy program, z jakiego mia??am okazj?? skorzysta??. Odk??d pobra??am ASC10, m??j komputer dzia??a o wiele lepiej i szybciej. Program wyczy??ci?? niepotrzebne i powielone pliki, puste foldery. U??y??am go te?? do zniszczenia plik??w. Wyczy??ci?? i zdefragmentowa?? rejestr oraz wszystkie pliki na moim komputerze. Gor??co polecam zakup tego programu. Nie jest wcale drogi, a to, co zrobi dla twojego komputera, b??dzie po prostu niesamowite. Pokochasz to, obiecuj?????.
              </p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recenzja u??ytkownika</span></h3></dt>
            <dd>
              <p>
              ???Jako informatyk uwa??am, ??e ASC free rozwi??zuj?? wszystkie najcz????ciej spotykane problemy komputera. Po zako??czeniu naprawy zazwyczaj sugeruj?? klientowi zakup pakietu Pro. Kto potrzebuje informatyka, gdy mo??na polega?? na Advanced System Care Pro 24-7? To najlepszy produkt dla zwyczajnych u??ytkownik??w. Dzi??kuj?? za u??atwienie mojej pracy. ???
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recenzja u??ytkownika</span></h3></dt>
            <dd>
              <p>
              ???Tak jak wi??kszo????, zacz????em od pobrania darmowej wersji przed przej??ciem na wersj?? PRO. Od wielu lat ten program zapewnia czysto???? mojego komputera oraz chroni go przed zawieszaniem i b????dami. Jeszcze si?? nie zawiod??em. Ostatnio musia??em skontaktowa?? si?? z Advanced SystemCare i dosta??em odpowied?? w ci??gu jednego lub dw??ch dni. Ekipa odpowiedzia??a na wszystkie moje pytania. Moim zdaniem wsparcie jest ogromne, co pomog??o mi w decyzji o pozostaniu przy produkcie. ASC wygrywa zar??wno je??li chodzi o produkt, jak i wsparcie???.
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>



          <dl class="reviews">
            <dt><h3><span>Recenzja u??ytkownika</span></h3></dt>
            <dd> 
              <p>
              ???Dzi??ki Driver Booster mog?? z ??atwo??ci?? sprawdzi??, kt??re sterowniki urz??dze?? s?? nieaktualne, a nast??pnie ??atwo je zaktualizowa??. Poza tym program pomaga mi naprawi?? b????dy d??wi??ku, b????dy sieci, b????dy urz??dze?? itp. Z pocz??tku nie wierzy??em w dzia??anie Driver Booster, ale po u??yciu naprawd?? mi si?? podoba. M??j komputer jest szybszy, bezpieczniejszy i nowszy ni?? 8 miesi??cy temu... Dzi??kuj?? IObit???.
              </p>
              <cite>Myo Thuya</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recenzja u??ytkownika</span></h3></dt>
            <dd>
              <p>
              ???Driver Booster jest niesamowit?? aplikacj??, szczeg??lnie dla kogo??, kto ma wiele aplikacji i dysk??w, ale brakuje mu czasu na ich r??czn?? aktualizacj??. Zdecydowanie polecam Driver Booster, kt??ry pomo??e zaktualizowa?? sterowniki ??atwo i szybko???.
              </p>
              <cite>Adam Backlund</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recenzja u??ytkownika</span></h3></dt>
            <dd>
              <p>
              ???Jest to jeden z najlepszych program??w do aktualizacji sterownik??w jaki istnieje. Microsoft zwi??d?? mnie na manowce, sugeruj??c aktualizacje, kt??re nie by??y kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo ??atwy w obs??udze i intuicyjny, podaje te?? du??o istotnych informacji. Ju?? zawsze b??d?? go u??ywa??... ??wietna robota!???
              </p>
              <cite>Wayne Bowler</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Recenzje medi??w</span></h3></dt>
            <dd>
              <p>
              ???IObit ma w swojej ofercie wiele program??w, a Driver Booster PRO, kt??ry automatycznie aktualizuje sterowniki, jest jednym z najlepszych. Prosta podstawowa funkcjonalno???? Driver Booster PRO jest jeszcze bardziej atrakcyjna dzi??ki po????czeniu wielu licencji w bardzo przyst??pnej cenie. Zachwyca r??wnie?? konfigurowalny interfejs, kt??ry dobrze wy??wietla specyficzne informacje zwi??zane ze sprz??tem. Konkurenci tacy jak Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferuj?? atrakcyjne funkcje, ale IObit Driver Booster PRO zostawia ich daleko w tyle???.
              </p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo-Thuya"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam-Backlund"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"></li>

          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>

          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/Loretta-Harnarine.png')?>" alt="Loretta Harnarine"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/Charles-R-Widick.png')?>" alt="Charles R. Widic"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/Bruce-Ramsay.png')?>" alt="Bruce Ramsay"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt="PC Magazine"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Nagrody na ca??ym ??wiecie</h2>
      <p>Jako ciesz??cy si?? zaufaniem i nagradzani przez ??wiatowej klasy media w ci??gu ostatnich dwunastu lat, wiesz, ??e masz odpowiedni optymalizator komputera i narz??dzie do aktualizacji sterownik??w.</p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>Wypr??buj BEZ RYZYKA - dzi??ki naszej 60-dniowej gwarancji zwrotu pieni??dzye</h3>
            <p>
            Jeste??my przekonani, ??e aktywacja wersji PRO poprawi wydajno???? Twojego komputera za przyst??pn?? cen??!
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>Akceptujemy</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>Uwaga:</dt>
        <dd>* Programy promocyjne mog?? ulec zmianie bez powiadomienia, w dowolnym momencie i wed??ug w??asnego uznania IObit.</dd>
        <dd>* Dane mog?? si?? r????ni?? w zale??no??ci od r????nych system??w lub komputer??w</dd>
      </dl>
      <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrze??one</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">77% Rabatt</div>
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
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> odwiedzaj??cych teraz, <b class="packsNum">50</b> odesz??o.</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price"><big>114.90</big>z??</strong> <del>499.80 z??</del></p>
          <p>Subskrypcja 1 rok / 3 komputery</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=pl-asc14db83pc114&ref=pl_asc14db83pcpc114purchase2011<?php echo $refStr?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbxmas2011-pl');">
             Aktywuj teraz
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
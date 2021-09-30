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
  $c_name = 'plxasciu_p' . $date;
  $c_name_t='plxasciu_t' . $date;
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
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
// if($_GET['pop']=='x_iu'){
//   $refStr.='-'.$_GET['pop'];
// }
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Zaoszczędź do 75% na Advanced Systemcare PRO i IObit Uninstaller PRO z okazji Bożego Narodzenia - IObit!</title>
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
      <h1 class="title">Świąteczny mega pakiet Ostatnia szansa, aby tyle zaoszczędzić! </h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">75% ZNIŻKI</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>75% zniżki ograniczone do 1 000 pierwszych zakupów</h2></div>
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
            <span>dostępnych pakietów</span>
            <!-- <p class="change">Hurry, only <b class="packsNum">50</b> Left at this price!</p> -->
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price"><big>79,90</big>zł</strong> <del>319,80 zł</del></p>
              <p>1 rok / 3 komputery</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="http://www.iobit.com/buy.php?product=pl-asc13iu93pc79iuasc&ref=pl_asc13iu93pc79purchase1911<?php echo $refStr;?>&refs=pl_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asciuxmas1911-pl');">
                Kup TERAZ
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
      BEZ RYZYKA - Aktywuj teraz, aby utrzymać swój komputer w doskonałym stanie i uzyskać naszą 60-dniową gwarancję zwrotu pieniędzy
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Co obejmuje mega pakiet?</h2>
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
          <dd>Optymalizator systemu „wszystko w jednym”, który przyspieszy Twój komputer i ochroni Twoją prywatność.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
              <span>IObit Uninstaller 9 PRO</span>
            </h3>
          </dt>
          <dd>Łatwy w użyciu deinstalator oprogramowania do całkowitego usuwania niechcianych programów i wtyczek.</dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Dlaczego warto wybrać mega pakiet?</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
        <dl>
          <dt><b>200%* Szybszy komputer</b></dt>
          <dd>Automatycznie zmieniaj i optymalizuj swój system, aby uzyskać szybszy komputer.  <span>Tylko w PRO </span></dd>
        </dl>
        <dl>
          <dt><b>300%* Szybszy Internet </b></dt>
          <dd>Szybsze pobieranie z Internetu, surfowanie, gry, YouTube. <span>Tylko w PRO </span></dd>
        </dl>
        <dl>
          <dt><b>Ochrona prywatności</b></dt>
          <dd>Zablokuj nieautoryzowany dostęp do swoich kontaktów, wiadomości e-mail i innych poufnych danych. <span>Tylko w PRO </span></dd>
        </dl>
        <dl>
          <dt><b>Bezpieczne przeglądanie Internetu</b></dt>
          <dd>Zapobiegaj śledzeniu i podglądaniu tego, co czytasz, przeglądasz i kupujesz. <span>Tylko w PRO </span></dd>
        </dl>
        <dl>
          <dt><b>Aktualizacja oprogramowania </b></dt>
          <dd>Aktualizuj ważne programy jednym kliknięciem. <span>Tylko w PRO </span></dd>
        </dl>
      </div>
    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>Usuń uparte i dołączone oprogramowanie</b> </dt>
          <dd>którego nie można odinstalować konwencjonalnymi środkami. <span>Tylko w PRO </span></dd>
        </dl>
        <dl>
          <dt><b>Automatyczne skanowanie w poszukiwaniu resztek</b> </dt>
          <dd>pozostawionych przez standardowe odinstalowanie lub nieusuniętych za pomocą innych narzędzi. <span>Tylko w PRO </span></dd>
        </dl>
        <dl>
          <dt><b>Zidentyfikuj złośliwe lub reklamowe wtyczki, </b> </dt>
          <dd>które wstrzykują reklamy lub złośliwe linki do wyświetlanych stron.  <span>Tylko w PRO </span></dd>
        </dl>
        <dl>
          <dt><b>Monitorowanie zmian plików w czasie rzeczywistym</b> </dt>
          <dd>wykonywanych przez programy podczas ich instalacji.  <span>Tylko w PRO </span></dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/iu-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Kiedy najlepiej kupić mega pakiet?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <span class="original"><em>199,90 zł</em></span>
          <span class="original last"><em>119,90 zł</em></span>
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost">50% zniżki</h3>
            <span class="month">Mikołajki</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>75%</span> zniżki</h3>
            <span class="month">Dzisiaj</span>
          </div>
          <div class="clist three">
            <h3 class="cost">60% zniżki</h3>
            <span class="month">Sylwester </span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price"><big>79,90</big>zł</strong> <del>319,80 zł</del></p>
        <a class="buybtn exbtn"
           href="http://www.iobit.com/buy.php?product=pl-asc13iu93pc79iuasc&ref=pl_asc13iu93pc79purchase1911<?php echo $refStr;?>&refs=pl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asciuxmas1911-pl');">
         Kup TERAZ
        </a>
        <p>1 rok / 3 komputery</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Co sądzą o nas użytkownicy</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Recenzje mediów</span></h2></dt>
            <dd>
              <p class="on">„Nie ma nic gorszego niż komputer, który jest tak zapchany, że jego użytkowanie oraz granie stają się niemożliwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprzątanie niepotrzebnych plików, złośliwego oprogramowania i nieprawidłowych wpisów w rejestrze, ale również dając Twojemu komputerowi impuls do zoptymalizowania jego działania”.</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recenzja użytkownika</span></h2></dt>
            <dd>
              <p>„Używam Advanced SystemCare Pro od dłuższego czasu, a najnowsza wersja 13 jest nawet lepsza niż wersja 12. ASC 13 bardzo szybko znajduje i naprawia problemy, oraz ma wiele dodatkowych funkcji, których możesz użyć, aby utrzymać komputer w dobrym stanie. Gorąco polecam wszystkim najnowszy Advanced SystemCare 13”.</p>
              <cite>Tony Fisher</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recenzja użytkownika</span></h2></dt>
            <dd>
              <p>„Nigdy nie znalazłem lepszego programu do konserwacji i bezpieczeństwa komputera niż Advanced SystemCare. Odkąd kupiłem ASC, nigdy nie miałem problemów z wirusami, phishingiem, czarnymi ekranami lub innymi rodzajami błędów. To były najlepiej zainwestowane pieniądze, jakie kiedykolwiek wydałem na komputer. Dziękuję ASC za to, że korzystania z komputera jest dużo przyjemniejsze”.</p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recenzja użytkownika</span></h2></dt>
            <dd>
              <p>„Nowy ASC 13 to obowiązkowa pozycja dla wszystkich użytkowników komputerów. Czysty i intuicyjny interfejs jest łatwy w obsłudze zarówno dla początkującego, jak i zaawansowanego użytkownika. Wiele potężnych narzędzi w zestawie, aby utrzymać najwyższą wydajność komputera. Wyrazy uznania dla IObit za tak wspaniały zestaw narzędzi w jednym miejscu”.</p>
              <cite>Daniel Sanders</cite>
            </dd>
          </dl>

          <dl class="reviews">
            <dt><h2><span>Recenzja użytkownika</span></h2></dt>
            <dd>
              <p>„IObit Uninstaller jest prawdopodobnie jednym z najlepszych programów do usuwania niepotrzebnych programów z komputera. W przeciwieństwie do podstawowego deinstalatora Windows, program usunie wszystkie pozostałości programu, które mogłyby później spowolnić działanie komputera. Używam tego programu do kilku lat i zawsze pomaga utrzymać mój komputer w czystości, szybko. Już wcześniej poleciłem ten program moim znajomym. Dzisiaj polecam go ponownie”.</p>
              <cite>Sergey Erlich </cite>
            </dd>
          </dl>
           <dl class="reviews">
            <dt><h2><span>Recenzja użytkownika</span></h2></dt>
            <dd>
              <p>„Uninstaller PRO to tylko jeden z pięciu programów do optymizacji od firmy IObit, w które postanowiłem zainwestować, tak jak szefowie kuchni inwestują w noże. Co prawda, użycie zwykłego programu do odinstalowania zadziałało, natomiast Uninstaller PRO pojawił się później i pokazał, że 35 plików wymaga wyczyszczenia. Wystarczyło kliknąć „OK”. Polecam ten program każdemu. Kupiłem licencję na 3 komputery. Obsługa techniczna jest uprzejma i znakomita”.</p>
              <cite>Joseph Yu </cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recenzja użytkownika</span></h2></dt>
            <dd>
              <p>„IObit Uninstaller to jeden z najlepszych programów do deinstalacji. Łatwy w obsłudze, proponuje bardzo szybkie oraz głębokie czyszczenie. Od wersji 5 ma większą liczbę innych funkcji współpracujących nie tylko z Windows 10. Również szybkie czyszczenie  wtyczek jest bardzo wygodne. Świetne wyszukiwanie duplikatów czy nieużywanych programów. Dziękuję za pomoc mojemu komputerowi i również tym należącym do członków mojej rodziny”.</p>
              <cite>Áda Görtler </cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recenzje mediów</span></h2></dt>
            <dd>
              <p>„To łatwe w użyciu i pouczające narzędzie do deinstalacji czyści, konfiguruje i optymalizuje komputer. Użytkownicy mogą go pobrać praktycznie w mgnieniu oka. To narzędzie do deinstalacji można sklasyfikować jako najlepszy deinstalator, który pozwala użytkownikom odinstalować kilka programów za jednym zamachem. Program proponuje użytkownikom wykonanie „Potężnego skanowania”, aby wejść głębiej w system i znaleźć resztki usuniętych programów. Sama wydajność sprawia, że to małe narzędzie do deinstalacji jest warte swojego miejsca w naszych komputerach”.</p>
              <cite>Makeuseof </cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="Makeuseof"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Wyróżnieni na całym świecie</h2>
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
            <h3>ZERO RYZYKA dzięki naszej 60-dniowej gwarancji zwrotu pieniędzy</h3>
            <p>
              Jesteśmy pewni, że Twój komputer będzie szybszy, bezpieczniejszy i bardziej wydajny dzięki najnowszej wersji PRO. Teraz w specjalnej świątecznej ofercie.
            </p>
          </dd>
        </dl>
        <ul class="right fr">
          <li>
            <h3>Akceptowane metody płatności</h3>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          <li>
          <li class="two">
            <h3>Bezpieczna płatność</h3>
            <img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/>
          <li>
        </ul>
      </div>
      <dl>
        <dt>Uwaga:</dt>
        <dd>* Dane mogą się różnić w zależności od systemu lub komputera.</dd>
        <dd>
           * Takie programy promocyjne mogą ulec zmianie bez uprzedzenia, według własnego uznania.
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone.</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">75% ZNIŻKI</div>
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
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> odwiedzających teraz, <b class="packsNum">50</b>dostępnych pakietów</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price"><big>79,90</big>zł</strong> <del>319,80 zł</del></p>
          <p>1 rok / 3 komputery</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="http://www.iobit.com/buy.php?product=pl-asc13iu93pc79iuasc&ref=pl_asc13iu93pc79purchase1911<?php echo $refStr;?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asciuxmas1911-pl');">
            Kup TERAZ
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
<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$entryIsPdts = false;

$entryIsPdts = preg_match("/^p_/", $_GET['ref']);

$refStr = empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['name']) ? '' : '-'.$_GET['name'];
$refStr .= empty($_GET['type']) ? '' : '-'.$_GET['type'];


?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oferta letnia, rabat do 90% na wszystkie produkty - IObit</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/index.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>
  </head>
  <body>
    <div class="container">
      <div class="g-main">
        <!-- banner -->
        <div class="banner">
          <div class="banner-cont">
            <a href="https://www.iobit.com/pl/index.php" target="_blank" class="logo"><img src="<?php echo getStaticUrl('images/logo.png')?>" alt="logo"></a>
            <div class="banner-title">
              <div class="small">SALDI ESTATE!</div>
              <div class="big">Rabaty do  <i></i> na wszystkie produkty IObit, najniższa cena w całym roku</div>
            </div>
            <div class="m-product">
              <div id="time" class="time-box">
                Zostało: <span class="hour">00</span> godz
                <span class="minute">00</span> min
                <span class="second">00</span> sek
              </div>
              <h3 id="bannerTitle" class="title"><i></i>Super Zestaw</h3>
              <ul>
                <li>
                  <div class="name"><b></b>Advanced SystemCare PRO <i>(1 Rok/ 3 PC)</i></div>
                  <div class="price"><del>199.90zł</del></div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Uninstaller PRO <i>(1 Rok/ 3 PC)</i></div>
                  <div class="price"><del>199.90zł</del></div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Malware Fighter PRO <i>(1 Rok/ 3 PC)</i></div>
                  <div class="price"><del>199.90zł</del></div>
                </li>
                <li>
                  <div class="name"><b></b>Smart Defrag PRO <i>(1 Rok/ 1 PC)</i></div>
                  <div class="price"><del>199.90zł</del></div>
                </li>
                <li>
                  <div class="name"><b></b>Driver Booste PRO <i>(1 Rok/ 1 PC)</i></div>
                  <div class="price"><del>299,90zł</del></div>
                </li>
              </ul>
              <div class="m-price">
                <div class="price">
                  <div class="new">
                  119,90<i> zł</i>
                  </div>
                  <div class="old">1099.50 zł</div>
                  <div id="bannerTag" class="tag">-90%</div>
                </div>
                <a id="bannerBtn" class="btn" href="http://www.iobit.com/buy.php?product=pl-asciuimfsddb3pc119&ref=pl_asciuimfsddb3pc119purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asciuimfsddb3pc119-pl')">Kup Teraz</a>
              </div>
              <div id="tip" class="tip">Opakowanie niedostępne, proszę wybrać inne produkty.</div>
            </div>
          </div>
        </div>
        <div class="content">
           <!-- packs -->
          <div class="pack-cont">
            <h3>Rabat <i>80%</i>- Mamy dla Ciebie również pakiet optymalizacji PC i  pakiety zabezpieczeń </h3>
            <div class="pack-list">
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack01.png')?>" alt="pack01"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Czyść, przyśpiesz i chroń swój PC</li>
                      <li><i></i>Odinstaluj programy i wtyczki, aby zwolnić miejsce</li>
                      <li><i></i>Zmaksymalizuj wydajność dysku twardego</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">109,90 <i>zł</i></div>
                    <div class="old">599,7 zł</div>
                  </dd>
                  <dd>
                    <a class="btn" href="http://www.iobit.com/buy.php?product=pl-asciusd3pc109&ref=pl_asciusd3pc109purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_iasc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asciusd3pc109-pl')">Kup Teraz</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item pack2">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack02.png')?>" alt="pack02"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Totalna ochrona przed 206 milionami zagrożeń</li>
                      <li><i></i>Odinstaluj programy i wtyczki, aby zwolnić miejsce</li>
                      <li><i></i>Tylko jedno hasło, aby chronić wszystkie Twoje ważne dane, foldery i dokumenty</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">109,90<i> zł</i></div>
                    <div class="old">559,7 zł</div>
                  </dd>
                  <dd>
                    <a class="btn" href="http://www.iobit.com/buy.php?product=pl-imfiusd3pc109&ref=pl_imfiusd3pc109purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_imf" onclick="ga('send', 'event', 'summerbuy', 'buy', 'imfiusd3pc109-pl')">Kup Teraz</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item pack3">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack03.png')?>" alt="pack03"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Zapewnia zawsze aktualne sterowniki</li>
                      <li><i></i>Zmaksymalizuj wydajność dysku twardego</li>
                      <li><i></i>Tylko jedno hasło, aby chronić wszystkie Twoje ważne dane, foldery i dokumenty</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">119,90<i> zł</i></div>
                    <div class="old">659,7 zł</div>
                  </dd>
                  <dd>
                    <a class="btn" href="http://www.iobit.com/buy.php?product=pl-dbsd3pcpf119&ref=pl_dbsd3pcpf119purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_db" onclick="ga('send', 'event', 'summerbuy', 'buy', 'dbsd3pcpf119-pl')">Kup Teraz</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack04.png')?>" alt="pack04"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Czyść, przyśpiesz i chroń swój PC</li>
                      <li><i></i>Totalna ochrona przed 206 milionami zagrożeń</li>
                      <li><i></i>Łatwa aktualizacja oprogramowania</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">99.90<i> zł</i></div>
                    <div class="old">519.70 zł</div>
                  </dd>
                  <dd>
                    <a class="btn" href="http://www.iobit.com/buy.php?product=pl-ascimfisu3pc99&ref=pl_ascimfisu3pc99purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'ascimfisu3pc99-pl')">Kup Teraz</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- product -->
          <div class="product-cont">
            <h3>Lub rabat do <i>70%</i> na produkty spe ł niaj ą ce Twoje codzienne potrzeby</h3>
            <div class="product-list">
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product01.png')?>" alt="product01">
                </div>
                <div class="info">
                  <div class="title">Advanced Systemcare PRO</div>
                  <div class="desc">To jest najlepsze narzędzie do optymalizacji oprogramowania PC, któremu możesz zaufać. Spraw, aby komputer działał jak nowy.</div>
                  <div class="price">
                    <div class="new">74.90zł</div>
                    <div class="old">199.90zł</div>
                    <div class="tag">-62%</div>
                  </div>
                  <a href="http://www.iobit.com/buy.php?product=pl-asc143pc74&ref=pl_asc143pc74purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asc3pc74-pl')" class="btn">Kup Teraz</a>
                </div>
              </div>
              <div class="product-item product-item-second mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product02.png')?>" alt="product02">
                </div>
                <div class="info">
                  <div class="title">Driver Booster PRO</div>
                  <div class="desc">To najlepsze narzędzie do aktualizowania sterowników i rozwiązywania problemów z urządzeniami, zawierające ponad 4 500 000  sterowników bazy danych.</div>
                  <div class="price">
                    <div class="new">84.90zł</div>
                    <div class="old">299,90zł</div>
                    <div class="tag">-70%</div>
                  </div>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=pl-db83pc84&ref=pl_db83pc84purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_db" onclick="ga('send', 'event', 'summerbuy', 'buy', 'db3pc84-pl')">Kup Teraz</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product03.png')?>" alt="product03">
                </div>
                <div class="info">
                  <div class="title">IObit Uninstaller PRO</div>
                  <div class="desc">Zaawansowany dezinstalator jest niezbędny, aby odinstalowywanie programów i wtyczek stało się dziecinnie proste. </div>
                  <div class="price">
                    <div class="new">59.90zł</div>
                    <div class="old">199.90zł</div>
                    <div class="tag">-70%</div>
                  </div>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=pl-iu103pc59&ref=pl_iu103pc59purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_iu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'iu3pc59-pl')">Kup Teraz</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product04.png')?>" alt="product04">
                </div>
                <div class="info">
                  <div class="title">IObit Malware Fighter PRO</div>
                  <div class="desc">Wykorzystuje 3 zaawansowane silniki, aby chronić komputer przed wirusami, złośliwym oprogramowaniem i oprogramowaniem ransomware.</div>
                  <div class="price">
                    <div class="new">79.90zł</div>
                    <div class="old">199.90zł</div>
                    <div class="tag">-60%</div>
                  </div>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=pl-imf3pc79&ref=pl_imf3pc79purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_imf" onclick="ga('send', 'event', 'summerbuy', 'buy', 'imf3pc79-pl')">Kup Teraz</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product05.png')?>" alt="product05">
                </div>
                <div class="info">
                  <div class="title">IObit Software Updater PRO</div>
                  <div class="desc">Zapewnia najłatwiejszy sposób aktualizacji programów dla klientów.</div>
                  <div class="price">
                    <div class="new">39.90zł</div>
                    <div class="old">119.90zł</div>
                    <div class="tag">-67%</i></div>
                  </div>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=pl-isu3pc39&ref=pl_isu3pc39purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_isu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'isu3pcpf39-pl')">Kup Teraz</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product06.png')?>" alt="product06">
                </div>
                <div class="info">
                  <div class="title">Smart Defrag PRO</div>
                  <div class="desc">Zarządzaj i defragmentuj miejsce na dysku, aby poprawić wydajność komputera.</div>
                  <div class="price">
                    <div class="new">64.90 zł</div>
                    <div class="old">199.90zł</div>
                    <div class="tag">-67%</div>
                  </div>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=pl-sd3pc64&ref=pl_sd3pc64purchasesummer2021<?= $refStr; ?>&refs=pl_purchase_sd" onclick="ga('send', 'event', 'summerbuy', 'buy', 'sd3pc64-pl')">Kup Teraz</a>
                </div>
              </div>
            </div>
          </div>

          <!-- awards start -->
          <div class="awards">
            <div class="wrapper">
              <h2>Raccomandato anche da</h2>
              <img src="<?php echo getStaticUrl('images/n-awards.png')?>" alt=""/>
            </div>
          </div>
          <!-- awards end -->

          <div class="review wrapper">
            <div class="content">
              <span class="next"></span>
              <span class="prev"></span>
              <div class="message">
                <div class="roll">
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
                    <dd>
                      <h3>Recenzje mediów</h3>
                      <p>„Nie ma nic gorszego niż komputer, który jest tak zapchany, że jego użytkowanie oraz granie stają się niemożliwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprzątanie niepotrzebnych plików, złośliwego oprogramowania i nieprawidłowych wpisów w rejestrze, ale również dając Twojemu komputerowi impuls do zoptymalizowania jego działania”.</p>
                      <h4>Cnet</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt=""></dt>
                    <dd>
                      <h3>Recenzja użytkownika</h3>
                      <p>„Nowy ASC 13 to obowiązkowa pozycja dla wszystkich użytkowników komputerów. Czysty i intuicyjny interfejs jest łatwy w obsłudze zarówno dla początkującego, jak i zaawansowanego użytkownika. Wiele potężnych narzędzi w zestawie, aby utrzymać najwyższą wydajność komputera. Wyrazy uznania dla IObit za tak wspaniały zestaw narzędzi w jednym miejscu”.</p>
                      <h4>Daniel Sanders</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></dt>
                    <dd>
                      <h3>Recenzja użytkownika</h3>
                      <p>„Driver Booster jest niesamowitą aplikacją, szczególnie dla kogoś, kto ma wiele aplikacji i dysków, ale brakuje mu czasu na ich ręczną aktualizację. Zdecydowanie polecam Driver Booster, który pomoże zaktualizować sterowniki łatwo i szybko”</p>
                      <h4>Adam Backlund</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/Software.png')?>" alt="Software"></dt>
                    <dd>
                      <h3>Recenzje mediów</h3>
                      <p>„Program wykorzystuje dwa silniki AV, własny oraz BitDefender. Program wydaje się skutecznie działać przeciwko szkodliwemu oprogramowaniu, które nie może zostać wykryte przez inne podobnie działające programy. Bardzo dobrze, że może działać razem ze standardowym oprogramowaniem AV. Może wykryć szeroki zakres programów szpiegujących, ransomware, adware, trojanów, robaków, keyloggerów i botów.”</p>
                      <h4>Software Informer</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></dt>
                    <dd>
                      <h3>Recenzja użytkownika</h3>
                      <p>„IObit Uninstaller staje się lepszy z każdą aktualizacją. Używam go od ponad 3 lat. Szybko się ładuje i ma prosty interfejs użytkownika. Niektóre z wielu funkcji, z których regularnie korzystam, to odinstalowywanie wsadowe, zaawansowane skanowanie, czy niszczarka plików. Ostatnio zainstalowana funkcja, która zapewnia szybki dostęp do programu, który właśnie zainstalowałem jest funkcją, której nie lubię lub nie działa ona poprawnie”.</p>
                      <h4>Áda Görtler</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten"></dt>
                    <dd>
                      <h3>Recensione media</h3>
                      <p>„Nie wiem, czy mógłbym być bardziej zadowolony ze Smart Defrag. Za każdym razem działa idealnie, a wszystko, co muszę zrobić, to uruchomić program i wszystko jest czyste. Jestem zadowolony w 100% z tego programu, jak również z szybkiej odpowiedzi, gdy potrzebowałem porady, jak radzić sobie z problemami, które mogłem mieć. Bardzo to doceniam”.</p>
                      <h4>Jim Parten</h4>
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="g-footer">
        <div class="service">
          <div class="wrapper">
            <div class="clearfix">
              <dl class="first">
                <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>"></dt>
                <dd>
                  <h3>Spróbuj bezpieczną pł atnoś ć - mamy gwarancję zwrotu pienię dzy w cią gu 60 dni</h3>
                  <p>Jesteś my pewni, że aktywacja Pro zmaksymalizuje  jego wydajność Ciesz się wydajnoś cią i bezpieczeństwem komputera w rozsą dnejcenie</p>
                </dd>
              </dl>
              <dl class="last">
                <dt><h3>Akceptujemy</h3></dt>
                <dd><img src="<?php echo getStaticUrl('images/payment.png')?>"></dd>
              </dl>
            </div>
            <div class="note">
            <p>Uwaga:</p>
            <p>*Dane mogą się różnić w zależności od systemu lub komputera.</p>
            <p>*Tego typu promocje mogą ulec zmianie bez wcześniejszego powiadomienia, okresowo i według naszego wyłącznego uznania. </p>
          </div>
          <div class="copyright">Copyright ©2005 - 2021 IObit. Wszelkie prawa zastrzeżone</div>
          </div>
        </div>
      </div>
      <div class="g-float">
        <div class="cake"></div>
        <div class="off-list">
          <div id="offItem90" class="off-item active">
            <div class="num"><i></i>90% RABATT</div>
            <div class="name">Super Zestaw</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>80% RABATT</div>
            <div class="name">Pakiet optymalizacji</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>70% RABATT</div>
            <div class="name">Flagowe produkty</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>

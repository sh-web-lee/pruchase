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
<html lang="dk">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Op til 90% rabat på alle IObit-produkter.</title>
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
            <a href="https://www.iobit.com/dk/index.php" target="_blank" class="logo"><img src="<?php echo getStaticUrl('images/logo.png')?>" alt="logo"></a>
            <div class="banner-title">
              <div class="small">SOMMERUDSALG</div>
              <div class="big">Op til <i></i> rabat på alle IObit produkter, årets bedste priser!</div>
            </div>
            <div class="m-product">
              <div id="time" class="time-box">
                Countdown: <span class="hour">00</span>h
                <span class="minute">00</span> m
                <span class="second">00</span> s
              </div>
              <h3 id="bannerTitle" class="title"><i></i>Anbefalet pakke</h3>
              <ul>
                <li>
                  <div class="name"><b></b>Advanced SystemCare PRO <i>(1 år/ 3 PC’er)</i></div>
                  <div class="price">449 kr.</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Uninstaller PRO <i>(1 år/ 3 PC’er)</i></div>
                  <div class="price">399 kr.</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Malware Fighter PRO <i>(1 år/ 3 PC’er)</i></div>
                  <div class="price">599 kr.</div>
                </li>
                <li>
                  <div class="name"><b></b>Smart Defrag PRO <i>(1 år/ 1 PC)</i></div>
                  <div class="price">379 kr.</div>
                </li>
                <li>
                  <div class="name"><b></b>Protected Folder <i>(1 år/ 1 PC)</i></div>
                  <div class="price">399 kr.</div>
                </li>
              </ul>
              <div class="m-price">
                <div class="price">
                  <div class="new">
                  239 <i>kr.</i>
                  </div>
                  <div class="old">2385 kr.</div>
                  <div id="bannerTag" class="tag">-90<i>%</i></div>
                </div>
                <a id="bannerBtn" class="btn" href="https://www.iobit.com/buy.php?product=dk-asciuimfsdpf239&ref=dk_topbundlesummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'topbundle202106-dk')">Køb nu</a>
              </div>
              <div id="tip" class="tip">pakke udsolgt, vælg venligst andre produkter</div>
            </div>
          </div>
        </div>
        <div class="content">
           <!-- packs -->
          <div class="pack-cont">
            <h3>Op til <i>80</i>% RABAT på PC optimering og beskyttelsespakker</h3>
            <div class="pack-list">
              <!-- ASC+IU+SD 盒子 -->
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack01.png')?>" alt="pack01"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Rydder op, accelererer og beskytter din PC.</li>
                      <li><i></i>Afinstallerer programmer og plugins fuldstændigt.</li>
                      <li><i></i>Maksimerer din harddisks ydeevne.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">189 <i>kr.</i></div>
                    <div class="old">949 kr.</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=dk-asciusd189&ref=dk_midfirstsummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'midfirst202106-dk')">Køb nu</a>
                  </dd>
                </dl>
              </div>
              <!-- IMF+IU+PF 盒子 -->
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack02.png')?>" alt="pack02"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Beskytter mod 209 millioner PC-trusler.</li>
                      <li><i></i>Afinstallerer programmer og plugins fuldstændigt.</li>
                      <li><i></i>Beskytter dit vigtige data med et kodeord.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">199 <i>kr.</i></div>
                    <div class="old">999 kr.</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=dk-imfiupf199&ref=dk_midsecondsummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'midsecond202106-dk')">Køb nu</a>
                  </dd>
                </dl>
              </div>
              <!-- DB+SD+PF 盒子 -->
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack03.png')?>" alt="pack03"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Holder altid dine PC-drev opdaterede.</li>
                      <li><i></i>Maksimerer din harddisks ydeevne.</li>
                      <li><i></i>Beskytter dit vigtige data med et kodeord.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">199 <i>kr.</i></div>
                    <div class="old">999 kr.</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=dk-dbsdpf199&ref=dk_midthirdsummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'midthird202106-dk')">Køb nu</a>
                  </dd>
                </dl>
              </div>
              <!-- ASC+IMF+ISU 盒子 -->
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack04.png')?>" alt="pack04"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Rydder op, accelererer og beskytter din PC.</li>
                      <li><i></i>Beskytter mod 209 millioner PC-trusler.</li>
                      <li><i></i>Opdaterer nemtm software.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">189 <i>kr.</i></div>
                    <div class="old">949 kr.</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=dk-ascisuimf189&ref=dk_midfourthsummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'midfourth202106-dk')">Køb nu</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- product -->
          <div class="product-cont">
            <h3>Eller rabatter på <i>65</i>% på alle produkter til imødekomme dine daglige behov</h3>
            <div class="product-list">
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product01.png')?>" alt="product01">
                </div>
                <div class="info">
                  <div class="title">Advanced Systemcare PRO<i style="font-weight: 500;"> (1 år / 3 PC’er)</i></div>
                  <div class="desc">Det bedste optimeringsprogram til PC du kan støde på. Din gamle PC bliver så god som ny igen.</div>
                  <div class="price">
                    <div class="new">219 kr.</div>
                    <div class="old">449 kr.</div>
                    <div class="tag">-50%</div>
                  </div>
                  <a href="https://www.iobit.com/buy.php?product=dk-asc143pc219&ref=dk_btmascsummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmasc202106-dk')" class="btn">Køb nu</a>
                </div>
              </div>
              <div class="product-item product-item-second mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product02.png')?>" alt="product02">
                </div>
                <div class="info">
                  <div class="title">Driver Booster PRO<i style="font-weight: 500;"> (1 år / 3 PC’er)</i></div>
                  <div class="desc">Den bedste opdateringsværktøj til drev understøtter 4.500.000+ drev og løse enhedsproblemer. </div>
                  <div class="price">
                    <div class="new">239 kr.</div>
                    <div class="old">679 kr.</div>
                    <div class="tag">-65%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product= dk-db83pc239&ref=dk_btmdbsummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmdb202106-dk')">Køb nu</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product03.png')?>" alt="product03">
                </div>
                <div class="info">
                  <div class="title">IObit Uninstaller PRO<i style="font-weight: 500;"> (1 år / 3 PC’er)</i></div>
                  <div class="desc">Dette kraftfulde afinstalleringsværktøj fjerner programmer og plugins fuldstændingt.</div>
                  <div class="price">
                    <div class="new">179 kr.</div>
                    <div class="old">399 kr.</div>
                    <div class="tag">-55%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=dk-iu103pc179&ref=dk_btmiusummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmiu202106-dk')">Køb nu</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product04.png')?>" alt="product04">
                </div>
                <div class="info">
                  <div class="title">IObit Malware Fighter PRO<i style="font-weight: 500;"> (1 år / 1 PC)</i></div>
                  <div class="desc">Beskyt din PC mod virus, malware og ransomware med 3 motorer.</div>
                  <div class="price">
                    <div class="new">199 kr.</div>
                    <div class="old">379 kr.</div>
                    <div class="tag">-47%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=dk-imf81pc199&ref=dk_btmimfsummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmimf202106-dk')">Køb nu</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product05.png')?>" alt="product05">
                </div>
                <div class="info">
                  <div class="title">IObit Software Updater PRO<i style="font-weight: 500;"> (1 år / 3 PC’er)</i></div>
                  <div class="desc">Programmet opdaterer software uden du behøver gøre noget!</div>
                  <div class="price">
                    <div class="new">129 kr.</div>
                    <div class="old">289 kr.</div>
                    <div class="tag">-55%</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=dk-isu43pc129&ref=dk_btmisusummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmisu202106-dk')">Køb nu</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product06.png')?>" alt="product06">
                </div>
                <div class="info">
                  <div class="title">Smart Defrag PRO<i style="font-weight: 500;"> (1 år / 3 PC’er)</i></div>
                  <div class="desc">Håndterer og defragmenterer harddisken så, di PC præsterer bedre.</div>
                  <div class="price">
                    <div class="new">179 kr.</div>
                    <div class="old">399 kr.</div>
                    <div class="tag">-55%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=dk-sd63pc179&ref=dk_btmsdsummer202106<?= $refStr; ?>&refs=dk_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmsd202106-dk')">Køb nu</a>
                </div>
              </div>
            </div>
          </div>
          <!-- award -->
          <div class="award-cont">
            <h3>Anbefalet og belønnet af disse medier</h3>
            <div class="award-list">
              <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="awards">
            </div>
          </div>
          <div class="review wrapper">
            <div class="content">
              <span class="next"></span>
              <span class="prev"></span>
              <div class="message">
                <div class="roll">
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
                    <dd>
                      <h3>Anmeldelser fra medier</h3>
                      <p>
                        Der er ikke noget værre end en computer, der driller så meget, at det forhindrer dig i at arbejde eller i at spille. Avanceret SystemCare har til formål at afhjælpe hvad som helst, der måtte være galt med din computer - ikke kun ved at rydde op, fjerne uønskede filer, malware og ugyldige registreringsposter, men også ved at give din computer et løft for at optimere din pc-oplevelse.
                      </p>
                      <h4>Cnet</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/Richard-Beavers.png')?>" alt="Richard Beavers"></dt>
                    <dd>
                      <h3>Anmeldelser fra brugere</h3>
                      <p>
                        Jeg har prøvet diverse programmer over tiden som har lovet at holde min computer problemfri. Jeg vendte mig mod ASC for år tilbage ved at bruge den gratis udgave først. Jeg fandt, at jeg ikke længere oplevede småproblemer og opgraderede derfor til den betalte version og har aldrig set mig tilbage igen. Advanced SystemCare Pro er det eneste værktøj jeg vil anbefale baseret på mine oplevelser. Jeg bruger også IObit Uninstaller, Smart Defrag og Driver Booster gør virkelig en forskel.
                      </p>
                      <h4>Richard Beavers</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/Harold-Barr.png')?>" alt="Harold Barr"></dt>
                    <dd>
                      <h3>Anmeldelser fra brugere</h3>
                      <p>
                        Sikke en overraskelse at modtage Driver Booster fra IObit. Så snart det var installeret begyndte opdateringerne. Jeg anede ikke jeg havde så mange programmer på computeren og slet ikke at de behøvede opgraderinger. Da opdateringerne afsluttede, var det som om, min PC havde fået en komplet makeover. Fantastisk!
                      </p>
                      <h4>Harold Barr</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/Lovro-Žužić.png')?>" alt="Lovro Žužić"></dt>
                    <dd>
                      <h3>Anmeldelser fra brugere</h3>
                      <p>
                        IObit Uninstaller bliver bedre ved hver opdatering. Jeg har brugt det i mere end 3 år nu. Det er hurtigt at indlæse og har en simpel brugergrænseflade. Nogle af de mange funktioner, jeg regelmæssigt bruger, er batch-afinstallation, grundig scanning, filmakulering og den nye funktion, som giver mig hurtig adgang til et program jeg lige har installeret, som jeg ikke kan lide eller som ikke virker korrekt.
                      </p>
                      <h4>Lovro Žužić</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/Software.png')?>" alt=""></dt>
                    <dd>
                      <h3>Anmeldelser fra medier</h3>
                      <p>
                        Programmet bruger to antivirus-motorer, dets egne og BitDefenders, og de ser ud til at være effektive mod malware, der ikke kan opdages af andre tilsvarende programmer, så det er godt, at det kan køre sammen med dit standard-antivirusprogram. Det kan registrere et bredt udvalg af spyware, ransomware, adware, trojanere, orme, keyloggers og bots. 
                      </p>
                      <h4>Software Informer</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/Jim-Parten.png')?>" alt="Jim Parten"></dt>
                    <dd>
                      <h3>Anmeldelser fra brugere</h3>
                      <p>
                        Jeg ved ikke, hvordan jeg kunne være mere tilfreds med Smart Defrag. Det virker som en drøm hver gang, og alt jeg skal gøre er at køre programmet og alt er rent og jeg er absolut 100% tilfreds, ikke kun med programmet, men også med det hurtige svar, da jeg havde brug for råd om, hvordan man kunne håndtere de problemer, jeg havde. Det sætter jeg meget stor pris på.
                      </p>
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
                  <h3>Prøv det RISOKOFRIT – med vores 60 dages tilfredshedsgaranti eller pengene retur</h3>
                  <p>Vi er sikre på, at PRO-udgaven vil maksimere din PC’s præstationsevne samt sikkerhed til en overkommelig pris!</p>
                </dd>
              </dl>
              <dl class="last">
                <dt><h3>Vi tager imod</h3></dt>
                <dd><img src="<?php echo getStaticUrl('images/payment.png')?>"></dd>
              </dl>
            </div>
            <div class="note">
            <p>Bemærk:</p>
            <p>*. Tilbud som dette kan fra tid til anden ændres uden varsel efter vores eget skøn.</p>
            <p>*. Data kan ændres baseret på forskellige systemer eller computere.</p>
          </div>
          <div class="copyright">Copyright ©2005 - 2021 IObit. All Rights Reserved</div>
          </div>
        </div>
      </div>
      <div class="g-float">
        <div class="cake"></div>
        <div class="off-list">
          <div id="offItem90" class="off-item active">
            <div class="num"><i></i>90% RABAT</div>
            <div class="name">Anbefalet pakke</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>80% RABAT</div>
            <div class="name">Populære pakker</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>65% RABAT</div>
            <div class="name">Single produkter</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>

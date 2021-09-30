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

$refStr = empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['name']) ? '' : ('-' . $_GET['name']);
$refStr .= empty($_GET['type']) ? '' : '-'.$_GET['type'];

?>
<!DOCTYPE html>
<html lang="nl"> 
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zomeractie! Tot wel 85% op de beste IObit software</title>
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
            <a href="https://www.iobit.com/nl/index.php" target="_blank" class="logo"><img src="<?php echo getStaticUrl('images/logo.png')?>" alt="logo"></a>
            <div class="banner-title">
              <div class="small">Spetterende Zomeractie</div>
              <div class="big">Tot wel <i></i> korting op de populairste IObit producten en unieke voordeelbundels!</div>

            </div>
            <div class="m-product">
              <div id="time" class="time-box">
                Verloopt in: <span class="hour">00</span> u
                <span class="minute">00</span> m
                <span class="second">00</span> s
              </div>
              <h3 id="bannerTitle" class="title"><i></i>Super Zomerdeal</h3>
              <ul>
                <li>
                  <div class="name"><b></b>Advanced SystemCare PRO <i>(1 Jaar/ 3 pc’s) </i></div>
                  <div class="price">€49,99</div>
                </li>
                <li>
                  <div class="name"><b></b>Driver Booster PRO <i>(1 Jaar/ 3 pc’s)</i></div>
                  <div class="price">€74,85</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Uninstaller PRO <i>(1 Jaar/ 3 pc’s)</i></div>
                  <div class="price">€29,99</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Malware Fighter PRO <i>(1 Jaar/ 3 pc’s)</i></div>
                  <div class="price">€79,99</div>
                </li>
              </ul>
              <div class="m-price">
                <div class="price">
                  <div class="new">
                   <i>€</i>29,99
                  </div>
                  <div class="old">€234,82</div>
                  <div id="bannerTag" class="tag">-85<i>%</i></div>
                </div>
                <a id="bannerBtn" class="btn" href="https://www.iobit.com/buy.php?product=nl-ascdbimfiu2999&ref=nl_ascdbimfiu2999purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'ascdbimfiu2999-nl')">Profiteer Nu</a>
              </div>
              <div id="tip" class="tip">Pakket niet op voorraad, kies andere producten.</div>
            </div>
          </div>
        </div>
        <div class="content">
           <!-- packs -->
          <div class="pack-cont">
            <h3>TOT WEL <i>80</i>%  KORTING – Kies het pakket met uw favoriete software voor deze exclusieve prijs</h3>
            <div class="pack-list">
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack01.png')?>" alt="pack01"></dt>
                  <dd>
                    <ul class="ulone">
                      <li><i></i>Schonere, snellere en veiligere pc</li>
                      <li><i></i>Verwijder software grondig en eenvoudig</li>
                      <li><i></i>Haal alles uit uw harde schijf en SSD</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>€</i>24,99</div>
                    <div class="old">€109,97</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=nl-asciusd2499&ref=nl_asciusd2499purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asciusd2499-nl')">Nu Kopen</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack02.png')?>" alt="pack02"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Schonere, snellere en veiligere pc</li>
                      <li><i></i>Automatisch al uw software updaten voor een veilige pc</li>
                      <li><i></i>Bescherm uw privébestanden met een wachtwoord</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>€</i>24,99</div>
                    <div class="old">€119,93</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=nl-ascisupf2499&ref=nl_ascisupf2499purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'ascisupf2499-nl')">Nu Kopen</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack03.png')?>" alt="pack03"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Update automatisch alle drivers voor een stabiel systeem</li>
                      <li><i></i>Verwijder software grondig en eenvoudig</li>
                      <li><i></i>Bescherm uw privébestanden met een wachtwoord</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>€</i>26,99</div>
                    <div class="old">€144,79</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=nl-db83pciupf2699&ref=nl_db83pciupf2699purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_db" onclick="ga('send', 'event', 'summerbuy', 'buy', 'db83pciupf2699-nl')">Nu Kopen</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack04.png')?>" alt="pack04"></dt>
                  <dd>
                    <ul class="ulfour">
                      <li><i></i>Update automatisch alle drivers voor een stabiel systeem</li>
                      <li><i></i>Realtime bescherming tegen meer dan 209 miljoen bedreigingen </li>
                      <li><i></i>Haal alles uit uw harde schijf en SSD</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>€</i>29,99</div>
                    <div class="old">€184,83</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=nl-dbimfsd2999&ref=nl_dbimfsd2999purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_db" onclick="ga('send', 'event', 'summerbuy', 'buy', 'dbimfsd2999-nl')">Nu Kopen</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- product -->
          <div class="product-cont">
            <h3>Tot wel <i>75</i>%  Zomerkorting op al uw  favoriete software!</h3>
            <div class="product-list">
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product01.png')?>" alt="product01">
                </div>
                <div class="info">
                  <div class="title">Advanced Systemcare PRO<i style="font-weight: 500;">   (1 Jaar / 3 pc’s) </i></div>
                  <div class="desc">Krachtig TuneUp programma voor een schone, veilige en tot wel 200% snellere PC. Maakt uw PC weer als nieuw.</div>
                  <div class="price">
                    <div class="new">€17,99</div>
                    <div class="old">€49,99</div>
                    <div class="tag">-60%</div>
                  </div>
                  <a href="https://www.iobit.com/buy.php?product=nl-asc3pc1799&ref=nl_asc3pc1799purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asc3pc1799-nl')" class="btn">Nu Kopen</a>
                </div>
              </div>
              <div class="product-item product-item-second mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product02.png')?>" alt="product02">
                </div>
                <div class="info">
                  <div class="title">Driver Booster PRO<i style="font-weight: 500;">  (1 Jaar / 3 pc’s) </i></div>
                  <div class="desc">Houd automatisch meer dan 4.500.000 drivers en gamecomponenten up-to-date voor de beste PC- en gameprestaties.</div>
                  <div class="price">
                    <div class="new">€22,95</div>
                    <div class="old">€74,85</div>
                    <div class="tag">-65%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=nl-db83pc2295&ref=nl_db83pc2295purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_db" onclick="ga('send', 'event', 'summerbuy', 'buy', 'db83pc2295-nl')">Nu Kopen</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product03.png')?>" alt="product03">
                </div>
                <div class="info">
                  <div class="title">IObit Uninstaller PRO<i style="font-weight: 500;">  (1 Jaar / 3 pc’s)</i></div>
                  <div class="desc">Het effectiefste deïnstallatieprogramma, dat gegarandeerd de hardnekkigste software, inclusief alle restanten van uw pc verwijdert.</div>
                  <div class="price">
                    <div class="new">€16,99</div>
                    <div class="old">€29,99 </div>
                    <div class="tag">-40%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=nl-iu103pc1699&ref=nl_iu103pc1699purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_iu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'iu103pc1699-nl')">Nu Kopen</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product04.png')?>" alt="product04">
                </div>
                <div class="info">
                  <div class="title">IObit Malware Fighter PRO<i style="font-weight: 500;"> (1 Jaar / 3 pc’s)</i></div>
                  <div class="desc">Beschermt uw pc tegen virussen, malware en ransomware, zodat u zich geen zorgen meer hoeft te maken over online bedreigingen.</div>
                  <div class="price">
                    <div class="new">€19,99</div>
                    <div class="old">€79,99</div>
                    <div class="tag">-75%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=nl-imf83pc1999&ref=nl_imf83pc1999purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'summerbuy', 'buy', 'imf83pc1999-nl')">Nu Kopen</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product05.png')?>" alt="product05">
                </div>
                <div class="info">
                  <div class="title">IObit Software Updater PRO<i style="font-weight: 500;"> (1 Jaar / 3 pc’s)</i></div>
                  <div class="desc">Houd uw software altijd automatisch up-to-date voor de laatste functies en een veilig systeem.</div>
                  <div class="price">
                    <div class="new">€12,99</div>
                    <div class="old">€29,99</div>
                    <div class="tag">-55%</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=nl-isu41y3pc1299&ref=nl_isu41y3pc1299purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_isu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'isu41y3pc1299-nl')">Nu Kopen</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product06.png')?>" alt="product06">
                </div>
                <div class="info">
                  <div class="title">Smart Defrag PRO<i style="font-weight: 500;"> (1 Jaar / 3 pc’s)</i></div>
                  <div class="desc">Houd uw harde schijf en SSD automatisch in topconditie zodat uw computer snel en opgeruimd blijft.</div>
                  <div class="price">
                    <div class="new">€17,99</div>
                    <div class="old">€29,99</div>
                    <div class="tag">-40%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=nl-sd73pc1799&ref=nl_sd73pc1799purchasesummer2021<?= $refStr; ?>&refs=nl_purchase_sd" onclick="ga('send', 'event', 'summerbuy', 'buy', 'sd73pc1799-nl')">Nu Kopen</a>
                </div>
              </div>
            </div>
          </div>
          <!-- award -->
          <div class="award-cont">
            <h3>Internationaal Bekroond</h3>
            <div class="award-list">
              <!-- <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="awards"> -->
			  <div class="sepsale_diesen">
			  		<div class="wrapper sepsale_dieimg"><!-- <div class="sepsale_period sepsale_per1"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per2"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per3"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per4"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per5"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per6"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per7"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per8"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div> --></div>
			  	</div>
            </div>
          </div>
          <div class="review wrapper">
            <div class="content">
              <span class="next"></span>
              <span class="prev"></span>
              <div class="message">
                <div class="roll">
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people1.png')?>" alt="Brendon O'Rourke"></dt>
                    <dd>
                      <h3>Klantbeoordeling</h3>
                      <p>
          Ik gebruik ASC al jaren. Recent heb ik de laatste V14 Beta versie geprobeerd. En het is met afstand de volledigste en beste versie die er is. IObit blijft hun producten en technologie constant verbeteren. Met meer opties en gemakkelijkere navigatie vind je snel de juiste oplossing. Ik hoef geen andere software meer te overwegen.
                      </p>
                      <h4>Brendon O'Rourke</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people2.png')?>" alt="Ryan Hill"></dt>
                    <dd>
                      <h3>Klantbeoordeling</h3>
                      <p>
                 
          Advanced system care 14 beta is het compleetste alles-in-één systeem dat er is. Ik gebruik het programma al jaren en elk jaar wordt het beter en is de interface nog gemakkelijker. Grondig opschonen is heel makkelijk, in één klik doet het programma alles voor je. Ook alle andere opties zijn super fijn! Zoals de lege mappen vinder, de internet booster en zelfs de gamebooster is top!! Volgens mij is dit de beste opschoonsoftware die er is.

                      </p>
                      <h4>Ryan Hill</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people3.png')?>" alt="Lyle Stelmaschuk"></dt>
                    <dd>
                      <h3>Klantbeoordeling</h3>
                      <p>                 
          Ik heb veel verschillende software aangeschaft om mijn pc sneller te maken en computerproblemen op te lossen. Helaas heeft geen één mijn echt kunnen helpen, totdat ik Advanced System Care 14 probeerde. Ik vind het geweldig dat er zo veel opties zijn en dat het oplossingen voor al mijn problemen biedt. Het is ongelooflijk hoe veel sneller mijn pc is na de eerste keer scannen en repareren. Bij uitstek het beste product dat ik heb kunnen vinden.
  
                      </p>
                      <h4>Lyle Stelmaschuk</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people4.png')?>" alt="Adam Backlund"></dt>
                    <dd>
                      <h3>Klantbeoordeling</h3>
                      <p>          
    "Driver Booster is een geweldige applicatie. Voor iemand die veel applicaties en drivers op de computer heeft staan maar geen tijd heeft om deze bij te werken, raad ik Driver Booster aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."  
                      </p>
                      <h4>Adam Backlund</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people5.png')?>" alt="Gelu Batir"></dt>
                    <dd>
                      <h3>Klantbeoordeling</h3>
                      <p>        
       "Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden."
      
                      </p>
                      <h4>Gelu Batir</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people6.png')?>" alt="Joseph Yu"></dt>
                    <dd>
                      <h3>Klantbeoordeling</h3>
                      <p>        
          
              "Uninstaller PRO is een van de producten van de productlijn van IObit waarmee ik investeer in mijn PC zoals een kok investeert in zijn messen. Uninstaller is een geweldig programma om resten van verwijderde programma’s op te sporen en te verwijderen. Je merkt direct dat er meer vrije ruimte is op de computer. De standaard Windows Uninstaller werkt wel, maar verwijdert niet alle resten. IObit Unistaller PRO heeft 35 bestanden grondig van mijn PC verwijderd waardoor er direct meer ruimte vrijkwam op mijn harde schijf. Ik heb de licentie aangeschaft voor 3 PC’s zodat ik dit programma bij mijn hele familie kan installeren. Iedereen is erg te spreken over dit programma!" 
                      </p>
                      <h4>Joseph Yu</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people7.png')?>" alt="Hans"></dt>
                    <dd>
                      <h3>Klantbeoordeling</h3>
                      <p>
        
       "Ik ben al meerdere jaren een gebruiker van Smart Defrag. Sinds het gebruik van deze fantastische software zijn mijn desktop en laptop sneller en veiliger geworden. Samen met Advanced System Care Ultimate heb je een complete tool voor het up to date houden van je systeem, snel en veilig. Door het elke dag te gebruiken houd je je systeem in top conditie zelfs als je geen technische achtergrond heb!"
      
                      </p>
                      <h4>Hans</h4>
					  <!-- sda -->
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
                <dt><img src="<?php echo getStaticUrl('images/mb.png')?>"></dt>
                <dd>
                  <h3>Probeer ZONDER RISICO met onze 60 dagen geldteruggarantie</h3>
                  <p>Wij zijn ervan overtuigd dat de PRO versie uw systeemprestaties en beveiliging een maximale boost geven tegen een zeer schappelijke prijs.</p>
                </dd>
              </dl>
              <dl class="last">
                <dt><h3>Wij accepteren</h3></dt>
                <dd><img src="<?php echo getStaticUrl('images/payments.png')?>"></dd>
              </dl>
            </div>
            <div class="note">
            <p>Opmerkingen:</p>
            <p>Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.</p>
            <p>IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.</p>
          </div>
          <div class="copyright">Copyright ©2005 - 2021 IObit. Alle Rechten Voorbehouden</div>
          </div>
        </div>
      </div>
      <div class="g-float">
        <div class="cake"></div>
        <div class="off-list">
          <div class="off-item active">
            <div class="num"><i></i>85% KORTING</div>
            <div class="name">Super Zomerdeal</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>80% KORTING</div>
            <div class="name">Voordeelbundels</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>75% KORTING</div>
            <div class="name">Topproducten</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>

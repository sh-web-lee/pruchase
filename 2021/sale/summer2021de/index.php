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
<html lang="de"> 
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bis zu 90% Rabatt auf alle Produkte von IObit.</title>
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
            <a href="https://www.iobit.com/de/index.php" target="_blank" class="logo"><img src="<?php echo getStaticUrl('images/logo.png')?>" alt="logo"></a>
            <div class="banner-title">
              <div class="small">SUMMER SALE</div>
              <div class="big">Bis zu <i></i> Rabatt auf alle IObit Produkte, bester Preis des Jahres!</div>

            </div>
            <div class="m-product">
              <div id="time" class="time-box">
                Endet in: <span class="hour">00</span>  h
                <span class="minute">00</span> m
                <span class="second">00</span> s
              </div>
              <h3 id="bannerTitle" class="title"><i></i>Bestes Paket</h3>
              <ul>
                <li>
                  <div class="name"><b></b>Advanced SystemCare PRO <i>(1 Jahr/ 3 PCs)</i></div>
                  <div class="price">59,99€</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Uninstaller PRO <i>(1 Jahr / 3 PCs)</i></div>
                  <div class="price">39,95€</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Malware Fighter PRO <i>(1 Jahr / 3 PCs)</i></div>
                  <div class="price">59,99€</div>
                </li>
                <li>
                  <div class="name"><b></b>Smart Defrag PRO <i>(1 Jahr/ 1 PC)</i></div>
                  <div class="price">29,99€</div>
                </li>
                <li>
                  <div class="name"><b></b>Protected Folder <i>(1 Jahr/ 1 PC)</i></div>
                  <div class="price">39,95€</div>
                </li>
              </ul>
              <div class="m-price">
                <div class="price">
                  <div class="new">
                    29,99<i>€</i>
                  </div>
                  <div class="old">299,97€</div>
                  <div id="bannerTag" class="tag">-90<i>%</i></div>
                </div>
                <a id="bannerBtn" class="btn" href="https://www.iobit.com/buy.php?product=de-asciuimfsdpf2999&ref=de_topbundlesummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'topbundle202106-de')">Jetzt kaufen</a>
              </div>
              <div id="tip" class="tip">Paket nicht auf Lager, bitte wählen Sie andere Produkte.</div>
            </div>
          </div>
        </div>
        <div class="content">
           <!-- packs -->
          <div class="pack-cont">
            <h3>Bis zu <i>80</i>%  Rabatt auf PC-Optimierungs- und Schutzpakete</h3>
            <div class="pack-list">
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack01.png')?>" alt="pack01"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Reinigt, beschleunigt und schützt Ihren PC.</li>
                      <li><i></i>Deinstalliert Programme und Plugins vollständig.</li>
                      <li><i></i>Maximiert die Leistung Ihrer Festplatte.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">24,99<i>€</i></div>
                    <div class="old">124,95€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=de-asciusd2499&ref=de_midfirstsummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'midfirst202106-de')">Jetzt kaufen</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack02.png')?>" alt="pack02"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Schützt vor 209 Millionen PC-Bedrohungen.</li>
                      <li><i></i>Deinstalliert Programme und Plugins vollständig</li>
                      <li><i></i>Schützt Ihre wichtigen Daten mit einem Passwort.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">21,99<i>€</i></div>
                    <div class="old">109,95€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=de-imfiupf2199&ref=de_midsecondsummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'midsecond202106-de')">Jetzt kaufen</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack03.png')?>" alt="pack03"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Hält Ihre PC-Treiber stets aktuell.</li>
                      <li><i></i>Maximiert die Leistung Ihrer Festplatte.</li>
                      <li><i></i>Schützt Ihre wichtigen Daten mit nur einem Passwort.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">26,99<i>€</i></div>
                    <div class="old">134,95€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=de-dbsdpf2699&ref=de_midthirdsummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'midthird202106-de')">Jetzt kaufen</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack04.png')?>" alt="pack04"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Reinigt, beschleunigt und schützt Ihren PC.</li>
                      <li><i></i>Schützt vor 209 Millionen PC-Bedrohungen.</li>
                      <li><i></i>Aktualisiert Softwares einfach</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">24,99<i>€</i></div>
                    <div class="old">124,95€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=de-ascisuimf2499&ref=de_midfourthsummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'midfourth202106-de')">Jetzt kaufen</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- product -->
          <div class="product-cont">
            <h3>Oder bis zu <i>70</i>% Rabatt auf alle Produkte, um Ihren täglichen Bedarf zu decken</h3>
            <div class="product-list">
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product01.png')?>" alt="product01">
                </div>
                <div class="info">
                  <div class="title">Advanced Systemcare PRO<i style="font-weight: 500;">  (1 Jahr/ 3 PCs) </i></div>
                  <div class="desc">Der beste PC-Putzer auf dem Markt. Machen Sie Ihren alten PC wieder flott.</div>
                  <div class="price">
                    <div class="new">24,99€</div>
                    <div class="old">59,99€</div>
                    <div class="tag">-42%</div>
                  </div>
                  <a href="https://www.iobit.com/buy.php?product=de-asc143pc2499&ref=de_btmascsummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmasc202106-de')" class="btn">Jetzt kaufen</a>
                </div>
              </div>
              <div class="product-item product-item-second mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product02.png')?>" alt="product02">
                </div>
                <div class="info">
                  <div class="title">Driver Booster PRO<i style="font-weight: 500;"> (1 Jahr/ 3 PCs) </i></div>
                  <div class="desc">Der beste Treiber-Updater unterstützt über 4.500.000 Treiber und behebt Geräteprobleme.</div>
                  <div class="price">
                    <div class="new">26,99€</div>
                    <div class="old">89,99€</div>
                    <div class="tag">-70%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=de-db83pc2699&ref=de_btmdbsummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmdb202106-de')">Jetzt kaufen</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product03.png')?>" alt="product03">
                </div>
                <div class="info">
                  <div class="title">IObit Uninstaller PRO<i style="font-weight: 500;">  (1 Jahr/ 3 PCs)</i></div>
                  <div class="desc">Diese leistungsstarke Deinstallationssoftware entfernt Programme und Plugins restlos.</div>
                  <div class="price">
                    <div class="new">19,99€</div>
                    <div class="old">39,95€</div>
                    <div class="tag">-50%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=de-iu103pc1999&ref=de_btmiusummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmiu202106-de')">Jetzt kaufen</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product04.png')?>" alt="product04">
                </div>
                <div class="info">
                  <div class="title">IObit Malware Fighter PRO<i style="font-weight: 500;"> (1 Jahr/ 1 PC)</i></div>
                  <div class="desc">Schützt Ihren PC mit 3 Engines vor Viren, Malware und Ransomware.</div>
                  <div class="price">
                    <div class="new">19,99€</div>
                    <div class="old">39,99€</div>
                    <div class="tag">-50%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=de-imf81pc1999&ref=de_btmimfsummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmimf202106-de')">Jetzt kaufen</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product05.png')?>" alt="product05">
                </div>
                <div class="info">
                  <div class="title">IObit Software Updater PRO<i style="font-weight: 500;"> (1 Jahr/ 3 PCs)</i></div>
                  <div class="desc">Dieses Programm hilft Ihnen, Software ganz einfach zu aktualisieren!</div>
                  <div class="price">
                    <div class="new">14,99€</div>
                    <div class="old">29,99€</div>
                    <div class="tag">-50%</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=de-isu43pc1499&ref=de_btmisusummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmisu202106-de')">Jetzt kaufen</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product06.png')?>" alt="product06">
                </div>
                <div class="info">
                  <div class="title">Smart Defrag PRO<i style="font-weight: 500;"> (1 Jahr/ 3 PCs)</i></div>
                  <div class="desc">Verwaltet und defragmentiert die Festplatte, um Ihre PC-Leistung erhöhen.</div>
                  <div class="price">
                    <div class="new">19,99€</div>
                    <div class="old">29,99€</div>
                    <div class="tag">-33%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=de-sd63pc1999&ref=de_btmsdsummer202106<?= $refStr; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'btmsd202106-de')">Jetzt kaufen</a>
                </div>
              </div>
            </div>
          </div>
          <!-- award -->
          <div class="award-cont">
            <h3>Vertrauen von diesen Medien</h3>
            <div class="award-list">
              <!-- <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="awards"> -->
			  <div class="sepsale_diesen">
			  		<div class="wrapper sepsale_dieimg"><div class="sepsale_period sepsale_per1"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per2"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per3"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per4"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per5"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per6"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per7"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per8"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div></div>
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
                    <dt><img src="<?php echo getStaticUrl('images/sepsale.png')?>" alt=""></dt>
                    <dd>
                      <h3>Medienbewertung</h3>
                      <p>
                        „Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte. Zusätzlich zu den Features der Free-Version bietet "Advanced SystemCare" in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version”.
                      </p>
                      <h4>CHIP</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/peopleone.png')?>" alt="Charles R. Widick"></dt>
                    <dd>
                      <h3>Nutzerbewertung</h3>
                      <p>
                        „Als Computer-Reparatur-Techniker finde ich, dass man durch das Herunterladen und Scannen mit ASC die häufigsten Probleme lösen kann. Nach der Reparatur empfehle ich allen Kunden ein Pro-Paket zu kaufen. Wer braucht einen Techniker? Wenn Sie die Macht des Advanced SystemCare Pro haben, das mit Ihrem System 24*7 Stunden arbeiten kann. Das ist das beste Produkt, das ein Heimanwender kaufen kann. Das Produkt erleichtert meinen Job, vielen Dank dafür”.
                      </p>
                      <h4>Charles R. Widick</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/peopletwo.png')?>" alt="Medienbewertung"></dt>
                    <dd>
                      <h3>Medienbewertung</h3>
                      <p>                 
      
      Die Gratis-Version „Driver Booster Free“ bietet bereits eine Menge Features. Einziger Wermutstropfen ist das Fehlen einer 1-Klick-Automatik für Treiberdownloads, die etwa im Hintergrund vollautomatisch alte Treiber erkennt, neue downloadet und anschließend installiert. Diese Funktion bleibt der Pro-Version vorbehalten. Hier können Sie außerdem Treiberbackups anlegen und so notfalls ein Rollback durchführen. 
    
    
                      </p>
                      <h4>Computerbild</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></dt>
                    <dd>
                      <h3>Nutzerbewertung</h3>
                      <p>          
          Ich benutze IObit-Programme seit Jahren mit großer Wirkung! Aus diesem Grund bleibe ich bei IObit-Produkten. Ich habe in der Vergangenheit Laptops und Handys (Android) mit diesen gewartet und repariert und belasse sie immer mit installierten IObit-Produkten. Ich fordere sie regelmäßig zum Scannen auf, und sie teilen mir mit, wann der Laptop/ Computer / das Handy automatisch repariert und beschleunigt werden. :) Ich empfehle das Deinstallationsprogramm.      
                      </p>
                      <h4>Jeff A Watts</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/peoplethree.png')?>" alt="Peter Stoffers"></dt>
                    <dd>
                      <h3>Nutzerbewertung</h3>
                      <p>        
        Vor einigen Jahren machte mich jemand auf den IObit Malware Fighter aufmerksam. Anfangs war ich skeptisch, aber nach der Installation wurde es mein lieblings Anti-Malware Programm. Es lässt sich sehr einfach bedienen. Im Laufe der Jahre hat es bereits verschiedene Bedrohungen erkannt und entfernt. Durch das Zusammenspiel mit anderen IObit Programmen, wie beispielsweise dem ASC, habe ich einen guten PC-Schutz. Diese Programme werde ich nun all meinen Freunden und meiner Familie empfehlen.
      
                      </p>
                      <h4>Peter Stoffers</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/Software.png')?>" alt=""></dt>
                    <dd>
                      <h3>Medienbewertung</h3>
                      <p>        
            Das Programm verfügt über zwei Antiviren-Maschinen von IObit und Bitdefender und scheint wirksam gegen Malware, die nicht von anderen ähnlichen Tools erkannt werden können. Und es kann zusammen mit Ihren Antivirenprogrammen arbeiten. Es kann eine breite Reihe von Spyware, Ransomware, Adware, Trojaner, Würmer, Keylogger und Bots erkennen.
          
                      </p>
                      <h4>Software.Informer</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/peoplefour.png')?>" alt="Jim Parten"></dt>
                    <dd>
                      <h3>Nutzerbewertung</h3>
                      <p>
        
        „Ich bin mit Smart Defrag sehr zufrieden. Es ist jedes Mal wie Magie. Ich muss nur das Programm laufen lassen und schon ist alles sauber. Ich bin zu 100% zufrieden. Nicht nur mit dem Programm, sondern auch mit den schnellen Antworten, wenn ich Hilfe bei Problemen benötige. Das schätze ich sehr.“  
      
                      </p>
                      <h4>Jim Parten</h4>
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
                  <h3>RISIKOFREI ausprobieren - 60 Tage Geld-zurück Garantie</h3>
                  <p>Wir sind zuversichtlich, dass die PRO-Edition die Leistung und Sicherheit Ihres PCs zu einem erschwinglichen Preis maximiert!</p>
                </dd>
              </dl>
              <dl class="last">
                <dt><h3>Wir akzeptieren</h3></dt>
                <dd><img src="<?php echo getStaticUrl('images/payments.png')?>"></dd>
              </dl>
            </div>
            <div class="note">
            <p>Hinweis：</p>
            <p>*. Daten können sich system- oder computerabhängig ändern.</p>
            <p>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</p>
          </div>
          <div class="copyright">Copyright ©2005 - 2021 IObit. Alle Rechte vorbehalten</div>
          </div>
        </div>
      </div>
      <div class="g-float">
        <div class="cake"></div>
        <div class="off-list">
          <div class="off-item active">
            <div class="num"><i></i>90% RABATT</div>
            <div class="name">Bestes Paket</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>80% RABATT</div>
            <div class="name">Beliebte Pakete</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>70% RABATT</div>
            <div class="name">Einzelprodukte</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>

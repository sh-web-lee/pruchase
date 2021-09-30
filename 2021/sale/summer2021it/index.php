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
    <title>Offerta estate, fino al 90% di sconto su tutti prodotti - IObit</title>
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
            <a href="https://www.iobit.com/it/index.php" target="_blank" class="logo"><img src="<?php echo getStaticUrl('images/logo.png')?>" alt="logo"></a>
            <div class="banner-title">
              <div class="small">SALDI ESTATE!</div>
              <div class="big">Sconti fino al <i></i> su tutti i prodotti IObit, prezzi più bassi dell’anno!</div>
            </div>
            <div class="m-product">
              <div id="time" class="time-box">
                Scade tra: <span class="hour">00</span> o
                <span class="minute">00</span> m
                <span class="second">00</span> s
              </div>
              <h3 id="bannerTitle" class="title"><i></i>Super Pacchetto</h3>
              <ul>
                <li>
                  <div class="name"><b></b>Advanced SystemCare PRO <i>(1 Anno/ 3 PC)</i></div>
                  <div class="price">49,99€</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Uninstaller PRO <i>(1 Anno/ 3 PC)</i></div>
                  <div class="price">39,99€</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Malware Fighter PRO <i>(1 Anno/ 3 PC)</i></div>
                  <div class="price">59,95€</div>
                </li>
                <li>
                  <div class="name"><b></b>Smart Defrag PRO <i>(1 Anno/ 1 PC)</i></div>
                  <div class="price">39,99€</div>
                </li>
                <li>
                  <div class="name"><b></b>Protected Folder <i>(1 Anno/ 1 PC)</i></div>
                  <div class="price">39,95€</div>
                </li>
              </ul>
              <div class="m-price">
                <div class="price">
                  <div class="new">
                    24,99<i>€</i>
                  </div>
                  <div class="old">229,87€</div>
                  <div id="bannerTag" class="tag">-90<i>%</i></div>
                </div>
                <a id="bannerBtn" class="btn" href="https://www.iobit.com/buy.php?product=it-asciuimf3pcsdpf1pc2499&ref=it_asciuimf3pcsdpf1pc2499purchasesummer2021<?= $refStr; ?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asciuimf3pcsdpf1pc2499-it')">Acquista Ora</a>
              </div>
              <div id="tip" class="tip">Pacchetto esaurito, ti preghiamo di scegliere altri prodotti.</div>
            </div>
          </div>
        </div>
        <div class="content">
           <!-- packs -->
          <div class="pack-cont">
            <h3><i>80</i>%  DI SCONTO - Pacchetti di ottimizzazione e protezione del PC esclusivi per te!</h3>
            <div class="pack-list">
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack01.png')?>" alt="pack01"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Pulisce, velocizza e protegge il tuo PC.</li>
                      <li><i></i>Disinstalla programmi e plugin per liberare spazio.</li>
                      <li><i></i>Massimizza la prestazione del tuo disco rigido.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">18,99<i>€</i></div>
                    <div class="old">129,97€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=it-asciusd3pc1899&ref=it_asciusd3pc1899purchasesummer2021<?= $refStr; ?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asciusd3pc1899-it')">Acquista Ora</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack02.png')?>" alt="pack02"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Protezione completa contro 209 milioni di minacce.</li>
                      <li><i></i>Disinstalla programmi e plugin per liberare spazio.</li>
                      <li><i></i>Protegge dati, cartelle e file importanti con una sola password.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">20,99<i>€</i></div>
                    <div class="old">139,89€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=it-imfiu3pcpf2099&ref=it_imfiu3pcpf2099purchasesummer2021<?= $refStr; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'summerbuy', 'buy', 'imfiu3pcpf2099-it')">Acquista Ora</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack03.png')?>" alt="pack03"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Mantiene sempre aggiornati i tuoi driver.</li>
                      <li><i></i>Massimizza la prestazione del tuo disco rigido.</li>
                      <li><i></i>Protegge dati, cartelle e file importanti con una sola password.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">24,99<i>€</i></div>
                    <div class="old">154,79€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=it-dbsd3pcpf2499&ref=it_dbsd3pcpf2499purchasesummer2021<?= $refStr; ?>&refs=it_purchase_db" onclick="ga('send', 'event', 'summerbuy', 'buy', 'dbsd3pcpf2499-it')">Acquista Ora</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack04.png')?>" alt="pack04"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Pulisce, velocizza e protegge il tuo PC.</li>
                      <li><i></i>Protezione completa contro 209 milioni di minacce.</li>
                      <li><i></i>Aggiorna i software in modo semplice e veloce.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">19,99<i>€</i></div>
                    <div class="old">149,93€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=it-ascimfisu3pc1999&ref=it_ascimfisu1999purchasesummer2021<?= $refStr; ?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'ascimfissu3pc1999-it')">Acquista Ora</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- product -->
          <div class="product-cont">
            <h3>Oppure sconti fino al <i>70</i>% su tutti i prodotti per soddisfare le tue esigenze quotidiane</h3>
            <div class="product-list">
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product01.png')?>" alt="product01">
                </div>
                <div class="info">
                  <div class="title">Advanced Systemcare PRO<i style="font-weight: 500;"> (1 Anno / 3 PC)</i></div>
                  <div class="desc">Il miglior programma per l’ottimizzazione del PC a cui puoi rivolgerti. Fa funzionare il tuo vecchio PC come uno nuovo.</div>
                  <div class="price">
                    <div class="new">17,99€</div>
                    <div class="old">49,99€</div>
                    <div class="tag">-64%</div>
                  </div>
                  <a href="https://www.iobit.com/buy.php?product=it-asc3pc1799&ref=it_asc3pc1799purchasesummer2021<?= $refStr; ?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asc3pc1799-it')" class="btn">Acquista Ora</a>
                </div>
              </div>
              <div class="product-item product-item-second mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product02.png')?>" alt="product02">
                </div>
                <div class="info">
                  <div class="title">Driver Booster PRO<i style="font-weight: 500;"> (1 Anno / 3 PC)</i></div>
                  <div class="desc">Il miglior programma di aggiornamento driver per mantenere sempre aggiornati i tuoi driver e risolvere i problemi del dispositivo grazie a un database con oltre 4.500.000 driver.</div>
                  <div class="price">
                    <div class="new">23,99€</div>
                    <div class="old">74,85€</div>
                    <div class="tag">-67%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=it-db3pc2399&ref=it_db3pc2399purchasesummer2021<?= $refStr; ?>&refs=it_purchase_db" onclick="ga('send', 'event', 'summerbuy', 'buy', 'db3pc2399-it')">Acquista Ora</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product03.png')?>" alt="product03">
                </div>
                <div class="info">
                  <div class="title">IObit Uninstaller PRO<i style="font-weight: 500;"> (1 Anno / 3 PC)</i></div>
                  <div class="desc">Un potente programma di disinstallazione per eliminare programmi e plugin in modo facile e veloce.</div>
                  <div class="price">
                    <div class="new">16,99€</div>
                    <div class="old">39,99€</div>
                    <div class="tag">-57%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=it-iu3pc1699&ref=it_iu3pc1699purchasesummer2021<?= $refStr; ?>&refs=it_purchase_iu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'iu3pc1699-it')">Acquista Ora</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product04.png')?>" alt="product04">
                </div>
                <div class="info">
                  <div class="title">IObit Malware Fighter PRO<i style="font-weight: 500;"> (1 Anno / 3 PC)</i></div>
                  <div class="desc">Proteggi il tuo PC da virus, malware e ransomware con motori a tripla protezione.</div>
                  <div class="price">
                    <div class="new">17,99€</div>
                    <div class="old">59,95€</div>
                    <div class="tag">-70%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=it-imf3pc1799&ref=it_imf3pc1799purchasesummer2021<?= $refStr; ?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'summerbuy', 'buy', 'imf3pc1799-it')">Acquista Ora</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product05.png')?>" alt="product05">
                </div>
                <div class="info">
                  <div class="title">IObit Software Updater PRO<i style="font-weight: 500;"> (1 Anno / 3 PC)</i></div>
                  <div class="desc">Programma che aiuta gli utenti a restare aggiornati in modo semplice e con zero sforzi!</div>
                  <div class="price">
                    <div class="new">12,99€</div>
                    <div class="old">39,99€</div>
                    <div class="tag">-67%</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=it-isu3pc1299&ref=it_isu3pc1299purchasesummer2021<?= $refStr; ?>&refs=it_purchase_isu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'isu3pc1299-it')">Acquista Ora</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product06.png')?>" alt="product06">
                </div>
                <div class="info">
                  <div class="title">Smart Defrag PRO<i style="font-weight: 500;"> (1 Anno / 3 PC)</i></div>
                  <div class="desc">Gestisci e deframmenta lo spazio su disco per migliorare le prestazioni del PC.</div>
                  <div class="price">
                    <div class="new">15,99€</div>
                    <div class="old">39,99€</div>
                    <div class="tag">-60%</div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=it-sd3pc1599&ref=it_sd3pc1599purchasesummer2021<?= $refStr; ?>&refs=it_purchase_sd" onclick="ga('send', 'event', 'summerbuy', 'buy', 'sd3pc1599-it')">Acquista Ora</a>
                </div>
              </div>
            </div>
          </div>
          <!-- award -->
          <div class="award-cont">
            <h3>Raccomandato anche da</h3>
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
                      <h3>Recensione media</h3>
                      <p>
                        Advanced SystemCare punta a rimediare qualsiasi problema affligga il tuo computer!
                      </p>
                      <h4>Cnet</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/brendon-rourke.png')?>" alt=""></dt>
                    <dd>
                      <h3>Recensione utente</h3>
                      <p>
                        Uso ASC ormai da anni. Di recente ho testato l'ultima versione 14 ed è di gran lunga la versione più completa fino ad oggi. IObit continua a migliorare i propri prodotti e tecnologie con più opzioni e una navigazione più semplice che aiuta a risolvere molti problemi.
                      </p>
                      <h4>Brendon O'Rourke</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></dt>
                    <dd>
                      <h3>Recensione utente</h3>
                      <p>
                        Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile
                      </p>
                      <h4>Adam Backlund</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></dt>
                    <dd>
                      <h3>Recensione utente</h3>
                      <p>
                        Ho usato i programmi IObit per anni con grandi risultati! Ed è per questo che resto con i prodotti IObit. In passato, ho riparato e aggiustato laptop e cellulari (Android) a parenti ed amici, lascio sempre i prodotti IObit installati e dico loro di lasciar fare tutto ai programmi che sistemeranno e velocizzeranno automaticamente il loro laptop / computer / cellulare! :) Consiglio vivamente Iobit Uninstaller (e l'ultima versione beta) in quanto è un programma affidabile e sicuro che disinstalla i programmi testardi! La cosa più importante è rimuovere il codice "nascosto" che il programmatore voleva lasciare, perché è quello che consente la re-installazione degli annunci!
                      </p>
                      <h4>Jeff A Watts</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/fabio-tursi.png')?>" alt="Fabio Tursi"></dt>
                    <dd>
                      <h3>Recensione utente</h3>
                      <p>
                        Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema. Grazie alla potenza del suo motore, e all’enorme database, è un’applicazione che non dovrebbe mancare in nessun computer.
                      </p>
                      <h4>Fabio Tursi</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/Software.png')?>" alt=""></dt>
                    <dd>
                      <h3>Recensione media</h3>
                      <p>
                        IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojan, worm, keylogger e bot. Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti. Un altro vantaggio è che funziona contemporaneamente con il programma standard AV. IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojans, worms, keyloggers e bots.
                      </p>
                      <h4>Software.Informer</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></dt>
                    <dd>
                      <h3>Recensione utente</h3>
                      <p>
                        IObit Malware Fighter è uno strumento grande, è in grado non solo di scansionare i file e le chiavette USB, proteggerti anche contro le minacce online e offline. Con i prodotti di IObit, ho ricevuto i grandi risultati e mi hanno aiutato tanto per proteggere il mio computer. Raccomando IObit e tutti i suoi prodotti a ciascuno che stia cercando una protezione e ottimizzazione del computer per rendere la tua vita più facile e semplice.
                      </p>
                      <h4>Adam Cullen</h4>
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
                  <h3>Provalo SENZA RISCHI - con la nostra garanzia di rimborso di 60 giorni</h3>
                  <p>Siamo fiduciosi che l'attivazione della versione PRO massimizzerà le prestazioni e la sicurezza del tuo PC a un prezzo conveniente!</p>
                </dd>
              </dl>
              <dl class="last">
                <dt><h3>Accettiamo</h3></dt>
                <dd><img src="<?php echo getStaticUrl('images/payment.png')?>"></dd>
              </dl>
            </div>
            <div class="note">
            <p>Note:</p>
            <p>* I dati potrebbero variare in base al sistema o computer.</p>
            <p>* Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.</p>
          </div>
          <div class="copyright">Copyright ©2005 - 2021 IObit. Tutti i diritti riservati</div>
          </div>
        </div>
      </div>
      <div class="g-float">
        <div class="cake"></div>
        <div class="off-list">
          <div id="offItem90" class="off-item active">
            <div class="num"><i></i>90% DI SCONTO</div>
            <div class="name">Super Pacchetto</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>80% DI SCONTO</div>
            <div class="name">Pacchetti ottimizzazione</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>70% DI SCONTO</div>
            <div class="name">Prodotti di punta</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>

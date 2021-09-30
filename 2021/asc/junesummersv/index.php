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
    <title>Sommarerbjudande, upp till 88% rabatt på alla produkter - IObit</title>
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
            <a href="https://www.iobit.com/sv/index.php" target="_blank" class="logo"><img src="<?php echo getStaticUrl('images/logo.png')?>" alt="logo"></a>
            <div class="banner-title">
              <div class="small">SALDI ESTATE!</div>
              <div class="big">Rabatter upp till <i></i> på alla IObit-produkter, lägsta pris på året!</div>
            </div>
            <div class="m-product">
              <div id="time" class="time-box">
              Upphör att gälla: <span class="hour">00</span> M
                <span class="minute">00</span> S
                <span class="second">00</span> Ms
              </div>
              <h3 id="bannerTitle" class="title"><i></i>Superpaket</h3>
              <ul>
                <li>
                  <div class="name"><b></b>Advanced SystemCare PRO <i>(1 År/ 3 PC)</i></div>
                  <div class="price">599 kr</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Uninstaller PRO <i>(1 År/ 3 PC)</i></div>
                  <div class="price">499 kr</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Malware Fighter PRO <i>(1 År/ 3 PC)</i></div>
                  <div class="price">699 kr</div>
                </li>
                <li>
                  <div class="name"><b></b>Smart Defrag PRO <i>(1 År/ 1 PC)</i></div>
                  <div class="price">459 kr</div>
                </li>
                <li>
                  <div class="name"><b></b>Protected Folder <i>(1 År/ 1 PC)</i></div>
                  <div class="price">499 kr</div>
                </li>
              </ul>
              <div class="m-price">
                <div class="price">
                  <div class="new">
                  329<i> kr</i>
                  </div>
                  <div class="old">2 755kr</div>
                  <div id="bannerTag" class="tag">88<i>%OFF</i></div>
                </div>
                <a id="bannerBtn" class="btn" href="https://www.iobit.com/buy.php?product=sv-asc14iuimf3pcsdpf329&ref=sv_asc14iuimf3pcsdpf329summer2106<?= $refStr; ?>&refs=sv_summerpurchase_asciuimfsdpf" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asc14iuimf3pcsdpfsummer2106-sv')">Köp nu</a>
              </div>
              <div id="tip" class="tip">Paketet slut, välj andra produkter.</div>
            </div>
          </div>
        </div>
        <div class="content">
           <!-- packs -->
          <div class="pack-cont">
            <h3><i>80</i>% RABATT – PC optimering och skydds paket är för dig också</h3>
            <div class="pack-list">
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/n-pack01.png')?>" alt="pack01"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Det rengör, påskyndar och skyddar din dator.</li>
                      <li><i></i>Ta bort program och plugins för att frigöra utrymme.</li>
                      <li><i></i>Maximera hårddiskens prestanda.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">259 <i>kr</i></div>
                    <div class="old">1 277 kr</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=sv-asc143pciusd259&ref=sv_asc143pciusd259summer2106<?= $refStr; ?>&refs=sv_summerpurchase_asciusd" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asc143pciusdsummer2106-sv')">Köp nu</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item pack2">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/n-pack02.png')?>" alt="pack02"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Fullständigt skydd mot 209 miljoner hot.</li>
                      <li><i></i>Ta bort program och plugins för att frigöra utrymme.</li>
                      <li><i></i>Skydda dina viktiga data, mappar och filer med bara ett lösenord.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">309<i> kr</i></div>
                    <div class="old">1 597 kr</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=sv-imf83pciupf309&ref=sv_imf83pciupf309summer2106<?= $refStr; ?>&refs=sv_summerpurchase_imfiupf" onclick="ga('send', 'event', 'summerbuy', 'buy', 'imf83pciupfsummer2106-sv')">Köp nu</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item pack3">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/n-pack03.png')?>" alt="pack03"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Håll alltid dina drivrutiner uppdaterade.</li>
                      <li><i></i>Maximera hårddisks prestanda.</li>
                      <li><i></i>Skydda dina viktiga data, mappar och filer med bara ett lösenord.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">299<i> kr</i></div>
                    <div class="old">1 857 kr</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=sv-db83pcpfsd299&ref=sv_db83pcpfsd299summer2106<?= $refStr; ?>&refs=sv_summerpurchase_dbpfsd" onclick="ga('send', 'event', 'summerbuy', 'buy', 'db83pcpfsdsummer2106-sv')">Köp nu</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/n-pack04.png')?>" alt="pack04"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Det rengör, påskyndar och skyddar din dator.</li>
                      <li><i></i>Fullständigt skydd mot 209 miljoner hot.</li>
                      <li><i></i>Uppdatera programvara enkelt</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">279<i> kr</i></div>
                    <div class="old">1 497 kr</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=sv-asc14imfisu1pc279&ref=sv_asc14imfisu1pc279summer2106<?= $refStr; ?>&refs=sv_summerpurchase_ascimfisu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asc14imfisu1pcsummer2106-sv')">Köp nu</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- product -->
          <div class="product-cont">
            <h3>Eller rabatter på upp till <i>65%</i> för produkter som uppfyller dina dagliga behov</h3>
            <div class="product-list">
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product01.png')?>" alt="product01">
                </div>
                <div class="info">
                  <div class="title">Advanced Systemcare PRO<i>(1 År/ 3 PC)</i></div>
                  <div class="desc">Det bästa optimeringsprogrammet för dator som du kan vända dig till. Låt din gamla dator se ut som ny igen.</div>
                  <div class="price">
                    <div class="new">278 kr</div>
                    <div class="old">599 kr</div>
                    <div class="tag">54%<i>OFF</i></div>
                  </div>
                  <a href="https://www.iobit.com/buy.php?product=sv-asc143pc278&ref=sv_asc143pc278summer2106<?= $refStr; ?>&refs=sv_summerpurchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asc143pcsummer2106-sv')" class="btn">Köp nu</a>
                </div>
              </div>
              <div class="product-item product-item-second mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product02.png')?>" alt="product02">
                </div>
                <div class="info">
                  <div class="title">Driver Booster PRO<i>(1 År/ 3 PC)</i></div>
                  <div class="desc">Den bästa drivrutinsuppdateraren för att uppdatera drivrutiner och åtgärda enhetsproblem med databas med 4 500 000+ drivrutiner.</div>
                  <div class="price">
                    <div class="new">314 kr</div>
                    <div class="old">899 kr</div>
                    <div class="tag">65%<i>OFF</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=sv-db83pc314&ref=sv_db83pc314summer2106<?= $refStr; ?>&refs=sv_summerpurchase_db" onclick="ga('send', 'event', 'summerbuy', 'buy', 'db83pcsummer2106-sv')">Köp nu</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product03.png')?>" alt="product03">
                </div>
                <div class="info">
                  <div class="title">IObit Uninstaller PRO<i>(1 År/ 3 PC)</i></div>
                  <div class="desc">En kraftfull avinstallerare behövs för att avinstallera program och plugins enkelt.</div>
                  <div class="price">
                    <div class="new">224 kr</div>
                    <div class="old">499 kr</div>
                    <div class="tag">55%<i>OFF</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=sv-iu103pc224&ref=sv_iu103pc224summer2106<?= $refStr; ?>&refs=sv_summerpurchase_iu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'iu103pcsummer2106-sv')">Köp nu</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product04.png')?>" alt="product04">
                </div>
                <div class="info">
                  <div class="title">IObit Malware Fighter PRO<i>(1 År/ 1 PC)</i></div>
                  <div class="desc">Skydda din dator från virus, skadlig kod och ransomware med trippelskyddsmotorer.</div>
                  <div class="price">
                    <div class="new">224 kr</div>
                    <div class="old">499 kr</div>
                    <div class="tag">55%<i>OFF</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=sv-imf81pc224&ref=sv_imf81pc224summer2106<?= $refStr; ?>&refs=sv_summerpurchase_imf" onclick="ga('send', 'event', 'summerbuy', 'buy', 'imf81pcsummer2106-sv')">Köp nu</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product05.png')?>" alt="product05">
                </div>
                <div class="info">
                  <div class="title">IObit Software Updater PRO<i>(1 År/ 3 PC)</i></div>
                  <div class="desc">Program som hjälper användare att hålla sin dator uppdaterade enkelt, utan ansträngning!</div>
                  <div class="price">
                    <div class="new">199 kr</div>
                    <div class="old">329 kr</div>
                    <div class="tag">40%<i>OFF</i></i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=sv-isu43pc199&ref=sv_isu43pc199summer2106<?= $refStr; ?>&refs=sv_summerpurchase_isu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'isu43pcsummer2106-sv')">Köp nu</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product06.png')?>" alt="product06">
                </div>
                <div class="info">
                  <div class="title">Smart Defrag PRO<i>(1 År/ 3 PC)</i></div>
                  <div class="desc">Hantera och defragmentera diskutrymme för att förbättra dators prestanda.</div>
                  <div class="price">
                    <div class="new">278 kr</div>
                    <div class="old">559 kr</div>
                    <div class="tag">50%<i>OFF</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=sv-sd63pc278&ref=sv_sd63pc278summer2106<?= $refStr; ?>&refs=sv_summerpurchase_sd" onclick="ga('send', 'event', 'summerbuy', 'buy', 'sd63pcsummer2106-sv')">Köp nu</a>
                </div>
              </div>
            </div>
          </div>

          <!-- probleme start -->
          <div class="probleme">
            <div class="wrapper clearfix">
              <h2>Internationella utmärkelser och recensioner</h2>
              <p>Gör våra kunder nöjda var de än befinner sig</p>
            </div>
          </div>
          <!-- probleme end -->

          <!-- awards -->
          <div class="awards wrapper">
            <img src="<?php echo getStaticUrl('images/n-awards.png') ?>" alt="">
          </div>
          <!-- end awards -->

          <div class="review wrapper">
            <div class="content">
              <span class="next"></span>
              <span class="prev"></span>
              <div class="message">
                <div class="roll">
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""></dt>
                    <dd>
                      <h3>I media</h3>
                      <p>"Det finns inget värre än en dator som kör fast så mycket att det hindrar din förmåga att arbeta eller spela spel. Advanced Systemcares syfte är att råda bot på allt som plågar din dator, inte bara städa upp skräpfiler, malware och ogiltiga registerposter utan också ge din dator ett rejält uppsving för en optimal datorupplevelse."</p>
                      <h4>Cnet</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people1.png')?>" alt=""></dt>
                    <dd>
                      <h3>Användaromdömen</h3>
                      <p>"Jag, precis som många andra, började använda gratisversionen och köpte så småningom den fullständiga versionen. Programmet har arbetat för att hålla min dator ren och buggfri i flera år och det har ännu inte svikit mig. Jag kontaktade Advanced SystemCare nyligen och de svarade inom en dag eller två med allt jag behövde veta. I mina ögon väger support mycket i beslutsbefattandet om jag ska fortsätta använda en produkt. ASC segrar i både produkt och support."</p>
                      <h4>Bruce Ramsay</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></dt>
                    <dd>
                      <h3>Användaromdömen</h3>
                      <p>"Driver booster är en fantastisk applikation. För alla som har en hel del applikationer och enheter, och som inte har tid att manuellt uppdatera dem, rekommenderar jag starkt Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt."</p>
                      <h4>Adam Backlund</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people4.png')?>" alt="Jeff A Watts"></dt>
                    <dd>
                      <h3>Användaromdömen</h3>
                      <p>"Vi brukade använda upp till ett dussin olika program för att hålla våra maskiner i trim och hålla skurkarna borta. Det tog timmar varje vecka för att upprätthålla säkerhet och prestanda. Nu, med IObit Malware Fighter PRO och Advanced System Care PRO, är allt på ett ställe och det tar oss bara några minuter varje vecka för att göra samma jobb, men med mer förtroende. Vi har inte haft ett enda problem sedan vi började använda era produkter." </p>
                      <h4>Bob Bassett</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people5.png')?>" alt="Fabio Tursi"></dt>
                    <dd>
                      <h3>Användaromdömen</h3>
                      <p>"IObit Uninstaller är ett av de bästa programmen. Lätt att arbeta med, mycket snabb rengöring och djuprengöring. Den snabba rengöringen av plug-ins är också mycket bekväm. Stor sökning efter dubbletter som inte används mycket. Tack för er gästfrihet ni visat mig och min dator."</p>
                      <h4>Áda Görtler</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/people6.png')?>" alt=""></dt>
                    <dd>
                      <h3>Användaromdömen</h3>
                      <p>"Jag kan inte vara mer nöjd med Smart Defrag. Det fungerar klockrent varenda gång. Allt jag behöver göra är att köra programmet och allt är rent. Jag är 100% nöjd, inte bara med programmet, men även med det snabba svar jag fick när jag behövde råd om hur man ska hantera de problem som jag har haft. Det uppskattar jag väldigt mycket."</p>
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
                  <h3>Prova det RISKFRI - med vår 60-dagars-pengarna-tillbaka-garanti</h3>
                  <p>Vi är självsäkra att PRO-utgåvan kommer att maximera din dators prestanda och säkerhet till ett överkomligt pris!</p>
                </dd>
              </dl>
              <dl class="last">
                <dt><h3>Vi antar</h3></dt>
                <dd><img src="<?php echo getStaticUrl('images/payment.png')?>"></dd>
              </dl>
            </div>
            <div class="note">
            <p>Notera:</p>
            <p>* Data kan variera beroende på system eller dator.</p>
            <p>* Dessa kampanjer kan ändras utan föregående meddelande, regelbundet och enligt vårt eget gottfinnande.</p>
          </div>
          <div class="copyright">Copyright © 2005 - 2021 IObit. Alla rättigheter förbehållna</div>
          </div>
        </div>
      </div>
      <div class="g-float">
        <div class="cake"></div>
        <div class="off-list">
          <div id="offItem90" class="off-item active">
            <div class="num"><i></i>88% RABATT</div>
            <div class="name">Superpaket</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>80% RABATT</div>
            <div class="name">Optimeringspaket</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>65% RABATT</div>
            <div class="name">flaggskeppsprodukt</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>

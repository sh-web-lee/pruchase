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
    <title>SOLDES D'ÉTÉ 2021 : Jusqu’à -90% sur tous les produits IObit</title>
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
              <div class="small">SOLDES D'ÉTÉ</div>
              <div class="big">Jusqu’à <i></i> sur tous les produits IObit <br />Les plus bas prix de l'année !</div>
            </div>
            <div class="m-product">
              <div id="time" class="time-box">
              SOLDES : <span class="hour">00</span> H
                <span class="minute">00</span> M
                <span class="second">00</span> S
              </div>
              <h3 id="bannerTitle" class="title"><i></i>Offres Waaoh !</h3>
              <ul>
                <li>
                  <div class="name"><b></b>Advanced SystemCare PRO <i>(1 An/ 3 PC)</i></div>
                  <div class="price">49,99€</div>
                </li>
                <li>
                  <div class="name"><b></b>Driver Booster PRO <i>(1 An/ 3 PC)</i></div>
                  <div class="price">74.85€</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Uninstaller PRO <i>(1 An/ 3 PC)</i></div>
                  <div class="price">39.99€</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Malware Fighter PRO <i>(1 An/ 3 PC)</i></div>
                  <div class="price">79,99€</div>
                </li>
                <li>
                  <div class="name"><b></b>IObit Software Updater PRO <i>(1 An/ 3 PC)</i></div>
                  <div class="price">29.99€</div>
                </li>
              </ul>
              <div class="m-price">
                <div class="price">
                  <div class="new">
                    26,99<i>€</i>
                  </div>
                  <div class="old">274.81€</div>
                  <div id="bannerTag" class="tag">90<i>%OFF</i></div>
                </div>
                <a id="bannerBtn" class="btn" href="http://www.iobit.com/buy.php?product=fr-ascdbiuimfisu3pc2699&ref=fr_ascdbiuimfisu3pc2699purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'ascdbiuimfisu3pc2699-fr')">JE CRAQUE</a>
              </div>
              <div id="tip" class="tip">Pacchetto esaurito, ti preghiamo di scegliere altri prodotti.</div>
            </div>
          </div>
        </div>
        <div class="content">
           <!-- packs -->
          <div class="pack-cont">
            <h3><i>85%</i>  de réduction - Profitez des soldes d’été pour optimiser et protéger votre PC</h3>
            <div class="pack-list">
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/n-pack01.png')?>" alt="pack01"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Nettoyez, accélérez et protégez votre PC</li>
                      <li><i></i>Désinstallez les logiciels inutiles & libérer de l'espace disque</li>
                      <li><i></i>Automatisez les mises à jour de tous vos logiciels</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">17.99<i>€</i></div>
                    <div class="old">119,97€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="http://www.iobit.com/buy.php?product=fr-asciuisu3pc1799&ref=fr_asciuisu3pc1799purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asciuisu3pc1799-fr')">J’EN PROFITE</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack02.png')?>" alt="pack02"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Protection avancée contre 209 millions de menaces</li>
                      <li><i></i>Désinstallez les logiciels inutiles & libérer de l'espace disque</li>
                      <li><i></i>Sécurisez vos dossiers et fichiers par un mot de passe</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">21,99<i>€</i></div>
                    <div class="old">159.97€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="http://www.iobit.com/buy.php?product=fr-imfiu3pcpf2199&ref=fr_imfiu3pcpf2199purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'summerbuy', 'buy', 'imfiu3pcpf2199-fr')">J’EN PROFITE</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/n-pack03.png')?>" alt="pack03"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Mettez et gardez automatiquement à jour tous vos pilotes</li>
                      <li><i></i>Automatisez les mises à jour de tous vos logiciels</li>
                      <li><i></i>Sécurisez vos dossiers et fichiers par un mot de passe</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">24,99<i>€</i></div>
                    <div class="old">144.83€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="http://www.iobit.com/buy.php?product=fr-dbisu3pcpf2499&ref=fr_dbisu3pcpf2499purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'summerbuy', 'buy', 'dbisu3pcpf2499-fr')">J’EN PROFITE</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src="<?php echo getStaticUrl('images/pack04.png')?>" alt="pack04"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Nettoyez, accélérez et protégez votre PC</li>
                      <li><i></i>Protection avancée contre 209 millions de menaces</li>
                      <li><i></i>Automatisez les mises à jour de tous vos logiciels</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new">21,99<i>€</i></div>
                    <div class="old">159.97€</div>
                  </dd>
                  <dd>
                    <a class="btn" href="http://www.iobit.com/buy.php?product=fr-ascimfisu3pc2199&ref=fr_ascimfisu3pc2199purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'ascimfisu3pc2199-fr')">J’EN PROFITE</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- product -->
          <div class="product-cont">
            <h3>Jusqu’à <i>-70%</i> de réduction : découvrir des prix imbattables sur une sélection de logiciels</h3>
            <div class="product-list">
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product01.png')?>" alt="product01">
                </div>
                <div class="info">
                  <div class="title">Advanced Systemcare PRO<i style="font-weight: 500;"></i></div>
                  <div class="desc">Optimiseur de performances avancé pour PC, il accélère, protège et redonne une seconde jeunesse à votre ordinateur</div>
                  <div class="price">
                    <div class="new">19,99€</div>
                    <div class="old">49,99€</div>
                    <div class="tag">-60%</div>
                  </div>
                  <a href="http://www.iobit.com/buy.php?product=fr-asc3pc1999&ref=fr_asc3pc1999purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'summerbuy', 'buy', 'asc3pc1999-fr')" class="btn">J’EN PROFITE</a>
                </div>
              </div>
              <div class="product-item product-item-second mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product02.png')?>" alt="product02">
                </div>
                <div class="info">
                  <div class="title">Driver Booster PRO<i style="font-weight: 500;"></i></div>
                  <div class="desc">Logiciel professionnel de mise à jour de pilotes avec une base de données de plus de 4,5 millions de pilotes de périphériques</div>
                  <div class="price">
                    <div class="new">24,99€</div>
                    <div class="old">74,85€</div>
                    <div class="tag">-65%</div>
                  </div>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=fr-db3pc2499&ref=fr_db3pc2499purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'summerbuy', 'buy', 'db3pc2499-fr')">J’EN PROFITE</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product03.png')?>" alt="product03">
                </div>
                <div class="info">
                  <div class="title">IObit Uninstaller PRO<i style="font-weight: 500;"></i></div>
                  <div class="desc">Meilleure solution pour désinstaller proprement, facilement et en profondeur les logiciels & plug-ins indésirables sous Windows</div>
                  <div class="price">
                    <div class="new">15,99€</div>
                    <div class="old">39,99€</div>
                    <div class="tag">-60%</div>
                  </div>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=fr-iu3pc1599&ref=fr_iu3pc1599purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'iu3pc1599-fr')">J’EN PROFITE</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product04.png')?>" alt="product04">
                </div>
                <div class="info">
                  <div class="title">IObit Malware Fighter PRO<i style="font-weight: 500;"></i></div>
                  <div class="desc">Protégez votre PC contre les virus, les logiciels malveillants et les rançongiciels à tous les niveaux</div>
                  <div class="price">
                    <div class="new">21,99€</div>
                    <div class="old">79.99€</div>
                    <div class="tag">-70%</div>
                  </div>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=fr-imf3pc2199&ref=fr_imf3pc2199purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'summerbuy', 'buy', 'imf3pc2199-fr')">J’EN PROFITE</a>
                </div>
              </div>
              <div class="product-item mr">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product05.png')?>" alt="product05">
                </div>
                <div class="info">
                  <div class="title">IObit Software Updater PRO<i style="font-weight: 500;"></i></div>
                  <div class="desc">Mettez à jour tous vos logiciels en un clic, gardez vos logiciels performants et sécurisés</div>
                  <div class="price">
                    <div class="new">14,99€</div>
                    <div class="old">29,99€</div>
                    <div class="tag">-50%</i></div>
                  </div>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=fr-isu3pc1499&ref=fr_isu3pc1499purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_isu" onclick="ga('send', 'event', 'summerbuy', 'buy', 'isu3pc1499-fr')">J’EN PROFITE</a>
                </div>
              </div>
              <div class="product-item">
                <div class="img">
                  <img src="<?php echo getStaticUrl('images/product06.png')?>" alt="product06">
                </div>
                <div class="info">
                  <div class="title">Smart Defrag PRO<i style="font-weight: 500;"></i></div>
                  <div class="desc">Optimisez votre ordinateur en réalisant une défragmentation du disque dur</div>
                  <div class="price">
                    <div class="new">14,99€</div>
                    <div class="old">49,99€</div>
                    <div class="tag">-70%</div>
                  </div>
                  <a class="btn" href="http://www.iobit.com/buy.php?product=fr-sd3pc1499&ref=fr_sd3pc1499purchasesummer2021<?= $refStr; ?>&refs=fr_purchase_sd" onclick="ga('send', 'event', 'summerbuy', 'buy', 'sd3pc1499-fr')">J’EN PROFITE</a>
                </div>
              </div>
            </div>
          </div>
          <!-- award -->
          <div class="award-cont">
            <h3>Ce que disent nos utilisateurs et les experts</h3>
            <div class="award-list">
              <img src="<?php echo getStaticUrl('images/n-awards.png')?>" alt="awards">
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
                      <h3>Revue technique</h3>
                      <p>
                      Advanced SystemCare vise à remédier à tout problème affectant votre ordinateur!
                      </p>
                      <h4>Cnet</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt=""></dt>
                    <dd>
                      <h3>Avis consommateur</h3>
                      <p>Mon choix est sans aucun doute Advanced SystemCare Pro.</p>
                      <h4>Charles R Widick</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
                    <dd>
                      <h3>Avis consommateur</h3>
                      <p>Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède une interface utilisateur conviviale et facile à utiliser. 5 ETOILES bien mérités !!!</p>
                      <h4>Hishaam Salasa</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></dt>
                    <dd>
                      <h3>Avis consommateur</h3>
                      <p>Je recommande vivement ce désinstallateur en tant que programme fiable et sûr qui permet de désinstaller les programmes les plus tenaces! Plus important encore, supprimer le code "caché" que le programmeur avait l'intention de laisser, ce qui obligerait ensuite les publicités à être réinstallées! Tous les produits IObit sont sûrs et faciles à utiliser pour optimiser votre PC.</p>
                      <h4>Jeff A Watts</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten"></dt>
                    <dd>
                      <h3>Avis consommateur</h3>
                      <p>“Je suis très content de Smart Defrag. Il fonctionne toujours parfaitement sur mon ordinateur, et il me suffit d’effectuer ce programme, toutes les actions peuvent se faire automatiquement. Ce qui est intéressant avec Smart Defrag, c’est qu’il ne risque pas de me déranger pendant le processus de défragmentation. D’ailleurs, le service client est toujours très satisfaisant, je peux recevoir la réponse dans les plus bref délais lors que je rencontre des soucis. C’est la raison pour laquelle j’ai choisi Smart Defrag.”</p>
                      <h4>Jim Parten</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src="<?php echo getStaticUrl('images/Software.png')?>" alt="Software.Informer"></dt>
                    <dd>
                      <h3>Revue technique</h3>
                      <p>" Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots. "</p>
                      <h4>Software.Informer</h4>
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
                  <h3>Essayez-le SANS SOUCI - garantie de remboursement sous 60 jours</h3>
                  <p>La version PRO renforcera la sécurité de votre ordinateur et optimisera sans aucun doute ses performances à moindre coût</p>
                </dd>
              </dl>
              <dl class="last">
                <dt><h3>Moyens de paiement acceptés</h3></dt>
                <dd><img src="<?php echo getStaticUrl('images/payment.png')?>"></dd>
              </dl>
            </div>
            <div class="note">
            <p>Notes :</p>
            <p>* Les données peuvent varier selon le système ou l'ordinateur.</p>
            <p>* Ces promotions sont susceptibles d'être modifiées de temps à autre, sans préavis et à notre seule discrétion.</p>
          </div>
          <div class="copyright">Copyright ©2005 - 2021 IObit. Tous droits réservés</div>
          </div>
        </div>
      </div>
      <div class="g-float">
        <div class="cake"></div>
        <div class="off-list">
          <div id="offItem90" class="off-item active">
            <div class="num"><i></i>90% de réduction</div>
            <div class="name">Coffret Surprise</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>80% de réduction</div>
            <div class="name">Coffret Optimisation PC</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>70% de réduction</div>
            <div class="name">Produits Phares</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>

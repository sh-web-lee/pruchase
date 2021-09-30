<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(168,236);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}


$refStr = empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
$refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
$refStr .= empty($_GET['pop']) ? '' : ('-' . $_GET['pop']);
$refStr .= empty($_GET['r']) ? '' : ('-' . $_GET['r']);
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Offerta di Natale, sconti fino al 90% su IObit Advanced SystemCare PRO – IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>È arrivato il Natale!</h1>
        <h2>Ultima opportunità per aprire i nostri regali e risparmiare 135€</h2>
      </div>
      <div class="clearfix">
        <div class="offer big">
          <div class="countdown"><span>AFFRETTATI</span><b>15</b>m<b>24</b>s<b>00</b>ms</div>
          <b class="discount"><em>-</em><big>90</big><sup>%</sup></b>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
            <div class="giftbox">
              <span class="gift-bg"></span>
              <img class="iu" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
              <img class="sd" src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
              <img class="pf" src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/>
              <span class="gift-line one"></span>
              <!-- <span class="gift-line two"></span> -->
              <span class="gift-flower"></span>
            </div>
          </div> 
          <div class="tag"><span>1 anno /</span> 3 PC + 3 regali PRO</div>
          <div class="price">
            <p><strong>14,99<small>€</small></strong> <del>150€</del></p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=it-asc143pciusdpf1499&ref=it_asc143pciusdpf1499purchasexmasxe2020<?php echo $refStr;?>&refs=it_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcxmasxe2020-it');">
              Acquista ora
            </a>
            <p>Licenze valide per versioni future</p>
          </div>
        </div>
        <div class="offer">
          <b class="discount"><em>-</em><big>45</big>%</b>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
          </div>
          <div class="tag"><span>1 anno /</span> 1 PC</div>
          <div class="price">
            <p><strong>16,99<small>€</small></strong> <del>29,99€</del></p>
            <a class="buybtn empty"
               href="http://www.iobit.com/buy.php?product=it-asc141pc1699&ref=it_asc141pc1699purchasexmasxe2020<?php echo $refStr;?>&refs=it_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pcxmasxe2020-it');">
              Acquista ora
            </a>
            <p>Licenza valida per versioni future</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper clearfix">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pagamento-sicuro.png')?>" alt=""/></dt>
        <dd>Pagamento sicuro</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>Garanzia di rimborso</dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
        <dd>Servizio clienti 24/7</dd>
      </dl>
    </div>
  </div>
  <!-- service end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Perché scelgo Advanced SystemCare PRO?</h2>
      <p>Solo PRO ottimizza e pulisce il tuo PC automaticamente e in modo completo con la nuova modalità AI</p>
      <div class="feature-wrap clearfix">
        <div class="feature-screen fl">
          <div class="feature-list">
            <img src="<?php echo getStaticUrl('images/asc-screen01.png')?>" alt=""/>
          </div>
          <div class="feature-list">
            <img src="<?php echo getStaticUrl('images/asc-screen02.png')?>" alt=""/>
            <img class="feature-screen-small one" src="<?php echo getStaticUrl('images/asc-screen02-small.png')?>" alt=""/>
          </div>
          <div class="feature-list on">
            <img src="<?php echo getStaticUrl('images/asc-screen03.png')?>" alt=""/>
            <img class="feature-screen-small two" src="<?php echo getStaticUrl('images/asc-screen03-small.png')?>" alt=""/>
          </div>
          <div class="feature-list">
            <img src="<?php echo getStaticUrl('images/asc-screen04.png')?>" alt=""/>
          </div>
        </div>
        <div class="feature-tab fr">
          <dl class="one on">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""/></dt>
            <dd>
              <h3>Pulizia del registro più profonda</h3>
              <p>
                Pulisce a fondo i registri nascosti, inutili o non validi per liberare spazio sul disco e migliorare notevolmente le prestazioni del PC con la nuova modalità AI.
              </p>
            </dd>
          </dl>
          <dl class="two">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""/></dt>
            <dd>
              <h3>200% PC più veloce</h3>
              <p>
                Ottimizza il processore e la RAM e aumenta la velocità del sistema per accelerare l'avvio del PC fino al 200% più veloce.
              </p>
            </dd>
          </dl>
          <dl class="three">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""/></dt>
            <dd>
              <h3>300% Internet più rapido</h3>
              <p>
                Ottimizza le impostazioni del browser per aumentare la velocità di connessione Internet del 300% in più.
              </p>
            </dd>
          </dl>
          <dl class="four">
            <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""/></dt>
            <dd>
              <h3>Navigazione e privacy sicure</h3>
              <p>
                Elimina le tracce dei siti web visitati e la cache dei programmi, nasconde l'impronta digitale e blocca gli accessi segreti per proteggere i tuoi dati personali.
              </p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- comparisonone start -->
  <div class="comparisonone wrapper">
    <h2>Riottieni tutte le funzionalità PRO per<br> risolvere i problemi del tuo PC</h2>
    <table>
      <thead>
        <tr>
          <th class="itema"><big>Attento!</big> Al momento rischi:</th>
          <th class="itemb"><big>Invece</big> puoi godere di:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">
            <span>Risposta lenta</span> del tuo PC e lunghi tempi di attesa
          </td>
          <td class="itemb">
            Pulizia completa per un PC <span>ancora più veloce</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            Connessione internet instabile e <span>lunghi tempi di caricamento della pagina</span>
          </td>
          <td class="itemb">
            Ottimizzazione del browser per una <span>connessione internet più veloce del 300%</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            Sistema instabile che <span>si blocca</span> in continuazione
          </td>
          <td class="itemb">
            Pulizia profonda del registro per un <span>sistema ancora più stabile</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            Avvio <span>lento</span> del tuo PC
          </td>
          <td class="itemb">
            <span>Accelerazione massima dell’avvio</span> per non dover più aspettare così tanto l’avvio del PC
          </td>
        </tr>
        <tr>
          <td class="itema">
            Programmi che possono accedere ai <span>tuoi file personali</span>
          </td>
          <td class="itemb">
            <span>Protezione completa della privacy</span> per bloccare i programmi non affidabili
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Impossibilità</span> del tuo PC a <span>eseguire software pesanti</span>
          </td>
          <td class="itemb">
            <span>Pulizia automatica della RAM</span> per far funzionare il tuo PC senza problemi
          </td>
        </tr>
        <tr>
          <td class="itema">
            Spyware che possono entrare nel tuo PC e <span>rubare i tuoi dati</span>
          </td>
          <td class="itemb">
            <span>Protezione in tempo reale</span> per tenere alla larga dal tuo PC spyware e malware
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparisonone end -->


  <!-- offermore start -->
  <div class="intro">
    <div class="wrapper clearfix">
      <h2>Advanced SystemCare 14 PRO può fare<br> molto di più rispetto alla tua versione precedente!</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>Più intelligente</h3>
          <p>
            La nuova modalità AI può ottimizzare completamente il tuo PC in base alle tue esigenze
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>Più pulito</h3>
          <p>
            Rimuove il <b>50%</b> in più di file spazzatura per un sistema più pulito
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>Più veloce</h3>
          <p>Rende il tempo d’avvio del tuo PC il doppio più veloce rispetto a prima</p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>Più aggiornato</h3>
          <p>Mantiene aggiornati il <b>33%</b> in più di software importanti per non permettere agli hacker di abusare delle vulnerabilità</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- offermore end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Più di <span>2.500.000</span> utenti in <br>tutto il mondo hanno scelto Advanced SystemCare</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-icon dg-prev"><</span>
        <span class="dg-icon dg-next">></span>
      </div>
      
      <div class="dg-wrapper content">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/html-it.png')?>" alt=""/></dt>
          <dd>
            <h3>Recensioni dei media</h3>
            <p>"Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l’occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili."<span>-HTML.it</span></p>
            <cite>HTML</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/anthony-baker.png')?>" alt=""></dt>
          <dd>
            <h3>Recensioni degli utenti</h3>
            <p>"Le funzionalità di Advanced System Care 14 sono fantastiche e l'aspetto generale è pulito, fresco e moderno. Ho utilizzato altri programmi onnicomprensivi di manutenzione del sistema, ma nessuno è stato efficace come ASC 14. Il programma è facile da usare e molto intuitivo. Gli strumenti inclusi sono davvero completi e dopo aver eseguito e utilizzato questo programma il mio computer è molto più reattivo. Questo prodotto è fantastico, il migliore della categoria. Se ti interessa la cura del tuo laptop o PC, usa Advanced System Care 14!"</p>
            <cite>Anthony Baker</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/brendon-o-rourke.png')?>" alt=""></dt>
          <dd>
            <h3>Recensioni degli utenti</h3>
            <p>"Uso ASC ormai da anni. Di recente ho testato l'ultima versione V14 ed è di gran lunga la versione più completa fino ad oggi. IObit continua a migliorare i propri prodotti e tecnologie con più opzioni e una navigazione più semplice che aiuta a risolvere molti problemi. Non ho bisogno di comprare altrove, i prodotti IObit sono sicuramente i migliori."</p>
            <cite>Brendon O Rourke</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/lyle-stelmaschuk.png')?>" alt=""></dt>
          <dd>
            <h3>Recensioni degli utenti</h3>
            <p>"Ho acquistato molti programmi diversi per velocizzare e risolvere i problemi con il mio PC. Sfortunatamente, la maggior parte non mi ha per niente aiutato o fatto la differenza finché non ho provato Advanced System Care 14. Mi piace il fatto che ci siano così tante opzioni e soluzioni per risolvere qualsiasi problema. È incredibile quanto sia più veloce il mio PC ora dopo la prima scansione e riparazione. Sicuramente il miglior prodotto che abbia mai provato."</p>
            <cite>Lyle Stelmaschuk</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/ryan-hill.png')?>" alt=""></dt>
          <dd>
            <h3>Recensioni degli utenti</h3>
            <p>"Advanced System Care 14 è il sistema onnicomprensivo più completo sul mercato. Uso i prodotti IObit ormai da anni e anno dopo anno la nuova interfaccia è diventata sempre più semplice da usare, la pulizia profonda sempre più semplice da ottenere, si può infatti pulire in profondità con un solo clic il PC, e anche tutti gli altri strumenti presenti nel programma, come Analisi Cartelle Vuote, Turbo Boost e Distruttore File sono fantastici. Penso che ad oggi sia uno dei migliori sistemi di pulizia disponibili!"</p>
            <cite>Ryan Hill</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/santiago-diaz-de-la-fuente.png')?>" alt=""></dt>
          <dd>
            <h3>Recensioni degli utenti</h3>
            <p>"Lo strumento migliore per mantenere il mio PC, da quando l'ho installato, il mio PC è come nuovo. Advanced System Care 14 è uno strumento eccellente e potente, esegue una pulizia approfondita del registro e rimuove gli avanzi rimasti dalla disinstallazione di altri vecchi programmi. Questo software è davvero eccellente per la manutenzione del pc ed è anche molto facile da usare. Ed è vero che accelera il computer del 300%, provare per credere! Per di più ha un ottimo prezzo, la versione PRO non è affatto costosa per tutto ciò che offre."</p>
            <cite>Santiago Díaz de la Fuente</cite>
          </dd>
        </dl>
      </div>              
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Raccomandato anche da</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <h2>Regala a chi ami un’ottimizzazione a 360° del PC</h2>
    <div class="wrapper clearfix">
      <div class="imglist fl">
        <img class="asc" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="" />
        <img class="iu" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
        <img class="sd" src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
        <img class="pf" src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/>
        <span class="gift-line"></span>
        <span class="gift-flower"></span>
        <div class="tag"><span>1 anno /</span> 3 PC + 3 regali PRO</div>
        <b class="gift-font">Gratuiti</b>
      </div>
      <div class="changelist fl">
        <div class="changeprice">
          <p class="price"><strong>14,99<small>€</small></strong> <del>150€</del></p>
          <p>0,04€ al giorno</p>
        </div>
        <h3>Paghi 1 prendi 4!</h3>
      </div>
      <a class="buybtn fr"
         href="http://www.iobit.com/buy.php?product=it-asc143pciusdpf1499&ref=it_asc143pciusdpf1499purchasexmasxe2020<?php echo $refStr;?>&refs=it_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcxmasxe2020-it');">
        Acquista ora
      </a>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Note:</dt>
      <dd>1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
      <dd>2*.I dati potrebbero variare in base al sistema o computer.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/jquery.min.js')?>"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
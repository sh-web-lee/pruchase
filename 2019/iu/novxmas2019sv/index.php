 <?php
  error_reporting(0);
  define("IObit", "IObit");
  if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl . 'include/common.inc.php';

  $refStr='';
  if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1].'-'.$matches[2];
    $refStr.='-'.$ver;
  }
  if(!empty($_GET['ref'])){
    $refStr.='-'.$_GET['ref'];
    }
    $refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
  if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
    $refStr.='-'.$_GET['pop'];
  }
  $refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
  $refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
  $refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
  $refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
  
  $pickNum = 49;
  ?>
 <!DOCTYPE html>
 <html lang="sv">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
   <title>Spara upp till 80% rabatt på IObit Uninstaller PRO – IObit</title>
   <meta name="Copyright" content="IObit">
   <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
   <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
   <?php echo $gJavascript['public']; ?>
   <?php echo $gJavascript['head'] ?>
 </head>

 <body>
   <!-- banner -->
   <div class="banner">

     <div class="wrapper">
       <div class="star"></div>
       <!-- logo -->
       <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
       <!-- title -->
       <h1>Stor Julrea upp till 79% rabatt</h1>
       <div class="box">
         <dl>
           <dt>Ord. pris <del>399 kr</del></dt>
           <dd>
             <strong>179 kr</strong>
             <span>1 År, 1 PC</span>
           </dd>
         </dl>
         <img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" class="img-box">
         <a href="https://www.iobit.com/buy.php?product=sv-iu101pc179&ref=sv_iu101pcspecial2008<?php echo $refStr; ?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10special1pc-sv')" class="buybtn small">KÖP NU</a>
       </div>
       <div class="box gift-box">
         <dl>
           <dt>Ord. pris <del>1 157 kr</del></dt>
           <dd>
             <strong>199 kr</strong>
             <span>1 År, <b> 3 PC</b></span>
           </dd>
         </dl>
         <img src="<?php echo getStaticUrl('images/iu-gift-box.png') ?>" alt="" class="img-box">
         <a href="https://www.iobit.com/buy.php?product=sv-iu103pcpfsd199&ref=sv_iu103pcpfsdspecial2008<?php echo $refStr; ?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10special3pc-sv')" class="buybtn">KÖP NU</a>
         <p>Aktivera nu och spara 958 kr!</p>
       </div>
       <p class="last">Om du inte är nöjd med produkten inom 60 dagar, ger vi dig pengarna tillbaka.</p>
     </div>
   </div>
   <!-- end banner -->

   <!-- container -->
   <div class="container">

     <!-- intro -->
     <div class="intro wrapper clearfix">
       <h2>Avinstallera effektivt ytterligare program <br> & tillägg för en renare dator och säkrare surfning</h2>
       <img src="<?php echo getStaticUrl('images/boxshot.png') ?>" alt="" class="img-box">
       <dl>
         <dt><img src="<?php echo getStaticUrl('images/icons01.png') ?>" alt=""></dt>
         <dd>
           <strong>Upptäcka och ta bort Bundleware</strong>
           <p>Upptäck och avinstallera bundleware som adware, webbläsartillägg och andra program från tredje part.</p>
         </dd>
       </dl>
       <dl class="right">
         <dt><img src="<?php echo getStaticUrl('images/icons02.png') ?>" alt=""></dt>
         <dd>
           <strong>Autorensning</strong>
           <p>Automatisk identifiering och rensning av rester från avinstallerade program inklusive de som tagits bort av andra avinstallationsprogram.</p>
         </dd>
       </dl>
       <dl>
         <dt><img src="<?php echo getStaticUrl('images/icons03.png') ?>" alt=""></dt>

         <dd>
           <strong>Annonsfri surfning</strong>
           <p>Kraftfull avinstallering av annonsbaserade och skadliga tillägg för att garantera en säker och ren webbupplevelse.</p>
         </dd>
       </dl>
       <dl class="right">
         <dt><img src="<?php echo getStaticUrl('images/icons04.png') ?>" alt=""></dt>
         <dd>
           <strong>Säker Programvaruuppdatering</strong>
           <p>Med endast ett klick kan du uppdatera viktiga programvaror utan några användarinterventioner.</p>
         </dd>
       </dl>
       <p class="learn-more">Läs mer om PRO-versionen>></p>
     </div>
     <!-- end intro -->

     <div class="gift-content wrapper clearfix">
       <h2>VIP GÅVA. endast för användare av IObit Uninstaller PRO</h2>
       <dl>
         <dt><img src="<?php echo getStaticUrl('images/sd-gift.png') ?>" alt=""></dt>
         <dd>
           <strong>0kr</strong> <del> 459kr</del>
           <p>Högre defragmenteringshastighet.</p>
           <p>Auto-defragmentera valda filer.</p>
           <p>Snabbare uppstart av datorn.</p>
         </dd>
       </dl>
       <dl>
         <dt><img src="<?php echo getStaticUrl('images/amc-gift.png') ?>" alt=""></dt>
         <dd>
           <strong>0kr</strong> <del> 199kr</del>
           <p>Kraftfullare filskyddsverktyg</p>
           <p>Förbättrat integritetsskydd</p>
           <p>Säkrare filer och datalås</p>
         </dd>
       </dl>
     </div>
     <div class="wrapper">
       <div class="betwwen-buy">
         <div class="content">
           <img src="<?php echo getStaticUrl('images/between-buy-box.png') ?>" alt="" class="img-box">
           <dl>
             <dt><strong> 199 kr</strong> <del>1 157 kr</del></dt>
             <dd><a href="https://www.iobit.com/buy.php?product=sv-iu103pcpfsd199&ref=sv_iu103pcpfsdspecial2008<?php echo $refStr; ?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10special3pc-sv')" class="buybtn red">KÖP NU</a></dd>
             <dd class="last"> Aktivera nu och spara 958 kr!</dd>
           </dl>
         </div>
       </div>
     </div>


   </div>
   <!-- end container -->
   <!-- review -->
   <div class="review wrapper clearfix">
     <div class="title">
       <h2>Priser och utmärkelser över hela världen</h2>
     </div>
     <div class="review-icons fl">
       <img src="<?php echo $pResUrl; ?>images/review-icons.png" alt="">
     </div>
     <div class="review-content fr">
       <ul class="clearfix">
         <li class="active">
           <img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt="MakeUseOf">
         </li>
         <li>
           <img src="<?php echo $pResUrl; ?>images/joseph-yu.png" alt="Joseph Yu">
         </li>
         <li>
           <img src="<?php echo $pResUrl; ?>images/sergey-erlich.png" alt="Sergey Erlich">
         </li>
         <li>
           <img src="<?php echo $pResUrl; ?>images/ada-gortler.png" alt="Áda Görtler">
         </li>
         <li>
           <img src="<?php echo $pResUrl; ?>images/lovro-zuzic.png" alt="Lovro Žužić">
         </li>
       </ul>
       <span class="line"></span>
       <div class="review-message">
         <!-- MakeUseOf -->
         <p class="active">
           "IObit Unistaller har ett användarvänligt gränssnitt och användare kan ladda ner det på ett ögonblick. Programmet kan kategoriseras till den bästa avinstalleraren och programmet tillåter användaren att avinstallera flera program samtidigt. Användare erbjuds även att genomföra en djup-skanning för att hitta rester. Prestandan är såpass bra att det är värt att behålla verktyget enbart för den saken." <span>–MakeUseOf</span>
         </p>
         <!-- Joseph Yu -->
         <p>
           "Uninstaller PRO är bara ett av fem av familjen IObits "underhållsprogram" jag har investerat i för min dator, ungefär som kockar investerar i sina knivar. Uninstaller är bra på att hitta rester av bit och byte som gömmer sig och tar upp diskutrymme och påverkar registret. Vid ett tidigare tillfälle gjorde jag en avinstallation av ett annat program med hjälp av den inbyggda avinstallationsfunktionen och det fungerade. Men Uninstaller PRO upptäckte att 35 filer hade lämnats kvar. Det enda jag behövde göra var att klicka på godkänn så var de borta. Jag rekommenderar starkt det här programmet och har köpt en licens för tre datorer. Supporten är artig och utmärkt." <span>-Joseph Yu</span>
         </p>
         <!-- Sergey Erlich -->
         <p>
           "IObit Uninstaller är förmodligen den bästa mjukvaran för att ta bort onödiga program från datorn. Till skillnad från den grundläggande Windows avinstalleraren tar detta program bort alla rester, som senare kan bromsa datorns prestanda. Jag har använt detta program under flera år och det har alltid hjälpt till att hålla min dator ren och snabb. Jag har rekommenderat detta program till några av mina vänner och skulle rekommendera det igen idag." <span>- Sergey Erlich</span>
         </p>
         <!-- Áda Görtler -->
         <p>
           "IObit Uninstaller är ett av de bästa programmen. Lätt att arbeta med, mycket snabb rengöring och djuprengöring. Den snabba rengöringen av plug-ins är också mycket bekväm. Stor sökning efter dubbletter som inte används mycket. Tack för er gästfrihet ni visat mig och min dator." <span>-Áda Görtler</span>
         </p>
         <!-- Lovro Žužić -->
         <p>
           "IObit Uninstaller blir bättre med varje uppdatering. Jag har använt den i mer än 3 år nu. Det går snabbt att ladda ner och har enkel UI. Några av de många funktioner som jag använder regelbundet är Batch Uninstall, Powerful Scan, File Shredder och Recently Installed som ger mig snabb åtkomst till ett program som jag just installerat som jag inte gillar eller inte funkar. Det är också lätt att styra startobjekt så att din dator bootar snabbare." <span>- Lovro Žužić</span>
         </p>
       </div>
     </div>
   </div>
   <!-- end review -->
   <!-- comparison -->
   <div class="comparison">
     <div class="wrapper">
       <table border="0" cellspacing="0" cellpadding="0" width="100%">
         <thead>
           <tr>
             <th class="text" colspan="2">Se vad PRO-utgåvan kan göra för dig:</th>
             <td class="space"></td>
             <th class="itema"><span>Free-Version</span></th>
             <td class="space"></td>
             <th class="itemb"><span>PRO-Version</span></th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png') ?>" alt="" /></td>
             <td class="virtue">Avinstallera oönskade program snabbt och enkelt</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png') ?>" alt="" /></td>
             <td class="virtue"> Dators rester skannas automatically</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png') ?>" alt="" /></td>
             <td class="virtue">Återställ automatiskt systemändringar som ett program har gjort när det avinstalleras</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons gray">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png') ?>" alt="" /></td>
             <td class="virtue"> Radera medföljande (bundled) program och plug-ins när huvudprogram avinstalleras</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons gray">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png') ?>" alt="" /></td>
             <td class="virtue"> Stöd för att ta bort envisa program</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons gray">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png') ?>" alt="" /></td>
             <td class="virtue"> Stöd för borttagning av skadliga plug-ins</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons gray">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png') ?>" alt="" /></td>
             <td class="virtue">Stöd för att ta bort reklam plug-ins</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons gray">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png') ?>" alt="" /></td>
             <td class="virtue"> Sök automatiskt efter och ta bort rester av avinstallerade program</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons gray">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png') ?>" alt="" /></td>
             <td class="virtue"> Uppdatera alla dina viktiga program med ett klick</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons gray">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png') ?>" alt="" /></td>
             <td class="virtue"> Uppdatera till den senaste versionen automatiskt</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons gray">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
           <tr>
             <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png') ?>" alt="" /></td>
             <td class="virtue"> Uppdatera till den senaste versionen automatiskt</td>
             <td class="space"></td>
             <td class="itema"><i class="all-icons gray">√</i></td>
             <td class="space"></td>
             <td class="itemb"><i class="all-icons red">√</i></td>
           </tr>
         </tbody>
       </table>
     </div>
   </div>
   <!-- end comparison -->
   <!--bottom-->
   <div class="bottom">
     <div class="wrapper">
       <div class="content">
         <div class="img-box"></div>
         <ul>
           <li><i></i> <strong>1 År, <b>1 PC</b></strong> Endast <span>179 </span>kr</li>
           <li class="active"><i></i> <strong>1 År, <b>3 PC</b></strong> Endast <span> 199 </span>kr</li>
         </ul>
         <dl>
           <dt><span>80%</span> rabatt</dt>
           <dd><a href="https://www.iobit.com/buy.php?product=sv-iu103pcpfsd199&ref=sv_iu103pcpfsdspecial2008<?php echo $refStr; ?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10special3pc-sv')" class="buybtn">KÖP NU</a></dd>
           <dd class="last">BARA IDAG, SKYNDA DIG!</dd>
         </dl>
       </div>
     </div>
   </div>
   <!--bottom-->
   <!-- service -->
   <div class="service  clearfix">
     <div class="wrapper">
       <dl>
         <dt><img src="<?php echo getStaticUrl('images/payment.png') ?>" alt=""></dt>
         <dd><strong>Betalningsmetoder</strong> Vi accepterar flera <br> betalningsmetoder</dd>
       </dl>
       <dl>
         <dt><img src="<?php echo getStaticUrl('images/money-back.png') ?>" alt=""></dt>
         <dd><strong>Pengarna-tillbaka-garanti</strong> Om du inte är nöjd med produkten inom 60 dagar, ger vi dig pengarna tillbaka.</dd>
       </dl>
       <dl>
         <dt><img src="<?php echo getStaticUrl('images/godaddy.png') ?>" alt=""></dt>
         <dd><strong>Säker betalning</strong> IObit stöder flera säkra <br> betalningsalternativ.</dd>
       </dl>
       <dl class="last">
         <dt><img src="<?php echo getStaticUrl('images/servizio.png') ?>" alt=""></dt>
         <dd><strong>Tillförlitliga Tjänster</strong> Gratis 24/7 Teknisk <br> Support vid Behov</dd>
       </dl>
     </div>
   </div>
   <!-- end service -->

   <!-- footer -->
   <div class="footer">
     <dl class="annotation wrapper">
       <dt>Notera:</dt>
       <dd>
         *. Uppgifter kan variera beroende på olika system eller datorer.
       </dd>
       <dd>
         *. Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.
       </dd>
     </dl>
     <div class="copyright">Copyright 2005 - <?php echo date('Y') ?> IObit. Alla Rättigheter Förbehållna</div>
   </div>
   <!-- end footer -->


   <script>
     refStr = "<?php echo $refStr; ?>";
   </script>
   <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
 </body>

 </html>
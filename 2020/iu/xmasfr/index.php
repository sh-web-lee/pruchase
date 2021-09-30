<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1].'-'.$matches[2];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>static/css/Normalize.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>static/css/common.css" type="text/css">
  <!-- <link rel="stylesheet" href="<?= $pResUrl; ?>static/css/swiper.min.css"> -->
  <!-- <link rel="stylesheet" href="<?= $pResUrl; ?>static/css/animate.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script> -->
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
  <title>Jusqu'à -87% sur IObit Uninstaller PRO - Spécial Noël - IObit</title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <nav>
    <div class="logo">
      <a href="https://www.iobit.com/fr/index.php" target="_blank" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2012-fr')">
        <img src="<?= $pResUrl; ?>static/img/LOGO.png" alt="">
      </a>
    </div>

    <img src="<?= $pResUrl; ?>static/img/wordbd.png" alt="">

    <div class="book clearfix">
      <div class="one left ">
        <h3>Standard</h3>
        <p style="text-align: right;">
          15<span style="font-size: 18px;">€99</span>
          <i style="font-size: 18px; color: #838395;text-decoration: line-through;">39,99€</i>
        </p>
        <div style="text-align: left;">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <a href="https://www.iobit.com/buy.php?product=fr-iu101y3pc1599&ref=fr_iu103pcindexpurchase2012<?= $refStr; ?>&refs=nl_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2012-nl')">Vite, J’en Profite</button>
        </a>
      </div>
      <div class="two left">
        <div class="two-up">
          <h3>Offre Spéciale Noël Limitée</h3>
          <p style=" padding-left: 27%;text-align: left;">
            <img src="<?= $pResUrl; ?>static/img/time.png" alt="">
            Expire dans:
            <i id="timeout">00:11:24:326</i>
          </p>
        </div>
        <p style="text-align: right;font-size: 60px; font-weight: 600;margin-right: 20px;">
          15<span style="font-size: 22px;">€99</span>
          <i style="font-size: 22px; color: #838395;text-decoration: line-through;">139,96€</i>
        </p>
        <div style="text-align: left;margin-left: 25px;margin-top: -19px;">
          <img src="<?= $pResUrl; ?>static/img/box.png" alt="">
        </div>
        <a href="https://www.iobit.com/buy.php?product=fr-iu103pcpfsdisu1599&ref=fr_iu103pcpfsdisu1599indexpurchase2012<?= $refStr; ?>&refs=nl_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2012bundle-nl')">
            Vite, J’en Profite
          </button>
        </a>
        <img src="<?= $pResUrl; ?>static/img/UITVERKOCHT.png" alt="" style="display: none;" id="post">
      </div>
      <img src="<?= $pResUrl; ?>static/img/pplay.png" alt="" style=" bottom: -125px;
      position: absolute;
      z-index: 999;
      left: -64px;">
    </div>
  </nav>
  <aside>
    <h2 style="text-align: center;"><img src="<?= $pResUrl; ?>static/img/word.png" alt=""></h2>
    <div class="feature wrapper clearfix">
      <!-- computer -->
      <div class="computer">
        <div class="screen">
          <div class="list clearfix">
            <img src="<?= $pResUrl; ?>static/img/num1.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num2.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num3.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num4.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num5.png" alt="">
          </div>
        </div>
      </div>
      <!-- ul -->
      <div class="message">
        <ul>
          <li>
            <b>Désinstallation Complète</b>
            <br>
            Désinstallez les programmes tenaces et groupés, annulez automatiquement les modifications du système apportées par l'installation d'un programme lors de sa désinstallation.
          </li>
          <li>
            <b>Navigation sans publicité</b>
            <br>
            Désinstallez les plug-ins malveillants et publicitaires et supprimez les notifications du navigateur pour assurer une expérience de navigation propre et sécurisée.
          </li>
          <li>
            <b>Outil Software Health</b>
            <br>
            Détecte automatiquement les restes existants des désinstallations précédentes, les logiciels obsolètes et les modules malveillants et les répare en un seul clic.
          </li>
          <li class="last">
            <b>Mise à jour de logiciel sécurisée</b>
            <br>
            Mettez à jour en un seul clic des logiciels sélectionnés sans intervention de l'utilisateur.
          </li>
        </ul>
        <!-- active -->
        <span></span>
      </div>
    </div>
  </aside>
  <article id="arti">
    <div class="art">
      <div class="num1">
        <img src="<?= $pResUrl; ?>static/img/twobox.png" alt="">
      </div>
      <div class="num2">
        <p>
          <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          Smart Defrag PRO
        </p>
        <i>Garde votre disque dur et SSD en parfait état !</i>
        <p>
          <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          IObit Software Updater PRO
        </p>
        <i>Maintient automatiquement le logiciel de votre PC à jour !</i>
        <p>
          <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          Protected Folder
        </p>
        <i>Garde les fichiers importants en toute sécurité !</i>
      </div>
      <div class="num3">
        <a href="https://www.iobit.com/buy.php?product=fr-iu103pcpfsdisu1599&ref=fr_iu103pcpfsdisu1599indexpurchase2012<?= $refStr; ?>&refs=nl_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2012bundle-nl')">
            Vite, J’en Profite
          </button>
          <p>
        </a>
        <img src="<?= $pResUrl; ?>static/img/time.png" alt="" style="margin-right: 7px;">
        Expire dans
        <i id="timeout" style="font-size: 14px;color: #EA2D2D;font-weight: bold;">00:11:24:326</i>
        </p>
      </div>
    </div>
    <div class="nothing">
      <h2 style=" text-align: left;font-size: 26px;  color: #292b2f;margin-top: 23px;padding-left: 853px;">Pak toch
        nog 33% Korting!
      </h2>
      <div class="arttwo">
        <div class="num1">
          <img src="<?= $pResUrl; ?>static/img/ubox.png" alt="">
        </div>
        <div class="num2">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <div class="num3">
          <p style="text-align: center;font-size: 48px; font-weight: 600;margin-right: 20px;">
            15<span style="font-size: 18px;">€99</span> <i style="font-size: 18px; color: #838395;text-decoration: line-through;">39,99€</i>
          </p>
          <a href="https://www.iobit.com/buy.php?product=fr-iu101y3pc1599&ref=fr_iu103pcindexpurchase2012<?= $refStr; ?>&refs=nl_purchase_iu" target="_blank">
            <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2012-nl')">Vite, J’en Profite</button>
          </a>
        </div>
      </div>
    </div>
  </article>
  <div class="mainbox clearfix">
    <div class="tab">
      <div class="context">
        <div class="con">
          <!-- <h5>Klantbeoordeling</h5> -->
          <h6>«Je recommande vivement ce désinstallateur en tant que programme fiable et sûr qui permet de désinstaller les programmes les plus tenaces! Plus important encore, supprimer le code "caché" que le programmeur avait l'intention de laisser, ce qui obligerait ensuite les publicités à être réinstallées! Tous les produits IObit sont sûrs et faciles à utiliser pour optimiser votre PC. »</h6>
        </div>
        <div class="con">
          <!-- <h5>Klantbeoordeling</h5> -->
          <h6>«Il est rapide et très efficace, il est incomparable face au programme de désinstallation de base de Windows. Il nettoie entièrement tous les résidus de programme et évite ainsi tout ralentissement de l'ordinateur. J’utilise IObit Uninstaller depuis quelques mois et je ne peux désormais plus m’en passer. Je le recommande à mes amis et à ma famille. Merci, IObit Uninstaller est fantastique. »</h6>
        </div>
        <div class="con">
          <!-- <h5>Media recensie</h5> -->
          <h6>«IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Il proposera aux utilisateurs une fonctionnalité "Analyse Approfondie" pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. »</h6>
        </div>
        <div class="con">
          <!-- <h5>Klantbeoordeling</h5> -->
          <h6>«J'aime le fait qu'il désinstalle tous les fragments restants. Il dispose également d'un programme de mise à jour du logiciel qui vous rappelle lorsque l'un des programmes doit être mis à jour. La désinstallation des programmes de traitement par lots en fait un outil de choix. En fait, c’est essentiellement ce dont vous avez besoin pour garder votre ordinateur en état de fonctionner. »</h6>
        </div>
        <div class="con">
          <!-- <h5>Klantbeoordeling</h5> -->
          <h6>«Je l’ai utilisé depuis 3 ans. Téléchargement rapide et son interface conviviale et claire. J’ai souvent utilisé les fonctionnalités Désinstaller en lot, Analyse Minutieuse , Broyeur de fichiers et la fonctionnalité Récemment installés qui peut m’aider à trouver facilement les programmes récemment installé qui ne fonctionnent pas correctement ou que je n’aime pas. Il est également facile de contrôler vos éléments de démarrage pour booster considérablement la vitesse du démarrage. »</h6>
        </div>
      </div>
      <ul class="btn">
        <li class="active">
          <img src="<?= $pResUrl; ?>static/img/ivan.png" alt="" class="imgon">
          <h3>Jeff A Watts</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/ali.png" alt="" class="imgon">
          <h3>Lynette van Niekerk</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/MakeUseOf.png" alt="" class="imgon">
          <h3>MakeUseOf</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/samrat.png" alt="" class="imgon">
          <h3>Paulo Martins</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/john.png" alt="" class="imgon">
          <h3>Lovro Žužić</h3>
        </li>
      </ul>
    </div>
    <div class="tablebox">
      <div class="title">
        <h3>IObit Uninstaller Free</h3>
        <div>
          <img src="<?= $pResUrl; ?>static/img/title.png" alt="">
        </div>
        <h1>IObit Uninstaller PRO</h1>
      </div>
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/rightg.png" alt=""></td>
          <td>Désinstaller un programme depuis sa fenêtre ouverte, de son icône sur le bureau ou de l'icône de la barre d'état système</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/rightg.png" alt=""></td>
          <td>Supprimer plug-ins & extensions sur Edge, Chrome, IE, Firefox, etc</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Annuler automatiquement les modifications du système apportées par un programme lors de la désinstallation</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Prise en charge de la désinstallation des programmes tenaces</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Détecter et désinstaller les bundlewares et les plug-ins regroupés</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Mettre à jour automatiquement tous les logiciels obsolètes choisis</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Update automatisch alle belangrijke software in 1 klik </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Désinstaller plug-ins malveillants pour un navigateur plus sécurisé</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Expérience en ligne plus rapide et plus sûre en activant Déinstallation Adware</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Nettoyer automatiquement les restes que d’autres utilitaires ont échoué à supprimer</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Mise à jour automatique vers la Dernière Version</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td style="border-bottom: 0;"><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td style="border-bottom: 0;">Soutien Technique Gratuit de 24/7 à la Demande</td>
          <td style="border-bottom: 0;"><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
      </table>
    </div>
  </div>
  <section class="clearfix" id="sect">
    <div class="sec">
      <div class="sec-sale">
        <img src="<?= $pResUrl; ?>static/img/75.png" alt="" id="sale"> </div>
      <div class="sec-buy">
        <p>15<span>€99</span> <i>139,96€</i></p>
        <a href="https://www.iobit.com/buy.php?product=fr-iu103pcpfsdisu1599&ref=fr_iu103pcpfsdisu1599indexpurchase2012<?= $refStr; ?>&refs=nl_purchase_iu" target="_blank" id="hrf">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2012bundle-nl')">Vite, J’en Profite</button>
        </a>
        <h2 id="hidn" style="text-align: left; padding-left: 17%;">
          <img src="<?= $pResUrl; ?>static/img/time.png" alt="" style="margin-right: 7px;">
          Expire dans
          <i id="timeout" style="font-size: 14px;color:#292B2F;font-weight: bold;">00:11:24:326</i>
        </h2>
      </div>
    </div>
  </section>

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl class="astisfait fl">
      <dt><img src="<?= $pResUrl; ?>static/img/moneyback.png" alt=""></dt>
      <dd>
        <h3>Satisfait ou Remboursé</h3>
        <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
      </dd>
    </dl>
    <dl class="paiement fl">
      <dt><img src="<?= $pResUrl; ?>static/img/godaddy-secure.png" alt=""></dt>
      <dd>
        <h3>Paiement 100% Sécurisé</h3>
        <P>IObit vous propose sept modes de paiement sécurisé pour régler vos achats.</P>
      </dd>
    </dl>
    <dl class="modes fl">
      <dt><img src="<?= $pResUrl; ?>static/img/modes.png" alt=""></dt>
      <dd>
        <h3>Modes de paiement acceptés</h3>
        <p>Nous vous proposons 7 modes de paiement</p>
      </dd>
    </dl>
    <dl class="service-client fr">
      <dt><img src="<?= $pResUrl; ?>static/img/service-client.png" alt=""></dt>
      <dd>
        <h3>Service Client à votre écoute</h3>
        <p>
          Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.
        </p>
      </dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <div class="notes">
      <p>Note:</p>
      <p>*. Les données peuvent varier en fonction du système ou de l'ordinateur.</p>
      <p>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</p>
    </div>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Tous droits réservés</p>
  </div>
  <!-- footer end -->

</body>

<script>
  $(".feature .message ul li").hover(function() {
    var index = $(this).index();
    $(".feature .message>span").stop().animate({
      "marginTop": index * 104
    }, 300);
    $(".feature .list ").stop().animate({
      "marginLeft": -(index + 1) * 560
    }, 300);
  });
  //tab栏的切换显示与隐藏
  $(".con").eq(0).show();
  $('.btn li .hidn').eq(0).show()

  $(".btn li ").hover(function() {
    var num = $(".btn li ").index(this);
    $('.btn li').removeClass('active')
    $('.btn li').eq(num).addClass('active')
    $(".con").hide().animate({
      opacity: '0'
    }, 100);
    $(".con").eq(num).show().animate({
      opacity: '1'
    }, 100);
  })

  var countdown = function(countdown) {
    getCycleCountdown();
    $(countdown).html(h + ':' + i + ':' + s + ':' + mi);
    if (d != 0 || h != 0 || i != 0 || s != 0 || mi != 0) setTimeout("countdown('" + countdown + "')", 100);
    // else soldOut();
  };

  function getCycleCountdown() {
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
  }
  //倒计时结束实现
  function soldOut() {
    $('#post').addClass('post')
    $('.one').addClass('topleft')
    $('.art').css('display', 'none')
    $('.nothing').css('display', 'block')
    $('#arti').css({
      "background-image": "url('<?= $pResUrl; ?>static/img/ker.png')"
    })
    $('#sect').css({
      "background-image": "url('<?= $pResUrl; ?>static/img/overbanner.png')"
    })
    $('#sale').attr('src', '<?= $pResUrl; ?>static/img/IU.png')
    $('#hrf').attr('href', 'https://www.iobit.com/buy.php?product=fr-iu101y3pc1599&ref=fr_iu103pcindexpurchase2012<?= $refStr; ?>&refs=nl_purchase_iu')
  }
  (function() {
    countdown(("#timeout"));
    countdown(("#hidn i"));
    countdown((".art .num3 i"));
  }());
</script>

</html>
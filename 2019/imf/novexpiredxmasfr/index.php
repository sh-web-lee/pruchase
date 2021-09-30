<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xr_imfe'))){
  $refStr.='-'.$_GET['pop'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à 88% d'économie sur IObit Malware Fighter PRO et profitez des cadeaux Noël !</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- container -->
<div class="container">
  <!-- tree -->
  <div class="tree wrapper">
    <span class="tree-l"></span>
    <span class="tree-r"></span>
  </div>
  <!-- end tree -->

  <!-- star -->
  <div class="star wrapper">
    <span class="star-l"></span>
    <span class="star-r"></span>
  </div>
  <!-- end star -->
</div>
<!-- end container -->

<!-- main -->
<div class="main wrapper">

  <!-- banner -->
  <div class="banner">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>VENTE FLASH - SPÉCIAL NOËL</h1>
    <!-- subtitle -->
    <p>Les meilleures offres c’est maintenant ! Jusqu’à <span>-88%</span>, pourquoi attendre ?</p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-55.png')?>" alt="IObit Malware Fighter PRO">
        <p> 1 an, 1 PC</p>
        <dl>
          <dd class="clearfix">
            Réduction : <span class="fr">21,96€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>17</b> <del>39,95€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-imf71pc1799&ref=fr_imf71pcexpired1799purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7expiredpurchase1911c-fr')"
               data-num="2">
              <i class="all-icons"></i> VITE, J’EN PROFITE
            </a>
          </dd>
        </dl>
      </div>

      <!-- imf-85 -->
      <div class="message large fl">
        <img class="box" src="<?php echo getStaticUrl('images/imf-85.png')?>" alt="IObit Malware Fighter PRO">
        <p> 1 an, 3 PC</p>
        <!-- progress -->
        <div class="progress clearfix">
          <div class="progressbar fl clearfix">
            <p class="fr"></p>
          </div>
          <p class="countdown fl">
            <strong>00</strong>j
            <strong>00</strong>h
            <strong>00</strong>m
            <strong>30</strong>s
          </p>
        </div>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            Réduction : <span class="fr">149,97€</span>
          </dd>
          <dd class="one">
            Cadeaux Noël <i class="all-icons"></i>
            <p class="point">
              Cadeaux Noël incluent IObit Uninstaller <br>
              PRO, Protected Folder et AMC Security.
            </p>
          </dd>
          <dd class="two">
            <p class="price red"><b>19</b> <del>169,96€</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=fr-imf7pfiuamc1999&ref=fr_imf7pfiuamcexpired1999purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7expiredpurchase1911a-fr')"
               data-num="0">
              <i class="all-icons"></i> VITE, J’EN PROFITE
            </a>
            <p class="note"><i class="all-icons"></i><b class="viewNum">4,006,553</b> personnes l'ont acheté!</p>
          </dd>
        </dl>
      </div>

      <!-- imf-70 -->
      <div class="message small fr">
        <img class="box" src="<?php echo getStaticUrl('images/imf-70.png')?>" alt="IObit Malware Fighter PRO">
        <p> 1 an, 3 PC</p>
        <dl>
          <dd class="clearfix">
            Réduction : <span class="fr">58,00€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>21</b> <del>79,99€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-imf73pc2199&ref=fr_imf73pcexpired2199purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7expiredpurchase1911b-fr')"
               data-num="1">
              <i class="all-icons"></i> VITE, J’EN PROFITE
            </a>
          </dd>
        </dl>
      </div>

    </div>
  </div>
  <!-- end banner -->

  <!-- intro -->
  <div class="intro">
    <!-- title -->
    <h2 class="on">Profitez de la sécurité de niveau supérieur de votre PC !</h2>
    <img src="<?php echo getStaticUrl('images/intro-adorn.png')?>" alt="">
    <!-- 01 -->
    <dl class="one clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Moteur Bitdefender leader mondial</h3>
        <p>
          Plus de 203 millions de menaces telles <br>
          que virus, logiciels malveillants, sypwares, <br>
          cryptojacking, peuvent être facilement éliminées.
        </p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="two clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Navigation plus sûre sur Internet</h3>
        <p>
          Effacez automatiquement les cookies et traces <br>
          dangereuses lors que vous fermez le navigateur <br>
          Web et empêchez les hackers de rechercher ce <br>
          que vous lisez, visualisez et achetez en ligne.
        </p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Protection de Webcam</h3>
        <p>
          Toute tentative d’accès à votre webcam ne <br>
          peut se faire qu’avec votre accord afin <br>
          d’éviter tous les regards indiscrets.
        </p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon04.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Fichiers protégés par mot de passe</h3>
        <p>
          Verrouillez vos fichiers et photos privés <br>
          avec un mot de passe sécurisé. Personne <br>
          ne peut obtenir vos données sensibles <br>
          sans votre mot de passe.
        </p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->

  <!-- gifts -->
  <div class="gifts">
    <!-- title -->
    <h2 class="on">Des cadeaux étincelants qui subliment vos fêtes!</h2>
    <!-- dl -->
    <div class="content clearfix">
      <!-- iu -->
      <dl class="iu">
        <dt></dt>
        <dd>
          <p class="cost"><del>29,99€</del> <span><big>0</big>€</span></p>
          <p class="detail">
            Désinstallez complètement les programmes, <br>
            nettoyez automatiquement les résidus.
          </p>
        </dd>
      </dl>
      <!-- pf -->
      <dl class="pf">
        <dt></dt>
        <dd>
          <p class="cost"><del>39,99€</del> <span><big>0</big>€</span></p>
          <p class="detail">
            Un outil de protection puissant des fichiers <br>
            qui garantit la sécurité des dossiers et données.
          </p>
        </dd>
      </dl>
      <!-- amc -->
      <dl class="amc">
        <dt></dt>
        <dd>
          <p class="cost"><del>19,99€</del> <span><big>0</big>€</span></p>
          <p class="detail">
            La première application mobile de sécurité et <br>
            d’optimisation pour vos téléphones et tablettes Android.
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end gifts -->

  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <h2 class="on">
      Ne perdez pas votre protection complète et <br>
      débarassez-vous des problèmes de sécurité !
    </h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th><p>Problèmes <span>que vous rencontriez :</span></p></th>
          <th><p>Protection <span>dont vous profiterez :</span></p></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td>
            Impossible de détecter les dernières menaces à cause de <br>
            la <b>limite de la base de données</b>
          </td>
          <td>
            Profitez de la <b class="black">double protection</b> avec les moteurs<br>
            anti-virus de <b class="black">Bitdefender</b> et IObit
          </td>
        </tr>
        <!-- 02 -->
        <tr>
          <td>
            Vos fichiers importants peuvent être cryptés par les <br>
            <b>Ransomwares</b>
          </td>
          <td>
            Protégez vos fichiers du cryptage et de <br>
            Ransomware avec <b class="black">Moteur Anti-Ransomware</b>
          </td>
        </tr>
        <!-- 03 -->
        <tr>
          <td>
            Des fichiers personnels et des informations privées <br>
            risquent d’être <b>cryptés</b>
          </td>
          <td>
            Empêchez, avec <b class="black">Coffre-fort</b>, quiconque d’accéder <br>
            à vos informations sensibles sans votre mot de passe
          </td>
        </tr>
        <!-- 04 -->
        <tr>
          <td>
            <b>Protection limitée</b> contre le suivi de vos traces de la <br>
            vie privée
          </td>
          <td>
            Éliminez automatiquement les traces de votre vie <br>
            privée en ligne avec <b class="black">Anti-tracking</b>
          </td>
        </tr>
        <!-- 05 -->
        <tr>
          <td>
            Les intrus accèderaient à votre webcam <b> à votre insu</b>
          </td>
          <td>
            Évitez tous les regards indiscrets avec la <br>
            <b class="black">Protection de Webcam</b>
          </td>
        </tr>
        <!-- 06 -->
        <tr>
          <td>
            <b>Ne plus avoir</b> le privilège de obtenir la dernière version <br>
            & la protection en temps réel
          </td>
          <td>
            La <b class="black">Mise à Jour Automatique</b> vous éloigne des <br>
            dernières menaces de sécurité
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->

  <!-- feature -->
  <div class="feature">
    <!-- title -->
    <h2 class="on">
      Plus d’avantages dont vous profiterez <br>
      d’IObit Malware Fighter 7 PRO !
    </h2>
    <!-- content -->
    <div class="feature-content">
      <!-- 1 -->
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
        <dd>
          <span></span>
          <p>
            <strong>Plus Grande (x60%)</strong>
            Base de données de malwares
          </p>
        </dd>
      </dl>
      <!-- 2 -->
      <dl class="two">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
        <dd>
          <span class="yellow"></span>
          <p>
            <strong>Protégé par mot de passe</strong>
            Données personnelles
          </p>
        </dd>
      </dl>
      <!-- 3 -->
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
        <dd>
          <span></span>
          <p>
            <strong>Plus rapide (x300%)</strong>
            Analyse des menaces
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end feature -->

  <!-- review -->
  <div class="review">
    <h2 class="on">
      Nous faisons de notre mieux pour satisfaire <br>
      nos clients où que vous soyez !
    </h2>
    <div class="content">
      <h3>Ce qu’ils disent</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
      </ul>
      <div class="details">
        <div>
          <h4>Gelu Batir</h4>
          <p>" Je suis très satisfait de votre produit IObit Malware Fighter. J'ai eu beaucoup de problèmes d'interférences malveillantes auparavant, je n'ai pas pu regarder un film ou un concert entier que j'aime beaucoup. Grâce à votre produit, maintenant chaque opération est claire, sûre et bien protégée. "</p>
        </div>
        <div class="active">
          <h4>Software Informer</h4>
          <p>" Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots. "</p>
        </div>
        <div>
          <h4>Bob Bassett</h4>
          <p>" Nous avons utilisé de nombreux de programmes différents pour assurer le bon fonctionnement de nos ordinateurs et éviter les menaces. Il faut quelques heures pour maintenir la sécurité et les performances chaque semaine. Avec IObit Malware Fighter Pro et Advanced System Care Pro, tout est bien rangé. Après avoir utilisé vos produits, il n’y a plus de problèmes. "</p>
        </div>
        <div>
          <h4>David Cassidy</h4>
          <p>" Les gens qui veulent vraiment un bon programme anti-malware et ant-virus qui est aussi à un prix raisonnable ne doivent pas chercher plus loin qu’IObit Malware Fighter. Je recommanderais qu'ils oublient le reste et choisissent le meilleur qui est IObit Malware Fighter. "</p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- end review -->

  <!-- bottom -->
  <div class="bottom">
    <div class="bottom-content">
      <!-- award -->
      <div class="award">
        <h2 class="on">Approuvé par ces médias célèbres du monde</h2>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
      </div>

      <!-- service -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h4>Essayez pendant 60 jours, sans risque.</h4>
            <p>
              Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.
            </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Nous acceptons</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
        </dl>
      </div>

      <!-- annotation -->
      <dl class="annotation">
        <dt>Note: </dt>
        <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
        <dd>*.Licence gratuite d’AMC Security PRO, la version complète comprend annonces intégrées.</dd>
      </dl>

      <!-- footer -->
      <div class="footer">
        <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
      </div>
    </div>
  </div>
  <!-- end bottom -->

</div>
<!-- end main -->

<!-- float -->
<div class="float clearfix">
  <!-- box -->
  <img class="box" src="<?php echo getStaticUrl('images/float-box.png')?>" alt="IObit Malware Fighter PRO">
  <!-- progress -->
  <div class="float-gift fl clearfix">
    <p class="note">Ne ratez pas la plus grande remise en 2019 !</p>
  </div>
  <!-- dl -->
  <dl class="fr">
    <dd>
      <p class="price white"><b>19</b> <del>169,96€</del></p>
    </dd>
    <dd>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=fr-imf7pfiuamc1999&ref=fr_imf7pfiuamcexpired1999purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7expiredpurchase1911a-fr')">
      Renouvelez et économisez
      </a>
    </dd>
  </dl>
</div>
<!-- end float -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
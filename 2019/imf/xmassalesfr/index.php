<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xi_imf','xb_imf'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>C'est le grand jour ! On se depêche d'en profiter… Joyeux Noël</title>
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

  <!-- spree -->
  <div class="spree wrapper">
    <div class="spree-box">
      <p>Plus que <b class="packsNum"><?php echo $packsNum?></b> dispos !</p>
      <a class="spree-buy"
         href="https://www.iobit.com/buy.php?product=fr-imf7pfiuamc2199&ref=fr_imf7pfiuamc2199purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911d-fr');">
      </a>
    </div>
  </div>
  <!-- end spree -->

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
    <p>Les meilleures offres c’est maintenant ! Jusqu’à <span>-85%</span>, pourquoi attendre ?</p>
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
               href="https://www.iobit.com/buy.php?product=fr-imf71pc1799&ref=fr_imf71pc1799purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911c-fr')"
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
            Réduction : <span class="fr">147,97€</span>
          </dd>
          <dd class="one">
            Cadeaux Noël <i class="all-icons"></i>
            <p class="point">
              Cadeaux Noël incluent IObit Uninstaller <br>
              PRO, Protected Folder et AMC Security.
            </p>
          </dd>
          <dd class="two">
            <p class="price red"><b>21</b> <del>169,96€</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=fr-imf7pfiuamc2199&ref=fr_imf7pfiuamc2199purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911a-fr')"
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
               href="https://www.iobit.com/buy.php?product=fr-imf73pc2199&ref=fr_imf73pc2199purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911b-fr')"
               data-num="1">
              <i class="all-icons"></i> VITE, J’EN PROFITE
            </a>
          </dd>
        </dl>
      </div>

    </div>
    <!-- payment -->
    <img class="payment" src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature">
    <!-- ball -->
    <div class="ball">
      <span>1</span>
    </div>
    <!-- title -->
    <h2>Profitez de la protection de Bitdefender pour une <br> cybersécurité de niveau supérieur !</h2>
    <p>
      Équipé des moteurs Anti-virus & Anti-malware de Bitdefender leader mondial, <span>plus de 203 millions</span> de nouvelles menaces <br>
      en ligne, telles que adwares, virus, logiciels malveillants, logiciels espions, etc peuvent être facilement éliminées de votre PC.
    </p>
    <img src="<?php echo getStaticUrl('images/feature-icons.png')?>" alt="">
  </div>
  <!-- end feature -->

  <!-- intro -->
  <div class="intro">
    <!-- ball -->
    <div class="ball">
      <span>2</span>
    </div>
    <!-- title -->
    <h2>Vous pouvez également bénéficier des avantages:</h2>
    <img src="<?php echo getStaticUrl('images/intro-adorn.png')?>" alt="">
    <!-- 01 -->
    <dl class="one clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
      <dd class="fl">
        <h3>Moteur Anti-Ransomware</h3>
        <p>
          Ne vous inquiétez jamais des pirates <br>
          informatiques qui pénètrent dans votre <br>
          ordinateur et chiffrent vos fichiers <br>
          importants et vos données personnelles.
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
    <h2 class="on">Sans la protection complète, votre ordinateur est vulnérable !</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="item-a"><p>Votre version actuelle</p></th>
          <th class="item-b"></th>
          <th class="item-c"><p>IObit Malware Fighter 7 PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="item-a">3 millions</td>
          <td class="item-b">Base de données Anti-malware</td>
          <td class="item-c">Plus de 203 millions</td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="item-b">Moteurs anti-virus de Bitdefender</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="item-b">Moteur Anti-Ransomware</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="item-b">Protection de Webcam </td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="item-b">Protection des anti-traçages</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="item-b">Protection de clés USB</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="item-b">Des données sensibles protégées par mot de passe</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="item-b">Protection en temps réel</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="item-b">Mise à jour automatique</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
      </tbody>
    </table>
    <!-- subtitle -->
    <h3>Achetez IObit Malware Fighter PRO avec <span>85% de réduction</span> pour une protection multicouche</h3>
    <!-- imf-85 buybtn -->
    <a class="buybtn red"
       href="https://www.iobit.com/buy.php?product=fr-imf7pfiuamc2199&ref=fr_imf7pfiuamc2199purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911a-fr')">
      <i class="all-icons"></i> VITE, J’EN PROFITE
    </a>

  </div>
  <!-- end comparison -->

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

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">Ne laissez pas les menaces gâcher la fête !</h2>
    <!-- box -->
    <div class="box fl">
      <img class="on" src="<?php echo getStaticUrl('images/bottombuy-imf-bundle.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-imf.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-imf.png')?>" alt="IObit Malware Fighter PRO">
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="active top">1 An / 3 PC + Cadeaux Noël</li>
      <li class="mid">1 An / 3 PC</li>
      <li class="bot">1 An / 1 PC</li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>21</b> <del>169,96€</del></p>
      </dd>
      <dd>
        <a class="buybtn small"
           href="https://www.iobit.com/buy.php?product=fr-imf7pfiuamc2199&ref=fr_imf7pfiuamc2199purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1911a-fr')">
          <i class="all-icons"></i> VITE, J’EN PROFITE
        </a>
      </dd>
    </dl>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>Satisfait ou Remboursé</h3>
          <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Paiement 100% Sécurisé</h3>
          <p>IObit vous propose huit modes de paiement sécurisés pour régler vos achats.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/buycut.png" alt=""></dt>
        <dd>
          <h3>Obtenir la licence</h3>
          <p>Vous recevrez le code de licence dans les minutes après l’achat.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Note:</dt>
        <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
        <dd>*.Licence gratuite d’AMC Security PRO, la version complète comprend annonces intégrées.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- end footer -->

</div>
<!-- end main -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
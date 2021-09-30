<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='usbimf'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 97;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit;
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -70% sur IObit Malware Fighter PRO pour protéger votre ordinateur contre les clés USB infectées</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
      <h1>Protégez votre ordinateur contre les clés USB infectées</h1>
      <div class="box three-pcs">
        <div class="img-box"></div>
        <p>Maintenant: <strong>21,99€</strong> <del>79,99€</del></p>
        <a href="https://www.iobit.com/buy.php?product=fr-imf73pc2199&ref=fr_imf73pc2199usbguard1905<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfusbbuy', 'buy', 'imfpurchase1905usb-fr');" class="buybtn"><span>VITE, J’EN PROFITE</span></a>
        <div class="number">
          Vite, plus que  
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          disponibles !   
        </div>
      </div>
      <div class="box one-pc">
        <div class="img-box"></div>
        <p>Maintenant: <strong>19,99€</strong> <del>39,95€</del></p>
        <a href="https://www.iobit.com/buy.php?product=fr-imf71pc1999&ref=fr_imf71pc1999usbguard1905<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfusb1pcbuy', 'buy', 'imfpurchase1905usb1pc-fr');" class="buybtn border"><span>VITE, J’EN PROFITE</span></a>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- feature -->
  <div class="feature feature01 wrapper clearfix">
    <h2>POURQUOI AVEZ-VOUS BESOIN DE LA PROTECTION DE CLÉ USB ?</h2>
    <div class="img-box"></div>
    <dl class="list01">
      <dt>Clé USB infectée par virus</dt>
      <dd>La clé USB fait partie du quotidien, elle a sans aucun <br>doute été connectée à de nombreux ordinateurs pour <br>votre transfert de données. L’un de ces ordinateurs <br>pourrait avoir infecté votre clé USB avec un virus.</dd>
    </dl>
    <dl class="list02">
      <dt>Suffrez d’un ordinateur fragile</dt>
      <dd>Si vous branchez une clé USB contenant virus, votre <br>ordinateur risquera de perdre les données stockées et il <br>sera si vulnérable qu'il ne puisse pas lutter contre des <br>menaces de base.</dd>
    </dl>
  </div>
  <!-- feature -->
  <div class="feature feature02 ">
    <div class="wrapper">
      <h2>COMMENT USB GUARD FONCTIONNE-T-ELLE <br>POUR GARANTIR LA SÉCURITÉ DES ORDINATEURS ET DES CLÉS USB</h2>
      <div class="img-box"></div>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>"> Solution en un clic</dt>
        <dd>Une fois détectées, les menaces sont <br>été rapidement éliminées en un clic <br>avant de vous conntecter.</dd>
      </dl>
      <dl class="list02">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>"> Analyse automatique des virus</dt>
        <dd>Analyse automatiquement les clés <br>USB dès qu'elles sont connectées pour <br>éviter les infections.</dd>
      </dl>
    </div>
  </div>
  <!-- benfits -->
  <div class="feature03">
    <h2>PLUS DE DAVANTAGES <br>DONT VOUS POUVEZ PROFITER D’IOBIT MALWARE FIGHTER 7 PRO</h2>
    <div class="message">
      <div class="wrapper">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>"></dt>
          <dd><strong>Le dernier moteur de Bitdefender</strong></dd>
          <dd class="txt">Plus de 203 000 000 menaces de sécurité peuvent être rapidement <br>et facilement éliminées de votre ordinateur.</dd>
          <dd><span>*Exclusive PRO</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>"></dt>
          <dd><strong>Aucune chance pour Ransomware</strong></dd>
          <dd class="txt">Arrêter proactivement toute <br>action suspecte qui tente de <br>modifier ou chiffrer vos fichiers.</dd>
          <dd><span>*Exclusive PRO</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list05.png')?>"></dt>
          <dd><strong>Fichiers protégés par mot de passe</strong></dd>
          <dd class="txt">Personne ne peut accéder <br>à vos données sensibles <br>sans votre mot de passe.</dd>
          <dd><span>*Exclusive PRO</span></dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/list06.png')?>"></dt>
          <dd><strong>Pas de suivi malveillant</strong></dd>
          <dd class="txt">Les traces en ligne privées <br>seront automatiquement <br>effacées.</dd>
          <dd><span>*Exclusive PRO</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->
    <!-- awards -->
  <div class="awards">
    <h2>Approuvé par ces médias célèbres du monde</h2>
    <ul class="wrapper clearfix">
      <li>
        <a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=imfindex" target="_blank">
          <img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt=""/>
        </a>
      </li>
      <li>
        <a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=imfindex" target="_blank">
          <img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""/>
        </a>
      </li>
      <li>
        <a href="" target="_blank">
          <img src="<?php echo getStaticUrl('images/01net.png')?>" alt=""/>
        </a>
      </li>
      <li>
        <a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=imfindex" target="_blank">
          <img src="<?php echo getStaticUrl('images/pc-world.png')?>" alt=""/>
        </a>
      </li>
      <li>
        <a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=imfindex" target="_blank">
          <img src="<?php echo getStaticUrl('images/chlp.png')?>" alt=""/>
        </a>
      </li>
      <li>
        <a href="" target="_blank">
          <img src="<?php echo getStaticUrl('images/clubic-pro.png')?>" alt=""/>
        </a>
      </li>
      <li>
        <a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=imfindex" target="_blank">
          <img src="<?php echo getStaticUrl('images/major-geeks.png')?>" alt=""/>
        </a>
      </li>
      <li>
        <a href="http://www.softpedia.com/get/Tweak/System-Tweak/Advanced-WindowsCare-Professional.shtml?ref=imfindex" target="_blank">
          <img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""/>
        </a>
      </li>
    </ul>
  </div>
  <!-- review -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Avis des médias</h2>
              <p>" Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est donc compatible avec votre logiciel antivirus standard. IObit Malware Fighter est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots."</p>
              <cite>Software.Informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>" Nous avons utilisé de nombreux de programmes différents pour assurer le bon fonctionnement de nos ordinateurs et éviter les menaces. Il faut quelques heures pour maintenir la sécurité et les performances chaque semaine. Avec IObit Malware Fighter Pro et Advanced System Care Pro, tout est bien rangé. Après avoir utilisé vos produits, il n’y a plus de problèmes. "</p>
              <cite>Bob Bassett</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>"Il y a quelques années une personne de mon entourage m’a parlé d’IObit Malware fighter. Au départ j’étais sceptique. Mais après l’avoir installé c’est devenu mon logiciel anti malware préféré. Il est très facile d’utilisation. Au cours des années il a détecté plusieurs menaces et les a éliminé . En association avec d’autres programmes IObit comme ASC j’ai une très bonne protection pour mon PC. Je recommande ces programmes à tous mes amis ainsi qu’à ma famille."</p>
              <cite>Peter Stoffers</cite>
            </dd>
          </dl>
           <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>"Je suis très satisfait de votre produit IObit Malware Fighter. J'ai eu beaucoup de problèmes d'interférences malveillantes auparavant, je n'ai pas pu regarder un film ou un concert entier que j'aime beaucoup. Grâce à votre produit, maintenant chaque opération est claire, sûre et bien protégée. Il scanne mon ordinateur portable sans affecter sa performance. Je l'ai déjà recommandé à deux de mes amis. "</p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl> 
           <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/dave-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>"Merci d'avoir fait sortir Malware Fighter, c’est une autre mise à jour majeure pour vos utilisateurs. Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide. Les gens qui veulent vraiment un bon programme anti-malware et ant-virus qui est aussi à un prix raisonnable ne doivent pas chercher plus loin qu’IObit Malware Fighter. Je recommanderais qu'ils oublient le reste et choisissent le meilleur qui est IObit Malware Fighter."</p>
              <cite>David Cassidy</cite>
            </dd>
          </dl>                
        </div>               
    </div>
  </div>
  <div class="bottom">
      <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Essayez pendant 60 jours, sans risque.</h4>
          <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat. </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Nous acceptons</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Notification</dt>
      <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"></div>
      <div class="message">
        <h2>Profitez de la protection de la vie privée ULTIME !</h2>
        <div class="number">
          Vite, plus que
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          disponibles ! 
        </div>
      </div>
      <!-- buybtn -->
     <dl>
       <dt>Maintenant: <strong>21,99€</strong> <del>79,99€</del></dt>
       <dd><a href="https://www.iobit.com/buy.php?product=fr-imf73pc2199&ref=fr_imf73pc2199usbguard1905<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfusbbuy', 'buy', 'imfpurchase1905usb-fr');" class="buybtn"><span>VITE, J’EN PROFITE</span></a></dd>
     </dl>
    </div>
  </div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
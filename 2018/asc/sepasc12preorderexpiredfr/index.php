<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='ascprepa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$params=json_decode(base64_decode($_GET['data']));
$reg=empty($params->reg)?1113:$params->reg;
$junk=round((empty($params->junk)?9762:(($params->junk)/1024)),2);
$startUp=empty($params->startup)?19:$params->startup;
$internet=empty($params->internet)?21:$params->internet;
$privacy=empty($params->privacy)?2014:$params->privacy;
$ad=empty($params->ad)?0:$params->ad;

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Retrouvez Advanced SystemCare 12 PRO à 0€ - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Soyez le bienvenue & Rejoignez la prévente mondiale </h1>
        <h3>Vite ! Quantités limitées à 500 pièces, déjà <span class="soldNum">453</span> vendues</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO"/></div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <p>
                Maintenant à: <del>49,99€</del>
                <img src="<?php echo getStaticUrl('images/price.png')?>" alt=""/>
              </p>
              <ul>
                <li>
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page, <b class="reduceGift"><span class="packsNum">**</span></b> dispos!
                </li>
                <li id="bandown" class="countdown">Rupture de stock prévu: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=fr-asc12preorder30&ref=fr_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc "
                 onclick="('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-fr');"
                 data-text="VITE, J’EN PROFITE">
                <span>VITE, J’EN PROFITE</span>
              </a>
              <h5>1 an d’abonnement / 3 PC</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- flow start -->
    <div class="flow wrapper clearfix">
      <p>Obtenez 60% de réduction sur le prix <br> d'origine 30 jours après</p>
      <h2>Précommandez-le aujourd’hui à 0€</h2>
      <p>Annulez dans les 30 jours sans <br> payer de frais</p>
    </div>
    <!-- flow end -->

    <!-- intro-part01 start -->
    <div class="intro intro-part01">
      <div class="wrapper">
        <h2>How’s Your Computer with Advanced SystemCare 11 PRO?</h2>
        <div class="event">
          <!-- bight -->
          <div class="bight"></div>
          <!-- optimized for faster PC -->
          <dl class="optimized clearfix">
            <dd class="fr">
              <p>
                <strong class="startupNum"><?php echo $startUp;?></strong> éléments de démarrage et <br>
                <strong class="browserNum"><?php echo $internet;?></strong>  paramètres de navigateur <br> optimisés pour un PC plus rapide.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon01.png" alt=""></dt>
          </dl>
          <!-- during online surfing  -->
          <dl class="online clearfix">
            <dd>
              <p>
                <strong class="personalNum"><?php echo $privacy;?></strong>  trace personnelle et<br>
                <strong class="popupNum"><?php echo $ad;?></strong> fenêtres pop-up supprimées <br> pendant votre navigation en ligne.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon02.png" alt=""></dt>
          </dl>
          <!-- to free up disk  -->
          <dl class="disk">
            <dd>
              <p>
                <strong class="bytesNum"><?php echo $junk;?></strong>MB fichiers inutiles et <br>
                <strong class="regNum"><?php echo $reg;?></strong> registres ont été supprimés <br> afin de libérer de l’espace disque.
              </P>
              <span></span>
            </dd>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon03.png" alt=""></dt>
          </dl>
          <!-- Better PC Performance -->
          <p class="better">Meilleure performance du PC</p>
        </div>
      </div>
    </div>
    <!-- intro-part01 end -->
    <!-- intro-part02 start -->
    <div class="intro intro-part02">
      <div class="wrapper clearfix">
        <h3>Dès maintenant: </h3>
        <h2>Découvrez les fonctionnalités uniquement disponibles sur Advanced SystemCare 12 </h2>
        <img class="intro-pc fl" src="<?php echo $pResUrl;?>images/intro-pc.jpg" alt="">
        <div class="right-message fr">
          <!-- Privacy Shield -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon04.png" alt=""></dt>
            <dd>
              <h4>Bouclier de confidentialité <span>exclusive</span></h4>
              <p>Les données sensibles sont cachées des programmes non fiables. </p>
            </dd>
          </dl>
          <!-- Digital Fingerprint Protection -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon05.png" alt=""></dt>
            <dd>
              <h4>Nettoyage d’empreintes digitales numériques <span>exclusive</span></h4>
              <p>Les hackers ne peuvent pas suivre et envahir vos informations <br> personnelles.</p>
            </dd>
          </dl>
          <!-- Unfinished Downloads File Cleaning -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon06.png" alt=""></dt>
            <dd>
              <h4>Nettoyage des fichiers de téléchargement <br> inachevés<span>exclusive</span></h4>
              <p>Libère l’espace disque rapidement en supprimant les fichiers de <br> téléchargement inachevés.</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- intro-part02 end -->

    <!-- intro-part03 start -->
    <div class="intro intro-part03">
      <div class="wrapper clearfix">
        <h2>Profitez des améliorations importantes avec Advanced SystemCare</h2>
        <!-- Cleaner -->
        <dl class="cleaner fl">
          <dt>
            <h4>Plus propre </h4>
            <img src="<?php echo $pResUrl;?>images/intro-cleaner.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-more30.png" alt="">
            <p> plus d’espace disque</p>
          </dd>
        </dl>
        <!-- Faster -->
        <dl class="faster fl">
          <dt>
            <h4>Plus rapide</h4>
            <img src="<?php echo $pResUrl;?>images/intro-faster.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-faster20.png" alt="">
            <p>démarrage plus rapide</p>
          </dd>
        </dl>
        <!-- Safer -->
        <dl class="safer fl">
          <dt>
            <h4>Plus sûr</h4>
            <img src="<?php echo $pResUrl;?>images/intro-safer.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo $pResUrl;?>images/intro-more40.png" alt="">
            <p> davantage de pubs supprimées</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro-part03 end -->
    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Revenez à PRO pour seulement <span> 0€</span>et profitez de toutes ces fonctionnalités intéressantes! </h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=fr-asc12preorder30&ref=fr_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc "
           onclick="('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-fr');"
           data-text="VITE, J’EN PROFITE">
          <span>VITE, J’EN PROFITE</span>
        </a>
        <ul class="price">
          <li>1 an d’abonnement / 3 PC</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->
    <!-- intro-part04 start -->
    <div class="intro-part04">
      <div class="wrapper">
        <h3>
          Avez-vous les problèmes suivants sans la version PRO?
        </h3>
        <div class="intro-top clearfix">
          <!-- slow computer -->
          <dl class="fl clearfix">
            <dd class="fl">
              <strong>L’ordinateur lent </strong>prend trop de <br> temps pour répondre et charger <br> les pages Web.
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon08.png" alt=""></dt>
          </dl>
          <!-- system freezes or crashes -->
          <dl class="list02 fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon09.png" alt=""></dt>
            <dd class="fr">
              <strong>Les fichiers inutiles s'accumulent </strong> <br> sur votre disque dur.
            </dd>
          </dl>
        </div>
        <div class="intro-bottom clearfix">
          <!-- cluttering up -->
          <dl class="fl clearfix">
            <dd class="fl">
             Le système <strong>se bloque <br> soudainement ou se fige.</strong>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon10.png" alt=""></dt>
          </dl>
          <!-- annoying ads -->
          <dl class="fr list04 clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon11.png" alt=""></dt>
            <dd class="fr">
              <strong>Des publicités agaçantes</strong> apparaissent <br> lors de votre navigation en ligne.
            </dd>
          </dl>
        </div>
        <h2>Il est temps de passer à Advanced SystemCare 12 PRO  </h2>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-asc12preorder30&ref=fr_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc "
           onclick="('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-fr');"
           data-text="VITE, J’EN PROFITE">
          <span>VITE, J’EN PROFITE</span>
        </a>
        <p class="price">1 an d’abonnement / 3 PC</p>
      </div>
    </div>
    <!-- intro-part04 end -->
    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
            <dd>
              <h2>Avis des médias</h2>
              <p>
                « Il n'y a rien de pire qu'un ordinateur qui tombe en panne trop souvent. Cela entrave votre capacité à travailler ou à jouer à des jeux. Advanced SystemCare répare tous les problèmes indépendants en nettoyant les fichiers indésirables, les logiciels malveillants et les entrées de registre invalides. Il offre également la possiblité de donner un coup de pouce à votre ordinateur pour optimiser l'expérience PC. »
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                « J’aime beaucoup les fonctionnalités de base dans la version gratuite et finalement j’ai acheté la version complète. Il gardait mon ordinateur propre et loin de tout « bug » depuis plusieurs années et il ne m’a jamais laissé tombé jusqu’à présent. J’ai contacté récemment l’équipe d’Advanced SystemCare, et ils m’ont répondu en un jour ou deux avec tout ce que je voulais savoir. D’après moi, le support service est un énorme facteur décisif concernant la fidélisation de ce produit, et ASC est le gagnant à la fois en produit et en support. »
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                « Comme la plupart des gens, je ne suis pas un expert en informatique. Je ne sais pas combien de programmes j'ai pu essayé au fil des ans, tous prétendent être le meilleur parmi les plus utilisés sur le marché des logiciels d’optimisation, mais Advanced SystemCare Pro est vraiment le meilleur programme que j'ai jamais utilisé. Depuis que j'ai ce programme génial je n'ai pas eu à appeler le support technique, pas même une fois. Il a surpassé toutes mes attentes, toujours à jour, et l’interface est très cool aussi! Merci à tous d’avoir facilité ma vie. »
              </p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                « Ce programme est le meilleur que j’ai jamais essayé. Mon ordinateur est beaucoup plus performant depuis que j’ai téléchargé ASC. Il a nettoyé les fichiers indésirables, les fichiers en double et les dossiers vides. Je l’ai aussi utilisé pour déchiqueter des fichiers. Je vous recommande d’acheter ce programme, pas cher et très efficace pour maximiser les performances de votre PC. Vous allez l’adorer, je vous le promets. »
              </p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                « En tant que technicien de réparation d’ordinateurs, je trouve que la plupart des problèmes communs peuvent être souvent résolu en scannant le PC avec ASC free. Quand j’ai fini la réparation , je proposais habituellement à mes clients d’acheter la version Pro. Qui a besoin d’un technicien lorsque l’on peut profiter d’un logiciel aussi puissant qu’Advanced SystemCare Pro 24-7? C’est le meilleur produit qu’un utilisateur débutant peut acheter. Merci à IObit qui rend mon travail plus facile. »
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Recommandé par ces médias</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Satisfait ou Remboursé</h4>
              <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
            <dd>
              <h4>Paiement 100% Sécurisé</h4>
              <p>IObit vous propose huit modes de paiement sécurisé pour régler vos achats.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt=""/></dt>
            <dd>
              <h4>Obtenir la licence</h4>
              <p>Vous recevrez le code de licence dans les minutes après l’achat.</p>
            </dd>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dd>
              * À la fin de la période d'essai gratuite de 30 jours, votre carte de crédit ou votre compte PayPal sera automatiquement facturé 17,99€. Cette réduction de 60% sur le prix original de 49,99€ est un bonus
            </dd>
            <dd>uniquement pour les précommandes! </dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 PRO"/>
        <div class="price fl">
          <ul>
            <li>
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page,  <b class="reduceGift"><span class="packsNum">**</span></b> dispos!
            </li>
            <li id="floatdown" class="countdown">Rupture de stock prévu: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
        <a class="buybtn fr" 
           href="https://www.iobit.com/buy.php?product=fr-asc12preorder30&ref=fr_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc "
           onclick="('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-fr');"
           data-text="J’EN PROFITE - 0€">
          <span>J’EN PROFITE - 0€</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->
  </div>

  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
    var onGa = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpiredpop-fr');";
    var aff = "<?php echo $_GET['aff'];?>";

  </script>

</body>
</html>
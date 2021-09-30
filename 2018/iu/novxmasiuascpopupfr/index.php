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
  $cName='frasc'.$date;
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

$refStr='';
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profitez d'un rabais exclusif, le plus élevé jamais partiqué par IObit - Offre Spéciale de Nouvel An</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
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
      <h1>Offre Spéciale de NOUVEL AN</h1>
      <p class="best">Le prix le plus bas jamais proposé – une fois par an seulement !</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO & Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos !  
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Vite! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
            </div>
            <p><strong>19</strong><span>99€ <del>79,98€</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-asc123pciu3pc&ref=fr_iu8asc12xmas1811a<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
               onclick="ga('send', 'event', 'asciubuy', 'buy', 'iupurchase-asc201811a-fr');">
              VITE, J’EN PROFITE
            </a>
            <p class="year">1 an d’abonnement / 3 PC</p>
          </div>
        </div>
      </div>
    </div>
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Double garantie d’IObit : un PC plus propre, plus rapide et plus sécurisé</h2>
      <p class="over">
        Offrez un nettoyage en profondeur, redonnez une seconde jeunesse à votre vieux PC et effacez toute trace des programmes tenaces en équipant IObit Uninstaller 8 PRO et Advanced SystemCare 12 PRO. 
      </p>
      <!-- computer -->
      <img class="computer" src="<?php echo $pResUrl;?>images/computer.png" alt="">
      <span class="circle circle-out"></span>
      <span class="circle circle-mid"></span>
      <span class="circle circle-int"></span>
      <!-- Schonere PC -->
      <dl class="schonere clearfix">
        <dd class="fl">
          <h3>PC plus propre</h3>
          <p>
            Nettoie en profondeur les fichiers indésirables, les registres pour libérer <br>de l'espace
            <span>*Fonction exclusive à Advanced SystemCare PRO</span>
            Débarrassez-vous des programmes <br>tenaces ou groupés pour économiser <br>de l'espace
            <span>*Fonction exclusive à IObit Uninstaller PRO</span>
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      </dl>
      <!-- Sneller Browsen -->
      <dl class="sneller clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Navigation plus rapide</h3>
          <p>
            Optimise les paramètres du navigateur pour accélérer Internet jusqu'à 300% <br>plus rapide
            <span>*Fonction exclusive à Advanced SystemCare PRO</span>
            Débarrassez-vous des plug-ins <br>publicitaires qui ralentissent le <br>navigateur
            <span>* Fonction exclusive à IObit Uninstaller PRO</span>
          </p>
        </dd>
      </dl>
      <!-- Veiligere PC -->
      <dl class="veiligere">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>PC plus sécurisée</h3>
          <p>
            Protégez vos données personnelles et vos traces en ligne contre les programmes non sécurisés et les logiciels malveillants
            <span>*Fonction exclusive à Advanced SystemCare PRO</span>
            Débarrassez-vous des bundleware et plug-ins malveillants
            <span>* Fonction exclusive à IObit Uninstaller PRO</span>
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <div class="arrow"><i></i></div>
      <h2>Vous pouvez également profiter des fonctionnalités suivantes:</h2>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-01.png" alt=""></dt>
        <dd>
          Démarrage 200% <br>plus rapide 
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-02.png" alt=""></dt>
        <dd>
          Protection d'empreinte <br>digitale numérique
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-03.png" alt=""></dt>
        <dd>
          Nettoyage automatique <br>de la RAM
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-04.png" alt=""></dt>
        <dd>
          Mis à jour des <br>programmes en un clic
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>N’hésitez plus ! Obtenez maintenant les deux outils efficaces</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos !  
          </p>
        </div>
        <p><strong>19</strong><span>99€ <del>79,98€</del></span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-asc123pciu3pc&ref=fr_iu8asc12xmas1811b<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
           onclick="ga('send', 'event', 'asciubuy', 'buy', 'iupurchase-asc201811b-fr');">
          VITE, J’EN PROFITE
        </a>
        <p class="year">1 an d’abonnement / 3 PC</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- award start -->
  <div class="award wrapper">
    <h2>Approuvé par ces médias célèbres du monde</h2>
    <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
  </div>
  <!-- award end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <div class="content ">
        <!-- 01 -->
        <dl class="active">
          <dt>
            <h3>Avis des utilisateurs</h3>
          </dt>
          <dd>
            « IObit Uninstaller est probablement l'un des meilleurs logiciels pour supprimer des programmes inutiles. Contrairement au désinstalleur de Windows, ce programme supprime tous les restes du programme qui peuvent ralentir les performances de votre PC. J'ai utilisé ce programme depuis plusieurs années et il garde toujours mon ordinateur propre et rapide. J'avais recommandé ce programme à certains de mes amis et je le recommande encore aujourd'hui. »
          </dd>
        </dl>
        <!-- 02 -->
        <dl>
          <dt>
            <h3>Avis des utilisateurs</h3></dt>
          <dd>
            « J’aime beaucoup les fonctionnalités de base dans la version gratuite et finalement j’ai acheté la version complète. Il gardait mon ordinateur propre et loin de tout « bug » depuis plusieurs années et il ne m’a jamais laissé tombé jusqu’à présent. J’ai contacté récemment l’équipe d’Advanced SystemCare, et ils m’ont répondu en un jour ou deux avec tout ce que je voulais savoir. D’après moi, le support service est un énorme facteur décisif concernant la fidélisation de ce produit, et ASC est le gagnant à la fois en produit et en support. »
          </dd>
        </dl>
        <!-- 03 -->
        <dl>
          <dt>
            <h3>Avis des médias</h3></dt>
          <dd>
            « Advanced SystemCare Pro intègre des outils indispensables pour surveiller la santé
            de votre système en vérifiant l'état des disques durs, en bouchant les failles de
            sécurité et pour protéger votre vie privée en effaçant les fichiers sensibles ainsi
            qu'une fonction Turbo Boost pour nettoyer votre PC en profondeur. »
          </dd>
        </dl>
        <!-- 04 -->
        <dl>
          <dt>
            <h3>Avis des médias</h3></dt>
          <dd>
            « IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Cet outil de désinstallation peut être classé comme le meilleur programme de désinstallation qui permet aux utilisateurs de réaliser la désinstallation par lot. Il proposera aux utilisateurs une fonctionnalité Analyse Approfondie pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. » 
          </dd>
        </dl>
        <!-- 05 -->
        <dl>
          <dt>
            <h3>Avis des utilisateurs</h3></dt>
          <dd>
            « IObit Uninstaller PRO est l’un des cinq programmes IObit de maintenance que j’ai installé sur mon PC. IObit Uninstaller est destiné à nettoyer les restes de bits et bytes cachées sur PC occupant l’espace de disque. Si j’ai utilisé la fonction désinstallation standard pour désinstaller les programmes indésirables, une annonce popup apparue plus tard montrant que 35 fichiers doivent être nettoyés. Il me suffit de cliquer OK. Recommande vivement et j’ai acheté une licence pour 3 PCs. Le service client est attentif et efficace. »
          </dd>
        </dl>
        <!-- 06 -->
        <dl>
          <dt>
            <h3>Avis des utilisateurs</h3></dt>
          <dd>
            « En tant que technicien de réparation d’ordinateurs, je trouve que la plupart des problèmes communs peuvent être souvent résolu en scannant le PC avec ASC free. Quand j’ai fini la réparation , je proposais habituellement à mes clients d’acheter la version Pro. Qui a besoin d’un technicien lorsque l’on peut profiter d’un logiciel aussi puissant qu’Advanced SystemCare Pro 24-7? C’est le meilleur produit qu’un utilisateur débutant peut acheter. Merci à IObit qui rend mon travail plus facile. »
          </dd>
        </dl>
      </div>
      <ul class="users clearfix lato">
        <!-- hank-ewert -->
        <li class="current">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/sergey-erlich.png" alt="Sergey Erlich"></div>
            <p>Sergey Erlich</p>
          </a>
        </li>
        <!-- 02 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay"></div>
          <p>Bruce Ramsay</p>
        </li>
        <!-- 03 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/o1net.png" alt="O1net"></div>
          <p>O1net</p>
        </li>
        <!-- 04 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt="MakeUseOf">
          </div>
          <p>MakeUseOf</p>
        </li>
        <!-- 05 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/joseph-yu.png" alt="Joseph Yu"></div>
          <p>Joseph Yu</p>
        </li>
        <!-- 06 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
          </div>
          <p>Charles R. Widick</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <div class="box fl">
        <img src="<?php echo getStaticUrl('images/asc-bottom-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="count fl">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos !  
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Vite! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms</p>
      </div>
      <div class="price fr">
        <p><strong>19</strong><span>99€ <del>79,98€</del></span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-asc123pciu3pc&ref=fr_iu8asc12xmas1811c<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
           onclick="ga('send', 'event', 'asciubuy', 'buy', 'iupurchase-asc201811c-fr');">
          VITE, J’EN PROFITE
        </a>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <div class="service clearfix">
      <dl class="fl moneyback clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
        <dd class="fl">
          <h3>
            Essayez pendant 60 jours, sans risque.<br>
            
          </h3>
          <p>
            Garantie satisfait ou remboursé pendant 60 jours après la <br>date d’achat.
          </p>
        </dd>
      </dl>
      <dl class="fl payments">
        <dd><h3>Nous acceptons</h3></dd>
        <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
      </dl>
    </div>
    <p class="notes">
      Note:<br>
      *. Les données peuvent varier en fonction du système ou de l'ordinateur.<br>
      *.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.
    </p>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>
<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=fr-asc123pciu3pc1899&ref=fr_iu8asc12xmas1811pop<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu";
  var _ga = "ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201811popup-fr')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>
<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'novxmasascdbbundlefr_p' . $date;
  $c_name_t='novxmasascdbbundlefr_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['id'])?'':('-'.$_GET['id']);
if(in_array($_GET['pop'],array('x_ascdb','xr_ascdb','xr_dbasc','x_dbasc'))){
  $refStr.='-'.$_GET['pop'];
}
$isNewUser=false;
if(preg_match('/^13\./',$_GET['ver'])){
  $isNewUser=true;
}

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Profitez d'un rabais exclusif, le plus élevé jamais partiqué par IObit !</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
      <h1 class="title">Spécial Noël Vente Flash Ne ratez pas la plus grande remise en 2019 !</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">75% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>75% de remise limitée aux 999 premiers achats</h2></div>
          <div class="numbox">
            <span>Plus que</span>
            <div id="flip" class="flipNum">
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>
              </div>
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>          
              </div>
              <div class="numwrap last">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div> 
              </div>
            </div>
            <span>disponibles !</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price"><big>29,99</big>€</strong> <del>124,84€</del></p>
              <p>1 an d’abonnement / 3 PC</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=fr-asc13db73pc2999&ref=fr_ascdbbundle2999purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
                 onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2019-fr')">
                J’en profite !
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
      RISQUE GRATUIT – Activez-le maintenant pour redonner à votre vieux PC une nouvelle vie et bénéficiez d’une garantie de remboursement de 60 jours
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Que obtiendrez-vous dans le super bundle ?</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 13 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>L’outil d’optimisation et de nettoyage du système pour accélérer et protéger votre ordinateur.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
              <span>Driver Booster 7 PRO</span>
            </h3>
          </dt>
          <dd>Le meilleur logiciel de mise à jour de pilotes pour mettre à jour les pilotes et composants de jeu obsolètes.</dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Pourquoi acheter ?</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
        <dl>
          <dt><b>Ordinateur plus rapide (x200%)</b> <span>Exclusif PRO</span></dt>
          <dd>
            Nettoyez et optimisez automatiquement votre ordinateur afin de le rendre plus rapide.
          </dd>
        </dl>
        <dl>
          <dt><b>Internet plus rapide (x300%)</b> <span>Exclusif PRO</span></dt>
          <dd>
            Accélérez le téléchargement, la navigation, les jeux et la visualisation YouTube.
          </dd>
        </dl>
        <dl>
          <dt><b>Protection de la vie privée</b> <span>Exclusif PRO</span></dt>
          <dd>Bloquez les accès non autorisés à vos contacts, courriers et autres données sensibles.</dd>
        </dl>
        <dl>
          <dt><b>Navigation en ligne sécurisée</b> <span>Exclusif PRO</span></dt>
          <dd>Empêchez les hackers de rechercher ce que vous lisez, visualisez et achetez en ligne.</dd>
        </dl>
        <dl>
          <dt><b>Mise à jour de logiciels</b> <span>Exclusif PRO</span></dt>
          <dd>Maintenez tous vos logiciels essentiels à jour en un clic. </dd>
        </dl>
      </div>
    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>Base de données plus grande (x20%)</b> <span>Exclusif PRO</span></dt>
          <dd>Analysez et mettez à jour plus de 3 500 000 pilotes. </dd>
        </dl>
        <dl>
          <dt><b>Accélération de téléchargement</b> <span>Exclusif PRO</span></dt>
          <dd>Accélérez la vitesse de téléchargement des pilotes (x100%). </dd>
        </dl>
        <dl>
          <dt><b>Meilleures performances de jeu</b> <span>Exclusif PRO</span></dt>
          <dd>Améliorez l’expérience de jeu avec les derniers composants de jeu. </dd>
        </dl>
        <dl>
          <dt><b>Correction des erreurs de périphérique</b> <span>Exclusif PRO</span></dt>
          <dd>Corrigez des problèmes courants comme un son absent, une panne réseau et les autres problèmes matériels. </dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/db-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Super bundle - Quand est le meilleur moment pour les acheter ?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <span class="original"><em>49,99€</em></span>
          <span class="original last"><em>74,85€</em></span>
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost"><span>50%</span> de remise</h3>
            <span class="month">Action de Grâce</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>75%</span> de remise</h3>
            <span class="month">Aujourd’hui</span>
          </div>
          <div class="clist three">
            <h3 class="cost"><span>60%</span> de remise</h3>
            <span class="month">Nouvelle année</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price"><big>29,99</big>€</strong> <del>124,84€</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=fr-asc13db73pc2999&ref=fr_ascdbbundle2999purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2019-fr')">
          J’en profite !
        </a>
        <p> 1 an d’abonnement / 3 PC</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Les experts l’ont approuvé, les utilisateurs l’adorent !</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h3><span>Avis des médias</span></h3></dt>
            <dd>
              <p class="on">
                « Il n'y a rien de pire qu'un ordinateur qui tombe en panne trop souvent. Cela entrave votre capacité à travailler ou à jouer à des jeux. Advanced SystemCare répare tous les problèmes indépendants en nettoyant les fichiers indésirables, les logiciels malveillants et les entrées de registre invalides. Il offre également la possiblité de donner un coup de pouce à votre ordinateur pour optimiser l'expérience PC. »
              </p>
             <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Avis des utilisateurs</span></h3></dt>
            <dd> 
              <p>
                « J’ai essayé divers programmes qui promettaient de garder mes ordinateurs en bonne état de marche. Je me suis tourné vers ASC il y a quelques années en utilisant la version gratuite au début. Je ne regrette pas que j'ai choisi la version PRO, parce que je ne souffrais plus de problèmes du système après la mise à niveau vers la version payante. Advanced SystemCare Pro est le seul programme que je voudrais recommander en fonction de mes expériences. De plus, j’utilise également IObit Uninstaller, Smart Defrag et Driver Booster afin d’améliorer les performances de mes machines. »
              </p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Avis des utilisateurs</span></h3></dt>
            <dd>
              <p>
                « Advanced SystemCare est le meilleur logiciel d’optimisation et de sécurité du PC que j’ai jamais essayé. Depuis l’achat d’ASC, je n’ai jamais eu de problèmes de virus, de phishing, d’écrans noirs ou de tout autre type de problème auquel on pourrait penser. Je trouve que ASC PRO mérite d’être acheté car il peut vraiment résoudre les problèmes informatiques. Merci à ASC de m’avoir apporté une expérience plus agréable sur PC. »
              </p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Avis des utilisateurs</span></h3></dt>
            <dd>
              <p>
                « J’utilise Advanced SystemCare Pro depuis longtemps et cette dernière version 13 est encore meilleure que la version 12. Il peut détecter et résoudre les problèmes très rapidement et dispose de nombreuses fonctionnalités supplémentaires dont vous pouvez bénéficier pour un démarrage du PC plus rapide et un système plus stable. Je le recommande vivement. »
              </p>
              <cite>Tony Fisher</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Avis des utilisateurs</span></h3></dt>
            <dd> 
              <p>
                « Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède une interface utilisateur conviviale et facile à utiliser. C'est vraiment le meilleur programme que j'ai jamais utilisé ! 5 ETOILES bien mérités !!! Hautement recommandé !»
              </p>
              <cite>Hishaam Salasa</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Avis des utilisateurs</span></h3></dt>
            <dd>
              <p>
                « Driver Booster a aidé à résoudre les problèmes de lenteurs de mon ordinateur portable et éviter la plantage. Parfois, lorsque j’essayais de mettre à jour mes pilotes, l’ordinateur tombait en panne et je devais le formater pour restaurer les fonctions. Cela ne se produit plus avec DB7. Il télécharge des pilotes rapidement et facile à utiliser, c'est le meilleur outil sur le marché jusqu'à présent ! »
              </p>
              <cite>Carlos Alexandre Veríssimo</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Avis des utilisateurs</span></h3></dt>
            <dd>
              <p>
                « J'ai été fortement impressionné de voir tout ce que peut faire Driver Booster ! J'en avais tellement besoin pour résoudre une partie de mes logiciels dont les drivers étaient périmés et bons à mettre à jour. C'est ce que Driver Booster à fait pour moi, en partie. Drivers Booster a sécurisé la plupart de mes applications devenues obsolètes et je suis impatient de finaliser l'entièreté du PC. J'ai bien remarqué que mes applications étaient plus performantes. Je ne regrette pas de m'être penché sur Driver Booster. »
              </p>
              <cite>Jean-Pierre FILLION</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Avis des médias</span></h3></dt>
            <dd>
              <p>
                « IObit développe de nombeux utilitaires, et Driver Booster PRO, qui met automatiquement à jour vos pilotes, est l’un de ses meilleurs utilitaires. Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de licence pour un bon prix. L’interface utilisateur personnalisée affiche des informations matérielles spécifiques. Bien que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent également des fonctionnalités intéressantes, IObit Driver Booster PRO reste absolument numéro un. »
              </p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/jean-pierre.png')?>" alt="Jean-Pierre FILLION"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>APPROUVÉ PAR CES MÉDIAS CÉLÈBRES DU MONDE</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>Essayez pendant 60 jours, sans risque.</h3>
            <p>
              Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>Nous acceptons</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>Note:</dt>
        <dd>*. Les données peuvent varier en fonction du système ou de l'ordinateur.</dd>
        <dd>
          *.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">75% OFF</div>
      </div>
      <div class="numbox fl">
        <div id="fliptwo" class="flipNum">
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>
          </div>
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>          
          </div>
          <div class="numwrap last">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div> 
          </div>
        </div>
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> clients en ligne, plus que <b class="packsNum">50</b> disponibles !</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price"><big>29,99</big>€</strong> <del>124,84€</del></p>
          <p>1 an / 3 PC</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=fr-asc13db73pc2999&ref=fr_ascdbbundle2999purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
             onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2019-fr')">
            J’en profite !
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
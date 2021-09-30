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
  $c_name = 'xiuascfr_p' . $date;
  $c_name_t='xiuascfr_t' . $date;
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
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
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
          <div class="discount">80% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>80% de remise limitée aux 999 premiers achats</h2></div>
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
              <p><strong class="change-price"><big>17,99</big>€</strong> <del>89,98€</del></p>
              <p>1 an d’abonnement / 3 PC</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=fr-asc143pciu3pc1799&ref=fr_xiuasc1799purchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
                 onclick="ga('send', 'event', 'iuascbuy', 'buy', 'iuascpurchase-fr'); ">
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
      <h2>Super bundle - Que obtiendrez-vous ?</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/iu-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 14 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>L’outil d’optimisation et de nettoyage du système pour accélérer et protéger votre ordinateur.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
              <span>IObit Uninstaller 10 PRO</span>
            </h3>
          </dt>
          <dd>Logiciel de désinstallation facile à utiliser pour désinstaller complètement les programmes et plugins indésirables.</dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Super bundle - Pourquoi acheter ?</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
        <dl>
          <dt><b>Ordinateur plus rapide (x200%)</b> </dt>
          <dd>
            Nettoyez et optimisez automatiquement votre ordinateur afin de le rendre plus rapide.<span>Exclusif PRO</span>
          </dd>
        </dl>
        <dl>
          <dt><b>Internet plus rapide (x300%)</b> </dt>
          <dd>
            Accélérez le téléchargement, la navigation, les jeux et la visualisation YouTube. <span>Exclusif PRO</span>
          </dd>
        </dl>
        <dl>
          <dt><b>Protection de la vie privée</b> </dt>
          <dd>Bloquez les accès non autorisés à vos contacts, courriers et autres données sensibles. <span>Exclusif PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Navigation en ligne sécurisée</b> </dt>
          <dd>Empêchez les hackers de rechercher ce que vous lisez, visualisez et achetez en ligne. <span>Exclusif PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Mise à jour de logiciels</b> </dt>
          <dd>Maintenez tous vos logiciels essentiels à jour en un clic.  <span>Exclusif PRO</span></dd>
        </dl>
      </div>
    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>Désinstallez les logiciels récalcitrants et les bundlewares</b> </dt>
          <dd>qui ne peuvent pas être supprimés de manière normale. <span>Exclusif PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Analysez automatiquement les résidus </b></dt>
          <dd>qui ne peuvent pas être supprimés par d’autres outils de désinstallation. <span>Exclusif PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Identifiez les plugins malveillants ou publicitaires </b></dt>
          <dd>qui injectant des announces ou des liens malveillants dans les pages.  <span>Exclusif PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Surveillez en temps réel des modifications de fichiers </b></dt>
          <dd>effectuées par les programmes pendant ses installations.  <span>Exclusif PRO</span></dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/iu-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Quand est le meilleur moment pour l’acheter ?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <span class="original"><em>49,99€</em></span>
          <span class="original last"><em>39,99€</em></span>
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost"><span>50%</span> de remise</h3>
            <span class="month">Action de Grâce</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>80%</span> de remise</h3>
            <span class="month">Aujourd’hui</span>
          </div>
          <div class="clist three">
            <h3 class="cost"><span>60%</span> de remise</h3>
            <span class="month">Nouvelle année</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price"><big>17,99</big>€</strong> <del>89,98€</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=fr-asc143pciu3pc1799&ref=fr_xiuasc1799purchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
           onclick="ga('send', 'event', 'iuascbuy', 'buy', 'iuascpurchase-fr'); ">
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
      <h2>Qu'en pensent-ils ? </h2>
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
                « IObit Uninstaller s’améliore avec chaque mise à jour. Je l’ai utilisé depuis 3 ans. Téléchargement rapide et son interface conviviale et claire. J’ai souvent utilisé les fonctionnalités Désinstaller en lot, Analyse Minutieuse , Broyeur de fichiers et la fonctionnalité Récemment installés qui peut m’aider à trouver facilement les programmes récemment installé qui ne fonctionnent pas correctement ou que je n’aime pas. Il est également facile de contrôler vos éléments de démarrage pour booster considérablement la vitesse du démarrage. »
              </p>
              <cite>Lovro Žužić</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Avis des utilisateurs</span></h3></dt>
            <dd>
              <p>
                « IObit Uninstaller est le meilleur logiciel pour supprimer des programmes sur ordinateur, il est rapide et très efficace, il est incomparable face au programme de désinstallation de base de Windows. Il nettoie entièrement tous les résidus de programme et évite ainsi tout ralentissement de l'ordinateur. J’utilise IObit Uninstaller depuis quelques mois et je ne peux désormais plus m’en passer. Je le recommande à mes amis et à ma famille. Merci, IObit Uninstaller est fantastique. »
              </p>
              <cite>Paulo Martins</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Avis des utilisateurs</span></h3></dt>
            <dd>
              <p>
                « Je trouve le programme de désinstallation IObit excellent, car il répond à vos attentes. J'aime le fait qu'il désinstalle tous les fragments restants. Il dispose également d'un programme de mise à jour du logiciel qui vous rappelle lorsque l'un des programmes doit être mis à jour. La désinstallation des programmes de traitement par lots en fait un outil de choix. En fait, c’est essentiellement ce dont vous avez besoin pour garder votre ordinateur en état de fonctionner. »
              </p>
              <cite>Lynette van Niekerk</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Avis des médias</span></h3></dt>
            <dd>
              <p>
                « IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Cet outil de désinstallation peut être classé comme le meilleur programme de désinstallation qui permet aux utilisateurs de réaliser la désinstallation par lot. Il proposera aux utilisateurs une fonctionnalité Analyse Approfondie pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. » 
              </p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></li>
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
          <p><strong class="change-price"><big>17,99</big>€</strong> <del>89,98€</del></p>
          <p>1 an / 3 PC</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=fr-asc143pciu3pc1799&ref=fr_xiuasc1799purchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
             onclick="ga('send', 'event', 'iuascbuy', 'buy', 'iuascpurchase-fr'); ">
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
<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

/*$time = time();
if(!isset($_COOKIE['returnuserfr2020'])){
  setcookie('returnuserfr2020', $time, time() + 3600 * 24 *30 *7);
}else{
  if($time-$_COOKIE['returnuserfr2020']>86400){
    header("Location:./return.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
  }
}
*/

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dbmarflashfr_p' . $date;
  $c_name_t='dbmarflashfr_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=300;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$packsNum = ceil(microtime_float()*2000/20000);
// $packsNum = 300-($packsNum%300);
$packsNum = 300;
if ($_GET['action'] == 'getPacks'){
  echo $packsNum;
  exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>??conomisez 85% sur Driver Booster PRO et obtenez les cadeaux exclusifs pour mettre ?? jour les pilotes obsol??tes</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getPacksNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&r="+Math.random(),
        success: function(packs){
          $('.packNum').html(packs);
          setTimeout('getPacksNum()', 10000);
        }
      });
    }
    //setTimeout('getPacksNum()', 10000);
  </script>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1 class="title">VENTE FLASH -85% PLUS QUE 3 JOURS</h1>
      <h3 class="countdown"><span>PLUS QUE </span><b>0</b>j: <b>08</b>h: <b>47</b>m: <b>45</b>: <b>30</b> <span>POUR EN PROFITER !</span> <small>Derni??res heures, derniers petits prix !</small></h3>
      <div class="clearfix">
        <div class="offer small">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
            <span class="discount"><b>-65%</b></span>
          </div>
          <div class="price">
            <p class="line"><strong>24</strong><span><b>???99</b> <del>74,85???</del></span></p>
            <a class="buybtn small"
               href="https://www.iobit.com/buy.php?product=fr-db73pc2499&ref=fr_db71y3pc2499purchase2003<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2003a-fr');">
              <i class="all-icons"></i>
              J???en profite !   
            </a>
          </div>
        </div>
        <div class="offer big">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
            <span class="discount"><b>-85%</b></span>
          </div>
          <div class="price">
            <p class="line"><strong>24</strong><span><b>???99</b> <del>174,82???</del></span></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2499&ref=fr_db7sdpfiu2499purchase2003<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2003b-fr');">
              <i class="all-icons"></i>
              J???en profite !   
            </a>
          </div>
          <p class="people"><i class="all-icons"></i> <span class="vNum">4 762 467</span> personnes l???ont achet??s??!</p>
          <span class="pieces"><b class="packNum"><?php echo $packsNum ?></b> pi??ces</span>
          <!-- <div class="mask on"><span class="sold-word on">TERMIN??</span></div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
  </div>
  <!-- payment end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Pourquoi choisir <span>Driver Booster PRO</span> ?</h2>
      <h3 class="intitle">
        Mettez ?? jour automatiquement les pilotes, les composants de jeu obsol??tes et 
        r??parez les probl??mes mat??riels??<em class="one"></em><em class="two"></em>
      </h3>
      <div class="intro-wrap">
        <span class="one"><img src="<?php echo getStaticUrl('images/intro01.png')?>" alt=""/></span>
        <span class="two"><img src="<?php echo getStaticUrl('images/intro02.png')?>" alt=""/></span>
        <span class="three"><img src="<?php echo getStaticUrl('images/intro03.png')?>" alt=""/></span>
        <span class="four"><img src="<?php echo getStaticUrl('images/intro04.png')?>" alt=""/></span>
        <dl class="one">
          <dt><b>Analyse automatique</b></dt>
          <dd>
            Analysez et identifiez automatiquement plus de 3,5 millions de pilotes et composants de jeu obsol??tes et d??fectueux en un clic
          </dd>
        </dl>
        <dl class="two">
          <dt><b>T??l??chargement ultra-rapide des paquets de mise ?? jour</b></dt>
          <dd>
            T??l??chargez rapidement les pilotes et les installez automatiquement lorsque l???ordinateur est??moins occup??
          </dd>
        </dl>
        <dl class="three">
          <dt><b>Mise ?? jour 100% s??curis??e</b></dt>
          <dd>
            Sauvegardez automatiquement tous les pilotes pr??c??dents avant ses installations et les restaurez en cas de besoin
          </dd>
        </dl>
        <dl class="four">
          <dt><b>Augmentation des performances de jeu</b></dt>
          <dd>
            Mise ?? jour prioritaire pour les composants et les pilotes de jeu peu courants & les plus r??cents
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2 class="intitle">
        Davantage de fonctionnalit??s dont vous pouvez profiter <em class="one"></em><em class="two"></em>
      </h2>
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
        <dd>D??tectez et corrigez les erreurs mat??rielles de vos p??riph??riques</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
        <dd>Corrigez les probl??mes<br> dus ?? des pilotes??: BOSD, connexion internet,<br>absence de son</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
        <dd>Mettez ?? jour vers la derni??re version</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature04.png')?>" alt=""/></dt>
        <dd>Excellent support 24 heures/24, 7 jours/7</dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Ne manquez pas les cadeaux exclusifs, quantit??s ultra limit??es !</h2>
      <div class="clearfix">
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
            <!-- <div class="mask on"><span class="sold-word on">TERMIN??</span></div> -->
          </dt>
          <dd>D??sinstallez compl??tement les programmes et nettoyez automatiquement les r??sidus</dd>
        </dl>
        <dl class="sd">
          <dt>
            <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
            <!-- <div class="mask on"><span class="sold-word on">TERMIN??</span></div> -->
          </dt>
          <dd>Maximisez les performances et la dur??e de votre disque en d??fragmentant les registres et les fichiers du syst??me</dd>
        </dl>
        <dl class="pf">
          <dt>
            <img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/>
            <!-- <div class="mask on"><span class="sold-word on">TERMIN??</span></div> -->
          </dt>
          <dd>Un outil de protection puissant des fichiers qui garantit la s??curit?? de vos dossiers et vos donn??es</dd>
        </dl>
      </div>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2499&ref=fr_db7sdpfiu2499purchase2003<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2003b-fr');">
        <i class="all-icons"></i>
        J???en profite !  
      </a>
      <!-- <div class="mask on"></div> -->
      <p class="giftnum">Plus que <b class="packNum"><?php echo $packsNum ?></b> pi??ces disponibles??!</p>
    </div>
  </div>
  <!-- giftbox end -->

  <div class="reviewcompare">
    <!-- review start -->
    <div class="review wrapper clearfix">
      <h2>Les experts l???ont approuv??, les utilisateurs l???adorent!</h2>
      <div class="media"><img src="<?php echo getStaticUrl('images/media.png')?>" alt=""/></div>
      <div class="usereview">
        <ul class="users clearfix">
          <li class="first current">
            <div class="imgbox">
              <img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""/>
            </div>
          </li>
          <li>
            <div class="imgbox">
              <img src="<?php echo getStaticUrl('images/christian-cappelle.png')?>" alt="Myo Thuya"/>
            </div>
          </li>
          <li>
            <div class="imgbox">
              <img src="<?php echo getStaticUrl('images/jean-pierre.png')?>" alt="Adam Backlund"/>
            </div>
          </li>
          <li>
            <div class="imgbox">
              <img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Wayne Bowler"/>
            </div>
          </li>
        </ul>
        <div class="userbox">
          <dl class="active">
            <dd>
              <p>
                Driver Booster PRO, simple et efficace, offre de multiples fonctionnalit??s et des cl??s de 
                licence pour un bon prix. Bien que les concurrents Ashampoo Driver Updater et 
                SlimWare Utilities DriverUpdate offrent ??galement des fonctionnalit??s 
                int??ressantes, IObit Driver Booster PRO reste absolument num??ro un.
              </p>
              <b>??? PC Magazine</b>
            </dd>
          </dl>
          <dl>
            <dd>
              <p>
                Driver Booster PRO m'a permis de rafra??chir et optimise mes ordinateurs qui 
                fonctionnent beaucoup mieux malgr?? leur ??ge avanc?? . Avec les mises ?? 
                jour r??guli??res il demeurent plus efficaces et plus fluides!
              </p>
              <b>??? Christian Cappelle</b>
            </dd>
          </dl>
          <dl>
            <dd>
              <p>
                J'ai ??t?? fortement impressionn?? de voir tout ce que peut faire Driver Booster PRO ! 
                J'en avais tellement besoin pour r??soudre une partie de mes logiciels dont les drivers 
                ??taient p??rim??s et bons ?? mettre ?? jour. Je ne regrette pas de m'??tre pench?? sur 
                Driver Booster. 
              </p>
              <b>??? Jean-Pierre FILLION</b>
            </dd>
          </dl>
          <dl>
            <dd>
              <p>
                Le meilleur logiciel de mise ?? jour de pilotes sur le march?? absolument qui poss??de 
                une interface utilisateur conviviale et facile ?? utiliser. 5 ETOILES bien m??rit??s !!!
              </p>
              <b>??? Hishaam Salasa</b>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison wrapper" id="compare">
      <h2>Aper??u des diff??rences entre votre ??dition actuelle et la version PRO</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th colspan="2"></th>
            <th class="space"></th>
            <th class="itema">Driver Booster PRO</th>
            <th class="space2"></th>
            <th class="itemb">Votre ??dition actuelle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">V??rifiez l?????tat des pilotes en un seul clic</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="space2"></td>
            <td class="itemb"><i class="all-icons">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">T??l??chargez et installez automatiquement et rapidement les pilotes</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="space2"></td>
            <td class="itemb"><i class="all-icons gray">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">T??l??chargez et installez les pilotes pendant vos p??riodes d???inactivit??s</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="space2"></td>
            <td class="itemb"><i class="all-icons gray">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Sauvegardez automatiquement vos pilotes pr??c??dents pour restauration simplifi??e en cas de besoin</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="space2"></td>
            <td class="itemb"><i class="all-icons gray">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Mettez ?? jour plus de pilotes peu courants ou introuvables</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="space2"></td>
            <td class="itemb"><i class="all-icons gray">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Mise ?? jour prioritaire pour les pilotes Game Ready et les composants les plus r??cents</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="space2"></td>
            <td class="itemb"><i class="all-icons gray">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Corrigez en un clic les erreurs de p??riph??rique pour de meilleures performances </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="space2"></td>
            <td class="itemb"><i class="all-icons gray">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Mise ?? jour automatique vers la derni??re version</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="space2"></td>
            <td class="itemb"><i class="all-icons gray">???</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Assistance technique gratuite 24h / 24 et 7 jours sur 7</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">???</i></td>
            <td class="space2"></td>
            <td class="itemb"><i class="all-icons gray">???</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->
  </div>

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <h2>Facilitez la mise ?? jour des pilotes avec Driver Booster PRO !</h2>
      <div class="imgbox fl">
        <img class="gift-box on" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
        <img class="box" src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <ul class="price fl">
        <li class="one on">
          <a href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2499&ref=fr_db7sdpfiu2499purchase2003<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2003b-fr');">
            <em><strong>85<small>%</small> d?????conomie</strong></em>
            <p>
              <strong>24</strong>
              <span><b>???99</b> <del>174,82???</del></span>
            </p>
            <i class="arrow arrowmove"></i>
          </a>
        </li>
        <li class="two">
          <a href="https://www.iobit.com/buy.php?product=fr-db73pc2499&ref=fr_db71y3pc2499purchase2003<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2003a-fr');">
            <em><strong>65<small>%</small> d?????conomie</strong></em>
            <p>
              <strong>24</strong>
              <span><b>???99</b> <del>74,85???</del></span>
            </p>
            <i class="arrow"></i> 
          </a>
          <!-- <div class="mask on"><span class="sold-word on">TERMIN??</span></div> -->
        </li>
      </ul>
    </div>
  </div>
  <!-- bottombuy end -->

<!-- bottom start -->
<div class="footer">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Satisfait ou Rembours??</h4>
          <p>Garantie satisfait ou rembours?? pendant 60 jours apr??s la date d???achat.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""></dt>
        <dd>
          <h4>Paiement 100% S??curis??</h4>
          <p>IObit vous propose huit modes de paiement s??curis?? pour r??gler vos achats.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""></dt>
        <dd>
          <h4>Obtenir la licence</h4>
          <p>Vous recevrez le code de licence dans les minutes apr??s l???achat.</p>
        </dd>
      </dl>
    </div>
    <!-- service end -->

    <dl class="note">
      <dt>Note:  </dt>
      <dd>*.Ces programmes de promotion sont modifiables sans pr??avis, ?? tout moment et ?? notre seule discr??tion.</dd>
      <dd>* Les donn??es peuvent varier en fonction de diff??rents syst??mes ou ordinateurs</dd>
    </dl>
    <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Tous droits r??serv??s</p>
  </div>
</div>
<!-- bottom end -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
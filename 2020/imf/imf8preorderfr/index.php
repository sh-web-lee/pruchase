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
    $c_name = 'frimf8xr_p' . $date;
    $c_name_t='frimf8xr_t' . $date;
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
  $isNewUserV = false;
  $isNewRef = false;
  if(preg_match('/^7\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
    $isNewUser=true;
    if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
      $isNewRef = true;
    }
  }
  if(preg_match('/^5\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
    $isNewUserV = true;
    if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
      $isNewRef = true;
    }
  }

  $packsNum=49;
  $transData=json_decode(base64_decode($_GET['num']));
  if(!empty($transData)){
    if(@intval($transData->seats)){
      $packsNum=@intval($transData->seats);
    }
  }

  $popStr=empty($_GET['pop'])?'':('-'.$_GET['pop']);
  $refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

  $isNewRef = false;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
      'imfpro','iufree','iupro','dbfree',
      'dbpro','isu'))){
    $isNewRef = true;
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pr??commandez le nouvel IObit Malware Fighter 8 PRO pour 0???</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
      <h1 class="title">PR??VENTES EN DIRECT</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="msgbox fl">
          <h2>Pr??ventes ?? 0???, pour les 500 premiers <br> clients chaque jour</h2>
          <div class="barbox clearfix">
            <div class="progressbar fl">
              <span class="reducebar">Les 500 premiers clients</span>
              <div class="numbox">
                <span class="totalNum">498</span> vendues, plus que <b class="reduceNum"><em>2</em></b>  disponibles
              </div>
            </div>
            <div class="changebar fl"><span>Les clients suivants</span></div>
          </div>
          <ul class="barprice">
            <li>0???*</li>
            <li class="last">23,99???</li>
          </ul>
          <ul class="price">
            <li class="first">
              <p><strong>0???</strong><sup>*</sup></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=fr-imf8preorder&ref=fr_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorder-fr');">
                J???EN PROFITE VITE
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature ftop">
    <div class="wrapper">
      <h2>B??n??ficiez d'une confidentialit?? en ligne optimale avec IObit Malware Fighter 8 PRO</h2>
      <div class="arrow-down"></div>
      <h3 class="hfirst">Prot??gez-vous des attaques de logiciels malveillants</h3>
      <div class="feature-step clearfix">
        <div class="imgbox fl">
          <span class="browser"></span>
          <span class="files file-left"></span>
          <span class="files file-right"></span>
          <span class="worm">
            <em class="worm-legs-left01 on"></em>
            <em class="worm-legs-left02 on"></em>
            <em class="worm-legs-left03 on"></em>
            <em class="worm-legs-right01 on"></em>
            <em class="worm-legs-right02 on"></em>
            <em class="worm-legs-right03 on"></em>
          </span>
          <span class="worm-small worm-small-left"></span>
          <span class="worm-small worm-small-right"></span>
          <span class="worm-mask"></span>
          <span class="lock close"></span>
          <!-- <span class="lock open"></span> -->
          <span class="chain left"></span>
          <span class="chain right"></span>
          <span class="shield"><em class="star"></em></span>
        </div>
        <div class="message fr">
          <dl>
            <dt><h4>Moteur de Bitdefender leader mondial</h4></dt>
            <dd>D??tectez et ??liminez en temps r??el plus de 200 millions de malwares avec des capacit??s professionnelles de d??tection.</dd>
          </dl>
          <dl>
            <dt><h4>Aucune chance pour les Ransomwares</h4></dt>
            <dd>Emp??chez les ransomwares d'atteindre vos donn??es critiques contre des ran??ons.</dd>
          </dl>
          <dl>
            <dt><h4>Cl??s USB prot??g??es</h4></dt>
            <dd>Prot??gez votre PC contre les virus et malwares cach??s sur les cl??s USB qui sont susceptibles d???infecter votre PC via USB.</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature fbottom">
    <div class="wrapper">
      <h3 class="hlast">Emp??chez les pirates informatiques de vous espionner ou de vous surveiller</h3>
      <div class="feature-step clearfix">
        <div class="message fl">
          <dl>
            <dt><h4>Coffre-fort</h4></dt>
            <dd>Prot??gez vos informations les plus sensibles derri??re un mot de passe solide et emp??chez quiconque d???y acc??der sans votre consentement.</dd>
          </dl>
          <dl>
            <dt><h4>Protection de webcam</h4></dt>
            <dd>D??tectez tout acc??s non-autoris?? ?? votre webcam et emp??chez-les de vous espionner.</dd>
          </dl>
          <dl>
            <dt><h4>Anti-pistage</h4></dt>
            <dd>Effacez automatiquement vos traces lorsque vous fermez votre navigateur internet afin que vos activit??s restent priv??es.</dd>
          </dl>
        </div>
        <div class="imgbox fr">
          <span class="inner"></span>
          <span class="webpage"></span>
          <span class="red-circle"></span>
          <span class="codebox"></span>
          <span class="thief"></span>
          <span class="thief-hook"></span>
          <span class="password"></span>
          <span class="wordbox left"></span>
          <span class="safebox"><em class="safe-handle"></em></span>
          <span class="shieldtwo"><em class="fork"></em></span>
        </div>
      </div>
      <h3>La protection multicouche est pr??te pour vous </h3>
      <div class="realtime">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
          <dd><h4>Protection des e-mails <span><em>NOUVEAU</em></span></h4></dd>
          <dd>D??tection de liens <br> malveillants dans vos bo??tes mail.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
          <dd><h4>D??tection de sites Web malveillants</h4></dd>
          <dd>Pr??servez votre navigation des attaques <br> de phishing et des publicit??s aga??antes.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
          <dd><h4>Protection de t??l??chargement</h4></dd>
          <dd>Mettez votre PC ?? l'abri de <br> fichiers malveillants</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Ce que l'on dit de nous :</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>Filipe</dt>
              <dd>
                " IObit Malware Fighter est le meilleur logiciel de suppression de logiciels malveillants que j???utilise pour mon travail. Je travaille dans l???informatique et IMF est le meilleur outil de protection. Attention,??malware??! Vous n???aurez aucune chance. IMF est un logiciel intuitif avec des fonctionnalit??s avanc??es et une interface utilisateur tr??s agr??able. Un outil moderne pour un usage quotidien. "
              </dd>
            </dl>
            <dl>
              <dt>Software Informer</dt>
              <dd>
                " Le programme est ??quip?? de deux moteurs Antivirus, l???un vient de IObit, l???autre vient de Bitdefender. Il semble ??tre efficace contre les logiciels malveillants qui ne peuvent pas ??tre d??tect??s par d???autres concurrents, il est en mesure de d??tecter une grande quantit?? de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots. "
              </dd>
            </dl>
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                " IObit Malware Fighter est g??nial car il analyse les fichiers et les cl??s USB et prot??ge contre les menaces en ligne et hors ligne. La gamme de produit IObit m'offre toujours des services irr??prochables et m??me quand j'utilise seulement les versions gratuites. Je recommanderais IObit et leurs produits ?? tous ceux qui souhaitent utiliser des logiciels simples d'utilisation, qui assurent une protection int??grale ainsi qu'un PC performant. "
              </dd>
            </dl>
          </div>
        </div>
        <div class="handle">          
          <span class="one"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe"/></span>
          <span class="two on"><img src="<?php echo getStaticUrl('images/software.informer.png')?>" alt=""/></span>
          <span class="three"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Approuv?? par les m??dias de renomm??s mondiale </h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Nota : </dt>
      <dd>
        * A la fin de la p??riode d???essai de 30 jours, votre carte de cr??dit ou votre compte PayPal sera pr??lev?? automatiquement d???un montant de 23,99???. Ces 70% de r??duction sur le prix original de 79,99??? <br> &nbsp;&nbsp; est une offre exclusivement r??serv??e aux pr??ventes.
      </dd>
      <dd>
        * En cas d???insatisfaction, vous pouvez annuler votre achat dans les 30 jours, sans payer de frais suppl??mentaire.
      </dd>
    </dl>
    <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit.  Tous droits r??serv??s</p>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="barbox fl">
        <h2>Commandez-le maintenant pour 0???</h2>
        <div class="numbox">
          R??serv?? aux 500 premiers clients, plus que <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> disponibles??!
        </div>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong>0???</strong><sup>*</sup></p>
        </li>
        <li>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-imf8preorder&ref=fr_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorder-fr');">
            J???EN PROFITE VITE
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?><?php echo $popStr;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
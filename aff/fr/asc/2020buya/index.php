<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='fraff_asc13_2020buya1pc';
$ref3pc='fraff_asc13_2020buya3pc';
if(!empty($_GET['ref'])){
  $ref1pc=$ref3pc=$_GET['ref'];
}
include $pRootUrl.'include/common.inc.php';

$reduceNum=74041325;
$buyNum = number_format(ceil(microtimeFloat()*1000/20000) - $reduceNum);
if($_GET['action']=='maskCount'){
  $maskType=$_GET['maskType'];
  if(in_array($maskType,array(1,2))) {
    $buttonClick=$_GET['buttonClick'];
    $ip=empty($_GET['ip']) ? getIP() : $_GET['ip'];
    $time=time();
    try {
      $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
      $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->query("set names utf8");

      $sql = "insert into affascmaskcount2019 (ip,addTime,maskType,buttonClick) values(:ip,:addTime,:maskType,:buttonClick)";
      $pre = $pdo->prepare($sql);
      $pre->bindParam(':ip', $ip);
      $pre->bindParam(':addTime', $time);
      $pre->bindParam(':maskType', $maskType);
      $pre->bindParam(':buttonClick', $buttonClick);
      $pre->execute();
    } catch (PDOException $e) {
      var_dump($e->getMessage());
    }
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Activer Advanced SystemCare PRO maintenant pour que votre PC lent fonctionne à pleine capacité.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
        success: function(packs){
          $('.buynum').html(packs);
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt="" /></dt>
      <dd class="fl">
        <span>Vous activez:</span>
        <h1>Advanced SystemCare 13 PRO</h1>
        <p>Achetez maintenant pour redonnerune nouvelle jeunesse à votre PC inactif et <br> le faire fonctionner à pleine capacité!</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>“Advanced Systemcare vise à remédier à tout ce qui touche votre ordinateur”</p>
      <img src="<?php echo getStaticUrl('images/clnet.png')?>" alt="" />
    </div>
  </div>
</div>
<!-- banner end -->

<!-- container start -->
<div class="wrapper">
  <!-- title -->
  <h2 class="title"></h2>
  <!-- offer start -->
  <div class="offer clearfix">

    <!-- 1PC BOX -->
    <div class="box pc">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <!-- title -->
      <h2>1 an d’abonnement / 1 PC</h2>
      <!-- details -->
      <ul>
        <li><i></i>Nettoyage optimal de l'ordinateur</li>
        <li><i></i>Optimisation du système</li>
        <li><i></i>Protection intégrale de la vie privée</li>
        <li><i></i>Nettoyage automatique de la RAM</li>
        <li><i></i>Mises à jour gratuites</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>14,99<small>€</small></strong> <del>29,99€</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fraff-asc131pc1499&ref=fraff_asc13_2020buya1pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc132020buya1pc')">
          J’EN PROFITE
        </a>
      </div>
    </div>

    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>1 an d’abonnement / 3 PC</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>Nettoyage optimal de l'ordinateur</li>
        <li><i></i>Optimisation du système</li>
        <li><i></i>Protection intégrale de la vie privée</li>
        <li><i></i>Nettoyage automatique de la RAM</li>
        <li><i></i>Mises à jour gratuites</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>19,99<small>€</small></strong> <del>49,98€</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fraff-asc133pc1999a&ref=fraff_asc13_2020buya3pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc132020buya3pc')">
          J’EN PROFITE
        </a>
        <p class="people"><i></i> <b class="buynum"><?php echo $buyNum;?></b> personnes l’ont acheté</p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>Nous acceptons</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>GARANTIE DE REMBOURSEMENT DE 60 JOURS</h2>
        <p>
          Si vous n'êtes pas satisfait de Advanced SystemCare PRO, vous recevrez le remboursement intégral de votre achat dans les 60 jours.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>PAIEMENT SÉCURISÉ</h2>
        <p>
          Nous nous engageons à protéger vos informations personnelles avec un cryptage avancé et une protection anti-spam.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>SUPPORT TECHNIQUE GRATUIT 24/7</h2>
        <p>
          Notre équipe d'assistance premium répondra à toutes vos questions concernant nos produits dans les 24 heures.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>MISES À JOUR GRATUITES</h2>
        <p>
          Vous obtiendrez toutes les mises à jour logicielles gratuitement pendant la période d'abonnement.
        </p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->
</div>
<!-- container end -->

<!-- review start -->
<div class="container bordertop clearfix">
  <div class="review wrapper">
    <div class="review-box">
      <!-- 01 -->
      <div class="reviews clearfix">
        <h2>Avis des utilisateurs</h2>
        <h3>"Malgré le nettoyage des logiciels espions et malveillants mon antivirus laisse encore passer certains virus"</h3>
        <p>"Nous avions l'habitude de garder nos machines en marche et d’éviter les logiciels malveillants. Il fallait des heures chaque semaine pour maintenir la sécurité et les performances. Maintenant, avec Advanced System Care Pro, tout est au même endroit et il ne nous faut que quelques minutes tous les deux jours pour faire le même travail avec beaucoup plus de confiance"</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>Avis de média</h2>
        <h3>"Advanced Systemcare a pour objectif de remédier aux problèmes de votre ordinateur."</h3>
        <p>"Il n’ya rien de pire qu’un ordinateur tellement embourbé qu’il vous empêche de travailler ou de jouer à des jeux. Advanced Systemcare vise à remédier aux problèmes de votre ordinateur non seulement en nettoyant les fichiers indésirables, les logiciels malveillants et les entrées de registre invalides, mais également en donnant à votre ordinateur un coup de pouce pour optimiser votre expérience informatique."</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>Avis des utilisateur</h2>
        <h3>"Mon choix est sans aucun douteAdvanced SystemCare Pro."</h3>
        <p>"Mon choix est sans aucun douteAdvanced SystemCare Pro."
          En tant que technicien de réparation d’ordinateurs, je trouve que la plupart des problèmes communs peuvent être souvent résolu en scannant le PC avec ASC free. Quand j’ai fini la réparation , je proposais habituellement à mes clients d’acheter la version Pro. Qui a besoin d’un technicien lorsque l’on peut profiter d’un logiciel aussi puissant qu’Advanced SystemCare Pro 24-7? C’est le meilleur produit qu’un utilisateur débutant peut acheter. Merci à IObit qui rend mon travail plus facile."</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"><span></span></div>
        <strong>Bob Bassett</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
        <strong>Cnet</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"><span></span></div>
        <strong>Charles R. Widick</strong>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- footer start -->
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
<!-- footer end -->

<!-- mask start -->
<div class="mask">
  <div class="mask-box">
    <div class="close" onclick="maskClose()">x</div>
  </div>
</div>
<!-- mask end -->

<script>var imgSrc = "<?php echo getStaticUrl('images/off.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
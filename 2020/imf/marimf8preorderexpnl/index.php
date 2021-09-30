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
    $c_name = 'nlimf8exp_p' . $date;
    $c_name_t='nlimf8exp_t' . $date;
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
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Alleen in de Voorverkoop IObit Malware Fighter 8 voor de laagste prijs!</title>
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
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
      <h1 class="title">Alleen in de Voorverkoop</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="msgbox fl">
          <h2> Krijg PRO terug met hoge korting!</h2>
          <div class="barbox clearfix">
            <div class="progressbar fl">
              <span class="reducebar">Eerste 500 Klanten</span>
              <div class="numbox">
                <span class="totalNum">0</span>  verkocht, <b class="reduceNum"><em>0</em></b> over
              </div>
            </div>
            <div class="changebar fl"><span>Alle andere klanten vandaag</span></div>
          </div>
          <ul class="barprice">
            <li>€16,99  </li>
            <li class="last"> €21,99</li>
          </ul>
          <ul class="price">
            <li class="first">
              <p><strong>€<b>16</b>,99 </strong> <del> €79,99</del></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=nl-imf8preorder1699&ref=nl_imf8preorder1699<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorderexp-nl')">
                Bestel Nu
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

 <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <div class="arrow-down"></div>
      <h2>Wat Heeft IObit Malware Fighter PRO Voor U Gedaan?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
          <span class="line-left line"></span>
        </div>
        <div class="message fr">
          <h3>Uw pc beschermd</h3>
          <ul>
            <li>
             <?php if(!empty($_GET['fileto'])):?><b class="remove"><?php echo number_format($_GET['fileto'])?></b><?php endif;?>  Bedreigingen verwijderd voor een veilige pc 
            </li>
            <li>
              <?php if(!empty($_GET['rsto'])):?><b class="stop"><?php echo number_format($_GET['rsto'])?></b><?php endif;?>  Ransomware-aanvallen geblokkeerd
            </li>
            <li> Infecties via USB-schijven voorkomen</li>
            <li><b>Complete</b> realtime bescherming geleverd</li>
          </ul>
        </div>
      </div>
      <div class="clearfix">
        <div class="message message2 fl">
          <h3>Uw privacy beschermd</h3>
          <ul>
            <li>
              <?php if(!empty($_GET['camto'])):?><b class="detect"><?php echo number_format($_GET['camto'])?></b><?php endif;?> Toegangspogingen tot uw webcam geblokkeerd
            </li>
            <li>
              <?php if(!empty($_GET['traceto'])):?><b class="online"><?php echo number_format($_GET['traceto'])?></b><?php endif;?> Surfsporen gewist zodat u niet bespied werd
            </li>
            <li>Uw persoonlijke bestanden met een <b>wachtwoord beschermd</b></li>
          </ul>
        </div>
        <div class="imgbox imgbox2 fr">
          <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
          <span class="line-right line"></span>
          <span class="shield-box"><em class="shield"></em><em class="shield-shadow"></em></span>
        </div>
      </div>
      <div class="fbottom">
        <h2>Zonder PRO, Moet U <b>Afscheid Nemen Van:</b></h2>
        <div class="clearfix">
          <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/screen03.png')?>" alt=""/>
            <span class="warning"></span>
          </div>
          <div class="message fr">
            <ul>
              <li>Bescherming tegen malware & virussen met de Bitdefender Engine;</li>
              <li>Bescherming tegen ransomware met de IObit Anti-ransomware Engine;</li>
              <li>Camerabescherming zodat u niet bespioneerd wordt;</li>
              <li>Bescherming tegen geïnfecteerde USB-schijven;</li>
              <li>Privacybescherming met automatisch wissen van online sporen;</li>
              <li>Automatisch malware database updaten;</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- moregives start -->
  <div class="moregives">
    <h2>Krijg nu alles terug, en meer in de nieuwe versie:</h2>
    <div class="wrapper">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
        <dd>
          <big>100% Grotere</big>
          <p>Malware Database</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
        <dd>
          <big>50%* Sneller</big>
          <p>scannen</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
        <dd>
          <big>E-mailbescherming</big>
          <p>om gevaarlijke links te blokkeren</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- moregives end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Wat vinden anderen?</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>Filipe</dt>
              <dd>
                "IObit Malware Fighter is de beste malware verwijderaar die ik in mijn werk gebruik. Ik werk in de IT en IMF is de beste beschermtool. Pas op, malware! Je hebt geen schijn van kans. IMF is intuïtieve software met geavanceerde functies en een hele fijne user interface. Een moderne tool voor alledaags gebruik."
              </dd>
            </dl>
            <dl>
              <dt>software.informer</dt>
              <dd>
                "Het programma gebruikt twee engines, de eigen en de Bitdefender engine, en blijkt effectief tegen malware die vergelijkbare tools niet kunnen vinden. Het is daarom goed om deze naast eventuele eigen anti-virussoftware te draaien. Het kan een brede selectie spyware, ransomware, adware, Trojans, wormen, keyloggers en bots detecteren."
              </dd>
            </dl>
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                "IObit Malware fighter is geweldig omdat het bestanden en USB’s scant en beschermt tegen online en offline bedreigingen. Over de hele range, heb ik geweldige resultaten met IObit producten, zelfs de gratis versies helpen al met mijn computer. Ik zou IObit en al hun producten aanraden aan iedereen die bescherming en een snellere computer wil en om het leven een stukje makkelijker te maken."
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
      <h2>Internationale Prijzen</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Opmerkingen:</dt>
      <dd>
        *U kunt direct na de bestelling aan de slag met de RC versie van IObit Malware Fighter 8 PRO. Bij de officiële lancering van IObit Malware Fighter 8, laten we u weten dat u kunt updaten naar de definitieve versie.
      </dd>
      <dd>
        *IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
      </dd>
    </dl>
    <!-- <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p> -->
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="barbox fl">
        <h2>Alleen in de Voorverkoop</h2>
        <div class="numbox">
          Voor de eerste 500 klanten,  <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> over
        </div>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong>€<b>16</b>,99 </strong> <del> €79,99</del></p>
        </li>
        <li>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=nl-imf8preorder1699&ref=nl_imf8preorder1699<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorderexp-nl')">
            Bestel Nu
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
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
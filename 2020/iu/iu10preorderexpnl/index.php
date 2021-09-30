<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum = rand(116, 198);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}

if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'nliujunexp0716_p' . $date;
    $c_name_t = 'nliujunexp0716_t' . $date;
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = rand(41, 59);
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t, $totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$data = json_decode(base64_decode($_GET['data']), true);
$data_arr = $data['iu10pre'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exclusieve Voorverkoopkorting op IObit Uninstaller PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
        mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
        mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>    
</head>

<body>
<!-- banner start -->
<div class="banner" data-name="animation">
  <div class="wrapper">
    <div class="top">
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
        IObit
      </a>
      <div class="icon">
        <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
        IObit Uninstaller 10
      </div>        
    </div>
    <div class="clearfix">
      <div class="left-img">
        <img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" class="iu-box" data-name="default">
        <img src="<?php echo getStaticUrl('images/banner-icon01.png') ?>" alt="" class="iu-icon01"
             data-name="default">
        <img src="<?php echo getStaticUrl('images/banner-icon02.png') ?>" alt="" class="iu-icon02"
             data-name="default">            
      </div>
      <div class="right fr">
        <h1 data-name="default">Exclusief in de Voorverkoop</h1>
        <h2 data-name="default">Krijg PRO Terug Voor de Laagste Prijs</h2>
        <h3 data-name="default">Alleen voor de eerste 500 beslissers van vandaag!</h3>
        <div class="number" data-name="default">
          Nog 
          <div id="reduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>5</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          over
          <div class="bar">
            <span></span>
          </div> 
        </div>
        <div class="price" data-name="default">
          <strong>€<big>14</big>,99</strong> <del>€29,99</del>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=nl-iu10preorder1499&ref=nl_iu10preorderexp1499<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderexp-nl');">
            Krijg PRO Terug
          </a>                
        </div>              
      </div>          
    </div> 
  </div> 
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper ">
    <h2>IObit Uninstaller PRO Heeft Veel Voor U Gedaan</h2>
    <div class="clearfix">
      <dl class="one" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon01.png') ?>" alt=""/></dt>
        <dd>
          <?php echo empty($data_arr['soft']) ? '' : '<b class="total">' . $data_arr['soft'] . '</b>'; ?>
            programma’s gedeïnstalleerd,
            waaronder <?php echo (empty($data_arr['bundle']) || empty($data_arr['soft'])) ? '' : '<b class="bundle">' . $data_arr['bundle'] . '</b>'; ?>
            gebundelde
            & <?php echo (empty($data_arr['stubborn']) || empty($data_arr['soft'])) ? '' : '<b class="sofeware">' . $data_arr['stubborn'] . '</b>'; ?>
            hardnekkige software.
        </dd>
      </dl>
      <dl class="right three" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon02.png') ?>" alt=""/></dt>
        <dd>
          <?php echo empty($data_arr['plugin']) ? '' : '<b class="plug-total">' . $data_arr['plugin'] . '</b>'; ?>
            plug-ins & taakbalken verwijderd,
            waaronder <?php echo (empty($data_arr['plugin-mp']) || empty($data_arr['plugin'])) ? '' : '<b class="mail">' . $data_arr['plugin-mp'] . '</b>'; ?>
            schadelijke en adverterende plug-ins.
        </dd>
      </dl>
      <dl class="two" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon03.png') ?>" alt=""/></dt>
        <?php echo (empty($data_arr['file']) || empty($data_arr['reg'])) ? '<dd>restbestanden en register items verwijderd.</dd>' : '<dd><b class="files">' . $data_arr['file'] . '</b> restbestanden en <b class="registries">' . $data_arr['reg'] . '</b> register items verwijderd.</dd>'; ?>
      </dl>
      <dl class="right two" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon04.png') ?>" alt=""/></dt>
        <?php if (empty($data_arr['filesize'])) : ?>
          <dd>sporen opgeschoond en schijfruimte bespaard</dd>
        <?php else :
          $filesize = round($data_arr['filesize'] / (1024 * 1024), 2);
          $size = explode('.', $filesize);
        ?>
          <dd><b class="disk"><em class="integer"><?php echo $size[0];?></em>.<em class="decimal"><?php echo $size[1];?></em></b> MB schijfruimte bespaard.</dd>
        <?php endif; ?>
      </dl>
    </div>  
  </div>    
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature" data-name="animation">
  <div class="wrapper">
    <h2>Uw PRO versie is verlopen, dus u profiteert <span>niet meer van:</span></h2>
    <div class="feature-img">
      <img class="img-box" src="<?php echo getStaticUrl('images/feature-img.png') ?>" data-name="default" alt=""/>
      <dl class="one" data-name="default">
        <dt>Krachtige Deïnstallatie</dt>
        <dd>
          In 1 klik ongewenste programma’s verwijderen, waaronder hardnekkige en antivirus software die anders niet te verwijderen is.  
        </dd> 
      </dl>
      <dl class="two" data-name="default">
        <dt>Veilig & Snel Browsen</dt>
        <dd>Verwijder schadelijke & adverterende plug-ins voor een veilige en soepele surfervaring.</dd>
      </dl>
      <dl class="three" data-name="default">
        <dt>Software Updaten</dt>
        <dd>In 1 klik alle belangrijke software updaten zonder dat de gebruiker iets hoeft te doen.</dd>
      </dl>
      <dl class="four" data-name="default">
        <dt>Automatisch Opschonen</dt>
        <dd>
          Detecteer en wis automatisch alle restanten, ook als ze bij deïnstallatie zonder IObit Uninstaller zijn achtergebleven. 
        </dd>
      </dl>
      <dl class="five" data-name="default">
        <dt>Grondig Opschonen</dt>
        <dd>
          Volledige verwijdering van alle bestanden en register items die bij installaties zijn aangemaakt en bij standaardverwijdering worden achtergelaten. 
        </dd>
      </dl>
      <span class="circle one" data-name="default"></span>
      <span class="circle two" data-name="default"></span>
      <span class="circle three" data-name="default"></span>   
    </div>  
  </div>
    
</div>
<!-- feature end -->

<div class="feature-02" data-name="animation">
  <div class="wrapper">
    <h2>IObit Uninstaller 10 Is Nog Beter, Dankzij:</h2>
    <dl data-name="default" class="one">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon08.png') ?>" alt=""></dt>
      <dd>
        <h3><b>50% Sneller</b> Deïnstallatieproces</h3>
      </dd>
    </dl>
    <dl class="center" data-name="default">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon07.png') ?>" alt=""></dt>
      <dd>
        <h3>Verwijdert <b>30% meer</b> restanten </h3>
      </dd>
    </dl>
    <dl data-name="default" class="three">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png') ?>" alt=""></dt>
      <dd>
        <h3><b>Blokkeert</b> meldingen op websites</h3>
      </dd>
    </dl>
  </div>
</div>

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>Kies de betrouwbaarste deïnstallatiesoftware</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
      <dd>
        <h3>50 miljoen+</h3>
        <p>Downloads</p>
      </dd>
    </dl>
    <dl class="center">
      <dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
      <dd>
        <h3>4.5+</h3>
        <p>Gebruikersoordeel</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
      <dd>
        <h3>1000+</h3>
        <p>Media Aanbevelingen</p>
      </dd>
    </dl>
    <div class="review-box">
      <div class="box">
        <h3>Klantbeoordeling</h3>
        <p>Ik gebruik IObit Uninstaller al heel lang, en ik hou ervan. Het is heel grondig en nu zelfs nog beter. Ik ben heel tevreden en kan niet meer zonder. Als je het nog niet gebruikt, moet je het zeker proberen. Het is nu 100% beter dan een jaar geleden. Het ruimt alle rotzooi uit het register op en dat doet het geweldig.</p>
      </div>
      <div class="box">
        <h3>Klantbeoordeling</h3>
        <p>Dit programma bespaart me een hoop geld. Voordat ik het gebruikte was mijn computer heel traag. Ik kon er niets meer mee. Dankzij dit programma, is mijn computer weer hartstikke snel. Dankzij dit programma hoef ik geen nieuwe computer te kopen. Heel erg bedankt, IObit! I love you.</p>
      </div>
      <div class="box active">
        <h3>Media recensie</h3>
        <p>"Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen."</p>
      </div>
      <div class="box">
        <h3>Klantbeoordeling</h3>
        <p>Ik heb in het verleden meerdere uninstallers gebruikt, maar zodra ik IObit gebruikte (sinds versie 7.0), wilde ik nooit meer een ander programma. De interface is zeer gebruiksvriendelijk en doet wat het doen moet met indrukwekkende perfectie. Het verschoont automatisch het register, dat anders helemaal dichtslibt, en draagt zo bij aan de gezondheid van de PC. De bundleware dectectie en verwijdering zijn super en ongeëvenaard door andere software.</p>
      </div>
      <div class="box">
        <h3>Klantbeoordeling</h3>
        <p>IObit Uninstaller detecteert plug-ins in my browsers waarvan ik niet eens wist dat ze bestonden. Het opschonen van restbestanden is heel goed; er blijven geen nutteloze gegevens achter. Mijn hele computer werkt daardoor beter. Het is een handig en gebruiksvriendelijk programma; ik beveel het al mijn vrienden aan.</p>
      </div>
    </div>
    <ul>
      <li>
        <span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
        <p>Ivan White</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
        <p> Ali Tekin</p>
      </li>
      <li class="active">
        <span><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></span>
        <p>MakeUseOf</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></span>
        <p>Samrat Kumar Chakrabortty</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></span>
        <p>John Glenn Perong</p>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- service start -->
<div class="service">
  <div class="wrapper">
    <h2>Wereldwijde Awards</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- service end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <dl class="annotation">
      <dt>Opmerking:</dt>
      <dd>
        U kunt direct na de bestelling aan de slag met de RC versie van IObit Uninstaller 10 PRO. Deze versie bevat vrijwel alle functies van de definitieve versie. Bij de officiële lancering van IObit Uninstaller 10 PRO, laten we u weten dat u kunt updaten naar de definitieve versie.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Alle rechten voorbehouden</p>    
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
      IObit Uninstaller 10
    </div>
    <div class="number fl">
      Nog 
      <div id="fReduce" class="reduceNum">
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
      </div> 
      van de 500 over
    </div>
  </div>
</div>
<!-- floatlayer end -->
<script>refStr = "<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>
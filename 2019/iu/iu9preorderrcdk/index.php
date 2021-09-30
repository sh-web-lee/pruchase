<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'eniujune_p' . $date;
	$c_name_t='eniujune_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(49,58);
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
	$refStr.='-'.$_GET['to'];
}

$transData=json_decode(base64_decode($_GET['data']));
?>
<!DOCTYPE html>
<html lang="dk">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Betal 0 kr. for at få den nyeste IObit Uninstaller PRO</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
      <!-- logo -->
			<a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
      <!-- title -->
			<h1>Det globale forsalg er live</h1>
			<div class="clearfix">
        <!-- left-message: iu-box -->
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
        <!-- right-message -->
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<?php if(($_GET['to']!='softwarehealth')||((intval($transData->softwarehealth->plugin)+intval($transData->softwarehealth->software))<=0)):?>
					<p>Afinstaller fuldstændigt uden at efterlade spor</p>
					<?php else:?>
          			<p class="data">
						<?php if(intval($transData->softwarehealth->plugin)>0):?>
              1 klik for at fjerne <strong><?php echo intval($transData->softwarehealth->plugin);?></strong> ondsindede plug-in(s) <br>
						<?php endif;?>
						<?php if(intval($transData->softwarehealth->software)>0):?>
            			<?php echo (intval($transData->softwarehealth->plugin)>0)?'og':'';?> opdater <strong><?php echo intval($transData->softwarehealth->software);?></strong> forældede software på din PC
						<?php endif;?>
          			</p>
					<?php endif;?>
					<ul class="price clearfix">
						<li class="first">
              <p><strong><big>0</big> kr.<sup>*</sup></strong> <del>399 kr.</del></p>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change"><b class="giftNum">50</b> enheder tilbage</p>
						</li>
						<li>
              <!-- buybtn -->
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=dk-iu9preorder&ref=dk_iu9preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderrc-dk');">
                Forudbestil nu
              </a>
						</li>
					</ul>
				</div>
			</div>
			<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro">
    <h2>Hvorfor opgradere til PRO-versionen?</h2>
    <!-- content -->
    <div class="content">
      <div class="wrapper">
        <ul class="clearfix">
          <li class="active">Grundigere afinstallationer</li>
          <li>Grundigere rensning</li>
        </ul>
        <div class="box">
          <div class="inlist">
            <div class="indetail first clearfix">
              <dl class="fl">
                <dt>
                  <h3>Din nuværende version</h3>
                  <h4>Afinstaller</h4>
                </dt>
                <dd>
                  Programmer, browser udvidelser <br>
                  og Windows apps.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>PRO Versionen</h3>
                  <h4>Afinstaller</h4>
                </dt>
                <dd>
                  Programmer, browser udvidelser <br>
                  og Windows apps.
                </dd>
                <dd>
                  Stædige programmer som ikke kan <br>
                  afinstalleres konventionelt.
                </dd>
                <dd>
                  Bundled programmer med freeware, <br>
                  som reklamerer og stjæler private date. <br>
                  <em>Unik på markedet</em>
                </dd>
                <dd>
                  Ondsindede- og annonce-plug-ins som <br>
                  indskyder reklamer eller ondsindede <br>
                  links på viste sider. <br>
                  <em>Unik på markedet</em>
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
            <div class="indetail last clearfix">
              <dl class="fl">
                <dt>
                  <h3>Din nuværende version</h3>
                </dt>
                <dd>
                  <h4>Fjerner</h4>
                  Resterende filer og resterende <br>
                  databaseposter efter afinstallation.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>PRO Versionen</h3>
                </dt>
                <dd>
                  <h4>Fjerner</h4>
                  Resterende filer og resterende <br>
                  databaseposter efter afinstallation.
                </dd>
                <dd>
                  <h4>Opfang <i class="new">NY</i></h4>
                  Systemændringer foretaget af et <br>
                  program og vend tilbage til den oprindelige <br>
                  tilstand(før ændringerne) efter afinstallering <br>
                  af programmetr.
                </dd>
                <dd>
                  <h4>Skanner</h4>
                  Resterende filer fra tidligere <br>
                  afinstallerede programmer uden <br>
                  brug af IObit Uninstaller. <br>
                  <em>Unik på markedet</em>
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next active">></span>
    </div>
	</div>
	<!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <div class="iumouse"><div class="mouse"></div></div>
      <h2>Andre fordele ved IObit Uninstaller 9 PRO</h2>
      <div class="clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/iu-screen-03.png')?>" alt="IObit Uninstaller PRO"/>
        </div>
        <div class="right fr">
          <ul class="feature-list">
            <li><i class="all-icons">√</i> Fjerner programmer, browser udvidelser og Windows apps i bundter</li>
            <li><i class="all-icons">√</i> Afinstallerer programmer via skrivebordsikoner, åbne vinduer eller proceslinjen</li>
            <li><i class="all-icons">√</i> Opretter automatisk et gendannelsespunkt inden afinstallering</li>
            <li><i class="all-icons">√</i> Opdaterer alle forældede programmer med et klik</li>
            <li><i class="all-icons">√</i> Opdaterer automatisk når en ny version er tilgængelig</li>
            <li><i class="all-icons">√</i> Premium 24/7 teknisk support</li>
          </ul>
        </div>
      </div>
      <div class="price clearfix">
        <h3>Forudbestil for 0 kr. nu for at få adgang til alle PRO-funktioner</h3>
        <div class="fl">
          <strong><big>0</big> kr.<sup>*</sup></strong> <del>399 kr.</del>
          <p class="change">Kun<b class="giftNum">50</b>enheder tilbage</p>
        </div>
        <a class="buybtn fl"
           href="https://www.iobit.com/buy.php?product=dk-iu9preorder&ref=dk_iu9preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderrc-dk');">
          Forudbestil nu
        </a>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Hvad andre siger?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
            <dd>
              <h3>Medieanmeldelser</h3>
              <p>"Dette nemme og informative afinstallationsværktøj renser, konfigurerer og optimerer din pc. Brugere kan downloade det på et øjeblik. Dette afinstallationsværktøj kan kategoriseres som den bedste uninstaller og det giver brugerne mulighed for at afinstallere flere progranner på en gang. Det tilbyder brugere at køre en "grundig scanning" for at gå dybere og finde efterladenskaber. Ydelsen alene gør det lille afinstalleringsværktøj værd at beholde."</p>
              <h4>MakeUseOf</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
            <dd>
              <h3>Brugeranmeldelser</h3>
              <p>
                Jeg har brugt IObits programmer i årevis med stor tilfredshed! Af denne grund holder jeg mig til IObits produkter. Jeg har tidligere repareret bærbare computere og mobiltelefoner (android) og efterlader dem altid med IObits produkter installeret og råder kunderne til regelmæssigt at ’’trykke på det store C’’ og siger til dem, at det automatisk vil rette og accelerere deres bærbar/computer/mobil! <br>
                Jeg anbefaler varmt deres afinstallationsprogram Uninstaller (og den seneste beta) som er et sikkert og pålideligt program, som fjerner stædige programmer. Vigtigere er, at det også fjerner skjulte koder som programører efterlader for at bringe reklamer om at installere programmet igen! <br>
                Alle IObits programmer er sikre og nemme at bruge og de passer på din PC.
              </p>
              <h4>Jeff A Watts</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>Brugeranmeldelser</h3>
              <p>Jeg synes at IObit Uninstaller er fantastisk og det har alt hvad du behøver og mere til. Jeg elsker det faktum, at det afinstallerer alle resterende fragmenter. Det har også en opdateringssoftware, som notificerer dig, når et af dine programmer har brug for at blive opdateret og det afinstallerer i bundter, hvilket virkelig gør det til en vinder. Faktisk er det alt hvad du behøver for at holde din computer i topform og klar til køre til hver en tid. </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>Brugeranmeldelser</h3>
              <p>
                IObit Uninstaller er det bedste program til at fjerne programmer på din computer, det er hurtigt og super effektivt. Den basale uninstaller på Windows kan slet ikke sammenlignes hermed, det renser grundigt alle rester af programmer, så der ikke forekommer nogen forsinkelser på computeren. Jeg har brugt det i et par måneder og kan slet ikke undvære det, jeg anbefaler det både til venner og familie. <br>
                Tak, IObit Uninstaller er fantastisk.
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
            <dd>
              <h3>Brugeranmeldelser</h3>
              <p>"IObit Uninstaller bliver bedre ved hver opdatering. Jeg har brugt det i mere end 3 år nu. Det er hurtigt at indlæse og har en simpel brugergrænseflade. Nogle af de mange funktioner, jeg regelmæssigt bruger, er batch-afinstallation, grundig scanning, filmakulering og den nye funktion, som giver mig hurtig adgang til et program jeg lige har installeret, som jeg ikke kan lide eller som ikke virker korrekt."</p>
              <h4>Lovro Žužić</h4>
            </dd>
          </dl>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next">></span>
    </div>
  </div>
  <!-- review end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper">
      <h2>Priser fra hele verden</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <dl class="annotation">
        <dt>Note:</dt>
        <dd>
          *.Efter 30 dages gratis prøveperiode, trækkes 159 kr. fra dit kreditkort eller PayPal-konto automatisk. 60% rabat fra originalprisen på 399 kr. gælder kun for forudbestillinger!
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Rettigheder forbeholdes</p>
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
      </div>
      <div class="price fr clearfix">
        <div class="one fl">
          <div id="fReduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>5</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          <p class="change"><span class="viewNum"><?php echo $viewNum;?></span>  ser på dette, kun <b class="giftNum">50</b>enheder tilbage!</p>
        </div>
        <div class="two fl"><strong><big>0</big>kr.<sup>*</sup></strong> <del>399 kr.</del></div>
        <div class="three fl">
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-iu9preorder&ref=dk_iu9preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderrc-dk');">
            Forudbestil nu
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
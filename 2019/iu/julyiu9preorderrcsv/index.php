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
<html lang="sv">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Betala 0 kr för att få den senaste versionen av IObit Uninstaller PRO</title>
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
			<a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
      <!-- title -->
			<h1>Global Presale</h1>
			<div class="clearfix">
        <!-- left-message: iu-box -->
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
        <!-- right-message -->
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<?php if(($_GET['to']!='softwarehealth')||((intval($transData->softwarehealth->plugin)+intval($transData->softwarehealth->software))<=0)):?>
					<p>Komplett avinstallation utan att lämna ett spår</p>
					<?php else:?>
          			<p class="data">
						<?php if(intval($transData->softwarehealth->plugin)>0):?>
              1-klick för att ta bort <strong><?php echo intval($transData->softwarehealth->plugin);?></strong> skadliga plugin(s) <br>
						<?php endif;?>
						<?php if(intval($transData->softwarehealth->software)>0):?>
            			<?php echo (intval($transData->softwarehealth->plugin)>0)?'och':'';?> uppdatera <strong><?php echo intval($transData->softwarehealth->software);?></strong> föråldrade programvaror på din PC
						<?php endif;?>
          			</p>
					<?php endif;?>
					<ul class="price clearfix">
						<li class="first">
              <p><strong><big>0</big> kr<sup>*</sup></strong> <del>499 kr</del></p>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change"><b class="giftNum">50</b> paket kvar</p>
						</li>
						<li>
              <!-- buybtn -->
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=sv-iu9preorder&ref=sv_iu9preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=sv_purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderrc-sv');">
                Förbeställ Nu
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
    <h2>Varför uppgradera till IObit Uninstaller 9 PRO?</h2>
    <!-- content -->
    <div class="content">
      <div class="wrapper">
        <ul class="clearfix">
          <li class="active">Kraftfullare avinstallerare</li>
          <li>Mer noggrann städning</li>
        </ul>
        <div class="box">
          <div class="inlist">
            <div class="indetail first clearfix">
              <dl class="fl">
                <dt>
                  <h3>Din nuvarande utgåva </h3>
                  <h4>Avinstallera</h4>
                </dt>
                <dd>
                  Program, browser extensions och <br>
                  Windows-appar.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>PRO Edition</h3>
                  <h4>Avinstallera </h4>
                </dt>
                <dd>
                  Program, browser extensions och <br>
                  Windows-appar.
                </dd>
                <dd>
                  Envisa program som inte kan <br>
                  avinstalleras med konventionella medel.
                </dd>
                <dd>
                  Medföljande program vid sidan av <br>
                  gratisprogram som annonserar eller <br>
                  stjäl privata data. <br>
                  <em>unik på marknaden</em>
                </dd>
                <dd>
                  Skadliga och reklam plug-ins som lägger <br>
                  till annonser eller skadliga länkar till <br>
                  sidorna som visas. <br>
                  <em>unik på marknaden</em>
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
            <div class="indetail last clearfix">
              <dl class="fl">
                <dt>
                  <h3>Din nuvarande utgåva </h3>
                </dt>
                <dd>
                  <h4>Ta bort</h4>
                  Restfiler samt register efter <br>
                  avinstallation.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>PRO Edition</h3>
                </dt>
                <dd>
                  <h4>Ta bort</h4>
                  15% flera restfiler och register <br>
                  efter avinstallation.
                </dd>
                <dd>
                  <h4>Upptäck </h4>
                  systemändringar gjorda av ett program <br>
                  och återställ dem efter avinstallation <br>
                  av programmet.
                </dd>
                <dd>
                  <h4>Sök</h4>
                  Kvarvarande filer av avinstallerade <br>
                  program som tidigare avinstallerats <br>
                  utan IObit Uninstaller. <br>
                  <em>unik på marknaden</em>
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
      <h2>Flera andra fördelar med IObit Uninstaller 9 PRO</h2>
      <div class="clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/iu-screen-03.png')?>" alt="IObit Uninstaller PRO"/>
        </div>
        <div class="right fr">
          <ul class="feature-list">
            <li><i class="all-icons">√</i> Ta bort flera program, browser extensions och Windows-appar samtidigt</li>
            <li><i class="all-icons">√</i> Avinstallera program via skrivbordsikon, öppnat fönster eller systemfältikon</li>
            <li><i class="all-icons">√</i> Gör en återställningspunkt automatiskt innan du avinstallerar</li>
            <li><i class="all-icons">√</i> Uppdatera alla föråldrade program med ett klick</li>
            <li><i class="all-icons">√</i> Uppdatera automatiskt när en ny version är tillgänglig </li>
            <li><i class="all-icons">√</i> Premium 24/7 teknisk support på begäran</li>
          </ul>
        </div>
      </div>
      <div class="price clearfix">
        <h3>Förbeställ nu för 0 kr för att låsa upp alla PRO-funktioner </h3>
        <div class="fl">
          <strong><big>0</big> kr<sup>*</sup></strong> <del>499 kr</del>
          <p class="change">Nu endast<b class="giftNum">50</b>paket kvar</p>
        </div>
        <a class="buybtn fl"
           href="https://www.iobit.com/buy.php?product=sv-iu9preorder&ref=sv_iu9preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=sv_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderrc-sv');">
          Förbeställ Nu
        </a>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Vad säger andra?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
            <dd>
              <h3>I media</h3>
              <p>
                ”IObit Unistaller har ett användarvänligt gränssnitt och användare kan ladda ner det på ett ögonblick. Programmet kan kategoriseras till den bästa avinstalleraren och programmet tillåter användaren att avinstallera flera program samtidigt. Användare erbjuds även att genomföra en djup-skanning för att hitta rester. Prestandan är såpass bra att det är värt att behålla verktyget enbart för den saken."
              </p>
              <h4>MakeUseOf</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
            <dd>
              <h3>Användares omdömen</h3>
              <p>
                "Jag har använt IObit-program i många år och de har gett bra resultat! Därför fortsätter jag att använda dem. Jag har tidigare servat och fixat både bärbara datorer och Android-mobiler och alltid lämnat dem med IObit-produkter installerade. Jag ber kunderna att regelbundet "slå stora" C:t och berättar för dem att det automatiskt kommer att fixa och öka farten på deras bärbara datorer och datorer :) <br>
                Jag rekommenderar starkt detta program (och den senaste betaversionen) som ett säkert och pålitligt program som tar bort envisa program! Viktigast, ta bort "dold" kodning som programmeraren tänkte lämna, vilket sedan medför annonser om att ominstallera igen! <br>
                Alla IObit produkter är säkra och enkla att använda och mest av allt sköter de om din PC."
              </p>
              <h4>Jeff A Watts</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>Användares omdömen</h3>
              <p>
                "Jag tycker att IObit Uninstaller är utmärkt eftersom det har allt du kan önska dig. Jag älskar det faktum att det avinstallerar alla fragmentrester. Det har även en mjukvaruuppdaterare som påminner dig när ett av programmen behöver uppdateras och det faktum att det avinstallera flera program samtidigt gör det verkligen till en vinnare. Det är i själva verket det man behöver för att hålla datorn fungerande."
              </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>Användares omdömen</h3>
              <p>
                "IObit Uninstaller är den bästa programvaran för att ta bort program på datorn. Det är snabbt och mycket effektivt och rensar programrester så att det inte finns några fördröjningar på datorn. Jag har använt det i några månader och jag vet inte hur man klarar sig utan det. Jag rekommenderar det till mina vänner och familj. Tack, IObit Uninstaller är fantastiskt."
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
            <dd>
              <h3>Användares omdömen</h3>
              <p>
                "IObit Uninstaller blir bättre med varje uppdatering. Jag har använt det i mer än 3 år nu. Det går snabbt att ladda ner och har enkel UI. Några av de många funktioner som jag använder regelbundet är Batch Uninstall, Powerful Scan, File Shredder och Recently Installed som ger mig snabb åtkomst till ett program som jag just installerat som jag inte gillar eller inte funkar."
              </p>
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
      <h2>Världsomspännande Utmärkelser</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <dl class="annotation">
        <dt>Notera: </dt>
        <dd>
          *. Vid slutet av den kostnadsfria 30-dagars testperioden kommer ditt kreditkort eller PayPal-konto att debiteras 239 kr automatiskt. Denna 52% rabatt från det ursprungliga priset på 499 kr är endast en bonus på förbeställningar!
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
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
          <p class="change"><span class="viewNum"><?php echo $viewNum;?></span> besökare nu, endast <b class="giftNum">50</b> paket kvar!</p>
        </div>
        <div class="two fl"><strong><big>0</big>kr<sup>*</sup></strong> <del>499 kr</del></div>
        <div class="three fl">
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=sv-iu9preorder&ref=sv_iu9preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=sv_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderrc-sv');">
            Förbeställ Nu
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
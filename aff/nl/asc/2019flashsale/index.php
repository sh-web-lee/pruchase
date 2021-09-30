<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl.'include/common.inc.php';
include $pRootUrl.'callback.php';
if (empty($_GET['ref'])) $_GET['ref'] = 'nlaff_asc12_2019flashsale';

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr')
)) {
    $refStr = '-' . $_GET['st'];
} else {
    $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
    $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
    $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Advanced SystemCare PRO flash sale tot wel 75% korting - Tijdelijke aanbieding - Advanced SystemCare PRO</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,400i,700'>
    <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public'];?>
    <?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!-- banner start -->
<div class="banner bg">
    <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
            <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <h1>OP=OP RUIMING!</h1>
        <p class="subhead">Bespaar <b>75%</b> op ASC PRO en verbeter de snelheid van uw PC tot wel 300%</p>
        <div class="panel">
            <div class="list">
                <img src="<?php echo getStaticUrl('images/asc-35sm.png')?>" alt="" />
                <div class="price" data-off="€11,00">
                    <strong class="discount">18</strong>
                    <span><del class="original">29,99</del> <b>99</b></span>
                </div>
                <a class="buybtn"
                   href="https://www.iobit.com/buy.php?product=nlaff-asc121pc1899&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>"
                   onclick="ga('send', 'event', 'ascbuy', 'buy', 'nlaffasc122019flashsale')">
                    Nu Activeren
                </a>
            </div>
            <div class="list center">
                <!-- time -->
                <ul id="countdown" class="countdown">
                    <li><strong>00</strong> <span>uur</span></li>
                    <li><strong>00</strong> <span>min</span></li>
                    <li><strong>00</strong> <span>sec</span></li>
                    <li><strong>00</strong> <span>ms</span></li>
                </ul>
                <img src="<?php echo getStaticUrl('images/asc-75sm.png')?>" alt="" />
                <div class="price" data-off="€59,99">
                    <strong class="discount">19</strong>
                    <span><del class="original">79,98</del> <b>99</b></span>
                </div>
                <a class="buybtn"
                   href="https://www.iobit.com/buy.php?product=nlaff-asc123pcsd1999&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>"
                   onclick="ga('send', 'event', 'ascbuy', 'buy', 'nlaffasc122019flashsale')">
                    Nu Activeren
                </a>
                <p class="people"><i class="all-icons"></i> Al door <b>4,741,306</b> keer geactiveerd</p>
            </div>
            <div class="list">
                <img src="<?php echo getStaticUrl('images/asc-60sm.png')?>" alt="" />
                <div class="price" data-off="€30,00">
                    <strong class="discount">19</strong>
                    <span><del class="original">49,99</del> <b>99</b></span>
                </div>
                <a class="buybtn"
                   href="https://www.iobit.com/buy.php?product=nlaff-asc123pc1999&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>"
                   onclick="ga('send', 'event', 'ascbuy', 'buy', 'nlaffasc122019flashsale')">
                    Nu Activeren
                </a>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- container start -->
<div class="container">
    <!-- payments start -->
    <div class="payments">
        <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
    </div>
    <!-- payments end -->

    <!-- intro start -->
    <div class="intro wrapper">
        <h2>Deze verbeterde functies halen het beste uit uw PC</h2>
        <div class="clearfix panel">
            <div class="list one">
                <img class="fl" src="<?php echo getStaticUrl('images/list01.png')?>" alt="" />
                <dl class="fl">
                    <dt><h3>Veiliger Browsen</h3><b>nieuw</b></dt>
                    <dd>Wis automatisch browsegegevens en verberg uw <br>Digitale Vingerafdruk zodat uw surfgedrag privé blijft.</dd>
                </dl>
            </div>
            <div class="list two">
                <img class="fl" src="<?php echo getStaticUrl('images/list02.png')?>" alt="" />
                <dl class="fl">
                    <dt><h3>Automatisch opschonen</h3><b>verbeterd</b></dt>
                    <dd>Verwijdert restbestanden automatisch <span>voor een razendsnelle PC</span></dd>
                </dl>
            </div>
            <div class="list three">
                <img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" />
                <dl>
                    <dt><h3>Privacy Bescherming </h3><b>nieuw</b></dt>
                    <dd>Blokkeer elke toegang tot uw gevoelige <br>gegevens zoals contacten, e-mail gegevens, <br>Dropbox en OneDrive.</dd>
                </dl>
            </div>
            <?php if($_GET['st']!='asc_wr'):?>
            <div class="list four">
                <img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" />
                <dl>
                    <dt><h3>Realtime Bescherming </h3><b>verbeterd</b></dt>
                    <dd>Voorkom dat uw computer geïnfecteerd <br>raakt met spyware of malware.</dd>
                </dl>
            </div>
            <?php else:?>
            <div class="list five">
                <img src="<?php echo getStaticUrl('images/list05.png')?>" alt="" />
                <dl>
                    <dt><h3>Veilig Software Updaten </h3><b>ESSENTIEEL</b></dt>
                    <dd>
                        Met slechts één klik belangrijke software updaten, <br>inclusief <strong>WinRAR*, dat een beveiligingsbug bevat <br>die uw computer langdurig in gevaar kan brengen.</strong>
                        <p>*Direct updaten zodra de nieuwe officiële versie beschikbaar is.</p>
                    </dd>
                </dl>
            </div>
            <?php endif;?>
            <div class="circle"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
            <div class="circle sec"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
            <div class="circle third"><img src="<?php echo getStaticUrl('images/circle.png')?>" alt="" /></div>
        </div>
    </div>
    <!-- intro end -->

    <!-- giveway start -->
    <div class="giveway wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/sdbox.png')?>" alt="" />
        <ul>
            <li><h2>Smart Defrag PRO <del>29,99</del> <strong> 0,-</strong></h2></li>
            <li><i class="all-icons">√</i>Meer dan 5 miljoen PRO gebruikers wereldwijd</li>
            <li><i class="all-icons">√</i>Veilige en automatische schijfdefragmentatie</li>
            <li><i class="all-icons">√</i>Maximale schijfprestaties en snellere toegang tot uw bestanden</li>
        </ul>
    </div>
    <!-- giveway end -->

    <!-- service start -->
    <div class="service wrapper clearfix">
        <dl>
            <dt><h3>24/7 Gratis Klantenservice</h3></dt>
            <dd><img src="<?php echo getStaticUrl('images/service.png')?>" alt="" /></dd>
        </dl>
        <dl>
            <dt><h3>Garantie</h3></dt>
            <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
        </dl>
        <dl>
            <dt><h3>Veilig betalen</h3></dt>
            <dd><img src="<?php echo getStaticUrl('images/veilig.png')?>" alt="" /></dd>
        </dl>
    </div>
    <!-- service end -->

    <!-- cause start -->
    <div class="cause">
        <div class="wrapper">
            <h2>Waarom kiezen meer dan 250 miljoen gebruikers wereldwijd voor Advanced SystemCare?</h2>
            <p>
                Advanced SystemCare PRO versnelt uw verouderde PC tot wel 300%, versnelt de opstarttijd met wel 200%, <span>repareert zwakheden en beveiligingsgaten in het systeem en verwijdert opgestapelde junk-files,</span> registerbestanden en privacy sporen tijdens het surfen.
            </p>
        </div>
    </div>
    <!-- cause end -->

    <!-- review start -->
    <div class="review">
        <div class="wrapper">
            <h2>Klant &amp; media beoordelingen</h2>
            <div class="box clearfix">
                <dl>
                    <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="" /></dt>
                    <dd>
                        <h3>Charles R. Widick</h3>
                        <span class="all-icons">★★★★★</span>
                        <p>
                            "Als ICT'er merk ik dat tijdens het repareren van computers, veel problemen worden opgelost door te scannen met ASC. Na de reparatie raad ik de klanten meestal het ASC PRO-pakket aan. Wie heeft er nog een technicus nodig als de klantenservice van Advanced SystemCare PRO, 24 uur per dag beschikbaar is. Dit is het beste product een thuisgebruiker kan kopen. Bedankt dat jullie mijn werk een stuk makkelijker maken!"
                        </p>
                    </dd>
                </dl>
                <dl class="center">
                    <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="" /></dt>
                    <dd>
                        <h3>Cnet</h3>
                        <p>
                            "Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of spelen van online games belemmert. Advanced SystemCare heeft als doel om uw computer te herstellen. Niet alleen door het opruimen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."
                        </p>
                    </dd>
                </dl>
                <dl>
                    <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="" /></dt>
                    <dd>
                        <h3>Hank Ewert</h3>
                        <span class="all-icons">★★★★★</span>
                        <p>
                            "Net als de meeste mensen die ik ken, ben ik geen computer expert. Door de jaren heen heb ik al tig programma’s geprobeerd die allemaal beweren de beste te zijn. Die kunnen allemaal niet tippen aan de Advanced SystemCare PRO-bescherming die ik nu heb. Sinds de installatie van deze software, loopt mijn PC weer als nieuw. Dit programma overtreft alle verwachtingen, het is altijd up-to-date, en de graphics zijn ook erg gaaf! Bedankt voor dit geweldige programma!"
                        </p>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards wrapper">
        <h2>Vertrouwd en bekroond door de volgende media</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- comparison start -->
    <div id="compare" class="comparison wrapper">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <thead>
            <tr>
                <th class="text" colspan="2">Advanced SystemCare PRO functies</th>
                <td class="space"></td>
                <th class="itema">Advanced SystemCare <b>Pro</b></th>
            </tr>
            </thead>
            <tbody>
            <tr class="title">
                <td class="icons gray" width="45"></td>
                <td class="virtue gray"><strong>Opschonen &amp; Optimalisatie</strong></td>
                <td class="space"></td>
                <td class="itema orange"></td>
            </tr>
            <tr class="tall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
                <td class="virtue">Grondige Windows register opschoning voorkomt computer crashes <sup>Verbeterd</sup></td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
                <td class="virtue">Defragmenteert de harde schijf voor ultieme prestaties</td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
                <td class="virtue"><span>Schoont het RAM automatisch zodat ongebruikte programma’s en processen worden afgesloten <sup class="nieuw">Nieuw</sup></span></td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr>
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
                <td class="virtue">Auto Care houdt uw PC automatisch in de beste conditie</td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="bottall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
                <td class="virtue">Bekijk de conditie van uw systeem in real-time</td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="title">
                <td class="icons gray" width="45"></td>
                <td class="virtue gray"><strong>Snelheidsboost</strong></td>
                <td class="space"></td>
                <td class="itema orange"></td>
            </tr>
            <tr class="tall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
                <td class="virtue">Tot wel 200% snellere opstarttijd <sup>Verbeterd</sup></td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="bottall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
                <td class="virtue">Tot wel 300% sneller internet met internet booster <sup>Verbeterd</sup></td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="title">
                <td class="icons gray" width="45"></td>
                <td class="virtue gray"><strong>Beveiliging</strong></td>
                <td class="space"></td>
                <td class="itema orange"></td>
            </tr>
            <tr class="tall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
                <td class="virtue">Basis bescherming voor verwijderen van spyware </td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="tall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
                <td class="virtue">Volledige bescherming tegen spyware, malware, trojans, etc. <sup>Verbeterd</sup></td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="tall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
                <td class="virtue">Vang indringers met FaceID </td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="tall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt="" /></td>
                <td class="virtue">Bescherm uw persoonlijke gegevens tegen niet-vertrouwde programma’s <sup class="nieuw">Nieuw</sup></td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="tall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_16.png')?>" alt="" /></td>
                <td class="virtue">Niemand kan uw Digitale Vingerafdruk stelen om uw surfgedrag te volgen <sup class="nieuw">Nieuw</sup></td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="tall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
                <td class="virtue">Premium bescherming tijdens het surfen</td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="bottall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
                <td class="virtue">Dicht beveiligingsgaten in real-time</td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="title">
                <td class="icons gray" width="45"></td>
                <td class="virtue gray"><strong>Premium IObit Service</strong></td>
                <td class="space"></td>
                <td class="itema orange"></td>
            </tr>
            <tr class="tall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
                <td class="virtue">Automatische bijwerken naar de nieuwste versie</td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            <tr class="bottall">
                <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
                <td class="virtue">Gratis 24/7 technische ondersteuning</td>
                <td class="space"></td>
                <td class="itema"><i class="all-icons orange">√</i></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy bg clearfix">
        <div class="wrapper">
            <div class="left fl clearfix">
                <div class="imgbox fl">
                    <img class="pcs" src="<?php echo getStaticUrl('images/asc-60big.png')?>" alt="" />
                    <img class="pcsd active" src="<?php echo getStaticUrl('images/asc-75big.png')?>" alt="" />
                    <img class="pc" src="<?php echo getStaticUrl('images/asc-35big.png')?>" alt="" />
                </div>
                <ul class="content fl">
                    <li class="pcs" data-num="2">
                        <h3>1 Jaar / 3 PC’s</h3>
                        <strong>-60% </strong>
                    </li>
                    <li class="pcsd active" data-num="1">
                        <h3>1 Jaar / 3 PC’s + Gratis Cadeau</h3>
                        <strong>-75%</strong>
                    </li>
                    <li class="pc" data-num="0">
                        <h3>1 Jaar / 1 PC</h3>
                        <strong>-35%</strong>
                    </li>
                </ul>
            </div>
            <div class="right fr">
                <div class="price">
                    <p>
                        <strong class="discount">19</strong>
                        <span><del class="original">79,98</del> <b>99</b></span>
                    </p>
                    <p class="off">Bespaar <font>€59,99</font></p>
                </div>
                <a class="buybtn"
                   href="https://www.iobit.com/buy.php?product=nlaff-asc123pcsd1999&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>"
                   onclick="ga('send', 'event', 'ascbuy', 'buy', 'nlaffasc122019flashsale')">
                    Nu Activeren
                </a>
                <p class="people"><i class="all-icons"></i> Al door <b>4,741,306</b> keer geactiveerd</p>
            </div>
        </div>
    </div>
    <!-- footbuy end -->

    <!-- annotation start -->
    <dl class="annotation wrapper">
        <dt>Opmerking:</dt>
        <dd>*.Dergelijke promotionele programma's kunnen zonder voorafgaande kennisgeving worden gewijzigd, van tijd tot tijd naar eigen goeddunken.</dd>
        <dd>*.Data kan variëren afhankelijk van verschillende computer systemen. </dd>
    </dl>
    <!-- annotation end -->

</div>
<!-- container end -->

<!-- footer start -->
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</div>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>
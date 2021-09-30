<?php
//	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 68799080;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Sconti fino al 70% sul ASCU PRO per 3 PC – Offerta Speciale di IObit per Il Natale</title>
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
          mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>css/style.css"/>
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
    <script>
        var buy_url = new Array();
        buy_url['si'] = 'http://www.iobit.com/buy.php?product=it-ausdiu-aff&ref=it_au7purchase&refs=it_purchase_ascu_aff';
        buy_url['sp'] = 'http://www.iobit.com/buy.php?product=it-ausdpf-aff&ref=it_au7purchase&refs=it_purchase_ascu_aff';
        buy_url['ip'] = 'http://www.iobit.com/buy.php?product=it-auiupf-aff&ref=it_au7purchase&refs=it_purchase_ascu_aff';
        $(document).ready(function () {
                $(':checkbox').each(function () {
                    $(this).click(function () {
                        limit_select_two_options(this);
                    });
                });
            }
        );
        function limit_select_two_options(obj) {
            var count = 0;
            var arr = [];
            $(':checkbox').each(function () {
                if ($(this).is(':checked')) {
                    arr.push($(this));
                    count++;
                }
            });
            if (arr.length > 2) {
                if ($(obj).attr('value') == arr[0].attr('value')) {
                    arr[arr.length - 1].attr('checked', false);
                }
                else {
                    arr[0].attr('checked', false);
                }
            }
            return true;
        }
        function buy() {
            var s = $('#s').is(':checked');
            var i = $('#i').is(':checked');
            var p = $('#p').is(':checked');
            if (!s && !i && !p)  url = buy_url['si'];
            if (s) {
                if (!i && !p)  url = buy_url['si'];
                if (i && !p)    url = buy_url['si'];
                if (!i && p)    url = buy_url['sp'];
            } else if (i) {
                if (!s && !p)  url = buy_url['si'];
                if (s && !p)    url = buy_url['si'];
                if (!s && p)    url = buy_url['ip'];
            } else if (p) {
                if (!s && !i)  url = buy_url['ip'];
                if (s && !i)    url = buy_url['sp'];
                if (!s && i)    url = buy_url['ip'];
            }
            location.href = url;
        }
    </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="header">
    <div class="warpper clearfix">
        <a href="http://www.iobit.com" class="logo" target="_blank"><img src="<?php echo $pResUrl; ?>img/logo_iobit.png"
                                                                         alt=""/></a>

        <div class="title"><img src="<?php echo $pResUrl; ?>img/title.png" alt=""/></div>
        <dl class="countdown">
            <dt>Fine della Promozione</dt>
            <dd id="counttime"><span>02</span><span>02</span><span>02</span><em>222</em><sub>①</sub></dd>
        </dl>
    </div>
</div>
<div class="topbar">
    <div class="warpper">
        <div class="bartop"><img src="<?php echo $pResUrl; ?>img/topbar_top.jpg" alt=""/></div>
        <div class="barbody">
            <h2>Offerta Esclusiva, Sconti Fino al <span>70%!</span></h2>
            <h3>Acquista uno e ottieni due in più,scegli due su tre di sotto e compra ora!</h3>
            <div class="intro">
                <dl class="intro_ascu">
                    <dd><img src="<?php echo $pResUrl; ?>img/intro_ascu.jpg" alt=""/></dd>
                    <dd>3PC / 1 abbonamento annuale</dd>
                </dl>
                <div class="choosearea">
                    <dl class="addproc">
                        <dd><img src="<?php echo $pResUrl; ?>img/intro_sd.jpg" alt=""/></dd>
                        <dd><input type="checkbox" id="s" value="s" name="additional"/></dd>
                        <dt>Smart Defrag PRO 3</dt>
                        <dd>Originale：
                            <del>19.99€</del>
                        </dd>
                        <dd><strong>0€</strong></dd>
                    </dl>
                    <dl class="addproc">
                        <dd><img src="<?php echo $pResUrl; ?>img/intro_iu.jpg" alt=""/></dd>
                        <dd><input type="checkbox" id="i" value="i" name="additional"/></dd>
                        <dt>IObit Uninstaller PRO 4</dt>
                        <dd>Originale：
                            <del>19.99€</del>
                        </dd>
                        <dd><strong>0€</strong></dd>
                    </dl>
                    <dl class="addproc">
                        <dd><img src="<?php echo $pResUrl; ?>img/intro_pf.jpg" alt=""/></dd>
                        <dd><input type="checkbox" id="p" value="p" name="additional"/></dd>
                        <dt>Protected Folder</dt>
                        <dd>Originale：
                            <del>19.99€</del>
                        </dd>
                        <dd><strong>0€</strong></dd>
                    </dl>
                    <dl class="checkarea clearfix">
                        <dd class="price">Ora: <span>29.99€</span></dd>
                        <dt><a href="javascript:void(0);"
                               onclick="ga('send', 'event', 'ascubuy', 'buy', '2014christmas-it-aff');buy();"
                               class="checkbtn mainbtn">ACQUISTA ORA</a></dt>
                        <dd>Ottieni la protezione personalizzata del tuo PC</dd>
                        <dd><em><?php echo $buyNum; ?></em> persone hanno già comprato</dd>
                    </dl>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="barbottom"><img src="<?php echo $pResUrl; ?>img/topbar_bottom.jpg" alt=""/></div>
    </div>

</div>
<div class="middle">
    <div class="warpper clearfix">
        <h3 class="corssname">Offre al tuo PC la migliore protezione e l'ottimizzazione ad un prezzo conveniente!</h3>
        <div class="whatdo clearfix">
            <div class="left">
                <div class="boxshot"><img src="<?php echo $pResUrl; ?>img/boxshot_ascu.jpg" alt=""/></div>
                <dl>
                    <dt>Advanced SystemCare Ultimate 7:</dt>
                    <dd>Ottima Protezione e Ottima Prestazione</dd>
                    <dd>● Ti protegge dai virus, spyware, hacker, phishing, botnet e dagli altri malware</dd>
                    <dd>● Protegge la tua privacy durante la navigazione sull’Internet in tempo reale</dd>
                    <dd>● Accelera, pulisce e ripara tutti i tipi di problemi del PC con un solo click</dd>
                    <dd>● Leggero, veloce e compatibile con altri prodotti della sicurezza</dd>
                    <dd><img src="<?php echo $pResUrl; ?>img/product_awards.png"><a href="#compare">Scopri più sulla
                            versione PRO>> </a></dd>
                    <dd class="sale"></dd>
                </dl>
            </div>
            <div class="right">
                <dl class="clearfix">
                    <dt><img src="<?php echo $pResUrl; ?>img/boxshot_sd.jpg"></dt>
                    <dd class="name">Smart Defrag</dd>
                    <dd>Il Migliore Deframmentatore del Disco Gratuito con 30M di Utenti</dd>
                    <dd class="free"></dd>
                </dl>
                <dl class="clearfix">
                    <dt><img src="<?php echo $pResUrl; ?>img/boxshot_iu.jpg"></dt>
                    <dd class="name">IObit Uninstaller</dd>
                    <dd>Il Miglior Uninstaller per Rimuovere I Plugin e APP!</dd>
                    <dd class="free"></dd>
                </dl>
                <dl class="end clearfix">
                    <dt><img src="<?php echo $pResUrl; ?>img/boxshot_pf.jpg"></dt>
                    <dd class="name">Protected Folder</dd>
                    <dd>Ottima protezione della sicurezza delle date e della privacy!</dd>
                    <dd class="free"></dd>
                </dl>
            </div>
        </div>
        <div class="payment"><img src="<?php echo $pResUrl; ?>img/payments.jpg" alt=""/></div>
        <dl class="awards">
            <dt>I Premi del Prodotto</dt>
            <dd><img src="<?php echo $pResUrl; ?>img/awards.jpg"></dd>
        </dl>
        <div class="usersaying" id="compare">
            <h2>Recensioni degli Utenti</h2>

            <div class="boxa" style="margin-top:0;">
                <h3>"Advanced SystemCare Ultimate è Grandioso!"</h3>
                <dl class="user">
                    <dt><img src="<?php echo $pResUrl; ?>img/rod_garnett.jpg" alt=""/></dt>
                    <dd>Rod Garnett</dd>
                    <dd>2012</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
                    <dd>Ho avuto un problema che metteva sempre nei guai il mio computer. Dopo avere installato Advanced SystemCare Ultimate, non c’è più il problema dei guai. Antivirus è già incluso nel prodotto, non ho bisogno di installarne un altro. Advanced SystemCare Ultimate è il nuovo mother load. È il vincetore! Il mio computer è sempre aggiornato e funziona velocemente. È il programma più eccellente tra gli altri e senza nussun flusso costante di confliti."<br/><em>- Tradotto
                            dall’inglese</em></dd>
                </dl>
            </div>
            <div class="boxb" style="margin-top:0;">
                <h3>"Vi Raccomando Il Advanced SystemCare Ultimate Come Il Vostro Perfetto Software d’Antivirus e d’Ottimizzazione del Sistema."</h3>
                <dl class="user">
                    <dt><img src="<?php echo $pResUrl; ?>img/dareen_lim.jpg" alt=""/></dt>
                    <dd>Dareen Lim</dd>
                    <dd>2013</dd>
                </dl>
                <dl class="quit">
                    <dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
                    <dd>Con la versione precedente di Advanced SystemCare Ultimate, non ho avuto nessun problema sul sistema, i malware e quasi tutto. Dopo avere aggiornato all’ultima versione, le funzionalità aggiuntive hanno reso il mio PC cinque volte più veloce di prima. Mi piace anche la nuova interfaccia. Vi consiglio sinceramente il Advanced SystemCare Ultimate come il vostro perfetto software di antivirus e d’ottimizzazione del sistema"<br/><em>- Tradotto dall’inglese</em></dd>
                </dl>
            </div>
            <div class="clear"></div>
        </div>
        <div class="comparison_table">
            <h4>I Motivi Per Cui Scegliete Il Advanced SystemCare Ultimate 7?</h4>

            <div id="hidetab">
                <dl class="comtable">
                    <dt>La Miglior Protezione e L’ottima Prestazione! Controlla la comparazione dei Prodotti in
                        Seguente
                    </dt>
                    <dd><img src="<?php echo $pResUrl; ?>img/comparetable.png"/></dd>
                </dl>
                <dl class="comlist">
                    <dt>Profondissima scansione e ottima protezione</dt>
                    <dd>Pulisce i nascosti e gli ostinati virus, i Trojans, i worms, gli spyware, gli adware e i vari
                        tipi di malware. Advanced SystemCare Ultimate 7 con il suo aggiornamento rapido del database dei
                        virus, protegge automaticamente il PC da tutti i tipi di virus e minacce alla sicurezza di
                        Internet in qualsiasi momento.
                    </dd>
                    <dt>Godetevi della Sicurezza senza rallentamento del sistema</dt>
                    <dd>Grazie alla nostra avanzata tecnologia di sicurezza di Internet che è il leader in settore , Il
                        sistema del tuo PC funziona alla massima velocità senza nessun rallentamento delle prestazioni.
                    </dd>
                    <dt>Navigazione sicura, cercare, scaricare e condividere con fiducia</dt>
                    <dd>La tecnologia del controllo dei virus controlla il comportamento dei processi in tempo reale,
                        scansiona i file condivisi da email e blocca le possibili minacce. L’insuperato tasso di
                        rilevamento garantisce la sicurezza del tuo PC.
                    </dd>
                    <dt>Ottieni l'ottima prestazione regolata e goditi della nuova esperienza del PC</dt>
                    <dd>La potente capacità di tune-up del PC libera tutta la potenza del tuo PC. Con l'ottimizzazione
                        in tempo reale e la funzione di Active Boost, le risorse di sistema vengono gestite in modo
                        intelligente per garantire la velocità del tuo PC.
                    </dd>
                </dl>
            </div>
        </div>
        <div class="floatlayer" id="floatlayer">
            <dl class="left">
                <dt>Sconti Fino Al 70%</dt>
                <dd>Ottieni l’ottima protezione e l’ottima prestazione!</dd>
            </dl>
            <dl class="checkarea">
                <dt>29.99€
                <div class="countdown" id="counttime1">
                    <span>02</span><span>02</span><span>02</span><em>222</em><sub>①</sub></div>
                </dt>
                <dd><a href="javascript:void(0);" onclick="ga('send', 'event', 'ascubuy', 'buy', '2014christmas-it-aff');buy();"
                       class="checkbtn floatbtn">ACQUISTA ORA</a></dd>
                <dd><em><?php echo $buyNum; ?></em> persone hanno già comprato</dd>
            </dl>
        </div>
        <dl class="annotation">
            <dt>Note:</dt>
            <dd>①.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva
                discrezione.
            </dd>
        </dl>
    </div>
    <div class="copy">Copyright &copy; 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
</div>
<script type="text/javascript">
    $(function () {
        $(window).on('scroll', function () {
            var scrollHeight = $(".topbar").outerHeight();
            if ($(window).scrollTop() > scrollHeight) {
                $('#floatlayer').addClass('on');
            } else {
                $('#floatlayer').removeClass('on');
            }
        });
    });
</script>
<script type="text/javascript">
    function cycleCountdown() {
        var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
        var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
        d = MApp(2.2).packages.zeroize(datetime[0], 2);
        h = MApp(2.2).packages.zeroize(datetime[1], 2);
        i = MApp(2.2).packages.zeroize(datetime[2], 2);
        s = MApp(2.2).packages.zeroize(datetime[3], 2);
        mi = MApp(2.2).packages.zeroize(datetime[4], 3);
        document.getElementById('counttime').innerHTML = '<span>' + h + '</span><span>' + i + '</span><span>' + s + '</span><em>' + mi + '</em><sub>①</sub>';
        document.getElementById('counttime1').innerHTML = '<span>' + h + '</span>h: <span>' + i + '</span>m: <span>' + s + '</span>s <em>' + mi + '</em><sub>①</sub>';
        setTimeout('cycleCountdown()', 1);
    }
    cycleCountdown();
</script>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
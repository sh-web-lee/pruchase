<?php
//	[调用检测] 检测其他程序是否能调用该文件
if (!defined('IObit')) exit('Access Denied');
$host = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '');
$re_uri = $_SERVER['REQUEST_URI'];
$url_str = $host . $re_uri;
$ref = empty($_GET['ref']) ? '' : $_GET['ref'];

//	[公共JS]
$gJavascript['public'] = <<< EOF
<!-- Begin Public Javascript -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NRGSZ26');</script>
<!-- End Google Tag Manager -->
<script src="https://codes.iobit.com/purchase/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="https://codes.iobit.com/purchase/js/mapplication.js" type="text/javascript"></script>
<!-- Begin es ar redirect -->
<script type="text/javascript" src="{$pRootUrl}tpl/js/esRedirect.js"></script>
<!-- END es ar redirect -->
<!-- Begin multi languages public Javascript -->
<script type="text/javascript" src="{$pRootUrl}tpl/js/common.js"></script>
<!-- END multi languages public Javascript -->
EOF;

$arr = ['ir','fspi'];
preg_match_all('#('.implode('|', $arr).')#', $ref, $result);
$result = array_unique($result[0]);
if (!empty($result) || in_array($ref,array('fs1702en', 'fs269814', 'fs171023en', 'fs391813', 'ir2028232'))) {
    $gJavascript['public'] .= <<< EOF
<script type="text/javascript"> (function(a,b,c,d,e,f,g){e['ire_o']=c;
e[c]=e[c]||function(){(e[c].a=e[c].a||[]).push(arguments)};
f=d.createElement(b);g=d.getElementsByTagName(b)[0];
f.async=1;
f.src=a;
g.parentNode.insertBefore(f,g);
})('https://d.impactradius-event.com/A244858-5943-4cc6-bd14-0f7a2d1622901.js','script','ire',document,window); 
ire('identify', {customerid: '' /*INSERT CUSTOMER ID*/, customeremail: '' /*INSERT SHA1 HASHED CUSTOMER EMAIL*/}); </script>
EOF;
}

if (((strpos($url_str, 'purchase.rs.iobit.com/aff/')) === false) && (empty($_GET['pop']))) {
    $gJavascript['public'] .= <<< EOF
        <script src="{$pRootUrl}tpl/js/redirect.min.js" type="text/javascript"></script>
EOF;
} else {
    $gJavascript['public'] .= <<< EOF
	<script type='text/javascript'>
		$(document).ready(function() {
    		$("a").each(function(){
        		var tw = MApp(2.2).datetime.getTimeZone();
        		if(this.href.indexOf("://www.iobit.com/buy.php") != -1){
            		this.href=this.href+'&tw='+tw;
        		}
    		});
		});
	</script>
EOF;
}
$gJavascript['public'] .= <<< EOF
<link href="{$pRootUrl}tpl/css/notification.css" rel="stylesheet">
<!-- END Public Javascript -->
<!-- Begin Official Website Request -->
<script type='text/javascript'>
	var AFF=MApp(2.2).url.getParameters('AFF');
  	if(AFF.length>0){
 		$.ajax({
         	url: "https://www.iobit.com/en/index.php?AFF="+AFF,
         	type: 'GET',
         	dataType: 'JSONP',
    	});
  	}
</script>
<!-- END Official Website Request -->
<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=61545,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->

<script type="text/javascript">
var IEwarning = (new function(){
    this.language = MApp(2.2).language.langArr[0];
    this.domain = MApp(2.2).url.getDomain();
    this.dirPath = MApp(2.2).url.getDirPath();
    this.filePath = MApp(2.2).url.getFilePath();
    this.fileName = MApp(2.2).url.getFileName();
    this.fileExt = MApp(2.2).packages.getFileExt(this.fileName);
    this.browseru = MApp(2.2).client.getBrowser();
    this.browserver = MApp(2.2).client.getBrowserVer();
    this.multi_lang_curr = 'en';
    this.multi_lang_show = true;
    this.multi_lang_txt = [];
    this.multi_lang_txt['en'] = "Due to outdated Internet Explorer, you may not visit this site and complete purchase properly. We recommend you update to Internet Explorer 10 or above or use another web browser.";
    this.multi_lang_txt['de'] = "Da Ihr Internet Explorer veraltet ist, können Sie diese Seite nicht besuchen und den Einkauf fortsetzen. Wir schlagen Ihnen vor, auf Internet Explorer 10 oder höher zu upgraden oder einen anderen Browser zu verwenden.";
    this.multi_lang_txt['nl'] = "U gebruikt een verouderde versie van Internet Explorer, hierdoor kunt u de aankoop pagina niet bezoeken. Wij raden u aan om het nogmaals te proberen met een andere web browser of te upgraden naar Internet Explorer 10 of hoger.";
    this.multi_lang_txt['pt'] = "Devido a você estar usando uma versão antiga do Internet Explorer, talvez você não consiga visitar este site e completar a compra corretamente. Recomendamos que você atualize para o Internet Explorer 10 ou acima, ou utilize outro navegador.";
    this.multi_lang_txt['es'] = "Debido a Internet Explorer obsoleto, tal vez no puedes visitar este sitio web y completar compra correctamente. Te recomendamos que actualices a Internet Explorer 10 o encima, o utilices otro navegador.";
    this.multi_lang_txt['it'] = "A causa del'Internet Explorer obsoleto, non si può visitare questo sito e completare l'acquisto in modo corretto. Si consiglia di aggiornare a Internet Explorer 10 o versione superiore o utilizzare un altro browser web.";
    this.multi_lang_txt['fr'] = "En raison d’Internet Explorer obsolète, la visite et votre achat ne peuvent pas être réalisées. Nous vous recommandons de mettre à jour vers Internet Explorer 10 ou la version supérieure ou d’utiliser d’autres navigateurs web.";

    this.run = function(){
        // Append diagnosis box to body
        if(this.browseru=='ie'&&this.browserver[1]<=9){
            if (this.dirPath.substring(0,4) == '/fr/') this.multi_lang_curr = 'fr';
            else if (this.dirPath.substring(0,4) == '/de/') this.multi_lang_curr = 'de';
            else if (this.dirPath.substring(0,4) == '/it/') this.multi_lang_curr = 'it';
            else if (this.dirPath.substring(0,4) == '/es/') this.multi_lang_curr = 'es';
            else if (this.dirPath.substring(0,4) == '/nl/') this.multi_lang_curr = 'nl';
            else if (this.dirPath.substring(0,4) == '/pt/') this.multi_lang_curr = 'pt';
            if (typeof this.multi_lang_txt[this.multi_lang_curr] == 'undefined') {
                    this.multi_lang_curr = 'en';
                    this.multi_lang_show = false;
            }
            this.addLayer();
        }
    };
    this.addLayer = function(){
        var content = '<div class="notification" id="iewarning"><p>'+this.multi_lang_txt[this.multi_lang_curr]+'</p><a href="javascript:void(0);" onclick="$(this).parent().hide();" class="pop-close"><span></span></a></div>';
        $('body').append(content);
    };
});

$(function (){
  IEwarning.run();
});
</script>
EOF;


//	[顶部JS]
$gJavascript['head'] = <<< EOF
  
<!-- Begin Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1447202-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- END Google Analytics -->

EOF;


//	[底部JS]
$gJavascript['foot'] = <<< EOF
<!-- Begin Footer Javascript -->
<!--
<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=iobit"></script>
<script type="text/javascript">var _kiq = _kiq || [];</script>
<script type="text/javascript" src="http://s3.amazonaws.com/ki.js/18815/3Fk.js" async="true"></script>
-->
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async="true"></script>
<script type="text/javascript">
function googleTranslateElementInit(){
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<!-- END Footer Javascript -->
EOF;
?>
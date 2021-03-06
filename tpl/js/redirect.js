// JavaScript Document
var Redirect = (new function () {
    this.language = MApp(2.2).language.langArr[0];
    this.domain = MApp(2.2).url.getDomain();
    this.dirPath = MApp(2.2).url.getDirPath();
    this.filePath = MApp(2.2).url.getFilePath();
    this.fileName = MApp(2.2).url.getFileName();
    this.fileExt = MApp(2.2).packages.getFileExt(this.fileName);
    this.getRedirectUrl = function () {
        var languageList = new Array();
        languageList['ru'] = new Array();
        languageList['ru']['purchase.iobit.com'] = new Array();
        languageList['ru']['purchase.iobit.com']['redirectAll'] = true;
        languageList['ru']['purchase.iobit.com']['defaultRedirectUrl'] = 'http://ru.iobit.com';
        languageList['ru']['purchase.iobit.com']['/2013/christmas/'] = 'http://ru.iobit.com/pages/asc-upgrade.htm';
        languageList['ru']['purchase.iobit.com']['/ascultimate/'] = 'http://ru.iobit.com/pages/ascav-register.htm';
        languageList['ru']['purchase.iobit.com']['/driverbooster/'] = 'http://ru.iobit.com/pages/db-register.htm';
        languageList['ru']['purchase.iobit.com']['/driverboosterb/'] = 'http://ru.iobit.com/pages/db-register.htm';
        languageList['ru']['purchase.iobit.com']['/db-ac-register/'] = 'http://ru.iobit.com/pages/db-register.htm';
        languageList['ru']['purchase.iobit.com']['/imf-upgrade/'] = 'http://ru.iobit.com/pages/imf-upgrade.htm';
        languageList['ru']['purchase.iobit.com']['/imf-ac-register/'] = 'http://ru.iobit.com/pages/imf-upgrade.htm';
        languageList['ru']['purchase.iobit.com']['/driverboosterb/'] = 'http://ru.iobit.com/pages/db-register.htm';
        languageList['ru']['purchase.iobit.com']['/en/asc/'] = 'http://ru.iobit.com/advancedsystemcarepro/';

        languageList['ja'] = new Array();
        languageList['ja']['purchase.iobit.com'] = new Array();
        languageList['ja']['purchase.iobit.com']['redirectAll'] = true;
        languageList['ja']['purchase.iobit.com']['defaultRedirectUrl'] = 'https://jp.iobit.com';
        languageList['ja']['purchase.iobit.com']['/en/asc/'] = 'https://jp.iobit.com/lp/advancedsystemcare_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/imf/'] = 'https://jp.iobit.com/lp/malwarefighter_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/asc/index.php'] = 'https://jp.iobit.com/lp/advancedsystemcare_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/imf/index.php'] = 'https://jp.iobit.com/lp/malwarefighter_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/ascu/'] = 'https://jp.iobit.com/product/ascwithav.html';
        languageList['ja']['purchase.iobit.com']['/en/ascu/index.php'] = 'http://jp.iobit.com/product/ascwithav.html';
        languageList['ja']['purchase.iobit.com']['/en/ascu/cd6.php'] = 'https://jp.iobit.com/product/ascwithav.html';
        languageList['ja']['purchase.iobit.com']['/en/ascu/cd6m.php'] = 'https://jp.iobit.com/product/ascwithav.html';
        languageList['ja']['purchase.iobit.com']['/en/db/'] = 'https://jp.iobit.com/lp/driverbooster_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/sd/'] = 'https://jp.iobit.com/lp/smartdefrag_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/iu/'] = 'https://jp.iobit.com/lp/iobituninstaller_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/sm/'] = 'https://jp.iobit.com/lp/startmenu8_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/db/index.php'] = 'https://jp.iobit.com/lp/driverbooster_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/sd/index.php'] = 'https://jp.iobit.com/lp/smartdefrag_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/iu/index.php'] = 'https://jp.iobit.com/lp/iobituninstaller_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/sm/index.php'] = 'https://jp.iobit.com/lp/startmenu8_free_general_buy.html';
        languageList['ja']['purchase.iobit.com']['/en/isu/index.php'] = 'https://jp.iobit.com/purchase/isu/index.php';
        languageList['ja']['purchase.iobit.com']['/en/isu/'] = 'https://jp.iobit.com/purchase/isu/index.php';
        languageList['ja']['purchase.iobit.com']['/en/sm/smbundle.php'] = 'https://jp.iobit.com/store.html';
        languageList['ja']['purchase.iobit.com']['/imf-ac-register/index.php'] = 'https://jp.iobit.com/rd/asc-download-imf';
        languageList['ja']['purchase.iobit.com']['/sd-ac-register/index.php'] = 'https://jp.iobit.com/rd/asc-download-sd';
        languageList['ja']['purchase.iobit.com']['/db-ac-register/index.php'] = 'https://jp.iobit.com/rd/asc-download-db';
        languageList['ja']['purchase.iobit.com']['/iu-ac-register/index.php'] = 'https://jp.iobit.com/rd/asc-download-iu';
        languageList['ja']['purchase.iobit.com']['/sm8-ac-register/index.php'] = 'https://jp.iobit.com/rd/asc-download-sm8';

        languageList['fr'] = new Array();
        languageList['fr']['purchase.iobit.com'] = new Array();
        languageList['fr']['purchase.iobit.com']['redirectAll'] = false;
        languageList['fr']['purchase.iobit.com']['defaultRedirectUrl'] = '';
        languageList['fr']['purchase.iobit.com']['/en/asc/'] = 'http://purchase.iobit.com/fr/asc/index.php';
        languageList['fr']['purchase.iobit.com']['/en/db/'] = 'http://purchase.iobit.com/fr/db/index.php';
        languageList['fr']['purchase.iobit.com']['/en/ascu/'] = 'http://purchase.iobit.com/fr/ascultimate/index.php';
        languageList['fr']['purchase.iobit.com']['/en/imf/'] = 'http://purchase.iobit.com/fr/imf/index.php';
        languageList['fr']['purchase.iobit.com']['/en/sd/'] = 'http://purchase.iobit.com/fr/sd/index.php';
        languageList['fr']['purchase.iobit.com']['/en/iu/'] = 'http://purchase.iobit.com/fr/iu/index.php';
        languageList['fr']['purchase.iobit.com']['/en/isu/'] = 'http://purchase.iobit.com/fr/isu/index.php';

        languageList['es'] = new Array();
        languageList['es']['purchase.iobit.com'] = new Array();
        languageList['es']['purchase.iobit.com']['redirectAll'] = false;
        languageList['es']['purchase.iobit.com']['defaultRedirectUrl'] = '';
        languageList['es']['purchase.iobit.com']['/en/asc/'] = 'http://purchase.iobit.com/es/asc/index.php';
        languageList['es']['purchase.iobit.com']['/en/db/'] = 'http://purchase.iobit.com/es/db/index.php';
        languageList['es']['purchase.iobit.com']['/en/ascu/'] = 'http://purchase.iobit.com/es/ascultimate/index.php';
        languageList['es']['purchase.iobit.com']['/en/imf/'] = 'http://purchase.iobit.com/es/imf/index.php';
        languageList['es']['purchase.iobit.com']['/en/sd/'] = 'http://purchase.iobit.com/es/sd/index.php';
        languageList['es']['purchase.iobit.com']['/en/iu/'] = 'http://purchase.iobit.com/es/iu/index.php';
        languageList['es']['purchase.iobit.com']['/en/isu/'] = 'http://purchase.iobit.com/es/isu/index.php';

        languageList['de'] = new Array();
        languageList['de']['purchase.iobit.com'] = new Array();
        languageList['de']['purchase.iobit.com']['redirectAll'] = false;
        languageList['de']['purchase.iobit.com']['defaultRedirectUrl'] = '';
        languageList['de']['purchase.iobit.com']['/en/asc/'] = 'http://purchase.iobit.com/de/asc/index.php';
        languageList['de']['purchase.iobit.com']['/en/db/'] = 'http://purchase.iobit.com/de/db/index.php';
        languageList['de']['purchase.iobit.com']['/en/imf/'] = 'http://purchase.iobit.com/de/imf/index.php';
        languageList['de']['purchase.iobit.com']['/en/ascu/'] = 'http://purchase.iobit.com/de/ascultimate/index.php';
        languageList['de']['purchase.iobit.com']['/en/sd/'] = 'http://purchase.iobit.com/de/sd/index.php';
        languageList['de']['purchase.iobit.com']['/en/iu/'] = 'http://purchase.iobit.com/de/iu/index.php';
        languageList['de']['purchase.iobit.com']['/en/isu/'] = 'http://purchase.iobit.com/de/isu/index.php';

        languageList['it'] = new Array();
        languageList['it']['purchase.iobit.com'] = new Array();
        languageList['it']['purchase.iobit.com']['redirectAll'] = false;
        languageList['it']['purchase.iobit.com']['defaultRedirectUrl'] = '';
        languageList['it']['purchase.iobit.com']['/en/asc/'] = 'http://purchase.iobit.com/it/asc/index.php';
        languageList['it']['purchase.iobit.com']['/en/ascu/'] = 'http://purchase.iobit.com/it/ascu/index.php';
        languageList['it']['purchase.iobit.com']['/en/imf/'] = 'http://purchase.iobit.com/it/imf/index.php';
        languageList['it']['purchase.iobit.com']['/en/db/'] = 'http://purchase.iobit.com/it/db/index.php';
        languageList['it']['purchase.iobit.com']['/en/sd/'] = 'http://purchase.iobit.com/it/sd/index.php';
        languageList['it']['purchase.iobit.com']['/en/iu/'] = 'http://purchase.iobit.com/it/iu/index.php';
        languageList['it']['purchase.iobit.com']['/en/isu/'] = 'http://purchase.iobit.com/it/isu/index.php';

        languageList['nl'] = new Array();
        languageList['nl']['purchase.iobit.com'] = new Array();
        languageList['nl']['purchase.iobit.com']['redirectAll'] = false;
        languageList['nl']['purchase.iobit.com']['defaultRedirectUrl'] = '';
        languageList['nl']['purchase.iobit.com']['/en/asc/'] = 'http://purchase.iobit.com/nl/asc/index.php';
        languageList['nl']['purchase.iobit.com']['/en/ascu/'] = 'http://purchase.iobit.com/nl/ascu/index.php';
        languageList['nl']['purchase.iobit.com']['/en/imf/'] = 'http://purchase.iobit.com/nl/imf/index.php';
        languageList['nl']['purchase.iobit.com']['/en/db/'] = 'http://purchase.iobit.com/nl/db/index.php';
        languageList['nl']['purchase.iobit.com']['/en/sd/'] = 'http://purchase.iobit.com/nl/sd/index.php';
        languageList['nl']['purchase.iobit.com']['/en/iu/'] = 'http://purchase.iobit.com/nl/iu/index.php';
        languageList['nl']['purchase.iobit.com']['/en/isu/'] = 'http://purchase.iobit.com/nl/isu/index.php';

        languageList['pt'] = new Array();
        languageList['pt']['purchase.iobit.com'] = new Array();
        languageList['pt']['purchase.iobit.com']['redirectAll'] = false;
        languageList['pt']['purchase.iobit.com']['defaultRedirectUrl'] = '';
        languageList['pt']['purchase.iobit.com']['/en/asc/'] = 'http://purchase.iobit.com/pt/asc/index.php';
        languageList['pt']['purchase.iobit.com']['/en/ascu/'] = 'http://purchase.iobit.com/pt/ascu/index.php';
        languageList['pt']['purchase.iobit.com']['/en/imf/'] = 'http://purchase.iobit.com/pt/imf/index.php';
        languageList['pt']['purchase.iobit.com']['/en/db/'] = 'http://purchase.iobit.com/pt/db/index.php';
        languageList['pt']['purchase.iobit.com']['/en/sd/'] = 'http://purchase.iobit.com/pt/sd/index.php';
        languageList['pt']['purchase.iobit.com']['/en/iu/'] = 'http://purchase.iobit.com/pt/iu/index.php';
        languageList['pt']['purchase.iobit.com']['/en/isu/'] = 'http://purchase.iobit.com/pt/isu/index.php';


        languageList['sv'] = new Array();
        languageList['sv']['purchase.iobit.com'] = new Array();
        languageList['sv']['purchase.iobit.com']['redirectAll'] = false;
        languageList['sv']['purchase.iobit.com']['defaultRedirectUrl'] = '';
        languageList['sv']['purchase.iobit.com']['/en/asc/'] = 'http://purchase.iobit.com/sv/asc/index.php';
        languageList['sv']['purchase.iobit.com']['/en/ascu/'] = 'http://purchase.iobit.com/sv/ascu/index.php';
        languageList['sv']['purchase.iobit.com']['/en/imf/'] = 'http://purchase.iobit.com/sv/imf/index.php';
        languageList['sv']['purchase.iobit.com']['/en/db/'] = 'http://purchase.iobit.com/sv/db/index.php';
        languageList['sv']['purchase.iobit.com']['/en/sd/'] = 'http://purchase.iobit.com/sv/sd/index.php';
        languageList['sv']['purchase.iobit.com']['/en/iu/'] = 'http://purchase.iobit.com/sv/iu/index.php';
        languageList['sv']['purchase.iobit.com']['/en/isu/'] = 'http://purchase.iobit.com/sv/isu/index.php';

        languageList['da'] = new Array();
        languageList['da']['purchase.iobit.com'] = new Array();
        languageList['da']['purchase.iobit.com']['redirectAll'] = false;
        languageList['da']['purchase.iobit.com']['defaultRedirectUrl'] = '';
        languageList['da']['purchase.iobit.com']['/en/asc/'] = 'https://purchase.iobit.com/dk/asc/index.php';
        languageList['da']['purchase.iobit.com']['/en/ascu/'] = 'https://purchase.iobit.com/dk/ascu/index.php';
        languageList['da']['purchase.iobit.com']['/en/imf/'] = 'https://purchase.iobit.com/dk/imf/index.php';
        languageList['da']['purchase.iobit.com']['/en/db/'] = 'https://purchase.iobit.com/dk/db/index.php';
        languageList['da']['purchase.iobit.com']['/en/sd/'] = 'https://purchase.iobit.com/dk/sd/index.php';
        languageList['da']['purchase.iobit.com']['/en/iu/'] = 'https://purchase.iobit.com/dk/iu/index.php';
        languageList['da']['purchase.iobit.com']['/en/isu/'] = 'https://purchase.iobit.com/dk/isu/index.php';

        languageList['pl'] = new Array();
        languageList['pl']['purchase.iobit.com'] = new Array();
        languageList['pl']['purchase.iobit.com']['redirectAll'] = false;
        languageList['pl']['purchase.iobit.com']['defaultRedirectUrl'] = '';
        languageList['pl']['purchase.iobit.com']['/en/asc/'] = 'https://purchase.iobit.com/pl/asc/index.php';
        languageList['pl']['purchase.iobit.com']['/en/ascu/'] = 'https://purchase.iobit.com/pl/ascu/index.php';
        languageList['pl']['purchase.iobit.com']['/en/imf/'] = 'https://purchase.iobit.com/pl/imf/index.php';
        languageList['pl']['purchase.iobit.com']['/en/db/'] = 'https://purchase.iobit.com/pl/db/index.php';
        languageList['pl']['purchase.iobit.com']['/en/sd/'] = 'https://purchase.iobit.com/pl/sd/index.php';
        languageList['pl']['purchase.iobit.com']['/en/iu/'] = 'https://purchase.iobit.com/pl/iu/index.php';
        languageList['pl']['purchase.iobit.com']['/en/isu/'] = 'https://purchase.iobit.com/pl/isu/index.php';
        languageList['pl']['purchase.iobit.com']['/en/sm/'] = 'https://purchase.iobit.com/pl/sm8/index.php';

        this.filePath = this.filePath.replace(/.html/, '.php');
        this.filePath = this.filePath.replace(/index.php/, '');
        var redirectUrl = languageList[this.language][this.domain][this.filePath];
        return redirectUrl == undefined ? languageList[this.language][this.domain]['redirectAll'] ? languageList[this.language][this.domain]['defaultRedirectUrl'] : undefined : redirectUrl;
    },

        this.getBathRedirectUrl = function () {
            var redirectUrl;
            if (this.domain == 'purchase.iobit.com') {
                if (this.dirPath.substring(0, 6) == '/2014/') {
                    redirectUrl = 'http://purchase.iobit.com/' + this.language + '/asc/index.php';
                }
            }
            return redirectUrl;
        },

        this.run = function () {
            var targetUrl;
            if (this.language == 'fr' || this.language == 'it' || this.language == 'de' || this.language == 'es' || this.language == 'nl' || this.language == 'pt' || this.language == 'sv' || this.language == 'da' || this.language == 'pl') {
                targetUrl = this.getBathRedirectUrl();
            }
            if (targetUrl == undefined) {
                if (this.language == 'ja' || this.language == 'fr' || this.language == 'es' || this.language == 'de' || this.language == 'it' || this.language == 'nl' || this.language == 'pt' || this.language == 'sv' || this.language == 'da' || this.language == 'pl') {
                    if (this.language == 'ja' && this.filePath == '/compare/imf-aff/') {
                    } else {
                        if (!MApp(2.2).cookie.get('irpid')) {
                            targetUrl = this.getRedirectUrl();
                        }
                    }
                }
            }
            if (this.language == 'ru') {
                dirname = this.dirPath.split("/");
                if (dirname[1] == 'asc-ac-register' || dirname[1] == 'imf-ac-register' || dirname[1] == 'iu-ac-register' || dirname[1] == 'db-ac-register' || dirname[1] == 'sd-ac-register') {
                    targetUrl = 'https://ru.iobit.com/purchase/' + dirname[1] + '/';
                } else if (dirname[1] != 'iot-ac-register') {
                    if(($.inArray(dirname[2],['asc','db','iu','imf','sd','isu','ascu'])!=-1)&&(this.fileName=='index.php')){
                        targetUrl = 'https://ru.iobit.com/purchase/' + dirname[2] + '/index.php';
                    }else {
                        targetUrl = 'https://ru.iobit.com/purchase/' + dirname[2] + '/';
                    }
                }
            }
            if (targetUrl != undefined) {
                currentUrlQuery = MApp(2.2).url.getQuery();
                targetUrlArr = MApp(2.2).url.parseUrl(targetUrl);
                targetUrlQueryArr = MApp(2.2).url.parseQuery(targetUrl);
                if (currentUrlQuery) {
                    targetUrl = 'http://' + targetUrlArr[0] + targetUrlArr[1];
                    targetUrl += '?' + currentUrlQuery;
                    if (targetUrlQueryArr[0]) targetUrl += '&' + targetUrlQueryArr[0];
                    if (targetUrlQueryArr[1]) targetUrl += '#' + targetUrlQueryArr[1];
                }
            }
            /*if (this.language == 'ja' && this.domain == 'purchase.iobit.com') {
                var aff = MApp(2.2).url.getParameters('AFF');
                if (aff != '') return false;
            }*/
            if (targetUrl == 'http://jp.iobit.com/rd/sd-safeupdate') {
                var to = MApp(2.2).url.getParameters('to');
                if (to == 'freeurl') targetUrl = 'http://jp.iobit.com/rd/sd-freeurl';
                if (to == 'proupdate') targetUrl = 'http://jp.iobit.com/rd/sd-proupdate';
            }
            if (targetUrl != undefined) {
                window.location = targetUrl;
                hrefurl = true;
            }
        }
});
var hrefurl = false;
Redirect.run();

// MacOS IOS system jump
var clientSystemType = MApp(2.2).client.getSystemType();
var clientdomain = MApp(2.2).url.getDomain();
var filePath = MApp(2.2).url.getFilePath();

// Android device jump
//if (filePath == '/' || filePath == '/index.php' || filePath == '/iobit2015.php' || filePath == '/index.html' || filePath == '/advanced-mobile-care.php' || filePath == '/advanced-mobile-care.html') {
// if (clientSystemType == 'android') {
//     if (MApp(2.2).url.getParameters('from') == 'mobile') {
//         MApp(2.2).cookie.expireTime = 24 * 60 * 60 * 1000;
//         MApp(2.2).cookie.set('androidDeviceRedirect', '1');
//     } else {
//         if (MApp(2.2).cookie.get('androidDeviceRedirect') != '1') {
//             window.location.href = 'http://mobile.iobit.com/m/';
//             hrefurl = true;
//         }
//     }
// }

$(document).ready(function () {
    $("a").each(function () {
        var tw = MApp(2.2).datetime.getTimeZone();
        if (this.href.indexOf("://www.iobit.com/buy.php") != -1) {
            this.href = this.href + '&tw=' + tw;
        }
    });
});
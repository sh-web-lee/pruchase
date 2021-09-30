/**
 * Created by songsw on 2018/5/2.
 */
//imf multi language redirect
//var filePath=((MApp(2.2).url.getFilePath())).replace('/purchase.iobit.com','');
var filePath = ((MApp(2.2).url.getFilePath())).replace('/purchase.iobit.com', '').replace('/purchase.rs.iobit.com', '');
var browserLanguage = MApp(2.2).language.langArr[0];

//db param iData delete
var dbIDataPattern = new RegExp('^\/(de|fr|nl|es|pt|sv|dk|it|pl)\/db\/');
var dbMatchArr = filePath.match(dbIDataPattern);
if (dbMatchArr != null) {
    var paramIData = MApp(2.2).url.getParameters('idata');
    var paramDData = MApp(2.2).url.getParameters('ddata');
    if ((paramIData.length > 0) || (paramDData.length > 0)) {
        var paramArr = [];
        var paramStr = '';
        var nowUrl = window.location.href;
        var urlNoParam = nowUrl.substr(0, nowUrl.indexOf("?"));
        var nowParamStr = window.location.search.substr(1);
        var nowParamArr = nowParamStr.split('&');
        for (var i = 0; i < nowParamArr.length; i++) {
            var paramSpArr = nowParamArr[i].split('=');
            if ((paramSpArr[0] != 'idata') && (paramSpArr[0] != 'ddata')) {
                paramArr.push(nowParamArr[i]);
            }
        }
        if (paramArr.length > 0) {
            paramStr = '?' + paramArr.join('&');
        }
        window.location.href = urlNoParam + paramStr;
    }
}

var pattern = new RegExp('^\/en\/imf\/(ar|cg|sb|bd)\.php');
var acsbMatchArr = pattern.exec(filePath);
if (acsbMatchArr != null) {
    var acsbPath = acsbMatchArr[1];
    var redirectUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if ($.inArray(browserLanguage, ['de', 'nl', 'it', 'dk', 'es', 'pt', 'sv', 'fr']) !== -1) {
        redirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if (((browserLanguage == 'ru') || (browserLanguage == 'pl')) && ($.inArray(acsbPath, ['ar', 'sb', 'bd']) !== -1)) {
        if (browserLanguage == 'ru') {
            redirectUrl = 'https://ru.iobit.com/purchase/imf/' + acsbPath + '/';
        } else {
            redirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
        }
    }
    if (redirectUrl.length > 0) {
        redirect(redirectUrl);
    }
}

//sd multi language redirect
var sdPattern = new RegExp('^\/en\/sd\/sd6rc\.php');
if (sdPattern.test(filePath)) {
    var sdRedirectUrl = '';
    if ($.inArray(browserLanguage, ['nl', 'it', 'de', 'fr', 'es', 'pt']) !== -1) {
        sdRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    }
    if (sdRedirectUrl.length > 0) {
        redirect(sdRedirectUrl);
    }
}

//iu multi language redirect
var iuPattern = new RegExp('^\/en\/iu\/(iu8preorderpopup|iu8preorder)\.php');
if (iuPattern.test(filePath)) {
    var iuRedirectUrl = '';
    if ($.inArray(browserLanguage, ['fr', 'de']) !== -1) {
        iuRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
        if (browserLanguage == 'de') {
            iuRedirectUrl = iuRedirectUrl.replace('/iu/iu8preorderpopup.php', '/iu/iu8preorder456de.php');
        }
    }
    if (iuRedirectUrl.length > 0) {
        redirect(iuRedirectUrl);
    }
}

//db multi language redirect
var dbPattern = new RegExp('^\/en\/db\/(db6preorder|db6preorderpopup)\.php');
if (dbPattern.test(filePath)) {
    var dbRedirectUrl = '';
    if ($.inArray(browserLanguage, ['fr', 'de']) !== -1) {
        dbRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    }
    if (dbRedirectUrl.length > 0) {
        redirect(dbRedirectUrl);
    }
}

//multi language params
var multiPattern = new RegExp('^\/(de|fr|nl|es|pt|sv|dk|it)\/imf\/(ar|cg|sb|bd)\.php');
var matchArr = filePath.match(multiPattern);
if (matchArr != null) {
    var currentPage = matchArr[2];
    var paramRef = MApp(2.2).url.getParameters('ref');
    if (paramRef == currentPage) {
        $(function () {
            $('a').each(function () {
                var buyHrefTemp = $(this).attr('href');
                var buyHref = buyHrefTemp.replace(/ref=(.*)&aff=/, 'ref=$1-' + paramRef + '&aff=');
                $(this).attr('href', buyHref);
            })
        })
    }
}

//xmas multi language redirect
var xmasPattern = new RegExp('^\/en\/((iu\/xiu\.php)|(asc\/xsdpasc\.php)|(iu\/xiuasc\.php)|(asc\/xdbpasc\.php)' +
    '|(imf\/ximf\.php)|(asc\/xascdb\.php)|(asc\/xasc\.php)|(db\/xdb\.php))');
if (xmasPattern.test(filePath)) {
    var xmasRedirectUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if ($.inArray(browserLanguage, ['de', 'nl', 'dk', 'it', 'es', 'pt', 'sv', 'fr']) !== -1) {
        var xRedirect = new RegExp('(asc\/xascdb\.php)|(iu\/xiuasc\.php)');
        if ((browserLanguage == 'dk') && (!xRedirect.test(filePath))) {
            var dkXmasPattern = new RegExp('^\/en\/(iu|asc|imf|db)\/');
            var dkMatch = filePath.match(dkXmasPattern);
            if (dkMatch.length > 0) {
                xmasRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + '/' + dkMatch[1] + '/index.php';
            }
        } else {
            xmasRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
        }
        if (xmasRedirectUrl.length > 0) {
            redirect(xmasRedirectUrl);
        }
    }
}

//imf preOrder redirect
var imfTrialPattern = new RegExp("^\/en\/imf\/(imf8preorder|trialbuy)\.php");
var imfTrialMatchArr = imfTrialPattern.exec(filePath);
if (imfTrialMatchArr !== null) {
    var imfTrialPath = imfTrialMatchArr[1];
    var imfTrialRedirectUrl = '';
    if ($.inArray(browserLanguage, ['de', 'fr', 'nl', 'it', 'es', 'pt', 'da', 'sv']) !== -1) {
        if (browserLanguage == 'da') browserLanguage = 'dk';
        imfTrialRedirectUrl = 'https://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if (browserLanguage == 'ru') {
        imfTrialRedirectUrl = 'https://ru.iobit.com/purchase/imf/imf8preorder.php';
    }
    if (imfTrialRedirectUrl.length > 0) {
        redirect(imfTrialRedirectUrl);
    }
}

//imf olduser redirect
var imfOldPattern = new RegExp("^\/en\/imf\/(newinstall|special|imf7launch)\.php");
var imfOldMatchArr = imfOldPattern.exec(filePath);
if (imfOldMatchArr !== null) {
    var imfOldPath = imfOldMatchArr[1];
    var imfOldRedirectUrl = '';
    if ($.inArray(browserLanguage, ['de', 'fr', 'nl', 'it', 'es', 'pt', 'da', 'sv']) !== -1) {
        if (browserLanguage == 'da') browserLanguage = 'dk';
        imfOldRedirectUrl = 'https://purchase.iobit.com/' + browserLanguage + '/imf/newinstall.php';
    } else if ($.inArray(browserLanguage, ['it', 'pl']) !== -1) {
        newfilePath = filePath.replace('/en', '');
        if (newfilePath == '/imf/newinstall.php') {
            imfOldRedirectUrl = 'https://purchase.iobit.com/' + browserLanguage + '/imf/newinstall.php';
        } else {
            imfOldRedirectUrl = 'https://purchase.iobit.com/' + browserLanguage + '/imf/newluanch.php';
        }
    } else if (browserLanguage == 'ru') {
        imfOldRedirectUrl = 'https://ru.iobit.com/purchase/imf/newinstall/';
    }
    if (imfOldRedirectUrl.length > 0) {
        redirect(imfOldRedirectUrl);
    }
}


//db trial redirect
var dbTrialPattern = new RegExp("^\/en\/db\/(trial|trialbuy)\.php");
var dbTrialMatchArr = dbTrialPattern.exec(filePath);
if (dbTrialMatchArr !== null) {
    var dbTrialPath = dbTrialMatchArr[1];
    var dbTrialRedirectUrl = '';
    if ($.inArray(browserLanguage, ['de', 'fr', 'nl', 'it', 'es', 'pt']) !== -1) {
        dbTrialRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if (browserLanguage == 'ru') {
        dbTrialRedirectUrl = 'https://ru.iobit.com/purchase/db/' + dbTrialPath + '/';
    }
    if (dbTrialRedirectUrl.length > 0) {
        redirect(dbTrialRedirectUrl);
    }
}

//imf track usb
var imfTrackUsbPattern = new RegExp("^\/en\/imf\/(usb|track)\.php");
var imfTrackUsbMatchArr = imfTrackUsbPattern.exec(filePath);
if (imfTrackUsbMatchArr !== null) {
    var imfTUPath = imfTrackUsbMatchArr[1];
    var imfTURedirectUrl = '';

    if (imfTUPath == 'usb') {
        if ($.inArray(browserLanguage, ['fr', 'de', 'nl', 'it']) !== -1) {
            imfTURedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
        } else if (browserLanguage == 'ru') {
            imfTURedirectUrl = 'https://ru.iobit.com/purchase/imf/usb/';
        }
    } else if (imfTUPath == 'track') {
        if ($.inArray(browserLanguage, ['fr', 'de', 'nl', 'it', 'ru', 'es', 'pt', 'sv']) !== -1) {
            imfTURedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
        } else if (browserLanguage == 'ru') {
            imfTURedirectUrl = 'https://ru.iobit.com/purchase/imf/track/';
        }
    }
    if (imfTURedirectUrl.length > 0) {
        redirect(imfTURedirectUrl);
    }
}

var ascEventPattern = new RegExp('^\/en\/asc\/event2019\.php');
var ascEventMatchArr = ascEventPattern.exec(filePath);
if (ascEventMatchArr != null) {
    var ascEventRedirectUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if ($.inArray(browserLanguage, ['de', 'nl', 'it', 'dk', 'es', 'pt', 'sv', 'fr']) !== -1) {
        ascEventRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if (browserLanguage == 'ru') {
        ascEventRedirectUrl = 'https://ru.iobit.com/purchase/asc/event2019/';
    }
    if (ascEventRedirectUrl.length > 0) {
        redirect(ascEventRedirectUrl);
    }
}

//isu3preorder redirect
var ascEventPattern = new RegExp('^\/en\/isu\/isu3preorder\.php');
var ascEventMatchArr = ascEventPattern.exec(filePath);
if (ascEventMatchArr != null) {
    var ascEventRedirectUrl = '';
    if ($.inArray(browserLanguage, ['de', 'nl', 'it', 'es', 'pt', 'fr']) !== -1) {
        ascEventRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if (browserLanguage == 'ru') {
        ascEventRedirectUrl = 'https://ru.iobit.com/purchase/isu/isu3preorder.php';
    }
    if (ascEventRedirectUrl.length > 0) {
        redirect(ascEventRedirectUrl);
    }
}

//iu preOrder redirect
var iuPrePattern = new RegExp('\/(en|de|nl|it|dk|es|pt|sv|fr|pl)\/iu\/(iu9preorder|iu9preorderiu|iu9preorderofficial|iu9preorderexp)\.php');
var iuPreMatchArr = iuPrePattern.exec(filePath);
if (iuPreMatchArr != null) {
    var currentLan = iuPreMatchArr[1];
    var iuPreUrl = 'http://purchase.iobit.com/' + currentLan + '/iu/index.php';
    redirect(iuPreUrl);
}

//db preOrder redirect
var db7PrePattern = new RegExp("^\/(en|fr|es|it|pt|nl|de|ru|dk|sv|pl)\/db\/(db7preorder|db7preorderexp|db7preorderofficial|db7preorderpre)\.php");
var db7PreMatchArr = db7PrePattern.exec(filePath);
if (db7PreMatchArr != null) {
    var currentLanDb = db7PreMatchArr[1];
    var db7PreUrl = 'http://purchase.iobit.com/' + currentLanDb + '/db/index.php';
    redirect(db7PreUrl);
}

//db preOrder redirect
var dbPrePattern = new RegExp('\/en\/db\/(db7preorder|db7preorderexp|db7preorderofficial|db7preorderpre)\.php');
var dbPreMatchArr = dbPrePattern.exec(filePath);
if (dbPreMatchArr != null) {
    var dbPrePath = dbPreMatchArr[1];
    var dbPreUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if (browserLanguage == 'ru') {
        dbPreUrl = 'https://ru.iobit.com/purchase/db/' + dbPrePath + '.php';
    } else if ($.inArray(browserLanguage, ['de', 'nl', 'it', 'dk', 'es', 'pt', 'sv', 'fr', 'pl']) !== -1) {
        dbPreUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    }
    if (dbPreUrl.length > 0) {
        redirect(dbPreUrl);
    }
}

//iu new launch&install redirect
var iuNewPattern = new RegExp('\/en\/iu\/(newinstall|newlaunch)\.php');
var iuNewMatchArr = iuNewPattern.exec(filePath);
if (iuNewMatchArr) {
    var iuNewPath = iuNewMatchArr[1];
    var iuNewUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if (browserLanguage == 'ru') {
        iuNewUrl = 'https://ru.iobit.com/purchase/iu/' + iuNewPath + '/';
    } else if ($.inArray(browserLanguage, ['de', 'nl', 'it', 'dk', 'es', 'pt', 'sv', 'fr']) !== -1) {
        iuNewUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    }
    if (iuNewUrl.length > 0) {
        redirect(iuNewUrl);
    }
}

//db launch redirect
var dbLaunchPattern = new RegExp('\/en\/db\/(newinstall|newlaunch)\.php');
var dbLaunchMatchArr = dbLaunchPattern.exec(filePath);
if (dbLaunchMatchArr) {
    var dbLaunchPath = dbLaunchMatchArr[1];
    console.log(dbLaunchMatchArr[1]);
    var dbLaunchUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if (dbLaunchPath == 'newlaunch' && browserLanguage == 'ja') {
        dbLaunchUrl = 'https://jp.iobit.com/purchase/db/newlaunch.php';
    }
    if (browserLanguage == 'ru') {
        dbLaunchUrl = 'https://ru.iobit.com/purchase/db/' + dbLaunchPath + '.php';
    } else if ($.inArray(browserLanguage, ['de', 'nl', 'it', 'dk', 'es', 'pt', 'sv', 'fr', 'pl']) !== -1) {
        dbLaunchUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    }
    if (dbLaunchUrl.length > 0) {
        redirect(dbLaunchUrl);
    }
}

//asc13 pre redirect
var asc13PrePattern = new RegExp("^\/(en|fr|es|it|pt|nl|de|ru|dk|sv|pl)\/asc\/(asc13preorder|asc13preorderofficial|asc13preorderexpired|asc13preorderpopup)\.php");
var asc13PreMatchArr = asc13PrePattern.exec(filePath);
if (asc13PreMatchArr != null) {
    var currentLanAsc = asc13PreMatchArr[1];
    var asc13PreUrl = 'http://purchase.iobit.com/' + currentLanAsc + '/asc/index.php';
    redirect(asc13PreUrl);
}

//iu install redirect
var iuInstallPattern = new RegExp('\/en\/iu\/(installmonitorb)\.php');
var iuInstallMatchArr = iuInstallPattern.exec(filePath);
if (iuInstallMatchArr) {
    var iuInstallPath = iuInstallMatchArr[1];
    var iuInstallUrl = '';
    if (browserLanguage == 'ru') {
        iuInstallUrl = 'https://ru.iobit.com/purchase/iu/' + iuInstallPath + '.php';
    } else if ($.inArray(browserLanguage, ['it', 'de', 'fr', 'es']) !== -1) {
        iuInstallUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    }
    if (iuInstallUrl.length > 0) {
        redirect(iuInstallUrl);
    }
}

//过期预售页面
var iuExp = new RegExp('^\/en\/iu\/iu10preorderexp\.php');
var iuExpMatchArr = iuExp.exec(filePath);
if (iuExpMatchArr != null) {
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    var iuExpRedirectUrl = '';
    if ($.inArray(browserLanguage, ['de', 'nl', 'it', 'es', 'pt', 'fr']) !== -1) {
        iuExpRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if (browserLanguage == 'ru') {
        iuExpRedirectUrl = 'https://ru.iobit.com/purchase/iu/iu10preorderexp.php';
    } else if ($.inArray(browserLanguage, ['sv', 'dk']) !== -1) {
        iuExpRedirectUrl = 'https://purchase.iobit.com/' + browserLanguage + '/iu/iu10preorderofficial.php';
    }
    if (iuExpRedirectUrl.length > 0) {
        redirect(iuExpRedirectUrl);
    }
}

//RC预售页面
var iuRc = new RegExp('^\/en\/iu\/iu10preorder\.php');
var iuRcMatchArr = iuRc.exec(filePath);
if (iuRcMatchArr != null) {
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    var iuRcRedirectUrl = '';
    if ($.inArray(browserLanguage, ['de', 'it', 'es', 'pt', 'fr']) !== -1) {
        iuRcRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if (browserLanguage == 'ru') {
        iuRcRedirectUrl = 'https://ru.iobit.com/purchase/iu/iu10preorder.php';
    } else if ($.inArray(browserLanguage, ['sv', 'dk']) !== -1) {
        iuRcRedirectUrl = 'https://purchase.iobit.com/' + browserLanguage + '/iu/iu10preorderofficial.php';
    }
    if (iuRcRedirectUrl.length > 0) {
        redirect(iuRcRedirectUrl);
    }
}

//官网预售页面
var iuOff = new RegExp('^\/en\/iu\/iu10preorderofficial\.php');
var iuOffMatchArr = iuOff.exec(filePath);
if (iuOffMatchArr != null) {
    var iuOffRedirectUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if ($.inArray(browserLanguage, ['sv', 'dk', 'nl', 'de', 'it', 'es', 'pt', 'fr']) !== -1) {
        iuOffRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if (browserLanguage == 'ru') {
        iuOffRedirectUrl = 'https://ru.iobit.com/purchase/iu/iu10preorderofficial.php';
    }
    if (iuOffRedirectUrl.length > 0) {
        redirect(iuOffRedirectUrl);
    }
}


var dbOff = new RegExp('^\/en\/db\/db8preorder\.php');
var dbOffMatchArr = dbOff.exec(filePath);
if (dbOffMatchArr != null) {
    var dbOffRedirectUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if ($.inArray(browserLanguage, ['de', 'fr', 'dk', 'es', 'nl', 'sv', 'pl', 'it', 'pt']) !== -1) {
        dbOffRedirectUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if (browserLanguage == 'ru') {
        dbOffRedirectUrl = 'https://ru.iobit.com/purchase/db/db8preorder.php';
    }
    if (dbOffRedirectUrl.length > 0) {
        redirect(dbOffRedirectUrl);
    }
}

//db pre
var dbRcPattern = new RegExp('\/en\/db\/db8preorderpre\.php');
var dbRcMatchArr = dbRcPattern.exec(filePath);
if (dbRcMatchArr) {
    var dbRcUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if (browserLanguage == 'ru') {
        dbRcUrl = 'https://ru.iobit.com/purchase/db/db8preorder.php';
    } else if ($.inArray(browserLanguage, ['de', 'nl', 'it', 'dk', 'es', 'pt', 'sv', 'fr', 'pl']) !== -1) {
        dbRcUrl = 'http://purchase.iobit.com/' + browserLanguage + '/db/db8preorder.php';
    }
    if (dbRcUrl.length > 0) {
        redirect(dbRcUrl);
    }
}


//db exp
var dbExpPattern = new RegExp('\/en\/db\/db8preorderexp\.php');
var dbExpMatchArr = dbExpPattern.exec(filePath);
if (dbExpMatchArr) {
    var dbExpUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if (browserLanguage == 'ru') {
        dbExpUrl = 'https://ru.iobit.com/purchase/db/db8preorderexp.php';
    } else if ($.inArray(browserLanguage, ['de', 'nl', 'it', 'es', 'pt', 'fr']) !== -1) {
        dbExpUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if ($.inArray(browserLanguage, ['pl', 'dk', 'sv']) !== -1) {
        dbExpUrl = 'http://purchase.iobit.com/' + browserLanguage + '/db/db8preorderofficial.php';
    }
    if (dbExpUrl.length > 0) {
        redirect(dbExpUrl);
    }
}


//db off
var dbOffPattern = new RegExp('\/en\/db\/db8preorderofficial\.php');
var dbOffMatchArr = dbOffPattern.exec(filePath);
if (dbOffMatchArr) {
    var dbOffUrl = '';
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if (browserLanguage == 'ru') {
        dbOffUrl = 'https://ru.iobit.com/purchase/db/db8preorder.php';
    } else if ($.inArray(browserLanguage, ['de', 'nl', 'it', 'dk', 'sv', 'fr', 'pl']) !== -1) {
        dbOffUrl = 'http://purchase.iobit.com/' + browserLanguage + filePath.replace('/en', '');
    } else if ($.inArray(browserLanguage, ['es', 'pt']) !== -1) {
        dbOffUrl = 'http://purchase.iobit.com/' + browserLanguage + '/db/db8preorder.php';
    }
    if (dbOffUrl.length > 0) {
        redirect(dbOffUrl);
    }
}

//special
var specialPattern = new RegExp('\/en\/iu\/(specialloyal|specialnew)\.php');
var specialMatchArr = specialPattern.exec(filePath);
if (specialMatchArr) {
    var specialUrl = '';
    if ($.inArray(browserLanguage, ['es', 'pt', 'sv', 'pl']) !== -1) {
        specialUrl = 'http://purchase.iobit.com/' + browserLanguage + '/iu/special' + (browserLanguage == 'pl' ? '2020' : '') + '.php';
    } else if ($.inArray(browserLanguage, ['nl', 'it']) !== -1) {
        if (specialMatchArr[1] == 'specialnew') {
            specialUrl = 'https://purchase.iobit.com/' + browserLanguage + '/iu/' + (browserLanguage == 'nl' ? 'newspecial' : 'specialnew') + '.php';
        } else {
            specialUrl = 'https://purchase.iobit.com/' + browserLanguage + '/iu/' + (browserLanguage == 'nl' ? 'oldspecial' : 'specialold') + '.php';
        }
    }
    if (specialUrl.length > 0) {
        redirect(specialUrl);
    }
}

var endbPattern = new RegExp('\/en\/db\/(trial|trialbuy)\.php');
var endbMatchArr = endbPattern.exec(filePath);
if (endbMatchArr) {
    var endbUrl = '';
    if (browserLanguage == 'ja') {
        endbUrl = 'https://jp.iobit.com/purchase/db/' + endbMatchArr[1] + '.php';
    }
    if (endbUrl.length > 0) {
        redirect(endbUrl);
    }
}

//asc14
var asc14Pattern = new RegExp('\/en\/asc\/(asc14preorder|asc14preorderpopup|asc14preorderexpired|asc14preorderofficial)\.php');
var asc14MatchArr = asc14Pattern.exec(filePath);
if (asc14MatchArr) {
    var asc14Url = '';
    asc14MatchArr[1] = (asc14MatchArr[1] == 'asc14preorderpopup') ? 'asc14preorder' : asc14MatchArr[1];
    browserLanguage = (browserLanguage == 'da') ? 'dk' : browserLanguage;
    if ($.inArray(browserLanguage, ['es', 'pt', 'de', 'fr', 'it', 'nl']) !== -1) {
        asc14Url = 'http://purchase.iobit.com/' + browserLanguage + '/asc/' + asc14MatchArr[1] + '.php';
    } else if ($.inArray(browserLanguage, ['dk', 'sv']) !== -1) {
        asc14Url = 'http://purchase.iobit.com/' + browserLanguage + '/asc/asc14preorderofficial.php';
    } else if (browserLanguage == 'pl') {
        asc14MatchArr[1] = (asc14MatchArr[1] == 'asc14preorderexpired') ? 'asc14preorderofficial' : asc14MatchArr[1];
        asc14Url = 'http://purchase.iobit.com/pl/asc/' + asc14MatchArr[1] + '.php';
    } else if (browserLanguage == 'ru') {
        asc14Url = 'https://ru.iobit.com/purchase/asc/' + asc14MatchArr[1] + '.php';
    }
    if (asc14Url.length > 0) {
        redirect(asc14Url);
    }
}

var asctoplPattern = new RegExp('\/en\/asc\/(xasc|xrasce)\.php');
var asctoplMatchArr = asctoplPattern.exec(filePath);
if (asctoplMatchArr) {
    browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
    var asctoplUrl = '';
    if ($.inArray(browserLanguage, ['dk', 'pl']) !== -1) {
        if (asctoplMatchArr[1] == 'xrasce') {
            asctoplUrl = 'https://purchase.iobit.com/' + browserLanguage + '/asc/index.php';
        } else {
            asctoplUrl = 'http://purchase.iobit.com/' + browserLanguage + '/asc/' + asctoplMatchArr[1] + '.php';
        }
    } else if (browserLanguage == 'ru') {
        asctoplUrl = '	https://ru.iobit.com/purchase/asc/' + asctoplMatchArr[1] + '.php';
    } else if (browserLanguage == 'ja' && asctoplMatchArr[1] == 'xasc') {
        asctoplUrl = 'https://jp.iobit.com/purchase/asc/xrasc.php';
    } else if ($.inArray(browserLanguage, ['it', 'de', 'nl', 'fr', 'es']) !== -1) {
        if (asctoplMatchArr[1] == 'xrasce') {
            asctoplUrl = 'https://purchase.iobit.com/' + browserLanguage + '/asc/xrasce.php';
        }
    }
    if (asctoplUrl.length > 0) {
        redirect(asctoplUrl);
    }
}

var dbtoplPattern = new RegExp('\/en\/db\/(xdb|xrdbe)\.php');
var dbtoplMatchArr = dbtoplPattern.exec(filePath);
if (dbtoplMatchArr) {
    var dbtoplUrl = '';
    browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
    if ($.inArray(browserLanguage, ['dk', 'pl']) !== -1) {
        if (dbtoplMatchArr[1] == 'xrdbe') {
            dbtoplUrl = 'https://purchase.iobit.com/' + browserLanguage + '/db/index.php';
        } else {
            dbtoplUrl = 'http://purchase.iobit.com/' + browserLanguage + '/db/' + dbtoplMatchArr[1] + '.php';
        }
    } else if (browserLanguage == 'ru') {
        dbtoplUrl = 'https://ru.iobit.com/purchase/db/' + dbtoplMatchArr[1] + '.php';
    } else if (browserLanguage == 'ja' && dbtoplMatchArr[1] == 'xdb') {
        dbtoplUrl = 'https://jp.iobit.com/purchase/db/xrdb.php';
    } else if ($.inArray(browserLanguage, ['it', 'de', 'nl', 'fr', 'es']) !== -1) {
        if (dbtoplMatchArr[1] == 'xrdbe') {
            dbtoplUrl = 'http://purchase.iobit.com/' + browserLanguage + '/db/xrdbe.php';
        }
    }
    if (dbtoplUrl.length > 0) {
        redirect(dbtoplUrl);
    }
}

var imftoplPattern = new RegExp('\/en\/imf\/(ximf|xrimfe)\.php');
var imftoplMatchArr = imftoplPattern.exec(filePath);
if (imftoplMatchArr) {
    var imftoplUrl = '';
    browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
    if ($.inArray(browserLanguage, ['dk', 'pl']) !== -1) {
        if (imftoplMatchArr[1] == 'xrimfe') {
            imftoplUrl = 'https://purchase.iobit.com/' + browserLanguage + '/imf/index.php';
        } else {
            imftoplUrl = 'http://purchase.iobit.com/' + browserLanguage + '/imf/' + imftoplMatchArr[1] + '.php';
        }
    } else if (browserLanguage == 'ru') {
        imftoplUrl = 'https://ru.iobit.com/purchase/imf/' + imftoplMatchArr[1] + '.php';
    } else if (browserLanguage == 'ja') {
        if (imftoplMatchArr[1] == 'ximf')
            imftoplUrl = 'https://jp.iobit.com/purchase/imf/index.php';
        else
            imftoplUrl = 'https://jp.iobit.com/purchase/imf/xrimfe.php';
    } else if ($.inArray(browserLanguage, ['it', 'de', 'nl', 'fr', 'es']) !== -1) {
        if (imftoplMatchArr[1] == 'xrimfe') {
            imftoplUrl = 'http://purchase.iobit.com/' + browserLanguage + '/imf/xrimfe.php';
        }
    }
    if (imftoplUrl.length > 0) {
        redirect(imftoplUrl);
    }
}

var iutoplPattern = new RegExp('\/en\/iu\/(xiu|xriue)\.php');
var iutoplMatchArr = iutoplPattern.exec(filePath);
if (iutoplMatchArr) {
    var iutoplUrl = '';
    browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
    if ($.inArray(browserLanguage, ['dk', 'pl']) !== -1) {
        if (iutoplMatchArr[1] == 'xriue') {
            iutoplUrl = 'https://purchase.iobit.com/' + browserLanguage + '/iu/index.php';
        } else {
            iutoplUrl = 'http://purchase.iobit.com/' + browserLanguage + '/iu/' + iutoplMatchArr[1] + '.php';
        }
    } else if (browserLanguage == 'ru') {
        iutoplUrl = 'https://ru.iobit.com/purchase/iu/' + iutoplMatchArr[1] + '.php';
    } else if (browserLanguage == 'ja' && iutoplMatchArr[1] == 'xiu') {
        iutoplUrl = 'https://jp.iobit.com/purchase/iu/xriu.php';
    } else if ($.inArray(browserLanguage, ['it', 'de', 'nl', 'fr', 'es']) !== -1) {
        if (iutoplMatchArr[1] == 'xriue') {
            iutoplUrl = 'http://purchase.iobit.com/' + browserLanguage + '/iu/xriue.php';
        }
    }
    if (iutoplUrl.length > 0) {
        redirect(iutoplUrl);
    }
}

var sdtoplPattern = new RegExp('\/en\/sd\/xsd\.php');
var sdtoplMatchArr = sdtoplPattern.exec(filePath);
if (sdtoplMatchArr) {
    var sdtoplUrl = '';
    browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
    if($.inArray(browserLanguage, ['it', 'de', 'nl', 'fr', 'es', 'pl', 'de', 'dk']) !== -1) {
        sdtoplUrl = 'https://purchase.iobit.com/' + browserLanguage + '/sd/index.php';
    }if(browserLanguage == 'ja'){
        sdtoplUrl = 'https://jp.iobit.com/purchase/sd/index.php';
    }
    if (sdtoplUrl.length > 0) {
        redirect(sdtoplUrl);
    }
}

var isutoplPattern = new RegExp('\/en\/isu\/xisu\.php');
var isutoplMatchArr = isutoplPattern.exec(filePath);
if (isutoplMatchArr) {
    var isutoplUrl = '';
    browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
    if($.inArray(browserLanguage, ['it', 'de', 'nl', 'fr', 'es', 'pl', 'de', 'dk']) !== -1){
        isutoplUrl = 'https://purchase.iobit.com/' + browserLanguage + '/isu/index.php';
    }if(browserLanguage == 'ja'){
        isutoplUrl = 'https://jp.iobit.com/purchase/isu/index.php';
    }
    if (isutoplUrl.length > 0) {
        redirect(isutoplUrl);
    }
}

var xtwobPattern = new RegExp('\/en\/sale\/xtwob\.php');
var xtwobMatchArr = xtwobPattern.exec(filePath);
var paramPOP = MApp(2.2).url.getParameters('pop');
browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
if (xtwobMatchArr) {
    var xtwobUrl = '';
    if($.inArray(browserLanguage, ['it', 'de', 'nl', 'fr', 'es', 'sv', 'pl', 'de', 'dk', 'ja', 'ru']) !== -1) {
        if (paramPOP == 'xr_ascdb') {
            if (browserLanguage == 'ru') {
                xtwobUrl = 'https://ru.iobit.com/purchase/asc/xascdb.php';
            } else if(browserLanguage == 'ja'){
                xtwobUrl = 'https://jp.iobit.com/purchase/asc/xascdb.php';
            } else
                xtwobUrl = 'https://purchase.iobit.com/' + browserLanguage + '/asc/xascdb.php';
        }
        if (paramPOP == 'xr_asciu') {
            if (browserLanguage == 'ru') {
                xtwobUrl = 'https://ru.iobit.com/purchase/iu/xiuasc.php';
            } else if(browserLanguage == 'ja'){
                xtwobUrl = 'https://jp.iobit.com/purchase/iu/xiuasc.php';
            }else
                xtwobUrl = 'https://purchase.iobit.com/' + browserLanguage + '/iu/xiuasc.php';
        }
    }
    if (xtwobUrl.length > 0) {
        redirect(xtwobUrl);
    }
}

var xsixbPattern = new RegExp('\/en\/sale\/xsixb\.php');
var xsixbMatchArr = xsixbPattern.exec(filePath);
browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
if (xsixbMatchArr) {
    var xsixbUrl = '';
    if($.inArray(browserLanguage, ['it', 'de', 'nl', 'fr', 'es', 'sv', 'pl', 'de', 'dk', 'ru' ,'ja']) !== -1) {
        if (paramPOP == 'xr_ascdb')
            if (browserLanguage == 'ru') {
                xsixbUrl = 'https://ru.iobit.com/purchase/asc/xascdb.php';
            }else if(browserLanguage == 'ja'){
                xsixbUrl ='https://jp.iobit.com/purchase/asc/xascdb.php';
            } else
                xsixbUrl = 'https://purchase.iobit.com/' + browserLanguage + '/asc/xascdb.php';
        if (paramPOP == 'xr_asciu') {
            if (browserLanguage == 'ru') {
                xsixbUrl = 'https://ru.iobit.com/purchase/iu/xiuasc.php';
            }else if(browserLanguage == 'ja'){
                xsixbUrl = 'https://jp.iobit.com/purchase/iu/xiuasc.php';
            }else
                xsixbUrl = 'https://purchase.iobit.com/' + browserLanguage + '/iu/xiuasc.php';
        }
    }
    if (xsixbUrl.length > 0) {
        redirect(xsixbUrl);
    }
}

var generalPattern = new RegExp('\/aff\/en\/asc\/2017asc10general\/index\.php');
var generalMatchArr = generalPattern.exec(filePath);
browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
if (generalMatchArr) {
    var generalUrl = '';
    if ($.inArray(browserLanguage, ['it', 'pt', 'nl', 'fr', 'es', 'sv', 'pl', 'de', 'dk', 'ru', 'ja']) !== -1) {
        if (browserLanguage == 'ru') {
            generalUrl = 'https://ru.iobit.com/purchase/aff/asc/2017asc10general/index.php';
        } else if (browserLanguage == 'ja') {
            generalUrl = 'https://jp.iobit.com/purchase/aff/asc/2017asc10general/index.php';
        } else
            generalUrl = 'https://purchase.iobit.com/aff/' + browserLanguage + '/asc/2017asc10general/index.php';
    }
    if (generalUrl.length > 0) {
        redirect(generalUrl);
    }
}

var generaldbPattern = new RegExp('\/aff\/en\/db\/2017general\/index\.php');
var generaldbMatchArr = generaldbPattern.exec(filePath);
browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
if (generaldbMatchArr) {
    var generaldbUrl = '';
    if ($.inArray(browserLanguage, ['it', 'nl', 'fr', 'es', 'sv', 'pl', 'de', 'dk', 'ru', 'pt', 'ja']) !== -1) {
        if (browserLanguage == 'ru') {
            generaldbUrl = 'https://ru.iobit.com/purchase/aff/db/2017general/index.php';
        } else if (browserLanguage == 'ja') {
            generaldbUrl = 'https://jp.iobit.com/purchase/aff/db/2017general/index.php';
        } else
            generaldbUrl = 'https://purchase.iobit.com/aff/' + browserLanguage + '/db/2017general/index.php';
    }
    if (generaldbUrl.length > 0) {
        redirect(generaldbUrl);
    }
}

//iu11
var iu11Pattern = new RegExp('\/en\/iu\/(iu11preorder|iu11preorderexp|iu11preorderiu|iu11preorderofficial)\.php');
var iu11MatchArr = iu11Pattern.exec(filePath);
if (iu11MatchArr) {
    var iu11Url = '';
    browserLanguage = browserLanguage == 'da' ? 'dk' : browserLanguage;
    if($.inArray(browserLanguage, ['it', 'de', 'nl', 'fr', 'es', 'pl', 'pt', 'sv']) !== -1){
        iu11Url = 'https://purchase.iobit.com/' + browserLanguage + '/iu/iu11preorder.php';
    }if(browserLanguage == 'ja'){
        iu11Url = 'https://jp.iobit.com/purchase/iu/iu11preorder.php';
    }if(browserLanguage == 'ru'){
        iu11Url = 'https://ru.iobit.com/purchase/iu/iu11preorder.php';
    }
    if (iu11Url.length > 0) {
        redirect(iu11Url);
    }
}

function redirect(redirectUrl) {
    var currentUrlQuery = MApp(2.2).url.getQuery();
    var targetUrlArr = MApp(2.2).url.parseUrl(redirectUrl);
    var targetUrlQueryArr = MApp(2.2).url.parseQuery(redirectUrl);
    if (currentUrlQuery) {
        redirectUrl = 'http://' + targetUrlArr[0] + targetUrlArr[1];
        redirectUrl += '?' + currentUrlQuery;
        if (targetUrlQueryArr[0]) redirectUrl += '&' + targetUrlQueryArr[0];
        if (targetUrlQueryArr[1]) redirectUrl += '#' + targetUrlQueryArr[1];
    }
    window.location = redirectUrl;
}

/**
 * Created by songsw on 2017/7/18.
 */
var checkLanguage=MApp(2.2).language.langArr;
var timezone=MApp(2.2).datetime.getTimeZone();
if((checkLanguage[0]=='es')&&((timezone=='3')||(checkLanguage[1]=='ar'))){
    var filePath=((MApp(2.2).url.getFilePath()).replace(/.html/, '.php')).replace(/index.php/, '');
    var redirectUrl='';
    switch(filePath){
        case '/en/asc/':
            redirectUrl='http://purchase.iobit.com/es-ar/asc/index.php';
            break;
        case '/en/db/':
            redirectUrl='http://purchase.iobit.com/es-ar/db/index.php';
            break;
        case '/en/ascu/':
            redirectUrl='http://purchase.iobit.com/es-ar/ascu/index.php';
            break;
        case '/en/sd/':
            redirectUrl='http://purchase.iobit.com/es-ar/sd/index.php';
            break;
        case '/en/iu/':
            redirectUrl='http://purchase.iobit.com/es-ar/iu/index.php';
            break;
        default:
            redirectUrl='';
            break;
    }
    if(redirectUrl.length>0){
        var currentUrlQuery = MApp(2.2).url.getQuery();
        var targetUrlArr = MApp(2.2).url.parseUrl(redirectUrl);
        var targetUrlQueryArr = MApp(2.2).url.parseQuery(redirectUrl);
        if (currentUrlQuery) {
            redirectUrl = 'http://' + targetUrlArr[0] + targetUrlArr[1];
            redirectUrl += '?' + currentUrlQuery;
            if (targetUrlQueryArr[0]) redirectUrl += '&' + targetUrlQueryArr[0];
            if (targetUrlQueryArr[1]) redirectUrl += '#' + targetUrlQueryArr[1];
        }
        window.location=redirectUrl;
    }
}
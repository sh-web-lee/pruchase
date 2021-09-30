/**
 * Created by songsw on 2017/7/18.
 */
var checkLanguage=MApp(2.2).language.langArr;
var timezone=MApp(2.2).datetime.getTimeZone();
var redirectStr='';
if((checkLanguage[0]=='es')&&((timezone=='3')||(checkLanguage[1]=='ar'))) {
    redirectStr='es-ar';
}else if((checkLanguage[0]=='es')&&(checkLanguage[1]=='mx')){
    redirectStr='es-mx';
}
if(redirectStr.length>0){
    var filePath=((MApp(2.2).url.getFilePath()).replace(/.html/, '.php')).replace(/index.php/, '');
    var redirectUrl='';
    switch(filePath){
        case '/en/asc/':
            redirectUrl='http://purchase.iobit.com/'+redirectStr+'/asc/index.php';
            break;
        case '/en/db/':
            redirectUrl='http://purchase.iobit.com/'+redirectStr+'/db/index.php';
            break;
        case '/en/ascu/':
            redirectUrl='http://purchase.iobit.com/'+redirectStr+'/ascu/index.php';
            break;
        case '/en/sd/':
            redirectUrl='http://purchase.iobit.com/'+redirectStr+'/sd/index.php';
            break;
        case '/en/iu/':
            redirectUrl='http://purchase.iobit.com/'+redirectStr+'/iu/index.php';
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
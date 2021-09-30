### 站点介绍
    purchase.iobit.com是IObit相关销售活动的着陆页，承担着从软件/parenter广告到最终购物车的中转任务，是目前更新和维护的重点。
******
### 站点结构
`
    root|---- 201*                  (各年度活动着陆页)
        |-----asc                   (asc各语言活动着陆页)
        |-----db                    (db各活动着陆页)
        |-----imf                   (imf各活动着陆页)
        |-----aff                   (Affiliate各活动着陆页)
        |-----***trial              (试用版软件着陆页)
        |-----producname            (旧版产品活动着陆页，已停止维护)
        |-----***-ac-register       (各产品actioncenter购买着陆页)
        |-----en                    (英文版各活动页入口)
              |----asc              (asc各活动入口，对应201*下产品目录)
              |----ascu             (ascu各活动入口，对应201*下产品目录)
              |----db               (db各活动入口，对应201*下产品目录)
              |----imf              (imf各活动入口，对应201*下产品目录)
        |-----de(es/fr/it...)       (小语种各活动页入口，子目录参考en)
        |-----tpl                   (站点共用文件)
        |-----demo.php              (共用模版)
        |-----error-document.php    (转向页)
        |-----index.php             (转向页)
        |-----thankyou.php          (转向页)
        |-----.htaccess             (转向页)
`
******
### 活动页添加流程
     1. 参照需求邮件内容创建或修改入口文件。
     2. 参照demo.php创建活动页，添加必要的功能代码。
     3. 按照设计定稿内容，参照前端规范完成页面。
        注意：如在php环境中进行调试，所有路径必须按PHP定义的内容替换。
     4. 调试完成后提交至git。
     5. 按CD-WEB组 工作流程 完成后续工作
`
注：
CDN上的JS文件
1、GSAP:                     http://codes.iobit.com/js/TweenMax.min.js
2、JQuery 1.9.1:            http://codes.iobit.com/js/jquery/jquery-1.9.1.min.js
2、JQuery 1.11.3:          http://codes.iobit.com/js/jquery/jquery-1.11.3.min.js
3、velocity:                   http://codes.iobit.com/js/velocity.min.js
4、velocity UI:              http://codes.iobit.com/js/velocity.ui.min.js
5、blast:                      http://codes.iobit.com/js/jquery.blast.min.js
为避免浏览器缓存，本地的静态文件（如图片，JS，CSS文件）可这样加载（仅参照文件地址）：
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
`

******
### 公用函数及说明：
    为避免整包引用造成的加载延迟问题，各活动页中所用到的功能函数根据实际情况单独插入代码或以文件方式引入

#### <strong>goTarget(target)</strong>
    用以实现页面的平滑卷动，替代锚点的生硬定位
```javascript
function goTarget(target) {
  var Theigth = target.offset().top;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}
```
#### <strong>showFloat(subject,target)</strong>
    用以实现页面滚动到一定条件时显示隐藏的浮动层
`参数
*subject,条件元素；
*target，浮动层目标；`


具体应用时可根据实际情况更改参数及样式名
<strong>注意：</strong>showFloat需要配合滚动条件使用
<br>
```javascript
function showFloat(subject,target){
  var scrollHeight = subject.height();
  if ($(window).scrollTop() > scrollHeight) {
    target.addClass('on');
  } else {
    target.removeClass('on');
  }
}
```

#### <strong>cycleCountdown()</strong>
    用以实现循环倒计时

```javascript
function cycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');  // 获取截至时间的时间戳,如小于当前时间，则以当前时间推演
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4); // 设置循环天数
  d = MApp(2.2).packages.zeroize(datetime[0], 2); // 获得到截至时间的天数
  h = MApp(2.2).packages.zeroize(datetime[1], 2); // 获得到截至时间的小时数，24时制，返回值不大于23
  i = MApp(2.2).packages.zeroize(datetime[2], 2); // 获得到截至时间的分钟数，返回值不大于59
  s = MApp(2.2).packages.zeroize(datetime[3], 2); // 获得到截至时间的秒数，返回值不大于59
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,2); // 获得到截至时间的毫秒数，返回值不大于999
  $(target).html()  //设置输出,根据情况选择输出以上获取内容，JS或者JQuery方式
  setTimeout('cycleCountdown()', 1);
}

cycleCountdown(); //调用
```

#### <strong>getPacksNum()</strong>
    用以获取更新剩余礼品数

```javascript
function getPacksNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",//请求地址
      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>r="+Math.random(),//参数action为请求动作；参数packsCount为代码内声明的PHP变量，即剩余礼品数变化范围
      success: function(packs){
        $('.packsNum').html(packs);//改变类为packsNum的元素（剩余礼品数）的内容
        setTimeout('getPacksNum()', 10000);
      }
    });
  }
  setTimeout('getPacksNum()', 10000);//调用
```

#### <strong>getBuyNum()</strong>
    用以获取更新已购买人数

```javascript
function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>r="+Math.random(),//参数action为请求动作；参数reduceNum为代码内声明的PHP变量
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 20000);
      }
    });
  }
  setTimeout('getBuyNum()', 20000);
```
******
#### <strong>userMouseover</strong>
    用以实现用户评论切换

```javascript
$.fn.userMouseover = function (UserMessage) {
   $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
   });
};
调用
$(".users li").userMouseover($(".content dl"));  
```
<a href="http://192.168.6.245/purchase.rs.iobit.com/demo/user.html" target="_blank">实例</a>
******

#### <strong>changeActive</strong>
    用以实现pc之间的切换

```javascript
$.fn.changeActive = function(clickName,buybtn,fun) {
  $(this).on(clickName,function() {
   var num = $(this).index();
   $(this).addClass("active").siblings().removeClass("active");
   buybtn.attr("href",$(this).attr("data-url"));
   $(".price").html($(this).attr("data-price"));
   $(".original").html($(this).attr("data-original"));
   fun(num);
 });
};

调用
$(".center-banner dd").changeActive("click",$(".buybtn"), function(){});

$(".center-banner dd").changeActive("mouseover",$(".buybtn"), function(){});

拓展使用
$(".clickactive li").changeActive("click",$(".buybtn"), function(num){
  if (num==0) {
    alert(0)
  }
  else if(num==1) {
    alert(1)
  }
  else {
    alert(2);
  }
});
```
<a href="http://192.168.6.245/purchase.rs.iobit.com/demo/click.html" target="_blank">实例1</a>
<a href="http://192.168.6.245/purchase.rs.iobit.com/demo/mouseover.html" target="_blank">实例2</a>
<a href="http://192.168.6.245/purchase.rs.iobit.com/demo/click02.html" target="_blank">实例3</a>
******

#### <strong>scrollWindow</strong>
    用以实现屏幕滚动到一定条件时显示隐藏的浮动层

```javascript
$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};
调用
$(window).scrollWindow($(".header .buybtn"),$('.floatlayer'),("on"));
```
<a href="http://192.168.6.245/purchase.rs.iobit.com/demo/scroll.html" target="_blank">实例</a>
******


#### <strong>target</strong>
    用以实现页面的平滑卷动，替代锚点的生硬定位

```javascript
$.fn.target=function (target) {
  $(this).click(function() { 
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
}
调用
$(".intro a").target($("#compare"));
```
<a href="http://192.168.6.245/purchase.rs.iobit.com/demo/target.html" target="_blank">实例</a>
******


#### <strong>countdown</strong>
    用以实现循环倒计时

```javascript
var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}
调用
 countdown((".countdown strong"));
```
<a href="http://192.168.6.245/purchase.rs.iobit.com/demo/countdown.html" target="_blank">实例</a>
******

#### <strong>isOnScreen</strong>
    用以实现判断屏幕是否滚动到了某一个特定的地方

```javascript
(function ($) {
  $.fn.isOnScreen = function(x, y){
    if(x == null || typeof x == 'undefined') x = 1;
    if(y == null || typeof y == 'undefined') y = 1;
    var win = $(window);
    var viewport = {
      top : win.scrollTop(),
      left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var height = this.outerHeight();
    var width = this.outerWidth();
    if(!width || !height){
      return false;
    }
    var bounds = this.offset();
    bounds.right = bounds.left + width;
    bounds.bottom = bounds.top + height;
    var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    if(!visible){
      return false;
    }
    var deltas = {
      top : Math.min( 1, ( bounds.bottom - viewport.top ) / height),
      bottom : Math.min(1, ( viewport.bottom - bounds.top ) / height),
      left : Math.min(1, ( bounds.right - viewport.left ) / width),
      right : Math.min(1, ( viewport.right - bounds.left ) / width)
    };
    return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;

  };
})(jQuery);
调用
$('.center-banner').isOnScreen();
```
<a href="http://192.168.6.245/purchase.rs.iobit.com/demo/isonscreen.html" target="_blank">实例</a>
******


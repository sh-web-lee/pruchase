<!-- 使用时根据情况删除额外代码及注释，页面内容禁止出现中文注释 -->
<!-- 由于本地服务器使用PHP调试，故提交的代码需要加上相应的头文件，以便正确读取相关公用文件及属性 -->
<?php
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; //定义当前页资源文件路径
    $pRootUrl = './'; //定义当前页相对根目录路径
  }
  include $pRootUrl.'include/common.inc.php';
  
  
  // 以下给定的PHP内容，能理解的，在页面有需要的地方调用；不能理解的，交由程序组完成。

  //指定ref参数 以下两种模式根据情况选其一
  if (empty($_GET['ref'])) $_GET['ref'] = ''; //指定ref参数 可覆盖
  //$_GET['ref'] = ''; //指定ref参数 不可覆盖

  //创建浮点计算，取 购买人数 及 剩余礼品数，根据情况选择使用
  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  
  // 已购买人数
  // 需要精确到某个值时，先输出 ceil(microtime_float()*1000/20000) 再 由此结果计算需要减去的量
  $reduceNum=69041325;
  $buyNum = ceil(microtime_float()*1000/20000) - $reduceNum;
  
  // 剩余礼品数
  $packsNum = ceil(microtime_float()*2000/20000);
  //礼品数最大值
  $packsCount=360;
  $packsNum = $packsCount-($packsNum%$packsCount);
  if ($_GET['action'] == 'getPacks'){
      echo $packsNum;
      exit;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- 这里放Google AB测试代码，可选 -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Title</title>
<meta name="Copyright" content="IObit">
<!-- favicon.ico,必须！ -->
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<!-- 引用谷歌font,根据设计给定的字体引用！ -->
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
<!-- 引用当前页私有样式,保存在本地的静态文件如css,js及图片文件等都可以用该方法调用，防止浏览器缓存 -->
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<!-- 引用站群共用功能性JS,必须！-->
<?php echo $gJavascript['public'];?>
<!-- 这里放该页私有JS代码，可选 -->
<!-- 引用站点谷歌统计代码,必须！-->
<?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- 这里放页面内容 -->

<script>
  // 这里放置页面内需要使用的JS
  <!--  这里用于获取更新剩余礼品数，可选-->
  function getPacksNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&r="+Math.random(),
      success: function(packs){
        $('.packsNum').html(packs);
        setTimeout('getPacksNum()', 10000);
      }
    });
  }
  setTimeout('getPacksNum()', 10000);

  <!--  这里用于获取更新已购买人数，可选-->
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 20000);
      }
    });
  }
  setTimeout('getBuyNum()', 20000);

</script>
<!-- 如需要使用google翻译，引用下面一段，否则删除 -->
<?php echo $gJavascript['foot']; ?>
</body>
</html>
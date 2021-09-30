  <?php
  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }

  if(!empty($_GET['reduceNum'])&&intval($_GET['reduceNum'])){
    $reduceNum=intval($_GET['reduceNum']);
  }else{
    $reduceNum=69041325;
  }
  $buyNumReTime=empty($_GET['reTime'])?20:($_GET['reTime']);
  $packsNumReTime=empty($_GET['reTime'])?10:($_GET['reTime']);
  $sepStr=empty($_GET['sepStr'])?',':$_GET['sepStr'];
  $buyNum = ceil(microtime_float()*1000/(1000*$buyNumReTime))-$reduceNum;
  $buyNum = number_format($buyNum,0,'',$sepStr);
  $packsNum = ceil(microtime_float()*1000/(1000*$packsNumReTime));
  if(empty($packsCount)) {
    if (!empty($_GET['packsCount']) && intval($_GET['packsCount'])) {
      $packsCount = intval($_GET['packsCount']);
    } else {
      $packsCount = 360;
    }
  }
  $packsNum = $packsCount-($packsNum%$packsCount);
  //获取剩余礼品数
  if ($_GET['action'] == 'getPacksNum'){
    echo $packsNum;
    exit();
  }
  //获取购买量
  if($_GET['action']=='getBuyNum'){
    echo $buyNum;
    exit();
  }
  ?>
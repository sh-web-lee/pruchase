$(document).ready(function() {
	$(".users li").mouseover(function(event) {
		var num = $(this).index();
		$(".users li").eq(num).addClass('current').siblings().removeClass('current');
		$(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
	});
});
function flipNum(num, length,pos) {
	var num = PrefixInteger(num, length)
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .countdown:eq("+pos+") .scroll-tick").html(list);
	for (var i = 0; i <= len; i++) {
		var curNum = str.substring(i, i + 1);
		if(pos==3){
			$(".banner .countdown:eq("+pos+") .scroll-tick").eq(i).html(curNum);
		}else {
			$(".banner .countdown:eq(" + pos + ") .scroll-tick").eq(i).animate({
				marginTop: -curNum * 32,
			}, "slow");
		}
	}
}
function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function getCycleCountdown () {
	var startTimestamp = MApp(2.2).datetime.getTimestamp(startTime);
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 3);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
	$(".activate p span span").eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
	if(countTimeStr!=d+h+i){
		flipNum(d,2,0);
		flipNum(h,2,1);
		flipNum(i,2,2);
		countTimeStr=d+h+i;
	}
	flipNum(mi,3,3);
	setTimeout("getCycleCountdown()", 1);
}

function timeInit(){
	var cName = "endbsp";
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if(arr==null){
		startTime=getStartTime();
		cSet(cName,startTime);
	}else{
		startTime=arr[2];
	}
	countTimeStr='';
}

function cSet(cName,cVal){
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days*24*60*60*1000);
	document.cookie = cName + "="+ cVal + ";expires=" + exp.toGMTString();
}

function getStartTime() {
	var date = new Date();
	var seperator1 = "-";
	var seperator2 = ":";
	var month = date.getMonth() + 1;
	var strDate = date.getDate();
	if (month >= 1 && month <= 9) {
		month = "0" + month;
	}
	if (strDate >= 0 && strDate <= 9) {
		strDate = "0" + strDate;
	}
	var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
			+ " 00:00:00"
	return currentdate;
}
timeInit();
flipNum("350");
getCycleCountdown ();
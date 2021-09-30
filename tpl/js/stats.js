//// JavaScript Document
//// Statistics APP st
//var product = MApp(2.2).url.getParameters('product');
//var ref = MApp(2.2).url.getParameters('ref');
//var st = MApp(2.2).url.getParameters('st');
//
//// Statistics ASC5\6\7 ST Purchase view and click
//if (st && st != ''){
//	if (product == 'asc5'){
//		document.write('<img src="http://ascstats.iobit.com/sales/asc_v5_st/index.php?action=insert&st='+st+'" height="0" width="0" />');
//	} else if(product == 'asc6') {
//		document.write('<img src="http://ascstats.iobit.com/sales/asc_v6_st/index.php?action=insert&st='+st+'" height="0" width="0" />');
//	} else if(product == 'asc7') {
//		document.write('<img src="http://ascstats.iobit.com/sales/asc_v7_st/index.php?action=insert&st='+st+'" height="0" width="0" />');
//	} else if(ref == 'db1') {
//		document.write('<img src="http://ascstats.iobit.com/sales/db_v1_st/index.php?action=insert&st='+st+'" height="0" width="0" />');
//	} else if(ref == 'db2') {
//        document.write('<img src="http://ascstats.iobit.com/sales/db_v2_st/index.php?action=insert&st='+st+'" height="0" width="0" />');
//    } else if(ref == 'db3') {
//        document.write('<img src="http://ascstats.iobit.com/sales/db_v3_st/index.php?action=insert&st='+st+'" height="0" width="0" />');
//    }
//}
//
//// Statistics ASC6 STT Purchase view and click
//var stt = MApp(2.2).url.getParameters('stt');
//if (stt && stt != '') {
//	if (ref == 'asc6t'){
//		document.write('<img src="http://ascstats.iobit.com/sales/asc6_free_stt/index.php?action=insert&stt='+stt+'" height="0" width="0" />');
//	} else if(ref == 'asc6trial303t' || ref == 'asc6trial302t' || ref == 'asc6trial301t') {
//		document.write('<img src="http://ascstats.iobit.com/sales/asc6_trial_stt/index.php?action=insert&stt='+stt+'" height="0" width="0" />');
//	}
//}
//
//// Statistics ASC7 Purchase view and click
//if (product == 'asc7'){
//	var buy = MApp(2.2).url.getParameters('buy');
//	var showA = MApp(2.2).url.getParameters('showA');
//	var showB = MApp(2.2).url.getParameters('showB');
//	if (buy && showA && showB) {
//		if (buy == 'a'){
//			document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=79&pid=33" height="0" width="0" />');
//		} else if(buy == 'b') {
//			document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=80&pid=33" height="0" width="0" />');
//		}
//		// showA
//		if (showA > 0) document.write('<img src="http://ascstats.iobit.com/universal_many.php?action=insert&id=77&pid=33&num='+showA+'" height="0" width="0" />');
//		// showB
//		if (showB > 0) document.write('<img src="http://ascstats.iobit.com/universal_many.php?action=insert&id=78&pid=33&num='+showB+'" height="0" width="0" />');
//	}
//	/*
//	var RShowAU = MApp(2.2).url.getParameters('RShowAU');
//	var Upgrade = MApp(2.2).url.getParameters('Upgrade');
//	var RActivate = MApp(2.2).url.getParameters('RActivate');
//	if (RShowAU && Upgrade && RActivate) {
//		if (RShowAU == 'A'){
//			document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=121&pid=41" height="0" width="0" />');
//		} else if(RShowAU == 'U') {
//			document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=122&pid=41" height="0" width="0" />');
//		}
//		// RActivate
//		if (RActivate > 0) document.write('<img src="http://ascstats.iobit.com/universal_many.php?action=insert&id=119&pid=41&num='+RActivate+'" height="0" width="0" />');
//		// Upgrade
//		if (Upgrade > 0) document.write('<img src="http://ascstats.iobit.com/universal_many.php?action=insert&id=120&pid=41&num='+Upgrade+'" height="0" width="0" />');
//	}
//	*/
//}
//
//// Statistics DB Purchase view and click
//if (ref == 'db1'){
//	var stats = MApp(2.2).url.getParameters('stats');
//	var buy = MApp(2.2).url.getParameters('buy');
//	var showA = MApp(2.2).url.getParameters('showa');
//	var showB = MApp(2.2).url.getParameters('showb');
//
//	if (stats == '1'){
//		if (buy && showA && showB) {
//			if (buy == 'a'){
//				document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=319&pid=58" height="0" width="0" />');
//			} else if(buy == 'b') {
//				document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=320&pid=58" height="0" width="0" />');
//			} else if(buy == 'c') {
//				document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=321&pid=58" height="0" width="0" />');
//			} else if(buy == 'd') {
//				document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=322&pid=58" height="0" width="0" />');
//			}
//			// showA
//			if (showA > 0) document.write('<img src="http://ascstats.iobit.com/universal_many.php?action=insert&id=317&pid=58&num='+showA+'" height="0" width="0" />');
//			// showB
//			if (showB > 0) document.write('<img src="http://ascstats.iobit.com/universal_many.php?action=insert&id=318&pid=58&num='+showB+'" height="0" width="0" />');
//		}
//	} else if (stats == '2'){
//        if (buy && showA && showB) {
//            if (buy == 'a'){
//                document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=391&pid=58" height="0" width="0" />');
//            } else if(buy == 'b') {
//                document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=392&pid=58" height="0" width="0" />');
//            } else if(buy == 'c') {
//                document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=393&pid=58" height="0" width="0" />');
//            } else if(buy == 'd') {
//                document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=394&pid=58" height="0" width="0" />');
//            }
//            // showA
//            if (showA > 0) document.write('<img src="http://ascstats.iobit.com/universal_many.php?action=insert&id=389&pid=58&num='+showA+'" height="0" width="0" />');
//            // showB
//            if (showB > 0) document.write('<img src="http://ascstats.iobit.com/universal_many.php?action=insert&id=390&pid=58&num='+showB+'" height="0" width="0" />');
//        }
//    } else {
//		if (buy && showA && showB) {
//			if (buy == 'a'){
//				document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=125&pid=42" height="0" width="0" />');
//			} else if(buy == 'b') {
//				document.write('<img src="http://ascstats.iobit.com/universal.php?action=insert&id=126&pid=42" height="0" width="0" />');
//			}
//			// showA
//			if (showA > 0) document.write('<img src="http://ascstats.iobit.com/universal_many.php?action=insert&id=123&pid=42&num='+showA+'" height="0" width="0" />');
//			// showB
//			if (showB > 0) document.write('<img src="http://ascstats.iobit.com/universal_many.php?action=insert&id=124&pid=42&num='+showB+'" height="0" width="0" />');
//		}
//	}
//}

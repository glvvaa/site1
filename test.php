<?php


//$arr = array("апельсин", "банан");
//$arr [2] = 'ку';
//$arr [3] = 'прикол';
//
//print_r($arr);



//$arr1 = ['first','second'];
//$arr2 = [3,4];
//
//
//$arr1 [2] = $arr2 [0];
//$arr1 [3] = $arr2 [1];
//
//print_r($arr1);


//$arr = ['first','second','third'];
//
//$len = count($arr);
//
//echo $arr [$len-1];
//
//$arr [$len-1]  =  $arr [$len-1] . 'third ' . ' кукуку';
//
//print_r($arr);


//$arr = ['first','second','third'];
//
//unset($arr [0]);
//
//print_r($arr);





//$arr = [1, 5, 3, 3, 7, 3, 1];
//$res = [];
//foreach ($arr as $i){
//    if (isset($res[$i])){
//        $res[$i] += 1;
//    }else{
//        $res[$i] = 1;
//    }
//}
//$p = [];
//foreach ($res as $re => $item){
//    if ($item == 1){
//        $p[] = $re;
//    }
//}
//print_r($p);


//
//$arr = [1,6,4];
//
//foreach ($arr as $key => $i){
//    if ($i == '7') {
//        echo 'все круто';
//        die ();
//    }
//    echo '-';
//    }




//$arr = [2,7,5,10,5];
//foreach ($arr as $key => $i){
//    for ($j = $key; $j < count($arr) - 1 ; $j++ ){
//        if ($arr[$j] == 5){
//            echo $key;
//        }
//        if ($j == 2){
//            echo $i;
//        }
//    }
//}



//$arr = [
//    [11, 12, 13, 14, 15],
//    [21, 22, 23, 24, 25],
//    [31, 32, 33, 34, 35],
//    [41, 42, 43, 44, 45],
//    [51, 52, 53, 54, 55],
//];
//
//foreach ($arr as $key => $i){
//    for ($j = 0; $j < $key; $j++){
//        $arr[$key][$j] = 0;
//    }
//}



//$arr = [1, 2, 3, 4, 5, 6];
//$num = 3;
//
//while(count($arr) < $num*$num){
//    $arr[] = null;
//}
//
//print_r($arr);



//$arr=[
//    [11, 12, 13, 14, 15],
//    [21, 22, 23, 24, 25],
//    [31, 32, 33, 34, 35],
//    [41, 42, 43, 44, 45],
//    [51, 52, 53, 54, 55],
//];
//
//foreach ($arr as $key => $i){
//
//
//    echo $i[ count($i) - 1 - $key];
//}



//

//
//$arr=[
//    [11, 12, 13],
//    [21, 22, 23],
//    [31, 32, 33],
//];
//
//foreach ($arr as $key => $i){
//   $arr [$key][count($i)] = 1;
//}
//$q = count($arr) +1;
//for ($j = 0; $j < $q; $j++){
//    $arr [$q-1][$j] = 1;
//}
//
//
//print_r($arr);



//$arr1 = [1, 2, 3];
//$arr2 = [4, 5, 6];
//
//$arr1[3] = $arr2[0];
//$arr1[4] = $arr2[1];
//$arr1[5] = $arr2[2];
//
//print_r($arr1);



//$arr1 = [1, 2, 3];
//$arr2 = ['a', 'b', 'c'];
//
//$arr1[2] = $arr2[0];
//$arr1[3] = $arr2[1];
//$arr1[4] = $arr2[2];
//$arr1[5] = 3;
//print_r($arr1);



//$arr = [1, 2, 3, 4, 5, 6];
//
//$j = 0;
//foreach ($arr as $key => $i){
//    if ($key < 3){
//        $j = $j + $i;
//    }
//    else break;
//}
//
//echo $j;




//$arr = [
//    [11, 12, 13, 14, 15],
//    [21, 22, 23, 24, 25],
//    [31, 32, 33, 34, 35],
//    [41, 42, 43, 44, 45],
//    [51, 52, 53, 54, 55],
//];
//
//foreach ($arr as $key => $i){
//    print_r($arr[$key][2]);
//
//}


//$arr = [
//    [11, 32, 13, 44, 55],
//    [31, 42, 53, 66, 75],
//    [12, 26, 33, 45, 52],
//    [15, 22, 35, 64, 57],
//    [21, 52, 32, 44, 38],
//];
//
//$j = $arr[0][0];
//
//      $arr[0][0] = $arr[1][4];
//
//      $arr[1][4]= $j;
//
//
//print_r($arr);












//$arr = [
//    [11, 12, 13, 14, 15],
//    [21, 22, 23, 24, 25],
//    [31, 32, 33, 34, 35],
//    [41, 42, 43, 44, 45],
//    [51, 52, 53, 54, 55],
//];
//
//foreach ($arr as $key => $i) {
//    echo $i[$key];
//}






$arr = [
    [11, 12, 13, 14, 15],
    [21, 22, 23, 24, 25],
    [31, 32, 33, 34, 35],
    [41, 42, 43, 44, 45],
    [51, 52, 53, 54, 55],
];
 foreach ($arr as $key => $i){
 $arr[$key][2] = 0;

 }
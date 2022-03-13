<?php

// $example = [1,5,6,2,9,12,15,17,16,20,32];
// $length = count($example);
// $dummy = 0;
// // indexing
// for($i = 0; $i < $length; $i++ ){
    
//     // this loop is for swapping 
//     for($j = 0; $j < $length-1; $j++){
//         if($example[$j]>$example[$j+1]){
//             $dummy = $example[$j];
//             $example[$j] = $example[$j+1];
//             $example[$j+1] = $dummy;
//         }
//     }
// }

// print_r($example[1]);

$n = 3;
$arr = [1,2,3,4,5];
$arr_count = 5;

$new_arr2 =[];

for($y = $n;$y<$arr_count;$y++){
    $new_arr2[] = $arr[$y];
}
for($i = $n ; $i > 0; $i--){
    $new_arr2[] = $arr[$i-1];
}
print_r($new_arr2);

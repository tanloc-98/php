<?php
$input = '60';
$strID = "78, 60,62,69,69,68,73,85,60 ,69,65,74,63,67 ,65,64,68,73,75,69,73,169";

// Input: Chuỗi lưu trữ ID của các Developer bị trễ task
// Requirement: Tìm xem Developer có ID 69 bị trễ task bao nhiêu lần
// Output: 3

$str_arr = explode(",",$strID);
$new_array = [];
foreach($str_arr as $key => $values){
    if(intval($values) == intval($input) ){
        $new_array[$key] = $values;
    }
}
echo '<pre>';
print_r($new_array);
echo '</pre>';

print_r(array_count_values($new_array));
<?php
$zend = array(
    'php' => 127,
    'zend' => 127,
    'html' => 32,
    'type' => 12,
    'javascript' => 80
);

// Input: Danh sách khóa học
// Requirement: In ra khóa học có thời lượng video nhiều nhất
// Output: Tên khóa học - thời lượng
//                  php - 127

$maxValue = max(array_values($zend));
foreach($zend as $key => $value){
    if($value === $maxValue){
        echo $key. ' - '. $value .'<br>';
    }
}

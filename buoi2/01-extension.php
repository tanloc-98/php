<?php
    $input  = "D:/GoogleDrive/Doing/__psd/luutruonghailan/youtube-luutruonghailan-tamsu.psd";

    // Phần xử lý của học viên
    
    $output = [
        'name', 'extension'
    ];

    $str_arr = explode("/", $input);

    $str_arr1 = explode(".", $str_arr[5]);

    $output = [
        'name' =>  $str_arr1[0]
        , 'extension' =>  $str_arr1[1]
    ];

    echo '<pre>';
    print_r($output);
    echo '</pre>';
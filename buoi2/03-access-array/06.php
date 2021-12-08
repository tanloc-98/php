<?php
    $arrMenu = [
        'index' => [
            "name"  => "Home",   "link"  => "index.php"
        ],
        'about' => [
            "name"  => "About",  
            "link"  => "data/about.php", 
            "child" => [
                'service'   => [ 
                    "name"  => "Service", 
                    "link"  => "service.php",
                    "child" => [
                        'sale'      => ["name" => "Sale", "link" => "sale.php"],
                        'training'  => ["name" => "Training", "link" => "training.php"]
                    ]
                ], 
                'company'   => [
                    "name" => "Company", 
                    "link" => "company.php",
                    "child" => [
                        'toyota' => ["name" => "Toyota","link"   => "toyota.php"]
                    ]]
        ]],
        'contact' => ["name" => "Contact", "link" => "contact.php"]
    ];

    // Yêu cầu: In ra tên của các menu cấp 3
    // Output: Sale - Training - Toyota

    $printMenu = '';

    foreach($arrMenu as $key => $menuLevel1){
        if(array_key_exists('child', $menuLevel1)){
            foreach($menuLevel1['child'] as $key => $menuLevel2){
                if(array_key_exists('child', $menuLevel2)){
                    foreach($menuLevel2['child'] as $key => $menuLevel3){
                        $printMenu .= $menuLevel3['name'] . ' - ';
                    }
                }
            }
        };
    };

    echo substr($printMenu, 0, -3);
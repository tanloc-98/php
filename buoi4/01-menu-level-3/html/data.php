<?php
    $arrMenu = [
        'index' => [
            "name"  => "Home",   "link"  => "index.php"
        ],
        'about' => [
            "name"  => "About",  
            "link"  => "about.php", 
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
    $currentMenu = basename($_SERVER['PHP_SELF'], ".php");

    $arrayBreadcrumb = [];
    foreach($arrMenu as $key1 => $menu1){
        $arrayBreadcrumb[$key1][] = ['name' => $menu1['name'], 'link' => $menu1['link']];
        if(isset($menu1['child'])){
            foreach($menu1['child'] as $key2 => $menu2){
                $arrayBreadcrumb[$key2][] = ['name' => $menu1['name'], 'link' => $menu1['link']];
                $arrayBreadcrumb[$key2][] = ['name' => $menu2['name'], 'link' => $menu2['link']];
                if(isset($menu2['child'])){
                    foreach($menu2['child'] as $key3 => $menu3){
                        $arrayBreadcrumb[$key3][] = ['name' => $menu1['name'], 'link' => $menu1['link']];
                        $arrayBreadcrumb[$key3][] = ['name' => $menu2['name'], 'link' => $menu2['link']];
                        $arrayBreadcrumb[$key3][] = ['name' => $menu3['name'], 'link' => $menu3['link']];
                    }
                }
            }
        }
    }
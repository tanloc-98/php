<?php require_once 'data.php'?>
<?php 
    $xhtmlBreadcrumb = '';
    $currentBreadcrumb = $arrayBreadcrumb[$currentMenu];
    $lengthBreadcrumb = count($currentBreadcrumb);
    if($currentMenu == 'index'){
        $xhtmlBreadcrumb = '<span>Home</span>';
    }else{
        $xhtmlBreadcrumb = sprintf('<a href="index.php">Home</a><span> > </span><span>%s</span>', ucfirst($currentMenu));
        if($lengthBreadcrumb >= 2){
            $xhtmlBreadcrumb = '<a href="index.php">Home</a><span> > </span>';
            for($i = 0 ; $i < $lengthBreadcrumb - 1; $i++){
                $xhtmlBreadcrumb .= sprintf('<a href="%s">%s</a><span> > </span>', $currentBreadcrumb[$i]['link'],$currentBreadcrumb[$i]['name']);
            }
            $xhtmlBreadcrumb .= sprintf('<span>%s</span>',ucfirst($currentMenu));
        }
    }
?>

<div class="breadcrumb">
    <?= $xhtmlBreadcrumb ?>
</div>
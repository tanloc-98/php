<?php require_once 'data.php' ?>
<?php 
    $xhtml = '';
    foreach($arrMenu as $key1 => $menuLevel1){
        $classActive = ($key1 == $currentMenu) ? 'class="active"' : '';
        if(isset($menuLevel1['child'])){
            foreach ($menuLevel1['child'] as $key2 => $menuLevel2) {
                if($key2 == $currentMenu) $classActive =  'class="active"';
                foreach ($menuLevel2['child'] as $key3 => $menuLevel3) {
                    if($key3 == $currentMenu) $classActive =  'class="active"';
                }
            }
            $xhtml .= sprintf('<li %s><a href="%s">%s </a><ul>',$classActive, $menuLevel1['link'], $menuLevel1['name']);
            foreach ($menuLevel1['child'] as $key2 => $menuLevel2) { 
                if(isset($menuLevel2['child'])){
                    $classActive2 = ($key2 == $currentMenu) ? 'class="active"' : '';
                    foreach ($menuLevel2['child'] as $key3 => $menuLevel3) {
                        if($key3 == $currentMenu) $classActive2 =  'class="active"';
                    }
                    $xhtml .= sprintf('<li %s><a href="%s">%s </a><ul>',$classActive2, $menuLevel2['link'], $menuLevel2['name']);
                    foreach ($menuLevel2['child'] as $key3 => $menuLevel3) {
                        $classActive3 = ($key3 == $currentMenu) ? 'class="active"' : '';
                        $xhtml .= sprintf('<li %s><a href="%s">%s </a></li>',$classActive3, $menuLevel3['link'], $menuLevel3['name']);
                    }   
                    $xhtml .= '</ul></li>';
                }else{
                    $xhtml .= sprintf('<li %s><a href="%s">%s </a></li>',$classActive2, $menuLevel2['link'], $menuLevel2['name']);
                }
            }
            $xhtml .= '</ul></li>';
        }else{
            $xhtml .= sprintf(' <li %s><a href="%s">%s </a></li>',$classActive, $menuLevel1['link'], $menuLevel1['name']);
        }
    }
?>

<div class="menuBackground">
    <div class="center">
        <ul class="dropDownMenu">
            <?php echo $xhtml; ?>
        </ul>
    </div>
</div>
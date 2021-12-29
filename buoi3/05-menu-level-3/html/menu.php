<?php require_once 'data.php' ?>
<?php 
    $xhtml = '';
    foreach($arrMenu as $key1 => $menuLevel1){
        $classActive = ($key1 == $currentMenu) ? 'class="active"' : '';
        if(isset($menuLevel1['child'])){
            $xhtml .= sprintf('<li %s><a href="%s">%s </a><ul>',$classActive, $menuLevel1['link'], $menuLevel1['name']);
            foreach ($menuLevel1['child'] as $key2 => $menuLevel2) {
                $classActive = ($key2 == $currentMenu) ? 'class="active"' : ''; 
                if(isset($menuLevel2['child'])){
                    $xhtml .= sprintf('<li %s><a href="%s">%s </a><ul>',$classActive, $menuLevel2['link'], $menuLevel2['name']);
                    foreach ($menuLevel2['child'] as $key3 => $menuLevel3) {
                        $classActive = ($key3 == $currentMenu) ? 'class="active"' : ''; 
                        $xhtml .= sprintf('<li %s><a href="%s">%s </a></li>',$classActive, $menuLevel3['link'], $menuLevel3['name']);
                    }   
                    $xhtml .= '</ul></li>';
                }else{
                    $xhtml .= sprintf('<li %s><a href="%s">%s </a></li>',$classActive, $menuLevel2['link'], $menuLevel2['name']);
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
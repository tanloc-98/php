<?php
require_once('data.php');

$xhtmlMenu = '';
foreach ($arrMenu as $keyLevelOne => $menuLevelOne) {
    if (isset($menuLevelOne['child'])) {
        
        
        $xhtmlMenu .= sprintf('<li data-name="%s"><a href="%s">%s</a><ul>',$keyLevelOne, $menuLevelOne['link'], $menuLevelOne['name']);

        foreach ($menuLevelOne['child'] as $keyLevelTwo => $menuLevelTwo) {
            $xhtmlMenu .= sprintf('<li data-parent="%s"><a href="%s">%s</a></li>',$keyLevelOne, $menuLevelTwo['link'], $menuLevelTwo['name']);
        }

        $xhtmlMenu .= '</ul></li>';
    } else {
      
        $xhtmlMenu .= sprintf('<li data-name="%s"><a href="%s">%s</a></li>',$keyLevelOne, $menuLevelOne['link'], $menuLevelOne['name']);
    }
    
}
?>

<div class="menuBackground">
    <div class="center">
        <ul class="dropDownMenu">
            <?php echo $xhtmlMenu; ?>
        </ul>
    </div>
</div>
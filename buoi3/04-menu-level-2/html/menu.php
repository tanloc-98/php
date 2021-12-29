<?php require_once 'data.php' ?>
<?php
$xhtml = '';

foreach ($arrMenu as $key1 => $menuLevel1) {
    $classActive = ($key1 == $currentMenu) ? 'class="active"' : '';
    if (isset($menuLevel1['child'])) {
        foreach ($menuLevel1['child'] as $key2 => $menuLevel2) {
            if($key2 == $currentMenu) $classActive = 'class="active"'; 
        };
        $xhtml .= sprintf('<li %s><a href="%s">%s </a><ul>', $classActive, $menuLevel1['link'], $menuLevel1['name']);
        foreach ($menuLevel1['child'] as $key2 => $menuLevel2) {
            $xhtml .= sprintf('<li ><a href="%s">%s </a></li>', $menuLevel2['link'], $menuLevel2['name']);
        }
        $xhtml .= '</ul></li>';
    } else {
        $xhtml .= sprintf(' <li %s><a href="%s">%s </a></li>', $classActive, $menuLevel1['link'], $menuLevel1['name']);
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

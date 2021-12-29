<?php require_once 'data.php' ?>
<?php 
    $xml = '';
    $currentMenu = basename($_SERVER['PHP_SELF'], ".php");
    foreach($arrMenu as $key => $menuLevel1){
        $link = $menuLevel1['link'];
        $name = $menuLevel1['name'];
        $active = ($key === $currentMenu) ? 'active' : '';
        $xml .= '<li class="'.$active.'"><a href="'.$link.'">'.$name.'</a></li>';
        //Sprintf(<li class="%s"><a href="%s">%s</a></li>,$active,$link,$name)'
    }
?>
<div class="menuBackground">
    <div class="center">
    <ul class="dropDownMenu">
        <?php echo $xml ?>
    </ul>
    </div>
</div>
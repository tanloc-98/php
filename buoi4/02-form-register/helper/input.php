<?php 
    function inputHepler($type,$placeholder,$name,$class){
        if($name == 'birthday'){
            return sprintf('<input class="%s" type="%s" placeholder="%s" name="%s"><i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>',$class,$type,$placeholder,$name);
        }else{
            return sprintf('<input class="%s" type="%s" placeholder="%s" name="%s">',$class,$type,$placeholder,$name);
        }
    }
?>
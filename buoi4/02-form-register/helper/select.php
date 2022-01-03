<?php 
    function selectHelper($array,$placeholder,$name){
        $xhtmlOption = sprintf('<option disabled="disabled" selected="selected">%s</option>',$placeholder);
        if(isset($array)){
            foreach($array as $key => $value){
                $xhtmlOption .= sprintf('<option value="%s">%s</option>',$key,$value);
            }
        }
        return sprintf('<select name="%s">%s</select>',$name,$xhtmlOption);
    }
?>
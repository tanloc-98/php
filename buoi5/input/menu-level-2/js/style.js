$(document).ready(function(){
    let currentFile = window.location.pathname.split('/').pop();
    let dataParent = $('a[href="'+ currentFile +'"').parent().attr('data-parent');
    $('ul li').each(function(){
        if(!dataParent){
            $('a[href="'+ currentFile +'"').parent().addClass('active');
        }else{
            if($(this).attr('data-name') == dataParent){
                $(this).addClass('active');
            }
        }
    })
})
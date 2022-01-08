$(document).ready(function(){  
    $(".menuBackground ul li a").each(function(){
        if (this.href === window.location.href) {
            $(this).parent().addClass('active');
        }
    })
})
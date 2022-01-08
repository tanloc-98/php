let currentFile = window.location.pathname.split('/').pop();
let currentA    = $('a[href="'+ currentFile +'"').parent()
let dataName    = currentA.data('name');
let dataParent  = currentA.data('parent');
let dataChild   = currentA.data('child');

$(document).ready(function(){  
    activeMenu(dataName,dataParent,dataChild)
})


function activeMenu(dataName,dataParent,dataChild){
    if(dataName !== undefined) $('a[href="'+ dataName +'.php"').parent().addClass('active');
    if(dataChild !== undefined) $('a[href="'+ dataChild +'.php"').parent().addClass('active');
    if(dataParent !== undefined) $('a[href="'+ dataParent +'.php"').parent().addClass('active');
}
let currentFile = window.location.pathname.split('/').pop();
let currentA    = $('a[href="'+ currentFile +'"').parent()
let dataName    = currentA.data('name');
let dataParent  = currentA.data('parent');
let active = '';

$(document).ready(function(){  
    if(currentFile === '') active = 'index';
    active = (dataName !== undefined) ? dataName : dataParent;
    $('a[href="'+ active +'.php"').parent().addClass('active')
})
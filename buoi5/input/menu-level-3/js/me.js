let currentFile = window.location.pathname.split('/').pop();
let currentA    = $('a[href="'+ currentFile +'"').parent()
let dataName    = currentA.data('name');
let dataParent  = currentA.data('parent');
let dataChild   = currentA.data('child');

$(document).ready(function(){  
    activeMenu(dataName,dataParent,dataChild)
})


function activeMenu(dataName,dataParent,dataChild){
    let active = '';
    if(currentFile === '') active = 'index';
    if(dataName !== undefined) active = dataName;
    if(dataChild !== undefined) active = dataName;
    if(dataParent !== undefined) active = dataName;

    $('a[href="'+ active +'.php"').parent().addClass('active')
}
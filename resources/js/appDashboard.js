require('./bootstrap');
require('admin-lte');

import $ from 'jquery';
window.$ = window.jQuery = $;

$(document).ready(function() {

    if (document.getElementById("memberImg").files.length == 0)
    {
        $('#labelMemberImg').text("Scegli l'immagine");
    }
    else
    {
        $('#labelMemberImg').text(memberImgName);
    }

    $('#memberImg').change(function() {
        var memberImgName = $('#memberImg').val().replace(/C:\\fakepath\\/i, '');
        $('#labelMemberImg').text(memberImgName);
    });
});

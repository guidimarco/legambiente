require('./bootstrap');
require('admin-lte');

import $ from 'jquery';
window.$ = window.jQuery = $;

$(document).ready(function() {

    var memberInput = document.getElementById("memberImg");
    
    if (memberInput && memberInput.files.length == 0)
    {
        $('#labelMemberImg').text("Scegli l'immagine");
    }
    else if (memberInput)
    {
        $('#labelMemberImg').text(memberImgName);
    }

    $('#memberImg').change(function() {
        var memberImgName = $('#memberImg').val().replace(/C:\\fakepath\\/i, '');
        $('#labelMemberImg').text(memberImgName);
    });

    $('#postImgs').change(function() {
        var postImgsName = $('#postImgs').val();
        // .val();
        // .replace(/C:\\fakepath\\/i, '');
        console.log(postImgsName);
        // $('#labelPostImgs').text(postImgsName);
    });
});

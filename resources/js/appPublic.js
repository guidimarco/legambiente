require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

$(document).ready(function() {

    var postsWrapper = document.getElementById("posts-wrapper");
    
    // Posts public-page
    if (postsWrapper)
    {
        $.get('api/get-last-posts',
            {},
        ).done(function(data) {
            console.log(data);
        });
    }

});

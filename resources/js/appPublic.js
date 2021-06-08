require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

const Handlebars = require("handlebars");

$(document).ready(function() {

    var postsWrapper = document.getElementById("posts-wrapper");
    
    // Posts public-page
    if (postsWrapper)
    {
        const postCardTemplateScript = document.getElementById('post-card-template').innerHTML;
        const postCardTemplate = Handlebars.compile(postCardTemplateScript);

        $.get('api/get-last-posts',
            {},
        ).done(function(data) {
            console.log(data);
            let postsArray = data.results;
            postsArray.forEach((element) => {
                let html = postCardTemplate({ title: element.title });

                $('#posts-wrapper').append(html);
            });
        });
    }

});

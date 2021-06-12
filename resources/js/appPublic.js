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

        // get lasts posts
        $.get('api/get-posts',
            {},
        ).done(function(data) {
            console.log(data);
            let postsArray = data.results;

            postsArray.forEach((element) => {
                let date = new Date(element.created_at);
                let authorName = (element.member != null) ? element.member.name + " " + element.member.surname : "";
                let tagsHTML = "";
                let coverImg = (element.imgs.length !== 0) ? "storage/" + element.imgs[0].img : "";
                console.log(coverImg);

                element.tags.forEach((tag) => {
                    tagsHTML += "<span class='primary-badge'>" + tag.name + "</span>";
                });

                let postVariables = {
                    'id': element.id,
                    'tags': tagsHTML,
                    'created_at': date.getDate() + "/" + date.getMonth() + "/" + date.getFullYear(),
                    'title': element.title,
                    'author': authorName,
                    'body': element.body,
                    'slug': element.slug,
                    'cover': coverImg
                };
                let html = postCardTemplate(postVariables);

                $('#posts-wrapper').append(html);
            });

            $('a[id^=post-]').click(function(event) {
                event.preventDefault;
                $(this).addClass('active');
                
            });
        });        
    }
});

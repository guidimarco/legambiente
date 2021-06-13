require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

const Handlebars = require("handlebars");

function remove_hash_from_url() {
    var uri = window.location.toString();

    if (uri.indexOf("#") > 0) {
        var clean_uri = uri.substring(0, uri.indexOf("#"));

        window.history.replaceState({}, document.title, clean_uri);
    }
}


$(document).ready(function() {

    var postsWrapper = document.getElementById("posts-wrapper");
    
    // Posts public-page
    if (postsWrapper)
    {
        const postCardTemplateScript = document.getElementById('post-card-template').innerHTML;
        const postCardTemplate = Handlebars.compile(postCardTemplateScript);

        // get-posts
        $.get('api/get-posts',
            {},
        ).done(function(data) {
            let postsArray = data.results;

            postsArray.forEach((element) => {
                let date = new Date(element.created_at);
                let authorName = (element.member != null) ? element.member.name + " " + element.member.surname : "";
                let tagsHTML = "";
                let coverImg = (element.imgs.length !== 0) ? "storage/" + element.imgs[0].img : "";

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

            $('[id^=post-]').click(function(event) {
                event.preventDefault;
                $(this).addClass('active');
            }).find('.fa-undo-alt').click(function(event) {
                event.preventDefault;
                return false;
            });
        
            $('.fa-undo-alt').click(function(event) {
                event.preventDefault;
                $(this).parent().parent().parent().removeClass('active');
                $(this).parent().parent().parent().removeClass('carousel-visible');
                $(this).next().removeClass('fa-arrow-circle-up').addClass('fa-arrow-circle-down');
                remove_hash_from_url();
            });

            $('.arrow-class').click(function() {
                if ($(this).hasClass('fa-arrow-circle-down'))
                {
                    $(this).removeClass('fa-arrow-circle-down').addClass('fa-arrow-circle-up');
                    $(this).parent().parent().parent().addClass('carousel-visible');
                }
                else
                {
                    $(this).removeClass('fa-arrow-circle-up').addClass('fa-arrow-circle-down');
                    $(this).parent().parent().parent().removeClass('carousel-visible');
                }
            });
        }); // end API get-posts
    }
});
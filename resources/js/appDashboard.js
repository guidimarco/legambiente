require('./bootstrap');
require('admin-lte');
const Swal = require('sweetalert2');


// ES6 Modules or TypeScript
// import Swal from 'sweetalert2'

// CommonJS

$(document).ready(function() {

    // delete item
    $("[id^='link-delete']").click(function(event) {
        event.preventDefault(); // STOP click

        var this_form_id = $(this).attr('id').replace('link-delete', '#form-delete');
        console.log(this_form_id);
        $(this_form_id).submit();

        // var this_form = $('#form-delete');
        // console.log(this_form);

        

    });

});


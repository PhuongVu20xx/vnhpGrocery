$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $(".admin_menu").click(function () {
        var target = $(this).data("link");
        //window.location.href = "/" + target;
        window.open("http://127.0.0.1:8000/" + target, "_self");
        // $.ajax({

        //     success: function () {
        //         //window.location.href = '/addcategory';
        //     },
        // });
    });
});



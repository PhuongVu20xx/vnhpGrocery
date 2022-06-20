$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $(".admin_menu").click(function () {

        var target = $(this).data("link");
        //window.location.href = "/" + target;

        // $.ajax({

        //     success: function () {
        //         //window.location.href = '/addcategory';
        //     },
        // });
        //let url = "http://127.0.0.1:8000/" + target;
        let url =  target;

        $.ajax(
            {
              url : url,
              type: "GET",
              success: function() {
                //window.open(url,"_self");
                //window.location = url;
                window.location.href = target;
                //location.href = url;
              }
            });
    });
});

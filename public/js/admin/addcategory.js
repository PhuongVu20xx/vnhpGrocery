$(document).ready(() => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    const categoryName = $("#category_name");
    const categoryRoot = $("#category_root");
    const categoryId = $("#TriSeaDefault");
    $("#addCategory").click(function () {
        $.ajax({
            type: "POST",
            url: "/addcategory",
            data: {
                category_name: categoryName.val(),
                category_root: categoryRoot.val(),
                category_status: categoryId.val()
            }, success: function () {
                categoryName.val("");
                categoryRoot.val("");
                categoryId.val();
                alert("Success");
            }
        })
    });
})


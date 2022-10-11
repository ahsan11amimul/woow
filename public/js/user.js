$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.hide_button').click(function () {
        var id = $(this).attr("data-id");
        $.ajax({
            type: "GET",
            url: "/hide_comment",
            data: {
                id,

            },
            success: function (result) {
                console.log(result);
                window.location.reload();
            }
        })

    });
    $('.hide_post').click(function () {
        var id = $(this).attr("data-id");
        //alert(id);
        $.ajax({
            type: "GET",
            url: "/hide_post",
            data: {
                id
            },
            success: function (result) {
                console.log(result);
                window.location.reload();
            }
        })

    });
});



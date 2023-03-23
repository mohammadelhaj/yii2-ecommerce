$(document).ready(function () {

    $(document).on("change", "#select,.select-sub", function () {
        console.log("asdads")
        var selectedValue = $(this).val();
        console.log("selected value: " + selectedValue);
        $.ajax({
            type: "get",
            url: "/product/get-subs",
            data: { category_id: selectedValue },
            success: function (data) {
                console.log(data);
                if (data.length == 0) {
                    $('#showForm').show();
                    console.log("null");

                }
                var select = '<select class="form-select select-sub" name="Product[category_id]" data-lvl="1"><option value="">' + data[0]['title'] + '</option>';
                $.each(data, function (index, value) {
                    if (index == null) {
                        console.log("null");
                    }
                    console.log("index" + index)

                    select += '<option value="' + value.id + '">' + value.name + '</option>';

                });
                select += '</select>';
                $("#selectContainer").append('<label class="form-label" for="select">Subcategory Id</label>' + select);
            },

        });
    });
    $(".dropdown-menu [data-bs-toggle='dropdown']").on("click", function (event) {
        console.log("asdads")
        event.preventDefault();
        event.stopPropagation();
        console.log("hell owrol");
        $(this).parents(".dropdown-menu").first().find(".show").removeClass("show");
        $(this).parents(".dropdown-menu").first().find("[aria-expanded='true']").attr("aria-expanded", false);

        $(this).attr("aria-expanded", true);
        $(this).siblings(".dropdown-menu").toggleClass("show");

        $(this)
            .parents(".nav-item.dropdown")
            .on("hidden.bs.dropdown", function (e) {
                $(".dropdown-submenu .show").removeClass("show");
                $(".dropdown-submenu [aria-expanded='true']").attr("aria-expanded", false);
            });
    });

    $(document).on("click", ".buy", function (event) {
        event.preventDefault();
        if ($('.buy').data("status") == 'accept') {
            console.log("hello world");
            $(".buy").html("remove this product");
            $(".buy").removeClass("btn btn-primary");
            $(".buy").addClass("btn btn-danger");
            $('.buy').data('status', 'remove');
            showNotificatTypeInfo();
            // $.ajax({
            //     url: '/order/buy',
            //     type: 'post',
            //     success: function (data) {
            //         if (data['success']) {
            //             $(that).parent().parent().parent().parent().remove();
            //             var total_price = $("#total_price");
            //             $(total_price).text(data['total_price']);
            //             var dom_counter = $('.card-element').length;
            //             if (dom_counter == 0) {
            //                 $(".money-counter").remove();
            //                 $('.money-container').append('<h1>your cart is empty!</h1>');

            //             }
            //         }
            //     },
            //     error: function () {
            //         alert('error in ajax');
            //     },
            // });
        } else {
            console.log("by world");
            $(".buy").html("buy now");
            $(".buy").removeClass("btn btn-danger");
            $(".buy").addClass("btn btn-primary");
            $('.buy').data('status', 'accept');
            showNotificatTypeDanger();
        }



    });

});
function showNotificatTypeInfo() {
    var notify = $.notify({
        message: 'product added, the product is waiting for the owner to accept the sell',
        // Options for the progress bar
        // Set the progress to 100% (full) to make it disappear automatically
        progress: 100,
        // Options for the notification
        placement: {
            from: 'bottom',
            align: 'right'
        },
        animate: {
            enter: 'animated fadeInUp',
            exit: 'animated fadeOutDown'
        }
    }, {
        // Options for the progress bar
        // Set the type to 'warning' to make it orange
        type: 'info',
        allow_dismiss: false,
        showProgressbar: true,
        placement: {
            from: 'top',
            align: 'right'
        },
        // Set the delay to 10000 (10 seconds)
        delay: 5000
    });

    // Decrease the progress bar automatically every 100ms
    var interval = setInterval(function () {
        // Get the current progress
        var progress = notify.options;
        // If the progress is 0, hide the notification and stop the interval
        if (progress == 0) {
            notify.close();
            clearInterval(interval);
        }
        // Otherwise, decrease the progress by 1
        else {
            notify.update('progress', progress - 1);
        }
    }, 100);
    var closeButton = $('<button>', {
        text: 'Close',
        class: 'btn btn-default',
        click: function () {
            notify.close();
        }
    });
    notify.$ele.append(closeButton);
}
function showNotificatTypeDanger() {
    var notify = $.notify({
        message: 'this product removed from buying',
        // Options for the progress bar
        // Set the progress to 100% (full) to make it disappear automatically
        progress: 100,
        // Options for the notification
        placement: {
            from: 'bottom',
            align: 'right'
        },
        animate: {
            enter: 'animated fadeInUp',
            exit: 'animated fadeOutDown'
        }
    }, {
        // Options for the progress bar
        // Set the type to 'warning' to make it orange
        type: 'danger',
        allow_dismiss: false,
        showProgressbar: true,
        placement: {
            from: 'top',
            align: 'right'
        },
        // Set the delay to 10000 (10 seconds)
        delay: 5000
    });

    // Decrease the progress bar automatically every 100ms
    var interval = setInterval(function () {
        // Get the current progress
        var progress = notify.options;
        // If the progress is 0, hide the notification and stop the interval
        if (progress == 0) {
            notify.close();
            clearInterval(interval);
        }
        // Otherwise, decrease the progress by 1
        else {
            notify.update('progress', progress - 1);
        }
    }, 100);
    var closeButton = $('<button>', {
        text: 'Close',
        class: 'btn btn-default',
        click: function () {
            notify.close();
        }
    });
    notify.$ele.append(closeButton);
}
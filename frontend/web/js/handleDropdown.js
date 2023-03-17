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
        event.preventDefault();
        event.stopPropagation();

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
});
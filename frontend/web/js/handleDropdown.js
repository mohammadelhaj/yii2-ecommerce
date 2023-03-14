$(document).ready(function(){
    $(document).on("change", "#select,.select-sub", function(){
        console.log("asdads")
        var selectedValue = $(this).val();
        console.log(selectedValue);
        $.ajax({
            type: "get",
            url: "/product/get-subs",
            data: {category_id: selectedValue},
            success: function(data) {
                console.log(data);
                var select = '<select class="form-select select-sub" name="Product[category_id]" data-lvl="1"><option value="">'+data[0]['title']+'</option>';
                $.each(data, function(index, value) {
                    select += '<option value="' + value.id + '">' + value.name + '</option>';
                });
                select += '</select>';
                $("#selectContainer").append('<label class="form-label" for="select">Subcategory Id</label>' + select);
            }
        });
    });
});
$(document).ready(function(){
    $("#select").change(function(){
        var selectedValue = $(this).val();
        console.log(selectedValue);
        $.ajax({
            type: "get",
            url: "/product/get-subs",
            data: {category_id: selectedValue},
            success: function(data) {
                console.log(data);
                var select = '<select id="select" class="form-select" name="Product[category_id]" data-lvl="1"><option value="">Select a category</option>';
                $.each(data, function(index, value) {
                    select += '<option value="' + value.id + '">' + value.name + '</option>';
                });
                select += '</select>';
                $("#selectContainer").html('<label class="form-label" for="select">Subcategory Id</label>' + select);
            }
        });
    });
});
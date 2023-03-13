$('#select').on('change', function () {

    console.log(this.value);
    const formData = $(this);
    const formUrl = formData.serialize();
    console.log(formUrl);

    // $.ajax({
    //      
    //     success: function (result) {
    //         $("#h11").html(result);
    //     }
    // });
    
});

function createNewDropdown(){}

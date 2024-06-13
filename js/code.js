$(function () {




    $(".new-card-form").submit(function () {

        var name = $("#name").val();
        var nameParts = name.split(" ");

        var names_count = 0;

        for (var i = 0; i < nameParts.length; i++) {
            if (nameParts[i].length > 1) {
                names_count++;
            }
        }

        var design = $('input[name=design]:checked', '.new-card-form').val();

        // return false;
        if (name == "") {
            $(".error-message").text("يرجى إدخال الاسم اولاً");
            return false;
        } else if (design < 1 || design > 4 || design == undefined) {

            $(".error-message").text("يرجى  إختيار التصميم  ");
            return false;

        } else {

            $(".submit-button").val("يرجى الإنتظار ... ");
            return true;
        }


    });

});




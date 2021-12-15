$(document).ready(function() {
    $(".datepicker").datepicker();

    $("#add").on('click', function(e) {
        e.preventDefault();
        let cloneDiv = $(".parent_div").eq(0).clone();
        $(cloneDiv).find('.error').hide();
        $(cloneDiv).find('.datepicker').val("");
        $(cloneDiv).find('.item').val("");
        $(cloneDiv).find('.amount').val("");
        $(cloneDiv).find('.note').val("");
        $(cloneDiv).find('.upload').val("");

        $(cloneDiv).find('.datepicker').datepicker();

        $(cloneDiv).find('.child_div').after('<div class="col-md-1 mt-3"><buttton type="button" class="remove ml-2 h-15 btn btn-danger">Remove</buttton></div><br/>');
        $('.parent_container').append(cloneDiv);
        $(cloneDiv).find('.remove').on('click', function() {
            $(this).parent().parent().remove();
        });
    });

    $('#save').on('click', function(e) {
        e.preventDefault();

        $.ajax({
            url: "/post/addexpense.php",
            method: "POST",
            data: new FormData($("#form")[0]),
            processData: false,
            contentType: false,
            beforeSend: function(xhr, options) {

                $(".error").remove();
                $('.dtpicker').each(function(i) {
                    var datepicker = $(this);
                    var datepickerVal = $.trim(datepicker.val());
                    if (datepickerVal.length < 1) {
                        $(datepicker).after('<span class="error">*Please Select Date</span>');
                    }

                    var item = $('.item').eq(i);
                    var itemVal = $.trim(item.val());
                    if (itemVal.length < 1) {
                        $(item).after('<span class="error">*Please add Item</span>');
                    }

                    var amount = $('.amount').eq(i);
                    var amountVal = $.trim(amount.val());
                    if (amountVal.length < 1) {
                        $(amount).after('<span class="error">*Please add amount</span>');
                    }

                    var paymentmode = $('.paymentmode').eq(i);
                    var paymentmodeVal = $.trim(paymentmode.val());
                    if (paymentmodeVal === "") {
                        $(paymentmode).after('<span class="error">*Please Select mode of payment</span>')
                    }
                });
                let error = $(".error").val();
                if (error === "") {
                    xhr.abort();
                }
            },
            success: function(response) {
                alert("Data Added Successfully");
            },
        })


        // $.post("/post/addexpense.php", data, function(response) {
        //     alert("Data Added Successfully");
        // })
    });
})
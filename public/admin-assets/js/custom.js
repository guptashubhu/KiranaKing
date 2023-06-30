$(document).ready(function(){
    $('#profile_info').validate({
        rules: {
            name: {
                required: true,
                maxlength: 50
            },
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                number: true,
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 15,
            },
            current_password: {
                required: true,
                minlength: 8,
                maxlength: 15,
            },
            confirm_password: {
                required: true,
                minlength: 8,
                maxlength: 15,
                equalTo: "#password",
            }
        }
    })
});

//=============================================== details Update admins ==========================================================

$(document).ready(function (){
    $('#admininfo').submit(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var admin_id = $('#admin_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url:  "ProfileUpdate",
            data: {name:name, email:email, phone:phone, admin_id:admin_id},
            success: function(response){
                alert(response.success);
            }
        });

    });
});

//================================================ Admin image upload ========================================================================



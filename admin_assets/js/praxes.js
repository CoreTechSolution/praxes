jQuery(document).ready(function(){
    jQuery('#add_user_form').validate({
        rules: {
            username: {
                required: true
            },
            email_address: {
                required: true,
                email: true
            },
            password:{
                required: true,
                minlength: 8
            },
            confirm_password:{
                required: true,
                minlength: 8,
                equalTo: '#password'
            },
            first_name:{
                required: true
            },
            last_name:{
                required: true
            },
            license_numbers:{
                required: true
            },
            npi_number:{
                required: true
            },
            street_address:{
                required: true
            },
            city:{
                required: true
            },
            state:{
                required: true
            },
            zip_code:{
                required: true
            },
            company_id:{
                required: true
            },
            user_role:{
                required: true
            }
        },
        messages: {

        }
    });
    jQuery('#edit_user_form').validate({
        rules: {
            username: {
                required: true
            },
            email_address: {
                required: true,
                email: true
            },
            password:{
                required: true,
                minlength: 8
            },
            confirm_password:{
                required: true,
                minlength: 8,
                equalTo: '#password'
            },
            first_name:{
                required: true
            },
            last_name:{
                required: true
            },
            license_numbers:{
                required: true
            },
            npi_number:{
                required: true
            },
            street_address:{
                required: true
            },
            city:{
                required: true
            },
            state:{
                required: true
            },
            zip_code:{
                required: true
            },
            company_id:{
                required: true
            },
            user_role:{
                required: true
            }
        },
        messages: {

        }
    })
});
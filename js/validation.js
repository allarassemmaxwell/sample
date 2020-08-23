$(document).ready(function() {
    // CONTACT FORM
    $(".contact-form").validate({
        rules: {
            first_name: 'required',
            last_name: 'required',
            subject: 'required',
            message: 'required',
            email: {
                required: true,
                email: true
            }
        }
    });


    // APPOINTMENT FORM
    $(".appointment-form").validate({
        rules: {
            full_name: 'required',
            gender: 'required',
            phone_number: 'required',
            date_of_birth: 'required',
            address: 'required',
            date: 'required',
            time: 'required',
            email: {
                required: true,
                email: true
            }
        }
    });
});
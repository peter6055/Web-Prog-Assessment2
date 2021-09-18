function checkedColor(actionName){

    document.getElementById("yoga_btn").setAttribute( "style","border-color: #dee2e6 !important;");
    document.getElementById("yoga_font").setAttribute( "style","color: #000000 !important;");
    document.getElementById("meditation_btn").setAttribute( "style","border-color: #dee2e6 !important;");
    document.getElementById("meditation_font").setAttribute( "style","color: #000000 !important;");
    document.getElementById("stretching_btn").setAttribute( "style","border-color: #dee2e6 !important;");
    document.getElementById("stretching_font").setAttribute( "style","color: #000000 !important;");
    document.getElementById("healthy-habits_btn").setAttribute( "style","border-color: #dee2e6 !important;");
    document.getElementById("healthy-habits_font").setAttribute( "style","color: #000000 !important;");


    if(actionName == "yoga"){
        document.getElementById("yoga_btn").setAttribute( "style","border-color: #3463cc !important;");
        document.getElementById("yoga_font").setAttribute( "style","color: #3463cc !important;");
    } else if (actionName == "meditation"){
        document.getElementById("meditation_btn").setAttribute( "style","border-color: #cc5b4b !important;");
        document.getElementById("meditation_font").setAttribute( "style","color: #cc5b4b !important;");
    } else if (actionName == "stretching"){
        document.getElementById("stretching_btn").setAttribute( "style","border-color: #8c4d97 !important;");
        document.getElementById("stretching_font").setAttribute( "style","color: #8c4d97 !important;");
    } else if (actionName == "healthy-habits"){
        document.getElementById("healthy-habits_btn").setAttribute( "style","border-color: #b38b1e !important;");
        document.getElementById("healthy-habits_font").setAttribute( "style","color: #b38b1e !important;");
    }
}



function myServiceValidation() {
    // source: https://stackoverflow.com/questions/2901125/jquery-validate-required-select
    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg !== value;
    }, "Value must not equal arg.");
    // source: https://stackoverflow.com/questions/2901125/jquery-validate-required-select


    $(document).ready(function() {
        $("#my-user-service").validate({
            rules: {
                type: {
                    valueNotEquals: "none"
                },
                email: {
                    required: true,
                    email: true
                },
                duration: {
                    required: true,
                    min: 1,
                    max: 999
                },
                date: {
                    required: true
                }
            },
            messages: {
                type: {
                    valueNotEquals: "Please select the type of workout."
                },
                email: {
                    required: "Please enter your email.",
                    email: "Your email address must be in the format of name@domain.com",
                },
                duration: {
                    required: "Please enter your workout duration.",
                    min: "Duration shouldn't less than zero.",
                    max: "Duration should less than 999."
                },
                date: {
                    required: "We need your email address to contact you"
                }
            },
            errorElement: "div",
            errorClass: 'errorMsg',
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
}
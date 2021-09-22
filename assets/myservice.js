function checkedColor(actionName) {

    document.getElementById("yoga_btn").setAttribute("style", "border-color: #dee2e6 !important;");
    document.getElementById("yoga_font").setAttribute("style", "color: #000000 !important;");
    document.getElementById("meditation_btn").setAttribute("style", "border-color: #dee2e6 !important;");
    document.getElementById("meditation_font").setAttribute("style", "color: #000000 !important;");
    document.getElementById("stretching_btn").setAttribute("style", "border-color: #dee2e6 !important;");
    document.getElementById("stretching_font").setAttribute("style", "color: #000000 !important;");
    document.getElementById("healthy-habits_btn").setAttribute("style", "border-color: #dee2e6 !important;");
    document.getElementById("healthy-habits_font").setAttribute("style", "color: #000000 !important;");


    if (actionName == "yoga") {
        document.getElementById("yoga_btn").setAttribute("style", "border-color: #3463cc !important;");
        document.getElementById("yoga_font").setAttribute("style", "color: #3463cc !important;");
    } else if (actionName == "meditation") {
        document.getElementById("meditation_btn").setAttribute("style", "border-color: #cc5b4b !important;");
        document.getElementById("meditation_font").setAttribute("style", "color: #cc5b4b !important;");
    } else if (actionName == "stretching") {
        document.getElementById("stretching_btn").setAttribute("style", "border-color: #8c4d97 !important;");
        document.getElementById("stretching_font").setAttribute("style", "color: #8c4d97 !important;");
    } else if (actionName == "healthy-habits") {
        document.getElementById("healthy-habits_btn").setAttribute("style", "border-color: #b38b1e !important;");
        document.getElementById("healthy-habits_font").setAttribute("style", "color: #b38b1e !important;");
    }
}


function myServiceValidation() {
    // source: https://stackoverflow.com/questions/2901125/jquery-validate-required-select
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg !== value;
    }, "Value must not equal arg.");
    // source: https://stackoverflow.com/questions/2901125/jquery-validate-required-select


    $(document).ready(function () {
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

            submitHandler: function (form) {
                // ---------------- Start with call api to add to DB ---------------------
                // get service id from radio selection
                var serviceID = getServiceID($('[name="service"]:checked').val().trim());

                // get the other fields
                var type = $('#type').val().trim();
                var email = $('#email').val().trim();
                var duration = $('#duration').val().trim();
                var date = $('#date').val().trim();

                // save the data to database
                $.ajax({
                    url: 'includes/api/insertWorkout.php',
                    data: {
                        serviceID: serviceID,
                        type: type,
                        email: email,
                        duration: duration,
                        date: date
                    },

                    // ---------------- if successful insert to the page -------------------
                    success: function (response) {
                        // erase the form
                        $('#my-service-selection').empty();
                        $('#my-user-service').empty();

                        // print reset button
                        $('#my-service-instruction').append('<h1 class="display-4">Lets start our workout</h1></br>');
                        $('#my-service-instruction').append('<button type="button" class="btn btn-danger btn-lg btn-block" onclick="location.reload()">Restart</button></br></br>');
                        $('#my-service-instruction').append('<video width="100%" height="auto" controls> <source src="'+response+'" type="video/mp4"> </video>');

                    },
                    error: function (request, error) {
                        alert("System Error! Please try again");
                    }
                });


            }
        });
    });
}




function loadServiceType() {
    $(document).ready(function () {
        //Add a click listener to our search_button.
        $('[name="service"]').click(function () {

            // get service id from radio selection
            var serviceID = getServiceID($('[name="service"]:checked').val().trim());

            // start ajax inquiries
            $.ajax({
                url: 'includes/api/loadServiceType.php',
                data: {
                    serviceID: serviceID
                },
                success: function (response) {
                    // empty the dropdown
                    $('#type').empty();
                    $('#type').append("<option value='none'> Please select.... </option>");

                    // display input box
                    $('[name="my-user-service"]').css("display", "inline");

                    // decode the result
                    var results = JSON.parse(response);

                    // print to dropdown
                    for (var count = 0; count < results.length; count++) {
                        $("#type").append("<option value='" + results[count] + "'>" + results[count] + "</option>");

                    }

                }
            });
        });
    });
}





function getServiceID(service){
    if (service == 'yoga') {
        return 1;
    } else if (service == 'meditation') {
        return 2;
    } else if (service == 'stretching') {
        return 3;
    } else if (service == 'healthy-habits') {
        return 4;
    }
}

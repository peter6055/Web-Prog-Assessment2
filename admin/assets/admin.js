// function nameSelectValidation() {
//     // source: https://stackoverflow.com/questions/2901125/jquery-validate-required-select
//     $.validator.addMethod("valueNotEquals", function (value, element, arg) {
//         return arg !== value;
//     }, "Value must not equal arg.");
//     // source: https://stackoverflow.com/questions/2901125/jquery-validate-required-select
//
//
//     $(document).ready(function () {
//
//         // user select bar jquery validation
//         $("#user-bar").validate({
//             rules: {
//                 user: {
//                     valueNotEquals: "none"
//                 }
//             },
//             messages: {
//                 user: {
//                     valueNotEquals: "You need to select a user!"
//                 }
//             },
//             errorElement: "div",
//             errorClass: 'errorMsg text-danger pt-2 ps-2',
//         });
//     });
// }


function searchServiceQuery() {
    var search = $('#search').val().trim();
    $.ajax({
        url: 'includes/api/searchServiceQuery.php',
        data: {
            search: search,
        },

        // ---------------- if successful insert to the page -------------------
        success: function (response) {
            var result = JSON.parse(response);
            var responseCode = result[0];
            var responseMsg = result[1];

            $("#errorMsgSearch").empty();
            $("#service").empty();

            if (responseCode == 0) {
                $('#errorMsgSearch').append('<p class="">' + responseMsg + '</p></br>');
                // no search then recover to the original look (4 services)
                for(let count = 0 ; count < 4 ; count++){

                    if(count == 0){
                        printServiceBtn("yoga");
                    } else if(count == 1){
                        printServiceBtn("meditation");
                    } else if(count == 2){
                        printServiceBtn("stretching");
                    } else if(count == 3){
                        printServiceBtn("healthy-habits");
                    }
                }

                // will need to empty stat when user clear search fields
                $("#chart").remove();

            } else if (responseCode == 1){
                printServiceBtn(responseMsg);
                // out side container
                for(let count = 0 ; count < 3 ; count++){
                    $('#service').append('<div class="col flex-column d-flex"></div>');
                }
            }
        },
        error: function (request, error) {
            alert("System Error! Please try again");
        }
    });
}

// function use to print service button (radio)
function printServiceBtn(responseMsg){
    // out side container
    $('#service').append('<div class="col flex-column d-flex" id="' +responseMsg+ '_col"></div>');
    // radio
    $('#' +responseMsg+ '_col').append('<input type="radio" class="btn-check" name="service" id="'+responseMsg+'" value="'+responseMsg+'" autocomplete="off">');
    // label
    $('#' +responseMsg+ '_col').append('<label class="border h-100 w-100 rounded bg-white shadow-sm py-4 btn btn-secondary" id="'+responseMsg+'_btn" for="'+responseMsg+'">  <img class="mt-4" src="assets/images/'+responseMsg+'.svg?>" height="210px">  </label>');
    // add click change color to label
    $('#' +responseMsg+ '_btn').attr("onclick", "checkedColor('" +responseMsg+ "');");
    // service name content
    $('#' +responseMsg+ '_col').append('<p class="lead text-center mt-3" id="' +responseMsg+ '_font">' +responseMsg+ '</p>');
}



function nameSelected() {

    // clean every thing after re-select user.
    $("#errorMsgSearch").empty();
    $("#service").empty();
    $("#chart").empty();
    $("#name-select-error-msg").remove();

    if($("#user option:selected").val() == "none"){
        $('#user-bar').append('<p class="text-danger pt-2 ps-2" id="name-select-error-msg"> You need to select a user! </p>');
        $('#after-selected-name').attr("style", "display:none");
        return 0;
    }

    // rewrite the service selection bar first.
    for(let count = 0 ; count < 4 ; count++){
        if(count == 0){
            printServiceBtn("yoga");
        } else if(count == 1){
            printServiceBtn("meditation");
        } else if(count == 2){
            printServiceBtn("stretching");
        } else if(count == 3){
            printServiceBtn("healthy-habits");
        }
    }
    $('#after-selected-name').attr("style", "display:block");
}






function checkedColor(actionName) {

    $('#yoga_btn').attr("style", "border-color: #dee2e6 !important;");
    $('#yoga_font').attr("style", "color: #000000 !important;");
    $('#meditation_btn').attr("style", "border-color: #dee2e6 !important;");
    $('#meditation_font').attr("style", "color: #000000 !important;");
    $('#stretching_btn').attr("style", "border-color: #dee2e6 !important;");
    $('#stretching_font').attr("style", "color: #000000 !important;");
    $('#healthy-habits_btn').attr("style", "border-color: #dee2e6 !important;");
    $('#healthy-habits_font').attr("style", "color: #000000 !important;");
    $('#chart').remove();


    if (actionName == "yoga") {
        $('#yoga_btn').attr("style", "border-color: #3463cc !important;");
        $('#yoga_font').attr("style", "color: #3463cc !important;");
    } else if (actionName == "meditation") {
        $('#meditation_btn').attr("style", "border-color: #cc5b4b !important;");
        $('#meditation_font').attr("style", "color: #cc5b4b !important;");
    } else if (actionName == "stretching") {
        $('#stretching_btn').attr("style", "border-color: #8c4d97 !important;");
        $('#stretching_font').attr("style", "color: #8c4d97 !important;");
    } else if (actionName == "healthy-habits") {
        $('#healthy-habits_btn').attr("style", "border-color: #b38b1e !important;");
        $('#healthy-habits_font').attr("style", "color: #b38b1e !important;");
    }




    // draw chart

    
    
    // get user's selection and input first
    // var user_email = $('#user').val().trim();
    var user_email = $('[name="user"]').val();

    // empty the diagram container
    $('#after-selected-name').append('<div class="row border p-4 m-1" id="chart"></div>');

    // check which diagram should print
    if (actionName == "yoga" || actionName == "meditation" || actionName == "stretching") {
        // first title and diagram
        $('#chart').append('<h3 class="pt-5">What type of service user has enrolled?</h3>');
        $('#chart').append('<div class="pt-4" id="service_type_bar_chart_container"> <canvas id="service_type_bar_chart"></canvas> </div>');

        // second title and diagram
        $('#chart').append('<h3 class="pt-5">How long did the user participate in this service? (Mins) </h3>');
        $('#chart').append('<div class="pt-4" id="service_duration_bar_chart_container"> <canvas id="service_duration_bar_chart"></canvas> </div>');

        // third title and diagram
        $('#chart').append('<h3 class="pt-5">When did the user use the services?</h3>');
        $('#chart').append('<div class="pt-4" id="service_time_line_graph_container"> <canvas id="service_time_line_graph"></canvas> </div>');
        
        
        // ---------------------------- global chart setting ----------------------------
        // background color
        const backgroundColor = [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
        ];

        // border color
        const borderColor = [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
        ];



        // ---------------------------- first diagram config (service_type_bar_chart) ----------------------------
        $.ajax({
            url: 'includes/api/getChartData.php',
            data: {
                user_email: user_email,
                service_name: actionName,
                chart_name: "service_type_bar_chart",
            },

            success: function (response) {
                var result = JSON.parse(response);

                // data y
                const service_type_bar_chartData = {
                    labels: result[1],
                    datasets: [{
                        label: 'What type of ' +actionName+ ' user has enrolled?',
                        backgroundColor: backgroundColor,
                        borderColor: borderColor,
                        borderWidth: 1 ,
                        data: result[0],
                    }]
                };

                const service_type_bar_chartConfig = {
                    type: 'bar',
                    data: service_type_bar_chartData,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    },
                };

                var service_type_bar_chart = new Chart(
                    document.getElementById('service_type_bar_chart'),
                    service_type_bar_chartConfig
                );

            },
            error: function (request, error) {
                alert("System Error! Please try again");
            }
        });



        // ---------------------------- second diagram config (service_type_bar_chartData) ----------------------------
        $.ajax({
            url: 'includes/api/getChartData.php',
            data: {
                user_email: user_email,
                service_name: actionName,
                chart_name: "service_duration_bar_chart",
            },

            success: function (response) {
                var result = JSON.parse(response);

                // data y
                const service_type_bar_chartData = {
                    labels: result[1],
                    datasets: [{
                        label: 'How long did the user participate in ' +actionName+ '? (Mins)',
                        backgroundColor: backgroundColor,
                        borderColor: borderColor,
                        borderWidth: 1 ,
                        data: result[0],
                    }]
                };

                const service_duration_bar_chartConfig = {
                    type: 'bar',
                    data: service_type_bar_chartData,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    },
                };

                var service_type_bar_chart = new Chart(
                    document.getElementById('service_duration_bar_chart'),
                    service_duration_bar_chartConfig
                );

            },
            error: function (request, error) {
                alert("System Error! Please try again");
            }
        });


    //     // ---------------------------- third diagram config (service_time_line_graph) ----------------------------
        const service_time_line_graphConfig = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June',],
            type: 'line',
            data: data,
            options: {
                responsive : true
            }
        };

        var service_type_bar_chart = new Chart(
            document.getElementById('service_time_line_graph'),
            service_time_line_graphConfig
        );


    // } else if (actionName == "healthy-habits") {
    //     // first title and diagram
    //     $('#chart').append('<h3 class="pt-5">How many calories serving in a day?</h3>');
    //     $('#chart').append('<div class="pt-4" id="serving_per_diet_pie_chart_container"> <canvas id="serving_per_diet_pie_chart"></canvas> </div>');
    //
    //     // ---------------------------- first diagram config ----------------------------
    //     const serving_per_diet_pie_chartConfig = {
    //         type: 'pie',
    //         data: data,
    //         options: {
    //             responsive : true
    //         }
    //     };
    //
    //
    //     var service_type_bar_chart = new Chart(
    //         document.getElementById('serving_per_diet_pie_chart'),
    //         serving_per_diet_pie_chartConfig
    //     );

    }

}

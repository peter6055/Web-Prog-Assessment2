function loadServiceType() {
    $(document).ready(function () {

        // start ajax inquiries
        $.ajax({
            url: 'https://reg.bom.gov.au/fwo/IDV60901/IDV60901.95936.json',
            crossDomain: true,
            dataType: 'jsonp',
            type : "GET",
            success: function (response) {

                var results = JSON.parse(response);

                alert(results['observations']['data'][0]['air_temp']);

            }
        });

        // alert("start");
        //
        // var myHeaders = new Headers();
        // myHeaders.append("Cookie", "BIGipServer~Production~PROD_REG_TCP80_HTTP_POOL=rd1o00000000000000000000ffff86b2fd85o80");
        //
        // var requestOptions = {
        //     method: 'GET',
        //     headers: myHeaders,
        //     redirect: 'follow'
        //
        // };
        //
        // fetch("https://reg.bom.gov.au/fwo/IDV60901/IDV60901.95936.json", requestOptions)
        //     .then(response => response.text())
        //     .then(result => console.log(result))
        //     .catch(error => console.log('error', error));
    });
}
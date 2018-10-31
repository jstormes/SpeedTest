<?php
header("Access-Control-Allow-Origin: *");?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>


<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">API Speed Test</h1>
            <p>This is a simple speed test that will call the /api/uuid RESTful endpoint 10 time using ether the full MVC style or the Microservices style.</p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-6">
                <h2>Classic Apache with Expressive</h2>
                <p><a class="btn btn-secondary" href="#" role="button" onclick="testAPI('http://speedtest.loopback.world/api/uuid','results-apache')">Run Test</a></p>
                <div id="results-apache">

                </div>

            </div>

            <div class="col-md-6">
                <h2>Swoole with Expressive</h2>
                <p><a class="btn btn-secondary" href="#" role="button" onclick="testAPI('http://speedtest.loopback.world:8080/api/uuid','results-swoole')">Run Test</a></p>
                <div id="results-swoole">

                </div>

            </div>
        </div>

        <hr>

    </div> <!-- /container -->

</main>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

    function testAPI(URI,divID) {

        document.getElementById(divID).innerHTML = '' ;

        startTime = new Date();
        for (let i = 1; i < 10; i++) {

            var request = new XMLHttpRequest();
            request.open('GET', URI, false);  // `false` makes the request synchronous
            request.send(null);

            if (request.status === 200) {
                document.getElementById(divID).innerHTML += '<br>' + request.responseText;
            }

        }
        endTime = new Date();
        timeDiff = endTime - startTime; //in ms
        console.log(timeDiff);
        document.getElementById(divID).innerHTML += '<br>Total Time in ms: ' + timeDiff;

    }

</script>

</body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <style>
		body{
			background: url("img/homeimg.jpg") no-repeat;
			background-size: 100% auto;
		}
		body h1 {
			margin: 0;
			padding: 20px 0;
			background-color: rgb(128, 0, 0);
			color: #fff;
		}
        h1,h2{
            text-align: center;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 500;
			margin-bottom: 20px;
        }
        form.booking-details{
            padding: 10px 30px 30px;
            font-family: Arial;
            width: 450px;
            background-color: #F7F7F7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			border-radius: 2px;
			margin: 6% auto 0;
			opacity: 0.9;
        }
        label{
            padding-right: 20px;
            display: inline-block;
            width: 150px;
        }
        .time-picker{
            margin-top: 30px;
        }
        .shwresult{
            display: block;
            margin: 20px auto 0;
        }
        input{
            border-radius: 4px;
            border: 1px solid #999;
            height: 28px;
        }
    </style>


    <body>
        <h1>Go to Study Room</h1>
        <form class="booking-details" action="booking.php" method="GET">
			<h2>Enter below details</h2>
            <label>Date: </label>
            <input class="date-picker" type="date" name = "date" required/>
            <label>Time: </label>
            <input class="time-picker" type="time" name = "time" required/> 
            <button class="shwresult btn btn-default">Show Result</button>
        </form>
    </body>
<!--    <script>
        $(".shwresult").click(function (e) {
            e.preventDefault();
            window.location = "result.php";
        });
    </script>-->
</html>
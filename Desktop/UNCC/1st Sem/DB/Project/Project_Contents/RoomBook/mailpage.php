<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
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
        .home_cont{
            margin-top: 10%;
            color: #fff;
            overflow: hidden;
        }
        h2,h4{
            margin-bottom: 30px;
        }

        .c_form_holder{
            top: 25%;
            margin-left: 10%; 
            position:absolute;
        }
        .c_form_label_desc_note{
            display: inline-block;
            float: left;
            clear: left;
            width: 250px;
            margin-top: 10px;
            text-align: right;
            font-family: Verdana, sans-serif;
            color: black;
            font-size: 10px;
            margin-top: 7px;
            font-style: italic;
            color: red;
        }

        .c_form_label_desc{
            display: inline-block;
            float: left;
            clear: left;
            width: 50px;
            text-align: right;
            margin-top: 10px;
            margin-right: 50px;
            font-family: Verdana, sans-serif;
            color: whitesmoke;
            font-size: 15px;
            margin-top: 7px;
        }

        .book_btn btn btn-default {
            margin-bottom: 12%; 
            margin-left: 54%; 
        }
    </style>
    <body>
        <h1><center>Go to Study Room</center></h1>
        <div class = "c_form_holder">
            <form id='c_form' class = "c_form" method="post"
                  action="mailhandler.php">
                <label class="c_form_label_desc">Email*</label>
                <input id="i_c_name_1" class="c_form_ibox" type="text" name="toEmail" required><br>
                <label class="c_form_label_desc">Agenda*</label>
                <textarea class="c_form_ibox_c" rows="10" cols="39" name="agenda" required
                          style="margin-top: 17px;">Share your agenda</textarea><br>
                <br>
                <input type="submit" name="login" class="login login-submit" value="Send Mail">        
            </form>
        </div>
    </body>
    <script>
        
        
    </script>
</html>
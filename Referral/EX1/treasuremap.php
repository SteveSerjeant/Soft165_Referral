<?php
require_once 'public/header.php';

?>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>SOFT165 Exercise 03 Treasure Map</title>
        <link href="public/soft165.css" rel="stylesheet"  type="text/css">
        <script src="treasure.js"></script>
    </head>
    <body class="bg-info">
        <div class="container-fluid col-md-6 offset-md-3">
            <div class ="row">
                <h1>Welcome to our Treasure Page<br><br>   </h1>
                
            </div>
            <div class="row">
                <div class="card mt-3 col-md-8">
                    
                    <style>
                    table {width:100%}
                    td {width: 33.333%; height: 100px; border: 4px solid black}
                    td:after { content: ""; display: block; margin-top: 100%; }
                                               
                    </style>
                    <table>
                        <tr>
                            <td id="top-left" class="bg-light"></td>
                            <td id="top-middle" class="bg-light"></td>
                            <td id="top-right" class="bg-light"></td>
                        </tr>    
                        <tr>
                            <td id="middle-left" class="bg-light"></td>
                            <td id="middle-middle" class="bg-light"></td>
                            <td id="middle-right" class="bg-light"></td>
                        </tr>
                        <tr>
                            <td id="bottom-left" class="bg-light"></td>
                            <td id="bottom-middle" class="bg-light"></td>
                            <td id="bottom-right" class="bg-light"></td>
                        </tr>
                       
                    </table>
                     <h1><a href="index.php">Home</a></h1>
                
                
            </div>
                <div class="card mt-3 col-4">
                    <div id="chat">
                        <h2>Web Socket Demo</h2>
                        <textarea id="chatInput" placeholder="Write your message here..." required></textarea>
                        <div id="chatOutput"></div>
                        <button type ="button" id="chatSubmit">Send Message</button>
                        <button type ="button" id ="chatClose">Close Chat</button>
                        
                    </div>
                </div>
            
            
        </div>
    </body>
</html>


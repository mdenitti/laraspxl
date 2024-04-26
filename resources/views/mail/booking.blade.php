<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bedankt voor uw boeking</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>    
</head>
<body>
    <img src="{{ asset('img/dbv_main_logo.png') }}" alt="De Blauwe vogel">
    <h1>Bedankt voor uw boeking</h1>
    <p><b>Naam: {{$booking->firstname . ' ' . $booking->lastname}}</b></p>
    <p>Wij contacteren u ASAP,<br>mvg De Blauwe vogel</p>
</body>
</html>
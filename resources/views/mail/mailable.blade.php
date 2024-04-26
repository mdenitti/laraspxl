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
    <h1>Hoe geraakt u op onze site</h1>
    <p><b>Naam: {{$mail->firstname . ' ' . $mail->lastname}} </b></p>
    <p>1. Stap in uw auto</p>
    <p>2. rijdt achteruit of vooruit afhankelijk van de parkeerrichting</p>
    <p>3. Geef gas of stroom</p>
    <p>4. Rem op tijd!</p>
    <p>5. Ga zitten op een stoel in onze aula</p>
    <p>6. Zwijg en luister aandachtig.</p>
    <p>7. Bestel en betaal</p>
    {{ $mail->location_id == '1' ? 'Premium recent vernieuwe locatie' : 'Oude locatie, vochtig en muf' }}
    <p>Wij contacteren u ASAP,<br>mvg De Blauwe vogel</p>
</body>
</html>
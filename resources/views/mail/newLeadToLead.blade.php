<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        Ciao {{ $data['name'] }}.
    </p>
    <p>
        Il tuo messaggio:
    </p>
    <p>
        {{ $data['message'] }}
    </p>
    <p>
        e' stato ricevuto con successo. Qualcuno di rispondera' a breve.
    </p>
</body>
</html>

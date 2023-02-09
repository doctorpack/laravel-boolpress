<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nuovo Lead!</h1>
    <p>
        {{ $data['name'] }} ha appena inviato questo messaggio:
    </p>
    <p>
        {{ $data['message'] }}
    </p>
    <p>
        Rispondigli al suo indirizzo: {{ $data['email'] }}
    </p>
</body>
</html>

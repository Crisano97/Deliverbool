<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <div class="title">
        <h3>
            Nome mittente: {{ $lead->name }}

        </h3>
        <h6>
            Indirizzo email: {{ $lead->email }}
        </h6>
    </div>
    <div class="content">
        <h4>Messaggio dell'email:</h4>
        <p>
            {{ $lead->message }}
        </p>
    </div>
</body>
</html>
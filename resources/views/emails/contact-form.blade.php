
<!DOCTYPE html>
<html>
<head>
    <title>Nuovo messaggio di contatto</title>
</head>
<body>
    <h1>Hai ricevuto un nuovo messaggio!</h1>
    <p><strong>Nome:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <hr>
    <p><strong>Messaggio:</strong></p>
    <p>{{ $messageBody }}</p>
</body>
</html>
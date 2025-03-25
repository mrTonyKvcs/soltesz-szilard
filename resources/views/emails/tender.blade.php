<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jelentkezes</title>
</head>

<body>
    <strong>Esemény neve:{{ $data->title }}</strong> <br><br>
    <hr>
    <strong>Név: </strong> {{ $data->name }}<br><br>
    <strong>Email: </strong> {{ $data->email }}<br><br>
    <strong>Telefonszam: </strong> {{ $data->phone_number }}<br><br>
    <strong>Miért jelentkezel? (3-4 rövid mondat) </strong> {{ $data->description }}<br><br>
</body>

</html>

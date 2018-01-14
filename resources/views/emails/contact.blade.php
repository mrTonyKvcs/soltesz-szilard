<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kapcsolat</title>
</head>
<body>
	<strong>Név: </strong> {{ $data->name }}<br><br>
	<strong>Email: </strong> {{ $data->email }}<br><br>
	<hr>
	<strong>Üzenet:</strong>
	<p>{{ $data->message }}</p>
</body>
</html>

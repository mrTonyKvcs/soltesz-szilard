<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jelentkezes</title>
</head>
<body>
    <strong>{{ $data->title }}</strong> <br><br><hr>
	<strong>Név: </strong> {{ $data->name }}<br><br>
	<strong>Email: </strong> {{ $data->email }}<br><br>
	<strong>Telefonszam: </strong> {{ $data->phone_number }}<br><br>
	<strong>Röviden írd meg miért jelentkeztél? </strong> {{ $data->description }}<br><br>
	<strong>Mondj magadról pár gondolatot! </strong> {{ $data->about_me }}<br><br>
</body>
</html>

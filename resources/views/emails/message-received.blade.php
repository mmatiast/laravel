<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mensaje recibido</title>
</head>
<body>
<p> recibiste un mensaje de:{{ $msg['name'] }} - {{ $msg['email'] }}</p>
<p><strong>asunto: </strong> {{$msg['subject'] }}</p>
<p><strong>contenido: </strong> {{$msg['content'] }}</p>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>HANDLER</title>
</head>
<body>
  <div id="app">
    <p>This is the Event Handler page!</p>
		<form action="/handler" method="post">
			<input type="text" name="notifyTextMessage">
			<input type="submit">
			{{ csrf_field() }}
		</form>
  </div>
</body>
</html>

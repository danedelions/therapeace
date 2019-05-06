<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>LISTENER</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('2a7eb7e14ad515eeb702', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('form-submitted', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
  <script src="js/app.js" charset="utf-8"></script>
  
</head>
<body>
  <div id="app">
    <p>This is the Event Listener page!</p>
  </div>
</body>
</html>
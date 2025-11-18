<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebSocket</title>
    @vite('resources/js/app.js')
</head>

<body>
    <p>
        <b>Event:-</b>
        <span id="event-data"></span>
    </p>
    <script type="module">
        Echo.channel('test-channel')
            .listen('NewEvent', (e) => {
                console.log(e.data);
                document.getElementById('event-data').innerText = JSON.stringify(e.data);
            });
    </script>
</body>

</html>

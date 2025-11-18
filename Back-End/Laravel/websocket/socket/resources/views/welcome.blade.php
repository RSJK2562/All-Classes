<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socket</title>
    <script src="{{ asset('build/assets/app-4f7e1acf.js') }}"></script>
</head>
<body>
    <p>
        <b>Event:- </b> <span id="event-data"></span>
    </p>

    <script>
        Echo.channel('chat').listen('NewEvent', (e) => {
                console.log(e.message); 
                document.getElementById('event-data').innerHTML = e.message;
            });
    </script>
</body>
</html>

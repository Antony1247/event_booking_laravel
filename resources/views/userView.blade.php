<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Events</title>
    <link rel="stylesheet" href="{{ asset('css/UserViewEvent.css') }}">
</head>
<body>

<div class="navbar">
    <h2>Events</h2>
</div>
<div></div>
<div class="event-container">

    @foreach($events as $event)
        <div class="event">
            <div class="event-content">
                <h3>{{ $event->title }}</h3>
                <p><strong>Event Date:</strong> {{ $event->start_time }}</p>
                <p><strong>Venue:</strong> {{ $event->venue }}</p>
                <p><strong>Description:</strong> {{ $event->description }}</p>
            </div>
            <button  onclick="window.location.href='/{{ $user->id }}/events/{{ $event->id }}/book'">Book</button>
        </div>
    @endforeach
</div>

</body>
</html>

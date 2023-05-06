<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}">
            <h1>{{ $job['title'] }} N {{ $job['id'] }}</h1>
        </a>
        <p>{{ $job['description'] }}</p>
    @endforeach
</body>

</html>

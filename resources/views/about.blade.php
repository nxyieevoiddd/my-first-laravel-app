<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>About page </h1>
    <a href="/"> welcome</a>
    <h1>Name</h1>
    {{ $person->name }}
    <h2>Email</h2>
    {{ $person->email }}
    <h3>Languages</h3>
    <ul>
    @foreach ($person->languages as $language)
    <li>{{ $language }}</li>
@endforeach
</ul>
</body>
</html>
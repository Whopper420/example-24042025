<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach ($data as $d)
    <h1>{{ $d->title }}</h1>
    {{ $d->content }}
    @endforeach

</body>

</html>
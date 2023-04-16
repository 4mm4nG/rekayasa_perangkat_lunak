<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    @if (Auth::user()->role == 'admin')
        {{-- fitur untuk admin --}}
    @else
        {{-- fitur untuk user --}}
    @endif
</body>
</html>
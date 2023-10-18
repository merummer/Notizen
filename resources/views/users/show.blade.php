<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="p-4">
{{$user->name}}

    <div>
        @foreach($user->notes as $note)
            <div>
                <p>{{$note->title}}</p>
            </div>
        @endforeach
    </div>
</body>
</html>

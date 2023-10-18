 <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="p-4">
<h1 class="text-5xl md:text-5xl font-bold dark:text-teal-700 text-teal-600 mb-8">
    {{$title}}
</h1>
    <div class="space-y-3">
        @foreach($notes as $no)
           <div class="border-2 border-teal-700 rounded-lg p-6 shadow-lg">
               <h2 class="text-3xl text-teal-800">{{$no->title}}</h2>
               <p class="text-2xl">{{$no->content}}</p>
               <p>{{$no->user->name}}</p>
           </div>
        @endforeach

    </div>
<div>
    {{$notes->links()}}
</div>

</body>
</html>

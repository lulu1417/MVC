<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
</head>
<body>

<div class="container"></div>

<h1>Project</h1>

@foreach($projects as $project)

<h3>
    {{$project->title}}

    <li>{{$project->body}}</li>

</h3>

@endforeach

</div>

</body>
</html>

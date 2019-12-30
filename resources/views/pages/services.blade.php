<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','LSAPP')}}</title>

    </head>
    <body>
    <h3>{{$title}}</h3>
    @if(count($services) > 0)
    <ul class = "list-group">
        @foreach($services as $service)
            <li class = "list-group-item">{{$service}}</li>
        @endforeach
    </ul>
    @endif

    </body>
</html>
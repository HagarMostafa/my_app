<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','LSAPP')}}</title>

    </head>
    <body>
    <h3>{{$title}}</h3>
    <p>This the laravel application from "Laravel From Scratch" youtube series"</p>
    </body>
</html>
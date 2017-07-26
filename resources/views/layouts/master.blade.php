<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @if(isset($title))
        <title>{{$title}}</title>
    @else
        <title>test</title>
    @endif
    <link rel="shortcut icon" href="/favicon.ico" />
    @include('resources.styles')
</head>

<body>

<div class="content-wrapper">
    <div class="main">
        @yield('master.content')
    </div>
</div>

@include('resources.scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</p>About</p>
<a href="/">go to home</a>
<a href="/contacts">go to contacts</a>
<a href="/about">go to about</a>

@foreach ($groups as $groups)
   {!! $groups !!}
;

@endforeach
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <h1> home</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ipsam assumenda porro corporis, odio, laudantium cum alias at illum ut quam saepe ea molestiae voluptatem esse odit officiis minus! Debitis? <br> </p>
@php
$n = 1; // variabel langsung di php
@endphp

    {{-- {{ $n=1 }}; // variabel php langsung di blade --}}
    @foreach ($users as $user)    
        <h3>ini data ke {{ $n++ }}</h3>
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <br>
    @endforeach
    
</body>
</html>
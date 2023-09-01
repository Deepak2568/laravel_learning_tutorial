<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- if and else blade statement --}}
    @if($name)
    <h1 style='color:blue'>Welcome Home Page</h1>
    @else
    <h1 style='color:blue'>Not Welcome Home Page</h1>
    @endif

    {{-- if,elseif blade statement --}}
    @if($num == 1)
    <h1 style='color:rgb(128, 0, 96);'>Number is - {{$num}}</h1>
    @elseif($num == 2)
    <h1 style='color:rgb(98, 128, 0);'>Number is - {{$num}}</h1>
    @endif

    {{-- foreach blade statement --}}
    @foreach($data as $datas)
        @if($datas == 'paulraj')
            <h1 style='color:green;'>Father name is {!!$datas!!}</h1>
        @elseif($datas == 'deepak')
            <h1 style='color:green;'>My name is {!!$datas!!}</h1>
        @elseif($datas == 'rani')
            <h1 style='color:green;'>Mother name is {!!$datas!!}</h1>
        @elseif($datas == 'abishake')
            <h1 style='color:green;'>Brother name is {!!$datas!!}</h1>
        @endif
    @endforeach

    {{-- forelse blade statement --}}
    @forelse ($empty as $item)
        {{$item}}
    @empty
        <h1 style='color:red;'>No data found</h1>
    @endforelse

    {{-- unless blade statement --}}
    @unless($false)
     <h1 style='color:rgb(60, 0, 128);'>Deepak</h1>
    @endunless
</body>
</html>
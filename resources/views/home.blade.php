<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name='viewport' content="width=device-width, initial-scaale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Уже не Laravel</title>
    </head>
<body>
    <svg class="svg " width="150" height="130">
        <symbol id="s-crown">
            <path d="M 10,110 L 10,10 L 40,50 L 70,10 L 100,50 L 130,10 L 130,110 z"
            fill="f9aaaa" stroke="#f86565" stroke-width="5"/>
        </symbol>
        <use xlink:href="#s-crown" x="5" y="7"/>
    </svg>
    <div class="my_boks wrap">
    <div class=" my_boks1 block">{{ $bookone }}<br>
    {{ $discriptionone }}
    </div>
    <div class="my_boks2 block">{{ $booktwo}}<br>
    {{ $discriptiontwo }}
    </div>
    <div class="my_boks3 block">{{ $bookthree}}<br>
    {{ $discriptionthree }}
    </div>
    </div>
</body>
</html>
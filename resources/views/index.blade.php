<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Migration </title>
    @vite(['resources/sass/app.scss', "resources/js/app.js"])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');
    </style>


</head>

<body>
    <h1> Train Table </h1>



    <div class="container">

        <div class="board-header">
            <span>Società</span>
            <span>Treno</span>
            <span>Partenza</span>
            <span>Orario</span>
            <span>Ritardo</span>
            <span>Arrivo</span>
            <span>Vagoni</span>
        </div>

        @foreach ($Train as $element)
            <x-card :is_on_time="$element['is_on_time']">
                {{ $element['company'] }}
                <x-slot:trainCode> {{ $element['train_code'] }} </x-slot:trainCode>
                <x-slot:departure_station> {{ $element['departure_station'] }} </x-slot:departure_station>
                <x-slot:departure_time> {{ \Carbon\Carbon::parse($element['departure_time'])->format('H:i') }}
                </x-slot:departure_time>
                <x-slot:arrival_station> {{ $element['arrival_station'] }} </x-slot:arrival_station>
                <x-slot:carriages_total> {{ $element['carriages_total'] }} </x-slot:carriages_total>
            </x-card>
        @endforeach
    </div>

</body>

</html>
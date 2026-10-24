@props(['is_on_time'])

<div class="card">
    <div class="card-body text-white">
        <span>{{ $slot }}</span>
        <span> {{ $trainCode }}</span>
        <span> {{ $departure_station }}</span>
        <span> {{ $departure_time }}</span>
        
        @if ($is_on_time == true )
        <span> on time </span>
        @else
        <span> {{ mt_rand(1, 40) * 5 }}'  </span>
        @endif
        
        <span> {{ $arrival_station }}</span>
        <span> {{ $carriages_total }}</span>



    </div>
</div>
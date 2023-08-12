@env('local')

    @if($random < 50)
        <p>{{ $random }}は50未満</p>
    @else
        <p>{{ $random }}は50以上</p>
    @endif
    
@endenv

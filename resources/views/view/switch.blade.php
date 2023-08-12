@switch($random)
    @case(5)
        <p>ラッキー</p>
        @break
    @case(4)
        <p>まあまあラッキー</p>
        @break
    @case(3)
        <p>普通</p>
        @break
    @case(2)
        <p>残念</p>
        @break
    @default
        <p>終わってる</p>
@endswitch

@for($i=1; $i<=6; $i++)
    <h{{ $i }}>{{ $i }}番目 </h{{ $i}}>
@endfor
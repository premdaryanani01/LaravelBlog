@extends('layouts.app')

@section('content')
    <h2>{{$title}}</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cum tempore dolor sequi ea officia. Consequatur itaque aliquid excepturi. Voluptates ipsa adipisci architecto blanditiis animi, at iure quia soluta dignissimos. Cum, eius. Perferendis dignissimos, beatae hic reiciendis, ipsa perspiciatis laboriosam obcaecati illo magnam accusamus suscipit eos soluta omnis ut odio.</p>

    @if(count($services))
        <ul>
        @foreach($services as $service)
            <li>{{$service}}</li>            
        @endforeach
        </ul>

    @endif
@endsection

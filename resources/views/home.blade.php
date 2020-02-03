@extends('layouts.app')

@section('content')
    <div class="container">
        CIAO QUESTO E' IL FILE OUTPUT 
    
        @foreach ($categories as $category)
            <p>{{$category -> name}} </p>
        @endforeach

    </div>
@endsection

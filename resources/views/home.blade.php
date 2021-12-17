@extends('layouts.app')

@section ('content')

<div class="heroImage">

</div>


<div class="issues">

    <div class="container">

        @foreach ($issues as $issue)
        <h2>{{$issue['title']}}</h2>
        @endforeach

    </div>

</div>


@endsection
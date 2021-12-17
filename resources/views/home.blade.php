@extends('layouts.app')

@section ('content')

<div class="heroImage">

</div>


<div class="issues bg-dark">

    <div class="container pt-5">
        <div class="row">

            @foreach ($issues as $issue)

            <div class="col-2">

                <div class="myCard">

                    <div class="myCardImg">
                        <img src="{{$issue['thumb']}}" class="card-img-top" alt="...">
                    </div>

                    <div class="myCardText text-light">
                        <h5>{{strtoupper($issue['series'])}}</h5>
                    </div>

                </div>

            </div>
            @endforeach

        </div>






    </div>

</div>


@endsection
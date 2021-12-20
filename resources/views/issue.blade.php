@extends('layouts.app')

@section ('content')

<div class="issueBlock">

    <div class="issueTitle">
        <span>
            {{$comic['title']}}
        </span>

    </div>

    <div class="pricing">
        <div class="leftCol">
            <span>
                U.S. Price: {{$comic['price']}}
            </span>
            <span>
                AVAILABLE
            </span>
        </div>

        <div class="rightCol">
            <span>
                Check Availability
            </span>
        </div>
    </div>

    <div class="issueDesc">
        {{$comic['description']}}

    </div>

</div>

<div class="issueArtists">

    <div class="talents">

        <div class="graphic">

            <span>
                Art by:
            </span>

            <span>
                {{$comic['artists']}}
            </span>

        </div>

        <div class="textual">

            <span>
                Written by:
            </span>

            <span>
                {{$comic['writers']}}
            </span>


        </div>

    </div>

    <div class="specs">

    </div>

</div>

<p>
</p>



@endsection
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
                @foreach ($comic['artists'] as $artist)
                {{$artist}}
                @endforeach
            </span>

        </div>

        <div class="textual">

            <span>
                Written by:
            </span>

            <span>
                @foreach ($comic['artists'] as $artist)
                {{$artist}}
                @endforeach
            </span>


        </div>

        <div class="specs">

            <div class="specSeries">
                <span>
                    Series:
                </span>

                <span>
                    {{$comic['series']}}
                </span>
            </div>

            <div class="specPricing">
                <span>
                    U.S. Price:
                </span>

                <span>
                    {{$comic['price']}}
                </span>
            </div>

            <div class="specOnSale">
                <span>
                    On Sale Date:
                </span>

                <!-- WARNING! This should be on date style, not just a number -->

                <span>
                    {{$comic['sale_date']}}
                </span>
            </div>
        </div>

    </div>


    @endsection
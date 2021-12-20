@extends('layouts.app')

@section ('content')


<div class="container">

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

</div>


<div class="issueArtists">
    <div class="container">

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

    </div>


    <div class="issueShop">
        <div class="container">
            <div class="row">
                <div class="col d-flex align-items-center border border-light">
                    <div class="shopImg me-3">
                        <img src="{{asset ('img/buy-comics-digital-comics.png')}}" class="" alt="">
                    </div>
                    <span>
                        DIGITAL COMICS
                    </span>
                </div>


                <div class="col d-flex align-items-center border border-light">
                    <div class="shopImg me-3">
                        <img src="{{asset ('img/buy-comics-digital-comics.png')}}" class="" alt="">
                    </div>
                    <span>
                        SHOP DC
                    </span>
                </div>


                <div class="col d-flex align-items-center border border-light">
                    <div class="shopImg me-3">
                        <img src="{{asset ('img/buy-comics-digital-comics.png')}}" class="" alt="">
                    </div>
                    <span>
                        COMIC SHOP LOCATOR
                    </span>
                </div>


                <div class="col d-flex align-items-center border border-light">
                    <div class="shopImg me-3">
                        <img src="{{asset ('img/buy-comics-digital-comics.png')}}" class="" alt="">
                    </div>
                    <span>
                        SUBSCRIPTIONS
                    </span>
                </div>

            </div>
        </div>
    </div>



    @endsection
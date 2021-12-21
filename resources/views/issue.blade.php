@extends('layouts.app')

@section ('content')


<div class="issueCoverSection bg-primary">
    <div class="container">
        <div class="issueCover">
            <span class="upper tag text-white">
                COMIC BOOK
            </span>
            <div class="cover border border-white">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
            </div>
            <div class="lower tag text-center text-white">
                VIEW GALLERY
            </div>
        </div>
    </div>


</div>

<div class="container mt-5">

    <div class="issueBlock d-flex">

        <div class="issueText">

            <div class="issueTitle">
                <h2>{{strtoupper($comic['title'])}}</h2>
            </div>

            <div class="issuePricing d-flex align-items-center mt-3">

                <div class="leftCol d-flex justify-content-between flex-grow-1">
                    <span class="p-3 text-white-50">
                        U.S. Price: <span class="text-white">{{$comic['price']}}</span>
                    </span>
                    <span class="p-3 text-white-50">
                        AVAILABLE
                    </span>
                </div>

                <div class="rightCol">
                    <span class="p-3 text-white">
                        Check Availability
                    </span>
                </div>
            </div>

            <div class="issueDesc mt-3 text-muted fw-bold">
                {{$comic['description']}}

            </div>

        </div>

        <div class="issueAdv">
            <div class="text-end">
                ADVERTISEMENT
            </div>
            <img src="{{asset ('img/commercial.jpg')}}" alt="">
        </div>
    </div>

</div>


<div class="issueArtists">

    <div class="container">

        <div class="info d-flex">

            <div class="talents pt-3 me-5">
                <div class="fs-4 border-bottom border-secondary pb-4">
                    Talent
                </div>

                <div class="graphic d-flex pt-3 pb-3 border-bottom border-secondary">

                    <span class="prefix">
                        Art by:
                    </span>

                    <span class="list pe-3 text-primary">
                        @foreach ($comic['artists'] as $artist)
                        {{$artist}}
                        @endforeach
                    </span>

                </div>

                <div class="textual d-flex pt-3 pb-3 border-bottom border-secondary">

                    <span class="prefix">
                        Written by:
                    </span>

                    <span class="list pe-3 text-primary">
                        @foreach ($comic['artists'] as $artist)
                        {{$artist}}
                        @endforeach
                    </span>


                </div>
            </div>

            <div class="specs pt-3">

                <div class="fs-4 pb-4 border-bottom border-secondary">
                    Specs
                </div>

                <div class="specSeries d-flex pt-3 pb-3 border-bottom border-secondary">
                    <span class="w_50">
                        Series:
                    </span>

                    <span class="text-primary ">
                        {{strtoupper($comic['series'])}}
                    </span>
                </div>

                <div class="specPricing d-flex pt-3 pb-3 border-bottom border-secondary">

                    <span class="w_50">
                        U.S. Price:
                    </span>

                    <span>
                        {{$comic['price']}}
                    </span>
                </div>

                <div class="specOnSale d-flex pt-3 pb-3 border-bottom border-secondary">

                    <span class="w_50">
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
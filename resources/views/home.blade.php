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
                        <a href="{{route('issue')}}">
                            <img src="{{$issue['thumb']}}" class="card-img-top" alt="...">
                        </a>
                    </div>

                    <div class="myCardText text-light">
                        <h6>{{strtoupper($issue['series'])}}</h6>
                    </div>



                </div>

            </div>
            @endforeach

        </div>






    </div>

    <div class="d-grid gap-2 col-2 mx-auto pb-4">
        <button class="btn btn-primary" type="button">LOAD MORE</button>
    </div>

</div>

<div class="shop bg-primary pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <div class="shopImg me-3">
                    <img src="{{asset ('img/buy-comics-digital-comics.png')}}" class="" alt="">
                </div>
                <span>
                    DIGITAL COMICS
                </span>
            </div>
            <div class="col d-flex align-items-center">
                <div class="shopImg  me-3">
                    <img src="{{asset ('img/buy-comics-merchandise.png')}}" class="" alt="">
                </div>
                <span>
                    DC MERCHANDISE
                </span>
            </div>
            <div class="col d-flex align-items-center">
                <div class="shopImg me-3">
                    <img src="{{asset ('img/buy-comics-subscriptions.png')}}" class="" alt="">
                </div>
                <span>
                    SUBSCRIPTION
                </span>
            </div>
            <div class="col d-flex align-items-center">
                <div class="shopImg me-3">
                    <img src="{{asset ('img/buy-comics-shop-locator.png')}}" class="" alt="">
                </div>
                <span>
                    COMIC SHOP LOCATION
                </span>
            </div>
            <div class="col d-flex align-items-center">
                <div class="shopImg me-3">
                    <img src="{{asset ('img/buy-dc-power-visa.svg')}}" class="" alt="">
                </div>
                <span>
                    DC POWER VISA
                </span>
            </div>
        </div>
    </div>
</div>


@endsection
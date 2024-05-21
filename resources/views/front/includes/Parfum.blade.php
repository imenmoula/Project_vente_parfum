@extends('front/home')
@section('container')
{{-- les promotions et les parfums ---------------------------------------------------------------------------}}
<section class="combo-section pt-100 pb-70 bg-off-white">
    <div class="container">
        <div class="section-title section-title-default">
            <small>Les Promotions des Nouvelles Parfum</small>
            <h2>Il suffit de choisir parmi les meilleurs</h2>
    </div>
    <div class="row">

@foreach($promotions as $promotion)
    @if($promotion->p && $promotion->p->count() > 0)
        @foreach($promotion->p as $p)
            <div class="col-sm-12 col-lg-6 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="combo-box-two">
                    <div class="combo-two-pos-title"></div>
                    <div class="combo-image-two">
                        <img src="{{ asset('/uploads/parfum/' . $promotion->parfum->image) }}" alt="combo">
                    </div>
                    <div class="combo-two-text">
                        <h3>{{ $promotion->nom_promotio }}</h3> 
                        <a href="" class="btn btn-border btn-small">
                            Commander maintenant <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                    </div>
                    <div class="combo-offer-shape combo-offer-shape-red">
                        <div class="combo-shape-inner">
                            <h1>Prix ancienne : {{ $promotion->p->prix }} dt</h1>
                            <small>Seulement à</small>
                            <h4>{{ $p->pourcentage }}%</h4>
                            <h2>Prix Nouveau : {{ $promotion->p->prix * (1 - $promotion->pourcentage / 100) }} dt</h2>
                            <h1>Date début : {{ $promotion->date_debut }}</h1>
                            <h1>Date fin : {{ $promotion->date_fin }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endforeach

 {{-- end of the promotions and the parfums ---------------------------------------------------}}
<section class="menu-section-bg menu-section-light pt-100 pb-70">
    <div class="container position-relative">
        <div class="section-title section-title-default">
            <small>Parfum</small>
            <h2>Il suffit de choisir parmi les meilleurs</h2>
        </div>
    </div>
    
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="menu-main-carousel-area">
        <div class="menu-main-thumb-nav">
            @foreach($categories as $c)
                <div class="menu-main-thumb-item menu-main-thumb-item-two">
                    <div class="menu-main-thumb-inner">
                        <img src="{{ asset('/uploads/parfum/' . $c->image) }}" alt="parfum">
                        <p>{{ $c->nom }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="menu-main-details-for">
            @foreach($categories as $c)
                <div class="menu-main-details-item">
                    <div class="menu-details-carousel">
                        @foreach($c->parfum as $p)
                            <div class="menu-details-carousel-item">
                                <h3>{{ $p->nom }}</h3>
                                <p>{{ $p->marque}}</p>
                                <p>{{ $p->genre }}</p>
                                <h4 class="menu-price">{{ $p->prix }}Dt</h4>
                                @if($p->qte_stock > 0)
                                    <p class="text-success">En stock</p>
                                @else
                                    <p class="text-danger">Pas en stock</p>
                                @endif
                                <div class="menu-details-carousel-image menu-details-carousel-image-two">
                                    <img src="{{ asset('/uploads/parfum/' . $p->image) }}"  height ="50px" alt="parfum">
                                </div>
                                <form action="{{ route('front.includes.detailParfum',$p->id	) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-yellow">
                                        Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>    
    </div>
</section>

@endsection

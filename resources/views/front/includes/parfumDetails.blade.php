@extends('front/home')

@section('container')
<div class="header-bg header-bg-page">
    <div class="header-padding position-relative">
        <div class="header-page-shape">
            
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Parfum detailller :{{ $parfum->nom }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.home') }}">Acceuil </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Parfum detailller</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="product-details-section pt-100 pb-70 bg-black">
<div class="container">
<div class="row align-items-center">
    <div class="col-sm-12 col-md-12 col-lg-5 pb-30">

        <div class="product-details-item">
            <div class="product-details-slider">
                <div class="product-details-for popup-gallery">
                    <div class="product-for-item">
                        <a
                            href="{{ asset('/uploads/parfum/' . $parfum->image) }} }}"><img
                                src="{{ asset('/uploads/parfum/' . $parfum->image) }}"
                                alt="product"></a>
                    </div>
                    <div class="product-for-item">
                        <a
                            href="{{ asset('/uploads/parfum/' . $parfum->image) }}"><img
                                src="{{ asset('/uploads/parfum/' . $parfum->image) }}"
                                alt="product"></a>
                    </div>
                    <div class="product-for-item">
                        <a
                            href="{{ asset('/uploads/parfum/' . $parfum->image) }}"><img
                                src="{{ asset('/uploads/parfum/' . $parfum->image) }}"
                                alt="product"></a>
                    </div>
                </div>
                <div class="product-details-nav">
                    <div class="product-nav-item">
                        <div class="product-nav-item-inner">
                            <img src="{{ asset('/uploads/parfum/' . $parfum->image) }}"
                                alt="product">
                        </div>
                    </div>
                    <div class="product-nav-item">
                        <div class="product-nav-item-inner">
                            <img src="{{ asset('/uploads/parfum/' . $parfum->image) }}"
                                alt="product">
                        </div>
                    </div>
                    <div class="product-nav-item">
                        <div class="product-nav-item-inner">
                            <img src="{{ asset('/uploads/parfum/' . $parfum->image) }} "
                                alt="product">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 pb-30">
        <div class="product-details-item">
            <div class="product-details-caption">
                <div class="product-status product-status-danger mb-20">

                    @if($parfum->qte_stock > 0)
                        <p style="color: yellow;">En Stock</p>
                    @else
                        <p style="color: red;">Pas en Stock</p>
                    @endif

                </div>

            </div>

            <h3 class="mb-20 color-white">{{ $parfum->nom }}</h3>
            {{-- <h4 class="mb-20 product-id">ID: {{ $parfum->id }}</h4> --}}
            {{-- <div class="review-star mb-20">
                <ul>
                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                    <li class="full-star"><i class="flaticon-star-2"></i></li>
                </ul>

            </div> --}}
            <div class="product-details-price mb-20">
                <h4>Prix: {{ $parfum->prix }}Dt</h4>
            </div>
            <div class="product-details-para mb-20">
                <p>{{ $parfum->description }}</p>
            </div>

            <div class="product-details-para mb-20">
                <p> Volume: {{ $parfum->volume}}</p>
            </div>

            <div class="product-details-para mb-20">
                <p> Marque: {{ $parfum->marque}}</p>
            </div>

            <div class="product-details-para mb-20">
                <p> Genre:{{ $parfum->genre}}</p>
            </div>

            <div class="product-action-info mb-20">
                <div class="d-flex flex-wrap align-items-center
                                    product-quantity">
                    <a href="{{ route('cart.store', $parfum->id) }}" class="btn btn-icon product-quantity-item">
                        Add To Cart
                        <i class="flaticon-shopping-cart-black-shape"></i>
                    </a>
                </div>
                <div id="add_to_cart_msg"></div>
                {{-- <div class="cart-quantity product-quantity-item">
                    <button class="qu-btn dec">-</button>
                    <input type="text" class="qu-input" value="">
                    <button class="qu-btn inc">+</button>
                </div> --}}
            </div>
        </div>
        {{-- <div class="product-action-info">
            <div class="product-add-wishlist">
                <a href="#"><i class="flaticon-heart"></i>Add To Wishlist</a>
        </div> --}}

    </div>
</div>
</div>
</div>
@endsection
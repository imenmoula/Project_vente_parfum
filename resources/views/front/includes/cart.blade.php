@extends('front/home')
@section('container')
<div class="header-bg header-bg-page">
    <div class="header-padding position-relative">
        <div class="header-page-shape">
            
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Panier</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.home') }}">Acceuil </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Panier</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
        <p class="text-green-800">{{ $message }}</p>
        </div>
 @endif

 @if($cart->count() > 0)
<section class="cart-section pt-100 pb-70 bg-black">
    <div class="container">
        <div class="cart-table cart-table-dark">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Parfum</th>
                        <th>prix</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $item)
                    <tr>
                        <td class="cancel">
                            <form id="deleteForm{{$item->id}}" action="{{ route('cart.remove', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{$item->id}})" style="background: black; color: white">
                                    <i class="flaticon-cancel"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <div class="product-table-info">
                                <div class="product-table-thumb">
                                    <img src="{{ asset('uploads/parfum/' . $item->attributes->image) }}" alt="product">
                                </div>
                            </div>
                        </td>
                        <td class="td-product-name">{{ $item->name }}</td>
                        <td>{{ $item->price }}  DT</td>
                        <td>
                            <div class="cart-quantity">
                                <input type="hidden" class="product_id" value="{{ $item->id }}">
                                
                                <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                    <button class="qu-btn dec">+</button>
                                </div>
                                
                                <input type="number" class="qty-input form-control quantity" value="{{ $item->quantity }}" />
                                
                                <div class="input-group-prepend increment-btn changeQuantity" style="cursor: pointer">
                                    <button class="qu-btn inc">+</button>
                                </div>
                            </div>
                            
                        </td>
                        <td class="td-total-price">
                            {{ $item->price *   $item->quantity }}Dt
                        </td>
                    
                    
                </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row justify-content-between align-items-center mt-30">
             <div class="col-sm-12 col-md-7 col-lg-5">
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="cart-update cart-info-item">
                    <a href="{{ route('cart.update') }}" class="btn full-width">
                        Modifier panier 
                    </a>
                </div>
            </div>
        </div>
          
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-6 pb-30 offset-lg-3 offset-md-2">
                <div class="cart-details mt-20">
                    <h3 class="cart-details-title color-white">Panier Totals</h3>
                    <div class="cart-total-box">
                        @foreach($cart as $item)
                        <div class="cart-total-item">
                            <h4>{{ $item->quantity }} x {{ $item->name }}</h4>
                            <p>{{ $item->price }} Dt</p>
                        </div>
                        @endforeach
                        <div class="cart-total-item cart-total-bold">
                            <h4 class="color-white">Total</h4>
                            @php
                                $total = 0;
                                foreach ($cart as $item) {
                                    $total += $item->price * $item->quantity;
                                }
                            @endphp
                            <p>{{ $total }} Dt</p> 
                        </div>
                    </div>
                    <a href="{{ route('front.includes.checkout') }}" class="btn">Commander</a> 
                 </div>
            </div>
        </div>
        
    </div>
</section>

@else
<section class="cart-section pt-100 pb-70 bg-black">
    <div class="container">
        <div class="section-title section-title-default">
            <h2> Panier est vide </h2>
        </div>
    </div>
</section>

@endif
@endsection
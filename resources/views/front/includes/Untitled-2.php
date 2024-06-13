 
 
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
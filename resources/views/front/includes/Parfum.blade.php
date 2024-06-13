@extends('front/home')
@section('container')
    {{-- les promotions et les parfums ------------------------------------------------------------------------- --}}
    <section class="combo-section pt-100 pb-70 bg-off-white">
        <div class="container">
            <div class="section-title section-title-default">
                <small>Les Promotions des Nouvelles Parfum</small>
                <h2>Il suffit de choisir parmi les meilleurs</h2>
            </div>
            <div class="row">

                @foreach ($promotions as $promotion)
                    @if ($promotion->parfum && $promotion->parfum->count() > 0)
                        
                            <div class="col-sm-12 col-lg-6 wow animate__slideInUp" data-wow-duration="1s"
                                data-wow-delay="0.1s">
                                <div class="combo-box-two">
                                    <div class="combo-two-pos-title"></div>
                                    <div class="combo-image-two">
                                        <img src="{{ asset('/uploads/parfum/' . $promotion->parfum->image) }}"
                                            alt="combo">
                                    </div>
                                    <div class="combo-two-text">
                                        <h3>{{ $promotion->nom_promotio }}</h3>
                                        <h5>Prix ancienne : {{ $promotion->parfum->prix }} dt</h5>
                                        
                                        <h5>Date début : {{ $promotion->date_debut }}</h5>
                                        <h5>Date fin : {{ $promotion->date_fin }}</h5>
                                        <a href="" class="btn btn-border btn-small">
                                            Commander maintenant <i class="flaticon-shopping-cart-black-shape"></i>
                                        </a>
                                    </div>
                                    <div class="combo-offer-shape combo-offer-shape-red">
                                        <div class="combo-shape-inner">
                                            
                                                <small>Seulement à</small>
                                                <p> {{ $promotion->parfum->prix * (1 - $promotion->parfum->pourcentage / 100) }} dt</p>
                                              
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>



                <section class="receipe-section pt-100 pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div
                                    class="section-title section-title-left d-flex justify-content-between text-center text-md-start flex-column flex-md-row flex-md-nowrap">
                                    <h2>Top
                                        <Param> Parfum</Param>
                                    </h2>
                                </div>
                                <div class="receipe-grid">


                                    @foreach($categories as $c) 
                                    @foreach($c->parfum as $p)
                                    <div class="receipe-item pb-30">
                                        <div class="receipe-item-inner">
                                            <div class="receipe-image">
                                                <img src="{{ asset('/uploads/parfum/' . $p->image) }}" alt="receipe">
                                            </div>
                                            <div class="receipe-content">
                                                <div class="receipe-info">
                                                    <h3><a href="{{ route('front.includes.detailParfum',$p->id	) }}">{{ $p->nom }}</a></h3>
                                                    <h4><a href="{{ route('front.includes.detailParfum',$p->id	) }}">{{ $c->nom }}</a></h4>

                                                    <h4>{{ $p->prix }}Dt</del></h4>
                                                </div>
                                                <div class="receipe-cart">
                                                    <a href="{{ route('front.includes.detailParfum',$p->id	) }}">
                                                        <i class="flaticon-supermarket-basket"></i>
                                                        <i class="flaticon-supermarket-basket"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     @endforeach
                                      @endforeach
                                    
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-0 pb-30">
                                <div class="food-ad">
                                    <img src="{{ asset('uploads/parfum/images_test.jfif') }}" width="300%" alt="ad">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endsection

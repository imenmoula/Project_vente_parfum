@extends('front/home')
@section('container')
<div class="header-bg header-bg-page">
    <div class="header-padding position-relative"> 
        <div class="container">
            <div class="header-page-content">
                <h1>Commande </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Passe a la commnde </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{{-- ********************************************************************************************************* --}}

<div class="checkout-section pt-100 pb-70 bg-black">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-8 pb-30">
                <div class="checkout-item">
                    <div class="sub-section-title">
                        <h3 class="color-white">Détails de Commande </h3>
                    </div>
                    <div class="checkout-form">
                        <form method="post" action="{{ route('front.store.checkout') }}"> 
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="fname" class="form-control" required
                                                placeholder="Nom*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="lname" class="form-control" placeholder="Prenom*" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="rue" class="form-control"
                                                placeholder="Rue" />
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="address" class="form-control"
                                                placeholder="adresse*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="phone" class="form-control" 
                                                placeholder="Telephone*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control" 
                                                placeholder="Email*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group input-group-textarea">
                                            <textarea name="message" class="form-control" rows="5"
                                                placeholder="Si vous avez une choix personnel ecrivez ici*"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn full-width">Commander</button>
                        </form>
 
                    </div>
                
                </div>
            </div>
 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Fafo">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="HiBootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>Parfum Elegant </title>
    <link rel="icon" href="{{ asset('user/assets/images/logo-black.png') }}" type="image/png"
        sizes="16x16">

    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap-reboot.min.css') }}"
        type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/animate.min.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.theme.default.min.css') }}"
        type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick-theme.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/jquery-ui.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/jquery.timepicker.min.css') }}"
        type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/meanmenu.min.css') }}"
        type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/magnific-popup.min.css') }}"
        type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/icofont.min.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/flaticon.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/settings.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/layers.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/navigation.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/theme-dark.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
        <style>
        img.logo.logo1 {
            height: 88px;
            width: 131px;
        }

        .logout-button {
            background: none;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            color: white;
        }

            </style>

    
</head>

<body>
    @include('partiales.header')

    @section('container')
    @show

    @include('partiales.footer')




    {{-- <div class="cart-modal-wrapper">
        <div class="cart-modal modal-item">
            <div class="cart-modal-header">
                <h3 class="color-white"></h3>
                <div class="cart-modal-close">
                    <i class="flaticon-cancel"></i>
                </div>
            </div>
             <div class="cart-modal-body">
                <h2 class="color-white">Ma demmande </h2>
                @foreach($cart as $items)
                <div class="cart-modal-product">
                    <div class="cart-modal-thumb">
                        <a href="shop-details.html">
                            <img src="{{ asset('assets/uploads/menus/' . $items->attributes->image) }}" alt="product">
                        </a>
                    </div>
                    <div class="cart-modal-content">
                        <h4><a href="shop-details.html">{{ $items->name }}</a></h4>
                        <div class="cart-modal-action">
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-quantity">
                                    <p>{{ $items->quantity }}</p>
                                    <p>x</p>
                                    <p class="cart-quantity-price">{{ $items->price }} DT</p>
                                </div>
                            </div>
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-delete">
                                    <a href="#"><i class="icofont-ui-delete"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="cart-modal-total">
                    <p>Total</p>
                    <h3> {{  $cartTotal }} DT</h3>
                </div>
                <div class="cart-modal-button">
                    <a href="{{ route('cart.list') }}" class="btn full-width">Voir le panier </a>
                    <a href="{{ route('front.includes.checkout')  }}" class="btn btn-yellow full-width">Commander</a>
                </div>


            </div>
        </div>
    </div>--}} 

   
    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>


    <script src="{{ asset('user/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('user/assets/js/jquery.timepicker.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.themepunch.tools.min.js') }}"></script>

    <script
        src="{{ asset('user/assets/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script
        src="{{ asset('user/assets/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script
        src="{{ asset('user/assets/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script
        src="{{ asset('user/assets/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script
        src="{{ asset('user/assets/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script
        src="{{ asset('user/assets/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script
        src="{{ asset('user/assets/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script
        src="{{ asset('user/assets/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('user/assets/js/extensions/revolution.extension.video.min.js') }}">
    </script>

    <script src="{{ asset('user/assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('user/assets/js/jquery.meanmenu.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- @if($cart->count() > 0)
    <script>
        function confirmDelete(itemId) {
            Swal.fire({
                title: 'Êtes-vous sûr(e) ?',
                text: "Cette action ne peut pas être annulée. Vous allez supprimer ce plat ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprimer !'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form when confirmed
                    document.getElementById('deleteForm' + itemId).submit();
                }
            });
        }
    </script>
    @endif --}}

    <script>
        // Check if there's a success flash message
        @if(session('success'))
            // Display SweetAlert with success message
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès!',
                    text: '{!! addslashes(session('success')) !!}',
                });
            });
        @endif

        @if(session('error'))
            // Display SweetAlert with success message
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '{!! addslashes(session('error')) !!}',
                });
            });
        @endif
    </script>
</body>

<!-- Mirrored from templates.hibootstrap.com/fafo/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2024 11:54:59 GMT -->

</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <body>
   
        <div class="row">
            <section class="vh-100" style="background-color: #9A616D;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-xl-10">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="row g-0">
                                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                                        <img src="{{ asset('uploads/parfum/2.jpg') }}" hegith="200%" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                    </div>
                                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                        <div class="card-body p-4 p-lg-5 text-black">
                                            
                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                                <span class="h1 fw-bold mb-0">Parfum élégant</span>
                                            </div>
            
                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inscrivez-vous</h5>
            
                                            <form action="{{route('register-user')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @if (Session::has('success'))
                                                    <div class="alert alert-success">
                                                        {{Session::get('success')}}
                                                    </div>
                                                @endif
                                                @if (Session::has('fail'))
                                                <div class="alert alert-danger">
                                                    {{Session::get('fail')}}
                                                </div>
                                            @endif
                                                <div class="form-group">
                                                    <label for="name">Full Name</label>
                                                    <input type="text" name="name" class="form-control">
                                                    <span class="text-danger">
                                                        @error('name')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control">
                                                    <span class="text-danger">
                                                        @error('email')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control">
                                                    <span class="text-danger">
                                                        @error('password')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>

                                                

                                               
                            
                                                <br>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-dark btn-lg btn-block">S'inscrire</button>
                                                </div>
                                                <br>
                                              
                                            </form>
                                            
                                           
            
                                          
                                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Vous avez déja un compte <a href="login" style="color: #393f81;">Connexion</a></p>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
       
        
    
    
  </body>
</html>
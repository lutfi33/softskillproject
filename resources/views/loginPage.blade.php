<!-- Section: Design Block -->

@include('layouts.head')
    <section class="text-center text-lg-start">
        <style>
        .cascading-right {
            margin-right: -50px;
        }
    
        @media (max-width: 991.98px) {
            .cascading-right {
            margin-right: 0;
            }
        }
        </style>
    
        <!-- Jumbotron -->
        <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-4"></div>
            
            <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="card cascading-right" style="
                background: hsla(0, 0%, 100%, 0.55);
                backdrop-filter: blur(30px);
                ">
                <div class="card-body p-5 shadow-5 text-center">
                    <h2 class="fw-bold mb-5">Login</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        @csrf
                        <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1">Username/NIM/NIDN</label>
                            <input type="text" id="form3Example1" value="{{ old('username')}} " name="username" class="form-control" />
                            </div>
                        </div>
        
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" name="password" class="form-control" />
                        </div>
        
        
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                        Sign In
                        </button>
        
                    </form>

                    <a href="/forgotpassword" class="text-danger">Forgot Password</a>
                </div>
                <div class="col-lg-4"></div>
            </div>
            </div>
    
        </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->

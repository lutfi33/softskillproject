<!-- Section: Design Block -->

@include('layouts.head');
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
                    <h2 class="fw-bold mb-5">Register</h2>
                    <form method="POST">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        @csrf
                        <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="fullname">Full Name</label>
                            <input type="text" id="fullname" value="{{ old('fullName')}} " name="fullName" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="idpengguna">NIM/NIDN/IDUSERSUPER</label>
                            <input type="text" id="idpengguna" value="{{ old('idpengguna')}} " name="idpengguna" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1">Username</label>
                            <input type="text" id="form3Example1" value="{{ old('username')}} " name="username" class="form-control" required />
                            </div>
                        </div>
        
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" name="password" class="form-control" required />
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="loginType" class="form-label">Login As:</label>
                                <select class="form-control" id="loginType" name="loginType" required>
                                    <option value="user">Peserta</option>
                                    <option value="fasil">Fasilitator</option>
                                    <option value="admin">Superuser</option>
                                </select>
                        </div>
        
        
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                        Sign Up
                        </button>
        
                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Udah Punya Akun?</p>
                            <a href="/">Login</a>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4"></div>
            </div>
            </div>
    
        </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->

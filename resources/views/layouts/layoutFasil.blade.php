<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Softskill</title>
        <link rel="shortcut icon" href="img/logosoftskill.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('/css-ds/styles.css') }}" rel="stylesheet" type="text/css" >
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed bg-main">
        <nav class="sb-topnav navbar navbar-expand shadow-small-2 navbar-light m-2 radius-mid bg-white">
            <!-- Navbar Brand-->
            <img src="img/logosoftskill.png" class="navbar-brand img-fluid p-5" alt="logo">
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="input-group d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <ul class="d-flex list-unstyled justify-content-center text-green pt-3 fs-7">
                    <li><a class="text-decoration-none text-dark" href="">Beranda</a></li>
                    <li class="px-5"><a class="text-decoration-none text-dark" href="">Tentang</a></li>
                    <li><a class="text-decoration-none text-dark" href="">FAQ</a></li>
                </ul>
            </div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        <img src="img/profile-icon.png" class="img-profile rounded-circle" alt="profile">
                        <!-- <i class="fas fa-user fa-fw"></i> -->
                    
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow" aria-labelledby="navbarDropdown shadow">
                        <li><a class="dropdown-item" href="#!">Profil</a></li>
                        <li><a class="dropdown-item" href="#!">Setting</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item text-danger" href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light ms-2 mb-2 bg-transparent" id="sidenavAccordion">
                    <div class="sb-sidenav-menu mt-5 bg-green-2 pt-5 radius-mid">

                        <div class="profie-info text-center">
                            <img src="img/profile-icon.png" class="img-fluid rounded-circle" style="width: 70px;" alt="profile-icon">
                            <p class="text-light fw-bold mt-2"> {{ Auth::user()->fullName}}</p>
                            <p class="text-warning -mt-4" style="margin-top: -13px;"> {{ Auth::user()->idpengguna}}</p>
                            <p class="bg-info mx-3 py-1 rounded fw-bold">{{ Auth::user()->role}}</p>
                        </div>
                        <div class="hr"></div>
                        <div class="nav">
                            <a class="nav-link mb-2 text-light " href="/allData">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Data Nilai
                            </a>
                            <a class="nav-link mb-2 text-light " href="/penilaian">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Penilaian
                            </a>
                            <a class="nav-link mb-2 text-light " href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tanya Developer?
                            </a>

                        </div>
                    </div>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> -->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main class="bg-main mb-3">
                    <div class="container-fluid px-4 mt-5">
                        <div class="row mt-3 bg-white radius-mid shadow">
                            @yield('konten')
                        </div>
                    </div>
                    {{-- <div class="container-fluid px-4">
                        <h1 class="mt-5">Beranda</h1>
                        
                        <div class="row mt-3 bg-white radius-mid shadow">
                            <div class="col-12 p-3 text-center">
                                <img src="asset/img/welcome.svg" alt="welcome img" class="img-fluid">
                                <h3 class="mt-4">Hallo hai... Lutfi Hermansah</h3>
                                <div class="hr"></div>
                                <h4 class="mt-5">Selamat datang di INSTUDIO</h4>

                                <p>Ayo buat webiste kamu tanpa ribet dengan instudio, Etsss.. Jika masih binggung developer
                                    bisa membantu kamu 24/7 loh....</p>
                                <a href="" class="btn btn-green-2">Pilih Website</a>
                            </div>
                        </div>
                    </div> --}}
                </main>
                <footer class="py-4 bg-main mt-auto">
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="text-muted">Copyright &copy; SOFTSKILL 2023</div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js-ds/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>

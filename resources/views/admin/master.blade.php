<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title') | E-mart</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('backEnd') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('backEnd') }}/assets/vendor/fonts/boxicons.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backEnd') }}/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backEnd') }}/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('backEnd') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backEnd') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('backEnd') }}/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('backEnd') }}/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('backEnd') }}/assets/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="{{ route('dashboard') }}" class="app-brand-link">
                    <span class="app-brand-text demo menu-text fw-bold ms-2 text-uppercase">E-Mart</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item active">
                    <a href="{{ route('dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

                <!-- Layouts -->
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Category</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon fa-solid fa-house"></i>
                        <div data-i18n="Account Settings">Category Module</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('all-category') }}" class="menu-link">
                                <div data-i18n="Account">All Category</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('add-category') }}" class="menu-link">
                                <div data-i18n="Notifications">Add Category</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Components -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">SubCategory</span></li>
                <!-- Cards -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon fa-solid fa-house"></i>
                        <div data-i18n="Account Settings">Subcategory</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('all-subcategory') }}" class="menu-link">
                                <div data-i18n="Account">All Subcategory</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('add-subcategory') }}" class="menu-link">
                                <div data-i18n="Notifications">Add Subcategory</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Forms & Tables -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Products</span></li>
                <!-- Forms -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon fa-solid fa-house"></i>
                        <div data-i18n="Account Settings">Product</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('all-product') }}" class="menu-link">
                                <div data-i18n="Account">All Product</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('add-product') }}" class="menu-link">
                                <div data-i18n="Notifications">Add Product</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Misc -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Order</span></li>
                <li class="menu-item">
                    <a href="cards-basic.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-collection"></i>
                        <div data-i18n="Basic">Oder Process</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input
                                type="text"
                                class="form-control border-0 shadow-none ps-1 ps-sm-2"
                                placeholder="Search..."
                                aria-label="Search..." />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{ asset('backEnd') }}/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="{{ asset('backEnd') }}/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-medium d-block">{{ Auth::user()->name }}</span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logOut').submit();">
                                        <form action="{{ route('logout') }}" method="POST" id="logOut">
                                            @csrf
                                        </form>
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                @yield('content')
                <!-- / Content -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="{{ asset('backEnd') }}/assets/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('backEnd') }}/assets/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('backEnd') }}/assets/vendor/js/bootstrap.js"></script>
<script src="{{ asset('backEnd') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ asset('backEnd') }}/assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('backEnd') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset('backEnd') }}/assets/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('backEnd') }}/assets/js/dashboards-analytics.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>


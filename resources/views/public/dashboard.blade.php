@extends('../layouts.app')
@section('content')

 <div id="layout-wrapper">

<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                        <div data-simplebar style="max-height: 320px;">
                            <!-- item-->
                            <div class="dropdown-header">
                                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                            </div>

                            <div class="dropdown-item bg-transparent text-wrap">
                                <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                            </div>
                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                <span>Analytics Dashboard</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                <span>Help Center</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                <span>My account settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">Angela Bernier</h6>
                                            <span class="fs-11 mb-0 text-muted">Manager</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">David Grasso</h6>
                                            <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">Mike Bunch</h6>
                                            <span class="fs-11 mb-0 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="text-center pt-3 pb-1">
                            <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown ms-1 topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                            <img src="assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                            <img src="assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">Española</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                            <img src="assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                            <img src="assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">Italiana</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                            <img src="assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">русский</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                            <img src="assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">中国人</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                            <img src="assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">français</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                            <img src="assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">Arabic</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-category-alt fs-22'></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                        <i class="ri-arrow-right-s-line align-middle"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="p-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/github.png" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                        <span>Mail Chimp</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/slack.png" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-shopping-bag fs-22'></i>
                        <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                </div>
                                <div class="col-auto">
                                    <span class="badge bg-warning-subtle text-warning fs-13"><span class="cartitem-badge">7</span>
                                        items</span>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 300px;">
                            <div class="p-2">
                                <div class="text-center empty-cart" id="empty-cart">
                                    <div class="avatar-md mx-auto my-3">
                                        <div class="avatar-title bg-info-subtle text-info fs-36 rounded-circle">
                                            <i class='bx bx-cart'></i>
                                        </div>
                                    </div>
                                    <h5 class="mb-3">Your Cart is Empty!</h5>
                                    <a href="apps-ecommerce-products.html" class="btn btn-success w-md mb-3">Shop Now</a>
                                </div>
                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                                                    T-Shirts</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>10 x $32</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood Chair</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>5 x $18</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">
                                                    Borosil Paper Cup</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>3 x $250</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Gray
                                                    Styled T-Shirt</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>1 x $1250</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird Helmet</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>2 x $495</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                            <div class="d-flex justify-content-between align-items-center pb-3">
                                <h5 class="m-0 text-muted">Total:</h5>
                                <div class="px-2">
                                    <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                </div>
                            </div>

                            <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
                                Checkout
                            </a>
                        </div>
                    </div>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-bell fs-22'></i>
                        <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                        <div class="dropdown-head bg-primary bg-pattern rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                    </div>
                                    <div class="col-auto dropdown-tabs">
                                        <span class="badge bg-light-subtle text-body fs-13"> 4 New</span>
                                    </div>
                                </div>
                            </div>

                            <div class="px-2 pt-2">
                                <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                            All (4)
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false">
                                            Messages
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false">
                                            Alerts
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="tab-content position-relative" id="notificationItemsTabContent">
                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3 flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                        Optimization <span class="text-secondary">reward</span> is
                                                        ready!
                                                    </h6>
                                                </a>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                    <label class="form-check-label" for="all-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                        graph 🔔.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                    <label class="form-check-label" for="all-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3 flex-shrink-0">
                                                <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                    <i class='bx bx-message-square-dots'></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                    </h6>
                                                </a>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                    <label class="form-check-label" for="all-notification-check03"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                    <label class="form-check-label" for="all-notification-check04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-3 text-center view-all">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">
                                                    <label class="form-check-label" for="messages-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                        graph 🔔.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02">
                                                    <label class="form-check-label" for="messages-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                                    </p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03">
                                                    <label class="form-check-label" for="messages-notification-check03"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04">
                                                    <label class="form-check-label" for="messages-notification-check04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-3 text-center view-all">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab"></div>

                            <div class="notification-actions" id="notification-actions">
                                <div class="d-flex text-muted justify-content-center">
                                    Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</header>

<!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <!-- <a href="index.html" class="logo logo-light"> -->
                 <!--    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span> -->
                   <!--  <span class="logo-lg">
                        <img src="" alt="" height="17">
                    </span>
                </a> -->
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>



            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <!-- <li class="menu-title"><span data-key="t-menu">Menu</span></li> -->
                        <li class="nav-item">
                            <a class="nav-link student_dashboard_link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                                  <path d="M13.6899 0.603756C13.2132 0.213337 12.6161 0 12 0C11.3839 0 10.7868 0.213337 10.3101 0.603756L1.01012 8.18634C0.693676 8.44578 0.438878 8.77234 0.264176 9.14238C0.0894744 9.51241 -0.000760351 9.91667 4.826e-06 10.3259V24.08C4.826e-06 25.5955 1.20918 26.8237 2.7 26.8237H5.77059C7.26212 26.8237 8.47059 25.5955 8.47059 24.08V18.0002C8.47059 17.5322 8.65651 17.0833 8.98746 16.7524C9.31841 16.4214 9.76727 16.2355 10.2353 16.2355H13.7647C14.2327 16.2355 14.6816 16.4214 15.0125 16.7524C15.3435 17.0833 15.5294 17.5322 15.5294 18.0002V24.08C15.5294 25.5955 16.7379 26.8237 18.2294 26.8237H21.3C22.7915 26.8237 24 25.5955 24 24.08V10.3259C24.0008 9.91667 23.9105 9.51241 23.7358 9.14238C23.5611 8.77234 23.3063 8.44578 22.9899 8.18634L13.6899 0.603756Z" fill="#B8BED9"/>
                                </svg><span data-key="t-dashboards">Asosiy</span>
                            </a>
                            
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link student_dashboard_link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="27" height="20" viewBox="0 0 27 20" fill="none">
                                  <path d="M7.66335 11.7857V8.21429C7.66335 7.62254 7.11496 7.14286 6.43847 7.14286H1.26675C0.590261 7.14286 0.0418701 7.62254 0.0418701 8.21429V11.7857C0.0418701 12.3775 0.590261 12.8571 1.26675 12.8571H6.43847C7.11496 12.8571 7.66335 12.3775 7.66335 11.7857ZM0.0418701 4.64286V1.07143C0.0418701 0.479687 0.590261 0 1.26675 0H6.43847C7.11496 0 7.66335 0.479687 7.66335 1.07143V4.64286C7.66335 5.2346 7.11496 5.71428 6.43847 5.71428H1.26675C0.590261 5.71428 0.0418701 5.2346 0.0418701 4.64286ZM6.43847 20H1.26675C0.590261 20 0.0418701 19.5203 0.0418701 18.9286V15.3571C0.0418701 14.7654 0.590261 14.2857 1.26675 14.2857H6.43847C7.11496 14.2857 7.66335 14.7654 7.66335 15.3571V18.9286C7.66335 19.5203 7.11496 20 6.43847 20ZM10.5214 0H24.9478C25.6243 0 26.1727 0.479687 26.1727 1.07143V4.64286C26.1727 5.2346 25.6243 5.71428 24.9478 5.71428H10.5214C9.84492 5.71428 9.29653 5.2346 9.29653 4.64286V1.07143C9.29653 0.479687 9.84492 0 10.5214 0ZM9.29653 18.9286V15.3571C9.29653 14.7654 9.84492 14.2857 10.5214 14.2857H24.9478C25.6243 14.2857 26.1727 14.7654 26.1727 15.3571V18.9286C26.1727 19.5203 25.6243 20 24.9478 20H10.5214C9.84492 20 9.29653 19.5203 9.29653 18.9286ZM10.5214 7.14286H24.9478C25.6243 7.14286 26.1727 7.62254 26.1727 8.21429V11.7857C26.1727 12.3775 25.6243 12.8571 24.9478 12.8571H10.5214C9.84492 12.8571 9.29653 12.3775 9.29653 11.7857V8.21429C9.29653 7.62254 9.84492 7.14286 10.5214 7.14286Z" fill="#B8BED9"/>
                                </svg>
                                <span data-key="t-apps">Fanlar ro'yhati</span>
                            </a>
                           
                        </li>

                        <li class="nav-item">
                            <a class="nav-link student_dashboard_link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M0 4.5C0 3.30653 0.474106 2.16193 1.31802 1.31802C2.16193 0.474106 3.30653 0 4.5 0H16.5C17.6935 0 18.8381 0.474106 19.682 1.31802C20.5259 2.16193 21 3.30653 21 4.5V9.6015C20.3158 9.20648 19.5397 8.99855 18.7497 8.99861C17.9596 8.99867 17.1835 9.20672 16.4994 9.60185C15.8153 9.99697 15.2472 10.5652 14.8524 11.2495C14.4575 11.9338 14.2498 12.71 14.25 13.5H12C11.8011 13.5 11.6103 13.579 11.4697 13.7197C11.329 13.8603 11.25 14.0511 11.25 14.25C11.25 14.4489 11.329 14.6397 11.4697 14.7803C11.6103 14.921 11.8011 15 12 15H14.505C14.7036 15.5597 15.011 16.0746 15.4095 16.515C14.4777 16.6 13.6113 17.0302 12.9804 17.7213C12.3496 18.4124 11.9999 19.3143 12 20.25C12 20.5005 12.0195 20.751 12.057 21H4.5C3.30653 21 2.16193 20.5259 1.31802 19.682C0.474106 18.8381 0 17.6935 0 16.5V4.5ZM9.531 6.156C9.67183 6.01517 9.75095 5.82416 9.75095 5.625C9.75095 5.42584 9.67183 5.23483 9.531 5.094C9.39017 4.95317 9.19916 4.87405 9 4.87405C8.80084 4.87405 8.60983 4.95317 8.469 5.094L6.351 7.212L5.7555 6.669C5.60754 6.54253 5.41621 6.47854 5.22193 6.49055C5.02766 6.50256 4.84566 6.58962 4.7144 6.73335C4.58314 6.87707 4.5129 7.0662 4.51851 7.26076C4.52413 7.45533 4.60517 7.64009 4.7445 7.776L5.8695 8.8035C6.01204 8.93328 6.19908 9.00319 6.3918 8.99872C6.58453 8.99425 6.76813 8.91575 6.9045 8.7795L9.5295 6.1545L9.531 6.156ZM9.531 12.594C9.46133 12.5242 9.37857 12.4687 9.28745 12.4309C9.19633 12.3931 9.09865 12.3737 9 12.3737C8.90135 12.3737 8.80367 12.3931 8.71255 12.4309C8.62143 12.4687 8.53867 12.5242 8.469 12.594L6.351 14.712L5.7555 14.169C5.60754 14.0425 5.41621 13.9785 5.22193 13.9905C5.02766 14.0026 4.84566 14.0896 4.7144 14.2333C4.58314 14.3771 4.5129 14.5662 4.51851 14.7608C4.52413 14.9553 4.60517 15.1401 4.7445 15.276L5.8695 16.3035C6.01185 16.4335 6.19879 16.5037 6.3915 16.4995C6.58422 16.4953 6.76793 16.417 6.9045 16.281L9.5295 13.656C9.6701 13.5154 9.74909 13.3246 9.74909 13.1257C9.74909 12.9269 9.6701 12.7361 9.5295 12.5955L9.531 12.594ZM11.25 6.75C11.25 6.94891 11.329 7.13968 11.4697 7.28033C11.6103 7.42098 11.8011 7.5 12 7.5H15.75C15.9489 7.5 16.1397 7.42098 16.2803 7.28033C16.421 7.13968 16.5 6.94891 16.5 6.75C16.5 6.55109 16.421 6.36032 16.2803 6.21967C16.1397 6.07902 15.9489 6 15.75 6H12C11.8011 6 11.6103 6.07902 11.4697 6.21967C11.329 6.36032 11.25 6.55109 11.25 6.75ZM21.75 13.5C21.75 14.2956 21.4339 15.0587 20.8713 15.6213C20.3087 16.1839 19.5456 16.5 18.75 16.5C17.9544 16.5 17.1913 16.1839 16.6287 15.6213C16.0661 15.0587 15.75 14.2956 15.75 13.5C15.75 12.7044 16.0661 11.9413 16.6287 11.3787C17.1913 10.8161 17.9544 10.5 18.75 10.5C19.5456 10.5 20.3087 10.8161 20.8713 11.3787C21.4339 11.9413 21.75 12.7044 21.75 13.5ZM24 20.25C24 22.1175 22.5 24 18.75 24C15 24 13.5 22.125 13.5 20.25C13.5 19.6533 13.7371 19.081 14.159 18.659C14.581 18.2371 15.1533 18 15.75 18H21.75C22.3467 18 22.919 18.2371 23.341 18.659C23.7629 19.081 24 19.6533 24 20.25Z" fill="#B8BED9"/>
                                </svg>
                               
                               <span data-key="t-layouts">Mustaqil ta'lim</span> 
                            </a>
                            
                        </li> <!-- end Dashboard Menu -->

                      

                        <li class="nav-item">
                            <a class="nav-link student_dashboard_link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 20 24" fill="none">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.09918 1.2C3.76883 1.95694 3.59886 2.77411 3.59998 3.6C3.59998 4.23652 3.85284 4.84697 4.30293 5.29706C4.75302 5.74715 5.36346 6 5.99998 6H13.2C13.8365 6 14.447 5.74715 14.897 5.29706C15.3471 4.84697 15.6 4.23652 15.6 3.6C15.6 2.7468 15.4224 1.9344 15.1008 1.2H16.8C17.4365 1.2 18.047 1.45286 18.497 1.90295C18.9471 2.35303 19.2 2.96348 19.2 3.6V21.6C19.2 22.2365 18.9471 22.847 18.497 23.2971C18.047 23.7471 17.4365 24 16.8 24H2.39998C1.76346 24 1.15302 23.7471 0.702928 23.2971C0.252841 22.847 -1.52588e-05 22.2365 -1.52588e-05 21.6V3.6C-1.52588e-05 2.96348 0.252841 2.35303 0.702928 1.90295C1.15302 1.45286 1.76346 1.2 2.39998 1.2H4.09918ZM9.59998 14.4H5.99998C5.68172 14.4 5.3765 14.5264 5.15146 14.7515C4.92641 14.9765 4.79998 15.2817 4.79998 15.6C4.79998 15.9183 4.92641 16.2235 5.15146 16.4485C5.3765 16.6736 5.68172 16.8 5.99998 16.8H9.59998C9.91824 16.8 10.2235 16.6736 10.4485 16.4485C10.6736 16.2235 10.8 15.9183 10.8 15.6C10.8 15.2817 10.6736 14.9765 10.4485 14.7515C10.2235 14.5264 9.91824 14.4 9.59998 14.4ZM13.2 9.6H5.99998C5.69413 9.60034 5.39994 9.71746 5.17754 9.92742C4.95514 10.1374 4.8213 10.4243 4.80338 10.7297C4.78545 11.035 4.88479 11.3357 5.0811 11.5702C5.27741 11.8047 5.55587 11.9555 5.85958 11.9916L5.99998 12H13.2C13.5182 12 13.8235 11.8736 14.0485 11.6485C14.2736 11.4235 14.4 11.1183 14.4 10.8C14.4 10.4817 14.2736 10.1765 14.0485 9.95147C13.8235 9.72643 13.5182 9.6 13.2 9.6ZM9.59998 3.89558e-06C10.1066 -0.0007426 10.6076 0.105805 11.0701 0.312636C11.5326 0.519466 11.946 0.82189 12.2832 1.2C12.7968 1.7736 13.128 2.5116 13.1892 3.3264L13.2 3.6H5.99998C5.99998 2.73 6.30838 1.932 6.82198 1.3104L6.91678 1.2C7.57678 0.463204 8.53438 3.89558e-06 9.59998 3.89558e-06Z" fill="#B8BED9"/>
                                </svg>
                               <span data-key="t-authentication">Oraliq nazorat</span>
                            </a>
                            
                        </li>

                        <li class="nav-item">
                            <a class="nav-link student_dashboard_link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">
                                  <path d="M2.2857 22.8571C1.65713 22.8571 1.11884 22.6331 0.670844 22.1851C0.222844 21.7371 -0.000775223 21.1992 -1.33185e-05 20.5714V4.57143C-1.33185e-05 3.94286 0.223987 3.40457 0.671987 2.95657C1.11999 2.50857 1.65789 2.28495 2.2857 2.28571H3.42856V0H5.71427V2.28571H14.8571V0H17.1428V2.28571H18.2857C18.9143 2.28571 19.4526 2.50971 19.9006 2.95771C20.3486 3.40571 20.5722 3.94362 20.5714 4.57143V11.4286H18.2857V9.14286H2.2857V20.5714H10.2857V22.8571H2.2857ZM18.2857 25.1429C16.8952 25.1429 15.6807 24.7097 14.6423 23.8434C13.6038 22.9771 12.9516 21.8865 12.6857 20.5714H14.4571C14.7047 21.4095 15.1764 22.0952 15.872 22.6286C16.5676 23.1619 17.3722 23.4286 18.2857 23.4286C19.3905 23.4286 20.3333 23.0381 21.1143 22.2571C21.8952 21.4762 22.2857 20.5333 22.2857 19.4286C22.2857 18.3238 21.8952 17.381 21.1143 16.6C20.3333 15.819 19.3905 15.4286 18.2857 15.4286C17.7333 15.4286 17.219 15.5284 16.7428 15.728C16.2667 15.9276 15.8476 16.2088 15.4857 16.5714H17.1428V18.2857H12.5714V13.7143H14.2857V15.3429C14.8 14.8476 15.4 14.4522 16.0857 14.1566C16.7714 13.861 17.5047 13.7135 18.2857 13.7143C19.8667 13.7143 21.2145 14.2716 22.3291 15.3863C23.4438 16.501 24.0007 17.8484 24 19.4286C24 21.0095 23.4427 22.3573 22.328 23.472C21.2133 24.5867 19.8659 25.1436 18.2857 25.1429Z" fill="#B8BED9"/>
                                </svg>
                               <span data-key="t-pages">Qayta topshirish</span>
                            </a>
                            
                        </li>

                        <li class="nav-item">
                            <a class="nav-link student_dashboard_link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="" aria-controls="sidebarLanding">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                  <path d="M18.5996 3.04048C18.5462 3.37381 18.5196 3.70715 18.5196 4.04048C18.5196 7.04048 20.9462 9.46581 23.9329 9.46581C24.2662 9.46581 24.5862 9.42715 24.9196 9.37382V20.1325C24.9196 24.6538 22.2529 27.3338 17.7196 27.3338H7.86758C3.33291 27.3338 0.666245 24.6538 0.666245 20.1325V10.2671C0.666245 5.73382 3.33291 3.04048 7.86758 3.04048H18.5996ZM18.8676 11.1471C18.5062 11.1071 18.1476 11.2671 17.9329 11.5605L14.7076 15.7338L11.0129 12.8271C10.7862 12.6538 10.5196 12.5858 10.2529 12.6138C9.98758 12.6538 9.74758 12.7991 9.58624 13.0125L5.64091 18.1471L5.55958 18.2671C5.33291 18.6925 5.43958 19.2391 5.83958 19.5338C6.02624 19.6538 6.22624 19.7338 6.45291 19.7338C6.76091 19.7471 7.05291 19.5858 7.23958 19.3338L10.5862 15.0258L14.3862 17.8805L14.5062 17.9591C14.9329 18.1858 15.4662 18.0805 15.7729 17.6791L19.6262 12.7071L19.5729 12.7338C19.7862 12.4405 19.8262 12.0671 19.6796 11.7338C19.5342 11.4005 19.2129 11.1738 18.8676 11.1471ZM24.1197 0.666748C25.893 0.666748 27.333 2.10675 27.333 3.88008C27.333 5.65342 25.893 7.09342 24.1197 7.09342C22.3464 7.09342 20.9064 5.65342 20.9064 3.88008C20.9064 2.10675 22.3464 0.666748 24.1197 0.666748Z" fill="#B8BED9"/>
                                </svg>
                                <span data-key="t-landing">Natijalarni ko'rish</span>
                            </a>
                            
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->

         <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col">

                            <div class="h-100">

                                <div class="row float-end p-2">
                                     <div class="col-auto float-end">
                                        <button type="button float-end" class="btn btn-soft-info btn-icon waves-effect waves-light layout-rightside-btn"><i class="ri-pulse-line"></i></button>
                                    </div>
                                </div>
                                <div class="row " >
                                    <!-- Dark Variant -->
                                    <div class="card radius-5 " style="border-radius: 24px;background: #4062FF;box-shadow: 0px 0px 40px 0px rgba(48, 73, 191, 0.04); height: 300px;">
                                         <!-- <div class="col-md-8">
                                            <div class="row"> -->
                                              
                                                <div id="carouselExampleDark" class="carousel carousel-dark slide text-white" data-bs-ride="carousel">
                                                    <div class="carousel-indicators ">
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>

                                                    <div class="carousel-inner">

                                                    <div class="carousel-item active" data-bs-interval="3000">
                                                      <span  class="advertisementText d-block text-center"> <p class="p-5 mt-5 ">Yangi test sinovlari boshlandi Yangi test sinovlari boshlandi Yangi test sinovlari boshlandi</p class=" "> </span>
                                                       <!-- <div class="carouselButton"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                                            <path d="M17.9094 7.85331C18.3897 8.10872 18.7914 8.49 19.0716 8.95629C19.3517 9.42259 19.4997 9.95632 19.4997 10.5003C19.4997 11.0443 19.3517 11.578 19.0716 12.0443C18.7914 12.5106 18.3897 12.8919 17.9094 13.1473L5.09737 20.1143C3.03437 21.2363 0.500366 19.7763 0.500366 17.4683V3.53331C0.500366 1.22331 3.03437 -0.235693 5.09737 0.885307L17.9094 7.85331Z" fill="#F1F8FF"/>
                                                            </svg><span>Qatnashish</span>
                                                        </div> -->
                                                      </div>

                                                      <div class="carousel-item active" data-bs-interval="3000">
                                                      <span  class="advertisementText d-block text-center"> <h2>Yangi test sinovlari boshlandi Yangi test sinovlari boshlandi Yangi test sinovlari boshlandi</h2> </span>
                                                       <!-- <div class="carouselButton"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                                            <path d="M17.9094 7.85331C18.3897 8.10872 18.7914 8.49 19.0716 8.95629C19.3517 9.42259 19.4997 9.95632 19.4997 10.5003C19.4997 11.0443 19.3517 11.578 19.0716 12.0443C18.7914 12.5106 18.3897 12.8919 17.9094 13.1473L5.09737 20.1143C3.03437 21.2363 0.500366 19.7763 0.500366 17.4683V3.53331C0.500366 1.22331 3.03437 -0.235693 5.09737 0.885307L17.9094 7.85331Z" fill="#F1F8FF"/>
                                                            </svg><span>Qatnashish</span>
                                                        </div> -->
                                                      </div>

                                                      <div class="carousel-item active" data-bs-interval="3000">
                                                      <span  class="advertisementText d-block text-center"> <h2>Yangi test sinovlari boshlandi Yangi test sinovlari boshlandi Yangi test sinovlari boshlandi</h2> </span>
                                                       <!-- <div class="carouselButton"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                                            <path d="M17.9094 7.85331C18.3897 8.10872 18.7914 8.49 19.0716 8.95629C19.3517 9.42259 19.4997 9.95632 19.4997 10.5003C19.4997 11.0443 19.3517 11.578 19.0716 12.0443C18.7914 12.5106 18.3897 12.8919 17.9094 13.1473L5.09737 20.1143C3.03437 21.2363 0.500366 19.7763 0.500366 17.4683V3.53331C0.500366 1.22331 3.03437 -0.235693 5.09737 0.885307L17.9094 7.85331Z" fill="#F1F8FF"/>
                                                            </svg><span>Qatnashish</span>
                                                        </div> -->
                                                      </div>
                                                      
                                                    </div>
                                                    <button class="carousel-control-prev" type="button " data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                      <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                      <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                 <span class="float-right" style="display:flex; position: absolute; align-items:right !important; right: 10px; bottom: -42px;">
                                                     <img src="{{ asset('img/dashboard_adv.png') }}" width="213"  alt="..." >
                                                 </span>
                                          <!--   </div>
                                         </div> -->
                                               
                                    </div>
                                </div> <!-- end row-->

                                <div class="row">
                                    <div class="p-4"><h1>Fanlar</h1></div>
                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text">
                                                <svg class="m-2 subject_icon_background p-2" xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
                                                  <path d="M17 1H10L6 15L3 9H1M12 9L18 15M12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="textSubjectName"><b class="h4">Oliy matematika</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text">
                                                <img class="m-2 subject_icon_background p-2" src="{{ asset('img/svg/history.svg') }}" width="19" height="16" >
                                                <div class="textSubjectName"><b class="h4">Tarix</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text"><svg class="m-2 subject_icon_background p-2" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">
                                                  <path d="M23.231 21.618L16 11.675V2H18V0H6.00003V2H8.00003V11.675L0.769028 21.618C0.332862 22.2174 0.0710399 22.9259 0.0125339 23.6649C-0.0459721 24.4039 0.101119 25.1447 0.437531 25.8053C0.773943 26.4659 1.28656 27.0206 1.91866 27.4079C2.55076 27.7953 3.27769 28.0002 4.01903 28H19.98C20.7214 28.0002 21.4483 27.7953 22.0804 27.4079C22.7125 27.0206 23.2251 26.4659 23.5615 25.8053C23.8979 25.1447 24.045 24.4039 23.9865 23.6649C23.928 22.9259 23.6662 22.2174 23.23 21.618H23.231ZM10 12.325V2H14V12.325L16.673 16H7.32703L10 12.325ZM19.981 26H4.02003C3.64782 25.9996 3.28296 25.8964 2.96572 25.7017C2.64847 25.507 2.39118 25.2285 2.22225 24.8968C2.05331 24.5652 1.9793 24.1933 2.00838 23.8222C2.03746 23.4511 2.16849 23.0953 2.38703 22.794L5.87303 18H18.127L21.614 22.794C21.8326 23.0953 21.9636 23.4511 21.9927 23.8222C22.0218 24.1933 21.9477 24.5652 21.7788 24.8968C21.6099 25.2285 21.3526 25.507 21.0353 25.7017C20.7181 25.8964 20.3532 25.9996 19.981 26Z" fill="black"/>
                                                </svg>
                                                <div class="textSubjectName"><b class="h4">Kimyo</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text"><img class="m-2 subject_icon_background p-2" src="{{ asset('img/svg/coding.svg') }}" width="19" height="16" >
                                                </svg>
                                                <div class="textSubjectName"><b class="h4">Dasturlash</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text">
                                                <svg class="m-2 subject_icon_background p-2" xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
                                                  <path d="M17 1H10L6 15L3 9H1M12 9L18 15M12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="textSubjectName"><b class="h4">Oliy matematika</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text">
                                                <img class="m-2 subject_icon_background p-2" src="{{ asset('img/svg/history.svg') }}" width="19" height="16" >
                                                <div class="textSubjectName"><b class="h4">Tarix</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text"><svg class="m-2 subject_icon_background p-2" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">
                                                  <path d="M23.231 21.618L16 11.675V2H18V0H6.00003V2H8.00003V11.675L0.769028 21.618C0.332862 22.2174 0.0710399 22.9259 0.0125339 23.6649C-0.0459721 24.4039 0.101119 25.1447 0.437531 25.8053C0.773943 26.4659 1.28656 27.0206 1.91866 27.4079C2.55076 27.7953 3.27769 28.0002 4.01903 28H19.98C20.7214 28.0002 21.4483 27.7953 22.0804 27.4079C22.7125 27.0206 23.2251 26.4659 23.5615 25.8053C23.8979 25.1447 24.045 24.4039 23.9865 23.6649C23.928 22.9259 23.6662 22.2174 23.23 21.618H23.231ZM10 12.325V2H14V12.325L16.673 16H7.32703L10 12.325ZM19.981 26H4.02003C3.64782 25.9996 3.28296 25.8964 2.96572 25.7017C2.64847 25.507 2.39118 25.2285 2.22225 24.8968C2.05331 24.5652 1.9793 24.1933 2.00838 23.8222C2.03746 23.4511 2.16849 23.0953 2.38703 22.794L5.87303 18H18.127L21.614 22.794C21.8326 23.0953 21.9636 23.4511 21.9927 23.8222C22.0218 24.1933 21.9477 24.5652 21.7788 24.8968C21.6099 25.2285 21.3526 25.507 21.0353 25.7017C20.7181 25.8964 20.3532 25.9996 19.981 26Z" fill="black"/>
                                                </svg>
                                                <div class="textSubjectName"><b class="h4">Kimyo</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text"><img class="m-2 subject_icon_background p-2" src="{{ asset('img/svg/coding.svg') }}" width="19" height="16" >
                                                </svg>
                                                <div class="textSubjectName"><b class="h4">Dasturlash</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text">
                                                <svg class="m-2 subject_icon_background p-2" xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
                                                  <path d="M17 1H10L6 15L3 9H1M12 9L18 15M12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="textSubjectName"><b class="h4">Oliy matematika</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text">
                                                <img class="m-2 subject_icon_background p-2" src="{{ asset('img/svg/history.svg') }}" width="19" height="16" >
                                                <div class="textSubjectName"><b class="h4">Tarix</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text"><svg class="m-2 subject_icon_background p-2" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">
                                                  <path d="M23.231 21.618L16 11.675V2H18V0H6.00003V2H8.00003V11.675L0.769028 21.618C0.332862 22.2174 0.0710399 22.9259 0.0125339 23.6649C-0.0459721 24.4039 0.101119 25.1447 0.437531 25.8053C0.773943 26.4659 1.28656 27.0206 1.91866 27.4079C2.55076 27.7953 3.27769 28.0002 4.01903 28H19.98C20.7214 28.0002 21.4483 27.7953 22.0804 27.4079C22.7125 27.0206 23.2251 26.4659 23.5615 25.8053C23.8979 25.1447 24.045 24.4039 23.9865 23.6649C23.928 22.9259 23.6662 22.2174 23.23 21.618H23.231ZM10 12.325V2H14V12.325L16.673 16H7.32703L10 12.325ZM19.981 26H4.02003C3.64782 25.9996 3.28296 25.8964 2.96572 25.7017C2.64847 25.507 2.39118 25.2285 2.22225 24.8968C2.05331 24.5652 1.9793 24.1933 2.00838 23.8222C2.03746 23.4511 2.16849 23.0953 2.38703 22.794L5.87303 18H18.127L21.614 22.794C21.8326 23.0953 21.9636 23.4511 21.9927 23.8222C22.0218 24.1933 21.9477 24.5652 21.7788 24.8968C21.6099 25.2285 21.3526 25.507 21.0353 25.7017C20.7181 25.8964 20.3532 25.9996 19.981 26Z" fill="black"/>
                                                </svg>
                                                <div class="textSubjectName"><b class="h4">Kimyo</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="card p-1 ">
                                            <span class="logo_s_text"><img class="m-2 subject_icon_background p-2" src="{{ asset('img/svg/coding.svg') }}" width="19" height="16" >
                                                </svg>
                                                <div class="textSubjectName"><b class="h4">Dasturlash</b><p class="subject_user_text">Polatov T</p></div>
                                            </span>
                                        </div>
                                    </div>



                                    <div aria-label="..." class="m-3 float-end">
                                      <ul class="pagination">
                                        <li class="page-item disabled">
                                          <span class="page-link p-2">Previous</span>
                                        </li>
                                        <li class="page-item"><a class="page-link p-2" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link p-2" href="#">2</a></li>
                                        <li class="page-item active">
                                          <span class="page-link p-2">
                                            3
                                            <span class="sr-only ">(current)</span>
                                          </span>
                                        </li>
                                        <li class="page-item"><a class="page-link p-2" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link p-2" href="#">5</a></li>
                                        <li class="page-item">
                                          <a class="page-link p-2" href="#">Next</a>
                                        </li>
                                      </ul>
                                    </div>
                                    <hr>
                                   
                                </div>

                               <!-- end row -->

                                <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0 flex-grow-1">Base Example</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="table-gridjs"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                                

                                

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->

                        <div class="col-auto layout-rightside-col bg-white  m-2">
                            <div class="overlay"></div>
                            <div class="layout-rightside">
                                <div class=" h-100  rounded-1">
                                    <div class="card-body pt-3 ">
                                        <div class="pt-3">
                                          <div class="d-flex justify-content-between align-items-center">
                                            <!-- start of student notification -->
                                            <div class="dropdown topbar-head-dropdown ms-1 header-item float-start" id="notificationDropdown">
                                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                                    <i class='bx bx-bell fs-22'></i>
                                                    <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                                                    <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                                        <div class="p-3">
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                                                </div>
                                                                <div class="col-auto dropdown-tabs">
                                                                    <span class="badge bg-light-subtle text-body fs-13"> 4 New</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="px-2 pt-2">
                                                            <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                                                <li class="nav-item waves-effect waves-light">
                                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                                                        All (4)
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item waves-effect waves-light">
                                                                    <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false">
                                                                        Messages
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item waves-effect waves-light">
                                                                    <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false">
                                                                        Alerts
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>

                                                    <div class="tab-content position-relative" id="notificationItemsTabContent">
                                                        <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                                    <div class="d-flex">
                                                                        <div class="avatar-xs me-3 flex-shrink-0">
                                                                            <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                                                <i class="bx bx-badge-check"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <a href="#!" class="stretched-link">
                                                                                <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                                                    Optimization <span class="text-secondary">reward</span> is
                                                                                    ready!
                                                                                </h6>
                                                                            </a>
                                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2 fs-15">
                                                                            <div class="form-check notification-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                                                <label class="form-check-label" for="all-notification-check01"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                                    <div class="d-flex">
                                                                        <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                                                                        <div class="flex-grow-1">
                                                                            <a href="#!" class="stretched-link">
                                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                                            </a>
                                                                            <div class="fs-13 text-muted">
                                                                                <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                                                    graph 🔔.</p>
                                                                            </div>
                                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2 fs-15">
                                                                            <div class="form-check notification-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                                                <label class="form-check-label" for="all-notification-check02"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                                    <div class="d-flex">
                                                                        <div class="avatar-xs me-3 flex-shrink-0">
                                                                            <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                                                <i class='bx bx-message-square-dots'></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <a href="#!" class="stretched-link">
                                                                                <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                                                </h6>
                                                                            </a>
                                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2 fs-15">
                                                                            <div class="form-check notification-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                                                <label class="form-check-label" for="all-notification-check03"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                                    <div class="d-flex">
                                                                        <img src="assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                                                                        <div class="flex-grow-1">
                                                                            <a href="#!" class="stretched-link">
                                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                                            </a>
                                                                            <div class="fs-13 text-muted">
                                                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                                                            </div>
                                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2 fs-15">
                                                                            <div class="form-check notification-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                                                <label class="form-check-label" for="all-notification-check04"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="my-3 text-center view-all">
                                                                    <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                                                        All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                                <div class="text-reset notification-item d-block dropdown-item">
                                                                    <div class="d-flex">
                                                                        <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                        <div class="flex-grow-1">
                                                                            <a href="#!" class="stretched-link">
                                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                                            </a>
                                                                            <div class="fs-13 text-muted">
                                                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                                                            </div>
                                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2 fs-15">
                                                                            <div class="form-check notification-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">
                                                                                <label class="form-check-label" for="messages-notification-check01"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-reset notification-item d-block dropdown-item">
                                                                    <div class="d-flex">
                                                                        <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                        <div class="flex-grow-1">
                                                                            <a href="#!" class="stretched-link">
                                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                                            </a>
                                                                            <div class="fs-13 text-muted">
                                                                                <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                                                    graph 🔔.</p>
                                                                            </div>
                                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2 fs-15">
                                                                            <div class="form-check notification-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02">
                                                                                <label class="form-check-label" for="messages-notification-check02"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-reset notification-item d-block dropdown-item">
                                                                    <div class="d-flex">
                                                                        <img src="assets/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                        <div class="flex-grow-1">
                                                                            <a href="#!" class="stretched-link">
                                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                                            </a>
                                                                            <div class="fs-13 text-muted">
                                                                                <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                                                                </p>
                                                                            </div>
                                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2 fs-15">
                                                                            <div class="form-check notification-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03">
                                                                                <label class="form-check-label" for="messages-notification-check03"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-reset notification-item d-block dropdown-item">
                                                                    <div class="d-flex">
                                                                        <img src="assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                        <div class="flex-grow-1">
                                                                            <a href="#!" class="stretched-link">
                                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                                            </a>
                                                                            <div class="fs-13 text-muted">
                                                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                                                            </div>
                                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2 fs-15">
                                                                            <div class="form-check notification-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04">
                                                                                <label class="form-check-label" for="messages-notification-check04"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="my-3 text-center view-all">
                                                                    <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                                                        All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab"></div>

                                                        <div class="notification-actions" id="notification-actions">
                                                            <div class="d-flex text-muted justify-content-center">
                                                                Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of student notification -->

                                            <!-- start of student profile -->
                                            <div class="dropdown ms-sm-0 bg-none p-2  topbar-user">
                                                <button type="button" class="btn " id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="d-flex ">
                                                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                                        <span class="text-start ms-xl-2">
                                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>
                                                            <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                                                        </span>
                                                    </span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <h6 class="dropdown-header">Welcome Anna!</h6>
                                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                                    <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                                                    <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                                                    <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                                                    <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                                                    <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                                    <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                                                </div>
                                            </div>
                                            <!-- end of student profile -->

                                            

                                          </div>
                                        </div>

                                        <div class="p-">
                                            <span>
                                                 <img class="profile_card_photo mb-0" src="{{ asset('img/user/user.svg') }}">
                                            </span>
                                            <div class="profile_card p-5">
                                                <h4 m-5>Tolibov T</h4>
                                                <div mt-5>toloibov@gmail.com</div>
                                            </div>
                                        
                                        </div>

                                        <div class="p-3 mt-2">
                                            <h1 class=" mb-3 text_test">Hozirgi testlar
                                            </h1 >

                                            <div>
                                                 <img class="m-2 subject_icon_background p-2" src="{{ asset('img/svg/history.svg') }}" width="19" height="16" >
                                                 <span class="mb-5">ffdgfd</span>
                                            </div>
                                        </div>
                                        


                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end .rightbar-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

    
        <!-- end main content-->



@endsection
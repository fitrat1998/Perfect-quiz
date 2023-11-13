@extends('../layouts.app')
@section('content')

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

                                <div class="profile_card_main">

                                    <span>
                                         <img class="profile_card_photo caption " src="{{ asset('img/user/user.svg') }}">
                                    </span>
                                    <div class="profile_card  p-5">
                                        <h4 m-5>Tolibov T</h4>
                                        <div class="user_bottom_text">
                                            <p>tolibov@gmail.com</p>
                                            <div class="statics padding-3">
                                                <div class="img">
                                                    <div class="user_bottom_icon "><img src="{{ asset('img/user/Arrow2.png') }}"> 
                                                        <span class="">32(+2%)</span></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                
                                </div>


                                <div class="subject-box p-3 mt-2 ">
                                    <h1 class=" mb-3 text_test">Hozirgi testlar</h1 >

                                    <div class="subject-box-item">
                                         <img class="subject_icon_background p-2" src="{{ asset('img/svg/history.svg') }}" width="19" height="16" >
                                         <div class="box-text">
                                            <div class="box-text-top">
                                                <div class="box-text-top-1">
                                                    <p>Matematika</p>
                                                </div>
                                                <div class="box-text-top-2">
                                                    <p>48</p>
                                                </div>
                                            </div>
                                            <div class="box-text-bottom">
                                                <div class="box-text-bottom-1">
                                                    <p>Bugun</p>
                                                </div>
                                                <div class="box-text-bottom-2">
                                                    <p>Qatnashuvchi</p>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                     <div class="subject-box-item">
                                         <img class="subject_icon_background p-2" src="{{ asset('img/svg/history.svg') }}" width="19" height="16" >
                                         <div class="box-text">
                                            <div class="box-text-top">
                                                <div class="box-text-top-1">
                                                    <p>Matematika</p>
                                                </div>
                                                <div class="box-text-top-2">
                                                    <p>48</p>
                                                </div>
                                            </div>
                                            <div class="box-text-bottom">
                                                <div class="box-text-bottom-1">
                                                    <p>Bugun</p>
                                                </div>
                                                <div class="box-text-bottom-2">
                                                    <p>Qatnashuvchi</p>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                     <div class="subject-box-item">
                                         <img class="subject_icon_background p-2" src="{{ asset('img/svg/history.svg') }}" width="19" height="16" >
                                         <div class="box-text">
                                            <div class="box-text-top">
                                                <div class="box-text-top-1">
                                                    <p>Matematika</p>
                                                </div>
                                                <div class="box-text-top-2">
                                                    <p>48</p>
                                                </div>
                                            </div>
                                            <div class="box-text-bottom">
                                                <div class="box-text-bottom-1">
                                                    <p>Bugun</p>
                                                </div>
                                                <div class="box-text-bottom-2">
                                                    <p>Qatnashuvchi</p>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                     <div class="subject-box-item">
                                         <img class="subject_icon_background p-2" src="{{ asset('img/svg/history.svg') }}" width="19" height="16" >
                                         <div class="box-text">
                                            <div class="box-text-top">
                                                <div class="box-text-top-1">
                                                    <p>Matematika</p>
                                                </div>
                                                <div class="box-text-top-2">
                                                    <p>48</p>
                                                </div>
                                            </div>
                                            <div class="box-text-bottom">
                                                <div class="box-text-bottom-1">
                                                    <p>Bugun</p>
                                                </div>
                                                <div class="box-text-bottom-2">
                                                    <p>Qatnashuvchi</p>
                                                </div>
                                            </div>
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
@extends('layouts.app')
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
                                <button type="button float-end"
                                    class="btn btn-soft-info btn-icon waves-effect waves-light layout-rightside-btn"><i
                                        class="ri-pulse-line"></i></button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="p-4">
                                <h1>Fanlar</h1>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text">
                                        <svg class="m-2 subject_icon_background p-2" xmlns="http://www.w3.org/2000/svg"
                                            width="19" height="16" viewBox="0 0 19 16" fill="none">
                                            <path d="M17 1H10L6 15L3 9H1M12 9L18 15M12 15L18 9" stroke="black"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="textSubjectName"><b class="h4">Oliy matematika</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text">
                                        <img class="m-2 subject_icon_background p-2"
                                            src="{{ asset('img/svg/history.svg') }}" width="19" height="16">
                                        <div class="textSubjectName"><b class="h4">Tarix</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text"><svg class="m-2 subject_icon_background p-2"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="28"
                                            viewBox="0 0 24 28" fill="none">
                                            <path
                                                d="M23.231 21.618L16 11.675V2H18V0H6.00003V2H8.00003V11.675L0.769028 21.618C0.332862 22.2174 0.0710399 22.9259 0.0125339 23.6649C-0.0459721 24.4039 0.101119 25.1447 0.437531 25.8053C0.773943 26.4659 1.28656 27.0206 1.91866 27.4079C2.55076 27.7953 3.27769 28.0002 4.01903 28H19.98C20.7214 28.0002 21.4483 27.7953 22.0804 27.4079C22.7125 27.0206 23.2251 26.4659 23.5615 25.8053C23.8979 25.1447 24.045 24.4039 23.9865 23.6649C23.928 22.9259 23.6662 22.2174 23.23 21.618H23.231ZM10 12.325V2H14V12.325L16.673 16H7.32703L10 12.325ZM19.981 26H4.02003C3.64782 25.9996 3.28296 25.8964 2.96572 25.7017C2.64847 25.507 2.39118 25.2285 2.22225 24.8968C2.05331 24.5652 1.9793 24.1933 2.00838 23.8222C2.03746 23.4511 2.16849 23.0953 2.38703 22.794L5.87303 18H18.127L21.614 22.794C21.8326 23.0953 21.9636 23.4511 21.9927 23.8222C22.0218 24.1933 21.9477 24.5652 21.7788 24.8968C21.6099 25.2285 21.3526 25.507 21.0353 25.7017C20.7181 25.8964 20.3532 25.9996 19.981 26Z"
                                                fill="black" />
                                        </svg>
                                        <div class="textSubjectName"><b class="h4">Kimyo</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text"><img class="m-2 subject_icon_background p-2"
                                            src="{{ asset('img/svg/coding.svg') }}" width="19" height="16">
                                        </svg>
                                        <div class="textSubjectName"><b class="h4">Dasturlash</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text">
                                        <svg class="m-2 subject_icon_background p-2" xmlns="http://www.w3.org/2000/svg"
                                            width="19" height="16" viewBox="0 0 19 16" fill="none">
                                            <path d="M17 1H10L6 15L3 9H1M12 9L18 15M12 15L18 9" stroke="black"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="textSubjectName"><b class="h4">Oliy matematika</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text">
                                        <img class="m-2 subject_icon_background p-2"
                                            src="{{ asset('img/svg/history.svg') }}" width="19" height="16">
                                        <div class="textSubjectName"><b class="h4">Tarix</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text"><svg class="m-2 subject_icon_background p-2"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="28"
                                            viewBox="0 0 24 28" fill="none">
                                            <path
                                                d="M23.231 21.618L16 11.675V2H18V0H6.00003V2H8.00003V11.675L0.769028 21.618C0.332862 22.2174 0.0710399 22.9259 0.0125339 23.6649C-0.0459721 24.4039 0.101119 25.1447 0.437531 25.8053C0.773943 26.4659 1.28656 27.0206 1.91866 27.4079C2.55076 27.7953 3.27769 28.0002 4.01903 28H19.98C20.7214 28.0002 21.4483 27.7953 22.0804 27.4079C22.7125 27.0206 23.2251 26.4659 23.5615 25.8053C23.8979 25.1447 24.045 24.4039 23.9865 23.6649C23.928 22.9259 23.6662 22.2174 23.23 21.618H23.231ZM10 12.325V2H14V12.325L16.673 16H7.32703L10 12.325ZM19.981 26H4.02003C3.64782 25.9996 3.28296 25.8964 2.96572 25.7017C2.64847 25.507 2.39118 25.2285 2.22225 24.8968C2.05331 24.5652 1.9793 24.1933 2.00838 23.8222C2.03746 23.4511 2.16849 23.0953 2.38703 22.794L5.87303 18H18.127L21.614 22.794C21.8326 23.0953 21.9636 23.4511 21.9927 23.8222C22.0218 24.1933 21.9477 24.5652 21.7788 24.8968C21.6099 25.2285 21.3526 25.507 21.0353 25.7017C20.7181 25.8964 20.3532 25.9996 19.981 26Z"
                                                fill="black" />
                                        </svg>
                                        <div class="textSubjectName"><b class="h4">Kimyo</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text"><img class="m-2 subject_icon_background p-2"
                                            src="{{ asset('img/svg/coding.svg') }}" width="19" height="16">
                                        </svg>
                                        <div class="textSubjectName"><b class="h4">Dasturlash</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text">
                                        <svg class="m-2 subject_icon_background p-2" xmlns="http://www.w3.org/2000/svg"
                                            width="19" height="16" viewBox="0 0 19 16" fill="none">
                                            <path d="M17 1H10L6 15L3 9H1M12 9L18 15M12 15L18 9" stroke="black"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="textSubjectName"><b class="h4">Oliy matematika</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text">
                                        <img class="m-2 subject_icon_background p-2"
                                            src="{{ asset('img/svg/history.svg') }}" width="19" height="16">
                                        <div class="textSubjectName"><b class="h4">Tarix</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text"><svg class="m-2 subject_icon_background p-2"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="28"
                                            viewBox="0 0 24 28" fill="none">
                                            <path
                                                d="M23.231 21.618L16 11.675V2H18V0H6.00003V2H8.00003V11.675L0.769028 21.618C0.332862 22.2174 0.0710399 22.9259 0.0125339 23.6649C-0.0459721 24.4039 0.101119 25.1447 0.437531 25.8053C0.773943 26.4659 1.28656 27.0206 1.91866 27.4079C2.55076 27.7953 3.27769 28.0002 4.01903 28H19.98C20.7214 28.0002 21.4483 27.7953 22.0804 27.4079C22.7125 27.0206 23.2251 26.4659 23.5615 25.8053C23.8979 25.1447 24.045 24.4039 23.9865 23.6649C23.928 22.9259 23.6662 22.2174 23.23 21.618H23.231ZM10 12.325V2H14V12.325L16.673 16H7.32703L10 12.325ZM19.981 26H4.02003C3.64782 25.9996 3.28296 25.8964 2.96572 25.7017C2.64847 25.507 2.39118 25.2285 2.22225 24.8968C2.05331 24.5652 1.9793 24.1933 2.00838 23.8222C2.03746 23.4511 2.16849 23.0953 2.38703 22.794L5.87303 18H18.127L21.614 22.794C21.8326 23.0953 21.9636 23.4511 21.9927 23.8222C22.0218 24.1933 21.9477 24.5652 21.7788 24.8968C21.6099 25.2285 21.3526 25.507 21.0353 25.7017C20.7181 25.8964 20.3532 25.9996 19.981 26Z"
                                                fill="black" />
                                        </svg>
                                        <div class="textSubjectName"><b class="h4">Kimyo</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-1 ">
                                    <span class="logo_s_text"><img class="m-2 subject_icon_background p-2"
                                            src="{{ asset('img/svg/coding.svg') }}" width="19" height="16">
                                        </svg>
                                        <div class="textSubjectName"><b class="h4">Dasturlash</b>
                                            <p class="subject_user_text">Polatov T</p>
                                        </div>
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
                    </div> <!-- end .h-100-->

                </div> <!-- end col -->

               

       
        @endsection

<!DOCTYPE html>
<html lang="en" class="material-style layout-fixed layout-header-fixed">


<!-- Mirrored from html.phoenixcoded.net/auric/bootstrap/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 23:58:53 GMT -->
<head>
    <title>Auric | B4+ admin template</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Auric Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Auric, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" class="style-link">
     <!-- datatables -->
     <link rel="stylesheet" href="{{asset('assets/libs/datatables/datatables.css')}}">
     <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->
    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            @include('layout.sidenav')
            <!-- [ Layout sidenav ] End -->

            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                @include('layout.navbar-header')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">
                    <!-- [ content ] Start -->
                    {{-- yield tempatnya section untuk memunculkan --}}
                    @yield('content')
                    <!-- [ content ] End -->
                    <!-- [ Layout footer ] Start -->
                    @include('layout.footer')
                    <!-- [ Layout footer ] End -->
                    <!-- [ theme customizer ] start -->
                    <button type="button" class="ui-cust-btn" data-toggle="modal" data-target="#modals-layout-cust"><span class="ui-cust-icon"></span></button>
                    <!-- Modal template -->
                    <div class="modal modal-slide ui-builder fade" id="modals-layout-cust">
                        <div class="modal-dialog">
                            <div class="modal-content pt-0 pb-0">
                                <div class="modal-header bg-dark rounded-0 py-4">
                                    <h5 class="modal-title text-white mb-0">Auric Live UI Personalize</h5>
                                    <button type="button" class="close text-white mt-2" data-dismiss="modal" aria-label="Close">×</button>
                                </div>
                                <div class="modal-body mt-4 pt-4">
                                    <div class="scroll-div mst-scroll">
                                        <h5>Fixed SideNav [ Menu ]</h5>
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input" id="nav-fixed" checked>
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes">
                                                    <span class="ion ion-md-checkmark"></span>
                                                </span>
                                                <span class="switcher-no">
                                                    <span class="ion ion-md-close"></span>
                                                </span>
                                            </span>
                                            <span class="switcher-label">Fixed</span>
                                        </label><br>
                                        <hr>
                                        <h5>Fixed Navbar [ Header ]</h5>
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input" id="header-fixed" checked>
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes">
                                                    <span class="ion ion-md-checkmark"></span>
                                                </span>
                                                <span class="switcher-no">
                                                    <span class="ion ion-md-close"></span>
                                                </span>
                                            </span>
                                            <span class="switcher-label">Fixed</span>
                                        </label><br>
                                        <hr>
                                        <h5>Dark Layout</h5>
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input" id="dark-layout">
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes">
                                                    <span class="ion ion-md-checkmark"></span>
                                                </span>
                                                <span class="switcher-no">
                                                    <span class="ion ion-md-close"></span>
                                                </span>
                                            </span>
                                            <span class="switcher-label">Dark Layout</span>
                                        </label><br>
                                        <hr>
                                        <h5>Header background</h5>
                                        <div class="layout header-color">
                                            <a href="#!" class=" active" data-val="bg-white"></a>
                                            <a href="#!" class="" data-val="bg-primary"></a>
                                            <a href="#!" class="" data-val="bg-danger"></a>
                                            <a href="#!" class="" data-val="bg-success"></a>
                                            <a href="#!" class="" data-val="bg-warning"></a>
                                            <a href="#!" class="" data-val="bg-info"></a>
                                            <a href="#!" class="" data-val="bg-dark"></a>
                                        </div>
                                        <hr>
                                        <h5>Sidenav background</h5>
                                        <div class="layout sidenav-color">
                                            <a href="#!" class=" active" data-val="bg-white"></a>
                                            <a href="#!" class="" data-val="bg-primary"></a>
                                            <a href="#!" class="" data-val="bg-danger"></a>
                                            <a href="#!" class="" data-val="bg-success"></a>
                                            <a href="#!" class="" data-val="bg-warning"></a>
                                            <a href="#!" class="" data-val="bg-info"></a>
                                            <a href="#!" class="" data-val="bg-dark"></a>
                                        </div>
                                        <hr>
                                        <h5>Footer background</h5>
                                        <div class="layout footer-color">
                                            <a href="#!" class=" active" data-val="bg-white"></a>
                                            <a href="#!" class="" data-val="bg-primary"></a>
                                            <a href="#!" class="" data-val="bg-danger"></a>
                                            <a href="#!" class="" data-val="bg-success"></a>
                                            <a href="#!" class="" data-val="bg-warning"></a>
                                            <a href="#!" class="" data-val="bg-info"></a>
                                            <a href="#!" class="" data-val="bg-dark"></a>
                                        </div>
                                        <hr>
                                    </div>
                                    <button type="button" class="btn btn-light-danger btn-block layout-reset">Reset</button>
                                </div>
                                <div class="modal-footer">
                                    <a href="http://html.phoenixcoded.net/auric/documentation/index.html" target="_blank" type="button" class="btn btn-primary btn-block">Document</a>
                                    <a href="http://html.phoenixcoded.net/auric/" target="_blank" type="button" class="btn btn-success btn-block">Buy Now</a>
                                    <button type="button" class="btn btn-light-secondary btn-block" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ theme customizer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->
    <!-- Core scripts -->
    <script src="{{asset('assets/js/vendor.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('assets/libs/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard-main.js')}}"></script>
    <!-- Demo -->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- datatable -->
    <script src="{{asset('assets/libs/datatables/datatables.js')}}"></script>
    <script src="{{asset('assets/js/pages/tables_datatables.js')}}"></script>
</body>


<!-- Mirrored from html.phoenixcoded.net/auric/bootstrap/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Aug 2022 00:02:53 GMT -->
</html>
